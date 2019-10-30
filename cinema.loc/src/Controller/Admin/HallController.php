<?php

namespace App\Controller\Admin;

use App\Entity\Hall;
use App\Form\HallType;
use App\Repository\HallRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HallController
 * @package App\Controller\Admin
 * @Route ("/admin/hall")
 * @IsGranted("ROLE_ADMIN")
 */
class HallController extends AbstractController
{
    /**
     * @Route("/", name="admin_hall_index", methods={"GET"})
     */
    public function index(HallRepository $hallRepository): Response
    {
        return $this->render('admin/hall/index.html.twig', [
            'halls' => $hallRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_hall_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $hall = new Hall();
        $form = $this->createForm(HallType::class, $hall);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($hall);
            $entityManager->flush();

            return $this->redirectToRoute('admin_hall_index');
        }

        return $this->render('admin/hall/new.html.twig', [
            'hall' => $hall,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_hall_show", methods={"GET"})
     */
    public function show(Hall $hall): Response
    {
        return $this->render('admin/hall/show.html.twig', [
            'hall' => $hall,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_hall_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Hall $hall): Response
    {
        $form = $this->createForm(HallType::class, $hall);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_hall_index');
        }

        return $this->render('admin/hall/edit.html.twig', [
            'hall' => $hall,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_hall_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Hall $hall): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hall->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($hall);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_hall_index');
    }
}


