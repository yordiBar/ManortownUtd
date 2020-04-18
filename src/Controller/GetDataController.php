<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;

class GetDataController extends AbstractController
{
    /**
     * @Route("/SimpleGet", name="index")
     */
    public function index()
    {
        $request = Request::createFromGlobals();

        $id = $request->request->get('type', 'none');

    // Search for the person with the ID 2
        $person = $this->getDoctrine()->getRepository(User::class) // the type of the entity
        ->findBy['id'.$id]; // ID number of the row in the database table.

        // get the entity manager and delete the records
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($person);
        $entityManager->flush();

        if (!$person) {
            throw $this->createNotFoundException(
                'No person found for id '.$id
            );
    }

    return new Response('Hello there: '.$person->getUsername());
    }
}
