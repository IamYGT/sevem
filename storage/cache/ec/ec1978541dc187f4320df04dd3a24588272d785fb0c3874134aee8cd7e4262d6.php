<?php

/* tt_origine4/template/extension/module/ocsearchcategory/searchajaxresult.twig */
class __TwigTemplate_fef427f9efff54a50047cae66c4bc8e41938594d1c308817a617f61bb54afbb5 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) == 0)) {
            // line 2
            echo "    <p class=\"ajax-result-msg\">";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
";
        } else {
            // line 4
            echo "    <ul class=\"ajax-result-list\">
        ";
            // line 5
            $context["i"] = 0;
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 7
                echo "            ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 8
                echo "            <li class=\"ajax-result-item col-lg-6 col-md-6 col-xs-12 col-sm-12\">
                <div class=\"product-info\">
                    ";
                // line 10
                if (((isset($context["product_img_enabled"]) ? $context["product_img_enabled"] : null) == 1)) {
                    // line 11
                    echo "                        <a class=\"product-image\" href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
                            <div class=\"product-image\">
                                <img src=\"";
                    // line 13
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
                            </div>
                        </a>
                    ";
                }
                // line 17
                echo "                    <div class=\"detail\">
                        <h2 class=\"product-name\">
                            <a href=\"";
                // line 19
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
                        </h2>
                        ";
                // line 21
                if (((isset($context["product_price_enabled"]) ? $context["product_price_enabled"] : null) == 1)) {
                    // line 22
                    echo "                            ";
                    if ($this->getAttribute($context["product"], "price", array())) {
                        // line 23
                        echo "                            <div class=\"price-box\">
                                ";
                        // line 24
                        if ($this->getAttribute($context["product"], "special", array())) {
                            // line 25
                            echo "                                    <span class=\"price\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span>
                                ";
                        } else {
                            // line 27
                            echo "                                    <p class=\"old-price\"><span class=\"price\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span></p>
                                    <p class=\"special-price\"><span class=\"price\">";
                            // line 28
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span></p>
                                ";
                        }
                        // line 30
                        echo "                            </div>
                            ";
                    }
                    // line 32
                    echo "                        ";
                }
                // line 33
                echo "                    </div>
                </div>
            </li>
            ";
                // line 36
                if ((((isset($context["i"]) ? $context["i"] : null) % 2) == 0)) {
                    // line 37
                    echo "            <div style=\"clear:both\"></div>
            ";
                }
                // line 39
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/extension/module/ocsearchcategory/searchajaxresult.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 40,  116 => 39,  112 => 37,  110 => 36,  105 => 33,  102 => 32,  98 => 30,  93 => 28,  88 => 27,  82 => 25,  80 => 24,  77 => 23,  74 => 22,  72 => 21,  65 => 19,  61 => 17,  52 => 13,  46 => 11,  44 => 10,  40 => 8,  37 => 7,  32 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if products|length == 0 %}*/
/*     <p class="ajax-result-msg">{{ text_empty }}</p>*/
/* {% else %}*/
/*     <ul class="ajax-result-list">*/
/*         {% set i = 0 %}*/
/*         {% for product in products %}*/
/*             {% set i = i + 1 %}*/
/*             <li class="ajax-result-item col-lg-6 col-md-6 col-xs-12 col-sm-12">*/
/*                 <div class="product-info">*/
/*                     {% if product_img_enabled == 1 %}*/
/*                         <a class="product-image" href="{{ product.href }}">*/
/*                             <div class="product-image">*/
/*                                 <img src="{{ product.thumb }}" alt="{{ product.name }}" />*/
/*                             </div>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     <div class="detail">*/
/*                         <h2 class="product-name">*/
/*                             <a href="{{ product.href }}">{{ product.name }}</a>*/
/*                         </h2>*/
/*                         {% if product_price_enabled == 1 %}*/
/*                             {% if product.price %}*/
/*                             <div class="price-box">*/
/*                                 {% if product.special %}*/
/*                                     <span class="price">{{ product.price }}</span>*/
/*                                 {% else %}*/
/*                                     <p class="old-price"><span class="price">{{ product.price }}</span></p>*/
/*                                     <p class="special-price"><span class="price">{{ product.special }}</span></p>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*             {% if i % 2 == 0 %}*/
/*             <div style="clear:both"></div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endif %}*/
