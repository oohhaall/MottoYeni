<?php
require_once('inc/ayar.php');
//require_once('inc.class/qryClass.php');
?><!DOCTYPE html>
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
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<link rel="stylesheet" href="css/animate.css">
</head>
<body>


<!--MASAÜSTÜ HEADER-->
<header class="header">
	<div class="container"> 
    
    <a href="index.php?page=index"><img class="logo" src="images/logo.png"></a>
        
        <div class="ust_hd">
         <?php echo ($GRS)?'<a class="giris_uye" href="'.$self.'?cikis" >Çıkış</a>':'
		 <a class="giris_uye" href="index.php?page=giris">Giriş</a>'; ?>
        <?php if($GRS){ echo '<a class="giris_uye" href="index.php?page=hesabim">Merhaba: '.$UB['adSoyad'].'</a>';} ?>
        	
            <a  href="index.php?page=siparislerim" class="giris_uye" style="    margin-left: 14px;">Siparişlerim</a>
            
            
            <div class="select-style">
              <select>
                <option value="dilsec">DİL SEÇİMİ</option>
                
                <option value="EN">EN</option>
                <option value="RU">RU</option>
              </select>
            </div>
            
            <a href="index.php?page=fiyat-hesaplama" class="fiyat_hesaplama">FİYAT HESAPLAMA</a>
                        
        </div>
        
        
        <div class="e_menu">
        	<a   <?php echo $Menu1 ?> href="index.php?page=index">Anasayfa</a>
            <a  <?php echo $Menu2 ?> href="index.php?page=hakkimizda">Hakkımızda</a>
            <a <?php echo $Menu3 ?>  href="index.php?page=hizmetler">Hizmetler</a>
            <a <?php echo $Menu4 ?> href="index.php?page=neden-motto">Neden MOTTO</a>
            <a <?php echo $Menu5 ?> href="index.php?page=ceviri_alanlari_ve_dilleri">Çeviri Alanları ve Dilleri</a>
            <a <?php echo $Menu6 ?> href="index.php?page=iletisim" style="border:none;">İletişim</a>
        </div>
        
        
     <div class="clear"></div>   
    </div>
</header>
<!--MASAÜSTÜ HEADER-->



<!--MOBİL MENU-->

<header class="m_header">
	
 <a href="index.php?page=index"> <img class="m_logo" src="images/logo.png">  </a>
  
  
            <div class="select-style_m">
              <select>
                <option value="volvo">TR</option>
                <option value="saab">TR</option>
                <option value="mercedes">EN</option>
                <option value="audi">RU</option>
              </select>
            </div>  
  
    
  <div class="button_container">
  <div class="name_container">
    <span id="menu_name">ME<br>NU</span>
    <span id="open_name">OP<br>EN</span>
  </div>
  <span id="line_one"></span>
  <span id="line_two"></span>
</div>

<div class="menu">
  <nav>
        	<a class="active" href="index.php?page=index">Anasayfa</a>
            <a href="index.php?page=hakkimizda">Hakkımızda</a>
            <a href="index.php?page=hizmetler">Hizmetler</a>
            <a href="index.php?page=neden_motto">Neden MOTTO</a>
            <a href="index.php?page=ceviri_alanlari_ve_dilleri">Çeviri Alanları ve Dilleri</a>
            <a href="index.php?page=iletisim">İletişim</a>
            <a href="index.php?page=fiyat-hesaplama">Fiyat Hesaplama</a>
            <a data-fancybox data-type="ajax" data-src="pages/ajax.html" href="javascript:;">Üye Girişi / Üye Ol</a>
  </nav>
  <span class="division_line"></span>
  <div class="icon_container">
    <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
    <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
    <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
    <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
  </div>
</div>


<div class="clear"></div> 
</header>



<!--MOBİL MENU-->















