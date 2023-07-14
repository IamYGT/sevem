<?php

/* tt_origine4/template/blog/blog_home.twig */
class __TwigTemplate_01cdcda1b336ea45a2b374d48c0e4d4f5acd951dbb9e9d0e3a166ff738095bcf extends Twig_Template
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
        echo "<div id=\"blog_home\" class=\"menu-recent owl-style3\">
\t<div class=\"blog-title module-title\">
\t\t<h2>";
        // line 3
        echo (isset($context["text_headingtitle"]) ? $context["text_headingtitle"] : null);
        echo "</h2>
\t\t<p>";
        // line 4
        echo (isset($context["view_all"]) ? $context["view_all"] : null);
        echo "</p>
\t</div>
\t";
        // line 6
        list($context["count"], $context["rows"]) =         array(0, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "rows", array()));
        // line 7
        echo "\t";
        if ( !(isset($context["rows"]) ? $context["rows"] : null)) {
            // line 8
            echo "\t\t";
            $context["rows"] = 1;
            // line 9
            echo "\t";
        }
        // line 10
        echo "
\t";
        // line 11
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 12
            echo "\t\t<div class=\"articles-container owl-carousel owl-theme\">
\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 14
                echo "\t\t\t";
                if ((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0)) {
                    // line 15
                    echo "\t\t\t<div class=\"row_items\">
\t\t\t";
                }
                // line 17
                echo "\t\t\t";
                $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
                // line 18
                echo "\t\t\t\t<div class=\"articles-inner item-inner\">
\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t<img src=\"";
                // line 20
                echo $this->getAttribute($context["article"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["article"], "name", array());
                echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"author-date\">
\t\t\t\t\t\t";
                // line 23
                if ($this->getAttribute($context["article"], "author", array())) {
                    // line 24
                    echo "\t\t\t\t\t\t\t";
                    echo (isset($context["text_post_by"]) ? $context["text_post_by"] : null);
                    echo "
\t\t\t\t\t\t\t<span>";
                    // line 25
                    echo $this->getAttribute($context["article"], "author", array());
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t<div class=\"articles-date\">
\t\t\t\t\t\t\t<span>";
                // line 28
                echo $this->getAttribute($context["article"], "date_added_d", array());
                echo "</span>
\t\t\t\t\t\t\t";
                // line 29
                echo $this->getAttribute($context["article"], "date_added_m", array());
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t<a class=\"articles-name\" href=\"";
                // line 33
                echo $this->getAttribute($context["article"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["article"], "name", array());
                echo "</a>
\t\t\t\t\t\t<div class=\"articles-intro\"><p>";
                // line 34
                echo $this->getAttribute($context["article"], "intro_text", array());
                echo "</p></div>
\t\t\t\t\t\t<div class=\"readmore\"><a href=\"";
                // line 35
                echo $this->getAttribute($context["article"], "href", array());
                echo "\">";
                echo (isset($context["button_read_more"]) ? $context["button_read_more"] : null);
                echo "</a></div>
\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t";
                // line 38
                if (((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0) || ((isset($context["count"]) ? $context["count"] : null) == twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : null))))) {
                    // line 39
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 41
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t</div>
\t";
        } else {
            // line 44
            echo "\t\t<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t";
        }
        // line 46
        echo "</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
\t\tvar txt = \$('.aritcles-content .articles-intro').find('p').text();
\t\tif(txt.length > 80)
\t\t\$('.aritcles-content .articles-intro').find('p').text(txt.substring(0,60) + '...');
        \$(\".articles-container\").owlCarousel({
            autoPlay : ";
        // line 53
        if ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "auto", array())) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
        \titems : ";
        // line 54
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "items", array(), "array");
        echo ",
\t\t\tmargin: 30,
\t\t\tloop: true,\t\t\t
\t\t\tnavSpeed : ";
        // line 57
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "speed", array(), "array");
        echo ",
\t\t\tdotsSpeed : ";
        // line 58
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "speed", array(), "array");
        echo ",
\t\t\tautoplaySpeed : ";
        // line 59
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "speed", array(), "array");
        echo ",
\t\t\tnav : ";
        // line 60
        if ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "navigation", array())) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\tdots : ";
        // line 61
        if ($this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "pagination", array())) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\tnavText : ['<i class=\"ion-ios-arrow-left\"></i>','<i class=\"ion-ios-arrow-right\"></i>'],
