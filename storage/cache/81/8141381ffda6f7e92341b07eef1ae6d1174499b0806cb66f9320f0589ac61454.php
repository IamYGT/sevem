<?php

/* extension/payment/paytr_checkout_order.twig */
class __TwigTemplate_8e7a4792025f2d85202efe712c9a177a9743ab96a28f011a6ef6777c410ad72e extends Twig_Template
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
        echo "<div id=\"paytrRefundMsg\"></div>
<table class=\"table table-bordered\">
    <thead>
    <tr>
        <td>";
        // line 5
        echo (isset($context["entry_refund_transaction"]) ? $context["entry_refund_transaction"] : null);
        echo "</td>
        <td>";
        // line 6
        echo (isset($context["entry_refund_total"]) ? $context["entry_refund_total"] : null);
        echo "</td>
        <td>";
        // line 7
        echo (isset($context["entry_refund_total_paid"]) ? $context["entry_refund_total_paid"] : null);
        echo "</td>
        <td>";
        // line 8
        echo (isset($context["entry_refund_status"]) ? $context["entry_refund_status"] : null);
        echo "</td>
        <td>";
        // line 9
        echo (isset($context["entry_refund_status_message"]) ? $context["entry_refund_status_message"] : null);
        echo "</td>
        <td>";
        // line 10
        echo (isset($context["entry_refund_refund"]) ? $context["entry_refund_refund"] : null);
        echo "</td>
        <td>";
        // line 11
        echo (isset($context["entry_refund_refund_status"]) ? $context["entry_refund_refund_status"] : null);
        echo "</td>
        <td>";
        // line 12
        echo (isset($context["entry_refund_refund_amount"]) ? $context["entry_refund_refund_amount"] : null);
        echo "</td>
        <td>";
        // line 13
        echo (isset($context["entry_refund_refund_date"]) ? $context["entry_refund_refund_date"] : null);
        echo "</td>
        <td></td>
    </tr>
    </thead>
    <tbody id=\"paytrRefundTableBody\"></tbody>
</table>

<script type=\"text/javascript\">

    function loadPaytrTransactionTable() {

        const tableBody = \$('#paytrRefundTableBody');
        const msgBody = \$('#paytrRefundMsg');
        tableBody.html('<tr><td colspan=\"10\" align=\"center\"><img src=\"";
        // line 26
        echo (isset($context["paytr_icon_loader"]) ? $context["paytr_icon_loader"] : null);
        echo "\" width=\"30\" style=\"margin: 20px 0;\"></td></tr>');

        \$.ajax({
            url: 'index.php?route=extension/payment/paytr_checkout/ajaxTransactions&user_token=";
        // line 29
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
            dataType: 'json',
            cache: false,
            success: function (json) {

                if (json.count_msg) {
                    msgBody.html('<div class=\"alert alert-warning\">' + json.count_msg + '</div>');
                }

                tableBody.html(json.table);
            },
            error: function (json) {
                tableBody.html(json.responseText);
            }
        });
    }

    function doPaytrRefund(a) {
        const oid = \$(a).attr('data-oid');
        const amount = \$('input[data-oid=' + oid + ']').val();

        \$.ajax({
            url: 'index.php?route=extension/payment/paytr_checkout/ajaxRefundApi&user_token=";
        // line 51
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "&amount=' + amount + '&moid=' + oid,
            dataType: 'json',
            cache: false,
            beforeSend: function () {
                \$(a).button('loading');
            },
            compete: function () {
                \$(a).button('reset');
            },
            success: function (json) {
                if (json.status == 'error') {
                    alert(json.status_message);
                    \$(a).button('reset');
                }

                if (json.status == 'success') {
                    alert(json.status_message);
                    loadPaytrTransactionTable();
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }

    \$(window).on('load', loadPaytrTransactionTable());

</script>";
    }

    public function getTemplateName()
    {
        return "extension/payment/paytr_checkout_order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 51,  79 => 29,  73 => 26,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div id="paytrRefundMsg"></div>*/
/* <table class="table table-bordered">*/
/*     <thead>*/
/*     <tr>*/
/*         <td>{{ entry_refund_transaction }}</td>*/
/*         <td>{{ entry_refund_total }}</td>*/
/*         <td>{{ entry_refund_total_paid }}</td>*/
/*         <td>{{ entry_refund_status }}</td>*/
/*         <td>{{ entry_refund_status_message }}</td>*/
/*         <td>{{ entry_refund_refund }}</td>*/
/*         <td>{{ entry_refund_refund_status }}</td>*/
/*         <td>{{ entry_refund_refund_amount }}</td>*/
/*         <td>{{ entry_refund_refund_date }}</td>*/
/*         <td></td>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody id="paytrRefundTableBody"></tbody>*/
/* </table>*/
/* */
/* <script type="text/javascript">*/
/* */
/*     function loadPaytrTransactionTable() {*/
/* */
/*         const tableBody = $('#paytrRefundTableBody');*/
/*         const msgBody = $('#paytrRefundMsg');*/
/*         tableBody.html('<tr><td colspan="10" align="center"><img src="{{ paytr_icon_loader }}" width="30" style="margin: 20px 0;"></td></tr>');*/
/* */
/*         $.ajax({*/
/*             url: 'index.php?route=extension/payment/paytr_checkout/ajaxTransactions&user_token={{ user_token }}&order_id={{ order_id }}',*/
/*             dataType: 'json',*/
/*             cache: false,*/
/*             success: function (json) {*/
/* */
/*                 if (json.count_msg) {*/
/*                     msgBody.html('<div class="alert alert-warning">' + json.count_msg + '</div>');*/
/*                 }*/
/* */
/*                 tableBody.html(json.table);*/
/*             },*/
/*             error: function (json) {*/
/*                 tableBody.html(json.responseText);*/
/*             }*/
/*         });*/
/*     }*/
/* */
/*     function doPaytrRefund(a) {*/
/*         const oid = $(a).attr('data-oid');*/
/*         const amount = $('input[data-oid=' + oid + ']').val();*/
/* */
/*         $.ajax({*/
/*             url: 'index.php?route=extension/payment/paytr_checkout/ajaxRefundApi&user_token={{ user_token }}&order_id={{ order_id }}&amount=' + amount + '&moid=' + oid,*/
/*             dataType: 'json',*/
/*             cache: false,*/
/*             beforeSend: function () {*/
/*                 $(a).button('loading');*/
/*             },*/
/*             compete: function () {*/
/*                 $(a).button('reset');*/
/*             },*/
/*             success: function (json) {*/
/*                 if (json.status == 'error') {*/
/*                     alert(json.status_message);*/
/*                     $(a).button('reset');*/
/*                 }*/
/* */
/*                 if (json.status == 'success') {*/
/*                     alert(json.status_message);*/
/*                     loadPaytrTransactionTable();*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     }*/
/* */
/*     $(window).on('load', loadPaytrTransactionTable());*/
/* */
/* </script>*/
