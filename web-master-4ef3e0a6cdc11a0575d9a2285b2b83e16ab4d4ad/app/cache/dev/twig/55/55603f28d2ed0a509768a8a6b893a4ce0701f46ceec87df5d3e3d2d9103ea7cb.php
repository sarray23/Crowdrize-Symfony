<?php

/* EspritBackOfficeBundle:Inbox:inbox.html.twig */
class __TwigTemplate_b51955f7dd61c22ae09e8462185cae83ab33c0abc5953d698a3bc69495d175bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Inbox:inbox.html.twig", 1);
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
  \t     <h3>Inbox</h3>
  \t        <div class=\"col-md-4 email-list1\">
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
         \t<form action=\"#\" method=\"GET\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"search\" class=\"form-control1 input-search\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-success\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                    </span>
                </div><!-- Input Group -->
            </form>
            <div class=\"mailbox-content\">
               <div class=\"mail-toolbar clearfix\">
\t\t\t     <div class=\"float-left\">
\t\t\t        <div class=\"btn btn_1 btn-default mrg5R\">
\t\t\t           <i class=\"fa fa-refresh\"> </i>
\t\t\t        </div>
\t\t\t        <div class=\"dropdown\">
\t\t\t            <a href=\"#\" title=\"\" class=\"btn btn-default\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t                <i class=\"fa fa-cog icon_8\"></i>
\t\t\t                <i class=\"fa fa-chevron-down icon_8\"></i>
\t\t\t            <div class=\"ripple-wrapper\"></div></a>
\t\t\t            <ul class=\"dropdown-menu float-right\">
\t\t\t                <li>
\t\t\t                    <a href=\"#\" title=\"\">
\t\t\t                        <i class=\"fa fa-pencil-square-o icon_9\"></i>
\t\t\t                        Edit
\t\t\t                    </a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                    <a href=\"#\" title=\"\">
\t\t\t                        <i class=\"fa fa-calendar icon_9\"></i>
\t\t\t                        Schedule
\t\t\t                    </a>
\t\t\t                </li>
\t\t\t                <li>
\t\t\t                    <a href=\"#\" title=\"\">
\t\t\t                        <i class=\"fa fa-download icon_9\"></i>
\t\t\t                        Download
\t\t\t                    </a>
\t\t\t                </li>
\t\t\t                <li class=\"divider\"></li>
\t\t\t                <li>
\t\t\t                    <a href=\"#\" class=\"font-red\" title=\"\">
\t\t\t                        <i class=\"fa fa-times\" icon_9=\"\"></i>
\t\t\t                        Delete
\t\t\t                    </a>
\t\t\t                </li>
\t\t\t            </ul>
\t\t\t        </div>
\t\t\t        <div class=\"clearfix\"> </div>
\t\t\t    </div>
\t\t\t    <div class=\"float-right\">
\t\t\t        
\t\t\t              
                            <span class=\"text-muted m-r-sm\">Showing 20 of 346 </span>
                            <div class=\"btn-group m-r-sm mail-hidden-options\" style=\"display: inline-block;\">
                                <div class=\"btn-group\">
                                    <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-folder\"></i> <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                                        <li><a href=\"#\">Social</a></li>
                                        <li><a href=\"#\">Forums</a></li>
                                        <li><a href=\"#\">Updates</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Spam</a></li>
                                        <li><a href=\"#\">Trash</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">New</a></li>
                                    </ul>
                                </div>
                                <div class=\"btn-group\">
                                    <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-tags\"></i> <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                                        <li><a href=\"#\">Work</a></li>
                                        <li><a href=\"#\">Family</a></li>
                                        <li><a href=\"#\">Social</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Primary</a></li>
                                        <li><a href=\"#\">Promotions</a></li>
                                        <li><a href=\"#\">Forums</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"btn-group\">
                                <a class=\"btn btn-default\"><i class=\"fa fa-angle-left\"></i></a>
                                <a class=\"btn btn-default\"><i class=\"fa fa-angle-right\"></i></a>
                            </div>
                        
