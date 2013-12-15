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
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
