<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class StudentController extends AbstractController
{
    #[Route('/welcome', name: '_welcome')]
    public function index()
    {
        return new Response("Bonjour 3a20");
    }
}
