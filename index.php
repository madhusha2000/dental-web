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
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#footer">contact</a>
         </nav>

         <a href="register.php" class="link-btn">make appointment</a> 

         
        <div> <!--<h5>Make Appointment :</h5>-->
         new <a class="log" href="login.php">login</a> | <a class="log" href="register.php">register</a></div>
		 <div id="menu-btn" class="fas fa-bars"></div>
         
         </div>
  

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">


   <div class="container">
   
      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>LET US BRIGHTEN YOUR SMILE</h3>
            <p>The Company Itself Is A Very Successful Company. Therefore Those Who Praise, As If Some Other Times For Pleasures.</p>
            <a href="register.php" class="link-btn">make appointment</a>
         </div>
      </div>

   </div>

</section>


<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>At True Healthcare, we prioritize your family's well-being above all else. Our dedicated team of healthcare professionals is committed to providing comprehensive and compassionate care that meets the unique needs of your loved ones. From routine check-ups to specialized treatments, we're here to ensure your family's health is in the best possible hands. Experience true healthcare excellence with us!</p>
            <a href="register.php" class="link-btn">make appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends-->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Alignment specialist</h3>
         <p>The Company Itself Is A Very Successful Company. Let Him Run Away, Won't He?</p>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>Cosmetic dentistry</h3>
         <p>The Company Itself Is A Very Successful Company. Let Him Run Away, Won't He?</p>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>Oral hygiene experts</h3>
         <p>The Company Itself Is A Very Successful Company. Let Him Run Away, Won't He?</p>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Root canal specialist</h3>
         <p>The Company Itself Is A Very Successful Company. Let Him Run Away, Won't He?</p>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>Live dental advisory</h3>
         <p>The Company Itself Is A Very Successful Company. Let Him Run Away, Won't He?</p>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Cavity inspection</h3>
         <p>The Company Itself Is A Very Successful Company. Let Him Run Away, Won't He?</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Cosmetic Dentistry</h3>
         <p>If The Customer Is Very Smart, He Or She Will Be Able To Achieve The Desired Result. Most Importantly, Will You Accept It?</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>If The Customer Is Very Smart, He Or She Will Be Able To Achieve The Desired Result. Most Importantly, Will You Accept It?</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p>If The Customer Is Very Smart, He Or She Will Be Able To Achieve The Desired Result. Most Importantly, Will You Accept It?</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Hello, It's Really A Pain To Be Followed. Them, Right? No One Is Averse To The Pleasures Of That, Right?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sam Perera</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Hello, It's Really A Pain To Be Followed. Them, Right? No One Is Averse To The Pleasures Of That, Right?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>M.Fernando</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Hello, It's Really A Pain To Be Followed. Them, Right? No One Is Averse To The Pleasures Of That, Right?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>K.P Samarasingha</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  

<section class="contact" id="contact" >

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

 <!--contact section ends -->
<br>
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