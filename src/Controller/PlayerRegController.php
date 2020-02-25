<?php
    //src/Controller/PlayerRegController
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class PlayerRegController extends AbstractController {

        /**
            * @Route ("/playerReg", name="playerReg")
        */
        public function home() {
            
            return $this->render('pages/playerRegistration.html.twig');
        }
    }