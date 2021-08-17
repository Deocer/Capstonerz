<?php 
include 'Location_Card.php';

class RecomendedP{
	public $destination = array('','');
	public $lat  = array('','');
	public $lot  = array('','');
	public $pl = array();
	public $mk;


	public function locations($lat,$lot) {
     $otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q=landmarks&ll=@'.$lat.','.$lot.',17z&type=search&api_key=2c4e818b119f764c82c357fe4f6e96a989625722d02d1d53e5c24216a188c3d9');
			$near2 = json_decode($otherData, TRUE);

			for ($i=0; $i < 3; $i++) { 
				$this->destination[$i] = $near2['local_results'][$i]['title'];
				$this->lat[$i] = $near2['local_results'][$i]['gps_coordinates']['latitude'];
				$this->lot[$i] = $near2['local_results'][$i]['gps_coordinates']['longitude'];

				$mk = new Place_Box();
				$mk->getLoc(str_replace(' ','%20',$this->destination[$i]),$this->lat[$i],$this->lot[$i]);


			}

  	}

  	public function getimg()
	{
		return $this->destination;
	}

	public function createlist()
	{

	}

}



class NearbyP{
	public $destination = array('','');
	public $lat  = array('','');
	public $lot  = array('','');

	public function __construct($nm,$lat,$lot) {
     $otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q=tourist_landmark&ll=@'.$lat.','.$lot.',10z&type=search&api_key=2c4e818b119f764c82c357fe4f6e96a989625722d02d1d53e5c24216a188c3d9');
			$near2 = json_decode($otherData, TRUE);

			for ($i=0; $i < 1; $i++) 
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
					 
				

				$pl = new Place_Box();
				$pl->getLoc(str_replace(' ','%20',$this->destination[$i]),$this->lat[$i],$this->lot[$i]);


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
