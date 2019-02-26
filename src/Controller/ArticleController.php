<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController
{

      /**
       * @Route("/news/{slug}")
       */
    public function news($slug)
    {

      $artykuly = [
        [
          'title' => 'artykuł 1',
          'content' => 'Zawartość artykułu 1',
        ],
        [
          'title' => 'artykuł 2',
          'content' => 'Zawartość artykułu 2',
        ],
        [
          'title' => 'artykuł 3',
          'content' => 'Zawartość artykułu 3',
        ],
        [
          'title' => 'artykuł 4',
          'content' => 'Zawartość artykułu 4',
        ],
      ];

      return $this->render('article/index.html.twig',[
        'slug' => $slug,
        'artykuly' => $artykuly,
      ]);
    }
}
