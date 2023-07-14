<?php

/* tt_origine4/template/product/oczoom/lightbox.twig */
class __TwigTemplate_5bc28acaa186c6aad8d066bbe7a9b784e8b2b01204dfa8b3e33ff772690ffef0 extends Twig_Template
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
        echo "<script>
   
\t\$( window ).resize(function() {
\t\tvar screenheight = \$( window ).height();
\t\t\$('.mySlides img').css('max-height', screenheight);
\t\t
\t});
\tvar screenheight = \$( window ).height();
\t\$('.mySlides img').css('max-height', screenheight);
</script>
";
        // line 11
        if ((isset($context["has_images"]) ? $context["has_images"] : null)) {
            // line 12
            echo "    
    <div class=\"lightbox-content\">
        ";
            // line 14
            $context["i"] = 1;
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 16
                echo "            <div class=\"mySlides\">
                <div class=\"numbertext\">";
                // line 17
                echo (isset($context["i"]) ? $context["i"] : null);
                echo " / ";
                echo twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null));
                echo "</div>
                <a onclick=\"oczoom.plusSlides(1)\" ><img src=\"";
                // line 18
                echo $this->getAttribute($context["image"], "src", array());
                echo "\" alt=\"\"></a>
\t\t\t\t<span class=\"close cursor\" onclick=\"oczoom.closeLightBox()\">&times;</span>
\t\t\t\t
            </div>
            ";
                // line 22
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t<span class=\"closezoom\" onclick=\"oczoom.closeLightBox()\"></span>
    </div>
\t<span class=\"closezoom\" onclick=\"oczoom.closeLightBox()\"></span>
    <a class=\"prev\" onclick=\"oczoom.plusSlides(-1)\">&#10094;</a>
\t<a class=\"next\" onclick=\"oczoom.plusSlides(1)\">&#10095;</a>
";
        } else {
            // line 30
            echo "    <div class=\"lightbox-content\">No Image Data</div>
\t<span class=\"closezoom\" onclick=\"oczoom.closeLightBox()\"></span>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/product/oczoom/lightbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  68 => 24,  62 => 23,  60 => 22,  53 => 18,  47 => 17,  44 => 16,  39 => 15,  37 => 14,  33 => 12,  31 => 11,  19 => 1,);
    }
}
/* <script>*/
/*    */
/* 	$( window ).resize(function() {*/
/* 		var screenheight = $( window ).height();*/
/* 		$('.mySlides img').css('max-height', screenheight);*/
/* 		*/
/* 	});*/
/* 	var screenheight = $( window ).height();*/
/* 	$('.mySlides img').css('max-height', screenheight);*/
/* </script>*/
/* {% if has_images %}*/
/*     */
/*     <div class="lightbox-content">*/
/*         {% set i = 1 %}*/
/*         {% for image in images %}*/
/*             <div class="mySlides">*/
/*                 <div class="numbertext">{{ i }} / {{ images|length }}</div>*/
/*                 <a onclick="oczoom.plusSlides(1)" ><img src="{{ image.src }}" alt=""></a>*/
/* 				<span class="close cursor" onclick="oczoom.closeLightBox()">&times;</span>*/
/* 				*/
/*             </div>*/
/*             {% set i = i + 1 %}*/
/*         {% endfor %}*/
/* 		<span class="closezoom" onclick="oczoom.closeLightBox()"></span>*/
/*     </div>*/
/* 	<span class="closezoom" onclick="oczoom.closeLightBox()"></span>*/
/*     <a class="prev" onclick="oczoom.plusSlides(-1)">&#10094;</a>*/
/* 	<a class="next" onclick="oczoom.plusSlides(1)">&#10095;</a>*/
/* {% else %}*/
/*     <div class="lightbox-content">No Image Data</div>*/
/* 	<span class="closezoom" onclick="oczoom.closeLightBox()"></span>*/
/* {% endif %}*/
/* */
