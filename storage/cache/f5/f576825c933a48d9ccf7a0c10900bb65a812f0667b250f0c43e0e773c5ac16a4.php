<?php

/* extension/extension/clickfix.twig */
class __TwigTemplate_e94ea6416f917f0658cfde27729e0d6b52180073524cb2b8b373f05aa2caf98e extends Twig_Template
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
";
        // line 2
        ob_start();
        // line 3
        echo "<div id=\"content\">
<link type=\"text/css\" href=\"view/stylesheet/stylesheet2.css\" rel=\"stylesheet\" media=\"screen\" />
  <div class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
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
        // line 9
        echo "  </div>
  ";
        // line 10
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 11
            echo "  <div class=\"warning\">";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " </div>
  ";
        }
        // line 13
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 14
            echo "  <div class=\"success\">";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " </div>
  ";
        }
        // line 16
        echo "  <div class=\"box\">
    <div class=\"heading\">
      <h1><img src=\"view/image/review.png\" alt=\"\" /> ";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>

\t\t<div class=\"buttons\"><div id=\"containerx\" style=\"margin: 1px;width: 200px;height: 21px;position: relative;\"></div></div>
\t</div>
    <div class=\"content\">
\t<form action=\"";
        // line 23
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t\t   <table class=\"list\">
            <thead>
              <tr>
                <td class=\"left\" width=\"200\">SEO Özellik</td>
\t\t\t\t<td class=\"left\">Durum</td>
\t\t\t\t<td class=\"right\" width=\"220\">İşlem</td>
              </tr>
            </thead>

\t\t\t<tbody>
              <tr>
                <td class=\"left\"><b>SEO Linkler</b></td>
                <td class=\"left\">

\t\t\t\t";
        // line 38
        echo (isset($context["aboutseourls"]) ? $context["aboutseourls"] : null);
        echo " </td>
                <td class=\"right\">
\t\t\t\t\t";
        // line 40
        if ((isset($context["fixseourls"]) ? $context["fixseourls"] : null)) {
            // line 41
            echo "\t\t\t\t\t<a onclick=\"location = '";
            echo (isset($context["fixseourls"]) ? $context["fixseourls"] : null);
            echo "'\" class=\"button\">SEO URL'lerini Düzelt</a>
\t\t\t\t\t ";
        } else {
            // line 43
            echo "\t\t\t\t\t<a class=\"button\" style=\"background:green\">Tamam</a>
\t\t\t\t\t ";
        }
        // line 45
        echo "\t\t\t\t</td>
              </tr>
              <tr>
                <td class=\"left\"><b>Meta Açıklaması</b></td>
                <td class=\"left\">

\t\t\t\t";
        // line 51
        echo (isset($context["aboutmetadescription"]) ? $context["aboutmetadescription"] : null);
        echo " </td>
                <td class=\"right\">
\t\t\t\t\t";
        // line 53
        if ((isset($context["fixmetadescription"]) ? $context["fixmetadescription"] : null)) {
            // line 54
            echo "\t\t\t\t\t<a onclick=\"location = '";
            echo (isset($context["fixmetadescription"]) ? $context["fixmetadescription"] : null);
            echo "'\" class=\"button\">Meta Kelimeleri Düzelt</a>
\t\t\t\t\t ";
        } else {
            // line 56
            echo "\t\t\t\t\t<a class=\"button\" style=\"background:green\">Tamam </a>
\t\t\t\t\t ";
        }
        // line 58
        echo "\t\t\t\t</td>
              </tr>
              <tr>
                <td class=\"left\"><b>Meta Kelimeleri</b></td>
                <td class=\"left\">

\t\t\t\t";
        // line 64
        echo (isset($context["aboutmetakeyword"]) ? $context["aboutmetakeyword"] : null);
        echo " </td>
                <td class=\"right\">
