<?php
    //src/Controller/ApiController
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class NewsController extends AbstractController {


        /**
            * @Route ("/news", name="news")
        */
        public function newsAPI()
        {
            return $this->render('api/news.html.twig');
        }
    }
