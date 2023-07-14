<?php

/* tt_origine4/template/product/special.twig */
class __TwigTemplate_297e57f158b4209a7ebadcf442a297448fc6ded45a37c5b976069af0246091c3 extends Twig_Template
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
        echo "
<div id=\"product-search\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      ";
        // line 18
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 19
            echo "                <div><a href=\"";
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
\t\t\t\t<div class=\"toolbar\">
\t\t\t\t\t<div class=\"modes toolbar3\">
\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\"></button>
\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\"></button>
                    </div>
\t\t\t\t\t<div class=\"sorter toolbar1\">
                        <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 28
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo ((isset($context["text_sort"]) ? $context["text_sort"] : null) . $this->getAttribute($context["sorts"], "text", array()));
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo ((isset($context["text_sort"]) ? $context["text_sort"] : null) . $this->getAttribute($context["sorts"], "text", array()));
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t\t\t\t</select>
                    </div>
                    <div class=\"limiter toolbar2\">
                        <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 39
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo ((isset($context["text_limit"]) ? $context["text_limit"] : null) . $this->getAttribute($context["limits"], "text", array()));
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo ((isset($context["text_limit"]) ? $context["text_limit"] : null) . $this->getAttribute($context["limits"], "text", array()));
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t\t\t</select>
                    </div>
