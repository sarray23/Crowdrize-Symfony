<?php

/* EspritFrontOfficeBundle::expertLayout.html.twig */
class __TwigTemplate_bc24fdc547eb2fcbc41c0be2a78a915066474dd39f9fc4a17cbdcc8860a92b60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/normalize.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/jquery.sidr.light.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/css/rating.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/table.css"), "html", null, true);
        echo "\" />

    <!--[if lte IE 7]>
    <link rel=\"stylesheet\" href=\"css/ie7.css\"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel=\"stylesheet\" href=\"css/ie8.css\"/>
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/responsive.css"), "html", null, true);
        echo "\"/>
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"js/html5.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/js/jquery.sidr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/js/jquery.tweet.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/js/script.js"), "html", null, true);
        echo "\"></script>

    


    
    
    
</head>
<body>
<div id=\"wrapper\">
    <header id=\"header\">
        <div class=\"wrap-top-menu\">
            <div class=\"container_12 clearfix\">
                <div class=\"grid_12\">
                    <nav class=\"top-menu\">
                        <ul id=\"main-menu\" class=\"nav nav-horizontal clearfix\">
                            <li class=\"active\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Home</a></li>
                            
                            <li class=\"sep\"></li>
                            <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_help");
        echo "\">Help</a></li>
                            <li class=\"sep\"></li>
                            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_contact");
        echo "\">Contact</a></li>
                        </ul>
                        <a id=\"btn-toogle-menu\" class=\"btn-toogle-menu\" href=\"#alternate-menu\">
                            <span class=\"line-bar\"></span>
                            <span class=\"line-bar\"></span>
                            <span class=\"line-bar\"></span>
                        </a>
                        <div id=\"right-menu\">
                            <ul class=\"alternate-menu\">
                                <li><a href=\"index.html\">Home</a></li>
                                <li><a href=\"all-pages.html\">All Pages</a></li>
                                <li><a href=\"how-it-work.html\">Help</a></li>
                                <li><a href=\"contact.html\">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class=\"top-message clearfix\">
                        <i class=\"icon iFolder\"></i>
                        <span class=\"txt-message\">Bienvenue sur votre site , Crowdrise</span>
                        <i class=\"icon iX\"></i>
                        <div class=\"clear\"></div>
                    </div>
                    <i id=\"sys_btn_toggle_search\" class=\"icon iBtnRed make-right\"></i>
                </div>
            </div>
        </div><!-- end: .wrap-top-menu -->
        <div class=\"container_12 clearfix\">
            <div class=\"grid_12 header-content\">
                <div id=\"sys_header_right\" class=\"header-right\">
                   <div class=\"account-panel\">
                        ";
        // line 78
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 79
            echo "                             <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\" class=\"btn btn-red btn-submit-all\" > Compte</a>
                             ";
        } else {
            // line 81
            echo "                       <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-red btn-submit-all\">S'inscrire</a>
                        ";
        }
        // line 83
        echo "                        
                        ";
        // line 84
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 85
            echo "                         <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-red btn-submit-all\" > Logout</a>
                     ";
        } else {
            // line 87
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-black sys_show_popup_login\"> Login</a>
                        ";
        }
        // line 89
        echo "                    </div>
                    
                    
                </div>
                <div class=\"header-left\">
                    <h1 id=\"logo\">
                        <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\$SITE_NAME\"/></a>
                    </h1>
                    <div class=\"main-nav clearfix\">
                        <div class=\"nav-item\">
                            <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("esprit_application_afficher_idee");
        echo "\" class=\"nav-title\">Découvrir</a>
                            <p class=\"rs nav-description\">Les idées</p>
                        </div>
                        <span class=\"sep\"></span>
                        <div class=\"nav-item\">
                            <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("esprit_application_add_idee");
        echo "\" class=\"nav-title\">Poster</a>
                            <p class=\"rs nav-description\">Votre idée</p>
                        </div>
                        <span class=\"sep\"></span>
                         <div class=\"nav-item\">
                            <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\" class=\"nav-title\">Découvrir</a>
                            <p class=\"rs nav-description\">Les projects</p>
                        </div>
                        <span class=\"sep\"></span>
                        <div class=\"nav-item\">
                            <a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_ajout");
        echo "\" class=\"nav-title\">Débuter</a>
                            <p class=\"rs nav-description\">Votre project</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--end: #header -->

    <div class=\"layout-2cols\">
        <div class=\"content grid_9\">
            <div class=\"search-result-page\">
                <div class=\"top-lbl-val\">
                    <h3 class=\"common-title\">";
        // line 127
        $this->displayBlock('page', $context, $blocks);
        echo "</span></h3>
                    
                </div>
                <div class=\"form-search\">
                        <form method=\"POST\">
                            <label for=\"sys_txt_keyword\">
                                <input id=\"sys_txt_keyword\" class=\"txt-keyword\" type=\"text\" placeholder=\"Chercher expert\" name=\"titre\"/>
                            </label>
                            <button class=\"btn-search\" type=\"reset\"><i class=\"icon iMagnifier\"></i></button>
                            <button class=\"btn-reset-keyword\" type=\"reset\"><i class=\"icon iXHover\"></i></button>
                        </form>
                    </div>
                
                <div class=\"list-project-in-category\">
                    <div class=\"lbl-type clearfix\">
                        <h4 class=\"rs title-lbl\"><a href=\"#\" class=\"be-fc-orange\"></a></h4>
                    </div>
                    <div class=\"list-project\" id=\"value\">
                        ";
        // line 145
        $this->displayBlock('container', $context, $blocks);
        // line 146
        echo "                            <!--end: .grid_3 > .project-short-->
                    </div>
                    <div class=\"clear\"></div>
                    
                </div>
                    
                    
                
                        <div class=\"clear\"></div>
                    </div>
                </div><!--end: .list-project-in-category -->
                
            </div><!--end: .search-result-page -->
        </div><!--end: .content -->
        <div class=\"sidebar grid_3\">
            <div class=\"left-list-category\">
                <h4 class=\"rs title-nav\">Featured</h4>
                <ul class=\"rs nav nav-category\">
                    <li class=\"active\">
                        <a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("esprit_application_list_expert");
        echo "\">
                            Toute la liste
                            <span class=\"count-val\"></span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    
                    <li >
                        <a href=\"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("esprit_application_tri_expert");
        echo "\">
                            Trier par nom
                            <span class=\"count-val\"></span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("esprit_application_tri_expert_dsc");
        echo "\">
                            Les plus votées
                            <span class=\"count-val\"></span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li >
                        <a href=\"";
        // line 187
        echo $this->env->getExtension('routing')->getPath("esprit_application_tri_expert_asc");
        echo "\">
                            Les moins votées
                            <span class=\"count-val\"></span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li >
                        <a href=\"";
        // line 194
        echo $this->env->getExtension('routing')->getPath("esprit_application_rech_parcomp");
        echo "\">
                            Recherche par compétence
                            <span class=\"count-val\"></span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    
                </ul>
            </div><!--end: .left-list-category -->
            
        </div><!--end: .sidebar -->
        <div class=\"clear\"></div>
    </div>
        <footer id=\"footer\">
        <div class=\"container_12 main-footer\">
            <div class=\"grid_3 about-us\">
                <h3 class=\"rs title\">à propos</h3>
                <p class=\"rs description\">CrowdRise est un site web destiné au financement participatif des projets , ainsi qu'à la collecte et le partage des idées innovantes</p>
                <p class=\"rs email\"><a class=\"fc-default  be-fc-orange\" href=\"mailto:info@megadrupal.com\">info@crowdrise.com</a></p>
                <p class=\"rs\">+216 71 69 69 69</p>
            </div><!--end: .contact-info -->
            <div class=\"grid_3 recent-tweets\">
                <h3 class=\"rs title\">Réalisé par </h3>
                <p class=\"rs description\">
                    L'équipe Gat3an , un groupe d'étudiants en ingénieurie informatique à l'Esprit .     
                </p>
            </div><!--end: .recent-tweets -->
            <div class=\"clear clear-2col\"></div>
            <div class=\"grid_3 email-newsletter\">
                <h3 class=\"rs title\">Nous contacet</h3>
                <div class=\"inner\">
                    <p class=\"rs description\">Donnez vos avis vers notre boite mail</p>
                    <form action=\"#\">
                        <div class=\"form form-email\">
                            
                            <a href=\"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_contact");
        echo "\"><h2>Contacter</h2></a>
                        </div>
                    </form>
                </div>
            </div><!--end: .email-newsletter -->
            <div class=\"grid_3\">
                <h3 class=\"rs title\">Découvrir le site</h3>
                 <div class=\"footer-menu\">
                    <ul class=\"rs\">
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 238
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_help");
        echo "\">Qui sommes nous</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 239
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_ajout");
        echo "\">Débuter votre projet</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 240
        echo $this->env->getExtension('routing')->getPath("esprit_application_add_idee");
        echo "\">Poster votre idée</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 241
        echo $this->env->getExtension('routing')->getPath("esprit_application_list_expert");
        echo "\">Les utilisateurs</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 242
        echo $this->env->getExtension('routing')->getPath("esprit_application_listeprobleme");
        echo "\">Les problémes</a></li>
                    </ul>
                    <ul class=\"rs\">
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 245
        echo $this->env->getExtension('routing')->getPath("esprit_application_ProbSoln");
        echo "\">Les solutions</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 246
        echo $this->env->getExtension('routing')->getPath("esprit_ajout_reclamation");
        echo "\">Les réclamations</a></li>
                            </ul>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"copyright\">
            <div class=\"container_12\">
                <div class=\"grid_12\">
                    <a class=\"logo-footer\" href=\"#\"><img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-2.png"), "html", null, true);
        echo "\" alt=\"\$SITE_NAME\"/></a>
                    <p class=\"rs term-privacy\">
                        <a class=\"fw-b be-fc-orange\" href=\"#\">Terms & Conditions</a>
                        <span class=\"sep\">/</span>
                        <a class=\"fw-b be-fc-orange\" href=\"#\">Privacy Policy</a>
                        <span class=\"sep\">/</span>
                        <a class=\"fw-b be-fc-orange\" href=\"#\">FAQ</a>
                    </p>
                    <p class=\"rs ta-c fc-gray-dark site-copyright\">Design proposé par Gat3an .</p>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
    </footer><!--end: #footer -->

