<?php
    //src/Controller/GalleryController
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController {

        /**
            * @Route ("/login", name="login")
        */
        public function login(Request $request, AuthenticationUtils $utils)
        {
            $error = $utils->getLastAuthenticationError();
            $lastUsername = $utils->getLastUsername();

            return $this->render('pages/login.html.twig',
            ['error' => $error, 'lastUsername' => $lastUsername]);
        }
    }
