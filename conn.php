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
		echo 'pasok';
		}
	}

	public function insert($Username, $Pass, $Lat, $Lot){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO WUser (UserName, Pass, Lat, Lot) VALUES (?, ?, ?,?)");
		$stmt->bind_param("ssss", $Username, $Pass, $Lat, $Lot);
		$stmt->execute();
		echo "New record created successfully";
		$stmt->close();
	}

	public function fetch($Username, $Pass){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM WUser WHERE Username = ? AND Pass = ? "; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ss", $Username, $Pass);
		$stmt->execute();
		$result = $stmt->get_result(); // get the mysqli result
		$user = $result->fetch_assoc(); // fetch data 

		foreach($user as $r){
			echo $r;
		}

		return $result;	
	}
}

$des = new database();
//$des->insert('Deocer', 'Morales', '14.5995', '120.9842');
$des->fetch('Deocer', 'Morales');

?>