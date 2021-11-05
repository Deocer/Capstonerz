<?php 
class postdatabase{

	public $host = 'localhost';
	public $username ='root';
	public $password ='root';
	public $dbname = 'capstone';

	protected function insert($title, $cont, $id, $name){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);  
		$stmt = $conn->prepare("INSERT INTO post (PostTitle, Cont, UserID, Username) VALUES (?, ?,?,?)");
		$stmt->bind_param("ssis", $title, $cont, $id,$name);
		$stmt->execute();
		$stmt->close();
	}

	protected function delete($id){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname); 
		$stmt = $conn->prepare("UPDATE post SET  Status = 'Archived' WHERE PostID  = ?");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}

	protected function Userdelete($id){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname); 
		$stmt = $conn->prepare("UPDATE post SET  Status = 'Deleted' WHERE PostID  = ?");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}

	protected function restore($id){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$stmt = $conn->prepare("UPDATE post SET  Status = 'Active' WHERE PostID  = ?");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}

	protected function paneinsert($src, $id, $name){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
		$stmt = $conn->prepare("INSERT INTO panes (Datum, PostID, PostName) VALUES (?,?,?)");
		$stmt->bind_param("sis", $src, $id, $name);
		$stmt->execute();
		$stmt->close();
	}

	protected function fetchPost(){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$stmt = $conn->prepare("SELECT * FROM post WHERE Status  = 'Active' ORDER BY PostID DESC LIMIT 10");
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);

	}

	protected function fetchArchive(){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname); 
		$stmt = $conn->prepare("SELECT * FROM post WHERE Status  = 'Archived' ORDER BY PostID DESC");
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);

	}


	protected function fetchUser($UserID){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);  
		$sql = "SELECT * FROM post WHERE UserID = ? AND Status  = 'Active'"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $UserID);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function fetchUserArchive($UserID){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM post WHERE UserID = ? AND Status  = 'Archived'"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $UserID);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function Active(){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM post WHERE Status  = 'Active'"; 
		$stmt = $conn->prepare($sql); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}
	protected function Archived(){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM post WHERE Status  = 'Archived'"; 
		$stmt = $conn->prepare($sql); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function Deleted(){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM post WHERE Status  = 'Deleted'"; 
		$stmt = $conn->prepare($sql); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function fetchPop($UserID,$title,$cont,$name){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);  
		$sql = "SELECT * FROM post WHERE UserID = ? AND PostTitle = ? AND Cont = ? AND UserName = ? AND Status = 'Active'"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("isss", $UserID,$title,$cont,$name);
		$stmt->execute();

		$result = $stmt->get_result();
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		return $hash = $row[0];
	}

	protected function fetchPic($id){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);  
		$sql = "SELECT datum FROM panes WHERE PostID = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $id);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}


		protected function fetchTag($Tag){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);  
		$sql = "SELECT * FROM post WHERE Tag = ? AND Status = 'Active'"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("s", $Tag);
		$stmt->execute();
		$result = $stmt->get_result(); // get the mysqli result
		$user = $result->fetch_assoc(); // fetch data 

		return $result;	
	}

		protected function fetchRating($Rating){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM post WHERE Rating = ? AND Status = 'Active' "; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $Rating);
		$stmt->execute();
		$result = $stmt->get_result(); // get the mysqli result
		$user = $result->fetch_assoc(); // fetch data 

		return $result;	
	}


	protected function flag($id, $pid){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
		$stmt = $conn->prepare("INSERT INTO pflags (UserID, PostID) VALUES (?, ?)");
		$stmt->bind_param("ii", $id, $pid);
		$stmt->execute();
		$stmt->close();
	}

	
	protected function fetchflag($PostID){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname); 
		$sql = "SELECT * FROM pflags WHERE PostID = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("i", $PostID);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function verifyflag($id, $pid){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname); 
		$sql = "SELECT * FROM pflags WHERE UserID = ? AND PostID =?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ii", $id, $pid);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function flagUser($id){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);  
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