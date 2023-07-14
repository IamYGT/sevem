<?php

/* extension/extension/seoimages.twig */
class __TwigTemplate_c1bdd218cf3b5ab430b113d2aeffb06efa4ec783cf5975f397ef2bb5e445c31c extends Twig_Template
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
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
";
        // line 2
        ob_start();
        // line 3
        echo "<div id=\"content\">
<link type=\"text/css\" href=\"view/stylesheet/stylesheet2.css\" rel=\"stylesheet\" media=\"screen\" />
  <div class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "    ";
            echo $this->getAttribute($context["breadcrumb"], "separator", array());
            echo " <a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo " </a>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </div>
  ";
        // line 10
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 11
            echo "  <div class=\"warning\">";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " </div>
  ";
        }
        // line 13
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 14
            echo "  <div class=\"success\">";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " </div>
  ";
        }
        // line 16
        echo "  <div class=\"box\">
    <div class=\"heading\">
      <h1><img src=\"view/image/review.png\" alt=\"\" /> ";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>
\t<div class=\"buttons\"><a onclick=\"\$('#form').submit();\" class=\"button\">Kaydet</a></div>
\t</div>
    <div class=\"content\">
\t<form action=\"";
        // line 22
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t\t   <table class=\"list\">
            <thead>
              <tr>
                <td class=\"left\" width=\"200\">Özellik</td>
\t\t\t\t<td class=\"left\">Durum</td>
\t\t\t\t<td class=\"left\" width=\"50\">Parametreler</td>
\t\t\t\t<td class=\"right\" width=\"100\">İşlem</td>
              </tr>
            </thead>

            <tbody>
            <tr>
\t\t\t\t<td class=\"left\"><b>Ürün Alt Etiketi Oluşturucu</b></td>
\t\t\t\t\t<td class=\"left\"><span class=\"help\">
\t\t\t\t\tParametreleri kullanarak otomatik \"Ürün Alt Etiketi\" oluşturabilirsiniz.<br>
\t\t\t\t\t<b>Parametreler</b><br>
\t\t\t\t\türün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>
\t\t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.
\t\t\t\t\t</span></td>
\t\t\t\t\t<td class=\"left\"><input type=\"text\" name=\"seopack_parameters[calts]\" value=\"";
        // line 42
        echo (($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "calts", array())) ? ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "calts", array())) : (""));
        echo "\" size=\"10\"/></td>
\t\t\t\t\t<td class=\"right\">

\t\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/custom_alt_generator.php?gkey=";
        // line 45
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>

\t\t\t\t\t</td>
\t\t\t\t</tr>
            </tbody>

            <tbody>
\t\t\t\t<tr>
\t\t\t\t<td class=\"left\"><b>Resim Title Etiketi Oluşturucu</b></td>
\t\t\t\t\t<td class=\"left\"><span class=\"help\">
\t\t\t\t\tParametreleri kullanarak otomatik \"Resim Title Etiketi\" oluşturabilirsiniz.<br>
\t\t\t\t\t<b>Parametreler</b><br>
\t\t\t\t\türün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b) fiyat(%\$)<br>
\t\t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.
\t\t\t\t\t</span></td>
\t\t\t\t\t<td class=\"left\"><input type=\"text\" name=\"seopack_parameters[cimgtitles]\" value=\"";
        // line 60
        echo (($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "cimgtitles", array())) ? ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "cimgtitles", array())) : (""));
        echo "\" size=\"10\"/></td>
\t\t\t\t\t<td class=\"right\">

\t\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/custom_imgtitle_generator.php?gkey=";
        // line 63
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>

\t\t\t\t\t</td>
\t\t\t\t</tr>
            </tbody>

\t\t\t<tbody>
              <tr>
                <td class=\"left\"><b>Resimler İçin Seo İsim Oluşturucu</b></td>
                <td class=\"left\"><span class=\"help\">Parametreleri kullanarak otomatik \" Seo Uyumlu Resim İsmi\" oluşturabilirsiniz.<br>
\t\t\t\t<b>Parametreler</b><br>
\t\t\t\türün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>
\t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.
 \t\t\t\t</span>
\t\t\t\t<br>
\t\t\t\t\t<span style=\"color:red\">Bu işlemden önce image klasörünü yedeklemeniz tavsiye edilir.</span><br>
\t\t\t\t\t<span style=\"color:red\">Eski cache resimleri geldiği için işlemin görüntülenmemesi sorunu yaşanabilir. ftp den public_html/image/cache dizininden Cache klasörünü manuel olarak silebilirsiniz</span><br></td>
                <td class=\"left\"><input type=\"text\" name=\"seoimages_parameters[keywords]\" value=\"";
        // line 80
        echo $this->getAttribute((isset($context["seoimages_parameters"]) ? $context["seoimages_parameters"] : null), "keywords", array());
        echo "\" size=\"10\"/></td>
                <td class=\"right\">
\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/rename_files.php?gkey=";
        // line 82
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>
\t\t\t\t</td>
              </tr>
            </tbody>
          </table>
\t</form>
\t</div>
   </div>
