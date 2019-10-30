<?php

namespace App\Controller;

use App\Entity\Hall;
use App\Form\HallType;
use App\Repository\HallRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/hall")
 * @IsGranted("ROLE_USER")
 */
class HallController extends AbstractController
{
    /**
     * @Route("/", name="hall_index", methods={"GET"})
     */
    public function index(HallRepository $hallRepository): Response
    {
        return $this->render('hall/index.html.twig', [
            'halls' => $hallRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="hall_show", methods={"GET"})
     */
    public function show(Hall $hall): Response
    {
        return $this->render('hall/show.html.twig', [
            'hall' => $hall,
        ]);
    }
}
