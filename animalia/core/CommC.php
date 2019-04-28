<?PHP

include "reactionC.php";
class CommC {
function afficherComm ($comm){
                echo "name: ".$comm->getname()."<br>";
                echo "login: ".$comm->getlogin()."<br>";
                echo "comment: ".$comm->getcomment()."<br>";
               
        }
       
        function ajouterComm($comm){
                $db = config::getConnexion();
                  $sql="insert into commentaire (name,login,comment) values (:name, :login,:comment)";
                    
                    try{
        $req=$db->prepare($sql);
                
        $name=$comm->getname();
        $login=$comm->getlogin();
        $comment=$comm->getcomment();
        
                $req->bindValue(':name',$name);
                $req->bindValue(':login',$login);
                $req->bindValue(':comment',$comment);
            

            
               
     
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
                
        }
        
        function afficherComms(){
                //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
                $sql="SElECT * From commentaire";
                $db = config::getConnexion();
                try{
                $liste=$db->query($sql);
                return $liste;
                }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }       
        }
        function supprimerComm($login){
                $sql="DELETE FROM commentaire where login= :login";
                $db = config::getConnexion();
        $req=$db->prepare($sql);
                $req->bindValue(':login',$login);
                try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
        function modifierComm($comm,$login){
                $sql="UPDATE commentaire SET name=:name, login=:login,comment=:commentn WHERE login=:login";
                
                $db = config::getConnexion();
                //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{            
        $req=$db->prepare($sql);
        $commentn=$comm->getcomment();
        $comment=$comm->getcomment();
        $name=$comm->getname();
        $login=$comm->getlogin();
        
                $datas = array(':name'=>$name, ':login'=>$login,':commentn'=>$commentn,':comment'=>$comment);
                $req->bindValue(':commentn',$commentn);
                $req->bindValue(':name',$name);
                $req->bindValue(':login',$login);
                $req->bindValue(':comment',$comment);
                
                
                
            $s=$req->execute();
                        
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
                
        }
        function recupererComm($login){
                $db = config::getConnexion();
                $sql="SELECT * from commentaire where login=($login)" ;
                try{
                $liste=$db->query($sql);
                return $liste;
                }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
       
}

?>