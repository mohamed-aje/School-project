  <?php
  include 'header.php'?>


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><form class="form-horizontal" style="width:50%;"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

    </ol>
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="room.jpeg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="room2.jpeg" alt="Second slide">
        
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="room3.jpeg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="room4.jpeg" alt="fourth slide">
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
    
  

  </div>

    
  </div>

  <section style=background-color:#353A40 class="part2">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <img src="rcol3.jpeg" class="img-fluid" alt="Responsive image">
                <p style=color:white><u>from 25€   .1 Guest</u><p>

                <center><a href="booknow.php"  class="btn" role="button"> Book Now</a></center>
                
                <p class="text-center">Single Room</p></div>
                
                
                <div class="col-md-4"><img src="rcol2.jpeg" class="img-fluid" alt="Responsive image">
                <p style=color:white><u>from 50€   .2 Guests</u><p>

                <center><a href="booknow.php"  class="btn" role="button"> Book Now</a></center>

                <p class="text-center">Double Room</p></div>
                 <div class="col-md-4"><img src="rcol1.jpeg" class="img-fluid" alt="Responsive image">
                 <br>
                 <p style=color:white><u>from 75€   .3 Guests</u><p>
                 <center><a href="booknow.php"  class="btn" role="button"> Book Now</a></center>

                <p class="text-center">Family Room</p></div>
                <button type="button" onclick="MyFunction()" class="btn  btn-lg btn-block">View All Rooms</button>
                <script>
                  function MyFunction(){
                  alert("Rooms will be available soon");
                  }
                </script>
              
            </div>
        </div>
</section>
  
<?php include 'footer.php'?>
