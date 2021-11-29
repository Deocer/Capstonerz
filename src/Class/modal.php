<?php 
if (isset($_SESSION['close'])) {
	       echo '';	
}else{
	       echo '

<div class="modal open show w-100" id="sampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false"  style="display:block; background-color: rgba(1,1,1,0.5);">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Welcome'.$_SESSION['UserName'].'!</h5>
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
                    <td>'.$_SESSION['UserName'].'</td>
                  </tr>
                  <tr>
                    <td><strong>Status :</strong></td>
                    <td>'.$_SESSION['Status'].'</td>
                  </tr>
                  <tr>
                    <td><strong>District :</strong></td>
                    <td>'.$_SESSION['district'].'</td>
                  </tr>
                  <tr>
                    <td><strong>Budget :</strong></td>
                    <td>'.$_SESSION['price'].'</td>
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
                        <p> <strong>My Post Tabs</strong> - My Post Tabs shows all the users post and allows the user to remove his/her own post.</p>
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


       ';

}





 ?>