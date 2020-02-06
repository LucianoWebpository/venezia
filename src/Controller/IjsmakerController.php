<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IjsmakerController extends AbstractController
{
    /**
     * @Route("bezoeker/home", name="homepage")
     */
    public function showHomeAction() {
        return $this->render('home.html.twig');

    }

}