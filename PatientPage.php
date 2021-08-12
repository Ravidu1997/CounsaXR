<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/PatientPage.css">
  <link rel="stylesheet" href="css/CounselorPage.css">
  <link rel="stylesheet" href="css/Footer.css">
  <link rel="stylesheet" href="css/Navigation.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 	<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>Welcome - Home</title>
</head>
<body>
<header>

<!-- Header-->
<?php include_once("Header.php"); ?>
<?php 
if(session_id() == ''){
  session_start();
}
  if( !(isset($_SESSION["userid"])) ){
      header("location: index.php");
      exit();
  }
?>

</header>

<section class="pt-3">
  <h1 class="wc text-center pb-3 ">Welcome!</h1>
</section>

<!--search button!-->
<section>  
   <div class="search">
    <form >
     <div class="pb-3">
          <input type="text" class="search-field name" style="border-style:groove;" placeholder="search by Doctor">
          <input type="text" class="search-field disease" style="border-style:groove;" placeholder="search by Disease">
          <select style="border-style:groove;">
            <option disabled selected>Location</option>
            <option>Colombo</option>
            <option>Kandy</option>
            <option>Galle</option>
            <option>Ampara</option>
            <option>Anuradhapura</option>
            <option>Badulla</option>
            <option>Batticaloa</option>
            <option>Gampaha</option>
            <option>Hambantota</option>
            <option>Jaffna</option>
            <option>Kalutara</option>
            <option>Kegalle</option>
            <option>Kilinochchi</option>
            <option>Kurunegala</option>
            <option>Mannar</option>
            <option>Matale</option>
            <option>Matara</option>
            <option>Monaragala</option>
            <option>Mulativu</option>
            <option>NuwaraEliya</option>
            <option>Polonnaruwa</option>
            <option>Puttalam</option>
            <option>Ratnpura</option>
            <option>Trincomalee</option>
            <option>Vavuniya</option>

          </select>
          <button style="border-style:groove"; class="search-btn" type="button">search</button>
        </div>
      
    </form>
  </div>

    </form>
  </div>
  </section>

<!--image slider-->
<section>
  <div class="margin">
  <div class="image3">
    <div class="mySlides fade">
      <img  src="images/slider_patient/patient1.png"> 
    </div>
    <div class="mySlides fade">
      <img  src="images/slider_patient/patient2.png"> 
    </div>
    <div class="mySlides fade">
      <img  src="images/slider_patient/patient3.png"> 
    </div>
    <div class="mySlides fade">
      <img  src="images/slider_patient/patient4.png">  
    </div>
    <div class="mySlides fade">
      <img  src="images/slider_patient/patient5.png">  
    </div>
  </div> 
  <div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> 
</section>
<section>
  <div class="container pt-5">
    <hr id="hr2"><br>
    <h1 class="ml12 text-center">Welcome Patient to our counselling service.</h1>
    <br>
    <hr id="hr2">
  </div>
</section>

<!--card section-->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="about-text text-center">
        <br>
      <hr id="hr1">
      <br><h1>Services</h1><br>
      </div>
    </div>
  </div>
</section>
<section id="card">
<div class="container-fluid">
  <div class="row" id="row1">
    <div class="col-md-4 col-sm-6 col-lg-4">
      <a href="PhysicalTherapy.php">
      <div class="card">
        <img class="card-img-top" src="images/physical/phy-logo.png"></a>
        <div class="card-body">
          <h4 class="card-title text-center">Physical Theropy</h4>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-lg-4">
      <a href="MentalTherapy.php">
      <div class="card">
        <img class="card-img-top" src="images/mental/mental-logo.png"></a>
        <div class="card-body">
          <h4 class="card-title text-center">Mental Theropy</h4>
        </div>
      </div>
    </div>     
    <div class="col-md-4 col-sm-6 col-lg-4">
      <a href="HealthCoach.php">
      <div class="card">
        <img class="card-img-top" src="images/healthcoach/healthcoach-logo1.jpg"></a>
        <div class="card-body">
          <h4 class="card-title text-center">Health Coach</h4>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-lg-4">
      <a href="EffectiveRelationshipCounseling.php">
      <div class="card">
        <img class="card-img-top" src="images/effective-logo.jpg"></a>
        <div class="card-body">
          <h4 class="card-title text-center">Effective Relationships Counseling</h4>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-lg-4">
      <a href="YogaSession.php">
      <div class="card">
        <img class="card-img-top" src="images/yoga-logo.jpg"></a>
        <div class="card-body">
          <h4 class="card-title text-center">Yoga Sessions</h4>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-lg-4">
      <a href="AddictionTherapy.php">
      <div class="card">
        <img class="card-img-top" src="images/addiction-logo.jpg"></a>
        <div class="card-body">
          <h4 class="card-title text-center">Addiction Theropy</h4>
        </div>
      </div>
    </div>
  </div>
</div>
</section>



<!--customer_reviews-->


<!-- Feedback-->
<section class="mt-3 mb-5 justify-content-sm-center">
<div class="container feedback_user col-lg-6 col-md-6 col-sm-12">
    <form>
      <br><h3 style="color: white; font-size: 23px;text-align: center;">Rate US!</h3>
      <ul class="rate-area"><h4>    </h4>
        <input type="radio" id="5-star" name="crating" value="5">
        <label for="5-star" title="Amazing">5 stars</label>
        <input type="radio" id="4-star" name="crating" value="4">
        <label for="4-star" title="Good">4 stars</label>
        <input type="radio" id="3-star" name="crating" value="3">
        <label for="3-star" title="Average">3 stars</label>
        <input type="radio" id="2-star" name="crating" value="2">
        <label for="2-star" title="Not Good">2 stars</label>
         <input type="radio" id="1-star" required=""
         name="crating" value="1" aria-required="true">
        <label for="1-star" title="Bad">1 star</label>
       </ul>
      
      <div class="feedback">
        <input type="text" placeholder="your name">
        
      </div>
      <div>
        <input type="email" placeholder="your mail ">
        <i class="far fa-mail"></i>
      </div>
      <textarea cols="10" rows="5" placeholder="comments here.."></textarea>
    <button class="feedback mb-3">Send</button>
  </form>
  </div>
</section>

<!-- Footer-->
<?php include_once("Footer.php"); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="js/logotext.js"></script>
<script src="js/Message.js" ></script>
<script src="js/text.js" ></script>
<script src="js/Notification.js"></script>
<script src="js/slider.js"></script>
</body>
</html>
