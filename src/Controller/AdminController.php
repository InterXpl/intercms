<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AdminController extends AbstractController
{
    /**
     * @Route("/login")
     */
    public function login(Request $request, SessionInterface $session)
    {
        if($request->request->all())
        {
          $post = $request->request->all();
          if(isset($post['login']))
          {
            if($post['login'] == 'admin' && $post['haslo'] == 'admin123')
            {
              return $this->redirectToRoute('panel');
            }
          }
        }

        return $this->render('admin/login.html.twig',[

        ]);
    }

        /**
         * @Route("/admin/panel", 'panel')
         */
    public function panel()
    {
      return new Response('test');
    }
}
