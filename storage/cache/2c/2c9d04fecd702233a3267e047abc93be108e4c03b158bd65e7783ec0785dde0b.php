<?php

/* extension/extension/bot_report.twig */
class __TwigTemplate_1d2b499fae8d17232daf6d1514686be71f96899097c6571622c65bea782c59cd extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\"><link type=\"text/css\" href=\"view/stylesheet/stylesheet2.css\" rel=\"stylesheet\" media=\"screen\" />
<div class=\"breadcrumb\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "  ";
            echo $this->getAttribute($context["breadcrumb"], "separator", array());
            echo " <a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo " </a>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "<div class=\"warning\">";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " </div>
";
        }
        // line 11
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 12
            echo "<div class=\"success\">";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " </div>
";
        }
        // line 14
        echo "<div class=\"box\">
  <div class=\"heading\">
    <h1><img src=\"view/image/module.png\" alt=\"\" /> ";
        // line 16
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>
\t<div class=\"buttons\">
\t<a onclick=\"location.href='";
        // line 18
        echo (isset($context["clearlog"]) ? $context["clearlog"] : null);
        echo "';\" class=\"button\"  class=\"btn btn-danger\">Raporları Temizle</a></div>    
  </div>
  <div class=\"content\">

\t <table class=\"list\">
          <thead>
            <tr>
              <td class=\"left\">Link</td>
              <td class=\"left\">Ziyaret Sayısı</td>
              <td class=\"left\">Son Ziyaret Tarihi</td>
            </tr>
          </thead>
          <tbody>

            ";
        // line 32
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 33
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 34
                echo "            <tr>
              <td class=\"left\">";
                // line 35
                echo $this->getAttribute($context["link"], "link", array());
                echo " </td>
              <td class=\"left\">";
                // line 36
                echo $this->getAttribute($context["link"], "cnt", array());
                echo " </td>
              <td class=\"left\">";
                // line 37
                echo $this->getAttribute($context["link"], "lastdate", array());
                echo " </td>
            </tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
             ";
        } else {
            // line 42
            echo "            <tr>
              <td class=\"center\" colspan=\"8\">";
            // line 43
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo " </td>
            </tr>
             ";
        }
        // line 46
        echo "          </tbody>
\t\t</table>
\t\t <div class=\"pagination\">";
        // line 48
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo " </div>
\t</div>

\t<span style=\"color:red\" class=\"help\">*</span>
  </div>
</div>

";
        // line 55
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/extension/bot_report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 55,  133 => 48,  129 => 46,  123 => 43,  120 => 42,  116 => 40,  107 => 37,  103 => 36,  99 => 35,  96 => 34,  91 => 33,  89 => 32,  72 => 18,  67 => 16,  63 => 14,  57 => 12,  55 => 11,  49 => 9,  47 => 8,  44 => 7,  31 => 5,  27 => 4,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }}*/
/* <div id="content"><link type="text/css" href="view/stylesheet/stylesheet2.css" rel="stylesheet" media="screen" />*/
/* <div class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*   {{ breadcrumb.separator }} <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }} </a>*/
/*    {% endfor %}*/
/* </div>*/
/* {% if error_warning %}*/
/* <div class="warning">{{ error_warning }} </div>*/
/* {% endif %}*/
/* {% if success %}*/
/* <div class="success">{{ success }} </div>*/
/* {% endif %}*/
/* <div class="box">*/
/*   <div class="heading">*/
/*     <h1><img src="view/image/module.png" alt="" /> {{ heading_title }} </h1>*/
/* 	<div class="buttons">*/
/* 	<a onclick="location.href='{{ clearlog }}';" class="button"  class="btn btn-danger">Raporları Temizle</a></div>    */
/*   </div>*/
/*   <div class="content">*/
/* */
/* 	 <table class="list">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="left">Link</td>*/
/*               <td class="left">Ziyaret Sayısı</td>*/
/*               <td class="left">Son Ziyaret Tarihi</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/* */
/*             {% if links %}*/
/*             {% for link in links %}*/
/*             <tr>*/
/*               <td class="left">{{ link.link }} </td>*/
/*               <td class="left">{{ link.cnt }} </td>*/
/*               <td class="left">{{ link.lastdate }} </td>*/
/*             </tr>*/
/* 			{% endfor %}*/
/* */
/*              {% else %}*/
/*             <tr>*/
/*               <td class="center" colspan="8">{{ text_no_results }} </td>*/
/*             </tr>*/
/*              {% endif %}*/
/*           </tbody>*/
/* 		</table>*/
/* 		 <div class="pagination">{{ pagination }} </div>*/
/* 	</div>*/
/* */
/* 	<span style="color:red" class="help">*</span>*/
/*   </div>*/
/* </div>*/
/* */
/* {{ footer }}*/
/* */
