<?php

/* tt_origine4/template/product/ocquickview/qvcontainer.twig */
class __TwigTemplate_4263fb67938d6d89529153747398db5c9ce5c3712b2b5fef4b448f8b663a0781 extends Twig_Template
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
        if ((isset($context["ocquickview_status"]) ? $context["ocquickview_status"] : null)) {
            // line 2
            echo "<div id=\"quickview-content\">
    <!-- Load quickview content into here -->
</div>

<div id=\"quickview-bg-block\">
    <!-- Quick View deep background -->
</div>

<div class=\"quickview-load-img\">
    <img src=\"";
            // line 11
            echo (isset($context["ocquickview_loader_img"]) ? $context["ocquickview_loader_img"] : null);
            echo "\" alt=\"\" />
</div>

<div class=\"lightbox-container lbo-quickview\"></div>

<input type=\"hidden\" id=\"qv-text-close\" value=\"";
            // line 16
            echo (isset($context["text_close"]) ? $context["text_close"] : null);
            echo "\" />

<script type=\"text/javascript\">
    \$('#quickview-bg-block').click(function () {
        ocquickview.closeQVFrame();
    })

    if(\$('#product-product').length) {
        \$('.lightbox-container.lbo-quickview').remove();
    }
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/product/ocquickview/qvcontainer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  32 => 11,  21 => 2,  19 => 1,);
    }
}
/* {% if ocquickview_status %}*/
/* <div id="quickview-content">*/
/*     <!-- Load quickview content into here -->*/
/* </div>*/
/* */
/* <div id="quickview-bg-block">*/
/*     <!-- Quick View deep background -->*/
/* </div>*/
/* */
/* <div class="quickview-load-img">*/
/*     <img src="{{ ocquickview_loader_img }}" alt="" />*/
/* </div>*/
/* */
/* <div class="lightbox-container lbo-quickview"></div>*/
/* */
/* <input type="hidden" id="qv-text-close" value="{{ text_close }}" />*/
/* */
/* <script type="text/javascript">*/
/*     $('#quickview-bg-block').click(function () {*/
/*         ocquickview.closeQVFrame();*/
/*     })*/
/* */
/*     if($('#product-product').length) {*/
/*         $('.lightbox-container.lbo-quickview').remove();*/
/*     }*/
/* </script>*/
/* {% endif %}*/
