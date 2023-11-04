<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];


   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }
   

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DMPD Dental | Creating Soft Smiles</title>

   <!-- font  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- ccss file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo"><span>DMPD</span>Dental.</a>

         <nav class="nav">
            <a href="index.php">home</a>
            <a href="index.php">about</a>
            <a href="index.php">services</a>
            <a href="index.php">reviews</a>
            <a href="index.php">contact</a>
         </nav>

        <a href="index.php" class="link-btn">logout</a> 

         
        <!--<div> <h5>View Appointment</h5>
         new <a class="log" href="login.php">login</a> | <a class="log" href="register.php">register</a></div>-->
		 <div id="menu-btn" class="fas fa-bars"></div> 
         
         </div>
  

      </div>

   </div>

</header>

<!-- header section ends -->
<!-- contact section starts  -->

<section class="contact" id="contact" >

<hr>
<hr>
   <h1 class="heading">make appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
	<?php 
	if(isset($message)){
		foreach($message as $message){
		echo'<p class="message">'.$message.'</p>';
		}
	}
	?>


      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="text" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
	  
  
      <input type="submit" value="make appointment" name="submit" class="link-btn">
      <!-- <a href="register.php" class="link-btn" target="blank" >make Appointment</a> 
      <a href="report.php" class="link-btn" target="blank" >view Appointment</a> -->
	  
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer" id="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+94-115-44-023</p>
         <p>+9411-222-3333</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>1078,Alwitigala Mawatha,Colombo 00500</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>08:00am to 07:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>Dmpdhospital@gmail.com</p>
         <p>Dmpddentunit@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>DMPD Web Developers</span>  </div>

</section>

<!-- footer section ends -->

<!-- js file link -->
<script src="js/script.js"></script>

</body>


<html>
