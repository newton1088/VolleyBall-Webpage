<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <script src="https://kit.fontawesome.com/2a4307d0cf.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">      
  </head>
  <body>
<div class="container-fluid">
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Volley</a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Photos</a>
      </li>
       
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Movs</a>
          <a class="dropdown-item" href="#">Players</a>
          <a class="dropdown-item" href="#">Position</a>
        </div>
      </li>
         <li class="nav-item">
        <a href="logout.php" class="nav-link pull-right">Logout</a>"
      </li>
    </ul>
  </div>
</nav>

<div class="section-light" >
 <div class="row">
     <div class="col-sm-12">
   <div class="jumbotron jumbotron-fluid">
     <div class="container">
       <h1 class="display-3">Welcome to my world</h1>
    <p class="lead">Dont aspire to be the best in the team aspire to be best for the team</p>
 
</div>
</div>
</div>
</div>

      
<div class="row">

    <div class=col></div>
    <div class="col-sm-12 col-md-6">
            <div id="mainCor" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="photos/95574.jpg" alt="First slide">
                    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="photos/95568.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
    <h3>Volleyball for life</h3>
    <p>New Tricks</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="photos/95571.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#mainCor" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="col"></div>
</div>
</div>
<!--section two-->
<div class = "section-dark">
    <div class ="row">
    <div class="col-sm-12 col-md-3">
        <div class="row"></div>
        <div class="row">
        <img class="img-fluid" src="photos/95568.jpg">
        </div>
        <div class="row"></div>
        </div>
  
    
    <div class="col-sm-12 col-md-6">
        <div class="row">
            <div class="col-sm-12">
                <p>Volleyball is a team sport in which two teams of six players are separated by a net. Each team tries to score points by grounding a ball on the other team's court under organized rules.[1] It has been a part of the official program of the Summer Olympic Games since Tokyo 1964.The complete set of rules are extensive,[2] but play essentially proceeds as follows: a player on one of the teams begins a 'rally' by serving the ball (tossing or releasing it and then hitting it with a hand or arm), from behind the back boundary line of the court, over the net, and into the receiving team's court.[3] The receiving team must not let the ball be grounded within their court. The team may touch the ball up to 3 times, but individual players may not touch the ball twice consecutively.</p>
            </div>
        
        
        </div> 
    <div class="row">
        <div class="col-sm-12 col-md-9">
        <p>The first rules, written down by William G Morgan, called for a net 6 ft 6 in (1.98 m) high, a 25 ft ?? 50 ft (7.6 m ?? 15.2 m) court, and any number of players. A match was composed of nine innings with three serves for each team in each inning, and no limit to the number of ball contacts for each team before sending the ball to the opponents' court. In case of a serving error, a second try was allowed. Hitting the ball into the net was considered a foul (with loss of the point or a side-out)???except in the case of the first-try serve.</p>
        </div>
        <div class="col-sm-12 col-md-3">
        <img class="img-fluid" src="photos/download%20(1).jfif" alt="nothing">
        </div>
        </div>
    </div>
    <div class="col"></div>
    </div>
    <div class="row">
        <div class="col-sm-12">
          <div class="coolstuff">
            <button type="button" class="btn btn-lg coolstuffbtn" data-toggle="modal" data-target="#exampleModal">Get cool stuff!</button>
          </div>
        </div>
    </div>
    </div>
    
    
    
    
    
<div class="section-light">
    <div class="row">
        <div class= "col-sm-12">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                        <img class="img-fluid img-centre" src="photos/rsz_female-professional-volleyball-players-action-600w-683309548.jpg">
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="button" class="btn btn-danger btnCenter" data-toggle="modal" data-target=".spiker-modal-lg">Spiker</button>
                        </div>
                </div>
         </div>
            
                <div class="col-sm-12 col-lg-4">
                        <img class="img-fluid img-centre" src="photos/rsz_95ef95c4408d9c8a0b0528ae8b0fe6a2.jpg">
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="button" class="btn btn-danger btnCenter" data-toggle="modal" data-target=".block-modal-lg">Block</button>
                        </div>
                </div>
         </div>
            
                <div class="col-sm-12 col-lg-4">
                        <img class="img-fluid img-centre" src="photos/rsz_8d4d74803e286094acd8b75aa8c9eb11.jpg">
                    <div class="row">
                      <div class="col-sm-12">
                        <button type="button" class="btn btn-danger btnCenter" data-toggle="modal" data-target=".lifter-modal-lg">Lifter</button>
                        </div>
                </div>
         </div>
        </div>
        </div>
    </div>
</div>    
<!----footer-->
    <footer class="footer bg-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-3 social">
                    
                    <img class="img-fluid footerimg" src="photos/download%20(1).png">
                </div>
                
                <div class="col-sm-12 col-lg-9 social">
                
                <a  href="https://www.facebook.com/profile.php?id=100008718798733"><i class="fab fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                <a href=""><i class="fab fa-google-plus-square fa-3x" aria-hidden="true"></i></a>
                <a href=""><i class="fab fa-instagram fa-3x" aria-hidden="true"></i></a>
                </div>
            
               
            </div>
        </div>
    
</footer>
    
    
    
    
    
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get Excluisve content</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class= "container-fluid">
          <div class="row">
             <div class="col-sm-12">
               <img class="img-fluid" src="photos/70860764.jfif">
              </div>
             </div>
             <div class="row">
                 <div class="col">
             <div class="modal-form">
                <form>
  <div class="form-group">
    <label for="formGroupExampleInput">What's your name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Where should we send your cool </label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="E-mail">
  </div>
</form> 
                 
                 </div>
             </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
      <!--siker-->
      
<div class="modal fade spiker-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="embed-responsive embed-responsive-16by9">
 <iframe width="560" height="315" src="https://www.youtube.com/embed/kMtSmU_21Lo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
    </div>
  </div>
</div>
        
      <!--block-->


<div class="modal fade block-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/UjZYqRANEfA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
    </div>
  </div>
</div>
      
      <!--lifter-->
      <div class="modal fade lifter-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/WNxxFhYa6wc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
    </div>
  </div>
</div>
      
      
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    
            <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.js"></script>
    
  </body>
</html>