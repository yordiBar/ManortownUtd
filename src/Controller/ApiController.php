<?php
    //src/Controller/ApiController
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class ApiController extends AbstractController {


        /**
            * @Route ("/api", name="api")
        */
        public function weatherAPI()
        {
          return $this->render('api/weather.html.twig');
        }
    }
