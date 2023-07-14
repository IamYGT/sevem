<?php

/* tt_origine4/template/product/product.twig */
class __TwigTemplate_e5d2974716ef834354df96b60034475e4ce566610ec66f45fadbc7cea0699c0c extends Twig_Template
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
        echo "
<div id=\"product-product\" class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
    <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
        ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "        ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "        ";
        }
        // line 16
        echo "        <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            <div class=\"row\"> ";
        // line 17
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "                    ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "                ";
        } else {
            // line 20
            echo "                    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "                ";
        }
        // line 22
        echo "                <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " block-1\">
                    ";
        // line 23
        if ((isset($context["use_zoom"]) ? $context["use_zoom"] : null)) {
            // line 24
            echo "                        <input type=\"hidden\" id=\"check-use-zoom\" value=\"1\" />
                        <input type=\"hidden\" id=\"light-box-position\" value=\"1\" />
                        <input type=\"hidden\" id=\"product-identify\" value=\"";
            // line 26
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\" />
                        <div class=\"lightbox-container\"></div>
                        ";
            // line 28
            if ((isset($context["use_swatches"]) ? $context["use_swatches"] : null)) {
                // line 29
                echo "                            <div class=\"product-zoom-image\">
                                ";
                // line 30
                if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                    // line 31
                    echo "                                    <a href=\"";
                    echo (isset($context["popup"]) ? $context["popup"] : null);
                    echo "\" class=\"cloud-zoom main-image\" id=\"product-cloud-zoom\" style=\"width: ";
                    echo $this->getAttribute((isset($context["thumb_dimension"]) ? $context["thumb_dimension"] : null), "width", array());
                    echo "px; height: ";
                    echo $this->getAttribute((isset($context["thumb_dimension"]) ? $context["thumb_dimension"] : null), "height", array());
                    echo "px;\"
                                       rel=\"";
                    // line 32
                    if ($this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "bg_status", array())) {
                        echo " tint:'";
                        echo $this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "bg_color", array());
                        echo "',tintOpacity:";
                        echo $this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "bg_opacity", array());
                        echo ",";
                    }
                    // line 33
                    echo "                                            ";
                    if ($this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "title_status", array())) {
                        echo " showTitle: true ";
                    } else {
                        echo " showTitle: false ";
                    }
                    echo ",
                                            zoomWidth:";
                    // line 34
                    echo $this->getAttribute((isset($context["thumb_dimension"]) ? $context["thumb_dimension"] : null), "width", array());
                    echo ",zoomHeight:";
                    echo $this->getAttribute((isset($context["thumb_dimension"]) ? $context["thumb_dimension"] : null), "height", array());
                    echo ",
                                            ";
                    // line 35
                    if (($this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "position", array()) == "inside")) {
                        echo " position:'inside', adjustX: 0 ";
                    } else {
                        echo " adjustX: ";
                        echo $this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "space", array());
                        echo " ";
                    }
                    echo "\">
                                        <img src=\"";
                    // line 36
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "\" title=\"";
                    echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                    echo "\" alt=\"";
                    echo (((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) ? ((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                    echo "\" />
                                    </a>
                                ";
                }
                // line 39
                echo "                            </div>
                            <div class=\"additional-images owl-carousel owl-theme\">
                                ";
                // line 41
                if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                    // line 42
                    echo "                                    <div class=\"item\">
                                        <a class=\"cloud-zoom-gallery sub-image\" id=\"product-image-default\" href=\"";
                    // line 43
                    echo (isset($context["popup"]) ? $context["popup"] : null);
                    echo "\" title=\"";
                    echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                    echo "\"
                                           rel=\"useZoom: 'product-cloud-zoom', smallImage: '";
                    // line 44
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "'\" data-pos=\"1\">
                                            <img src=\"";
                    // line 45
                    echo (isset($context["small_image"]) ? $context["small_image"] : null);
                    echo "\" title=\"";
                    echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                    echo "\" alt=\"";
                    echo (((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) ? ((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                    echo "\" />
                                        </a>
                                    </div>
                                ";
                }
                // line 49
                echo "                                ";
                if ((isset($context["images"]) ? $context["images"] : null)) {
                    // line 50
                    echo "                                    ";
                    $context["img_count"] = 2;
                    // line 51
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 52
                        echo "                                        <div class=\"item\">
                                            <a class=\"cloud-zoom-gallery sub-image\" id=\"product-image-options-";
                        // line 53
                        echo $this->getAttribute($context["image"], "product_option_value_id", array());
                        echo "\" href=\"";
                        echo $this->getAttribute($context["image"], "popup", array());
                        echo "\" title=\"";
                        echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\"
                                               rel=\"useZoom: 'product-cloud-zoom', smallImage: '";
                        // line 54
                        echo $this->getAttribute($context["image"], "product_image_option", array());
                        echo "'\" data-pos=\"";
                        echo (isset($context["img_count"]) ? $context["img_count"] : null);
                        echo "\">
                                                <img src=\"";
                        // line 55
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" title=\"";
                        echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\" alt=\"";
                        echo (((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) ? ((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\" />
                                            </a>
                                        </div>
                                        ";
                        // line 58
                        $context["img_count"] = ((isset($context["img_count"]) ? $context["img_count"] : null) + 1);
                        // line 59
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                                ";
                }
                // line 61
                echo "                            </div>

                        ";
            } else {
                // line 64
                echo "                            <div class=\"product-zoom-image\">
                                ";
                // line 65
                if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                    // line 66
                    echo "                                    <a href=\"";
                    echo (isset($context["popup"]) ? $context["popup"] : null);
                    echo "\" class=\"cloud-zoom main-image\" id=\"product-cloud-zoom\" style=\"width: ";
                    echo $this->getAttribute((isset($context["thumb_dimension"]) ? $context["thumb_dimension"] : null), "width", array());
                    echo "px; height: ";
                    echo $this->getAttribute((isset($context["thumb_dimension"]) ? $context["thumb_dimension"] : null), "height", array());
                    echo "px;\"
                                       rel=\"";
                    // line 67
                    if ($this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "bg_status", array())) {
                        echo " tint:'";
                        echo $this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "bg_color", array());
                        echo "',tintOpacity:";
                        echo $this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "bg_opacity", array());
                        echo ",";
                    }
                    // line 68
                    echo "                                            ";
                    if ($this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "title_status", array())) {
                        echo " showTitle: true ";
                    } else {
                        echo " showTitle: false ";
                    }
                    echo ",
                                            zoomWidth:";
                    // line 69
                    echo $this->getAttribute((isset($context["thumb_dimension"]) ? $context["thumb_dimension"] : null), "width", array());
                    echo ",zoomHeight:";
                    echo $this->getAttribute((isset($context["thumb_dimension"]) ? $context["thumb_dimension"] : null), "height", array());
                    echo ",
                                            adjustX: ";
                    // line 70
                    echo $this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "space", array());
                    echo ",
                                            ";
                    // line 71
                    if (($this->getAttribute((isset($context["zoom_config"]) ? $context["zoom_config"] : null), "position", array()) == "inside")) {
                        echo " position:'inside' ";
                    }
                    echo "\">
                                        <img src=\"";
                    // line 72
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "\" title=\"";
                    echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                    echo "\" alt=\"";
                    echo (((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) ? ((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                    echo "\" />
                                    </a>
                                ";
                }
                // line 75
                echo "                            </div>
                            <div class=\"additional-images owl-carousel owl-theme\">
                                ";
                // line 77
                if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                    // line 78
                    echo "                                    <div class=\"item\">
                                        <a class=\"cloud-zoom-gallery sub-image\" href=\"";
                    // line 79
                    echo (isset($context["popup"]) ? $context["popup"] : null);
                    echo "\" title=\"";
                    echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                    echo "\"
                                           rel=\"useZoom: 'product-cloud-zoom', smallImage: '";
                    // line 80
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "'\" data-pos=\"1\">
                                            <img src=\"";
                    // line 81
                    echo (isset($context["small_image"]) ? $context["small_image"] : null);
                    echo "\" title=\"";
                    echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                    echo "\" alt=\"";
                    echo (((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) ? ((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                    echo "\" />
                                        </a>
                                    </div>
                                ";
                }
                // line 85
                echo "                                ";
                if ((isset($context["images"]) ? $context["images"] : null)) {
                    // line 86
                    echo "                                    ";
                    $context["img_count"] = 2;
                    // line 87
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 88
                        echo "                                        <div class=\"item\">
                                            <a class=\"cloud-zoom-gallery sub-image\" href=\"";
                        // line 89
                        echo $this->getAttribute($context["image"], "popup", array());
                        echo "\" title=\"";
                        echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\"
                                               rel=\"useZoom: 'product-cloud-zoom', smallImage: '";
                        // line 90
                        echo $this->getAttribute($context["image"], "product_image_option", array());
                        echo "'\" data-pos=\"";
                        echo (isset($context["img_count"]) ? $context["img_count"] : null);
                        echo "\">
                                                <img src=\"";
                        // line 91
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" title=\"";
                        echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\" alt=\"";
                        echo (((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) ? ((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\" />
                                            </a>
                                        </div>
                                        ";
                        // line 94
                        $context["img_count"] = ((isset($context["img_count"]) ? $context["img_count"] : null) + 1);
                        // line 95
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                                ";
                }
                // line 97
                echo "                            </div>
                        ";
            }
            // line 99
            echo "                    ";
        } else {
            // line 100
            echo "                        <input type=\"hidden\" id=\"check-use-zoom\" value=\"0\" />
                        ";
            // line 101
            if ((isset($context["use_swatches"]) ? $context["use_swatches"] : null)) {
                // line 102
                echo "                            ";
                if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
                    // line 103
                    echo "                                <ul class=\"thumbnails\" id=\"swatches-image-container\">
                                    ";
                    // line 104
                    if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                        // line 105
                        echo "                                        <li><a class=\"thumbnail swatches-image\" href=\"";
                        echo (isset($context["popup"]) ? $context["popup"] : null);
                        echo "\" title=\"";
                        echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\"><img src=\"";
                        echo (isset($context["thumb"]) ? $context["thumb"] : null);
                        echo "\" title=\"";
                        echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\" alt=\"";
                        echo (((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) ? ((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\" /></a></li>
                                    ";
                    }
                    // line 107
                    echo "                                    ";
                    if ((isset($context["images"]) ? $context["images"] : null)) {
                        // line 108
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 109
                            echo "                                            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                            echo $this->getAttribute($context["image"], "popup", array());
                            echo "\" title=\"";
                            echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                            echo "\"> <img src=\"";
                            echo $this->getAttribute($context["image"], "thumb", array());
                            echo "\" title=\"";
                            echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                            echo "\" alt=\"";
                            echo (((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) ? ((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                            echo "\" /></a></li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 111
                        echo "                                    ";
                    }
                    // line 112
                    echo "                                </ul>
                                ";
                    // line 113
                    if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                        // line 114
                        echo "                                    <input type=\"hidden\" id=\"product-image-default\" data-thumb=\"";
                        echo (isset($context["thumb"]) ? $context["thumb"] : null);
                        echo "\" data-popup=\"";
                        echo (isset($context["popup"]) ? $context["popup"] : null);
                        echo "\" />
                                ";
                    }
                    // line 116
                    echo "                                ";
                    if ((isset($context["images"]) ? $context["images"] : null)) {
                        // line 117
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 118
                            echo "                                        <input type=\"hidden\" id=\"product-image-options-";
                            echo $this->getAttribute($context["image"], "product_option_value_id", array());
                            echo "\" data-thumb=\"";
                            echo $this->getAttribute($context["image"], "product_image_option", array());
                            echo "\" data-popup=\"";
                            echo $this->getAttribute($context["image"], "popup", array());
                            echo "\" />
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 120
                        echo "                                ";
                    }
                    // line 121
                    echo "                            ";
                }
                // line 122
                echo "                        ";
            } else {
                // line 123
                echo "                            ";
                if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
                    // line 124
                    echo "                                <ul class=\"thumbnails\">
                                    ";
                    // line 125
                    if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                        // line 126
                        echo "                                        <li><a class=\"thumbnail\" href=\"";
                        echo (isset($context["popup"]) ? $context["popup"] : null);
                        echo "\" title=\"";
                        echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\"><img src=\"";
                        echo (isset($context["thumb"]) ? $context["thumb"] : null);
                        echo "\" title=\"";
                        echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\" alt=\"";
                        echo (((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) ? ((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                        echo "\" /></a></li>
                                    ";
                    }
                    // line 128
                    echo "                                    ";
                    if ((isset($context["images"]) ? $context["images"] : null)) {
                        // line 129
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 130
                            echo "                                            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                            echo $this->getAttribute($context["image"], "popup", array());
                            echo "\" title=\"";
                            echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                            echo "\"> <img src=\"";
                            echo $this->getAttribute($context["image"], "thumb", array());
                            echo "\" title=\"";
                            echo (((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) ? ((isset($context["custom_imgtitle"]) ? $context["custom_imgtitle"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                            echo "\" alt=\"";
                            echo (((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) ? ((isset($context["custom_alt"]) ? $context["custom_alt"] : null)) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                            echo "\" /></a></li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 132
                        echo "                                    ";
                    }
                    // line 133
                    echo "                                </ul>
                            ";
                }
                // line 135
                echo "                        ";
            }
            // line 136
            echo "                    ";
        }
        // line 137
        echo "                </div>
                ";
        // line 138
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 139
            echo "                    ";
            $context["class"] = "col-sm-6";
            // line 140
            echo "                ";
        } else {
            // line 141
            echo "                    ";
            $context["class"] = "col-sm-6";
            // line 142
            echo "                ";
        }
        // line 143
        echo "                <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " block-2\">

\t\t\t

\t\t\t\t";
        // line 147
        if ($this->getAttribute((isset($context["richsnippets"]) ? $context["richsnippets"] : null), "breadcrumbs", array())) {
            // line 148
            echo "\t\t\t\t<span xmlns:v=\"http://rdf.data-vocabulary.org/#\">
\t\t\t\t";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mbreadcrumbs"]) ? $context["mbreadcrumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mbreadcrumb"]) {
                echo " ";
                if (strip_tags($this->getAttribute($context["mbreadcrumb"], "text", array()))) {
                    // line 150
                    echo "\t\t\t\t<span typeof=\"v:Breadcrumb\"><a rel=\"v:url\" property=\"v:title\" href=\"";
                    echo $this->getAttribute($context["mbreadcrumb"], "href", array());
                    echo "\" alt=\"";
                    echo strip_tags($this->getAttribute($context["mbreadcrumb"], "text", array()));
                    echo "\"></a></span>

\t\t\t\t";
                }
                // line 152
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mbreadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </span> ";
        }
        // line 153
        echo "

\t\t\t\t";
        // line 155
        if ($this->getAttribute((isset($context["richsnippets"]) ? $context["richsnippets"] : null), "product", array())) {
            // line 156
            echo "
\t\t\t\t<span itemscope itemtype=\"http://schema.org/Product\">
\t\t\t\t";
            // line 158
            $context["mlink"] = twig_last($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
            // line 159
            echo "\t\t\t\t<meta itemprop=\"url\" content=\"";
            echo $this->getAttribute((isset($context["mlink"]) ? $context["mlink"] : null), "href", array());
            echo "\" >
\t\t\t\t<meta itemprop=\"name\" content=\"";
            // line 160
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" >
\t\t\t\t<meta itemprop=\"model\" content=\"";
            // line 161
            echo (isset($context["model"]) ? $context["model"] : null);
            echo "\" >
\t\t\t\t<meta itemprop=\"manufacturer\" content=\"";
            // line 162
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "\" >

\t\t\t\t";
            // line 164
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 165
                echo "\t\t\t\t<meta itemprop=\"image\" content=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" >
\t\t\t\t";
            }
            // line 167
            echo "
\t\t\t\t";
            // line 168
            if ((isset($context["images"]) ? $context["images"] : null)) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 169
                    echo "\t\t\t\t<meta itemprop=\"image\" content=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" >
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo " ";
            }
            // line 171
            echo "
\t\t\t\t";
            // line 172
            if ($this->getAttribute((isset($context["richsnippets"]) ? $context["richsnippets"] : null), "offer", array())) {
                // line 173
                echo "\t\t\t\t<span itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
\t\t\t\t<meta itemprop=\"price\" content=\"";
                // line 174
                echo (isset($context["rprice"]) ? $context["rprice"] : null);
                echo "\" />
\t\t\t\t<meta itemprop=\"priceCurrency\" content=\"";
                // line 175
                echo (isset($context["currency_code"]) ? $context["currency_code"] : null);
                echo "\" />
\t\t\t\t<link itemprop=\"availability\" href=\"http://schema.org/";
                // line 176
                echo ((((isset($context["quantity"]) ? $context["quantity"] : null) > 0)) ? ("InStock") : ("OutOfStock"));
                echo "\" />
\t\t\t\t</span>
\t\t\t\t";
            }
            // line 179
            echo "
\t\t\t\t";
            // line 180
            if (($this->getAttribute((isset($context["richsnippets"]) ? $context["richsnippets"] : null), "rating", array()) && (isset($context["review_no"]) ? $context["review_no"] : null))) {
                // line 181
                echo "\t\t\t\t<span itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\">
\t\t\t\t<meta itemprop=\"reviewCount\" content=\"";
                // line 182
                echo (isset($context["review_no"]) ? $context["review_no"] : null);
                echo "\">
\t\t\t\t<meta itemprop=\"ratingValue\" content=\"";
                // line 183
                echo (isset($context["rating"]) ? $context["rating"] : null);
                echo "\">
\t\t\t\t<meta itemprop=\"bestRating\" content=\"5\">
\t\t\t\t<meta itemprop=\"worstRating\" content=\"1\">
\t\t\t\t</span>
\t\t\t\t";
            }
            // line 188
            echo "
\t\t\t\t</span>
\t\t\t\t";
        }
        // line 191
        echo "            
\t\t\t
                    <h1 class=\"product-name\">";
        // line 193
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t\t\t";
        // line 194
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 195
            echo "\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 198
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["rating"]) ? $context["rating"] : null) == $context["i"])) {
                    // line 199
                    echo "\t\t\t\t\t\t\t\t";
                    $context["class_r"] = ("rating" . $context["i"]);
                    // line 200
                    echo "\t\t\t\t\t\t\t\t<div class=\"";
                    echo (isset($context["class_r"]) ? $context["class_r"] : null);
                    echo "\">rating</div>
\t\t\t\t\t\t\t\t";
                }
                // line 202
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); \$('body,html').animate({scrollTop: \$('.block-3 .nav-tabs').offset().top}, 800); return false;\">";
            // line 204
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a><span>|</span><a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); \$('body,html').animate({scrollTop: \$('.block-3 .nav-tabs').offset().top}, 800); return false;\">";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t            
\t\t\t\t\t";
        }
        // line 207
        echo "                    ";
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 208
            echo "                        <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
            // line 209
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 210
                echo "\t\t\t\t\t\t\t<li class=\"price-product\">
\t\t\t\t\t\t\t  <span>
            
            <span class=\"";
                // line 213
                echo $this->getAttribute((isset($context["module_live_options"]) ? $context["module_live_options"] : null), "module_live_options_price_container", array());
                echo "\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
            
            </span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } else {
                // line 218
                echo "\t\t\t\t\t\t\t<li class=\"price-product\"><span class=\"price-new\">
            
            <span class=\"";
                // line 220
                echo $this->getAttribute((isset($context["module_live_options"]) ? $context["module_live_options"] : null), "module_live_options_special_container", array());
                echo "\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span>
            
            </span><span class=\"price-old\">
            
            <span class=\"";
                // line 224
                echo $this->getAttribute((isset($context["module_live_options"]) ? $context["module_live_options"] : null), "module_live_options_price_container", array());
                echo "\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
            
            </span></li>
\t\t\t\t\t\t\t";
            }
            // line 228
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 229
                echo "\t\t\t\t\t\t\t<li>";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " 
            
            <span class=\"";
                // line 231
                echo $this->getAttribute((isset($context["module_live_options"]) ? $context["module_live_options"] : null), "module_live_options_tax_container", array());
                echo "\">";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</span>
            
            </li>
\t\t\t\t\t\t\t";
            }
            // line 235
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 236
                echo "\t\t\t\t\t\t\t<li>";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " 
            
            <span class=\"";
                // line 238
                echo $this->getAttribute((isset($context["module_live_options"]) ? $context["module_live_options"] : null), "module_live_options_points_container", array());
                echo "\">";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</span>
            
            </li>
\t\t\t\t\t\t\t";
            }
            // line 242
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 243
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                // line 246
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 247
                    echo "\t\t\t\t\t\t\t<li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "\t\t\t\t\t\t\t";
            }
            // line 250
            echo "\t\t\t\t\t\t</ul>
                    ";
        }
        // line 252
        echo "\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t";
        // line 253
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 254
            echo "\t\t\t\t\t\t<li>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo " <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\"><span class=\"ex-text\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</span></a></li>
\t\t\t\t\t\t";
        }
        // line 256
        echo "\t\t\t\t\t\t<li>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <span class=\"ex-text\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
\t\t\t\t\t\t";
        // line 257
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 258
            echo "\t\t\t\t\t\t<li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " <span class=\"ex-text\">
            
            <span class=\"";
            // line 260
            echo $this->getAttribute((isset($context["module_live_options"]) ? $context["module_live_options"] : null), "module_live_options_reward_container", array());
            echo "\">";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</span>
            
            </span></li>
\t\t\t\t\t\t";
        }
        // line 264
        echo "\t\t\t\t\t\t<li>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " <span class=\"ex-text\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<p class=\"short-des\">
\t\t\t\t\t\t";
        // line 267
        echo (isset($context["short_description"]) ? $context["short_description"] : null);
        echo "
\t\t\t\t\t</p>
                    <div id=\"product\"> ";
        // line 269
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 270
            echo "\t\t\t\t\t<div class=\"option-container\">
                            <h3>";
            // line 271
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
                            ";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 273
                echo "                                ";
                if ((isset($context["use_swatches"]) ? $context["use_swatches"] : null)) {
                    // line 274
                    echo "                                    ";
                    if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                        // line 275
                        echo "                                        ";
                        if (($this->getAttribute($context["option"], "option_id", array()) == (isset($context["swatches_option"]) ? $context["swatches_option"] : null))) {
                            // line 276
                            echo "                                            <div class=\"form-group";
                            if ($this->getAttribute($context["option"], "required", array())) {
                                echo " required ";
                            }
                            echo "\">
                                                <label class=\"control-label\" for=\"input-option";
                            // line 277
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["option"], "name", array());
                            echo "</label>
                                                <ul class=\"ul-swatches-colors\" data-product-option=\"";
                            // line 278
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "\" data-type=\"select\">
                                                    ";
                            // line 279
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 280
                                echo "                                                    <li class=\"swatches-options\">
                                                        <a href=\"javascript:void(0);\" onclick=\"swatches.changeOption(\$(this));\" title=\"";
                                // line 281
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo " ";
                                if ($this->getAttribute($context["option_value"], "price", array())) {
                                    echo "(";
                                    echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                    echo $this->getAttribute($context["option_value"], "price", array());
                                    echo ")";
                                }
                                echo "\"
                                                            style=\"";
                                // line 282
                                if ($this->getAttribute($context["option_value"], "image", array())) {
                                    echo " width: ";
                                    echo (isset($context["icon_swatches_width"]) ? $context["icon_swatches_width"] : null);
                                    echo "px; height: ";
                                    echo (isset($context["icon_swatches_height"]) ? $context["icon_swatches_height"] : null);
                                    echo "px;
                                                            background-image: url('";
                                    // line 283
                                    echo $this->getAttribute($context["option_value"], "image", array());
                                    echo "') ";
                                }
                                echo "\"
                                                            data-product-option-value-id=\"";
                                // line 284
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo "\">";
                                if ( !$this->getAttribute($context["option_value"], "image", array())) {
                                    echo " ";
                                    echo $this->getAttribute($context["option_value"], "name", array());
                                    echo " ";
                                }
                                echo "</a>
                                                    </li>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 287
                            echo "                                                    <li class=\"swatches-info\"></li>
                                                </ul>
                                                <select name=\"option[";
                            // line 289
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "]\" id=\"input-option";
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "\" class=\"form-control option-swatches\">
                                                    <option value=\"0\">";
                            // line 290
                            echo (isset($context["text_select"]) ? $context["text_select"] : null);
                            echo "</option>
                                                    ";
                            // line 291
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 292
                                echo "                                                        <option value=\"";
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "
                                                            ";
                                // line 293
                                if ($this->getAttribute($context["option_value"], "price", array())) {
                                    // line 294
                                    echo "                                                                (";
                                    echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                    echo $this->getAttribute($context["option_value"], "price", array());
                                    echo ")
                                                            ";
                                }
                                // line 295
                                echo " </option>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 297
                            echo "                                                </select>
                                            </div>
                                        ";
                        } else {
                            // line 300
                            echo "                                            <div class=\"form-group";
                            if ($this->getAttribute($context["option"], "required", array())) {
                                echo " required ";
                            }
                            echo "\">
                                                <label class=\"control-label\" for=\"input-option";
                            // line 301
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["option"], "name", array());
                            echo "</label>
                                                <select name=\"option[";
                            // line 302
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "]\" id=\"input-option";
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "\" class=\"form-control\">
                                                    <option value=\"\">";
                            // line 303
                            echo (isset($context["text_select"]) ? $context["text_select"] : null);
                            echo "</option>
                                                    ";
                            // line 304
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 305
                                echo "                                                        <option value=\"";
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "
                                                            ";
                                // line 306
                                if ($this->getAttribute($context["option_value"], "price", array())) {
                                    // line 307
                                    echo "                                                                (";
                                    echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                    echo $this->getAttribute($context["option_value"], "price", array());
                                    echo ")
                                                            ";
                                }
                                // line 308
                                echo " </option>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 310
                            echo "                                                </select>
                                            </div>
                                        ";
                        }
                        // line 313
                        echo "                                    ";
                    }
                    // line 314
                    echo "                                    ";
                    if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                        // line 315
                        echo "                                        ";
                        if (($this->getAttribute($context["option"], "option_id", array()) == (isset($context["swatches_option"]) ? $context["swatches_option"] : null))) {
                            // line 316
                            echo "                                            <div class=\"form-group";
                            if ($this->getAttribute($context["option"], "required", array())) {
                                echo " required ";
                            }
                            echo "\">
                                                <label class=\"control-label\">";
                            // line 317
                            echo $this->getAttribute($context["option"], "name", array());
                            echo "</label>
                                                <ul class=\"ul-swatches-colors\" data-product-option=\"";
                            // line 318
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "\" data-type=\"radio\">
                                                    ";
                            // line 319
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 320
                                echo "                                                        <li class=\"swatches-options\">
                                                            <a href=\"javascript:void(0);\" onclick=\"swatches.changeOption(\$(this));\" title=\"";
                                // line 321
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo " ";
                                if ($this->getAttribute($context["option_value"], "price", array())) {
                                    echo "(";
                                    echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                    echo $this->getAttribute($context["option_value"], "price", array());
                                    echo ")";
                                }
                                echo "\"
                                                               style=\"";
                                // line 322
                                if ($this->getAttribute($context["option_value"], "image", array())) {
                                    echo " width: ";
                                    echo (isset($context["icon_swatches_width"]) ? $context["icon_swatches_width"] : null);
                                    echo "px; height: ";
                                    echo (isset($context["icon_swatches_height"]) ? $context["icon_swatches_height"] : null);
                                    echo "px;
                                                        background-image: url('";
                                    // line 323
                                    echo $this->getAttribute($context["option_value"], "image", array());
                                    echo "') ";
                                }
                                echo "\"
                                                               data-product-option-value-id=\"";
                                // line 324
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo "\">";
                                if ( !$this->getAttribute($context["option_value"], "image", array())) {
                                    echo " ";
                                    echo $this->getAttribute($context["option_value"], "name", array());
                                    echo " ";
                                }
                                echo "</a>
                                                        </li>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 327
                            echo "                                                    <li class=\"swatches-info\"></li>
                                                </ul>
                                                <div class=\"option-swatches\" id=\"input-option";
                            // line 329
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "\"> ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 330
                                echo "                                                        <div class=\"radio\">
                                                            <label>
                                                                <input type=\"radio\" class=\"radio-option-value\" id=\"radio-option-value-";
                                // line 332
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo "\" name=\"option[";
                                echo $this->getAttribute($context["option"], "product_option_id", array());
                                echo "]\" value=\"";
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo "\" />
                                                                ";
                                // line 333
                                if ($this->getAttribute($context["option_value"], "image", array())) {
                                    echo " <img src=\"";
                                    echo $this->getAttribute($context["option_value"], "image", array());
                                    echo "\" alt=\"";
                                    echo $this->getAttribute($context["option_value"], "name", array());
                                    echo " ";
                                    if ($this->getAttribute($context["option_value"], "price", array())) {
                                        echo " ";
                                        echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                        echo " ";
                                        echo $this->getAttribute($context["option_value"], "price", array());
                                        echo " ";
                                    }
                                    echo "\" class=\"img-thumbnail\" /> ";
                                }
                                // line 334
                                echo "                                                                ";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "
                                                                ";
                                // line 335
                                if ($this->getAttribute($context["option_value"], "price", array())) {
                                    // line 336
                                    echo "                                                                    (";
                                    echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                    echo $this->getAttribute($context["option_value"], "price", array());
                                    echo ")
                                                                ";
                                }
                                // line 337
                                echo " </label>
                                                        </div>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 339
                            echo " </div>
                                            </div>
                                        ";
                        } else {
                            // line 342
                            echo "                                            <div class=\"form-group";
                            if ($this->getAttribute($context["option"], "required", array())) {
                                echo " required ";
                            }
                            echo "\">
                                                <label class=\"control-label\">";
                            // line 343
                            echo $this->getAttribute($context["option"], "name", array());
                            echo "</label>
                                                <div id=\"input-option";
                            // line 344
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "\"> ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 345
                                echo "                                                        <div class=\"radio\">
                                                            <label>
                                                                <input type=\"radio\" name=\"option[";
                                // line 347
                                echo $this->getAttribute($context["option"], "product_option_id", array());
                                echo "]\" value=\"";
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo "\" />
                                                                ";
                                // line 348
                                if ($this->getAttribute($context["option_value"], "image", array())) {
                                    echo " <img src=\"";
                                    echo $this->getAttribute($context["option_value"], "image", array());
                                    echo "\" alt=\"";
                                    echo $this->getAttribute($context["option_value"], "name", array());
                                    echo " ";
                                    if ($this->getAttribute($context["option_value"], "price", array())) {
                                        echo " ";
                                        echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                        echo " ";
                                        echo $this->getAttribute($context["option_value"], "price", array());
                                        echo " ";
                                    }
                                    echo "\" class=\"img-thumbnail\" /> ";
                                }
                                // line 349
                                echo "                                                                ";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "
                                                                ";
                                // line 350
                                if ($this->getAttribute($context["option_value"], "price", array())) {
                                    // line 351
                                    echo "                                                                    (";
                                    echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                    echo $this->getAttribute($context["option_value"], "price", array());
                                    echo ")
                                                                ";
                                }
                                // line 352
                                echo " </label>
                                                        </div>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 354
                            echo " </div>
                                            </div>
                                        ";
                        }
                        // line 357
                        echo "                                    ";
                    }
                    // line 358
                    echo "                                ";
                } else {
                    // line 359
                    echo "                                    ";
                    if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                        // line 360
                        echo "                                        <div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required ";
                        }
                        echo "\">
                                            <label class=\"control-label\" for=\"input-option";
                        // line 361
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
                                            <select name=\"option[";
                        // line 362
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" id=\"input-option";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\" class=\"form-control\">
                                                <option value=\"\">";
                        // line 363
                        echo (isset($context["text_select"]) ? $context["text_select"] : null);
                        echo "</option>
                                                ";
                        // line 364
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 365
                            echo "                                                    <option value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "
                                                        ";
                            // line 366
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                // line 367
                                echo "                                                            (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ")
                                                        ";
                            }
                            // line 368
                            echo " </option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 370
                        echo "                                            </select>
                                        </div>
                                    ";
                    }
                    // line 373
                    echo "                                    ";
                    if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                        // line 374
                        echo "                                        <div class=\"form-group";
                        if ($this->getAttribute($context["option"], "required", array())) {
                            echo " required ";
                        }
                        echo "\">
                                            <label class=\"control-label\">";
                        // line 375
                        echo $this->getAttribute($context["option"], "name", array());
                        echo "</label>
                                            <div id=\"input-option";
                        // line 376
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 377
                            echo "                                                    <div class=\"radio\">
                                                        <label>
                                                            <input type=\"radio\" name=\"option[";
                            // line 379
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                            echo "\" />
                                                            ";
                            // line 380
                            if ($this->getAttribute($context["option_value"], "image", array())) {
                                echo " <img src=\"";
                                echo $this->getAttribute($context["option_value"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo " ";
                                if ($this->getAttribute($context["option_value"], "price", array())) {
                                    echo " ";
                                    echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                    echo " ";
                                    echo $this->getAttribute($context["option_value"], "price", array());
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            // line 381
                            echo "                                                            ";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "
                                                            ";
                            // line 382
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                // line 383
                                echo "                                                                (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ")
                                                            ";
                            }
                            // line 384
                            echo " </label>
                                                    </div>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 386
                        echo " </div>
                                        </div>
                                    ";
                    }
                    // line 389
                    echo "                                ";
                }
                // line 390
                echo "                                ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 391
                    echo "                                    <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 392
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                        <div id=\"input-option";
                    // line 393
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 394
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\" name=\"option[";
                        // line 396
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                                                        ";
                        // line 397
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 398
                        echo "                                                        ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                        ";
                        // line 399
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 400
                            echo "                                                            (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                        ";
                        }
                        // line 401
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 403
                    echo " </div>
                                    </div>
                                ";
                }
                // line 406
                echo "                                ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 407
                    echo "                                    <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\" for=\"input-option";
                    // line 408
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                        <input type=\"text\" name=\"option[";
                    // line 409
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                                    </div>
                                ";
                }
                // line 412
                echo "                                ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 413
                    echo "                                    <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\" for=\"input-option";
                    // line 414
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                        <textarea name=\"option[";
                    // line 415
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
                                    </div>
                                ";
                }
                // line 418
                echo "                                ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 419
                    echo "                                    <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 420
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                        <button type=\"button\" id=\"button-upload";
                    // line 421
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                                        <input type=\"hidden\" name=\"option[";
                    // line 422
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
                                    </div>
                                ";
                }
                // line 425
                echo "                                ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 426
                    echo "                                    <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\" for=\"input-option";
                    // line 427
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                        <div class=\"input-group date\">
                                            <input type=\"text\" name=\"option[";
                    // line 429
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 435
                echo "                                ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 436
                    echo "                                    <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\" for=\"input-option";
                    // line 437
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                        <div class=\"input-group datetime\">
                                            <input type=\"text\" name=\"option[";
                    // line 439
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 445
                echo "                                ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 446
                    echo "                                    <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\" for=\"input-option";
                    // line 447
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                        <div class=\"input-group time\">
                                            <input type=\"text\" name=\"option[";
                    // line 449
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 455
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 456
            echo "\t\t\t\t\t\t\t</div>
                        ";
        }
        // line 458
        echo "                        ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 459
            echo "                            <h3>";
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
                            <div class=\"form-group required\">
                                <select name=\"recurring_id\" class=\"form-control\">
                                    <option value=\"\">";
            // line 462
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                                    ";
            // line 463
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 464
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 466
            echo "                                </select>
                                <div class=\"help-block\" id=\"recurring-description\"></div>
                            </div>
                        ";
        }
        // line 470
        echo "                        <div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"quantity-box\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-quantity\">";
        // line 472
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"quantity-content\">
\t\t\t\t\t\t\t\t\t  <input type=\"button\" id=\"plus\" value=\"&#43;\" class=\"form-control\"/> 
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
        // line 475
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />\t\t\t\t\t
\t\t\t\t\t\t\t\t\t  <input type=\"button\" id=\"minus\" value=\"-\" class=\"form-control\" /> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 479
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
\t\t\t\t\t\t\t<div class=\"product-actions\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 481
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn\">";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
\t\t\t\t\t\t\t\t<div class=\"wishlist-compare\">
\t\t\t\t\t\t\t\t\t<button class=\"btn-wishlist btn btn-default\" type=\"button\" title=\"";
        // line 483
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn-compare btn btn-default\" type=\"button\" title=\"";
        // line 484
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </div>
                        ";
        // line 488
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 489
            echo "\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 490
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
                        ";
        }
        // line 491
        echo "</div>
