<?php 
class reviewdatabase{

	public $host = 'localhost';
	public $username ='root';
	public $password ='root';
	public $dbname = 'capstone';

	protected function insert($place, $cont,$rating, $id, $name){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);  	  
		$stmt = $conn->prepare("INSERT INTO review (Place, Cont, Rating, UserID, Username) VALUES ( ?,?,?,?,?)");
		$stmt->bind_param("sssis", $place, $cont,$rating, $id, $name);
		$stmt->execute();
		$stmt->close();
	}

	protected function delete($id){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);  
		$stmt = $conn->prepare("DELETE FROM  review WHERE ReviewID  = ?");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}


	protected function fetch($nm){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);    
		$stmt = $conn->prepare("SELECT * FROM review  WHERE Place = ? ORDER BY ReviewID DESC LIMIT 20");
		$stmt->bind_param("s",$nm);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);

	}

	protected function fetchUser($UserID){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);   
		$sql = "SELECT * FROM post WHERE UserID = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $UserID);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}
}

 ?>