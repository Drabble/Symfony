<?php

/* testBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_457d71940d1601dde6c24ec31f755a5ce838c002b95f63a14a1eae89166f71bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("testBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'testblog_body' => array($this, 'block_testblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "testBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_testblog_body($context, array $blocks = array())
    {
        // line 10
        echo " 
  <h2>Ajouter un article</h2>
 
  ";
        // line 13
        $this->env->loadTemplate("testBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 14
        echo " 
 
";
    }

    public function getTemplateName()
    {
        return "testBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  47 => 13,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
