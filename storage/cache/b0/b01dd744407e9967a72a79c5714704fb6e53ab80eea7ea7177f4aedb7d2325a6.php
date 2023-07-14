<?php

/* tt_origine4/template/product/search.twig */
class __TwigTemplate_95cfe8179819f9bf727e18690337193936057a8e66c97eeb4f15c51cc7c5a175 extends Twig_Template
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
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <label class=\"control-label\" for=\"input-search\">";
        // line 18
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 21
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-3\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 25
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 27
            echo "            ";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 28
                echo "            <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
            ";
            } else {
                // line 30
                echo "            <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
            ";
            }
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 33
                echo "            ";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 34
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
            ";
                } else {
                    // line 36
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
            ";
                }
                // line 38
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 39
                    echo "            ";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 40
                        echo "            <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
            ";
                    } else {
                        // line 42
                        echo "            <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
            ";
                    }
                    // line 44
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>
        <div class=\"col-sm-3\">
          <label class=\"checkbox-inline\">
            ";
        // line 51
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 52
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 54
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 56
        echo "            ";
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "</label>
        </div>
      </div>
      <p>
        <label class=\"checkbox-inline\">
          ";
        // line 61
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 62
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 64
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 66
        echo "          ";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
      </p>
      <input type=\"button\" value=\"";
        // line 68
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
      <h2>";
        // line 69
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</h2>
      ";
        // line 70
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 71
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
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 80
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo ((isset($context["text_sort"]) ? $context["text_sort"] : null) . $this->getAttribute($context["sorts"], "text", array()));
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo ((isset($context["text_sort"]) ? $context["text_sort"] : null) . $this->getAttribute($context["sorts"], "text", array()));
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t\t\t\t\t\t</select>
                    </div>
                    <div class=\"limiter toolbar2\">
                        <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 91
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo ((isset($context["text_limit"]) ? $context["text_limit"] : null) . $this->getAttribute($context["limits"], "text", array()));
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo ((isset($context["text_limit"]) ? $context["text_limit"] : null) . $this->getAttribute($context["limits"], "text", array()));
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t\t\t\t</select>
                    </div>
