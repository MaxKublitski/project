<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SignUpType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SignUpController extends AbstractController
/**
* @Route("/sign_up")
*/
{
    /**
     * @Route("/", name="sign_up")
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();

        $user = new User();
        $form = $this->createForm(SignUpType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $password = $encoder->encodePassword($user, $user->getPassword());
//            $user = $form->getData();
            $user->setEmail($user->getEmail());
            $user->setRoles(['ROLE_USER']);
            $user->setPassword($password);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('main', [
                'email' => $user->getEmail()
            ]);
        }

        return $this->render('sign_up/index.html.twig', [
            'form' => $form->createView(),
            ]);
    }

    /**
     * @Route("/edit", name="user_data_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user)
    {
        $form = $this->createForm(SignUpType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sign_up/edit.html.twig');
        }

        return $this->render('sign_up/edit.html.twig', [
            'email' => $user,
            'form' => $form->createView(),
        ]);
    }
}
