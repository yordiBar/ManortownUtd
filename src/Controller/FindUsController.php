<?php
    //src/Controller/FindUsController
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class FindUsController extends AbstractController {

        /**
            * @Route ("/findUs", name="findUs")
        */
        public function home() {
            
            return $this->render('pages/findUs.html.twig');
        }
    }