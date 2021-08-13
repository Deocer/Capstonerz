<?php

class Destination{
	public $near2;
	public $img;
	public $desc;
	public $coor = array();

	public function __construct($loc) {

     $otherData = file_get_contents("https://serpapi.com/search.json?q=".$loc."&api_key=7e6347025bf41b8967306ab0558502ee41218bf5e38db511e8a2c8b16b46d452");

				$near2 = json_decode($otherData, TRUE);

		
			if(isset($near2['inline_images']) == false){
				$img ='IMAGE NOT AVAILABLE';
			}else{
				foreach ($near2['inline_images'] as $result) {
				$this->img = $result['thumbnail']; 
				}	

			}


			if($near2['organic_results']['0']['snippet'] != null){
				$this->desc =$near2['organic_results']['0']['snippet'];	
			}
		

  	}

  	public function getimg()
	{
		return $this->img;
	}

	public function getdesc()
	{
		return $this->desc;
	}

	public function getcoor()
	{
		return $this->coor;
	}


		


}

?>