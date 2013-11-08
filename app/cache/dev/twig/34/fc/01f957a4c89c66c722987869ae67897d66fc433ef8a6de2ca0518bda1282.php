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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/css/design.css"), "html", null, true);
        echo "\" />
\t\t<script src=\"//code.jquery.com/jquery-latest.min.js\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/jquery.slides.min.js"), "html", null, true);
        echo "\"></script> 
\t\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/portfolio.js"), "html", null, true);
        echo "\"></script> 
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"span3\">
\t\t\t\t<h1><a href=\"/Bootstrap/\">Portfolio</a></h1>
\t\t\t  </div>
\t\t\t  <div class=\"span9\">
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
\t\t\t  <div class=\"span6\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t
\t\t\t\t  <li id=\"menu\" ";
        // line 39
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "index")) {
            echo "class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/\">Home</a></li>
\t\t\t\t  <li id=\"menu\" ";
        // line 40
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "studies")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/studies\">Studies</a></li>
\t\t\t\t  <li id=\"menu\" ";
        // line 41
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "articles")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/articles\">Articles</a></li>
\t\t\t\t  <li id=\"menu\" ";
        // line 42
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "contact")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/contact\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t</div>
 
    ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo " 
\t<br />
\t<br />
\t<hr />
    <div class=\"row\">
\t\t\t  <div class=\"span12\">
\t\t\t\t<p>Copyright Drabble 2013</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html>";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
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
        return array (  129 => 48,  126 => 47,  20 => 1,  81 => 39,  53 => 15,  113 => 36,  97 => 8,  77 => 38,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 51,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 15,  63 => 30,  59 => 29,  38 => 13,  94 => 28,  89 => 48,  85 => 25,  75 => 36,  68 => 14,  56 => 16,  87 => 40,  21 => 2,  26 => 6,  93 => 41,  88 => 6,  78 => 27,  46 => 13,  27 => 9,  44 => 12,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 53,  62 => 17,  49 => 12,  24 => 4,  25 => 6,  19 => 2,  79 => 18,  72 => 16,  69 => 33,  47 => 13,  40 => 9,  37 => 10,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 49,  120 => 48,  115 => 43,  111 => 49,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 21,  66 => 18,  55 => 19,  52 => 17,  50 => 14,  43 => 10,  41 => 11,  35 => 5,  32 => 6,  29 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 37,  112 => 42,  109 => 47,  106 => 11,  103 => 10,  99 => 42,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 19,  60 => 23,  57 => 15,  54 => 15,  51 => 14,  48 => 14,  45 => 11,  42 => 10,  39 => 9,  36 => 10,  33 => 9,  30 => 5,);
    }
}
