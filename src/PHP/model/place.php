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

	protected function insert($name,$des, $lat, $lot,$img){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO places (Pname,Des, Lat, Lot, img) VALUES (?,?,?,?,?)");
		$stmt->bind_param("sssss", $name,$des, $lat, $lot,$img);
		$stmt->execute();
		$stmt->close();
	}

	protected function fetch($name){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM places WHERE Pname = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("s", $name);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}


}

 ?>