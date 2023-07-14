<?php

/* extension/extension/seopack.twig */
class __TwigTemplate_6a973961f02ac2c227e05a4301bf0d7f6389f417212da57b5b43ebdb94cfcb5f extends Twig_Template
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

<div id=\"content\">
 \t<link type=\"text/css\" href=\"view/stylesheet/stylesheet2.css\" rel=\"stylesheet\" media=\"screen\" />
\t  <div class=\"breadcrumb\">
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
        echo "\t<div class=\"box\">
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
\t\t\t<input type=\"hidden\" name=\"seopack_parameters[gkey]\" value=\"";
        // line 23
        echo (($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array())) ? ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array())) : ((isset($context["gkey"]) ? $context["gkey"] : null)));
        echo "\">
\t\t   <table class=\"list\">
            <thead>
              <tr>
                <td class=\"left\" width=\"200\">Özellik</td>
\t\t\t\t<td class=\"left\">Durum</td>
\t\t\t\t<td class=\"left\" width=\"50\">Parametreler</td>
\t\t\t\t<td class=\"right\" width=\"100\">İşlem</td>
              </tr>
            </thead>

\t\t\t<tbody>
              <tr>
                <td class=\"left\"><b>Anahtar Kelime Oluşturucu</b></td>
                <td class=\"left\"><span class=\"help\">Parametreleri kullanarak otomatik \"Anahtar Kelime\" oluşturabilirsiniz.<br>
\t\t\t\t<b>Parametreler</b><br>
\t\t\t\türün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>
 \t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.</span></td>
                <td class=\"left\"><input type=\"text\" name=\"seopack_parameters[keywords]\" value=\"";
        // line 41
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "keywords", array());
        echo "\" size=\"10\"/></td>
                <td class=\"right\">

\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/keywords_generator.php?gkey=";
        // line 44
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>

\t\t\t\t</td>
              </tr>
            </tbody>

\t\t\t<tbody>
              <tr>
                <td class=\"left\"><b>Meta Açıklama Oluşturucu</b></td>
                <td class=\"left\"><span class=\"help\">
\t\t\t\tParametreleri kullanarak otomatik \"Meta Açıklama\" oluşturabilirsiniz.<br>
\t\t\t\t<b>Parametreler</b><br>
\t\t\t\türün adı(%p) ilk açıklama cümlesi(%f) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>
 \t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.
\t\t\t\t</span></td>
                <td class=\"left\"><input type=\"text\" name=\"seopack_parameters[metas]\" value=\"";
        // line 59
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "metas", array());
        echo "\" size=\"10\"/></td>
                <td class=\"right\">
\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/meta_description_generator.php?gkey=";
        // line 61
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>
\t\t\t\t</td>
              </tr>
            </tbody>

            <tbody>
              <tr>
\t\t\t\t<td class=\"left\"><b>Ürün Alt Etiketi Oluşturucu</b></td>
                <td class=\"left\"><span class=\"help\">
                Parametreleri kullanarak otomatik \"Ürün Alt Etiketi\" oluşturabilirsiniz.<br>
\t\t\t\t<b>Parametreler</b><br>
\t\t\t\türün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>
 \t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.
\t\t\t\t</span></td>
                <td class=\"left\"><input type=\"text\" name=\"seopack_parameters[calts]\" value=\"";
        // line 75
        echo (($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "calts", array())) ? ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "calts", array())) : (""));
        echo "\" size=\"10\"/></td>
                <td class=\"right\">
\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/custom_alt_generator.php?gkey=";
        // line 77
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>
\t\t\t\t</td>
              </tr>
            </tbody>

            <tbody>
            <tr>
            <td class=\"left\"><b>H1 Etiketi Oluşturucu</b></td>
                <td class=\"left\"><span class=\"help\">
                Parametreleri kullanarak otomatik \"H1 Etiketi\" oluşturabilirsiniz.<br>
\t\t\t\t<b>Parametreler</b><br>
\t\t\t\türün adı(%p) kategori(%c) ürün kodu(%m) sku(%s) upc(%u) marka(%b) fiyat(%\$)<br>
 \t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.
\t\t\t\t</span></td>
                <td class=\"left\"><input type=\"text\" name=\"seopack_parameters[ch1s]\" value=\"";
        // line 91
        echo (($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "ch1s", array())) ? ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "ch1s", array())) : (""));
        echo "\" size=\"10\"/></td>
                <td class=\"right\">
\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/custom_h1_generator.php?gkey=";
        // line 93
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>
\t\t\t\t</td>
              </tr>
            </tbody>

\t\t\t<tbody>
            <tr>
