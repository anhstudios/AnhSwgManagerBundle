<?php

namespace Anh\SwgManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Finder\Finder;

class LoadStoredProcs implements FixtureInterface, ContainerAwareInterface
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
        $finder->files()->in(__DIR__.'/../../Resources/sql/procedures')
                        ->in(__DIR__.'/../../Resources/sql/functions')->name("*.sql");

        /** @var $file \SplFileInfo */
        foreach ($finder as $file) {
            $sql = file_get_contents($file->getRealpath());

            print "Loading ".$file->getBasename('.sql')."\n";
            $connection->exec($sql);
        }
    }
}
