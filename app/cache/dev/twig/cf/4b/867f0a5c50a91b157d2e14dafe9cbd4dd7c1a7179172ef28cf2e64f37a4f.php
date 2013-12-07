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
\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"controls-group col-md-10\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<form class=\"img-thumbnail col-md-10 form\" name=\"addArticle\" method=\"post\"  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t\t\t\t<center><h2>New article<h2/></center><br/>
\t\t\t\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "<br/>
\t\t\t\t\t\t\t\t<button id=\"contact-submit\" type=\"submit\" class=\"btn btn-primary\">Send</button>\t\t\t\t
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<!--<div class=\"upload col-md-4s\">
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
\t\t\t\t<div style=\"position: absolute; bottom: 10px; right: 0;\" class=\"controls-group col-md-6\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<button id=\"contact-submit\" type=\"submit\" class=\"btn btn-primary pull-right\">Send</button>
\t\t\t\t\t</div>
\t\t\t\t</div>-->
\t\t\t</form>
\t\t</div >
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
        return array (  54 => 15,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
