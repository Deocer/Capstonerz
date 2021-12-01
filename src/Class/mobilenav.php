<?php 
echo 
'

<style>


body, html {
  margin: 0;
  padding: 0;
}

.wrapper {
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
}



.nav-menu {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-sizing: border-box;
  background: white;
  border-radius: 10px;
  padding: 20px;
}

.nav-btn {
  border-radius: 50%;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border: none;
  cursor: pointer;
  transition: 0.2s all ease-in-out;
  text-decoration: none;
  color: black;
}

.nav-btn > i {
  font-size: 1.25rem;
}

.nav-btn:hover {
  background: #9e9e9e;
  transition: 0.2s all ease-in-out;
}

.nav-btn:focus, .nav-btn.active {
  background: rgba(68,17,199,1);
  color: white;
  transition: 0.2s all ease-in-out;
}

</style>



<div class="wrapper" style= "border:20px;">
    <nav class="nav-menu container-fluid text-dark">
          <a class="nav-btn" href="user.php" role="button" aria-label="home button"  style= "margin-left:15vw;">
            <i class="fas fa-home"  style= "font-size:3rem;""></i>
          </a>';

if ($_SESSION['Auth'] == 'Admin') {
    echo '
           <a class="nav-btn" href="../admin/dashboard.php" role="button" aria-label="uploads button">
          <i class="fas fa-cog" style= "font-size:3rem;"></i>
          </a>
         ';
 }

          
echo'
            <a class="nav-btn" href="itinerary.php" role="button" aria-label="search button">
            <i class="fas fa-map" style= "font-size:3rem;"></i>
          </a>
            <a class="nav-btn" href="../../PHP/Functions/Log_out.php" role="button" aria-label="favorites button"  style= "margin-right:15vw;">
            <i class="fa fa-sign-out" style= "font-size:3rem;"></i>
          </a>
    </nav>
</div>

';



 ?>