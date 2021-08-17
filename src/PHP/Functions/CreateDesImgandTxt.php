<?php

class Destination{
	public $near2;
	public $img;
	public $desc;
	public $coor = array();

	public function __construct($loc) {

     $otherData = file_get_contents("https://serpapi.com/search.json?q=".$loc."&api_key=2c4e818b119f764c82c357fe4f6e96a989625722d02d1d53e5c24216a188c3d9");

				$near2 = json_decode($otherData, TRUE);

		
			if(isset($near2['inline_images']) == false){
				$this->img ='IMAGE NOT AVAILABLE';
			}else{
				foreach ($near2['inline_images'] as $result) {
				$this->img = $result['thumbnail']; 
				}	

			}


			if($near2['organic_results']['1']['snippet'] != null){
				$this->desc =$near2['organic_results']['1']['snippet'];	
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