\t\t\t\t\t";
        // line 492
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 493
            echo "\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<p>";
            // line 494
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
\t\t\t\t\t\t\t";
            // line 495
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 496
                echo "\t\t\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
\t\t\t\t\t\t\t\t";
                } else {
                    // line 497
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 498
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 499
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
        }
        // line 501
        echo "                    ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 502
            echo "\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<!-- AddThis Button BEGIN -->
\t\t\t\t\t\t<div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 504
            echo (isset($context["share"]) ? $context["share"] : null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
\t\t\t\t\t\t<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>
\t\t\t\t\t\t<!-- AddThis Button END -->
                    ";
        }
        // line 508
        echo "\t\t\t</div>
            </div>
\t\t\t<div class=\"block-3\">
\t\t\t\t<div class=\"block-3-content\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 513
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
\t\t\t\t\t\t";
        // line 514
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 515
            echo "\t\t\t\t\t\t\t<li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 517
        echo "\t\t\t\t\t\t";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 518
            echo "\t\t\t\t\t\t\t<li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 520
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">";
        // line 522
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
\t\t\t\t\t\t";
        // line 523
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 524
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t";
            // line 526
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 527
                echo "\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"><strong>";
                // line 529
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
                // line 533
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 534
                    echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 535
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 536
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 539
                echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 541
            echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 544
        echo "\t\t\t\t\t\t";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 545
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t\t\t<form class=\"form-horizontal\" id=\"form-review\">
\t\t\t\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t\t\t\t\t<h2>";
            // line 548
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
\t\t\t\t\t\t\t\t\t";
            // line 549
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 550
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 552
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 553
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
                // line 558
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block\">";
                // line 560
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 565
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp; ";
                // line 566
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"2\" />
\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"3\" />
\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"4\" />
\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"5\" />
\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
                // line 576
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 578
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 581
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 585
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 587
            echo "\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 590
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            ";
        // line 593
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
        ";
        // line 594
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
</div>
";
        // line 597
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 598
            echo "<div class=\"related-products\">
