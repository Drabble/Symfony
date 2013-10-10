<?php
// src/test/BlogBundle/Controller/BlogController.php
 
namespace test\BlogBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class BlogController extends Controller
{
  // … ici la méthode indexAction() que l'on a déjà créée
 
  // La route fait appel à SdzBlogBundle:Blog:voir, on doit donc définir la méthode voirAction
  // On donne à cette méthode l'argument $id, pour correspondre au paramètre {id} de la route
  public function voirAction($id)
  {
    // $id vaut 5 si l'on a appelé l'URL /blog/article/5
         
    // Ici, on récupèrera depuis la base de données l'article correspondant à l'id $id
    // Puis on passera l'article à la vue pour qu'elle puisse l'afficher
 
    return new Response("Affichage de l'article d'id : ".$id.".");
  }
}