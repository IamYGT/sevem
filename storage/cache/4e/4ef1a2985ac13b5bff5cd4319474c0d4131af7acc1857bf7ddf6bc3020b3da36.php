<?php

/* tt_origine4/template/extension/module/carousel.twig */
class __TwigTemplate_30ad20483f8be07f8f06a193380b6fcaa49e32719053aca319448f00f8ded401 extends Twig_Template
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
        $context["rows"] = 1;
        // line 2
        $context["count"] = 0;
        // line 3
        echo "<div class=\"container\">
\t<div class=\"brand-container\">
\t\t<div id=\"carousel";
        // line 5
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container\">
\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 8
            echo "\t\t\t\t";
            if ((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0)) {
                // line 9
                echo "\t\t\t\t\t\t<div class=\"swiper-slide text-center\">
\t\t\t\t\t";
            }
            // line 11
            echo "\t\t\t\t\t";
            $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
            // line 12
            echo "\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t";
            // line 13
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 14
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t\t\t</div>
\t\t\t\t";
            // line 17
            if (((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0) || ((isset($context["count"]) ? $context["count"] : null) == twig_length_filter($this->env, (isset($context["banners"]) ? $context["banners"] : null))))) {
                // line 18
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t</div>
\t\t</div>
\t\t<!-- <div class=\"swiper-pagination carousel";
        // line 23
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"></div>
\t\t<div class=\"swiper-pager\">
\t\t\t<div class=\"swiper-button-next\"></div>
\t\t\t<div class=\"swiper-button-prev\"></div>
\t\t</div> -->
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#carousel";
        // line 31
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 6,
\tpagination: '.carousel";
        // line 34
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "',
\tpaginationClickable: true,
\tautoplay: 5000,
\tloop: true,
\tbreakpoints:{
\t\t0:{
\t\t\tslidesPerView: 1
\t\t},
\t\t480:{
\t\t\tslidesPerView: 1
\t\t},
\t\t640:{
\t\t\tslidesPerView: 3
\t\t},
\t\t991:{
\t\t\tslidesPerView: 4
\t\t},
\t\t1200:{
\t\t\tslidesPerView: 5
\t\t}
\t}
});
--></script>";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  97 => 31,  86 => 23,  82 => 21,  76 => 20,  72 => 18,  70 => 17,  67 => 16,  51 => 14,  49 => 13,  46 => 12,  43 => 11,  39 => 9,  36 => 8,  32 => 7,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set rows = 1 %}*/
/* {% set count = 0 %}*/
/* <div class="container">*/
/* 	<div class="brand-container">*/
/* 		<div id="carousel{{ module }}" class="swiper-container">*/
/* 			<div class="swiper-wrapper">*/
/* 				{% for banner in banners %}*/
/* 				{% if count % rows == 0 %}*/
/* 						<div class="swiper-slide text-center">*/
/* 					{% endif %}*/
/* 					{% set count = count + 1 %}*/
/* 						<div class="item">*/
/* 							{% if banner.link %}*/
/* 								<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />*/
/* 							{% endif %}*/
/* 						</div>*/
/* 				{% if (count % rows == 0) or (count == banners|length ) %}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- <div class="swiper-pagination carousel{{ module }}"></div>*/
/* 		<div class="swiper-pager">*/
/* 			<div class="swiper-button-next"></div>*/
/* 			<div class="swiper-button-prev"></div>*/
/* 		</div> -->*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#carousel{{ module }}').swiper({*/
/* 	mode: 'horizontal',*/
/* 	slidesPerView: 6,*/
/* 	pagination: '.carousel{{ module }}',*/
/* 	paginationClickable: true,*/
/* 	autoplay: 5000,*/
/* 	loop: true,*/
/* 	breakpoints:{*/
/* 		0:{*/
/* 			slidesPerView: 1*/
/* 		},*/
/* 		480:{*/
/* 			slidesPerView: 1*/
/* 		},*/
/* 		640:{*/
/* 			slidesPerView: 3*/
/* 		},*/
/* 		991:{*/
/* 			slidesPerView: 4*/
/* 		},*/
/* 		1200:{*/
/* 			slidesPerView: 5*/
/* 		}*/
/* 	}*/
/* });*/
/* --></script>*/
