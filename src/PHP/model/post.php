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

	protected function insert($title, $cont, $tag, $rating, $id){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO post (PostTitle, Cont, Tag, Rating, UserID) VALUES (?, ?,?,?,?)");
		$stmt->bind_param("sssii", $title, $cont, $tag, $rating, $id);
		$stmt->execute();
		echo "Post created successfully";
		$stmt->close();
	}

	protected function fetchPost(){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("SELECT * FROM post");
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
		$result = $stmt->get_result(); // get the mysqli result
		$user = $result->fetch_assoc(); // fetch data 

		foreach($user as $r){
			echo $r;
		}

		return $result;	
	}


		protected function fetchTag($Tag){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM post WHERE Tag = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("s", $Tag);
		$stmt->execute();
		$result = $stmt->get_result(); // get the mysqli result
		$user = $result->fetch_assoc(); // fetch data 

		foreach($user as $r){
			echo $r;
		}

		return $result;	
	}

		protected function fetchRating($Rating){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM post WHERE Rating = ? "; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $Rating);
		$stmt->execute();
		$result = $stmt->get_result(); // get the mysqli result
		$user = $result->fetch_assoc(); // fetch data 

		foreach($user as $r){
			echo $r;
		}

		return $result;	
	}
}

 ?>