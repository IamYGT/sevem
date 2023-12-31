<?php

/* catalog/category_form.twig */
class __TwigTemplate_2de6be7dfcb42e4099389c5926da46848b35cf00ed5f8cb9ba34f976aac75f1d extends Twig_Template
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
        <button type=\"submit\" form=\"form-category\" data-toggle=\"tooltip\" title=\"";
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
            echo "        <li><a href=\"";
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
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 31
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 38
            echo "                <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 43
            echo "                <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 45
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 47
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 48
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 49
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 51
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 54
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 56
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 60
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 62
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 63
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 64
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 66
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"input-custom-h1";
            // line 69
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"Ön tanımlı değerler oluşması için boş bırakın\">";
            echo (isset($context["entry_custom_h1"]) ? $context["entry_custom_h1"] : null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 71
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][custom_h1]\" placeholder=\"";
            echo (isset($context["entry_custom_h1"]) ? $context["entry_custom_h1"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" value=\"";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "custom_h1", array())) : (""));
            echo "\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-custom-h2";
            // line 75
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"Ön tanımlı değerler oluşması için boş bırakın\">";
            echo (isset($context["entry_custom_h2"]) ? $context["entry_custom_h2"] : null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 77
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][custom_h2]\" placeholder=\"";
            echo (isset($context["entry_custom_h2"]) ? $context["entry_custom_h2"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" value=\"";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "custom_h2", array())) : (""));
            echo "\" />
                    </div>
                  </div>
                  <div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"input-custom-alt";
            // line 80
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"Ön tanımlı değerler oluşması için boş bırakın\">";
            echo (isset($context["entry_custom_alt"]) ? $context["entry_custom_alt"] : null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 82
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][custom_alt]\" placeholder=\"";
            echo (isset($context["entry_custom_alt"]) ? $context["entry_custom_alt"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" value=\"";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "custom_alt", array())) : (""));
            echo "\" />
                    </div>
                  </div>
                  <div class=\"form-group\"><label class=\"col-sm-2 control-label\" for=\"input-custom-imgtitle";
            // line 85
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"Ön tanımlı değerler oluşması için boş bırakın\">";
            echo (isset($context["entry_custom_imgtitle"]) ? $context["entry_custom_imgtitle"] : null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 87
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][custom_imgtitle]\" placeholder=\"";
            echo (isset($context["entry_custom_imgtitle"]) ? $context["entry_custom_imgtitle"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" value=\"";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "custom_imgtitle", array())) : (""));
            echo "\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
