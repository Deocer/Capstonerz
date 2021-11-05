<?php 

class userdatabase{
	public $host = 'localhost';
	public $username ='root';
	public $password ='root';
	public $dbname = 'capstone';

	protected function insert($Username, $Pass, $Status){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	
		$stmt = $conn->prepare("INSERT INTO wuser (UserID, UserName, Pass, Status, Budget) SELECT MAX( UserID ) + 1, ?, ?, ?, '1' FROM wuser");
		$hasher_pwd = password_hash($Pass, PASSWORD_DEFAULT);
		$stmt->bind_param("sss", $Username, $hasher_pwd, $Status);
		$stmt->execute();
		$stmt->close();
	}


	protected function secloc ($Budget,$des,$district,$id){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$stmt = $conn->prepare("UPDATE wuser SET  Budget = ?, destype = ?, district = ? WHERE UserID = ? ");
		$stmt->bind_param("issi",$Budget,$des,$district,$id);
		$stmt->execute();
		$stmt->close();
	}

	protected function fetch($Username, $Pass){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM wuser WHERE Username = ? "; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("s", $Username);
		$stmt->execute();

		$result = $stmt->get_result();
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		$hash = $row[2];

		if (password_verify($Pass,$hash)) {
			return $data = $row;
			}


	}

	protected function verify($Username){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM wuser WHERE Username = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("s", $Username);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function selectAll(){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM wuser"; 
		$stmt = $conn->prepare($sql); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function selectNormal(){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM wuser WHERE Status = 'Normal' "; 
		$stmt = $conn->prepare($sql); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function selectFlagged(){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM wuser WHERE Status = 'Flagged' "; 
		$stmt = $conn->prepare($sql); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function setstat ($id){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	 
		$stmt = $conn->prepare("UPDATE wuser SET  Status = 'Flagged' WHERE UserID = ? ");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}

	protected function unstat ($id){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	 
		$stmt = $conn->prepare("UPDATE wuser SET  Status = 'Normal' WHERE UserID = ? ");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}

}

 ?>