\t\t\t<td class=\"left\"><b>H2 Etiketi Oluşturucu</b></td>
                <td class=\"left\"><span class=\"help\">
\t\t\t\tParametreleri kullanarak otomatik \"H2 Etiketi\" oluşturabilirsiniz.<br>
\t\t\t\t<b>Parametreler</b><br>
\t\t\t\türün adı(%p) kategori(%c) ürün kodu(%m) sku(%s) upc(%u) marka(%b) fiyat(%\$)<br>
 \t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.
\t\t\t\t</span></td>
                <td class=\"left\"><input type=\"text\" name=\"seopack_parameters[ch2s]\" value=\"";
        // line 107
        echo (($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "ch2s", array())) ? ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "ch2s", array())) : (""));
        echo "\" size=\"10\"/></td>
                <td class=\"right\">
\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/custom_h2_generator.php?gkey=";
        // line 109
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>
\t\t\t\t</td>
              </tr>
            </tbody>

\t\t\t<tbody>
              <tr>
                <td class=\"left\"><b>Ürün Etiket Oluşturucu</b></td>
                <td class=\"left\"><span class=\"help\">
\t\t\t\tParametreleri kullanarak otomatik \"Ürün Etiketi\" oluşturabilirsiniz.<br>
\t\t\t\t<b>Parametreler</b><br>
\t\t\t\türün adı(%p) ilk açıklama cümlesi(%f) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>
 \t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.
\t\t\t\t</span></td>
                <td class=\"left\"><input type=\"text\" name=\"seopack_parameters[tags]\" value=\"";
        // line 123
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "tags", array());
        echo "\" size=\"10\"/></td>
                <td class=\"right\">
\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/tag_generator.php?gkey=";
        // line 125
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>
\t\t\t\t</td>
              </tr>
            </tbody>

            <tbody>
\t\t\t\t<tr>
\t\t\t\t<td class=\"left\"><b>Ürün Başlık Etiketi Oluşturucu</b></td>
\t\t\t\t\t<td class=\"left\"><span class=\"help\">Parametreleri kullanarak otomatik \"Ürün Başlık Etiketi\" oluşturabilirsiniz.<br>
\t\t\t\t\t<b>Parametreler</b><br>
\t\t\t\t\türün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b) fiyat(%\$)<br>
\t\t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.
\t\t\t\t\t</span></td>
\t\t\t\t\t<td class=\"left\"><input type=\"text\" name=\"seopack_parameters[ctitles]\" value=\"";
        // line 138
        echo (($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "ctitles", array())) ? ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "ctitles", array())) : (""));
        echo "\" size=\"10\"/></td>
\t\t\t\t\t<td class=\"right\">

\t\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/custom_title_generator.php?gkey=";
        // line 141
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
            </tbody>

            <tbody>
\t\t\t\t<tr>
\t\t\t\t<td class=\"left\"><b>Resim Title Etiketi Oluşturucu</b></td>
\t\t\t\t\t<td class=\"left\"><span class=\"help\">
\t\t\t\t\tParametreleri kullanarak otomatik \"Ürün Etiketi\" oluşturabilirsiniz.<br>
\t\t\t\t\t<b>Parametreler</b><br>
\t\t\t\t\türün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b) fiyat(%\$)<br>
\t\t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.
\t\t\t\t\t</span></td>
\t\t\t\t\t<td class=\"left\"><input type=\"text\" name=\"seopack_parameters[cimgtitles]\" value=\"";
        // line 155
        echo (($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "cimgtitles", array())) ? ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "cimgtitles", array())) : (""));
        echo "\" size=\"10\"/></td>
\t\t\t\t\t<td class=\"right\">
\t\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/custom_imgtitle_generator.php?gkey=";
        // line 157
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>
\t\t\t\t\t</td>
\t\t\t\t  </tr>
            </tbody>

\t\t\t<tbody>
              <tr>
                <td class=\"left\"><b>İlgili Ürünler Oluşturucu</b></td>
                <td class=\"left\"><span class=\"help\">
                Bu araç bir algoritma kullanarak ürünün benzerlerini otomatik eşleştirir.<br>
\t\t\t\t<b>Not<br></b>
\t\t\t\tKaç adet benzer ürün eşleştirileceğini belirleyin. 3-5 arası bir rakam tavsiye edilir.<br>
\t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.
\t\t\t\t</span></td>
\t\t\t\t<td class=\"left\"><input type=\"text\" name=\"seopack_parameters[related]\" value=\"";
        // line 171
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "related", array());
        echo "\" size=\"10\"/></td>
                <td class=\"right\">
\t\t\t\t\t<a onclick=\"location = 'controller/extension/extension/rp_generator.php?gkey=";
        // line 173
        echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "gkey", array());
        echo "'\" class=\"button\">Oluştur</a>
