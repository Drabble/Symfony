<?php

namespace Portfolio\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Portfolio\PortfolioBundle\Entity\Article;
use Portfolio\PortfolioBundle\Entity\Image;
use Portfolio\PortfolioBundle\Entity\Comment;
use Portfolio\PortfolioBundle\Form\ArticleType;
use Portfolio\PortfolioBundle\Form\ImageType;
use Portfolio\UserBundle\Entity\User;

class PortfolioController extends Controller
{
	public function indexAction(){
	
		$array_images = array();
		$repository = $this->getDoctrine()
						->getManager()
						->getRepository('PortfolioPortfolioBundle:Image');

		$listeImages = $repository->findBy(array(), array('id' => 'DESC'));
 
		foreach($listeImages as $image)
		{
		  // $article est une instance de Article
		  $array_image = array(
			"title" => $image->getTitle(),
			);
			array_push($array_images, $array_image);
		}
		return $this->render('PortfolioPortfolioBundle:Portfolio:index.html.twig', array('images' => $array_images, "active" => "index"));
	}
	public function accountAction(){
		return $this->render('PortfolioPortfolioBundle:Portfolio:account.html.twig', array("active" => "account"));
	}
	public function usersAction(){
		$array_users = array();
		$repository = $this->getDoctrine()
						->getManager()
						->getRepository('PortfolioUserBundle:User');

		$listeusers = $repository->findBy(array());
 
		foreach($listeusers as $user)
		{
		  // $user est une instance de user
		  $array_user = array(
			"username" => $user->getUsername(),
			"password" => $user->getPassword(),
			"id" => $user->getId(),
			"email" => $user->getEmail()
			);
			array_push($array_users, $array_user);
	
		}
		return $this->render('PortfolioPortfolioBundle:Portfolio:users.html.twig', array('users' => $array_users, "active" => "users"));
	}
	public function userAction($id)
	{
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('PortfolioUserBundle:User');
							
							
		$user = $repository->find($id);	
		if($user === null)
		{
			throw $this->createNotFoundException('User[id='.$id.'] inexistant.');
		}
		
		return $this->render('PortfolioPortfolioBundle:Portfolio:user.html.twig', array(
		'user' => $user, "active" => "users"
		));
	}
	public function studiesAction(){
		return $this->render('PortfolioPortfolioBundle:Portfolio:studies.html.twig', array("active" => "studies"));
	}
	public function chatAction(){
		return $this->render('PortfolioPortfolioBundle:Portfolio:chat.html.twig', array("active" => "chat"));
	}
	public function contactAction(){
		return $this->render('PortfolioPortfolioBundle:Portfolio:contact.html.twig', array("active" => "contact"));
	}
	public function adminAction(){
		$article = new Article();
		$form = $this->createForm(new ArticleType, $article);
		
		$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($article);
				$em->flush();
			}
		}
		return $this->render('PortfolioPortfolioBundle:Portfolio:admin.html.twig', array("active" => "admin", 'form' => $form->createView()));
	}
	public function articlesAction()
	{
		$array_articles = array();
		$repository = $this->getDoctrine()
						->getManager()
						->getRepository('PortfolioPortfolioBundle:Article');

		$listeArticles = $repository->findBy(array(), array('id' => 'DESC'));
 
		foreach($listeArticles as $article)
		{
		  // $article est une instance de Article
		  $array_article = array(
			"description" => $article->getDescription(),
			"title" => $article->getTitle(),
			"id" => $article->getId(),
			"autor" => $article->getAutor(),
			"image" => $article->getImage(),
			);
			array_push($array_articles, $array_article);
	
		}
		return $this->render('PortfolioPortfolioBundle:Portfolio:articles.html.twig', array('articles' => $array_articles, "active" => "articles"));
	}
	public function articleAction($id)
	{
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('PortfolioPortfolioBundle:Article');
							
							
		$article = $repository->find($id);	
		if($article === null)
		{
			throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
		}
	
		$comment = new Comment();
		$comment->setAutor("Anonymous");
		$form = $this->createFormBuilder($comment)
			->add('content',     'textarea', array(
				'attr'   =>  array(
					'class'   => 'form-group form-control',
					'val' => '',
					'placeholder' => 'Email',
					'label' => false
				)
			))
			->getForm();
		
		$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$article->addComment($comment);
				$em = $this->getDoctrine()->getManager();
				$em->persist($article);
				$em->persist($comment);
				$em->flush();
			}
		}
		
		return $this->render('PortfolioPortfolioBundle:Portfolio:article.html.twig', array(
		'article' => $article, "active" => "articles", 'form' => $form->createView()
		));
	}
	public function removeArticleAction($id)
	{
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('PortfolioPortfolioBundle:Article');
							
							
		$article = $repository->find($id);	
		if($article === null)
		{
			throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
		}
		
		$em = $this->getDoctrine()->getManager();
		$em->remove($article);
		$em->flush();
		return $this->redirect($this->generateUrl('Articles'));
	}
}
?>