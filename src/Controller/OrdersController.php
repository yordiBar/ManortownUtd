<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    /**
     * @Route("/orders", name="orders")
     */
    public function index()
    {
        $orders = $this->getDoctrine()->getRepository('App:Orders')->findAll();
        
        return $this->render('orders/index.html.twig', [
            'orders' => $orders,
        ]);
    }
}
