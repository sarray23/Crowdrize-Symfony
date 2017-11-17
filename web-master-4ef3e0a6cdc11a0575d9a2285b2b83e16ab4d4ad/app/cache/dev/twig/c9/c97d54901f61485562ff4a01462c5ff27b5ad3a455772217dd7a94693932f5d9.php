<?php

/* EspritBackOfficeBundle:STAT:Stat.html.twig */
class __TwigTemplate_4d8504f3005c3176562f4efe5457dfe5876b2eaba50a4ebd711c34d25503375b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritBackOfficeBundle:STAT:Stat.html.twig", 1);
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
        echo "<!-- Load jQuery from Google's CDN if needed -->
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 9
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>

<!-- Load MooTools from Google's CDN if needed and the highcharts adapter -->
<script src=\"https://ajax.googleapis.com/ajax/libs/mootools/1.4.2/mootools-yui-compressed.js\" type=\"text/javascript\"></script>
<script src=\"//code.highcharts.com/3.0.10/adapters/mootools-adapter.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 21
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), "mootools");
        echo "
</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>



<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    myLib.chartLoad(function(data){
        ";
        // line 32
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), false);
        echo "
    });
    \$func = new Zend\\Json\\Expr(\"function() {
    return 'The value for <b>'+ this.x +
    '</b> is <b>'+ this.y +'</b>';
}\");

\$ob = new Highchart();
\$ob->tooltip->formatter(\$func);
</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>

";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:STAT:Stat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 32,  54 => 21,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {%block content %}*/
/* <!-- Load jQuery from Google's CDN if needed -->*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/*     {{ chart(chart) }}*/
/* </script>*/
/* */
/* <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* */
/* <!-- Load MooTools from Google's CDN if needed and the highcharts adapter -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.2/mootools-yui-compressed.js" type="text/javascript"></script>*/
/* <script src="//code.highcharts.com/3.0.10/adapters/mootools-adapter.js" type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/*     {{ chart(chart, 'mootools') }}*/
/* </script>*/
/* */
/* <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* */
/* */
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/*     myLib.chartLoad(function(data){*/
/*         {{ chart(chart, false) }}*/
/*     });*/
/*     $func = new Zend\Json\Expr("function() {*/
/*     return 'The value for <b>'+ this.x +*/
/*     '</b> is <b>'+ this.y +'</b>';*/
/* }");*/
/* */
/* $ob = new Highchart();*/
/* $ob->tooltip->formatter($func);*/
/* </script>*/
/* */
/* <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* */
/* {%endblock%}*/
