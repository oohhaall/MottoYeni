<!--PAGE TITLE-->

<?php $km = $DB->qry('SELECT * FROM kurumsal WHERE id='.$DB->str($_GET['pno'],'int'),4);?>

<div class="page-title">

</div>


<div class="container padding">
  	<div class="left_menu">
    	<h3>Hakkımızda</h3>
        <div class="menu_list">
        	  <?php echo $kurumsalMenuStr; ?>
        </div>
    </div>
    
    
    <div class="right_content">
    
        <div class="page_name">
            <a href="#">Ana sayfa</a> >
            <a href="#">Hakkımızda</a> >
            <a href="#"><?php echo $km['baslik']; ?></a>
        </div>
    	
        <div class="page-ics">

<?php echo $km['icerik']; ?>

        
        
        
        </div>
        
        
    </div>



      	
</div>






<!--PAGE TITLE-->