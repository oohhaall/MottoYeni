<?php
require_once('inc/ayar.php');
//require_once('inc.class/qryClass.php');

?>
<?php $km = $DB->qry('SELECT * FROM musteri WHERE id='.$DB->str($_GET['pno'],'int'),4);?>
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
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<link rel="stylesheet" href="css/animate.css"><!--SLAYT-->
<?php include('inc/ust.php')?>


<div class="page-title page-title_three">

</div>


 
	<div class="container container-bottom" align="center">
    <div class="left">
        <div class="page_name">
            <a href="#">Ana sayfa</a> >
            <a href="#">Müşteri Yorumları</a>
        </div>
	</div>
    <div class="clear"></div>





	<?php echo $musteriStr; ?>

	


	






    
 <div class="clear"></div>   
    
	</div>

<div class="clear"></div>



<?php include('inc/alt.php')?>




<!--PAGE TITLE-->