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
		if ($request->request->all()) {
			$post = $request->request->all();
			if (isset($post['login'])) {
				if ($post['login'] == 'admin' && $post['haslo'] == 'admin123') {
				}
			}
		}


		$form = $this->createFormBuilder($task)
		            ->add('task', TextType::class)
		            ->add('dueDate', DateType::class)
		            ->add('save', SubmitType::class, ['label' => 'Create Task'])
		            ->getForm();

						    $form->handleRequest($request);

						    if ($form->isSubmitted() && $form->isValid()) {
						        $task = $form->getData();


										return $this->redirectToRoute('panel');
						    }
		return $this->render('admin/login.html.twig', [
			'form' => $form
		]);
	}


	/**
	 * @Route("/admin/panel", name="panel")
	 */
	public function panel()
	{
		return $this->render('admin/panel.html.twig', [
		]);
	}

	/**
	 * @Route("/admin/wpisy", name="wpisy")
	 */
	public function wpisy()
	{
		return $this->render('admin/panel.html.twig', [
		]);
	}

	/**
	 * @Route("/admin/kategorie", name="kategorie")
	 */
	public function kategorie()
	{
		return $this->render('admin/panel.html.twig', [
		]);
	}

	/**
	 * @Route("/admin/wyloguj", name="wyloguj")
	 */
	public function wyloguj()
	{
		return $this->render('admin/panel.html.twig', [
		]);
	}
}
