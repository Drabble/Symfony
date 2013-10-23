<?php

/* PortfolioPortfolioBundle:Portfolio:index.html.twig */
class __TwigTemplate_66bd7039ebcbbed8161837457f6f92b6d259fd5ef73bb0fa48be05150a6a7d16 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Portfolio</title>
\t\t<meta name=\"description\" content=\"Portfolio\" />
\t\t<meta name=\"author\" content=\"Antoine Drabble\" />
\t\t<meta name=\"viewport\" content=\"width=device-width\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/css/design.css"), "html", null, true);
        echo "\" />
\t\t<script src=\"//code.jquery.com/jquery-latest.min.js\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/jquery.slides.min.js"), "html", null, true);
        echo "\"></script> 
\t\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/portfolio.js"), "html", null, true);
        echo "\"></script> 
\t</head>
\t<body>
\t\t  <div class=\"container\">
    <div class=\"row\">
      <div class=\"span3\">
        <h1><a href=\"/Bootstrap/\">Portfolio</a></h1>
      </div>

      <div class=\"span9\">
        <br />

        <p class=\"pull-right\"><a href=\"#\"></a> <a href=\"#\"></a> <a href=\"#\"></a> <a href=
        \"#\"></a> <a href=\"#\"></a></p>
      </div>
    </div>
    <hr />

    <div class=\"row\">
      <div class=\"span6\">
        <ul class=\"nav nav-tabs\">
          <li id=\"home\"><a href=\"#\">Home</a></li>

          <li id=\"studies\"><a href=\"#\">Studies</a></li>

          <li id=\"projects\"><a href=\"#\">Projects</a></li>

          <li id=\"contact\"><a href=\"#\">Contact</a></li>
        </ul>
      </div>
    </div>

    <div class=\"row\" id=\"page_home\">
      <div class=\"span12\">
        <div id=\"slides\">
          <img class=\"slider_img\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/Penguins.jpg"), "html", null, true);
        echo "\" alt=
          \"Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/\" />
          <img class=\"slider_img\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/Desert.jpg"), "html", null, true);
        echo "\" alt=
          \"Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/\" />
           <img class=\"slider_img\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/JellyFish.jpg"), "html", null, true);
        echo "\" alt=
          \"Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/\" />
           <img class=\"slider_img\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/a4.jpg"), "html", null, true);
        echo "\" alt=
          \"Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/\" />
           <a href=\"#\" class=\"slidesjs-previous slidesjs-navigation\"></a> <a href=\"#\"
          class=\"slidesjs-next slidesjs-navigation\"></a>
        </div>
      </div>
    </div><!--<li class=\"span3\">      
        <div class=\"thumbnail\">       
        <a href=\"detail.html\"><img id=\"picture\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("pictures/Desert.jpg"), "html", null, true);
        echo "\" alt=\"thumbnail\" /></a> 
        <div class=\"category\"><i class=\"icon-tag icon-white\"></i> <a href=\"#\">Photoshop</a>, <a href=\"#\">Typography</a></div>                 
        <div class=\"caption\">                 
        <h2>Lorem ipsum</h2>      
        <p class=\"post-date\">19th July 2012</p>         
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>                     
        <hr />                         
        <p><a href=\"detail.html\" class=\"btn\">Read on &rarr;</a></p>    
        </div>                    
    </div>               
        </li>      
        </ul>       
        <div class=\"pagination\">      
        <ul>                  
        <li><a href=\"#\">Prev</a></li>               
        <li class=\"active\">                        
    <a href=\"#\">1</a>                      
        </li>                    
    <li><a href=\"#\">2</a></li>               
        <li><a href=\"#\">3</a></li>            
        <li><a href=\"#\">4</a></li>            
        <li><a href=\"#\">Next</a></li>         
        </ul>           
        </div>-->

    <div class=\"row\" id=\"page_studies\">
      <div class=\"span12\">
        <h2>Studies</h2>

        <p>YO</p>
      </div>
    </div>

    <div class=\"row\" id=\"page_projects\">
      <div class=\"span12\">
        <h2>Projects</h2>

        <p>Bla</p>
      </div>
    </div>

    <div class=\"row\" id=\"page_contact\">
      <div class=\"span12\">
        <h2>Contact</h2>

        <p>Our Details<br />
        <br />
        Deep<br />
        7th Floor<br />
        Block 2<br />
        Elizabeth House<br />
        39 York Road<br />
        London SE1 7NQ<br />
        <br />
        T +44 (0)20 7593 0555<br />
        F +44 (0)20 7593 0556<br />
        <br />
        For new business enquiries please contact talktous@deep.co.uk<br /></p>
      </div>
    </div><br />
    <br />
    <hr />

    <div class=\"row\">
      <div class=\"span12\">
        <p>Copyright Drabble 2013</p>
      </div>
    </div>
  </div>

\t</body>
</html>";
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
        return array (  117 => 64,  106 => 56,  101 => 54,  96 => 52,  91 => 50,  53 => 15,  49 => 14,  45 => 13,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
