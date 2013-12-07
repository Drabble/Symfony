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
        echo "\t\t<div class=\"col-md-12\">
\t\t\t\t<center><h2>Articles</h2></center><br/>
\t\t\t\t\t<ul class=\"pagination\" id=\"pagination\">
\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["key"] => $context["article"]) {
            // line 13
            echo "\t\t\t\t\t\t\t";
            if ((((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) % 10) == 0)) {
                if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) != 0)) {
                    echo "</div></span>";
                }
                echo "<span class=\"article-group\" id=";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))) / 10), "html", null, true);
                echo ">";
            }
            // line 14
            echo "\t\t\t\t\t\t\t";
            if ((((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) % 2) == 0)) {
                if ((((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) != 0) && (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) % 10) != 0))) {
                    echo "</div>";
                }
                echo "<div class=\"row\">";
            }
            // line 15
            echo "\t\t\t\t\t\t\t<span class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"/Symfony/web/app_dev.php/article/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t\t\t<a href=\"/Symfony/web/app_dev.php/article/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
            echo "\"><img src=\"/Symfony/web/upload/pictures/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "title"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "title"), "html", null, true);
            echo "\"></a><br/><br/>
\t\t\t\t\t\t\t\t\t<p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "description"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<p><b>Made by ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "autor"), "html", null, true);
            echo "</b></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t\t</div>
\t\t\t\t</span>
\t\t\t\t<ul class=\"pagination\">
\t\t\t\t</ul>
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
        return array (  70 => 15,  58 => 12,  180 => 89,  126 => 56,  114 => 54,  20 => 1,  81 => 23,  53 => 15,  113 => 36,  97 => 23,  77 => 17,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 51,  132 => 51,  128 => 51,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 24,  71 => 23,  67 => 15,  63 => 30,  59 => 17,  38 => 13,  94 => 28,  89 => 22,  85 => 21,  75 => 36,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 19,  78 => 27,  46 => 10,  27 => 9,  44 => 12,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 90,  171 => 61,  166 => 91,  163 => 62,  158 => 67,  156 => 62,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 34,  105 => 40,  91 => 53,  62 => 14,  49 => 13,  24 => 4,  25 => 6,  19 => 2,  79 => 18,  72 => 16,  69 => 33,  47 => 14,  40 => 9,  37 => 10,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 49,  120 => 55,  115 => 43,  111 => 37,  108 => 53,  101 => 32,  98 => 31,  96 => 51,  83 => 25,  74 => 17,  66 => 18,  55 => 16,  52 => 13,  50 => 11,  43 => 10,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 89,  162 => 57,  154 => 58,  149 => 58,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 37,  112 => 42,  109 => 34,  106 => 30,  103 => 10,  99 => 31,  95 => 28,  92 => 20,  86 => 28,  82 => 22,  80 => 18,  73 => 19,  64 => 19,  60 => 23,  57 => 15,  54 => 15,  51 => 15,  48 => 12,  45 => 11,  42 => 8,  39 => 7,  36 => 10,  33 => 9,  30 => 5,);
    }
}
