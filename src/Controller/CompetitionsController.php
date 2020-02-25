<?php
    //src/Controller/CompetitionsController
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class CompetitionsController extends AbstractController {

        /**
            * @Route ("/comp", name="comp")
        */
        public function home() {
            
            return $this->render('pages/competitions.html.twig');
        }
    }