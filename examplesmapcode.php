<?php       


$YoutubeVids = file_get_contents("https://www.googleapis.com/youtube/v3/search?part=id&maxResults=10&q=Binondo&type=video&key=AIzaSyBi2oHeHWH5BD2Ck_iCaznlK2BZwDep998");
     
$yt = json_decode($YoutubeVids, TRUE); 

for ($i=0; $i < 9; $i++) { 
$id =  $yt['items'][$i]['id']['videoId'];            
echo '
    <div class="item">
      <a href="https://www.youtube.com/watch?app=desktop&v='.$id.'"><img src="http://img.youtube.com/vi/'.$id.'/hqdefault.jpg" title="YouTube Video" alt="YouTube Video" style="width:300px;height:200px;"/></a>
    </div>
';

}
 ?>
