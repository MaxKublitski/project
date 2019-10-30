<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    /**
     * @Route("/admin/orders", name="admin_orders")
     */
    public function index()
    {
        return $this->render('admin/orders/index.html.twig', [
            'controller_name' => 'OrdersController',
        ]);
    }
}
