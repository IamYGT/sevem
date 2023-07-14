<?php

/* tt_origine4/template/extension/module/category.twig */
class __TwigTemplate_6102d1bc89b680018b0d84873e83b20afb36b07a524098b3ff313476ddffadba extends Twig_Template
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
        echo "<div class=\"category-container\">
\t<div class=\"category-title\"><h2>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2></div>
\t<div class=\"list-group\">
\t  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "\t  ";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                echo " 
\t  <a href=\"";
                // line 6
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item active\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a> 
\t  ";
                // line 7
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 8
                    echo "\t  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 9
                        echo "\t  ";
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 10
                            echo "\t  <a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a> 
\t  ";
                        } else {
                            // line 11
                            echo " 
\t  <a href=\"";
                            // line 12
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
\t  ";
                        }
                        // line 14
                        echo "\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "\t  ";
                }
                // line 16
                echo "\t  ";
            } else {
                echo " <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
\t  ";
            }
            // line 18
            echo "\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 19,  89 => 18,  79 => 16,  76 => 15,  70 => 14,  63 => 12,  60 => 11,  52 => 10,  49 => 9,  44 => 8,  42 => 7,  36 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="category-container">*/
/* 	<div class="category-title"><h2>{{ heading_title }}</h2></div>*/
/* 	<div class="list-group">*/
/* 	  {% for category in categories %}*/
/* 	  {% if category.category_id == category_id %} */
/* 	  <a href="{{ category.href }}" class="list-group-item active">{{ category.name }}</a> */
/* 	  {% if category.children %}*/
/* 	  {% for child in category.children %}*/
/* 	  {% if child.category_id == child_id %}*/
/* 	  <a href="{{ child.href }}" class="list-group-item active">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a> */
/* 	  {% else %} */
/* 	  <a href="{{ child.href }}" class="list-group-item">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/* 	  {% endif %}*/
/* 	  {% endfor %}*/
/* 	  {% endif %}*/
/* 	  {% else %} <a href="{{ category.href }}" class="list-group-item">{{ category.name }}</a>*/
/* 	  {% endif %}*/
/* 	  {% endfor %}*/
/* 	</div>*/
/* </div>*/
/* */