</div>

<div class=\"popup-common\" id=\"sys_popup_common\">
    <div class=\"overlay-bl-bg\"></div>
    <div class=\"container_12 pop-content\">
        <div class=\"grid_12 wrap-btn-close ta-r\">
            <i class=\"icon iBigX closePopup\"></i>
        </div>
        <div class=\"grid_6 prefix_1\">
            <div class=\"form login-form\">
                <form action=\"#\">
                    <h3 class=\"rs title-form\">Register</h3>
                    <div class=\"box-white\">
                        <h4 class=\"rs title-box\">Bienvenue à Crowdrise</h4>
                        <p class=\"rs\">Merci de s'inscrire</p>
                        <div class=\"form-action\">
                            <label for=\"txt_name\">
                            </label>
                            <div class=\"wrap-2col clearfix\">
                                <div class=\"col\">
                                    <label for=\"txt_email\">
                                    </label>
                                    <label for=\"txt_re_email\">
                                    </label>
                                </div>
                                <div class=\"col\">
                                    <label for=\"txt_password\">
                                    </label>
                                    <label for=\"txt_re_password\">
                                    </label>
                                </div>
                            </div>
                            <p class=\"rs pb10\"></p>
                            <p class=\"rs ta-c\">
                                 <a href=\"";
        // line 305
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-red btn-submit-all\">Register</a>
                                
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"grid_4\">
            <div class=\"form login-form\">
                <form action=\"#\">
                    <h3 class=\"rs title-form\">Login</h3>
                    <div class=\"box-white\">
                        <h4 class=\"rs title-box\">Already Have an Account?</h4>
                        <p class=\"rs\">Please log in to continue.</p>
                        <div class=\"form-action\">
                            <label for=\"txt_email_login\">
                                <input id=\"txt_email_login\" class=\"txt fill-width\" type=\"email\" placeholder=\"Enter your e-mail address\"/>
                            </label>
                            <label for=\"txt_password_login\">
                                <input id=\"txt_password_login\" class=\"txt fill-width\" type=\"password\" placeholder=\"Enter password\"/>
                            </label>

                            <label for=\"chk_remember\" class=\"rs pb20 clearfix\">
                                <input id=\"chk_remember\" type=\"checkbox\" class=\"chk-remember\"/>
                                <span class=\"lbl-remember\">Remember me</span>
                            </label>
                            <p class=\"rs ta-c pb10\">
                                <button class=\"btn btn-red btn-submit\" type=\"submit\">Login</button>
                            </p>
                            <p class=\"rs ta-c\">
                                <a href=\"#\" class=\"fc-orange\">I forgot my password</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
