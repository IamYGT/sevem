<?php

/* tt_origine4/template/common/language.twig */
class __TwigTemplate_625370f755d20708058cbd2d0e4389cff2375dd646e173dfd2fd1a74675bcc86 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) >= 1)) {
            // line 2
            echo "  <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
    <div class=\"language\">
      <button class=\"btn btn-link btn-language dropdown-toggle\" data-toggle=\"dropdown\">
\t\t  ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "\t\t  ";
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 7
                    echo "\t\t  <img src=\"catalog/language/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\">
\t\t  <label>";
                    // line 8
                    echo (isset($context["text_language"]) ? $context["text_language"] : null);
                    echo "</label>
\t\t  ";
                    // line 9
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "
\t\t  ";
                }
                // line 11
                echo "\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t  <i class=\"icon-chevron-down\"></i>
\t  </button>
      <ul class=\"dropdown-menu\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 16
                echo "\t\t ";
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 17
                    echo "\t\t\t<li><button class=\"btn btn-link btn-block language-select item-selected\" type=\"button\" name=\"";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "\"><img src=\"catalog/language/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" />";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</button></li>
\t\t";
                } else {
                    // line 19
                    echo "\t\t\t<li><button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "\"><img src=\"catalog/language/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" />";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</button></li>
\t\t";
                }
                // line 21
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 25
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  111 => 22,  105 => 21,  89 => 19,  73 => 17,  70 => 16,  66 => 15,  61 => 12,  55 => 11,  50 => 9,  46 => 8,  35 => 7,  32 => 6,  28 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length >= 1 %}*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/*     <div class="language">*/
/*       <button class="btn btn-link btn-language dropdown-toggle" data-toggle="dropdown">*/
/* 		  {% for language in languages %}*/
/* 		  {% if language.code == code %}*/
/* 		  <img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}">*/
/* 		  <label>{{ text_language }}</label>*/
/* 		  {{ language.name }}*/
/* 		  {% endif %}*/
/* 		  {% endfor %}*/
/* 		  <i class="icon-chevron-down"></i>*/
/* 	  </button>*/
/*       <ul class="dropdown-menu">*/
/*         {% for language in languages %}*/
/* 		 {% if language.code == code %}*/
/* 			<li><button class="btn btn-link btn-block language-select item-selected" type="button" name="{{ language.code }}"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}" />{{ language.name }}</button></li>*/
/* 		{% else %}*/
/* 			<li><button class="btn btn-link btn-block language-select" type="button" name="{{ language.code }}"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}" />{{ language.name }}</button></li>*/
/* 		{% endif %}*/
/*       {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*     <input type="hidden" name="code" value="" />*/
/*     <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*   </form>*/
/* {% endif %}*/
/* */
