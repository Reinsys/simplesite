<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home.html */
class __TwigTemplate_75747926abad8dbea5c7fc9031789324b764dd89e3e4ddf2f5ae4263094112ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from www.colorcrow.com/templates/preschools/sample1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Aug 2019 22:42:19 GMT -->
<head>
   ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 50
        echo "</head>
   <body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-custom\">
   <!-- Page width 'Boxed' of 'Full' -->
   <div class=\"full\">
      <!-- Preloader -->
      <div id=\"preloader\">
         <div class=\"preloader\">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
         </div>
      </div>
\t   <!-- Start Switcher -->
\t\t<div class=\"demo_changer\">
\t\t\t<div class=\"demo-icon\">
            \t<i class=\"fa fa-cog fa-2x\"></i>
            </div><!-- end opener icon -->
            <div class=\"form_holder\">
            \t<div class=\"row\">                \t
                \t<div class=\"col-md-12 text-center\">
                \t\t<div class=\"predefined_styles\"> \t\t\t\t\t\t\t
                            <h4>Choose a Color Skin</h4>
                    \t\t<!-- MODULE #3 -->
\t\t\t\t\t\t\t<a href=\"#\" class=\"styleswitch\"><img src=\"/switcher/images/icons/playground.png\" class=\"img-circle\" alt=\"\"></a>     
\t\t\t\t\t\t\t<a href=\"#\"  class=\"styleswitch\"><img src=\"/switcher/images/icons/games.png\" class=\"img-circle\" alt=\"\"></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"styleswitch\"><img src=\"/switcher/images/icons/funtime.png\" class=\"img-circle\" alt=\"\"></a> 
\t\t\t\t\t\t\t<h4>Width</h4>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn styleswitch\">Boxed</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn styleswitch\">Full Width</a>
                        </div><!-- end predefined_styles -->
                \t</div><!-- end col -->  
                </div><!-- end row -->
            </div><!-- end form_holder -->
        </div><!-- end demo_changer -->
    <!-- End Switcher -->
      <!-- Navbar -->
      <nav class=\"navbar navbar-custom navbar-fixed-top\">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-brand-centered\">
            <i class=\"fa fa-bars\"></i>
            </button>
            <div class=\"navbar-brand-centered page-scroll\">
               <a href=\"#page-top\"><img src=\"/img/logo.png\"  alt=\"\"></a>
            </div>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class=\"collapse navbar-collapse\" id=\"navbar-brand-centered\">
\t\t \t<div class=\"container\">
               <ul class=\"nav navbar-nav page-scroll navbar-left\">
                  <li><a href=\"#page-top\">Home</a></li>
                  <li><a href=\"#services\">Our Services</a></li>
                  <li><a href=\"#about\">About</a></li>
                  <li><a href=\"#team\">Team</a></li>
                  <li><a href=\"#activities\">Activities</a></li>
               </ul>
               <ul class=\"nav navbar-nav page-scroll navbar-right\">
                  <li><a href=\"#gallery\">Gallery</a></li>
                  <!-- Dropdown -->
                  <li class=\"dropdown active\">
                     <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog<b class=\"caret\"></b></a>
                     <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Blog Home</a></li>
                        <li><a href=\"#\">Blog Post</a></li>
                        <li class=\"divider\"></li>
                        <li class=\"active\"><a href=\"#latestblog\">Latest Posts</a></li>
                     </ul>
                  </li>
                  <li><a href=\"#prices\">Prices</a></li>
                  <li><a href=\"#\">Elements</a></li>
                  <li><a href=\"#contact\">Contact</a></li>
               </ul>
\t\t\t</div>
         </div>
         <!-- /.navbar-collapse -->
      </nav>
\t  <!-- /navbar ends -->
\t  
      <!-- Slider -->
      <div id=\"layerslider\">
         <!-- Slide 1 -->
         <div class=\"ls-slide\" data-ls=\"transition2d:104;timeshift:-2000;\">
            <!-- Background image -->
            <img src=\"/img/slide1.jpg\" class=\"ls-bg\"  alt=\"Slide background\"/>
            <!-- Parallax Image -->
            <img src=\"/img/sun.png\" class=\"ls-l img-responsive hidden-xs hidden-sm parallax1\" alt=\"\" data-ls=\"delayin:1000;easingin:fadeIn;parallaxlevel:7;\">
            <!-- Text -->
            <div class=\"ls-l header-text container\" data-ls=\"offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;\">
               <h1>Welcome to Alphabet</h1>
               <p class=\"subtitle hidden-xs\"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
               <!-- Button -->
               <div class=\"page-scroll hidden-xs\">
                  <a class=\"btn\" href=\"#contact\">Contact us</a>
               </div>
            </div>
            <!-- Parallax Image -->
            <img src=\"/img/flower.png\" class=\"ls-l img-responsive hidden-xs hidden-sm parallax2\" alt=\"\" data-ls=\"delayin:1500;easingin:fadeIn;parallaxlevel:6;\">
         </div>
\t\t 
         <!-- Slide 2 -->
         <div class=\"ls-slide\" data-ls=\"transition2d:104;timeshift:-2000;\">
            <!-- Background image -->
            <img src=\"/img/slide2.jpg\" class=\"ls-bg\"  alt=\"Slide background\"/>
            <!-- Parallax Image -->
            <img src=\"/img/bee.png\" class=\"ls-l img-responsive hidden-xs hidden-sm parallax1\" alt=\"\" data-ls=\"delayin:1500;easingin:fadeIn;parallaxlevel:7;\">
            <!-- Text -->
            <div class=\"ls-l header-text\"  data-ls=\"offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;\">
               <h1>Quality daycare</h1>
               <p class=\"subtitle hidden-xs\"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
               <!-- Button -->
               <div class=\"page-scroll hidden-xs\">
                  <a class=\"btn\" href=\"#contact\">Contact us</a>
               </div>
            </div>
            <!-- Parallax Image -->
            <img src=\"/img/star.png\" class=\"ls-l img-responsive hidden-xs hidden-sm parallax2\" alt=\"\" data-ls=\"delayin:1500;easingin:fadeIn;parallaxlevel:6;\">
         </div>
\t\t 
         <!-- Slide 3 -->
         <div class=\"ls-slide\" data-ls=\"transition2d:104;timeshift:-2000;\">
            <!-- Background image -->
            <img src=\"/img/slide3.jpg\" class=\"ls-bg\"  alt=\"Slide background\"/>
            <!-- Parallax Image -->
            <img src=\"/img/sun.png\" class=\"ls-l img-responsive hidden-xs hidden-sm parallax1\" alt=\"\" data-ls=\"delayin:1000;easingin:fadeIn;parallaxlevel:7;\">
            <!-- Text -->
            <div class=\"ls-l header-text\"  data-ls=\"offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;\">
               <h1>Welcome to Alphabet</h1>
               <p class=\"subtitle hidden-xs\"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
               <!-- Button -->
               <div class=\"page-scroll hidden-xs\">
                  <a class=\"btn\" href=\"#contact\">Contact us</a>
               </div>
            </div>
            <!-- Parallax Image -->
            <img src=\"/img/flower.png\" class=\"ls-l img-responsive hidden-xs hidden-sm parallax2\" alt=\"\" data-ls=\"delayin:1500;easingin:fadeIn;parallaxlevel:6;\">
         </div>
