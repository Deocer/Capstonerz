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



<div class="wrapper">
    <nav class="nav-menu container-fluid text-dark">
          <a class="nav-btn" href="#home" role="button" aria-label="home button">
            <i class="fas fa-cog"></i>
          </a>
            <a class="nav-btn" href="#search" role="button" aria-label="search button">
            <i class="fas fa-cog"></i>
          </a>
            <a class="nav-btn" href="#favorites" role="button" aria-label="favorites button">
            <i class="fas fa-cog"></i>
          </a>
           <a class="nav-btn" href="#uploads" role="button" aria-label="uploads button">
          <i class="fas fa-cog"></i>
          </a>
    </nav>
</div>

';



 ?>