\t\t\t\t\t";
        // line 66
        if ((isset($context["fixmetakeyword"]) ? $context["fixmetakeyword"] : null)) {
            // line 67
            echo "\t\t\t\t\t<a onclick=\"location = '";
            echo (isset($context["fixmetakeyword"]) ? $context["fixmetakeyword"] : null);
            echo "'\" class=\"button\">Meta Kelimeleri Düzelt</a>
\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t<a class=\"button\" style=\"background:green\">Tamam </a>
\t\t\t\t\t ";
        }
        // line 71
        echo "\t\t\t\t</td>
              </tr>
              <tr>
                <td class=\"left\"><b>Meta Başlığı</b></td>
                <td class=\"left\">

\t\t\t\t";
        // line 77
        echo (isset($context["aboutmetatitle"]) ? $context["aboutmetatitle"] : null);
        echo " </td>
                <td class=\"right\">
\t\t\t\t\t";
        // line 79
        if ((isset($context["fixmetatitle"]) ? $context["fixmetatitle"] : null)) {
            // line 80
            echo "\t\t\t\t\t<a onclick=\"location = '";
            echo (isset($context["fixmetatitle"]) ? $context["fixmetatitle"] : null);
            echo "'\" class=\"button\">Meta Başlıkları Düzelt</a>
\t\t\t\t\t ";
        } else {
            // line 82
            echo "\t\t\t\t\t<a class=\"button\" style=\"background:green\">Tamam </a>
\t\t\t\t\t ";
        }
        // line 84
        echo "\t\t\t\t</td>
              </tr>
              <tr>
                <td class=\"left\"><b>Canonical Linkler</b></td>
                <td class=\"left\">

\t\t\t\t";
        // line 90
        echo (isset($context["aboutcanonicals"]) ? $context["aboutcanonicals"] : null);
        echo " </td>
                <td class=\"right\">
\t\t\t\t\t";
        // line 92
        if ((isset($context["fixcanonicals"]) ? $context["fixcanonicals"] : null)) {
            // line 93
            echo "\t\t\t\t\t<a onclick=\"location = '";
            echo (isset($context["fixcanonicals"]) ? $context["fixcanonicals"] : null);
            echo "'\" class=\"button\">Canonical Linkleri Düzelt</a>
\t\t\t\t\t ";
        } else {
            // line 95
            echo "\t\t\t\t\t<a class=\"button\" style=\"background:green\">Tamam </a>
\t\t\t\t\t ";
        }
        // line 97
        echo "\t\t\t\t</td>
              </tr>
            <tr>
                <td class=\"left\"><b>Çok Dil SEO</b></td>
                <td class=\"left\">

\t\t\t\t";
        // line 103
        echo (isset($context["aboutmlseo"]) ? $context["aboutmlseo"] : null);
        echo " </td>
                <td class=\"right\">
\t\t\t\t\t";
        // line 105
        if ((isset($context["fixmlseo"]) ? $context["fixmlseo"] : null)) {
            // line 106
            echo "\t\t\t\t\t<a onclick=\"location = '";
            echo (isset($context["fixmlseo"]) ? $context["fixmlseo"] : null);
            echo "'\" class=\"button\">Çok Dil SEO Düzelt</a>
\t\t\t\t\t ";
        } else {
            // line 108
            echo "\t\t\t\t\t<a class=\"button\" style=\"background:green\">Tamam </a>
\t\t\t\t\t ";
        }
        // line 110
        echo "\t\t\t\t</td>
              </tr>
            <tr>
                <td class=\"left\"><b>Rich Snippets & Sosyal Medya SEO</b></td>
                <td class=\"left\">

\t\t\t\t";
        // line 116
        echo (isset($context["aboutrichsnippets"]) ? $context["aboutrichsnippets"] : null);
        echo " </td>
                <td class=\"right\">
