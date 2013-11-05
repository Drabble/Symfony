<?php

/* testBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_0b371f0f46f4a16b4c1f06f5aa1838313609e04f5421adb57803eded7281b625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
<h3>Les derniers articles</h3>
 
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "testBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  19 => 2,  128 => 51,  125 => 50,  123 => 49,  120 => 48,  116 => 37,  113 => 36,  106 => 11,  103 => 10,  97 => 8,  91 => 53,  89 => 48,  77 => 38,  75 => 36,  69 => 33,  59 => 29,  38 => 13,  36 => 10,  31 => 8,  23 => 2,  63 => 30,  60 => 17,  55 => 19,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  81 => 23,  74 => 21,  66 => 18,  62 => 17,  56 => 16,  53 => 15,  48 => 14,  42 => 15,  39 => 9,  32 => 6,  29 => 7,);
    }
}
