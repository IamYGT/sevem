<?php

/* tt_origine4/template/extension/module/ocsearchcategory/ocsearchcategory.twig */
class __TwigTemplate_4a796e82d1a1bc4867bf03381d27735f234edc4fbe020f43a90fa560f9e88de9 extends Twig_Template
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
        echo "<div id=\"search-by-category\">
    <div class=\"search-container\">
        <div class=\"categories-container\">
            <div class=\"hover-cate\">
            <p><span class=\"cate-selected\" data-value=\"0\">";
        // line 5
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</span></p>
            <ul class=\"cate-items\">
                <li class=\"item-cate\" data-value=\"0\">";
        // line 7
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</li>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 9
            echo "                    ";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 10
                echo "                    <li data-value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" class=\"selected item-cate\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</li>
                    ";
            } else {
                // line 12
                echo "                    <li data-value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" class=\"item-cate\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</li>
                    ";
            }
            // line 14
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 15
                echo "                        ";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 16
                    echo "                        <li data-value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" class=\"selected item-cate f1\">";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</li>
                        ";
                } else {
                    // line 18
                    echo "                        <li data-value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" class=\"item-cate f1\">";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</li>
                        ";
                }
                // line 20
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 21
                    echo "                            ";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 22
                        echo "                            <li data-value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" class=\"selected item-cate f2\">";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</li>
                            ";
                    } else {
                        // line 24
                        echo "                            <li data-value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" class=\"item-cate f2\">";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</li>
                            ";
                    }
                    // line 26
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </ul>
            </div>
        </div>
\t\t<div class=\"search-box\">
\t\t\t<input type=\"text\" name=\"search\" id=\"text-search\" value=\"\" placeholder=\"";
        // line 33
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"\"  />
\t\t\t<div id=\"sp-btn-search\" class=\"\">
\t\t\t\t<button type=\"button\" id=\"btn-search-category\" class=\"btn btn-default btn-lg\"></button>
\t\t\t</div>
        </div>
    </div>
    <div class=\"search-ajax\">
        <div class=\"ajax-loader-container\" style=\"display: none;\">
            <img src=\"";
        // line 41
        echo (isset($context["ocsearchcategory_loader_img"]) ? $context["ocsearchcategory_loader_img"] : null);
        echo "\" class=\"ajax-load-img\" width=\"30\" height=\"30\" alt=\"plazathemes.com\" />
        </div>
        <div class=\"ajax-result-container\">
            <!-- Content of search results -->
        </div>
    </div>
    <input type=\"hidden\" id=\"ajax-search-enable\" value=\"";
        // line 47
        echo (isset($context["ocsearchcategory_ajax_enabled"]) ? $context["ocsearchcategory_ajax_enabled"] : null);
        echo "\" />
</div>

