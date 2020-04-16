<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    /**
     * @Route("/shop", name="shop")
     */
    public function index()
    {
        $products = $this->getDoctrine()->getRepository('App:Products')->findAll();

        return $this->render('shop/index.html.twig',
        ['products' => $products]);
    }
}
