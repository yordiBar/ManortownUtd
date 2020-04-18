<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Products;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
        $products = $this->getDoctrine()->getRepository('App:Products')->findAll();

        return $this->render('shop/index.html.twig',
        ['products' => $products]);
    }

    /**
     * @Route("/product/save)
     */
    // public function save()
    // {
    //     $request = Request::createFromGlobals();

    //     $id = $request->request->get('type', 'none');

    //     $entityManager = $this->getDoctrine()->getManager();

    //     $product = new Products();
    //     $product-setName($name);
    // }
}