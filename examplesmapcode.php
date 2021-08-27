<?php
$lat = '14.6507';
$lot = '121.1029';

$loc = 'Marikina';

$MapquestData = file_get_contents('http://www.mapquestapi.com/search/v2/radius?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&maxMatches=10&origin='.$lat.','.$lot.'');

$near = json_decode($MapquestData, TRUE);

$Geocoding = file_get_contents("http://www.mapquestapi.com/geocoding/v1/address?key=UBI3Wc0udk0csdys2DFuAJAdhxdX00E9&location=".$loc."");
   


$geo = json_decode($Geocoding, TRUE);


//echo $geo['results']['0']['locations']['0']['latLng']['lat'];
//echo $geo['results']['0']['locations']['0']['latLng']['lng'];    

//echo '<pre>',print_r($geo),'</pre>';


//https://places.ls.hereapi.com/places/v1/categories/places?at=41.8369%2C-87.684&apiKey=H6XyiCT0w1t9GgTjqhRXxDMrVj9h78ya3NuxlwM7XUs
$hereData = file_get_contents('https://places.demo.api.here.com/places/v1/discover/here?at='.$lat.','.$lot.'&app_id=devportal-demo-20180625&app_code=9v2BkviRwi9Ot26kp2IysQ&cat=restaurant&pretty');


// Echo out a sample image 
$near3 = json_decode($hereData, TRUE);


$places = array();
$places2 = array();

$i=0;


//echo '<h1> Number of Near Landmarks : '.$near['resultsCount'].'</h1><br><br>';

//echo '<pre>',print_r($near),'</pre>';
//echo '<pre>',print_r($near3),'</pre>';
//MapQuest API Nearby Locations Output Name

foreach ($near['searchResults'] as $result) {


    foreach ($result['fields'] as $elements) {
        

    }
    $name =  $result['fields']['name'];
    $places[$i]= $name;
    $i ++;
}
    foreach ($places as $near) {
        //echo "<br>";
        //echo "<li>".$near."<li>";

    }

//HERE API Nearby Locations Output Name

$ctr = 0;
foreach ($near3['results'] as $result ) {

      foreach ($result[$ctr] as $res) {
         $name =  $result[$ctr]['title'];
        $places2[$ctr]= $name;
          $ctr++;
      }
}
//echo "<br>";
//echo '<h1> Number of Near Landmarks : '.$ctr.'</h1><br><br>';
    foreach ($places2 as $n) {
        //echo "<br>";
        //echo "<li>".$n."<li>";

    }



class Intro{

function __construct(){


}




}


$s = new Intro();


?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="sweetalert2.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>



<body>

<button id="swal" onClick="swal()">B3</button>
    

<script src="sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
<script type="text/javascript">
   function swal()
  {
  Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})
  } 
 
</script>
</body>
</html>


