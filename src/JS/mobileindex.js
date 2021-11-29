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
  
    $("#messages-tab").click(function(){
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

    $("#settings-tab").click(function(){
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