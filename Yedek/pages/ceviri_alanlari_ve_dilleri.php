<!--PAGE TITLE-->

<?php $km = $DB->qry('SELECT * FROM ceviri  WHERE id='.$DB->str($_GET['pno'],'int'),4);?>

<div class="page-title page-title-four"></div>




<div class="container padding">



  <div class="accordion mobil-sol-menu">
    <div class="menu-head">
      <h3>Çeviri Dilleri</h3>
      <div class="plus-minus">
       <i class="fa fa-plus" aria-hidden="true"></i>
      </div>
    </div>
    		<div class="data">
        	 <?php echo $ceviriMenuStr; ?>
            </div>
  </div>


  	<div class="left_menu menu_list_none">
    	<h3>Çeviri Dilleri</h3>
        <div class="menu_list">
        	 <?php echo $ceviriMenuStr; ?>
        </div>
    </div>
    
    
    <div class="right_content">
    
        <div class="page_name">
            <a href="#">Ana sayfa</a> >
            <a href="#">Çevri Alanları ve Dilleri</a> >
             <a href="#"><?php echo $km['baslik']; ?></a>
        </div>
    	
        <div class="page-ics">

<?php echo $km['icerik']; ?>
        
        
        
        </div>
        
        
    </div>



      	
</div>






<!--PAGE TITLE-->