<?php 
include 'Location_Card.php';

class RecomendedP{
	public $destination = array('','');
	public $lat  = array('','');
	public $lot  = array('','');

	public function __construct($lat,$lot) {
     $otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q=tourist_attraction&ll=@'.$lat.','.$lot.',14z&type=search&api_key=8a87e73f3aeb43182c76b9a78233ece1af910d9108e8d63a72b82bc1b7218b2f');
			$near2 = json_decode($otherData, TRUE);

			for ($i=0; $i < 3; $i++) { 
				$this->destination[$i] = $near2['local_results'][$i]['title'];
				$this->lat[$i] = $near2['local_results'][$i]['gps_coordinates']['latitude'];
				$this->lot[$i] = $near2['local_results'][$i]['gps_coordinates']['longitude'];

				$pl = new Place_Box(str_replace(' ','%20',$this->destination[$i]),$this->lat[$i],$this->lot[$i]);

			}
  	}

  	public function getimg()
	{
		return $this->destination;
	}

	public function createlist()
	{
		foreach ($this->destination as $result){
				$pl = new Place_Box(str_replace(' ','%20',$result));
			}
	}

}



class NearbyP{
	public $destination = array('','');
	public $lat  = array('','');
	public $lot  = array('','');

	public function __construct($nm,$lat,$lot) {
     $otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q=tourist_attraction_&ll=@'.$lat.','.$lot.',21z&type=search&api_key=8a87e73f3aeb43182c76b9a78233ece1af910d9108e8d63a72b82bc1b7218b2f');
			$near2 = json_decode($otherData, TRUE);

			for ($i=0; $i < 3; $i++) 
			{
					if ($near2['local_results'][$i]['title'] != $nm) {
					 	$this->destination[$i] = $near2['local_results'][$i]['title'];
					 	$this->lat[$i] = $near2['local_results'][$i]['gps_coordinates']['latitude'];
						$this->lot[$i] = $near2['local_results'][$i]['gps_coordinates']['longitude'];
					 }
					 else{
					 	$this->destination[$i] ='Cosset Corporation';
					 	$this->lat[$i] ='ewqeq';
					 	$this->lot[$i] ='ewqeqw';
					 } 
					 
				

				$pl = new Place_Box(str_replace(' ','%20',$this->destination[$i]),$this->lat[$i],$this->lot[$i]);

			}
  	}

  	public function getimg()
	{
		return $this->destination;
	}

	public function createlist()
	{
		foreach ($this->destination as $result){
				$pl = new Place_Box(str_replace(' ','%20',$result));
			}
	}
	

}
 ?>
