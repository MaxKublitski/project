<?php

namespace App\Controller\Admin;

use App\Entity\Seanse;
use App\Form\SeanseType;
use App\Repository\SeanseRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HallController
 * @package App\Controller\Admin
 * @Route ("/admin/seanse")
 * @IsGranted("ROLE_ADMIN")
 */
class SeanseController extends AbstractController
{
    /**
     * @Route("/", name="admin_seanse_index", methods={"GET"})
     */
    public function index(SeanseRepository $seanseRepository): Response
    {
        return $this->render('admin/seanse/index.html.twig', [
            'seanses' => $seanseRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_seanse_new", methods={"GET","POST"})
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

            return $this->redirectToRoute('admin_seanse_index');
        }

        return $this->render('admin/seanse/new.html.twig', [
            'seanse' => $seanse,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_seanse_show", methods={"GET"})
     */
    public function show(Seanse $seanse): Response
    {
        return $this->render('admin/seanse/show.html.twig', [
            'seanse' => $seanse,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_seanse_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Seanse $seanse): Response
    {
        $form = $this->createForm(SeanseType::class, $seanse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_seanse_index');
        }

        return $this->render('admin/seanse/edit.html.twig', [
            'seanse' => $seanse,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_seanse_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Seanse $seanse): Response
    {
        if ($this->isCsrfTokenValid('delete'.$seanse->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($seanse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_seanse_index');
    }
}
