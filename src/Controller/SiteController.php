<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class SiteController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
      $menu = [
        ['id' => 1, 'title' => 'Start', 'link' => '/'],
        ['id' => 2, 'title' => 'Projekty', 'link' => '/'],
        ['id' => 3, 'title' => 'Technologie', 'link' => '/'],
        ['id' => 4, 'title' => 'Kontakt', 'link' => '/'],
      ];



        return $this->render('site/index.html.twig',[
          'menu' => $menu,
        ]);
    }
}
