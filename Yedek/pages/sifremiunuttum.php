<?php
require_once('inc/ayar.php');
//require_once('inc.class/qryClass.php');

if($GRS){ header('Location: ./'); exit; }

if($_POST['islem'] == 'sifremiunuttum'){

	if(!empty($_POST['eposta'])){
		$bilgi = $DB->qry("SELECT * FROM uyeler WHERE eposta=".$DB->str($_POST['eposta'],'text'),4);
		if($bilgi['id']){
			$msjHtml ='
				Merhaba;<br>
				'.$bilgi['adSoyad'].'<br>
				Şifreniz : '.$bilgi['sifre'].'<br><br>
				
				<a href="http://www.kiraliksamdan.com/giris.php">Giriş yapmak için buraya tıklayın.</a>
				
			';
			require_once('inc.class/mailAt.php');
			mailAt($bilgi['eposta'],'Şifreniz - Kiralık Şamdan','bilgi@kiraliksamdan.com',$msjHtml,$msjHtml);	
			$gonderildi = 'Şifreniz eposta adresinize gönderilmiştir.';
		}else{
			$hata = 'Girdiğiniz eposta adesine bağlı hesap bulunmadı!';
		}
		
	}else{
		 $hata = 'Lütfen eposta adesinizi girin!';
	}

}




//$m2 = ' c';
?>

<div class="container">

<h3>Sisteme Giriş..</h3> 

<p>Merhaba, Sisteme Giriş Yaptıktan sonra fiyat teklifi ala bilir ve geçmiş döneme ait faturalarınızı göre bilir ayrıca teslim edilen işlerinizi direk sistem üzerinden teslim ala bilirsiniz.<br /><br />

Sisteme üye değilseniz hemen şimdi buraya tıklayarak üye ola bilirsiniz. üyeliğiniz varsa aşağıda belirtilen bilgileri eksiksiz doldurmanız gerekmektedir. her hangi bir problem yaşıyorsanız +90 0216 305 01 25 nolu telefonu araya bilir yada destek@mottotranslation.com adresine 7/24 mail atabilirsiniz.</p>

<h1>Şifremi Unuttum!</h1>
	
    	<form action="" method="post">
			<?php if($gonderildi){ echo '<div class="alert alert-success">'.$gonderildi.'</div>'; } ?>
        	<?php if($hata){ echo '<div class="alert alert-danger">'.$hata.'</div>'; } ?>
        	<label>Eposta Adresiniz</label>
        	<input class="form-control" name="eposta" type="email" placeholder="Eposta Adresiniz...">
            <input name="islem" type="hidden" value="sifremiunuttum">
            <div style="margin-top:10px;">
                <input class="btn" type="submit" value="Gönder">
            </div>
        </form>



 <br /> <br />









</div>


