<?php 

echo '
<style type="text/css">
li {
  list-style: none;
}

*::-webkit-scrollbar {
  display: none;
}

a {
  text-decoration: none;
  color: #fff;
}


.sidebar {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 95vh;
  width: 60px;
  background-color:#290340;
  border-radius: 10px;
  overflow: hidden;
  z-index: 2;
  box-shadow: 0 10px 20px #111;
}

/* sidebar open */
.sidebar.open {
  width: 250px;
}
.sidebar.open .menu-text {
  display: block;
}
.sidebar.open .menu-item {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 90%;
}

.sidebar.open .menu-item a {
  display: flex;
  align-items: center;
  justify-content: space-between;
  text-align: left;
}

.sidebar.open .menu-item i {
  margin: 15px;
}

.sidebar.open .expand-button i {
  transform: rotate(-180deg);
  position: absolute;
  right: 10px;
  top: -50%;
}
/* profile  */
/* expand icon */
.profile {
  display: grid;
  place-items: center;
  height: 60px;
  width: 100%;
  background-color:#5E06AC;
  font-size: 20px;
  color: #fff;
  margin-bottom: 5px;
}

.profile img {
  display: grid;
  place-items: center;
  height: 40px;
  width: 40px;
  background-color: #364f6b;
  border-radius: 50%;
  cursor: pointer;
}
.menu-text {
  display: none;
  color:#e1dee3;
}
/* main menu */
.main-menu {
  width: 100%;
  align-items: center;
  display: flex;
  flex-direction: column;
}
.menu-item {
  position: relative;
  margin: 5px 0;
  height: 40px;
  width: 40px;
  display: grid;
  place-items: center;
  border-radius: 5px;
  transition: all 0.2s ease;
  cursor: pointer;
}
.menu-item.active {
  background-color: #333333;
}

.menu-item:hover {
  transform: scale(1.2);
}

.main-menu i.menu-icon {
  font-size: 20px;
  cursor: pointer;
  color:#e1dee3;
}

/* expand icon */
.expand-button {
  position: absolute;
  bottom: 0;
  display: grid;
  place-items: center;
  height: 30px;
  width: 100%;
  font-size: 20px;
  color: #fff;
  background-color: #5E06AC;
}

.expand-button i {
  position: absolute;
  top: -50%;
  display: grid;
  place-items: center;
  height: 40px;
  width: 40px;
  background-color: black;
  border: 5px #222 solid;
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.2s ease;
}

/* code with love */
.code-with-love {
  position: absolute;
  right: 30px;
  bottom: 50px;
  border-radius: 5px;
  background-color: #111;
  padding: 10px;
  color: #fff;
  z-index: 99999999;
}

.code-with-love i.fa-heart,
.code-with-love span {
  color: #ff2828;
}

</style>


  <div class="sidebar">
    <div class="profile">
    <div class="menu-item">
          <i class="menu-icon fa fa-user"></i>
          <p class="menu-text">'.$_SESSION["UserName"].'</p>
      </div>
    </div>
    <div class="main-menu">
      <div class="menu-item">
        <a href="user.php">
          <i class="menu-icon fa fa-home"></i>
          <p class="menu-text">Home</p>
        </a>
      </div>
      <br>';

if ($_SESSION['Auth'] == 'Admin') {
    echo '
      <div class="menu-item">
        <a href="../admin/dashboard.php">
          <i class="menu-icon fa fa-dashboard"></i>
          <p class="menu-text">Dashboard</p>
        </a>
      </div>
        <br>';
 }

echo '
      <div class="menu-item">
        <a href="itinerary.php">
          <i class="menu-icon fa fa-map"></i>
          <p class="menu-text">Itinerary</p>
        </a>
      </div><br>
      <div class="menu-item">
        <a href="../../PHP/Functions/Log_out.php">
          <i class="menu-icon fa fa-sign-out"></i>
          <p class="menu-text">Log Out</p>
        </a>
      </div>

    </div>
    <!-- expand icon -->
    <div class="expand-button">
      <i class="fa fa-angle-right expand-icon"></i>
    </div>
  </div>

<script>
const sidebar = document.querySelector(".sidebar");
const expandIcon = document.querySelector(".expand-icon");

expandIcon.addEventListener("click", () => {
  sidebar.classList.toggle("open");
});
</script>
'


 ?>