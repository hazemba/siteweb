<?PHP
include "../entities/reaction.php";
include "../core/reactionC.php";

if (isset($_POST['idr']) and isset($_POST['type']) ){
$reaction1=new reaction($_POST['idr'],$_POST['type']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reaction1C=new reactionC();
$reaction1C->ajouterreaction($reaction1);
header('Location: shop-detail-1.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>