\t\t\tresponsive:{
\t\t\t\t0:{
\t\t\t\t\titems: 1
\t\t\t\t},
\t\t\t\t480:{
\t\t\t\t\titems: 1
\t\t\t\t},
\t\t\t\t640:{
\t\t\t\t\titems: 1
\t\t\t\t},
\t\t\t\t991:{
\t\t\t\t\titems: 1
\t\t\t\t},
\t\t\t\t1200:{
\t\t\t\t\titems: ";
        // line 77
        echo $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "items", array(), "array");
        echo "
\t\t\t\t}
\t\t\t}
    \t});
    });
</script>";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/blog/blog_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 77,  186 => 61,  178 => 60,  174 => 59,  170 => 58,  166 => 57,  160 => 54,  152 => 53,  143 => 46,  137 => 44,  133 => 42,  127 => 41,  123 => 39,  121 => 38,  113 => 35,  109 => 34,  103 => 33,  96 => 29,  92 => 28,  89 => 27,  84 => 25,  79 => 24,  77 => 23,  69 => 20,  65 => 18,  62 => 17,  58 => 15,  55 => 14,  51 => 13,  48 => 12,  46 => 11,  43 => 10,  40 => 9,  37 => 8,  34 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div id="blog_home" class="menu-recent owl-style3">*/
/* 	<div class="blog-title module-title">*/
/* 		<h2>{{ text_headingtitle }}</h2>*/
/* 		<p>{{view_all}}</p>*/
/* 	</div>*/
/* 	{% set count, rows = 0, slide.rows %}*/
/* 	{% if not rows %}*/
/* 		{% set rows = 1 %}*/
/* 	{% endif %}*/
/* */
/* 	{% if articles %}*/
/* 		<div class="articles-container owl-carousel owl-theme">*/
/* 		{% for article in articles %}*/
/* 			{% if count % rows == 0 %}*/
/* 			<div class="row_items">*/
/* 			{% endif %}*/
/* 			{% set count = count + 1 %}*/
/* 				<div class="articles-inner item-inner">*/
/* 					<div class="articles-image">*/
/* 						<img src="{{ article.image }}" alt="{{ article.name }}"/>*/
/* 					</div>*/
/* 					<div class="author-date">*/
/* 						{% if article.author %}*/
/* 							{{ text_post_by }}*/
/* 							<span>{{ article.author }}</span>*/
/* 						{% endif %}*/
/* 						<div class="articles-date">*/
/* 							<span>{{ article.date_added_d }}</span>*/
/* 							{{ article.date_added_m }}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="aritcles-content">*/
/* 						<a class="articles-name" href="{{ article.href }}">{{ article.name }}</a>*/
/* 						<div class="articles-intro"><p>{{ article.intro_text }}</p></div>*/
/* 						<div class="readmore"><a href="{{ article.href }}">{{ button_read_more }}</a></div>*/
/* 					</div>												*/
/* 				</div>*/
/* 			{% if (count % rows == 0) or (count == articles|length ) %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 		</div>*/
/* 	{% else %}*/
/* 		<p>{{ text_empty }}</p>*/
/* 	{% endif %}*/
/* </div>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/* 		var txt = $('.aritcles-content .articles-intro').find('p').text();*/
/* 		if(txt.length > 80)*/
/* 		$('.aritcles-content .articles-intro').find('p').text(txt.substring(0,60) + '...');*/
/*         $(".articles-container").owlCarousel({*/
/*             autoPlay : {% if slide.auto %} true {% else %} false {% endif %},*/
/*         	items : {{ slide['items'] }},*/
/* 			margin: 30,*/
/* 			loop: true,			*/
/* 			navSpeed : {{ slide['speed'] }},*/
/* 			dotsSpeed : {{ slide['speed'] }},*/
/* 			autoplaySpeed : {{ slide['speed'] }},*/
/* 			nav : {% if slide.navigation %} true {% else %} false {% endif %},*/
/* 			dots : {% if slide.pagination %} true {% else %} false {% endif %},*/
/* 			navText : ['<i class="ion-ios-arrow-left"></i>','<i class="ion-ios-arrow-right"></i>'],*/
/* 			responsive:{*/
/* 				0:{*/
/* 					items: 1*/
/* 				},*/
/* 				480:{*/
/* 					items: 1*/
/* 				},*/
/* 				640:{*/
/* 					items: 1*/
/* 				},*/
/* 				991:{*/
/* 					items: 1*/
/* 				},*/
/* 				1200:{*/
/* 					items: {{ slide['items'] }}*/
/* 				}*/
/* 			}*/
/*     	});*/
/*     });*/
/* </script>*/
