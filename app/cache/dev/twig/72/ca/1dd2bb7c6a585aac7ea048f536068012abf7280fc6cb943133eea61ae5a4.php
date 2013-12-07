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
\t  <div class=\"col-md-12\">
\t\t<center><h2>Studies</h2></center>
\t\t<p>
\t\t\t<ul>
\t\t\t\t<li><b>Senior Designer</b><br/>
\t\t\t\tHoller Sydney, Australia<br/></li>
\t\t\t\t<li><b>Designer</b><br/>
\t\t\t\tHoller Sydney, Australia<br/></li>
\t\t\t\t<li><b>Illustrator & Designer</b><br/>
\t\t\t\tReborn Sydney, Australia<br/></li>
\t\t\t\t<li><b>Illustrator, Designer and Animator</b><br/>
\t\t\t\tCyberdesign Works Sydney, Australia</li>
\t\t\t</ul>
\t\t</p>
\t  </div>
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
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
