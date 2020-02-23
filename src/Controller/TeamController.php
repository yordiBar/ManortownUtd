<?php
    //src/Controller/TeamController
    namespace App\Controller;

use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OrderBy;
use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class TeamController extends AbstractController {


        /**
            * @Route ("/team", name="team")
        */
        public function listAction()
        {
            $teams = $this->getDoctrine()->getRepository('App:Team')->findAll();
            
            return $this->render('pages/team.html.twig', ['teams' => $teams]);
        }
    }