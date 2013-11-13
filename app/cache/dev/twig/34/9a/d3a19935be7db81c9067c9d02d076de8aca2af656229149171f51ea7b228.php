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
\t\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
        echo "</h2>
\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/Jellyfish.jpg"), "html", null, true);
        echo "\" alt=\"Test\" />
\t\t\t<p><br/><b>Description : </b><br/>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "description"), "html", null, true);
        echo "</p>
\t\t\t<p><b>Content : </b><br/>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), "html", null, true);
        echo "</p><br/>\t\t
\t\t\t<p>Created the ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d.m.Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "H:i:s"), "html", null, true);
        echo "</p>
\t\t\t";
        // line 15
        if (twig_test_empty($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments"))) {
            // line 16
            echo "\t\t\t<div class=\"panel panel-default widget\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">No comment yet</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        } else {
            // line 22
            echo "\t\t\t<div class=\"panel panel-default widget\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Recent Comments</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments"));
            foreach ($context['_seq'] as $context["key"] => $context["comment"]) {
                // line 29
                echo "\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-2 col-md-1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/80\" class=\"img-circle img-responsive\" alt=\"\" /></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-10 col-md-11\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mic-info\">
\t\t\t\t\t\t\t\t\t\t\t\tBy: <a href=\"#\">";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "autor"), "html", null, true);
                echo "</a> the ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date"), "m.d.Y"), "html", null, true);
                echo " at ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date"), "H:i:s"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div><br/>
\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-xs\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-xs\" title=\"Approved\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok\"></span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 61
        echo "\t\t\t<p></p>
\t\t\t<p><center><b>Created by ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "autor"), "html", null, true);
        echo "</b></center></p>
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
        return array (  142 => 62,  139 => 61,  133 => 57,  110 => 40,  99 => 36,  90 => 29,  86 => 28,  78 => 22,  70 => 16,  68 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
