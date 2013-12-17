<?php

/* PortfolioPortfolioBundle:Portfolio:studies.html.twig */
class __TwigTemplate_72ca1dd2bb7c6a585aac7ea048f536068012abf7280fc6cb943133eea61ae5a4 extends Twig_Template
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
\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studies"]) ? $context["studies"] : $this->getContext($context, "studies")));
        foreach ($context['_seq'] as $context["key"] => $context["study"]) {
            // line 11
            echo "\t\t\t\t<div class=\"col-md-8 img-thumbnail\">
\t\t\t\t\t<div class=\"col-md-11\">
\t\t\t\t\t\t<h3>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["study"]) ? $context["study"] : $this->getContext($context, "study")), "title"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<h6>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["study"]) ? $context["study"] : $this->getContext($context, "study")), "enterprise"), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t<h6>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["study"]) ? $context["study"] : $this->getContext($context, "study")), "dates"), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t<h6><b><a href=\"https://";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["study"]) ? $context["study"] : $this->getContext($context, "study")), "link"), "html", null, true);
            echo "\">More... </a></b></h6>
\t\t\t\t\t</div>\t
\t\t\t\t\t";
            // line 18
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 19
                echo "\t\t\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle btn-default blue\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-cog icon-white\"></span><span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon-wrench\"></span> Modify</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"confirm-dialog\" data-bb=\"confirm\" href=\"#\" value=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removeStudy", array("id" => $this->getAttribute((isset($context["study"]) ? $context["study"] : $this->getContext($context, "study")), "id"))), "html", null, true);
                echo "\"><span class=\"icon-trash\"></span> Delete</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['study'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "\t\t\t<div class=\"col-md-8 img-thumbnail\">
\t\t\t\t<div class=\"col-md-12 controls-group\">
\t\t\t\t\t<form class=\"form\" name=\"addStudy\" method=\"post\"  ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">
\t\t\t\t\t\t<center><h2>Add a study<h2/></center><br/>
\t\t\t\t\t\t";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "<br/>
\t\t\t\t\t\t<button id=\"contact-submit\" type=\"submit\" class=\"btn btn-primary\">Send</button>\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 44
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:studies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  104 => 36,  90 => 31,  58 => 14,  134 => 47,  84 => 21,  70 => 24,  181 => 80,  174 => 76,  165 => 69,  114 => 40,  110 => 39,  65 => 23,  222 => 102,  216 => 98,  212 => 96,  210 => 95,  160 => 61,  124 => 55,  100 => 34,  20 => 1,  81 => 23,  53 => 14,  113 => 36,  97 => 33,  77 => 38,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 103,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 57,  132 => 56,  128 => 51,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 102,  235 => 74,  230 => 82,  227 => 81,  224 => 104,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 91,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 34,  71 => 18,  67 => 23,  63 => 15,  59 => 20,  38 => 13,  94 => 29,  89 => 48,  85 => 25,  75 => 18,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 27,  46 => 10,  27 => 9,  44 => 12,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 59,  142 => 52,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 36,  91 => 53,  62 => 15,  49 => 13,  24 => 4,  25 => 6,  19 => 2,  79 => 18,  72 => 16,  69 => 33,  47 => 14,  40 => 9,  37 => 10,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 49,  131 => 48,  123 => 49,  120 => 48,  115 => 36,  111 => 35,  108 => 53,  101 => 49,  98 => 31,  96 => 47,  83 => 25,  74 => 21,  66 => 16,  55 => 15,  52 => 13,  50 => 11,  43 => 10,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 66,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 40,  122 => 41,  116 => 54,  112 => 42,  109 => 38,  106 => 11,  103 => 10,  99 => 31,  95 => 28,  92 => 21,  86 => 30,  82 => 26,  80 => 19,  73 => 19,  64 => 19,  60 => 23,  57 => 15,  54 => 13,  51 => 15,  48 => 12,  45 => 11,  42 => 8,  39 => 7,  36 => 10,  33 => 9,  30 => 5,);
    }
}
