<?php

/* PortfolioPortfolioBundle:Portfolio:contact.html.twig */
class __TwigTemplate_1fb8d7cab839017dfdf296cb97e6c71288f7e2a2f8ed54700fb28d33fc301f34 extends Twig_Template
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
\t\t<div class=\"col-md-12\"><br/>
\t\t\t<div class=\"col-md-8 img-thumbnail\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t<center>
\t\t\t\t\t\t<h3>Contact me!</h3>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t<strong>Email:</strong> <a href=\"mailto:#\"> name@domain.com</a><br><br>
\t\t\t\t\t\t\t<strong>Phone:</strong> (555)123-4567
\t\t\t\t\t\t</address>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t\t<div class=\"contact-form\">
\t\t\t\t\t<form id=\"contact\" method=\"post\" class=\"form\" role=\"form\">
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Name\" type=\"text\" required autofocus />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 form-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\" type=\"email\" required />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"Message\" rows=\"5\"></textarea>
\t\t\t\t\t\t\t\t<br />\t\t\t\t\t\t\t\t<button class=\"btn btn-warning pull-right\" type=\"submit\">Send</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:contact.html.twig";
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
