<?php

/* EspritFrontOfficeBundle:Projet:RechercheProjet.html.twig */
class __TwigTemplate_64d3e91bd9913e447f920c0fbcfd72621e68d8ae82cca2f2fe426a301e61d94e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Projet:RechercheProjet.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontOfficeBundle::layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"container_12\">
                <div class=\"grid_12\">
                    <h3 class=\"common-title\">Liste des projets à consulter</h3>   
                    <div class=\"form-search\">
                        <form method=\"POST\">

                            <label for=\"sys_txt_keyword\">
                                
                                <input id=\"sys_txt_keyword\" class=\"txt-keyword\" name=\"ptoj\" type=\"text\" placeholder=\"Search projects\">
                            </label>
                            <button class=\"btn-search\" type=\"reset\"><i class=\"icon iMagnifier\"></i></button>
                            <button class=\"btn-reset-keyword\" type=\"reset\"><i class=\"icon iXHover\"></i></button>
                        </form>
                        
                        
                    </div>

                                                  
                    
                    
                </div>
 -               <div class=\"clear\"></div>
                <div class=\"nav-item grid_4\">
                    <h3 class=\"rs title\">&nbsp;</h3>
                </div>
              <div class=\"nav-item grid_4 ta-c\">
                    <h3 class=\"rs title\">&nbsp;</h3>
              </div>
                <div class=\"clear\">
                    
                    
                </div>
              
                
            </div>
    

  
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 43
            echo "                    <div class=\"layout-1cols-ceneter\">
                        <div class=\"content grid_8\">
                            <div class=\"project-short\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
                                        <h3 class=\"rs acticle-title\"><br><a class=\"be-fc-orange\" href=\"#\">Titre : </a>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titre", array()), "html", null, true);
            echo "</h3><br>
                                            
                                            <h3><p class=\"rs title-description\">Description : ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo " </p></h3><br>
                                            <h3><a href=\"#\" class=\"rs title-description\">Type : ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "type", array()), "html", null, true);
            echo " </a></h3>
                                             <h3><p class=\"rs title-description\">Description : ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "categorie", array()), "html", null, true);
            echo " </p></h3>
                                              <h3><p class=\"rs title-description\">Description : ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "budget", array()), "html", null, true);
            echo " </p></h3>
                                               <h3><p class=\"rs title-description\">Description : ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "pays", array()), "html", null, true);
            echo " </p></h3>
                                            <p class=\"rs tiny-desc\">by 
                                                
                                            
                                                 
                                      <div class=\"wrap-short-detail\">

                                      </div>
                                        <p class=\"rs clearfix comment-view\">

                                            <span class=\"sep\">|</span>
                                            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_front_office_detail", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"class=\"btn\"> consulter</a>
                                        </p>
                                    </div>
                                </div><!--end: .top-project-info -->
                            </div>
                        </div>
                                        
                    </div>
        
     
        
        
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "<div class=\"navigation\">
    ";
        // line 80
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        echo "
    
</div>
";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Projet:RechercheProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 80,  138 => 79,  118 => 65,  104 => 54,  100 => 53,  96 => 52,  92 => 51,  88 => 50,  83 => 48,  76 => 43,  72 => 42,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {%block content %}*/
/* */
/* <div class="container_12">*/
/*                 <div class="grid_12">*/
/*                     <h3 class="common-title">Liste des projets à consulter</h3>   */
/*                     <div class="form-search">*/
/*                         <form method="POST">*/
/* */
/*                             <label for="sys_txt_keyword">*/
/*                                 */
/*                                 <input id="sys_txt_keyword" class="txt-keyword" name="ptoj" type="text" placeholder="Search projects">*/
/*                             </label>*/
/*                             <button class="btn-search" type="reset"><i class="icon iMagnifier"></i></button>*/
/*                             <button class="btn-reset-keyword" type="reset"><i class="icon iXHover"></i></button>*/
/*                         </form>*/
/*                         */
/*                         */
/*                     </div>*/
/* */
/*                                                   */
/*                     */
/*                     */
/*                 </div>*/
/*  -               <div class="clear"></div>*/
/*                 <div class="nav-item grid_4">*/
/*                     <h3 class="rs title">&nbsp;</h3>*/
/*                 </div>*/
/*               <div class="nav-item grid_4 ta-c">*/
/*                     <h3 class="rs title">&nbsp;</h3>*/
/*               </div>*/
/*                 <div class="clear">*/
/*                     */
/*                     */
/*                 </div>*/
/*               */
/*                 */
/*             </div>*/
/*     */
/* */
/*   */
/*     {%for m in mds %}*/
/*                     <div class="layout-1cols-ceneter">*/
/*                         <div class="content grid_8">*/
/*                             <div class="project-short">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*                                         <h3 class="rs acticle-title"><br><a class="be-fc-orange" href="#">Titre : </a>{{ m.titre }}</h3><br>*/
/*                                             */
/*                                             <h3><p class="rs title-description">Description : {{ m.description }} </p></h3><br>*/
/*                                             <h3><a href="#" class="rs title-description">Type : {{ m.type }} </a></h3>*/
/*                                              <h3><p class="rs title-description">Description : {{ m.categorie }} </p></h3>*/
/*                                               <h3><p class="rs title-description">Description : {{ m.budget }} </p></h3>*/
/*                                                <h3><p class="rs title-description">Description : {{ m.pays}} </p></h3>*/
/*                                             <p class="rs tiny-desc">by */
/*                                                 */
/*                                             */
/*                                                  */
/*                                       <div class="wrap-short-detail">*/
/* */
/*                                       </div>*/
/*                                         <p class="rs clearfix comment-view">*/
/* */
/*                                             <span class="sep">|</span>*/
/*                                             <a href="{{path('esprit_front_office_detail',{'id' : m.id}) }}"class="btn"> consulter</a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div><!--end: .top-project-info -->*/
/*                             </div>*/
/*                         </div>*/
/*                                         */
/*                     </div>*/
/*         */
/*      */
/*         */
/*         */
/*         */
/*         {%endfor%}*/
/* <div class="navigation">*/
/*     {{ knp_pagination_render(mds) }}*/
/*     */
/* </div>*/
/* {%endblock%}*/
/* */
