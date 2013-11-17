<?php

namespace Portfolio\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Portfolio\PortfolioBundle\Entity\Article;
use Portfolio\PortfolioBundle\Entity\Image;
use Portfolio\PortfolioBundle\Entity\Comment;

class PortfolioController extends Controller
{
	public function indexAction(){
		return $this->render('PortfolioPortfolioBundle:Portfolio:index.html.twig', array("active" => "index"));
	}
	public function studiesAction(){
		return $this->render('PortfolioPortfolioBundle:Portfolio:studies.html.twig', array("active" => "studies"));
	}
	public function contactAction(){
		return $this->render('PortfolioPortfolioBundle:Portfolio:contact.html.twig', array("active" => "contact"));
	}
	public function adminAction(){
		$article = new Article();
		$form = $this->createFormBuilder($article)
			->add('title',     'text')
			->add('autor',     'text')
			->add('description',     'textarea')
			->add('content',     'textarea')
			->add('image',     'file')
			->getForm();
		
		$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$article->getImage()->upload();
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
		'article' => $article, "active" => "article", 'form' => $form->createView()
		));
	}
}
?>