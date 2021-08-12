<<<<<<< HEAD
<?php 
class Location{
	private $place;
	private $imgurl ="";


	public function setp($place)
	{
	$this->place = $place;
	}
	 
	// get user's first name
	public function getp()
	{
	return $this->place;
	}

	public function getimg($plc) {

		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/Search/ImageSearchAPI?q=".$plc."&pageNumber=1&pageSize=4&autoCorrect=false",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"x-rapidapi-host: contextualwebsearch-websearch-v1.p.rapidapi.com",
				"x-rapidapi-key: b3de32c392msh97d2d9cc9cad992p132387jsne544d5eb4f2d"
			],
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$imgdata = json_decode($response, TRUE);
		}

		foreach ($imgdata['value'] as $result) {
			   echo '<pre>',print_r($result['url']),'</pre>';
				return $result['url'];	
		}

	}

}

=======
<?php 
class Location{
	private $place;
	private $imgurl ="";


	public function setp($place)
	{
	$this->place = $place;
	}
	 
	// get user's first name
	public function getp()
	{
	return $this->place;
	}

	public function getimg($plc) {

		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/Search/ImageSearchAPI?q=".$plc."&pageNumber=1&pageSize=4&autoCorrect=false",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"x-rapidapi-host: contextualwebsearch-websearch-v1.p.rapidapi.com",
				"x-rapidapi-key: b3de32c392msh97d2d9cc9cad992p132387jsne544d5eb4f2d"
			],
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$imgdata = json_decode($response, TRUE);
		}

		foreach ($imgdata['value'] as $result) {
			   echo '<pre>',print_r($result['url']),'</pre>';
				return $result['url'];	
		}

	}

}

>>>>>>> c4a0a598708132d0d4e9d9cdb5e0fda015cef18a
 ?>