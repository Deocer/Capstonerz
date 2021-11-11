<?php 
class placedatabase{
	public $host = 'localhost';
	public $username ='root';
	public $password ='root';
	public $dbname = 'capstone';
	
	// Inserts a new place record in the places table
	protected function insert($name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city,$contact, $site){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
		$stmt = $conn->prepare("INSERT INTO places (Pname,Des, Lat, Lot, img, rating, reviews, type,price,hours,address,District,contact,site) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssssssssss",$name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city,$contact,$site);
		$stmt->execute();
		$stmt->close();
	}

	protected function update ($name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city,$contact, $site, $id){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$stmt = $conn->prepare("UPDATE places SET  Pname = ?, Des = ?, Lat = ?, Lot = ?, img = ?, rating = ?, reviews = ?, type = ?, price = ?, hours = ?, address = ?, District = ?, contact = ?, site = ?  WHERE PlaceID = ? ");
		$stmt->bind_param("ssssssssssssssi",$name,$des, $lat, $lot,$img,$rating,$reviews,$type,$price,$hours,$address,$city,$contact,$site,$id);
		$stmt->execute();
		$stmt->close();
	}

	protected function delete ($id){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$stmt = $conn->prepare("DELETE FROM places WHERE PlaceID = ? ");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}

   // Gets a place based on the provided name
	protected function fetch($name){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
		$sql = "SELECT * FROM places WHERE Pname = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("s", $name);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}
   // Recommends places aside from the current selected place
	protected function Recommend($name,$type){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname); 
		$sql = "SELECT * FROM places WHERE Pname <> ? AND type = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ss", $name,$type);
		$stmt->execute();

		$result = $stmt->get_result();
		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	// Queries all places based on the user's input on the starter page
	protected function fetchbyUserValue($district,$type,$price){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);

		if ($price == 1) {
			$sql = "SELECT * FROM places WHERE District =? ORDER BY (type = ?) DESC, price  ASC";
		}elseif ($price == 2) {
			$sql = "SELECT * FROM places WHERE District =? ORDER BY (type = ?) DESC, price ASC";
		}elseif ($price == 3) {
			$sql = "SELECT * FROM places WHERE District =? ORDER BY (type = ?) DESC, price DESC";
		}

		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ss",$district,$type);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}
 
    // Queries places based on a district and type 
	protected function fetchbytype($district,$type){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
		$sql = "SELECT * FROM places WHERE District =? AND type = ?"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ss",$district,$type);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}
	// Sorts the places by price. if the user wants expensive places the query adapts
	protected function SortbyPrice($district,$type,$price){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  

		if ($price == 1) {
			$sql = "SELECT * FROM places WHERE District =?  AND type = ? ORDER BY price ASC";
		}elseif ($price == 2) {
			$sql = "SELECT * FROM places WHERE District =?  AND type = ? ORDER BY price  ASC";
		}elseif ($price == 3) {
			$sql = "SELECT * FROM places WHERE District =?  AND type = ? ORDER BY price  DESC";
		}

		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ss",$district,$type);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	// Sorts the places by ascending price. 
	protected function AscSortbyPrice($district,$type,$price){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM places WHERE District =?  AND type = ? ORDER BY price  ASC";
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ss",$district,$type);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	// Sorts the places desending by price. 
	protected function DescSortbyPrice($district,$type,$price){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);	  
		$sql = "SELECT * FROM places WHERE District =?  AND type = ? ORDER BY price  DESC";
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ss",$district,$type);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}


	// Actually sorts the places based on the number of reviews
	protected function SortbyRating($district,$type){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
		$sql = "SELECT * FROM places WHERE District =? AND type = ? ORDER BY Reviews DESC LIMIT 20"; 
		$stmt = $conn->prepare($sql); 
		$stmt->bind_param("ss",$district,$type);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	//Selects all places in the place table and is ordered by id
	protected function select(){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname); 
		$sql = "SELECT * FROM places ORDER BY PlaceID  DESC"; 
		$stmt = $conn->prepare($sql); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);
	}

	//Selects all the names of the  place in the table
	protected function placename(){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
		$sql = "SELECT Pname FROM places"; 
		$stmt = $conn->prepare($sql); 
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);


	}

	protected function SearchPlace($name){
		$conn = mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
		$sql = "SELECT * FROM places WHERE Pname LIKE '".$name."%' "; 
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$result = $stmt->get_result();

		return $data = $result->fetch_all(MYSQLI_ASSOC);


	}




}

 ?>