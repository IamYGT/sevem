<?php

/* tt_origine4/template/extension/module/ocfeaturedcategory.twig */
class __TwigTemplate_06c4593b4fd331c888a8ea9f626acda6859aa2c9eedf84586e4f4383af96465f extends Twig_Template
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
        echo "<div class=\"featured-categories-container module-nav2\">
\t<div class=\"featured-categories-slider module-title\"><h2>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2></div>
\t<div class=\"row\">
\t\t";
        // line 4
        list($context["count"], $context["rows"]) =         array(0, $this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "f_rows", array()));
        // line 5
        echo "\t\t";
        if ( !(isset($context["rows"]) ? $context["rows"] : null)) {
            // line 6
            echo "\t\t\t";
            $context["rows"] = 1;
            // line 7
            echo "\t\t";
        }
        // line 8
        echo "\t\t<div class=\"owl-featured-categories owl-carousel owl-theme\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "\t\t\t\t";
            if ((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0)) {
                // line 11
                echo "\t\t\t\t<div class=\"row_items\">
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t\t<div class=\"fcategory-content\">
\t\t\t\t\t\t<div class=\"image-fcategory\">
\t\t\t\t\t\t\t<a class=\"homethumb-image\" href=\"";
            // line 15
            echo $this->getAttribute($context["category"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["category"], "homethumb_image", array());
            echo "\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content-thumb\">
\t\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t\t<h2 class=\"name\"><a href=\"";
            // line 19
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</a></h2>
\t\t\t\t\t\t\t\t<p class=\"total-items\">";
            // line 20
            echo $this->getAttribute($context["category"], "product_total", array());
            echo "<span>";
            echo (isset($context["text_products"]) ? $context["text_products"] : null);
            echo "</span></p>
\t\t\t\t\t\t\t\t";
            // line 21
            if ($this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "show_description", array())) {
                // line 22
                echo "\t\t\t\t\t\t\t\t\t<p class=\"dec\">";
                echo $this->getAttribute($context["category"], "description", array());
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "show_sub_category", array())) {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t";
                $context["number_sub"] = $this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "number_sub", array());
                // line 26
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 27
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["sub_count"] = 0;
                    // line 28
                    echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-featured-categories\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subcate"]) {
                        // line 30
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (((isset($context["sub_count"]) ? $context["sub_count"] : null) < (isset($context["number_sub"]) ? $context["number_sub"] : null))) {
                            // line 31
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                            echo $this->getAttribute($context["subcate"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["subcate"], "name", array());
                            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sub_count"] = ((isset($context["sub_count"]) ? $context["sub_count"] : null) + 1);
                        // line 34
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcate'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->getAttribute($context["category"], "href", array());
            echo "\" class=\"view-more\">";
            echo (isset($context["view_more"]) ? $context["view_more"] : null);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 42
            $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
            // line 43
            echo "\t\t\t\t";
            if (((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0) || ((isset($context["count"]) ? $context["count"] : null) == twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null))))) {
                // line 44
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 46
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t</div>
\t</div>
</div>
";
        // line 50
        if ($this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "use_slider", array())) {
            // line 51
            echo "<script type=\"text/javascript\">
\$(document).ready(function() { 
  \$(\".owl-featured-categories\").owlCarousel({
\tautoplaySpeed: ";
            // line 54
            if ($this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "f_speed", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "f_speed", array());
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
\tnavSpeed: ";
            // line 55
            if ($this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "f_speed", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "f_speed", array());
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
\tdotsSpeed: ";
            // line 56
            if ($this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "f_speed", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "f_speed", array());
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
    items : ";
            // line 57
            if ($this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "items", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "items", array());
                echo " ";
            } else {
                echo " 3 ";
            }
            echo ",
\tautoplay : ";
            // line 58
            if ($this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "autoplay", array())) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
\tnav: ";
            // line 59
            if ($this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "f_show_nextback", array())) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
\tdots: ";
            // line 60
            if ($this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "f_show_ctr", array())) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
\tautoplayHoverPause : false,
\tnavText : ['<i class=\"fa fa-angle-left\"></i>','<i class=\"fa fa-angle-right\"></i>'],
\tresponsive:{
\t\t0:{
\t\t\titems: 1,
\t\t\tnav: false
\t\t},
\t\t480:{
\t\t\titems: 2,
\t\t\tnav: false
\t\t},
\t\t768:{
\t\t\titems: 4,
\t\t},
\t\t992:{
\t\t\titems: 5,
\t\t},
\t\t1200:{
\t\t\titems: ";
            // line 79
            if ($this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "items", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["config_slide"]) ? $context["config_slide"] : null), "items", array());
                echo " ";
            } else {
                echo " 3 ";
            }
            // line 80
            echo "\t\t},
\t},
\tonInitialized: function() {
\t\towlAction();
\t},
\tonTranslated: function() {
\t\towlAction();
\t}

\t});
  
