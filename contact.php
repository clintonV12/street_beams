<?php $page = "contact"; ?>
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
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> Matsapha, Manzini</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://7642 3794">7642 3794</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@streetbeams.com">info@streetbeams.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">streetbeams.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-12 pr-md-5">
          	<h4 class="mb-4">Do you have any questions?</h4>
            <form action="contact.php" method="POST">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="msg" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
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

<?php
@ $name = $_POST['name'];
@ $email = $_POST['email'];
@ $subject = $_POST['subject'];
@ $msg = $_POST['msg'];
$email_addr = "info@streetbeams.com";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= "From:".$email."\r\n";

$message = "Hi, I am ".$name."<br>".$msg;
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
// send email
mail($email_addr,$subject,$message,$headers);

?>