\t\t\t
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 92
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 94
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 98
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 100
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-parent\">";
        // line 109
        echo (isset($context["entry_parent"]) ? $context["entry_parent"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"path\" value=\"";
        // line 111
        echo (isset($context["path"]) ? $context["path"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_parent"]) ? $context["entry_parent"] : null);
        echo "\" id=\"input-parent\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"parent_id\" value=\"";
        // line 112
        echo (isset($context["parent_id"]) ? $context["parent_id"] : null);
        echo "\" />
                  ";
        // line 113
        if ((isset($context["error_parent"]) ? $context["error_parent"] : null)) {
            // line 114
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_parent"]) ? $context["error_parent"] : null);
            echo "</div>
                  ";
        }
        // line 116
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 119
        echo (isset($context["help_filter"]) ? $context["help_filter"] : null);
        echo "\">";
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 121
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "\" id=\"input-filter\" class=\"form-control\" />
                  <div id=\"category-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category_filters"]) ? $context["category_filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_filter"]) {
            // line 124
            echo "                    <div id=\"category-filter";
            echo $this->getAttribute($context["category_filter"], "filter_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["category_filter"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"category_filter[]\" value=\"";
            // line 125
            echo $this->getAttribute($context["category_filter"], "filter_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 132
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 136
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 138
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["category_store"]) ? $context["category_store"] : null))) {
                // line 139
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 140
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            } else {
                // line 142
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" />
                        ";
                // line 143
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            }
            // line 145
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 152
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 153
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 154
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-top\"><span data-toggle=\"tooltip\" title=\"";
        // line 158
        echo (isset($context["help_top"]) ? $context["help_top"] : null);
        echo "\">";
        echo (isset($context["entry_top"]) ? $context["entry_top"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 162
        if ((isset($context["top"]) ? $context["top"] : null)) {
            // line 163
            echo "                      <input type=\"checkbox\" name=\"top\" value=\"1\" checked=\"checked\" id=\"input-top\" />
                      ";
        } else {
            // line 165
            echo "                      <input type=\"checkbox\" name=\"top\" value=\"1\" id=\"input-top\" />
                      ";
        }
        // line 167
        echo "                      &nbsp; </label>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-column\"><span data-toggle=\"tooltip\" title=\"";
        // line 172
        echo (isset($context["help_column"]) ? $context["help_column"] : null);
        echo "\">";
        echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"column\" value=\"";
        // line 174
        echo (isset($context["column"]) ? $context["column"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
        echo "\" id=\"input-column\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 178
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 180
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 184
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 187
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 188
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 189
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        } else {
            // line 191
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 192
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        }
        // line 194
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 199
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 204
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 205
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 210
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 211
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                    <td class=\"text-left\">";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 213
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                        <input type=\"text\" name=\"category_seo_url[";
                // line 214
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["category_seo_url"]) ? $context["category_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["category_seo_url"]) ? $context["category_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\" />
                      </div>
                      ";
                // line 216
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 217
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                      ";
                }
                // line 219
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                  </tbody>
                  
                </table>
              </div>
            </div>            
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 232
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 233
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 239
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 240
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                      <td class=\"text-left\"><select name=\"category_layout[";
            // line 241
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>
                          ";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 244
                echo "                          ";
                if (($this->getAttribute((isset($context["category_layout"]) ? $context["category_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["category_layout"]) ? $context["category_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 245
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                          ";
                } else {
                    // line 247
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                          ";
                }
                // line 249
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "                        </select></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  
  <script type=\"text/javascript\"><!--
\$('input[name=\\'path\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 277
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcategory_id: 0,
\t\t\t\t\tname: '";
        // line 282
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'path\\']').val(item['label']);
\t\t\$('input[name=\\'parent_id\\']').val(item['value']);
\t}
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 304
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#category-filter' + item['value']).remove();

\t\t\$('#category-filter').append('<div id=\"category-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#category-filter').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div>
";
        // line 332
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/category_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  823 => 332,  792 => 304,  767 => 282,  759 => 277,  733 => 253,  725 => 250,  719 => 249,  711 => 247,  703 => 245,  700 => 244,  696 => 243,  691 => 241,  687 => 240,  684 => 239,  680 => 238,  672 => 233,  668 => 232,  656 => 222,  643 => 219,  637 => 217,  635 => 216,  622 => 214,  613 => 213,  609 => 212,  605 => 211,  602 => 210,  598 => 209,  591 => 205,  587 => 204,  579 => 199,  572 => 194,  567 => 192,  562 => 191,  557 => 189,  552 => 188,  550 => 187,  544 => 184,  535 => 180,  530 => 178,  521 => 174,  514 => 172,  507 => 167,  503 => 165,  499 => 163,  497 => 162,  488 => 158,  481 => 154,  475 => 153,  471 => 152,  465 => 148,  457 => 145,  452 => 143,  447 => 142,  442 => 140,  437 => 139,  435 => 138,  431 => 136,  427 => 135,  421 => 132,  415 => 128,  406 => 125,  399 => 124,  395 => 123,  390 => 121,  383 => 119,  378 => 116,  372 => 114,  370 => 113,  366 => 112,  360 => 111,  355 => 109,  349 => 105,  332 => 100,  325 => 98,  312 => 94,  305 => 92,  291 => 87,  284 => 85,  272 => 82,  265 => 80,  253 => 77,  246 => 75,  233 => 71,  226 => 69,  221 => 66,  215 => 64,  213 => 63,  203 => 62,  196 => 60,  181 => 56,  174 => 54,  169 => 51,  163 => 49,  161 => 48,  151 => 47,  144 => 45,  138 => 43,  134 => 42,  130 => 40,  113 => 38,  109 => 37,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-category" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-category" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*             <li><a href="#tab-design" data-toggle="tab">{{ tab_design }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %}*/
/*                 <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <div class="tab-content">*/
/*                 {% for language in languages %}*/
/*                 <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="category_description[{{ language.language_id }}][name]" value="{{ category_description[language.language_id] ? category_description[language.language_id].name }}" placeholder="{{ entry_name }}" id="input-name{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_name[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="category_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control">{{ category_description[language.language_id] ? category_description[language.language_id].description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="category_description[{{ language.language_id }}][meta_title]" value="{{ category_description[language.language_id] ? category_description[language.language_id].meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_meta_title[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_meta_title[language.language_id] }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/* <label class="col-sm-2 control-label" for="input-custom-h1{{ language.language_id }}"><span data-toggle="tooltip" title="Ön tanımlı değerler oluşması için boş bırakın">{{ entry_custom_h1 }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="category_description[{{ language.language_id }}][custom_h1]" placeholder="{{ entry_custom_h1 }}" id="input-meta-description{{ language.language_id }}" class="form-control" value="{{ category_description[language.language_id] ? category_description[language.language_id].custom_h1 }}" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/* 				  <label class="col-sm-2 control-label" for="input-custom-h2{{ language.language_id }}"><span data-toggle="tooltip" title="Ön tanımlı değerler oluşması için boş bırakın">{{ entry_custom_h2 }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="category_description[{{ language.language_id }}][custom_h2]" placeholder="{{ entry_custom_h2 }}" id="input-meta-description{{ language.language_id }}" class="form-control" value="{{ category_description[language.language_id] ? category_description[language.language_id].custom_h2 }}" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group"><label class="col-sm-2 control-label" for="input-custom-alt{{ language.language_id }}"><span data-toggle="tooltip" title="Ön tanımlı değerler oluşması için boş bırakın">{{ entry_custom_alt }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="category_description[{{ language.language_id }}][custom_alt]" placeholder="{{ entry_custom_alt }}" id="input-meta-description{{ language.language_id }}" class="form-control" value="{{ category_description[language.language_id] ? category_description[language.language_id].custom_alt }}" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group"><label class="col-sm-2 control-label" for="input-custom-imgtitle{{ language.language_id }}"><span data-toggle="tooltip" title="Ön tanımlı değerler oluşması için boş bırakın">{{ entry_custom_imgtitle }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="category_description[{{ language.language_id }}][custom_imgtitle]" placeholder="{{ entry_custom_imgtitle }}" id="input-meta-description{{ language.language_id }}" class="form-control" value="{{ category_description[language.language_id] ? category_description[language.language_id].custom_imgtitle }}" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/* 			*/
/*                     <label class="col-sm-2 control-label" for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="category_description[{{ language.language_id }}][meta_description]" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description{{ language.language_id }}" class="form-control">{{ category_description[language.language_id] ? category_description[language.language_id].meta_description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="category_description[{{ language.language_id }}][meta_keyword]" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword{{ language.language_id }}" class="form-control">{{ category_description[language.language_id] ? category_description[language.language_id].meta_keyword }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-data">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-parent">{{ entry_parent }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="path" value="{{ path }}" placeholder="{{ entry_parent }}" id="input-parent" class="form-control" />*/
/*                   <input type="hidden" name="parent_id" value="{{ parent_id }}" />*/
/*                   {% if error_parent %}*/
/*                   <div class="text-danger">{{ error_parent }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="{{ help_filter }}">{{ entry_filter }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="filter" value="" placeholder="{{ entry_filter }}" id="input-filter" class="form-control" />*/
/*                   <div id="category-filter" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for category_filter in category_filters %}*/
/*                     <div id="category-filter{{ category_filter.filter_id }}"><i class="fa fa-minus-circle"></i> {{ category_filter.name }}*/
/*                       <input type="hidden" name="category_filter[]" value="{{ category_filter.filter_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for store in stores %}*/
/*                     <div class="checkbox">*/
/*                       <label>*/
/*                         {% if store.store_id in category_store %}*/
/*                         <input type="checkbox" name="category_store[]" value="{{ store.store_id }}" checked="checked" />*/
/*                         {{ store.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="category_store[]" value="{{ store.store_id }}" />*/
/*                         {{ store.name }}*/
/*                         {% endif %}*/
/*                       </label>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="image" value="{{ image }}" id="input-image" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-top"><span data-toggle="tooltip" title="{{ help_top }}">{{ entry_top }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if top %}*/
/*                       <input type="checkbox" name="top" value="1" checked="checked" id="input-top" />*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="top" value="1" id="input-top" />*/
/*                       {% endif %}*/
/*                       &nbsp; </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-column"><span data-toggle="tooltip" title="{{ help_column }}">{{ entry_column }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="column" value="{{ column }}" placeholder="{{ entry_column }}" id="input-column" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     {% if status %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-seo">*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_keyword }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for store in stores %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ store.name }}</td>*/
/*                     <td class="text-left">{% for language in languages %}*/
/*                       <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                         <input type="text" name="category_seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if category_seo_url[store.store_id][language.language_id] %}{{ category_seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control" />*/
/*                       </div>*/
/*                       {% if error_keyword[store.store_id][language.language_id] %}*/
/*                       <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                       {% endif %}*/
/*                       {% endfor %}</td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </div>            */
/*             <div class="tab-pane" id="tab-design">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_layout }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% for store in stores %}*/
/*                     <tr>*/
/*                       <td class="text-left">{{ store.name }}</td>*/
/*                       <td class="text-left"><select name="category_layout[{{ store.store_id }}]" class="form-control">*/
/*                           <option value=""></option>*/
/*                           {% for layout in layouts %}*/
/*                           {% if category_layout[store.store_id] and category_layout[store.store_id] == layout.layout_id %}*/
/*                           <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                           {% else %}*/
/*                           <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </select></td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/*   <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> */
/*   */
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/*   */
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'path\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					category_id: 0,*/
/* 					name: '{{ text_none }}'*/
/* 				});*/
/* */
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'path\']').val(item['label']);*/
/* 		$('input[name=\'parent_id\']').val(item['value']);*/
/* 	}*/
/* });*/
/* //--></script>*/
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'filter\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/filter/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['filter_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter\']').val('');*/
/* */
/* 		$('#category-filter' + item['value']).remove();*/
/* */
/* 		$('#category-filter').append('<div id="category-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category_filter[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#category-filter').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script>*/
/*   <script type="text/javascript"><!--*/
/* $('#language a:first').tab('show');*/
/* //--></script></div>*/
/* {{ footer }}*/
/* */
