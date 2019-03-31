<?PHP
class Comm{
	private $name;
	private $login;
	private $comment;

	function __construct($name,$login,$comment){
		$this->name=$name;
		$this->login=$login;
		$this->comment=$comment;
		
	}
	
	function getname(){
		return $this->name;
	}
	function getlogin(){
		return $this->login;
	}
	function getcomment(){
		return $this->comment;
	}
	

	function setname($name){
		$this->name=$name;
	}
	function setemail($login){
		$this->login=$login;
	}
	function setcomment($comment){
		$this->comment=$comment;
	}
	
}

?>