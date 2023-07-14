<?php

/* tt_origine4/template/product/ocnewproduct.twig */
class __TwigTemplate_de58369ac4810a4ba4930be3035571e855a5f1ac9f3933a37356a98b469d7183 extends Twig_Template
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
<div class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li><a href=\"";
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
        echo "    </ul>
    <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
        ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "        ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "        ";
        }
        // line 16
        echo "        <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            <div class=\"page-title\"><h2>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2></div>
            ";
        // line 18
        if ((isset($context["newproductpage_status"]) ? $context["newproductpage_status"] : null)) {
            // line 19
            echo "                ";
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 20
                echo "\t\t\t\t\t<div><a href=\"";
                echo (isset($context["compare"]) ? $context["compare"] : null);
                echo "\" id=\"compare-total\">";
                echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
                echo "</a></div>
                    <div class=\"toolbar\">
\t\t\t\t\t\t<div class=\"modes toolbar3\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\"></button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sorter toolbar1\">
\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                        // line 30
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo ((isset($context["text_sort"]) ? $context["text_sort"] : null) . $this->getAttribute($context["sorts"], "text", array()));
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\">";
                        echo ((isset($context["text_sort"]) ? $context["text_sort"] : null) . $this->getAttribute($context["sorts"], "text", array()));
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"limiter toolbar2\">
\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                        // line 41
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo ((isset($context["text_limit"]) ? $context["text_limit"] : null) . $this->getAttribute($context["limits"], "text", array()));
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 43
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\">";
                        echo ((isset($context["text_limit"]) ? $context["text_limit"] : null) . $this->getAttribute($context["limits"], "text", array()));
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 45
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    <div class=\"custom-products\">
                        ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 51
                    echo "                            <div class=\"product-layout product-list col-xs-12\">
                                <div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 55
                    if ($this->getAttribute($context["product"], "special", array())) {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                        echo $this->getAttribute($context["product"], "text_percent", array());
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 58
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "is_new", array())) {
                        // line 59
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                        echo (isset($context["text_label_new"]) ? $context["text_label_new"] : null);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 64
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><span>";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 67
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><span>";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 70
                    echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                    echo "\" onclick=\"ocquickview.ajaxView('";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "')\"><span>";
                    echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"left-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 76
                    if ($this->getAttribute($context["product"], "price", array())) {
                        // line 77
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\"> ";
                        if ( !$this->getAttribute($context["product"], "special", array())) {
                            // line 78
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 79
                            echo " <span class=\"price-new\">";
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span> <span class=\"price-old\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span> ";
                        }
                        // line 80
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["product"], "tax", array())) {
                            echo " <span class=\"price-tax\">";
                            echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                            echo " ";
                            echo $this->getAttribute($context["product"], "tax", array());
                            echo "</span> ";
                        }
                        echo " </p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 83
                    if ($this->getAttribute($context["product"], "rating", array())) {
                        // line 84
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 86
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["product"], "rating", array()) == $context["i"])) {
                                // line 88
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["class_r"] = ("rating" . $context["i"]);
                                // line 89
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                echo (isset($context["class_r"]) ? $context["class_r"] : null);
                                echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 91
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-des\">";
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"right-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                    // line 101
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\"><span>";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 104
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><span>";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 107
                    echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                    echo "\" onclick=\"ocquickview.ajaxView('";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "')\"><span>";
                    echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "                    </div>
                    <div class=\"row toolbar toolbar-products toolbar-bottom\">
                        <div class=\"col-sm-6\">";
                // line 119
                echo (isset($context["pagination"]) ? $context["pagination"] : null);
                echo "</div>
                        <div class=\"col-sm-6 text-right\">";
                // line 120
                echo (isset($context["results"]) ? $context["results"] : null);
                echo "</div>
                    </div>
                ";
            } else {
                // line 123
                echo "                    <p>";
                echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
                echo "</p>
                    <div class=\"buttons\">
                        <div class=\"pull-right\"><a href=\"";
                // line 125
                echo (isset($context["continue"]) ? $context["continue"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</a></div>
                    </div>
                ";
            }
            // line 128
            echo "            ";
        } else {
            // line 129
            echo "                <p>";
            echo (isset($context["text_not_available"]) ? $context["text_not_available"] : null);
            echo "</p>
                <div class=\"buttons\">
                    <div class=\"pull-right\"><a href=\"";
            // line 131
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
                </div>
            ";
        }
        // line 134
        echo "            ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
        ";
        // line 135
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 137
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/product/ocnewproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 137,  410 => 135,  405 => 134,  397 => 131,  391 => 129,  388 => 128,  380 => 125,  374 => 123,  368 => 120,  364 => 119,  360 => 117,  340 => 107,  330 => 104,  320 => 101,  310 => 95,  305 => 92,  299 => 91,  293 => 89,  290 => 88,  287 => 87,  283 => 86,  279 => 84,  277 => 83,  270 => 82,  258 => 80,  251 => 79,  245 => 78,  242 => 77,  240 => 76,  227 => 70,  217 => 67,  207 => 64,  194 => 61,  188 => 59,  185 => 58,  179 => 56,  177 => 55,  171 => 51,  167 => 50,  161 => 46,  155 => 45,  147 => 43,  139 => 41,  136 => 40,  132 => 39,  126 => 35,  120 => 34,  112 => 32,  104 => 30,  101 => 29,  97 => 28,  83 => 20,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <div class="row">{{ column_left }}*/
/*         {% if column_left and column_right %}*/
/*             {% set class = 'col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*             {% set class = 'col-sm-9' %}*/
/*         {% else %}*/
/*             {% set class = 'col-sm-12' %}*/
/*         {% endif %}*/
/*         <div id="content" class="{{ class }}">{{ content_top }}*/
/*             <div class="page-title"><h2>{{ heading_title }}</h2></div>*/
/*             {% if newproductpage_status %}*/
/*                 {% if products %}*/
/* 					<div><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/*                     <div class="toolbar">*/
/* 						<div class="modes toolbar3">*/
/* 							<button type="button" id="grid-view" class="btn btn-default"></button>*/
/* 							<button type="button" id="list-view" class="btn btn-default"></button>*/
/* 						</div>*/
/* 						<div class="sorter toolbar1">*/
/* 							<select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* 								{% for sorts in sorts %}*/
/* 									{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 										<option value="{{ sorts.href }}" selected="selected">{{ text_sort~sorts.text }}</option>*/
/* 									{% else %}*/
/* 										<option value="{{ sorts.href }}">{{ text_sort~sorts.text }}</option>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							</select>*/
/* 						</div>*/
/* 						<div class="limiter toolbar2">*/
/* 							<select id="input-limit" class="form-control" onchange="location = this.value;">*/
/* 								{% for limits in limits %}*/
/* 									{% if limits.value == limit %}*/
/* 										<option value="{{ limits.href }}" selected="selected">{{ text_limit~limits.text }}</option>*/
/* 									{% else %}*/
/* 										<option value="{{ limits.href }}">{{ text_limit~limits.text }}</option>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/*                     <div class="custom-products">*/
/*                         {% for product in products %}*/
/*                             <div class="product-layout product-list col-xs-12">*/
/*                                 <div class="product-thumb">*/
/* 									<div class="item-inner">*/
/* 										<div class="image">*/
/* 											{% if product.special %}*/
/* 												<div class="label-product label_sale">{{ product.text_percent }}</div>*/
/* 											{% endif %}*/
/* 											{% if product.is_new %}*/
/* 												<div class="label-product label_new">{{ text_label_new }}</div>*/
/* 											{% endif %}*/
/* 											<a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a>*/
/* 											<div class="image-icons">*/
/* 												<div class="wishlist">*/
/* 													<button type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><span>{{ button_wishlist }}</span></button>*/
/* 												</div>*/
/* 												<div class="compare">*/
/* 													<button type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><span>{{ button_compare }}</span></button>*/
/* 												</div>*/
/* 												<div class="qv-button-container">*/
/* 													<button type="button" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><span>{{ button_quickview }}</span></button>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="caption">*/
/* 											<div class="left-caption">*/
/* 												{% if product.price %}*/
/* 													<p class="price"> {% if not product.special %}*/
/* 															{{ product.price }}*/
/* 														{% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/* 														{% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/* 												{% endif %}*/
/* 												<h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 												{% if product.rating %}*/
/* 													<div class="ratings">*/
/* 														<div class="rating-box">*/
/* 														{% for i in 0..5 %}*/
/* 															{% if product.rating == i %}*/
/* 															{% set class_r = "rating"~i %}*/
/* 															<div class="{{ class_r }}">rating</div>*/
/* 															{% endif %}*/
/* 														{% endfor %}*/
/* 														</div>*/
/* 													</div>					*/
/* 												{% endif %}*/
/* 												<p class="product-des">{{ product.description }}</p>*/
/* 											</div>*/
/* 											<div class="right-caption">*/
/* 												<div class="actions">*/
/* 													<div class="add-to-links">*/
/* 														<div class="cart">*/
/* 															<button type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><span>{{ button_cart }}</span></button>*/
/* 														</div>*/
/* 														<div class="compare">*/
/* 															<button type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><span>{{ button_compare }}</span></button>*/
/* 														</div>*/
/* 														<div class="qv-button-container">*/
/* 															<button type="button" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><span>{{ button_quickview }}</span></button>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <div class="row toolbar toolbar-products toolbar-bottom">*/
/*                         <div class="col-sm-6">{{ pagination }}</div>*/
/*                         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     <p>{{ text_empty }}</p>*/
/*                     <div class="buttons">*/
/*                         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% else %}*/
/*                 <p>{{ text_not_available }}</p>*/
/*                 <div class="buttons">*/
/*                     <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {{ content_bottom }}</div>*/
/*         {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
