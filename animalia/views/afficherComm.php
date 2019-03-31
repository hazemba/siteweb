<?PHP
include "../core/CommC.php";
$comm1C=new CommC();
$listeComm=$comm1C->afficherComms();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Name</td>
<td>Login</td>
<td>Comment</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeComm as $row){
	?>
	<tr>
	<td><?PHP echo $row['name']; ?></td>
	<td><?PHP echo $row['login']; ?></td>
	<td><?PHP echo $row['comment']; ?></td>
	<td><form method="POST" action="supprimerComm.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['login']; ?>" name="login">
	</form>
	</td>
	<td><a href="modifierComm.php?login=<?PHP echo $row['login']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
