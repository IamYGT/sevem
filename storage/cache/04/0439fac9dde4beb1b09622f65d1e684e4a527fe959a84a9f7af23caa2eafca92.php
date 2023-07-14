<?php

/* default/template/extension/payment/paytr_checkout.twig */
class __TwigTemplate_471327c061a9ec701bd749712c03370b4336db986d6eed3cb4e3063eb2b1527c extends Twig_Template
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
        if (array_key_exists("errors", $context)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["err_message"]) {
                // line 3
                echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>
            ";
                // line 4
                echo $context["err_message"];
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['err_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 8
            echo "    ";
            if (((isset($context["page_layout"]) ? $context["page_layout"] : null) != "onepage")) {
                // line 9
                echo "        <script src=\"https://www.paytr.com/js/iframeResizer.min.js\"></script>
        <iframe src=\"https://www.paytr.com/odeme/guvenli/";
                // line 10
                echo (isset($context["iframe_token"]) ? $context["iframe_token"] : null);
                echo "\" id=\"paytriframe\" frameborder=\"0\"
                scrolling=\"no\" style=\"width: 100%;\"></iframe>
        <script type=\"text/javascript\">
            setInterval(function () {
                iFrameResize({}, '#paytriframe');
            }, 1000);
        </script>

        <style>
            /* journal popup resize // onepage with standard option */

            .popup-checkout-payment .popup-inner-body{
                max-height: inherit!important;
                max-width: 100%!important;
                width: 1024px!important;
            }

        </style>

    ";
            } else {
                // line 30
                echo "
        <style>
            .quick-checkout-wrapper .payment-paytr_checkout {
                display: none;
            }
        </style>

        <div class=\"buttons\">
            <div class=\"pull-right\">
                <input type=\"button\" value=\"";
                // line 39
                echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
                echo "\" id=\"button-confirm\"
                       data-loading-text=\"";
                // line 40
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\"/>
            </div>
        </div>

        <script type=\"text/javascript\">
            \$(document).ready(function () {
                \$('#button-confirm').click(function () {
                    \$.ajax({
                        'url': 'index.php?route=extension/payment/paytr_checkout/onepage',
                        'dataType': 'json',
                        'type': 'post',
                        success: function (json) {
                            if (json.status == 'success') {
                                window.location.href = 'index.php?route=extension/payment/paytr_checkout/form';
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                })
            });
        </script>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/paytr_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 40,  79 => 39,  68 => 30,  45 => 10,  42 => 9,  39 => 8,  29 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if errors is defined %}*/
/*     {% for err_message in errors %}*/
/*         <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i>*/
/*             {{ err_message }}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% else %}*/
/*     {% if page_layout != 'onepage' %}*/
/*         <script src="https://www.paytr.com/js/iframeResizer.min.js"></script>*/
/*         <iframe src="https://www.paytr.com/odeme/guvenli/{{ iframe_token }}" id="paytriframe" frameborder="0"*/
/*                 scrolling="no" style="width: 100%;"></iframe>*/
/*         <script type="text/javascript">*/
/*             setInterval(function () {*/
/*                 iFrameResize({}, '#paytriframe');*/
/*             }, 1000);*/
/*         </script>*/
/* */
/*         <style>*/
/*             /* journal popup resize // onepage with standard option *//* */
/* */
/*             .popup-checkout-payment .popup-inner-body{*/
/*                 max-height: inherit!important;*/
/*                 max-width: 100%!important;*/
/*                 width: 1024px!important;*/
/*             }*/
/* */
/*         </style>*/
/* */
/*     {% else %}*/
/* */
/*         <style>*/
/*             .quick-checkout-wrapper .payment-paytr_checkout {*/
/*                 display: none;*/
/*             }*/
/*         </style>*/
/* */
/*         <div class="buttons">*/
/*             <div class="pull-right">*/
/*                 <input type="button" value="{{ button_confirm }}" id="button-confirm"*/
/*                        data-loading-text="{{ text_loading }}" class="btn btn-primary"/>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <script type="text/javascript">*/
/*             $(document).ready(function () {*/
/*                 $('#button-confirm').click(function () {*/
/*                     $.ajax({*/
/*                         'url': 'index.php?route=extension/payment/paytr_checkout/onepage',*/
/*                         'dataType': 'json',*/
/*                         'type': 'post',*/
/*                         success: function (json) {*/
/*                             if (json.status == 'success') {*/
/*                                 window.location.href = 'index.php?route=extension/payment/paytr_checkout/form';*/
/*                             }*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 })*/
/*             });*/
/*         </script>*/
/*     {% endif %}*/
/* {% endif %}*/