\t\t\t\t</td>
              </tr>
            </tbody>

\t\t\t<tbody>
              <tr>
                <td class=\"left\"><b>SEO Url Oluşturucu</b></td>
                <td class=\"left\"><span class=\"help\"> İsim parametresini kullanarak ürün, kategori ve markalar için otomatik link oluşturabilirsiniz.<br>
\t\t\t\t<b>Not</b><br>
\t\t\t\t.html tavsiye edilir<br>
\t\t\t\tDeğişiklikleri kaydettikten sonra oluştur deyin.</span></td>
\t\t\t\t<td class=\"left\"><input type=\"text\" name=\"seopack_parameters[ext]\" value=\"";
        // line 185
        if ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "ext", array())) {
            echo $this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "ext", array());
        }
        echo "\" size=\"10\"/></td>
                <td class=\"right\">
\t\t\t\t\t<a onclick=\"location = '";
        // line 187
        echo (isset($context["seourls"]) ? $context["seourls"] : null);
        echo "'\" class=\"button\">Oluştur</a>
\t\t\t\t</td>
              </tr>
            </tbody>

\t\t\t<tbody>
              <tr>
                <td class=\"left\"><b>SEO Dostu URL Oluşturucu</b></td>
                <td class=\"left\"><span class=\"help\"> Default sayfalar için de seo dostu URL ler oluşturabilirsiniz:
\t\t\t\topencartuzman.com/index.php?route=account/login
\t\t\t\tdefault olan bu link aşağıdaki şekilde değiştirilir:
\t\t\t\topencartuzman.com/giris<br></span></td>
                <td class=\"right\" colspan=\"2\">
\t\t\t\t\t<a onclick=\"location = '";
        // line 200
        echo (isset($context["friendlyurls"]) ? $context["friendlyurls"] : null);
        echo "'\" class=\"button\">Oluştur</a>
\t\t\t\t</td>
              </tr>
            </tbody>

            <tbody>
              <tr>
                <td class=\"left\"><b>SEO ları Temizle</b></td>
                <td class=\"left\">
\t\t\t\t\t<span class=\"help\"> Yeni parametreler oluşturduysanız eski seoları silmeniz gerekir:
\t\t\t\t\t<br>
\t\t\t\t\t<span style=\"color:red\">Veritabanı yedeği almanız tavsiye edilir.</span><br>
\t\t\t\t\t</span></td>
                <td class=\"right\" colspan=\"2\">
\t\t\t\t\t<p><a onclick=\"clearseo('Products Keywords', '";
        // line 214
        echo (isset($context["clearkeywords"]) ? $context["clearkeywords"] : null);
        echo "');\" class=\"button\" style=\"background:red\">Anahtar Kelimeleri Sil</a></p>
\t\t\t\t\t<p><a onclick=\"clearseo('Products Meta Descriptions', '";
        // line 215
        echo (isset($context["clearmetas"]) ? $context["clearmetas"] : null);
        echo "');\" class=\"button\" style=\"background:red\">Meta Açıklamaları Sil</a></p>
\t\t\t\t\t<p><a onclick=\"clearseo('Product Custom Alt Tags', '";
        // line 216
        echo (isset($context["clearalts"]) ? $context["clearalts"] : null);
        echo "');\" class=\"button\" style=\"background:red\">Ürün Alt Etiketlerini Sil</a></p>
\t\t\t\t\t<p><a onclick=\"clearseo('Product Custom H1s', '";
        // line 217
        echo (isset($context["clearh1s"]) ? $context["clearh1s"] : null);
        echo "');\" class=\"button\" style=\"background:red\">H1 Etiketlerini Sil</a></p>
\t\t\t\t\t<p><a onclick=\"clearseo('Product Custom H2s', '";
        // line 218
        echo (isset($context["clearh2s"]) ? $context["clearh2s"] : null);
        echo "');\" class=\"button\" style=\"background:red\">H2 Etiketlerini Sil</a></p>
\t\t\t\t\t<p><a onclick=\"clearseo('Products Tags', '";
        // line 219
        echo (isset($context["cleartags"]) ? $context["cleartags"] : null);
        echo "');\" class=\"button\" style=\"background:red\">Ürün Etiketlerini Sil</a></p>
\t\t\t\t\t<p><a onclick=\"clearseo('Product Custom Titles', '";
        // line 220
        echo (isset($context["cleartitles"]) ? $context["cleartitles"] : null);
        echo "');\" class=\"button\" style=\"background:red\">Ürün Başlık Etiketlerini Sil</a></p>
