<?php

/* EspritBackOfficeBundle:Compose:compose.html.twig */
class __TwigTemplate_3dabc46310be615fdab4ad0fd4ef4b8a680e8522eb696e82d4867533ccf9c605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Compose:compose.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritBackOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"graphs\">
\t     <div class=\"xs\">
  \t       <h3>Compose</h3>
  \t         <div class=\"col-md-4 email-list1\">
               <ul class=\"collection\">
                    <li class=\"collection-item avatar email-unread\">
                      <i class=\"fa fa-users icon_1\"></i>
                      <div class=\"avatar_left\">
                      \t<span class=\"email-title\">Social</span>
                        <p class=\"truncate grey-text ultra-small\">Lorem Ipsum is simply dummy text of.</p>
                      </div>
                      <a href=\"#!\" class=\"secondary-content\"><span class=\"new badge blue\">4</span></a>
                      <div class=\"clearfix\"> </div>
                    </li>
                    <li class=\"collection-item avatar email-unread\">
                      <i class=\"fa fa-exclamation-circle icon_2\"></i>
                      <div class=\"avatar_left\">
                      \t<span class=\"email-title\">Updates</span>
                        <p class=\"truncate grey-text ultra-small\">It is a long established fact that a reader.</p>
                      </div>
                      <a href=\"#!\" class=\"secondary-content\"><span class=\"new badge red\">4</span></a>
                      <div class=\"clearfix\"> </div>
                    </li>
                    <li class=\"collection-item avatar email-unread\">
                      <i class=\"fa fa-tag icon_3\"></i>
                      <div class=\"avatar_left\">
                      \t<span class=\"email-title\">Promotions</span>
                        <p class=\"truncate grey-text ultra-small\">There are many variations of passages.</p>
                      </div>
                      <a href=\"#!\" class=\"secondary-content\"><span class=\"new badge blue1\">4</span></a>
                      <div class=\"clearfix\"> </div>
                    </li>
                    <li class=\"collection-item avatar email-unread\">
                      <i class=\"icon_4\">G</i>
                      <div class=\"avatar_left\">
                      \t<span class=\"email-title\">Gmail</span>
                        <p class=\"truncate grey-text ultra-small\">Sed ut perspiciatis unde omnis iste.</p>
                      </div>
                      <a href=\"#!\" class=\"secondary-content\"><span class=\"blue-text ultra-small\">2:15 pm</span></a>
                      <div class=\"clearfix\"> </div>
                    </li>
                    <li class=\"collection-item avatar email-unread\">
                      <i class=\"icon_4 icon_5\">F</i>
                      <div class=\"avatar_left\">
                      \t<span class=\"email-title\">Facebook</span>
                        <p class=\"truncate grey-text ultra-small\">But I must explain to you how.</p>
                      </div>
                      <a href=\"#!\" class=\"secondary-content\"><span class=\"blue-text ultra-small\">2:15 pm</span></a>
                      <div class=\"clearfix\"> </div>
                    </li>
                    <li class=\"collection-item avatar email-unread email_last\">
                      <i class=\"icon_4 icon_6\">T</i>
                      <div class=\"avatar_left\">
                      \t<span class=\"email-title\">Twitter</span>
                        <p class=\"truncate grey-text ultra-small\">At vero eos et accusamus et iusto odio.</p>
                      </div>
                      <a href=\"#!\" class=\"secondary-content\"><span class=\"blue-text ultra-small\">2:15 pm</span></a>
                      <div class=\"clearfix\"> </div>
                    </li>
              </ul>
         <div class=\"content-box  mrg15B\">
          <div class=\"content-box-wrapper text-center\">
            <h4 class=\"content-box-header\">
            Chat
            <small>(Online friends)</small>
            </h4>
            <div class=\"status-badge mrg10A\">
                <img class=\"img-circle\" width=\"40\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/1.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"small-badge bg-red\"></div>
            </div>
            <div class=\"status-badge mrg10A\">
                <img class=\"img-circle\" width=\"40\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/2.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"small-badge bg-orange\"></div>
            </div>
            <div class=\"status-badge mrg10A\">
                <img class=\"img-circle\" width=\"40\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/3.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"small-badge bg-red\"></div>
            </div>
            <div class=\"status-badge mrg10A\">
                <img class=\"img-circle\" width=\"40\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/4.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"small-badge bg-green1\"></div>
            </div>
            <div class=\"status-badge mrg10A\">
                <img class=\"img-circle\" width=\"40\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/5.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"small-badge bg-orange\"></div>
            </div>
            <div class=\"status-badge mrg10A\">
                <img class=\"img-circle\" width=\"40\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/1.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"small-badge bg-red\"></div>
            </div>
            <div class=\"status-badge mrg10A\">
                <img class=\"img-circle\" width=\"40\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/2.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"small-badge bg-green1\"></div>
            </div>
            <div class=\"status-badge mrg10A\">
                <img class=\"img-circle\" width=\"40\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/3.png"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"small-badge bg-orange\"></div>
            </div>
          </div>
        </div>
        </div>
        <div class=\"col-md-8 inbox_right\">
        \t<div class=\"Compose-Message\">               
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Compose New Message 
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"alert alert-info\">
                            Please fill details to send a new message
                        </div>
                        <hr>
                        <label>Enter Recipient Name : </label>
                        <input type=\"text\" class=\"form-control1 control3\">
                        <label>Enter Subject :  </label>
                        <input type=\"text\" class=\"form-control1 control3\">
                        <label>Enter Message : </label>
                        <textarea rows=\"6\" class=\"form-control1 control2\"></textarea>
                        <hr>
                        <a href=\"#\" class=\"btn btn-warning btn-warng1\"><span class=\"glyphicon glyphicon-envelope tag_02\"></span> Send Message </a>&nbsp;
                      <a href=\"#\" class=\"btn btn-success btn-warng1\"><span class=\"glyphicon glyphicon-tags tag_01\"></span> Save To Drafts </a>
                    </div>
                 </div>
              </div>
         </div>
         <div class=\"clearfix\"> </div>
   </div>
    <div class=\"copy_layout\">
         <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
       </div>
   </div>
