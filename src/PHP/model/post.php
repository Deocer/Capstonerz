<?php 


class postdatabase{

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

	protected function insert($title, $cont, $tag, $rating, $id, $name){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO post (PostTitle, Cont, Tag, Rating, UserID, Username) VALUES (?, ?,?,?,?,?)");
		$stmt->bind_param("sssiis", $title, $cont, $tag, $rating, $id,$name);
		$stmt->execute();
		$stmt->close();
	}

	protected function delete($id){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("DELETE FROM  post WHERE PostID  = ?");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}

	protected function paneinsert($src, $id, $name){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO panes (Datum, PostID, PostName) VALUES (?,?,?)");
		$stmt->bind_param("sis", $src, $id, $name);
		$stmt->execute();
		$stmt->close();
	}

	protected function fetchPost(){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("SELECT * FROM post  ORDER BY PostID DESC LIMIT 25");
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

	protected function fetchPop($UserID,$title,$name){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM post WHERE UserID = ? AND PostTitle = ? AND UserName = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("iss", $UserID,$title,$name);
		$stmt->execute();

		$result = $stmt->get_result();
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		return $hash = $row[0];
	}

	protected function fetchPic($id){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT datum FROM panes WHERE PostID = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $id);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}


		protected function fetchTag($Tag){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM post WHERE Tag = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("s", $Tag);
		$stmt->execute();
		$result = $stmt->get_result(); // get the mysqli result
		$user = $result->fetch_assoc(); // fetch data 

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

		return $result;	
	}


	protected function flag($id, $pid){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$stmt = $conn->prepare("INSERT INTO pflags (UserID, PostID) VALUES (?, ?)");
		$stmt->bind_param("ii", $id, $pid);
		$stmt->execute();
		$stmt->close();
	}

	
	protected function fetchflag($PostID){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM pflags WHERE PostID = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $PostID);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function verifyflag($id, $pid){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT * FROM pflags WHERE UserID = ? AND PostID =?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ii", $id, $pid);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function flagUser($id){
		$conn = mysqli_connect('localhost','root','root','capstone');
		$sql = "SELECT TrnsID FROM pflags INNER JOIN post ON post.UserID = ? "; 
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("i", $id); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}
}

/*

FROM ((post
INNER JOIN pflags ON pflags.PostID = post.PostID)
INNER JOIN wusers ON post.UserID = wusers.UserID);
*/
 ?>