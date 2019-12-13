<?php

namespace App\Controller;

use App\Entity\Movies;
use App\Entity\User;
use App\Repository\MoviesRepository;
use App\Repository\SeanseRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @var SeanseRepository $seanseRepository
     */
    private $seanseRepository;
    private $moviesRepository;

    public function __construct(SeanseRepository $seanseRepository, MoviesRepository $moviesRepository)
    {
        $this->seanseRepository = $seanseRepository;
        $this->moviesRepository = $moviesRepository;
    }

    /**
     * @Route("/", name="main", methods={"GET", "POST"})
     *
     */
    public function index(Request $request): Response
    {
        $today = new DateTime('now');
        $today = $today->format('Y-m-d');
        $tomorrow = new DateTime('tomorrow');
        $tomorrow = $tomorrow->format('Y-m-d');

        $todaySeanses = $this->seanseRepository->findByUnique($today);
        $tomorrowSeanses = $this->seanseRepository->findByUnique($tomorrow);

        return $this->render('main/index.html.twig', [
            'todaySeanses' => $todaySeanses,
            'tomorrowSeanses' => $tomorrowSeanses
        ]);
    }


}
