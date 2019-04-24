<?PHP
include "../core/reactionC.php";
$reaction1C=new reactionC();
$listereaction=$reaction1C->afficherreactions();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>Type</td>
</tr>

<?PHP
foreach($listereaction as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><form method="POST" action="supprimerreaction.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierreaction.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
