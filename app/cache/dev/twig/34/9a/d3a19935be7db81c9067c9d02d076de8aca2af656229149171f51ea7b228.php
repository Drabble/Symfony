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
            echo "<h3 class=\"panel-title\">No Comments</h3>
\t\t\t\t\t";
        } else {
            // line 17
            echo "<h3 class=\"panel-title\">Recent Comments</h3>";
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
        return array (  58 => 12,  195 => 97,  191 => 95,  134 => 58,  126 => 56,  114 => 54,  20 => 1,  81 => 23,  53 => 15,  113 => 36,  97 => 23,  77 => 17,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 102,  214 => 69,  177 => 65,  169 => 60,  140 => 51,  132 => 57,  128 => 51,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 101,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 52,  71 => 23,  67 => 15,  63 => 30,  59 => 17,  38 => 13,  94 => 28,  89 => 22,  85 => 21,  75 => 36,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 27,  46 => 10,  27 => 9,  44 => 12,  31 => 8,  28 => 3,  201 => 101,  196 => 90,  183 => 90,  171 => 61,  166 => 71,  163 => 62,  158 => 68,  156 => 62,  151 => 63,  142 => 60,  138 => 54,  136 => 56,  121 => 46,  117 => 34,  105 => 40,  91 => 53,  62 => 13,  49 => 13,  24 => 4,  25 => 6,  19 => 2,  79 => 18,  72 => 16,  69 => 33,  47 => 14,  40 => 9,  37 => 10,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 49,  120 => 55,  115 => 43,  111 => 37,  108 => 53,  101 => 32,  98 => 31,  96 => 51,  83 => 25,  74 => 21,  66 => 18,  55 => 16,  52 => 17,  50 => 11,  43 => 10,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 103,  199 => 67,  193 => 73,  189 => 94,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 58,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 37,  112 => 42,  109 => 34,  106 => 30,  103 => 10,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 18,  73 => 19,  64 => 19,  60 => 23,  57 => 15,  54 => 15,  51 => 15,  48 => 14,  45 => 11,  42 => 8,  39 => 7,  36 => 10,  33 => 9,  30 => 5,);
    }
}
