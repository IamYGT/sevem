<?php

/* extension/extension/seoreplacer.twig */
class __TwigTemplate_c77db5206f7911c3660f5d99a2e392c4acfa4628805824f3b2af5f7a526a55ce extends Twig_Template
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
    <div class=\"buttons\"><a onclick=\"\$('#form').submit();\" class=\"button\">Değiştir & Kaydet</a><a onclick=\"location = '";
        // line 17
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

\t  <table id=\"module\" class=\"list\">
        <thead>
          <tr>
            <td class=\"left\">Bu kelimeyi <input type=\"text\" name=\"seoreplacer[replace]\" value=\"";
        // line 25
        echo (($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "replace", array())) ? ($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "replace", array())) : (""));
        echo "\" size=\"30\"/> bunula <input type=\"text\" name=\"seoreplacer[replacewith]\" value=\"";
        echo (($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "replacewith", array())) ? ($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "replacewith", array())) : (""));
        echo "\" size=\"30\"/> değiştir
\t\t\t\t  <select name=\"seoreplacer[language_id]\">
                  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 28
            echo "                  ";
            if (($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "language_id", array()) && ($this->getAttribute($context["language"], "language_id", array()) == $this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "language_id", array())))) {
                // line 29
                echo "                  <option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo " </option>
                   ";
            } else {
                // line 31
                echo "                  <option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo " </option>";
            }
            // line 32
            echo "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                </select>  dili için</td>
          </tr>
        </thead>
\t\t</table>
      <table id=\"module\" class=\"list\">
        <thead>
          <tr>
            <td class=\"left\">SEO verilerini seç</td>
            <td class=\"left\">Durum</td>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class=\"left\"Ürün, kategori, marka ve bilgi sayfalarında anahtar kelimelerde değişiklik yap</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 50
        if ($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "metakeywords", array())) {
            // line 51
            echo "                <input type=\"checkbox\" name=\"seoreplacer[metakeywords]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 53
            echo "                <input type=\"checkbox\" name=\"seoreplacer[metakeywords]\" value=\"1\" />";
        }
        // line 54
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Ürün, kategori, marka ve bilgi sayfalarında meta açıklama alanında değişiklik yap</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 59
        if ($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "metadescription", array())) {
            // line 60
            echo "                <input type=\"checkbox\" name=\"seoreplacer[metadescription]\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 62
            echo "                <input type=\"checkbox\" name=\"seoreplacer[metadescription]\" value=\"1\" /> ";
        }
        // line 63
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Ürünlerin alt etiketlerinde değişiklik yap</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 68
        if ($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "customalts", array())) {
            // line 69
            echo "                <input type=\"checkbox\" name=\"seoreplacer[customalts]\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 71
            echo "                <input type=\"checkbox\" name=\"seoreplacer[customalts]\" value=\"1\" /> ";
        }
        // line 72
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Ürünlerin H1 etiketlerinde değişiklik yap</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 77
        if ($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "customh1tags", array())) {
            // line 78
            echo "                <input type=\"checkbox\" name=\"seoreplacer[customh1tags]\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 80
            echo "                <input type=\"checkbox\" name=\"seoreplacer[customh1tags]\" value=\"1\" />";
        }
        // line 81
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Ürünlerin H2 etiketlerinde değişiklik yap</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 86
        if ($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "customh2tags", array())) {
            // line 87
            echo "                <input type=\"checkbox\" name=\"seoreplacer[customh2tags]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 89
            echo "                <input type=\"checkbox\" name=\"seoreplacer[customh2tags]\" value=\"1\" />";
        }
        // line 90
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Ürünlerin resim alt etiketlerinde değişiklik yap</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 95
        if ($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "customimagetitles", array())) {
            // line 96
            echo "                <input type=\"checkbox\" name=\"seoreplacer[customimagetitles]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 98
            echo "                <input type=\"checkbox\" name=\"seoreplacer[customimagetitles]\" value=\"1\" />";
        }
        // line 99
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Ürün, kategori, marka ve bilgi sayfalarında ilave meta başlıkları alanında değişiklik yap</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 104
        if ($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "customtitles", array())) {
            // line 105
            echo "                <input type=\"checkbox\" name=\"seoreplacer[customtitles]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 107
            echo "                <input type=\"checkbox\" name=\"seoreplacer[customtitles]\" value=\"1\" />";
        }
        // line 108
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Ürünlerin ürün etiketleri alanında değişiklik yap</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 113
        if ($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "producttags", array())) {
            // line 114
            echo "                <input type=\"checkbox\" name=\"seoreplacer[producttags]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 116
            echo "                <input type=\"checkbox\" name=\"seoreplacer[producttags]\" value=\"1\" />";
        }
        // line 117
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Ürün, kategori, marka ve bilgi sayfalarında URL (linklerinde) değişiklik yap</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 122
        if ($this->getAttribute((isset($context["seoreplacer"]) ? $context["seoreplacer"] : null), "seourls", array())) {
            // line 123
            echo "                <input type=\"checkbox\" name=\"seoreplacer[seourls]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 125
            echo "                <input type=\"checkbox\" name=\"seoreplacer[seourls]\" value=\"1\" />";
        }
        // line 126
        echo "                 </td>
          </tr>


        </tbody>


      </table>
    </form>
\t<span style=\"color:red\" class=\"help\">* Veritabanı yedeği almanız tavsiye edilir.</span>
  </div>
</div>