\t\t 
         <!-- Slide 4 -->
         <div class=\"ls-slide\" data-ls=\"transition2d:104;timeshift:-2000;\">
            <!-- Background image -->
            <img src=\"/img/slide4.jpg\" class=\"ls-bg\"  alt=\"Slide background\"/>
            <!-- Parallax Image -->
            <img src=\"/img/bee.png\" class=\"ls-l img-responsive hidden-xs hidden-sm parallax1\" alt=\"\" data-ls=\"delayin:1500;easingin:fadeIn;parallaxlevel:7;\">
            <!-- Text -->
            <div class=\"ls-l header-text\" data-ls=\"offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;\">
               <h1>Quality daycare</h1>
               <p class=\"subtitle hidden-xs\"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
               <!-- Button -->
               <div class=\"page-scroll hidden-xs\">
                  <a class=\"btn\" href=\"#contact\">Contact us</a>
               </div>
            </div>
            <!-- Parallax Image -->
            <img src=\"/img/star.png\" class=\"ls-l img-responsive hidden-xs hidden-sm parallax2\" alt=\"\" data-ls=\"delayin:1500;easingin:fadeIn;parallaxlevel:6;\">
         </div>
\t\t 
\t\t <!-- Slide 5 -->
         <div class=\"ls-slide\" data-ls=\"transition2d:104;timeshift:-2000;\">
            <!-- Background image -->
            <img src=\"/img/slide5.jpg\" class=\"ls-bg\"  alt=\"Slide background\"/>
\t\t\t<!-- Video -->
\t\t\t<div class=\"ls-l video\" data-ls=\"delayin:1500;easingin:fadeIn;\">
\t\t\t\t<iframe width=\"760\" height=\"475\" src=\"https://www.youtube.com/embed/e9p0xmsU3h0\" allowfullscreen></iframe>
\t\t\t</div>
            <!-- Parallax Image -->
            <img src=\"/img/bee.png\" class=\"ls-l img-responsive hidden-xs hidden-sm parallax1\" alt=\"\" data-ls=\"delayin:1500;easingin:fadeIn;parallaxlevel:7;\">
\t\t\t<!-- Text -->
            <div class=\"ls-l header-text\" data-ls=\"offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;\">
               <h1>Video Layer</h1>
               <p class=\"subtitle hidden-xs\"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
               <!-- Button -->
               <div class=\"page-scroll hidden-xs\">
                  <a class=\"btn\" href=\"#contact\">Contact us</a>
               </div>
            </div>
            <!-- Parallax Image -->
            <img src=\"/img/star.png\" class=\"ls-l img-responsive hidden-xs hidden-sm parallax2\" alt=\"\" data-ls=\"delayin:1500;easingin:fadeIn;parallaxlevel:6;\">
         </div>
      </div>
      <!-- /Layerslider ends-->
      <!-- Clouds SVG Divider -->
      <div class=\"hidden-xs container-fluid cloud-divider\">
         <svg id=\"deco-clouds1\" class=\"head\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100%\" height=\"100\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\">
            <path d=\"M-5 100 Q 0 20 5 100 Z
               M0 100 Q 5 0 10 100
               M5 100 Q 10 30 15 100
               M10 100 Q 15 10 20 100
               M15 100 Q 20 30 25 100
               M20 100 Q 25 -10 30 100
               M25 100 Q 30 10 35 100
               M30 100 Q 35 30 40 100
               M35 100 Q 40 10 45 100
               M40 100 Q 45 50 50 100
               M45 100 Q 50 20 55 100
               M50 100 Q 55 40 60 100
               M55 100 Q 60 60 65 100
               M60 100 Q 65 50 70 100
               M65 100 Q 70 20 75 100
               M70 100 Q 75 45 80 100
               M75 100 Q 80 30 85 100
               M80 100 Q 85 20 90 100
               M85 100 Q 90 50 95 100
               M90 100 Q 95 25 100 100
               M95 100 Q 100 15 105 100 Z\">
            </path>
         </svg>
      </div>
      <!-- / section ends-->
\t  
      <!-- Section Services -->
      <section id=\"services\" class=\"color-section\">
         <div class=\"container\">
            <div class=\"col-lg-8 col-lg-offset-2\">
               <!-- Section heading -->
               <div class=\"section-heading\">
                  <h2>Our Services</h2>
               </div>
            </div>
            <div class=\"row\">
\t\t\t<!-- main text -->
               <div class=\"col-md-12 col-lg-7 text-center\">
                  <h3 class=\"text-center\">The Best Daycare</h3>
                  <p>Alphabet Daycare will provide a stimulating and safe environment for children ages three months to ten years. Run by a former elementary school educator (Jane Doe), Alphabet Daycare will be the fun, affordable alternative daycare with the best quality you can find in town.
                     We seek to stimulate and develop children’s problem-solving and reactive thinking skills through staff and child directed activities in our daily agenda. 
                     Lectus placerat a ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen Lectus placerat a ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem.
                  </p>
               </div>
               <!-- /col-sm-12-->
               <div class=\"col-md-12 col-lg-5\">
                  <!-- Image -->
                  <img src=\"/img/services.png\" alt=\"\" class=\"img-responsive center-block\">
               </div>
               <!-- /col-md-12-->
            </div>
            <!-- /row -->
            <div class=\"row\">
               <!-- item 1-->
               <div class=\"col-md-4 col-sm-12\">
                  <div class=\"service float\">
                     <img src=\"/img/service1.jpg\" alt=\"\" class=\"img-circle center-block img-responsive\">
                     <h4>Infants</h4>
                     <p>Lectus placerat a ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem.</p>
                  </div>
               </div>
               <!-- /col-md-4-->
               <!-- item 2-->
               <div class=\"col-md-4 col-sm-12 res-margin\">
                  <div class=\"service float\">
                     <img src=\"/img/service2.jpg\" alt=\"\" class=\"img-circle center-block img-responsive\">
                     <h4>Toddlers</h4>
                     <p>Lectus placerat a ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem.</p>
                  </div>
               </div>
               <!-- /col-md-3-->
               <!-- item 3-->
               <div class=\"col-md-4 col-sm-12\">
                  <div class=\"service float\">
                     <img src=\"/img/service3.jpg\" alt=\"\" class=\"img-circle center-block img-responsive\">
                     <h4>Pre School</h4>
                     <p>Lectus placerat a ultricies a, interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem.</p>
                  </div>
               </div>
               <!-- /col-md-4-->   
               <!-- item 3-->
            </div>
            <!-- /row -->
         </div>
         <!-- /container-->
      </section>
      <!-- /Section ends -->
\t  
      <!-- Section Callout -->
      <section id=\"callout\" class=\"small-section\">
         <!-- Clouds background -->
          <!-- Clouds background -->
         <div class=\"hidden-xs\">
