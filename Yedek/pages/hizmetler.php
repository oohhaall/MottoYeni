<!--PAGE TITLE-->
<?php $km = $DB->qry('SELECT * FROM hizmetler WHERE id='.$DB->str($_GET['pno'],'int'),4);?>


<div class="page-title page_title_two">

</div>


<div class="container padding">
  	<div class="left_menu">
    	<h3>Hizmetler</h3>
        <div class="menu_list">
        	<?php echo $hizmetlerMenuStr; ?>
        </div>
    </div>
    
    
    <div class="right_content">
    
        <div class="page_name">
            <a href="#">Ana sayfa</a> >
            <a href="#">Hizmetler</a> >
          <a href="#"><?php echo $km['baslik']; ?></a>
        </div>
    	
        <div class="page-ics">

<?php echo $km['icerik']; ?>
</h3>



 

 
   

      
        </div>
        
        
    </div>



      	
</div>






<!--PAGE TITLE-->