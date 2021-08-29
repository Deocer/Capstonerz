<?php 
include 'Location_Card.php';

class RecomendedP{

	public function locations($q,$lat,$lot) {
		$destination = array();
		$la  = array();
		$lo  = array();
		$des = array();
		$img = array();
		$type = array();
		$rating = array();
		$hours = array();
		$address = array();
		$price = array();

     	$otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q='.$q.'&ll=@'.$lat.','.$lot.',18z&type=search&api_key=e95b95fffecfd181bf523f5144b765c3afc39b7fc6f44c572dd61832828aa431');
			$near2 = json_decode($otherData, TRUE);
			for ($i=0; $i < 19; $i++) { 
				$this->destination[$i] = $near2['local_results'][$i]['title'];
				$this->la[$i] = $near2['local_results'][$i]['gps_coordinates']['latitude'];
				$this->lo[$i] = $near2['local_results'][$i]['gps_coordinates']['longitude'];


				if(isset($near2['local_results'][$i]['type']) == false){
					$this->type[$i] ='Tourist Attraction';

				}else{
					$this->type[$i] =$near2['local_results'][$i]['type'];
				}

				if(isset($near2['local_results'][$i]['price']) == false){
					$this->price[$i] ='$';

				}else{
					$this->price[$i] =$near2['local_results'][$i]['price'];
				}

				if(isset($near2['local_results'][$i]['rating']) == false){
					$this->rating[$i] ='0';

				}else{
					$this->rating[$i] =$near2['local_results'][$i]['rating'];
				}

				if(isset($near2['local_results'][$i]['address']) == false){
					$this->address[$i] ='';

				}else{
					$this->address[$i] =$near2['local_results'][$i]['address'];
				}



				if(isset($near2['local_results'][$i]['hours']) == false){
					$this->hours[$i] ='';

				}else{
					$this->hours[$i] =$near2['local_results'][$i]['hours'];
				}


				if(isset($near2['local_results'][$i]['thumbnail']) == false){
					$this->img[$i] ='IMAGE NOT AVAILABLE';

				}else{
					$this->img[$i] = $near2['local_results'][$i]['thumbnail'];
				}

				if(isset($near2['local_results'][$i]['description']) == false){
					$this->des[$i] ='';

				}else{
					$this->des[$i] = $near2['local_results'][$i]['description'];
				}
			$mk = new Place_Box();
			$mk->getLoc(str_replace(' ','%20',$this->destination[$i]),$this->la[$i],$this->lo[$i],$this->des[$i],$this->img[$i],$this->type[$i],$this->rating[$i],$this->hours[$i],$this->address[$i],$this->price[$i]);	

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
$destination = array();
		$la  = array();
		$lo  = array();
		$des = array();
		$img = array();
		$type = array();
		$rating = array();
		$hours = array();
		$address = array();
		$price = array();

     	$otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q='.$q.'&ll=@'.$lat.','.$lot.',17z&type=search&api_key=e95b95fffecfd181bf523f5144b765c3afc39b7fc6f44c572dd61832828aa431');
			$near2 = json_decode($otherData, TRUE);
			for ($i=0; $i < 10; $i++) { 

				if ($near2['local_results'][$i]['title'] != $nm) {
					 	$this->destination[$i] = $near2['local_results'][$i]['title'];
					 }
				else{
					 	$this->destination[$i] ='';
					 } 
				$this->la[$i] = $near2['local_results'][$i]['gps_coordinates']['latitude'];
				$this->lo[$i] = $near2['local_results'][$i]['gps_coordinates']['longitude'];

				if(isset($near2['local_results'][$i]['type']) == false){
					$this->type[$i] ='Tourist Attraction';

				}else{
					$this->type[$i] =$near2['local_results'][$i]['type'];
				}

				if(isset($near2['local_results'][$i]['price']) == false){
					$this->price[$i] ='$';

				}else{
					$this->price[$i] =$near2['local_results'][$i]['price'];
				}

				if(isset($near2['local_results'][$i]['rating']) == false){
					$this->rating[$i] ='-';

				}else{
					$this->rating[$i] =$near2['local_results'][$i]['rating'];
				}

				if(isset($near2['local_results'][$i]['address']) == false){
					$this->address[$i] ='';

				}else{
					$this->address[$i] =$near2['local_results'][$i]['address'];
				}



				if(isset($near2['local_results'][$i]['hours']) == false){
					$this->hours[$i] ='';

				}else{
					$this->hours[$i] =$near2['local_results'][$i]['hours'];
				}


				if(isset($near2['local_results'][$i]['thumbnail']) == false){
					$this->img[$i] ='IMAGE NOT AVAILABLE';

				}else{
					$this->img[$i] = $near2['local_results'][$i]['thumbnail'];
				}

				if(isset($near2['local_results'][$i]['description']) == false){
					$this->des[$i] ='';

				}else{
					$this->des[$i] = $near2['local_results'][$i]['description'];
				}
			$mk = new Place_Box();
			$mk->getLoc(str_replace(' ','%20',$this->destination[$i]),$this->la[$i],$this->lo[$i],$this->des[$i],$this->img[$i],$this->type[$i],$this->rating[$i],$this->hours[$i],$this->address[$i],$this->price[$i]);	

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
