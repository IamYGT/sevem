<?php

/* tt_origine4/template/product/ocfilter/category.twig */
class __TwigTemplate_587e51f9f7cd05b63da08e3834f981b8034e29574260bc06740c4f9ec57e230d extends Twig_Template
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
        echo "<div class=\"custom-category\">
\t";
        // line 2
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 3
            echo "\t\t<div class=\"category-compare\"><a href=\"";
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
\t\t<div class=\"toolbar toolbar-products\">
\t\t\t <div class=\"modes toolbar3\">
\t\t\t\t";
            // line 6
            if ((isset($context["use_custom_view"]) ? $context["use_custom_view"] : null)) {
                // line 7
                echo "\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 3, 'btn-grid-3')\" class=\"btn btn-default btn-custom-view btn-grid btn-grid-3\">3</button>
\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 4, 'btn-grid-4')\" class=\"btn btn-default btn-custom-view btn-grid btn-grid-4\">4</button>
\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 5, 'btn-grid-5')\" class=\"btn btn-default btn-custom-view btn-grid btn-grid-5\">5</button>
\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('list', 0, 'btn-list')\" class=\"btn btn-default btn-custom-view btn-list\">";
                // line 10
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "</button>
\t\t\t\t\t<input type=\"hidden\" id=\"category-view-type\" value=\"";
                // line 11
                echo (isset($context["category_view"]) ? $context["category_view"] : null);
                echo "\" />
\t\t\t\t\t<input type=\"hidden\" id=\"category-grid-cols\" value=\"";
                // line 12
                echo (isset($context["grid_columns"]) ? $context["grid_columns"] : null);
                echo "\" />
\t\t\t\t";
            } else {
                // line 14
                echo "\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default btn-grid\"  title=\"";
                echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
                echo "\">";
                echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
                echo "</button>
\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default btn-list\"  title=\"";
                // line 15
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "\">";
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "</button>
\t\t\t\t";
            }
            // line 17
            echo "\t\t\t </div>
\t\t\t<div class=\"toolbar-amount toolbar4\">
\t\t\t\t<span>";
            // line 19
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</span>
\t\t\t</div>
\t\t\t<div class=\"sorter toolbar1\">
\t\t\t\t";
            // line 22
            if ((isset($context["use_layered"]) ? $context["use_layered"] : null)) {
                // line 23
                echo "\t\t\t\t\t<label  for=\"input-sort\">";
                echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
                echo "</label>
\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"ocfilter.filter(this.value);\">
\t\t\t\t\t\t";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ajax_sorts"]) ? $context["ajax_sorts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 26
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                        // line 27
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t";
                    } else {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    // line 31
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t\t\t\t</select>
\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t<label for=\"input-sort\">";
                echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
                echo "</label>
\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 37
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t";
                    } else {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "\t\t\t\t\t</select>
\t\t\t\t";
            }
            // line 45
            echo "\t\t\t</div>
\t\t\t<div class=\"limiter toolbar2\">
\t\t\t\t";
            // line 47
            if ((isset($context["use_layered"]) ? $context["use_layered"] : null)) {
                // line 48
                echo "\t\t\t\t\t<label for=\"input-limit\">";
                echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
                echo "</label>
\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"ocfilter.filter(this.value);\">
\t\t\t\t\t\t";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ajax_limits"]) ? $context["ajax_limits"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 51
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t";
                    } else {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    // line 56
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "\t\t\t\t\t</select>
\t\t\t\t";
            } else {
                // line 59
                echo "\t\t\t\t\t<label  for=\"input-limit\">";
                echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
                echo "</label>
\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 62
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                        // line 63
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t";
                    } else {
                        // line 65
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    // line 67
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "\t\t\t\t\t</select>
\t\t\t\t";
            }
            // line 70
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"custom-products\">
\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 74
                echo "\t\t\t\t<div class=\"product-layout product-list col-xs-12 product-item\">