\t\t\t  <div class=\"cloud x1\"></div>
\t\t\t  <div class=\"cloud x2\"></div>
\t\t\t  <div class=\"cloud x3\"></div>
\t\t\t  <div class=\"cloud x4\"></div>
\t\t\t  <div class=\"cloud x5\"></div>
\t\t\t  <div class=\"cloud x6\"></div>
\t\t\t  <div class=\"cloud x7\"></div>
\t\t</div>
         <!-- /Clouds ends -->
         <div class=\"container\">
            <!-- Animated Sun -->
            <div class=\"sun hidden-sm hidden-xs\">
               <div class=\"sun-face\">
                  <div class=\"sun-hlight\"></div>
                  <div class=\"sun-leye\"></div>
                  <div class=\"sun-reye\"></div>
                  <div class=\"sun-lred\"></div>
                  <div class=\"sun-rred\"></div>
                  <div class=\"sun-smile\"></div>
               </div>
               <!-- Sun rays -->
               <div class=\"sun-anime\">
                  <div class=\"sun-ball\"></div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
                  <div class=\"sun-light\"><b></b><s></s>
                  </div>
               </div>
            </div>
            <!-- /Animated Sun -->
            <div class=\"col-md-6 col-sm-6 text-center\">
              <div class=\"well\">
               <h3>Visit Our Daycare</h3>
               <p>Lotam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi Suspendisse a elementum anteu imperdiet et maecenas eu eros non nibh aliquet iaculis..</p>
               <div class=\"page-scroll\">
                  <!-- Button-->
                  <a class=\"btn\" href=\"#contact\">Contact us</a>
               </div>
\t\t\t  </div>
\t\t\t  <!-- /well -->
            </div>
            <!-- /col-md-6 -->
         </div>
         <!-- /container-->
      </section>
      <!-- Section Ends-->
\t  
      <!-- Section About -->
      <section id=\"about\">
         <div class=\"container\">
            <div class=\"col-lg-8 col-lg-offset-2\">
               <!-- Section heading -->
               <div class=\"section-heading\">
                  <h2>About us</h2>
               </div>
            </div>
            <div class=\"row\">
               <div class=\"col-sm-12 col-lg-5\">
                  <!-- Carousel -->
                  <div id=\"owl-about\" class=\"owl-carousel\">
                     <div class=\"item\">
                        <img class=\"img-responsive\" src=\"/img/about1.jpg\" alt=\"\">
                     </div>
                     <div class=\"item\">
                        <img class=\"img-responsive\" src=\"/img/about2.jpg\" alt=\"\">
                     </div>
                     <div class=\"item\">
                        <img class=\"img-responsive\" src=\"/img/about3.jpg\" alt=\"\">
                     </div>
                  </div>
               </div>
               <!-- text -->
               <div class=\"col-lg-7 col-sm-12\">
                  <h3>Our Philosophy</h3>
                  <p>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac
                     sodales felis tiam non Doloreiur qui commolu ptatemp dolupta orem retibusam 
                     andigen Ibu lum orci eget, viverra elit aliquam erat volut pat phas ellus ac sodales felis tiam non metus.
                     Placerat a ultricies a, posuere lorem ipseut lincas psuiem t volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset campas fincas interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis.
                  </p>
                  <p>Lorem ipsum dolor sit amet, lorem ipsuet lora consectetur adipisicing elit Illo itaque ipsum sit ha Bu lum orci eget, viverra elit aliquam erat volut pat phas ellus ac
                     dolupta orem retibusam qui commolu les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum. 
                  </p>
               </div>
               <!-- /col-lg-8 -->
            </div>
            <!-- /row -->
            <div class=\"row features\">
               <!-- First Collumn -->
               <div class=\"col-lg-4 col-sm-12\">
                  <!-- item1 -->
                  <div class=\"media text-center\">
                     <i class=\"flaticon-game\"></i>
                     <div class=\"media-body\">
                        <h5 class=\"media-heading\">infrastructure</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                  </div>
                  <!-- item2 -->
                  <div class=\"media text-center\">
                     <i class=\"flaticon-fruit\"></i>
                     <div class=\"media-body\">
                        <h5 class=\"media-heading\">Certified Tutors</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                  </div>
               </div>
               <!-- Second Collumn -->
               <div class=\"col-lg-4 col-sm-12\">
                  <!-- item3 -->
                  <div class=\"media text-center\">
                     <i class=\"flaticon-two\"></i>
                     <div class=\"media-body\">
                        <h5 class=\"media-heading\">Small Class Size</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                  </div>
                  <!-- item4 -->
                  <div class=\"media text-center\">
                     <i class=\"flaticon-person-1\"></i>
                     <div class=\"media-body\">
                        <h5 class=\"media-heading\">Infant Care</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                  </div>
               </div>
               <!-- Third Collumn -->
               <div class=\"col-lg-4 col-sm-12\">
                  <!-- item5 -->
                  <div class=\"media text-center\">
                     <i class=\"flaticon-school\"></i>
                     <div class=\"media-body\">
                        <h5 class=\"media-heading\">Safety First</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                  </div>
                  <!-- item6 -->
                  <div class=\"media text-center\">
                     <i class=\"flaticon-music\"></i>
                     <div class=\"media-body\">
                        <h5 class=\"media-heading\">Activities</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /row features -->
            <div class=\"col-lg-12 col-sm-12 paper_block\">
               <h3 class=\"text-center\">What Parents Think</h3>
               <div id=\"owl-testimonials\" class=\"owl-carousel\">
                  <!-- testimonial 1-->
                  <blockquote>
                     <div class=\"col-md-4 col-lg-4 col-centered\">
                        <!-- testimonial image-->
                        <img src=\"/img/testimonial1.jpg\" alt=\"\" class=\"img-responsive img-circle\">
                     </div>
                     <div class=\"col-md-10 col-md-offset-1 quote-test\">
                        <!-- quote -->
                        <p>Suspendis Lotam tempore optio lorem ispuet doloremque laboriosam quas, quos eaque molestias odio aut eius animi Suspendisse a elementum anteu imperdiet et maecenas eu eros non nibh aliquet iaculis..</p>
                        <small><i class=\"fa fa-user\"></i>Joanna Vilken, TV Star</small>
                     </div>
                  </blockquote>
                  <!-- testimonial 2-->
                  <blockquote>
                     <div class=\"col-md-4 col-lg-4 col-centered\">
                        <!-- testimonial image-->
                        <img src=\"/img/testimonial2.jpg\" alt=\"\" class=\"img-responsive img-circle\">
                     </div>
                     <div class=\"col-md-10 col-md-offset-1  quote-test\">
                        <!-- quote -->
                        <p>Laudantium totam tempore optio lorem ispuet doloremque aut eius animi Suspendisse a elementum ante. Nunc aliquet tincidunt quam, non egestas arcu imperdiet et maecenas eu eros non nibh aliquet iaculis..</p>
                        <small><i class=\"fa fa-user\"></i>John Cassady, Astronaut</small>
                     </div>
                  </blockquote>
                  <!-- testimonial 3-->
                  <blockquote>
                     <div class=\"col-md-4 col-lg-4 col-centered\">
                        <!-- testimonial image-->
                        <img src=\"/img/testimonial3.jpg\" alt=\"\" class=\"img-responsive img-circle\">
                     </div>
                     <div class=\"col-md-10 col-md-offset-1 quote-test\">
                        <!-- quote -->
                        <p>Laboriosam quas, quos eaque lorem ispuet odio aut eius animi Suspendisse a elementum ante. Nunc aliquet tincidunt quam, non egestas arcu imperdiet et maecenas eu eros non nibh aliquet iaculis..</p>
                        <small><i class=\"fa fa-user\"></i>Maria Silveira, Model</small>
                     </div>
                  </blockquote>
               </div>
               <!--owl testimonials-->
            </div>
            <!-- /col-lg-7 -->
         </div>
         <!--/container-->\t  
      </section>
      <!--/ Section ends -->
