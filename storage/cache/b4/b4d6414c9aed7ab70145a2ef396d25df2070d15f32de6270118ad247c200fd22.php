<?php

/* extension/extension/autolinks.twig */
class __TwigTemplate_c371767929b7037038b177946b2f96416d396210820084e26aefb9472c15b482 extends Twig_Template
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
<div id=\"content\">
<link type=\"text/css\" href=\"view/stylesheet/stylesheet2.css\" rel=\"stylesheet\" media=\"screen\" />
<div class=\"breadcrumb\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
  ";
            // line 6
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
        // line 8
        echo "</div>
";
        // line 9
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
<div class=\"warning\">";
            // line 10
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " </div>
";
        }
        // line 11
        echo " 
";
        // line 12
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo " 
  <div class=\"success\">";
            // line 13
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " </div>
  ";
        }
        // line 14
        echo " 
<div class=\"box\">
  <div class=\"heading\">
    <h1><img src=\"view/image/module.png\" alt=\"\" /> ";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>
    <div class=\"buttons\"><a onclick=\"\$('#form').submit();\" class=\"button\">";
        // line 18
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo " </a><a onclick=\"location = '";
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "';\" class=\"button\">";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo " </a></div>
  </div>
  <div class=\"content\">
    <form action=\"";
        // line 21
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
      
      <table id=\"module\" class=\"list\">
        <thead>
          <tr>
            <td class=\"left\">Anahtar Kelime veya Cümle</td>
            <td class=\"left\">Link/İpucu</td>
            <td class=\"left\">Hedef</td>
            <td class=\"left\">İpucu</td>
\t\t\t<td></td>
          </tr>
        </thead>
        ";
        // line 33
        $context["link_row"] = 0;
        // line 34
        echo "        ";
        if ((isset($context["autolinks"]) ? $context["autolinks"] : null)) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["autolinks"]) ? $context["autolinks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["autolink"]) {
                echo " 
        <tbody id=\"link-row";
                // line 35
                echo (isset($context["link_row"]) ? $context["link_row"] : null);
                echo "\">
          <tr>
            <td class=\"left\"><input type=\"text\" name=\"autolinks[";
                // line 37
                echo (isset($context["link_row"]) ? $context["link_row"] : null);
                echo " ][keyword]\" value=\"";
                echo $this->getAttribute($context["autolink"], "keyword", array());
                echo "\" size=\"40\" /></td>
            <td class=\"left\"><input type=\"text\" name=\"autolinks[";
                // line 38
                echo (isset($context["link_row"]) ? $context["link_row"] : null);
                echo " ][link]\" value=\"";
                echo $this->getAttribute($context["autolink"], "link", array());
                echo "\" size=\"40\" /></td>
            <td class=\"left\">
\t\t\t\t<select name=\"autolinks[";
                // line 40
                echo (isset($context["link_row"]) ? $context["link_row"] : null);
                echo " ][target]\">
                                <option value=\"\" ";
                // line 41
                if (($this->getAttribute($context["autolink"], "target", array()) == "")) {
                    echo " selected=\"selected\"  ";
                }
                echo "  ></option>
                                <option value=\"_blank\" ";
                // line 42
                if (($this->getAttribute($context["autolink"], "target", array()) == "_blank")) {
                    echo " selected=\"selected\"  ";
                }
                echo " >_blank</option>
                                <option value=\"_self\" ";
                // line 43
                if (($this->getAttribute($context["autolink"], "target", array()) == "_self")) {
                    echo " selected=\"selected\"  ";
                }
                echo " >_self</option>
                                <option value=\"_parent\" ";
                // line 44
                if (($this->getAttribute($context["autolink"], "target", array()) == "_parent")) {
                    echo " selected=\"selected\"  ";
                }
                echo " >_parent</option>
                                <option value=\"_top\" ";
                // line 45
                if (($this->getAttribute($context["autolink"], "target", array()) == "_top")) {
                    echo " selected=\"selected\"  ";
                }
                echo " >_top</option>
                </select></td>
\t\t\t<td class=\"left\">
\t\t\t\t";
                // line 48
                if ($this->getAttribute($context["autolink"], "tooltip", array())) {
                    echo " 
                <input type=\"checkbox\" name=\"autolinks[";
                    // line 49
                    echo (isset($context["link_row"]) ? $context["link_row"] : null);
                    echo " ][tooltip]\" value=\"1\" checked=\"checked\" />
                ";
                } else {
                    // line 50
                    echo "   
                <input type=\"checkbox\" name=\"autolinks[";
                    // line 51
                    echo (isset($context["link_row"]) ? $context["link_row"] : null);
                    echo " ][tooltip]\" value=\"1\" />
                ";
                }
                // line 52
                echo " </td>
            <td class=\"left\"><a onclick=\"\$('#link-row";
                // line 53
                echo (isset($context["link_row"]) ? $context["link_row"] : null);
                echo "').remove();\" class=\"button\">Kaldır</a></td>
          </tr>
        </tbody>
        ";
                // line 56
                $context["link_row"] = ((isset($context["link_row"]) ? $context["link_row"] : null) + 1);
                echo " 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autolink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo " ";
        }
        // line 58
        echo "        <tfoot>
          <tr>
            <td colspan=\"4\"></td>
            <td class=\"left\"><a onclick=\"addModule();\" class=\"button\">Ekle</a></td>
          </tr>
        </tfoot>
      </table>
    </form>
  </div>