\t\t\t\t\t<p><a onclick=\"clearseo('SEO Urls', '";
        // line 221
        echo (isset($context["clearurls"]) ? $context["clearurls"] : null);
        echo "');\" class=\"button\" style=\"background:red\">SEO Url lerini Sil</a></p>
\t\t\t\t\t<p><a onclick=\"clearseo('Related Products', '";
        // line 222
        echo (isset($context["clearproducts"]) ? $context["clearproducts"] : null);
        echo "');\" class=\"button\" style=\"background:red\">İlgili Ürünleri Sil</a>
\t\t\t\t</td>
              </tr>
            </tbody>

            <tbody>
              <tr>
                <td class=\"left\" colspan=\"2\">
                SEO URL verilmemişse otomatik oluştur (ürün, kategori, marka ve bilgi sayfaları)
\t\t\t\t</td>
\t\t\t\t<td class=\"right\" colspan=\"2\">
\t\t\t\t";
        // line 233
        if ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "autourls", array())) {
            // line 234
            echo "                <input type=\"radio\" name=\"seopack_parameters[autourls]\" value=\"1\" checked=\"checked\" /> Evet
                <input type=\"radio\" name=\"seopack_parameters[autourls]\" value=\"0\" /> Hayır
                ";
        } else {
            // line 237
            echo "                <input type=\"radio\" name=\"seopack_parameters[autourls]\" value=\"1\" /> Evet
                <input type=\"radio\" name=\"seopack_parameters[autourls]\" value=\"0\" checked=\"checked\" /> Hayır
                ";
        }
        // line 240
        echo "\t\t\t\t</td>
\t\t\t  </tr>
\t\t\t  <tr>
                <td  class=\"left\" colspan=\"2\">
                Üründe SEO Anahtar Kelime verilemişse otomatik oluştur
\t\t\t\t</td>
\t\t\t\t<td class=\"right\" colspan=\"2\">
\t\t\t\t";
        // line 247
        if ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "autokeywords", array())) {
            // line 248
            echo "                <input type=\"radio\" name=\"seopack_parameters[autokeywords]\" value=\"1\" checked=\"checked\" /> Evet
                <input type=\"radio\" name=\"seopack_parameters[autokeywords]\" value=\"0\" /> Hayır
               ";
        } else {
            // line 251
            echo "                <input type=\"radio\" name=\"seopack_parameters[autokeywords]\" value=\"1\" /> Evet
                <input type=\"radio\" name=\"seopack_parameters[autokeywords]\" value=\"0\" checked=\"checked\" /> Hayır
               ";
        }
        // line 254
        echo "\t\t\t\t</td>
\t\t\t  </tr>
\t\t\t  <tr>
                <td class=\"left\" colspan=\"2\">
                Üründe Meta Açıklama verilemişse otomatik oluştur
\t\t\t\t</td>
\t\t\t\t<td class=\"right\" colspan=\"2\">
\t\t\t\t";
        // line 261
        if ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "autometa", array())) {
            // line 262
            echo "                <input type=\"radio\" name=\"seopack_parameters[autometa]\" value=\"1\" checked=\"checked\" /> Evet
                <input type=\"radio\" name=\"seopack_parameters[autometa]\" value=\"0\" /> Hayır
                ";
        } else {
            // line 265
            echo "                <input type=\"radio\" name=\"seopack_parameters[autometa]\" value=\"1\" /> Evet
                <input type=\"radio\" name=\"seopack_parameters[autometa]\" value=\"0\" checked=\"checked\" /> Hayır
                ";
        }
        // line 268
        echo "\t\t\t\t</td>
\t\t\t  </tr>
\t\t\t  <tr>
                <td class=\"left\" colspan=\"2\">
                Üründe SEO Etiket verilemişse otomatik oluştur
\t\t\t\t</td>
\t\t\t\t<td class=\"right\" colspan=\"2\">
\t\t\t\t";
        // line 275
        if ($this->getAttribute((isset($context["seopack_parameters"]) ? $context["seopack_parameters"] : null), "autotags", array())) {
            // line 276
            echo "                <input type=\"radio\" name=\"seopack_parameters[autotags]\" value=\"1\" checked=\"checked\" /> Evet
                <input type=\"radio\" name=\"seopack_parameters[autotags]\" value=\"0\" /> Hayır
                ";
        } else {
            // line 279
            echo "                <input type=\"radio\" name=\"seopack_parameters[autotags]\" value=\"1\" /> Evet
                <input type=\"radio\" name=\"seopack_parameters[autotags]\" value=\"0\" checked=\"checked\" /> Hayır
                ";
        }
        // line 282
        echo "\t\t\t\t</td>
\t\t\t  </tr>
            </tbody>
          </table>