\t  
      <!-- Parallax object -->
      <div class=\"parallax-object1 hidden-sm hidden-xs\" data-0=\"opacity:1;\"
         data-100=\"transform:translatey(40%);\"
         data-center-center=\"transform:translatey(-180%);\">
         <!-- Image -->
         <img src=\"/img/parallaxobject1.png\" alt=\"\">
      </div>
\t  
      <!-- Section Team -->
      <section id=\"team\" class=\"color-section\">
         <!-- svg triangle shape -->
         <svg class=\"triangleShadow\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100%\" height=\"100\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\">
            <path class=\"trianglePath1\" d=\"M0 0 L50 100 L100 0 Z\" />
         </svg>
         <div class=\"container\">
            <div class=\"col-lg-8 col-lg-offset-2\">
               <!-- Section heading -->
               <div class=\"section-heading\">
                  <h2>Our Team</h2>
               </div>
            </div>
            <!-- Intro text -->
            <div class=\"row team\">
               <div class=\"col-lg-5 col-md-5 res-margin\">
                  <!-- Intro image -->
                  <img src=\"/img/teammain.jpg\" class=\"center-block img-responsive img-curved\" alt=\"\"/>
               </div>
               <div class=\"col-lg-7 col-md-7\">
                  <h3>Meet our Qualified Staff</h3>
                  <p>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac
                     sodales felis tiam non Doloreiur qui commolu ptatemp dolupta orem retibusam 
                     andigen Ibu lum orci eget, viverra elit aliquam erat volut pat phas ellus ac sodales felis tiam non metus.
                     Placerat a ultricies a, posuere a nibh fusce mollis imperdie tlorem ipuset campas fincas interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis.
                  </p>
               </div>
            </div>
            <!-- Team Carousel-->
            <div id=\"owl-team\" class=\"owl-carousel\">
               <div class=\"col-lg-12\">
                  <!-- member 1-->
                  <div class=\"team-item\">
                     <img src=\"/img/team1.jpg\" alt=\"\"/>
                     <div class=\"team-caption\">
                        <h5 class=\"text-light\">Jane Doe</h5>
                        <p>Founder</p>
                     </div>
                  </div>
                  <!-- /team-item-->
               </div>
               <!-- col-lg-12-->
               <div class=\"col-lg-12\">
                  <!-- member 2-->
                  <div class=\"team-item\">
                     <img src=\"/img/team2.jpg\" alt=\"\"/>
                     <div class=\"team-caption\">
                        <h5 class=\"text-light\">Mario Salles</h5>
                        <p>Teacher</p>
                     </div>
                  </div>
                  <!-- /team-item-->
               </div>
               <!-- col-lg-12-->
               <div class=\"col-lg-12\">
                  <!-- member 3-->
                  <div class=\"team-item\">
                     <img src=\"/img/team3.jpg\" alt=\"\"/>
                     <div class=\"team-caption\">
                        <h5 class=\"text-light\">Julia Stan</h5>
                        <p>Teacher</p>
                     </div>
                  </div>
                  <!-- /team-item-->
               </div>
               <!-- col-lg-12-->
               <div class=\"col-lg-12\">
                  <!-- member 3-->
                  <div class=\"team-item\">
                     <img src=\"/img/team4.jpg\" alt=\"\"/>
                     <div class=\"team-caption\">
                        <h5 class=\"text-light\">Mary John</h5>
                        <p>Caretaker</p>
                     </div>
                  </div>
                  <!-- /team-item-->
               </div>
               <!-- col-lg-12-->
               <div class=\"col-lg-12\">
                  <!-- member 3-->
                  <div class=\"team-item\">
                     <img src=\"/img/team5.jpg\" alt=\"\"/>
                     <div class=\"team-caption\">
                        <h5 class=\"text-light\">Marco Datella</h5>
                        <p>Psychologist</p>
                     </div>
                  </div>
                  <!-- /team-item-->
               </div>
               <!-- col-lg-12-->
               <div class=\"col-lg-12\">
                  <!-- member 3-->
                  <div class=\"team-item\">
                     <img src=\"/img/team6.jpg\" alt=\"\"/>
                     <div class=\"team-caption\">
                        <h5 class=\"text-light\">Juditt Lind</h5>
                        <p>Expert</p>
                     </div>
                  </div>
                  <!-- /team-item-->
               </div>
               <!-- col-lg-12-->
            </div>
            <!--/owl-team -->\t
         </div>
         <!--/container -->
      </section>
      <!-- Section ends -->
