<?php 
include 'Location_Card.php';

class RecomendedP{
	public $destination = array('','');
	public $lat  = array('','');
	public $lot  = array('','');
	public $pl = array();
	public $mk;


	public function locations($q,$lat,$lot) {
     $otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q='.$q.'&ll=@'.$lat.','.$lot.',17z&type=search&api_key=412f58d5afee3ae8a5100096b3cd67c93e5d61838d5e8391083d8f3bb034f40e');
			$near2 = json_decode($otherData, TRUE);

			for ($i=0; $i < 1; $i++) { 
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

	public function __construct($nm,$q,$lat,$lot) {
     $otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q='.$q.'&ll=@'.$lat.','.$lot.',10z&type=search&api_key=412f58d5afee3ae8a5100096b3cd67c93e5d61838d5e8391083d8f3bb034f40e');
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
