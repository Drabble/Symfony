<?php

/* testBlogBundle:Default:index.html.twig */
class __TwigTemplate_e89acff79ebaf1240b3aab5dc3d021be extends Twig_Template
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
<html>
  <body>
    Hello ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "testBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 5,  19 => 2,);
    }
}
