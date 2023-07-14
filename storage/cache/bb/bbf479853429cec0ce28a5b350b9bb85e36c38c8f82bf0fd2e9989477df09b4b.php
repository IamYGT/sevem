<?php

/* catalog/occategorythumbnail_form.twig */
class __TwigTemplate_47b99c344c09a306fd455be458bd8850d0c96abc7cbea7415e24c4dbf5d7a0cc extends Twig_Template
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
                <button type=\"submit\" form=\"form-occategorythumbnail\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-occategorythumbnail\" class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 29
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" disabled=\"disabled\" id=\"input-name\" value=\"";
        // line 31
        echo (isset($context["category_name"]) ? $context["category_name"] : null);
        echo "\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 35
        echo (isset($context["entry_thumbnail_image"]) ? $context["entry_thumbnail_image"] : null);
        echo "</label>
                        <div class=\"col-sm-10\"><a href=\"javascript:void(0);\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 36
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                            <input type=\"hidden\" name=\"thumbnail_image\" value=\"";
        // line 37
        echo (isset($context["thumbnail_image"]) ? $context["thumbnail_image"] : null);
        echo "\" id=\"input-thumbnail-image\" />
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 41
        echo (isset($context["entry_homethumb_image"]) ? $context["entry_homethumb_image"] : null);
        echo "</label>
                        <div class=\"col-sm-10\"><a href=\"javascript:void(0);\" id=\"home-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 42
        echo (isset($context["home_thumb"]) ? $context["home_thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                            <input type=\"hidden\" name=\"homethumb_image\" value=\"";
        // line 43
        echo (isset($context["homethumb_image"]) ? $context["homethumb_image"] : null);
        echo "\" id=\"input-homethumb-image\" />
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-featured\">";
        // line 47
        echo (isset($context["entry_featured"]) ? $context["entry_featured"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"featured\" id=\"input-featured\" class=\"form-control\">
                            ";
        // line 50
        if ((isset($context["featured"]) ? $context["featured"] : null)) {
            // line 51
            echo "                            <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                            <option value=\"0\">";
            // line 52
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                            ";
        } else {
            // line 54
            echo "                            <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                            <option value=\"0\" selected=\"selected\">";
            // line 55
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                            ";
        }
        // line 57
        echo "                            </select>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 65
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/occategorythumbnail_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 65,  163 => 57,  158 => 55,  153 => 54,  148 => 52,  143 => 51,  141 => 50,  135 => 47,  128 => 43,  122 => 42,  118 => 41,  111 => 37,  105 => 36,  101 => 35,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-occategorythumbnail" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
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
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-occategorythumbnail" class="form-horizontal">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">{{ entry_name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" class="form-control" disabled="disabled" id="input-name" value="{{ category_name }}"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">{{ entry_thumbnail_image }}</label>*/
/*                         <div class="col-sm-10"><a href="javascript:void(0);" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                             <input type="hidden" name="thumbnail_image" value="{{ thumbnail_image }}" id="input-thumbnail-image" />*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">{{ entry_homethumb_image }}</label>*/
/*                         <div class="col-sm-10"><a href="javascript:void(0);" id="home-image" data-toggle="image" class="img-thumbnail"><img src="{{ home_thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                             <input type="hidden" name="homethumb_image" value="{{ homethumb_image }}" id="input-homethumb-image" />*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-featured">{{ entry_featured }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="featured" id="input-featured" class="form-control">*/
/*                             {% if featured %}*/
/*                             <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                             <option value="0">{{ text_no }}</option>*/
/*                             {% else %}*/
/*                             <option value="1">{{ text_yes }}</option>*/
/*                             <option value="0" selected="selected">{{ text_no }}</option>*/
/*                             {% endif %}*/
/*                             </select>*/
/*                         </div>*/
/*                       </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
