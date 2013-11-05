<?php

namespace Portfolio\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Portfolio\PortfolioBundle\Entity\Article;

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
  
	public function addArticleAction(){
		$article = new Article();
		$article->setTitle('Bibi');
		$article->setDescription("C'était vraiment super et on s'est bien amusé.");
		$article->setContent("C'était vraiment super et on s'est bien amusé.");
		$article->setAutor("Tony");

		$em = $this->getDoctrine()->getManager();
		$em->persist($article);
		$em->flush();
		 
		//if ($this->getRequest()->getMethod() == 'POST') {
		//  $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
		//  return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => $article->getId())) );
		//}
		return $this->render('PortfolioPortfolioBundle:Portfolio:index.html.twig', array("active" => "articles"));
	}
	
	public function articlesAction()
	{
		$repository = $this->getDoctrine()
						->getManager()
						->getRepository('PortfolioPortfolioBundle:Article');
		$article = $repository->find(1);
		if($article === null)
		{
			throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
		}
		return $this->render('PortfolioPortfolioBundle:Portfolio:articles.html.twig', array('article' => $article, "active" => "articles"));
	}
}
?>