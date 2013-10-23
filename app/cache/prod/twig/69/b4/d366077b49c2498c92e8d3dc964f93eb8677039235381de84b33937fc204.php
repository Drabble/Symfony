<?php

/* testBlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_69b4d366077b49c2498c92e8d3dc964f93eb8677039235381de84b33937fc204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("testBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'testblog_body' => array($this, 'block_testblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "testBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_testblog_body($context, array $blocks = array())
    {
        // line 10
        echo " 
  <h2>Modifier un article</h2>
 
  ";
        // line 13
        $this->env->loadTemplate("testBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 14
        echo " 
  <p>
    Vous éditez un article déjà existant,
    ne le changez pas trop pour éviter
    aux membres de ne pas comprendre
    ce qu'il se passe.
  </p>
 
  <p>
    <a href=\"";
        // line 23
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testblog_voir", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à l'article
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "testBlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  79 => 21,  128 => 51,  125 => 50,  123 => 49,  116 => 37,  113 => 36,  103 => 10,  91 => 53,  23 => 2,  42 => 10,  54 => 15,  31 => 8,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  69 => 33,  51 => 13,  48 => 14,  35 => 5,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  55 => 19,  114 => 22,  109 => 31,  106 => 11,  101 => 19,  85 => 22,  77 => 38,  67 => 15,  28 => 4,  39 => 9,  110 => 20,  89 => 48,  65 => 17,  63 => 30,  58 => 10,  34 => 5,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  46 => 12,  44 => 9,  36 => 10,  43 => 9,  57 => 16,  50 => 7,  47 => 13,  38 => 13,  27 => 9,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 48,  105 => 31,  100 => 27,  78 => 40,  75 => 36,  60 => 23,  53 => 19,  40 => 9,  32 => 6,  24 => 4,  25 => 6,  22 => 5,  19 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 8,  93 => 18,  90 => 21,  81 => 14,  70 => 18,  66 => 13,  62 => 11,  59 => 29,  56 => 12,  52 => 17,  49 => 14,  45 => 6,  41 => 9,  37 => 5,  33 => 6,  30 => 7,);
    }
}
