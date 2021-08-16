<?php 

class database{

	public function __construct(){
		$conn = mysqli_connect('localhost','root','root','capstone');

		// Check connection
		if(mysqli_connect_errno())
		{
		echo 'fain in display' .
		mysqli_connect_error();
		}
		else{
		echo '';
		}
	}

	protected function insert($Username, $Pass, $Lat, $Lot){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO WUser (UserName, Pass, Lat, Lot) VALUES (?, ?, ?,?)");
		$stmt->bind_param("ssss", $Username, $Pass, $Lat, $Lot);
		$stmt->execute();
		echo "New record created successfully";
		$stmt->close();
	}


	protected function secloc ($Lat, $Lot,$id){
		echo 'saxa';
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("UPDATE WUser SET Lat = ?,Lot = ? WHERE UserID = ? ");
		$stmt->bind_param("ssi",$Lat, $Lot,$id);
		$stmt->execute();
		echo "Location Set";

		$_SESSION['lat'] = $Lat;
		$_SESSION['lot'] = $Lot;

		$stmt->close();
		header("location:../../pages/user/user.php");
	}

	protected function fetch($Username, $Pass){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM WUser WHERE Username = ? AND Pass = ? "; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ss", $Username, $Pass);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

		protected function verify($Username){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM WUser WHERE Username = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("s", $Username);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}
}

 ?>