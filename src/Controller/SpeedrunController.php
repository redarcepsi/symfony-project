<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;

class SpeedrunController extends AbstractController
{
    #[Route('/speedrun/speedrunliste')]
    public function number(EntityManagerInterface $entityManager): Response
    {
        $number = random_int(0, 100);

        $query = $entityManager->createQuery(
            'SELECT p FROM App\Entity\Joueur p'
        );
        $result = $query->getResult();

        $sql = 'INSERT INTO joueur (name, age, position) VALUES (:nom, :pseudo, :age)';
        $params = [
            'nom' => 'john',
            'pseudo' => 'joe',
            'age' => 59,
        ];

        return $this->render('speedrun/speedrunliste.html.twig', [
            'featuredGames' => [
            [
            'jeux' => "minecraft",
            'runner' => "jules",
            'timer' => $number,
            'cat' => "random seed",
            ],
            [
            'jeux' => "minecraft",
            'runner' => "yanis",
            'timer' => $number,
            'cat' => "random seed",
            ],
            ],
            'players'=>$result,
        ]);
    }
    #[Route('/insertplayer')]
    public function insertplayer(Request $request, EntityManagerInterface $entityManager): Response
    {
        $yourEntity = new YourEntity();
        $form = $this->createForm(YourEntityType::class, $yourEntity);

        $form->handleRequest($request);

        if ($request->isMethod('POST')) {
            $nom = $request->request->get('nom');
            $pseudo = $request->request->get('pseudo');
            $age = $request->request->get('age');

            $sql = 'INSERT INTO joueur (nom, pseudo, age) VALUES (:nom, :pseudo, :age)';
            $params = [
                'nom' => $nom,
                'pseudo' => $pseudo,
                'age' => $age,
            ];

            $connection->executeStatement($sql, $params);
        }
    }
}