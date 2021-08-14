<?php

class Destination{
	public $near2;
	public $img;
	public $desc;
	public $coor = array();

	public function __construct($loc) {

     $otherData = file_get_contents("https://serpapi.com/search.json?q=".$loc."&api_key=8a87e73f3aeb43182c76b9a78233ece1af910d9108e8d63a72b82bc1b7218b2f");

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