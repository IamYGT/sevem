<?php

/* tt_origine4/template/extension/module/ocmegamenu.twig */
class __TwigTemplate_7c83834d84640509a3aeed9281c983ec5bb03d551a7ce4b3f7c93ee99702940c extends Twig_Template
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
        echo "<style>
    #oc-menu-";
        // line 2
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .oc-menu-bar {
        min-height: ";
        // line 3
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "menu_height", array());
        echo ";
        background: ";
        // line 4
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "menu_bg", array());
        echo ";
        color: ";
        // line 5
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "menu_text_color", array());
        echo ";
    }
    #oc-menu-";
        // line 7
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo ".oc-menu-bar {
        min-height: ";
        // line 8
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "menu_height", array());
        echo ";
        background: ";
        // line 9
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "menu_bg", array());
        echo ";
        color: ";
        // line 10
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "menu_text_color", array());
        echo ";
    }
    #oc-menu-";
        // line 12
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-top-items .li-top-item {
        background: ";
        // line 13
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "item_bg", array());
        echo ";
        color: ";
        // line 14
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "item_font_color", array());
        echo ";
    }
    #oc-menu-";
        // line 16
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-top-items .li-top-item .a-top-link {
        padding: ";
        // line 17
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "menu_pd_top", array());
        echo " ";
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "menu_pd_right", array());
        echo " ";
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "menu_pd_bottom", array());
        echo " ";
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "menu_pd_left", array());
        echo ";
        color: ";
        // line 18
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "item_font_color", array());
        echo ";
         text-transform: ";
        // line 19
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "item_font_transform", array());
        echo ";
        font-size: 17px;
        text-transform: ";
        // line 21
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "third_item_font_transform", array());
        echo ";
\t\tfont-weight: 400;
    }
    #oc-menu-";
        // line 24
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-top-items .li-top-item:hover, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-top-items .li-top-item.active {
        background: ";
        // line 25
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "item_bg_hover", array());
        echo ";
        color: ";
        // line 26
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "item_font_color_hover", array());
        echo ";
    }
    #oc-menu-";
        // line 28
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-top-items .li-top-item:hover .a-top-link, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-top-items .li-top-item.active .a-top-link{
        color: ";
        // line 29
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "item_font_color_hover", array());
        echo ";
     }
    #oc-menu-";
        // line 31
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .mega-menu-container {
        width: ";
        // line 32
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_menu_width", array());
        echo ";
        background: ";
        // line 33
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_menu_bg", array());
        echo ";
        padding: ";
        // line 34
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_menu_pd_top", array());
        echo " ";
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_menu_pd_right", array());
        echo " ";
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_menu_pd_bottom", array());
        echo " ";
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_menu_pd_left", array());
        echo ";
        color: ";
        // line 35
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_text_color", array());
        echo ";
    }
    #oc-menu-";
        // line 37
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .mega-menu-container a, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .mega-menu-container h1, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .mega-menu-container h2, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .mega-menu-container h3,
    #oc-menu-";
        // line 38
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .mega-menu-container h4, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .mega-menu-container h5, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .mega-menu-container h6, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .mega-menu-container span {
        color: ";
        // line 39
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_text_color", array());
        echo ";
    }
    #oc-menu-";
        // line 41
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-second-items .li-second-items {
        background: ";
        // line 42
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "second_item_bg", array());
        echo ";
        color: ";
        // line 43
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "second_item_font_color", array());
        echo ";
    }
    #oc-menu-";
        // line 45
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-second-items .li-second-items:hover, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-second-items .li-second-items.active {
        background: ";
        // line 46
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "second_item_bg_hover", array());
        echo ";
        color: ";
        // line 47
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "second_item_font_color_hover", array());
        echo ";
    }
    #oc-menu-";
        // line 49
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-second-items .li-second-items .a-second-link {
        color: ";
        // line 50
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "second_item_font_color", array());
        echo ";
        font-size: ";
        // line 51
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "second_item_font_size", array());
        echo ";
        text-transform: ";
        // line 52
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "second_item_font_transform", array());
        echo ";
        font-weight: ";
        // line 53
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "second_item_font_weight", array());
        echo ";
    }
    #oc-menu-";
        // line 55
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-second-items .li-second-items:hover .a-second-link, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-second-items .li-second-items.active .a-second-link {
        color: ";
        // line 56
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "second_item_font_color_hover", array());
        echo ";
        font-weight: ";
        // line 57
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "second_item_font_weight_hover", array());
        echo ";
    }
    #oc-menu-";
        // line 59
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-third-items .li-third-items {
        background: ";
        // line 60
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "third_item_bg", array());
        echo ";
    }
    #oc-menu-";
        // line 62
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-third-items .li-third-items:hover, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-third-items .li-third-items.active {
        background: ";
        // line 63
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "third_item_bg_hover", array());
        echo ";
    }
    #oc-menu-";
        // line 65
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-third-items .li-third-items .a-third-link {
        color: ";
        // line 66
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "third_item_font_color", array());
        echo ";
        font-size: 17px;
        text-transform: ";
        // line 68
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "third_item_font_transform", array());
        echo ";
\t\tfont-weight: 500;
    }
    #oc-menu-";
        // line 71
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-third-items .li-third-items:hover .a-third-link, #oc-menu-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " .ul-third-items .li-third-items.active .a-third-link {
        color: ";
        // line 72
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "third_item_font_color_hover", array());
        echo ";
        font-weight: ";
        // line 73
        echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "third_item_font_weight_hover", array());
        echo ";
    }
