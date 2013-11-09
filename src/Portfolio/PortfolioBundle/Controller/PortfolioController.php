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
		return $this->render('PortfolioPortfolioBundle:Portfolio:admin.html.twig', array("active" => "admin"));
	}
  
	public function addArticleAction()
	{
		$request = $this->get('request');
		$title_value = $request->request->get('title');
		$content_value = $request->request->get('content');
		$description_value = $request->request->get('description');
		$autor_value = $request->request->get('autor');
		$images_value = $request->request->get('images');
		if ($request->getMethod() == 'POST') {
			$article = new Article();
			$article->setTitle($title_value);
			$article->setDescription($description_value);
			$article->setContent($content_value);
			$article->setAutor($autor_value);
			/*move_uploaded_file($images_value["file"]["tmp_name"],('PortfolioPortfolioBundle:Portfolio: . $images_value["file"]["name"]);*/
			/*$comment1 = new Comment();
			$comment1->setAutor('Jesus2');
			$comment1->setContent('Jah bless2');

			$comment2 = new comment();
			$comment2->setAutor('Dafuq2');
			$comment2->setContent('Comment test2');*/
			
			$image1 = new Image();
			$image1->setLink('image3');
			$image1->setTitle('ImageTest');

			/*$comment1->setArticle($article);
			$comment2->setArticle($article);*/
			$image1->setArticle($article);
			/*$image2->setArticle($article);*/

			$em = $this->getDoctrine()->getManager();

			$em->persist($article);

			/*$em->persist($comment1);
			$em->persist($comment2);*/
			$em->persist($image1);
			/*$em->persist($image2);*/

			$em->flush();
		}
		return $this->articlesAction();
		/*
		$article = new Article;
		$form = $this->createForm(new ArticleType(), $article);
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
		$form->bind($request);
			if ($form->isValid()) { 
				
				$image1 = new Image();
				$image1->setLink('image3');
				$image1->setTitle('ImageTest');


				$image1->setArticle($article);

				$em = $this->getDoctrine()->getManager();

				$em->persist($article);
				$images_dir = __DIR__ . '/../../../../web/pictures/';

				$image1->setArticle($article);
				$em->persist($image1);

				$em->flush();
				
				return $this->articlesAction();
			}
		}
		return $this->render('PortfolioPortfolioBundle:Portfolio:admin.html.twig', array("active" => "admin"));*/
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
			$list_comments = $repository->findAll();
			$list_images = $repository->findAll();
		  // $article est une instance de Article
		  $array_article = array(
			"description" => $article->getDescription(),
			"title" => $article->getTitle(),
			"id" => $article->getId(),
			"autor" => $article->getAutor(),
			"comments" => $list_comments,
			"images" => $list_images,
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
		$list_comments = $repository->findAll();
		$list_images = $repository->findAll();
		$array_article = array(
			"description" => $article->getDescription(),
			"content" => $article->getContent(),
			"title" => $article->getTitle(),
			"id" => $article->getId(),
			"date" => $article->getDate(),
			"autor" => $article->getAutor(),
			"comments" => $list_comments,
			"images" => $list_images,
		);
		return $this->render('PortfolioPortfolioBundle:Portfolio:article.html.twig', array(
		'article' => $array_article, "active" => "article"
		));
	}
}
?>