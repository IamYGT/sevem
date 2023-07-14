<?php

/* extension/extension/extendedseo.twig */
class __TwigTemplate_15e4ce9c19137c5e02cd6d78e9d24ad689e938b3d22f5031691dc80600c866ea extends Twig_Template
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
            echo "  <div class=\"success\">";
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
            <td class=\"left\">Durum</td>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class=\"left\">Akıllı SEO Etiketleri (Örnek. opencartuzman.com/<b>tags/adidas</b>)</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 34
        if ($this->getAttribute((isset($context["extendedseo"]) ? $context["extendedseo"] : null), "seotags", array())) {
            // line 35
            echo "                <input type=\"checkbox\" name=\"extendedseo[seotags]\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 37
            echo "                <input type=\"checkbox\" name=\"extendedseo[seotags]\" value=\"1\" />";
        }
        // line 38
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Ürün için SEO Plus (Ürün açıklamasının başlığına ürün adını h2 etiketi olarak ekler.)</a></td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 43
        if ($this->getAttribute((isset($context["extendedseo"]) ? $context["extendedseo"] : null), "productseo", array())) {
            // line 44
            echo "                <input type=\"checkbox\" name=\"extendedseo[productseo]\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 46
            echo "                <input type=\"checkbox\" name=\"extendedseo[productseo]\" value=\"1\" />";
        }
        // line 47
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Ürün title etiketinin başına kategori adını Ekle</a></td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 52
        if ($this->getAttribute((isset($context["extendedseo"]) ? $context["extendedseo"] : null), "categoryintitle", array())) {
            // line 53
            echo "                <input type=\"checkbox\" name=\"extendedseo[categoryintitle]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 55
            echo "                <input type=\"checkbox\" name=\"extendedseo[categoryintitle]\" value=\"1\" />";
        }
        // line 56
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Mağaza ismini mağaza linkine dönüştür.</a></td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 61
        if ($this->getAttribute((isset($context["extendedseo"]) ? $context["extendedseo"] : null), "link", array())) {
            // line 62
            echo "                <input type=\"checkbox\" name=\"extendedseo[link]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 64
            echo "                <input type=\"checkbox\" name=\"extendedseo[link]\" value=\"1\" />";
        }
        // line 65
        echo "                 </td>
          </tr>
\t\t   <tr style=\"display:none;\">
            <td class=\"left\">Mategori ve marka sayfalarında Url in sonuna / ekle</a></td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 70
        if ($this->getAttribute((isset($context["extendedseo"]) ? $context["extendedseo"] : null), "slash", array())) {
            // line 71
            echo "                <input type=\"checkbox\" name=\"extendedseo[slash]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 73
            echo "                <input type=\"checkbox\" name=\"extendedseo[slash]\" value=\"1\" />";
        }
        // line 74
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Robots etiketi kullan</a></td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 79
        if ($this->getAttribute((isset($context["extendedseo"]) ? $context["extendedseo"] : null), "robots", array())) {
            // line 80
            echo "                <input type=\"checkbox\" name=\"extendedseo[robots]\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 82
            echo "                <input type=\"checkbox\" name=\"extendedseo[robots]\" value=\"1\" /> ";
        }
        // line 83
        echo "                 </td>
          </tr>
\t\t  <tr style=\"display:none;\">
            <td class=\"left\">Meta başlıkları max 60 karakter yap.</a></td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 88
        if ($this->getAttribute((isset($context["extendedseo"]) ? $context["extendedseo"] : null), "trim_titles", array())) {
            // line 89
            echo "                <input type=\"checkbox\" name=\"extendedseo[trim_titles]\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 91
            echo "                <input type=\"checkbox\" name=\"extendedseo[trim_titles]\" value=\"1\" />";
        }
        // line 92
        echo "                 </td>
          </tr>
\t\t  <tr style=\"display:none;\">
            <td class=\"left\">Meta açıklamaları max 160 karakter yap.</a></td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 97
        if ($this->getAttribute((isset($context["extendedseo"]) ? $context["extendedseo"] : null), "trim_descriptions", array())) {
            // line 98
            echo "                <input type=\"checkbox\" name=\"extendedseo[trim_descriptions]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 100
            echo "                <input type=\"checkbox\" name=\"extendedseo[trim_descriptions]\" value=\"1\" />";
        }
        // line 101
        echo "                 </td>
          </tr>

        </tbody>


      </table>
    </form>
  </div>
