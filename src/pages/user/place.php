<?php 
session_start();
if (isset($_SESSION['Id'])) {

}else{
header("location:../../../index.php");
 exit();
}

include '../../PHP/Functions/CreateRecList.php';
include '../../PHP/view/review.php';
class Place extends PlaceView
  {

  }
$id = $_SESSION['Id'];
if (isset($_GET['lat']) && isset($_GET['lot']) && isset($_GET['nm']) && isset($_GET['desc']) && isset($_GET['img']) && isset($_GET['class']) && isset($_GET['rating'])  && isset($_GET['price'])  && isset($_GET['hours'])  && isset($_GET['address']) ){
$lat = $_GET['lat'];
$lot = $_GET['lot'];
$nm = $_GET['nm'];
$desc = $_GET['desc'];
$rating = $_GET['rating'];
$class = $_GET['class'];
$price = $_GET['price'];
$hour = $_GET['hours'];
$address = $_GET['address'];
$contact = $_GET['contact'];
$site = $_GET['site'];
}

$id = $_SESSION['Id'];
echo $id;

$plc = new Place();
$rev = new ReviewView();
 ?>
  <!DOCTYPE html>
  <html>

  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>
      <?php echo $nm; ?>
    </title>
    <script type="text/javascript">
    window.onload = function() {
      L.mapquest.key = 'lYrP4vF3Uk5zgTiGGuEzQGwGIVDGuy24';
      var map = L.mapquest.map('map', {
        center: [<?php echo $lat; ?>, <?php echo $lot; ?>],
        layers: L.mapquest.tileLayer('map'),
        zoom: 18
      });
      L.marker([<?php echo $lat; ?>, <?php echo $lot; ?>], {
        icon: L.mapquest.icons.marker(),
        draggable: false
      }).bindPopup('<?php echo $nm;?>').addTo(map);
    }
    </script>
  </head>

  <body>


<?php 


$useragent=$_SERVER['HTTP_USER_AGENT'];

if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) 
{
          include "../format/mobileplace.php";
}else{
          include "../format/place.php";
}

 ?>


  </body>
