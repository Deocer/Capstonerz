<?php 
include 'Location_Card.php';
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/place.php');

class RecomendedP{

	public function locations($q,$lat,$lot,$City) {

		$otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q='.$q.'&ll=@'.$lat.','.$lot.',18z&type=search&api_key=09fd17b5b4f1204c1498d970c13ca27e81a72babcc06b44c1ee813bbe25f79c9');
		$near2 = json_decode($otherData, TRUE);
		//echo '<pre>',print_r($near2),'</pre>';
		//Variables for the Local Results Scrape
		$destination = array();
		$la  = array();
		$lo  = array();
		$des = array();
		$img = array();
		$type = array();
		$reviews = array();
		$rating = array();
		$hours = array();
		$address = array();
		$price = array();

		//Variables for the Place Results Scrape
		$pdestination = array();
		$pla  = array();
		$plo  = array();
		$pdes = array();
		$pimg = array();
		$ptype = array();
		$previews = array();
		$prating = array();
		$phours = array();
		$paddress = array();
		$pprice = array();



		//The for loop for the Local Results Scrape

		if (empty($near2['local_results']) == false) {
			for ($i=0; $i < 19; $i++) { 
				

				if(isset($near2['local_results'][$i]['gps_coordinates']['longitude']) == false){


				}else{
					$this->lo[$i] = $near2['local_results'][$i]['gps_coordinates']['longitude'];
				}



				if(isset($near2['local_results'][$i]['gps_coordinates']['latitude']) == false){


				}else{
					$this->la[$i] = $near2['local_results'][$i]['gps_coordinates']['latitude'];
				}




				if(isset($near2['local_results'][$i]['title']) == false){


				}else{
					$this->destination[$i] = $near2['local_results'][$i]['title'];
				}





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

				if(isset($near2['local_results'][$i]['reviews']) == false){
					$this->reviews[$i] ='0';

				}else{
					$this->reviews[$i] =$near2['local_results'][$i]['reviews'];
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
				$s = new PlaceControl();
				$s->AddItem($this->destination[$i],$this->des[$i], $this->la[$i], $this->lo[$i] ,$this->img[$i] ,$this->rating[$i] ,$this->reviews[$i],$this->type[$i],$this->price[$i],$this->hours[$i],$this->address[$i],$City);
			}

		}else{

		}


		if (empty($near2['place_results']) == false) {
			
			foreach($near2['place_results'] as $ref){
				$ctr++;	
			}
			for ($i=0; $i < ctr; $i++) { 
				$this->pdestination[$i] = $near2['place_results'][$i]['title'];
				$this->pla[$i] = $near2['place_results'][$i]['gps_coordinates']['latitude'];
				$this->plo[$i] = $near2['place_results'][$i]['gps_coordinates']['longitude'];


				if(isset($near2['place_results'][$i]['type']) == false){
					$this->ptype[$i] ='Tourist Attraction';

				}else{
					$this->ptype[$i] =$near2['place_results'][$i]['type'][0];
				}

				if(isset($near2['place_results'][$i]['price']) == false){
					$this->pprice[$i] ='$';

				}else{
					$this->pprice[$i] =$near2['place_results'][$i]['price'];
				}

				if(isset($near2['place_results'][$i]['rating']) == false){
					$this->prating[$i] ='0';

				}else{
					$this->prating[$i] =$near2['place_results'][$i]['rating'];
				}

				if(isset($near2['place_results'][$i]['reviews']) == false){
					$this->previews[$i] ='0';

				}else{
					$this->previews[$i] =$near2['place_results'][$i]['reviews'];
				}

				if(isset($near2['place_results'][$i]['address']) == false){
					$this->paddress[$i] ='';

				}else{
					$this->paddress[$i] =$near2['place_results'][$i]['address'];
				}



				if(isset($near2['place_results'][$i]['hours']) == false){
					$this->phours[$i] ='';

				}else{
					$this->phours[$i] =$near2['place_results'][$i]['hours'];
				}


				if(isset($near2['place_results'][$i]['thumbnail']) == false){
					$this->pimg[$i] ='IMAGE NOT AVAILABLE';

				}else{
					$this->pimg[$i] = $near2['place_results'][$i]['thumbnail'];
				}

				if(isset($near2['place_results'][$i]['description']) == false){
					$this->pdes[$i] ='';

				}else{
					$this->pdes[$i] = $near2['place_results'][$i]['description'];
				}
				$s = new PlaceControl();
				$s->AddItem($this->destination[$i],$this->des[$i], $this->la[$i], $this->lo[$i] ,$this->img[$i] ,$this->rating[$i] ,$this->reviews[$i],$this->type[$i],$this->price[$i],$this->hours[$i],$this->address[$i],$City);

			}
		}
		else
		{

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
		$reviews = array();
		$hours = array();
		$address = array();
		$price = array();

     	$otherData = file_get_contents('https://serpapi.com/search.json?engine=google_maps&q='.$q.'&ll=@'.$lat.','.$lot.',10z&type=search&api_key=09fd17b5b4f1204c1498d970c13ca27e81a72babcc06b44c1ee813bbe25f79c9');
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

				if(isset($near2['place_results'][$i]['reviews']) == false){
					$this->previews[$i] ='0';

				}else{
					$this->previews[$i] =$near2['place_results'][$i]['reviews'];
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