\t\t\t\t</div>
                <div class=\"custom-products\">
                    ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 102
                echo "                    <div class=\"product-layout product-list col-xs-12\">
                        <div class=\"product-thumb\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t";
                // line 106
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo $this->getAttribute($context["product"], "text_percent", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "is_new", array())) {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                    echo (isset($context["text_label_new"]) ? $context["text_label_new"] : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 113
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t";
                // line 114
                if ($this->getAttribute($context["product"], "rotator_image", array())) {
                    echo "<img class=\"img-r\" src=\"";
                    echo $this->getAttribute($context["product"], "rotator_image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\" />";
                }
                // line 115
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"image-icons\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 118
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><span>";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 121
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><span>";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 124
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
                // line 130
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 132
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 133
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 135
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span><span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 138
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 142
                echo "\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t";
                // line 143
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 146
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 147
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) == $context["i"])) {
                            // line 148
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 149
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo (isset($context["class_r"]) ? $context["class_r"] : null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 151
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 154
                echo "                \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<p class=\"product-des\">";
                // line 155
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"right-caption\">
\t\t\t\t\t\t\t\t\t\t<p class=\"model\">";
                // line 158
                echo $this->getAttribute($context["product"], "model", array());
                echo "</p>
\t\t\t\t\t\t\t\t\t\t";
                // line 159
                if ($this->getAttribute($context["product"], "manufacturer", array())) {
                    // line 160
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product ";
                    if (((isset($context["image_effect"]) ? $context["image_effect"] : null) == "swatches")) {
                        if ($this->getAttribute($context["product"], "options", array())) {
                            echo "hide-hover";
                        }
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 161
                    echo ((isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null) . ": ");
                    echo "</span><a href=\"";
                    echo $this->getAttribute($context["product"], "manufacturers", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "manufacturer", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 167
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
                // line 170
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><span>";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 173
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
            // line 183
            echo "                </div>
                <div class=\"row toolbar toolbar-products toolbar-bottom\">
                    <div class=\"col-sm-6\">";
            // line 185
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
                    <div class=\"col-sm-6 text-right\">";
            // line 186
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
                </div>
                ";
        } else {
            // line 188
            echo "                
\t\t\t\t  <p>";
            // line 189
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t  
\t\t\t\t  ";
        }
        // line 192
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 193
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 242
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 242,  594 => 193,  589 => 192,  583 => 189,  580 => 188,  574 => 186,  570 => 185,  566 => 183,  546 => 173,  536 => 170,  524 => 167,  519 => 164,  509 => 161,  500 => 160,  498 => 159,  494 => 158,  488 => 155,  485 => 154,  480 => 152,  474 => 151,  468 => 149,  465 => 148,  462 => 147,  458 => 146,  454 => 144,  452 => 143,  445 => 142,  441 => 140,  433 => 138,  430 => 137,  422 => 135,  416 => 133,  414 => 132,  411 => 131,  409 => 130,  396 => 124,  386 => 121,  376 => 118,  371 => 115,  361 => 114,  353 => 113,  348 => 112,  342 => 110,  339 => 109,  333 => 107,  331 => 106,  325 => 102,  321 => 101,  315 => 97,  309 => 96,  301 => 94,  293 => 92,  290 => 91,  286 => 90,  280 => 86,  274 => 85,  266 => 83,  258 => 81,  255 => 80,  251 => 79,  237 => 71,  235 => 70,  231 => 69,  227 => 68,  221 => 66,  217 => 64,  213 => 62,  211 => 61,  202 => 56,  198 => 54,  194 => 52,  192 => 51,  186 => 47,  180 => 46,  174 => 45,  168 => 44,  160 => 42,  152 => 40,  149 => 39,  144 => 38,  136 => 36,  128 => 34,  125 => 33,  120 => 32,  112 => 30,  104 => 28,  101 => 27,  97 => 26,  93 => 25,  84 => 21,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
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
/*       <h1>{{ heading_title }}</h1>*/
/*       <label class="control-label" for="input-search">{{ entry_search }}</label>*/
/*       <div class="row">*/
/*         <div class="col-sm-4">*/
/*           <input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control" />*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*           <select name="category_id" class="form-control">*/
/*             <option value="0">{{ text_category }}</option>*/
/*             {% for category_1 in categories %}*/
/*             {% if category_1.category_id == category_id %}*/
/*             <option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/*             {% endif %}*/
/*             {% for category_2 in category_1.children %}*/
/*             {% if category_2.category_id == category_id %}*/
/*             <option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*             {% endif %}*/
/*             {% for category_3 in category_2.children %}*/
/*             {% if category_3.category_id == category_id %}*/
/*             <option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endfor %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*           <label class="checkbox-inline">*/
/*             {% if sub_category %}*/
/*             <input type="checkbox" name="sub_category" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="sub_category" value="1" />*/
/*             {% endif %}*/
/*             {{ text_sub_category }}</label>*/
/*         </div>*/
/*       </div>*/
/*       <p>*/
/*         <label class="checkbox-inline">*/
/*           {% if description %}*/
/*           <input type="checkbox" name="description" value="1" id="description" checked="checked" />*/
/*           {% else %}*/
/*           <input type="checkbox" name="description" value="1" id="description" />*/
/*           {% endif %}*/
/*           {{ entry_description }}</label>*/
/*       </p>*/
/*       <input type="button" value="{{ button_search }}" id="button-search" class="btn btn-primary" />*/
/*       <h2>{{ text_search }}</h2>*/
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
/* 										{% endif %}                								*/
/* 										<p class="product-des">{{ product.description }}</p>*/
/* 									</div>*/
/* 									<div class="right-caption">*/
/* 										<p class="model">{{ product.model }}</p>*/
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
/* 				  */
/* 				  {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-search').bind('click', function() {*/
/* 	url = 'index.php?route=product/search';*/
/* */
/* 	var search = $('#content input[name=\'search\']').prop('value');*/
/* */
/* 	if (search) {*/
/* 		url += '&search=' + encodeURIComponent(search);*/
/* 	}*/
/* */
/* 	var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* */
/* 	if (category_id > 0) {*/
/* 		url += '&category_id=' + encodeURIComponent(category_id);*/
/* 	}*/
/* */
/* 	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* */
/* 	if (sub_category) {*/
/* 		url += '&sub_category=true';*/
/* 	}*/
/* */
/* 	var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* */
/* 	if (filter_description) {*/
/* 		url += '&description=true';*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('#content input[name=\'search\']').bind('keydown', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').on('change', function() {*/
/* 	if (this.value == '0') {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', true);*/
/* 	} else {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', false);*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').trigger('change');*/
/* --></script>*/
/* {{ footer }}*/
