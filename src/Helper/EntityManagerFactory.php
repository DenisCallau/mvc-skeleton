<?php

namespace MVCSkeleton\Doctrine\Helper;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class EntityManagerFactory
{
    /**
     * 
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration([$rootDir . '/src'], true);
        $connection = [
            'driver' => '',
            'user' => '',
            'password' => '',
            'dbname' => '',
        ];
        return EntityManager::create($connection, $config);
    }
}

