<?php
    //src/Controller/RegisterController
    //unused controller

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class RegisterController extends AbstractController {

        /**
            * @Route ("/register", name="register")
        */
        public function register()
        {
            return $this->render('pages/register.html.twig', [
                'controller_name' => 'RegisterController',
            ]);
        }
    }
