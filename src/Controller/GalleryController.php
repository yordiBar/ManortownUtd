<?php
    //src/Controller/GalleryController
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class GalleryController extends AbstractController {

        /**
            * @Route ("/gallery", name="gallery")
        */
        public function gallery()
        {
            return $this->render('pages/gallery.html.twig');
        }
    }