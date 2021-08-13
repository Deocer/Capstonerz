<?php 
include 'Location_Card.php';

class RecomendedP{
	public $destination = array('','');
	public $lat  = array('','');
	public $lot  = array('','');

	public function __construct($lat,$lot) {
     $otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q=tourist_attraction&ll=@'.$lat.','.$lot.',17z&type=search&api_key=fa32e8bc42c412b76478419ed0b15c1d4f1a728484ee17acb5e48ea9bbf1c658');
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
		foreach ($this->destination as $result) {
				$pl = new Place_Box(str_replace(' ','%20',$result));
			}
	}

		

}
 ?>
