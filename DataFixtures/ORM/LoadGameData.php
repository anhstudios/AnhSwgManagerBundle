<?php

namespace Anh\SwgManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Finder\Finder;

class LoadGameData implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load($manager)
    {
        /** @var $connection \Doctrine\DBAL\Connection */
        $connection = $this->container->get("database_connection");

        $finder = new Finder();
        $finder->files()->in(__DIR__.'/../../Resources/sql/data')->name("*.sql");

        /** @var $file \SplFileInfo */
        foreach ($finder as $file) {
            $sql = file_get_contents($file->getRealpath());
            $inserts = preg_split("/;/", $sql);

            print "Loading ".$file->getBasename('.sql')."\n";
            
            foreach($inserts as $insert) {
                $insert = trim($insert);
                if (!empty($insert) && strlen($insert) != 0) {
                    $connection->exec($insert);
                }
            }
        }
    }
}