\t  
      <!-- Section activities -->
      <section id=\"activities\">
         <div class=\"container\">
            <!-- Section Heading -->
            <div class=\"section-heading\">
               <h2>Our Activities</h2>
            </div>
            <!--Navigation -->
            <ul class=\"nav nav-tabs\" id=\"myTab\">
               <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Music</a></li>
               <li><a href=\"#tab2\" data-toggle=\"tab\">Spanish</a></li>
               <li><a href=\"#tab3\" data-toggle=\"tab\">Lunch</a></li>
               <li><a href=\"#tab4\" data-toggle=\"tab\">Swimming</a></li>
               <li><a href=\"#tab5\" data-toggle=\"tab\">Playground</a></li>
            </ul>
            <div class=\"tabbable\">
               <div class=\"tab-content col-md-12 col-centered\">
                  <!--Tab Content 1 -->
                  <div class=\"tab-pane active in fade\" id=\"tab1\">
                     <div class=\"row\">
                        <div class=\"col-md-5 col-lg-5 pull-left\">
                           <!-- Activity image-->
                           <img src=\"/img/activity1.jpg\" alt=\"\" class=\"img-responsive img-circle\">\t\t\t\t\t\t
                        </div>
                        <div class=\"col-md-7 col-lg-7 pull-left\">
                           <!-- Activity text-->
                           <h3>Music Classes</h3>
                           <!-- Accordion -->
                           <div class=\"panel-group\" id=\"accordion\">
                              <!-- Question 1 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\">Activity Description</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse1\" class=\"panel-collapse collapse in\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->
                              <!-- Question 2 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\">Age Group</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse2\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->
                              <!-- Question 3 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\">When?</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse3\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->\t\t\t\t\t 
                           </div>
                           <!-- /.accordion -->\t\t  
                        </div>
                        <!-- /.col-md-7 -->
                     </div>
                     <!-- /.row -->
                  </div>
                  <!-- /#tab1 -->\t
                  <!--Tab Content 2 -->
                  <div class=\"tab-pane fade\" id=\"tab2\">
                     <div class=\"row\">
                        <div class=\"col-md-5 col-lg-5 pull-left\">
                           <!-- Activity image-->
                           <img src=\"/img/activity2.jpg\" alt=\"\" class=\"img-responsive img-circle\">\t\t\t\t\t\t
                        </div>
                        <div class=\"col-md-7 col-lg-7 pull-left\">
                           <!-- Activity text-->
                           <h3>Spanish Classes</h3>
                           <!-- Accordion -->
                           <div class=\"panel-group\" id=\"accordion2\">
                              <!-- Question 1 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse4\">Activity Description</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse4\" class=\"panel-collapse collapse in\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->
                              <!-- Question 2 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse5\">Age Group</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse5\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->
                              <!-- Question 3 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse6\">When?</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse6\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->\t\t\t\t\t 
                           </div>
                           <!-- /.accordion -->\t\t  
                        </div>
                        <!-- /.col-md-7 -->
                     </div>
                     <!-- /.row -->
                  </div>
                  <!-- /#tab2 -->\t
                  <!--Tab Content 3 -->
                  <div class=\"tab-pane fade\" id=\"tab3\">
                     <div class=\"row\">
                        <div class=\"col-md-5 col-lg-5 pull-left\">
                           <!-- Activity image-->
                           <img src=\"/img/activity3.jpg\" alt=\"\" class=\"img-responsive img-circle\">\t\t\t\t\t\t
                        </div>
                        <div class=\"col-md-7 col-lg-7 pull-left\">
                           <!-- Activity text-->
                           <h3>Lunch</h3>
                           <!-- Accordion -->
                           <div class=\"panel-group\" id=\"accordion3\">
                              <!-- Question 1 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse7\">Activity Description</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse7\" class=\"panel-collapse collapse in\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->
                              <!-- Question 2 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse8\">Age Group</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse8\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->
                              <!-- Question 3 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse9\">When?</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse9\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->\t\t\t\t\t 
                           </div>
                           <!-- /.accordion -->\t\t  
                        </div>
                        <!-- /.col-md-7 -->
                     </div>
                     <!-- /.row -->
                  </div>
                  <!-- /#tab3 -->\t
                  <!--Tab Content 4 -->
                  <div class=\"tab-pane fade\" id=\"tab4\">
                     <div class=\"row\">
                        <div class=\"col-md-5 col-lg-5 pull-left\">
                           <!-- Activity image-->
                           <img src=\"/img/activity4.jpg\" alt=\"\" class=\"img-responsive img-circle\">\t\t\t\t\t\t
                        </div>
                        <div class=\"col-md-7 col-lg-7 pull-left\">
                           <!-- Activity text-->
                           <h3>Swimming</h3>
                           <!-- Accordion -->
                           <div class=\"panel-group\" id=\"accordion4\">
                              <!-- Question 1 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion4\" href=\"#collapse10\">Activity Description</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse10\" class=\"panel-collapse collapse in\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->
                              <!-- Question 2 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion4\" href=\"#collapse11\">Age Group</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse11\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->
                              <!-- Question 3 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion4\" href=\"#collapse12\">When?</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse12\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->\t\t\t\t\t 
                           </div>
                           <!-- /.accordion -->\t\t  
                        </div>
                        <!-- /.col-md-7 -->
                     </div>
                     <!-- /.row -->
                  </div>
                  <!-- /#tab4 -->\t
                  <!--Tab Content 5 -->
                  <div class=\"tab-pane fade\" id=\"tab5\">
                     <div class=\"row\">
                        <div class=\"col-md-5 col-lg-5 pull-left\">
                           <!-- Activity image-->
                           <img src=\"/img/activity5.jpg\" alt=\"\" class=\"img-responsive img-circle\">\t\t\t\t\t\t
                        </div>
                        <div class=\"col-md-7 col-lg-7 pull-left\">
                           <!-- Activity text-->
                           <h3>Playground</h3>
                           <!-- Accordion -->
                           <div class=\"panel-group\" id=\"accordion5\">
                              <!-- Question 1 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion5\" href=\"#collapse13\">Activity Description</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse13\" class=\"panel-collapse collapse in\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->
                              <!-- Question 2 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion5\" href=\"#collapse14\">Age Group</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse14\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->
                              <!-- Question 3 -->
                              <div class=\"panel\">
                                 <div class=\"panel-heading\">
                                    <h6 class=\"panel-title\">
                                       <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion5\" href=\"#collapse16\">When?</a>
                                    </h6>
                                 </div>
                                 <div id=\"collapse16\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                       <p>Patatemp dolupta orem retibusam qui commolu 
                                          les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!--/panel -->\t\t\t\t\t 
                           </div>
                           <!-- /.accordion -->\t\t  
                        </div>
                        <!-- /.col-md-7 -->
                     </div>
                     <!-- /.row -->
                  </div>
                  <!-- /#tab5 -->\t\t\t\t\t
               </div>
               <!--tab-content-->  
            </div>
            <!--tababble--> 
         </div>
         <!-- /container -->
      </section>
      <!-- /Section ends -->
\t  
      <!-- Parallax object -->
      <div class=\"parallax-object2 hidden-sm hidden-xs\" data-0=\"opacity:1;\"
         data-start=\"margin-top:40%\"
         data-100=\"transform:translatey(0%);\"
         data-center-center=\"transform:translatey(-180%);\">
         <!-- Image -->
         <img src=\"/img/parallaxobject2.png\" alt=\"\">
      </div>
\t  
      <!-- Section Gallery -->
      <section id=\"gallery\" class=\"color-section\">
         <!-- svg triangle shape -->
         <svg class=\"triangleShadow\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100%\" height=\"100\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\">
            <path class=\"trianglePath1\" d=\"M0 0 L50 100 L100 0 Z\" />
         </svg>
         <div class=\"container\">
            <!-- Section heading -->
            <div class=\"section-heading\">
               <h2>Our Gallery</h2>
            </div>
            <!-- Navigation -->
            <div class=\"text-center col-md-12\">
               <ul class=\"nav nav-pills cat text-center\" role=\"tablist\" id=\"gallerytab\">
                  <li class=\"active\"><a href=\"#\" data-toggle=\"tab\" data-filter=\"*\">All</a>
                  <li><a href=\"#\" data-toggle=\"tab\" data-filter=\".events\">Events</a></li>
                  <li><a href=\"#\" data-toggle=\"tab\" data-filter=\".facilities\">Our Facilities</a></li>
               </ul>
            </div>
            <!-- Gallery -->
            <div class=\"row\">
               <div class=\"col-md-12\">
                  <div id=\"lightbox\">
                     <!-- Image 1 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 events\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery1.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery1.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- Image 2 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 facilities\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery2.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery2.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- Image 3 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 facilities\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery3.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery3.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- Image 4 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 events\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery4.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery4.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- Image 5 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 facilities\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery5.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery5.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- Image 6 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 facilities\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery6.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery6.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- Image 7 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 events\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery7.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery7.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- Image 8 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 events\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery8.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery8.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- Image 9 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 facilities\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery9.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery9.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- Image 10 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 facilities\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery10.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery10.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- Image 11 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 facilities\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery11.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery11.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- Image 12 -->
                     <div class=\"col-sm-6 col-md-6 col-lg-4 facilities\">
                        <div class=\"portfolio-item\">
                           <div class=\"gallery-thumb\">
                              <img class=\"img-responsive\" src=\"/img/gallery12.jpg\" alt=\"\">
                              <span class=\"overlay-mask\"></span>
                              <a href=\"/img/gallery12.jpg\" data-gal=\"prettyPhoto[gallery]\" class=\"link centered\" title=\"You can add caption to pictures.\">
                              <i class=\"fa fa-expand\"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /lightbox-->
               </div>
               <!-- /col-md-12-->
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </section>
      <!-- Section ends -->
\t  
      <!-- Section Latest Blog -->
      <section id=\"latestblog\">
         <div class=\"container\">
            <!-- Section Heading -->
            <div class=\"section-heading\">
               <h2>Our Blog</h2>
            </div>
