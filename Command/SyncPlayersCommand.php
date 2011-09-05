<?php

namespace Anh\SwgManagerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Anh\SwgManagerBundle\Entity\Player;

/**
 * @note: later on we can add flags to sync with multiple types of sources.
 * For now we are just syncing with an AnhGalaxyManagerBundle instance.
 */
class SyncPlayersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('swg:players:sync')
            ->setDescription('Sync player table with the master galaxy manager instance')
            ->addArgument('maxAccounts', InputArgument::OPTIONAL, 'How many characters to allow?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $maxAccounts = $input->getArgument('maxAccounts');
        if (!$maxAccounts) {
            $maxAccounts = 4;
        }

        $doctrine = $this->getContainer()->get('doctrine');

        $accounts = $doctrine->getEntityManager('galaxy_manager')->getRepository('AnhGalaxyManagerBundle:Account')
                             ->findAll();

        foreach($accounts as $account) {
            $player = $doctrine->getRepository('AnhSwgManagerBundle:Player')
                             ->findOneById($account->getId());

            if (!$player) {
                $output->writeln('<info>Adding player entry for user: '. $account->getUsername() .'</info>');

                $player = new Player();
                $player->setReferenceId($account->getId());
                $player->setMaxCharacters($maxAccounts);

                $em = $doctrine->getEntityManager('galaxy');
                $em->persist($player);
                $em->flush();
            }
        }
    }
}