<?php

/* testBlogBundle:Blog:index.html.twig */
class __TwigTemplate_ed32392ee2021d8a697a46b0b5c5444e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec le Site du Zéro !</title>
  </head>
  <body>
    <h1>Hello World !</h1>
 
    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "testBlogBundle:Blog:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
