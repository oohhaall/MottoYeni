<?php
require_once('inc/ayar.php');
//require_once('inc.class/qryClass.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    
	<title>Motto</title>
<link rel="stylesheet" href="css/reset.css">   
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link href="css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="css/swiper.min.css">

<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<link rel="stylesheet" href="css/animate.css"><!--SLAYT-->
<link rel="stylesheet" href="css/jquery.fileuploader.css"><!--SLAYT-->
	<link rel="stylesheet" href="css/app.min.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">


<?php include('inc/ust.php') ?>
<div class="container">

<h3>Yeni Sipariş Oluşturen...</h3> 

<p>Siparişiniz alındıktan hemen sonra müşteri hizmetleri yetkilileri analiz inceleme sonucu tarafınıza bir kereye mahsus dönüş yapacaklardır. Sipariş oluştururken bir hata ile karşılaştıysanız eğer <a href="mailto:destek@mottotranslation.com">destek@mottotranslation.com</a> adresine mail atarak  yada  0216 305 01 25 telefonu arayarak 7/24 destek alabilirsiniz.<br /><br />

Bizi tercih ettiğiniz için teşekkür ederiz.<br />
MoTTo Yeminli Tercüman Firması</p>




    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 left">
                        <h1 class="newO">Yeni Sipariş</h1>
                        
                        <div id="messages" class="newO">
                                                    </div>
                        <div id="steps">
                            <div class="stepWr">

                                        <form action="php/form_upload.php" method="post" enctype="multipart/form-data">
                                    <div class="stepContent upload" tabindex="-1">
                                        <div class="stepCount">1</div>
                                        <div class="help"></div>
                                        <div class="helpInfoWR">
                                            <div class="helpInfo">
                                                <p>Belgenizin çeviri fiyatını hesaplamak için lütfen 100MB&#039;den büyük olmayan doc, docx, ppt, pptx, pdf, odt, txt, xls, xlsx, rtf, jpg, jpeg, jpe, png, gif, tif, tiff, bmp uzantılı dokümanınızı yukarıdaki kutucuğu kullanarak seçiniz. Daha sonrasında teslimat süresi ve sipariş tutarı ile ilgili bilgileri inceleyerek sipariş adımları ile devam edebilirsiniz.</p>
                                            </div>
                                        </div>
                                        <h3>METİN GİRİŞİ</h3>
                                        <div class="work">
                                            <ul class="col-xs-12 col-sm-12 uploadType">
                                                <li class="col-xs-12 col-sm-6 selectedChoise" id="dosyaYukle">Belge Yükle</li>
                                                <li class="col-xs-12 col-sm-6" id="metinGir">Metin Gir</li>
                                            </ul>
                                        </div>
                                        <div id="alanMetin">
                                            <textarea id="metinGiris" name="translationText" placeholder="Lütfen metninizi girin" maxlength="3000"></textarea>
                                            <div id="wordCount">
                                                <div class="form-group">
                                                    <p>Toplam kelime sayısı: </p><label for="metinGiris">0</label>
                                                    <button id="textUpload" type="button" class="btn btn-primary" >Metni Ekle</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="alanDosya" class="alanAcik">
                                            <div id="fileInput">
                                                         <input type="file" class="fileupp" name="files">
                                                <!--<div class="form-group">
                                                    <button id="fileUpload" type="button" class="btn btn-primary" >Belgenizi Seçin</button>
                                                    <label for="fileUpload">Birden fazla dosya yükleyebilirsiniz.</label>
                                                    <input type="file" id="hiddenUpload" name="fileUploads[]" class="hidden" multiple>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div id="fileInfo" class="">
                                                                                                    
                                        </div>
                                    </div>
                                </form>

                                                                
                                <form action="ahmet2.php" method="post" id="newOrderForm">
                                    <div class="stepContent" tabindex="-1">
                                        <div class="stepCount">2</div>
                                        <div class="help"></div>
                                        <div class="helpInfoWR">
                                            <div class="helpInfo">
                                                <p>Belgeleriniz için almak istediğiniz hizmet tipini seçiniz.</p>
                                            </div>
                                        </div>
                                        <h3>EK HİZMET</h3>
                                        <div class="work">
                                            <ul class="col-xs-12 workType">                                                                            <li class="col-xs-12 col-sm-6 col-md-4 selectedChoise">
                                                        <label><input type="radio" name="serviceTypeId" value="1" checked="checked">
                                                        Noter Onaylı</label></li>                                                                      <li class="col-xs-12 col-sm-6 col-md-4 ">
                                                        <label><input type="radio" name="serviceTypeId" value="2" >
                                                        YM Tercüman Onaylı</label></li>                    
                                                        <li class="col-xs-12 col-sm-6 col-md-4 ">
                                                        <label><input type="radio" name="serviceTypeId" value="3" >
                                                        Apostil Hizmetler
                                                        </label></li>
                                                                                            </ul>
                                        </div>
                                    </div>

                                                                        <div class="stepContent step3" tabindex="-1">
                                        <div class="stepCount">3</div>
                                        <div class="help"></div>
                                        <div class="helpInfoWR">
                                            <div class="helpInfo">
                                                <p>Belgelerinizin orjinal metin dilini ve çevrilmesini istediğiniz hedef dil veya dilleri seçiniz.</p>
                                            </div>
                                        </div>
                                        <h3>DİL SEÇİMİ</h3>
                                        <div class="work">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-12 ">
                                                    <div class="form-group">
                                                        <label for="fileLanguageId">Orijinal Metin Dili</label>
                                                        <select id="fileLanguageId" name="fileLanguageId" class="select2-config">
                                                                                                                            <option value="3" selected>Türkçe</option>
                                                                                                                            <option value="4" >İngilizce</option>
                                                                                                                            <option value="5" >Almanca</option>
                                                                                                                            <option value="9" >Fransızca</option>
                                                                                                                            <option value="14" >Rusça</option>
                                                                                                                            <option value="6" >İspanyolca</option>
                                                                                                                            <option value="8" >İtalyanca</option>
                                                                                                                            <option value="32" >Arapça</option>
                                                                                                                            <option value="57" >Afganca</option>
                                                                                                                            <option value="51" >Arnavutça</option>
                                                                                                                            <option value="36" >Azerice</option>
                                                                                                                            <option value="54" >Boşnakça</option>
                                                                                                                            <option value="10" >Bulgarca</option>
                                                                                                                            <option value="30" >Çekçe</option>
                                                                                                                            <option value="7" >Çince</option>
                                                                                                                            <option value="18" >Danca</option>
                                                                                                                            <option value="20" >Endonezce</option>
                                                                                                                            <option value="33" >Farsça</option>
                                                                                                                            <option value="22" >Felemenkçe</option>
                                                                                                                            <option value="24" >Fince</option>
                                                                                                                            <option value="41" >Gürcüce</option>
                                                                                                                            <option value="29" >Haitice</option>
                                                                                                                            <option value="44" >Hintçe</option>
                                                                                                                            <option value="45" >Hırvatça</option>
                                                                                                                            <option value="25" >İbranice</option>
                                                                                                                            <option value="38" >İsveççe</option>
                                                                                                                            <option value="52" >İzlandaca</option>
                                                                                                                            <option value="13" >Japonca</option>
                                                                                                                            <option value="49" >Kazakça</option>
                                                                                                                            <option value="59" >Khmerce</option>
                                                                                                                            <option value="56" >Kırgızca</option>
                                                                                                                            <option value="12" >Korece</option>
                                                                                                                            <option value="35" >Kürtçe</option>
                                                                                                                            <option value="40" >Latince</option>
                                                                                                                            <option value="11" >Lehçe</option>
                                                                                                                            <option value="15" >Letonyaca</option>
                                                                                                                            <option value="16" >Litvanca</option>
                                                                                                                            <option value="17" >Macarca</option>
                                                                                                                            <option value="48" >Makedonca</option>
                                                                                                                            <option value="47" >Malayca</option>
                                                                                                                            <option value="58" >Moldovca</option>
                                                                                                                            <option value="19" >Norveççe</option>
                                                                                                                            <option value="34" >Osmanlı Türkçesi</option>
                                                                                                                            <option value="50" >Özbekçe</option>
                                                                                                                            <option value="21" >Portekizce</option>
                                                                                                                            <option value="23" >Romence</option>
                                                                                                                            <option value="43" >Rumca</option>
                                                                                                                            <option value="46" >Sırpça</option>
                                                                                                                            <option value="31" >Slovakça</option>
                                                                                                                            <option value="53" >Slovence</option>
                                                                                                                            <option value="42" >Süryanice</option>
                                                                                                                            <option value="26" >Tayca</option>
                                                                                                                            <option value="60" >Tibetçe</option>
                                                                                                                            <option value="39" >Türkmence</option>
                                                                                                                            <option value="37" >Ukraynaca</option>
                                                                                                                            <option value="55" >Urduca</option>
                                                                                                                            <option value="27" >Vietnamca</option>
                                                                                                                            <option value="28" >Yunanca</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-12 ">
                                                    <div class="form-group">
                                                        <label for="interpretLanguageId">Çeviri Metin Dili</label>
                                                        <select id="interpretLanguageId" name="interpretLanguageId[]" multiple="multiple" class="select2-config" disabled="disabled">
                                                        </select>
                                                    </div>
                                                </div>
                                                                                            </div>
                                        </div>
                                    </div>

                                                                        <div class="stepContent" tabindex="-1">
                                        <div class="stepCount">4</div>
                                        <div class="help"></div>
                                        <div class="helpInfoWR">
                                            <div class="helpInfo">
                                                <p>Meslek uzmanlığı seçenekleri, uzmanlık gerektiren çevirilerinizde daha profesyonel sonuçlar almanızı sağlar.</p>
                                            </div>
                                        </div>
                                        <h3>Uzmanlık Alanı</h3>
                                        <div class="work">
                                            <ul class="col-xs-12 uzmanlik">
                                                                                                                                                        
                                                    <li class="col-xs-12 col-sm-6 selectedChoise">
                                                        <label><input type="radio" name="qualityTypeId" value="1" checked="checked"><div class="img standart"></div>Genel</label>
                                                    </li>
                                                                                                                                                        
                                                    <li class="col-xs-12 col-sm-6 ">
                                                        <label><input type="radio" name="qualityTypeId" value="2" ><div class="img legal"></div>Hukuki</label>
                                                    </li>
                                                                                                                                                        
                                                    <li class="col-xs-12 col-sm-6 ">
                                                        <label><input type="radio" name="qualityTypeId" value="3" ><div class="img medical"></div>Medikal</label>
                                                    </li>
                                                                                                                                                        
                                                    <li class="col-xs-12 col-sm-6 ">
                                                        <label><input type="radio" name="qualityTypeId" value="4" ><div class="img technical"></div>Teknik</label>
                                                    </li>
                                                                                                                                                        
                                                    <li class="col-xs-12 col-sm-6 ">
                                                        <label><input type="radio" name="qualityTypeId" value="5" ><div class="img patent"></div>Akademik</label>
                                                    </li>
                                                                                            </ul>
                                        </div>
                                    </div>

                                                                        <div class="stepContent" tabindex="-1">
                                        <div class="stepCount">5</div>
                                        <div class="help"></div>
                                        <div class="helpInfoWR">
                                            <div class="helpInfo">
                                                <p>Sipariş sınıfı seçenekleri, çevirinizi ihtiyaçlarınız doğrultusunda ne kadar deneyimli bir tercümana yaptırmak istediğinizi belirtmenizi sağlar. Ücretlendirme, seçtiğiniz çevirmenin tecrübe seviyesine göre yapılmaktadır.</p>
                                            </div>
                                        </div>
                                        <h3>SİPARİŞ TÜRÜ</h3>
                                        <div class="work">
                                            <ul class="col-xs-12 col-sm-12 siparisSinifi">                                                             <li class="col-xs-12 col-sm-6 selectedChoise">
                                                        <label>
                                                            <input type="radio" name="categoryTypeId" value="1" checked="checked" data-name="PROFESSIONAL_INTERPRETER" >
                                                            Profesyonel Tercüman
                                                        </label>
                                                    </li>                                                                                              <li class="col-xs-12 col-sm-6 ">
                                                        <label>
                                                            <input type="radio" name="categoryTypeId" value="2"  data-name="CERTIFIED_INTERPRETER" >
                                                            Yeminli Tercüman
                                                        </label>
                                                    </li>
                                        </ul>
                                        </div>
                                    </div>

                                            
                                    <div class="stepContent" tabindex="-1">
                                        <div class="stepCount">6</div>
                                        <div class="help"></div>
                                        <div class="helpInfoWR">
                                            <div class="helpInfo">
                                                <p>Acil çeviri ihtiyaçlarınız için &#039;Hızlı Çeviri&#039; seçeneğini işaretleyerek çevirinizin daha hızlı teslim edilmesini sağlayabilirsiniz. Hızlı çeviri hizmeti ek olarak ücretlendirilmektedir. </p>
                                            </div>
                                        </div>
                                        <h3>TESLİMAT HIZI</h3>
                                        <div class="work">
                                            <ul class="col-xs-12 col-sm-12 speed">                                                                     <li class="col-xs-12 col-sm-6 selectedChoise">
                                                        <label><input type="radio" name="durationTypeId" value="1" checked="checked">Standart hızda çeviri</label>
                                                    </li>                                                                                              <li class="col-xs-12 col-sm-6 ">
                                                        <label><input type="radio" name="durationTypeId" value="2" >Hızlı çeviri</label>
                                                    </li>
                                             </ul>
                                        </div>
                                    </div>
                                        
                                       <div class="stepContent step7" tabindex="-1">
                                        <div class="stepCount">7</div>
                                        <div class="help"></div>
                                        <div class="helpInfoWR">
                                            <div class="helpInfo">
                                                <p>Belgeleriniz için dilediğiniz ek hizmetleri aşağıdan seçip siparişinize ekleyebilirsiniz.</p>
                                            </div>
                                        </div>
                                        <h3>EK HİZMETLER</h3>
                                        
                                        <div class="work">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-12">
                                                                                                                                                                    
                                                        <p class="extra-service">
                                                            <label for="extraService_1">
                                                                <input type="checkbox" name="extraService_1" id="extraService_1" value="1" data-price-value="14.0000" data-short-desc="Kargo" data-name="CARGO_DELIVERY" >
                                                                <span></span>Belgelerimi kargo ile teslim almak istiyorum. 
                                                            <strong class="medium">(+14,00 TL)</strong>
                                                                    </label>
                                                        </p>
                                                                                                                                                                    
                                                        <p class="extra-service">
                                                            <label for="extraService_2">
                                                                <input type="checkbox" name="extraService_2" id="extraService_2" value="2" data-price-value="78.0000" data-short-desc="Noter" data-name="NOTARISATION" >
                                                                <span></span>Belgelerim için Noter Onayı istiyorum. 
                                                                                                                            </label>
                                                        </p>
                                                        
                                                        <p class="extra-service">
                                                            <label for="extraService_3">
                                                                <input type="checkbox" name="extraService_3" id="extraService_3" value="3" data-price-value="50.0000" data-short-desc="Kase" data-name="NOTARISATION" >
                                                                <span></span>Yeminli Tercüman Kaşesi İstiyorum 
                                                                                                                            </label>
                                                        </p>
                                                                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                                                        <div class="stepContent step8" tabindex="-1">
                                        <div class="stepCount">8</div>
                                        <div class="help"></div>
                                        <div class="helpInfoWR">
                                            <div class="helpInfo">
                                                <p>Tercümana iletilmesini istediğiniz, belge ve çevirileri ile ilgili taleplerinizi buradan girebilirsiniz.</p>
                                            </div>
                                        </div>
                                        <h3>TERCÜMANA İLETİLECEK NOTLARINIZ</h3>
                                        <div class="work">
                                            <label for="notlar"></label>
                                            <textarea id="notlar" name="description" placeholder="Belgeniz ile ilgili özel taleplerinizi veya ek bilgileri bu kutucuğu doldurarak gönderebilirsiniz."></textarea>
                                        </div>
                                        <input name="name" type="hidden" value="">
                                    </div>
                                
                                    <input type="hidden" name="highBudget" value="false" />
                                    <input type="hidden" name="containsUncounted" value="false" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div id="orderWr">
    <h2 class="newO">Sipariş Özeti</h2>
    <div class="loader"></div>
    
            
    
    <div id="orderBox" >        
        <div class="orderHeader">
            <span class="glyphicon glyphicon-chevron-right rotated" aria-hidden="true"></span>
            <span class="type">
                                    Metin Tercümesi
                            </span>
            <span class="pull-right"></span>
        </div>

        <div class="workList">
            <ul>
                <li class="wordCount" style="display:none">
                                            Kelime Sayısı: <strong></strong>
                                    </li>
                                                <li class="trLanguages" style="display:none">
                                            Çeviri Dilleri: <strong>

