<?php
    //src/Controller/EventsController
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class EventsController extends AbstractController {
        
        /**
            * @Route ("/events", name="events")
        */
        public function events()
        {
            return $this->render('pages/events.html.twig');
        }
    }