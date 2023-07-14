<?php

/* tt_origine4/template/product/category.twig */
class __TwigTemplate_c76295fc438cfa1092b381e9ad77517f4f84a0796653c61e90b94926fc7346e1 extends Twig_Template
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
<div id=\"product-category\" class=\"container layer-category\">
    <div class=\"layered-navigation-block\"></div>
    <div class=\"ajax-loader\">
        <img src=\"";
        // line 5
        echo (isset($context["ajax_loader"]) ? $context["ajax_loader"] : null);
        echo "\" alt=\"\" />
    </div>
    <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
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
        // line 11
        echo "    </ul>
    <div class=\"row\"><div class=\"col-order\">";
        // line 12
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
        ";
        // line 13
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "        ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "            ";
            $context["class"] = "col-md-9 col-sm-12";
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "        ";
        }
        // line 20
        echo "        <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t<div class=\"category-info\">
\t\t\t\t<h2 class=\"category-name\">";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
\t\t\t\t";
        // line 23
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 24
            echo "\t\t\t\t\t";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 25
                echo "\t\t\t\t\t\t<div class=\"thumb\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) ? ((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                echo "\" title=\"";
                echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                echo "\" class=\"img-thumbnail\" /></div>
\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 28
                echo "\t\t\t\t\t\t\t<div class=\"description\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t";
        }
        // line 31
        echo "\t\t\t</div>
            ";
        // line 32
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 33
            echo "                <h3 class=\"refine-category\">";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
                ";
            // line 34
            if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) <= 5)) {
                // line 35
                echo "\t\t\t\t\t<ul class=\"list-cate\">
\t\t\t\t\t\t";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 37
                    echo "\t\t\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t\t\t\t</ul>
                ";
            } else {
                // line 41
                echo "                    <div class=\"row\">
                        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["categories"]) ? $context["categories"] : null), twig_round((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 43
                    echo "                            <div class=\"col-sm-3\">
                                <ul class=\"list-cate\">
                                    ";
                    // line 45
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 46
                        echo "                                        <li><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "                                </ul>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                    </div>
                    <br />
                ";
            }
            // line 54
            echo "            ";
        }
        // line 55
        echo "            <div class=\"custom-category\">
                ";
        // line 56
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 57
            echo "\t\t\t\t\t<div class=\"category-compare\"><a href=\"";
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
\t\t\t\t\t<div class=\"toolbar\">
                        <div class=\"modes toolbar3\">
\t\t\t\t\t\t\t";
            // line 60
            if ((isset($context["use_custom_view"]) ? $context["use_custom_view"] : null)) {
                // line 61
                echo "\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 3, 'btn-grid-3')\" class=\"btn btn-default btn-custom-view btn-grid btn-grid-3\">3</button>
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 4, 'btn-grid-4')\" class=\"btn btn-default btn-custom-view btn-grid btn-grid-4\">4</button>
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 5, 'btn-grid-5')\" class=\"btn btn-default btn-custom-view btn-grid btn-grid-5\">5</button>
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('list', 0, 'btn-list')\" class=\"btn btn-default btn-custom-view btn-list\">";
                // line 64
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "</button>
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"category-view-type\" value=\"";
                // line 65
                echo (isset($context["category_view"]) ? $context["category_view"] : null);
                echo "\" />
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"category-grid-cols\" value=\"";
                // line 66
                echo (isset($context["grid_columns"]) ? $context["grid_columns"] : null);
                echo "\" />
\t\t\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default btn-grid\"  title=\"";
                echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
                echo "\">";
                echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
                echo "</button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default btn-list\"  title=\"";
                // line 69
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "\">";
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "</button>
\t\t\t\t\t\t\t";
            }
            // line 71
            echo "                         </div>
                        <div class=\"toolbar-amount toolbar4\">
\t\t\t\t\t\t\t<span>";
            // line 73
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</span>
\t\t\t\t\t\t</div>
                        <div class=\"sorter toolbar1\">
