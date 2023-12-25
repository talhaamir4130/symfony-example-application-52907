<?php

namespace App\Controller;

use App\Entity\ArticleCombine;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $articleCombine = $entityManager->getRepository(ArticleCombine::class)->find(1);
        dd($articleCombine);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
