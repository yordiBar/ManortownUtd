<?php
    //src/Controller/CommitteeController
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class CommitteeController extends AbstractController {

        /**
            * @Route ("/comm", name="comm")
        */
        public function home() {
            
            return $this->render('pages/committee.html.twig');
        }
    }