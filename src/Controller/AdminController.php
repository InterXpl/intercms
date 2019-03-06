<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController {

    /**
     * @Route("/login")
     */
    public function login(Request $request, SessionInterface $session) {

         $user = new \App\Entity\User();


        $form = $this->createFormBuilder($user)
                ->add('login', TextType::class, ['help' =>'wpisz tu login'])
                ->add('password', PasswordType::class,['label' => 'Hasło', 'help' => 'Pisz tu'])
                ->add('submit', SubmitType::class, ['label' => 'Wyślij', 'block_name' => 'test'])
                ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();


            return $this->redirectToRoute('panel');
        }
        $view = $form->createView();
        return $this->render('admin/login.html.twig', [
            'form' => $view,
        ]);
    }

    /**
     * @Route("/admin/panel", name="panel")
     */
    public function panel() {
        return $this->render('admin/panel.html.twig', [
        ]);
    }

    /**
     * @Route("/admin/wpisy", name="wpisy")
     */
    public function wpisy() {
        return $this->render('admin/panel.html.twig', [
        ]);
    }

    /**
     * @Route("/admin/kategorie", name="kategorie")
     */
    public function kategorie() {
        return $this->render('admin/panel.html.twig', [
        ]);
    }

    /**
     * @Route("/admin/wyloguj", name="wyloguj")
     */
    public function wyloguj() {
        return $this->render('admin/panel.html.twig', [
        ]);
    }

}
