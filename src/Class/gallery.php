<?php 

echo
'
<style>
* {
  margin: 0;
  padding: 0;
}
body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}
.portfolio {
  display: flex;
  flex-wrap: wrap;
  min-width: 320px;
}

.portfolio h2 {
  flex-basis: 100%;
  text-align: center;
  margin: 50px auto 30px;
  text-transform: uppercase;
  font-size: 20px;
  letter-spacing: 2px;
  color: #111;
}
.card {
  width: 25%;
  overflow: hidden;
  position: relative;
}

.card .image {
  z-index: 1;
  height: 100%;
}
.card img {
  height: 100%;
  width: 100%;
  transition: all 0.5s ease;
  transform: scale(1.2);
}

.card:hover .image img {
  transform: scale(1);
}

.card:active .image img {
  transform: scale(1);
}

.info {
  position: absolute;
  bottom: 8px;
  left: 16px;
  background-color:black;
}

.marker {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size:25px;
  color:white;
}

@media screen and (max-width: 768px) {
  .card {
  width: 50%;
  }
  .card .content {
    bottom: 0;
  }
}

@media screen and (max-width: 480px) {
  .card {
  width: 100%;
  }
}


</style>
<div class="portfolio">
  <h2 class="title">Latest Projects</h2>

  <div class="card">
    <div class="image">
    <a href="#" > 
     <img src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="" />  
    </a>
    </div>
    <div class="info">
    	<p>ewqewqewqe</p>
    </div>
  </div>

  <div class="card">
    <div class="image">
    <a href="#" > 
     <img src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="" />  
    </a>
    </div>
	<div class="marker">
	    	<p>17</p>
	</div>
    <div style="background-color:grey;width:100%;">
	    <div class="info">
	    	<p>ew333qewqe</p>
	    	<p>ew333qewqe</p>
	    	<p>ew333qewqe</p>
	    	<p>ew333qewqe</p>
	    </div>
	</div>
  </div>

</div>
';


 ?>