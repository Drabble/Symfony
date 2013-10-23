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
        return array (  87 => 49,  83 => 27,  68 => 19,  86 => 23,  79 => 21,  128 => 51,  125 => 50,  123 => 49,  116 => 37,  113 => 63,  103 => 10,  91 => 53,  23 => 2,  42 => 10,  54 => 15,  31 => 8,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 55,  92 => 51,  84 => 21,  72 => 15,  69 => 33,  51 => 13,  48 => 14,  35 => 5,  29 => 9,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  55 => 19,  114 => 22,  109 => 31,  106 => 11,  101 => 19,  85 => 22,  77 => 38,  67 => 15,  28 => 4,  39 => 9,  110 => 20,  89 => 48,  65 => 17,  63 => 30,  58 => 10,  34 => 5,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  46 => 12,  44 => 9,  36 => 10,  43 => 9,  57 => 16,  50 => 12,  47 => 13,  38 => 13,  27 => 9,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 48,  105 => 31,  100 => 27,  78 => 40,  75 => 23,  60 => 15,  53 => 19,  40 => 9,  32 => 6,  24 => 4,  25 => 6,  22 => 5,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 53,  93 => 18,  90 => 21,  81 => 14,  70 => 18,  66 => 13,  62 => 11,  59 => 29,  56 => 12,  52 => 17,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  30 => 7,);
    }
}
