<?php

/* tt_origine4/template/common/header.twig */
class __TwigTemplate_1aefa9a5ada1d8c73ab3d4b336ba124ec5a1c6aa502ac069e6655791a3e4aa0a extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />

";
        // line 15
        if ((isset($context["canonical_link"]) ? $context["canonical_link"] : null)) {
            echo (("<link href=\"" . (isset($context["canonical_link"]) ? $context["canonical_link"] : null)) . "\" rel=\"canonical\" />");
        }
        // line 16
        if ((isset($context["robots"]) ? $context["robots"] : null)) {
            echo (isset($context["robots"]) ? $context["robots"] : null);
        }
        // line 17
        echo "\t\t\t
";
        // line 18
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 19
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 21
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 22
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 24
        echo "<link href=\"catalog/view/theme/tt_origine4/stylesheet/oc_css/ocquickview.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/theme/tt_origine4/stylesheet/oc_css/menu.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/theme/tt_origine4/stylesheet/oc_css/layoutproducts.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/theme/tt_origine4/stylesheet/oc_css/jquery.countdown.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/theme/tt_origine4/stylesheet/oc_css/animate.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/javascript/jquery/owl-carousel/css/owl.carousel.min.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/javascript/jquery/owl-carousel/css/owl.theme.green.min.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/javascript/ionicons/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/javascript/plaza-icon/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Rubik:300,400,500,700,900\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/tt_origine4/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/jquery-ui.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/owl-carousel/js/owl.carousel.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/elevatezoom/jquery.elevatezoom.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/opentheme/countdown/jquery.plugin.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/opentheme/countdown/jquery.countdown.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/ocmegamenu/menu.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
