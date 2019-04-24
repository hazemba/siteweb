<HTML>
<head>
  <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
  <!-- Custom CSS -->
  <link href="../css/style.css" rel='stylesheet' type='text/css'/>
  <!-- Graph CSS -->
  <link href="../css/font-awesome.css" rel="stylesheet">
  <!-- jQuery -->
  <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
  <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <!-- lined-icons -->
  <link rel="stylesheet" href="css/icon-font.min.css" type="text/css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Shop Detail 1 | HTML Commerce Template</title>
    <link rel="shortcut icon" href="images/favicon.ico">

    <link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/swatches-and-photos.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/jquery.selectBox.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/commerce.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/custom.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/magnific-popup.css' type='text/css' media='all'/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>
    
 <body>

<?PHP
include "../entities/reaction.php";
include "../core/reactionC.php";
if (isset($_GET['id'])){
	$reactionC=new reactionC();
    $result=$reactionC->recupererreaction($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$type=$row['type'];
		
?>

<form method="POST">
<table class="table">
<caption>Modifier Reaction</caption>
<tr>
<td>Id</td>
<td><input type="text" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Type</td>
<td>
                                        <select type="text" name="type" value="<?PHP echo $type ?>">
                                          <option>j'aime</option>
                                          <option>je n'aime pas</option>
                                        </select>
                                        </td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$reaction=new reaction($_POST['id'],$_POST['type']);
	$reactionC->modifierreaction($reaction,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header ("Location: shop-detail-1.php");
}
?>
</body>
</html>
