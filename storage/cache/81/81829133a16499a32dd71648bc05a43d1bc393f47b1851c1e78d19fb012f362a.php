<?php

/* extension/extension/seoreport.twig */
class __TwigTemplate_e2640ef8ab118af8fb88135c94b15135e0b29e189863eb4d9bc9c10823489891 extends Twig_Template
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
            echo "    ";
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
        echo "  </div>
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "  <div class=\"warning\">";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " </div>
  ";
        }
        // line 11
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 12
            echo "  <div class=\"success\">";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " </div>
  ";
        }
        // line 14
        echo "  <div class=\"box\">
    <div class=\"heading\">
      <h1><img src=\"view/image/product.png\" alt=\"\" /> ";
        // line 16
        echo ((((isset($context["heading_title"]) ? $context["heading_title"] : null) . " (") . (isset($context["selected_language"]) ? $context["selected_language"] : null)) . ")");
        echo " </h1>
\t  <div class=\"buttons\">

\t  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 20
            echo "\t\t <a onclick=\"location = '";
            echo ((isset($context["action"]) ? $context["action"] : null) . $this->getAttribute($context["language"], "language_id", array()));
            echo "';\" class=\"button\">

\t\t <img src=\"language/";
            // line 22
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" />

\t\t ";
            // line 24
            echo $this->getAttribute($context["language"], "name", array());
            echo " </a>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t  <a onclick=\"filter();\" class=\"button\">";
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo " </a>
\t  </div>
    </div>
    <div class=\"content\">
       <table class=\"list\">
          <thead>
            <tr>

              <td class=\"left\">";
        // line 34
        if (((isset($context["sort"]) ? $context["sort"] : null) == "type")) {
            // line 35
            echo "                <a href=\"";
            echo (isset($context["sort_type"]) ? $context["sort_type"] : null);
            echo "\" class=\"";
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["column_type"]) ? $context["column_type"] : null);
            echo " </a>
                 ";
        } else {
            // line 37
            echo "                <a href=\"";
            echo (isset($context["sort_type"]) ? $context["sort_type"] : null);
            echo "\">";
            echo (isset($context["column_type"]) ? $context["column_type"] : null);
            echo " </a>";
        }
        // line 38
        echo "                 </td>
              <td class=\"left\">";
        // line 39
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            // line 40
            echo "                <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo " </a>
                ";
        } else {
            // line 42
            echo "                <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo " </a>";
        }
        // line 43
        echo "                 </td>
              <td class=\"left\">";
        // line 44
        if (((isset($context["sort"]) ? $context["sort"] : null) == "keyword")) {
            // line 45
            echo "                <a href=\"";
            echo (isset($context["sort_keyword"]) ? $context["sort_keyword"] : null);
            echo "\" class=\"";
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["column_keyword"]) ? $context["column_keyword"] : null);
            echo " </a>
                ";
        } else {
            // line 47
            echo "                <a href=\"";
            echo (isset($context["sort_keyword"]) ? $context["sort_keyword"] : null);
            echo "\">";
            echo (isset($context["column_keyword"]) ? $context["column_keyword"] : null);
            echo " </a> ";
        }
        // line 48
        echo "                 </td>
              <td class=\"left\">";
        // line 49
        if (((isset($context["sort"]) ? $context["sort"] : null) == "meta_keyword")) {
            // line 50
            echo "                <a href=\"";
            echo (isset($context["sort_meta_keyword"]) ? $context["sort_meta_keyword"] : null);
            echo "\" class=\"";
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["column_meta_keyword"]) ? $context["column_meta_keyword"] : null);
            echo " </a>
               ";
        } else {
            // line 52
            echo "                <a href=\"";
            echo (isset($context["sort_meta_keyword"]) ? $context["sort_meta_keyword"] : null);
            echo "\">";
            echo (isset($context["column_meta_keyword"]) ? $context["column_meta_keyword"] : null);
            echo " </a>  ";
        }
        // line 53
        echo "                 </td>
              <td class=\"left\">";
        // line 54
        if (((isset($context["sort"]) ? $context["sort"] : null) == "meta_description")) {
            // line 55
            echo "                <a href=\"";
            echo (isset($context["sort_meta_description"]) ? $context["sort_meta_description"] : null);
            echo "\" class=\"";
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["column_meta_description"]) ? $context["column_meta_description"] : null);
            echo " </a>
                ";
        } else {
            // line 57
            echo "                <a href=\"";
            echo (isset($context["sort_meta_description"]) ? $context["sort_meta_description"] : null);
            echo "\">";
            echo (isset($context["column_meta_description"]) ? $context["column_meta_description"] : null);
            echo " </a>";
        }
        // line 58
        echo "                 </td>
              <td class=\"left\">";
        // line 59
        if (((isset($context["sort"]) ? $context["sort"] : null) == "tags")) {
            // line 60
            echo "                <a href=\"";
            echo (isset($context["sort_tags"]) ? $context["sort_tags"] : null);
            echo "\" class=\"";
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["column_tags"]) ? $context["column_tags"] : null);
            echo " </a>
                ";
        } else {
            // line 62
            echo "                <a href=\"";
            echo (isset($context["sort_tags"]) ? $context["sort_tags"] : null);
            echo "\">";
            echo (isset($context["column_tags"]) ? $context["column_tags"] : null);
            echo " </a> ";
        }
        // line 63
        echo "                 </td>

            </tr>
          </thead>
          <tbody>
            <tr class=\"filter\">

              <td><select name=\"filter_type\">
                  <option value=\"*\"></option>