\t\t\t        
\t\t\t    </div>
               </div>
                <table class=\"table\">
                    <tbody>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star icon-state-warning\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Google
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                            </td>
                            <td>
                                12 march
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                            \t<input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star icon-state-warning\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Dropbox
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                            </td>
                            <td>
                                02 march
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star icon-state-warning\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Adobe
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                8 march
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star icon-state-warning\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Apple
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                4 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Microsoft
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                1 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Microsoft
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                15 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Microsoft
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                            </td>
                            <td>
                                16 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Microsoft
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                9 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star icon-state-warning\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Microsoft
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                16 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star icon-state-warning\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Dropbox
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                            </td>
                            <td>
                                10 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Dropbox
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                14 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Dropbox
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                            </td>
                            <td>
                                11 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Dropbox
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                20 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Dropbox
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                           <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                25 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Twitter
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                26 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Twitter
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                            </td>
                            <td>
                                28 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star icon-state-warning\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Twitter
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                06 march
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Twitter
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                8 march
                            </td>
                        </tr>
                        <tr class=\"unread checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Dropbox
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                10 march
                            </td>
                        </tr>
                        <tr class=\"read checked\">
                            <td class=\"hidden-xs\">
                                <input type=\"checkbox\" class=\"checkbox\">
                            </td>
                            <td class=\"hidden-xs\">
                                <i class=\"fa fa-star\"></i>
                            </td>
                            <td class=\"hidden-xs\">
                                Dropbox
                            </td>
                            <td>
                                Nullam quis risus eget urna mollis ornare vel eu leo
                            </td>
                            <td>
                                <i class=\"fa fa-paperclip\"></i>
                            </td>
                            <td>
                                16 march
                            </td>
                        </tr>
                    </tbody>
                </table>
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
        return "EspritBackOfficeBundle:Inbox:inbox.html.twig";
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
/*   	     <h3>Inbox</h3>*/
/*   	        <div class="col-md-4 email-list1">*/
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
/*          	<form action="#" method="GET">*/
/*                 <div class="input-group">*/
/*                     <input type="text" name="search" class="form-control1 input-search" placeholder="Search...">*/
/*                     <span class="input-group-btn">*/
/*                         <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>*/
/*                     </span>*/
/*                 </div><!-- Input Group -->*/
/*             </form>*/
/*             <div class="mailbox-content">*/
/*                <div class="mail-toolbar clearfix">*/
/* 			     <div class="float-left">*/
/* 			        <div class="btn btn_1 btn-default mrg5R">*/
/* 			           <i class="fa fa-refresh"> </i>*/
/* 			        </div>*/
/* 			        <div class="dropdown">*/
/* 			            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">*/
/* 			                <i class="fa fa-cog icon_8"></i>*/
/* 			                <i class="fa fa-chevron-down icon_8"></i>*/
/* 			            <div class="ripple-wrapper"></div></a>*/
/* 			            <ul class="dropdown-menu float-right">*/
/* 			                <li>*/
/* 			                    <a href="#" title="">*/
/* 			                        <i class="fa fa-pencil-square-o icon_9"></i>*/
/* 			                        Edit*/
/* 			                    </a>*/
/* 			                </li>*/
/* 			                <li>*/
/* 			                    <a href="#" title="">*/
/* 			                        <i class="fa fa-calendar icon_9"></i>*/
/* 			                        Schedule*/
/* 			                    </a>*/
/* 			                </li>*/
/* 			                <li>*/
/* 			                    <a href="#" title="">*/
/* 			                        <i class="fa fa-download icon_9"></i>*/
/* 			                        Download*/
/* 			                    </a>*/
/* 			                </li>*/
/* 			                <li class="divider"></li>*/
/* 			                <li>*/
/* 			                    <a href="#" class="font-red" title="">*/
/* 			                        <i class="fa fa-times" icon_9=""></i>*/
/* 			                        Delete*/
/* 			                    </a>*/
/* 			                </li>*/
/* 			            </ul>*/
/* 			        </div>*/
/* 			        <div class="clearfix"> </div>*/
/* 			    </div>*/
/* 			    <div class="float-right">*/
/* 			        */
/* 			              */
/*                             <span class="text-muted m-r-sm">Showing 20 of 346 </span>*/
/*                             <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">*/
/*                                 <div class="btn-group">*/
/*                                     <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu dropdown-menu-right" role="menu">*/
/*                                         <li><a href="#">Social</a></li>*/
/*                                         <li><a href="#">Forums</a></li>*/
/*                                         <li><a href="#">Updates</a></li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li><a href="#">Spam</a></li>*/
/*                                         <li><a href="#">Trash</a></li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li><a href="#">New</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="btn-group">*/
/*                                     <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu dropdown-menu-right" role="menu">*/
/*                                         <li><a href="#">Work</a></li>*/
/*                                         <li><a href="#">Family</a></li>*/
/*                                         <li><a href="#">Social</a></li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li><a href="#">Primary</a></li>*/
/*                                         <li><a href="#">Promotions</a></li>*/
/*                                         <li><a href="#">Forums</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="btn-group">*/
/*                                 <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>*/
/*                                 <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>*/
/*                             </div>*/
/*                         */
/* 			        */
/* 			    </div>*/
/*                </div>*/
/*                 <table class="table">*/
/*                     <tbody>*/
/*                         <tr class="unread checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star icon-state-warning"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Google*/
/*                             </td>*/
/*                             <td>*/
/*                                 Nullam quis risus eget urna mollis ornare vel eu leo*/
/*                             </td>*/
/*                             <td>*/
/*                             </td>*/
/*                             <td>*/
/*                                 12 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="unread checked">*/
/*                             <td class="hidden-xs">*/
/*                             	<input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star icon-state-warning"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Dropbox*/
/*                             </td>*/
/*                             <td>*/
/*                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit*/
/*                             </td>*/
/*                             <td>*/
/*                             </td>*/
/*                             <td>*/
/*                                 02 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="unread checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star icon-state-warning"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Adobe*/
/*                             </td>*/
/*                             <td>*/
/*                                 Nullam quis risus eget urna mollis ornare vel eu leo*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 8 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="unread checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star icon-state-warning"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Apple*/
/*                             </td>*/
/*                             <td>*/
/*                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 4 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Microsoft*/
/*                             </td>*/
/*                             <td>*/
/*                                 Nullam quis risus eget urna mollis ornare vel eu leo*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 1 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Microsoft*/
/*                             </td>*/
/*                             <td>*/
/*                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 15 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Microsoft*/
/*                             </td>*/
/*                             <td>*/
/*                                 Nullam quis risus eget urna mollis ornare vel eu leo*/
/*                             </td>*/
/*                             <td>*/
/*                             </td>*/
/*                             <td>*/
/*                                 16 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Microsoft*/
/*                             </td>*/
/*                             <td>*/
/*                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 9 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star icon-state-warning"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Microsoft*/
/*                             </td>*/
/*                             <td>*/
/*                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 16 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star icon-state-warning"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Dropbox*/
/*                             </td>*/
/*                             <td>*/
/*                                 Nullam quis risus eget urna mollis ornare vel eu leo*/
/*                             </td>*/
/*                             <td>*/
/*                             </td>*/
/*                             <td>*/
/*                                 10 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Dropbox*/
/*                             </td>*/
/*                             <td>*/
/*                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 14 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Dropbox*/
/*                             </td>*/
/*                             <td>*/
/*                                 Nullam quis risus eget urna mollis ornare vel eu leo*/
/*                             </td>*/
/*                             <td>*/
/*                             </td>*/
/*                             <td>*/
/*                                 11 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Dropbox*/
/*                             </td>*/
/*                             <td>*/
/*                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 20 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Dropbox*/
/*                             </td>*/
/*                             <td>*/
/*                                 Nullam quis risus eget urna mollis ornare vel eu leo*/
/*                             </td>*/
/*                            <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 25 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Twitter*/
/*                             </td>*/
/*                             <td>*/
/*                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 26 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Twitter*/
/*                             </td>*/
/*                             <td>*/
/*                                 Nullam quis risus eget urna mollis ornare vel eu leo*/
/*                             </td>*/
/*                             <td>*/
/*                             </td>*/
/*                             <td>*/
/*                                 28 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star icon-state-warning"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Twitter*/
/*                             </td>*/
/*                             <td>*/
/*                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 06 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="unread checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Twitter*/
/*                             </td>*/
/*                             <td>*/
/*                                 Nullam quis risus eget urna mollis ornare vel eu leo*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 8 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="unread checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Dropbox*/
/*                             </td>*/
/*                             <td>*/
/*                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 10 march*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr class="read checked">*/
/*                             <td class="hidden-xs">*/
/*                                 <input type="checkbox" class="checkbox">*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </td>*/
/*                             <td class="hidden-xs">*/
/*                                 Dropbox*/
/*                             </td>*/
/*                             <td>*/
/*                                 Nullam quis risus eget urna mollis ornare vel eu leo*/
/*                             </td>*/
/*                             <td>*/
/*                                 <i class="fa fa-paperclip"></i>*/
/*                             </td>*/
/*                             <td>*/
/*                                 16 march*/
/*                             </td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*                </div>*/
/*             </div>*/
/*             <div class="clearfix"> </div>*/
/*        </div>*/
/*        <div class="copy_layout">*/
/*          <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>*/
/*        </div>*/
/*    </div>*/
/* {%endblock%}*/
