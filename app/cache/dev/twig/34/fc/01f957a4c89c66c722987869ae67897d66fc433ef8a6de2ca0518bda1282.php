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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script> 
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/jquery.slides.min.js"), "html", null, true);
        echo "\"></script> 
\t\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/portfolio.js"), "html", null, true);
        echo "\"></script> 
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"col-md-7\">
\t\t\t\t<h1><a href=\"/\">Portfolio</a></h1>
\t\t\t  </div>
\t\t\t  <div class=\"col-md-3\">
\t\t\t\t\t<br/>
\t\t\t\t\t<form class=\"navbar-form\" role=\"search\">
\t\t\t\t\t  <div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"search-term\" id=\"search-term\">
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t  <button  class=\"btn btn-default blue\" type=\"submit\"><span class=\"glyphicon icon-search\"></span></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t  <div class=\"col-md-2\">
\t\t\t\t<br /><br/>
\t\t\t\t<p class=\"pull-right\">
\t\t\t\t\t<a href=\"#\"><i rel=\"tooltip\" data-original-title=\"Twitter\" class=\"icon-twitter blue\"></i></a>
\t\t\t\t\t<a href=\"#\"><i rel=\"tooltip\" data-original-title=\"Facebook\" class=\"icon-facebook blue\"></i></a>
\t\t\t\t\t<a href=\"#\"><i rel=\"tooltip\" data-original-title=\"Youtube\" class=\"icon-youtube blue\"></i></a>\t\t\t\t\t
\t\t\t\t\t<a href=\"#\"><i rel=\"tooltip\" data-original-title=\"Google plus\" class=\"icon-google-plus blue\"></i></a>
\t\t\t\t\t<a href=\"#\"><i rel=\"tooltip\" data-original-title=\"Pinterest\" class=\"icon-pinterest blue\"></i></a>                
\t\t\t\t</p>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<hr />
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"col-md-6\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li id=\"menu\" ";
        // line 51
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "index")) {
            echo "class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/\">Home</a></li>
\t\t\t\t\t<li id=\"menu\" ";
        // line 52
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "studies")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/studies\">Studies</a></li>
\t\t\t\t\t<li id=\"menu\" ";
        // line 53
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "articles")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/articles\">Articles</a></li>
\t\t\t\t\t<li id=\"menu\" ";
        // line 54
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "contact")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/contact\">Contact</a></li>
\t\t\t\t\t<li id=\"menu\" ";
        // line 55
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "admin")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/admin\">Admin</a></li>
\t\t\t\t\t<li id=\"menu\" ";
        // line 56
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "chat")) {
            echo " class=\"active_page\"";
        }
        echo "><a href=\"/Symfony/web/app_dev.php/chat\">Chat</a></li>
\t\t\t\t\t<li id=\"menu\" ";
        // line 57
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "login")) {
            echo " class=\"active_page dropdown\"";
        }
        echo ">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Login<b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu unstyled pull-left dropdown-features\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<a href=\"/Symfony/web/app_dev.php/login\"><h3 class=\"panel-title\">Please sign in</h3></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<form accept-charset=\"UTF-8\" role=\"form\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"remember\" type=\"checkbox\" value=\"Remember Me\"> Remember Me
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"Login\"><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<center><a href=\"/Symfony/web/app_dev.php/login\"><input class=\"btn btn-lg btn-info btn-block type=\"submit\" value=\"Register\"></a></center>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t</div><br/>
 
    ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "\t\t\t<br />
\t\t\t<br />
\t\t\t<hr />
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<center><p>Copyright Drabble 2013</p></center>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html>";
    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        // line 91
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
        return array (  189 => 91,  186 => 90,  172 => 92,  170 => 90,  132 => 57,  126 => 56,  120 => 55,  114 => 54,  108 => 53,  102 => 52,  96 => 51,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
