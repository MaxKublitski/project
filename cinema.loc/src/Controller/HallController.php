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
 * Class HallController
 * @package App\Controller
 * @Route("/hall")
 * @IsGranted("ROLE_USER")
 */
class HallController extends AbstractController
{
    private $hallRepository;

    public function __construct(HallRepository $hallRepository)
    {
        $this->hallRepository = $hallRepository;
    }
    /**
     * @Route("/", name="hall_index", methods={"GET", "POST"})
     */
    public function index(HallRepository $hallRepository): Response
    {
        return $this->render('hall/index.html.twig', [
            'halls' => $hallRepository->findAll(),
        ]);
    }

    /**
     * @Route("/small", name="hall_small", methods={"GET"})
     */
    public function small(HallRepository $hallRepository): Response
    {
        return $this->render('hall/small.html.twig', [
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
