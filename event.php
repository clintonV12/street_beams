<?php $page = "event"; ?>
<!DOCTYPE html>
<html lang="en">
  <?php require_once("header.php"); ?>
  <body>
    
    <?php require_once("nav.php"); ?>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Event</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Events</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
      <div class="container">
        <div class="row">
        	<div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/bg_3.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Jun. 3, 2021</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Tackle favoritism</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Mbabane</span></p>
                <p>Event to highlight the issue of favoritism in business and goverment.</p>
                <p><a href="event.php">Learn more <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/event-4.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">May. 10, 2021</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Food donations</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Matsapha</span></p>
                <p>Donations to help tackle hunger in young people.</p>
                <p><a href="event.php">Learn more <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/image_5.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">May. 10, 2021</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Teaching about abuse</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Manzini</span></p>
                <p>Young people must be helped to understand what is abuse.</p>
                <p><a href="event.php">Learn more <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
		
    <?php require_once("footer.php"); ?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <?php require_once("scripts.php"); ?>
    
  </body>
</html>