</div>
</body>
</html>";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Category | Kickstars";
    }

    // line 127
    public function block_page($context, array $blocks = array())
    {
        echo "Toutes les <span class=\"fc-orange\">idées";
    }

    // line 145
    public function block_container($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle::expertLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 145,  510 => 127,  504 => 3,  457 => 305,  405 => 256,  392 => 246,  388 => 245,  382 => 242,  378 => 241,  374 => 240,  370 => 239,  366 => 238,  354 => 229,  316 => 194,  306 => 187,  296 => 180,  286 => 173,  275 => 165,  254 => 146,  252 => 145,  231 => 127,  215 => 114,  207 => 109,  199 => 104,  191 => 99,  182 => 95,  174 => 89,  168 => 87,  162 => 85,  160 => 84,  157 => 83,  151 => 81,  145 => 79,  143 => 78,  110 => 48,  105 => 46,  99 => 43,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  60 => 19,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <title>{% block title %}Category | Kickstars{%endblock%}</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/normalize.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/jquery.sidr.light.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/style.css')}}"/>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/dcsrating/css/rating.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/table.css') }}" />*/
/* */
/*     <!--[if lte IE 7]>*/
/*     <link rel="stylesheet" href="css/ie7.css"/>*/
/*     <![endif]-->*/
/*     <!--[if lte IE 8]>*/
/*     <link rel="stylesheet" href="css/ie8.css"/>*/
/*     <![endif]-->*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/responsive.css')}}"/>*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="js/html5.js"></script>*/
/*     <![endif]-->*/
/*     <script type="text/javascript" src="{{asset('bundles/espritfrontoffice/js/jquery-1.9.1.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/espritfrontoffice/js/jquery.sidr.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/espritfrontoffice/js/jquery.tweet.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/espritfrontoffice/js/script.js')}}"></script>*/
/* */
/*     */
/* */
/* */
/*     */
/*     */
/*     */
/* </head>*/
/* <body>*/
/* <div id="wrapper">*/
/*     <header id="header">*/
/*         <div class="wrap-top-menu">*/
/*             <div class="container_12 clearfix">*/
/*                 <div class="grid_12">*/
/*                     <nav class="top-menu">*/
/*                         <ul id="main-menu" class="nav nav-horizontal clearfix">*/
/*                             <li class="active"><a href="{{path('fos_user_security_login')}}">Home</a></li>*/
/*                             */
/*                             <li class="sep"></li>*/
/*                             <li><a href="{{path('esprit_front_office_help')}}">Help</a></li>*/
/*                             <li class="sep"></li>*/
/*                             <li><a href="{{path('esprit_front_office_contact')}}">Contact</a></li>*/
/*                         </ul>*/
/*                         <a id="btn-toogle-menu" class="btn-toogle-menu" href="#alternate-menu">*/
/*                             <span class="line-bar"></span>*/
/*                             <span class="line-bar"></span>*/
/*                             <span class="line-bar"></span>*/
/*                         </a>*/
/*                         <div id="right-menu">*/
/*                             <ul class="alternate-menu">*/
/*                                 <li><a href="index.html">Home</a></li>*/
/*                                 <li><a href="all-pages.html">All Pages</a></li>*/
/*                                 <li><a href="how-it-work.html">Help</a></li>*/
/*                                 <li><a href="contact.html">Contact us</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </nav>*/
/*                     <div class="top-message clearfix">*/
/*                         <i class="icon iFolder"></i>*/
/*                         <span class="txt-message">Bienvenue sur votre site , Crowdrise</span>*/
/*                         <i class="icon iX"></i>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <i id="sys_btn_toggle_search" class="icon iBtnRed make-right"></i>*/
/*                 </div>*/
/*             </div>*/
/*         </div><!-- end: .wrap-top-menu -->*/
/*         <div class="container_12 clearfix">*/
/*             <div class="grid_12 header-content">*/
/*                 <div id="sys_header_right" class="header-right">*/
/*                    <div class="account-panel">*/
/*                         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                              <a href="{{path('fos_user_profile_edit')}}" class="btn btn-red btn-submit-all" > Compte</a>*/
/*                              {% else %}*/
/*                        <a href="{{path('fos_user_registration_register')}}" class="btn btn-red btn-submit-all">S'inscrire</a>*/
/*                         {%endif%}*/
/*                         */
/*                         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                          <a href="{{path('fos_user_security_logout')}}" class="btn btn-red btn-submit-all" > Logout</a>*/
/*                      {% else %}*/
/*                         <a href="{{path('fos_user_security_login')}}" class="btn btn-black sys_show_popup_login"> Login</a>*/
/*                         {%endif%}*/
/*                     </div>*/
/*                     */
/*                     */
/*                 </div>*/
/*                 <div class="header-left">*/
/*                     <h1 id="logo">*/
/*                         <a href="{{path('fos_user_security_login')}}"><img src="{{asset('images/logo.png')}}" alt="$SITE_NAME"/></a>*/
/*                     </h1>*/
/*                     <div class="main-nav clearfix">*/
/*                         <div class="nav-item">*/
/*                             <a href="{{path('esprit_application_afficher_idee')}}" class="nav-title">Découvrir</a>*/
/*                             <p class="rs nav-description">Les idées</p>*/
/*                         </div>*/
/*                         <span class="sep"></span>*/
/*                         <div class="nav-item">*/
/*                             <a href="{{path('esprit_application_add_idee')}}" class="nav-title">Poster</a>*/
/*                             <p class="rs nav-description">Votre idée</p>*/
/*                         </div>*/
/*                         <span class="sep"></span>*/
/*                          <div class="nav-item">*/
/*                             <a href="{{path('esprit_front_office_liste')}}" class="nav-title">Découvrir</a>*/
/*                             <p class="rs nav-description">Les projects</p>*/
/*                         </div>*/
/*                         <span class="sep"></span>*/
/*                         <div class="nav-item">*/
/*                             <a href="{{path('esprit_front_office_ajout')}}" class="nav-title">Débuter</a>*/
/*                             <p class="rs nav-description">Votre project</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header><!--end: #header -->*/
/* */
/*     <div class="layout-2cols">*/
/*         <div class="content grid_9">*/
/*             <div class="search-result-page">*/
/*                 <div class="top-lbl-val">*/
/*                     <h3 class="common-title">{%block page %}Toutes les <span class="fc-orange">idées{%endblock%}</span></h3>*/
/*                     */
/*                 </div>*/
/*                 <div class="form-search">*/
/*                         <form method="POST">*/
/*                             <label for="sys_txt_keyword">*/
/*                                 <input id="sys_txt_keyword" class="txt-keyword" type="text" placeholder="Chercher expert" name="titre"/>*/
/*                             </label>*/
/*                             <button class="btn-search" type="reset"><i class="icon iMagnifier"></i></button>*/
/*                             <button class="btn-reset-keyword" type="reset"><i class="icon iXHover"></i></button>*/
/*                         </form>*/
/*                     </div>*/
/*                 */
/*                 <div class="list-project-in-category">*/
/*                     <div class="lbl-type clearfix">*/
/*                         <h4 class="rs title-lbl"><a href="#" class="be-fc-orange"></a></h4>*/
/*                     </div>*/
/*                     <div class="list-project" id="value">*/
/*                         {%block container %} {%endblock%}*/
/*                             <!--end: .grid_3 > .project-short-->*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                     */
/*                 </div>*/
/*                     */
/*                     */
/*                 */
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div><!--end: .list-project-in-category -->*/
/*                 */
/*             </div><!--end: .search-result-page -->*/
/*         </div><!--end: .content -->*/
/*         <div class="sidebar grid_3">*/
/*             <div class="left-list-category">*/
/*                 <h4 class="rs title-nav">Featured</h4>*/
/*                 <ul class="rs nav nav-category">*/
/*                     <li class="active">*/
/*                         <a href="{{path('esprit_application_list_expert')}}">*/
/*                             Toute la liste*/
/*                             <span class="count-val"></span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     */
/*                     <li >*/
/*                         <a href="{{path('esprit_application_tri_expert')}}">*/
/*                             Trier par nom*/
/*                             <span class="count-val"></span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path('esprit_application_tri_expert_dsc')}}">*/
/*                             Les plus votées*/
/*                             <span class="count-val"></span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li >*/
/*                         <a href="{{path('esprit_application_tri_expert_asc')}}">*/
/*                             Les moins votées*/
/*                             <span class="count-val"></span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li >*/
/*                         <a href="{{path('esprit_application_rech_parcomp')}}">*/
/*                             Recherche par compétence*/
/*                             <span class="count-val"></span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     */
/*                 </ul>*/
/*             </div><!--end: .left-list-category -->*/
/*             */
/*         </div><!--end: .sidebar -->*/
/*         <div class="clear"></div>*/
/*     </div>*/
/*         <footer id="footer">*/
/*         <div class="container_12 main-footer">*/
/*             <div class="grid_3 about-us">*/
/*                 <h3 class="rs title">à propos</h3>*/
/*                 <p class="rs description">CrowdRise est un site web destiné au financement participatif des projets , ainsi qu'à la collecte et le partage des idées innovantes</p>*/
/*                 <p class="rs email"><a class="fc-default  be-fc-orange" href="mailto:info@megadrupal.com">info@crowdrise.com</a></p>*/
/*                 <p class="rs">+216 71 69 69 69</p>*/
/*             </div><!--end: .contact-info -->*/
/*             <div class="grid_3 recent-tweets">*/
/*                 <h3 class="rs title">Réalisé par </h3>*/
/*                 <p class="rs description">*/
/*                     L'équipe Gat3an , un groupe d'étudiants en ingénieurie informatique à l'Esprit .     */
/*                 </p>*/
/*             </div><!--end: .recent-tweets -->*/
/*             <div class="clear clear-2col"></div>*/
/*             <div class="grid_3 email-newsletter">*/
/*                 <h3 class="rs title">Nous contacet</h3>*/
/*                 <div class="inner">*/
/*                     <p class="rs description">Donnez vos avis vers notre boite mail</p>*/
/*                     <form action="#">*/
/*                         <div class="form form-email">*/
/*                             */
/*                             <a href="{{path('esprit_front_office_contact')}}"><h2>Contacter</h2></a>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div><!--end: .email-newsletter -->*/
/*             <div class="grid_3">*/
/*                 <h3 class="rs title">Découvrir le site</h3>*/
/*                  <div class="footer-menu">*/
/*                     <ul class="rs">*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_front_office_help')}}">Qui sommes nous</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_front_office_ajout')}}">Débuter votre projet</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_application_add_idee')}}">Poster votre idée</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_application_list_expert')}}">Les utilisateurs</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_application_listeprobleme')}}">Les problémes</a></li>*/
/*                     </ul>*/
/*                     <ul class="rs">*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_application_ProbSoln')}}">Les solutions</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_ajout_reclamation')}}">Les réclamations</a></li>*/
/*                             </ul>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*         <div class="copyright">*/
/*             <div class="container_12">*/
/*                 <div class="grid_12">*/
/*                     <a class="logo-footer" href="#"><img src="{{asset('images/logo-2.png')}}" alt="$SITE_NAME"/></a>*/
/*                     <p class="rs term-privacy">*/
/*                         <a class="fw-b be-fc-orange" href="#">Terms & Conditions</a>*/
/*                         <span class="sep">/</span>*/
/*                         <a class="fw-b be-fc-orange" href="#">Privacy Policy</a>*/
/*                         <span class="sep">/</span>*/
/*                         <a class="fw-b be-fc-orange" href="#">FAQ</a>*/
/*                     </p>*/
/*                     <p class="rs ta-c fc-gray-dark site-copyright">Design proposé par Gat3an .</p>*/
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*         </div>*/
/*     </footer><!--end: #footer -->*/
/* */
/* </div>*/
/* */
/* <div class="popup-common" id="sys_popup_common">*/
/*     <div class="overlay-bl-bg"></div>*/
/*     <div class="container_12 pop-content">*/
/*         <div class="grid_12 wrap-btn-close ta-r">*/
/*             <i class="icon iBigX closePopup"></i>*/
/*         </div>*/
/*         <div class="grid_6 prefix_1">*/
/*             <div class="form login-form">*/
/*                 <form action="#">*/
/*                     <h3 class="rs title-form">Register</h3>*/
/*                     <div class="box-white">*/
/*                         <h4 class="rs title-box">Bienvenue à Crowdrise</h4>*/
/*                         <p class="rs">Merci de s'inscrire</p>*/
/*                         <div class="form-action">*/
/*                             <label for="txt_name">*/
/*                             </label>*/
/*                             <div class="wrap-2col clearfix">*/
/*                                 <div class="col">*/
/*                                     <label for="txt_email">*/
/*                                     </label>*/
/*                                     <label for="txt_re_email">*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="col">*/
/*                                     <label for="txt_password">*/
/*                                     </label>*/
/*                                     <label for="txt_re_password">*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <p class="rs pb10"></p>*/
/*                             <p class="rs ta-c">*/
/*                                  <a href="{{path('fos_user_registration_register')}}" class="btn btn-red btn-submit-all">Register</a>*/
/*                                 */
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid_4">*/
/*             <div class="form login-form">*/
/*                 <form action="#">*/
/*                     <h3 class="rs title-form">Login</h3>*/
/*                     <div class="box-white">*/
/*                         <h4 class="rs title-box">Already Have an Account?</h4>*/
/*                         <p class="rs">Please log in to continue.</p>*/
/*                         <div class="form-action">*/
/*                             <label for="txt_email_login">*/
/*                                 <input id="txt_email_login" class="txt fill-width" type="email" placeholder="Enter your e-mail address"/>*/
/*                             </label>*/
/*                             <label for="txt_password_login">*/
/*                                 <input id="txt_password_login" class="txt fill-width" type="password" placeholder="Enter password"/>*/
/*                             </label>*/
/* */
/*                             <label for="chk_remember" class="rs pb20 clearfix">*/
/*                                 <input id="chk_remember" type="checkbox" class="chk-remember"/>*/
/*                                 <span class="lbl-remember">Remember me</span>*/
/*                             </label>*/
/*                             <p class="rs ta-c pb10">*/
/*                                 <button class="btn btn-red btn-submit" type="submit">Login</button>*/
/*                             </p>*/
/*                             <p class="rs ta-c">*/
/*                                 <a href="#" class="fc-orange">I forgot my password</a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*         <div class="clear"></div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
