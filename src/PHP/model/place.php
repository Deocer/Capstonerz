<?php 
class data{

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

	protected function insert($name,$des, $lat, $lot,$img,$rating,$type,$price,$hours,$address){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO places (Pname,Des, Lat, Lot, img, rating, type,price,hours,address) VALUES (?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssssss", $name,$des, $lat, $lot,$img,$rating,$type,$price,$hours,$address);
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

	protected function rec($lat,$lot){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM places WHERE Lat BETWEEN ? AND ? AND Lot BETWEEN ? AND ?"; 
		$stmt = $conn->prepare($sql); 
		$lat1 = $lat +1;
		$lot1 = $lot +1;
		$stmt->bind_param("ssss", $lat,$lat1,$lot,$lot1);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function select(){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM places ORDER BY PlaceID DESC LIMIT 20"; 
		$stmt = $conn->prepare($sql); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function placename(){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT Pname FROM places"; 
		$stmt = $conn->prepare($sql); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);


	}




}

 ?>