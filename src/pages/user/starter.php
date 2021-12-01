<?php   
session_start();
 ?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="../../../favicon.ico" />
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <script src="https://api.mqcdn.com/sdk/place-search-js/v1.0.0/place-search.js"></script>
  <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/place-search-js/v1.0.0/place-search.css"/>
  <title></title>
</head>

<body>

<?php 


$useragent=$_SERVER['HTTP_USER_AGENT'];

if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) 
{
          echo '

  <div class="container">
    <div class="row vh-100 align-items-center justify-content-center">
      <div class="d-sm-flex justify-content-center">
        <!--Login Form-->
        <div class="bg-white rounded p-4 shadow" style="min-height: 400px; min-width: 90%;font-size: 1.5rem;">
        <h1 class="text-center p-1 sign"><img src="../../imgs/logo.png" style="height:100px;"></h1>

        <h5 style="margin: auto; text-align: center; font-weight: bold;">Getting Started:</h5>
        <br><br>
        <p style="margin: auto; text-align: center; font-weight: bold;"><strong>Almost there! Please the district in Manila you cuurently reside on or the district you want to visit.</strong></p>
        <br>
          <form action="../../PHP/Functions/Geocoding.php" method="post" class="container" style="margin: auto;">
            <div>
              <label><strong>Preferred Price Point For Destinations</strong></label>
              <br>
              <select class="form-select" aria-label="Please Your Current City Location" name="prize">
                <option value="1">I prefer travel on a lower budget</option>
                <option value="2">Average budget </option>
                <option value="3">I only travel on premium destinations</option>
              </select>
            </div>
            <br>
            <div>
             <label><strong>Which district in Manila City do you want to visit?</strong></label>
             <br>
              <select class="form-select"  aria-label="Please Your Current City Location" name="district">
                <option value="Tondo">Tondo</option>
                <option value="Binondo">Binondo</option>
                <option value="Port Area">Port Area</option>
                <option value="Ermita">Ermita</option>
                <option value="Malate">Malate</option>
                <option value="Santa Ana">Santa Ana</option>
                <option value="Sta. Mesa">Sta. Mesa</option>
                <option value="Sampaloc">Sampaloc</option>
                <option value="Sta Cruz">Sta Cruz</option>
                <option value="Quiapo">Quiapo</option>
                <option value="San Miguel">San Miguel</option>
                <option value="Intramuros">Intramuros</option>
                <option value="Paco">Paco</option>
                <option value="Pandacan">Pandacan</option>
                <option value="San Andres">San Andres</option>
                <option value="San Nicolas">San Nicolas</option>
              </select>
            </div>
            <br>
            <div>
             <label><strong>What Kind of Destinations Do you Frequently Visit:</strong></label>
             <br>
              <select class="form-select" aria-label="Please Your Current City Location" name="type">
                <option value="Restaurants">Restaurants</option>
                <option value="Park">Park</option>
                <option value="Art gallery">Art gallery</option>
                <option value="Hotels">Hotels</option>
                <option value="Spa">Spa</option>
                <option value="Tourist attraction">Tourist attraction</option>
              </select>
            </div>
            <div style="color:white;margin: auto;text-align: center;">
            <br>
               <button class="btn btn-outline-secondary btn-success " id="place-search-input" id="button-addon2" style="color:white;background-color:#290340;margin: auto;">Proceed</button>
            </div>
            <br>
         </form>
        </div>
        

      </div>      
    </div>
  </div> 


          ';
}else{
          echo '


  <div class="container">
    <div class="row vh-100 align-items-center justify-content-center">
      <div class="d-sm-flex justify-content-center">
        <!--Login Form-->
        <div class="bg-white rounded p-4 shadow" style="min-height: 400px; min-width: 90%;font-size: 1rem;">
        <h1 class="text-center p-1 sign"><img src="../../imgs/logo.png" style="height:100px;"></h1>

        <h5 style="margin: auto; text-align: center; font-weight: bold;">Getting Started:</h5>
        <br><br>
        <p style="margin: auto; text-align: center; font-weight: bold;"><strong>Almost there! Please the district in Manila you cuurently reside on or the district you want to visit.</strong></p>
        <br>
          <form action="../../PHP/Functions/Geocoding.php" method="post" class="container" style="margin: auto;">
            <div>
              <label><strong>Preferred Price Point For Destinations</strong></label>
              <br>
              <select class="form-select" aria-label="Please Your Current City Location" name="prize">
                <option value="1">I prefer travel on a lower budget</option>
                <option value="2">Average budget </option>
                <option value="3">I only travel on premium destinations</option>
              </select>
            </div>
            <br>
            <div>
             <label><strong>Which district in Manila City do you want to visit?</strong></label>
             <br>
              <select class="form-select"  aria-label="Please Your Current City Location" name="district">
                <option value="Tondo">Tondo</option>
                <option value="Binondo">Binondo</option>
                <option value="Port Area">Port Area</option>
                <option value="Ermita">Ermita</option>
                <option value="Malate">Malate</option>
                <option value="Santa Ana">Santa Ana</option>
                <option value="Sta. Mesa">Sta. Mesa</option>
                <option value="Sampaloc">Sampaloc</option>
                <option value="Sta Cruz">Sta Cruz</option>
                <option value="Quiapo">Quiapo</option>
                <option value="San Miguel">San Miguel</option>
                <option value="Intramuros">Intramuros</option>
                <option value="Paco">Paco</option>
                <option value="Pandacan">Pandacan</option>
                <option value="San Andres">San Andres</option>
                <option value="San Nicolas">San Nicolas</option>
              </select>
            </div>
            <br>
            <div>
             <label><strong>What Kind of Destinations Do you Frequently Visit:</strong></label>
             <br>
              <select class="form-select" aria-label="Please Your Current City Location" name="type">
                <option value="Restaurants">Restaurants</option>
                <option value="Park">Park</option>
                <option value="Art gallery">Art gallery</option>
                <option value="Hotels">Hotels</option>
                <option value="Spa">Spa</option>
                <option value="Tourist attraction">Tourist attraction</option>
              </select>
            </div>
            <div style="color:white;margin: auto;text-align: center;">
            <br>
               <button class="btn btn-outline-secondary btn-success " id="place-search-input" id="button-addon2" style="color:white;background-color:#290340;margin: auto;">Proceed</button>
            </div>
            <br>
         </form>
        </div>
        

      </div>      
    </div>
  </div> 


          ';
}

 ?>







 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <script type="text/javascript">
    
    placeSearch({
    key: 'UBI3Wc0udk0csdys2DFuAJAdhxdX00E9',
    container: document.querySelector('#place-search-input')
  });

  </script>

</body>
</html>
