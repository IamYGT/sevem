<?php

/* tt_origine4/template/common/column_right.twig */
class __TwigTemplate_e786211c8cb1d0ba4451b44253d07bb9c9a12f90e3fd13b09fcecd02cb28a32e extends Twig_Template
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
        if (((isset($context["modules"]) ? $context["modules"] : null) || (isset($context["use_layered"]) ? $context["use_layered"] : null))) {
            // line 2
            echo "<aside id=\"column-right\" class=\"col-md-3 col-sm-12\">
  ";
            // line 3
            if ((isset($context["use_layered"]) ? $context["use_layered"] : null)) {
                // line 4
                echo "    ";
                echo (isset($context["layered_section"]) ? $context["layered_section"] : null);
                echo "
  ";
            }
            // line 6
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 7
                echo "  ";
                echo $context["module"];
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/common/column_right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  37 => 7,  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if modules or use_layered %}*/
/* <aside id="column-right" class="col-md-3 col-sm-12">*/
/*   {% if use_layered %}*/
/*     {{ layered_section }}*/
/*   {% endif %}*/
/*   {% for module in modules %}*/
/*   {{ module }}*/
/*   {% endfor %}*/
/* </aside>*/
/* {% endif %}*/
/* */
