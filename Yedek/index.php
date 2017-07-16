<?php require_once "inc/ust.php"; ?>

<?php 
 
if(isset($_GET["page"]) && file_exists("pages/".$_GET["page"].".php")){
	$get_page = $_GET["page"];
		require_once "pages/".$_GET["page"].".php";
}else{
	$get_page = "index";
	require_once "pages/index.php";
	
}


?>
<script type="text/javascript">
		var page_uri = "<?php echo "index.php?page=".$get_page; ?>";
</script>
<?php require_once "inc/alt.php"; ?>