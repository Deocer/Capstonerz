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
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      type: "Historical landmark",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
            },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
              },
            error: function(){
                console.log("error")
            }
          });
    });


    $("#church").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      type: "church",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
            },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#shopping").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      type: "Shopping",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
            },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
              },
            error: function(){
                console.log("error")
            }
          });
    });


    $("#park").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      type: "park",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#restaurant").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      type: "Restaurant",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
              },
            error: function(){
                console.log("error")
            }
          });
    });


    $("#attraction").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      type: "Tourist attraction",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
              },
            error: function(){
                console.log("error")
            }
          });
    });

    $("#reco").click(function(){
          $.ajax({
              url: '../../PHP/view/place.php',
              type:'post',
              data: {
                      type: "reco",
                      lat: <?php echo $_SESSION['lat']?>,
                      lot: <?php echo $_SESSION['lot']?>,
                      district: "<?php echo $_SESSION['district']?>",
                      city: "<?php echo $_SESSION['City']?>"
              },
              success:function(result){
                   $( "#demo" ).empty();
                   $( "#result" ).empty();
                   $("#result").html(result);
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