<script type=\"text/javascript\">
    \$(document).ready(function () {
        var flag = false;
        var ajax_search_enable = \$('#ajax-search-enable').val();
        
        var current_cate_value = \$('ul.cate-items li.selected').data('value');
        var current_cate_text = \$('ul.cate-items li.selected').html();
        
        \$('.cate-selected').attr('data-value', current_cate_value);
        \$('.cate-selected').html(current_cate_text);
        
        \$('.hover-cate p').click(function () {
            \$( \".cate-items\" ).toggle(\"slow\");
        });
        
        \$('.ajax-result-container').hover(
            function() {
                flag = true;
            },
            function() {
                flag = false;
            }
        );
        
        \$('.hover-cate').hover(
            function() {
                flag = true;
            },
            function() {
                flag = false;
            }
        );
        
        \$('#search-by-category').focusout(function() {
            if(flag == true) {
                \$('.ajax-result-container').show();
            } else {
                \$('.ajax-result-container').hide();
            }
        });
        
        \$('#search-by-category').focusin(function() {
            \$('.ajax-result-container').show();
        });

        \$('#btn-search-category').click(function () {
            var url = '";
        // line 96
        echo (isset($context["search_action"]) ? $context["search_action"] : null);
        echo "';
            var text_search = \$('#text-search').val();
            if(text_search) {
                url += '&search=' + encodeURIComponent(text_search);
            }

            var category_search = \$('.cate-selected').attr(\"data-value\");
            if(category_search) {
                url += '&category_id=' + encodeURIComponent(category_search);
            }

            location = url;
        });

        if(ajax_search_enable == '1') {
            \$('#text-search').keyup(function(e) {
                var text_search = \$(this).val();
                var cate_search = \$('.cate-selected').attr(\"data-value\");
                if(text_search != null && text_search != '') {
                    ajaxSearch(text_search, cate_search);
                } else {
                    \$('.ajax-result-container').html('');
                    \$('.ajax-loader-container').hide();
                }
            });

            \$('ul.cate-items li.item-cate').click(function() {
                var cate_search = \$(this).data('value');
                var text_search = \$('#text-search').val();
                \$('.cate-selected').attr('data-value', cate_search);
                \$('.cate-selected').html(\$(this).html());
                if(text_search != null && text_search != '') {
                    ajaxSearch(text_search, cate_search);
                } else {
                    \$('.ajax-result-container').html('');
                    \$('.ajax-loader-container').hide();
                }
                \$( \".cate-items\" ).hide();
                \$('#text-search').focus();
            });

        }
        
        function ajaxSearch(text_search, cate_search) {
            \$.ajax({
                url         : '";
        // line 141
        echo (isset($context["search_ajax_action"]) ? $context["search_ajax_action"] : null);
        echo "',
                type        : 'post',
                data        : { text_search : text_search, cate_search : cate_search },
                beforeSend  : function () {
                    \$('.ajax-loader-container').show();
                },
                success     : function(json) {
                    if(json['success'] == true) {
                        \$('.ajax-result-container').html(json['result_html']);
                        \$('.ajax-loader-container').hide();
                    }
                }
            });
        }

    });    
</script>";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/extension/module/ocsearchcategory/ocsearchcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 141,  201 => 96,  149 => 47,  140 => 41,  129 => 33,  123 => 29,  117 => 28,  111 => 27,  105 => 26,  97 => 24,  89 => 22,  86 => 21,  81 => 20,  73 => 18,  65 => 16,  62 => 15,  57 => 14,  49 => 12,  41 => 10,  38 => 9,  34 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <div id="search-by-category">*/
/*     <div class="search-container">*/
/*         <div class="categories-container">*/
/*             <div class="hover-cate">*/
/*             <p><span class="cate-selected" data-value="0">{{ text_category }}</span></p>*/
/*             <ul class="cate-items">*/
/*                 <li class="item-cate" data-value="0">{{ text_category }}</li>*/
/*                 {% for category_1 in categories %}*/
/*                     {% if category_1.category_id == category_id %}*/
/*                     <li data-value="{{ category_1.category_id }}" class="selected item-cate">{{ category_1.name }}</li>*/
/*                     {% else %}*/
/*                     <li data-value="{{ category_1.category_id }}" class="item-cate">{{ category_1.name }}</li>*/
/*                     {% endif %}*/
/*                     {% for category_2 in category_1.children %}*/
/*                         {% if category_2.category_id == category_id %}*/
/*                         <li data-value="{{ category_2.category_id }}" class="selected item-cate f1">{{ category_2.name }}</li>*/
/*                         {% else %}*/
/*                         <li data-value="{{ category_2.category_id }}" class="item-cate f1">{{ category_2.name }}</li>*/
/*                         {% endif %}*/
/*                         {% for category_3 in category_2.children %}*/
/*                             {% if category_3.category_id == category_id %}*/
/*                             <li data-value="{{ category_3.category_id }}" class="selected item-cate f2">{{ category_3.name }}</li>*/
/*                             {% else %}*/
/*                             <li data-value="{{ category_3.category_id }}" class="item-cate f2">{{ category_3.name }}</li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             </div>*/
/*         </div>*/
/* 		<div class="search-box">*/
/* 			<input type="text" name="search" id="text-search" value="" placeholder="{{ text_search }}" class=""  />*/
/* 			<div id="sp-btn-search" class="">*/
/* 				<button type="button" id="btn-search-category" class="btn btn-default btn-lg"></button>*/
/* 			</div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="search-ajax">*/
/*         <div class="ajax-loader-container" style="display: none;">*/
/*             <img src="{{ ocsearchcategory_loader_img }}" class="ajax-load-img" width="30" height="30" alt="plazathemes.com" />*/
/*         </div>*/
/*         <div class="ajax-result-container">*/
/*             <!-- Content of search results -->*/
/*         </div>*/
/*     </div>*/
/*     <input type="hidden" id="ajax-search-enable" value="{{ ocsearchcategory_ajax_enabled }}" />*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     $(document).ready(function () {*/
/*         var flag = false;*/
/*         var ajax_search_enable = $('#ajax-search-enable').val();*/
/*         */
/*         var current_cate_value = $('ul.cate-items li.selected').data('value');*/
/*         var current_cate_text = $('ul.cate-items li.selected').html();*/
/*         */
/*         $('.cate-selected').attr('data-value', current_cate_value);*/
/*         $('.cate-selected').html(current_cate_text);*/
/*         */
/*         $('.hover-cate p').click(function () {*/
/*             $( ".cate-items" ).toggle("slow");*/
/*         });*/
/*         */
/*         $('.ajax-result-container').hover(*/
/*             function() {*/
/*                 flag = true;*/
/*             },*/
/*             function() {*/
/*                 flag = false;*/
/*             }*/
/*         );*/
/*         */
/*         $('.hover-cate').hover(*/
/*             function() {*/
/*                 flag = true;*/
/*             },*/
/*             function() {*/
/*                 flag = false;*/
/*             }*/
/*         );*/
/*         */
/*         $('#search-by-category').focusout(function() {*/
/*             if(flag == true) {*/
/*                 $('.ajax-result-container').show();*/
/*             } else {*/
/*                 $('.ajax-result-container').hide();*/
/*             }*/
/*         });*/
/*         */
/*         $('#search-by-category').focusin(function() {*/
/*             $('.ajax-result-container').show();*/
/*         });*/
/* */
/*         $('#btn-search-category').click(function () {*/
/*             var url = '{{ search_action }}';*/
/*             var text_search = $('#text-search').val();*/
/*             if(text_search) {*/
/*                 url += '&search=' + encodeURIComponent(text_search);*/
/*             }*/
/* */
/*             var category_search = $('.cate-selected').attr("data-value");*/
/*             if(category_search) {*/
/*                 url += '&category_id=' + encodeURIComponent(category_search);*/
/*             }*/
/* */
/*             location = url;*/
/*         });*/
/* */
/*         if(ajax_search_enable == '1') {*/
/*             $('#text-search').keyup(function(e) {*/
/*                 var text_search = $(this).val();*/
/*                 var cate_search = $('.cate-selected').attr("data-value");*/
/*                 if(text_search != null && text_search != '') {*/
/*                     ajaxSearch(text_search, cate_search);*/
/*                 } else {*/
/*                     $('.ajax-result-container').html('');*/
/*                     $('.ajax-loader-container').hide();*/
/*                 }*/
/*             });*/
/* */
/*             $('ul.cate-items li.item-cate').click(function() {*/
/*                 var cate_search = $(this).data('value');*/
/*                 var text_search = $('#text-search').val();*/
/*                 $('.cate-selected').attr('data-value', cate_search);*/
/*                 $('.cate-selected').html($(this).html());*/
/*                 if(text_search != null && text_search != '') {*/
/*                     ajaxSearch(text_search, cate_search);*/
/*                 } else {*/
/*                     $('.ajax-result-container').html('');*/
/*                     $('.ajax-loader-container').hide();*/
/*                 }*/
/*                 $( ".cate-items" ).hide();*/
/*                 $('#text-search').focus();*/
/*             });*/
/* */
/*         }*/
/*         */
/*         function ajaxSearch(text_search, cate_search) {*/
/*             $.ajax({*/
/*                 url         : '{{ search_ajax_action }}',*/
/*                 type        : 'post',*/
/*                 data        : { text_search : text_search, cate_search : cate_search },*/
/*                 beforeSend  : function () {*/
/*                     $('.ajax-loader-container').show();*/
/*                 },*/
/*                 success     : function(json) {*/
/*                     if(json['success'] == true) {*/
/*                         $('.ajax-result-container').html(json['result_html']);*/
/*                         $('.ajax-loader-container').hide();*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*     });    */
/* </script>*/
