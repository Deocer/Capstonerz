<?php 

class database{

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

	protected function insert($Username, $Pass, $Lat, $Lot){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO wuser (UserName, Pass, Lat, Lot) VALUES (?, ?, ?,?)");
		$hasher_pwd = password_hash($Pass, PASSWORD_DEFAULT);
		$stmt->bind_param("ssss", $Username, $hasher_pwd, $Lat, $Lot);
		$stmt->execute();
		$stmt->close();
	}


	protected function secloc ($Lat, $Lot,$id){
		echo 'saxa';
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("UPDATE wuser SET Lat = ?,Lot = ? WHERE UserID = ? ");
		$stmt->bind_param("ssi",$Lat, $Lot,$id);
		$stmt->execute();

		$_SESSION['lat'] = $Lat;
		$_SESSION['lot'] = $Lot;

		$stmt->close();
		header("location:../../pages/user/user.php");
		exit();
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
}

 ?>

