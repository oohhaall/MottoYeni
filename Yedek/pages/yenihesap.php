<?php
require_once('inc/ayar.php');
//require_once('inc.class/qryClass.php');

if($GRS){ header('Location: ./'); exit; }

if($_POST['islem'] == 'yenihesap'){

	if(!empty($_POST['eposta']) && !empty($_POST['sifre']) && !empty($_POST['adSoyad'])){
		$uye = $DB->qry('SELECT * FROM uyeler WHERE eposta='.$DB->str($_POST['eposta'],'text'),4);
		if(empty($uye['id'])){
						
			$DB->kln('eposta',$_POST['eposta']);
			$DB->kln('sifre',$_POST['sifre']);
			$DB->kln('adSoyad',$_POST['adSoyad']);
			$DB->kln('tel',$_POST['tel']);
			$DB->kln('cep',$_POST['cep']);
			$DB->kln('sehir',$_POST['il'],'int');
			$DB->kln('ilce',$_POST['ilce'],'int');
			$DB->kln('adres',$_POST['adres']);
			$DB->kln('tarih','NOW()','fnc');
			$DB->ins('uyeler','','yniUyeOk');			
			
		}else{
			$hata = 'Daha önce bu eposta adresi ile hesap oluşturulmuş!';
		}
		
	}else{
		 $hata = 'Lütfen tüm bilgileri giriniz!';
	}

}

$iller = $DB->qry('SELECT * FROM iller ORDER BY il ASC',1);
foreach($iller as $il){ $illerOpt .= '<option value="'.$il['id'].'">'.$il['il'].'</option>'; }



//$m2 = ' c';
?>

<div class="container">

<div class="sayfa golge">
	<div class="syfMenu" align="left"><a href="./">Anasayfa</a> > <span>Hesap Oluştur</span> </div>
    
    <?php  
			
				if($_SESSION['KAYIT'] == 'yniUyeOk'){ echo '<div class="alert alert-success" align="center">
				<h2>Tebrikler!</h2>
				<p>Hesabınızı oluşturdunuz. Şimdi giriş yapabilirsiniz.</p>
				<a href="giris.php" style="margin-top:20px;" class="btn">Giriş Yap</a>
				</div>';	$_SESSION['KAYIT'] = NULL;}else{
					
	?>
    
    <h1>Hesabını Oluştur</h1>
	<div style="width:400px;" align="left">
    	<form action="" method="post">
        	<?php if($hata){ echo '<div class="alert alert-danger">'.$hata.'</div>'; }?>
			
            <label>Adınız Soyadınız</label>
        	<input class="form-control" name="adSoyad" type="text" placeholder="Adınız Soyadınız...">

            <label>Telefon Numaranız</label>
        	<input class="form-control" name="tel" type="text" placeholder="Tel...">

            <label>Cep Numaranız</label>
        	<input class="form-control" name="cep" type="text" placeholder="Cep...">

            <label>Şehir</label>
            <select class="form-control" name="il" id="il"><option value="" selected>Şehir seçiniz...</option><?php echo $illerOpt; ?></select>

            <label>İlçe</label>
	        <select class="form-control" name="ilce" id="ilce"><option value="" selected></option></select>
			
            <label>Adres</label>
            <textarea class="form-control" name="adres" cols="" rows=""></textarea>
            
            <h2 align="center" style="margin-top:50px;">Giriş Bilgileriniz</h2>
        	
            <label>Eposta Adresiniz</label>
        	<input class="form-control" name="eposta" type="email" placeholder="Eposta Adresiniz...">
        	
            <label style="margin-top:20px;">Şifreniz</label>
        	<input class="form-control" name="sifre" type="password" placeholder="Şifreniz...">
            
            <input name="islem" type="hidden" value="yenihesap">
            <div style="margin-top:10px;" align="right">
                <input class="btn" type="submit" value="Kaydet">
                
            </div>
            
        </form>
    </div>
    <?php }?>
    </div>



 <br /> <br />









</div>


