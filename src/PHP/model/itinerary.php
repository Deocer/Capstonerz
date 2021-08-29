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

	protected function insert($name,$id,$pname){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO itinerary (PlaceName,UserID,Pname) VALUES (?,?,?)");
		$stmt->bind_param("sis", $name,$id,$pname);
		$stmt->execute();
		$stmt->close();
		echo "inserted";
		header("location:../../pages/user/itinerary.php");
		exit();
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