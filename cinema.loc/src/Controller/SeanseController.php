<?php

namespace App\Controller;

use App\Entity\Seanse;
use App\Form\SeanseType;
use App\Repository\SeanseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/seanse")
 */
class SeanseController extends AbstractController
{
    /**
     * @Route("/", name="seanse_index", methods={"GET"})
     */
    public function index(SeanseRepository $seanseRepository): Response
    {
        return $this->render('seanse/index.html.twig', [
            'seanses' => $seanseRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="seanse_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $seanse = new Seanse();
        $form = $this->createForm(SeanseType::class, $seanse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($seanse);
            $entityManager->flush();

            return $this->redirectToRoute('seanse_index');
        }

        return $this->render('seanse/new.html.twig', [
            'seanse' => $seanse,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="seanse_show", methods={"GET"})
     */
    public function show(Seanse $seanse): Response
    {
        return $this->render('seanse/show.html.twig', [
            'seanse' => $seanse,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="seanse_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Seanse $seanse): Response
    {
        $form = $this->createForm(SeanseType::class, $seanse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('seanse_index');
        }

        return $this->render('seanse/edit.html.twig', [
            'seanse' => $seanse,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="seanse_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Seanse $seanse): Response
    {
        if ($this->isCsrfTokenValid('delete'.$seanse->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($seanse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('seanse_index');
    }
}
