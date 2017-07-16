<?php
require_once('inc/ayar.php');
//require_once('inc.class/qryClass.php');
//if($GRS){ header('Location: ./'); exit; }
if($_POST['islem'] == 'giris'){
	if(!empty($_POST['eposta']) && !empty($_POST['sifre'])){
		$giris = $DB->qry('SELECT * FROM uyeler WHERE eposta='.$DB->str($_POST['eposta'],'text').' AND sifre='.$DB->str($_POST['sifre'],'text'),4);
		if($giris['id']){
			$_SESSION['UGIRIS'] = TRUE;
			$_SESSION['UBLG'] = $giris;
			header('Location: ./'.((!empty($_GET['l']))?$_GET['l'].'.php':'')); exit;
		}else{
			$hata = 'Eposta adesinizi veya şifrenizi yanlış girdiniz!';
		}
		
	}else{
		 $hata = 'Lütfen eposta adesinizi ve şifrenizi girin!';
	}

}


?>
<div class="container">


<br /><br />

<p>Merhaba; sisteme giriş sayfasındasınız.<br /><br />
Daha önce üyelik oluştururken doldurmuş olduğunuz mail adresi ve şifre ile giriş yapmayı unutmayınız. <br /><br />

Sisteme üye değilseniz hemen şimdi <SPAN style="text-decoration:underline;"><a href="index.php?page=giris">buraya tıklayarak üye ola bilirsiniz</a>.</SPAN> <br /><br />Üyeliğiniz varsa aşağıda belirtilen bilgileri eksiksiz doldurmanız gerekmektedir.<br /> Her hangi bir problem yaşıyorsanız <span style="text-decoration:underline;">+90 0216 305 01 25</span> nolu telefonu araya bilir yada <strong style="text-decoration:underline; color:#039;"><a href="mailto:destek@mottotranslation.com">destek@mottotranslation.com</a></strong> adresine 7/24 mail atabilirsiniz.</p><br /><br />
	




<form action="" method="post">
        	<?php if($hata){ echo '<div class="alert alert-danger">'.$hata.'</div>'; } ?>
        	<label>Eposta Adresiniz</label>
        	<input class="form-control" name="eposta" type="email" placeholder="E posta Adresiniz...">
        	<label style="margin-top:20px;">Şifreniz</label>
        	<input class="form-control" name="sifre" type="password" placeholder="Şifreniz...">
            <input name="islem" type="hidden" value="giris">
            <div style="margin-top:10px;">
                <a href="index.php?page=sifremiunuttum" class="blink fl">Şifremi Unuttum!</a> - 
                <a href="index.php?page=yenihesap" class="blink fl" style="margin-left:10px;">Hesap Oluştur</a>
               
               <br />
                <div align="center"><input  class="btn fr" type="submit" value="KAYDET VE GİRİŞ YAP"></div>
                
            	<div class="fc"></div>
            </div>
        </form>
 <br /> <br />









</div>


