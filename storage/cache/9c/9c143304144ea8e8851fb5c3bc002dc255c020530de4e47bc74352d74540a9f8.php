<?php

/* extension/extension/canonicals.twig */
class __TwigTemplate_ed391ff8d9cec7da6ee4fe93c5a0968f44fdddeee19c6ce8138a733ff795f42c extends Twig_Template
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
        echo "﻿";
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
        // line 6
        echo " 
</div>
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
    <div class=\"buttons\"><a onclick=\"\$('#form').submit();\" class=\"button\">";
        // line 17
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo " </a><a onclick=\"location = '";
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "';\" class=\"button\">";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo " </a></div>
  </div>
  <div class=\"content\">
    <form action=\"";
        // line 20
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
      
      <table id=\"module\" class=\"list\">
        <thead>
          <tr>
            <td class=\"left\">Özellik</td>
            <td class=\"left\">Durum</td>            \t\t\t
          </tr>
        </thead>
        
        <tbody>
          <tr>
            <td class=\"left\">Kategoriler İçin Canonical Link</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 34
        if ($this->getAttribute((isset($context["canonicals"]) ? $context["canonicals"] : null), "canonicals_categories", array())) {
            echo " 
                <input type=\"checkbox\" name=\"canonicals[canonicals_categories]\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 36
            echo "   
                <input type=\"checkbox\" name=\"canonicals[canonicals_categories]\" value=\"1\" />";
        }
        // line 37
        echo " 
                 </td>            
          </tr>
\t\t  <tr>
            <td class=\"left\">Markalar İçin Canonical Link</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 43
        if ($this->getAttribute((isset($context["canonicals"]) ? $context["canonicals"] : null), "canonicals_brands", array())) {
            echo " 
                <input type=\"checkbox\" name=\"canonicals[canonicals_brands]\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 45
            echo "   
                <input type=\"checkbox\" name=\"canonicals[canonicals_brands]\" value=\"1\" />";
        }
        // line 46
        echo " 
                 </td>            
          </tr>
\t\t  <tr>
            <td class=\"left\">Bilgi Sayfaları İçin Canonical Link</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 52
        if ($this->getAttribute((isset($context["canonicals"]) ? $context["canonicals"] : null), "canonicals_info", array())) {
            echo " 
                <input type=\"checkbox\" name=\"canonicals[canonicals_info]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 54
            echo "   
                <input type=\"checkbox\" name=\"canonicals[canonicals_info]\" value=\"1\" />";
        }
        // line 56
        echo "                 </td>            
          </tr>
\t\t  <tr>
            <td class=\"left\">Anasayfa İçin Canonical Link</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 61
        if ($this->getAttribute((isset($context["canonicals"]) ? $context["canonicals"] : null), "canonicals_home", array())) {
            echo " 
                <input type=\"checkbox\" name=\"canonicals[canonicals_home]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 63
            echo "   
                <input type=\"checkbox\" name=\"canonicals[canonicals_home]\" value=\"1\" />";
        }
        // line 65
        echo "                 </td>            
          </tr>
\t\t  <tr>
            <td class=\"left\">Özel sayfalar İçin Canonical Link</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 70
        if ($this->getAttribute((isset($context["canonicals"]) ? $context["canonicals"] : null), "canonicals_specials", array())) {
            echo " 
                <input type=\"checkbox\" name=\"canonicals[canonicals_specials]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 72
            echo "   
                <input type=\"checkbox\" name=\"canonicals[canonicals_specials]\" value=\"1\" />";
        }
        // line 74
        echo "                 </td>            
          </tr>
\t\t  <tr>
            <td class=\"left\">Diğer tüm sayfalar için Canonical Link</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 79
        if ($this->getAttribute((isset($context["canonicals"]) ? $context["canonicals"] : null), "canonicals_extended", array())) {
            echo " 
                <input type=\"checkbox\" name=\"canonicals[canonicals_extended]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 81
            echo "   
                <input type=\"checkbox\" name=\"canonicals[canonicals_extended]\" value=\"1\" />";
        }
        // line 83
        echo "                 </td>            
          </tr>
\t\t  
        </tbody>
       
             
      </table>
    </form>
  </div>
</div>

