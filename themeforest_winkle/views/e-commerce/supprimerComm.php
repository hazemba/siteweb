<?PHP
include "C:/wamp64/www/themeforest_winkle/core/CommC.php";
$commC=new CommC();
if (isset($_POST["login"])){
	$commC->supprimerComm($_POST["login"]);
	header('Location: blank.php');
}

?>