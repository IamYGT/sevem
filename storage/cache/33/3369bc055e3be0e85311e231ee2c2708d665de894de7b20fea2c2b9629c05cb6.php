<?php

/* extension/module/ocmegamenu/list.twig */
class __TwigTemplate_a8265edfbfb0e7756f1096c10665e6338278531e77d7e1ba7a6e8bc31eaef6a7 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <a href=\"";
        // line 6
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" form=\"form-menu\" formaction=\"";
        // line 7
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-menu').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 23
        echo "        ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 28
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 33
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-menu\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-left\">";
        // line 39
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                                    <td class=\"text-left\">";
        // line 40
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
                                    <td class=\"text-right\">";
        // line 41
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 45
        if ((isset($context["menu_list"]) ? $context["menu_list"] : null)) {
            // line 46
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu_list"]) ? $context["menu_list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 47
                echo "                                <tr>
                                    <td class=\"text-center\">
                                        ";
                // line 49
                if (twig_in_filter($this->getAttribute($context["menu"], "menu_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 50
                    echo "                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["menu"], "menu_id", array());
                    echo "\" checked=\"checked\" />
                                        ";
                } else {
                    // line 52
                    echo "                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["menu"], "menu_id", array());
                    echo "\" />
                                        ";
                }
                // line 54
                echo "                                    </td>
                                    <td class=\"text-left\">";
                // line 55
                echo $this->getAttribute($context["menu"], "name", array());
                echo "</td>
                                    <td class=\"text-left\">";
                // line 56
                echo $this->getAttribute($context["menu"], "status", array());
                echo "</td>
                                    <td class=\"text-right\"><a href=\"";
                // line 57
                echo $this->getAttribute($context["menu"], "url", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                            ";
        } else {
            // line 61
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"8\">";
            // line 62
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                                </tr>
                            ";
        }
        // line 65
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 70
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 71
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 77
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocmegamenu/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 77,  194 => 71,  190 => 70,  183 => 65,  177 => 62,  174 => 61,  171 => 60,  160 => 57,  156 => 56,  152 => 55,  149 => 54,  143 => 52,  137 => 50,  135 => 49,  131 => 47,  126 => 46,  124 => 45,  117 => 41,  113 => 40,  109 => 39,  100 => 33,  94 => 30,  90 => 28,  82 => 24,  79 => 23,  71 => 19,  69 => 18,  63 => 14,  52 => 12,  48 => 11,  43 => 9,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*                 <button type="button" form="form-menu" formaction="{{ delete }}" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-menu').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*             </div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if success %}*/
/*             <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-menu">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                                     <td class="text-left">{{ column_name }}</td>*/
/*                                     <td class="text-left">{{ column_status }}</td>*/
/*                                     <td class="text-right">{{ column_action }}</td>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% if menu_list %}*/
/*                                 {% for menu in menu_list %}*/
/*                                 <tr>*/
/*                                     <td class="text-center">*/
/*                                         {% if menu.menu_id in selected %}*/
/*                                             <input type="checkbox" name="selected[]" value="{{ menu.menu_id }}" checked="checked" />*/
/*                                         {% else %}*/
/*                                             <input type="checkbox" name="selected[]" value="{{ menu.menu_id }}" />*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                     <td class="text-left">{{ menu.name }}</td>*/
/*                                     <td class="text-left">{{ menu.status }}</td>*/
/*                                     <td class="text-right"><a href="{{ menu.url }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                                 </tr>*/
/*                                 {% endfor %}*/
/*                             {% else %}*/
/*                                 <tr>*/
/*                                     <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                                 </tr>*/
/*                             {% endif %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </form>*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                     <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
