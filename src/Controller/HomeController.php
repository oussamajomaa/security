<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Service\EncryptService;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(EncryptService $encryptService)
    {
        
        return $this->render('home/index.html.twig', [
            
        ]);
    }

    /**
     * @Route("/show", name="show")
     */
    public function show(UserRepository $repo)
    {
        $user= $repo->findAll();
        return $this->render('home/show.html.twig', [
            'users'=>$user
        ]);
    }
}