\t\t\t\t\t";
        // line 118
        if ((isset($context["fixrichsnippets"]) ? $context["fixrichsnippets"] : null)) {
            // line 119
            echo "\t\t\t\t\t<a onclick=\"location = '";
            echo (isset($context["fixrichsnippets"]) ? $context["fixrichsnippets"] : null);
            echo "'\" class=\"button\">Rich Snippets & Sosyal Medya SEO Düzelt</a>
\t\t\t\t\t";
        } else {
            // line 121
            echo "\t\t\t\t\t<a class=\"button\" style=\"background:green\">Tamam </a>
\t\t\t\t\t ";
        }
        // line 123
        echo "\t\t\t\t</td>
              </tr>
            <tr>
                <td class=\"left\"><b>SEO Sayfalama</b></td>
                <td class=\"left\">

\t\t\t\t";
        // line 129
        echo (isset($context["aboutseopagination"]) ? $context["aboutseopagination"] : null);
        echo " </td>
                <td class=\"right\">
\t\t\t\t\t";
        // line 131
        if ((isset($context["fixseopagination"]) ? $context["fixseopagination"] : null)) {
            // line 132
            echo "\t\t\t\t\t<a onclick=\"location = '";
            echo (isset($context["fixseopagination"]) ? $context["fixseopagination"] : null);
            echo "'\" class=\"button\">SEO Sayfalama Düzelt</a>
\t\t\t\t\t ";
        } else {
            // line 134
            echo "\t\t\t\t\t<a class=\"button\" style=\"background:green\">Tamam </a>
\t\t\t\t\t ";
        }
        // line 136
        echo "\t\t\t\t</td>
              </tr>
            <tr>
                <td class=\"left\"><b>Gelişmiş SEO Ayarları</b></td>
                <td class=\"left\">

\t\t\t\t";
        // line 142
        echo (isset($context["aboutextendedseo"]) ? $context["aboutextendedseo"] : null);
        echo " </td>
                <td class=\"right\">
\t\t\t\t\t";
        // line 144
        if ((isset($context["fixextendedseo"]) ? $context["fixextendedseo"] : null)) {
            // line 145
            echo "\t\t\t\t\t<a onclick=\"location = '";
            echo (isset($context["fixextendedseo"]) ? $context["fixextendedseo"] : null);
            echo "'\" class=\"button\">Gelişmiş SEO Ayarlarını Düzelt</a>
\t\t\t\t\t";
        } else {
            // line 147
            echo "\t\t\t\t\t<a class=\"button\" style=\"background:green\">Tamam </a>
\t\t\t\t\t ";
        }
        // line 149
        echo "\t\t\t\t</td>
              </tr>
            </tbody>


          </table>
\t</form>
\t</div>
   </div>
</div>
<script src=\"view/javascript/progressbar.js\"></script>
<script type=\"text/javascript\">
var bar = new ProgressBar.Line(containerx, {
  strokeWidth: 10,
  easing: 'easeInOut',
  duration: 3000,
  color: '#FFEA82',
  trailColor: '#bbb',
  trailWidth: 10,
  svgStyle: {width: '100%', height: '100%'},
  text: {
    style: {
      // Text color.
      // Default: same as stroke color (options.color)
      color: '#555555',

      position: 'absolute',
      right: '50px',
      top: '0',
      padding: 0,
      margin: 10,
      transform: null
    },
    autoStyleContainer: false
  },
  from: {color: '#00EA82'},
  to: {color: '#006A5A'},
  step: (state, bar) => {
    bar.setText('<b>SEO Uyumluluk: ' + Math.floor(bar.value() * 100) + ' %</b>');
  }
});

