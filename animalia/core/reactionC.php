<?PHP
include "../config.php";
class reactionC {
function afficherreaction ($reaction){
                echo "id: ".$reaction->getid()."<br>";
                echo "type: ".$reaction->gettype()."<br>";
               
        }
       
        function ajouterreaction($reaction){
                $sql="insert into reaction (id,type) values (:id, :type)";
                $db = config::getConnexion();
                try{
        $req=$db->prepare($sql);
                
        $id=$reaction->getid();
        $type=$reaction->gettype();
        
                $req->bindValue(':id',$id);
                $req->bindValue(':type',$type);

               
                
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
                
        }
        
        function afficherreactions(){
                //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
                $sql="SElECT * From reaction";
                $db = config::getConnexion();
                try{
                $liste=$db->query($sql);
                return $liste;
                }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }       
        }
        function supprimerreaction($id){
                $sql="DELETE FROM reaction where id= :id";
                $db = config::getConnexion();
        $req=$db->prepare($sql);
                $req->bindValue(':id',$id);
                try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
        function modifierreaction($reaction,$id){
                $sql="UPDATE reaction SET id=:id, type=:typen WHERE id=:id";
                
                $db = config::getConnexion();
                //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{            
        
        $req=$db->prepare($sql);
        $type=$reaction->gettype();
        $typen=$reaction->gettype();
        $id=$reaction->getid();
        
                $datas = array(':id'=>$id, ':typen'=>$typen,':type'=>$type);
                $req->bindValue(':typen',$typen);
                $req->bindValue(':id',$id);
                $req->bindValue(':type',$type);
                
                
                
            $s=$req->execute();
                        
       
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
                
        }
        function recupererreaction($id){
                $db = config::getConnexion();
                $sql="SELECT * from reaction where id=($id)" ;
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