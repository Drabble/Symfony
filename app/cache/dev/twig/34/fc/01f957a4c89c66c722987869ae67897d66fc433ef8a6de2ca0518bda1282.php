<?php

/* PortfolioPortfolioBundle::layout.html.twig */
class __TwigTemplate_34fc01f957a4c89c66c722987869ae67897d66fc433ef8a6de2ca0518bda1282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Portfolio</title>
\t\t<meta name=\"description\" content=\"Portfolio\" />
\t\t<meta name=\"author\" content=\"Antoine Drabble\" />
\t\t<meta name=\"viewport\" content=\"width=device-width\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/css/design.css"), "html", null, true);
        echo "\" />
\t\t
\t\t<script src=\"//code.jquery.com/jquery-latest.min.js\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/jquery.slides.min.js"), "html", null, true);
        echo "\"></script> 
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script> 
\t\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/jquery.slides.min.js"), "html", null, true);
        echo "\"></script> 
\t\t<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/portfolio.js"), "html", null, true);
        echo "\"></script> 
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"col-md-3\">
\t\t\t\t<h1><a href=\"/\">Portfolio</a></h1>
\t\t\t  </div>
\t\t\t  <div class=\"col-md-9\">
\t\t\t\t<br />
\t\t\t\t<p class=\"pull-right\">
\t\t\t\t\t<a href=\"#\"><i rel=\"tooltip\" data-original-title=\"Twitter\" class=\"icon-twitter\"></i></a>
\t\t\t\t\t<a href=\"#\"><i rel=\"tooltip\" data-original-title=\"Facebook\" class=\"icon-facebook\"></i></a>
\t\t\t\t\t<a href=\"#\"><i rel=\"tooltip\" data-original-title=\"Youtube\" class=\"icon-youtube\"></i></a>\t\t\t\t\t
\t\t\t\t\t<a href=\"#\"><i rel=\"tooltip\" data-original-title=\"Google plus\" class=\"icon-google-plus\"></i></a>
\t\t\t\t\t<a href=\"#\"><i rel=\"tooltip\" data-original-title=\"Pinterest\" class=\"icon-pinterest\"></i></a>                
\t\t\t\t</p>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<hr />
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"col-md-6\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t
\t\t\t\t  <li id=\"menu\" ";
        // line 42
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "index")) {
            echo "class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/\">Home</a></li>
\t\t\t\t  <li id=\"menu\" ";
        // line 43
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "studies")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/studies\">Studies</a></li>
\t\t\t\t  <li id=\"menu\" ";
        // line 44
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "articles")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/articles\">Articles</a></li>
\t\t\t\t  <li id=\"menu\" ";
        // line 45
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "contact")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/contact\">Contact</a></li>
\t\t\t\t  <li id=\"menu\" ";
        // line 46
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "admin")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/admin\">Admin</a></li>
\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t</div>
 
    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo " 
\t<br />
\t<br />
\t<hr />
    <div class=\"row\">
\t\t\t  <div class=\"col-md-12\">
\t\t\t\t<p>Copyright Drabble 2013</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html>";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 52,  141 => 51,  126 => 53,  124 => 51,  114 => 46,  108 => 45,  102 => 44,  96 => 43,  90 => 42,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
