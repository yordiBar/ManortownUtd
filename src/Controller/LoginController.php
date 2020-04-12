<?php
    //src/Controller/GalleryController
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class LoginController extends AbstractController {

        /**
            * @Route ("/login", name="login")
        */
        public function login()
        {
            return $this->render('pages/login.html.twig');
        }
    }
