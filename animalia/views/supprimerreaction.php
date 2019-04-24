<?PHP
include "../core/reactionC.php";
$reactionC=new reactionC();
if (isset($_POST["id"])){
	$reactionC->supprimerreaction($_POST["id"]);
	header('Location: shop-detail-1.php');
}

?>