</style>
";
        // line 76
        if ((isset($context["warning"]) ? $context["warning"] : null)) {
        } else {
            // line 78
            echo "    ";
            if (((isset($context["menu_type"]) ? $context["menu_type"] : null) == "horizontal")) {
                // line 79
                echo "        <div class=\"oc-menu horizontal-menu oc-menu-bar visible-lg visible-md\" id=\"oc-menu-";
                echo (isset($context["module_id"]) ? $context["module_id"] : null);
                echo "\">
            ";
                // line 80
                if ((isset($context["items"]) ? $context["items"] : null)) {
                    // line 81
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo (isset($context["module_id"]) ? $context["module_id"] : null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "effect", array());
                    echo "\" />
                <ul class=\"ul-top-items\">
                    ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 84
                        echo "                        ";
                        if ($this->getAttribute($context["top_item"], "status", array())) {
                            // line 85
                            echo "                            <li class=\"li-top-item ";
                            echo $this->getAttribute($context["top_item"], "item_align", array());
                            echo "\" style=\"float: ";
                            echo $this->getAttribute($context["top_item"], "item_align", array());
                            echo "\">
                                ";
                            // line 86
                            if ($this->getAttribute($context["top_item"], "has_link", array())) {
                                // line 87
                                echo "                                    <a class=\"a-top-link\" href=\"";
                                echo $this->getAttribute($context["top_item"], "link", array());
                                echo "\">
                                        ";
                                // line 88
                                if ($this->getAttribute($context["top_item"], "icon", array())) {
                                    // line 89
                                    echo "                                            <img src=\"";
                                    echo $this->getAttribute($context["top_item"], "icon", array());
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 91
                                echo "                                        ";
                                if ($this->getAttribute($context["top_item"], "has_title", array())) {
                                    // line 92
                                    echo "                                            <span>";
                                    echo $this->getAttribute($context["top_item"], "title", array());
                                    echo "</span>
                                        ";
                                }
                                // line 94
                                echo "                                        ";
                                if ($this->getAttribute($context["top_item"], "has_child", array())) {
                                    // line 95
                                    echo "                                            <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 97
                                echo "                                    </a>
                                ";
                            } else {
                                // line 99
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 100
                                if ($this->getAttribute($context["top_item"], "icon", array())) {
                                    // line 101
                                    echo "                                            <img src=\"";
                                    echo $this->getAttribute($context["top_item"], "icon", array());
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 103
                                echo "                                        ";
                                if ($this->getAttribute($context["top_item"], "has_title", array())) {
                                    // line 104
                                    echo "                                            <span>";
                                    echo $this->getAttribute($context["top_item"], "title", array());
                                    echo "</span>
                                        ";
                                }
                                // line 106
                                echo "                                        ";
                                if ($this->getAttribute($context["top_item"], "has_child", array())) {
                                    // line 107
                                    echo "                                            <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 109
                                echo "                                    </a>
                                ";
                            }
                            // line 111
                            echo "                                ";
                            if ($this->getAttribute($context["top_item"], "has_child", array())) {
                                // line 112
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 113
                                if (($this->getAttribute($context["top_item"], "sub_menu_type", array()) == "mega")) {
                                    // line 114
                                    echo "                                        ";
                                    if (($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) == "children")) {
                                        // line 115
                                        echo "                                            <div class=\"mega-menu-container sub-menu-container ";
                                        echo $this->getAttribute($context["top_item"], "item_align", array());
                                        echo " ";
                                        if (($this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_menu_width", array()) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\">
                                                ";
                                        // line 116
                                        if ((twig_length_filter($this->env, $this->getAttribute($context["top_item"], "sub_items", array())) > 0)) {
                                            // line 117
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["top_item"], "sub_items", array()));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 118
                                                echo "                                                        ";
                                                if ($this->getAttribute($context["sub_item2"], "status", array())) {
                                                    // line 119
                                                    echo "                                                            <div class=\"";
                                                    if ($this->getAttribute($context["top_item"], "sub_menu_content_columns", array())) {
                                                        echo "col-md-";
                                                        echo $this->getAttribute($context["top_item"], "sub_menu_content_columns", array());
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 120
                                                    if (($this->getAttribute($context["top_item"], "sub_menu_content_columns", array()) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo $this->getAttribute($context["top_item"], "sub_menu_content_columns", array());
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <a class=\"a-mega-second-link\" href=\"";
                                                    // line 121
                                                    echo $this->getAttribute($context["sub_item2"], "link", array());
                                                    echo "\"><h4><strong>";
                                                    echo $this->getAttribute($context["sub_item2"], "title", array());
                                                    echo "</strong></h4></a>
                                                                ";
                                                    // line 122
                                                    if ((twig_length_filter($this->env, $this->getAttribute($context["sub_item2"], "sub_items", array())) > 0)) {
                                                        // line 123
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 124
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub_item2"], "sub_items", array()));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 125
                                                            echo "                                                                            ";
                                                            if ($this->getAttribute($context["sub_item3"], "status", array())) {
                                                                // line 126
                                                                echo "                                                                                <a class=\"a-mega-third-link\" href=\"";
                                                                echo $this->getAttribute($context["sub_item3"], "link", array());
                                                                echo "\"><h5>";
                                                                echo $this->getAttribute($context["sub_item3"], "title", array());
                                                                echo "</h5></a>
                                                                            ";
                                                            }
                                                            // line 128
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 129
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 131
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 133
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 134
                                            echo "                                                ";
                                        }
                                        // line 135
                                        echo "                                            </div>
                                        ";
                                    }
                                    // line 137
                                    echo "
                                        ";
                                    // line 138
                                    if (($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) == "category")) {
                                        // line 139
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, $this->getAttribute($context["top_item"], "sub_menu_content", array())) > 0)) {
                                            // line 140
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            echo $this->getAttribute($context["top_item"], "item_align", array());
                                            echo " ";
                                            if (($this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_menu_width", array()) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\">
                                                    ";
                                            // line 141
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["top_item"], "sub_menu_content", array()));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 142
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 143
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 144
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 145
                                                            echo "                                                                    <div class=\"col-md-";
                                                            echo $this->getAttribute($context["widget"], "cols", array());
                                                            echo " sub-item2-content\" data-cols=\"";
                                                            echo $this->getAttribute($context["widget"], "cols", array());
                                                            echo "\">
                                                                        ";
                                                            // line 146
                                                            if ($this->getAttribute($context["widget"], "image", array())) {
                                                                // line 147
                                                                echo "                                                                            <img src=\"";
                                                                echo $this->getAttribute($context["widget"], "image", array());
                                                                echo "\" alt=\"";
                                                                echo $this->getAttribute($context["widget"], "title", array());
                                                                echo "\" class=\"mega-second-image\" />
                                                                        ";
                                                            }
                                                            // line 149
                                                            echo "                                                                        <a class=\"a-mega-second-link\" href=\"";
                                                            echo $this->getAttribute($context["widget"], "link", array());
                                                            echo "\"><h4><strong>";
                                                            echo $this->getAttribute($context["widget"], "title", array());
                                                            echo "</strong></h4></a>
                                                                        ";
                                                            // line 150
                                                            if ((twig_length_filter($this->env, $this->getAttribute($context["widget"], "children", array())) > 0)) {
                                                                // line 151
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 152
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["widget"], "children", array()));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 153
                                                                    echo "                                                                                    <a class=\"a-mega-third-link\" href=\"";
                                                                    echo $this->getAttribute($context["c_category"], "link", array());
                                                                    echo "\"><h5>";
                                                                    echo $this->getAttribute($context["c_category"], "title", array());
                                                                    echo "</h5></a>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 155
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 157
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 159
                                                        echo "                                                            ";
                                                    }
                                                    // line 160
                                                    echo "                                                        ";
                                                }
                                                // line 161
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 162
                                            echo "                                                </div>
                                            ";
                                        }
                                        // line 164
                                        echo "                                        ";
                                    }
                                    // line 165
                                    echo "
                                        ";
                                    // line 166
                                    if (($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) == "widget")) {
                                        // line 167
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, $this->getAttribute($context["top_item"], "sub_menu_content", array())) > 0)) {
                                            // line 168
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            echo $this->getAttribute($context["top_item"], "item_align", array());
                                            echo " ";
                                            if (($this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_menu_width", array()) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\">
                                                    ";
                                            // line 169
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["top_item"], "sub_menu_content", array()));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 170
                                                echo "                                                        ";
                                                if (($context["type"] == "widget")) {
                                                    // line 171
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 172
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 173
                                                            echo "                                                                    ";
                                                            if (($this->getAttribute($context["widget"], "type", array()) == "category")) {
                                                                // line 174
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo "\">
                                                                            ";
                                                                // line 175
                                                                if ($this->getAttribute($context["widget"], "image", array())) {
                                                                    // line 176
                                                                    echo "                                                                                <img src=\"";
                                                                    echo $this->getAttribute($context["widget"], "image", array());
                                                                    echo "\" alt=\"";
                                                                    echo $this->getAttribute($context["widget"], "title", array());
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 178
                                                                echo "                                                                            <a class=\"a-mega-second-link\" href=\"";
                                                                echo $this->getAttribute($context["widget"], "link", array());
                                                                echo "\"><h4><strong>";
                                                                echo $this->getAttribute($context["widget"], "title", array());
                                                                echo "</strong></h4></a>
                                                                            ";
                                                                // line 179
                                                                if ((twig_length_filter($this->env, $this->getAttribute($context["widget"], "children", array())) > 0)) {
                                                                    // line 180
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 181
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["widget"], "children", array()));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 182
                                                                        echo "                                                                                        <a class=\"a-mega-third-link\" href=\"";
                                                                        echo $this->getAttribute($context["c_category"], "link", array());
                                                                        echo "\"><h5>";
                                                                        echo $this->getAttribute($context["c_category"], "title", array());
                                                                        echo "</h5></a>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 184
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 186
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 188
                                                            echo "
                                                                    ";
                                                            // line 189
                                                            if (($this->getAttribute($context["widget"], "type", array()) == "product")) {
                                                                // line 190
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo "\">
                                                                            ";
                                                                // line 191
                                                                if ($this->getAttribute($context["widget"], "image", array())) {
                                                                    // line 192
                                                                    echo "                                                                                <img src=\"";
                                                                    echo $this->getAttribute($context["widget"], "image", array());
                                                                    echo "\" alt=\"";
                                                                    echo $this->getAttribute($context["widget"], "title", array());
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 194
                                                                echo "                                                                            <a class=\"a-mega-second-link\" href=\"";
                                                                echo $this->getAttribute($context["widget"], "link", array());
                                                                echo "\"><h4><strong>";
                                                                echo $this->getAttribute($context["widget"], "title", array());
                                                                echo "</strong></h4></a>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 197
                                                            echo "
                                                                    ";
                                                            // line 198
                                                            if (($this->getAttribute($context["widget"], "type", array()) == "html")) {
                                                                // line 199
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo "\">
                                                                            <h4><strong>";
                                                                // line 200
                                                                echo $this->getAttribute($context["widget"], "title", array());
                                                                echo "</strong></h4>
                                                                            <p>";
                                                                // line 201
                                                                echo $this->getAttribute($context["widget"], "content", array());
                                                                echo "</p>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 204
                                                            echo "
                                                                    ";
                                                            // line 205
                                                            if (($this->getAttribute($context["widget"], "type", array()) == "link")) {
                                                                // line 206
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo "\">
                                                                            <a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 207
                                                                echo $this->getAttribute($context["widget"], "link", array());
                                                                echo "\"><h4><strong>";
                                                                echo $this->getAttribute($context["widget"], "title", array());
                                                                echo "</strong></h4></a>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 210
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 211
                                                        echo "                                                            ";
                                                    }
                                                    // line 212
                                                    echo "                                                        ";
                                                }
                                                // line 213
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 214
                                            echo "                                                </div>
                                            ";
                                        }
                                        // line 216
                                        echo "                                        ";
                                    }
                                    // line 217
                                    echo "                                    ";
                                }
                                // line 218
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 220
                                if (($this->getAttribute($context["top_item"], "sub_menu_type", array()) == "flyout")) {
                                    // line 221
                                    echo "                                        ";
                                    if (($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) == "children")) {
                                        // line 222
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, $this->getAttribute($context["top_item"], "sub_items", array())) > 0)) {
                                            // line 223
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo $this->getAttribute($context["top_item"], "item_align", array());
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 225
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["top_item"], "sub_items", array()));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 226
                                                echo "                                                            ";
                                                if ($this->getAttribute($context["sub_item2"], "status", array())) {
                                                    // line 227
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 228
                                                    echo $this->getAttribute($context["sub_item2"], "link", array());
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 229
                                                    echo $this->getAttribute($context["sub_item2"], "title", array());
                                                    echo "</span>
                                                                        ";
                                                    // line 230
                                                    if ((twig_length_filter($this->env, $this->getAttribute($context["sub_item2"], "sub_items", array())) > 0)) {
                                                        // line 231
                                                        echo "                                                                            ";
                                                        if (($this->getAttribute($context["top_item"], "item_align", array()) == "left")) {
                                                            // line 232
                                                            echo "                                                                                <i class=\"icon-chevron-right\" aria-hidden=\"true\"></i>
                                                                            ";
                                                        }
                                                        // line 234
                                                        echo "                                                                            ";
                                                        if (($this->getAttribute($context["top_item"], "item_align", array()) == "right")) {
                                                            // line 235
                                                            echo "                                                                                <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i>
                                                                            ";
                                                        }
                                                        // line 237
                                                        echo "                                                                        ";
                                                    }
                                                    // line 238
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 239
                                                    if ((twig_length_filter($this->env, $this->getAttribute($context["sub_item2"], "sub_items", array())) > 0)) {
                                                        // line 240
                                                        echo "                                                                        <div class=\"flyout-third-items ";
                                                        echo $this->getAttribute($context["top_item"], "item_align", array());
                                                        echo "\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 242
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub_item2"], "sub_items", array()));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 243
                                                            echo "                                                                                    ";
                                                            if ($this->getAttribute($context["sub_item3"], "status", array())) {
                                                                // line 244
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 245
                                                                echo $this->getAttribute($context["sub_item3"], "link", array());
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo $this->getAttribute($context["sub_item3"], "title", array());
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 248
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 249
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 252
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 254
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 255
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 258
                                        echo "                                        ";
                                    }
                                    // line 259
                                    echo "
                                        ";
                                    // line 260
                                    if (($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) == "category")) {
                                        // line 261
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, $this->getAttribute($context["top_item"], "sub_menu_content", array())) > 0)) {
                                            // line 262
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo $this->getAttribute($context["top_item"], "item_align", array());
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 264
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["top_item"], "sub_menu_content", array()));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 265
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 266
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 267
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 268
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 269
                                                            echo $this->getAttribute($context["widget"], "link", array());
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 270
                                                            echo $this->getAttribute($context["widget"], "title", array());
                                                            echo "</span>
                                                                                ";
                                                            // line 271
                                                            if ((twig_length_filter($this->env, $this->getAttribute($context["widget"], "children", array())) > 0)) {
                                                                // line 272
                                                                echo "                                                                                    ";
                                                                if (($this->getAttribute($context["top_item"], "item_align", array()) == "left")) {
                                                                    // line 273
                                                                    echo "                                                                                        <i class=\"icon-chevron-right\" aria-hidden=\"true\"></i>
                                                                                    ";
                                                                }
                                                                // line 275
                                                                echo "                                                                                    ";
                                                                if (($this->getAttribute($context["top_item"], "item_align", array()) == "right")) {
                                                                    // line 276
                                                                    echo "                                                                                        <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i>
                                                                                    ";
                                                                }
                                                                // line 278
                                                                echo "                                                                                ";
                                                            }
                                                            // line 279
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 280
                                                            if ((twig_length_filter($this->env, $this->getAttribute($context["widget"], "children", array())) > 0)) {
                                                                // line 281
                                                                echo "                                                                                <div class=\"flyout-third-items ";
                                                                echo $this->getAttribute($context["top_item"], "item_align", array());
                                                                echo "\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 283
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["widget"], "children", array()));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 284
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 285
                                                                    echo $this->getAttribute($context["c_category"], "link", array());
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo $this->getAttribute($context["c_category"], "title", array());
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 288
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 291
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 293
                                                        echo "                                                                ";
                                                    }
                                                    // line 294
                                                    echo "                                                            ";
                                                }
                                                // line 295
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 296
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 299
                                        echo "                                        ";
                                    }
                                    // line 300
                                    echo "                                    ";
                                }
                                // line 301
                                echo "                                ";
                            }
                            // line 302
                            echo "                            </li>
                        ";
                        }
                        // line 304
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 305
                    echo "                </ul>
            ";
                }
                // line 307
                echo "        </div>
    ";
            }
            // line 309
            echo "
    ";
            // line 310
            $context["item_show"] = $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "item_show", array());
            // line 311
            echo "    ";
            if (((isset($context["menu_type"]) ? $context["menu_type"] : null) == "vertical")) {
                // line 312
                echo "        ";
                $context["count"] = 0;
                // line 313
                echo "        <div class=\"oc-menu vertical-menu visible-lg visible-md\" id=\"oc-menu-";
                echo (isset($context["module_id"]) ? $context["module_id"] : null);
                echo "\">
            ";
                // line 314
                if ((isset($context["items"]) ? $context["items"] : null)) {
                    // line 315
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo (isset($context["module_id"]) ? $context["module_id"] : null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "effect", array());
                    echo "\" />
                <div class=\"oc-menu-bar\">
                    <div class=\"left\"><i class=\"fa fa-bars\"></i> <span>";
                    // line 317
                    echo (isset($context["text_vertical_bar"]) ? $context["text_vertical_bar"] : null);
                    echo "</span></div>
                    <div class=\"right\"><i class=\"icon-align-right\" aria-hidden=\"true\"></i></div>
                </div>
                <ul class=\"ul-top-items\">
                    ";
                    // line 321
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 322
                        echo "                        ";
                        if ($this->getAttribute($context["top_item"], "status", array())) {
                            // line 323
                            echo "                            ";
                            $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
                            // line 324
                            echo "                            <li class=\"li-top-item ";
                            echo $this->getAttribute($context["top_item"], "item_align", array());
                            echo " ";
                            echo ((((isset($context["count"]) ? $context["count"] : null) > (isset($context["item_show"]) ? $context["item_show"] : null))) ? ("over") : (""));
                            echo "\">
                                ";
                            // line 325
                            if ($this->getAttribute($context["top_item"], "has_link", array())) {
                                // line 326
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo $this->getAttribute($context["top_item"], "link", array());
                                echo "\">
                                        ";
                                // line 327
                                if ($this->getAttribute($context["top_item"], "icon", array())) {
                                    // line 328
                                    echo "                                            <img src=\"";
                                    echo $this->getAttribute($context["top_item"], "icon", array());
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 330
                                echo "                                        ";
                                if ($this->getAttribute($context["top_item"], "has_title", array())) {
                                    // line 331
                                    echo "                                            <span>";
                                    echo $this->getAttribute($context["top_item"], "title", array());
                                    echo "</span>
                                        ";
                                }
                                // line 333
                                echo "                                        ";
                                if ($this->getAttribute($context["top_item"], "has_child", array())) {
                                    // line 334
                                    echo "                                            <i class=\"icon-chevron-right\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 336
                                echo "                                    </a>
                                ";
                            } else {
                                // line 338
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 339
                                if ($this->getAttribute($context["top_item"], "icon", array())) {
                                    // line 340
                                    echo "                                            <img src=\"";
                                    echo $this->getAttribute($context["top_item"], "icon", array());
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 342
                                echo "                                        ";
                                if ($this->getAttribute($context["top_item"], "has_title", array())) {
                                    // line 343
                                    echo "                                            <span>";
                                    echo $this->getAttribute($context["top_item"], "title", array());
                                    echo "</span>
                                        ";
                                }
                                // line 345
                                echo "                                        ";
                                if ($this->getAttribute($context["top_item"], "has_child", array())) {
                                    // line 346
                                    echo "                                            <i class=\"icon-chevron-right\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 348
                                echo "                                    </a>
                                ";
                            }
                            // line 350
                            echo "                                ";
                            if ($this->getAttribute($context["top_item"], "has_child", array())) {
                                // line 351
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 352
                                if (($this->getAttribute($context["top_item"], "sub_menu_type", array()) == "mega")) {
                                    // line 353
                                    echo "                                        ";
                                    if (($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) == "children")) {
                                        // line 354
                                        echo "                                            <div class=\"mega-menu-container sub-menu-container ";
                                        if (($this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_menu_width", array()) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\">
                                                ";
                                        // line 355
                                        if ((twig_length_filter($this->env, $this->getAttribute($context["top_item"], "sub_items", array())) > 0)) {
                                            // line 356
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["top_item"], "sub_items", array()));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 357
                                                echo "                                                        ";
                                                if ($this->getAttribute($context["sub_item2"], "status", array())) {
                                                    // line 358
                                                    echo "                                                            <div class=\"";
                                                    if ($this->getAttribute($context["top_item"], "sub_menu_content_columns", array())) {
                                                        echo "col-md-";
                                                        echo $this->getAttribute($context["top_item"], "sub_menu_content_columns", array());
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 359
                                                    if (($this->getAttribute($context["top_item"], "sub_menu_content_columns", array()) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo $this->getAttribute($context["top_item"], "sub_menu_content_columns", array());
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <a class=\"a-mega-second-link\" href=\"";
                                                    // line 360
                                                    echo $this->getAttribute($context["sub_item2"], "link", array());
                                                    echo "\"><h4><strong>";
                                                    echo $this->getAttribute($context["sub_item2"], "title", array());
                                                    echo "</strong></h4></a>
                                                                ";
                                                    // line 361
                                                    if ((twig_length_filter($this->env, $this->getAttribute($context["sub_item2"], "sub_items", array())) > 0)) {
                                                        // line 362
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 363
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub_item2"], "sub_items", array()));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 364
                                                            echo "                                                                            ";
                                                            if ($this->getAttribute($context["sub_item3"], "status", array())) {
                                                                // line 365
                                                                echo "                                                                                <a class=\"a-mega-third-link\" href=\"";
                                                                echo $this->getAttribute($context["sub_item3"], "link", array());
                                                                echo "\"><h5>";
                                                                echo $this->getAttribute($context["sub_item3"], "title", array());
                                                                echo "</h5></a>
                                                                            ";
                                                            }
                                                            // line 367
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 368
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 370
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 372
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 373
                                            echo "                                                ";
                                        }
                                        // line 374
                                        echo "                                            </div>
                                        ";
                                    } else {
                                        // line 376
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, $this->getAttribute($context["top_item"], "sub_menu_content", array())) > 0)) {
                                            // line 377
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            if (($this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "mega_menu_width", array()) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\">
                                                    ";
                                            // line 378
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["top_item"], "sub_menu_content", array()));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 379
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 380
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 381
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 382
                                                            echo "                                                                    <div class=\"col-md-";
                                                            echo $this->getAttribute($context["widget"], "cols", array());
                                                            echo " sub-item2-content\" data-cols=\"";
                                                            echo $this->getAttribute($context["widget"], "cols", array());
                                                            echo "\">
                                                                        ";
                                                            // line 383
                                                            if ($this->getAttribute($context["widget"], "image", array())) {
                                                                // line 384
                                                                echo "                                                                            <img src=\"";
                                                                echo $this->getAttribute($context["widget"], "image", array());
                                                                echo "\" alt=\"";
                                                                echo $this->getAttribute($context["widget"], "title", array());
                                                                echo "\" class=\"mega-second-image\" />
                                                                        ";
                                                            }
                                                            // line 386
                                                            echo "                                                                        <a class=\"a-mega-second-link\" href=\"";
                                                            echo $this->getAttribute($context["widget"], "link", array());
                                                            echo "\"><h4><strong>";
                                                            echo $this->getAttribute($context["widget"], "title", array());
                                                            echo "</strong></h4></a>
                                                                        ";
                                                            // line 387
                                                            if ((twig_length_filter($this->env, $this->getAttribute($context["widget"], "children", array())) > 0)) {
                                                                // line 388
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 389
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["widget"], "children", array()));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 390
                                                                    echo "                                                                                    <a class=\"a-mega-third-link\" href=\"";
                                                                    echo $this->getAttribute($context["c_category"], "link", array());
                                                                    echo "\"><h5>";
                                                                    echo $this->getAttribute($context["c_category"], "title", array());
                                                                    echo "</h5></a>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 392
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 394
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 396
                                                        echo "                                                            ";
                                                    }
                                                    // line 397
                                                    echo "                                                        ";
                                                }
                                                // line 398
                                                echo "
                                                        ";
                                                // line 399
                                                if (($context["type"] == "widget")) {
                                                    // line 400
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 401
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 402
                                                            echo "                                                                    ";
                                                            if (($this->getAttribute($context["widget"], "type", array()) == "category")) {
                                                                // line 403
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo "\">
                                                                            ";
                                                                // line 404
                                                                if ($this->getAttribute($context["widget"], "image", array())) {
                                                                    // line 405
                                                                    echo "                                                                                <img src=\"";
                                                                    echo $this->getAttribute($context["widget"], "image", array());
                                                                    echo "\" alt=\"";
                                                                    echo $this->getAttribute($context["widget"], "title", array());
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 407
                                                                echo "                                                                            <a class=\"a-mega-second-link\" href=\"";
                                                                echo $this->getAttribute($context["widget"], "link", array());
                                                                echo "\"><h4><strong>";
                                                                echo $this->getAttribute($context["widget"], "title", array());
                                                                echo "</strong></h4></a>
                                                                            ";
                                                                // line 408
                                                                if ((twig_length_filter($this->env, $this->getAttribute($context["widget"], "children", array())) > 0)) {
                                                                    // line 409
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 410
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["widget"], "children", array()));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 411
                                                                        echo "                                                                                        <a class=\"a-mega-third-link\" href=\"";
                                                                        echo $this->getAttribute($context["c_category"], "link", array());
                                                                        echo "\"><h5>";
                                                                        echo $this->getAttribute($context["c_category"], "title", array());
                                                                        echo "</h5></a>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 413
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 415
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 417
                                                            echo "
                                                                    ";
                                                            // line 418
                                                            if (($this->getAttribute($context["widget"], "type", array()) == "product")) {
                                                                // line 419
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo "\">
                                                                            ";
                                                                // line 420
                                                                if ($this->getAttribute($context["widget"], "image", array())) {
                                                                    // line 421
                                                                    echo "                                                                                <img src=\"";
                                                                    echo $this->getAttribute($context["widget"], "image", array());
                                                                    echo "\" alt=\"";
                                                                    echo $this->getAttribute($context["widget"], "title", array());
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 423
                                                                echo "                                                                            <a class=\"a-mega-second-link\" href=\"";
                                                                echo $this->getAttribute($context["widget"], "link", array());
                                                                echo "\"><h4><strong>";
                                                                echo $this->getAttribute($context["widget"], "title", array());
                                                                echo "</strong></h4></a>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 426
                                                            echo "
                                                                    ";
                                                            // line 427
                                                            if (($this->getAttribute($context["widget"], "type", array()) == "html")) {
                                                                // line 428
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo "\">
                                                                            <h4><strong>";
                                                                // line 429
                                                                echo $this->getAttribute($context["widget"], "title", array());
                                                                echo "</strong></h4>
                                                                            <p>";
                                                                // line 430
                                                                echo $this->getAttribute($context["widget"], "content", array());
                                                                echo "</p>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 433
                                                            echo "
                                                                    ";
                                                            // line 434
                                                            if (($this->getAttribute($context["widget"], "type", array()) == "link")) {
                                                                // line 435
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo $this->getAttribute($context["widget"], "cols", array());
                                                                echo "\">
                                                                            <a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 436
                                                                echo $this->getAttribute($context["widget"], "link", array());
                                                                echo "\"><h4><strong>";
                                                                echo $this->getAttribute($context["widget"], "title", array());
                                                                echo "</strong></h4></a>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 439
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 440
                                                        echo "                                                            ";
                                                    }
                                                    // line 441
                                                    echo "                                                        ";
                                                }
                                                // line 442
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 443
                                            echo "                                                </div>
                                            ";
                                        }
                                        // line 445
                                        echo "                                        ";
                                    }
                                    // line 446
                                    echo "                                    ";
                                }
                                // line 447
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 449
                                if (($this->getAttribute($context["top_item"], "sub_menu_type", array()) == "flyout")) {
                                    // line 450
                                    echo "                                        ";
                                    if (($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) == "children")) {
                                        // line 451
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, $this->getAttribute($context["top_item"], "sub_items", array())) > 0)) {
                                            // line 452
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo $this->getAttribute($context["top_item"], "item_align", array());
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 454
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["top_item"], "sub_items", array()));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 455
                                                echo "                                                            ";
                                                if ($this->getAttribute($context["sub_item2"], "status", array())) {
                                                    // line 456
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 457
                                                    echo $this->getAttribute($context["sub_item2"], "link", array());
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 458
                                                    echo $this->getAttribute($context["sub_item2"], "title", array());
                                                    echo "</span>
                                                                        ";
                                                    // line 459
                                                    if ((twig_length_filter($this->env, $this->getAttribute($context["sub_item2"], "sub_items", array())) > 0)) {
                                                        // line 460
                                                        echo "                                                                            <i class=\"icon-chevron-right\" aria-hidden=\"true\"></i>
                                                                        ";
                                                    }
                                                    // line 462
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 463
                                                    if ((twig_length_filter($this->env, $this->getAttribute($context["sub_item2"], "sub_items", array())) > 0)) {
                                                        // line 464
                                                        echo "                                                                        <div class=\"flyout-third-items ";
                                                        echo $this->getAttribute($context["top_item"], "item_align", array());
                                                        echo "\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 466
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub_item2"], "sub_items", array()));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 467
                                                            echo "                                                                                    ";
                                                            if ($this->getAttribute($context["sub_item3"], "status", array())) {
                                                                // line 468
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 469
                                                                echo $this->getAttribute($context["sub_item3"], "link", array());
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo $this->getAttribute($context["sub_item3"], "title", array());
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 472
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 473
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 476
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 478
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 479
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 482
                                        echo "                                        ";
                                    }
                                    // line 483
                                    echo "
                                        ";
                                    // line 484
                                    if (($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) == "category")) {
                                        // line 485
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, $this->getAttribute($context["top_item"], "sub_menu_content", array())) > 0)) {
                                            // line 486
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo $this->getAttribute($context["top_item"], "item_align", array());
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 488
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["top_item"], "sub_menu_content", array()));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 489
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 490
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 491
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 492
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 493
                                                            echo $this->getAttribute($context["widget"], "link", array());
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 494
                                                            echo $this->getAttribute($context["widget"], "title", array());
                                                            echo "</span>
                                                                                ";
                                                            // line 495
                                                            if ((twig_length_filter($this->env, $this->getAttribute($context["widget"], "children", array())) > 0)) {
                                                                // line 496
                                                                echo "                                                                                    <i class=\"icon-chevron-right\" aria-hidden=\"true\"></i>
                                                                                ";
                                                            }
                                                            // line 498
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 499
                                                            if ((twig_length_filter($this->env, $this->getAttribute($context["widget"], "children", array())) > 0)) {
                                                                // line 500
                                                                echo "                                                                                <div class=\"flyout-third-items ";
                                                                echo $this->getAttribute($context["top_item"], "item_align", array());
                                                                echo "\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 502
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["widget"], "children", array()));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 503
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 504
                                                                    echo $this->getAttribute($context["c_category"], "link", array());
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo $this->getAttribute($context["c_category"], "title", array());
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 507
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 510
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 512
                                                        echo "                                                                ";
                                                    }
                                                    // line 513
                                                    echo "                                                            ";
                                                }
                                                // line 514
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 515
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 518
                                        echo "                                        ";
                                    }
                                    // line 519
                                    echo "                                    ";
                                }
                                // line 520
                                echo "                                ";
                            }
                            // line 521
                            echo "                            </li>
                        ";
                        }
                        // line 523
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 524
                    echo "                    ";
                    if (((isset($context["count"]) ? $context["count"] : null) > (isset($context["item_show"]) ? $context["item_show"] : null))) {
                        // line 525
                        echo "                        <li class=\"li-top-item li-over li-plus\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-plus a-over\"><i class=\"icon-plus\" aria-hidden=\"true\"></i> <span>Daha Fazla</span></a>
                        </li>
                        <li class=\"li-top-item li-over li-minus over\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-minus a-over\"><i class=\"icon-minus2\" aria-hidden=\"true\"></i> <span>Öğeleri Kapat</span></a>
                        </li>
                    ";
                    }
                    // line 532
                    echo "                </ul>
            ";
                }
                // line 534
                echo "        </div>
    ";
            }
            // line 536
            echo "
    ";
            // line 537
            if (((isset($context["menu_type"]) ? $context["menu_type"] : null) == "mobile")) {
                // line 538
                echo "        <div class=\"oc-menu mobile-menu hidden-lg hidden-md\" id=\"oc-menu-";
                echo (isset($context["module_id"]) ? $context["module_id"] : null);
                echo "\">
            ";
                // line 539
                if ((isset($context["items"]) ? $context["items"] : null)) {
                    // line 540
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo (isset($context["module_id"]) ? $context["module_id"] : null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo $this->getAttribute((isset($context["menu_setting"]) ? $context["menu_setting"] : null), "effect", array());
                    echo "\" />
                <div class=\"oc-menu-bar\">
                    <div class=\"left\"><i class=\"fa fa-bars\"></i> <span>";
                    // line 542
                    echo (isset($context["text_mobile_bar"]) ? $context["text_mobile_bar"] : null);
                    echo "</span></div>
                    <div class=\"right\"><i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i></div>
                </div>
                <ul class=\"ul-top-items\">
                    ";
                    // line 546
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 547
                        echo "                        ";
                        if ($this->getAttribute($context["top_item"], "status", array())) {
                            // line 548
                            echo "                            <li class=\"li-top-item\">
                                ";
                            // line 549
                            if ($this->getAttribute($context["top_item"], "has_link", array())) {
                                // line 550
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo $this->getAttribute($context["top_item"], "link", array());
                                echo "\">
                                        ";
                                // line 551
                                if ($this->getAttribute($context["top_item"], "icon", array())) {
                                    // line 552
                                    echo "                                            <img src=\"";
                                    echo $this->getAttribute($context["top_item"], "icon", array());
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 554
                                echo "                                        ";
                                if ($this->getAttribute($context["top_item"], "has_title", array())) {
                                    // line 555
                                    echo "                                            <span>";
                                    echo $this->getAttribute($context["top_item"], "title", array());
                                    echo "</span>
                                        ";
                                }
                                // line 557
                                echo "                                    </a>
                                    ";
                                // line 558
                                if (($this->getAttribute($context["top_item"], "has_child", array()) && ($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) != "widget"))) {
                                    // line 559
                                    echo "                                        <span class=\"top-click-show a-click-show\">
                                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                                            <i class=\"fa fa-minus\" aria-hidden=\"true\"></i>
                                        </span>
                                    ";
                                }
                                // line 564
                                echo "                                ";
                            } else {
                                // line 565
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 566
                                if ($this->getAttribute($context["top_item"], "icon", array())) {
                                    // line 567
                                    echo "                                            <img src=\"";
                                    echo $this->getAttribute($context["top_item"], "icon", array());
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 569
                                echo "                                        ";
                                if ($this->getAttribute($context["top_item"], "has_title", array())) {
                                    // line 570
                                    echo "                                            <span>";
                                    echo $this->getAttribute($context["top_item"], "title", array());
                                    echo "</span>
                                        ";
                                }
                                // line 572
                                echo "                                    </a>
                                    ";
                                // line 573
                                if (($this->getAttribute($context["top_item"], "has_child", array()) && ($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) != "widget"))) {
                                    // line 574
                                    echo "                                        <span class=\"top-click-show a-click-show\">
                                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                                            <i class=\"fa fa-minus\" aria-hidden=\"true\"></i>
                                        </span>
                                    ";
                                }
                                // line 579
                                echo "                                ";
                            }
                            // line 580
                            echo "                                ";
                            if ($this->getAttribute($context["top_item"], "has_child", array())) {
                                // line 581
                                echo "                                    ";
                                if (($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) == "children")) {
                                    // line 582
                                    echo "                                        ";
                                    if ((twig_length_filter($this->env, $this->getAttribute($context["top_item"], "sub_items", array())) > 0)) {
                                        // line 583
                                        echo "                                            <div class=\"sub-menu-container\">
                                                <ul class=\"ul-second-items\">
                                                    ";
                                        // line 585
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["top_item"], "sub_items", array()));
                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                            // line 586
                                            echo "                                                        ";
                                            if ($this->getAttribute($context["sub_item2"], "status", array())) {
                                                // line 587
                                                echo "                                                            <li class=\"li-second-items\">
                                                                <a href=\"";
                                                // line 588
                                                echo $this->getAttribute($context["sub_item2"], "link", array());
                                                echo "\" class=\"a-second-link a-item\">
                                                                    <span class=\"a-second-title\">";
                                                // line 589
                                                echo $this->getAttribute($context["sub_item2"], "title", array());
                                                echo "</span>
                                                                </a>
                                                                ";
                                                // line 591
                                                if ((twig_length_filter($this->env, $this->getAttribute($context["sub_item2"], "sub_items", array())) > 0)) {
                                                    // line 592
                                                    echo "                                                                    <span class=\"second-click-show a-click-show\">
                                                                        <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                                                                        <i class=\"fa fa-minus\" aria-hidden=\"true\"></i>
                                                                    </span>
                                                                ";
                                                }
                                                // line 597
                                                echo "                                                                ";
                                                if ((twig_length_filter($this->env, $this->getAttribute($context["sub_item2"], "sub_items", array())) > 0)) {
                                                    // line 598
                                                    echo "                                                                    <div class=\"flyout-third-items\">
                                                                        <ul class=\"ul-third-items\">
                                                                            ";
                                                    // line 600
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub_item2"], "sub_items", array()));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                        // line 601
                                                        echo "                                                                                ";
                                                        if ($this->getAttribute($context["sub_item3"], "status", array())) {
                                                            // line 602
                                                            echo "                                                                                    <li class=\"li-third-items\">
                                                                                        <a href=\"";
                                                            // line 603
                                                            echo $this->getAttribute($context["sub_item3"], "link", array());
                                                            echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                            echo $this->getAttribute($context["sub_item3"], "title", array());
                                                            echo "</span></a>
                                                                                    </li>
                                                                                ";
                                                        }
                                                        // line 606
                                                        echo "                                                                            ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 607
                                                    echo "                                                                        </ul>
                                                                    </div>
                                                                ";
                                                }
                                                // line 610
                                                echo "                                                            </li>
                                                        ";
                                            }
                                            // line 612
                                            echo "                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 613
                                        echo "                                                </ul>
                                            </div>
                                        ";
                                    }
                                    // line 616
                                    echo "                                    ";
                                }
                                // line 617
                                echo "
                                    ";
                                // line 618
                                if (($this->getAttribute($context["top_item"], "sub_menu_content_type", array()) == "category")) {
                                    // line 619
                                    echo "                                        ";
                                    if ((twig_length_filter($this->env, $this->getAttribute($context["top_item"], "sub_menu_content", array())) > 0)) {
                                        // line 620
                                        echo "                                            <div class=\"sub-menu-container\">
                                                <ul class=\"ul-second-items\">
                                                    ";
                                        // line 622
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["top_item"], "sub_menu_content", array()));
                                        foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                            // line 623
                                            echo "                                                        ";
                                            if (($context["type"] == "category")) {
                                                // line 624
                                                echo "                                                            ";
                                                if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                    // line 625
                                                    echo "                                                                ";
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                    foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                        // line 626
                                                        echo "                                                                    <li class=\"li-second-items\">
                                                                        <a href=\"";
                                                        // line 627
                                                        echo $this->getAttribute($context["widget"], "link", array());
                                                        echo "\" class=\"a-second-link a-item\">
                                                                            <span class=\"a-second-title\">";
                                                        // line 628
                                                        echo $this->getAttribute($context["widget"], "title", array());
                                                        echo "</span>
                                                                        </a>
                                                                        ";
                                                        // line 630
                                                        if ((twig_length_filter($this->env, $this->getAttribute($context["widget"], "children", array())) > 0)) {
                                                            // line 631
                                                            echo "                                                                            <span class=\"second-click-show a-click-show\">
                                                                                <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                                                                                <i class=\"fa fa-minus\" aria-hidden=\"true\"></i>
                                                                            </span>
                                                                        ";
                                                        }
                                                        // line 636
                                                        echo "                                                                        ";
                                                        if ((twig_length_filter($this->env, $this->getAttribute($context["widget"], "children", array())) > 0)) {
                                                            // line 637
                                                            echo "                                                                            <div class=\"flyout-third-items\">
                                                                                <ul class=\"ul-third-items\">
                                                                                    ";
                                                            // line 639
                                                            $context['_parent'] = $context;
                                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["widget"], "children", array()));
                                                            foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                // line 640
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 641
                                                                echo $this->getAttribute($context["c_category"], "link", array());
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo $this->getAttribute($context["c_category"], "title", array());
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            $_parent = $context['_parent'];
                                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                                            // line 644
                                                            echo "                                                                                </ul>
                                                                            </div>
                                                                        ";
                                                        }
                                                        // line 647
                                                        echo "                                                                    </li>
                                                                ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 649
                                                    echo "                                                            ";
                                                }
                                                // line 650
                                                echo "                                                        ";
                                            }
                                            // line 651
                                            echo "                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 652
                                        echo "                                                </ul>
                                            </div>
                                        ";
                                    }
                                    // line 655
                                    echo "                                    ";
                                }
                                // line 656
                                echo "                                ";
                            }
                            // line 657
                            echo "                            </li>
                        ";
                        }
                        // line 659
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 660
                    echo "                </ul>
            ";
                }
                // line 662
                echo "        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/extension/module/ocmegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2085 => 662,  2081 => 660,  2075 => 659,  2071 => 657,  2068 => 656,  2065 => 655,  2060 => 652,  2054 => 651,  2051 => 650,  2048 => 649,  2041 => 647,  2036 => 644,  2025 => 641,  2022 => 640,  2018 => 639,  2014 => 637,  2011 => 636,  2004 => 631,  2002 => 630,  1997 => 628,  1993 => 627,  1990 => 626,  1985 => 625,  1982 => 624,  1979 => 623,  1975 => 622,  1971 => 620,  1968 => 619,  1966 => 618,  1963 => 617,  1960 => 616,  1955 => 613,  1949 => 612,  1945 => 610,  1940 => 607,  1934 => 606,  1926 => 603,  1923 => 602,  1920 => 601,  1916 => 600,  1912 => 598,  1909 => 597,  1902 => 592,  1900 => 591,  1895 => 589,  1891 => 588,  1888 => 587,  1885 => 586,  1881 => 585,  1877 => 583,  1874 => 582,  1871 => 581,  1868 => 580,  1865 => 579,  1858 => 574,  1856 => 573,  1853 => 572,  1847 => 570,  1844 => 569,  1838 => 567,  1836 => 566,  1833 => 565,  1830 => 564,  1823 => 559,  1821 => 558,  1818 => 557,  1812 => 555,  1809 => 554,  1803 => 552,  1801 => 551,  1796 => 550,  1794 => 549,  1791 => 548,  1788 => 547,  1784 => 546,  1777 => 542,  1769 => 540,  1767 => 539,  1762 => 538,  1760 => 537,  1757 => 536,  1753 => 534,  1749 => 532,  1740 => 525,  1737 => 524,  1731 => 523,  1727 => 521,  1724 => 520,  1721 => 519,  1718 => 518,  1713 => 515,  1707 => 514,  1704 => 513,  1701 => 512,  1694 => 510,  1689 => 507,  1678 => 504,  1675 => 503,  1671 => 502,  1665 => 500,  1663 => 499,  1660 => 498,  1656 => 496,  1654 => 495,  1650 => 494,  1646 => 493,  1643 => 492,  1638 => 491,  1635 => 490,  1632 => 489,  1628 => 488,  1622 => 486,  1619 => 485,  1617 => 484,  1614 => 483,  1611 => 482,  1606 => 479,  1600 => 478,  1596 => 476,  1591 => 473,  1585 => 472,  1577 => 469,  1574 => 468,  1571 => 467,  1567 => 466,  1561 => 464,  1559 => 463,  1556 => 462,  1552 => 460,  1550 => 459,  1546 => 458,  1542 => 457,  1539 => 456,  1536 => 455,  1532 => 454,  1526 => 452,  1523 => 451,  1520 => 450,  1518 => 449,  1514 => 447,  1511 => 446,  1508 => 445,  1504 => 443,  1498 => 442,  1495 => 441,  1492 => 440,  1486 => 439,  1478 => 436,  1471 => 435,  1469 => 434,  1466 => 433,  1460 => 430,  1456 => 429,  1449 => 428,  1447 => 427,  1444 => 426,  1435 => 423,  1427 => 421,  1425 => 420,  1418 => 419,  1416 => 418,  1413 => 417,  1409 => 415,  1405 => 413,  1394 => 411,  1390 => 410,  1387 => 409,  1385 => 408,  1378 => 407,  1370 => 405,  1368 => 404,  1361 => 403,  1358 => 402,  1353 => 401,  1350 => 400,  1348 => 399,  1345 => 398,  1342 => 397,  1339 => 396,  1332 => 394,  1328 => 392,  1317 => 390,  1313 => 389,  1310 => 388,  1308 => 387,  1301 => 386,  1293 => 384,  1291 => 383,  1284 => 382,  1279 => 381,  1276 => 380,  1273 => 379,  1269 => 378,  1262 => 377,  1259 => 376,  1255 => 374,  1252 => 373,  1246 => 372,  1242 => 370,  1238 => 368,  1232 => 367,  1224 => 365,  1221 => 364,  1217 => 363,  1214 => 362,  1212 => 361,  1206 => 360,  1196 => 359,  1188 => 358,  1185 => 357,  1180 => 356,  1178 => 355,  1171 => 354,  1168 => 353,  1166 => 352,  1163 => 351,  1160 => 350,  1156 => 348,  1152 => 346,  1149 => 345,  1143 => 343,  1140 => 342,  1134 => 340,  1132 => 339,  1129 => 338,  1125 => 336,  1121 => 334,  1118 => 333,  1112 => 331,  1109 => 330,  1103 => 328,  1101 => 327,  1096 => 326,  1094 => 325,  1087 => 324,  1084 => 323,  1081 => 322,  1077 => 321,  1070 => 317,  1062 => 315,  1060 => 314,  1055 => 313,  1052 => 312,  1049 => 311,  1047 => 310,  1044 => 309,  1040 => 307,  1036 => 305,  1030 => 304,  1026 => 302,  1023 => 301,  1020 => 300,  1017 => 299,  1012 => 296,  1006 => 295,  1003 => 294,  1000 => 293,  993 => 291,  988 => 288,  977 => 285,  974 => 284,  970 => 283,  964 => 281,  962 => 280,  959 => 279,  956 => 278,  952 => 276,  949 => 275,  945 => 273,  942 => 272,  940 => 271,  936 => 270,  932 => 269,  929 => 268,  924 => 267,  921 => 266,  918 => 265,  914 => 264,  908 => 262,  905 => 261,  903 => 260,  900 => 259,  897 => 258,  892 => 255,  886 => 254,  882 => 252,  877 => 249,  871 => 248,  863 => 245,  860 => 244,  857 => 243,  853 => 242,  847 => 240,  845 => 239,  842 => 238,  839 => 237,  835 => 235,  832 => 234,  828 => 232,  825 => 231,  823 => 230,  819 => 229,  815 => 228,  812 => 227,  809 => 226,  805 => 225,  799 => 223,  796 => 222,  793 => 221,  791 => 220,  787 => 218,  784 => 217,  781 => 216,  777 => 214,  771 => 213,  768 => 212,  765 => 211,  759 => 210,  751 => 207,  744 => 206,  742 => 205,  739 => 204,  733 => 201,  729 => 200,  722 => 199,  720 => 198,  717 => 197,  708 => 194,  700 => 192,  698 => 191,  691 => 190,  689 => 189,  686 => 188,  682 => 186,  678 => 184,  667 => 182,  663 => 181,  660 => 180,  658 => 179,  651 => 178,  643 => 176,  641 => 175,  634 => 174,  631 => 173,  626 => 172,  623 => 171,  620 => 170,  616 => 169,  607 => 168,  604 => 167,  602 => 166,  599 => 165,  596 => 164,  592 => 162,  586 => 161,  583 => 160,  580 => 159,  573 => 157,  569 => 155,  558 => 153,  554 => 152,  551 => 151,  549 => 150,  542 => 149,  534 => 147,  532 => 146,  525 => 145,  520 => 144,  517 => 143,  514 => 142,  510 => 141,  501 => 140,  498 => 139,  496 => 138,  493 => 137,  489 => 135,  486 => 134,  480 => 133,  476 => 131,  472 => 129,  466 => 128,  458 => 126,  455 => 125,  451 => 124,  448 => 123,  446 => 122,  440 => 121,  430 => 120,  422 => 119,  419 => 118,  414 => 117,  412 => 116,  403 => 115,  400 => 114,  398 => 113,  395 => 112,  392 => 111,  388 => 109,  384 => 107,  381 => 106,  375 => 104,  372 => 103,  366 => 101,  364 => 100,  361 => 99,  357 => 97,  353 => 95,  350 => 94,  344 => 92,  341 => 91,  335 => 89,  333 => 88,  328 => 87,  326 => 86,  319 => 85,  316 => 84,  312 => 83,  304 => 81,  302 => 80,  297 => 79,  294 => 78,  291 => 76,  285 => 73,  281 => 72,  275 => 71,  269 => 68,  264 => 66,  260 => 65,  255 => 63,  249 => 62,  244 => 60,  240 => 59,  235 => 57,  231 => 56,  225 => 55,  220 => 53,  216 => 52,  212 => 51,  208 => 50,  204 => 49,  199 => 47,  195 => 46,  189 => 45,  184 => 43,  180 => 42,  176 => 41,  171 => 39,  161 => 38,  151 => 37,  146 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  119 => 29,  113 => 28,  108 => 26,  104 => 25,  98 => 24,  92 => 21,  87 => 19,  83 => 18,  73 => 17,  69 => 16,  64 => 14,  60 => 13,  56 => 12,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <style>*/