\t\t\t <!-- Carousel -->
            <div class=\"row color_block\">
               <div id=\"owl-blog\" class=\"owl-carousel\">
                  <!-- Blog item 1 -->
                  <div class=\"blog-preview col-md-12\">
                     <!-- Blog image -->
                     <img src=\"/img/blogprev1.jpg\" alt=\"\" />
                     <div class=\"latest-caption text-center\">
                        <a href=\"#\">
                           <h4>Mother's Day</h4>
                        </a>
                        <!-- Post Info -->
                        <div class=\"post-info\">
                           <p><i class=\"fa fa-clock-o\"></i>Aug 24, 2015 at 9:00 PM</p>
                           <p><i class=\"fa fa-user\"></i>by <a href=\"#\">Mary Jane</a></p>
                           <!-- Post Comments -->
                           <p><i class=\"fa fa-comment\"></i><a href=\"#\">81 Comments</a></p>
                        </div>
                        <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                        <!-- Button-->
                        <a class=\"btn\" href=\"#\">Read More</a>
                     </div>
                  </div>
                  <!-- /blog-preview -->
                  <!-- Blog item 2 -->
                  <div class=\"blog-preview col-md-12\">
                     <!-- Blog image -->
                     <img src=\"/img/blogprev2.jpg\" alt=\"\" />
                     <div class=\"latest-caption text-center\">
                        <a href=\"#\">
                           <h4>Activity Calendar</h4>
                        </a>
                        <!-- Post Info -->
                        <div class=\"post-info\">
                           <p><i class=\"fa fa-clock-o\"></i>Aug 24, 2015 at 9:00 PM</p>
                           <p><i class=\"fa fa-user\"></i>by <a href=\"#\">Mary Jane</a></p>
                           <!-- Post Comments -->
                           <p><i class=\"fa fa-comment\"></i><a href=\"#\">81 Comments</a></p>
                        </div>
                        <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                        <!-- Button-->
                        <a class=\"btn\" href=\"#\">Read More</a>
                     </div>
                  </div>
                  <!-- /blog-preview -->
                  <!-- Blog item 3 -->
                  <div class=\"blog-preview col-md-12\">
                     <!-- Blog image -->
                     <img src=\"/img/blogprev3.jpg\" alt=\"\" />
                     <div class=\"latest-caption text-center\">
                        <a href=\"#\">
                           <h4>Painting Class</h4>
                        </a>
                        <!-- Post Info -->
                        <div class=\"post-info\">
                           <p><i class=\"fa fa-clock-o\"></i>Aug 24, 2015 at 9:00 PM</p>
                           <p><i class=\"fa fa-user\"></i>by <a href=\"#\">Mary Jane</a></p>
                           <!-- Post Comments -->
                           <p><i class=\"fa fa-comment\"></i><a href=\"#\">81 Comments</a></p>
                        </div>
                        <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                        <!-- Button-->
                        <a class=\"btn\" href=\"#\">Read More</a>
                     </div>
                  </div>
                  <!-- /blog-preview -->
                  <!-- Blog item 4 -->
                  <div class=\"blog-preview col-md-12\">
                     <!-- Blog image -->
                     <img src=\"/img/blogprev4.jpg\" alt=\"\" />
                     <div class=\"latest-caption text-center\">
                        <a href=\"#\">
                           <h4>New Classroom</h4>
                        </a>
                        <!-- Post Info -->
                        <div class=\"post-info\">
                           <p><i class=\"fa fa-clock-o\"></i>Aug 24, 2015 at 9:00 PM</p>
                           <p><i class=\"fa fa-user\"></i>by <a href=\"#\">Mary Jane</a></p>
                           <!-- Post Comments -->
                           <p><i class=\"fa fa-comment\"></i><a href=\"#\">81 Comments</a></p>
                        </div>
                        <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                        <!-- Button-->
                        <a class=\"btn\" href=\"#\">Read More</a>
                     </div>
                  </div>
                  <!-- /blog-preview -->
                  <!-- Blog item 5 -->
                  <div class=\"blog-preview col-md-12\">
                     <!-- Blog image -->
                     <img src=\"/img/blogprev5.jpg\" alt=\"\" />
                     <div class=\"latest-caption text-center\">
                        <a href=\"#\">
                           <h4>Our New Teacher</h4>
                        </a>
                        <!-- Post Info -->
                        <div class=\"post-info\">
                           <p><i class=\"fa fa-clock-o\"></i>Aug 24, 2015 at 9:00 PM</p>
                           <p><i class=\"fa fa-user\"></i>by <a href=\"#\">Mary Jane</a></p>
                           <!-- Post Comments -->
                           <p><i class=\"fa fa-comment\"></i><a href=\"#\">81 Comments</a></p>
                        </div>
                        <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                        <!-- Button-->
                        <a class=\"btn\" href=\"#\">Read More</a>
                     </div>
                  </div>
                  <!-- /blog-preview -->
                  <!-- Blog item 6 -->
                  <div class=\"blog-preview col-md-12\">
                     <!-- Blog image -->
                     <img src=\"/img/blogprev6.jpg\" alt=\"\" />
                     <div class=\"latest-caption text-center\">
                        <a href=\"#\">
                           <h4>Toddler Care</h4>
                        </a>
                        <!-- Post Info -->
                        <div class=\"post-info\">
                           <p><i class=\"fa fa-clock-o\"></i>Aug 24, 2015 at 9:00 PM</p>
                           <p><i class=\"fa fa-user\"></i>by <a href=\"#\">Mary Jane</a></p>
                           <!-- Post Comments -->
                           <p><i class=\"fa fa-comment\"></i><a href=\"#\">81 Comments</a></p>
                        </div>
                        <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                        <!-- Button-->
                        <a class=\"btn\" href=\"#\">Read More</a>
                     </div>
                  </div>
                  <!-- /blog-preview -->
               </div>
               <!-- /owl-blog -->
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </section>
      <!-- Section ends -->
\t  
      <!-- Parallax object -->
      <div class=\"parallax-object3 hidden-sm hidden-xs\" data-0=\"opacity:1;\"
         data-100=\"transform:translatex(0%);\"
         data-center-center=\"transform:translatex(380%);\">
         <!-- Image -->
         <img src=\"/img/parallaxobject3.png\" alt=\"\">
      </div>
\t  
      <!-- Section Prices -->
      <section id=\"prices\" class=\"color-section\">
         <!-- svg triangle shape -->
         <svg id=\"triangleShadow\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100%\" height=\"100\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\">
            <path class=\"trianglePath1\" d=\"M0 0 L50 100 L100 0 Z\" />
         </svg>
         <div class=\"container\">
            <div class=\"col-lg-8 col-lg-offset-2\">
               <!-- Section heading -->
               <div class=\"section-heading\">
                  <h2>Our Prices</h2>
               </div>
            </div>
            <div class=\"row\">
               <div class=\"col-md-12 text-center\">
\t\t\t   <!-- Price tables -->
                  <div class=\"pricing pricing-palden\">
                     <div class=\"pricing-item col-lg-4 col-md-4 col-sm-12\">
                        <div class=\"pricing-deco\">
                           <svg class=\"pricing-deco-img\" enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                              <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;\tc48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                              <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;\tc48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                              <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;\tH42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                              <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;\tc53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                           </svg>
                           <div class=\"pricing-price\"><span class=\"pricing-currency\">\$</span>59
                              <span class=\"pricing-period\">/ day</span>
                           </div>
                           <h3 class=\"pricing-title\">Daily</h3>
                        </div>