\t\t\t\t  ";
        // line 72
        $context["types"] = array(0 => "Kategor", 1 => "Ürün", 2 => "Bilgi Sayfası", 3 => "Marka");
        echo " 
\t\t\t\t  ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 74
            echo "                  ";
            if (((isset($context["filter_type"]) ? $context["filter_type"] : null) == $context["type"])) {
                // line 75
                echo "                  <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo $context["type"];
                echo " </option>
                 ";
            } else {
                // line 77
                echo "                  <option value=\"";
                echo $context["type"];
                echo "\">";
                echo $context["type"];
                echo " </option>
                   ";
            }
            // line 79
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                </select></td>

              <!--<td><input type=\"text\" name=\"filter_type\" value=\"";
        // line 83
        echo (isset($context["filter_type"]) ? $context["filter_type"] : null);
        echo "\" /></td>-->
              <td><input type=\"text\" name=\"filter_name\" value=\"";
        // line 84
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" /></td>
              <td><input type=\"text\" name=\"filter_keyword\" value=\"";
        // line 85
        echo (isset($context["filter_keyword"]) ? $context["filter_keyword"] : null);
        echo "\" /></td>
              <td><input type=\"text\" name=\"filter_meta_keyword\" value=\"";
        // line 86
        echo (isset($context["filter_meta_keyword"]) ? $context["filter_meta_keyword"] : null);
        echo "\" /></td>
              <td><input type=\"text\" name=\"filter_meta_description\" value=\"";
        // line 87
        echo (isset($context["filter_meta_description"]) ? $context["filter_meta_description"] : null);
        echo "\" /></td>
              <td><input type=\"text\" name=\"filter_tags\" value=\"";
        // line 88
        echo (isset($context["filter_tags"]) ? $context["filter_tags"] : null);
        echo "\" /></td>

            </tr>
            ";
        // line 91
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 92
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 93
                echo "            <tr>

              <td class=\"left\">";
                // line 95
                echo $this->getAttribute($context["product"], "type", array());
                echo " </td>
              <td class=\"left\">";
                // line 96
                echo $this->getAttribute($context["product"], "name", array());
                echo " </td>
              <td class=\"left\">";
                // line 97
                echo $this->getAttribute($context["product"], "keyword", array());
                echo " </td>

