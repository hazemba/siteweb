<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/comm.php";
include "../core/commC.php";
if (isset($_GET['login'])){
	$commC=new CommC();
    $result=$commC->recupererComm($_GET['login']);
	foreach($result as $row){
		$name=$row['name'];
		$login=$row['login'];
		$comment=$row['comment'];
		
?>
<form method="POST">
<table>
<caption>Modifier Commentaire</caption>
<tr>
<td>Name</td>
<td><input type="text" name="name" value="<?PHP echo $name ?>"></td>
</tr>
<tr>
<td>Login</td>
<td><input type="text" name="login" value="<?PHP echo $login ?>"></td>
</tr>
<tr>
<td>Comment</td>
<td><input type="text" name="comment" value="<?PHP echo $comment ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="login_ini" value="<?PHP echo $_GET['login'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$comm=new comm($_POST['name'],$_POST['login'],$_POST['comment']);
	$commC->modifierComm($comm,$_POST['login_ini']);
	echo $_POST['login_ini'];
	header('Location: shop-detail-1.php');
}
?>
</body>
</HTMl>