\t\t\t\t\t\t\t";
            // line 76
            if ((isset($context["use_layered"]) ? $context["use_layered"] : null)) {
                // line 77
                echo "\t\t\t\t\t\t\t\t<label  for=\"input-sort\">";
                echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"ocfilter.filter(this.value);\">
\t\t\t\t\t\t\t\t\t";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ajax_sorts"]) ? $context["ajax_sorts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                        // line 81
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
            } else {
                // line 88
                echo "\t\t\t\t\t\t\t\t<label for=\"input-sort\">";
                echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
            }
            // line 99
            echo "                        </div>
                        <div class=\"limiter toolbar2\">
\t\t\t\t\t\t\t";
            // line 101
            if ((isset($context["use_layered"]) ? $context["use_layered"] : null)) {
                // line 102
                echo "\t\t\t\t\t\t\t\t<label for=\"input-limit\">";
                echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"ocfilter.filter(this.value);\">
\t\t\t\t\t\t\t\t\t";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ajax_limits"]) ? $context["ajax_limits"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
            } else {
                // line 113
                echo "\t\t\t\t\t\t\t\t<label  for=\"input-limit\">";
                echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                        // line 117
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 119
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
            }
            // line 124
            echo "                        </div>
                    </div>
                    <div class=\"custom-products\">
                        ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 128
                echo "                            <div class=\"product-layout product-list col-xs-12 product-item\">
                                <div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 133
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo $this->getAttribute($context["product"], "text_percent", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 136
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "is_new", array())) {
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                    echo (isset($context["text_label_new"]) ? $context["text_label_new"] : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 139
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((isset($context["image_effect"]) ? $context["image_effect"] : null) == "swatches")) {
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image swatches-image-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 141
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 142
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\"  alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t class=\"img-responsive img-cate-";
                    // line 143
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    // line 144
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" class=\"img-default-";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 145
                    if ($this->getAttribute($context["product"], "swatches_images", array())) {
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "swatches_images", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                            // line 147
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                            echo $this->getAttribute($context["s_image"], "image", array());
                            echo "\" class=\"img-swatch-";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "-";
                            echo $this->getAttribute($context["s_image"], "product_option_value_id", array());
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 153
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><span>";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 156
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><span>";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 159
                    if ((isset($context["use_quickview"]) ? $context["use_quickview"] : null)) {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                        echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                        echo "\" onclick=\"ocquickview.ajaxView('";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "')\"><span>";
                        echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image rotate-image-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 167
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 168
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive img-default-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 169
                    if ($this->getAttribute($context["product"], "rotate_image", array())) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo $this->getAttribute($context["product"], "rotate_image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"img-responsive img-rotate-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 172
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 175
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><span>";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 178
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><span>";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 181
                    if ((isset($context["use_quickview"]) ? $context["use_quickview"] : null)) {
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                        echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                        echo "\" onclick=\"ocquickview.ajaxView('";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "')\"><span>";
                        echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"left-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 191
                if (((isset($context["image_effect"]) ? $context["image_effect"] : null) == "swatches")) {
                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"category-options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 193
                    if ($this->getAttribute($context["product"], "options", array())) {
                        // line 194
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "options", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 195
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 196
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 197
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeSwatchInCategory(\$(this));\" title=\"";
                                // line 198
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   style=\"";
                                // line 199
                                if ($this->getAttribute($context["option_value"], "image", array())) {
                                    echo " width: ";
                                    echo (isset($context["icon_swatches_width"]) ? $context["icon_swatches_width"] : null);
                                    echo "px; height: ";
                                    echo (isset($context["icon_swatches_height"]) ? $context["icon_swatches_height"] : null);
                                    echo "px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                                    // line 200
                                    echo $this->getAttribute($context["option_value"], "image", array());
                                    echo "') ";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                                // line 201
                                echo $this->getAttribute($context["product"], "product_id", array());
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                                // line 202
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo "\">";
                                if ( !$this->getAttribute($context["option_value"], "image", array())) {
                                    echo " ";
                                    echo $this->getAttribute($context["option_value"], "name", array());
                                    echo " ";
                                }
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 205
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 207
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 208
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 211
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 213
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 214
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 216
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                        // line 217
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 219
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 220
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 222
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 225
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 226
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 227
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 229
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 230
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) == $context["i"])) {
                            // line 231
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 232
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo (isset($context["class_r"]) ? $context["class_r"] : null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 234
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 235
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 238
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-des\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"right-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"model\">";
                // line 241
                echo $this->getAttribute($context["product"], "model", array());
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 242
                if ($this->getAttribute($context["product"], "manufacturer", array())) {
                    // line 243
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product ";
                    if (((isset($context["image_effect"]) ? $context["image_effect"] : null) == "swatches")) {
                        if ($this->getAttribute($context["product"], "options", array())) {
                            echo "hide-hover";
                        }
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 244
                    echo ((isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null) . ": ");
                    echo "</span><a href=\"";
                    echo $this->getAttribute($context["product"], "manufacturers", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "manufacturer", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 247
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 250
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 253
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><span>";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 256
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><span>";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
            // line 266
            echo " 
\t\t\t\t\t</div>
                    <div class=\"toolbar toolbar-products toolbar-bottom\">
                        ";
            // line 269
            if ((isset($context["use_layered"]) ? $context["use_layered"] : null)) {
                // line 270
                echo "                            <div class=\"pages ajax_pagination\">";
                echo (isset($context["ajax_pagination"]) ? $context["ajax_pagination"] : null);
                echo "</div>
                        ";
            } else {
                // line 272
                echo "                            <div class=\"pages\">";
                echo (isset($context["pagination"]) ? $context["pagination"] : null);
                echo "</div>
                        ";
            }
            // line 274
            echo "                        <div class=\"toolbar-amount\"><span>";
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</span></div>
                    </div>
                ";
        }
        // line 277
        echo "                ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 278
            echo "                    <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
                    <div class=\"buttons\">
                        <div class=\"pull-right\"><a href=\"";
            // line 280
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
                    </div>
                ";
        }
        // line 283
        echo "            </div>
            ";
        // line 284
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
        </div>
        ";
        // line 286
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    </div>
</div></div>
";
        // line 289
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  904 => 289,  898 => 286,  893 => 284,  890 => 283,  882 => 280,  876 => 278,  873 => 277,  866 => 274,  860 => 272,  854 => 270,  852 => 269,  847 => 266,  826 => 256,  816 => 253,  804 => 250,  799 => 247,  789 => 244,  780 => 243,  778 => 242,  774 => 241,  767 => 238,  762 => 235,  756 => 234,  750 => 232,  747 => 231,  744 => 230,  740 => 229,  736 => 227,  734 => 226,  727 => 225,  722 => 222,  714 => 220,  711 => 219,  706 => 217,  701 => 216,  695 => 214,  693 => 213,  689 => 211,  686 => 210,  682 => 208,  679 => 207,  672 => 205,  657 => 202,  653 => 201,  647 => 200,  639 => 199,  635 => 198,  632 => 197,  628 => 196,  625 => 195,  620 => 194,  618 => 193,  613 => 191,  608 => 188,  602 => 184,  592 => 182,  590 => 181,  580 => 178,  570 => 175,  565 => 172,  555 => 170,  553 => 169,  545 => 168,  541 => 167,  538 => 166,  532 => 162,  522 => 160,  520 => 159,  510 => 156,  500 => 153,  495 => 150,  492 => 149,  479 => 147,  474 => 146,  472 => 145,  466 => 144,  462 => 143,  454 => 142,  450 => 141,  447 => 140,  444 => 139,  438 => 137,  435 => 136,  429 => 134,  427 => 133,  420 => 128,  416 => 127,  411 => 124,  407 => 122,  401 => 121,  393 => 119,  385 => 117,  382 => 116,  378 => 115,  372 => 113,  368 => 111,  362 => 110,  354 => 108,  346 => 106,  343 => 105,  339 => 104,  333 => 102,  331 => 101,  327 => 99,  323 => 97,  317 => 96,  309 => 94,  301 => 92,  298 => 91,  294 => 90,  288 => 88,  284 => 86,  278 => 85,  270 => 83,  262 => 81,  259 => 80,  255 => 79,  249 => 77,  247 => 76,  241 => 73,  237 => 71,  230 => 69,  223 => 68,  218 => 66,  214 => 65,  210 => 64,  205 => 61,  203 => 60,  194 => 57,  192 => 56,  189 => 55,  186 => 54,  181 => 51,  173 => 48,  162 => 46,  158 => 45,  154 => 43,  150 => 42,  147 => 41,  143 => 39,  132 => 37,  128 => 36,  125 => 35,  123 => 34,  118 => 33,  116 => 32,  113 => 31,  110 => 30,  104 => 28,  101 => 27,  91 => 25,  88 => 24,  86 => 23,  82 => 22,  74 => 20,  71 => 19,  68 => 18,  65 => 17,  62 => 16,  59 => 15,  56 => 14,  54 => 13,  50 => 12,  47 => 11,  36 => 9,  32 => 8,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container layer-category">*/
/*     <div class="layered-navigation-block"></div>*/
/*     <div class="ajax-loader">*/
/*         <img src="{{ ajax_loader }}" alt="" />*/
/*     </div>*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <div class="row"><div class="col-order">{{ column_left }}*/
/*         {% if column_left and column_right %}*/
/*             {% set class = 'col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*             {% set class = 'col-md-9 col-sm-12' %}*/
/*         {% else %}*/
/*             {% set class = 'col-sm-12' %}*/
/*         {% endif %}*/
/*         <div id="content" class="{{ class }}">{{ content_top }}*/
/* 			<div class="category-info">*/
/* 				<h2 class="category-name">{{ heading_title }}</h2>*/
/* 				{% if thumb or description %}*/
/* 					{% if thumb %}*/
/* 						<div class="thumb"><img src="{{ thumb }}" alt="{{ custom_alt ? custom_alt : heading_title }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}" class="img-thumbnail" /></div>*/
/* 					{% endif %}*/
/* 						{% if description %}*/
/* 							<div class="description">{{ description }}</div>*/
/* 						{% endif %}*/
/* 				{% endif %}*/
/* 			</div>*/
/*             {% if categories %}*/
/*                 <h3 class="refine-category">{{ text_refine }}</h3>*/
/*                 {% if categories|length <= 5 %}*/
/* 					<ul class="list-cate">*/
/* 						{% for category in categories %}*/
/* 							<li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/* 						{% endfor %}*/
/* 					</ul>*/
/*                 {% else %}*/
/*                     <div class="row">*/
/*                         {% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}*/
/*                             <div class="col-sm-3">*/
/*                                 <ul class="list-cate">*/
/*                                     {% for child in category %}*/
/*                                         <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <br />*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             <div class="custom-category">*/
/*                 {% if products %}*/
/* 					<div class="category-compare"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/* 					<div class="toolbar">*/
/*                         <div class="modes toolbar3">*/
/* 							{% if use_custom_view %}*/
/* 								<button type="button" onclick="category_view.changeView('grid', 3, 'btn-grid-3')" class="btn btn-default btn-custom-view btn-grid btn-grid-3">3</button>*/
/* 								<button type="button" onclick="category_view.changeView('grid', 4, 'btn-grid-4')" class="btn btn-default btn-custom-view btn-grid btn-grid-4">4</button>*/
/* 								<button type="button" onclick="category_view.changeView('grid', 5, 'btn-grid-5')" class="btn btn-default btn-custom-view btn-grid btn-grid-5">5</button>*/
/* 								<button type="button" onclick="category_view.changeView('list', 0, 'btn-list')" class="btn btn-default btn-custom-view btn-list">{{ button_list }}</button>*/
/* 								<input type="hidden" id="category-view-type" value="{{ category_view }}" />*/
/* 								<input type="hidden" id="category-grid-cols" value="{{ grid_columns }}" />*/
/* 							{% else %}*/
/* 								<button type="button" id="grid-view" class="btn btn-default btn-grid"  title="{{ button_grid }}">{{ button_grid }}</button>*/
/* 								<button type="button" id="list-view" class="btn btn-default btn-list"  title="{{ button_list }}">{{ button_list }}</button>*/
/* 							{% endif %}*/
/*                          </div>*/
/*                         <div class="toolbar-amount toolbar4">*/
/* 							<span>{{ results }}</span>*/
/* 						</div>*/
/*                         <div class="sorter toolbar1">*/
/* 							{% if use_layered %}*/
/* 								<label  for="input-sort">{{ text_sort }}</label>*/
/* 								<select id="input-sort" class="form-control" onchange="ocfilter.filter(this.value);">*/
/* 									{% for sorts in ajax_sorts %}*/
/* 										{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 											<option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/* 										{% else %}*/
/* 											<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							{% else %}*/
/* 								<label for="input-sort">{{ text_sort }}</label>*/
/* 								<select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* 									{% for sorts in sorts %}*/
/* 										{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 											<option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/* 										{% else %}*/
/* 											<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							{% endif %}*/
/*                         </div>*/
/*                         <div class="limiter toolbar2">*/
/* 							{% if use_layered %}*/
/* 								<label for="input-limit">{{ text_limit }}</label>*/
/* 								<select id="input-limit" class="form-control" onchange="ocfilter.filter(this.value);">*/
/* 									{% for limits in ajax_limits %}*/
/* 										{% if limits.value == limit %}*/
/* 											<option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/* 										{% else %}*/
/* 											<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							{% else %}*/
/* 								<label  for="input-limit">{{ text_limit }}</label>*/
/* 								<select id="input-limit" class="form-control" onchange="location = this.value;">*/
/* 									{% for limits in limits %}*/
/* 										{% if limits.value == limit %}*/
/* 											<option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/* 										{% else %}*/
/* 											<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							{% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="custom-products">*/
/*                         {% for product in products %}*/
/*                             <div class="product-layout product-list col-xs-12 product-item">*/
/*                                 <div class="product-thumb">*/
/* 									<div class="item">*/
/* 										<div class="item-inner">*/
/* 											<div class="image images-container">*/
/* 												{% if product.special %}*/
/* 													<div class="label-product label_sale">{{ product.text_percent }}</div>*/
/* 												{% endif %}*/
/* 												{% if product.is_new %}*/
/* 													<div class="label-product label_new">{{ text_label_new }}</div>*/
/* 												{% endif %}*/
/* 												{% if image_effect == 'swatches' %}*/
/* 													<div class="image swatches-image-container">*/
/* 														<a href="{{ product.href }}">*/
/* 															<img src="{{ product.thumb }}"  alt="{{ product.name }}" title="{{ product.name }}"*/
/* 																 class="img-responsive img-cate-{{ product.product_id }}" />*/
/* 															<input type="hidden" value="{{ product.thumb }}" class="img-default-{{ product.product_id }}" />*/
/* 															{% if product.swatches_images %}*/
/* 																{% for s_image in product.swatches_images %}*/
/* 																	<input type="hidden" value="{{ s_image.image }}" class="img-swatch-{{ product.product_id }}-{{ s_image.product_option_value_id }}" />*/
/* 																{% endfor %}*/
/* 															{% endif %}*/
/* 														</a>*/
/* 														<div class="image-icons">*/
/* 															<div class="wishlist">*/
/* 																<button type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><span>{{ button_wishlist }}</span></button>*/
/* 															</div>*/
/* 															<div class="compare">*/
/* 																<button type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><span>{{ button_compare }}</span></button>*/
/* 															</div>*/
/* 															<div class="qv-button-container">*/
/* 																{% if use_quickview %}*/
/* 																	<button type="button" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><span>{{ button_quickview }}</span></button>*/
/* 																{% endif %}*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												{% else %}*/
/* 													<div class="image rotate-image-container">*/
/* 														<a href="{{ product.href }}">*/
/* 															<img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-default-image" />*/
/* 															{% if product.rotate_image %}*/
/* 																<img src="{{ product.rotate_image }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-rotate-image" />*/
/* 															{% endif %}*/
/* 														</a>*/
/* 														<div class="image-icons">*/
/* 															<div class="wishlist">*/
/* 																<button type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><span>{{ button_wishlist }}</span></button>*/
/* 															</div>*/
/* 															<div class="compare">*/
/* 																<button type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><span>{{ button_compare }}</span></button>*/
/* 															</div>*/
/* 															<div class="qv-button-container">*/
/* 																{% if use_quickview %}*/
/* 																	<button type="button" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><span>{{ button_quickview }}</span></button>*/
/* 																{% endif %}*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 											<div class="caption">*/
/* 												<div class="left-caption">*/
/* 													{% if image_effect == 'swatches' %}	*/
/* 														<div class="category-options">*/
/* 															{% if product.options %}*/
/* 																{% for option in product.options %}*/
/* 																	<ul class="ul-swatches-colors">*/
/* 																		{% for option_value in option.product_option_value %}*/
/* 																			<li class="swatches-options">*/
/* 																				<a href="javascript:void(0);" onclick="swatches.changeSwatchInCategory($(this));" title="{{ option_value.name }}"*/
/* 																				   style="{% if option_value.image %} width: {{ icon_swatches_width }}px; height: {{ icon_swatches_height }}px;*/
/* 																			background-image: url('{{ option_value.image }}') {% endif %}"*/
/* 																				   data-product-id="{{ product.product_id }}"*/
/* 																				   data-product-option-value-id="{{ option_value.product_option_value_id }}">{% if not option_value.image %} {{ option_value.name }} {% endif %}</a>*/
/* 																			</li>*/
/* 																		{% endfor %}*/
/* 																	</ul>*/
/* 																{% endfor %}*/
/* 															{% endif %}*/
/* 														</div>*/
/* 													{% endif %}*/
/* 													{% if product.price %}*/
/* 														<div class="price">*/
/* 															<div class="price-box">*/
/* 															{% if not product.special %}*/
/* 																<p class="regular-price"><span class="price">{{ product.price }}</span></p>*/
/* 															{% else %}*/
/* 																<p class="special-price"><span class="price">{{ product.special }}</span></p>*/
/* 																<p class="old-price"><span class="price">{{ product.price }}</span></p>						  */
/* 															{% endif %}*/
/* 															{% if product.tax %}*/
/* 																<p class="price-tax"><span class="price">{{ text_tax }} {{ product.tax }}</span></p>*/
/* 															{% endif %}*/
/* 															</div>*/
/* 														</div>*/
/* 													{% endif %}*/
/* 													<h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 													{% if product.rating %}*/
/* 														<div class="ratings">*/
/* 															<div class="rating-box">*/
/* 															{% for i in 0..5 %}*/
/* 																{% if product.rating == i %}*/
/* 																{% set class_r = "rating"~i %}*/
/* 																<div class="{{ class_r }}">rating</div>*/
/* 																{% endif %}*/
/* 															{% endfor %}*/
/* 															</div>*/
/* 														</div>					*/
/* 													{% endif %}*/
/* 													<p class="product-des">{{ product.description }}</p>*/
/* 												</div>*/
/* 												<div class="right-caption">*/
/* 													<p class="model">{{ product.model }}</p>*/
/* 													{% if product.manufacturer %}*/
/* 													<p class="manufacture-product {% if image_effect == 'swatches' %}{% if product.options %}{{ 'hide-hover' }}{% endif %}{% endif %}">*/
/* 														<span>{{ text_manufacturer ~ ': '}}</span><a href="{{ product.manufacturers }}">{{ product.manufacturer }}</a>*/
/* 													</p>*/
/* 													{% endif %}*/
/* 													<div class="actions">*/
/* 														<div class="add-to-links">*/
/* 															<div class="cart">*/
/* 																<button type="button" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><span>{{ button_cart }}</span></button>*/
/* 															</div>*/
/* 															<div class="compare">*/
/* 																<button type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><span>{{ button_compare }}</span></button>*/
/* 															</div>*/
/* 															<div class="qv-button-container">*/
/* 																<button type="button" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><span>{{ button_quickview }}</span></button>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %} */
/* 					</div>*/
/*                     <div class="toolbar toolbar-products toolbar-bottom">*/
/*                         {% if use_layered %}*/
/*                             <div class="pages ajax_pagination">{{ ajax_pagination }}</div>*/
/*                         {% else %}*/
/*                             <div class="pages">{{ pagination }}</div>*/
/*                         {% endif %}*/
/*                         <div class="toolbar-amount"><span>{{ results }}</span></div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if not categories and not products %}*/
/*                     <p>{{ text_empty }}</p>*/
/*                     <div class="buttons">*/
/*                         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*             {{ content_bottom }}*/
/*         </div>*/
/*         {{ column_right }}*/
/*     </div>*/
/* </div></div>*/
/* {{ footer }} */
/* */
