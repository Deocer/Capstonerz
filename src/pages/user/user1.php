<?php
session_start();
if (isset($_SESSION['UserName']) & isset($_SESSION['Id'])) {

}else{
$URL='../../../index.php';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';  
}

$id = $_SESSION['Id'];
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/post.php');
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/place.php');

if (isset($_GET['place'])) {
  $_SESSION['district'] =  $_GET['place'];
}
$plc = new PlaceView();
$place =  $_SESSION['district'];
$price =  $_SESSION['price'];
$type =  $_SESSION['type'];


if(isset($_GET['lat']) && isset($_GET['lot']) ){
  $_SESSION['lat'] = $_GET['lat'];
  $_SESSION['lot'] = $_GET['lot'];
  $Geocoding = file_get_contents("https://us1.locationiq.com/v1/reverse.php?key=pk.afe673b433d0909e7601c9ea96162a9e&lat=".
    $_SESSION['lat']."&lon=".$_SESSION['lot']."&format=json");


   $geo = json_decode($Geocoding, TRUE);
   $_SESSION['City'] = $geo['display_name'];
}


?>


<!DOCTYPE html>
 <html>
 <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/x-icon" href="../../../favicon.ico" />
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title></title>
 </head>
 
 <script>
  $(document).ready(function(){
    $("#resto").hide();
    $("#last").hide();
    $("#sort").hide();
    $("#input").keyup(function(){
          $( "#result" ).empty();
          $( "#demo" ).empty();
          $('#result').html( ""+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"
                  );
          $.ajax({
              url: '../../PHP/Functions/SearchDes.php',
              type:'post',
              data: {search: $(this).val()},
              success:function(result){
                  $('#pricesort').hide();
                  $("#result").html(result);
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $.ajax({
        url: '../../PHP/view/place.php',
        type:'post',
        data: {
              reco: "reco",
              lat: <?php echo $_SESSION['lat']?>,
              lot: <?php echo $_SESSION['lot']?>,
              district: "<?php echo $_SESSION['district']?>",
              city: "<?php echo $_SESSION['City']?>",
              price: "<?php echo $_SESSION['price']?>",
              type: "<?php echo $_SESSION['type']?>",
              },
              success:function(result){
                   $('#pricesort').hide();
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
              },
            error: function(){
                console.log("error")
            }
          });    

    $.ajax({
        url: '../../PHP/controller/itinerary.php',
        type:'post',
        data: {
              id:<?php echo$_SESSION['Id']?>,
              },
              success:function(result){
                  if (result != null) {
                    $("#last").show();
                  //----------------------------//
                  //----------------------------//                 
                }else{

                }

              },
            error: function(){
                console.log("error")
            }
          });

    $("#last").click(function(){
          $("#sort").hide();
          $("#resto").hide();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color", "black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#reco").css("color", "black");
          $("#last").css("color", "#9570DD");
          $('#demo').html( ""+
            "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
            "</div>"
                  );
          $.ajax({
              url: '../../PHP/controller/itinerary.php',
              type:'post',
              data: {
                    id:<?php echo$_SESSION['Id']?>,
                    },
                    success:function(result){
                        if (result != null) {
                          const myJSON = JSON.parse(result);
                        //----------------------------//
                            $.ajax({
                              url: '../../PHP/view/place.php',
                              type:'post',
                              data: {
                                      lst2: "",
                                      lat: <?php echo $_SESSION['lat']?>,
                                      lot: <?php echo $_SESSION['lot']?>,
                                      district: myJSON.District1,
                                      district2: myJSON.District2,
                                      type: myJSON.Type1,
                                      type2:myJSON.Type2,
                                      city: "<?php echo $_SESSION['City']?>",
                                    },
                                    success:function(res){
                                    $('#pricesort').hide();
                                    $( "#demo" ).empty();
                                    $( "#result" ).empty();
                                    $("#result").html(res);
                                    if (!$.trim(res)){   
                                          $("#result").html("<i class='fa fa-exclamation-triangle'></i>"+"<p>No Such Places</p>");
                                      }
                                    else{   
                                          $("#result").html(res);
                                      }
                                    },
                                  error: function(){
                                      console.log("error")
                                  }
                                }); 
                        //----------------------------//                 
                      }else{

                      }

                    },
                  error: function(){
                      console.log("error")
                  }
                });
    });
  
    $("#profile-tab").click(function(){
      $('#post').html( ""+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"
                  );
        $.ajax({
            url: '../../PHP/view/post.php',
            type:'post',
            data: {post:'<?php echo $_SESSION['Id']; ?>'},
            success:function(result){
             $("#post").html(result);
             },
            error: function(){
            console.log("error")
             }
        });
    });

    $("#messages-tab").click(function(){
        $('#uspost').html( ""+
            "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
            "</div>"
                  );
        $.ajax({
            url: '../../PHP/view/post.php',
            type:'post',
            data: {userpost:'<?php echo $_SESSION['Id']; ?>'},
            success:function(result){
             $("#uspost").html(result);
             },
            error: function(){
            console.log("error")
             }
        });
    });

    $("#landmark").click(function(){
          $("#sort").show();
          $("#resto").hide();
          $("#landmark").css("color", "#9570DD");
          $("#church").css("color", "black");
          $("#shopping").css("color", "black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
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
                      default: "Historical landmark",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>",
                      
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
                        <?php $destype = 'Landmark' ?>
                        $('#des').val("Historical landmark");
                    }

              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#church").click(function(){
          $("#sort").show();
          $("#resto").hide();
          $("#landmark").css("color", "black");
          $("#church").css("color", "#9570DD");
          $("#shopping").css("color", "black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#reco").css("color", "black");
          $("#last").css("color", "black");
          $('#result').html( ""+
            "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
            "</div>"
                  );
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      default: "church",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
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
                         <?php $destype = 'Church' ?>
                         $('#des').val("Church");
                    }
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#shopping").click(function(){
          $("#sort").show();
          $("#resto").hide();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color", "#9570DD");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
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
                      default: "Store",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
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
                      <?php $destype = 'Store' ?>
                      $('#des').val("Store");
                    }
              },
            error: function(){
                console.log("error")
            }
          });
    });


    $("#park").click(function(){
          $("#sort").show();
          $("#resto").hide();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "#9570DD");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
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
                      default: "park",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
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
                        <?php $destype = 'Park' ?>
                       $('#des').val("Park");
                    }
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#restaurant").click(function(){
          $("#sort").show();
          $("#resto").show();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "#9570DD");
          $("#attraction").css("color", "black");
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
                      default: "Restaurant",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
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
                        <?php $destype = 'Restaurant' ?>
                       $('#des').val("Restaurant");
                  }
              },
            error: function(){
                console.log("error")
            }
          });
    });


    $("#attraction").click(function(){
          $("#sort").show();
          $("#resto").hide();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "#9570DD");
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
                      default: "Tourist attraction",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
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
                        <?php $destype = 'Tourist Attraction' ?>
                       $('#des').val("Tourist Attraction");
                  }
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
                      default: "Café",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
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
                      default: "Eatery",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
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
                      default: "Fast Food",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
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
                      default: "#Bar",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
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
          $("#sort").hide();
          $("#resto").hide();
          $("#landmark").css("color", "black");
          $("#church").css("color", "black");
          $("#shopping").css("color","black");
          $("#park").css("color", "black");
          $("#restaurant").css("color", "black");
          $("#attraction").css("color", "black");
          $("#reco").css("color", "#9570DD");
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
                      reco: "reco",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>",
                      price: "<?php echo $_SESSION['price']?>",
                      type: "<?php echo $_SESSION['type']?>",
              },
              success:function(result){
                   $('#pricesort').hide();
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
              },
            error: function(){
                console.log("error")
            }
          });
    });

   $("#distance").click(function(){
          $("#resto").hide();
          $('#des').html( ""+
      "<div class='spinner-grow text-dark' role='status'>"+
        "<span class='visually-hidden'>Loading...</span>"+
      "</div>"
            );
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      distance: "",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>",
                      type:$('#des').val()
              },
              success:function(result){
                   $('#pricesort').hide();
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                   $('#des').html( "<?php echo $destype?>");
              },
            error: function(){
                console.log("error")
            }
          });
    });

   $("#prize").click(function(){
          $("#resto").hide();
          $('#demo').html( ""+
      "<div class='spinner-grow text-dark' role='status'>"+
        "<span class='visually-hidden'>Loading...</span>"+
      "</div>"
            );
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      prize:  "",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>",
                      price: "<?php echo $_SESSION['price']?>",
                      type: $('#des').val()
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                   $('#pricesort').show();
                   $('#des').html( "<?php echo $destype?>");
              },
            error: function(){
                console.log("error")
            }
          });
    });

   $("#asc").click(function(){
          $("#resto").hide();
          $('#demo').html( ""+
      "<div class='spinner-grow text-dark' role='status'>"+
        "<span class='visually-hidden'>Loading...</span>"+
      "</div>"
            );
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      asc:  "",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>",
                      price: "<?php echo $_SESSION['price']?>",
                      type: $('#des').val()
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                   $('#pricesort').show();
                   $('#des').html( "<?php echo $destype?>");
              },
            error: function(){
                console.log("error")
            }
          });
    });

   $("#dcs").click(function(){
          $("#resto").hide();
          $('#demo').html( ""+
      "<div class='spinner-grow text-dark' role='status'>"+
        "<span class='visually-hidden'>Loading...</span>"+
      "</div>"
            );
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      dsc:  "",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>",
                      price: "<?php echo $_SESSION['price']?>",
                      type: $('#des').val()
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                   $('#pricesort').show();
                   $('#des').html( "<?php echo $destype?>");
              },
            error: function(){
                console.log("error")
            }
          });
    });

   $("#popularity").click(function(){
          $("#resto").hide();
          $('#demo').html( ""+
      "<div class='spinner-grow text-dark' role='status'>"+
        "<span class='visually-hidden'>Loading...</span>"+
      "</div>"
            );
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      popularity:  "",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>",
                      type: $('#des').val()
              },
              success:function(result){
                   $('#pricesort').hide();
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
                   $('#des').html( "<?php echo $destype?>");
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

 <body>
<section class="container-fluid">


  <div class="row p-0 gx-3">


    <div class="col-1" style="padding: 0;">
    <?php include '../../Class/sidebar.php';?>
    </div>

<div class="col-7 mx-auto bg-light mx-2 me-3" style="overflow: auto;height:720px">

<div class="container bg-light">
  <h4 class="text-center p-1 sign" style="font-family: Caveat; font-weight: bolder;">TRAVEL FEED</h4>

    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
        <strong class="sign">
        Manila Area Map          
        </strong>
      </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
        <strong class="sign">
        Blog Feed          
        </strong>
      </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">
      <strong class="sign">
        My Post        
      </strong>
      </button>
      </li>
      <li class="nav-item" role="presentation">

        <?php 
          if ($_SESSION['Status'] == 'Normal') {
            echo '<button type="button" class="btn" style="background-color:#5E06AC;color:white;" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons">create</span></button>';
          }
         ?>

      </li>
    </ul>

    <div class="tab-content bg-light" style="width:100%;height: 100%;">
      <div class="tab-pane active bg-light" id="home" role="tabpanel" aria-labelledby="home-tab">

        <div class="container bg-light mx-auto py-2" style="overflow: hidden;">
          <div class="row mx-auto" style="overflow: hidden;margin: auto;">
            <div class="col" style="overflow: hidden;margin: auto;text-align: center;">


              <div class="card mx-auto" style="width:100%;height: 70%;">
                <?php 
                    if ($place == 'Tondo') {
                    echo '<img src="https://fastly.4sqi.net/img/general/600x600/QtNf3HOZCw4GiJMk0IhT3OZFpYy1XVm1PJnI0zk4H8o.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'San Nicolas') {
                    echo '<img src="https://outoftownblog.com/wp-content/uploads/2008/10/Casa-Vizantina-in-Madrid-Street-700x508.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Binondo') {
                    echo '<img src="https://images.contentstack.io/v3/assets/blt1306150c2c4003bc/bltd0e4036cee3390b0/5eb4be1655e75137dea93bd7/1._Chinese-Filipino_Friendship_Arch.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Port Area') {
                    echo '<img src="https://media.philstar.com/images/articles/gen17-manila-port-area-eddgumban_2018-08-17_22-04-28.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Ermita') {
                    echo '<img src="https://www.vigattintourism.com/assets/article_main_photos/optimize/1346054693SfB9lDHo.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Malate') {
                    echo '<img src="https://youimg1.tripcdn.com/target/100b1f000001gspscDB29.jpg?proc=source%2Ftrip" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'San Andres') {
                    echo '<img src="https://i.pinimg.com/originals/bf/ee/e8/bfeee8e46fa83afba4ebe803cd07ede8.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Santa Ana') {
                    echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Santa_Ana_Church_west_side.jpg/482px-Santa_Ana_Church_west_side.jpg">';
                    }



                    if ($place == 'Sta. Mesa') {
                    echo '<img src="https://lh5.googleusercontent.com/p/AF1QipNEac8SlyqKwFIPcMwlI43kFJbidXstknOXRP1h=w400-h300-k-no" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Sampaloc') {
                    echo '<img src="https://planetofhotels.com/guide/sites/default/files/styles/paragraph__hero_banner__hb_image__1880bp/public/hero_banner/Arch-of-the-Centuries.jpg" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Quiapo') {
                    echo '<img src="https://upload.wikimedia.org/wikipedia/commons/6/67/Allan_Jay_Quesada-_Quiapo_Church_DSC_0065_The_Minor_Basilica_of_the_Black_Nazarene_or_Quiapo_Church%2C_Manila.JPG" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Sta Cruz') {
                    echo '<img src="https://www.ssscongregatio.org/images/articles/News/Phil-Uga-U.S./Sta_Cruz_Church_Manila1.jpg" style="height:200px;">';
                    }


                    if ($place == 'San Miguel') {
                    echo '<img src="https://intrepidwanderer.com/wp-content/uploads/2013/05/Presidential-Museum-and-Library.jpg" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Intramuros') {
                    echo '<img src="https://a.cdn-hotels.com/gdcs/production16/d15/70589415-4617-4205-804f-210fbb296933.jpg" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Paco') {
                    echo '<img src="https://upload.wikimedia.org/wikipedia/commons/e/e2/View_from_the_pathway_at_Paco_Park.JPG" class="card-img-top" alt="..." style="height:200px;">';
                    }

                    if ($place == 'Pandacan') {
                    echo '<img src="https://mapio.net/images-p/56251936.jpg" style="height:200px;">';
                    }                      


                 ?>
                <div class="card-body">
                  <h5 class="card-title" style="font-family: Caveat;font-size:20px; font-weight: bolder;"><?php echo $place  ?></h5>
                  <p class="card-text" style="font-size:13px">Manila, capital and chief city of the Philippines. The city is the centre of the country's economic, political, social, and cultural activity. It is located on the island of Luzon and spreads along the eastern shore of Manila Bay at the mouth of the Pasig River.</p>

                </div>
              </div>
            </div>
            <div class="col" style="width:100px;height: 70%;">

              <img src="../../imgs/map.png" usemap="#image-map">

              <map name="image-map">
                  <area target="" alt="Tondo" title="Tondo" href="?place=Tondo" coords="8,27,7,51,54,51,62,106,65,114,70,146,76,225,66,225,42,174,34,181,50,222,0,241,2,261,74,252,70,244,78,239,95,238,123,197,133,192,152,200,162,169,154,132,160,93,170,92,171,57,162,40,170,13,164,1,156,2,158,13,143,19,139,15,87,15,72,31,56,27" shape="poly">
                  <area target="" alt="San Nicolas" title="San Nicolas" href="?place=San Nicolas" coords="71,244,78,239,95,239,119,198,125,202,128,211,122,217,128,222,132,231,135,241,138,252,138,258,115,251,92,252,76,254" shape="poly">
                  <area target="" alt="Binondo" title="Binondo" href="?place=Binondo" coords="124,196,128,209,124,217,132,231,136,244,139,256,149,255,155,248,159,240,155,232,146,228,142,221,146,217,149,208,152,202,133,193" shape="poly">
                  <area target="" alt="Port Area" title="Port Area" href="?place=Port Area" coords="109,258,92,257,80,263,64,275,63,280,57,283,76,323,115,354,138,325" shape="poly">
                  <area target="" alt="Ermita" title="Ermita" href="?place=Ermita" coords="137,327,131,333,133,339,129,352,137,365,142,362,148,376,156,379,161,389,170,391,212,363,194,349,187,330,192,327,183,289,172,273,166,262,162,254,154,255,148,259,154,269,160,279,162,287,162,299,162,307,160,314,154,323,142,333" shape="poly">
                  <area target="" alt="Malate" title="Malate" href="?place=Malate" coords="160,390,180,457,182,471,153,495,188,481,228,466,228,451,228,421,232,404,236,383,226,376,224,381,214,363,169,391" shape="poly">
                  <area target="" alt="San Andres" title="San Andres" href="?place=San Andres" coords="238,383,241,376,246,372,251,362,257,360,257,353,268,350,284,369,287,380,229,467,228,421,233,405" shape="poly">
                  <area target="" alt="Santa Ana" title="Santa Ana" href="?place=Santa Ana" coords="259,335,261,341,256,347,256,353,267,349,282,367,288,378,305,355,321,317,338,280,330,289,321,298,312,302,300,302,295,295,285,293,274,286,264,288,255,292,252,299,254,309,258,321,262,328" shape="poly">
                  <area target="" alt="Sta. Mesa" title="Sta. Mesa" href="?place=Sta. Mesa" coords="301,300,312,299,321,294,330,284,338,275,338,258,331,237,319,224,315,214,306,204,298,215,235,224,243,246,242,252,248,252,249,246,260,244,268,246,278,252,289,261,298,270,302,277,298,289,298,295" shape="poly">
                  <area target="" alt="Sampaloc" title="Sampaloc" href="?place=Sampaloc" coords="307,201,299,213,235,223,224,228,209,221,204,228,181,212,186,147,195,134,196,75,203,77" shape="poly">
                  <area target="" alt="Sta Cruz" title="Sta Cruz" href="?place=Sta Cruz" coords="200,75,211,18,184,2,170,12,162,38,171,56,170,94,161,93,154,130,162,169,149,209,145,219,147,226,155,230,160,239,157,246,163,248,168,256,176,248,184,146,193,135" shape="poly">
                  <area target="" alt="Quiapo" title="Quiapo" href="?place=Quiapo" coords="180,214,203,228,203,237,201,244,203,254,203,263,199,271,191,266,184,260,177,261,172,266,168,257,177,249" shape="poly">
                  <area target="" alt="San Miguel" title="San Miguel" href="?place=San Miguel" coords="210,221,204,230,201,242,204,252,204,262,198,270,183,261,174,265,171,270,184,287,195,295,203,296,212,287,220,276,225,264,232,257,242,257,241,249,244,243,235,224,224,229" shape="poly">
                  <area target="" alt="Intramuros" title="Intramuros" href="?place=Intramuros" coords="149,262,137,264,123,260,111,258,143,331,156,318,162,303,160,279" shape="poly">
                  <area target="" alt="Paco" title="Paco" href="?place=Paco" coords="251,258,242,257,234,257,225,262,220,276,205,295,185,289,193,326,188,332,194,349,213,360,222,377,228,374,237,381,245,371,251,361,256,358,256,346,260,341,259,335,243,336,235,318,233,303,245,293,251,284,252,273" shape="poly">
                  <area target="" alt="Pandacan" title="Pandacan" href="?place=Pandacan" coords="250,248,252,257,252,284,245,296,233,303,235,319,244,335,259,334,261,328,255,313,253,299,256,290,274,284,288,292,294,292,300,276,286,259,270,248,260,245" shape="poly">
              </map>
            </div>
          </div>


        </div> 

      </div>
      <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="messages-tab">
            <div id="post">          
            </div>
   
      </div>
       <div class="tab-pane bg-light" id="messages" role="tabpanel" aria-labelledby="messages-tab" style="margin:auto;">
          <div  class="bg-light" style="height: 600px;text-align: center;">
              <div id="uspost" class="bg-light">
                
              </div>
          </div>
      </div>
    </div>

    <script>
      var firstTabEl = document.querySelector('#myTab li:last-child a')
      var firstTab = new bootstrap.Tab(firstTabEl)

      firstTab.show()
    </script>

        <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content" style="width: 400px;">

               <div class="modal-header text-center ">
                  <h5>Post</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

                <div class="modal-body">
                  <div class="container-fluid" style="">
                      <form action="../../PHP/Functions/createPost.php" method="post" enctype="multipart/form-data">
                        <div>
                          <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                        </div>
                        <br>
                        <div>
                          <textarea class="form-control" id="exampleFormControlTextarea1" name="cont" placeholder="Tell Us About Your Experience!" rows="5" ></textarea>
                        </div>
                        <br>
                        <div class="container-fluid">
                          
                        </div>
                        <br>

                        <div class="mb-3">
                        <input name="file[]" type="file" multiple="multiple" />
                      </div>

                        <br>
                        <div>
                          <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                        <br>
                      </form>
                     
                </div>
              </div>
            </div>
          </div>
        </div>  
</div>

  
      

 </div>

    <div class="col text-center mx-auto bg-light" style="overflow: auto;height:720px;overflow-x: hidden;">
      <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <p class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                <p class="sign"> Places In <?php echo $place; ?></p>
              </button>
            </p>
            <div id="panelsStayOpen-collapseOne" class="accordion accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                    <div class="" style="font-size: 5px;">
                       <button  id="landmark" class="btn button1"><i class="fa fa-monument"></i>
                          Historical landmark          
                       </button>

                        <button  id="church" class="btn button1"><i class="fa fa-church"></i>
                         Church
                       </button>

                        <button  id="shopping" class="btn button1"><i class="fa fa-shopping-cart"></i>
                         Shopping            
                       </button>

                        <button  id="park" class="btn button1"><i class="fa fa-tree"></i>
                         Park            
                       </button>

                        <button  id="restaurant" class="btn button1"><i class="fa fa-cutlery"></i>
                         Restaurant            
                       </button>

                        <button  id="attraction" class="btn button1"><i class="fa fa-landmark"></i>
                         Tourist attraction            
                       </button>

                        <button  id="reco" class="btn button1"><i class="fa fa-map-marker"></i>
                         Recommended for you            
                       </button>
                        <button  id="last" class="btn button1"><i class="fa fa-map-marker"></i>
                         Places you might like            
                       </button>          
                    </div>
              </div>
            </div>
          </div>

      </div>
                    <div class="" id="resto" style="font-size: 5px;">
                       <button  id="Café" class="btn button1"><i class="fa fa-coffee"></i>
                          Café          
                       </button>

                        <button  id="Eatery" class="btn button1"><i class="fa fa-utensils"></i>
                         Eatery
                       </button>

                        <button  id="FastFood" class="btn button1"><i class="fa fa-hamburger"></i>
                         Fast Food            
                       </button>

                       <button  id="Bar" class="btn button1"><i class="fa fa-glass-martini"></i>
                         Bar            
                       </button>        
                    </div>

      <div id="pricesort" style="display: none;">
          <button  id="asc" class="btn"><i class="fa fa-sort-amount-up-alt"></i>
           Low to High            
         </button>

          <button  id="dcs" class="btn"><i class="fa fa-sort-amount-down-alt"></i>
           High to Low            
         </button>            

      </div>
    


      <div class="row g-3">

        <input id="des" type="" name="" style="display:none">

        <div class="col-auto">
            <div class="dropdown">     
                <button class="btn dropdown-toggle text-light" type="button" id="sort" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #9570DD;"><strong> Sort By :</strong>
                </button>
                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"  style="color: #9570DD;">
                    <li><p style="color: #9570DD;"id="distance" class="dropdown-item" >
                      <strong>Distance</strong> </p></li>
                    <li><p style="color: #9570DD;"id="prize" class="dropdown-item" >
                      <strong>Prize</p></strong></li>
                    <li><p style="color: #9570DD;"id="popularity"class="dropdown-item">
                      <strong>Popularity</strong></p></li>
                </ul>
           </div>
                    
        </div>
        <div class="col">
          <input type="text" class="form-control" id="input" placeholder="Search Place in Manila "
           style="width:100%;">
        </div>
      </div>
      <p id="result"></p>
      <div id="demo">      
      <div class="spinner-grow text-dark" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      </div>




    </div>


  </div>

  
</section>

<div class="modal open show w-100" id="sampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false"  style="display:block; background-color: rgba(1,1,1,0.5);">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Welcome <?php echo $_SESSION['UserName']; ?>!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" id="modalclose" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="welcome-tab" data-bs-toggle="tab" data-bs-target="#welcome" type="button" role="tab" aria-controls="home" aria-selected="true">Status</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="help-tab" data-bs-toggle="tab" data-bs-target="#help" type="button" role="tab" aria-controls="profile" aria-selected="false">Help</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="welcome" role="tabpanel" aria-labelledby="welcome-tab">

          <div class="row">
            <div class="col">
              <div class="card" style="width: 40rem;">
                <div class="card-body">
                  <h5 class="card-title">WELCOME TO WANDER!</h5>
                  <br>
                  <h6 class="card-subtitle mb-2 text-muted">Wander is a blog and itinerary website.</h6>
                  <br>
                  <p class="card-text">Welcome! Wander is a blog and itinerary website focused on destinations on Manila City. The Site primarily features destinations from Manila City,the functionality to leave reviews and Add destinations to your itinerary. The main objective of the site is help inform users about destinations in Manila City and help the user plan His/Her trip to the city.</p>
                </div>
              </div>              
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Status</h5>
                  <h6 class="card-subtitle mb-2 text-muted">User Info</h6>
                  <table >
                  <tr>
                    <td><strong>Username :</strong></td>
                    <td><?php echo $_SESSION['UserName']; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Status :</strong></td>
                    <td><?php echo $_SESSION['Status']; ?></td>
                  </tr>
                  <tr>
                    <td><strong>District :</strong></td>
                    <td><?php echo $_SESSION['district']; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Budget :</strong></td>
                    <td><?php echo $_SESSION['price']; ?></td>
                  </tr>
                </table>
                </div>
              </div> 
            </div>
          </div>
         
        </div>
        <div class="tab-pane fade" id="help" role="tabpanel" aria-labelledby="help-tab">
          <h5 class="text-lead text-center">Basic parts of the Website</h5>
          <br>
          <img src="../../imgs/parts.png"class="d-block w-100">
          <br>
          <h5><strong>I - Nav Bar</strong></h5>
              <div class ="row">
                <div class="col-4">
                      <p><strong>The Nav Bar</strong></p>
                      <p>Contains the Home, My Itinerary and Log out buttons respectively</p>
                        <p><strong>Home</strong> - Brings the User to the Home page</p>
                        <p><strong>My Itinerary</strong> - Brings the User to his/her Itinerary page</p>
                        <p><strong>Log out</strong> - Logs the user out and ends the session.</p>
                </div>
                <div class="col-6" style="margin:auto;text-align: center;">
                    <img src="../../imgs/nav.png"class="d-block ">
                </div>
              </div>
          <h5><strong>II - Map and Blog Tab</strong></h5>
              <div class ="row" style="overflow:hidden;">
                <div class="col-4">
                      <p><strong>Map and Blog Tab</strong></p>
                      <p> <b>The Map and Blog Tab</b>  contains the Area Map, Blogs tab and My post tabs </p>
                        <p> <strong>Area Map</strong> - The Area Map tab allows the user to change the current selected district and view more destinations. By clicking a district on the map the user can view all destinations on that district.</p>
                        <p> <strong>Blogs Tab</strong> - The Blogs Tab shows recent blog post from other users.</p>
                        <p> <strong>My Post Tabs</strong> - My Post Tabs shows all the user's post and allows the user to remove his/her own post.</p>
                        <p> <strong>Compose Post</strong> - The Pen button next to the My Post tab allows the user to compose post.</p>
                </div>
                <div class="col-6 p-0 g-0" style="margin:auto;background-color: gray;">
                  <div id="carouselExampleCaptions" class="carousel slide container-fluid" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../../imgs/MapTab.png" class="d-block w-100" alt="..." style="width: 100%;height: 400px;">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="color:mediumpurple;" class="bg-dark"><strong>Area Map</strong></h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="../../imgs/Blog.png" class="d-block w-100" alt="..." style="width: 100%;height: 400px;">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="color:mediumpurple;" class="bg-dark"><strong>Blogs tab</strong></h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="../../imgs/mypost.png" class="d-block w-100" alt="..." style="width: 100%;height: 400px;">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="color:mediumpurple;" class="bg-dark"><strong>My Post Tabs</strong></h5>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true" style="color:purple;"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="color:purple;">
                      <span class="carousel-control-next-icon" aria-hidden="true" style="color:purple;"></span>
                      <span class="visually-hidden" style="color:purple;">Next</span>
                    </button>
                  </div>
                </div>
              </div>
          <br>
          <h5><strong>III - Destinations Tab</strong></h5>
              <div class ="row">
                <div class="col-4">
                      <p><b>The Destinations Tab</b> contains  primarily all destinations or places in a particular district. 
                        <p> <strong>Place Types</strong>  - Allows the user to specify which types of place he/she wants to see in a district.</p>
                        <p> <strong>Sort and Search</strong> -Allows the user to user the destinations by distance, price or popularity. While the search function allows the user to search locations via name.</p>
                        <p> <strong>Place Recommendations</strong> - Shows the places in a district.</p>
                </div>
                <div class="col-6" style="margin:auto;text-align: center;">
                    <img src="../../imgs/destination.png"class="d-block ">
                </div>
              </div>         

        </div>

      </div>

      </div>
    </div>
  </div>
</div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script type="text/javascript">
  $("#modalclose").click( function () {
      console.log("click");
      $("#sampleModal").attr('style', 'display: none !important');
  });   

  </script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../../plugins/jquery.rwdImageMaps.min.js"></script>
 </body>

<script type="text/javascript">
  function reply_click(obj)
  {
       var modal = document.getElementById("myModal");
       var span = document.getElementsByClassName("close")[0];

       modal.style.display = "block";
       document.getElementById("modalpic").src = obj.src;


      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }


  }

  function flagP(pid,uid) {
    Swal.fire({
      title: 'Do you want to report this post?',
      showCancelButton: true,
      confirmButtonText: 'Report',
      confirmButtonColor: '#8CD4F5',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "../../PHP/controller/post.php?flagID="+pid+"&UID="+uid;
      } 
    });
  }



   function deleteP(id) {
            Swal.fire({
              title: 'Do you want to Remove this post?',
              showCancelButton: true,
              confirmButtonText: 'Remove Post',
              confirmButtonColor: '#8CD4F5',
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = "../../PHP/controller/post.php?usd="+id;
              } 
            });
      }


</script>

 </html>

 