/*     #oc-menu-{{ module_id }} .oc-menu-bar {*/
/*         min-height: {{ menu_setting.menu_height }};*/
/*         background: {{ menu_setting.menu_bg }};*/
/*         color: {{ menu_setting.menu_text_color }};*/
/*     }*/
/*     #oc-menu-{{ module_id }}.oc-menu-bar {*/
/*         min-height: {{ menu_setting.menu_height }};*/
/*         background: {{ menu_setting.menu_bg }};*/
/*         color: {{ menu_setting.menu_text_color }};*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-top-items .li-top-item {*/
/*         background: {{ menu_setting.item_bg }};*/
/*         color: {{ menu_setting.item_font_color }};*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-top-items .li-top-item .a-top-link {*/
/*         padding: {{ menu_setting.menu_pd_top }} {{ menu_setting.menu_pd_right }} {{ menu_setting.menu_pd_bottom }} {{ menu_setting.menu_pd_left }};*/
/*         color: {{ menu_setting.item_font_color }};*/
/*          text-transform: {{ menu_setting.item_font_transform }};*/
/*         font-size: 17px;*/
/*         text-transform: {{ menu_setting.third_item_font_transform }};*/
/* 		font-weight: 400;*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-top-items .li-top-item:hover, #oc-menu-{{ module_id }} .ul-top-items .li-top-item.active {*/
/*         background: {{ menu_setting.item_bg_hover }};*/
/*         color: {{ menu_setting.item_font_color_hover }};*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-top-items .li-top-item:hover .a-top-link, #oc-menu-{{ module_id }} .ul-top-items .li-top-item.active .a-top-link{*/
/*         color: {{ menu_setting.item_font_color_hover }};*/
/*      }*/
/*     #oc-menu-{{ module_id }} .mega-menu-container {*/
/*         width: {{ menu_setting.mega_menu_width }};*/
/*         background: {{ menu_setting.mega_menu_bg }};*/
/*         padding: {{ menu_setting.mega_menu_pd_top }} {{ menu_setting.mega_menu_pd_right }} {{ menu_setting.mega_menu_pd_bottom }} {{ menu_setting.mega_menu_pd_left }};*/
/*         color: {{ menu_setting.mega_text_color }};*/
/*     }*/
/*     #oc-menu-{{ module_id }} .mega-menu-container a, #oc-menu-{{ module_id }} .mega-menu-container h1, #oc-menu-{{ module_id }} .mega-menu-container h2, #oc-menu-{{ module_id }} .mega-menu-container h3,*/
/*     #oc-menu-{{ module_id }} .mega-menu-container h4, #oc-menu-{{ module_id }} .mega-menu-container h5, #oc-menu-{{ module_id }} .mega-menu-container h6, #oc-menu-{{ module_id }} .mega-menu-container span {*/
/*         color: {{ menu_setting.mega_text_color }};*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-second-items .li-second-items {*/
/*         background: {{ menu_setting.second_item_bg }};*/
/*         color: {{ menu_setting.second_item_font_color }};*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-second-items .li-second-items:hover, #oc-menu-{{ module_id }} .ul-second-items .li-second-items.active {*/
/*         background: {{ menu_setting.second_item_bg_hover }};*/
/*         color: {{ menu_setting.second_item_font_color_hover }};*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-second-items .li-second-items .a-second-link {*/
/*         color: {{ menu_setting.second_item_font_color }};*/
/*         font-size: {{ menu_setting.second_item_font_size }};*/
/*         text-transform: {{ menu_setting.second_item_font_transform }};*/
/*         font-weight: {{ menu_setting.second_item_font_weight }};*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-second-items .li-second-items:hover .a-second-link, #oc-menu-{{ module_id }} .ul-second-items .li-second-items.active .a-second-link {*/
/*         color: {{ menu_setting.second_item_font_color_hover }};*/
/*         font-weight: {{ menu_setting.second_item_font_weight_hover }};*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-third-items .li-third-items {*/
/*         background: {{ menu_setting.third_item_bg }};*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-third-items .li-third-items:hover, #oc-menu-{{ module_id }} .ul-third-items .li-third-items.active {*/
/*         background: {{ menu_setting.third_item_bg_hover }};*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-third-items .li-third-items .a-third-link {*/
/*         color: {{ menu_setting.third_item_font_color }};*/
/*         font-size: 17px;*/
/*         text-transform: {{ menu_setting.third_item_font_transform }};*/
/* 		font-weight: 500;*/
/*     }*/
/*     #oc-menu-{{ module_id }} .ul-third-items .li-third-items:hover .a-third-link, #oc-menu-{{ module_id }} .ul-third-items .li-third-items.active .a-third-link {*/
/*         color: {{ menu_setting.third_item_font_color_hover }};*/
/*         font-weight: {{ menu_setting.third_item_font_weight_hover }};*/
/*     }*/
/* </style>*/
/* {% if warning %}*/
/* {% else %}*/
/*     {% if menu_type == "horizontal" %}*/
/*         <div class="oc-menu horizontal-menu oc-menu-bar visible-lg visible-md" id="oc-menu-{{ module_id }}">*/
/*             {% if items %}*/
/*                 <input type="hidden" id="menu-effect-{{ module_id }}" class="menu-effect" value="{{ menu_setting.effect }}" />*/
/*                 <ul class="ul-top-items">*/
/*                     {% for top_item in items %}*/
/*                         {% if top_item.status %}*/
/*                             <li class="li-top-item {{ top_item.item_align }}" style="float: {{ top_item.item_align }}">*/
/*                                 {% if top_item.has_link %}*/
/*                                     <a class="a-top-link" href="{{ top_item.link }}">*/
/*                                         {% if top_item.icon %}*/
/*                                             <img src="{{ top_item.icon }}" class="top-icon"/>*/
/*                                         {% endif %}*/
/*                                         {% if top_item.has_title %}*/
/*                                             <span>{{ top_item.title }}</span>*/
/*                                         {% endif %}*/
/*                                         {% if top_item.has_child %}*/
/*                                             <i class="fa fa-angle-down" aria-hidden="true"></i>*/
/*                                         {% endif %}*/
/*                                     </a>*/
/*                                 {% else %}*/
/*                                     <a class="a-top-link a-item" href="javascript:void(0)">*/
/*                                         {% if top_item.icon %}*/
/*                                             <img src="{{ top_item.icon }}" class="top-icon"/>*/
/*                                         {% endif %}*/
/*                                         {% if top_item.has_title %}*/
/*                                             <span>{{ top_item.title }}</span>*/
/*                                         {% endif %}*/
/*                                         {% if top_item.has_child %}*/
/*                                             <i class="fa fa-angle-down" aria-hidden="true"></i>*/
/*                                         {% endif %}*/
/*                                     </a>*/
/*                                 {% endif %}*/
/*                                 {% if top_item.has_child %}*/
/*                                     <!-- Mega Menu -->*/
/*                                     {% if top_item.sub_menu_type == "mega" %}*/
/*                                         {% if top_item.sub_menu_content_type == 'children' %}*/
/*                                             <div class="mega-menu-container sub-menu-container {{ top_item.item_align }} {% if menu_setting.mega_menu_width == '100%' %} full-width {% endif %}">*/
/*                                                 {% if top_item.sub_items|length > 0 %}*/
/*                                                     {% for sub_item2 in top_item.sub_items %}*/
/*                                                         {% if sub_item2.status %}*/
/*                                                             <div class="{% if top_item.sub_menu_content_columns %}col-md-{{ top_item.sub_menu_content_columns }}{% endif %} sub-item2-content"*/
/*                                                                     {% if top_item.sub_menu_content_columns == false %} style="width: 20%;" data-cols="12/5" {% else %} data-cols="{{ top_item.sub_menu_content_columns }}" {% endif %} >*/
/*                                                                 <a class="a-mega-second-link" href="{{ sub_item2.link }}"><h4><strong>{{ sub_item2.title }}</strong></h4></a>*/
/*                                                                 {% if sub_item2.sub_items|length > 0 %}*/
/*                                                                     <div class="sub_item3-content">*/
/*                                                                         {% for sub_item3 in sub_item2.sub_items %}*/
/*                                                                             {% if sub_item3.status %}*/
/*                                                                                 <a class="a-mega-third-link" href="{{ sub_item3.link }}"><h5>{{ sub_item3.title }}</h5></a>*/
/*                                                                             {% endif %}*/
/*                                                                         {% endfor %}*/
/*                                                                     </div>*/
/*                                                                 {% endif %}*/
/*                                                             </div>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         {% endif %}*/
/* */
/*                                         {% if top_item.sub_menu_content_type == 'category' %}*/
/*                                             {% if top_item.sub_menu_content|length > 0 %}*/
/*                                                 <div class="mega-menu-container sub-menu-container {{ top_item.item_align }} {% if menu_setting.mega_menu_width == '100%' %} full-width {% endif %}">*/
/*                                                     {% for type,widgets in top_item.sub_menu_content %}*/
/*                                                         {% if type == "category" %}*/
/*                                                             {% if widgets|length > 0 %}*/
/*                                                                 {% for widget in widgets %}*/
/*                                                                     <div class="col-md-{{ widget.cols }} sub-item2-content" data-cols="{{ widget.cols }}">*/
/*                                                                         {% if widget.image %}*/
/*                                                                             <img src="{{ widget.image }}" alt="{{ widget.title }}" class="mega-second-image" />*/
/*                                                                         {% endif %}*/
/*                                                                         <a class="a-mega-second-link" href="{{ widget.link }}"><h4><strong>{{ widget.title }}</strong></h4></a>*/
/*                                                                         {% if widget.children|length > 0 %}*/
/*                                                                             <div class="sub_item3-content">*/
/*                                                                                 {% for c_category in widget.children %}*/
/*                                                                                     <a class="a-mega-third-link" href="{{ c_category.link }}"><h5>{{ c_category.title }}</h5></a>*/
/*                                                                                 {% endfor %}*/
/*                                                                             </div>*/
/*                                                                         {% endif %}*/
/*                                                                     </div>*/
/*                                                                 {% endfor %}*/
/*                                                             {% endif %}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/* */
/*                                         {% if top_item.sub_menu_content_type == 'widget' %}*/
/*                                             {% if top_item.sub_menu_content|length > 0 %}*/
/*                                                 <div class="mega-menu-container sub-menu-container {{ top_item.item_align }} {% if menu_setting.mega_menu_width == '100%' %} full-width {% endif %}">*/
/*                                                     {% for type,widgets in top_item.sub_menu_content %}*/
/*                                                         {% if type == "widget" %}*/
/*                                                             {% if widgets|length > 0 %}*/
/*                                                                 {% for widget in widgets %}*/
/*                                                                     {% if widget.type == "category" %}*/
/*                                                                         <div class="col-md-{{ widget.cols }} sub-item2-content" data-cols="{{ widget.cols }}">*/
/*                                                                             {% if widget.image %}*/
/*                                                                                 <img src="{{ widget.image }}" alt="{{ widget.title }}" class="mega-second-image" />*/
/*                                                                             {% endif %}*/
/*                                                                             <a class="a-mega-second-link" href="{{ widget.link }}"><h4><strong>{{ widget.title }}</strong></h4></a>*/
/*                                                                             {% if widget.children|length > 0 %}*/
/*                                                                                 <div class="sub_item3-content">*/
/*                                                                                     {% for c_category in widget.children %}*/
/*                                                                                         <a class="a-mega-third-link" href="{{ c_category.link }}"><h5>{{ c_category.title }}</h5></a>*/
/*                                                                                     {% endfor %}*/
/*                                                                                 </div>*/
/*                                                                             {% endif %}*/
/*                                                                         </div>*/
/*                                                                     {% endif %}*/
/* */
/*                                                                     {% if widget.type == "product" %}*/
/*                                                                         <div class="col-md-{{ widget.cols }} sub-item2-content" data-cols="{{ widget.cols }}">*/
/*                                                                             {% if widget.image %}*/
/*                                                                                 <img src="{{ widget.image }}" alt="{{ widget.title }}" class="mega-second-image" />*/
/*                                                                             {% endif %}*/
/*                                                                             <a class="a-mega-second-link" href="{{ widget.link }}"><h4><strong>{{ widget.title }}</strong></h4></a>*/
/*                                                                         </div>*/
/*                                                                     {% endif %}*/
/* */
/*                                                                     {% if widget.type == "html" %}*/
/*                                                                         <div class="col-md-{{ widget.cols }} sub-item2-content" data-cols="{{ widget.cols }}">*/
/*                                                                             <h4><strong>{{ widget.title }}</strong></h4>*/
/*                                                                             <p>{{ widget.content }}</p>*/
/*                                                                         </div>*/
/*                                                                     {% endif %}*/
/* */
/*                                                                     {% if widget.type == "link" %}*/
/*                                                                         <div class="col-md-{{ widget.cols }} sub-item2-content" data-cols="{{ widget.cols }}">*/
/*                                                                             <a class="a-mega-second-link a-widget-link" href="{{ widget.link }}"><h4><strong>{{ widget.title }}</strong></h4></a>*/
/*                                                                         </div>*/
/*                                                                     {% endif %}*/
/*                                                                 {% endfor %}*/
/*                                                             {% endif %}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/* */
/*                                     <!-- Flyout Menu -->*/
/*                                     {% if top_item.sub_menu_type == "flyout" %}*/
/*                                         {% if top_item.sub_menu_content_type == 'children' %}*/
/*                                             {% if top_item.sub_items|length > 0 %}*/
/*                                                 <div class="flyout-menu-container sub-menu-container {{ top_item.item_align }}">*/
/*                                                     <ul class="ul-second-items">*/
/*                                                         {% for sub_item2 in top_item.sub_items %}*/
/*                                                             {% if sub_item2.status %}*/
/*                                                                 <li class="li-second-items">*/
/*                                                                     <a href="{{ sub_item2.link }}" class="a-second-link a-item">*/
/*                                                                         <span class="a-second-title">{{ sub_item2.title }}</span>*/
/*                                                                         {% if sub_item2.sub_items|length > 0 %}*/
/*                                                                             {% if top_item.item_align == 'left' %}*/
/*                                                                                 <i class="icon-chevron-right" aria-hidden="true"></i>*/
/*                                                                             {% endif %}*/
/*                                                                             {% if top_item.item_align == 'right' %}*/
/*                                                                                 <i class="fa fa-caret-left" aria-hidden="true"></i>*/
/*                                                                             {% endif %}*/
/*                                                                         {% endif %}*/
/*                                                                     </a>*/
/*                                                                     {% if sub_item2.sub_items|length > 0 %}*/
/*                                                                         <div class="flyout-third-items {{ top_item.item_align }}">*/
/*                                                                             <ul class="ul-third-items">*/
/*                                                                                 {% for sub_item3 in sub_item2.sub_items %}*/
/*                                                                                     {% if sub_item3.status %}*/
/*                                                                                         <li class="li-third-items">*/
/*                                                                                             <a href="{{ sub_item3.link }}" class="a-third-link"><span class="a-third-title">{{ sub_item3.title }}</span></a>*/
/*                                                                                         </li>*/
/*                                                                                     {% endif %}*/
/*                                                                                 {% endfor %}*/
/*                                                                             </ul>*/
/*                                                                         </div>*/
/*                                                                     {% endif %}*/
/*                                                                 </li>*/
/*                                                             {% endif %}*/
/*                                                         {% endfor %}*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/* */
/*                                         {% if top_item.sub_menu_content_type == 'category' %}*/
/*                                             {% if top_item.sub_menu_content|length > 0 %}*/
/*                                                 <div class="flyout-menu-container sub-menu-container {{ top_item.item_align }}">*/
/*                                                     <ul class="ul-second-items">*/
/*                                                         {% for type,widgets in top_item.sub_menu_content %}*/
/*                                                             {% if type == "category" %}*/
/*                                                                 {% if widgets|length > 0 %}*/
/*                                                                     {% for widget in widgets %}*/
/*                                                                         <li class="li-second-items">*/
/*                                                                             <a href="{{ widget.link }}" class="a-second-link a-item">*/
/*                                                                                 <span class="a-second-title">{{ widget.title }}</span>*/
/*                                                                                 {% if widget.children|length > 0 %}*/
/*                                                                                     {% if top_item.item_align == 'left' %}*/
/*                                                                                         <i class="icon-chevron-right" aria-hidden="true"></i>*/
/*                                                                                     {% endif %}*/
/*                                                                                     {% if top_item.item_align == 'right' %}*/
/*                                                                                         <i class="fa fa-caret-left" aria-hidden="true"></i>*/
/*                                                                                     {% endif %}*/
/*                                                                                 {% endif %}*/
/*                                                                             </a>*/
/*                                                                             {% if widget.children|length > 0 %}*/
/*                                                                                 <div class="flyout-third-items {{ top_item.item_align }}">*/
/*                                                                                     <ul class="ul-third-items">*/
/*                                                                                         {% for c_category in widget.children %}*/
/*                                                                                             <li class="li-third-items">*/
/*                                                                                                 <a href="{{ c_category.link }}" class="a-third-link"><span class="a-third-title">{{ c_category.title }}</span></a>*/
/*                                                                                             </li>*/
/*                                                                                         {% endfor %}*/
/*                                                                                     </ul>*/
/*                                                                                 </div>*/
/*                                                                             {% endif %}*/
/*                                                                         </li>*/
/*                                                                     {% endfor %}*/
/*                                                                 {% endif %}*/
/*                                                             {% endif %}*/
/*                                                         {% endfor %}*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% set item_show = menu_setting.item_show %}*/
/*     {% if menu_type == "vertical" %}*/
/*         {% set count = 0 %}*/
/*         <div class="oc-menu vertical-menu visible-lg visible-md" id="oc-menu-{{ module_id }}">*/
/*             {% if items %}*/
/*                 <input type="hidden" id="menu-effect-{{ module_id }}" class="menu-effect" value="{{ menu_setting.effect }}" />*/
/*                 <div class="oc-menu-bar">*/
/*                     <div class="left"><i class="fa fa-bars"></i> <span>{{ text_vertical_bar }}</span></div>*/
/*                     <div class="right"><i class="icon-align-right" aria-hidden="true"></i></div>*/
/*                 </div>*/
/*                 <ul class="ul-top-items">*/
/*                     {% for top_item in items %}*/
/*                         {% if top_item.status %}*/
/*                             {% set count = count + 1 %}*/
/*                             <li class="li-top-item {{ top_item.item_align }} {{ (count > item_show) ? 'over' : '' }}">*/
/*                                 {% if top_item.has_link %}*/
/*                                     <a class="a-top-link a-item" href="{{ top_item.link }}">*/
/*                                         {% if top_item.icon %}*/
/*                                             <img src="{{ top_item.icon }}" class="top-icon"/>*/
/*                                         {% endif %}*/
/*                                         {% if top_item.has_title %}*/
/*                                             <span>{{ top_item.title }}</span>*/
/*                                         {% endif %}*/
/*                                         {% if top_item.has_child %}*/
/*                                             <i class="icon-chevron-right" aria-hidden="true"></i>*/
/*                                         {% endif %}*/
/*                                     </a>*/
/*                                 {% else %}*/
/*                                     <a class="a-top-link a-item" href="javascript:void(0)">*/
/*                                         {% if top_item.icon %}*/
/*                                             <img src="{{ top_item.icon }}" class="top-icon"/>*/
/*                                         {% endif %}*/
/*                                         {% if top_item.has_title %}*/
/*                                             <span>{{ top_item.title }}</span>*/
/*                                         {% endif %}*/
/*                                         {% if top_item.has_child %}*/
/*                                             <i class="icon-chevron-right" aria-hidden="true"></i>*/
/*                                         {% endif %}*/
/*                                     </a>*/
/*                                 {% endif %}*/
/*                                 {% if top_item.has_child %}*/
/*                                     <!-- Mega Menu -->*/
/*                                     {% if top_item.sub_menu_type == "mega" %}*/
/*                                         {% if top_item.sub_menu_content_type == 'children' %}*/
/*                                             <div class="mega-menu-container sub-menu-container {% if menu_setting.mega_menu_width == '100%' %} full-width {% endif %}">*/
/*                                                 {% if top_item.sub_items|length > 0 %}*/
/*                                                     {% for sub_item2 in top_item.sub_items %}*/
/*                                                         {% if sub_item2.status %}*/
/*                                                             <div class="{% if top_item.sub_menu_content_columns %}col-md-{{ top_item.sub_menu_content_columns }}{% endif %} sub-item2-content"*/
/*                                                                     {% if top_item.sub_menu_content_columns == false %} style="width: 20%;" data-cols="12/5" {% else %} data-cols="{{ top_item.sub_menu_content_columns }}" {% endif %} >*/
/*                                                                 <a class="a-mega-second-link" href="{{ sub_item2.link }}"><h4><strong>{{ sub_item2.title }}</strong></h4></a>*/
/*                                                                 {% if sub_item2.sub_items|length > 0 %}*/
/*                                                                     <div class="sub_item3-content">*/
/*                                                                         {% for sub_item3 in sub_item2.sub_items %}*/
/*                                                                             {% if sub_item3.status %}*/
/*                                                                                 <a class="a-mega-third-link" href="{{ sub_item3.link }}"><h5>{{ sub_item3.title }}</h5></a>*/
/*                                                                             {% endif %}*/
/*                                                                         {% endfor %}*/
/*                                                                     </div>*/
/*                                                                 {% endif %}*/
/*                                                             </div>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         {% else %}*/
/*                                             {% if top_item.sub_menu_content|length > 0 %}*/
/*                                                 <div class="mega-menu-container sub-menu-container {% if menu_setting.mega_menu_width == '100%' %} full-width {% endif %}">*/
/*                                                     {% for type,widgets in top_item.sub_menu_content %}*/
/*                                                         {% if type == "category" %}*/
/*                                                             {% if widgets|length > 0 %}*/
/*                                                                 {% for widget in widgets %}*/
/*                                                                     <div class="col-md-{{ widget.cols }} sub-item2-content" data-cols="{{ widget.cols }}">*/
/*                                                                         {% if widget.image %}*/
/*                                                                             <img src="{{ widget.image }}" alt="{{ widget.title }}" class="mega-second-image" />*/
/*                                                                         {% endif %}*/
/*                                                                         <a class="a-mega-second-link" href="{{ widget.link }}"><h4><strong>{{ widget.title }}</strong></h4></a>*/
/*                                                                         {% if widget.children|length > 0 %}*/
/*                                                                             <div class="sub_item3-content">*/
/*                                                                                 {% for c_category in widget.children %}*/
/*                                                                                     <a class="a-mega-third-link" href="{{ c_category.link }}"><h5>{{ c_category.title }}</h5></a>*/
/*                                                                                 {% endfor %}*/
/*                                                                             </div>*/
/*                                                                         {% endif %}*/
/*                                                                     </div>*/
/*                                                                 {% endfor %}*/
/*                                                             {% endif %}*/
/*                                                         {% endif %}*/
/* */
/*                                                         {% if type == "widget" %}*/
/*                                                             {% if widgets|length > 0 %}*/
/*                                                                 {% for widget in widgets %}*/
/*                                                                     {% if widget.type == "category" %}*/
/*                                                                         <div class="col-md-{{ widget.cols }} sub-item2-content" data-cols="{{ widget.cols }}">*/
/*                                                                             {% if widget.image %}*/
/*                                                                                 <img src="{{ widget.image }}" alt="{{ widget.title }}" class="mega-second-image" />*/
/*                                                                             {% endif %}*/
/*                                                                             <a class="a-mega-second-link" href="{{ widget.link }}"><h4><strong>{{ widget.title }}</strong></h4></a>*/
/*                                                                             {% if widget.children|length > 0 %}*/
/*                                                                                 <div class="sub_item3-content">*/
/*                                                                                     {% for c_category in widget.children %}*/
/*                                                                                         <a class="a-mega-third-link" href="{{ c_category.link }}"><h5>{{ c_category.title }}</h5></a>*/
/*                                                                                     {% endfor %}*/
/*                                                                                 </div>*/
/*                                                                             {% endif %}*/
/*                                                                         </div>*/
/*                                                                     {% endif %}*/
/* */
/*                                                                     {% if widget.type == "product" %}*/
/*                                                                         <div class="col-md-{{ widget.cols }} sub-item2-content" data-cols="{{ widget.cols }}">*/
/*                                                                             {% if widget.image %}*/
/*                                                                                 <img src="{{ widget.image }}" alt="{{ widget.title }}" class="mega-second-image" />*/
/*                                                                             {% endif %}*/
/*                                                                             <a class="a-mega-second-link" href="{{ widget.link }}"><h4><strong>{{ widget.title }}</strong></h4></a>*/
/*                                                                         </div>*/
/*                                                                     {% endif %}*/
/* */
/*                                                                     {% if widget.type == "html" %}*/
/*                                                                         <div class="col-md-{{ widget.cols }} sub-item2-content" data-cols="{{ widget.cols }}">*/
/*                                                                             <h4><strong>{{ widget.title }}</strong></h4>*/
/*                                                                             <p>{{ widget.content }}</p>*/
/*                                                                         </div>*/
/*                                                                     {% endif %}*/
/* */
/*                                                                     {% if widget.type == "link" %}*/
/*                                                                         <div class="col-md-{{ widget.cols }} sub-item2-content" data-cols="{{ widget.cols }}">*/
/*                                                                             <a class="a-mega-second-link a-widget-link" href="{{ widget.link }}"><h4><strong>{{ widget.title }}</strong></h4></a>*/
/*                                                                         </div>*/
/*                                                                     {% endif %}*/
/*                                                                 {% endfor %}*/
/*                                                             {% endif %}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/* */
/*                                     <!-- Flyout Menu -->*/
/*                                     {% if top_item.sub_menu_type == "flyout" %}*/
/*                                         {% if top_item.sub_menu_content_type == 'children' %}*/
/*                                             {% if top_item.sub_items|length > 0 %}*/
/*                                                 <div class="flyout-menu-container sub-menu-container {{ top_item.item_align }}">*/
/*                                                     <ul class="ul-second-items">*/
/*                                                         {% for sub_item2 in top_item.sub_items %}*/
/*                                                             {% if sub_item2.status %}*/
/*                                                                 <li class="li-second-items">*/
/*                                                                     <a href="{{ sub_item2.link }}" class="a-second-link a-item">*/
/*                                                                         <span class="a-second-title">{{ sub_item2.title }}</span>*/
/*                                                                         {% if sub_item2.sub_items|length > 0 %}*/
/*                                                                             <i class="icon-chevron-right" aria-hidden="true"></i>*/
/*                                                                         {% endif %}*/
/*                                                                     </a>*/
/*                                                                     {% if sub_item2.sub_items|length > 0 %}*/
/*                                                                         <div class="flyout-third-items {{ top_item.item_align }}">*/
/*                                                                             <ul class="ul-third-items">*/
/*                                                                                 {% for sub_item3 in sub_item2.sub_items %}*/
/*                                                                                     {% if sub_item3.status %}*/
/*                                                                                         <li class="li-third-items">*/
/*                                                                                             <a href="{{ sub_item3.link }}" class="a-third-link"><span class="a-third-title">{{ sub_item3.title }}</span></a>*/
/*                                                                                         </li>*/
/*                                                                                     {% endif %}*/
/*                                                                                 {% endfor %}*/
/*                                                                             </ul>*/
/*                                                                         </div>*/
/*                                                                     {% endif %}*/
/*                                                                 </li>*/
/*                                                             {% endif %}*/
/*                                                         {% endfor %}*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/* */
/*                                         {% if top_item.sub_menu_content_type == 'category' %}*/
/*                                             {% if top_item.sub_menu_content|length > 0 %}*/
/*                                                 <div class="flyout-menu-container sub-menu-container {{ top_item.item_align }}">*/
/*                                                     <ul class="ul-second-items">*/
/*                                                         {% for type,widgets in top_item.sub_menu_content %}*/
/*                                                             {% if type == "category" %}*/
/*                                                                 {% if widgets|length > 0 %}*/
/*                                                                     {% for widget in widgets %}*/
/*                                                                         <li class="li-second-items">*/
/*                                                                             <a href="{{ widget.link }}" class="a-second-link a-item">*/
/*                                                                                 <span class="a-second-title">{{ widget.title }}</span>*/
/*                                                                                 {% if widget.children|length > 0 %}*/
/*                                                                                     <i class="icon-chevron-right" aria-hidden="true"></i>*/
/*                                                                                 {% endif %}*/
/*                                                                             </a>*/
/*                                                                             {% if widget.children|length > 0 %}*/
/*                                                                                 <div class="flyout-third-items {{ top_item.item_align }}">*/
/*                                                                                     <ul class="ul-third-items">*/
/*                                                                                         {% for c_category in widget.children %}*/
/*                                                                                             <li class="li-third-items">*/
/*                                                                                                 <a href="{{ c_category.link }}" class="a-third-link"><span class="a-third-title">{{ c_category.title }}</span></a>*/
/*                                                                                             </li>*/
/*                                                                                         {% endfor %}*/
/*                                                                                     </ul>*/
/*                                                                                 </div>*/
/*                                                                             {% endif %}*/
/*                                                                         </li>*/
/*                                                                     {% endfor %}*/
/*                                                                 {% endif %}*/
/*                                                             {% endif %}*/
/*                                                         {% endfor %}*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     {% if count > item_show %}*/
/*                         <li class="li-top-item li-over li-plus">*/
/*                             <a href="javascript:void(0);" class="a-top-link a-plus a-over"><i class="icon-plus" aria-hidden="true"></i> <span>Daha Fazla</span></a>*/
/*                         </li>*/
/*                         <li class="li-top-item li-over li-minus over">*/
/*                             <a href="javascript:void(0);" class="a-top-link a-minus a-over"><i class="icon-minus2" aria-hidden="true"></i> <span>Öğeleri Kapat</span></a>*/
/*                         </li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if menu_type == "mobile" %}*/
/*         <div class="oc-menu mobile-menu hidden-lg hidden-md" id="oc-menu-{{ module_id }}">*/
/*             {% if items %}*/
/*                 <input type="hidden" id="menu-effect-{{ module_id }}" class="menu-effect" value="{{ menu_setting.effect }}" />*/
/*                 <div class="oc-menu-bar">*/
/*                     <div class="left"><i class="fa fa-bars"></i> <span>{{ text_mobile_bar }}</span></div>*/
/*                     <div class="right"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>*/
/*                 </div>*/
/*                 <ul class="ul-top-items">*/
/*                     {% for top_item in items %}*/
/*                         {% if top_item.status %}*/
/*                             <li class="li-top-item">*/
/*                                 {% if top_item.has_link %}*/
/*                                     <a class="a-top-link a-item" href="{{ top_item.link }}">*/
/*                                         {% if top_item.icon %}*/
/*                                             <img src="{{ top_item.icon }}" class="top-icon"/>*/
/*                                         {% endif %}*/
/*                                         {% if top_item.has_title %}*/
/*                                             <span>{{ top_item.title }}</span>*/
/*                                         {% endif %}*/
/*                                     </a>*/
/*                                     {% if top_item.has_child and top_item.sub_menu_content_type != 'widget' %}*/
/*                                         <span class="top-click-show a-click-show">*/
/*                                             <i class="fa fa-plus" aria-hidden="true"></i>*/
/*                                             <i class="fa fa-minus" aria-hidden="true"></i>*/
/*                                         </span>*/
/*                                     {% endif %}*/
/*                                 {% else %}*/
/*                                     <a class="a-top-link a-item" href="javascript:void(0)">*/
/*                                         {% if top_item.icon %}*/
/*                                             <img src="{{ top_item.icon }}" class="top-icon"/>*/
/*                                         {% endif %}*/
/*                                         {% if top_item.has_title %}*/
/*                                             <span>{{ top_item.title }}</span>*/
/*                                         {% endif %}*/
/*                                     </a>*/
/*                                     {% if top_item.has_child and top_item.sub_menu_content_type != 'widget' %}*/
/*                                         <span class="top-click-show a-click-show">*/
/*                                             <i class="fa fa-plus" aria-hidden="true"></i>*/
/*                                             <i class="fa fa-minus" aria-hidden="true"></i>*/
/*                                         </span>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                                 {% if top_item.has_child %}*/
/*                                     {% if top_item.sub_menu_content_type == 'children' %}*/
/*                                         {% if top_item.sub_items|length > 0 %}*/
/*                                             <div class="sub-menu-container">*/
/*                                                 <ul class="ul-second-items">*/
/*                                                     {% for sub_item2 in top_item.sub_items %}*/
/*                                                         {% if sub_item2.status %}*/
/*                                                             <li class="li-second-items">*/
/*                                                                 <a href="{{ sub_item2.link }}" class="a-second-link a-item">*/
/*                                                                     <span class="a-second-title">{{ sub_item2.title }}</span>*/
/*                                                                 </a>*/
/*                                                                 {% if sub_item2.sub_items|length > 0 %}*/
/*                                                                     <span class="second-click-show a-click-show">*/
/*                                                                         <i class="fa fa-plus" aria-hidden="true"></i>*/
/*                                                                         <i class="fa fa-minus" aria-hidden="true"></i>*/
/*                                                                     </span>*/
/*                                                                 {% endif %}*/
/*                                                                 {% if sub_item2.sub_items|length > 0 %}*/
/*                                                                     <div class="flyout-third-items">*/
/*                                                                         <ul class="ul-third-items">*/
/*                                                                             {% for sub_item3 in sub_item2.sub_items %}*/
/*                                                                                 {% if sub_item3.status %}*/
/*                                                                                     <li class="li-third-items">*/
/*                                                                                         <a href="{{ sub_item3.link }}" class="a-third-link"><span class="a-third-title">{{ sub_item3.title }}</span></a>*/
/*                                                                                     </li>*/
/*                                                                                 {% endif %}*/
/*                                                                             {% endfor %}*/
/*                                                                         </ul>*/
/*                                                                     </div>*/
/*                                                                 {% endif %}*/
/*                                                             </li>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/* */
/*                                     {% if top_item.sub_menu_content_type == 'category' %}*/
/*                                         {% if top_item.sub_menu_content|length > 0 %}*/
/*                                             <div class="sub-menu-container">*/
/*                                                 <ul class="ul-second-items">*/
/*                                                     {% for type,widgets in top_item.sub_menu_content %}*/
/*                                                         {% if type == "category" %}*/
/*                                                             {% if widgets|length > 0 %}*/
/*                                                                 {% for widget in widgets %}*/
/*                                                                     <li class="li-second-items">*/
/*                                                                         <a href="{{ widget.link }}" class="a-second-link a-item">*/
/*                                                                             <span class="a-second-title">{{ widget.title }}</span>*/
/*                                                                         </a>*/
/*                                                                         {% if widget.children|length > 0 %}*/
/*                                                                             <span class="second-click-show a-click-show">*/
/*                                                                                 <i class="fa fa-plus" aria-hidden="true"></i>*/
/*                                                                                 <i class="fa fa-minus" aria-hidden="true"></i>*/
/*                                                                             </span>*/
/*                                                                         {% endif %}*/
/*                                                                         {% if widget.children|length > 0 %}*/
/*                                                                             <div class="flyout-third-items">*/
/*                                                                                 <ul class="ul-third-items">*/
/*                                                                                     {% for c_category in widget.children %}*/
/*                                                                                         <li class="li-third-items">*/
/*                                                                                             <a href="{{ c_category.link }}" class="a-third-link"><span class="a-third-title">{{ c_category.title }}</span></a>*/
/*                                                                                         </li>*/
/*                                                                                     {% endfor %}*/
/*                                                                                 </ul>*/
/*                                                                             </div>*/
/*                                                                         {% endif %}*/
/*                                                                     </li>*/
/*                                                                 {% endfor %}*/
/*                                                             {% endif %}*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endif %}*/
