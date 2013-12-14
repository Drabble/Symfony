<?php

namespace Portfolio\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Portfolio\PortfolioBundle\Entity\Article;
use Portfolio\PortfolioBundle\Entity\Image;
use Portfolio\PortfolioBundle\Entity\Comment;
use Portfolio\PortfolioBundle\Form\ArticleType;
use Portfolio\PortfolioBundle\Form\ImageType;

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
			echo $form;
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
			->add('content',     'textarea')
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
		return $this->articlesAction();
	}
}
?>