Array
(
    [search_metadata] => Array
        (
            [id] => 61286a55224db1d463462250
            [status] => Success
            [json_endpoint] => https://serpapi.com/searches/347ef823767dd4f2/61286a55224db1d463462250.json
            [created_at] => 2021-08-27 04:30:13 UTC
            [processed_at] => 2021-08-27 04:30:13 UTC
            [google_maps_url] => https://www.google.com/maps/search/Historic_landmark/@14.590607,120.979901,17z?hl=en
            [raw_html_file] => https://serpapi.com/searches/00149f960950bb0b/61286a55224db1d463462250.html
            [total_time_taken] => 1.8
        )

    [search_parameters] => Array
        (
            [engine] => google_maps
            [type] => search
            [q] => Historic_landmark
            [ll] => @14.590607,120.979901,17z
            [google_domain] => google.com
            [hl] => en
        )

    [search_information] => Array
        (
            [local_results_state] => Some results for exact spelling but showing fixed spelling
            [query_displayed] => Historic_landmark
            [spelling_fix] => Historic Landmark
            [showing_results_for] => Historic Landmark
        )

    [local_results] => Array
        (
            [0] => Array
                (
                    [position] => 2
                    [title] => Victims of Martial Law Memorial Wall, Manila
                    [place_id] => ChIJqVHyZXPLlzMR2K5hbyKCyzc
                    [data_id] => 0x3397cb7365f251a9:0x37cb82226f61aed8
                    [data_cid] => 4020450176767471320
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397cb7365f251a9%3A0x37cb82226f61aed8&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397cb7365f251a9%3A0x37cb82226f61aed8&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5912034
                            [longitude] => 120.9814083
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397cb7365f251a9%3A0x37cb82226f61aed8%218m2%213d14.5912034%214d120.9814083&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [type] => Historical landmark
                    [address] => Heroes Park, 1000 Cecilia Muñoz St, Ermita, Manila, 1000 Metro Manila, Philippines
                    [open_state] => Open 24 hours
                    [hours] => Open 24 hours
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipNmKj7JuHVuKhMa3VJ7bulk7PD6mrImF_7jac9t=w80-h139-k-no
                )

            [1] => Array
                (
                    [position] => 3
                    [title] => Historic Turnover Of The University From The Adamsons To The Congregation Of The Mission Historical Marker
                    [place_id] => ChIJtTQtn8bLlzMRVmJkXl1QVyI
                    [data_id] => 0x3397cbc69f2d34b5:0x2257505d5e646256
                    [data_cid] => 2474534882209194582
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397cbc69f2d34b5%3A0x2257505d5e646256&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397cbc69f2d34b5%3A0x2257505d5e646256&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5858686
                            [longitude] => 120.9854617
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397cbc69f2d34b5%3A0x2257505d5e646256%218m2%213d14.5858686%214d120.98546169999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [type] => Historical landmark
                    [address] => 900 SV building, 1000 San Marcelino St, Ermita, Manila, Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipMgspJ9sh9bcX44B3l6GVNJ9EnxAKbfPg8dyPLM=w80-h139-k-no
                )

            [2] => Array
                (
                    [position] => 4
                    [title] => Gregorio Araneta Y Soriano Historical Marker and J Antonio Araneta y Zaragoza Historical Marker
                    [place_id] => ChIJD69M6FPLlzMR6N19WvjSu7M
                    [data_id] => 0x3397cb53e84caf0f:0xb3bbd2f85a7ddde8
                    [data_cid] => 12951177117545913832
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397cb53e84caf0f%3A0xb3bbd2f85a7ddde8&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397cb53e84caf0f%3A0xb3bbd2f85a7ddde8&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5989316
                            [longitude] => 120.9874896
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397cb53e84caf0f%3A0xb3bbd2f85a7ddde8%218m2%213d14.598931599999998%214d120.98748959999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [type] => Historical landmark
                    [address] => 1000-1092 FR Hidalgo St, Quiapo, Manila, 1001 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipMNqrlBnu5ZdkluDczDhIFWr5v2vCbuQg89Li71=w80-h97-k-no
                )

            [3] => Array
                (
                    [position] => 5
                    [title] => Philippine Normal University (1901-2001) Historical Marker
                    [place_id] => ChIJNzTD9RvLlzMRlzqrQKItOCU
                    [data_id] => 0x3397cb1bf5c33437:0x25382da240ab3a97
                    [data_cid] => 2681943752992045719
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397cb1bf5c33437%3A0x25382da240ab3a97&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397cb1bf5c33437%3A0x25382da240ab3a97&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5868009
                            [longitude] => 120.9830717
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397cb1bf5c33437%3A0x25382da240ab3a97%218m2%213d14.5868009%214d120.9830717&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [type] => Historical landmark
                    [address] => Philippine Normal University, Ermita, Manila, 1000 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipM9o2QtsXfpIrsMf4Oe3yuxENDXN8QZudobaXYO=w80-h139-k-no
                )

            [4] => Array
                (
                    [position] => 6
                    [title] => Imus Historical Marker
                    [place_id] => ChIJhxPDa2LTlzMRTs4G8x1mrng
                    [data_id] => 0x3397d3626bc31387:0x78ae661df306ce4e
                    [data_cid] => 8696000209316400718
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397d3626bc31387%3A0x78ae661df306ce4e&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397d3626bc31387%3A0x78ae661df306ce4e&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.4289695
                            [longitude] => 120.9362102
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397d3626bc31387%3A0x78ae661df306ce4e%218m2%213d14.4289695%214d120.93621019999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [type] => Historical landmark
                    [address] => CWHP+HFP, Imus, Cavite, Philippines
                    [open_state] => Open 24 hours
                    [hours] => Open 24 hours
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipMB_X4eFXLpJMTG8AAjBvyoqqkpGCQEbzIbPdEA=w80-h139-k-no
                )

            [5] => Array
                (
                    [position] => 7
                    [title] => Gusali ng Lungsod ng Maynila Historical Marker
                    [place_id] => ChIJYcW5VynLlzMRFRHjRlgBf1I
                    [data_id] => 0x3397cb2957b9c561:0x527f015846e31115
                    [data_cid] => 5944471511810380053
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397cb2957b9c561%3A0x527f015846e31115&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397cb2957b9c561%3A0x527f015846e31115&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5897
                            [longitude] => 120.98162
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397cb2957b9c561%3A0x527f015846e31115%218m2%213d14.589699999999999%214d120.98161999999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [type] => Historical landmark
                    [address] => 659, Ermita, Manila, 1000 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipMvOcEZmhEGSJppI-IsOjVKn0V4gMh6NvXQsaRh=w80-h137-k-no
                )

            [6] => Array
                (
                    [position] => 8
                    [title] => Luis Eligio Guerrero Historical Marker
                    [place_id] => ChIJlctl2t7LlzMRe198-DpjuoY
                    [data_id] => 0x3397cbdeda65cb95:0x86ba633af87c5f7b
                    [data_cid] => 9708181051678678907
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397cbdeda65cb95%3A0x86ba633af87c5f7b&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397cbdeda65cb95%3A0x86ba633af87c5f7b&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5798987
                            [longitude] => 120.9801148
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397cbdeda65cb95%3A0x86ba633af87c5f7b%218m2%213d14.5798987%214d120.9801148&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [type] => Historical landmark
                    [address] => United Nations Ave, Ermita, Manila, 1000 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipPC_RMsFUVxGmmeatEV6s7PNxwjMfjKGGzN_dCT=w80-h142-k-no
                )

            [7] => Array
                (
                    [position] => 9
                    [title] => Former Palace of the Governors General Historical Marker
                    [place_id] => ChIJyXAg4UDLlzMRCt4nCfbPLwM
                    [data_id] => 0x3397cb40e12070c9:0x32fcff60927de0a
                    [data_cid] => 229630761641696778
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397cb40e12070c9%3A0x32fcff60927de0a&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397cb40e12070c9%3A0x32fcff60927de0a&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5918499
                            [longitude] => 120.9727399
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397cb40e12070c9%3A0x32fcff60927de0a%218m2%213d14.5918499%214d120.9727399&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [type] => Historical landmark
                    [address] => 655, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipOMb1W_I79rHQqotC_aTO8RYXKzVHQ6NP8JeJrt=w80-h142-k-no
                )

            [8] => Array
                (
                    [position] => 10
                    [title] => Spanish Barracks Ruins
                    [place_id] => ChIJx2KMLBTKlzMRbG_2icModac
                    [data_id] => 0x3397ca142c8c62c7:0xa77528c389f66f6c
                    [data_cid] => 12066595596907474796
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca142c8c62c7%3A0xa77528c389f66f6c&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca142c8c62c7%3A0xa77528c389f66f6c&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5943113
                            [longitude] => 120.9699868
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca142c8c62c7%3A0xa77528c389f66f6c%218m2%213d14.5943113%214d120.9699868&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.8
                    [reviews] => 4
                    [type] => Historical landmark
                    [address] => 53 General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipN7qCLAShzcBfvr7k3MU_QBw3kFIcI5ojv1m3jC=w122-h92-k-no
                )

            [9] => Array
                (
                    [position] => 11
                    [title] => Lichauco Heritage House Heritage Marker
                    [place_id] => ChIJb_tiHL7JlzMRR_JnW3cVnr0
                    [data_id] => 0x3397c9be1c62fb6f:0xbd9e15775b67f247
                    [data_cid] => 13663381921867493959
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397c9be1c62fb6f%3A0xbd9e15775b67f247&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397c9be1c62fb6f%3A0xbd9e15775b67f247&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5815728
                            [longitude] => 121.0110095
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397c9be1c62fb6f%3A0xbd9e15775b67f247%218m2%213d14.5815728%214d121.0110095&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.4
                    [reviews] => 5
                    [type] => Historical landmark
                    [address] => 2315 Pedro Gil St, Santa Ana, Manila, 1009 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipOJIfR2T7zZtfGeQqIlTQK-1Ld3_Q0pVQwX3oI7=w163-h92-k-no
                )

            [10] => Array
                (
                    [position] => 12
                    [title] => Mendiola Peace Arch
                    [place_id] => ChIJYfkGmgXJlzMRnOfGy36CHFs
                    [data_id] => 0x3397c9059a06f961:0x5b1c827ecbc6e79c
                    [data_cid] => 6565265837895640988
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397c9059a06f961%3A0x5b1c827ecbc6e79c&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397c9059a06f961%3A0x5b1c827ecbc6e79c&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5996994
                            [longitude] => 120.9915104
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397c9059a06f961%3A0x5b1c827ecbc6e79c%218m2%213d14.599699399999999%214d120.9915104&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4
                    [reviews] => 1
                    [type] => Historical landmark
                    [address] => 1008 Mendiola St, San Miguel, Manila, 1008 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipP0lE6gq74gThlmrSdHlkOktMQcrMlDthuUF7QW=w122-h92-k-no
                )

            [11] => Array
                (
                    [position] => 13
                    [title] => Rizal's Execution Site Historical Marker
                    [place_id] => ChIJ7XIKnMXLlzMRNy61zhYQsv8
                    [data_id] => 0x3397cbc59c0a72ed:0xffb21016ceb52e37
                    [data_cid] => 18424806715669425719
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397cbc59c0a72ed%3A0xffb21016ceb52e37&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397cbc59c0a72ed%3A0xffb21016ceb52e37&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5823401
                            [longitude] => 120.97708
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397cbc59c0a72ed%3A0xffb21016ceb52e37%218m2%213d14.5823401%214d120.97708&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.6
                    [reviews] => 5
                    [type] => Historical landmark
                    [address] => Unnamed Road, Ermita, Manila, 1000 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipMiVixu5IN9RgCp4a0KF5KijCMYUBki0Kx4YjE-=w80-h136-k-no
                )

            [12] => Array
                (
                    [position] => 14
                    [title] => Manuel Acuña Roxas Monument and Historical Marker
                    [place_id] => ChIJOUxacizKlzMRDdbUB3ko26I
                    [data_id] => 0x3397ca2c725a4c39:0xa2db287907d4d60d
                    [data_cid] => 11735017754331502093
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca2c725a4c39%3A0xa2db287907d4d60d&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca2c725a4c39%3A0xa2db287907d4d60d&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5734016
                            [longitude] => 120.9810494
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca2c725a4c39%3A0xa2db287907d4d60d%218m2%213d14.573401599999999%214d120.98104939999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.1
                    [reviews] => 8
                    [type] => Historical landmark
                    [address] => 517 Roxas Blvd, Malate, Manila, 1004 Metro Manila, Philippines
                    [open_state] => Open 24 hours
                    [hours] => Open 24 hours
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipOGZdvNokmK2t1zzyDrQvj0PseTYMkwchHizbV2=w80-h142-k-no
                )

            [13] => Array
                (
                    [position] => 15
                    [title] => Cuartel de Santa Lucia Historical Marker
                    [place_id] => ChIJjyfuiKrLlzMRsxCd3JO9A3I
                    [data_id] => 0x3397cbaa88ee278f:0x7203bd93dc9d10b3
                    [data_cid] => 8215618588013039795
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397cbaa88ee278f%3A0x7203bd93dc9d10b3&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397cbaa88ee278f%3A0x7203bd93dc9d10b3&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5874103
                            [longitude] => 120.9747417
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397cbaa88ee278f%3A0x7203bd93dc9d10b3%218m2%213d14.5874103%214d120.9747417&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4
                    [reviews] => 1
                    [type] => Historical landmark
                    [address] => Sta. Lucia St, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipPd2cgpHCR7-9ukj4jXDuht9-WQQn5a8sXu0a2T=w80-h139-k-no
                )

            [14] => Array
                (
                    [position] => 16
                    [title] => Bonifacio and the Katipunan Revolution Monument
                    [place_id] => ChIJ13eKuRjKlzMRnMWfme0Gjmw
                    [data_id] => 0x3397ca18b98a77d7:0x6c8e06ed999fc59c
                    [data_cid] => 7822197220343530908
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca18b98a77d7%3A0x6c8e06ed999fc59c&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca18b98a77d7%3A0x6c8e06ed999fc59c&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5909323
                            [longitude] => 120.9810749
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca18b98a77d7%3A0x6c8e06ed999fc59c%218m2%213d14.590932299999999%214d120.9810749&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.6
                    [reviews] => 713
                    [type] => Historical landmark
                    [address] => HXRJ+9CG, Ermita, Manila, 1000 Metro Manila, Philippines
                    [open_state] => Open 24 hours
                    [hours] => Open 24 hours
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipPhb-n8npBCEeVbpRyQSUYSEtH_H3USlv87S7qL=w184-h92-k-no
                )

            [15] => Array
                (
                    [position] => 17
                    [title] => Quiapo Church
                    [place_id] => ChIJJxbFQhDLlzMRyC9PkQlio-U
                    [data_id] => 0x3397cb1042c51627:0xe5a36209914f2fc8
                    [data_cid] => 16547177249121447880
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397cb1042c51627%3A0xe5a36209914f2fc8&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397cb1042c51627%3A0xe5a36209914f2fc8&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.601118
                            [longitude] => 120.986186
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397cb1042c51627%3A0xe5a36209914f2fc8%218m2%213d14.601118%214d120.98618599999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [type] => Historical landmark
                    [address] => 1001 Severino St, Quiapo, Manila, 1001 Metro Manila, Philippines
                    [thumbnail] => https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=7gi4YZ2g2nck5AroWvbTNw&cb_client=search.gws-prod.gps&w=80&h=92&yaw=110.8598&pitch=0&thumbfov=100
                )

            [16] => Array
                (
                    [position] => 18
                    [title] => Baluarte de San Gabriel
                    [place_id] => ChIJDeaUxhnKlzMRwm-pbNTLiWQ
                    [data_id] => 0x3397ca19c694e60d:0x6489cbd46ca96fc2
                    [data_cid] => 7244545588818702274
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca19c694e60d%3A0x6489cbd46ca96fc2&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca19c694e60d%3A0x6489cbd46ca96fc2&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5941062
                            [longitude] => 120.977467
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca19c694e60d%3A0x6489cbd46ca96fc2%218m2%213d14.594106199999999%214d120.97746699999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.2
                    [reviews] => 6
                    [type] => Historical landmark
                    [address] => HXVG+JXW, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipPu1j0nxCcZe5AdZbSHo3_TPPYngSaBM6DbvNHi=w80-h142-k-no
                )

            [17] => Array
                (
                    [position] => 19
                    [title] => Almacenes Reales
                    [place_id] => ChIJtR4UaBbKlzMRWvlH9iA8WDM
                    [data_id] => 0x3397ca1668141eb5:0x33583c20f647f95a
                    [data_cid] => 3699773206153394522
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca1668141eb5%3A0x33583c20f647f95a&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca1668141eb5%3A0x33583c20f647f95a&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.593197
                            [longitude] => 120.971789
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca1668141eb5%3A0x33583c20f647f95a%218m2%213d14.593197%214d120.971789&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.5
                    [reviews] => 4
                    [type] => Historical landmark
                    [address] => 53 General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipOq3G7a8RJpngTw9N5XmKpeFw5AGR5d5aofVsi3=w80-h136-k-no
                )

            [18] => Array
                (
                    [position] => 20
                    [title] => Puerta del Parian
                    [place_id] => ChIJa7UHRRjKlzMR0nRxBcPmQjA
                    [data_id] => 0x3397ca184507b56b:0x3042e6c3057174d2
                    [data_cid] => 3477595587567776978
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca184507b56b%3A0x3042e6c3057174d2&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca184507b56b%3A0x3042e6c3057174d2&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5922464
                            [longitude] => 120.9781861
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca184507b56b%3A0x3042e6c3057174d2%218m2%213d14.592246399999999%214d120.97818609999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.5
                    [reviews] => 26
                    [type] => Historical landmark
                    [address] => 465 Muralla St, Intramuros, Manila, 1000 Metro Manila, Philippines
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipNv-PeKd-6NOa-6t7U86GXx8Wu1k3TyKa82lVxi=w92-h92-k-no
                )

            [19] => Array
                (
                    [position] => 21
                    [title] => Baluarte de San Diego
                    [place_id] => ChIJ48-0VzvKlzMRg16kTvO3p8U
                    [data_id] => 0x3397ca3b57b4cfe3:0xc5a7b7f34ea45e83
                    [data_cid] => 14242554602206813827
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca3b57b4cfe3%3A0xc5a7b7f34ea45e83&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca3b57b4cfe3%3A0xc5a7b7f34ea45e83&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5853806
                            [longitude] => 120.9755667
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca3b57b4cfe3%3A0xc5a7b7f34ea45e83%218m2%213d14.585380599999999%214d120.97556669999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.4
                    [reviews] => 376
                    [type] => Historical landmark
                    [address] => Sta. Lucia St, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 5PM
                    [hours] => Open until 5:00 PM
                    [phone] => +63 6325272961
                    [description] => 16th-century fortified bastion. Built in 1586 in the shape of an ace of spades, this stone fort now features a bonsai display.
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipMw0CEm62WJgABx_58Y3ugeCEZ9jA8x4gaFA671=w138-h92-k-no
                )

        )

    [serpapi_pagination] => Array
        (
            [next] => https://serpapi.com/search.json?engine=google_maps&google_domain=google.com&hl=en&ll=%4014.590607%2C120.979901%2C17z&q=Historic_landmark&start=20&type=search
        )





Array
(
    [search_metadata] => Array
        (
            [id] => 61286c1bd5ecf43258335aa9
            [status] => Success
            [json_endpoint] => https://serpapi.com/searches/02e36dbd710416e1/61286c1bd5ecf43258335aa9.json
            [created_at] => 2021-08-27 04:37:47 UTC
            [processed_at] => 2021-08-27 04:37:47 UTC
            [google_maps_url] => https://www.google.com/maps/search/dining/@14.590607,120.979901,17z?hl=en
            [raw_html_file] => https://serpapi.com/searches/02e36dbd710416e1/61286c1bd5ecf43258335aa9.html
            [total_time_taken] => 1.49
        )

    [search_parameters] => Array
        (
            [engine] => google_maps
            [type] => search
            [q] => dining
            [ll] => @14.590607,120.979901,17z
            [google_domain] => google.com
            [hl] => en
        )

    [search_information] => Array
        (
            [local_results_state] => Results for exact spelling
            [query_displayed] => dining
        )

    [local_results] => Array
        (
            [0] => Array
                (
                    [position] => 1
                    [title] => EIC Diners
                    [place_id] => ChIJ0UPzKCDKlzMR3vPAbjT0u3Q
                    [data_id] => 0x3397ca2028f343d1:0x74bbf4346ec0f3de
                    [data_cid] => 8411585235078149086
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca2028f343d1%3A0x74bbf4346ec0f3de&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca2028f343d1%3A0x74bbf4346ec0f3de&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5891451
                            [longitude] => 120.9853868
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca2028f343d1%3A0x74bbf4346ec0f3de%218m2%213d14.5891451%214d120.9853868&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.3
                    [reviews] => 3
                    [type] => Fine dining restaurant
                    [address] => 719 Mercedes St, Bgy 660, Zone 071 Ermita, Manila, Philippines
                    [open_state] => Open ⋅ Closes 10PM
                    [hours] => Open until 10:00 PM
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [thumbnail] => https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=bRnz0AfZ4_L92CSw3n3fcA&cb_client=search.gws-prod.gps&w=80&h=92&yaw=146.16748&pitch=0&thumbfov=100
                )

            [1] => Array
                (
                    [position] => 2
                    [title] => Ilustrado Restaurant
                    [place_id] => ChIJEWjKJSPKlzMRqHB5OJgKmpo
                    [data_id] => 0x3397ca2325ca6811:0x9a9a0a98387970a8
                    [data_cid] => 11140228277153132712
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca2325ca6811%3A0x9a9a0a98387970a8&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca2325ca6811%3A0x9a9a0a98387970a8&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5875418
                            [longitude] => 120.9770326
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca2325ca6811%3A0x9a9a0a98387970a8%218m2%213d14.587541799999999%214d120.9770326&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.2
                    [reviews] => 304
                    [price] => $$
                    [type] => Filipino restaurant
                    [address] => 744 General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 7PM
                    [hours] => Open until 7:00 PM
                    [phone] => +63 2 8527 3674
                    [description] => Filipino meals in nostalgic surrounds. Traditional Filipino cuisine served in an old-school, Spanish-style venue with antique decor.
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                            [delivery] => 
                        )

                    [user_review] => "The best fine dining I have ever been."
                    [editorial_reviews] => Array
                        (
                            [summary] => Top 10 Most Loved Restaurants in Manila for July 2020
                            [link] => https://ph.phonebooky.com/blog/manila-restaurants/
                            [thumbnail] => //www.google.com/s2/favicons?domain=ph.phonebooky.com&sz=16
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipOrZSBVRLoMw5uoQebPw1nz14Aqr_xV_IDHy_k7=w122-h92-k-no
                )

            [2] => Array
                (
                    [position] => 3
                    [title] => Barbara's Heritage Restaurant
                    [place_id] => ChIJwQ16OD3KlzMRTZALIYMNtbI
                    [data_id] => 0x3397ca3d387a0dc1:0xb2b50d83210b904d
                    [data_cid] => 12877213566382084173
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca3d387a0dc1%3A0xb2b50d83210b904d&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca3d387a0dc1%3A0xb2b50d83210b904d&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5894156
                            [longitude] => 120.9752694
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca3d387a0dc1%3A0xb2b50d83210b904d%218m2%213d14.589415599999999%214d120.97526939999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.2
                    [reviews] => 512
                    [price] => $$
                    [type] => Filipino restaurant
                    [address] => plaza sans luis complex, General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 2:30PM ⋅ Reopens 5PM
                    [hours] => Open until 2:30 PM
                    [phone] => +63 2 8527 4083
                    [website] => http://www.facebook.com/BarbarasHeritageRestaurant
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [user_review] => "A sentimental way of dining"
                    [editorial_reviews] => Array
                        (
                            [summary] => 10 Iconic Intramuros Restaurants That’ll Satisfy Your Hunger for Food and Culture
                            [link] => https://ph.phonebooky.com/blog/intramuros-restaurants/
                            [thumbnail] => //www.google.com/s2/favicons?domain=ph.phonebooky.com&sz=16
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipOEwzuOyJOyzsxHM4daLIhMWse1wt4PSYcsvpXZ=w175-h92-k-no
                )

            [3] => Array
                (
                    [position] => 4
                    [title] => Restaurant
                    [place_id] => ChIJVVVVGTvKlzMRL3IPGFftR-A
                    [data_id] => 0x3397ca3b19555555:0xe047ed57180f722f
                    [data_cid] => 16161146746163917359
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca3b19555555%3A0xe047ed57180f722f&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca3b19555555%3A0xe047ed57180f722f&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5828329
                            [longitude] => 120.9738374
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca3b19555555%3A0xe047ed57180f722f%218m2%213d14.5828329%214d120.9738374&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.5
                    [reviews] => 39
                    [type] => Restaurant
                    [address] => Ermita, Manila, 1000 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 2:30PM ⋅ Reopens 6:30PM
                    [hours] => Open until 2:30 PM
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [user_review] => "Great dining experience."
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipPWKIBkWpt46GyXrjvsOP2w9Kh2Q8x5LTp-MFER=w80-h106-k-no
                )

            [4] => Array
                (
                    [position] => 5
                    [title] => Truffles Dining Services
                    [place_id] => ChIJg3_O2CHKlzMRF27ZIK0LDgg
                    [data_id] => 0x3397ca21d8ce7f83:0x80e0bad20d96e17
                    [data_cid] => 580414240185740823
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca21d8ce7f83%3A0x80e0bad20d96e17&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca21d8ce7f83%3A0x80e0bad20d96e17&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5894642
                            [longitude] => 120.9837112
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca21d8ce7f83%3A0x80e0bad20d96e17%218m2%213d14.5894642%214d120.98371119999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [type] => Restaurant
                    [address] => 4th Flr SM Bldg San Marcelino St, Bgy 659, Zone 071 Ermita, Manila, Philippines
                    [open_state] => Open ⋅ Closes 9PM
                    [hours] => Open until 9:00 PM
                    [service_options] => Array
                        (
                            [takeout] => 1
                        )

                )

            [5] => Array
                (
                    [position] => 6
                    [title] => President Grand Palace
                    [place_id] => ChIJ8zEQVQXKlzMRkUM2-3crrOQ
                    [data_id] => 0x3397ca05551031f3:0xe4ac2b77fb364391
                    [data_cid] => 16477592930957542289
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca05551031f3%3A0xe4ac2b77fb364391&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca05551031f3%3A0xe4ac2b77fb364391&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.6012831
                            [longitude] => 120.976387
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca05551031f3%3A0xe4ac2b77fb364391%218m2%213d14.6012831%214d120.97638699999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4
                    [reviews] => 343
                    [price] => $$
                    [type] => Fine dining restaurant
                    [address] => 746-750 Ongpin St, Binondo, Manila, 1006 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 10PM
                    [hours] => Open until 10:00 PM
                    [phone] => +63 2 8244 5886
                    [website] => http://www.grandpalaceseafoodrestaurant.com/
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                            [delivery] => 1
                        )

                    [editorial_reviews] => Array
                        (
                            [summary] => Binondo Manila Food Guide
                            [link] => https://www.pinoyrecipe.net/binondo-manila-food-guide/
                            [thumbnail] => //www.google.com/s2/favicons?domain=www.pinoyrecipe.net&sz=16
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipOdl1H1AymlT_7Roed-IuLTh6B6muAr5lhAvVhD=w122-h92-k-no
                )

            [6] => Array
                (
                    [position] => 7
                    [title] => Ristorante delle Mitre
                    [place_id] => ChIJdbyYFT3KlzMRM8EiaTmVlvk
                    [data_id] => 0x3397ca3d1598bc75:0xf99695396922c133
                    [data_cid] => 17984726235760214323
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca3d1598bc75%3A0xf99695396922c133&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca3d1598bc75%3A0xf99695396922c133&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.589485
                            [longitude] => 120.9746813
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca3d1598bc75%3A0xf99695396922c133%218m2%213d14.589485%214d120.9746813&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.2
                    [reviews] => 295
                    [price] => $$
                    [type] => Restaurant
                    [address] => Opposite San Agustin Church, Real St, Intramuros, Manila, Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 8PM
                    [hours] => Open until 8:00 PM
                    [phone] => +63 2 8559 5220
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [user_review] => "Overall, a great dining experience in a great historical place in ..."
                    [editorial_reviews] => Array
                        (
                            [summary] => 10 Iconic Intramuros Restaurants That’ll Satisfy Your Hunger for Food and Culture
                            [link] => https://ph.phonebooky.com/blog/intramuros-restaurants/
                            [thumbnail] => //www.google.com/s2/favicons?domain=ph.phonebooky.com&sz=16
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipN8blZyWm7MUka1LtleUyM_-9n-kcdBBHr70GTd=w122-h92-k-no
                )

            [7] => Array
                (
                    [position] => 8
                    [title] => Ilustrado - General Luna
                    [place_id] => ChIJWwDEJSPKlzMR4hskQazTsm0
                    [data_id] => 0x3397ca2325c4005b:0x6db2d3ac41241be2
                    [data_cid] => 7904613032769362914
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca2325c4005b%3A0x6db2d3ac41241be2&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca2325c4005b%3A0x6db2d3ac41241be2&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.587596
                            [longitude] => 120.976987
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca2325c4005b%3A0x6db2d3ac41241be2%218m2%213d14.587596%214d120.976987&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.2
                    [reviews] => 203
                    [price] => $$
                    [type] => Asian restaurant
                    [address] => 744 General Luna St, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 11PM
                    [hours] => Open until 11:00 PM
                    [phone] => +63 2 8527 2345
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [user_review] => "I enjoy Intramuros well, and dining at Illustrado complete the tour."
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipP6Wx2K16aaHw02P9eN7EUwInms5CDwVw6Uttoa=w163-h92-k-no
                )

            [8] => Array
                (
                    [position] => 9
                    [title] => Champagne Room
                    [place_id] => ChIJ36MyFDvKlzMRNYOiz_9pfNw
                    [data_id] => 0x3397ca3b1432a3df:0xdc7c69ffcfa28335
                    [data_cid] => 15887690132877378357
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca3b1432a3df%3A0xdc7c69ffcfa28335&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca3b1432a3df%3A0xdc7c69ffcfa28335&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5834881
                            [longitude] => 120.9739099
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca3b1432a3df%3A0xdc7c69ffcfa28335%218m2%213d14.583488099999999%214d120.9739099&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.1
                    [reviews] => 10
                    [type] => Restaurant
                    [address] => Inside Manila Hotel Lobby, 1 Roxas Boulevard One Rizal Park, Manila, Ermita, Manila, 1000 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 9:30PM
                    [hours] => Open until 9:30 PM
                    [service_options] => Array
                        (
                            [dine_in] => 1
                        )

                    [editorial_reviews] => Array
                        (
                            [summary] => 15 Restaurants To Have Date Nights At When You’re Already Married
                            [link] => https://ph.phonebooky.com/blog/fine-dining-restaurants/
                            [thumbnail] => //www.google.com/s2/favicons?domain=ph.phonebooky.com&sz=16
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipMeznstp-UZYiIndcvqK8_6ME4V99sQYkJYYhIA=w80-h106-k-no
                )

            [9] => Array
                (
                    [position] => 10
                    [title] => WYP Dining
                    [place_id] => ChIJgSvjY6nJlzMRWN_mAkToSfI
                    [data_id] => 0x3397c9a963e32b81:0xf249e84402e6df58
                    [data_cid] => 17458740809282543448
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397c9a963e32b81%3A0xf249e84402e6df58&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397c9a963e32b81%3A0xf249e84402e6df58&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.564118
                            [longitude] => 121.034061
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397c9a963e32b81%3A0xf249e84402e6df58%218m2%213d14.564117999999999%214d121.034061&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.8
                    [reviews] => 31
                    [type] => Restaurant
                    [address] => 6236, 1209 Manalac, Makati, Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 2AM
                    [hours] => Open until 2:00 AM
                    [phone] => +63 961 758 5607
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipNQeq-Y9VsnHRJ-HWdTGONawR5xFDQXSv82CGS2=w194-h92-k-no
                )

            [10] => Array
                (
                    [position] => 11
                    [title] => ELR Refreshment & Restaurant
                    [place_id] => ChIJ9XwARCrKlzMRdQARa5rJu_s
                    [data_id] => 0x3397ca2a44007cf5:0xfbbbc99a6b110075
                    [data_cid] => 18139313589223227509
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca2a44007cf5%3A0xfbbbc99a6b110075&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca2a44007cf5%3A0xfbbbc99a6b110075&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5721144
                            [longitude] => 120.9858375
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca2a44007cf5%3A0xfbbbc99a6b110075%218m2%213d14.572114399999998%214d120.98583749999999&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [type] => Fine dining restaurant
                    [address] => 1109 J Bocobo St, Malate Manila, Philippines
                    [open_state] => Open ⋅ Closes 10PM
                    [hours] => Open until 10:00 PM
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [thumbnail] => https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=NF7qgoh_94vzm5l9kBG5Mw&cb_client=search.gws-prod.gps&w=80&h=92&yaw=188.44777&pitch=0&thumbfov=100
                )

            [11] => Array
                (
                    [position] => 12
                    [title] => Silere
                    [place_id] => ChIJ0ZnD8vXJlzMR6TbrKsyAXAQ
                    [data_id] => 0x3397c9f5f2c399d1:0x45c80cc2aeb36e9
                    [data_cid] => 314267688390833897
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397c9f5f2c399d1%3A0x45c80cc2aeb36e9&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397c9f5f2c399d1%3A0x45c80cc2aeb36e9&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5928859
                            [longitude] => 120.9881997
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397c9f5f2c399d1%3A0x45c80cc2aeb36e9%218m2%213d14.592885899999999%214d120.9881997&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.3
                    [reviews] => 3
                    [type] => Restaurant
                    [address] => 747 Nicanor Padilla St, San Miguel, Manila, 1005 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 9PM
                    [hours] => Open until 9:00 PM
                    [phone] => +63 2 8733 0023
                    [website] => http://www.facebook.com/SilereManila/
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipMFrH97DdIBZUSHnSNBJc1W6KEq5QbYhE1ZW61Q=w189-h92-k-no
                )

            [12] => Array
                (
                    [position] => 13
                    [title] => McDonald's
                    [place_id] => ChIJqZbQSxjKlzMRABPFbSJYJh0
                    [data_id] => 0x3397ca184bd096a9:0x1d2658226dc51300
                    [data_cid] => 2100463181108679424
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca184bd096a9%3A0x1d2658226dc51300&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca184bd096a9%3A0x1d2658226dc51300&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5927778
                            [longitude] => 120.9777778
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca184bd096a9%3A0x1d2658226dc51300%218m2%213d14.592777799999999%214d120.9777778&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.3
                    [reviews] => 95
                    [price] => $
                    [type] => Fast food restaurant
                    [address] => 61 Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [open_state] => Temporarily closed
                    [hours] => Open until 10:00 PM
                    [phone] => +63 2 86236
                    [website] => http://www.mcdonalds.com.ph/
                    [description] => Iconic fast-food burger & fries chain. Classic, long-running fast-food chain known for its burgers & fries.
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipNv34xAgT5eSHQiqHDe4Zh2pQb4aboukB89kXfl=w189-h92-k-no
                )

            [13] => Array
                (
                    [position] => 14
                    [title] => 9 SPOONS - The Bayleaf Intramuros
                    [place_id] => ChIJ1-6whiLKlzMR72qbrQj_3m0
                    [data_id] => 0x3397ca2286b0eed7:0x6ddeff08ad9b6aef
                    [data_cid] => 7917045607701375727
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca2286b0eed7%3A0x6ddeff08ad9b6aef&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca2286b0eed7%3A0x6ddeff08ad9b6aef&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.589926
                            [longitude] => 120.978776
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca2286b0eed7%3A0x6ddeff08ad9b6aef%218m2%213d14.589926%214d120.978776&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.3
                    [reviews] => 224
                    [type] => Restaurant
                    [address] => The Bayleaf Intramuros, 9/F Muralla St, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 10:30PM
                    [hours] => Open until 10:30 PM
                    [phone] => +63 2 5318 5000
                    [website] => http://www.thebayleaf.com.ph/
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [editorial_reviews] => Array
                        (
                            [summary] => 10 Iconic Intramuros Restaurants That’ll Satisfy Your Hunger for Food and Culture
                            [link] => https://ph.phonebooky.com/blog/intramuros-restaurants/
                            [thumbnail] => //www.google.com/s2/favicons?domain=ph.phonebooky.com&sz=16
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipNXWaF_OdqMwMJ9oY1r8Bw2DDLJG1ddLcLAYTg4=w92-h92-k-no
                )

            [14] => Array
                (
                    [position] => 15
                    [title] => Arya Persian Restaurant
                    [place_id] => ChIJJ104eynKlzMRZU5n4jFSZ8A
                    [data_id] => 0x3397ca297b385d27:0xc0675231e2674e65
                    [data_cid] => 13864140352088657509
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca297b385d27%3A0xc0675231e2674e65&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca297b385d27%3A0xc0675231e2674e65&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5744916
                            [longitude] => 120.9841299
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca297b385d27%3A0xc0675231e2674e65%218m2%213d14.5744916%214d120.9841299&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 3.8
                    [reviews] => 90
                    [type] => Persian restaurant
                    [address] => Pedro Gil St, Ermita, Manila, 1000 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 10PM
                    [hours] => Open until 10:00 PM
                    [phone] => +63 25677200
                    [website] => http://aryapersianrestaurant.com/
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipOhrvw3i9gkVJhkQfdZ_K54p0p8Ib10gEGi58MZ=w163-h92-k-no
                )

            [15] => Array
                (
                    [position] => 16
                    [title] => Harbor View Restaurant
                    [place_id] => ChIJ_zX6TjDKlzMRdUR7dvO2Z4s
                    [data_id] => 0x3397ca304efa35ff:0x8b67b6f3767b4475
                    [data_cid] => 10045198650654278773
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca304efa35ff%3A0x8b67b6f3767b4475&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca304efa35ff%3A0x8b67b6f3767b4475&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5778275
                            [longitude] => 120.9743613
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca304efa35ff%3A0x8b67b6f3767b4475%218m2%213d14.5778275%214d120.9743613&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.2
                    [reviews] => 1008
                    [price] => $$
                    [type] => Restaurant
                    [address] => South Dr, Ermita, Manila, 1000 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 10PM
                    [hours] => Open until 10:00 PM
                    [phone] => +63 2 8710 0060
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [user_review] => "One of a kind open-air dining experience."
                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipM9ewmsEEeuVTmbyxLl1_gT0q5R7NN32zuQGUuI=w122-h92-k-no
                )

            [16] => Array
                (
                    [position] => 17
                    [title] => Cafe Ilang-Ilang
                    [place_id] => ChIJBeVd4zrKlzMR_8nTrJHgvec
                    [data_id] => 0x3397ca3ae35de505:0xe7bde091acd3c9ff
                    [data_cid] => 16698749909634107903
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca3ae35de505%3A0xe7bde091acd3c9ff&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca3ae35de505%3A0xe7bde091acd3c9ff&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.582938
                            [longitude] => 120.9740848
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca3ae35de505%3A0xe7bde091acd3c9ff%218m2%213d14.582937999999999%214d120.9740848&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.6
                    [reviews] => 732
                    [price] => $$$
                    [type] => Buffet restaurant
                    [address] => Manila Hotel, 1 Rizal Park, Ermita, Manila, 0913 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 2:30PM ⋅ Reopens 5PM
                    [hours] => Open until 2:30 PM
                    [phone] => +63 2 8527 0011
                    [website] => http://manila-hotel.com.ph/cafe-ilang-ilang/
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [user_review] => "Very safe for dining."
                    [editorial_reviews] => Array
                        (
                            [summary] => 12 Noche Buena Restaurants For A Fun Family Feast
                            [link] => https://www.ecomparemo.com/info/best-places-to-spend-noche-buena-in-manila/
                            [thumbnail] => //www.google.com/s2/favicons?domain=www.ecomparemo.com&sz=16
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipMARt7KAli8vbn6RlmuFFfMtfrANBjgFt9Mdh5W=w163-h92-k-no
                )

            [17] => Array
                (
                    [position] => 18
                    [title] => Savory Fastfood Incorporated
                    [place_id] => ChIJ4QVaex_KlzMR-uC5k9uAL6o
                    [data_id] => 0x3397ca1f7b5a05e1:0xaa2f80db93b9e0fa
                    [data_cid] => 12263161990917775610
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca1f7b5a05e1%3A0xaa2f80db93b9e0fa&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca1f7b5a05e1%3A0xaa2f80db93b9e0fa&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5897911
                            [longitude] => 120.9839231
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca1f7b5a05e1%3A0xaa2f80db93b9e0fa%218m2%213d14.5897911%214d120.9839231&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.5
                    [reviews] => 2
                    [type] => Fast food restaurant
                    [address] => UGF 143 SM Manila Concepcion Cor Arroceros, San Marcelino St, Bgy 659, Zone 071 Ermita, Manila, Philippines
                    [open_state] => Open ⋅ Closes 10PM
                    [hours] => Open until 10:00 PM
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipOGCpPQwRvV6KBr5MHvEeB1_meNC6t7Jr7kBmz6=w122-h92-k-no
                )

            [18] => Array
                (
                    [position] => 19
                    [title] => Patio de Conchita
                    [place_id] => ChIJcRtjxBfKlzMR0tizmNqi76o
                    [data_id] => 0x3397ca17c4631b71:0xaaefa2da98b3d8d2
                    [data_cid] => 12317242565630089426
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397ca17c4631b71%3A0xaaefa2da98b3d8d2&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397ca17c4631b71%3A0xaaefa2da98b3d8d2&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5918065
                            [longitude] => 120.9743615
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397ca17c4631b71%3A0xaaefa2da98b3d8d2%218m2%213d14.591806499999999%214d120.9743615&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.2
                    [reviews] => 184
                    [price] => $$
                    [type] => Restaurant
                    [address] => Beaterio St, Intramuros, Manila, 1002 Metro Manila, Philippines
                    [open_state] => Open ⋅ Closes 8PM
                    [hours] => Open until 8:00 PM
                    [phone] => +63 2 8404 1122
                    [website] => https://www.facebook.com/patio.d.conchita
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [editorial_reviews] => Array
                        (
                            [summary] => 10 Iconic Intramuros Restaurants That’ll Satisfy Your Hunger for Food and Culture
                            [link] => https://ph.phonebooky.com/blog/intramuros-restaurants/
                            [thumbnail] => //www.google.com/s2/favicons?domain=ph.phonebooky.com&sz=16
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipNGQ9bWUkpFC7u4RhjwAhb051n_bv9iXqzmVDWX=w80-h106-k-no
                )

            [19] => Array
                (
                    [position] => 20
                    [title] => Casa Roces
                    [place_id] => ChIJJU12AvTJlzMRd7xKySwUmMs
                    [data_id] => 0x3397c9f402764d25:0xcb98142cc94abc77
                    [data_cid] => 14670497968747625591
                    [reviews_link] => https://serpapi.com/search.json?data_id=0x3397c9f402764d25%3A0xcb98142cc94abc77&engine=google_maps_reviews&hl=en
                    [photos_link] => https://serpapi.com/search.json?data_id=0x3397c9f402764d25%3A0xcb98142cc94abc77&engine=google_maps_photos&hl=en
                    [gps_coordinates] => Array
                        (
                            [latitude] => 14.5933055
                            [longitude] => 120.9929889
                        )

                    [place_id_search] => https://serpapi.com/search.json?data=%214m5%213m4%211s0x3397c9f402764d25%3A0xcb98142cc94abc77%218m2%213d14.5933055%214d120.9929889&engine=google_maps&google_domain=google.com&hl=en&type=place
                    [rating] => 4.3
                    [reviews] => 303
                    [price] => $$$
                    [type] => Spanish restaurant
                    [address] => 1153 JP Laurel cor Aguado St. San Miguel, Manila, Aguado St, San Miguel, Maynila, Kalakhang Maynila, Philippines
                    [open_state] => Open ⋅ Closes 10PM
                    [hours] => Open until 10:00 PM
                    [phone] => +63 2 8735 5896
                    [service_options] => Array
                        (
                            [dine_in] => 1
                            [takeout] => 1
                        )

                    [user_review] => "Fine dining ambiance."
                    [editorial_reviews] => Array
                        (
                            [summary] => Your Ultimate 2019 Guide to Ordering Lechon in Metro Manila
                            [link] => https://www.clickthecity.com/food-drink/article/3444/your-ultimate-2019-guide-to-ordering-lechon-in-metro-manila/
                            [thumbnail] => //www.google.com/s2/favicons?domain=www.clickthecity.com&sz=16
                        )

                    [thumbnail] => https://lh5.googleusercontent.com/p/AF1QipPSAbKBjRJxM5JffALdflwWo9jKrwisUSnvS0Zb=w137-h92-k-no
                )

        )

    [serpapi_pagination] => Array
        (
            [next] => https://serpapi.com/search.json?engine=google_maps&google_domain=google.com&hl=en&ll=%4014.590607%2C120.979901%2C17z&q=dining&start=20&type=search
        )

)
1