\tfunction owlAction() {
\t\t\$(\".owl-featured-categories .owl-item\").removeClass('first');
\t\t\$(\".owl-featured-categories .owl-item\").removeClass('last');
\t\t\$(\".owl-featured-categories .owl-item\").removeClass('before-active');
\t\t\$(\".owl-featured-categories .owl-item.active:first\").addClass('first');
\t\t\$(\".owl-featured-categories .owl-item.active:last\").addClass('last');
\t\t\$('.owl-featured-categories .owl-item.active:first').prev().addClass('before-active');
\t\t}
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/extension/module/ocfeaturedcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 80,  250 => 79,  224 => 60,  216 => 59,  208 => 58,  198 => 57,  188 => 56,  178 => 55,  168 => 54,  163 => 51,  161 => 50,  156 => 47,  150 => 46,  146 => 44,  143 => 43,  141 => 42,  131 => 38,  128 => 37,  124 => 35,  118 => 34,  115 => 33,  107 => 31,  104 => 30,  100 => 29,  97 => 28,  94 => 27,  91 => 26,  88 => 25,  85 => 24,  79 => 22,  77 => 21,  71 => 20,  65 => 19,  56 => 15,  52 => 13,  48 => 11,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="featured-categories-container module-nav2">*/
/* 	<div class="featured-categories-slider module-title"><h2>{{ heading_title }}</h2></div>*/
/* 	<div class="row">*/
/* 		{% set count, rows = 0, config_slide.f_rows %}*/
/* 		{% if not rows %}*/
/* 			{% set rows = 1 %}*/
/* 		{% endif %}*/
/* 		<div class="owl-featured-categories owl-carousel owl-theme">*/
/* 			{% for category in categories %}*/
/* 				{% if count % rows == 0 %}*/
/* 				<div class="row_items">*/
/* 				{% endif %}*/
/* 					<div class="fcategory-content">*/
/* 						<div class="image-fcategory">*/
/* 							<a class="homethumb-image" href="{{ category.href }}"><img src="{{ category.homethumb_image }}" alt="" /></a>*/
/* 						</div>*/
/* 						<div class="content-thumb">*/
/* 							<div class="box-content">*/
/* 								<h2 class="name"><a href="{{ category.href }}">{{ category.name }}</a></h2>*/
/* 								<p class="total-items">{{ category.product_total }}<span>{{ text_products }}</span></p>*/
/* 								{% if config_slide.show_description %}*/
/* 									<p class="dec">{{ category.description }}</p>*/
/* 								{% endif %}*/
/* 								{% if config_slide.show_sub_category %}*/
/* 									{% set number_sub = config_slide.number_sub %}*/
/* 									{% if category.children %}*/
/* 										{% set sub_count = 0 %}*/
/* 										<ul class="sub-featured-categories">*/
/* 											{% for subcate in category.children %}*/
/* 												{% if sub_count < number_sub %}*/
/* 												<li><a href="{{ subcate.href }}">{{ subcate.name }}</a></li>*/
/* 												{% endif %}*/
/* 												{% set sub_count = sub_count + 1 %}*/
/* 											{% endfor %}*/
/* 										</ul>*/
/* 									{% endif %}*/
/* 								{% endif %}*/
/* 								<a href="{{ category.href }}" class="view-more">{{ view_more }}</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% set count = count + 1 %}*/
/* 				{% if (count % rows == 0) or (count == categories|length) %}*/
/* 				</div>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% if config_slide.use_slider %}*/
/* <script type="text/javascript">*/
/* $(document).ready(function() { */
/*   $(".owl-featured-categories").owlCarousel({*/
/* 	autoplaySpeed: {% if config_slide.f_speed %} {{ config_slide.f_speed }} {% else %} 3000 {% endif %},*/
/* 	navSpeed: {% if config_slide.f_speed %} {{ config_slide.f_speed }} {% else %} 3000 {% endif %},*/
/* 	dotsSpeed: {% if config_slide.f_speed %} {{ config_slide.f_speed }} {% else %} 3000 {% endif %},*/
/*     items : {% if config_slide.items %} {{ config_slide.items }} {% else %} 3 {% endif %},*/
/* 	autoplay : {% if config_slide.autoplay %} true {% else %} false {% endif %},*/
/* 	nav: {% if config_slide.f_show_nextback %} true {% else %} false {% endif %},*/
/* 	dots: {% if config_slide.f_show_ctr %} true {% else %} false {% endif %},*/
/* 	autoplayHoverPause : false,*/
/* 	navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],*/
/* 	responsive:{*/
/* 		0:{*/
/* 			items: 1,*/
/* 			nav: false*/
/* 		},*/
/* 		480:{*/
/* 			items: 2,*/
/* 			nav: false*/
/* 		},*/
/* 		768:{*/
/* 			items: 4,*/
/* 		},*/
/* 		992:{*/
/* 			items: 5,*/
/* 		},*/
/* 		1200:{*/
/* 			items: {% if config_slide.items %} {{ config_slide.items }} {% else %} 3 {% endif %}*/
/* 		},*/
/* 	},*/
/* 	onInitialized: function() {*/
/* 		owlAction();*/
/* 	},*/
/* 	onTranslated: function() {*/
/* 		owlAction();*/
/* 	}*/
/* */
/* 	});*/
/*   */
/* 	function owlAction() {*/
/* 		$(".owl-featured-categories .owl-item").removeClass('first');*/
/* 		$(".owl-featured-categories .owl-item").removeClass('last');*/
/* 		$(".owl-featured-categories .owl-item").removeClass('before-active');*/
/* 		$(".owl-featured-categories .owl-item.active:first").addClass('first');*/
/* 		$(".owl-featured-categories .owl-item.active:last").addClass('last');*/
/* 		$('.owl-featured-categories .owl-item.active:first').prev().addClass('before-active');*/
/* 		}*/
/* 		});*/
/* 	</script>*/
/* {% endif %}*/
