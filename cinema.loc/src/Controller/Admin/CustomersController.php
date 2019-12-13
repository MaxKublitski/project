<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\CustomersType;
use App\Repository\CustomersRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CustomersController
 * @package App\Controller\Admin
 * @Route ("/admin/customers")
 * @IsGranted("ROLE_ADMIN")
 */
class CustomersController extends AbstractController
{
    /**
     * @Route("/", name="admin_customers_index", methods={"GET"})
     */
    public function index(CustomersRepository $customersRepository): Response
    {
        return $this->render('admin/customers/index.html.twig', [
            'users' => $customersRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_customers_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(CustomersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('admin_customers_index');
        }

        return $this->render('admin/customers/new.html.twig', [
            'users' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_customers_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('admin/customers/show.html.twig', [
            'users' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_customers_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(CustomersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_customers_index');
        }

        return $this->render('admin/customers/edit.html.twig', [
            'users' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_customers_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_customers_index');
    }
}
