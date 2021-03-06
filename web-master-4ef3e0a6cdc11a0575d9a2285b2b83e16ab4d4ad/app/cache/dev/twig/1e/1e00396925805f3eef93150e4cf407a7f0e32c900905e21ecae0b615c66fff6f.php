<?php

/* EspritFrontOfficeBundle:ProblemeSolution:rechProbSol.html.twig */
class __TwigTemplate_3357bc755b0511c4de4a98c7583f92785a4db3ab6f4eb172f26afb2e36f45d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:ProblemeSolution:rechProbSol.html.twig", 1);
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
                    <h3 class=\"common-title\">Liste des problèmes à consulter</h3>   
                    <div class=\"form-search\">
                        <form method=\"POST\">

                            <label for=\"sys_txt_keyword\">
                                
                                <input id=\"sys_txt_keyword\" class=\"txt-keyword\" name=\"aaa\" type=\"text\" placeholder=\"Search projects\">
                            </label>
                            <button class=\"btn-search\" type=\"reset\"><i class=\"icon iMagnifier\"></i></button>
                            <button class=\"btn-reset-keyword\" type=\"reset\"><i class=\"icon iXHover\"></i></button>
                        </form>
                    </div>

                                                  
                    
                    
                </div>
                <div class=\"clear\"></div>
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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prb"]) ? $context["prb"] : $this->getContext($context, "prb")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 41
            echo "                    <div class=\"layout-1cols-ceneter\">
                        <div class=\"content grid_8\">
                            <div class=\"project-short\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
                                        <h3 class=\"rs acticle-title\"><br><a class=\"be-fc-orange\" href=\"#\">Titre : </a>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titre", array()), "html", null, true);
            echo "</h3><br>
                                            
                                            <h3><p class=\"rs title-description\">Description : ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo " </p></h3><br>
                                            <h3><a href=\"#\" class=\"rs title-description\">Type : ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "type", array()), "html", null, true);
            echo " </a></h3>
                                            <p class=\"rs tiny-desc\">by 
                                                
                                               
                                                
                                                
                                                
                                                <a href=\"#\" class=\"fw-b fc-gray be-fc-orange\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "</a> in <span class=\"fw-b fc-gray\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "datePost", array()), "d-m-y"), "html", null, true);
            echo "</span></p>
                                      <div class=\"wrap-short-detail\">

                                      </div>
                                        <p class=\"rs clearfix comment-view\">

                                            <span class=\"sep\">|</span>
                                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_SingleProb", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:ProblemeSolution:rechProbSol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 63,  100 => 56,  90 => 49,  86 => 48,  81 => 46,  74 => 41,  70 => 40,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {%block content %}*/
/* */
/* <div class="container_12">*/
/*                 <div class="grid_12">*/
/*                     <h3 class="common-title">Liste des problèmes à consulter</h3>   */
/*                     <div class="form-search">*/
/*                         <form method="POST">*/
/* */
/*                             <label for="sys_txt_keyword">*/
/*                                 */
/*                                 <input id="sys_txt_keyword" class="txt-keyword" name="aaa" type="text" placeholder="Search projects">*/
/*                             </label>*/
/*                             <button class="btn-search" type="reset"><i class="icon iMagnifier"></i></button>*/
/*                             <button class="btn-reset-keyword" type="reset"><i class="icon iXHover"></i></button>*/
/*                         </form>*/
/*                     </div>*/
/* */
/*                                                   */
/*                     */
/*                     */
/*                 </div>*/
/*                 <div class="clear"></div>*/
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
/*     {%for m in prb %}*/
/*                     <div class="layout-1cols-ceneter">*/
/*                         <div class="content grid_8">*/
/*                             <div class="project-short">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*                                         <h3 class="rs acticle-title"><br><a class="be-fc-orange" href="#">Titre : </a>{{ m.titre }}</h3><br>*/
/*                                             */
/*                                             <h3><p class="rs title-description">Description : {{ m.description }} </p></h3><br>*/
/*                                             <h3><a href="#" class="rs title-description">Type : {{ m.type }} </a></h3>*/
/*                                             <p class="rs tiny-desc">by */
/*                                                 */
/*                                                */
/*                                                 */
/*                                                 */
/*                                                 */
/*                                                 <a href="#" class="fw-b fc-gray be-fc-orange">{{ m.idUtilisateur.username }}</a> in <span class="fw-b fc-gray">{{ m.datePost|date('d-m-y') }}</span></p>*/
/*                                       <div class="wrap-short-detail">*/
/* */
/*                                       </div>*/
/*                                         <p class="rs clearfix comment-view">*/
/* */
/*                                             <span class="sep">|</span>*/
/*                                             <a href="{{path('esprit_application_SingleProb',{'id' : m.id}) }}"class="btn"> consulter</a>*/
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
/* {%endblock%}*/
/* */
