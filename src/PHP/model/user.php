<?php 

class userdatabase{

	public function __construct(){
		$conn = mysqli_connect('localhost','root','root','capstone');

		// Check connection
		if(mysqli_connect_errno())
		{
		mysqli_connect_error();
		}
		else{
		}
	}

	protected function insert($Username, $Pass, $Status){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO wuser (UserName, Pass, Status) VALUES (?, ?, ?)");
		$hasher_pwd = password_hash($Pass, PASSWORD_DEFAULT);
		$stmt->bind_param("sss", $Username, $hasher_pwd, $Status);
		$stmt->execute();
		$stmt->close();
	}


	protected function secloc ($Budget,$des,$district,$id){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("UPDATE wuser SET  Budget = ?, destype = ?, district = ? WHERE UserID = ? ");
		$stmt->bind_param("sssi",$Budget,$des,$district,$id);
		$stmt->execute();

		$_SESSION['lat'] = $Lat;
		$_SESSION['lot'] = $Lot;

		$stmt->close();
	}

	protected function fetch($Username, $Pass){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM wuser WHERE BINARY Username = ? "; 
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
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM wuser WHERE Username = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("s", $Username);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function selectAll(){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM wuser"; 
		$stmt = $conn->prepare($sql); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function setstat ($id){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("UPDATE wuser SET  Status = 'Flagged' WHERE UserID = ? ");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}

	protected function unstat ($id){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("UPDATE wuser SET  Status = 'Normal' WHERE UserID = ? ");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}

}

 ?>