\t\t\t  ";
                // line 99
                if (($this->getAttribute($context["product"], "meta_keyword", array()) !=  -1)) {
                    // line 100
                    echo "\t\t\t  <td class=\"left\">";
                    echo $this->getAttribute($context["product"], "meta_keyword", array());
                    echo " </td>
\t\t\t  ";
                } else {
                    // line 102
                    echo "\t\t\t  <td class=\"left\" style=\"background:lightgrey\"></td>
\t\t\t  ";
                }
                // line 104
                echo "
\t\t\t  ";
                // line 105
                if (($this->getAttribute($context["product"], "meta_description", array()) !=  -1)) {
                    // line 106
                    echo "              <td class=\"left\">";
                    echo $this->getAttribute($context["product"], "meta_description", array());
                    echo " </td>
\t\t\t   ";
                } else {
                    // line 108
                    echo "\t\t\t  <td class=\"left\" style=\"background:lightgrey\"></td>
\t\t\t   ";
                }
                // line 110
                echo "
\t\t\t  ";
                // line 111
                if (($this->getAttribute($context["product"], "tags", array()) !=  -1)) {
                    // line 112
                    echo "              <td class=\"left\">";
                    echo $this->getAttribute($context["product"], "tags", array());
                    echo " </td>
\t\t\t   ";
                } else {
                    // line 114
                    echo "\t\t\t  <td class=\"left\" style=\"background:lightgrey\"></td>
\t\t\t   ";
                }
                // line 116
                echo "            </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "             ";
        } else {
            // line 119
            echo "            <tr>
              <td class=\"center\" colspan=\"8\">";
            // line 120
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo " </td>
            </tr>
              ";
        }
        // line 123
        echo "          </tbody>
        </table>
      </form>
      <div class=\"pagination\">";
        // line 126
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo " </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
function filter() {
\turl = 'index.php?route=extension/extension/seoreport&user_token=";
        // line 132
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_type = \$('select[name=\\'filter_type\\']').val();

\tif (filter_type != '*') {
\t\turl += '&filter_type=' + encodeURIComponent(filter_type);
\t}

\tvar filter_keyword = \$('input[name=\\'filter_keyword\\']').val();

\tif (filter_keyword) {
\t\turl += '&filter_keyword=' + encodeURIComponent(filter_keyword);
\t}

\tvar filter_meta_keyword = \$('input[name=\\'filter_meta_keyword\\']').val();

\tif (filter_meta_keyword) {
\t\turl += '&filter_meta_keyword=' + encodeURIComponent(filter_meta_keyword);
\t}

\tvar filter_meta_description = \$('input[name=\\'filter_meta_description\\']').val();

\tif (filter_meta_description) {
\t\turl += '&filter_meta_description=' + encodeURIComponent(filter_meta_description);
\t}

\tvar filter_tags = \$('input[name=\\'filter_tags\\']').val();

\tif (filter_tags) {
\t\turl += '&filter_tags=' + encodeURIComponent(filter_tags);
\t}


\tlocation = url;
}
//--></script>
<script type=\"text/javascript\"><!--
\$('#form input').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\tfilter();
\t}
});
//--></script>
";
        // line 181
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/extension/seoreport.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 181,  417 => 132,  408 => 126,  403 => 123,  397 => 120,  394 => 119,  391 => 118,  384 => 116,  380 => 114,  374 => 112,  372 => 111,  369 => 110,  365 => 108,  359 => 106,  357 => 105,  354 => 104,  350 => 102,  344 => 100,  342 => 99,  337 => 97,  333 => 96,  329 => 95,  325 => 93,  320 => 92,  318 => 91,  312 => 88,  308 => 87,  304 => 86,  300 => 85,  296 => 84,  292 => 83,  287 => 80,  281 => 79,  273 => 77,  265 => 75,  262 => 74,  258 => 73,  254 => 72,  243 => 63,  236 => 62,  226 => 60,  224 => 59,  221 => 58,  214 => 57,  204 => 55,  202 => 54,  199 => 53,  192 => 52,  182 => 50,  180 => 49,  177 => 48,  170 => 47,  160 => 45,  158 => 44,  155 => 43,  148 => 42,  138 => 40,  136 => 39,  133 => 38,  126 => 37,  116 => 35,  114 => 34,  102 => 26,  94 => 24,  85 => 22,  79 => 20,  75 => 19,  69 => 16,  65 => 14,  59 => 12,  56 => 11,  50 => 9,  48 => 8,  45 => 7,  32 => 5,  28 => 4,  19 => 1,);
    }
}
/* ﻿{{ header }} {{ column_left }}*/
/* <div id="content"><link type="text/css" href="view/stylesheet/stylesheet2.css" rel="stylesheet" media="screen" />*/
/*   <div class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     {{ breadcrumb.separator }} <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }} </a>*/
/*       {% endfor %}*/
/*   </div>*/
/*   {% if error_warning %}*/
/*   <div class="warning">{{ error_warning }} </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="success">{{ success }} </div>*/
/*   {% endif %}*/
/*   <div class="box">*/
/*     <div class="heading">*/
/*       <h1><img src="view/image/product.png" alt="" /> {{ heading_title~" ("~selected_language~")" }} </h1>*/
/* 	  <div class="buttons">*/
/* */
/* 	  {% for language in languages %}*/
/* 		 <a onclick="location = '{{ action~language.language_id }}';" class="button">*/
/* */
/* 		 <img src="language/{{ language.code}}/{{ language.code }}.png" title="{{ language.name }}" />*/
/* */
/* 		 {{ language.name }} </a>*/
/* 	    {% endfor %}*/
/* 	  <a onclick="filter();" class="button">{{ button_filter }} </a>*/
/* 	  </div>*/
/*     </div>*/
/*     <div class="content">*/
/*        <table class="list">*/
/*           <thead>*/
/*             <tr>*/
/* */
/*               <td class="left">{% if sort  ==  'type' %}*/
/*                 <a href="{{ sort_type }}" class="{{ order }}">{{ column_type }} </a>*/
/*                  {% else %}*/
/*                 <a href="{{ sort_type }}">{{ column_type }} </a>{% endif %}*/
/*                  </td>*/
/*               <td class="left">{% if sort  ==  'name' %}*/
/*                 <a href="{{ sort_name }}" class="{{ order }}">{{ column_name }} </a>*/
/*                 {% else %}*/
/*                 <a href="{{ sort_name }}">{{ column_name }} </a>{% endif %}*/
/*                  </td>*/
/*               <td class="left">{% if sort  ==  'keyword' %}*/
/*                 <a href="{{ sort_keyword }}" class="{{ order }}">{{ column_keyword }} </a>*/
/*                 {% else %}*/
/*                 <a href="{{ sort_keyword }}">{{ column_keyword }} </a> {% endif %}*/
/*                  </td>*/
/*               <td class="left">{% if sort  ==  'meta_keyword' %}*/
/*                 <a href="{{ sort_meta_keyword }}" class="{{ order }}">{{ column_meta_keyword }} </a>*/
/*                {% else %}*/
/*                 <a href="{{ sort_meta_keyword }}">{{ column_meta_keyword }} </a>  {% endif %}*/
/*                  </td>*/
/*               <td class="left">{% if sort  ==  'meta_description' %}*/
/*                 <a href="{{ sort_meta_description }}" class="{{ order }}">{{ column_meta_description }} </a>*/
/*                 {% else %}*/
/*                 <a href="{{ sort_meta_description }}">{{ column_meta_description }} </a>{% endif %}*/
/*                  </td>*/
/*               <td class="left">{% if sort  ==  'tags' %}*/
/*                 <a href="{{ sort_tags }}" class="{{ order }}">{{ column_tags }} </a>*/
/*                 {% else %}*/
/*                 <a href="{{ sort_tags }}">{{ column_tags }} </a> {% endif %}*/
/*                  </td>*/
/* */
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             <tr class="filter">*/
/* */
/*               <td><select name="filter_type">*/
/*                   <option value="*"></option>*/
/* 				  {% set types = ['Kategor','Ürün','Bilgi Sayfası','Marka'] %} */
/* 				  {% for type in types %}*/
/*                   {% if filter_type  == type %}*/
/*                   <option value="{{ type }}" selected="selected">{{ type }} </option>*/
/*                  {% else %}*/
/*                   <option value="{{ type }}">{{ type }} </option>*/
/*                    {% endif %}*/
/* 				  {% endfor %}*/
/* */
/*                 </select></td>*/
/* */
/*               <!--<td><input type="text" name="filter_type" value="{{ filter_type }}" /></td>-->*/
/*               <td><input type="text" name="filter_name" value="{{ filter_name }}" /></td>*/
/*               <td><input type="text" name="filter_keyword" value="{{ filter_keyword }}" /></td>*/
/*               <td><input type="text" name="filter_meta_keyword" value="{{ filter_meta_keyword }}" /></td>*/
/*               <td><input type="text" name="filter_meta_description" value="{{ filter_meta_description }}" /></td>*/
/*               <td><input type="text" name="filter_tags" value="{{ filter_tags }}" /></td>*/
/* */
/*             </tr>*/
/*             {% if products %}*/
/*             {% for product in products %}*/
/*             <tr>*/
/* */
/*               <td class="left">{{ product.type }} </td>*/
/*               <td class="left">{{ product.name }} </td>*/
/*               <td class="left">{{ product.keyword }} </td>*/
/* */
/* 			  {% if product.meta_keyword  != -1 %}*/
/* 			  <td class="left">{{ product.meta_keyword }} </td>*/
/* 			  {% else %}*/
/* 			  <td class="left" style="background:lightgrey"></td>*/
/* 			  {% endif %}*/
/* */
/* 			  {% if product.meta_description != -1 %}*/
/*               <td class="left">{{ product.meta_description }} </td>*/
/* 			   {% else %}*/
/* 			  <td class="left" style="background:lightgrey"></td>*/
/* 			   {% endif %}*/
/* */
/* 			  {% if product.tags  != -1 %}*/
/*               <td class="left">{{ product.tags }} </td>*/
/* 			   {% else %}*/
/* 			  <td class="left" style="background:lightgrey"></td>*/
/* 			   {% endif %}*/
/*             </tr>*/
/*               {% endfor %}*/
/*              {% else %}*/
/*             <tr>*/
/*               <td class="center" colspan="8">{{ text_no_results }} </td>*/
/*             </tr>*/
/*               {% endif %}*/
/*           </tbody>*/
/*         </table>*/
/*       </form>*/
/*       <div class="pagination">{{ pagination }} </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* function filter() {*/
/* 	url = 'index.php?route=extension/extension/seoreport&user_token={{ user_token }}';*/
/* */
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	var filter_type = $('select[name=\'filter_type\']').val();*/
/* */
/* 	if (filter_type != '*') {*/
/* 		url += '&filter_type=' + encodeURIComponent(filter_type);*/
/* 	}*/
/* */
/* 	var filter_keyword = $('input[name=\'filter_keyword\']').val();*/
/* */
/* 	if (filter_keyword) {*/
/* 		url += '&filter_keyword=' + encodeURIComponent(filter_keyword);*/
/* 	}*/
/* */
/* 	var filter_meta_keyword = $('input[name=\'filter_meta_keyword\']').val();*/
/* */
/* 	if (filter_meta_keyword) {*/
/* 		url += '&filter_meta_keyword=' + encodeURIComponent(filter_meta_keyword);*/
/* 	}*/
/* */
/* 	var filter_meta_description = $('input[name=\'filter_meta_description\']').val();*/
/* */
/* 	if (filter_meta_description) {*/
/* 		url += '&filter_meta_description=' + encodeURIComponent(filter_meta_description);*/
/* 	}*/
/* */
/* 	var filter_tags = $('input[name=\'filter_tags\']').val();*/
/* */
/* 	if (filter_tags) {*/
/* 		url += '&filter_tags=' + encodeURIComponent(filter_tags);*/
/* 	}*/
/* */
/* */
/* 	location = url;*/
/* }*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#form input').keydown(function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		filter();*/
/* 	}*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
/* */