</div>

";
        // line 112
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/extension/extendedseo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 112,  220 => 101,  217 => 100,  213 => 98,  211 => 97,  204 => 92,  201 => 91,  197 => 89,  195 => 88,  188 => 83,  185 => 82,  181 => 80,  179 => 79,  172 => 74,  169 => 73,  165 => 71,  163 => 70,  156 => 65,  153 => 64,  149 => 62,  147 => 61,  140 => 56,  137 => 55,  133 => 53,  131 => 52,  124 => 47,  121 => 46,  117 => 44,  115 => 43,  108 => 38,  105 => 37,  101 => 35,  99 => 34,  82 => 20,  72 => 17,  68 => 16,  64 => 14,  58 => 12,  56 => 11,  50 => 9,  48 => 8,  45 => 7,  32 => 5,  28 => 4,  19 => 1,);
    }
}
/* ﻿{{ header }} {{ column_left }}*/
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
/*   <div class="success">{{ success }} </div>*/
/*   {% endif %}*/
/* <div class="box">*/
/*   <div class="heading">*/
/*     <h1><img src="view/image/module.png" alt="" /> {{ heading_title }} </h1>*/
/*     <div class="buttons"><a onclick="$('#form').submit();" class="button">{{ button_save }} </a><a onclick="location = '{{ cancel }}';" class="button">{{ button_cancel }} </a></div>*/
/*   </div>*/
/*   <div class="content">*/
/*     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form">*/
/* */
/*       <table id="module" class="list">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="left">Özellik</td>*/
/*             <td class="left">Durum</td>*/
/*           </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*           <tr>*/
/*             <td class="left">Akıllı SEO Etiketleri (Örnek. opencartuzman.com/<b>tags/adidas</b>)</td>*/
/*            	<td class="left">*/
/* 				{% if extendedseo.seotags %}*/
/*                 <input type="checkbox" name="extendedseo[seotags]" value="1" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="checkbox" name="extendedseo[seotags]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Ürün için SEO Plus (Ürün açıklamasının başlığına ürün adını h2 etiketi olarak ekler.)</a></td>*/
/*            	<td class="left">*/
/* 				{% if extendedseo.productseo %}*/
/*                 <input type="checkbox" name="extendedseo[productseo]" value="1" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="checkbox" name="extendedseo[productseo]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Ürün title etiketinin başına kategori adını Ekle</a></td>*/
/*            	<td class="left">*/
/* 				{% if extendedseo.categoryintitle %}*/
/*                 <input type="checkbox" name="extendedseo[categoryintitle]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="extendedseo[categoryintitle]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Mağaza ismini mağaza linkine dönüştür.</a></td>*/
/*            	<td class="left">*/
/* 				{% if extendedseo.link %}*/
/*                 <input type="checkbox" name="extendedseo[link]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="extendedseo[link]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		   <tr style="display:none;">*/
/*             <td class="left">Mategori ve marka sayfalarında Url in sonuna / ekle</a></td>*/
/*            	<td class="left">*/
/* 				{% if extendedseo.slash %}*/
/*                 <input type="checkbox" name="extendedseo[slash]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="extendedseo[slash]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Robots etiketi kullan</a></td>*/
/*            	<td class="left">*/
/* 				{% if extendedseo.robots %}*/
/*                 <input type="checkbox" name="extendedseo[robots]" value="1" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="checkbox" name="extendedseo[robots]" value="1" /> {% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr style="display:none;">*/
/*             <td class="left">Meta başlıkları max 60 karakter yap.</a></td>*/
/*            	<td class="left">*/
/* 				{% if extendedseo.trim_titles %}*/
/*                 <input type="checkbox" name="extendedseo[trim_titles]" value="1" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="checkbox" name="extendedseo[trim_titles]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr style="display:none;">*/
/*             <td class="left">Meta açıklamaları max 160 karakter yap.</a></td>*/
/*            	<td class="left">*/
/* 				{% if extendedseo.trim_descriptions %}*/
/*                 <input type="checkbox" name="extendedseo[trim_descriptions]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="extendedseo[trim_descriptions]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* */
/*         </tbody>*/
/* */
/* */
/*       </table>*/
/*     </form>*/
/*   </div>*/
/* </div>*/
/* */
/* {{ footer }}*/
/* */
