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
	
	/*public function getCommentsAction(){
		$request = $this->get('request');
		$id = $request->request->get('id');
		//if ($request->getMethod() == 'POST') {
			$repository = $this->getDoctrine()
							->getManager()
							->getRepository('PortfolioPortfolioBundle:Article');
			$article = $repository->find($id);
			if($article === null)
			{
				throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
			}
			$list_comments = $article->getComments();
			return new Response(array('comments' => $list_comments));
		}
		return new Response();
	}*/
	
	/*public function addCommentAction(){
			$repository = $this->getDoctrine()
							->getManager()
							->getRepository('PortfolioPortfolioBundle:Article');
			$article = $repository->find($id);
			if($article === null)
			{
				throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
			}
			$comment = new Comment();
			$formBuilder = $this->createFormBuilder($comment);
			$formBuilder
			    ->add('id',        'number')
			    ->add('autor',       'text')
			    ->add('content',     'textarea')
			$form = $formBuilder->getForm();
			$article->addComment($comment);
			
			$em = $this->getDoctrine()->getManager();

			$em->persist($article);

			$em->flush();
		}
		return new Response(1);
	}*/
	
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
			
			/*foreach ( $images_value as $key => $value){
				$someNewFilename = $key;
				$dir = $this->container->getParameter('kernel.root_dir') . '/../web/bundles/portfolioportfolio/pictures';
				$value->getData()->move($dir, $someNewFilename);
			}*/
			
			
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