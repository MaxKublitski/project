<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SeanseController extends AbstractController
{
    /**
     * @Route("/admin/seanse", name="admin_seanse")
     */
    public function index()
    {
        return $this->render('admin/seanse/index.html.twig', [
            'controller_name' => 'SeanseController',
        ]);
    }
}
