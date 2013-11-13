<?php

/* PortfolioPortfolioBundle:Portfolio:admin.html.twig */
class __TwigTemplate_cf4b867f0a5c50a91b157d2e14dafe9cbd4dd7c1a7179172ef28cf2e64f37a4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PortfolioPortfolioBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PortfolioPortfolioBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Portfolio - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"row\">
\t\t<p></p>
\t\t<form class=\"img-thumbnail col-md-12\" name=\"addArticle\" action=\"/Symfony/web/app_dev.php/addArticle\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"col-md-10 form\">
\t\t\t\t<h2>New article<h2/><br/>
\t\t\t\t<div class=\"upload col-md-4s\">
\t\t\t\t\t<input type=\"file\" name=\"files\" multiple=\"multiple\" class=\"form-control\"><br/>
\t\t\t\t</div>
\t\t\t\t<div class=\"controls-group col-md-4\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<input id=\"title\" name=\"title\" type=\"text\" class=\"form-control\" placeholder=\"Title\"> <br/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"controls-group col-md-4\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<input id=\"autor\" name=\"autor\" type=\"text\" class=\"form-control\" placeholder=\"Autor\"> <br/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"controls-group col-md-10\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<textarea id=\"description\" name=\"description\" class=\"form-control\" placeholder=\"Description\" rows=\"3\"></textarea><br/>
\t\t\t\t\t\t<textarea id=\"content\" name=\"content\" class=\"form-control\" placeholder=\"Content\" rows=\"5\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"position: absolute; bottom: 0; right: 0;\" class=\"controls-group col-md-6\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<button id=\"contact-submit\" type=\"submit\" class=\"btn btn-primary pull-right\">Send</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div >
\t\t</form>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