\t</form>
\t<span style=\"color:red\" class=\"help\">Parametreleri yazıp oluştur dediğinizde işlem yapılmayacaktır. <br>
Öncelikle parametrelerinizi belirleyin.<br>
Sonra sağ üst köşeden kaydet deyin.<br>
Daha sonra oluşturmak istediğiniz her alan için <b>Oluştur</b> butonuna tıklayın.<br></span>
\t</div>
   </div>

<script type=\"text/javascript\">
\t\t\t\tfunction clearseo(data, link){
\t\t\t\t\tif (!confirm('Bunların tümü silinecek; ' + data + '?\\n\\n Veritabanı yedeği almanız önerilir! \\n\\n' + data + ' verilerini silmek üzeresiniz!!!')) 
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
        // line 308
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/extension/seopack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 308,  461 => 282,  456 => 279,  451 => 276,  449 => 275,  440 => 268,  435 => 265,  430 => 262,  428 => 261,  419 => 254,  414 => 251,  409 => 248,  407 => 247,  398 => 240,  393 => 237,  388 => 234,  386 => 233,  372 => 222,  368 => 221,  364 => 220,  360 => 219,  356 => 218,  352 => 217,  348 => 216,  344 => 215,  340 => 214,  323 => 200,  307 => 187,  300 => 185,  285 => 173,  280 => 171,  263 => 157,  258 => 155,  241 => 141,  235 => 138,  219 => 125,  214 => 123,  197 => 109,  192 => 107,  175 => 93,  170 => 91,  153 => 77,  148 => 75,  131 => 61,  126 => 59,  108 => 44,  102 => 41,  81 => 23,  77 => 22,  70 => 18,  66 => 16,  60 => 14,  57 => 13,  51 => 11,  49 => 10,  46 => 9,  33 => 7,  29 => 6,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }}*/
/* */
/* <div id="content">*/
/*  	<link type="text/css" href="view/stylesheet/stylesheet2.css" rel="stylesheet" media="screen" />*/
/* 	  <div class="breadcrumb">*/
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
/* 	<div class="box">*/
/*     <div class="heading">*/
/*       <h1><img src="view/image/review.png" alt="" /> {{ heading_title }} </h1>*/
/* 	<div class="buttons"><a onclick="$('#form').submit();" class="button">Kaydet</a></div>*/
/* 	</div>*/
/*     <div class="content">*/
/* 	<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form">*/
/* 			<input type="hidden" name="seopack_parameters[gkey]" value="{{ seopack_parameters.gkey ? seopack_parameters.gkey :  gkey}}">*/
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
/* 			<tbody>*/
/*               <tr>*/
/*                 <td class="left"><b>Anahtar Kelime Oluşturucu</b></td>*/
/*                 <td class="left"><span class="help">Parametreleri kullanarak otomatik "Anahtar Kelime" oluşturabilirsiniz.<br>*/
/* 				<b>Parametreler</b><br>*/
/* 				ürün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>*/
/*  				Değişiklikleri kaydettikten sonra oluştur deyin.</span></td>*/
/*                 <td class="left"><input type="text" name="seopack_parameters[keywords]" value="{{ seopack_parameters.keywords }}" size="10"/></td>*/
/*                 <td class="right">*/
/* */
/* 					<a onclick="location = 'controller/extension/extension/keywords_generator.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* */
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/* */
/* 			<tbody>*/
/*               <tr>*/
/*                 <td class="left"><b>Meta Açıklama Oluşturucu</b></td>*/
/*                 <td class="left"><span class="help">*/
/* 				Parametreleri kullanarak otomatik "Meta Açıklama" oluşturabilirsiniz.<br>*/
/* 				<b>Parametreler</b><br>*/
/* 				ürün adı(%p) ilk açıklama cümlesi(%f) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>*/
/*  				Değişiklikleri kaydettikten sonra oluştur deyin.*/
/* 				</span></td>*/
/*                 <td class="left"><input type="text" name="seopack_parameters[metas]" value="{{ seopack_parameters.metas}}" size="10"/></td>*/
/*                 <td class="right">*/
/* 					<a onclick="location = 'controller/extension/extension/meta_description_generator.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/* */
/*             <tbody>*/
/*               <tr>*/
/* 				<td class="left"><b>Ürün Alt Etiketi Oluşturucu</b></td>*/
/*                 <td class="left"><span class="help">*/
/*                 Parametreleri kullanarak otomatik "Ürün Alt Etiketi" oluşturabilirsiniz.<br>*/
/* 				<b>Parametreler</b><br>*/
/* 				ürün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>*/
/*  				Değişiklikleri kaydettikten sonra oluştur deyin.*/
/* 				</span></td>*/
/*                 <td class="left"><input type="text" name="seopack_parameters[calts]" value="{{ seopack_parameters.calts ? seopack_parameters.calts}}" size="10"/></td>*/
/*                 <td class="right">*/
/* 					<a onclick="location = 'controller/extension/extension/custom_alt_generator.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/* */
/*             <tbody>*/
/*             <tr>*/
/*             <td class="left"><b>H1 Etiketi Oluşturucu</b></td>*/
/*                 <td class="left"><span class="help">*/
/*                 Parametreleri kullanarak otomatik "H1 Etiketi" oluşturabilirsiniz.<br>*/
/* 				<b>Parametreler</b><br>*/
/* 				ürün adı(%p) kategori(%c) ürün kodu(%m) sku(%s) upc(%u) marka(%b) fiyat(%$)<br>*/
/*  				Değişiklikleri kaydettikten sonra oluştur deyin.*/
/* 				</span></td>*/
/*                 <td class="left"><input type="text" name="seopack_parameters[ch1s]" value="{{ seopack_parameters.ch1s ? seopack_parameters.ch1s}}" size="10"/></td>*/
/*                 <td class="right">*/
/* 					<a onclick="location = 'controller/extension/extension/custom_h1_generator.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/* */
/* 			<tbody>*/
/*             <tr>*/
/* 			<td class="left"><b>H2 Etiketi Oluşturucu</b></td>*/
/*                 <td class="left"><span class="help">*/
/* 				Parametreleri kullanarak otomatik "H2 Etiketi" oluşturabilirsiniz.<br>*/
/* 				<b>Parametreler</b><br>*/
/* 				ürün adı(%p) kategori(%c) ürün kodu(%m) sku(%s) upc(%u) marka(%b) fiyat(%$)<br>*/
/*  				Değişiklikleri kaydettikten sonra oluştur deyin.*/
/* 				</span></td>*/
/*                 <td class="left"><input type="text" name="seopack_parameters[ch2s]" value="{{ seopack_parameters.ch2s ? seopack_parameters.ch2s}}" size="10"/></td>*/
/*                 <td class="right">*/
/* 					<a onclick="location = 'controller/extension/extension/custom_h2_generator.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/* */
/* 			<tbody>*/
/*               <tr>*/
/*                 <td class="left"><b>Ürün Etiket Oluşturucu</b></td>*/
/*                 <td class="left"><span class="help">*/
/* 				Parametreleri kullanarak otomatik "Ürün Etiketi" oluşturabilirsiniz.<br>*/
/* 				<b>Parametreler</b><br>*/
/* 				ürün adı(%p) ilk açıklama cümlesi(%f) ürün kodu(%m) sku(%s) upc(%u) marka(%b)<br>*/
/*  				Değişiklikleri kaydettikten sonra oluştur deyin.*/
/* 				</span></td>*/
/*                 <td class="left"><input type="text" name="seopack_parameters[tags]" value="{{ seopack_parameters.tags}}" size="10"/></td>*/
/*                 <td class="right">*/
/* 					<a onclick="location = 'controller/extension/extension/tag_generator.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/* */
/*             <tbody>*/
/* 				<tr>*/
/* 				<td class="left"><b>Ürün Başlık Etiketi Oluşturucu</b></td>*/
/* 					<td class="left"><span class="help">Parametreleri kullanarak otomatik "Ürün Başlık Etiketi" oluşturabilirsiniz.<br>*/
/* 					<b>Parametreler</b><br>*/
/* 					ürün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b) fiyat(%$)<br>*/
/* 					Değişiklikleri kaydettikten sonra oluştur deyin.*/
/* 					</span></td>*/
/* 					<td class="left"><input type="text" name="seopack_parameters[ctitles]" value="{{ seopack_parameters.ctitles ? seopack_parameters.ctitles}}" size="10"/></td>*/
/* 					<td class="right">*/
/* */
/* 						<a onclick="location = 'controller/extension/extension/custom_title_generator.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* 					</td>*/
/* 				</tr>*/
/*             </tbody>*/
/* */
/*             <tbody>*/
/* 				<tr>*/
/* 				<td class="left"><b>Resim Title Etiketi Oluşturucu</b></td>*/
/* 					<td class="left"><span class="help">*/
/* 					Parametreleri kullanarak otomatik "Ürün Etiketi" oluşturabilirsiniz.<br>*/
/* 					<b>Parametreler</b><br>*/
/* 					ürün adı(%p) ürün kodu(%m) sku(%s) upc(%u) marka(%b) fiyat(%$)<br>*/
/* 					Değişiklikleri kaydettikten sonra oluştur deyin.*/
/* 					</span></td>*/
/* 					<td class="left"><input type="text" name="seopack_parameters[cimgtitles]" value="{{ seopack_parameters.cimgtitles ? seopack_parameters.cimgtitles}}" size="10"/></td>*/
/* 					<td class="right">*/
/* 						<a onclick="location = 'controller/extension/extension/custom_imgtitle_generator.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* 					</td>*/
/* 				  </tr>*/
/*             </tbody>*/
/* */
/* 			<tbody>*/
/*               <tr>*/
/*                 <td class="left"><b>İlgili Ürünler Oluşturucu</b></td>*/
/*                 <td class="left"><span class="help">*/
/*                 Bu araç bir algoritma kullanarak ürünün benzerlerini otomatik eşleştirir.<br>*/
/* 				<b>Not<br></b>*/
/* 				Kaç adet benzer ürün eşleştirileceğini belirleyin. 3-5 arası bir rakam tavsiye edilir.<br>*/
/* 				Değişiklikleri kaydettikten sonra oluştur deyin.*/
/* 				</span></td>*/
/* 				<td class="left"><input type="text" name="seopack_parameters[related]" value="{{ seopack_parameters.related}}" size="10"/></td>*/
/*                 <td class="right">*/
/* 					<a onclick="location = 'controller/extension/extension/rp_generator.php?gkey={{ seopack_parameters.gkey}}'" class="button">Oluştur</a>*/
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/* */
/* 			<tbody>*/
/*               <tr>*/
/*                 <td class="left"><b>SEO Url Oluşturucu</b></td>*/
/*                 <td class="left"><span class="help"> İsim parametresini kullanarak ürün, kategori ve markalar için otomatik link oluşturabilirsiniz.<br>*/
/* 				<b>Not</b><br>*/
/* 				.html tavsiye edilir<br>*/
/* 				Değişiklikleri kaydettikten sonra oluştur deyin.</span></td>*/
/* 				<td class="left"><input type="text" name="seopack_parameters[ext]" value="{% if seopack_parameters.ext %}{{ seopack_parameters.ext}}{% endif %}" size="10"/></td>*/
/*                 <td class="right">*/
/* 					<a onclick="location = '{{ seourls }}'" class="button">Oluştur</a>*/
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/* */
/* 			<tbody>*/
/*               <tr>*/
/*                 <td class="left"><b>SEO Dostu URL Oluşturucu</b></td>*/
/*                 <td class="left"><span class="help"> Default sayfalar için de seo dostu URL ler oluşturabilirsiniz:*/
/* 				opencartuzman.com/index.php?route=account/login*/
/* 				default olan bu link aşağıdaki şekilde değiştirilir:*/
/* 				opencartuzman.com/giris<br></span></td>*/
/*                 <td class="right" colspan="2">*/
/* 					<a onclick="location = '{{ friendlyurls }}'" class="button">Oluştur</a>*/
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/* */
/*             <tbody>*/
/*               <tr>*/
/*                 <td class="left"><b>SEO ları Temizle</b></td>*/
/*                 <td class="left">*/
/* 					<span class="help"> Yeni parametreler oluşturduysanız eski seoları silmeniz gerekir:*/
/* 					<br>*/
/* 					<span style="color:red">Veritabanı yedeği almanız tavsiye edilir.</span><br>*/
/* 					</span></td>*/
/*                 <td class="right" colspan="2">*/
/* 					<p><a onclick="clearseo('Products Keywords', '{{ clearkeywords }}');" class="button" style="background:red">Anahtar Kelimeleri Sil</a></p>*/
/* 					<p><a onclick="clearseo('Products Meta Descriptions', '{{ clearmetas }}');" class="button" style="background:red">Meta Açıklamaları Sil</a></p>*/
/* 					<p><a onclick="clearseo('Product Custom Alt Tags', '{{ clearalts  }}');" class="button" style="background:red">Ürün Alt Etiketlerini Sil</a></p>*/
/* 					<p><a onclick="clearseo('Product Custom H1s', '{{ clearh1s }}');" class="button" style="background:red">H1 Etiketlerini Sil</a></p>*/
/* 					<p><a onclick="clearseo('Product Custom H2s', '{{ clearh2s  }}');" class="button" style="background:red">H2 Etiketlerini Sil</a></p>*/
/* 					<p><a onclick="clearseo('Products Tags', '{{ cleartags }}');" class="button" style="background:red">Ürün Etiketlerini Sil</a></p>*/
/* 					<p><a onclick="clearseo('Product Custom Titles', '{{ cleartitles }}');" class="button" style="background:red">Ürün Başlık Etiketlerini Sil</a></p>*/
/* 					<p><a onclick="clearseo('SEO Urls', '{{ clearurls }}');" class="button" style="background:red">SEO Url lerini Sil</a></p>*/
/* 					<p><a onclick="clearseo('Related Products', '{{ clearproducts }}');" class="button" style="background:red">İlgili Ürünleri Sil</a>*/
/* 				</td>*/
/*               </tr>*/
/*             </tbody>*/
/* */
/*             <tbody>*/
/*               <tr>*/
/*                 <td class="left" colspan="2">*/
/*                 SEO URL verilmemişse otomatik oluştur (ürün, kategori, marka ve bilgi sayfaları)*/
/* 				</td>*/
/* 				<td class="right" colspan="2">*/
/* 				{% if seopack_parameters.autourls %}*/
/*                 <input type="radio" name="seopack_parameters[autourls]" value="1" checked="checked" /> Evet*/
/*                 <input type="radio" name="seopack_parameters[autourls]" value="0" /> Hayır*/
/*                 {% else %}*/
/*                 <input type="radio" name="seopack_parameters[autourls]" value="1" /> Evet*/
/*                 <input type="radio" name="seopack_parameters[autourls]" value="0" checked="checked" /> Hayır*/
/*                 {% endif %}*/
/* 				</td>*/
/* 			  </tr>*/
/* 			  <tr>*/
/*                 <td  class="left" colspan="2">*/
/*                 Üründe SEO Anahtar Kelime verilemişse otomatik oluştur*/
/* 				</td>*/
/* 				<td class="right" colspan="2">*/
/* 				{% if seopack_parameters.autokeywords %}*/
/*                 <input type="radio" name="seopack_parameters[autokeywords]" value="1" checked="checked" /> Evet*/
/*                 <input type="radio" name="seopack_parameters[autokeywords]" value="0" /> Hayır*/
/*                {% else %}*/
/*                 <input type="radio" name="seopack_parameters[autokeywords]" value="1" /> Evet*/
/*                 <input type="radio" name="seopack_parameters[autokeywords]" value="0" checked="checked" /> Hayır*/
/*                {% endif %}*/
/* 				</td>*/
/* 			  </tr>*/
/* 			  <tr>*/
/*                 <td class="left" colspan="2">*/
/*                 Üründe Meta Açıklama verilemişse otomatik oluştur*/
/* 				</td>*/
/* 				<td class="right" colspan="2">*/
/* 				{% if seopack_parameters.autometa %}*/
/*                 <input type="radio" name="seopack_parameters[autometa]" value="1" checked="checked" /> Evet*/
/*                 <input type="radio" name="seopack_parameters[autometa]" value="0" /> Hayır*/
/*                 {% else %}*/
/*                 <input type="radio" name="seopack_parameters[autometa]" value="1" /> Evet*/
/*                 <input type="radio" name="seopack_parameters[autometa]" value="0" checked="checked" /> Hayır*/
/*                 {% endif %}*/
/* 				</td>*/
/* 			  </tr>*/
/* 			  <tr>*/
/*                 <td class="left" colspan="2">*/
/*                 Üründe SEO Etiket verilemişse otomatik oluştur*/
/* 				</td>*/
/* 				<td class="right" colspan="2">*/
/* 				{% if seopack_parameters.autotags %}*/
/*                 <input type="radio" name="seopack_parameters[autotags]" value="1" checked="checked" /> Evet*/
/*                 <input type="radio" name="seopack_parameters[autotags]" value="0" /> Hayır*/
/*                 {% else %}*/
/*                 <input type="radio" name="seopack_parameters[autotags]" value="1" /> Evet*/
/*                 <input type="radio" name="seopack_parameters[autotags]" value="0" checked="checked" /> Hayır*/
/*                 {% endif %}*/
/* 				</td>*/
/* 			  </tr>*/
/*             </tbody>*/
/*           </table>*/
/* 	</form>*/
/* 	<span style="color:red" class="help">Parametreleri yazıp oluştur dediğinizde işlem yapılmayacaktır. <br>*/
/* Öncelikle parametrelerinizi belirleyin.<br>*/
/* Sonra sağ üst köşeden kaydet deyin.<br>*/
/* Daha sonra oluşturmak istediğiniz her alan için <b>Oluştur</b> butonuna tıklayın.<br></span>*/
/* 	</div>*/
/*    </div>*/
/* */
/* <script type="text/javascript">*/
/* 				function clearseo(data, link){*/
/* 					if (!confirm('Bunların tümü silinecek; ' + data + '?\n\n Veritabanı yedeği almanız önerilir! \n\n' + data + ' verilerini silmek üzeresiniz!!!')) */
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
/* {{ footer }}*/
/* */