</strong>
                                    </li>
                <li class="trProf" style="display:none">
                                            Uzmanlık Alanı: <strong>Genel</strong>
                                        </li>
                <li class="trClass" style="display:none">
                                            Profesyonel Tercüman
                                    </li>
                <li class="trSpeed" style="display:none">
                                            Standart hızda çeviri
                                    </li>
                <li class="trDate" style="display:none">
                                            Tahmini bitiş: <strong><?php $startDate=strtotime(date("d.m.Y H:i:s")); echo date("d.m.Y H:i:s",strtotime('+1 day', $startDate)); ?></strong>
                                    </li>
            </ul>
        </div>
        
        <div class="kalemler" style="display:none;">
                        
                        
                        <p class="protrans" style="display:none;">
                Özel indirim <i class="help" data-placement="right" title="Protranslate.net tarafından, yüklediğiniz belgelere ve girdiğiniz bilgilere göre otomatik hesaplanan özel indirim."></i> 
                <span class="pull-right"></span>
            </p>
            <p class="turkcell" style="display:none;">
                Kupon / Kampanya <i class="help" data-placement="right" title="Kullanmış olduğunuz kupon veya yararlanmış olduğunuz kampanya sayesinde kazanmış olduğunuz indirim."></i> 
                <span class="pull-right"></span>
            </p>
            <p class="paycost" style="display:none;">
                Ödeme Ücreti <span class="pull-right"></span>
            </p>
            <div class="extras">
                            </div>

                        
        </div>
        
        <div class="toplam">
            <p>Toplam
 <span class="pull-right">0,00 TL</span></p>
        </div>
        
                <div class="onayla text-center">
            <button type="button" disabled="disabled" data-defaulttext="Devam Et" data-manualordertext="Hemen Teklif Al">Devam Et</button>
        </div>
            </div>
</div>                    </div>
                </div>
            </div>
        </div>
    </div>



        <div class="modal fade" id="thanksModal" role="dialog" style="display:none;">
    <div class="siteBG half clearfix">
        <div class="row">
            <div class="col-xs-12">
                <p class="h1 text-center">Teşekkürler</p>
                <p class="text-center">Ekibimiz en kısa zamanda çevirinizle ilgili sizinle iletişime geçecektir.</p>

                <div class="form-group text-center col-xs-12">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

    </div>    
        <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Uyarı</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning fade in">
                    <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
                    <span class="message"></span>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Kapat</button>
                </div>
            </div>
        </div>
    </div>
</div>    
    <input type="hidden" name="analyticsClientId" value="" />

                  
<!--
        
    <div class="container-fluid hidden-xs hidden-sm" id="mainFooter">
 
    </div>
-->







</div>


<?php include('inc/alt.php')?>
