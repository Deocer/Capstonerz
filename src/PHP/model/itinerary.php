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

	protected function insert($name,$des, $lat, $lot,$img, $id){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO itinerary (PlaceName,Des, lat, lot, img,UserID) VALUES (?, ?,?,?,?,?)");
		$stmt->bind_param("sssssi", $name,$des, $lat, $lot,$img, $id);
		$stmt->execute();
		echo 'added';
		$stmt->close();
		header("location:../../pages/user/user.php");
	}

	protected function fetch($id){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM itinerary WHERE UserID = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $id);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

		protected function Recfetch($lat,$lot,$mlat,$mlot){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM itinerary WHERE lat BETWEEN  ? AND ?  AND lot BETWEEN  ? AND ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $id);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

}

 ?>