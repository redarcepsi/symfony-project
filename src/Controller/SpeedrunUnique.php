<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SpeedrunUnique extends AbstractController
{
    #[Route('/speedrun/speedr')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('speedrun/speedr.html.twig', [
            'jeux' => "minecraft",
            'runner' => "jules",
            'timer' => $number,
            'cat' => "random seed",
            'date' => "19/11/2004",
            'plateform' => "java",
        ]);
    }
}