<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/")]
class MainController extends AbstractController
{
    #[Route('', name : 'app_main')]
    public function index():Response
    {
        //On va mettre les getUsers ici on mettra les SetRoles dans le User Controller
    }
}