\t<div class=\"container\">
\t\t\t<div class=\"module-title\">
\t\t\t\t<h2>";
            // line 601
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h2>
\t\t\t</div>
\t\t\t<div class=\"related-container owl-carousel owl-theme\">
\t\t\t";
            // line 604
            $context["rows"] = 1;
            // line 605
            echo "\t\t\t";
            $context["count"] = 0;
            // line 606
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 607
                echo "\t\t\t\t";
                if ((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0)) {
                    // line 608
                    echo "\t\t\t\t<div class=\"row_items\">
\t\t\t\t";
                }
                // line 610
                echo "\t\t\t\t";
                $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
                // line 611
                echo "\t\t\t\t\t<div class=\"product-layout product-grid\">
\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 615
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 616
                if ($this->getAttribute($context["product"], "rotator_image", array())) {
                    echo "<img class=\"img-r\" src=\"";
                    echo $this->getAttribute($context["product"], "rotator_image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />";
                }
                // line 617
                echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                // line 619
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 620
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo $this->getAttribute($context["product"], "text_percent", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 622
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "is_new", array())) {
                    // line 623
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\"><span>";
                    echo (isset($context["text_label_new"]) ? $context["text_label_new"] : null);
                    echo "</span></div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 625
                echo "\t\t\t\t\t\t\t\t\t<div class=\"image-icons\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 627
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><span>";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 630
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><span>";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"qv-button-container\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 633
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><span>";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                // line 638
                if ($this->getAttribute($context["product"], "manufacturer", array())) {
                    // line 639
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 640
                    echo $this->getAttribute($context["product"], "manufacturers", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "manufacturer", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 643
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 644
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 645
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 646
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 648
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span><span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 650
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 651
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 653
                    echo "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 655
                echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t";
                // line 656
                if (($this->getAttribute($context["product"], "rating", array()) >= 0)) {
                    // line 657
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 659
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 660
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) == $context["i"])) {
                            // line 661
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 662
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo (isset($context["class_r"]) ? $context["class_r"] : null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 664
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 665
                    echo "\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"text-rating\">";
                    echo "(";
                    echo $this->getAttribute($context["product"], "rating", array());
                    echo ")";
                    echo "</span> -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 669
                echo "\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 672
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t</div>
\t\t\t\t";
                // line 680
                if (((((isset($context["count"]) ? $context["count"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0) || ((isset($context["count"]) ? $context["count"] : null) == twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null))))) {
                    // line 681
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 683
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 684
            echo "\t\t</div>
\t</div>
</div>
";
        }
        // line 688
        echo "<script type=\"text/javascript\"><!--
    \$('#product-product select[name=\\'recurring_id\\'], #product-product input[name=\"quantity\"]').change(function(){
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('#product-product input[name=\\'product_id\\'], #product-product input[name=\\'quantity\\'], #product-product select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function() {
                \$('#product-product #recurring-description').html('');
            },
            success: function(json) {
                \$('#product-product .alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#product-product #recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#product-product #button-cart').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product-product #product input[type=\\'text\\'], #product-product #product input[type=\\'hidden\\'], #product-product #product input[type=\\'radio\\']:checked, #product-product #product input[type=\\'checkbox\\']:checked, #product-product #product select, #product-product #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                \$('#product-product #button-cart').button('loading');
            },
            complete: function() {
                \$('#product-product #button-cart').button('reset');
            },
            success: function(json) {
                \$('#product-product .alert-dismissible, .text-danger').remove();
                \$('#product-product .form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('#product-product #input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        \$('#product-product select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('#product-product .text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    \$('body').before('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    \$('#cart > button').html('<i class=\"icon-shopping-bag2\"></i><span id=\"cart-total\">' + json['total'] + '</span>');

                    \$('html, body').animate({ scrollTop: 0 }, 'slow');

                    \$('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 764
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 769
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 775
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: false
    });
\t
\t\$('.block-1 .item a').click( function(){
\t\tif ( \$(this).hasClass('active') ) {
\t\t\t\$(this).removeClass('active');
\t\t} else {
\t\t\t\$('.item a.active').removeClass('active');
\t\t\t\$(this).addClass('active');    
\t\t}
\t});

    \$('#product-product button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;

        \$('#product-product #form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#product-product #form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if (\$('#product-product #form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#product-product #form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('#product-product .text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
\t\$('.related-container').owlCarousel({
\t\titems: 6,
\t\tnav: true,
\t\tdots: false,
\t\tnavSpeed: 1000,
\t\tmargin: 15,
\t\tresponsive:{
\t\t\t0:{
\t\t\t\titems: 1
\t\t\t},
\t\t\t481:{
\t\t\t\titems: 2
\t\t\t},
\t\t\t769:{
\t\t\t\titems: 3
\t\t\t},
\t\t\t1024:{
\t\t\t\titems: 4
\t\t\t},
\t\t\t1200:{
\t\t\t\titems: 6
\t\t\t},
        },
\t\tnavText : ['<i class=\"fa fa-angle-left\"></i>','<i class=\"fa fa-angle-right\"></i>'],
\t});
    \$('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 876
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 880
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$(\"#form-review\").serialize(),
            beforeSend: function() {
                \$('#button-review').button('loading');
            },
            complete: function() {
                \$('#button-review').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                    \$('input[name=\\'name\\']').val('');
                    \$('textarea[name=\\'text\\']').val('');
                    \$('input[name=\\'rating\\']:checked').prop('checked', false);
                }
            }
        });
    });

    ";
        // line 908
        if ( !(isset($context["use_zoom"]) ? $context["use_zoom"] : null)) {
            // line 909
            echo "    \$(document).ready(function() {
        \$('.thumbnails').magnificPopup({
            type:'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
    });
    ";
        }
        // line 919
        echo "\t
\tvar minimum = ";
        // line 920
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo ";
\t\$(\"#product-product #input-quantity\").change(function(){
\t\tif (\$(this).val() < minimum) {
\t\t  alert(\"Minimum Miktar: \"+minimum);
\t\t  \$(\"#product-product #input-quantity\").val(minimum);
\t\t}
\t});
\t// increase number of product
\tfunction minus(minimum){
\t\tvar currentval = parseInt(\$(\"#product-product #input-quantity\").val());
\t\t\$(\"#product-product #input-quantity\").val(currentval-1);
\t\tif(\$(\"#product-product #input-quantity\").val() <= 0 || \$(\"#product-product #input-quantity\").val() < minimum){
\t\t  alert(\"Minimum Tutar: \"+minimum);
\t\t  \$(\"#product-product #input-quantity\").val(minimum);
\t\t}
\t};
\t// decrease of product
\tfunction plus(){
\t\tvar currentval = parseInt(\$(\"#product-product #input-quantity\").val());
\t\t\$(\"#product-product #input-quantity\").val(currentval+1);
\t};
\t\$('#product-product #minus').click(function(){
\t\tminus(minimum);
\t});
\t\$('#product-product #plus').click(function(){
\t\tplus();
\t});
    //--></script>

            
            <script type=\"text/javascript\" src=\"";
        // line 950
        echo $this->getAttribute((isset($context["module_live_options"]) ? $context["module_live_options"] : null), "module_live_options_js", array());
        echo "\"></script>
            
            
";
        // line 953
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2593 => 953,  2587 => 950,  2554 => 920,  2551 => 919,  2539 => 909,  2537 => 908,  2506 => 880,  2499 => 876,  2395 => 775,  2386 => 769,  2378 => 764,  2300 => 688,  2294 => 684,  2288 => 683,  2284 => 681,  2282 => 680,  2267 => 672,  2262 => 669,  2252 => 665,  2246 => 664,  2240 => 662,  2237 => 661,  2234 => 660,  2230 => 659,  2226 => 657,  2224 => 656,  2217 => 655,  2213 => 653,  2205 => 651,  2202 => 650,  2194 => 648,  2188 => 646,  2186 => 645,  2183 => 644,  2180 => 643,  2172 => 640,  2169 => 639,  2167 => 638,  2155 => 633,  2145 => 630,  2135 => 627,  2131 => 625,  2125 => 623,  2122 => 622,  2116 => 620,  2114 => 619,  2104 => 617,  2096 => 616,  2092 => 615,  2086 => 611,  2083 => 610,  2079 => 608,  2076 => 607,  2071 => 606,  2068 => 605,  2066 => 604,  2060 => 601,  2055 => 598,  2053 => 597,  2047 => 594,  2043 => 593,  2038 => 590,  2033 => 587,  2027 => 585,  2018 => 581,  2012 => 578,  2007 => 576,  1994 => 566,  1990 => 565,  1982 => 560,  1977 => 558,  1969 => 553,  1965 => 552,  1961 => 550,  1959 => 549,  1955 => 548,  1950 => 545,  1947 => 544,  1942 => 541,  1935 => 539,  1926 => 536,  1922 => 535,  1919 => 534,  1915 => 533,  1908 => 529,  1904 => 527,  1900 => 526,  1896 => 524,  1894 => 523,  1890 => 522,  1886 => 520,  1880 => 518,  1877 => 517,  1871 => 515,  1869 => 514,  1865 => 513,  1858 => 508,  1851 => 504,  1847 => 502,  1844 => 501,  1840 => 499,  1834 => 498,  1827 => 497,  1817 => 496,  1813 => 495,  1809 => 494,  1806 => 493,  1804 => 492,  1801 => 491,  1796 => 490,  1793 => 489,  1791 => 488,  1780 => 484,  1772 => 483,  1765 => 481,  1760 => 479,  1753 => 475,  1747 => 472,  1743 => 470,  1737 => 466,  1726 => 464,  1722 => 463,  1718 => 462,  1711 => 459,  1708 => 458,  1704 => 456,  1698 => 455,  1685 => 449,  1678 => 447,  1671 => 446,  1668 => 445,  1655 => 439,  1648 => 437,  1641 => 436,  1638 => 435,  1625 => 429,  1618 => 427,  1611 => 426,  1608 => 425,  1600 => 422,  1592 => 421,  1588 => 420,  1581 => 419,  1578 => 418,  1566 => 415,  1560 => 414,  1553 => 413,  1550 => 412,  1538 => 409,  1532 => 408,  1525 => 407,  1522 => 406,  1517 => 403,  1509 => 401,  1502 => 400,  1500 => 399,  1495 => 398,  1479 => 397,  1473 => 396,  1469 => 394,  1463 => 393,  1459 => 392,  1452 => 391,  1449 => 390,  1446 => 389,  1441 => 386,  1433 => 384,  1426 => 383,  1424 => 382,  1419 => 381,  1403 => 380,  1397 => 379,  1393 => 377,  1387 => 376,  1383 => 375,  1376 => 374,  1373 => 373,  1368 => 370,  1361 => 368,  1354 => 367,  1352 => 366,  1345 => 365,  1341 => 364,  1337 => 363,  1331 => 362,  1325 => 361,  1318 => 360,  1315 => 359,  1312 => 358,  1309 => 357,  1304 => 354,  1296 => 352,  1289 => 351,  1287 => 350,  1282 => 349,  1266 => 348,  1260 => 347,  1256 => 345,  1250 => 344,  1246 => 343,  1239 => 342,  1234 => 339,  1226 => 337,  1219 => 336,  1217 => 335,  1212 => 334,  1196 => 333,  1188 => 332,  1184 => 330,  1178 => 329,  1174 => 327,  1159 => 324,  1153 => 323,  1145 => 322,  1134 => 321,  1131 => 320,  1127 => 319,  1123 => 318,  1119 => 317,  1112 => 316,  1109 => 315,  1106 => 314,  1103 => 313,  1098 => 310,  1091 => 308,  1084 => 307,  1082 => 306,  1075 => 305,  1071 => 304,  1067 => 303,  1061 => 302,  1055 => 301,  1048 => 300,  1043 => 297,  1036 => 295,  1029 => 294,  1027 => 293,  1020 => 292,  1016 => 291,  1012 => 290,  1006 => 289,  1002 => 287,  987 => 284,  981 => 283,  973 => 282,  962 => 281,  959 => 280,  955 => 279,  951 => 278,  945 => 277,  938 => 276,  935 => 275,  932 => 274,  929 => 273,  925 => 272,  921 => 271,  918 => 270,  916 => 269,  911 => 267,  902 => 264,  893 => 260,  887 => 258,  885 => 257,  878 => 256,  868 => 254,  866 => 253,  863 => 252,  859 => 250,  856 => 249,  845 => 247,  841 => 246,  836 => 243,  833 => 242,  824 => 238,  818 => 236,  815 => 235,  806 => 231,  800 => 229,  797 => 228,  788 => 224,  779 => 220,  775 => 218,  765 => 213,  760 => 210,  758 => 209,  755 => 208,  752 => 207,  744 => 204,  741 => 203,  735 => 202,  729 => 200,  726 => 199,  723 => 198,  719 => 197,  715 => 195,  713 => 194,  709 => 193,  705 => 191,  700 => 188,  692 => 183,  688 => 182,  685 => 181,  683 => 180,  680 => 179,  674 => 176,  670 => 175,  666 => 174,  663 => 173,  661 => 172,  658 => 171,  655 => 170,  646 => 169,  640 => 168,  637 => 167,  631 => 165,  629 => 164,  624 => 162,  620 => 161,  616 => 160,  611 => 159,  609 => 158,  605 => 156,  603 => 155,  599 => 153,  591 => 152,  582 => 150,  576 => 149,  573 => 148,  571 => 147,  563 => 143,  560 => 142,  557 => 141,  554 => 140,  551 => 139,  549 => 138,  546 => 137,  543 => 136,  540 => 135,  536 => 133,  533 => 132,  516 => 130,  511 => 129,  508 => 128,  494 => 126,  492 => 125,  489 => 124,  486 => 123,  483 => 122,  480 => 121,  477 => 120,  464 => 118,  459 => 117,  456 => 116,  448 => 114,  446 => 113,  443 => 112,  440 => 111,  423 => 109,  418 => 108,  415 => 107,  401 => 105,  399 => 104,  396 => 103,  393 => 102,  391 => 101,  388 => 100,  385 => 99,  381 => 97,  378 => 96,  372 => 95,  370 => 94,  360 => 91,  354 => 90,  348 => 89,  345 => 88,  340 => 87,  337 => 86,  334 => 85,  323 => 81,  319 => 80,  313 => 79,  310 => 78,  308 => 77,  304 => 75,  294 => 72,  288 => 71,  284 => 70,  278 => 69,  269 => 68,  261 => 67,  252 => 66,  250 => 65,  247 => 64,  242 => 61,  239 => 60,  233 => 59,  231 => 58,  221 => 55,  215 => 54,  207 => 53,  204 => 52,  199 => 51,  196 => 50,  193 => 49,  182 => 45,  178 => 44,  172 => 43,  169 => 42,  167 => 41,  163 => 39,  153 => 36,  143 => 35,  137 => 34,  128 => 33,  120 => 32,  111 => 31,  109 => 30,  106 => 29,  104 => 28,  99 => 26,  95 => 24,  93 => 23,  88 => 22,  85 => 21,  82 => 20,  79 => 19,  76 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-product" class="container">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <div class="row">{{ column_left }}*/
/*         {% if column_left and column_right %}*/
/*             {% set class = 'col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*             {% set class = 'col-sm-9' %}*/
/*         {% else %}*/
/*             {% set class = 'col-sm-12' %}*/
/*         {% endif %}*/
/*         <div id="content" class="{{ class }}">{{ content_top }}*/
/*             <div class="row"> {% if column_left or column_right %}*/
/*                     {% set class = 'col-sm-6' %}*/
/*                 {% else %}*/
/*                     {% set class = 'col-sm-6' %}*/
/*                 {% endif %}*/
/*                 <div class="{{ class }} block-1">*/
/*                     {% if use_zoom %}*/
/*                         <input type="hidden" id="check-use-zoom" value="1" />*/
/*                         <input type="hidden" id="light-box-position" value="1" />*/
/*                         <input type="hidden" id="product-identify" value="{{ product_id }}" />*/
/*                         <div class="lightbox-container"></div>*/
/*                         {% if use_swatches %}*/
/*                             <div class="product-zoom-image">*/
/*                                 {% if thumb %}*/
/*                                     <a href="{{ popup }}" class="cloud-zoom main-image" id="product-cloud-zoom" style="width: {{ thumb_dimension.width }}px; height: {{ thumb_dimension.height }}px;"*/
/*                                        rel="{% if zoom_config.bg_status %} tint:'{{ zoom_config.bg_color }}',tintOpacity:{{ zoom_config.bg_opacity }},{% endif %}*/
/*                                             {% if zoom_config.title_status %} showTitle: true {% else %} showTitle: false {% endif %},*/
/*                                             zoomWidth:{{ thumb_dimension.width }},zoomHeight:{{ thumb_dimension.height }},*/
/*                                             {% if zoom_config.position == 'inside' %} position:'inside', adjustX: 0 {% else %} adjustX: {{ zoom_config.space }} {% endif %}">*/
/*                                         <img src="{{ thumb }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}" alt="{{ custom_alt ? custom_alt : heading_title }}" />*/
/*                                     </a>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             <div class="additional-images owl-carousel owl-theme">*/
/*                                 {% if thumb %}*/
/*                                     <div class="item">*/
/*                                         <a class="cloud-zoom-gallery sub-image" id="product-image-default" href="{{ popup }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}"*/
/*                                            rel="useZoom: 'product-cloud-zoom', smallImage: '{{ thumb }}'" data-pos="1">*/
/*                                             <img src="{{ small_image }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}" alt="{{ custom_alt ? custom_alt : heading_title }}" />*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if images %}*/
/*                                     {% set img_count = 2 %}*/
/*                                     {% for image in images %}*/
/*                                         <div class="item">*/
/*                                             <a class="cloud-zoom-gallery sub-image" id="product-image-options-{{ image.product_option_value_id }}" href="{{ image.popup }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}"*/
/*                                                rel="useZoom: 'product-cloud-zoom', smallImage: '{{ image.product_image_option }}'" data-pos="{{ img_count }}">*/
/*                                                 <img src="{{ image.thumb }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}" alt="{{ custom_alt ? custom_alt : heading_title }}" />*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         {% set img_count = img_count + 1 %}*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                             </div>*/
/* */
/*                         {% else %}*/
/*                             <div class="product-zoom-image">*/
/*                                 {% if thumb %}*/
/*                                     <a href="{{ popup }}" class="cloud-zoom main-image" id="product-cloud-zoom" style="width: {{ thumb_dimension.width }}px; height: {{ thumb_dimension.height }}px;"*/
/*                                        rel="{% if zoom_config.bg_status %} tint:'{{ zoom_config.bg_color }}',tintOpacity:{{ zoom_config.bg_opacity }},{% endif %}*/
/*                                             {% if zoom_config.title_status %} showTitle: true {% else %} showTitle: false {% endif %},*/
/*                                             zoomWidth:{{ thumb_dimension.width }},zoomHeight:{{ thumb_dimension.height }},*/
/*                                             adjustX: {{ zoom_config.space }},*/
/*                                             {% if zoom_config.position == 'inside' %} position:'inside' {% endif %}">*/
/*                                         <img src="{{ thumb }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}" alt="{{ custom_alt ? custom_alt : heading_title }}" />*/
/*                                     </a>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             <div class="additional-images owl-carousel owl-theme">*/
/*                                 {% if thumb %}*/
/*                                     <div class="item">*/
/*                                         <a class="cloud-zoom-gallery sub-image" href="{{ popup }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}"*/
/*                                            rel="useZoom: 'product-cloud-zoom', smallImage: '{{ thumb }}'" data-pos="1">*/
/*                                             <img src="{{ small_image }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}" alt="{{ custom_alt ? custom_alt : heading_title }}" />*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if images %}*/
/*                                     {% set img_count = 2 %}*/
/*                                     {% for image in images %}*/
/*                                         <div class="item">*/
/*                                             <a class="cloud-zoom-gallery sub-image" href="{{ image.popup }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}"*/
/*                                                rel="useZoom: 'product-cloud-zoom', smallImage: '{{ image.product_image_option }}'" data-pos="{{ img_count }}">*/
/*                                                 <img src="{{ image.thumb }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}" alt="{{ custom_alt ? custom_alt : heading_title }}" />*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         {% set img_count = img_count + 1 %}*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         <input type="hidden" id="check-use-zoom" value="0" />*/
/*                         {% if use_swatches %}*/
/*                             {% if thumb or images %}*/
/*                                 <ul class="thumbnails" id="swatches-image-container">*/
/*                                     {% if thumb %}*/
/*                                         <li><a class="thumbnail swatches-image" href="{{ popup }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}"><img src="{{ thumb }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}" alt="{{ custom_alt ? custom_alt : heading_title }}" /></a></li>*/
/*                                     {% endif %}*/
/*                                     {% if images %}*/
/*                                         {% for image in images %}*/
/*                                             <li class="image-additional"><a class="thumbnail" href="{{ image.popup }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}"> <img src="{{ image.thumb }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}" alt="{{ custom_alt ? custom_alt : heading_title }}" /></a></li>*/
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                                 {% if thumb %}*/
/*                                     <input type="hidden" id="product-image-default" data-thumb="{{ thumb }}" data-popup="{{ popup }}" />*/
/*                                 {% endif %}*/
/*                                 {% if images %}*/
/*                                     {% for image in images %}*/
/*                                         <input type="hidden" id="product-image-options-{{ image.product_option_value_id }}" data-thumb="{{ image.product_image_option }}" data-popup="{{ image.popup }}" />*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             {% if thumb or images %}*/
/*                                 <ul class="thumbnails">*/
/*                                     {% if thumb %}*/
/*                                         <li><a class="thumbnail" href="{{ popup }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}"><img src="{{ thumb }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}" alt="{{ custom_alt ? custom_alt : heading_title }}" /></a></li>*/
/*                                     {% endif %}*/
/*                                     {% if images %}*/
/*                                         {% for image in images %}*/
/*                                             <li class="image-additional"><a class="thumbnail" href="{{ image.popup }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}"> <img src="{{ image.thumb }}" title="{{ custom_imgtitle ? custom_imgtitle : heading_title }}" alt="{{ custom_alt ? custom_alt : heading_title }}" /></a></li>*/
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 {% if column_left or column_right %}*/
/*                     {% set class = 'col-sm-6' %}*/
/*                 {% else %}*/
/*                     {% set class = 'col-sm-6' %}*/
/*                 {% endif %}*/
/*                 <div class="{{ class }} block-2">*/
/* */
/* 			*/
/* */
/* 				{% if richsnippets.breadcrumbs %}*/
/* 				<span xmlns:v="http://rdf.data-vocabulary.org/#">*/
/* 				{% for mbreadcrumb in mbreadcrumbs %} {% if mbreadcrumb.text|striptags %}*/
/* 				<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="{{ mbreadcrumb.href}}" alt="{{ mbreadcrumb.text|striptags }}"></a></span>*/
/* */
/* 				{% endif %}  {% endfor %} </span> {% endif %}*/
/* */
/* */
/* 				{% if richsnippets.product %}*/
/* */
/* 				<span itemscope itemtype="http://schema.org/Product">*/
/* 				{%  set mlink = breadcrumbs|last %}*/
/* 				<meta itemprop="url" content="{{ mlink.href }}" >*/
/* 				<meta itemprop="name" content="{{ heading_title }}" >*/
/* 				<meta itemprop="model" content="{{ model }}" >*/
/* 				<meta itemprop="manufacturer" content="{{ manufacturer }}" >*/
/* */
/* 				{% if thumb %}*/
/* 				<meta itemprop="image" content="{{ thumb }}" >*/
/* 				{% endif %}*/
/* */
/* 				{% if images %} {% for image in images %}*/
/* 				<meta itemprop="image" content="{{ image.thumb }}" >*/
/* 				{% endfor %} {% endif %}*/
/* */
/* 				{% if richsnippets.offer %}*/
/* 				<span itemprop="offers" itemscope itemtype="http://schema.org/Offer">*/
/* 				<meta itemprop="price" content="{{ rprice }}" />*/
/* 				<meta itemprop="priceCurrency" content="{{ currency_code }}" />*/
/* 				<link itemprop="availability" href="http://schema.org/{{ (quantity > 0) ? "InStock" : "OutOfStock"}}" />*/
/* 				</span>*/
/* 				{% endif %}*/
/* */
/* 				{% if richsnippets.rating  and  review_no %}*/
/* 				<span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">*/
/* 				<meta itemprop="reviewCount" content="{{ review_no }}">*/
/* 				<meta itemprop="ratingValue" content="{{ rating }}">*/
/* 				<meta itemprop="bestRating" content="5">*/
/* 				<meta itemprop="worstRating" content="1">*/
/* 				</span>*/
/* 				{% endif %}*/
/* */
/* 				</span>*/
/* 				{% endif %}*/
/*             */
/* 			*/
/*                     <h1 class="product-name">{{ heading_title }}</h1>*/
/* 					{% if review_status %}*/
/* 						<div class="ratings">*/
/* 							<div class="rating-box">*/
/* 							{% for i in 1..5 %}*/
/* 								{% if rating == i %}*/
/* 								{% set class_r = "rating"~i %}*/
/* 								<div class="{{ class_r }}">rating</div>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 							</div>*/
/* 							<a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); $('body,html').animate({scrollTop: $('.block-3 .nav-tabs').offset().top}, 800); return false;">{{ reviews }}</a><span>|</span><a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); $('body,html').animate({scrollTop: $('.block-3 .nav-tabs').offset().top}, 800); return false;">{{ text_write }}</a>*/
/* 						</div>												            */
/* 					{% endif %}*/
/*                     {% if price %}*/
/*                         <ul class="list-unstyled">*/
/* 							{% if not special %}*/
/* 							<li class="price-product">*/
/* 							  <span>*/
/*             */
/*             <span class="{{ module_live_options.module_live_options_price_container }}">{{ price }}</span>*/
/*             */
/*             </span>*/
/* 							</li>*/
/* 							{% else %}*/
/* 							<li class="price-product"><span class="price-new">*/
/*             */
/*             <span class="{{ module_live_options.module_live_options_special_container }}">{{ special }}</span>*/
/*             */
/*             </span><span class="price-old">*/
/*             */
/*             <span class="{{ module_live_options.module_live_options_price_container }}">{{ price }}</span>*/
/*             */
/*             </span></li>*/
/* 							{% endif %}*/
/* 							{% if tax %}*/
/* 							<li>{{ text_tax }} */
/*             */
/*             <span class="{{ module_live_options.module_live_options_tax_container }}">{{ tax }}</span>*/
/*             */
/*             </li>*/
/* 							{% endif %}*/
/* 							{% if points %}*/
/* 							<li>{{ text_points }} */
/*             */
/*             <span class="{{ module_live_options.module_live_options_points_container }}">{{ points }}</span>*/
/*             */
/*             </li>*/
/* 							{% endif %}*/
/* 							{% if discounts %}*/
/* 							<li>*/
/* 							  <hr>*/
/* 							</li>*/
/* 							{% for discount in discounts %}*/
/* 							<li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/* 							{% endfor %}*/
/* 							{% endif %}*/
/* 						</ul>*/
/*                     {% endif %}*/
/* 					<ul class="list-unstyled">*/
/* 						{% if manufacturer %}*/
/* 						<li>{{ text_manufacturer }} <a href="{{ manufacturers }}"><span class="ex-text">{{ manufacturer }}</span></a></li>*/
/* 						{% endif %}*/
/* 						<li>{{ text_model }} <span class="ex-text">{{ model }}</span></li>*/
/* 						{% if reward %}*/
/* 						<li>{{ text_reward }} <span class="ex-text">*/
/*             */
/*             <span class="{{ module_live_options.module_live_options_reward_container }}">{{ reward }}</span>*/
/*             */
/*             </span></li>*/
/* 						{% endif %}*/
/* 						<li>{{ text_stock }} <span class="ex-text">{{ stock }}</span></li>*/
/* 					</ul>*/
/* 					<p class="short-des">*/
/* 						{{ short_description }}*/
/* 					</p>*/
/*                     <div id="product"> {% if options %}*/
/* 					<div class="option-container">*/
/*                             <h3>{{ text_option }}</h3>*/
/*                             {% for option in options %}*/
/*                                 {% if use_swatches %}*/
/*                                     {% if option.type == 'select' %}*/
/*                                         {% if option.option_id == swatches_option %}*/
/*                                             <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                 <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                 <ul class="ul-swatches-colors" data-product-option="{{ option.product_option_id }}" data-type="select">*/
/*                                                     {% for option_value in option.product_option_value %}*/
/*                                                     <li class="swatches-options">*/
/*                                                         <a href="javascript:void(0);" onclick="swatches.changeOption($(this));" title="{{ option_value.name }} {% if option_value.price %}({{ option_value.price_prefix }}{{ option_value.price }}){% endif %}"*/
/*                                                             style="{% if option_value.image %} width: {{ icon_swatches_width }}px; height: {{ icon_swatches_height }}px;*/
/*                                                             background-image: url('{{ option_value.image }}') {% endif %}"*/
/*                                                             data-product-option-value-id="{{ option_value.product_option_value_id }}">{% if not option_value.image %} {{ option_value.name }} {% endif %}</a>*/
/*                                                     </li>*/
/*                                                     {% endfor %}*/
/*                                                     <li class="swatches-info"></li>*/
/*                                                 </ul>*/
/*                                                 <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control option-swatches">*/
/*                                                     <option value="0">{{ text_select }}</option>*/
/*                                                     {% for option_value in option.product_option_value %}*/
/*                                                         <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                                                             {% if option_value.price %}*/
/*                                                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                             {% endif %} </option>*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         {% else %}*/
/*                                             <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                 <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                 <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                                                     <option value="">{{ text_select }}</option>*/
/*                                                     {% for option_value in option.product_option_value %}*/
/*                                                         <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                                                             {% if option_value.price %}*/
/*                                                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                             {% endif %} </option>*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                     {% if option.type == 'radio' %}*/
/*                                         {% if option.option_id == swatches_option %}*/
/*                                             <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                 <label class="control-label">{{ option.name }}</label>*/
/*                                                 <ul class="ul-swatches-colors" data-product-option="{{ option.product_option_id }}" data-type="radio">*/
/*                                                     {% for option_value in option.product_option_value %}*/
/*                                                         <li class="swatches-options">*/
/*                                                             <a href="javascript:void(0);" onclick="swatches.changeOption($(this));" title="{{ option_value.name }} {% if option_value.price %}({{ option_value.price_prefix }}{{ option_value.price }}){% endif %}"*/
/*                                                                style="{% if option_value.image %} width: {{ icon_swatches_width }}px; height: {{ icon_swatches_height }}px;*/
/*                                                         background-image: url('{{ option_value.image }}') {% endif %}"*/
/*                                                                data-product-option-value-id="{{ option_value.product_option_value_id }}">{% if not option_value.image %} {{ option_value.name }} {% endif %}</a>*/
/*                                                         </li>*/
/*                                                     {% endfor %}*/
/*                                                     <li class="swatches-info"></li>*/
/*                                                 </ul>*/
/*                                                 <div class="option-swatches" id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                                                         <div class="radio">*/
/*                                                             <label>*/
/*                                                                 <input type="radio" class="radio-option-value" id="radio-option-value-{{ option_value.product_option_value_id }}" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                                                                 {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                                                                 {{ option_value.name }}*/
/*                                                                 {% if option_value.price %}*/
/*                                                                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                                 {% endif %} </label>*/
/*                                                         </div>*/
/*                                                     {% endfor %} </div>*/
/*                                             </div>*/
/*                                         {% else %}*/
/*                                             <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                 <label class="control-label">{{ option.name }}</label>*/
/*                                                 <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                                                         <div class="radio">*/
/*                                                             <label>*/
/*                                                                 <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                                                                 {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                                                                 {{ option_value.name }}*/
/*                                                                 {% if option_value.price %}*/
/*                                                                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                                 {% endif %} </label>*/
/*                                                         </div>*/
/*                                                     {% endfor %} </div>*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 {% else %}*/
/*                                     {% if option.type == 'select' %}*/
/*                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                             <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                             <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                                                 <option value="">{{ text_select }}</option>*/
/*                                                 {% for option_value in option.product_option_value %}*/
/*                                                     <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                                                         {% if option_value.price %}*/
/*                                                             ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                         {% endif %} </option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                     {% if option.type == 'radio' %}*/
/*                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                             <label class="control-label">{{ option.name }}</label>*/
/*                                             <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                                                     <div class="radio">*/
/*                                                         <label>*/
/*                                                             <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                                                             {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                                                             {{ option_value.name }}*/
/*                                                             {% if option_value.price %}*/
/*                                                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                             {% endif %} </label>*/
/*                                                     </div>*/
/*                                                 {% endfor %} </div>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                                 {% if option.type == 'checkbox' %}*/
/*                                     <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                         <label class="control-label">{{ option.name }}</label>*/
/*                                         <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                                                 <div class="checkbox">*/
/*                                                     <label>*/
/*                                                         <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                                                         {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                                                         {{ option_value.name }}*/
/*                                                         {% if option_value.price %}*/
/*                                                             ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                         {% endif %} </label>*/
/*                                                 </div>*/
/*                                             {% endfor %} </div>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if option.type == 'text' %}*/
/*                                     <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                         <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if option.type == 'textarea' %}*/
/*                                     <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                         <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                         <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if option.type == 'file' %}*/
/*                                     <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                         <label class="control-label">{{ option.name }}</label>*/
/*                                         <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                                         <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if option.type == 'date' %}*/
/*                                     <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                         <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                         <div class="input-group date">*/
/*                                             <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if option.type == 'datetime' %}*/
/*                                     <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                         <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                         <div class="input-group datetime">*/
/*                                             <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 {% if option.type == 'time' %}*/
/*                                     <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                         <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                         <div class="input-group time">*/
/*                                             <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/* 							</div>*/
/*                         {% endif %}*/
/*                         {% if recurrings %}*/
/*                             <h3>{{ text_payment_recurring }}</h3>*/
/*                             <div class="form-group required">*/
/*                                 <select name="recurring_id" class="form-control">*/
/*                                     <option value="">{{ text_select }}</option>*/
/*                                     {% for recurring in recurrings %}*/
/*                                         <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                                 <div class="help-block" id="recurring-description"></div>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         <div class="form-group">*/
/* 							<div class="quantity-box">*/
/* 								<label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/* 								<div class="quantity-content">*/
/* 									  <input type="button" id="plus" value="&#43;" class="form-control"/> */
/* 									<input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control" />					*/
/* 									  <input type="button" id="minus" value="-" class="form-control" /> */
/* 								</div>*/
/* 							</div>*/
/* 							<input type="hidden" name="product_id" value="{{ product_id }}" />*/
/* 							<div class="product-actions">*/
/* 								<button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn">{{ button_cart }}</button>*/
/* 								<div class="wishlist-compare">*/
/* 									<button class="btn-wishlist btn btn-default" type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');">{{ button_wishlist }}</button>*/
/* 									<button class="btn-compare btn btn-default" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');">{{ button_compare }}</button>*/
/* 								</div>*/
/* 							</div>*/
/*                         </div>*/
/*                         {% if minimum > 1 %}*/
/* 							<div class="clearfix"></div>*/
/*                             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*                         {% endif %}</div>*/
/* 					{% if tags %}*/
/* 						<div class="clearfix"></div>*/
/* 						<p>{{ text_tags }}*/
/* 							{% for i in 0..tags|length %}*/
/* 								{% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/* 								{% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/* 							{% endfor %}*/
/* 						</p>*/
/* 					{% endif %}*/
/*                     {% if review_status %}*/
/* 						<div class="clearfix"></div>*/
/* 						<!-- AddThis Button BEGIN -->*/
/* 						<div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/* 						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>*/
/* 						<!-- AddThis Button END -->*/
/*                     {% endif %}*/
/* 			</div>*/
/*             </div>*/
/* 			<div class="block-3">*/
/* 				<div class="block-3-content">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/* 						{% if attribute_groups %}*/
/* 							<li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/* 						{% endif %}*/
/* 						{% if review_status %}*/
/* 							<li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/* 						{% endif %}*/
/* 					</ul>*/
/* 					<div class="tab-content">*/
/* 						<div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/* 						{% if attribute_groups %}*/
/* 							<div class="tab-pane" id="tab-specification">*/
/* 								<table class="table table-bordered">*/
/* 									{% for attribute_group in attribute_groups %}*/
/* 										<thead>*/
/* 										<tr>*/
/* 											<td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/* 										</tr>*/
/* 										</thead>*/
/* 										<tbody>*/
/* 										{% for attribute in attribute_group.attribute %}*/
/* 											<tr>*/
/* 												<td>{{ attribute.name }}</td>*/
/* 												<td>{{ attribute.text }}</td>*/
/* 											</tr>*/
/* 										{% endfor %}*/
/* 										</tbody>*/
/* 									{% endfor %}*/
/* 								</table>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if review_status %}*/
/* 							<div class="tab-pane" id="tab-review">*/
/* 								<form class="form-horizontal" id="form-review">*/
/* 									<div id="review"></div>*/
/* 									<h2>{{ text_write }}</h2>*/
/* 									{% if review_guest %}*/
/* 										<div class="form-group required">*/
/* 											<div class="col-sm-12">*/
/* 												<label class="control-label" for="input-name">{{ entry_name }}</label>*/
/* 												<input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<div class="col-sm-12">*/
/* 												<label class="control-label" for="input-review">{{ entry_review }}</label>*/
/* 												<textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/* 												<div class="help-block">{{ text_note }}</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group required">*/
/* 											<div class="col-sm-12">*/
/* 												<label class="control-label">{{ entry_rating }}</label>*/
/* 												&nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/* 												<input type="radio" name="rating" value="1" />*/
/* 												&nbsp;*/
/* 												<input type="radio" name="rating" value="2" />*/
/* 												&nbsp;*/
/* 												<input type="radio" name="rating" value="3" />*/
/* 												&nbsp;*/
/* 												<input type="radio" name="rating" value="4" />*/
/* 												&nbsp;*/
/* 												<input type="radio" name="rating" value="5" />*/
/* 												&nbsp;{{ entry_good }}</div>*/
/* 										</div>*/
/* 										{{ captcha }}*/
/* 										<div class="buttons clearfix">*/
/* 											<div class="pull-right">*/
/* 												<button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% else %}*/
/* 										{{ text_login }}*/
/* 									{% endif %}*/
/* 								</form>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/*             {{ content_bottom }}</div>*/
/*         {{ column_right }}*/
/* 		</div>*/
/* </div>*/
/* {% if products %}*/
/* <div class="related-products">*/
/* 	<div class="container">*/
/* 			<div class="module-title">*/
/* 				<h2>{{ text_related }}</h2>*/
/* 			</div>*/
/* 			<div class="related-container owl-carousel owl-theme">*/
/* 			{% set rows = 1 %}*/
/* 			{% set count = 0 %}*/
/* 			{% for product in products %}*/
/* 				{% if count % rows == 0 %}*/
/* 				<div class="row_items">*/
/* 				{% endif %}*/
/* 				{% set count = count + 1 %}*/
/* 					<div class="product-layout product-grid">*/
/* 						<div class="product-thumb transition">*/
/* 							<div class="item-inner">*/
/* 								<div class="image">*/
/* 									<a href="{{ product.href }}">*/
/* 										{% if product.rotator_image %}<img class="img-r" src="{{ product.rotator_image }}" alt="{{ product.name }}" />{% endif %}*/
/* 										<img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/* 									</a>*/
/* 									{% if product.special %}*/
/* 										<div class="label-product label_sale">{{ product.text_percent }}</div>*/
/* 										{% endif %}*/
/* 									{% if product.is_new %}*/
/* 									<div class="label-product label_new"><span>{{ text_label_new }}</span></div>*/
/* 									{% endif %}*/
/* 									<div class="image-icons">*/
/* 										<div class="wishlist">*/
/* 											<button type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><span>{{ button_wishlist }}</span></button>*/
/* 										</div>*/
/* 										<div class="compare">*/
/* 											<button type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><span>{{ button_compare }}</span></button>*/
/* 										</div>*/
/* 										<div class="qv-button-container">*/
/* 											<button type="button" title="{{ button_quickview }}" onclick="ocquickview.ajaxView('{{ product.href }}')"><span>{{ button_quickview }}</span></button>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div><!-- image -->*/
/* 								<div class="caption">*/
/* 									{% if product.manufacturer %}*/
/* 									<p class="manufacture-product">*/
/* 										<a href="{{ product.manufacturers }}">{{ product.manufacturer }}</a>*/
/* 									</p>*/
/* 									{% endif %}*/
/* 									{% if product.price %}*/
/* 										<p class="price">*/
/* 										{% if not product.special %}*/
/* 											{{ product.price }}*/
/* 										{% else %}*/
/* 											<span class="price-new">{{ product.special }}</span><span class="price-old">{{ product.price }}</span>*/
/* 										{% endif %}*/
/* 										{% if product.tax %}*/
/* 											<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 										{% endif %}*/
/* 										</p>*/
/* 									{% endif %}*/
/* 									<h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 									{% if product.rating>=0 %}*/
/* 										<div class="ratings">*/
/* 											<div class="rating-box">*/
/* 											{% for i in 0..5 %}*/
/* 												{% if product.rating == i %}*/
/* 												{% set class_r = "rating"~i %}*/
/* 												<div class="{{ class_r }}">rating</div>*/
/* 												{% endif %}*/
/* 											{% endfor %}*/
/* 											<!-- <span class="text-rating">{{ "(" }}{{ product.rating }}{{ ")" }}</span> -->*/
/* 											</div>*/
/* 										</div>					*/
/* 									{% endif %}*/
/* 									<div class="actions">*/
/* 										<div class="add-to-links">*/
/* 											<div class="cart">*/
/* 												<button type="button" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"><span>{{ button_cart }}</span></button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div><!-- caption -->*/
/* 							</div>*/
/* 						</div><!-- product-thumb -->*/
/* 					</div>*/
/* 				{% if (count % rows == 0) or (count == products|length ) %}*/
/* 				</div>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/*     $('#product-product select[name=\'recurring_id\'], #product-product input[name="quantity"]').change(function(){*/
/*         $.ajax({*/
/*             url: 'index.php?route=product/product/getRecurringDescription',*/
/*             type: 'post',*/
/*             data: $('#product-product input[name=\'product_id\'], #product-product input[name=\'quantity\'], #product-product select[name=\'recurring_id\']'),*/
/*             dataType: 'json',*/
/*             beforeSend: function() {*/
/*                 $('#product-product #recurring-description').html('');*/
/*             },*/
/*             success: function(json) {*/
/*                 $('#product-product .alert-dismissible, .text-danger').remove();*/
/* */
/*                 if (json['success']) {*/
/*                     $('#product-product #recurring-description').html(json['success']);*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('#product-product #button-cart').on('click', function() {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/cart/add',*/
/*             type: 'post',*/
/*             data: $('#product-product #product input[type=\'text\'], #product-product #product input[type=\'hidden\'], #product-product #product input[type=\'radio\']:checked, #product-product #product input[type=\'checkbox\']:checked, #product-product #product select, #product-product #product textarea'),*/
/*             dataType: 'json',*/
/*             beforeSend: function() {*/
/*                 $('#product-product #button-cart').button('loading');*/
/*             },*/
/*             complete: function() {*/
/*                 $('#product-product #button-cart').button('reset');*/
/*             },*/
/*             success: function(json) {*/
/*                 $('#product-product .alert-dismissible, .text-danger').remove();*/
/*                 $('#product-product .form-group').removeClass('has-error');*/
/* */
/*                 if (json['error']) {*/
/*                     if (json['error']['option']) {*/
/*                         for (i in json['error']['option']) {*/
/*                             var element = $('#product-product #input-option' + i.replace('_', '-'));*/
/* */
/*                             if (element.parent().hasClass('input-group')) {*/
/*                                 element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*                             } else {*/
/*                                 element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*                             }*/
/*                         }*/
/*                     }*/
/* */
/*                     if (json['error']['recurring']) {*/
/*                         $('#product-product select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*                     }*/
/* */
/*                     // Highlight any found errors*/
/*                     $('#product-product .text-danger').parent().addClass('has-error');*/
/*                 }*/
/* */
/*                 if (json['success']) {*/
/*                     $('body').before('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*                     $('#cart > button').html('<i class="icon-shopping-bag2"></i><span id="cart-total">' + json['total'] + '</span>');*/
/* */
/*                     $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/*                     $('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/*                 }*/
/*             },*/
/*             error: function(xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('.date').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickTime: false*/
/*     });*/
/* */
/*     $('.datetime').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: true,*/
/*         pickTime: true*/
/*     });*/
/* */
/*     $('.time').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: false*/
/*     });*/
/* 	*/
/* 	$('.block-1 .item a').click( function(){*/
/* 		if ( $(this).hasClass('active') ) {*/
/* 			$(this).removeClass('active');*/
/* 		} else {*/
/* 			$('.item a.active').removeClass('active');*/
/* 			$(this).addClass('active');    */
/* 		}*/
/* 	});*/
/* */
/*     $('#product-product button[id^=\'button-upload\']').on('click', function() {*/
/*         var node = this;*/
/* */
/*         $('#product-product #form-upload').remove();*/
/* */
/*         $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*         $('#product-product #form-upload input[name=\'file\']').trigger('click');*/
/* */
/*         if (typeof timer != 'undefined') {*/
/*             clearInterval(timer);*/
/*         }*/
/* */
/*         timer = setInterval(function() {*/
/*             if ($('#product-product #form-upload input[name=\'file\']').val() != '') {*/
/*                 clearInterval(timer);*/
/* */
/*                 $.ajax({*/
/*                     url: 'index.php?route=tool/upload',*/
/*                     type: 'post',*/
/*                     dataType: 'json',*/
/*                     data: new FormData($('#product-product #form-upload')[0]),*/
/*                     cache: false,*/
/*                     contentType: false,*/
/*                     processData: false,*/
/*                     beforeSend: function() {*/
/*                         $(node).button('loading');*/
/*                     },*/
/*                     complete: function() {*/
/*                         $(node).button('reset');*/
/*                     },*/
/*                     success: function(json) {*/
/*                         $('#product-product .text-danger').remove();*/
/* */
/*                         if (json['error']) {*/
/*                             $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*                         }*/
/* */
/*                         if (json['success']) {*/
/*                             alert(json['success']);*/
/* */
/*                             $(node).parent().find('input').val(json['code']);*/
/*                         }*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         }, 500);*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/* 	$('.related-container').owlCarousel({*/
/* 		items: 6,*/
/* 		nav: true,*/
/* 		dots: false,*/
/* 		navSpeed: 1000,*/
/* 		margin: 15,*/
/* 		responsive:{*/
/* 			0:{*/
/* 				items: 1*/
/* 			},*/
/* 			481:{*/
/* 				items: 2*/
/* 			},*/
/* 			769:{*/
/* 				items: 3*/
/* 			},*/
/* 			1024:{*/
/* 				items: 4*/
/* 			},*/
/* 			1200:{*/
/* 				items: 6*/
/* 			},*/
/*         },*/
/* 		navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],*/
/* 	});*/
/*     $('#review').delegate('.pagination a', 'click', function(e) {*/
/*         e.preventDefault();*/
/* */
/*         $('#review').fadeOut('slow');*/
/* */
/*         $('#review').load(this.href);*/
/* */
/*         $('#review').fadeIn('slow');*/
/*     });*/
/* */
/*     $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*     $('#button-review').on('click', function() {*/
/*         $.ajax({*/
/*             url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*             type: 'post',*/
/*             dataType: 'json',*/
/*             data: $("#form-review").serialize(),*/
/*             beforeSend: function() {*/
/*                 $('#button-review').button('loading');*/
/*             },*/
/*             complete: function() {*/
/*                 $('#button-review').button('reset');*/
/*             },*/
/*             success: function(json) {*/
/*                 $('.alert-dismissible').remove();*/
/* */
/*                 if (json['error']) {*/
/*                     $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*                 }*/
/* */
/*                 if (json['success']) {*/
/*                     $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*                     $('input[name=\'name\']').val('');*/
/*                     $('textarea[name=\'text\']').val('');*/
/*                     $('input[name=\'rating\']:checked').prop('checked', false);*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     {% if not use_zoom %}*/
/*     $(document).ready(function() {*/
/*         $('.thumbnails').magnificPopup({*/
/*             type:'image',*/
/*             delegate: 'a',*/
/*             gallery: {*/
/*                 enabled: true*/
/*             }*/
/*         });*/
/*     });*/
/*     {% endif %}*/
/* 	*/
/* 	var minimum = {{ minimum }};*/
/* 	$("#product-product #input-quantity").change(function(){*/
/* 		if ($(this).val() < minimum) {*/
/* 		  alert("Minimum Miktar: "+minimum);*/
/* 		  $("#product-product #input-quantity").val(minimum);*/
/* 		}*/
/* 	});*/
/* 	// increase number of product*/
/* 	function minus(minimum){*/
/* 		var currentval = parseInt($("#product-product #input-quantity").val());*/
/* 		$("#product-product #input-quantity").val(currentval-1);*/
/* 		if($("#product-product #input-quantity").val() <= 0 || $("#product-product #input-quantity").val() < minimum){*/
/* 		  alert("Minimum Tutar: "+minimum);*/
/* 		  $("#product-product #input-quantity").val(minimum);*/
/* 		}*/
/* 	};*/
/* 	// decrease of product*/
/* 	function plus(){*/
/* 		var currentval = parseInt($("#product-product #input-quantity").val());*/
/* 		$("#product-product #input-quantity").val(currentval+1);*/
/* 	};*/
/* 	$('#product-product #minus').click(function(){*/
/* 		minus(minimum);*/
/* 	});*/
/* 	$('#product-product #plus').click(function(){*/
/* 		plus();*/
/* 	});*/
/*     //--></script>*/
/* */
/*             */
/*             <script type="text/javascript" src="{{ module_live_options.module_live_options_js }}"></script>*/
/*             */
/*             */
/* {{ footer }} */
/* */