\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t";
                // line 79
                if (((isset($context["image_effect"]) ? $context["image_effect"] : null) == "swatches")) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"image swatches-image-container\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 81
                    if ($this->getAttribute($context["product"], "special", array())) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                        echo (isset($context["text_label_sale1"]) ? $context["text_label_sale1"] : null);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "is_new", array())) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                        echo (isset($context["text_label_new"]) ? $context["text_label_new"] : null);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 88
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\"  alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t class=\"img-responsive img-cate-";
                    // line 89
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    // line 90
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" class=\"img-default-";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 91
                    if ($this->getAttribute($context["product"], "swatches_images", array())) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "swatches_images", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                            // line 93
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                            echo $this->getAttribute($context["s_image"], "image", array());
                            echo "\" class=\"img-swatch-";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "-";
                            echo $this->getAttribute($context["s_image"], "product_option_value_id", array());
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 99
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><span>";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 102
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><span>";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 105
                    if ((isset($context["use_quickview"]) ? $context["use_quickview"] : null)) {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                        echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                        echo "\" onclick=\"ocquickview.ajaxView('";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "')\"><span>";
                        echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"image rotate-image-container\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 113
                    if ($this->getAttribute($context["product"], "special", array())) {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                        echo (isset($context["text_label_sale1"]) ? $context["text_label_sale1"] : null);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "is_new", array())) {
                        // line 117
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                        echo (isset($context["text_label_new"]) ? $context["text_label_new"] : null);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 119
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 120
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive img-default-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 121
                    if ($this->getAttribute($context["product"], "rotate_image", array())) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo $this->getAttribute($context["product"], "rotate_image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"img-responsive img-rotate-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 127
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><span>";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 130
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><span>";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 133
                    if ((isset($context["use_quickview"]) ? $context["use_quickview"] : null)) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                        echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                        echo "\" onclick=\"ocquickview.ajaxView('";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "')\"><span>";
                        echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 140
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t<div class=\"left-caption\">
\t\t\t\t\t\t\t\t\t\t";
                // line 143
                if (((isset($context["image_effect"]) ? $context["image_effect"] : null) == "swatches")) {
                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"category-options\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 145
                    if ($this->getAttribute($context["product"], "options", array())) {
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "options", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 147
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 148
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 149
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeSwatchInCategory(\$(this));\" title=\"";
                                // line 150
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   style=\"";
                                // line 151
                                if ($this->getAttribute($context["option_value"], "image", array())) {
                                    echo " width: ";
                                    echo (isset($context["icon_swatches_width"]) ? $context["icon_swatches_width"] : null);
                                    echo "px; height: ";
                                    echo (isset($context["icon_swatches_height"]) ? $context["icon_swatches_height"] : null);
                                    echo "px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                                    // line 152
                                    echo $this->getAttribute($context["option_value"], "image", array());
                                    echo "') ";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                                // line 153
                                echo $this->getAttribute($context["product"], "product_id", array());
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                                // line 154
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo "\">";
                                if ( !$this->getAttribute($context["option_value"], "image", array())) {
                                    echo " ";
                                    echo $this->getAttribute($context["option_value"], "name", array());
                                    echo " ";
                                }
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 157
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 160
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 165
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                        // line 169
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 171
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 174
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t";
                // line 178
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 179
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 181
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) == $context["i"])) {
                            // line 183
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 184
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo (isset($context["class_r"]) ? $context["class_r"] : null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 186
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t<p class=\"product-des\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"right-caption\">
\t\t\t\t\t\t\t\t\t\t";
                // line 193
                if ($this->getAttribute($context["product"], "manufacturer", array())) {
                    // line 194
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product ";
                    if (((isset($context["image_effect"]) ? $context["image_effect"] : null) == "swatches")) {
                        if ($this->getAttribute($context["product"], "options", array())) {
                            echo "hide-hover";
                        }
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 195
                    echo ((isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null) . " ");
                    echo "</span><a href=\"";
                    echo $this->getAttribute($context["product"], "manufacturers", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "manufacturer", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 198
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 201
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 204
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><span>";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 207
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
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo " 
\t\t</div>
\t\t<div class=\"toolbar toolbar-products toolbar-bottom\">
\t\t\t";
            // line 220
            if ((isset($context["use_layered"]) ? $context["use_layered"] : null)) {
                // line 221
                echo "\t\t\t\t<div class=\"pages ajax_pagination\">";
                echo (isset($context["ajax_pagination"]) ? $context["ajax_pagination"] : null);
                echo "</div>
\t\t\t";
            } else {
                // line 223
                echo "\t\t\t\t<div class=\"pages\">";
                echo (isset($context["pagination"]) ? $context["pagination"] : null);
                echo "</div>
\t\t\t";
            }
            // line 225
            echo "\t\t\t<div class=\"toolbar-amount\"><span>";
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</span></div>
\t\t</div>
\t";
        }
        // line 228
        echo "\t";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 229
            echo "\t\t<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t<div class=\"buttons\">
\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 231
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
\t\t</div>
\t";
        }
        // line 234
        echo "</div>
<script type=\"text/javascript\">
    // Product List
    \$('#list-view').click(function() {
\t\t\$('.custom-products').addClass('custom-products-row');
\t\t\$('#content .product-grid > .clearfix').remove();
\t\t\$('#content .custom-products-row .product-list .caption').addClass('col-md-8 col-sm-8 col-sms-12');
\t\t\$('#content .custom-products-row .product-list .images-container').addClass('col-md-4 col-sm-4 col-sms-12');
        \$('#content .product-grid > .clearfix').remove();

        \$('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');
        \$('#grid-view').removeClass('active');
        \$('#list-view').addClass('active');

        localStorage.setItem('display', 'list');
    });
\t\$('.btn-list').click(function() {
\t\t\$('.custom-products').addClass('custom-products-row');
\t\t\$('#content .product-grid > .clearfix').remove();
\t\t\$('#content .product-grid').attr('class', 'product-layout product-list col-xs-12');
\t\t\$('#content .custom-products-row .product-list .caption').addClass('col-md-8 col-sm-8 col-sms-12');
\t\t\$('#content .custom-products-row .product-list .images-container').addClass('col-md-4 col-sm-4 col-sms-12');
\t\t\$('#content .product-grid > .clearfix').remove();

        \$('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');
        \$('#grid-view').removeClass('active');
        \$('#list-view').addClass('active');
\t\tlocalStorage.setItem('display', 'list');
\t});

    // Product Grid
    \$('#grid-view').click(function() {
\t\t\$('.custom-products').removeClass('custom-products-row');
        var cols = \$('#column-right, #column-left').length;

        if (cols == 2) {
            \$('#content .product-list').attr('class', 'product-layout product-grid module-style1 col-lg-6 col-md-6 col-sm-6 col-xs-6');
        } else if (cols == 1) {
            \$('#content .product-list').attr('class', 'product-layout product-grid module-style1 col-lg-4 col-md-4 col-sm-6 col-xs-6');
        } else {
            \$('#content .product-list').attr('class', 'product-layout product-grid module-style1 col-lg-3 col-md-3 col-sm-6 col-xs-6');
        }
\t\t\$('#content .custom-products .product-grid .caption').removeClass('col-md-8 col-sm-8 col-sms-12');
\t\t\$('#content .custom-products .product-grid .images-container').removeClass('col-md-4 col-sm-4 col-sms-12');
        \$('#list-view').removeClass('active');
        \$('#grid-view').addClass('active');

        localStorage.setItem('display', 'grid');
    });
\tif (localStorage.getItem('display') == 'list') {
\t\t
\t\t\$('#list-view').trigger('click');
\t} else {
\t\t\$('#grid-view').trigger('click');
\t}
\t// Product Grid
\t\$('.btn-grid').click(function() {
\t\t\$('.custom-products').removeClass('custom-products-row');
\t\t\$('#content .custom-products .product-grid .caption').removeClass('col-md-8 col-sm-8 col-sms-12');
\t\t\$('#content .custom-products .product-grid .images-container').removeClass('col-md-4 col-sm-4 col-sms-12');
        \$('#list-view').removeClass('active');
        \$('#grid-view').addClass('active');

        localStorage.setItem('display', 'grid');
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/product/ocfilter/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  734 => 234,  726 => 231,  720 => 229,  717 => 228,  710 => 225,  704 => 223,  698 => 221,  696 => 220,  691 => 217,  670 => 207,  660 => 204,  648 => 201,  643 => 198,  633 => 195,  624 => 194,  622 => 193,  615 => 190,  610 => 187,  604 => 186,  598 => 184,  595 => 183,  592 => 182,  588 => 181,  584 => 179,  582 => 178,  575 => 177,  570 => 174,  562 => 172,  559 => 171,  554 => 169,  549 => 168,  543 => 166,  541 => 165,  537 => 163,  534 => 162,  530 => 160,  527 => 159,  520 => 157,  505 => 154,  501 => 153,  495 => 152,  487 => 151,  483 => 150,  480 => 149,  476 => 148,  473 => 147,  468 => 146,  466 => 145,  461 => 143,  456 => 140,  450 => 136,  440 => 134,  438 => 133,  428 => 130,  418 => 127,  413 => 124,  403 => 122,  401 => 121,  393 => 120,  388 => 119,  382 => 117,  379 => 116,  373 => 114,  371 => 113,  368 => 112,  362 => 108,  352 => 106,  350 => 105,  340 => 102,  330 => 99,  325 => 96,  322 => 95,  309 => 93,  304 => 92,  302 => 91,  296 => 90,  292 => 89,  284 => 88,  279 => 87,  273 => 85,  270 => 84,  264 => 82,  262 => 81,  259 => 80,  257 => 79,  250 => 74,  246 => 73,  241 => 70,  237 => 68,  231 => 67,  223 => 65,  215 => 63,  212 => 62,  208 => 61,  202 => 59,  198 => 57,  192 => 56,  184 => 54,  176 => 52,  173 => 51,  169 => 50,  163 => 48,  161 => 47,  157 => 45,  153 => 43,  147 => 42,  139 => 40,  131 => 38,  128 => 37,  124 => 36,  118 => 34,  114 => 32,  108 => 31,  100 => 29,  92 => 27,  89 => 26,  85 => 25,  79 => 23,  77 => 22,  71 => 19,  67 => 17,  60 => 15,  53 => 14,  48 => 12,  44 => 11,  40 => 10,  35 => 7,  33 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="custom-category">*/
/* 	{% if products %}*/
/* 		<div class="category-compare"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/* 		<div class="toolbar toolbar-products">*/
/* 			 <div class="modes toolbar3">*/
/* 				{% if use_custom_view %}*/
/* 					<button type="button" onclick="category_view.changeView('grid', 3, 'btn-grid-3')" class="btn btn-default btn-custom-view btn-grid btn-grid-3">3</button>*/
/* 					<button type="button" onclick="category_view.changeView('grid', 4, 'btn-grid-4')" class="btn btn-default btn-custom-view btn-grid btn-grid-4">4</button>*/
/* 					<button type="button" onclick="category_view.changeView('grid', 5, 'btn-grid-5')" class="btn btn-default btn-custom-view btn-grid btn-grid-5">5</button>*/
/* 					<button type="button" onclick="category_view.changeView('list', 0, 'btn-list')" class="btn btn-default btn-custom-view btn-list">{{ button_list }}</button>*/
/* 					<input type="hidden" id="category-view-type" value="{{ category_view }}" />*/
/* 					<input type="hidden" id="category-grid-cols" value="{{ grid_columns }}" />*/
/* 				{% else %}*/
/* 					<button type="button" id="grid-view" class="btn btn-default btn-grid"  title="{{ button_grid }}">{{ button_grid }}</button>*/
/* 					<button type="button" id="list-view" class="btn btn-default btn-list"  title="{{ button_list }}">{{ button_list }}</button>*/
/* 				{% endif %}*/
/* 			 </div>*/
/* 			<div class="toolbar-amount toolbar4">*/
/* 				<span>{{ results }}</span>*/
/* 			</div>*/
/* 			<div class="sorter toolbar1">*/
/* 				{% if use_layered %}*/
/* 					<label  for="input-sort">{{ text_sort }}</label>*/
/* 					<select id="input-sort" class="form-control" onchange="ocfilter.filter(this.value);">*/
/* 						{% for sorts in ajax_sorts %}*/
/* 							{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 								<option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/* 							{% else %}*/
/* 								<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 				{% else %}*/
/* 					<label for="input-sort">{{ text_sort }}</label>*/
/* 					<select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* 						{% for sorts in sorts %}*/
/* 							{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 								<option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/* 							{% else %}*/
/* 								<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="limiter toolbar2">*/
/* 				{% if use_layered %}*/
/* 					<label for="input-limit">{{ text_limit }}</label>*/
/* 					<select id="input-limit" class="form-control" onchange="ocfilter.filter(this.value);">*/
/* 						{% for limits in ajax_limits %}*/
/* 							{% if limits.value == limit %}*/
/* 								<option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/* 							{% else %}*/
/* 								<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 				{% else %}*/
/* 					<label  for="input-limit">{{ text_limit }}</label>*/
/* 					<select id="input-limit" class="form-control" onchange="location = this.value;">*/
/* 						{% for limits in limits %}*/
/* 							{% if limits.value == limit %}*/
/* 								<option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/* 							{% else %}*/
/* 								<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="custom-products">*/
/* 			{% for product in products %}*/
/* 				<div class="product-layout product-list col-xs-12 product-item">*/
/* 					<div class="product-thumb">*/
/* 						<div class="item">*/
/* 							<div class="item-inner">*/
/* 								<div class="image images-container">*/
/* 									{% if image_effect == 'swatches' %}*/
/* 										<div class="image swatches-image-container">*/
/* 											{% if product.special %}*/
/* 												<div class="label-product label_sale">{{ text_label_sale1 }}</div>*/
/* 											{% endif %}*/
/* 											{% if product.is_new %}*/
/* 												<div class="label-product label_new">{{ text_label_new }}</div>*/
/* 											{% endif %}*/
/* 											<a href="{{ product.href }}">*/
/* 												<img src="{{ product.thumb }}"  alt="{{ product.name }}" title="{{ product.name }}"*/
/* 													 class="img-responsive img-cate-{{ product.product_id }}" />*/
/* 												<input type="hidden" value="{{ product.thumb }}" class="img-default-{{ product.product_id }}" />*/
/* 												{% if product.swatches_images %}*/
/* 													{% for s_image in product.swatches_images %}*/
/* 														<input type="hidden" value="{{ s_image.image }}" class="img-swatch-{{ product.product_id }}-{{ s_image.product_option_value_id }}" />*/
/* 													{% endfor %}*/
/* 												{% endif %}*/
/* 											</a>*/
/* 											<div class="image-icons">*/
/* 												<div class="wishlist">*/
/* 													<button type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><span>{{ button_wishlist }}</span></button>*/
/* 												</div>*/
/* 												<div class="compare">*/
/* 													<button type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><span>{{ button_compare }}</span></button>*/
/* 												</div>*/
/* 												<div class="qv-button-container">*/
/* 													{% if use_quickview %}*/
/* 														<button type="button" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><span>{{ button_quickview }}</span></button>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% else %}*/
/* 										<div class="image rotate-image-container">*/
/* 											{% if product.special %}*/
/* 												<div class="label-product label_sale">{{ text_label_sale1 }}</div>*/
/* 											{% endif %}*/
/* 											{% if product.is_new %}*/
/* 												<div class="label-product label_new">{{ text_label_new }}</div>*/
/* 											{% endif %}*/
/* 											<a href="{{ product.href }}">*/
/* 												<img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-default-image" />*/
/* 												{% if product.rotate_image %}*/
/* 													<img src="{{ product.rotate_image }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-rotate-image" />*/
/* 												{% endif %}*/
/* 											</a>*/
/* 											<div class="image-icons">*/
/* 												<div class="wishlist">*/
/* 													<button type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><span>{{ button_wishlist }}</span></button>*/
/* 												</div>*/
/* 												<div class="compare">*/
/* 													<button type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><span>{{ button_compare }}</span></button>*/
/* 												</div>*/
/* 												<div class="qv-button-container">*/
/* 													{% if use_quickview %}*/
/* 														<button type="button" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><span>{{ button_quickview }}</span></button>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								<div class="caption">*/
/* 									<div class="left-caption">*/
/* 										{% if image_effect == 'swatches' %}	*/
/* 											<div class="category-options">*/
/* 												{% if product.options %}*/
/* 													{% for option in product.options %}*/
/* 														<ul class="ul-swatches-colors">*/
/* 															{% for option_value in option.product_option_value %}*/
/* 																<li class="swatches-options">*/
/* 																	<a href="javascript:void(0);" onclick="swatches.changeSwatchInCategory($(this));" title="{{ option_value.name }}"*/
/* 																	   style="{% if option_value.image %} width: {{ icon_swatches_width }}px; height: {{ icon_swatches_height }}px;*/
/* 																background-image: url('{{ option_value.image }}') {% endif %}"*/
/* 																	   data-product-id="{{ product.product_id }}"*/
/* 																	   data-product-option-value-id="{{ option_value.product_option_value_id }}">{% if not option_value.image %} {{ option_value.name }} {% endif %}</a>*/
/* 																</li>*/
/* 															{% endfor %}*/
/* 														</ul>*/
/* 													{% endfor %}*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if product.price %}*/
/* 											<div class="price">*/
/* 												<div class="price-box">*/
/* 												{% if not product.special %}*/
/* 													<p class="regular-price"><span class="price">{{ product.price }}</span></p>*/
/* 												{% else %}*/
/* 													<p class="special-price"><span class="price">{{ product.special }}</span></p>*/
/* 													<p class="old-price"><span class="price">{{ product.price }}</span></p>						  */
/* 												{% endif %}*/
/* 												{% if product.tax %}*/
/* 													<p class="price-tax"><span class="price">{{ text_tax }} {{ product.tax }}</span></p>*/
/* 												{% endif %}*/
/* 												</div>*/
/* 											</div>*/
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
/* 												<span>{{ text_manufacturer ~ ' ' }}</span><a href="{{ product.manufacturers }}">{{ product.manufacturer }}</a>*/
/* 											</p>*/
/* 										{% endif %}*/
/* 										<div class="actions">*/
/* 											<div class="add-to-links">*/
/* 												<div class="cart">*/
/* 													<button type="button" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><span>{{ button_cart }}</span></button>*/
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
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endfor %} */
/* 		</div>*/
/* 		<div class="toolbar toolbar-products toolbar-bottom">*/
/* 			{% if use_layered %}*/
/* 				<div class="pages ajax_pagination">{{ ajax_pagination }}</div>*/
/* 			{% else %}*/
/* 				<div class="pages">{{ pagination }}</div>*/
/* 			{% endif %}*/
/* 			<div class="toolbar-amount"><span>{{ results }}</span></div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if not categories and not products %}*/
/* 		<p>{{ text_empty }}</p>*/
/* 		<div class="buttons">*/
/* 			<div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
/* <script type="text/javascript">*/
/*     // Product List*/
/*     $('#list-view').click(function() {*/
/* 		$('.custom-products').addClass('custom-products-row');*/
/* 		$('#content .product-grid > .clearfix').remove();*/
/* 		$('#content .custom-products-row .product-list .caption').addClass('col-md-8 col-sm-8 col-sms-12');*/
/* 		$('#content .custom-products-row .product-list .images-container').addClass('col-md-4 col-sm-4 col-sms-12');*/
/*         $('#content .product-grid > .clearfix').remove();*/
/* */
/*         $('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');*/
/*         $('#grid-view').removeClass('active');*/
/*         $('#list-view').addClass('active');*/
/* */
/*         localStorage.setItem('display', 'list');*/
/*     });*/
/* 	$('.btn-list').click(function() {*/
/* 		$('.custom-products').addClass('custom-products-row');*/
/* 		$('#content .product-grid > .clearfix').remove();*/
/* 		$('#content .product-grid').attr('class', 'product-layout product-list col-xs-12');*/
/* 		$('#content .custom-products-row .product-list .caption').addClass('col-md-8 col-sm-8 col-sms-12');*/
/* 		$('#content .custom-products-row .product-list .images-container').addClass('col-md-4 col-sm-4 col-sms-12');*/
/* 		$('#content .product-grid > .clearfix').remove();*/
/* */
/*         $('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');*/
/*         $('#grid-view').removeClass('active');*/
/*         $('#list-view').addClass('active');*/
/* 		localStorage.setItem('display', 'list');*/
/* 	});*/
/* */
/*     // Product Grid*/
/*     $('#grid-view').click(function() {*/
/* 		$('.custom-products').removeClass('custom-products-row');*/
/*         var cols = $('#column-right, #column-left').length;*/
/* */
/*         if (cols == 2) {*/
/*             $('#content .product-list').attr('class', 'product-layout product-grid module-style1 col-lg-6 col-md-6 col-sm-6 col-xs-6');*/
/*         } else if (cols == 1) {*/
/*             $('#content .product-list').attr('class', 'product-layout product-grid module-style1 col-lg-4 col-md-4 col-sm-6 col-xs-6');*/
/*         } else {*/
/*             $('#content .product-list').attr('class', 'product-layout product-grid module-style1 col-lg-3 col-md-3 col-sm-6 col-xs-6');*/
/*         }*/
/* 		$('#content .custom-products .product-grid .caption').removeClass('col-md-8 col-sm-8 col-sms-12');*/
/* 		$('#content .custom-products .product-grid .images-container').removeClass('col-md-4 col-sm-4 col-sms-12');*/
/*         $('#list-view').removeClass('active');*/
/*         $('#grid-view').addClass('active');*/
/* */
/*         localStorage.setItem('display', 'grid');*/
/*     });*/
/* 	if (localStorage.getItem('display') == 'list') {*/
/* 		*/
/* 		$('#list-view').trigger('click');*/
/* 	} else {*/
/* 		$('#grid-view').trigger('click');*/
/* 	}*/
/* 	// Product Grid*/
/* 	$('.btn-grid').click(function() {*/
/* 		$('.custom-products').removeClass('custom-products-row');*/
/* 		$('#content .custom-products .product-grid .caption').removeClass('col-md-8 col-sm-8 col-sms-12');*/
/* 		$('#content .custom-products .product-grid .images-container').removeClass('col-md-4 col-sm-4 col-sms-12');*/
/*         $('#list-view').removeClass('active');*/
/*         $('#grid-view').addClass('active');*/
/* */
/*         localStorage.setItem('display', 'grid');*/
/* 	});*/
/* </script>*/
