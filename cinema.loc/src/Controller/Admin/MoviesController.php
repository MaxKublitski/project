<?php

namespace App\Controller\Admin;

use App\Entity\Movies;
use App\Form\MoviesType;
use App\Repository\MoviesRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HallController
 * @package App\Controller\Admin
 * @Route ("/admin/movies")
 * @IsGranted("ROLE_ADMIN")
 */
class MoviesController extends AbstractController
{
    /**
     * @Route("/", name="admin_movies_index")
     */
    public function index(MoviesRepository $moviesRepository): Response
    {
        return $this->render('admin/movies/index.html.twig', [
            'movies' => $moviesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_movies_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $movie = new Movies();
        $form = $this->createForm(MoviesType::class, $movie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($movie);
            $entityManager->flush();

            return $this->redirectToRoute('admin_movies_index');
        }

        return $this->render('admin/movies/new.html.twig', [
            'movie' => $movie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_movies_show", methods={"GET"})
     */
    public function show(Movies $movie): Response
    {
        return $this->render('admin/movies/show.html.twig', [
            'movie' => $movie,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_movies_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Movies $movie): Response
    {
        $form = $this->createForm(MoviesType::class, $movie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin/movies_index');
        }

        return $this->render('admin/movies/edit.html.twig', [
            'movie' => $movie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_movies_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Movies $movie): Response
    {
        if ($this->isCsrfTokenValid('delete'.$movie->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($movie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_movies_index');
    }
}