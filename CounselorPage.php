<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/CounselorPage.css">
  <link rel="stylesheet" href="css/PatientPage.css">
  <link rel="stylesheet" href="css/Footer.css">
  <link rel="stylesheet" href="css/Navigation.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 	<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>Welcome | Counselor!</title>
</head>
<body>
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


<!--Create a post__popup-->
  <div class="offcanvas1 offcanvas1-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="container">
      <div class="row">  
        <div class="offcanvas1-body"> 
          <h1>Create a post...</h1> 
          <form action="Includes/createPost.inc.php" method="POST">
            <div>
              <label for="slug">Select a Category! <span class="require"></span></label>
              <div>
                <select class="form-control" name="slug">
                  <option disabled selected>Select Your Field</option>
                  <option>Physical Therapy</option>
                  <option>Mental Therapy</option>
                  <option>Health Coach</option>
                  <option>Effective Relationships Counseling</option>
                  <option>Yoga Sessions</option>
                  <option>Addiction Therapy</option>
                </select>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label for="title">Title <span class="require">*</span></label>
              <input type="text" class="form-control" name="title" />
            </div>
            <br>
            <div class="form-group">
              <label for="description">Description<span class="require">*</span><small> (Max 100 letters)</small></label>
              <textarea rows="5" class="form-control" name="description" ></textarea>
            </div>
            
            <div class="form-group">
              <p><span class="require">*</span>  required fields</p>
            </div>
            
            <div class="form-group">
              <button type="submit" class="btn1 btn1-primary">
                  Create
              </button>
              <button type="reset" class="btn1 ">
                  Clear
              </button>
            </div>  
          </form>
        </div>
      </div>
    </div>
  </div>
</header>

<!--image slider-->
<section>
  <div class="margin">
  <div class="image3">
    <div class="mySlides fade">
      <img  src="images/slider_counselor/Counselor1.png"> 
    </div>
    <div class="mySlides fade">
      <img  src="images/slider_counselor/Counselor2.png"> 
    </div>
    <div class="mySlides fade">
      <img  src="images/slider_counselor/Counselor3.png"> 
    </div>
    <div class="mySlides fade">
      <img  src="images/slider_counselor/Counselor4.png"> 
    </div>
    <div class="mySlides fade">
      <img  src="images/slider_counselor/Counselor5.png"> 
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
    <h1 class="ml12 text-center">Welcome Counselor to NEXT Generation.</h1>
    <h3 class="ml13 mt-3 text-center">Your posts and services...</h3><br>
    <hr id="hr2">
  </div>
</section>

<!--Card_gigs-->
<section>
  <div class="container-fluid mt-5 bgn row">

    <?php include_once "Includes/getOwnerPost.inc.php"; ?>
    
  </div>
<!--end of card2-->
<nav aria-label="Page navigation example" class="mt-3">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
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
<script src="js/LogoText.js"></script>
<script src="js/text.js"></script>
<script src="js/Notification.js"></script>
<script src="js/Message.js"></script>
<script src="js/slider.js"></script>

</body>
</html>
