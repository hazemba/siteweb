<?PHP
class reaction{
	private $id;
	private $type;
	

	function __construct($id,$type){
		$this->id=$id;
		$this->type=$type;
		
	}
	
	
	function getid(){
		return $this->id;
	}
	function gettype(){
		return $this->type;
	}
	

	function setid($id){
		$this->id=$id;
	}
	function settype($type){
		$this->type=$type;
	}
	
	
}

?>