\t\t\t\t</div>
                <div class=\"custom-products\">
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 50
                echo "                    <div class=\"product-layout product-list col-xs-12\">
                        <div class=\"product-thumb\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t";
                // line 54
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo $this->getAttribute($context["product"], "text_percent", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "is_new", array())) {
                    // line 58
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                    echo (isset($context["text_label_new"]) ? $context["text_label_new"] : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 61
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t";
                // line 62
                if ($this->getAttribute($context["product"], "rotator_image", array())) {
                    echo "<img class=\"img-r\" src=\"";
                    echo $this->getAttribute($context["product"], "rotator_image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\" />";
                }
                // line 63
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"image-icons\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 66
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><span>";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 69
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><span>";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 72
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><span>";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t<div class=\"left-caption\">
\t\t\t\t\t\t\t\t\t\t";
                // line 78
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 80
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 81
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span><span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t";
                // line 91
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) == $context["i"])) {
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 97
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo (isset($context["class_r"]) ? $context["class_r"] : null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t\t\t\t\t\t<p class=\"product-des\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"right-caption\">
\t\t\t\t\t\t\t\t\t\t";
                // line 106
                if ($this->getAttribute($context["product"], "manufacturer", array())) {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product ";
                    if (((isset($context["image_effect"]) ? $context["image_effect"] : null) == "swatches")) {
                        if ($this->getAttribute($context["product"], "options", array())) {
                            echo "hide-hover";
                        }
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 108
                    echo ((isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null) . ": ");
                    echo "</span><a href=\"";
                    echo $this->getAttribute($context["product"], "manufacturers", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "manufacturer", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 114
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "')\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 117
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><span>";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 120
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><span>";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                </div>
                <div class=\"row toolbar toolbar-products toolbar-bottom\">
                    <div class=\"col-sm-6\">";
            // line 132
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
                    <div class=\"col-sm-6 text-right\">";
            // line 133
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
                </div>
                ";
        } else {
            // line 135
            echo "                
\t\t\t\t  <p>";
            // line 136
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t  <div class=\"buttons\">
\t\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 138
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
\t\t\t\t  </div>
\t\t\t\t  ";
        }
        // line 141
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 142
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 144
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 144,  438 => 142,  433 => 141,  425 => 138,  420 => 136,  417 => 135,  411 => 133,  407 => 132,  403 => 130,  383 => 120,  373 => 117,  361 => 114,  356 => 111,  346 => 108,  337 => 107,  335 => 106,  328 => 103,  323 => 100,  317 => 99,  311 => 97,  308 => 96,  305 => 95,  301 => 94,  297 => 92,  295 => 91,  288 => 90,  284 => 88,  276 => 86,  273 => 85,  265 => 83,  259 => 81,  257 => 80,  254 => 79,  252 => 78,  239 => 72,  229 => 69,  219 => 66,  214 => 63,  204 => 62,  196 => 61,  191 => 60,  185 => 58,  182 => 57,  176 => 55,  174 => 54,  168 => 50,  164 => 49,  158 => 45,  152 => 44,  144 => 42,  136 => 40,  133 => 39,  129 => 38,  123 => 34,  117 => 33,  109 => 31,  101 => 29,  98 => 28,  94 => 27,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-search" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2>{{ heading_title }}</h2>*/
/*       {% if products %}*/
/*                 <div><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/* 				<div class="toolbar">*/
/* 					<div class="modes toolbar3">*/
/* 						<button type="button" id="grid-view" class="btn btn-default"></button>*/
/* 						<button type="button" id="list-view" class="btn btn-default"></button>*/
/*                     </div>*/
/* 					<div class="sorter toolbar1">*/
/*                         <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* 							{% for sorts in sorts %}*/
/* 								{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 									<option value="{{ sorts.href }}" selected="selected">{{ text_sort~sorts.text }}</option>*/
/* 								{% else %}*/
/* 									<option value="{{ sorts.href }}">{{ text_sort~sorts.text }}</option>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 						</select>*/
/*                     </div>*/
/*                     <div class="limiter toolbar2">*/
/*                         <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/* 							{% for limits in limits %}*/
/* 								{% if limits.value == limit %}*/
/* 									<option value="{{ limits.href }}" selected="selected">{{ text_limit~limits.text }}</option>*/
/* 								{% else %}*/
/* 									<option value="{{ limits.href }}">{{ text_limit~limits.text }}</option>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 						</select>*/
/*                     </div>*/
/* 				</div>*/
/*                 <div class="custom-products">*/
/*                     {% for product in products %}*/
/*                     <div class="product-layout product-list col-xs-12">*/
/*                         <div class="product-thumb">*/
/* 							<div class="item-inner">*/
/* 								<div class="image">*/
/* 									{% if product.special %}*/
/* 										<div class="label-product label_sale">{{ product.text_percent }}</div>*/
/* 									{% endif %}*/
/* 									{% if product.is_new %}*/
/* 										<div class="label-product label_new">{{ text_label_new }}</div>*/
/* 									{% endif %}*/
/* 									<a href="{{ product.href }}">*/
/* 										<img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/* 										{% if product.rotator_image %}<img class="img-r" src="{{ product.rotator_image }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />{% endif %}*/
/* 									</a>*/
/* 									<div class="image-icons">*/
/* 										<div class="wishlist">*/
/* 											<button type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><span>{{ button_wishlist }}</span></button>*/
/* 										</div>*/
/* 										<div class="compare">*/
/* 											<button type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><span>{{ button_compare }}</span></button>*/
/* 										</div>*/
/* 										<div class="qv-button-container">*/
/* 											<button type="button" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><span>{{ button_quickview }}</span></button>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="caption">*/
/* 									<div class="left-caption">*/
/* 										{% if product.price %}*/
/* 											<p class="price">*/
/* 											{% if not product.special %}*/
/* 												{{ product.price }}*/
/* 											{% else %}*/
/* 												<span class="price-old">{{ product.price }}</span><span class="price-new">{{ product.special }}</span>						  */
/* 											{% endif %}*/
/* 											{% if product.tax %}*/
/* 												<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 											{% endif %}*/
/* 											</p>*/
/* 										{% endif %}*/
/* 										<h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 										{% if product.rating %}*/
/* 											<div class="ratings">*/
/* 												<div class="rating-box">*/
/* 												{% for i in 0..5 %}*/
/* 													{% if product.rating == i %}*/
/* 													{% set class_r = "rating"~i %}*/
/* 													<div class="{{ class_r }}">rating</div>*/
/* 													{% endif %}*/
/* 												{% endfor %}*/
/* 												</div>*/
/* 											</div>					*/
/* 										{% endif %}*/
/* 										<p class="product-des">{{ product.description }}</p>*/
/* 									</div>*/
/* 									<div class="right-caption">*/
/* 										{% if product.manufacturer %}*/
/* 											<p class="manufacture-product {% if image_effect == 'swatches' %}{% if product.options %}{{ 'hide-hover' }}{% endif %}{% endif %}">*/
/* 												<span>{{ text_manufacturer ~ ': '}}</span><a href="{{ product.manufacturers }}">{{ product.manufacturer }}</a>*/
/* 											</p>*/
/* 										{% endif %}*/
/* 										<div class="actions">*/
/* 											<div class="add-to-links">*/
/* 												<div class="cart">*/
/* 													<button type="button" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}')"><span>{{ button_cart }}</span></button>*/
/* 												</div>*/
/* 												<div class="compare">*/
/* 													<button type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><span>{{ button_compare }}</span></button>*/
/* 												</div>*/
/* 												<div class="qv-button-container">*/
/* 													<button type="button" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><span>{{ button_quickview }}</span></button>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div class="row toolbar toolbar-products toolbar-bottom">*/
/*                     <div class="col-sm-6">{{ pagination }}</div>*/
/*                     <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                 </div>*/
/*                 {% else %}                */
/* 				  <p>{{ text_empty }}</p>*/
/* 				  <div class="buttons">*/
/* 					<div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/* 				  </div>*/
/* 				  {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
