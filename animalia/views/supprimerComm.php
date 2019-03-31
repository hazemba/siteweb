<?PHP
include "../core/commC.php";
$commC=new CommC();
if (isset($_POST["login"])){
	$commC->supprimerComm($_POST["login"]);
	header('Location: shop-detail-1.php');
}

?>