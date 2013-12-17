<?php

/* PortfolioPortfolioBundle:Portfolio:users.html.twig */
class __TwigTemplate_9f0880dfd542e8017203f75c2536c9c49077924227a615cbe2fe5cf422e1f8bc extends Twig_Template
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
\t\t\t<div class=\"widget stacked widget-table action-table\">
\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t<i class=\"icon-th-list\"></i>
\t\t\t\t\t<h3>Users</h3>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"widget-content\">
\t\t\t\t
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t\t<th>Password</th>
\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["key"] => $context["user"]) {
            // line 29
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("User", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" ><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo "</h3></a></td>
\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("User", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("User", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("User", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  58 => 14,  70 => 24,  114 => 35,  110 => 34,  249 => 103,  233 => 103,  223 => 97,  215 => 92,  190 => 70,  184 => 67,  153 => 59,  124 => 39,  100 => 36,  20 => 1,  81 => 19,  53 => 15,  113 => 36,  97 => 33,  77 => 31,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 104,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 56,  128 => 51,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 105,  230 => 82,  227 => 99,  224 => 71,  221 => 96,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 36,  102 => 35,  71 => 30,  67 => 23,  63 => 15,  59 => 20,  38 => 13,  94 => 28,  89 => 33,  85 => 25,  75 => 36,  68 => 29,  56 => 16,  87 => 23,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 27,  46 => 10,  27 => 9,  44 => 12,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 62,  166 => 71,  163 => 62,  158 => 64,  156 => 66,  151 => 60,  142 => 53,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 24,  62 => 15,  49 => 13,  24 => 4,  25 => 6,  19 => 2,  79 => 19,  72 => 16,  69 => 14,  47 => 11,  40 => 9,  37 => 10,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 49,  120 => 45,  115 => 43,  111 => 39,  108 => 32,  101 => 49,  98 => 31,  96 => 47,  83 => 32,  74 => 17,  66 => 16,  55 => 16,  52 => 13,  50 => 11,  43 => 10,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 60,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 54,  112 => 42,  109 => 34,  106 => 37,  103 => 10,  99 => 25,  95 => 28,  92 => 21,  86 => 28,  82 => 26,  80 => 19,  73 => 19,  64 => 28,  60 => 23,  57 => 15,  54 => 12,  51 => 12,  48 => 12,  45 => 11,  42 => 8,  39 => 7,  36 => 10,  33 => 9,  30 => 5,);
    }
}
