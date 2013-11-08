<?php

/* PortfolioPortfolioBundle:Portfolio:index.html.twig */
class __TwigTemplate_66bd7039ebcbbed8161837457f6f92b6d259fd5ef73bb0fa48be05150a6a7d16 extends Twig_Template
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
\t  <div class=\"span12\">
\t\t<div id=\"slides\">
\t\t  <img class=\"slider_img\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/Penguins.jpg"), "html", null, true);
        echo "\" alt=
\t\t  \"Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/\" />
\t\t  <img class=\"slider_img\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/Desert.jpg"), "html", null, true);
        echo "\" alt=
\t\t  \"Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/\" />
\t\t   <img class=\"slider_img\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/JellyFish.jpg"), "html", null, true);
        echo "\" alt=
\t\t  \"Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/\" />
\t\t   <img class=\"slider_img\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/a4.jpg"), "html", null, true);
        echo "\" alt=
\t\t  \"Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/\" />
\t\t   <a href=\"#\" class=\"slidesjs-previous slidesjs-navigation\"></a> <a href=\"#\"
\t\t  class=\"slidesjs-next slidesjs-navigation\"></a>
\t\t</div>
\t  </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  57 => 15,  52 => 13,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}