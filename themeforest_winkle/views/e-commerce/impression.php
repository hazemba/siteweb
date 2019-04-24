<!DOCTYPE html>
<html lang="en">
<head>
   

	<!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<?PHP
include "C:/wamp64/www/themeforest_winkle/core/CommC.php";



$comm1C=new CommC();
$db=config::getconnexion();

if(isset($_POST['tri']))
{
	$listeComm=$db->query("SELECT * FROM `commentaire` ORDER BY `commentaire`.`login` ASC");
}
else if(isset($_POST['tria']))
{
	$listeComm=$db->query("SELECT * FROM `commentaire` ORDER BY `commentaire`.`login` DESC");
	
}
else 

$listeComm=$comm1C->afficherComms();

?>

<body id="target" onload="window.print()">
	
<div class="page-wrapper">
            <div class="container-fluid">
	<table class="table">
<tr>
<td style="width: 10%">Name</td>
<td style="width: 10%">Login</td>
<td style="width: 20%">Comment</td>
</tr>

<?PHP
foreach($listeComm as $row){
	?>
	<tr>
	<td><?PHP echo $row['name']; ?></td>
	<td><?PHP echo $row['login']; ?></td>
	<td><?PHP echo $row['comment']; ?></td>
	</tr>
	<?PHP
}
?>
</table>
</div>
</div>
</body>
</html>