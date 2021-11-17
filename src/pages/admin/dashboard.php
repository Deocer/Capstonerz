<?php
session_start();
if (isset($_SESSION['UserName']) && strcmp($_SESSION['UserName'], 'admin123') == 0) {

}else{
$URL='../../../index.php';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}
$id = $_SESSION['Id'];
include '../../PHP/Functions/CreateRecList.php';
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/post.php');
include ($_SERVER['DOCUMENT_ROOT'].'/PHP 00P/src/PHP/view/user.php');
$place = array();
$users = new UserView();
$plc = new PlaceView();
?>

<!DOCTYPE html>
 <html>
 <head>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 	<title></title>
 </head>
 <script type="text/javascript">
function tondochart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Tondo','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Tondo','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Tondo",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Tondo",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Tondo",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Tondo",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Tondo",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Tondo",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Tondo",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Tondo",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function nicolaschart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('San Nicolas','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('San Nicolas','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("San Nicolas",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("San Nicolas",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("San Nicolas",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("San Nicolas",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("San Nicolas",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("San Nicolas",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("San Nicolas",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("San Nicolas",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}


function binondochart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Binondo','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Binondo','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Binondo",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Binondo",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Binondo",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Binondo",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Binondo",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Binondo",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Binondo",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Binondo",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function cruzchart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Sta Cruz','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Sta Cruz','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Sta Cruz",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Sta Cruz",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Sta Cruz",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Sta Cruz",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Sta Cruz",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Sta Cruz",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Sta Cruz",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Sta Cruz",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function sampalocchart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Sampaloc','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Sampaloc','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Sampaloc",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Sampaloc",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Sampaloc",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Sampaloc",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Sampaloc",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Sampaloc",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Sampaloc",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Sampaloc",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}


function quiapochart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Quiapo','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Quiapo','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Quiapo",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Quiapo",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Quiapo",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Quiapo",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Quiapo",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Quiapo",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Quiapo",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Quiapo",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function intramuroschart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Intramuros','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Intramuros','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Intramuros",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Intramuros",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Intramuros",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Intramuros",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Intramuros",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Intramuros",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Intramuros",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Intramuros",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function portchart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Port Area','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Port Area','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Port Area",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Port Area",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Port Area",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Port Area",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Port Area",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Port Area",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Port Area",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Port Area",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function ermitachart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Ermita','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Ermita','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Ermita",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Ermita",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Ermita",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Ermita",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Ermita",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Ermita",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Ermita",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Ermita",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function miguelchart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('San Miguel','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('San Miguel','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("San Miguel",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("San Miguel",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("San Miguel",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("San Miguel",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("San Miguel",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("San Miguel",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("San Miguel",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("San Miguel",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function mesachart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Sta. Mesa','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Sta. Mesa','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Sta. Mesa",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Sta. Mesa",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Sta. Mesa",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Sta. Mesa",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Sta. Mesa",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Sta. Mesa",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Sta. Mesa",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Sta. Mesa",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function pandacanchart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Pandacan','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Pandacan','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Pandacan",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Pandacan",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Pandacan",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Pandacan",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Pandacan",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Pandacan",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Pandacan",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Pandacan",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function pacochart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Paco','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Paco','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Paco",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Paco",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Paco",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Paco",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Paco",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Paco",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Paco",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Paco",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function malatechart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Malate','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Malate','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Malate",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Malate",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Malate",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Malate",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Malate",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Malate",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Malate",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Malate",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function andreschart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('San Andres','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('San Andres','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("San Andres",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("San Andres",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("San Andres",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("San Andres",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("San Andres",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("San Andres",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("San Andres",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("San Andres",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}

function anachart(title){
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([

						  ['Task', 'Hours per Day'],
						  ['Historical landmark', <?php $plc->PlaceTypes('Santa Ana','Historical landmark');?>],
						  ['Church', <?php $plc->PlaceTypes('Santa Ana','Church');?>],
						  ['Shopping', <?php $plc->PlaceTypes("Santa Ana",'Shopping');?>],
						  ['Park', <?php $plc->PlaceTypes("Santa Ana",'Park');?>],
						  ['Restaurant', <?php $plc->PlaceTypes("Santa Ana",'Restaurant');?>],
						  ['Café', <?php $plc->PlaceTypes("Santa Ana",'Café');?>],
						  ['Eatery', <?php $plc->PlaceTypes("Santa Ana",'Eatery');?>],
						  ['FastFood', <?php $plc->PlaceTypes("Santa Ana",'FastFood');?>],
						  ['Bar', <?php $plc->PlaceTypes("Santa Ana",'Bar');?>],
						  ['Tourist attraction', <?php $plc->PlaceTypes("Santa Ana",'Tourist attraction');?>]
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':title, 'width':850, 'height':500};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}	
}
</script>
 <body>

<section class="container-fluid">


  <div class="row p-0 m-0">


    <div class="col-1" style="height: 3180px;">
          <aside class="p-0 bg-dark " style="height: 100%;">
            <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
              <br> <span class="material-icons text-light fs-1 text py-1">account_circle</span>
              <p class="text-light">
                <?php echo $_SESSION['UserName']; ?>
              </p>
              <br>
              <div class="collapse navbar-collapse order-last" id="nav">
                <ul  style="display:block;margin: 0;padding: 0;">
                  <li><span class="material-icons p-3 text-light">home</span><a href="../user/user.php"><i class="fw-bold text-light">Home</i></a></li>
                  <br>
                  <?php 

                        if ($_SESSION['Auth'] == 'Admin') {
                          echo '
                              <li><span class="material-icons p-3 text-light">dashboard</span><a href="../admin/dashboard.php"><i class="fw-bold text-light">Dashboard</i></a></li>
                          ';
                        }
                   ?>
                    <li><span class="material-icons p-3 text-light">travel_explore</span><a href="../itinerary/itinerary.php"><i class="fw-bold text-light">Itinerary</i></a></li>
                    <br>
                    <li><span class="material-icons p-3 text-light">logout</span><a href="../../Log_out.php"><i class="fw-bold text-light">Log Out</i></a></li>
                </ul>
              </div>
            </nav>
          </aside>
    </div>

    <div class="col mx-auto bg-light">

    	<h4 class=" text-light bg-dark text-center  p-3">TRAVEL FEED</h4>

	<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
	  <li class="nav-item" role="presentation">
	    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Active Post</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Archived Post</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">User Control</button>
	  </li>
	  <li class="nav-item" role="presentation">
	    <button class="nav-link" id="report-tab" data-bs-toggle="tab" data-bs-target="#report" type="button" role="tab" aria-controls="report" aria-selected="false">Report</button>
	  </li>
	</ul>

	<div class="tab-content">
	  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
			<table class="table">
			  <thead>
			    <tr class="table-dark">
			      <th scope="col">Post ID</th>
						<th scope="col">Post Title</th>
						<th scope="col">Content</th>
						<th scope="col">Images</th>
						<th scope="col">Flags</th>
						<th scope="col">Status</th>
						<th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
				 <?php 
						$p = new PostView();
						$p->AdminPost();
					?>
			  </tbody>
			</table>	
			<script type="text/javascript">

		    function deleteP(id) {
				    Swal.fire({
				      title: 'Do you want to Remove this post?',
				      showCancelButton: true,
				      confirmButtonText: 'Remove Post',
				      confirmButtonColor: '#8CD4F5',
				    }).then((result) => {
				      if (result.isConfirmed) {
				        window.location.href = "../../PHP/controller/post.php?nm="+id;
				      } 
				    });
		  }

     </script>
	  </div>
	  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="messages-tab">

				<table class="table">
			  <thead>
			    <tr class="table-dark">
			      <th scope="col">Post ID</th>
						<th scope="col">Post Title</th>
						<th scope="col">Content</th>
						<th scope="col">Images</th>
						<th scope="col">Flags</th>
						<th scope="col">Status</th>
						<th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
				 <?php 
						$c = new PostView();
						$c->AdminArchive();
					?>
			  </tbody>
			</table>	
			<script type="text/javascript">

		    function restoreP(id) {
				    Swal.fire({
				      title: 'Do you want to Restore this post?',
				      showCancelButton: true,
				      confirmButtonText: 'Restore Post',
				      confirmButtonColor: '#8CD4F5',
				    }).then((result) => {
				      if (result.isConfirmed) {
				        window.location.href = "../../PHP/controller/post.php?res="+id;
				      } 
				    });
		  }

     </script>		

	  </div>
	   <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
				<table class="table">
				  <thead>
				    <tr class="table-dark">
					    <th scope="col">User ID</th>
					    <th scope="col">User Name</th>
					    <th scope="col">Post</th>
					    <th scope="col">Flagged Post</th>
					    <th scope="col">User Status</th>
					    <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
					 <?php 
							$users->AdminUsers();
						?>
				  </tbody>
				</table>
				<script type="text/javascript">

			   function FlagU(id) {
					    Swal.fire({
					      title: 'Flagging this User may restrict His/Her access. Do you want to continue?',
					      showCancelButton: true,
					      confirmButtonText: 'Flag User',
					      confirmButtonColor: '#8CD4F5',
					    }).then((result) => {
					      if (result.isConfirmed) {
					        window.location.href = "../../PHP/controller/user.php?Status="+id;
					      } 
					    });
			  }

			  function Unflag(id) {
					    Swal.fire({
					      title: 'Unflagging a User gives them all previous access. Do you want to continue?',
					      showCancelButton: true,
					      confirmButtonText: 'Unflag User',
					      confirmButtonColor: '#8CD4F5',
					    }).then((result) => {
					      if (result.isConfirmed) {
					        window.location.href = "../../PHP/controller/user.php?Unstat="+id;
					      } 
					    });
			  }

	     </script>	
	  </div>
	   <div class="tab-pane" id="report" role="tabpanel" aria-labelledby="report-tab">
	   	<div class="container">
          <div class="row mx-auto" style="overflow: hidden;margin: auto;">
            <div class="col" style="width:100px;height: 70%;">

              <img src="../../imgs/map.png" usemap="#image-map">

              <map name="image-map">
                  <area target="" alt="Tondo" title="Tondo" onclick="tondochart('Places In Tondo')" id="tondomap" coords="8,27,7,51,54,51,62,106,65,114,70,146,76,225,66,225,42,174,34,181,50,222,0,241,2,261,74,252,70,244,78,239,95,238,123,197,133,192,152,200,162,169,154,132,160,93,170,92,171,57,162,40,170,13,164,1,156,2,158,13,143,19,139,15,87,15,72,31,56,27" shape="poly">
                  <area target="" alt="San Nicolas" title="San Nicolas"  onclick="nicolaschart('Places In San Nicolas')" coords="71,244,78,239,95,239,119,198,125,202,128,211,122,217,128,222,132,231,135,241,138,252,138,258,115,251,92,252,76,254" shape="poly">
                  <area target="" alt="Binondo" title="Binondo" id="binondomap" onclick="binondochart('Places In Binondo')" coords="124,196,128,209,124,217,132,231,136,244,139,256,149,255,155,248,159,240,155,232,146,228,142,221,146,217,149,208,152,202,133,193" shape="poly">
                  <area target="" alt="Port Area" title="Port Area" onclick="portchart('Places In Port Area')" coords="109,258,92,257,80,263,64,275,63,280,57,283,76,323,115,354,138,325" shape="poly">
                  <area target="" alt="Ermita" title="Ermita"  onclick="ermitachart('Places In Ermita')" coords="137,327,131,333,133,339,129,352,137,365,142,362,148,376,156,379,161,389,170,391,212,363,194,349,187,330,192,327,183,289,172,273,166,262,162,254,154,255,148,259,154,269,160,279,162,287,162,299,162,307,160,314,154,323,142,333" shape="poly">
                  <area target="" alt="Malate" title="Malate"  onclick="malatechart('Places In Malate')" coords="160,390,180,457,182,471,153,495,188,481,228,466,228,451,228,421,232,404,236,383,226,376,224,381,214,363,169,391" shape="poly">
                  <area target="" alt="San Andres" title="San Andres"  onclick="andreschart('Places In San Andres')"  coords="238,383,241,376,246,372,251,362,257,360,257,353,268,350,284,369,287,380,229,467,228,421,233,405" shape="poly">
                  <area target="" alt="Santa Ana" title="Santa Ana" onclick="anachart('Places In Santa Ana')" coords="259,335,261,341,256,347,256,353,267,349,282,367,288,378,305,355,321,317,338,280,330,289,321,298,312,302,300,302,295,295,285,293,274,286,264,288,255,292,252,299,254,309,258,321,262,328" shape="poly">
                  <area target="" alt="Sta. Mesa" title="Sta. Mesa" onclick="mesachart('Places In Sta. Mesa')"  coords="301,300,312,299,321,294,330,284,338,275,338,258,331,237,319,224,315,214,306,204,298,215,235,224,243,246,242,252,248,252,249,246,260,244,268,246,278,252,289,261,298,270,302,277,298,289,298,295" shape="poly">
                  <area target="" alt="Sampaloc" title="Sampaloc" onclick="sampalocchart('Places In Sampaloc')" coords="307,201,299,213,235,223,224,228,209,221,204,228,181,212,186,147,195,134,196,75,203,77" shape="poly">
                  <area target="" alt="Sta Cruz" title="Sta Cruz"  onclick="cruzchart('Places In Sta Cruz')" coords="200,75,211,18,184,2,170,12,162,38,171,56,170,94,161,93,154,130,162,169,149,209,145,219,147,226,155,230,160,239,157,246,163,248,168,256,176,248,184,146,193,135" shape="poly">
                  <area target="" alt="Quiapo" title="Quiapo" onclick="quiapochart('Places In Quiapo')"  coords="180,214,203,228,203,237,201,244,203,254,203,263,199,271,191,266,184,260,177,261,172,266,168,257,177,249" shape="poly">
                  <area target="" alt="San Miguel" title="San Miguel"  onclick="miguelchart('Places In San Miguel')"  coords="210,221,204,230,201,242,204,252,204,262,198,270,183,261,174,265,171,270,184,287,195,295,203,296,212,287,220,276,225,264,232,257,242,257,241,249,244,243,235,224,224,229" shape="poly">
                  <area target="" alt="Intramuros" title="Intramuros" onclick="intramuroschart('Places In Intramuros')" coords="149,262,137,264,123,260,111,258,143,331,156,318,162,303,160,279" shape="poly">
                  <area target="" alt="Paco" title="Paco" onclick="pacochart('Places In Paco')" coords="251,258,242,257,234,257,225,262,220,276,205,295,185,289,193,326,188,332,194,349,213,360,222,377,228,374,237,381,245,371,251,361,256,358,256,346,260,341,259,335,243,336,235,318,233,303,245,293,251,284,252,273" shape="poly">
                  <area target="" alt="Pandacan" title="Pandacan" onclick="pandacanchart('Places In Pandacan')" coords="250,248,252,257,252,284,245,296,233,303,235,319,244,335,259,334,261,328,255,313,253,299,256,290,274,284,288,292,294,292,300,276,286,259,270,248,260,245" shape="poly">
              </map>
            </div>
           <div class="col-8" style="overflow: hidden;margin: auto;text-align: center;">
              <div class="card mx-auto" style="width:100%;height: 70%;box-shadow: 5px 5px 10px 4px rgba(0,0,0,0.5);">
                <div class="card-body">
										<div id="piechart"></div>
                </div>
              </div>
            </div>
          </div>

				<table class="table">
			  <thead>
			    <tr class="table-dark">
			      <th scope="col">User</th>
						<th scope="col">Normal</th>
						<th scope="col">Flagged</th>
						<th scope="col">Total Users</th>

			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">*</th>
						<td><?php $n = $users->Normals(); ?></td>
						<td><?php $f = $users->Flagged(); $t = $n + $f ?></td>
						<td><?php echo $t; ?></td>
			    </tr>
			  </tbody>
			</table>

				<table class="table">
			  <thead>
			    <tr class="table-dark">
			      <th scope="col">Post</th>
						<th scope="col">Active</th>
						<th scope="col">Archived</th>
						<th scope="col">Deleted</th>
						<th scope="col">Total</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">*</th>
						<td><?php $ac = $p->ActivePost(); ?></td>
						<td><?php $ar = $p->ArchivePost(); ?></td>
						<td><?php $dl = $p->DeletedPost(); $t = $ac + $ar +$dl ?></td>
						<td><?php echo $t; ?></td>
			    </tr>
			  </tbody>
			</table>

	   		</div>
	  </div>
	</div>

	<script>
	  var firstTabEl = document.querySelector('#myTab li:last-child a')
	  var firstTab = new bootstrap.Tab(firstTabEl)

	  firstTab.show()
	</script>			

    </div>




  </div>

  
</section>
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 </body>
 </html>