</div>
<script type=\"text/javascript\">
\t\t\t\tfunction clearseo(data, link){
         if (!confirm('Bunların tümü silinecek; ' + data + '?\\n\\n Veritabanı yedeği almanız önerilir! \\n\\n' + data + ' verilerini silmek üzeresiniz!!!'))
\t\t\t\t\t\t{
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\telse
\t\t\t\t\t\t{
\t\t\t\t\t\t\tlocation = link;
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t</script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 106
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/extension/seoimages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 106,  158 => 82,  153 => 80,  133 => 63,  127 => 60,  109 => 45,  103 => 42,  80 => 22,  73 => 18,  69 => 16,  63 => 14,  60 => 13,  54 => 11,  52 => 10,  49 => 9,  36 => 7,  32 => 6,  27 => 3,  25 => 2,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }}*/
/* {% spaceless %}*/
/* <div id="content">*/
/* <link type="text/css" href="view/stylesheet/stylesheet2.css" rel="stylesheet" media="screen" />*/
/*   <div class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     {{ breadcrumb.separator }} <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }} </a>*/
/*      {% endfor %}*/
/*   </div>*/
/*   {% if error_warning %}*/
/*   <div class="warning">{{ error_warning }} </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="success">{{ success }} </div>*/
/*   {% endif %}*/
/*   <div class="box">*/
/*     <div class="heading">*/
/*       <h1><img src="view/image/review.png" alt="" /> {{ heading_title }} </h1>*/
/* 	<div class="buttons"><a onclick="$('#form').submit();" class="button">Kaydet</a></div>*/
/* 	</div>*/
/*     <div class="content">*/
/* 	<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form">*/
/* 		   <table class="list">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="left" width="200">Özellik</td>*/
/* 				<td class="left">Durum</td>*/
/* 				<td class="left" width="50">Parametreler</td>*/
/* 				<td class="right" width="100">İşlem</td>*/
/*               </tr>*/
/*             </thead>*/
/* */
/*             <tbody>*/
/*             <tr>*/
/* 				<td class="left"><b>Ürün Alt Etiketi Oluşturucu</b></td>*/
/* 					<td class="left"><span class="help">*/
/* 					Parametreleri kullanarak otomatik "Ürün Alt Etiketi" oluşturabilirsiniz.<br>*/
/* 					<b>Parametreler</b><br>*/
/* 					ürün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>*/
/* 					Değişiklikleri kaydettikten sonra oluştur deyin.*/
/* 					</span></td>*/
/* 					<td class="left"><input type="text" name="seopack_parameters[calts]" value="{{ seopack_parameters.calts ? seopack_parameters.calts}}" size="10"/></td>*/
/* 					<td class="right">*/
/* */
/* 						<a onclick="location = 'controller/extension/extension/custom_alt_generator.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* */
/* 					</td>*/
/* 				</tr>*/
/*             </tbody>*/
/* */
/*             <tbody>*/
/* 				<tr>*/
/* 				<td class="left"><b>Resim Title Etiketi Oluşturucu</b></td>*/
/* 					<td class="left"><span class="help">*/
/* 					Parametreleri kullanarak otomatik "Resim Title Etiketi" oluşturabilirsiniz.<br>*/
/* 					<b>Parametreler</b><br>*/
/* 					ürün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b) fiyat(%$)<br>*/
/* 					Değişiklikleri kaydettikten sonra oluştur deyin.*/
/* 					</span></td>*/
/* 					<td class="left"><input type="text" name="seopack_parameters[cimgtitles]" value="{{ seopack_parameters.cimgtitles ? seopack_parameters.cimgtitles}}" size="10"/></td>*/
/* 					<td class="right">*/
/* */
/* 						<a onclick="location = 'controller/extension/extension/custom_imgtitle_generator.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* */
/* 					</td>*/
/* 				</tr>*/
/*             </tbody>*/
/* */
/* 			<tbody>*/
/*               <tr>*/
/*                 <td class="left"><b>Resimler İçin Seo İsim Oluşturucu</b></td>*/
/*                 <td class="left"><span class="help">Parametreleri kullanarak otomatik " Seo Uyumlu Resim İsmi" oluşturabilirsiniz.<br>*/
/* 				<b>Parametreler</b><br>*/
/* 				ürün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>*/
/* 				Değişiklikleri kaydettikten sonra oluştur deyin.*/
/*  				</span>*/
/* 				<br>*/
/* 					<span style="color:red">Bu işlemden önce image klasörünü yedeklemeniz tavsiye edilir.</span><br>*/
/* 					<span style="color:red">Eski cache resimleri geldiği için işlemin görüntülenmemesi sorunu yaşanabilir. ftp den public_html/image/cache dizininden Cache klasörünü manuel olarak silebilirsiniz</span><br></td>*/
/*                 <td class="left"><input type="text" name="seoimages_parameters[keywords]" value="{{ seoimages_parameters.keywords }}" size="10"/></td>*/
/*                 <td class="right">*/
/* 					<a onclick="location = 'controller/extension/extension/rename_files.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/* 	</form>*/
/* 	</div>*/
/*    </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* 				function clearseo(data, link){*/
/*          if (!confirm('Bunların tümü silinecek; ' + data + '?\n\n Veritabanı yedeği almanız önerilir! \n\n' + data + ' verilerini silmek üzeresiniz!!!'))*/
/* 						{*/
/* 							return false;*/
/* 						}*/
/* 						else*/
/* 						{*/
/* 							location = link;*/
/* 						}*/
/* */
/* 					}*/
/* 				</script>*/
/* */
/* {% endspaceless %}*/
/* {{ footer}}*/
/* */
