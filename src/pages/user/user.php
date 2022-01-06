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
echo   $_SESSION['City'] = $geo['display_name'];
}



?>


<!DOCTYPE html>
 <html>
 <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/x-icon" href="../../../favicon.ico" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
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
          "<div style='margin:auto;text-align:center;font-size:50px;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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

   $("#modalclose").click(function(){
     $.ajax({
          url: '../../Class/setter.php',
          type:'post',
          data: {
                  close: "church",
                },
          success:function(result){
              console.log(result)
                  },
          error: function(){
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
        url: '../../PHP/view/place.php',
        type:'post',
        data: {
              preco: "reco",
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
                   $( "#res" ).empty();
                   $("#res").html(result);
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
                  if (result !== null || result !== '' || result.length === 0) {
                    const myJSON = JSON.parse(result);
                    console.log(myJSON);
                    $("#last").show();
                  //----------------------------//
                  //----------------------------//                 
                }else{
                    $("#last").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
                                          $("#result").html("<div style='padding-top:20px;font-size:50px;'><i class='fa fa-exclamation-triangle'></i>"+"<b><p>No Such Places</p></b></div>");
                                          $("#sort").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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

    $("#settings-tab").click(function(){
        $('#uspost').html( ""+
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
                        $("#result").html("<div style='padding-top:20px;font-size:50px;'><i class='fa fa-exclamation-triangle'></i>"+"<b><p>No Such Places</p></b></div>");
                        $("#sort").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
                        $("#result").html("<div style='padding-top:20px;font-size:50px;'><i class='fa fa-exclamation-triangle'></i>"+"<b><p>No Such Places</p></b></div>");
                        $("#sort").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
                        $("#result").html("<div style='padding-top:20px;font-size:50px;'><i class='fa fa-exclamation-triangle'></i>"+"<b><p>No Such Places</p></b></div>");
                        $("#sort").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
                        $("#result").html("<div style='padding-top:20px;font-size:50px;'><i class='fa fa-exclamation-triangle'></i>"+"<b><p>No Such Places</p></b></div>");
                        $("#sort").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
                        $("#result").html("<div style='padding-top:20px;font-size:50px;'><i class='fa fa-exclamation-triangle'></i>"+"<b><p>No Such Places</p></b></div>");
                        $("#sort").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
                        $("#result").html("<div style='padding-top:20px;font-size:50px;'><i class='fa fa-exclamation-triangle'></i>"+"<b><p>No Such Places</p></b></div>");
                        $("#sort").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
                        $("#result").html("<div style='padding-top:20px;font-size:50px;'><i class='fa fa-exclamation-triangle'></i>"+"<b><p>No Such Places</p></b></div>");
                        $("#sort").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
                        $("#result").html("<div style='padding-top:20px;font-size:50px;'><i class='fa fa-exclamation-triangle'></i>"+"<b><p>No Such Places</p></b></div>");
                        $("#sort").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
                        $("#result").html("<div style='padding-top:20px;font-size:50px;'><i class='fa fa-exclamation-triangle'></i>"+"<b><p>No Such Places</p></b></div>");
                        $("#sort").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
                        $("#result").html("<div style='padding-top:20px;font-size:50px;'><i class='fa fa-exclamation-triangle'></i>"+"<b><p>No Such Places</p></b></div>");
                        $("#sort").hide();
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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
          "<div style='margin:auto;text-align:center;'>"+
          "<div class='spinner-grow text-dark' role='status'>"+
              "<span class='visually-hidden'>Loading...</span>"+
          "</div>"+
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

<?php 


$useragent=$_SERVER['HTTP_USER_AGENT'];

if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) 
{
          include "../format/mobileuser.php";
}else{
          include "../format/user.php";
}

 ?>

 </body>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script type="text/javascript">
  $("#modalclose").click( function () {
      console.log("click");
      $("#sampleModal").attr('style', 'display: none !important');
  });   

  </script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../../plugins/jquery.rwdImageMaps.min.js"></script>
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

 
