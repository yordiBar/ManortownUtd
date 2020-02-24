<?php
    //src/Controller/CoachesController
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class CoachesController extends AbstractController {


        /**
            * @Route ("/coach", name="coach")
        */
        public function listAction()
        {
            $teams = $this->getDoctrine()->getRepository('App:Team')->findAll();
            
            return $this->render('pages/managerContact.html.twig', ['teams' => $teams]);
        }
    }