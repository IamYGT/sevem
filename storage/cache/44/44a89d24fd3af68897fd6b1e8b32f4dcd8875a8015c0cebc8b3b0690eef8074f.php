<?php

/* tt_origine4/template/product/ocfilter/filter_ajax.twig */
class __TwigTemplate_0becaa8a76d4269d3980ce80bda5dbfd0e510a21f4ac7bd21f8128e1efaa0ada extends Twig_Template
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
        echo "<div class=\"list-group\">
    <div class=\"filter-attribute-container filter-attribute-remove-container\">
        ";
        // line 3
        $context["is_filter"] = false;
        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 5
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["filter_group"], "filter", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 6
                echo "                ";
                $context["filter_id"] = $this->getAttribute($context["filter"], "filter_id", array());
                // line 7
                echo "                ";
                if (twig_in_filter($this->getAttribute($context["filter"], "filter_id", array()), (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                    // line 8
                    echo "                    ";
                    $context["is_filter"] = true;
                    // line 9
                    echo "                    <div class=\"list-group-item filter-act-name\">
                        <p>";
                    // line 10
                    echo $this->getAttribute($context["filter"], "e_name", array());
                    echo "</p>
                        <a class=\"a-filter remove-filter\" href=\"javascript:void(0);\" name=\"";
                    // line 11
                    echo (isset($context["filter_id"]) ? $context["filter_id"] : null);
                    echo "\"><span><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i></span></a>
                    </div>
                ";
                }
                // line 14
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        ";
        if ((isset($context["is_filter"]) ? $context["is_filter"] : null)) {
            // line 17
            echo "            <div class=\"list-group-item filter-clear-all\">
                <a class=\"clear-filter\" href=\"javascript:void(0);\" onclick=\"ocfilter.filter('";
            // line 18
            echo (isset($context["clear_action"]) ? $context["clear_action"] : null);
            echo "')\">Clear all</a>
            </div>
        ";
        }
        // line 21
        echo "    </div>
    <div class=\"filter-attribute-container filter-price\">
        <label>Fiyat</label>
        <div class=\"list-group-item\">
            <div class=\"filter-price\">
                <div id=\"slider-price\"></div>
                <div class=\"slider-values\">
                    <span>";
        // line 28
        echo (isset($context["currency_symbol_left"]) ? $context["currency_symbol_left"] : null);
        echo "</span>
                    <input id=\"price-from\" disabled=\"disabled\" class=\"input-price\" type=\"text\" value=\"";
        // line 29
        echo (isset($context["current_min_price"]) ? $context["current_min_price"] : null);
        echo "\" placeholder=\"Min\" name=\"price-from\"/>
                    <span>";
        // line 30
        echo (isset($context["currency_symbol_right"]) ? $context["currency_symbol_right"] : null);
        echo "</span> -
                    <span>";
        // line 31
        echo (isset($context["currency_symbol_left"]) ? $context["currency_symbol_left"] : null);
        echo "</span>
                    <input id=\"price-to\" disabled=\"disabled\" class=\"input-price\" type=\"text\" value=\"";
        // line 32
        echo (isset($context["current_max_price"]) ? $context["current_max_price"] : null);
        echo "\" placeholder=\"Max\" name=\"price-to\" />
                    <span>";
        // line 33
        echo (isset($context["currency_symbol_right"]) ? $context["currency_symbol_right"] : null);
        echo "</span>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 39
            echo "        <div class=\"filter-attribute-container filter-";
            echo twig_lower_filter($this->env, $this->getAttribute($context["filter_group"], "name", array()));
            echo "\">
            <label>";
            // line 40
            echo $this->getAttribute($context["filter_group"], "name", array());
            echo "</label>
            <div class=\"list-group-item\">
                <div id=\"filter-group";
            // line 42
            echo $this->getAttribute($context["filter_group"], "filter_group_id", array());
            echo "\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["filter_group"], "filter", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 44
                echo "                        ";
                $context["filter_id"] = $this->getAttribute($context["filter"], "filter_id", array());
                // line 45
                echo "                        ";
                if (twig_in_filter($this->getAttribute($context["filter"], "filter_id", array()), (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                    // line 46
                    echo "                            <!-- Not show filter attribute -->
                        ";
                } else {
                    // line 48
                    echo "                            <a class=\"a-filter add-filter\" href=\"javascript:void(0);\" name=\"";
                    echo (isset($context["filter_id"]) ? $context["filter_id"] : null);
                    echo "\">";
                    echo $this->getAttribute($context["filter"], "name", array());
                    echo "</a>
                        ";
                }
                // line 50
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/product/ocfilter/filter_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 55,  164 => 51,  158 => 50,  150 => 48,  146 => 46,  143 => 45,  140 => 44,  136 => 43,  132 => 42,  127 => 40,  122 => 39,  118 => 38,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  81 => 21,  75 => 18,  72 => 17,  69 => 16,  63 => 15,  57 => 14,  51 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  30 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="list-group">*/
/*     <div class="filter-attribute-container filter-attribute-remove-container">*/
/*         {% set is_filter = false %}*/
/*         {% for filter_group in filter_groups %}*/
/*             {% for filter in filter_group.filter %}*/
/*                 {% set filter_id = filter.filter_id %}*/
/*                 {% if filter.filter_id in filter_category %}*/
/*                     {% set is_filter = true %}*/
/*                     <div class="list-group-item filter-act-name">*/
/*                         <p>{{ filter.e_name }}</p>*/
/*                         <a class="a-filter remove-filter" href="javascript:void(0);" name="{{ filter_id }}"><span><i class="fa fa-times-circle" aria-hidden="true"></i></span></a>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*         {% if is_filter %}*/
/*             <div class="list-group-item filter-clear-all">*/
/*                 <a class="clear-filter" href="javascript:void(0);" onclick="ocfilter.filter('{{ clear_action }}')">Clear all</a>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     <div class="filter-attribute-container filter-price">*/
/*         <label>Fiyat</label>*/
/*         <div class="list-group-item">*/
/*             <div class="filter-price">*/
/*                 <div id="slider-price"></div>*/
/*                 <div class="slider-values">*/
/*                     <span>{{ currency_symbol_left }}</span>*/
/*                     <input id="price-from" disabled="disabled" class="input-price" type="text" value="{{ current_min_price }}" placeholder="Min" name="price-from"/>*/
/*                     <span>{{ currency_symbol_right }}</span> -*/
/*                     <span>{{ currency_symbol_left }}</span>*/
/*                     <input id="price-to" disabled="disabled" class="input-price" type="text" value="{{ current_max_price }}" placeholder="Max" name="price-to" />*/
/*                     <span>{{ currency_symbol_right }}</span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% for filter_group in filter_groups %}*/
/*         <div class="filter-attribute-container filter-{{ filter_group.name|lower }}">*/
/*             <label>{{ filter_group.name }}</label>*/
/*             <div class="list-group-item">*/
/*                 <div id="filter-group{{ filter_group.filter_group_id }}">*/
/*                     {% for filter in filter_group.filter %}*/
/*                         {% set filter_id = filter.filter_id %}*/
/*                         {% if filter.filter_id in filter_category %}*/
/*                             <!-- Not show filter attribute -->*/
/*                         {% else %}*/
/*                             <a class="a-filter add-filter" href="javascript:void(0);" name="{{ filter_id }}">{{ filter.name }}</a>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
