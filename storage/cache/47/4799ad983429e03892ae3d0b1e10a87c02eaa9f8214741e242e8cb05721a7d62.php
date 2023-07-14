<?php

/* tt_origine4/template/extension/module/newslettersubscribe.twig */
class __TwigTemplate_952f92b6994fc0eae9dd292e0fbe2baac003a981c9dad711a0d89d7e542f50b9 extends Twig_Template
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
        echo "<div class=\"newletter-subscribe-container\">
\t<div class=\"container\">
\t\t<div class=\"newletter-subscribe\">
\t\t\t<div id=\"boxes-normal\" class=\"newletter-container\">
\t\t\t\t<div style=\"\" id=\"dialog-normal\" class=\"window\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"newletter-title\">
\t\t\t\t\t\t\t<h3>";
        // line 8
        echo (isset($context["heading_title3"]) ? $context["heading_title3"] : null);
        echo "</h3>\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"newletter-description\">
\t\t\t\t\t\t\t<p>";
        // line 11
        echo (isset($context["newletter_des"]) ? $context["newletter_des"] : null);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-content newleter-content\">
\t\t\t\t\t\t\t<div id=\"frm_subscribe-normal\">
\t\t\t\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email\" placeholder=\"";
        // line 16
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" name=\"subscribe_name\" id=\"subscribe_name\" />
\t\t\t\t\t\t\t\t\t<a class=\"btn\" onclick=\"email_subscribe()\">";
        // line 18
        echo (isset($context["entry_button"]) ? $context["entry_button"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t\t";
        // line 19
        if ((isset($context["option_unsubscribe"]) ? $context["option_unsubscribe"] : null)) {
            // line 20
            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn\" onclick=\"email_unsubscribe()\">";
            echo (isset($context["entry_unbutton"]) ? $context["entry_unbutton"] : null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 21
        echo "   
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div><!-- /#frm_subscribe -->
\t\t\t\t\t\t\t<div id=\"notification-normal\"></div>
\t\t\t\t\t\t</div><!-- /.box-content -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<script type=\"text/javascript\">
\t\t\tfunction email_subscribe(){
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: 'post',
\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribe',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tdata:\$(\"#subscribe\").serialize(),
\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t} 
\t\t\t\t\t\tcatch (e) {
\t\t\t\t\t\t}\t\t\t\t
\t\t\t\t\t}});
\t\t\t}
\t\t\tfunction email_unsubscribe(){
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: 'post',
\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tdata:\$(\"#subscribe\").serialize(),
\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t
\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t
\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t}
\t\t\t\t\t}}); 
\t\t\t\t\$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
\t\t\t}
\t\t\t</script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\$('#subscribe_email').keypress(function(e) {
\t\t\t\t\t\tif(e.which == 13) {
\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\temail_subscribe();
\t\t\t\t\t\t}
\t\t\t\t\t\tvar name= \$(this).val();
\t\t\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t\t\t});
\t\t\t\t\t\$('#subscribe_email').change(function() {
\t\t\t\t\t var name= \$(this).val();
\t\t\t\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t\t\t});
\t\t\t\t
\t\t\t\t});
\t\t\t</script>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_origine4/template/extension/module/newslettersubscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  53 => 20,  51 => 19,  47 => 18,  42 => 16,  34 => 11,  28 => 8,  19 => 1,);
    }
}
/* <div class="newletter-subscribe-container">*/
/* 	<div class="container">*/
/* 		<div class="newletter-subscribe">*/
/* 			<div id="boxes-normal" class="newletter-container">*/
/* 				<div style="" id="dialog-normal" class="window">*/
/* 					<div class="box">*/
/* 						<div class="newletter-title">*/
/* 							<h3>{{ heading_title3 }}</h3>		*/
/* 						</div>*/
/* 						<div class="newletter-description">*/
/* 							<p>{{ newletter_des }}</p>*/
/* 						</div>*/
/* 						<div class="box-content newleter-content">*/
/* 							<div id="frm_subscribe-normal">*/
/* 								<form name="subscribe" id="subscribe">*/
/* 									<input type="text" value="" name="subscribe_email" id="subscribe_email" placeholder="{{ entry_email }}">*/
/* 									<input type="hidden" value="" name="subscribe_name" id="subscribe_name" />*/
/* 									<a class="btn" onclick="email_subscribe()">{{ entry_button }}</a>*/
/* 									{% if option_unsubscribe %}*/
/* 										<a class="btn" onclick="email_unsubscribe()">{{ entry_unbutton }}</a>*/
/* 									{% endif %}   */
/* 								</form>*/
/* 							</div><!-- /#frm_subscribe -->*/
/* 							<div id="notification-normal"></div>*/
/* 						</div><!-- /.box-content -->*/
/* 					</div>*/
/* 				</div>*/
/* 			<script type="text/javascript">*/
/* 			function email_subscribe(){*/
/* 				$.ajax({*/
/* 					type: 'post',*/
/* 					url: 'index.php?route=extension/module/newslettersubscribe/subscribe',*/
/* 					dataType: 'html',*/
/* 					data:$("#subscribe").serialize(),*/
/* 					success: function (html) {*/
/* 						try {*/
/* 							eval(html);*/
/* 						} */
/* 						catch (e) {*/
/* 						}				*/
/* 					}});*/
/* 			}*/
/* 			function email_unsubscribe(){*/
/* 				$.ajax({*/
/* 					type: 'post',*/
/* 					url: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',*/
/* 					dataType: 'html',*/
/* 					data:$("#subscribe").serialize(),*/
/* 					success: function (html) {*/
/* 						try {*/
/* 						*/
/* 							eval(html);*/
/* 						*/
/* 						} catch (e) {*/
/* 						}*/
/* 					}}); */
/* 				$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); */
/* 			}*/
/* 			</script>*/
/* 			<script type="text/javascript">*/
/* 				$(document).ready(function() {*/
/* 					$('#subscribe_email').keypress(function(e) {*/
/* 						if(e.which == 13) {*/
/* 							e.preventDefault();*/
/* 							email_subscribe();*/
/* 						}*/
/* 						var name= $(this).val();*/
/* 						$('#subscribe_name').val(name);*/
/* 					});*/
/* 					$('#subscribe_email').change(function() {*/
/* 					 var name= $(this).val();*/
/* 							$('#subscribe_name').val(name);*/
/* 					});*/
/* 				*/
/* 				});*/
/* 			</script>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