";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:Compose:compose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 98,  142 => 94,  135 => 90,  128 => 86,  121 => 82,  114 => 78,  107 => 74,  100 => 70,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* <div class="graphs">*/
/* 	     <div class="xs">*/
/*   	       <h3>Compose</h3>*/
/*   	         <div class="col-md-4 email-list1">*/
/*                <ul class="collection">*/
/*                     <li class="collection-item avatar email-unread">*/
/*                       <i class="fa fa-users icon_1"></i>*/
/*                       <div class="avatar_left">*/
/*                       	<span class="email-title">Social</span>*/
/*                         <p class="truncate grey-text ultra-small">Lorem Ipsum is simply dummy text of.</p>*/
/*                       </div>*/
/*                       <a href="#!" class="secondary-content"><span class="new badge blue">4</span></a>*/
/*                       <div class="clearfix"> </div>*/
/*                     </li>*/
/*                     <li class="collection-item avatar email-unread">*/
/*                       <i class="fa fa-exclamation-circle icon_2"></i>*/
/*                       <div class="avatar_left">*/
/*                       	<span class="email-title">Updates</span>*/
/*                         <p class="truncate grey-text ultra-small">It is a long established fact that a reader.</p>*/
/*                       </div>*/
/*                       <a href="#!" class="secondary-content"><span class="new badge red">4</span></a>*/
/*                       <div class="clearfix"> </div>*/
/*                     </li>*/
/*                     <li class="collection-item avatar email-unread">*/
/*                       <i class="fa fa-tag icon_3"></i>*/
/*                       <div class="avatar_left">*/
/*                       	<span class="email-title">Promotions</span>*/
/*                         <p class="truncate grey-text ultra-small">There are many variations of passages.</p>*/
/*                       </div>*/
/*                       <a href="#!" class="secondary-content"><span class="new badge blue1">4</span></a>*/
/*                       <div class="clearfix"> </div>*/
/*                     </li>*/
/*                     <li class="collection-item avatar email-unread">*/
/*                       <i class="icon_4">G</i>*/
/*                       <div class="avatar_left">*/
/*                       	<span class="email-title">Gmail</span>*/
/*                         <p class="truncate grey-text ultra-small">Sed ut perspiciatis unde omnis iste.</p>*/
/*                       </div>*/
/*                       <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>*/
/*                       <div class="clearfix"> </div>*/
/*                     </li>*/
/*                     <li class="collection-item avatar email-unread">*/
/*                       <i class="icon_4 icon_5">F</i>*/
/*                       <div class="avatar_left">*/
/*                       	<span class="email-title">Facebook</span>*/
/*                         <p class="truncate grey-text ultra-small">But I must explain to you how.</p>*/
/*                       </div>*/
/*                       <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>*/
/*                       <div class="clearfix"> </div>*/
/*                     </li>*/
/*                     <li class="collection-item avatar email-unread email_last">*/
/*                       <i class="icon_4 icon_6">T</i>*/
/*                       <div class="avatar_left">*/
/*                       	<span class="email-title">Twitter</span>*/
/*                         <p class="truncate grey-text ultra-small">At vero eos et accusamus et iusto odio.</p>*/
/*                       </div>*/
/*                       <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>*/
/*                       <div class="clearfix"> </div>*/
/*                     </li>*/
/*               </ul>*/
/*          <div class="content-box  mrg15B">*/
/*           <div class="content-box-wrapper text-center">*/
/*             <h4 class="content-box-header">*/
/*             Chat*/
/*             <small>(Online friends)</small>*/
/*             </h4>*/
/*             <div class="status-badge mrg10A">*/
/*                 <img class="img-circle" width="40" src="{{asset('images/1.png')}}" alt="">*/
/*                 <div class="small-badge bg-red"></div>*/
/*             </div>*/
/*             <div class="status-badge mrg10A">*/
/*                 <img class="img-circle" width="40" src="{{asset('images/2.png')}}" alt="">*/
/*                 <div class="small-badge bg-orange"></div>*/
/*             </div>*/
/*             <div class="status-badge mrg10A">*/
/*                 <img class="img-circle" width="40" src="{{asset('images/3.png')}}" alt="">*/
/*                 <div class="small-badge bg-red"></div>*/
/*             </div>*/
/*             <div class="status-badge mrg10A">*/
/*                 <img class="img-circle" width="40" src="{{asset('images/4.png')}}" alt="">*/
/*                 <div class="small-badge bg-green1"></div>*/
/*             </div>*/
/*             <div class="status-badge mrg10A">*/
/*                 <img class="img-circle" width="40" src="{{asset('images/5.png')}}" alt="">*/
/*                 <div class="small-badge bg-orange"></div>*/
/*             </div>*/
/*             <div class="status-badge mrg10A">*/
/*                 <img class="img-circle" width="40" src="{{asset('images/1.png')}}" alt="">*/
/*                 <div class="small-badge bg-red"></div>*/
/*             </div>*/
/*             <div class="status-badge mrg10A">*/
/*                 <img class="img-circle" width="40" src="{{asset('images/2.png')}}" alt="">*/
/*                 <div class="small-badge bg-green1"></div>*/
/*             </div>*/
/*             <div class="status-badge mrg10A">*/
/*                 <img class="img-circle" width="40" src="{{asset('images/3.png')}}" alt="">*/
/*                 <div class="small-badge bg-orange"></div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         </div>*/
/*         <div class="col-md-8 inbox_right">*/
/*         	<div class="Compose-Message">               */
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         Compose New Message */
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="alert alert-info">*/
/*                             Please fill details to send a new message*/
/*                         </div>*/
/*                         <hr>*/
/*                         <label>Enter Recipient Name : </label>*/
/*                         <input type="text" class="form-control1 control3">*/
/*                         <label>Enter Subject :  </label>*/
/*                         <input type="text" class="form-control1 control3">*/
/*                         <label>Enter Message : </label>*/
/*                         <textarea rows="6" class="form-control1 control2"></textarea>*/
/*                         <hr>*/
/*                         <a href="#" class="btn btn-warning btn-warng1"><span class="glyphicon glyphicon-envelope tag_02"></span> Send Message </a>&nbsp;*/
/*                       <a href="#" class="btn btn-success btn-warng1"><span class="glyphicon glyphicon-tags tag_01"></span> Save To Drafts </a>*/
/*                     </div>*/
/*                  </div>*/
/*               </div>*/
/*          </div>*/
/*          <div class="clearfix"> </div>*/
/*    </div>*/
/*     <div class="copy_layout">*/
/*          <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>*/
/*        </div>*/
/*    </div>*/
/* {%endblock%}*/
