<?php

/* PortfolioPortfolioBundle:Portfolio:chat.html.twig */
class __TwigTemplate_dc41df818bc88273bb8877d9ba1bf356bcde64f10dc78ad7096a3e9ff0366fea extends Twig_Template
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
\t  <div class=\"col-md-12\">
\t\t<br/>
\t\t<p>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<span class=\"glyphicon icon-comment\"></span> Chat
\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon icon-chevron-down\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu slidedown\">
\t\t\t\t\t\t\t\t<li><a href=\"http://www.jquery2dotnet.com\"><span class=\"glyphicon icon-refresh\">
\t\t\t\t\t\t\t\t</span>Refresh</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"http://www.jquery2dotnet.com\"><span class=\"glyphicon icon-ok-sign\">
\t\t\t\t\t\t\t\t</span>Available</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"http://www.jquery2dotnet.com\"><span class=\"glyphicon icon-remove\">
\t\t\t\t\t\t\t\t</span>Busy</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"http://www.jquery2dotnet.com\"><span class=\"glyphicon icon-time\"></span>
\t\t\t\t\t\t\t\t\tAway</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a href=\"http://www.jquery2dotnet.com\"><span class=\"glyphicon icon-off\"></span>
\t\t\t\t\t\t\t\t\tSign Out</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body chat-scroll\">
\t\t\t\t\t\t<ul class=\"chat\">
\t\t\t\t\t\t\t<li class=\"left clearfix\"><span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/50/55C1E7/fff&text=U\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"primary-font\">Jack Sparrow</strong> <small class=\"pull-right text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon icon-time\"></span>12 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
\t\t\t\t\t\t\t\t\t\tdolor, quis ullamcorper ligula sodales.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"left clearfix\"><span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/50/55C1E7/fff&text=U\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"primary-font\">Jack Sparrow</strong> <small class=\"pull-right text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon icon-time\"></span>12 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
\t\t\t\t\t\t\t\t\t\tdolor, quis ullamcorper ligula sodales.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"left clearfix\"><span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/50/55C1E7/fff&text=U\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"primary-font\">Jack Sparrow</strong> <small class=\"pull-right text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon icon-time\"></span>12 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
\t\t\t\t\t\t\t\t\t\tdolor, quis ullamcorper ligula sodales.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"left clearfix\"><span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/50/55C1E7/fff&text=U\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"primary-font\">Jack Sparrow</strong> <small class=\"pull-right text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon icon-time\"></span>12 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
\t\t\t\t\t\t\t\t\t\tdolor, quis ullamcorper ligula sodales.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"left clearfix\"><span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/50/55C1E7/fff&text=U\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"primary-font\">Jack Sparrow</strong> <small class=\"pull-right text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon icon-time\"></span>12 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
\t\t\t\t\t\t\t\t\t\tdolor, quis ullamcorper ligula sodales.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"left clearfix\"><span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/50/55C1E7/fff&text=U\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"primary-font\">Jack Sparrow</strong> <small class=\"pull-right text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon icon-time\"></span>12 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
\t\t\t\t\t\t\t\t\t\tdolor, quis ullamcorper ligula sodales.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"right clearfix\"><span class=\"chat-img pull-right\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/50/FA6F57/fff&text=ME\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<small class=\" text-muted\"><span class=\"glyphicon icon-time\"></span>13 mins ago</small>
\t\t\t\t\t\t\t\t\t\t<strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
\t\t\t\t\t\t\t\t\t\tdolor, quis ullamcorper ligula sodales.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"left clearfix\"><span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/50/55C1E7/fff&text=U\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"primary-font\">Jack Sparrow</strong> <small class=\"pull-right text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon icon-time\"></span>14 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
\t\t\t\t\t\t\t\t\t\tdolor, quis ullamcorper ligula sodales.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"right clearfix\"><span class=\"chat-img pull-right\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/50/FA6F57/fff&text=ME\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<small class=\" text-muted\"><span class=\"glyphicon icon-time\"></span>15 mins ago</small>
\t\t\t\t\t\t\t\t\t\t<strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
\t\t\t\t\t\t\t\t\t\tdolor, quis ullamcorper ligula sodales.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message here...\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" id=\"btn-chat\">
\t\t\t\t\t\t\t\t\tSend</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</p>
\t  </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  110 => 34,  249 => 103,  233 => 103,  223 => 97,  215 => 92,  190 => 70,  184 => 67,  153 => 59,  124 => 39,  100 => 52,  20 => 1,  81 => 19,  53 => 15,  113 => 36,  97 => 8,  77 => 38,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 104,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 56,  128 => 51,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 105,  230 => 82,  227 => 99,  224 => 71,  221 => 96,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 36,  102 => 32,  71 => 23,  67 => 15,  63 => 14,  59 => 13,  38 => 13,  94 => 28,  89 => 48,  85 => 25,  75 => 36,  68 => 14,  56 => 16,  87 => 23,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 27,  46 => 12,  27 => 9,  44 => 12,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 62,  166 => 71,  163 => 62,  158 => 64,  156 => 66,  151 => 60,  142 => 53,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 24,  62 => 17,  49 => 13,  24 => 4,  25 => 6,  19 => 2,  79 => 19,  72 => 16,  69 => 14,  47 => 11,  40 => 9,  37 => 10,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 49,  120 => 48,  115 => 43,  111 => 37,  108 => 32,  101 => 33,  98 => 31,  96 => 31,  83 => 20,  74 => 17,  66 => 18,  55 => 16,  52 => 17,  50 => 14,  43 => 10,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 60,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 54,  112 => 42,  109 => 34,  106 => 11,  103 => 10,  99 => 25,  95 => 28,  92 => 21,  86 => 28,  82 => 20,  80 => 19,  73 => 19,  64 => 19,  60 => 23,  57 => 15,  54 => 15,  51 => 12,  48 => 14,  45 => 11,  42 => 8,  39 => 7,  36 => 10,  33 => 9,  30 => 5,);
    }
}
