  <!DOCTYPE html>
  <html>

  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>
    </title>
  </head>

<body class=""> 


<div class="modal open show w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" style="display:block;">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Welcome title!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" id="modalclose" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Notifications</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Help</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

          <div class="row">
            <div class="col">
              <div class="card" style="width: 40rem;">
                <div class="card-body">
                  <h5 class="card-title">WELCOME TO WANDER!</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Wander is a blog and itinerary website.</h6>
                  <p class="card-text">Welcome! Wander is a blog and itinerary website focused on destinations on Manila City. The Site primarily features destinations from Manila City,the functionality to leave reviews and Add destinations to your itinerary. The main objective of the site is help inform users about destinations in Manila City and help the user plan His/Her trip to the city.</p>
                </div>
              </div>              
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Status Notifications</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div> 
            </div>
          </div>
         
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <h5 class="text-lead text-center">Basic parts of the Website</h5>
          <br>
          <img src="src/imgs/parts.png"class="d-block w-100">
          <br>
          <h5><strong>I - Nav Bar</strong></h5>
              <div class ="row">
                <div class="col-4">
                      <p><strong>The Nav Bar</strong></p>
                      <p>Contains the Home, My Itinerary and Log out buttons respectively</p>
                      <ol>
                        <li> Home - Brings the User to the Home page</li>
                        <li> My Itinerary - Brings the User to his/her Itinerary page</li>
                        <li> Log out - Logs the user out and ends the session.</li>
                      </ol>
                </div>
                <div class="col-6" style="margin:auto;text-align: center;">
                    <img src="src/imgs/nav.png"class="d-block ">
                </div>
              </div>
          <h5><strong>II - Map and Blog Tab</strong></h5>
              <div class ="row" style="overflow:hidden;">
                <div class="col-4">
                      <p><strong>Map and Blog Tab</strong></p>
                      <p> <b>The Map and Blog Tab</b>  contains the Area Map, Blogs tab and My post tabs </p>
                      <ol>
                        <li> <b>Area Map</b> - The Area Map tab allows the user to change the current selected district and view more destinations. By clicking a district on the map the user can view all destinations on that district.</li>
                        <li> <b>Blogs Tab</b> - The Blogs Tab shows recent blog post from other users.</li>
                        <li> <b>My Post Tabs</b> - My Post Tabs shows all the user's post and allows the user to remove his/her own post.</li>
                        <li> <b>Compose Post</b> - The Pen button next to the My Post tab allows the user to compose post.</li>
                      </ol>
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
                        <img src="src/imgs/MapTab.png" class="d-block w-100" alt="..." style="width: 100%;height: 400px;">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="color:mediumpurple;" class="bg-dark"><strong>Area Map</strong></h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="src/imgs/Blog.png" class="d-block w-100" alt="..." style="width: 100%;height: 400px;">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="color:mediumpurple;" class="bg-dark"><strong>Blogs tab</strong></h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="src/imgs/mypost.png" class="d-block w-100" alt="..." style="width: 100%;height: 400px;">
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
          <h5><strong>III - Destinations Tab</strong></h5>
              <div class ="row">
                <div class="col-4">
                      <p><strong>The Destinations Tab</strong></p>
                      <p><b>The Destinations Tab</b> contains  primarily all destinations or places in a particular district. 
                      <ol>
                        <li> <b>Place Types</b>  - Allows the user to specify which types of place he/she wants to see in a district.</li>
                        <li> <b>Sort and Search</b> -Allows the user to user the destinations by distance, price or popularity. While the search function allows the user to search locations via name.</li>
                        <li> <b>Place Recommendations</b> - Shows the places in a district.</li>
                      </ol>
                </div>
                <div class="col-6" style="margin:auto;text-align: center;">
                    <img src="src/imgs/destination.png"class="d-block ">
                </div>
              </div>         

        </div>

      </div>

      </div>
    </div>
  </div>
</div>
  </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script type="text/javascript">
  $('#modalclose').click( function () {
      $('#exampleModal').css('display','none')
  });   

  </script>
  </html>