";
        // line 139
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/extension/seoreplacer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 139,  279 => 126,  276 => 125,  272 => 123,  270 => 122,  263 => 117,  260 => 116,  256 => 114,  254 => 113,  247 => 108,  244 => 107,  240 => 105,  238 => 104,  231 => 99,  228 => 98,  224 => 96,  222 => 95,  215 => 90,  212 => 89,  208 => 87,  206 => 86,  199 => 81,  196 => 80,  192 => 78,  190 => 77,  183 => 72,  180 => 71,  176 => 69,  174 => 68,  167 => 63,  164 => 62,  160 => 60,  158 => 59,  151 => 54,  148 => 53,  144 => 51,  142 => 50,  123 => 33,  117 => 32,  110 => 31,  102 => 29,  99 => 28,  95 => 27,  88 => 25,  80 => 20,  72 => 17,  68 => 16,  64 => 14,  58 => 12,  56 => 11,  50 => 9,  48 => 8,  45 => 7,  32 => 5,  28 => 4,  19 => 1,);
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
/*     <div class="buttons"><a onclick="$('#form').submit();" class="button">Değiştir & Kaydet</a><a onclick="location = '{{ cancel }}';" class="button">{{ button_cancel }} </a></div>*/
/*   </div>*/
/*   <div class="content">*/
/*     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form">*/
/* */
/* 	  <table id="module" class="list">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="left">Bu kelimeyi <input type="text" name="seoreplacer[replace]" value="{{ seoreplacer.replace?seoreplacer.replace: ''}}" size="30"/> bunula <input type="text" name="seoreplacer[replacewith]" value="{{ seoreplacer.replacewith?seoreplacer.replacewith: '' }}" size="30"/> değiştir*/
/* 				  <select name="seoreplacer[language_id]">*/
/*                   {% for language in languages %}*/
/*                   {% if seoreplacer.language_id  and  language.language_id  ==  seoreplacer.language_id %}*/
/*                   <option value="{{ language.language_id }}" selected="selected">{{ language.name }} </option>*/
/*                    {% else %}*/
/*                   <option value="{{ language.language_id }}">{{ language.name }} </option>{% endif %}*/
/*                    {% endfor %}*/
/* */
/*                 </select>  dili için</td>*/
/*           </tr>*/
/*         </thead>*/
/* 		</table>*/
/*       <table id="module" class="list">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="left">SEO verilerini seç</td>*/
/*             <td class="left">Durum</td>*/
/*           </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*           <tr>*/
/*             <td class="left"Ürün, kategori, marka ve bilgi sayfalarında anahtar kelimelerde değişiklik yap</td>*/
/*            	<td class="left">*/
/* 				{% if seoreplacer.metakeywords %}*/
/*                 <input type="checkbox" name="seoreplacer[metakeywords]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="seoreplacer[metakeywords]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Ürün, kategori, marka ve bilgi sayfalarında meta açıklama alanında değişiklik yap</td>*/
/*            	<td class="left">*/
/* 				{% if seoreplacer.metadescription %}*/
/*                 <input type="checkbox" name="seoreplacer[metadescription]" value="1" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="checkbox" name="seoreplacer[metadescription]" value="1" /> {% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Ürünlerin alt etiketlerinde değişiklik yap</td>*/
/*            	<td class="left">*/
/* 				{% if seoreplacer.customalts %}*/
/*                 <input type="checkbox" name="seoreplacer[customalts]" value="1" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="checkbox" name="seoreplacer[customalts]" value="1" /> {% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Ürünlerin H1 etiketlerinde değişiklik yap</td>*/
/*            	<td class="left">*/
/* 				{% if seoreplacer.customh1tags %}*/
/*                 <input type="checkbox" name="seoreplacer[customh1tags]" value="1" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="checkbox" name="seoreplacer[customh1tags]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Ürünlerin H2 etiketlerinde değişiklik yap</td>*/
/*            	<td class="left">*/
/* 				{% if seoreplacer.customh2tags %}*/
/*                 <input type="checkbox" name="seoreplacer[customh2tags]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="seoreplacer[customh2tags]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Ürünlerin resim alt etiketlerinde değişiklik yap</td>*/
/*            	<td class="left">*/
/* 				{% if seoreplacer.customimagetitles %}*/
/*                 <input type="checkbox" name="seoreplacer[customimagetitles]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="seoreplacer[customimagetitles]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Ürün, kategori, marka ve bilgi sayfalarında ilave meta başlıkları alanında değişiklik yap</td>*/
/*            	<td class="left">*/
/* 				{% if seoreplacer.customtitles %}*/
/*                 <input type="checkbox" name="seoreplacer[customtitles]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="seoreplacer[customtitles]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Ürünlerin ürün etiketleri alanında değişiklik yap</td>*/
/*            	<td class="left">*/
/* 				{% if seoreplacer.producttags %}*/
/*                 <input type="checkbox" name="seoreplacer[producttags]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="seoreplacer[producttags]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Ürün, kategori, marka ve bilgi sayfalarında URL (linklerinde) değişiklik yap</td>*/
/*            	<td class="left">*/
/* 				{% if seoreplacer.seourls %}*/
/*                 <input type="checkbox" name="seoreplacer[seourls]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="seoreplacer[seourls]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* */
/* */
/*         </tbody>*/
/* */
/* */
/*       </table>*/
/*     </form>*/
/* 	<span style="color:red" class="help">* Veritabanı yedeği almanız tavsiye edilir.</span>*/
/*   </div>*/
/* </div>*/
/* */
/* {{ footer }}*/
/* */