\t\t\t\t\t\t<!-- List -->
                        <ul class=\"pricing-feature-list\">
                           <li>No Contracts</li>
                           <li>10h /day</li>
                           <li>Drop In</li>
                           <li>Facilities Included</li>
                        </ul>
                        <!-- Button-->
                        <div class=\"page-scroll\">
                           <a class=\"btn\" href=\"#contact\">Contact us</a>
                        </div>
                        <!--/page-scroll-->
                     </div>
                     <div class=\"pricing-item pricing-item-featured col-lg-4 col-md-4 col-sm-12\">
                        <div class=\"pricing-deco\">
                           <svg class=\"pricing-deco-img\" enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                              <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;\tc48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                              <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;\tc48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                              <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;\tH42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                              <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;\tc53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                           </svg>
                           <div class=\"pricing-price\"><span class=\"pricing-currency\">\$</span>350
                              <span class=\"pricing-period\">/ week</span>
                           </div>
                           <h3 class=\"pricing-title\">Weekly</h3>
                        </div>
\t\t\t\t\t\t<!-- List -->
                        <ul class=\"pricing-feature-list\">
                           <li>Natural Enviroment Program</li>
                           <li>10h /day</li>
                           <li>Bonus Activities</li>
                           <li>Parent's Handbook</li>
                        </ul>
                        <!-- Button-->
                        <div class=\"page-scroll\">
                           <a class=\"btn\" href=\"#contact\">Contact us</a>
                        </div>
                        <!--/page-scroll-->
                     </div>
                     <div class=\"pricing-item col-lg-4 col-md-4 col-sm-12\">
                        <div class=\"pricing-deco\">
                           <svg class=\"pricing-deco-img\" enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                              <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;\tc48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                              <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;\tc48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                              <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;\tH42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                              <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;\tc53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                           </svg>
                           <div class=\"pricing-price\"><span class=\"pricing-currency\">\$</span>999
                              <span class=\"pricing-period\">/ mo</span>
                           </div>
                           <h3 class=\"pricing-title\">Monthly</h3>
                        </div>
\t\t\t\t\t\t<!-- List -->
                        <ul class=\"pricing-feature-list\">
                           <li>Extra Savings</li>
                           <li>12h /day</li>
                           <li>Bonus Activities</li>
                           <li>Parent's Handbook</li>
                        </ul>
                        <!-- Button-->
                        <div class=\"page-scroll\">
                           <a class=\"btn\" href=\"#contact\">Contact us</a>
                        </div>
                        <!--/page-scroll-->
                     </div>
\t\t\t\t\t <!--/pricing-item-->
                  </div>
                  <!-- /col-sm-12-->
               </div>
               <!-- /row -->\t\t\t  
            </div>
            <!-- /container-->
         </div>
      </section>
      <!-- /Section ends -->
\t  
      <!-- Section Call to Action -->
      <section id=\"call-to-action\" class=\"small-section\">
         <div class=\"container text-center\">
            <div class=\"col-lg-6 col-lg-offset-6 col-sm-6\">
\t\t\t<div class=\"well\">
               <!-- Section heading -->
               <h3>Get more Information</h3>
               <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit semprem Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et em explicabo tenetur lore apsuet!</p>
               <!-- Button -->
\t\t\t\t   <div class=\"page-scroll\">
\t\t\t\t\t  <a class=\"btn\" href=\"#about\">About Us</a>
\t\t\t\t   </div>
\t\t\t     <!--/page-scroll -->
\t\t\t   </div>
\t\t\t   <!--/well -->
            </div>
            <!--/col-lg-6 -->
         </div>
         <!-- /container-->
      </section>
      <!-- Section ends -->
\t  
      <!-- Section Contact -->
      <section id=\"contact\" class=\"color-section\">
         <div class=\"container\">
            <div class=\"col-lg-8 col-lg-offset-2\">
               <!-- Section heading -->
               <div class=\"section-heading\">
                  <h2>Contact us</h2>
               </div>
            </div>
            <!-- Contact -->
            <div class=\"col-lg-4 text-center\">
               <h4>Information</h4>  
               <!-- contact info -->\t\t\t   
               <div class=\"contact-info\">
\t\t\t\t   <p><i class=\"flaticon-back\"></i><a href=\"/mailto:info@Yourdomain.com\">info@Yourdomain.com</a></p>
               <p><i class=\"fa fa-phone margin-icon\"></i>Call us 939 456 7890</p>
\t\t\t\t </div>
                  <!-- address info -->
                  <p>We are located at Imaginary Fun City, 304.</p>
                <!-- Map -->
                <div id=\"map-canvas\"></div>
            </div>
            <!-- Contact Form -->
            <div class=\"col-lg-7 col-lg-offset-1\">
               <h4>Write us</h4>
\t\t\t\t<!-- Form Starts -->
               <div id=\"contact_form\">
                  <div class=\"form-group\">
                     <input type=\"text\" name=\"name\" class=\"form-control input-field\" placeholder=\"Name\" required=\"\">                    
                     <input type=\"email\" name=\"email\" class=\"form-control input-field\" placeholder=\"Email ID\" required=\"\">           
                     <input type=\"text\" name=\"subject\" class=\"form-control input-field\" placeholder=\"Subject\" required=\"\">                     
                  </div>
                  <textarea name=\"message\" id=\"message\" class=\"textarea-field form-control\" rows=\"4\" placeholder=\"Enter your message\" required=\"\"></textarea>
                  <button type=\"submit\" id=\"submit_btn\" value=\"Submit\" class=\"btn center-block\">Send message</button>
               </div>
\t\t\t   <!-- Contact results -->
               <div id=\"contact_results\"></div>
            </div>
            <!--/Contact form -->
         </div>
         <!-- /container-->
      </section>
      <!--Section ends -->
