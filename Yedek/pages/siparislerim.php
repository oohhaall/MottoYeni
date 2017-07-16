<?php
require_once('inc/ayar.php');
//require_once('inc.class/qryClass.php');

if(!$GRS){ header('Location: index.php?page=giris.php?l=siparislerim'); exit; }

$il = $DB->qry('SELECT * FROM iller',2,'id');
$ilce = $DB->qry('SELECT * FROM ilceler',2,'id');

$toplamFiyat = 0;
$siparisler = $DB->qry('SELECT *, DATE_FORMAT(tarih,\'%d.%m.%Y %H:%i\') as trh FROM siparisler WHERE uyeid='.$DB->str($UB ['id'],'int'),1);
foreach($siparisler as $s){
	if($s['tip'] == '2'){
		$toplamFiyat = ($toplamFiyat + intval($s['fiyat']));
		$siparislerStlkStr .= '  
		<tr>
			<td>'.$s['id'].'</td>
			<td>'.(($s['tip'] == '1')?'Kiralama':'Satın Alma').'</td>
			<td>'.$s['urunAdi'].'</td>
			<td>'.$s['adet'].'</td>
			<td>'.$s['adres'].' '.$ilce[$s['ilce']][0]['ilce'].' / '.$il[$s['sehir']][0]['il'].'</td>
			<td>'.$s['trh'].'</td>
			<td align="right">'.$s['fiyat'].' TL</td>
		</tr>';
	}else{
		$siparislerKrlkStr .= '  
		<tr>
			<td>'.$s['id'].'</td>
			<td>'.(($s['tip'] == '1')?'Kiralama':'Satın Alma').'</td>
			<td>'.$s['urunAdi'].'</td>
			<td>'.$s['adet'].'</td>
			<td>'.$s['adres'].' '.$ilce[$s['ilce']][0]['ilce'].' / '.$il[$s['sehir']][0]['il'].'</td>
			<td>'.$s['trh'].'</td>
		</tr>';
	
	}
}


//$m2 = ' c';
?>

<div class="container">

<div class="sayfa golge">
	<div class="syfMenu"><a href="./">Anasayfa</a> > <span>Siparişlerim</span> </div>
	
    <?php if($siparislerStlkStr || $siparislerKrlkStr){ ?>
		<?php if($siparislerStlkStr){ ?>
        <h2 class="syfBslk">Geçmiş Siparişleriniz - Satın Alma</h2>
        <table class="siparisTablo" width="100%" border="0" cellspacing="1" cellpadding="10">
          <tr class="bslkTr">
            <td>Sipariş No</td>
            <td>Sipariş Türü</td>
            <td>Ürün Adı</td>
            <td>Adet</td>
            <td>Sipariş Adresi</td>
            <td>Sipariş Tarihi</td>
            <td align="right">Sipariş Tutarı</td>
          </tr>
            <?php echo $siparislerStlkStr; ?>
          <tr class="bslkTr">
            <td colspan="5"></td>
            <td align="right">Toplam Tutar : </td>
            <td align="right"><?php echo $toplamFiyat; ?> TL</td>
          </tr>
        </table>
        <?php } ?>


		<?php if($siparislerKrlkStr){ ?>
        <h2 class="syfBslk" style="margin-top:40px;">Geçmiş Siparişleriniz - Kiralama</h2>
        <table class="siparisTablo" width="100%" border="0" cellspacing="1" cellpadding="10">
          <tr class="bslkTr">
            <td>Sipariş No</td>
            <td>Sipariş Türü</td>
            <td>Ürün Adı</td>
            <td>Adet</td>
            <td>Sipariş Adresi</td>
            <td>Sipariş Tarihi</td>
          </tr>
            <?php echo $siparislerKrlkStr; ?>
        </table>
        <?php } ?>
    
<?php }else{ echo '<div class="alert alert-danger">Geçmişte size ait sipariş bulunmadı!</div>'; } ?>
	
</div>








</div>


