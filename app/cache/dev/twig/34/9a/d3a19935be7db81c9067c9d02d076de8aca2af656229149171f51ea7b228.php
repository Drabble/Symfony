<?php

/* PortfolioPortfolioBundle:Portfolio:article.html.twig */
class __TwigTemplate_349ad3a19935be7db81c9067c9d02d076de8aca2af656229149171f51ea7b228 extends Twig_Template
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
\t\t<div class=\"col-md-12\">
\t\t\t<center><h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
        echo "</h2><br/>
\t\t\t<figure id=\"article_image\"><img   src=\"/Symfony/web/upload/pictures/";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "title"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "title"), "html", null, true);
        echo "\"/><figcaption>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "description"), "html", null, true);
        echo "</figcaption></figure></center><br/>
\t\t\t<p><b></b><br/>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), "html", null, true);
        echo "</p><br/>\t\t
\t\t\t<p>Created by <b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "autor"), "html", null, true);
        echo "</b> the <b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d.m.Y"), "html", null, true);
        echo "</b> at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "H:i:s"), "html", null, true);
        echo "</p><br/>
\t\t\t<div class=\"panel panel-default widget\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t";
        // line 16
        if (twig_test_empty($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments"))) {
            echo "<h3 class=\"panel-title\">Recent Comments</h3>
\t\t\t\t\t";
        } else {
            // line 17
            echo "<h3 class=\"panel-title\">No Comments</h3>";
        }
        // line 18
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments"));
        foreach ($context['_seq'] as $context["key"] => $context["comment"]) {
            // line 22
            echo "\t\t\t\t\t\t\t";
            if ((((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) % 5) == 0)) {
                if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) != 0)) {
                    echo "</span>";
                }
                echo "<span class=\"comment-group\">";
            }
            // line 23
            echo "\t\t\t\t\t\t\t\t<li class=\"list-group-item comments\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/80\" class=\"img-circle img-responsive\" alt=\"\" /></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-10 col-md-11\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mic-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\tBy: <a href=\"#\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "autor"), "html", null, true);
            echo "</a> the ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date"), "m.d.Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date"), "H:i:s"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div><br/>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-xs\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-xs\" title=\"Approved\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t<li class=\"list-group-item\" id='show_comment'>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item\" id=\"comment_form\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-12\">
\t\t\t\t\t\t\t\t\t<form class=\"comment-text\" method=\"post\" ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls-group col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--<textarea id=\"content\" name=\"content\" class=\"form-control\" placeholder=\"Add a comment\" rows=\"5\"></textarea><br/>-->
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "<br/>
\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"contact-submit\" type=\"submit\" class=\"btn btn-primary\">Send</button>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<p></p>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 62,  149 => 58,  140 => 51,  117 => 34,  106 => 30,  97 => 23,  89 => 22,  85 => 21,  80 => 18,  77 => 17,  72 => 16,  62 => 13,  58 => 12,  50 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
