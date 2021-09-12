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

	protected function insert($name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO places (Pname,Des, Lat, Lot, img, rating, reviews, type,price,hours,address,City) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssssssss",$name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city);
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


	protected function rec($type,$city){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM places WHERE type = ? AND City = ? ORDER BY reviews DESC LIMIT 25"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ss",$type,$city);
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