<?php

/* PortfolioPortfolioBundle:Portfolio:contact.html.twig */
class __TwigTemplate_1fb8d7cab839017dfdf296cb97e6c71288f7e2a2f8ed54700fb28d33fc301f34 extends Twig_Template
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
\t\t\t<center>
\t\t\t\t<center><h2>Contact</h2></center>
\t\t\t\t<p>\t<br />
\t\t\t\t<b>Deep<br />
\t\t\t\t7th Floor<br />
\t\t\t\tBlock 2<br />
\t\t\t\tElizabeth House<br />
\t\t\t\t39 York Road<br />
\t\t\t\tLondon SE1 7NQ</b><br />
\t\t\t\t<br />
\t\t\t\tT +44 (0)20 7593 0555<br />
\t\t\t\tF +44 (0)20 7593 0556<br />
\t\t\t\t<br />
\t\t\t\tFor new business enquiries please contact talktous@deep.co.uk<br /></p>
\t\t\t</center>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:contact.html.twig";
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
