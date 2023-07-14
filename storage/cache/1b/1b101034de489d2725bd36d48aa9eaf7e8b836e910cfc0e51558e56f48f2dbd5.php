<?php

/* tt_origine4/template/product/ocfilter/filter.twig */
class __TwigTemplate_c0fc57fb3b9a899e7e41890ca481be593974c628fe0d8d3a6a482d9d11ac12de extends Twig_Template
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
        echo "<div class=\"layernavigation-module\">\t
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading layered-heading\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
\t\t<div class=\"layered\">
\t\t\t<div class=\"list-group\">
\t\t\t\t<div class=\"filter-attribute-container filter-attribute-remove-container\">
\t\t\t\t\t";
        // line 7
        $context["is_filter"] = false;
        // line 8
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 9
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["filter_group"], "filter", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 10
                echo "\t\t\t\t\t\t\t";
                $context["filter_id"] = $this->getAttribute($context["filter"], "filter_id", array());
                // line 11
                echo "\t\t\t\t\t\t\t";
                if (twig_in_filter($this->getAttribute($context["filter"], "filter_id", array()), (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                    // line 12
                    echo "\t\t\t\t\t\t\t\t";
                    $context["is_filter"] = true;
                    // line 13
                    echo "\t\t\t\t\t\t\t\t<div class=\"list-group-item filter-act-name\">
\t\t\t\t\t\t\t\t\t<p>";
                    // line 14
                    echo $this->getAttribute($context["filter"], "e_name", array());
                    echo "</p>
\t\t\t\t\t\t\t\t\t<a class=\"a-filter remove-filter\" href=\"javascript:void(0);\" name=\"";
                    // line 15
                    echo (isset($context["filter_id"]) ? $context["filter_id"] : null);
                    echo "\"><span><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i></span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t\t";
        if ((isset($context["is_filter"]) ? $context["is_filter"] : null)) {
            // line 21
            echo "\t\t\t\t\t\t<div class=\"list-group-item filter-clear-all\">
\t\t\t\t\t\t\t<a class=\"clear-filter\" href=\"javascript:void(0);\" onclick=\"ocfilter.filter('";
            // line 22
            echo (isset($context["clear_action"]) ? $context["clear_action"] : null);
            echo "')\">Clear all</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"filter-attribute-container filter-price\">
\t\t\t\t\t<label>Fiyat</label>
\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t<div class=\"filter-price\">
\t\t\t\t\t\t\t<div id=\"slider-price\"></div>
\t\t\t\t\t\t\t<div class=\"slider-values\">
\t\t\t\t\t\t\t\t<span>";
        // line 32
        echo (isset($context["currency_symbol_left"]) ? $context["currency_symbol_left"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t<input id=\"price-from\" disabled=\"disabled\" class=\"input-price\" type=\"text\" value=\"";
        // line 33
        echo (isset($context["min_price"]) ? $context["min_price"] : null);
        echo "\" placeholder=\"Min\" name=\"price-from\"/>
\t\t\t\t\t\t\t\t<span>";
        // line 34
        echo (isset($context["currency_symbol_right"]) ? $context["currency_symbol_right"] : null);
        echo "</span><em>-</em>
\t\t\t\t\t\t\t\t<span>";
        // line 35
        echo (isset($context["currency_symbol_left"]) ? $context["currency_symbol_left"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t<input id=\"price-to\" disabled=\"disabled\" class=\"input-price\" type=\"text\" value=\"";
        // line 36
        echo (isset($context["max_price"]) ? $context["max_price"] : null);
        echo "\" placeholder=\"Max\" name=\"price-to\" />
\t\t\t\t\t\t\t\t<span>";
        // line 37
        echo (isset($context["currency_symbol_right"]) ? $context["currency_symbol_right"] : null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 43
            echo "\t\t\t\t\t<div class=\"filter-attribute-container filter-";
            echo twig_lower_filter($this->env, $this->getAttribute($context["filter_group"], "name", array()));
            echo "\">
\t\t\t\t\t\t<label>";
            // line 44
            echo $this->getAttribute($context["filter_group"], "name", array());
            echo "</label>
\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t<div id=\"filter-group";
            // line 46
            echo $this->getAttribute($context["filter_group"], "filter_group_id", array());
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["filter_group"], "filter", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t";
                $context["filter_id"] = $this->getAttribute($context["filter"], "filter_id", array());
                // line 49
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter($this->getAttribute($context["filter"], "filter_id", array()), (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t\t<!-- Not show filter attribute -->
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"a-filter add-filter\" href=\"javascript:void(0);\" name=\"";
                    echo (isset($context["filter_id"]) ? $context["filter_id"] : null);
                    echo "\">";
                    echo $this->getAttribute($context["filter"], "name", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" class=\"filter-url\" value=\"";
        // line 61
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" />
\t\t<input type=\"hidden\" class=\"price-url\" value=\"";
        // line 62
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" />
\t</div>
</div>
<script type=\"text/javascript\">
    var filter_url = '';
    var ids = [];
    var min_price = parseFloat('";
        // line 68
        echo (isset($context["min_price"]) ? $context["min_price"] : null);
        echo "');
    var max_price = parseFloat('";
        // line 69
        echo (isset($context["max_price"]) ? $context["max_price"] : null);
        echo "');
    var current_min_price = parseFloat(\$('#price-from').val());
    var current_max_price = parseFloat(\$('#price-to').val());

    \$('#slider-price').slider({
        range   : true,
        min     : min_price,
        max     : max_price,
        values  : [ current_min_price, current_max_price ],
        slide   : function (event, ui) {
            \$('#price-from').val(ui.values[0]);
            \$('#price-to').val(ui.values[1]);
            current_min_price = ui.values[0];
            current_max_price = ui.values[1];
        },
        stop    : function (event, ui) {
            filter_url = \$('.price-url').val();
            filter_url += '&price=' + current_min_price + ',' + current_max_price;
            ocfilter.filter(filter_url);
        }
    });

    \$('.a-filter').click(function () {
        var id = \$(this).attr('name');
        var filter_ids;
        filter_url = \$('.filter-url').val();
        if(\$(this).hasClass('add-filter') == true) {
            ids.push(id);
        } else if(\$(this).hasClass('remove-filter') == true) {
            ids = \$.grep(ids, function (value) {
                return value != id;
            });
        }
        filter_ids = ids.join(',');
        filter_url += '&filter=' + filter_ids;
        ocfilter.filter(filter_url);
    });

    \$('.clear-filter').click(function () {
        ids = [];
    });

    \$(document).ajaxComplete(function () {
        var current_min_price = parseFloat(\$('#price-from').val());
        var current_max_price = parseFloat(\$('#price-to').val());

        \$('#slider-price').slider({
            range   : true,
            min     : min_price,
            max     : max_price,
            values  : [ current_min_price, current_max_price ],
            slide   : function (event, ui) {
                \$('#price-from').val(ui.values[0]);
                \$('#price-to').val(ui.values[1]);
                current_min_price = ui.values[0];
                current_max_price = ui.values[1];
            },
            stop    : function (event, ui) {
                filter_url = \$('.price-url').val();
                filter_url += '&price=' + current_min_price + ',' + current_max_price;
                ocfilter.filter(filter_url);
            }
        });

        \$('.a-filter').click(function () {
            var id = \$(this).attr('name');
            var filter_ids = '';
            filter_url = \$('.filter-url').val();

            if(\$(this).hasClass('add-filter') == true) {
                ids.push(id);
            } else if(\$(this).hasClass('remove-filter') == true) {
                ids = \$.grep(ids, function (value) {
                    return value != id;
                });
            }
            filter_ids = ids.join(',');
            filter_url += '&filter=' + filter_ids;
            ocfilter.filter(filter_url);
        });

        \$('.clear-filter').click(function () {
            ids = [];
        });
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/product/ocfilter/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 69,  197 => 68,  188 => 62,  184 => 61,  180 => 59,  171 => 55,  165 => 54,  157 => 52,  153 => 50,  150 => 49,  147 => 48,  143 => 47,  139 => 46,  134 => 44,  129 => 43,  125 => 42,  117 => 37,  113 => 36,  109 => 35,  105 => 34,  101 => 33,  97 => 32,  88 => 25,  82 => 22,  79 => 21,  76 => 20,  70 => 19,  64 => 18,  58 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  37 => 9,  32 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="layernavigation-module">	*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading layered-heading">{{ heading_title }}</div>*/
/* 		<div class="layered">*/
/* 			<div class="list-group">*/
/* 				<div class="filter-attribute-container filter-attribute-remove-container">*/
/* 					{% set is_filter = false %}*/
/* 					{% for filter_group in filter_groups %}*/
/* 						{% for filter in filter_group.filter %}*/
/* 							{% set filter_id = filter.filter_id %}*/
/* 							{% if filter.filter_id in filter_category %}*/
/* 								{% set is_filter = true %}*/
/* 								<div class="list-group-item filter-act-name">*/
/* 									<p>{{ filter.e_name }}</p>*/
/* 									<a class="a-filter remove-filter" href="javascript:void(0);" name="{{ filter_id }}"><span><i class="fa fa-times-circle" aria-hidden="true"></i></span></a>*/
/* 								</div>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					{% endfor %}*/
/* 					{% if is_filter %}*/
/* 						<div class="list-group-item filter-clear-all">*/
/* 							<a class="clear-filter" href="javascript:void(0);" onclick="ocfilter.filter('{{ clear_action }}')">Clear all</a>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<div class="filter-attribute-container filter-price">*/
/* 					<label>Fiyat</label>*/
/* 					<div class="list-group-item">*/
/* 						<div class="filter-price">*/
/* 							<div id="slider-price"></div>*/
/* 							<div class="slider-values">*/
/* 								<span>{{ currency_symbol_left }}</span>*/
/* 								<input id="price-from" disabled="disabled" class="input-price" type="text" value="{{ min_price }}" placeholder="Min" name="price-from"/>*/
/* 								<span>{{ currency_symbol_right }}</span><em>-</em>*/
/* 								<span>{{ currency_symbol_left }}</span>*/
/* 								<input id="price-to" disabled="disabled" class="input-price" type="text" value="{{ max_price }}" placeholder="Max" name="price-to" />*/
/* 								<span>{{ currency_symbol_right }}</span>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% for filter_group in filter_groups %}*/
/* 					<div class="filter-attribute-container filter-{{ filter_group.name|lower }}">*/
/* 						<label>{{ filter_group.name }}</label>*/
/* 						<div class="list-group-item">*/
/* 							<div id="filter-group{{ filter_group.filter_group_id }}">*/
/* 								{% for filter in filter_group.filter %}*/
/* 									{% set filter_id = filter.filter_id %}*/
/* 									{% if filter.filter_id in filter_category %}*/
/* 										<!-- Not show filter attribute -->*/
/* 									{% else %}*/
/* 										<a class="a-filter add-filter" href="javascript:void(0);" name="{{ filter_id }}">{{ filter.name }}</a>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<input type="hidden" class="filter-url" value="{{ action }}" />*/
/* 		<input type="hidden" class="price-url" value="{{ action }}" />*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/*     var filter_url = '';*/
/*     var ids = [];*/
/*     var min_price = parseFloat('{{ min_price }}');*/
/*     var max_price = parseFloat('{{ max_price }}');*/
/*     var current_min_price = parseFloat($('#price-from').val());*/
/*     var current_max_price = parseFloat($('#price-to').val());*/
/* */
/*     $('#slider-price').slider({*/
/*         range   : true,*/
/*         min     : min_price,*/
/*         max     : max_price,*/
/*         values  : [ current_min_price, current_max_price ],*/
/*         slide   : function (event, ui) {*/
/*             $('#price-from').val(ui.values[0]);*/
/*             $('#price-to').val(ui.values[1]);*/
/*             current_min_price = ui.values[0];*/
/*             current_max_price = ui.values[1];*/
/*         },*/
/*         stop    : function (event, ui) {*/
/*             filter_url = $('.price-url').val();*/
/*             filter_url += '&price=' + current_min_price + ',' + current_max_price;*/
/*             ocfilter.filter(filter_url);*/
/*         }*/
/*     });*/
/* */
/*     $('.a-filter').click(function () {*/
/*         var id = $(this).attr('name');*/
/*         var filter_ids;*/
/*         filter_url = $('.filter-url').val();*/
/*         if($(this).hasClass('add-filter') == true) {*/
/*             ids.push(id);*/
/*         } else if($(this).hasClass('remove-filter') == true) {*/
/*             ids = $.grep(ids, function (value) {*/
/*                 return value != id;*/
/*             });*/
/*         }*/
/*         filter_ids = ids.join(',');*/
/*         filter_url += '&filter=' + filter_ids;*/
/*         ocfilter.filter(filter_url);*/
/*     });*/
/* */
/*     $('.clear-filter').click(function () {*/
/*         ids = [];*/
/*     });*/
/* */
/*     $(document).ajaxComplete(function () {*/
/*         var current_min_price = parseFloat($('#price-from').val());*/
/*         var current_max_price = parseFloat($('#price-to').val());*/
/* */
/*         $('#slider-price').slider({*/
/*             range   : true,*/
/*             min     : min_price,*/
/*             max     : max_price,*/
/*             values  : [ current_min_price, current_max_price ],*/
/*             slide   : function (event, ui) {*/
/*                 $('#price-from').val(ui.values[0]);*/
/*                 $('#price-to').val(ui.values[1]);*/
/*                 current_min_price = ui.values[0];*/
/*                 current_max_price = ui.values[1];*/
/*             },*/
/*             stop    : function (event, ui) {*/
/*                 filter_url = $('.price-url').val();*/
/*                 filter_url += '&price=' + current_min_price + ',' + current_max_price;*/
/*                 ocfilter.filter(filter_url);*/
/*             }*/
/*         });*/
/* */
/*         $('.a-filter').click(function () {*/
/*             var id = $(this).attr('name');*/
/*             var filter_ids = '';*/
/*             filter_url = $('.filter-url').val();*/
/* */
/*             if($(this).hasClass('add-filter') == true) {*/
/*                 ids.push(id);*/
/*             } else if($(this).hasClass('remove-filter') == true) {*/
/*                 ids = $.grep(ids, function (value) {*/
/*                     return value != id;*/
/*                 });*/
/*             }*/
/*             filter_ids = ids.join(',');*/
/*             filter_url += '&filter=' + filter_ids;*/
/*             ocfilter.filter(filter_url);*/
/*         });*/
/* */
/*         $('.clear-filter').click(function () {*/
/*             ids = [];*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* */