<script type="text/javascript">
   function add() {
       Swal.fire({
          title: "Destination added!",
          text:  "<?php echo $nm ?>" +" has been added to your itinerary",
          icon: "success",
          }).then(function() {
          window.location.href = "../../PHP/controller/itinerary.php?nm=<?php echo $nm; ?>&id=<?php echo $id; ?>";
          });
      }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 <script>
    $("#resto").hide();
    $("#last").hide();
    $("#sort").hide();
  $(document).ready(function(){
    $("#input").keyup(function(){
          $( "#result" ).empty();
          $( "#demo" ).empty();
          $.ajax({
              url: '../../PHP/Functions/SearchDes.php',
              type:'post',
              data: {search: $(this).val()},
              success:function(result){
                  $("#result").html(result);
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#landmark").click(function(){
           $("#resto").hide();
          $("#landmark").css("color", "#9570DD");
          $("#church").css("color", "black");
          $("#shopping").css("color", "black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#reco").css("color", "black");
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Historical landmark",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Historical landmark",
                      
            },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                   <?php $destype = 'Landmark' ?>
                   $('#dest').html("Historical landmark");
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#church").click(function(){
          $("#resto").hide();
          $("#landmark").css("color", "black");
          $("#church").css("color", "#9570DD");
          $("#shopping").css("color", "black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#reco").css("color", "black");
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "church",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Church",
            },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                   <?php $destype = 'Church' ?>
                   $('#dest').html("Church");
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#shopping").click(function(){
          $("#resto").hide();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color", "#9570DD");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#reco").css("color", "black");
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "shopping",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Store",
            },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                    <?php $destype = 'Shopping' ?>
                   $('#dest').html("Shopping");
              },
            error: function(){
                console.log("error")
            }
          });
    });


    $("#park").click(function(){
          $("#resto").hide();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "#9570DD");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#reco").css("color", "black");
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Park",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Park",
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                    <?php $destype = 'Park' ?>
                   $('#dest').html("Park");
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#restaurant").click(function(){
          $("#resto").show();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "#9570DD");
          $("#attraction").css("color", "black");
          $("#reco").css("color", "black");
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Restaurant",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Restaurant",
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                    <?php $destype = 'Restaurant' ?>
                   $('#dest').html("Restaurant");
              },
            error: function(){
                console.log("error")
            }
          });
    });


    $("#attraction").click(function(){
          $("#resto").hide();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "#9570DD");
          $("#reco").css("color", "black");
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Tourist attraction",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Tourist attraction",
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                    <?php $destype = 'Tourist Attraction' ?>
                   $('#dest').html("Tourist Attraction");
              },
            error: function(){
                console.log("error")
            }
          });
    });

   $("#Café").click(function(){
          $("#sort").show();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#Café").css("color", "#9570DD");
          $("#Eatery").css("color", "black");
          $("#FastFood").css("color", "black");
          $("#Bar").css("color", "black");
          $("#reco").css("color", "black");
          $("#last").css("color", "black");
          $('#demo').html( ""+
            "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
            "</div>"
                  );
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Café",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Café",
              },
              success:function(result){
                   $('#pricesort').hide();
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   if (!$.trim(result)){   
                        $("#result").html("<i class='fa fa-exclamation-triangle'></i>"+"<p>No Such Places</p>");
                    }
                  else{   
                       $("#result").html(result);
                        <?php $destype = 'Café' ?>
                       $('#des').val("Café ");
                  }
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#Eatery").click(function(){
          $("#sort").show();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#Café").css("color", "black");
          $("#Eatery").css("color", "#9570DD");
          $("#FastFood").css("color", "black");
          $("#Bar").css("color", "black");
          $("#reco").css("color", "black");
          $("#last").css("color", "black");
          $('#demo').html( ""+
            "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
            "</div>"
                  );
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Eatery",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Eatery",
              },
              success:function(result){
                   $('#pricesort').hide();
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   if (!$.trim(result)){   
                        $("#result").html("<i class='fa fa-exclamation-triangle'></i>"+"<p>No Such Places</p>");
                    }
                  else{   
                       $("#result").html(result);
                        <?php $destype = 'Eatery' ?>
                       $('#des').val("Eatery");
                  }

              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#FastFood").click(function(){
          $("#sort").show();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#Café").css("color", "black");
          $("#Eatery").css("color", "black");
          $("#FastFood").css("color", "#9570DD");
          $("#Bar").css("color", "black");
          $("#reco").css("color", "black");
          $("#last").css("color", "black");
          $('#demo').html( ""+
            "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
            "</div>"
                  );
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "FastFood",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "FastFood",
              },
              success:function(result){
                   $('#pricesort').hide();
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   if (!$.trim(result)){   
                        $("#result").html("<i class='fa fa-exclamation-triangle'></i>"+"<p>No Such Places</p>");
                    }
                  else{   
                       $("#result").html(result);
                        <?php $destype = 'Fast Food' ?>
                       $('#des').val("Fast Food");  
                  }
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#Bar").click(function(){
          $("#sort").show();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#Café").css("color", "black");
          $("#Eatery").css("color", "black");
          $("#FastFood").css("color", "black");
          $("#Bar").css("color", "#9570DD");
          $("#reco").css("color", "black");
          $("#last").css("color", "black");
          $('#demo').html( ""+
            "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
            "</div>"
                  );
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Bar",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "Bar",
              },
              success:function(result){
                   $('#pricesort').hide();
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   if (!$.trim(result)){   
                        $("#result").html("<i class='fa fa-exclamation-triangle'></i>"+"<p>No Such Places</p>");
                    }
                  else{   
                       $("#result").html(result);
                        <?php $destype = '#Bar' ?>
                       $('#des').val("#Bar"); 
                  }
              },
            error: function(){
                console.log("error")
            }
          });
    });

     $("#reco").click(function(){
          $("#resto").hide();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#reco").css("color", "#9570DD");
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      rec: "Tourist attraction",
                      lat: <?php echo $lat?>,
                      lot: <?php echo $lot?>,
                      nm: "<?php echo $nm ?>",
                      class: "<?php echo $class ?>",
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                   $('#dest').html("<?php echo $class ?>");
              },
            error: function(){
                console.log("error")
            }
          });
    });



    $('#input').blur(function()
    {
    if( !$(this).val() ) {
         $( "#result" ).empty();
    }
    });
  });

</script>
  </html>