";
        // line 94
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/extension/canonicals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 94,  204 => 83,  200 => 81,  194 => 79,  187 => 74,  183 => 72,  177 => 70,  170 => 65,  166 => 63,  160 => 61,  153 => 56,  149 => 54,  143 => 52,  135 => 46,  131 => 45,  125 => 43,  117 => 37,  113 => 36,  107 => 34,  90 => 20,  80 => 17,  76 => 16,  71 => 13,  66 => 12,  62 => 11,  59 => 10,  54 => 9,  50 => 8,  46 => 6,  34 => 5,  28 => 4,  19 => 1,);
    }
}
/* ﻿{{ header }} {{ column_left }} */
/* <div id="content"><link type="text/css" href="view/stylesheet/stylesheet2.css" rel="stylesheet" media="screen" />*/
/* <div class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %} */
/*   {{ breadcrumb.separator }} <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }} </a>*/
/*    {% endfor %} */
/* </div>*/
/* {% if error_warning %} */
/* <div class="warning">{{ error_warning }} </div>*/
/* {% endif %} */
/* {% if success %} */
/*   <div class="success">{{ success }} </div>*/
/*   {% endif %} */
/* <div class="box">*/
/*   <div class="heading">*/
/*     <h1><img src="view/image/module.png" alt="" /> {{ heading_title }} </h1>*/
/*     <div class="buttons"><a onclick="$('#form').submit();" class="button">{{ button_save }} </a><a onclick="location = '{{ cancel }}';" class="button">{{ button_cancel }} </a></div>*/
/*   </div>*/
/*   <div class="content">*/
/*     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form">*/
/*       */
/*       <table id="module" class="list">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="left">Özellik</td>*/
/*             <td class="left">Durum</td>            			*/
/*           </tr>*/
/*         </thead>*/
/*         */
/*         <tbody>*/
/*           <tr>*/
/*             <td class="left">Kategoriler İçin Canonical Link</td>*/
/*            	<td class="left">*/
/* 				{% if canonicals.canonicals_categories %} */
/*                 <input type="checkbox" name="canonicals[canonicals_categories]" value="1" checked="checked" />*/
/*                 {% else %}   */
/*                 <input type="checkbox" name="canonicals[canonicals_categories]" value="1" />{% endif %} */
/*                  </td>            */
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Markalar İçin Canonical Link</td>*/
/*            	<td class="left">*/
/* 				{% if canonicals.canonicals_brands %} */
/*                 <input type="checkbox" name="canonicals[canonicals_brands]" value="1" checked="checked" />*/
/*                 {% else %}   */
/*                 <input type="checkbox" name="canonicals[canonicals_brands]" value="1" />{% endif %} */
/*                  </td>            */
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Bilgi Sayfaları İçin Canonical Link</td>*/
/*            	<td class="left">*/
/* 				{% if canonicals.canonicals_info %} */
/*                 <input type="checkbox" name="canonicals[canonicals_info]" value="1" checked="checked" />*/
/*                  {% else %}   */
/*                 <input type="checkbox" name="canonicals[canonicals_info]" value="1" />{% endif %}*/
/*                  </td>            */
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Anasayfa İçin Canonical Link</td>*/
/*            	<td class="left">*/
/* 				{% if canonicals.canonicals_home %} */
/*                 <input type="checkbox" name="canonicals[canonicals_home]" value="1" checked="checked" />*/
/*                  {% else %}   */
/*                 <input type="checkbox" name="canonicals[canonicals_home]" value="1" />{% endif %}*/
/*                  </td>            */
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Özel sayfalar İçin Canonical Link</td>*/
/*            	<td class="left">*/
/* 				{% if canonicals.canonicals_specials %} */
/*                 <input type="checkbox" name="canonicals[canonicals_specials]" value="1" checked="checked" />*/
/*                  {% else %}   */
/*                 <input type="checkbox" name="canonicals[canonicals_specials]" value="1" />{% endif %}*/
/*                  </td>            */
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Diğer tüm sayfalar için Canonical Link</td>*/
/*            	<td class="left">*/
/* 				{% if canonicals.canonicals_extended %} */
/*                 <input type="checkbox" name="canonicals[canonicals_extended]" value="1" checked="checked" />*/
/*                  {% else %}   */
/*                 <input type="checkbox" name="canonicals[canonicals_extended]" value="1" />{% endif %}*/
/*                  </td>            */
/*           </tr>*/
/* 		  */
/*         </tbody>*/
/*        */
/*              */
/*       </table>*/
/*     </form>*/
/*   </div>*/
/* </div>*/
/* */
/* {{ footer }} */