\t  
      <!-- Footer -->\t
      <div class=\"container-fluid cloud-divider\">
         <!-- Clouds SVG Divider -->\t
         <svg id=\"deco-clouds\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100%\" height=\"100\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\">
            <path d=\"M-5 100 Q 0 20 5 100 Z
               M0 100 Q 5 0 10 100
               M5 100 Q 10 30 15 100
               M10 100 Q 15 10 20 100
               M15 100 Q 20 30 25 100
               M20 100 Q 25 -10 30 100
               M25 100 Q 30 10 35 100
               M30 100 Q 35 30 40 100
               M35 100 Q 40 10 45 100
               M40 100 Q 45 50 50 100
               M45 100 Q 50 20 55 100
               M50 100 Q 55 40 60 100
               M55 100 Q 60 60 65 100
               M60 100 Q 65 50 70 100
               M65 100 Q 70 20 75 100
               M70 100 Q 75 45 80 100
               M75 100 Q 80 30 85 100
               M80 100 Q 85 20 90 100
               M85 100 Q 90 50 95 100
               M90 100 Q 95 25 100 100
               M95 100 Q 100 15 105 100 Z\">
            </path>
         </svg>
      </div>
      <footer>
         <div class=\"container-fluid\">
            <!-- Newsletter -->
            <div class=\"col-lg-4 col-md-6 text-center res-margin\">
               <h6 class=\"text-light\">Sign our Newsletter</h6>
               <p>We will send updates once a week.</p>
               <!-- Form -->\t\t\t\t
               <div id=\"mc_embed_signup\">
                  <form action=\"http://ingridkuhn.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&amp;id=0dae358e08\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
                     <div id=\"mc_embed_signup_scroll\">
                        <div class=\"mc-field-group\">
                           <div class=\"input-group\">
                              <input class=\"form-control input-lg required email\" type=\"email\" value=\"\" name=\"EMAIL\" placeholder=\"Your email here\" id=\"mce-EMAIL\">
                              <span class=\"input-group-btn\">
                              <input type=\"submit\" value=\"Subscribe\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"btn\">
                              </span>
                           </div>
                           <!-- Subscription results -->
                           <div id=\"mce-responses\" class=\"mailchimp\">
                              <div class=\"alert alert-danger response\" id=\"mce-error-response\"></div>
                              <div class=\"alert alert-success response\" id=\"mce-success-response\"></div>
                           </div>
                        </div>
                        <!-- /mc-fiel-group -->\t\t\t\t\t\t\t\t\t
                     </div>
                     <!-- /mc_embed_signup_scroll -->
                  </form>
                  <!-- /form ends -->
               </div>
               <!-- /mc_embed_signup -->\t\t            
            </div>
            <!-- /col-lg-4 -->
            <!-- Bottom Credits -->
            <div class=\"col-lg-4 col-md-6 res-margin\">
               <a href=\"#page-top\"><img src=\"/img/logo.png\"  alt=\"\" class=\"center-block\"></a>
               <!-- social-icons -->\t
               <div class=\"social-media\">
                  <a href=\"#\" title=\"\"><i class=\"fa fa-twitter\"></i></a>
                  <a href=\"#\" title=\"\"><i class=\"fa fa-facebook\"></i></a>
                  <a href=\"#\" title=\"\"><i class=\"fa fa-linkedin\"></i></a>
                  <a href=\"#\" title=\"\"><i class=\"fa fa-pinterest\"></i></a>
                  <a href=\"#\" title=\"\"><i class=\"fa fa-instagram\"></i></a>
               </div>
            </div>
            <!-- /col-lg-4 -->
            <!-- Opening Hours -->
            <div class=\"col-lg-4 col-md-12 text-center\">
               <!-- Sign-->
               <h6 class=\"text-light\">Opening Hours:</h6>
               <!-- Table-->
               <table class=\"table\">
                  <tbody>
                     <tr>
                        <td class=\"text-left\">Monday to Friday</td>
                        <td class=\"text-right\">7 a.m. to 7 p.m.</td>
                     </tr>
                     <tr>
                        <td class=\"text-left\">Weekends / Holidays</td>
                        <td class=\"text-right\"><span class=\"label label-danger\">Closed</span></td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!-- /col-lg-4 -->
         </div>
         <!-- / container -->
         <hr>
         <p>Copyright © 2017 - Designed by  <a href=\"#\">Foreedge</a></p>
         <!-- /container -->
         <!-- Go To Top Link -->
         <div class=\"page-scroll hidden-sm hidden-xs\">
            <a href=\"#page-top\" class=\"back-to-top\"><i class=\"fa fa-angle-up\"></i></a>
         </div>
      </footer>
      <!-- /footer ends -->
\t  </div> <!-- /page width -->
      <!-- Core JavaScript Files -->
      <script src=\"/js/jquery.min.js\"></script>
      <script src=\"/js/bootstrap.min.js\"></script>
      <!-- Google maps -->
      <script src=\"https://maps.googleapis.com/maps/api/js?v=3\"></script>
      <!-- Main Js -->
      <script src=\"/js/main.js\"></script>
      <!-- Isotope -->\t  
      <script src=\"/js/jquery.isotope.js\"></script>
      <!--Mail Chimp validator -->
      <script src='js/mc-validate.js'></script>
      <!--Other Plugins -->
      <script src=\"/js/plugins.js\"></script>
\t  <!-- Contact -->
      <script src=\"/js/contact.js\"></script>
      <!-- Prefix free CSS -->
      <script src=\"/js/prefixfree.js\"></script>\t  \t  
      <!-- GreenSock -->
      <script src=\"/layerslider/js/greensock.js\" type=\"text/javascript\"></script>
      <!-- LayerSlider script files -->
      <script src=\"/layerslider/js/layerslider.transitions.js\" type=\"text/javascript\"></script>
      <script src=\"/layerslider/js/layerslider.kreaturamedia.jquery.js\" type=\"text/javascript\"></script>
\t  <!-- Swicther -->
      <script src=\"/switcher/js/dmss.js\"></script>
   </body>

<!-- Mirrored from ingridkuhn.com/themes/alphabet/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2017 05:51:24 GMT -->

<!-- Mirrored from www.colorcrow.com/templates/preschools/sample1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Aug 2019 22:45:22 GMT -->
</html>";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "      <meta charset=\"utf-8\">
      <!--[if IE]>
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <![endif]-->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
      <!-- Page title -->
      <title>Pre-Schools sample 1</title>
      <!--[if lt IE 9]>
      <script src=\"/js/respond.js\"></script>
      <![endif]-->
      <!-- Bootstrap Core CSS -->
      <link href=\"/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\">
      <!-- Icon fonts -->
      <link href=\"/fonts/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"/fonts/flaticons/flaticon.css\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"/fonts/glyphicons/bootstrap-glyphicons.css\" rel=\"stylesheet\" type=\"text/css\">
      <!-- Google fonts -->
      <link href='https://fonts.googleapis.com/css?family=Lato:400,700,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:700,900' rel='stylesheet' type='text/css'>
      <!-- Theme CSS -->
      <link href=\"/css/style.css\" rel=\"stylesheet\">
      <!-- Color Style CSS -->
      <link href=\"/styles/funtime.css\" rel=\"stylesheet\">
      <!-- Owl Slider & Prettyphoto -->
      <link rel=\"stylesheet\" href=\"/css/owl.carousel.css\">
      <link rel=\"stylesheet\" href=\"/css/prettyPhoto.css\">
      <!-- LayerSlider stylesheet -->
      <link rel=\"stylesheet\" href=\"/layerslider/css/layerslider.css\">
      <!-- Favicons-->
      <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"#\">
      <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"#\">
      <link rel=\"shortcut icon\" href=\"/favicon.html\" type=\"image/x-icon\">
\t   <!-- Switcher Only -->
      <link rel=\"stylesheet\" id=\"switcher-css\" type=\"text/css\" href=\"/switcher/css/switcher.css\" media=\"all\" />
      <!--Alternate CSS -->
      <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"/styles/funtime.css\" title=\"funtime\" media=\"all\" />
      <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"/styles/playground.css\" title=\"playground\" media=\"all\" />
      <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"/styles/games.css\" title=\"games\" media=\"all\" />
      <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"/switcher/css/boxed.css\" title=\"boxed\" media=\"all\" />
      <link rel=\"alternate stylesheet\" type=\"text/css\" href=\"/switcher/css/full.css\" title=\"full\" media=\"all\" />
   ";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function getDebugInfo()
    {
        return array (  1663 => 7,  1659 => 6,  47 => 50,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html", "/Users/tadefokun/Development/PHP/simplesite/html/preschool/templates/home.html");
    }
}
