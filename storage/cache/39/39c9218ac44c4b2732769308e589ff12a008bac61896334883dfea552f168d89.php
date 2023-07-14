<?php

/* tt_origine4/template/common/footer.twig */
class __TwigTemplate_b558e5cc8d680a91a8b0e7a86dc2b176ceecf8fd51b9909887f0269cc68cb78b extends Twig_Template
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
        echo "<footer>
\t";
        // line 2
        if ((isset($context["block3"]) ? $context["block3"] : null)) {
            // line 3
            echo "\t\t";
            echo (isset($context["block3"]) ? $context["block3"] : null);
            echo "
\t";
        }
        // line 5
        echo "\t<div class=\"footer-static\">
\t\t<div class=\"container\">
\t\t\t<div class=\"container-inner\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-3\">
\t\t\t\t\t\t<div class=\"col col1\">
\t\t\t\t\t\t\t<div class=\"footer-title\"><h2>";
        // line 11
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</h2></div>
\t\t\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t\t\t<p class=\"phone\">";
        // line 13
        echo (isset($context["text_phone"]) ? $context["text_phone"] : null);
        echo "<span>";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span></p>
\t\t\t\t\t\t\t\t<p class=\"address\">";
        // line 14
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "</p>
\t\t\t\t\t\t\t\t<p class=\"email\">";
        // line 15
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</p>
\t\t\t\t\t\t\t\t";
        // line 16
        if ((isset($context["block4"]) ? $context["block4"] : null)) {
            // line 17
            echo "\t\t\t\t\t\t\t\t\t";
            echo (isset($context["block4"]) ? $context["block4"] : null);
            echo "
\t\t\t\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-2\">
\t\t\t\t\t\t<div class=\"col col2\">
\t\t\t\t\t\t\t<div class=\"footer-title\"><h2>";
        // line 24
        echo (isset($context["text_information"]) ? $context["text_information"] : null);
        echo "</h2></div>
\t\t\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 28
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["information"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["information"], "title", array());
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-2\">
\t\t\t\t\t\t<div class=\"col col3\">
\t\t\t\t\t\t\t<div class=\"footer-title\"><h2>";
        // line 37
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h2></div>
\t\t\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 40
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 41
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 42
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 43
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 44
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-2\">
\t\t\t\t\t\t<div class=\"col col4\">
\t\t\t\t\t\t\t<div class=\"footer-title\"><h2>";
        // line 51
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h2></div>
\t\t\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 54
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 55
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 56
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 57
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 58
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-12 col-md-3 col-xs-12\">
\t\t\t\t\t\t<div class=\"col col5\">
\t\t\t\t\t\t\t<div class=\"footer-title\">
\t\t\t\t\t\t\t\t<h2>";
        // line 66
        echo (isset($context["text_get_app"]) ? $context["text_get_app"] : null);
        echo "</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t\t\t<p class=\"description-app\">";
        // line 69
        echo (isset($context["text_description_app"]) ? $context["text_description_app"] : null);
        echo "</p>
\t\t\t\t\t\t\t\t";
        // line 70
        if ((isset($context["block5"]) ? $context["block5"] : null)) {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t";
            echo (isset($context["block5"]) ? $context["block5"] : null);
            echo "
\t\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 79
        if ((isset($context["block6"]) ? $context["block6"] : null)) {
            // line 80
            echo "\t\t\t";
            echo (isset($context["block6"]) ? $context["block6"] : null);
            echo "
\t\t";
        }
        // line 82
        echo "\t</div>
\t<div class=\"footer-bottom\">
\t\t<div class=\"container\">\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5 col-sm-12 col-sms-12\">
\t\t\t\t\t<div id=\"back-top\">";
        // line 87
        echo (isset($context["text_backtop"]) ? $context["text_backtop"] : null);
        echo "</div>
\t\t\t\t\t<p class=\"copyright-text\">";
        // line 88
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7 col-sm-12 col-sms-12\">
\t\t\t\t\t";
        // line 91
        if ((isset($context["block7"]) ? $context["block7"] : null)) {
            // line 92
            echo "\t\t\t\t\t\t";
            echo (isset($context["block7"]) ? $context["block7"] : null);
            echo "
\t\t\t\t\t";
        }
        // line 94
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<script type=\"text/javascript\">
\$(document).ready(function(){
\t// hide #back-top first
\t\$(\"#back-top\").hide();
\t// fade in #back-top
\t\$(function () {
\t\t\$(window).scroll(function () {
\t\t\tif (\$(this).scrollTop() > 300) {
\t\t\t\t\$('#back-top').fadeIn();
\t\t\t} else {
\t\t\t\t\$('#back-top').fadeOut();
\t\t\t}
\t\t});
\t\t// scroll body to 0px on click
\t\t\$('#back-top').click(function () {
\t\t\t\$('body,html').animate({scrollTop: 0}, 800);
\t\t\treturn false;
\t\t});
\t});
\tif (jQuery(window).width() < 992) {   
\t\tjQuery('.footer-static .footer-title').click(function(){     
\t\t\tjQuery(this).parent('.col').toggleClass('active').siblings().removeClass('active'); 
\t\t\tjQuery(this).next('.col .footer-content').toggle(300);
\t\t\tjQuery(this).parent('.col.active').siblings().children('.col .footer-content').slideUp(300); 
\t\t}); 
\t\t 
\t}
});
</script>
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div><!-- wrapper -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 94,  244 => 92,  242 => 91,  236 => 88,  232 => 87,  225 => 82,  219 => 80,  217 => 79,  209 => 73,  203 => 71,  201 => 70,  197 => 69,  191 => 66,  178 => 58,  172 => 57,  166 => 56,  160 => 55,  154 => 54,  148 => 51,  136 => 44,  130 => 43,  124 => 42,  118 => 41,  112 => 40,  106 => 37,  93 => 30,  82 => 28,  78 => 27,  72 => 24,  65 => 19,  59 => 17,  57 => 16,  53 => 15,  49 => 14,  43 => 13,  38 => 11,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <footer>*/
/* 	{% if block3 %}*/
/* 		{{ block3 }}*/
/* 	{% endif %}*/
/* 	<div class="footer-static">*/
/* 		<div class="container">*/
/* 			<div class="container-inner">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-12 col-sm-12 col-md-3">*/
/* 						<div class="col col1">*/
/* 							<div class="footer-title"><h2>{{ text_contact }}</h2></div>*/
/* 							<div class="footer-content">*/
/* 								<p class="phone">{{ text_phone }}<span>{{ telephone }}</span></p>*/
/* 								<p class="address">{{ address }}</p>*/
/* 								<p class="email">{{ email }}</p>*/
/* 								{% if block4 %}*/
/* 									{{ block4 }}*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-12 col-sm-12 col-md-2">*/
/* 						<div class="col col2">*/
/* 							<div class="footer-title"><h2>{{ text_information }}</h2></div>*/
/* 							<div class="footer-content">*/
/* 								<ul class="list-unstyled">*/
/* 									{% for information in informations %}*/
/* 										<li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/* 									{% endfor %}*/
/* 									<li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-12 col-sm-12 col-md-2">*/
/* 						<div class="col col3">*/
/* 							<div class="footer-title"><h2>{{ text_service }}</h2></div>*/
/* 							<div class="footer-content">*/
/* 								<ul class="list-unstyled">*/
/* 									<li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/* 									<li><a href="{{ return }}">{{ text_return }}</a></li>*/
/* 									<li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/* 									<li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/* 									<li><a href="{{ special }}">{{ text_special }}</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-12 col-sm-12 col-md-2">*/
/* 						<div class="col col4">*/
/* 							<div class="footer-title"><h2>{{ text_extra }}</h2></div>*/
/* 							<div class="footer-content">*/
/* 								<ul class="list-unstyled">*/
/* 									<li><a href="{{ contact }}">{{ text_voucher }}</a></li>*/
/* 									<li><a href="{{ return }}">{{ text_affiliate }}</a></li>*/
/* 									<li><a href="{{ sitemap }}">{{ text_account }}</a></li>*/
/* 									<li><a href="{{ manufacturer }}">{{ text_order }}</a></li>*/
/* 									<li><a href="{{ special }}">{{ text_wishlist }}</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-12 col-md-3 col-xs-12">*/
/* 						<div class="col col5">*/
/* 							<div class="footer-title">*/
/* 								<h2>{{ text_get_app }}</h2>*/
/* 							</div>*/
/* 							<div class="footer-content">*/
/* 								<p class="description-app">{{ text_description_app }}</p>*/
/* 								{% if block5 %}*/
/* 									{{ block5 }}*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		{% if block6 %}*/
/* 			{{ block6 }}*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	<div class="footer-bottom">*/
/* 		<div class="container">	*/
/* 			<div class="row">*/
/* 				<div class="col-md-5 col-sm-12 col-sms-12">*/
/* 					<div id="back-top">{{ text_backtop }}</div>*/
/* 					<p class="copyright-text">{{ powered }}</p>*/
/* 				</div>*/
/* 				<div class="col-md-7 col-sm-12 col-sms-12">*/
/* 					{% if block7 %}*/
/* 						{{ block7 }}*/
/* 					{% endif %}*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </footer>*/
/* <script type="text/javascript">*/
/* $(document).ready(function(){*/
/* 	// hide #back-top first*/
/* 	$("#back-top").hide();*/
/* 	// fade in #back-top*/
/* 	$(function () {*/
/* 		$(window).scroll(function () {*/
/* 			if ($(this).scrollTop() > 300) {*/
/* 				$('#back-top').fadeIn();*/
/* 			} else {*/
/* 				$('#back-top').fadeOut();*/
/* 			}*/
/* 		});*/
/* 		// scroll body to 0px on click*/
/* 		$('#back-top').click(function () {*/
/* 			$('body,html').animate({scrollTop: 0}, 800);*/
/* 			return false;*/
/* 		});*/
/* 	});*/
/* 	if (jQuery(window).width() < 992) {   */
/* 		jQuery('.footer-static .footer-title').click(function(){     */
/* 			jQuery(this).parent('.col').toggleClass('active').siblings().removeClass('active'); */
/* 			jQuery(this).next('.col .footer-content').toggle(300);*/
/* 			jQuery(this).parent('.col.active').siblings().children('.col .footer-content').slideUp(300); */
/* 		}); */
/* 		 */
/* 	}*/
/* });*/
/* </script>*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* </div><!-- wrapper -->*/
/* </body></html>*/
