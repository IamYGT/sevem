<?php

/* tt_origine4/template/common/cart.twig */
class __TwigTemplate_a3f0674fd9a57126cd76b47c009cb5e0a586b8db0f6bcd85db8ecc2cc1a98c17 extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
\t<button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn dropdown-toggle dropdown-cart\">
\t\t<i class=\"icon-shopping-bag2\"></i>
\t\t<span id=\"cart-total\">";
        // line 4
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span>
\t</button>
\t<ul class=\"dropdown-menu pull-right\">
    ";
        // line 7
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 8
            echo "    <li class=\"has-scroll\">
      <table class=\"table\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 11
                echo "        <tr>
          <td class=\"text-center cart-image\">";
                // line 12
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img class=\"cart-image\" src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left info-item\"><a href=\"";
                // line 13
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 14
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 15
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "            ";
                }
                // line 17
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
            - <small>";
                    // line 18
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                // line 19
                echo "\t\t\t<p class=\"cart-quantity\">";
                echo (isset($context["text_qty"]) ? $context["text_qty"] : null);
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</p>
\t\t\t<p class=\"cart-price\">";
                // line 20
                echo $this->getAttribute($context["product"], "total", array());
                echo "</p>
\t\t</td>          
          <td class=\"text-center cart-close\"><button type=\"button\" onclick=\"cart.remove('";
                // line 22
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"icon-x\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 26
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 28
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 30
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 31
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"icon-x\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "      </table>
    </li>
    <li>
        <table class=\"table cart-totals\">
          ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 39
                echo "          <tr>
            <td class=\"text-left\">";
                // line 40
                echo ($this->getAttribute($context["total"], "title", array()) . " :");
                echo "</td>
            <td class=\"text-right\">";
                // line 41
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </table>
        <p class=\"text-center cart-button\">
\t\t\t<a class=\"view-cart\" href=\"";
            // line 46
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\">";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a>
\t\t\t<a class=\"checkout-cart\" href=\"";
            // line 47
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a>
\t\t</p>      
    </li>
    ";
        } else {
            // line 51
            echo "    <li>
      <p class=\"text-center cart-empty\">";
            // line 52
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 55
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 55,  195 => 52,  192 => 51,  183 => 47,  177 => 46,  173 => 44,  164 => 41,  160 => 40,  157 => 39,  153 => 38,  147 => 34,  136 => 31,  132 => 30,  127 => 28,  123 => 26,  118 => 25,  107 => 22,  102 => 20,  96 => 19,  90 => 18,  85 => 17,  82 => 16,  73 => 15,  66 => 14,  60 => 13,  46 => 12,  43 => 11,  39 => 10,  35 => 8,  33 => 7,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart" class="btn-group btn-block">*/
/* 	<button type="button" data-toggle="dropdown" data-loading-text="{{ text_loading }}" class="btn dropdown-toggle dropdown-cart">*/
/* 		<i class="icon-shopping-bag2"></i>*/
/* 		<span id="cart-total">{{ text_items }}</span>*/
/* 	</button>*/
/* 	<ul class="dropdown-menu pull-right">*/
/*     {% if products or vouchers %}*/
/*     <li class="has-scroll">*/
/*       <table class="table">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center cart-image">{% if product.thumb %} <a href="{{ product.href }}"><img class="cart-image" src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /></a> {% endif %}</td>*/
/*           <td class="text-left info-item"><a href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}*/
/* 			<p class="cart-quantity">{{ text_qty }}{{ product.quantity }}</p>*/
/* 			<p class="cart-price">{{ product.total }}</p>*/
/* 		</td>          */
/*           <td class="text-center cart-close"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="icon-x"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="icon-x"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*         <table class="table cart-totals">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td class="text-left">{{ total.title ~ " :" }}</td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <p class="text-center cart-button">*/
/* 			<a class="view-cart" href="{{ cart }}">{{ text_cart }}</a>*/
/* 			<a class="checkout-cart" href="{{ checkout }}">{{ text_checkout }}</a>*/
/* 		</p>      */
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center cart-empty">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
