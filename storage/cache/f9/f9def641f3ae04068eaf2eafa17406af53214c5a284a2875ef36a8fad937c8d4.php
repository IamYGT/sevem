<?php

/* extension/extension/not_found_report.twig */
class __TwigTemplate_d02bb33049d415e7add75421178d412b5594c286c9bd91c6255627f2080ef12d extends Twig_Template
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
            echo " 
  ";
            // line 5
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
            echo " 
<div class=\"warning\">";
            // line 9
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " </div>
";
        }
        // line 10
        echo " 
";
        // line 11
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo " 
<div class=\"success\">";
            // line 12
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " </div>
";
        }
        // line 13
        echo " 
<div class=\"box\">
  <div class=\"heading\">
    <h1><img src=\"view/image/module.png\" alt=\"\" /> ";
        // line 16
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>
\t<div class=\"buttons\"><a onclick=\"location = '";
        // line 17
        echo (isset($context["redirect"]) ? $context["redirect"] : null);
        echo "';\" class=\"button\">Yönlendirme Ekle</a>
\t<a onclick=\"location.href='";
        // line 18
        echo (isset($context["clearlog"]) ? $context["clearlog"] : null);
        echo "';\" class=\"button\"  class=\"btn btn-danger\">404 Hata Raporlarını Sil</a></div>    
  </div>
  <div class=\"content\">

\t <table class=\"list\">
          <thead>
            <tr>              
              <td class=\"left\">Sayfa Bulunamadı Lİnki</td>
              <td class=\"left\">Son Ziyaret</td>              
            </tr>
          </thead>
          <tbody>
            
            ";
        // line 31
        if ((isset($context["pages"]) ? $context["pages"] : null)) {
            echo " 
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                echo " 
            <tr>              
              <td class=\"left\">";
                // line 34
                echo $this->getAttribute($context["page"], "link", array());
                echo " </td>
              <td class=\"left\">";
                // line 35
                echo $this->getAttribute($context["page"], "date", array());
                echo " </td>                            \t\t\t  
            </tr>
\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t
             ";
        } else {
            // line 39
            echo "   
            <tr>
              <td class=\"center\" colspan=\"8\">";
            // line 41
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo " </td>
            </tr>
            ";
        }
        // line 43
        echo " \t 
          </tbody>
\t\t</table>
\t\t <div class=\"pagination\">";
        // line 46
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo " </div>
\t</div>

\t<span style=\"color:red\" class=\"help\">*</span>\t
  </div>
</div>

";
        // line 53
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/extension/not_found_report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 53,  141 => 46,  136 => 43,  130 => 41,  126 => 39,  122 => 38,  113 => 35,  109 => 34,  102 => 32,  98 => 31,  82 => 18,  78 => 17,  74 => 16,  69 => 13,  64 => 12,  60 => 11,  57 => 10,  52 => 9,  48 => 8,  45 => 7,  33 => 5,  27 => 4,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }} */
/* <div id="content"><link type="text/css" href="view/stylesheet/stylesheet2.css" rel="stylesheet" media="screen" />*/
/* <div class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %} */
/*   {{ breadcrumb.separator }} <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }} </a>*/
/*     {% endfor %}*/
/* </div>*/
/* {% if error_warning %} */
/* <div class="warning">{{ error_warning }} </div>*/
/* {% endif %} */
/* {% if success %} */
/* <div class="success">{{ success }} </div>*/
/* {% endif %} */
/* <div class="box">*/
/*   <div class="heading">*/
/*     <h1><img src="view/image/module.png" alt="" /> {{ heading_title }} </h1>*/
/* 	<div class="buttons"><a onclick="location = '{{ redirect }}';" class="button">Yönlendirme Ekle</a>*/
/* 	<a onclick="location.href='{{ clearlog }}';" class="button"  class="btn btn-danger">404 Hata Raporlarını Sil</a></div>    */
/*   </div>*/
/*   <div class="content">*/
/* */
/* 	 <table class="list">*/
/*           <thead>*/
/*             <tr>              */
/*               <td class="left">Sayfa Bulunamadı Lİnki</td>*/
/*               <td class="left">Son Ziyaret</td>              */
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             */
/*             {% if pages %} */
/*             {% for page in pages %} */
/*             <tr>              */
/*               <td class="left">{{ page.link }} </td>*/
/*               <td class="left">{{ page.date }} </td>                            			  */
/*             </tr>*/
/* 			 {% endfor %}*/
/* 					*/
/*              {% else %}   */
/*             <tr>*/
/*               <td class="center" colspan="8">{{ text_no_results }} </td>*/
/*             </tr>*/
/*             {% endif %} 	 */
/*           </tbody>*/
/* 		</table>*/
/* 		 <div class="pagination">{{ pagination }} </div>*/
/* 	</div>*/
/* */
/* 	<span style="color:red" class="help">*</span>	*/
/*   </div>*/
/* </div>*/
/* */
/* {{ footer }} */
