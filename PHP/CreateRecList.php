<?php 
include 'Location_Card.php';

class RecomendedP{
	public $destination = array('','');
	public $lat  = array('','');
	public $lot  = array('','');

	public function __construct($lat,$lot) {
     $otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q=tourist_attraction&ll=@'.$lat.','.$lot.',14z&type=search&api_key=7e6347025bf41b8967306ab0558502ee41218bf5e38db511e8a2c8b16b46d452');
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