";
        // line 46
        if ((isset($context["use_quick_view"]) ? $context["use_quick_view"] : null)) {
            // line 47
            echo "<script src=\"catalog/view/javascript/cloudzoom/cloud-zoom.1.0.2.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/cloudzoom/zoom.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/ocquickview/ocquickview.js\" type=\"text/javascript\"></script>
";
        }
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 52
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 55
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 59
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 62
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        if ($this->getAttribute((isset($context["theme_option_status"]) ? $context["theme_option_status"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array")) {
            // line 65
            echo "  <script src=\"https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js\"></script>
  <script>
    WebFont.load({
      google: {
        families: ['";
            // line 69
            echo (($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), "font_family", array())) ? ($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), "font_family", array())) : (""));
            echo "', '";
            echo (($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), "font_family", array())) ? ($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), "font_family", array())) : (""));
            echo "']
      }
    });
  </script>
  <style>
    ";
            // line 74
            if ((isset($context["a_tag"]) ? $context["a_tag"] : null)) {
                // line 75
                echo "    ";
                echo (($this->getAttribute($this->getAttribute((isset($context["a_tag"]) ? $context["a_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) ? ((("a { color: #" . $this->getAttribute($this->getAttribute((isset($context["a_tag"]) ? $context["a_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) . "; }")) : (""));
                echo "
    ";
                // line 76
                echo (($this->getAttribute($this->getAttribute((isset($context["a_tag"]) ? $context["a_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "hover_color", array())) ? ((("a:hover { color: #" . $this->getAttribute($this->getAttribute((isset($context["a_tag"]) ? $context["a_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "hover_color", array())) . "; }")) : (""));
                echo "
    ";
            }
            // line 78
            echo "
    ";
            // line 79
            if ((isset($context["header_tag"]) ? $context["header_tag"] : null)) {
                // line 80
                echo "    h1, h2, h3, h4, h5, h6 {
    ";
                // line 81
                echo (($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) ? ((("color: #" . $this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) . ";")) : (""));
                echo "
    ";
                // line 82
                echo (($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) ? ((("font-family: " . $this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) . ";")) : (""));
                echo "
    ";
                // line 83
                echo (($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_weight", array())) ? ((("font-weight: " . $this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_weight", array())) . ";")) : (""));
                echo "
    }
    ";
                // line 85
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h1", array()), "font_size", array())) ? ((("h1 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h1", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
                // line 86
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h2", array()), "font_size", array())) ? ((("h2 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h2", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
                // line 87
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h3", array()), "font_size", array())) ? ((("h3 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h3", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
                // line 88
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h4", array()), "font_size", array())) ? ((("h4 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h4", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
                // line 89
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h5", array()), "font_size", array())) ? ((("h5 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h5", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
                // line 90
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h6", array()), "font_size", array())) ? ((("h6 { font-size: " . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header_tag"]) ? $context["header_tag"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "h6", array()), "font_size", array())) . "; }")) : (""));
                echo "
    ";
            }
            // line 92
            echo "
    ";
            // line 93
            if ((isset($context["body_css"]) ? $context["body_css"] : null)) {
                // line 94
                echo "    body {
    ";
                // line 95
                echo (($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) ? ((("color: #" . $this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "color", array())) . ";")) : (""));
                echo "
    ";
                // line 96
                echo (($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) ? ((("font-family: " . $this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_family", array())) . ";")) : (""));
                echo "
    ";
                // line 97
                echo (($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_size", array())) ? ((("font-size: " . $this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_size", array())) . ";")) : (""));
                echo "
    ";
                // line 98
                echo (($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_weight", array())) ? ((("font-weight: " . $this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "font_weight", array())) . ";")) : (""));
                echo "
    ";
                // line 99
                echo (($this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "line_height", array())) ? ((("line-height: " . $this->getAttribute($this->getAttribute((isset($context["body_css"]) ? $context["body_css"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), "line_height", array())) . ";")) : (""));
                echo "
    }
    ";
            }
            // line 102
            echo "  </style>
";
        }
        // line 104
        echo "
\t\t\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/jquery.cluetip.css\" type=\"text/css\" />
\t\t\t<script src=\"catalog/view/javascript/jquery.cluetip.js\" type=\"text/javascript\"></script>

\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\$('a.title').cluetip({splitTitle: '|'});
\t\t\t\t  \$('ol.rounded a:eq(0)').cluetip({splitTitle: '|', dropShadow: false, cluetipClass: 'rounded', showtitle: false});
\t\t\t\t  \$('ol.rounded a:eq(1)').cluetip({cluetipClass: 'rounded', dropShadow: false, showtitle: false, positionBy: 'mouse'});
\t\t\t\t  \$('ol.rounded a:eq(2)').cluetip({cluetipClass: 'rounded', dropShadow: false, showtitle: false, positionBy: 'bottomTop', topOffset: 70});
\t\t\t\t  \$('ol.rounded a:eq(3)').cluetip({cluetipClass: 'rounded', dropShadow: false, sticky: true, ajaxCache: false, arrows: true});
\t\t\t\t  \$('ol.rounded a:eq(4)').cluetip({cluetipClass: 'rounded', dropShadow: false});
\t\t\t\t});
\t\t\t</script>
\t\t\t

\t\t\t\t";
        // line 120
        if ((isset($context["socialseo"]) ? $context["socialseo"] : null)) {
            echo (isset($context["socialseo"]) ? $context["socialseo"] : null);
        }
        // line 121
        echo "
\t\t\t\t";
        // line 122
        if ($this->getAttribute((isset($context["richsnippets"]) ? $context["richsnippets"] : null), "store", array())) {
            // line 123
            echo "<script type=\"application/ld+json\">
\t\t\t\t{ \"@context\" : \"http://schema.org\",
\t\t\t\t  \"@type\" : \"Organization\",
\t\t\t\t  \"name\" : \"";
            // line 126
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\",
\t\t\t\t  \"url\" : \"";
            // line 127
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\",
\t\t\t\t  \"logo\" : \"";
            // line 128
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\",
\t\t\t\t  \"contactPoint\" : [
\t\t\t\t\t{ \"@type\" : \"ContactPoint\",
\t\t\t\t\t  \"telephone\" : \"";
            // line 131
            echo (isset($context["telephone"]) ? $context["telephone"] : null);
            echo "\",
\t\t\t\t\t  \"contactType\" : \"customer service\"
\t\t\t\t\t} ] }
\t\t\t\t</script>
\t\t\t\t";
        }
        // line 136
        echo "\t\t\t
</head>
<body class=\"";
        // line 138
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " home1 group1\">
<div class=\"wrapper\">
<header>
\t<div class=\"header-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-12 col-sms-12\">
\t\t\t\t\t";
        // line 145
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
\t\t\t\t\t";
        // line 146
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-sm-12 col-sms-12\">
\t\t\t\t\t<div class=\"box-top\">
\t\t\t\t\t\t<div id=\"top-links\">
\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t";
        // line 153
        if ((isset($context["use_ajax_login"]) ? $context["use_ajax_login"] : null)) {
            // line 154
            echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu ul-account\">
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 156
            echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t";
        }
        // line 158
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 159
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 160
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 161
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 162
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 164
            if ((isset($context["use_ajax_login"]) ? $context["use_ajax_login"] : null)) {
                // line 165
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"a-logout-link\" href=\"";
                echo (isset($context["logout"]) ? $context["logout"] : null);
                echo "\">";
                echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["logout"]) ? $context["logout"] : null);
                echo "\">";
                echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 169
            echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 171
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 172
            if ((isset($context["use_ajax_login"]) ? $context["use_ajax_login"] : null)) {
                // line 173
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"a-register-link\" href=\"";
                echo (isset($context["register"]) ? $context["register"] : null);
                echo "\">";
                echo (isset($context["text_register"]) ? $context["text_register"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["register"]) ? $context["register"] : null);
                echo "\">";
                echo (isset($context["text_register"]) ? $context["text_register"] : null);
                echo "</a> 
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 177
            echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 179
            if ((isset($context["use_ajax_login"]) ? $context["use_ajax_login"] : null)) {
                // line 180
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"a-login-link\" href=\"";
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "\">";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 182
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "\">";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "</a> 
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 184
            echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 186
        echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><span>";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 187
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><span>";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"header-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 col-sm-12\">
\t\t\t\t\t<div class=\"logo-container\">
\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t  ";
        // line 203
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 204
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img style=\" max-width: 292px !important;\"  src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t  ";
        } else {
            // line 206
            echo "\t\t\t\t\t\t\t<h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
\t\t\t\t\t\t  ";
        }
        // line 208
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-10 col-sm-12\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<div class=\"cart-wishlist\">
\t\t\t\t\t\t\t<div class=\"header-cart\">";
        // line 215
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"header-wishlist\"><a href=\"";
        // line 216
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\"><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-search\">";
        // line 218
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
\t\t\t\t\t\t";
        // line 219
        if ((isset($context["block0"]) ? $context["block0"] : null)) {
            // line 220
            echo "\t\t\t\t\t\t\t";
            echo (isset($context["block0"]) ? $context["block0"] : null);
            echo "
\t\t\t\t\t\t";
        }
        // line 222
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"header-menu\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 col-sms-12\">
\t\t\t\t\t";
        // line 231
        if ((isset($context["block1"]) ? $context["block1"] : null)) {
            // line 232
            echo "\t\t\t\t\t\t";
            echo (isset($context["block1"]) ? $context["block1"] : null);
            echo "
\t\t\t\t\t";
        }
        // line 234
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9 col-sms-12\">
\t\t\t\t\t";
        // line 236
        if ((isset($context["block2"]) ? $context["block2"] : null)) {
            // line 237
            echo "\t\t\t\t\t\t";
            echo (isset($context["block2"]) ? $context["block2"] : null);
            echo "
\t\t\t\t\t";
        }
        // line 239
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$(window).scroll(function () {
\t\tif (\$(this).scrollTop() > 181) {
\t\t\$('.header-menu').addClass(\"fix-nav\");
\t\t} else {
\t\t\$('.header-menu').removeClass(\"fix-nav\");
\t\t}
\t});
\t\$(function dropDown()
\t{
\t\telementClick = '#form-currency .btn-currency,#form-language .btn-language,#top-links label,#cart .dropdown-cart,.search-containers .title-search';
\t\telementSlide =  '.dropdown-menu,.search-container';
\t\tactiveClass = 'active';

\t\t\$(elementClick).on('click', function(e){
\t\te.stopPropagation();
\t\tvar subUl = \$(this).next(elementSlide);
\t\tif(subUl.is(':hidden'))
\t\t{
\t\tsubUl.slideDown();
\t\t\$(this).addClass(activeClass);
\t\t}
\t\telse
\t\t{
\t\tsubUl.slideUp();
\t\t\$(this).removeClass(activeClass);
\t\t}
\t\t\$(elementClick).not(this).next(elementSlide).slideUp();
\t\t\$(elementClick).not(this).removeClass(activeClass);
\t\te.preventDefault();
\t\t});

\t\t\$(elementSlide).on('click', function(e){
\t\te.stopPropagation();
\t\t});

\t\t\$(document).on('click', function(e){
\t\te.stopPropagation();
\t\tvar elementHide = \$(elementClick).next(elementSlide);
\t\t\$(elementHide).slideUp();
\t\t\$(elementClick).removeClass('active');
\t\t});
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 239,  584 => 237,  582 => 236,  578 => 234,  572 => 232,  570 => 231,  559 => 222,  553 => 220,  551 => 219,  547 => 218,  542 => 216,  538 => 215,  529 => 208,  521 => 206,  509 => 204,  507 => 203,  484 => 187,  475 => 186,  471 => 184,  463 => 182,  455 => 180,  453 => 179,  449 => 177,  441 => 175,  433 => 173,  431 => 172,  428 => 171,  424 => 169,  416 => 167,  408 => 165,  406 => 164,  399 => 162,  393 => 161,  387 => 160,  380 => 159,  377 => 158,  373 => 156,  369 => 154,  367 => 153,  357 => 146,  353 => 145,  343 => 138,  339 => 136,  331 => 131,  325 => 128,  321 => 127,  317 => 126,  312 => 123,  310 => 122,  307 => 121,  303 => 120,  285 => 104,  281 => 102,  275 => 99,  271 => 98,  267 => 97,  263 => 96,  259 => 95,  256 => 94,  254 => 93,  251 => 92,  246 => 90,  242 => 89,  238 => 88,  234 => 87,  230 => 86,  226 => 85,  221 => 83,  217 => 82,  213 => 81,  210 => 80,  208 => 79,  205 => 78,  200 => 76,  195 => 75,  193 => 74,  183 => 69,  177 => 65,  175 => 64,  167 => 62,  163 => 61,  152 => 59,  148 => 58,  145 => 57,  136 => 55,  132 => 54,  119 => 52,  115 => 51,  109 => 47,  107 => 46,  83 => 24,  77 => 22,  75 => 21,  69 => 19,  67 => 18,  64 => 17,  60 => 16,  56 => 15,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* */
/* {% if canonical_link %}{{ '<link href="'~canonical_link~'" rel="canonical" />' }}{% endif %}*/
/* {% if robots %}{{ robots }}{% endif %}*/
/* 			*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <link href="catalog/view/theme/tt_origine4/stylesheet/oc_css/ocquickview.css" rel="stylesheet" />*/
/* <link href="catalog/view/theme/tt_origine4/stylesheet/oc_css/menu.css" rel="stylesheet" />*/
/* <link href="catalog/view/theme/tt_origine4/stylesheet/oc_css/layoutproducts.css" rel="stylesheet" />*/
/* <link href="catalog/view/theme/tt_origine4/stylesheet/oc_css/jquery.countdown.css" rel="stylesheet" />*/
/* <link href="catalog/view/theme/tt_origine4/stylesheet/oc_css/animate.css" rel="stylesheet" />*/
/* <link href="catalog/view/javascript/jquery/owl-carousel/css/owl.carousel.min.css" rel="stylesheet" />*/
/* <link href="catalog/view/javascript/jquery/owl-carousel/css/owl.theme.green.min.css" rel="stylesheet" />*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/javascript/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/javascript/plaza-icon/css/style.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/tt_origine4/stylesheet/stylesheet.css" rel="stylesheet">*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/jquery/jquery-ui.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/jquery/owl-carousel/js/owl.carousel.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/jquery/elevatezoom/jquery.elevatezoom.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/opentheme/countdown/jquery.plugin.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/opentheme/countdown/jquery.countdown.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/ocmegamenu/menu.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* {% if use_quick_view %}*/
/* <script src="catalog/view/javascript/cloudzoom/cloud-zoom.1.0.2.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/cloudzoom/zoom.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/ocquickview/ocquickview.js" type="text/javascript"></script>*/
/* {% endif %}*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* {% if theme_option_status[store_id] %}*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js"></script>*/
/*   <script>*/
/*     WebFont.load({*/
/*       google: {*/
/*         families: ['{{ header_tag.font_family ? header_tag.font_family }}', '{{ body_css.font_family ? body_css.font_family }}']*/
/*       }*/
/*     });*/
/*   </script>*/
/*   <style>*/
/*     {% if a_tag %}*/
/*     {{ a_tag[store_id].color ? 'a { color: #' ~ a_tag[store_id].color ~ '; }' : '' }}*/
/*     {{ a_tag[store_id].hover_color ? 'a:hover { color: #' ~ a_tag[store_id].hover_color ~ '; }' : '' }}*/
/*     {% endif %}*/
/* */
/*     {% if header_tag %}*/
/*     h1, h2, h3, h4, h5, h6 {*/
/*     {{ header_tag[store_id].color ? 'color: #' ~ header_tag[store_id].color ~ ';' : '' }}*/
/*     {{ header_tag[store_id].font_family ? 'font-family: ' ~ header_tag[store_id].font_family ~ ';' : '' }}*/
/*     {{ header_tag[store_id].font_weight ? 'font-weight: ' ~ header_tag[store_id].font_weight ~ ';' : ''}}*/
/*     }*/
/*     {{ header_tag[store_id].h1.font_size ? 'h1 { font-size: ' ~ header_tag[store_id].h1.font_size ~ '; }' : '' }}*/
/*     {{ header_tag[store_id].h2.font_size ? 'h2 { font-size: ' ~ header_tag[store_id].h2.font_size ~ '; }' : '' }}*/
/*     {{ header_tag[store_id].h3.font_size ? 'h3 { font-size: ' ~ header_tag[store_id].h3.font_size ~ '; }' : '' }}*/
/*     {{ header_tag[store_id].h4.font_size ? 'h4 { font-size: ' ~ header_tag[store_id].h4.font_size ~ '; }' : '' }}*/
/*     {{ header_tag[store_id].h5.font_size ? 'h5 { font-size: ' ~ header_tag[store_id].h5.font_size ~ '; }' : '' }}*/
/*     {{ header_tag[store_id].h6.font_size ? 'h6 { font-size: ' ~ header_tag[store_id].h6.font_size ~ '; }' : '' }}*/
/*     {% endif %}*/
/* */
/*     {% if body_css %}*/
/*     body {*/
/*     {{ body_css[store_id].color ? 'color: #' ~ body_css[store_id].color ~ ';' : '' }}*/
/*     {{ body_css[store_id].font_family ? 'font-family: ' ~ body_css[store_id].font_family ~ ';' : '' }}*/
/*     {{ body_css[store_id].font_size ? 'font-size: ' ~ body_css[store_id].font_size ~ ';' : '' }}*/
/*     {{ body_css[store_id].font_weight ? 'font-weight: ' ~ body_css[store_id].font_weight ~ ';' : '' }}*/
/*     {{ body_css[store_id].line_height ? 'line-height: ' ~ body_css[store_id].line_height ~ ';' : '' }}*/
/*     }*/
/*     {% endif %}*/
/*   </style>*/
/* {% endif %}*/
/* */
/* 			<link rel="stylesheet" href="catalog/view/javascript/jquery.cluetip.css" type="text/css" />*/
/* 			<script src="catalog/view/javascript/jquery.cluetip.js" type="text/javascript"></script>*/
/* */
/* 			<script type="text/javascript">*/
/* 				$(document).ready(function() {*/
/* 				$('a.title').cluetip({splitTitle: '|'});*/
/* 				  $('ol.rounded a:eq(0)').cluetip({splitTitle: '|', dropShadow: false, cluetipClass: 'rounded', showtitle: false});*/
/* 				  $('ol.rounded a:eq(1)').cluetip({cluetipClass: 'rounded', dropShadow: false, showtitle: false, positionBy: 'mouse'});*/
/* 				  $('ol.rounded a:eq(2)').cluetip({cluetipClass: 'rounded', dropShadow: false, showtitle: false, positionBy: 'bottomTop', topOffset: 70});*/
/* 				  $('ol.rounded a:eq(3)').cluetip({cluetipClass: 'rounded', dropShadow: false, sticky: true, ajaxCache: false, arrows: true});*/
/* 				  $('ol.rounded a:eq(4)').cluetip({cluetipClass: 'rounded', dropShadow: false});*/
/* 				});*/
/* 			</script>*/
/* 			*/
/* */
/* 				{% if socialseo %}{{ socialseo }}{% endif %}*/
/* */
/* 				{% if richsnippets.store %}*/
/* <script type="application/ld+json">*/
/* 				{ "@context" : "http://schema.org",*/
/* 				  "@type" : "Organization",*/
/* 				  "name" : "{{ name }}",*/
/* 				  "url" : "{{ home }}",*/
/* 				  "logo" : "{{ logo }}",*/
/* 				  "contactPoint" : [*/
/* 					{ "@type" : "ContactPoint",*/
/* 					  "telephone" : "{{ telephone }}",*/
/* 					  "contactType" : "customer service"*/
/* 					} ] }*/
/* 				</script>*/
/* 				{% endif %}*/
/* 			*/
/* </head>*/
/* <body class="{{ class }} home1 group1">*/
/* <div class="wrapper">*/
/* <header>*/
/* 	<div class="header-top">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-md-6 col-sm-12 col-sms-12">*/
/* 					{{ language }}*/
/* 					{{ currency }}*/
/* 				</div>*/
/* 				<div class="col-md-6 col-sm-12 col-sms-12">*/
/* 					<div class="box-top">*/
/* 						<div id="top-links">*/
/* 							<ul class="list-inline">*/
/* 								<li class="dropdown">*/
/* 									{% if use_ajax_login %}*/
/* 										<ul class="dropdown-menu ul-account">*/
/* 									{% else %}*/
/* 										<ul class="dropdown-menu">*/
/* 									{% endif %}*/
/* 										{% if logged %}*/
/* 										<li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 										<li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 										<li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/* 										<li><a href="{{ download }}">{{ text_download }}</a></li>*/
/* 										<li>*/
/* 											{% if use_ajax_login %}*/
/* 												<a id="a-logout-link" href="{{ logout }}">{{ text_logout }}</a>*/
/* 											{% else %}*/
/* 												<a href="{{ logout }}">{{ text_logout }}</a>*/
/* 											{% endif %}*/
/* 										</li>*/
/* 										{% else %}*/
/* 										<li>*/
/* 											{% if use_ajax_login %}*/
/* 												<a id="a-register-link" href="{{ register }}">{{ text_register }}</a>*/
/* 											{% else %}*/
/* 												<a href="{{ register }}">{{ text_register }}</a> */
/* 											{% endif %}*/
/* 										</li>*/
/* 										<li>*/
/* 											{% if use_ajax_login %}*/
/* 												<a id="a-login-link" href="{{ login }}">{{ text_login }}</a>*/
/* 											{% else %}*/
/* 												<a href="{{ login }}">{{ text_login }}</a> */
/* 											{% endif %}*/
/* 										</li>*/
/* 										{% endif %}*/
/* 										<li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><span>{{ text_shopping_cart }}</span></a></li>*/
/* 										<li><a href="{{ checkout }}" title="{{ text_checkout }}"><span>{{ text_checkout }}</span></a></li>*/
/* 									</ul>*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="header-bottom">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-md-2 col-sm-12">*/
/* 					<div class="logo-container">*/
/* 						<div id="logo">*/
/* 						  {% if logo %}*/
/* 							<a href="{{ home }}"><img style=" max-width: 292px !important;"  src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/* 						  {% else %}*/
/* 							<h1><a href="{{ home }}">{{ name }}</a></h1>*/
/* 						  {% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				<div class="col-md-10 col-sm-12">*/
/* 					<div class="box-header">*/
/* 						<div class="cart-wishlist">*/
/* 							<div class="header-cart">{{ cart }}</div>*/
/* 							<div class="header-wishlist"><a href="{{ wishlist }}" id="wishlist-total"><span></span></a></div>*/
/* 						</div>*/
/* 						<div class="header-search">{{ search }}</div>*/
/* 						{% if block0 %}*/
/* 							{{ block0 }}*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="header-menu">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-md-3 col-sms-12">*/
/* 					{% if block1 %}*/
/* 						{{ block1 }}*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<div class="col-md-9 col-sms-12">*/
/* 					{% if block2 %}*/
/* 						{{ block2 }}*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </header>*/
/* <script type="text/javascript">*/
/* $(document).ready(function(){*/
/* 	$(window).scroll(function () {*/
/* 		if ($(this).scrollTop() > 181) {*/
/* 		$('.header-menu').addClass("fix-nav");*/
/* 		} else {*/
/* 		$('.header-menu').removeClass("fix-nav");*/
/* 		}*/
/* 	});*/
/* 	$(function dropDown()*/
/* 	{*/
/* 		elementClick = '#form-currency .btn-currency,#form-language .btn-language,#top-links label,#cart .dropdown-cart,.search-containers .title-search';*/
/* 		elementSlide =  '.dropdown-menu,.search-container';*/
/* 		activeClass = 'active';*/
/* */
/* 		$(elementClick).on('click', function(e){*/
/* 		e.stopPropagation();*/
/* 		var subUl = $(this).next(elementSlide);*/
/* 		if(subUl.is(':hidden'))*/
/* 		{*/
/* 		subUl.slideDown();*/
/* 		$(this).addClass(activeClass);*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 		subUl.slideUp();*/
/* 		$(this).removeClass(activeClass);*/
/* 		}*/
/* 		$(elementClick).not(this).next(elementSlide).slideUp();*/
/* 		$(elementClick).not(this).removeClass(activeClass);*/
/* 		e.preventDefault();*/
/* 		});*/
/* */
/* 		$(elementSlide).on('click', function(e){*/
/* 		e.stopPropagation();*/
/* 		});*/
/* */
/* 		$(document).on('click', function(e){*/
/* 		e.stopPropagation();*/
/* 		var elementHide = $(elementClick).next(elementSlide);*/
/* 		$(elementHide).slideUp();*/
/* 		$(elementClick).removeClass('active');*/
/* 		});*/
/* 	});*/
/* });*/
/* </script>*/
