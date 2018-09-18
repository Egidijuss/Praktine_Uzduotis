<?php include("init.php"); ?>

<?php  

if(empty($_GET['id'])){
	redirect("uzsakymai.php");
}

$auto = Auto::find_auto_by_id($_GET['id']);

if($auto) {
	$auto->delete();
	redirect("uzsakymai.php");
} else {
	redirect("uzsakymai.php");
}
?>