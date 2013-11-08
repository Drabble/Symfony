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
  
	public function addArticleAction()
	{
		// Création de l'entité Article
		$article = new Article();
		$article->setTitle('Test post');
		$article->setDescription('Test post description');
		$article->setContent("Projet de test portfolio ... blablabla");
		$article->setAutor('Tony');

		// Création d'un premier comment
		$comment1 = new Comment();
		$comment1->setAutor('Jesus');
		$comment1->setContent('Jah bless');

		// Création d'un deuxième comment, par exemple
		$comment2 = new comment();
		$comment2->setAutor('Dafuq');
		$comment2->setContent('Comment test');
		
		// Création d'un premier image
		$image1 = new Image();
		$image1->setLink('image2');
		$image1->setTitle('ImageTest');

		// Création d'un deuxième image, par exemple
		$image2 = new Image();
		$image2->setLink('image1');
		$image2->setTitle('ImageTest2');

		// On lie les comments à l'article
		$comment1->setArticle($article);
		$comment2->setArticle($article);
		$image1->setArticle($article);
		$image2->setArticle($article);

		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();

		// Étape 1 : On persiste les entités
		$em->persist($article);
		// Pour cette relation pas de cascade, car elle est définie dans l'entité comment et non Article
		// On doit donc tout persister à la main ici
		$em->persist($comment1);
		$em->persist($comment2);
		$em->persist($image1);
		$em->persist($image2);

		// Étape 2 : On déclenche l'enregistrement
		$em->flush();

		// … reste de la méthode
		return $this->articlesAction();
	}
	
	public function articlesAction()
	{
		$array_articles = array();
		$repository = $this->getDoctrine()
						->getManager()
						->getRepository('PortfolioPortfolioBundle:Article');
		/*$article = $repository->find(1);
		if($article === null)
		{
			throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
		}*/
		// On récupère la liste des commentaires
		// On récupère la liste des commentaires
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
			"comments" => $list_comments,
			"images" => $list_images,
			);
			array_push($array_articles, $array_article);
	
		}
		return $this->render('PortfolioPortfolioBundle:Portfolio:articles.html.twig', array('articles' => $array_articles, "active" => "articles"));
	}
}
?>