bar.animate(";
        // line 191
        echo (isset($context["seometer"]) ? $context["seometer"] : null);
        echo " );
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 194
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/extension/clickfix.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 194,  360 => 191,  316 => 149,  312 => 147,  306 => 145,  304 => 144,  299 => 142,  291 => 136,  287 => 134,  281 => 132,  279 => 131,  274 => 129,  266 => 123,  262 => 121,  256 => 119,  254 => 118,  249 => 116,  241 => 110,  237 => 108,  231 => 106,  229 => 105,  224 => 103,  216 => 97,  212 => 95,  206 => 93,  204 => 92,  199 => 90,  191 => 84,  187 => 82,  181 => 80,  179 => 79,  174 => 77,  166 => 71,  162 => 69,  156 => 67,  154 => 66,  149 => 64,  141 => 58,  137 => 56,  131 => 54,  129 => 53,  124 => 51,  116 => 45,  112 => 43,  106 => 41,  104 => 40,  99 => 38,  81 => 23,  73 => 18,  69 => 16,  63 => 14,  60 => 13,  54 => 11,  52 => 10,  49 => 9,  36 => 7,  32 => 6,  27 => 3,  25 => 2,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }}*/
/* {% spaceless %}*/
/* <div id="content">*/
/* <link type="text/css" href="view/stylesheet/stylesheet2.css" rel="stylesheet" media="screen" />*/
/*   <div class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     {{ breadcrumb.separator }} <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }} </a>*/
/*     {% endfor %}*/
/*   </div>*/
/*   {% if error_warning %}*/
/*   <div class="warning">{{ error_warning }} </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="success">{{ success }} </div>*/
/*   {% endif %}*/
/*   <div class="box">*/
/*     <div class="heading">*/
/*       <h1><img src="view/image/review.png" alt="" /> {{ heading_title }} </h1>*/
/* */
/* 		<div class="buttons"><div id="containerx" style="margin: 1px;width: 200px;height: 21px;position: relative;"></div></div>*/
/* 	</div>*/
/*     <div class="content">*/
/* 	<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form">*/
/* 		   <table class="list">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="left" width="200">SEO Özellik</td>*/
/* 				<td class="left">Durum</td>*/
/* 				<td class="right" width="220">İşlem</td>*/
/*               </tr>*/
/*             </thead>*/
/* */
/* 			<tbody>*/
/*               <tr>*/
/*                 <td class="left"><b>SEO Linkler</b></td>*/
/*                 <td class="left">*/
/* */
/* 				{{ aboutseourls }} </td>*/
/*                 <td class="right">*/
/* 					{% if fixseourls %}*/
/* 					<a onclick="location = '{{ fixseourls }}'" class="button">SEO URL'lerini Düzelt</a>*/
/* 					 {% else %}*/
/* 					<a class="button" style="background:green">Tamam</a>*/
/* 					 {% endif %}*/
/* 				</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td class="left"><b>Meta Açıklaması</b></td>*/
/*                 <td class="left">*/
/* */
/* 				{{ aboutmetadescription }} </td>*/
/*                 <td class="right">*/
/* 					{% if fixmetadescription %}*/
/* 					<a onclick="location = '{{ fixmetadescription }}'" class="button">Meta Kelimeleri Düzelt</a>*/
/* 					 {% else %}*/
/* 					<a class="button" style="background:green">Tamam </a>*/
/* 					 {% endif %}*/
/* 				</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td class="left"><b>Meta Kelimeleri</b></td>*/
/*                 <td class="left">*/
/* */
/* 				{{ aboutmetakeyword }} </td>*/
/*                 <td class="right">*/
/* 					{% if fixmetakeyword %}*/
/* 					<a onclick="location = '{{ fixmetakeyword }}'" class="button">Meta Kelimeleri Düzelt</a>*/
/* 					{% else %}*/
/* 					<a class="button" style="background:green">Tamam </a>*/
/* 					 {% endif %}*/
/* 				</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td class="left"><b>Meta Başlığı</b></td>*/
/*                 <td class="left">*/
/* */
/* 				{{ aboutmetatitle }} </td>*/
/*                 <td class="right">*/
/* 					{% if fixmetatitle %}*/
/* 					<a onclick="location = '{{ fixmetatitle }}'" class="button">Meta Başlıkları Düzelt</a>*/
/* 					 {% else %}*/
/* 					<a class="button" style="background:green">Tamam </a>*/
/* 					 {% endif %}*/
/* 				</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td class="left"><b>Canonical Linkler</b></td>*/
/*                 <td class="left">*/
/* */
/* 				{{ aboutcanonicals }} </td>*/
/*                 <td class="right">*/
/* 					{% if fixcanonicals %}*/
/* 					<a onclick="location = '{{ fixcanonicals }}'" class="button">Canonical Linkleri Düzelt</a>*/
/* 					 {% else %}*/
/* 					<a class="button" style="background:green">Tamam </a>*/
/* 					 {% endif %}*/
/* 				</td>*/
/*               </tr>*/
/*             <tr>*/
/*                 <td class="left"><b>Çok Dil SEO</b></td>*/
/*                 <td class="left">*/
/* */
/* 				{{ aboutmlseo }} </td>*/
/*                 <td class="right">*/
/* 					{% if fixmlseo %}*/
/* 					<a onclick="location = '{{ fixmlseo }}'" class="button">Çok Dil SEO Düzelt</a>*/
/* 					 {% else %}*/
/* 					<a class="button" style="background:green">Tamam </a>*/
/* 					 {% endif %}*/
/* 				</td>*/
/*               </tr>*/
/*             <tr>*/
/*                 <td class="left"><b>Rich Snippets & Sosyal Medya SEO</b></td>*/
/*                 <td class="left">*/
/* */
/* 				{{ aboutrichsnippets }} </td>*/
/*                 <td class="right">*/
/* 					{% if fixrichsnippets %}*/
/* 					<a onclick="location = '{{ fixrichsnippets }}'" class="button">Rich Snippets & Sosyal Medya SEO Düzelt</a>*/
/* 					{% else %}*/
/* 					<a class="button" style="background:green">Tamam </a>*/
/* 					 {% endif %}*/
/* 				</td>*/
/*               </tr>*/
/*             <tr>*/
/*                 <td class="left"><b>SEO Sayfalama</b></td>*/
/*                 <td class="left">*/
/* */
/* 				{{ aboutseopagination }} </td>*/
/*                 <td class="right">*/
/* 					{% if fixseopagination %}*/
/* 					<a onclick="location = '{{ fixseopagination }}'" class="button">SEO Sayfalama Düzelt</a>*/
/* 					 {% else %}*/
/* 					<a class="button" style="background:green">Tamam </a>*/
/* 					 {% endif %}*/
/* 				</td>*/
/*               </tr>*/
/*             <tr>*/
/*                 <td class="left"><b>Gelişmiş SEO Ayarları</b></td>*/
/*                 <td class="left">*/
/* */
/* 				{{ aboutextendedseo }} </td>*/
/*                 <td class="right">*/
/* 					{% if fixextendedseo %}*/
/* 					<a onclick="location = '{{ fixextendedseo }}'" class="button">Gelişmiş SEO Ayarlarını Düzelt</a>*/
/* 					{% else %}*/
/* 					<a class="button" style="background:green">Tamam </a>*/
/* 					 {% endif %}*/
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/* */
/* */
/*           </table>*/
/* 	</form>*/
/* 	</div>*/
/*    </div>*/
/* </div>*/
/* <script src="view/javascript/progressbar.js"></script>*/
/* <script type="text/javascript">*/
/* var bar = new ProgressBar.Line(containerx, {*/
/*   strokeWidth: 10,*/
/*   easing: 'easeInOut',*/
/*   duration: 3000,*/
/*   color: '#FFEA82',*/
/*   trailColor: '#bbb',*/
/*   trailWidth: 10,*/
/*   svgStyle: {width: '100%', height: '100%'},*/
/*   text: {*/
/*     style: {*/
/*       // Text color.*/
/*       // Default: same as stroke color (options.color)*/
/*       color: '#555555',*/
/* */
/*       position: 'absolute',*/
/*       right: '50px',*/
/*       top: '0',*/
/*       padding: 0,*/
/*       margin: 10,*/
/*       transform: null*/
/*     },*/
/*     autoStyleContainer: false*/
/*   },*/
/*   from: {color: '#00EA82'},*/
/*   to: {color: '#006A5A'},*/
/*   step: (state, bar) => {*/
/*     bar.setText('<b>SEO Uyumluluk: ' + Math.floor(bar.value() * 100) + ' %</b>');*/
/*   }*/
/* });*/
/* */
/* bar.animate({{ seometer }} );*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
/* */
