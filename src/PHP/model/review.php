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

	protected function insert($place, $cont,$rating, $id, $name){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO review (Place, Cont, Rating, UserID, Username) VALUES ( ?,?,?,?,?)");
		$stmt->bind_param("sssis", $place, $cont,$rating, $id, $name);
		$stmt->execute();
		$stmt->close();
	}

	protected function delete($id){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("DELETE FROM  review WHERE ReviewID  = ?");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}


	protected function fetch($nm){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("SELECT * FROM review  WHERE Place = ? ORDER BY ReviewID DESC LIMIT 20");
		$stmt->bind_param("s",$nm);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);

	}

	protected function fetchUser($UserID){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM post WHERE UserID = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $UserID);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}
}

 ?>