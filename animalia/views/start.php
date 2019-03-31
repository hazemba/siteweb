<?PHP
include "../entities/comm.php";
include "../core/commC.php";
$employe=new Comm(75757575,2,758);
$employerC=new CommC();
$employerC->afficherComm($comm);
echo "****************";
echo "<br>";
echo "name:".$comm->getname();
echo "<br>";
echo "login:".$comm->getlogin();
echo "<br>";
echo "comment:".$comm->getcomment();
echo "<br>";
?>