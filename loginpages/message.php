<!DOCTYPE html>
<html>
<!--Code help from https://www.cloudways.com/blog/real-time-php-notification-system/ -->
<?php 
//connection to database, as of now its root but it would probably be better to create a new user account with minimum priveliges 
require 'includes/dbh.inc.php';
if(isset($_GET['id'])){
$id = mysqli_escape_string($conn,$_GET['id']);
$sql='SELECT firstname, surname, email, selfIntro, workExperience, education, contactNumber, dob, otherHobbies, country, greeting FROM users WHERE id='.$id. ' LIMIT 1';
$result = mysqli_query($conn, $sql);
$searchResult=mysqli_fetch_assoc($result);
mysqli_free_result($result);

}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CV - Brand</title>
	
	<!-- Stylesheets -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
	
</head>
<body>
	<!-- Start of navigation bar -->
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Contadel</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
				<!-- Navigation links to other pages -->
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="projects-grid-cards.html">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="cv.html">Sign up</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="hire-me.html">Contact</a></li>
                </ul>
				<!-- End of navigation links to other pages -->
            </div>
        </div>
    </nav>
	<!-- End of navigation bar -->
	<!-- Container for the portfolio -->
    <main class="page cv-page">
        <section class="portfolio-block block-intro border-bottom">
			<!-- Introduction container -->
            <div class="container">
                <div class="avatar" style="background-image:url(&quot;assets/img/avatars/avatar.jpg&quot;);"></div>
                <div class="about-me">
			<!-- start of Form for sending the message with subject and content -->
				<form method="post" id="message_block" action="send.php">
				<div class="form-group">
				<label>Purpose</label>
				<input type="text" name="purpose" id="purpose" class="form-control">
				</div>
				<div class="form-group">
				<label>Message</label>
				<textarea name="textinfo" id="textinfo" class="form-control" rows="5"></textarea>
				</div>
				<div class="form-group">
				<input type="submit" name="send" id="send" class="btn btn-info"  value="Send" />
				</div>
				</form>
			<!-- end of Form for sending the message with subject and content -->
                    
            </div>
			<!-- End of introduction container -->
	
   <!--Start of footer-->
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="#">About us</a><a href="#">Contact&nbsp;</a><a href="#"></a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>
	<!--End of footer-->
	
	<!--Scripts-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
	<!--End of scripts-->
	
</body>

</html>
<!-- notification Scripts-->
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"get.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#message_block').on('submit', function(event){
  event.preventDefault();
  if($('#purpose').val() != '' && $('#textinfo').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"send.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#message_block')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
<!--End of notification scripts-->