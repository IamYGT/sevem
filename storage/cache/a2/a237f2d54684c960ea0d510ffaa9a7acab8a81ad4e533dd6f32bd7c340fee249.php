<?php

/* extension/extension/redirect.twig */
class __TwigTemplate_6b3ad9b174cfc51fde3384639251a29d298823dc7acd71b628cd914489d84903 extends Twig_Template
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
\t<div class=\"buttons\"><a onclick=\"\$('#form').submit();\" class=\"button\">";
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
        // line 21
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t<ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-data\" data-toggle=\"tab\">SEO Yönlendirici</a></li>
            <li><a href=\"#tab-auto\" data-toggle=\"tab\">Akıllı Yönlendirme Raporları</a></li>
            <li><a href=\"#tab-settings\" data-toggle=\"tab\">Ayarlar</a></li>
          </ul>
\t<div class=\"tab-content\">
\t<div class=\"tab-pane active\" id=\"tab-data\">
\t<table id=\"redirect\" class=\"list\">
        <thead>
          <tr>
            <td class=\"left\">Bu Adresi Yönlendir</td>
            <td class=\"left\">Bu Adrrese Yönlendir</td>
            <td></td>
          </tr>
        </thead>
        ";
        // line 37
        $context["route_row"] = 0;
        // line 38
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["redirect"]) ? $context["redirect"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 39
            echo "        <tbody id=\"route-row";
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "\">
          <tr>
            <td><input type=\"text\" name=\"redirect[";
            // line 41
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo " ][title]\" value=\"";
            echo $this->getAttribute($context["route"], "title", array());
            echo "\" /></td>
            <td><input type=\"text\" name=\"redirect[";
            // line 42
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo " ][url]\" value=\"";
            echo $this->getAttribute($context["route"], "url", array());
            echo "\" /></td>
            <td class=\"left\"><a onclick=\"\$('#route-row";
            // line 43
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "').remove();\" class=\"button\">";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo " </a></td>
          </tr>
        </tbody>
        ";
            // line 46
            $context["route_row"] = ((isset($context["route_row"]) ? $context["route_row"] : null) + 1);
            // line 47
            echo "         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        <tfoot>
          <tr>
            <td colspan=\"2\"></td>
            <td class=\"left\"><a onclick=\"addroute();\" class=\"button\">";
        // line 51
        echo "Yeni Ekle</a></td>
          </tr>
        </tfoot>
      </table>
\t\t</div>
\t<div class=\"tab-pane\" id=\"tab-auto\">
\t\t\t <table class=\"list\">
          <thead>
            <tr>
              <td class=\"left\">Link</td>
              <td class=\"left\">Düzeltilmiş Link</td>
              <td class=\"left\">Tarih</td>
            </tr>
          </thead>
          <tbody>

            ";
        // line 67
        if ((isset($context["pages"]) ? $context["pages"] : null)) {
            // line 68
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 69
                echo "            <tr>
              <td class=\"left\">";
                // line 70
                echo $this->getAttribute($context["page"], "link", array());
                echo " </td>
              <td class=\"left\">";
                // line 71
                echo $this->getAttribute($context["page"], "fixedlink", array());
                echo " </td>
              <td class=\"left\">";
                // line 72
                echo $this->getAttribute($context["page"], "date", array());
                echo " </td>
            </tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "             ";
        } else {
            // line 76
            echo "            <tr>
              <td class=\"center\" colspan=\"8\">";
            // line 77
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo " </td>
            </tr>
             ";
        }
        // line 80
        echo "          </tbody>
        </table>
\t\t <div class=\"pagination\">";
        // line 82
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo " </div>
\t</div>
\t<div class=\"tab-pane\" id=\"tab-settings\">
\t<table id=\"module\" class=\"list\">
        <thead>
          <tr>
            <td class=\"left\">Özellik</td>
            <td class=\"left\">Durum</td>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class=\"left\">Yönlendirme kuralları eklemenizi sağlayan Yönlendirme Yöneticisi'ni etkinleştirin (Örnek. <b>eskilink.html</b> -> <b>yenilink.html</b> <b>http://opencartuzman.com/eskilink.html</b> buraya yönlenir <b>http://opencartuzman.com/yenilink.html</b>)</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 97
        if ($this->getAttribute((isset($context["redirect_settings"]) ? $context["redirect_settings"] : null), "redirectmanager", array())) {
            // line 98
            echo "                <input type=\"checkbox\" name=\"redirect_settings[redirectmanager]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 100
            echo "                <input type=\"checkbox\" name=\"redirect_settings[redirectmanager]\" value=\"1\" />";
        }
        // line 101
        echo "                 </td>
          </tr>
\t\t  <tr>
            <td class=\"left\">Yanlış yazılan URL'yi otomatik olarak yönlendiren Akıllı Otomatik Yönlendirmeyi etkinleştirs (eg. <b>http://opencartuzman.com/aple</b> doğru adrese otomatik yönlenir <b>http://opencartuzman.com/apple</b> if http://yoursiopencartuzman.com/aple yok ise)</td>
           \t<td class=\"left\">
\t\t\t\t";
        // line 106
        if ($this->getAttribute((isset($context["redirect_settings"]) ? $context["redirect_settings"] : null), "autoredirect", array())) {
            // line 107
            echo "                <input type=\"checkbox\" name=\"redirect_settings[autoredirect]\" value=\"1\" checked=\"checked\" />
                 ";
        } else {
            // line 109
            echo "                <input type=\"checkbox\" name=\"redirect_settings[autoredirect]\" value=\"1\" />";
        }
        // line 110
        echo "                 </td>
          </tr>

        </tbody>


      </table>
\t</div>
\t</div>
    </form>
\t<span style=\"color:red\" class=\"help\">*</span>
  </div>
</div>
<script type=\"text/javascript\"><!--

var route_row = ";
        // line 125
        echo (isset($context["route_row"]) ? $context["route_row"] : null);
        echo " ;

function addroute() {

\thtml  = '<tbody id=\"route-row' + route_row + '\">';
\thtml += '  <tr>';
\thtml += '    <td><input type=\"text\" name=\"redirect[' + route_row + '][title]\" value=\"\" /></td>';
\thtml += '    <td><input type=\"text\" name=\"redirect[' + route_row + '][url]\" value=\"\" /></td>';
\thtml += '    <td class=\"left\"><a onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" class=\"button\">";
        // line 133
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo " </a></td>';
\thtml += '  </tr>';
\thtml += '</tbody>';

\t\$('#redirect tfoot').before(html);

\troute_row++;
}

//--></script>
</script>

";
        // line 145
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/extension/redirect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 145,  279 => 133,  268 => 125,  251 => 110,  248 => 109,  244 => 107,  242 => 106,  235 => 101,  232 => 100,  228 => 98,  226 => 97,  208 => 82,  204 => 80,  198 => 77,  195 => 76,  192 => 75,  183 => 72,  179 => 71,  175 => 70,  172 => 69,  167 => 68,  165 => 67,  147 => 51,  142 => 48,  136 => 47,  134 => 46,  126 => 43,  120 => 42,  114 => 41,  108 => 39,  103 => 38,  101 => 37,  82 => 21,  71 => 17,  67 => 16,  63 => 14,  57 => 12,  55 => 11,  49 => 9,  47 => 8,  44 => 7,  31 => 5,  27 => 4,  19 => 1,);
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
/* 	<div class="buttons"><a onclick="$('#form').submit();" class="button">{{ button_save }} </a><a onclick="location = '{{ cancel }}';" class="button">{{ button_cancel }} </a></div>*/
/*   </div>*/
/*   <div class="content">*/
/* */
/*     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form">*/
/* 	<ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-data" data-toggle="tab">SEO Yönlendirici</a></li>*/
/*             <li><a href="#tab-auto" data-toggle="tab">Akıllı Yönlendirme Raporları</a></li>*/
/*             <li><a href="#tab-settings" data-toggle="tab">Ayarlar</a></li>*/
/*           </ul>*/
/* 	<div class="tab-content">*/
/* 	<div class="tab-pane active" id="tab-data">*/
/* 	<table id="redirect" class="list">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="left">Bu Adresi Yönlendir</td>*/
/*             <td class="left">Bu Adrrese Yönlendir</td>*/
/*             <td></td>*/
/*           </tr>*/
/*         </thead>*/
/*         {% set route_row = 0 %}*/
/*         {% for route in redirect %}*/
/*         <tbody id="route-row{{ route_row }}">*/
/*           <tr>*/
/*             <td><input type="text" name="redirect[{{ route_row }} ][title]" value="{{ route.title }}" /></td>*/
/*             <td><input type="text" name="redirect[{{ route_row }} ][url]" value="{{ route.url }}" /></td>*/
/*             <td class="left"><a onclick="$('#route-row{{ route_row }}').remove();" class="button">{{ button_remove }} </a></td>*/
/*           </tr>*/
/*         </tbody>*/
/*         {% set route_row = route_row + 1 %}*/
/*          {% endfor %}*/
/*         <tfoot>*/
/*           <tr>*/
/*             <td colspan="2"></td>*/
/*             <td class="left"><a onclick="addroute();" class="button">{# echo $button_add_route; #}Yeni Ekle</a></td>*/
/*           </tr>*/
/*         </tfoot>*/
/*       </table>*/
/* 		</div>*/
/* 	<div class="tab-pane" id="tab-auto">*/
/* 			 <table class="list">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="left">Link</td>*/
/*               <td class="left">Düzeltilmiş Link</td>*/
/*               <td class="left">Tarih</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/* */
/*             {% if pages %}*/
/*             {% for page in pages %}*/
/*             <tr>*/
/*               <td class="left">{{ page.link }} </td>*/
/*               <td class="left">{{ page.fixedlink }} </td>*/
/*               <td class="left">{{ page.date }} </td>*/
/*             </tr>*/
/* 			{% endfor %}*/
/*              {% else %}*/
/*             <tr>*/
/*               <td class="center" colspan="8">{{ text_no_results }} </td>*/
/*             </tr>*/
/*              {% endif %}*/
/*           </tbody>*/
/*         </table>*/
/* 		 <div class="pagination">{{ pagination }} </div>*/
/* 	</div>*/
/* 	<div class="tab-pane" id="tab-settings">*/
/* 	<table id="module" class="list">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="left">Özellik</td>*/
/*             <td class="left">Durum</td>*/
/*           </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*           <tr>*/
/*             <td class="left">Yönlendirme kuralları eklemenizi sağlayan Yönlendirme Yöneticisi'ni etkinleştirin (Örnek. <b>eskilink.html</b> -> <b>yenilink.html</b> <b>http://opencartuzman.com/eskilink.html</b> buraya yönlenir <b>http://opencartuzman.com/yenilink.html</b>)</td>*/
/*            	<td class="left">*/
/* 				{% if redirect_settings.redirectmanager %}*/
/*                 <input type="checkbox" name="redirect_settings[redirectmanager]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="redirect_settings[redirectmanager]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* 		  <tr>*/
/*             <td class="left">Yanlış yazılan URL'yi otomatik olarak yönlendiren Akıllı Otomatik Yönlendirmeyi etkinleştirs (eg. <b>http://opencartuzman.com/aple</b> doğru adrese otomatik yönlenir <b>http://opencartuzman.com/apple</b> if http://yoursiopencartuzman.com/aple yok ise)</td>*/
/*            	<td class="left">*/
/* 				{% if redirect_settings.autoredirect %}*/
/*                 <input type="checkbox" name="redirect_settings[autoredirect]" value="1" checked="checked" />*/
/*                  {% else %}*/
/*                 <input type="checkbox" name="redirect_settings[autoredirect]" value="1" />{% endif %}*/
/*                  </td>*/
/*           </tr>*/
/* */
/*         </tbody>*/
/* */
/* */
/*       </table>*/
/* 	</div>*/
/* 	</div>*/
/*     </form>*/
/* 	<span style="color:red" class="help">*</span>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* */
/* var route_row = {{ route_row }} ;*/
/* */
/* function addroute() {*/
/* */
/* 	html  = '<tbody id="route-row' + route_row + '">';*/
/* 	html += '  <tr>';*/
/* 	html += '    <td><input type="text" name="redirect[' + route_row + '][title]" value="" /></td>';*/
/* 	html += '    <td><input type="text" name="redirect[' + route_row + '][url]" value="" /></td>';*/
/* 	html += '    <td class="left"><a onclick="$(\'#route-row' + route_row + '\').remove();" class="button">{{ button_remove }} </a></td>';*/
/* 	html += '  </tr>';*/
/* 	html += '</tbody>';*/
/* */
/* 	$('#redirect tfoot').before(html);*/
/* */
/* 	route_row++;*/
/* }*/
/* */
/* //--></script>*/
/* </script>*/
/* */
/* {{ footer }}*/
/* */