</div>
<script type=\"text/javascript\"><!--
var link_row = ";
        // line 69
        echo (isset($context["link_row"]) ? $context["link_row"] : null);
        echo " ;

function addModule() {\t
\thtml  = '<tbody id=\"link-row' + link_row + '\">';
\thtml += '  <tr>';
\thtml += '    <td class=\"left\"><input type=\"text\" name=\"autolinks[' + link_row + '][keyword]\" value=\"\" size=\"40\" /></td>';
\thtml += '    <td class=\"left\"><input type=\"text\" name=\"autolinks[' + link_row + '][link]\" value=\"http://\" size=\"40\" /></td>';
\thtml += '     <td class=\"left\">';
\thtml += '\t\t\t<select name=\"autolinks[' + link_row + '][target]\">';
    html += '                            <option value=\"\"></option>';
    html += '                            <option value=\"_blank\">_blank</option>';
    html += '                            <option value=\"_self\">_self</option>';
    html += '                            <option value=\"_parent\">_parent</option>';
    html += '                            <option value=\"_top\">_top</option>';
    html += '            </select></td>';
    html += '    <td class=\"left\"><input type=\"checkbox\" name=\"autolinks[' + link_row + '][tooltip]\" value=\"1\" /></td>';
\thtml += '    <td class=\"left\"><a onclick=\"\$(\\'#link-row' + link_row + '\\').remove();\" class=\"button\">Kaldır</a></td>';
\thtml += '  </tr>';
\thtml += '</tbody>';
\t
\t\$('#module tfoot').before(html);
\t
\tlink_row++;
}
//--></script>
";
        // line 94
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/extension/autolinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 94,  219 => 69,  206 => 58,  203 => 57,  195 => 56,  189 => 53,  186 => 52,  181 => 51,  178 => 50,  173 => 49,  169 => 48,  161 => 45,  155 => 44,  149 => 43,  143 => 42,  137 => 41,  133 => 40,  126 => 38,  120 => 37,  115 => 35,  107 => 34,  105 => 33,  90 => 21,  80 => 18,  76 => 17,  71 => 14,  66 => 13,  62 => 12,  59 => 11,  54 => 10,  50 => 9,  47 => 8,  35 => 6,  29 => 5,  19 => 1,);
    }
}
/* ﻿{{ header }} {{ column_left }} */
/* <div id="content">*/
/* <link type="text/css" href="view/stylesheet/stylesheet2.css" rel="stylesheet" media="screen" />*/
/* <div class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %} */
/*   {{ breadcrumb.separator }} <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }} </a>*/
/*    {% endfor %}*/
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
/*             <td class="left">Anahtar Kelime veya Cümle</td>*/
/*             <td class="left">Link/İpucu</td>*/
/*             <td class="left">Hedef</td>*/
/*             <td class="left">İpucu</td>*/
/* 			<td></td>*/
/*           </tr>*/
/*         </thead>*/
/*         {% set link_row = 0 %}*/
/*         {% if autolinks %}{% for autolink in autolinks %} */
/*         <tbody id="link-row{{ link_row }}">*/
/*           <tr>*/
/*             <td class="left"><input type="text" name="autolinks[{{ link_row }} ][keyword]" value="{{ autolink.keyword }}" size="40" /></td>*/
/*             <td class="left"><input type="text" name="autolinks[{{ link_row }} ][link]" value="{{ autolink.link }}" size="40" /></td>*/
/*             <td class="left">*/
/* 				<select name="autolinks[{{ link_row }} ][target]">*/
/*                                 <option value="" {% if autolink.target  ==  '' %} selected="selected"  {% endif %}  ></option>*/
/*                                 <option value="_blank" {% if autolink.target  ==  '_blank' %} selected="selected"  {% endif %} >_blank</option>*/
/*                                 <option value="_self" {% if autolink.target  ==  '_self' %} selected="selected"  {% endif %} >_self</option>*/
/*                                 <option value="_parent" {% if autolink.target  ==  '_parent' %} selected="selected"  {% endif %} >_parent</option>*/
/*                                 <option value="_top" {% if autolink.target  ==  '_top' %} selected="selected"  {% endif %} >_top</option>*/
/*                 </select></td>*/
/* 			<td class="left">*/
/* 				{% if autolink.tooltip %} */
/*                 <input type="checkbox" name="autolinks[{{ link_row }} ][tooltip]" value="1" checked="checked" />*/
/*                 {% else %}   */
/*                 <input type="checkbox" name="autolinks[{{ link_row }} ][tooltip]" value="1" />*/
/*                 {% endif %} </td>*/
/*             <td class="left"><a onclick="$('#link-row{{ link_row }}').remove();" class="button">Kaldır</a></td>*/
/*           </tr>*/
/*         </tbody>*/
/*         {% set link_row = link_row + 1 %} */
/*         {% endfor %} {% endif %}*/
/*         <tfoot>*/
/*           <tr>*/
/*             <td colspan="4"></td>*/
/*             <td class="left"><a onclick="addModule();" class="button">Ekle</a></td>*/
/*           </tr>*/
/*         </tfoot>*/
/*       </table>*/
/*     </form>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* var link_row = {{ link_row }} ;*/
/* */
/* function addModule() {	*/
/* 	html  = '<tbody id="link-row' + link_row + '">';*/
/* 	html += '  <tr>';*/
/* 	html += '    <td class="left"><input type="text" name="autolinks[' + link_row + '][keyword]" value="" size="40" /></td>';*/
/* 	html += '    <td class="left"><input type="text" name="autolinks[' + link_row + '][link]" value="http://" size="40" /></td>';*/
/* 	html += '     <td class="left">';*/
/* 	html += '			<select name="autolinks[' + link_row + '][target]">';*/
/*     html += '                            <option value=""></option>';*/
/*     html += '                            <option value="_blank">_blank</option>';*/
/*     html += '                            <option value="_self">_self</option>';*/
/*     html += '                            <option value="_parent">_parent</option>';*/
/*     html += '                            <option value="_top">_top</option>';*/
/*     html += '            </select></td>';*/
/*     html += '    <td class="left"><input type="checkbox" name="autolinks[' + link_row + '][tooltip]" value="1" /></td>';*/
/* 	html += '    <td class="left"><a onclick="$(\'#link-row' + link_row + '\').remove();" class="button">Kaldır</a></td>';*/
/* 	html += '  </tr>';*/
/* 	html += '</tbody>';*/
/* 	*/
/* 	$('#module tfoot').before(html);*/
/* 	*/
/* 	link_row++;*/
/* }*/
/* //--></script>*/
/* {{ footer }} */
