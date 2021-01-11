<?php

namespace MVCSkeleton\Control\Controller;

use MVCSkeleton\Doctrine\Helper\EntityManagerFactory;

class Index implements InterfaceRequestController
{
    public function __construct()
    {
        $emf = new EntityManagerFactory();
        $em = $emf->getEntityManager();
    }

    public function processRequest(): void
    {
        include __DIR__ . '/../../view/index.php';
    }
}