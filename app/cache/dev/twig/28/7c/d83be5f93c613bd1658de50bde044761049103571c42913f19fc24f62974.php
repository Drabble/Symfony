<?php

/* PortfolioPortfolioBundle:Portfolio:articles.html.twig */
class __TwigTemplate_287cd83be5f93c613bd1658de50bde044761049103571c42913f19fc24f62974 extends Twig_Template
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
        echo "\t\t<div class=\"span12\">
\t\t\t<ul class=\"thumbnails\">
\t\t\t\t<h2>Articles</h2>
\t\t\t\t<div>
\t\t\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["key"] => $context["article"]) {
            // line 13
            echo "\t\t\t\t\t";
            if ((((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) % 2) == 0)) {
                echo "</div><div class=\"row-fluid\">";
            }
            // line 14
            echo "\t\t\t\t\t<li class=\"span6\">
\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t<h3><a href=\"/Symfony/web/app_dev.php/article/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t<a href=\"/Symfony/web/app_dev.php/article/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/Penguins.jpg"), "html", null, true);
            echo "\" data-src=\"data-src=\"holder.js/300x200\" alt=\"Test\"></a><br/><br/>
\t\t\t\t\t\t\t<p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "description"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p>Made by ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "autor"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t</ul>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  77 => 19,  73 => 18,  67 => 17,  61 => 16,  57 => 14,  52 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
