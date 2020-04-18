<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CatchTheData extends AbstractController
{
    /**
     * @Route("/catchTheData", name="catch") methods={"GET","POST"}
     */
    public function index()
    {
        $request = Request::createFromGlobals(); // the envelope, and were looking inside it.

        $type = $request->request->get('type', 'none');
        if($type == 'checkifusernameexists'){

             // catch the username
             $name = $request->request->get('un', 'this is the default word');

             $repository = $this->getDoctrine()->getRepository(User::class);

             $user = $repository->findOneBy(['username' => $name]);
             if($user){
                         return new Response(
                     'user exists!'
                    );
             } else {

                    return new Response(
                        'doesnt exist'
                    );
             }

        }
        else if($type == 'checkacctype'){

            $name = $request->request->get('un', 'this is the default word');

            $pass = $request->request->get('pw', 'password');


            $repository = $this->getDoctrine()->getRepository(User::class);


             $user = $repository->findOneBy(['username' => $name]);
             if($user){
                         return new Response(
                     $user->getAccType()
                    );
             }


        }


        else if($type == 'insertnewuser'){

        $name = $request->request->get('un', 'this is the default word');

        $email = $request->request->get('em', 'email');

        $pass = $request->request->get('pw', 'password');

        // to work the objects
        $entityManager = $this->getDoctrine()->getManager();

        // create blank entity of type "User"
        $login = new User();

        $login->setUsername($name);
        $login->setEmail($email);
        $login->setPassword($pass);



        $entityManager->persist($login);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();


        return new Response(
            'it went into the database'
        );

       }

         return new Response(
            'it went into the database'
        );
    }
}
