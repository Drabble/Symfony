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
\t\t<script src=\"//code.jquery.com/jquery-latest.min.js\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/jquery.slides.min.js"), "html", null, true);
        echo "\"></script> 
\t\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/js/script.js"), "html", null, true);
        echo "\"></script> 
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/css/design.css"), "html", null, true);
        echo "\" />
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
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/Penguins.jpg"), "html", null, true);
        echo "\" alt=
          \"Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/\" />
          <img class=\"slider_img\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/Desert.jpg"), "html", null, true);
        echo "\" alt=
          \"Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/\" />
           <img class=\"slider_img\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portfolioportfolio/pictures/JellyFish.jpg"), "html", null, true);
        echo "\" alt=
          \"Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/\" />
           <img class=\"slider_img\" src=\"";
        // line 55
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
        // line 63
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
  <script type='text/javascript'>
                \$(function (){\t\t\t
\t\$(\"[rel='tooltip']\").tooltip();\t\t
\t\$('#slides').slidesjs({\t\t\t\t
\t\twidth: 940,\t\t\t\t
\t\theight: 400,\t\t\t\t
\t\tnavigation: false\t\t\t
\t});\t\t\t\t\t\t\t
\t\$(\".slider_img\").each(function( i ) {\t
\t\tvar height = \$(this).height();\t\t\t
\t\tvar diff =  (parseInt(height) / 4);\t\t
\t\tif (height>400){\t\t\t\t\t
\t\t\t\$(this).css('top', ('-' + diff + 'px'));\t
\t\t}\t
\t});\t\t\t
\t\$('#home').click(function() {\t
\t\t\$(\"#page_studies, #page_contact, #page_projects\").css('display', 'none');
\t\t\$(\"#page_home\").css('display', 'block');\t\t\t\t\t
\t\t\$(\"#projects, #contact, #studies\").css('border-bottom', 'none' );\t
\t\t\$(\"#home\").css('border-bottom', '1px solid #6E6E6E');\t\t\t\t
\t});\t\t
\t\$('#studies').click(function() {\t\t\t\t
\t\t\$(\"#page_home, #page_projects, #page_contact\").css('display', 'none');\t
\t\t\$(\"#page_studies\").css('display', 'block');\t\t\t\t
\t\t\$(\"#projects, #home, #contact\").css('border-bottom', 'none' );\t\t\t
\t\t\$(\"#studies\").css('border-bottom', '1px solid #6E6E6E');\t\t\t
\t});\t\t
\t\$('#projects').click(function() {\t\t\t\t
\t\t\$(\"#page_studies, #page_contact, #page_home\").css('display', 'none');\t
\t\t\$(\"#page_projects\").css('display', 'block');\t\t\t\t
\t\t\$(\"#studies, #contact, #home\").css('border-bottom', 'none' );\t\t
\t\t\$(\"#projects\").css('border-bottom', '1px solid #6E6E6E');\t\t\t
\t});\t\t
\t\$('#contact').click(function() {
\t\t\$(\"#page_home, #page_projects, #page_studies\").css('display', 'none');\t
\t\t\$(\"#page_contact\").css('display', 'block');\t\t\t\t\t
\t\t\$(\"#projects, #studies, #home\").css('border-bottom', 'none' );\t
\t\t\$(\"#contact\").css('border-bottom', '1px solid #6E6E6E');\t\t
\t});\t\t\t
}); \t\t
  </script>

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
        return array (  81 => 23,  53 => 15,  113 => 63,  97 => 53,  77 => 38,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 51,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 55,  71 => 23,  67 => 15,  63 => 30,  59 => 29,  38 => 13,  94 => 28,  89 => 48,  85 => 25,  75 => 36,  68 => 14,  56 => 16,  87 => 49,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 27,  46 => 12,  27 => 9,  44 => 12,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 53,  62 => 17,  49 => 14,  24 => 4,  25 => 6,  19 => 1,  79 => 18,  72 => 16,  69 => 33,  47 => 13,  40 => 9,  37 => 11,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 49,  120 => 48,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 21,  66 => 18,  55 => 19,  52 => 17,  50 => 10,  43 => 10,  41 => 12,  35 => 5,  32 => 6,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 37,  112 => 42,  109 => 34,  106 => 11,  103 => 10,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 19,  60 => 23,  57 => 15,  54 => 10,  51 => 14,  48 => 14,  45 => 13,  42 => 10,  39 => 9,  36 => 10,  33 => 10,  30 => 5,);
    }
}
