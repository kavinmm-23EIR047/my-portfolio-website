<?php
$n=$_POST['name'];
$c=$_POST['email'];
$p=$_POST['phone'];
$s=$_POST['address']

$sql="INSERT INTO submit (NAME,EMAIL,PHONE,ADDRESS) values('$n','$c','$p','$s')";
$r=mysqli_query($con,$sql); 
if($r)
{
    echo" Thanks for Submit";
}
else{
    echo"Not submit"; 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portfolio</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styleport.css">
   <script src="https://kit.fontawesome.com/272bb52492.js" crossorigin="anonymous"></script>
</head>
<body>
   
<!-- header section starts  -->
<header class="header">

    <section class="flex">
 
       <a href="#home" class="logo">akwebflairtechnologies</a>
 
       <nav class="navbar">
          <a href="#home">home</a>
          <a href="#about">about</a>
          <a href="#services">services</a>
          <a href="#skells">skills</a>
          <a href="#footer">contact</a>
       </nav>
 
       <div id="menu-btn" class="fas fa-bars"></div>
 
    </section>
 
 </header>

<!-- header section ends -->
<section class="home" id="home">
 
  <div class="row">
 
     <div class="content">
        
        <h3>Hii  <span>Im a Web Developer</span></h3>
        <a href="#contact" class="btn">contact us</a>
     </div>
     <div class="image">
        <img src="images/homep.gif" alt="">
     </div>


  </div>
</section>
<!-- about section starts  -->

<section class="about" id="about">

   <div class="row">

      <div class="image">
         <img src="images/about.gif" alt="">
      </div>

      <div class="content">
         <h3>About Us</h3>
         <p>I am beginning web developer in tirupur I am styding in ug in B.E EIE in kongu engineering college.the more reliastic websites and 
            designing the images and products to start a freelance. I start a journey in web development 
            is 2022 mar 23 and start to learn Html,css and to start javascript. also visit in my website 
            and contact to any enquiry in me.
         </p>
         <a href="#contact" class="btn">contact us</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section start -->

<section class="services" id="services">

   <h1 class="heading"> our <span>Services</span> </h1>

   <div class="box-container">

       <div class="box">
           <img src="images/card1.avif" alt="">
           <h3>Database Management</h3>
           <span>database Management is the manage for the database in the website to secure our data.</span>
           <label for="expanded" role="button">read more...</label>
       </div>

       <div class="box">
           <img src="images/card2.jpg" alt="">
           <h3>Web development</h3>
           <span>Web development is by using for Html,Css and javascript and the photoshop
            to develop the software in by using visual studio and notepad and database for using PHP and Mysql
         in the data in more reliastic websites </span>
         <label for="expanded" role="button">read more...</label>
       </div>

       <div class="box">
           <img src="images/card3.avif" alt="">
           <h3>Image and Video Editing</h3>
           <span>Editing is the using for photoshop and canva to design the photos and 
            videos in kinemaster and illustrator to design the products and images.
           </span>

           <label for="expanded" role="button">read more..</label>
       </div>

       <div class="box">
           <img src="images/card4.avif" alt="">
           <h3>Graphic Designing</h3>
           <span>Graphic Designing is the using for photoshop,adode,illustrator and coreldraw and 
            figma software and design the products and web design.
           </span>
           <label for="expanded" role="button">read more..</label>
       </div>

   </div>

</section>

<section class="skells" id="skells">
    <h1 class="heading"> our <span>Skills</span> </h1>
   <div class="row">
      <div class="container">
         <div class="skill-box">
             <span class="title">HTML</span>
             <div class="skill-bar">
                 <span class="skill-per html">
                     <span class="tooltip">95%</span>
                 </span>
             </div>
         </div>
         <div class="skill-box">
             <span class="title">CSS</span>
             <div class="skill-bar">
                 <span class="skill-per css">
                     <span class="tooltip">70%</span>
                 </span>
             </div>
         </div>
         <div class="skill-box">
             <span class="title">JavaScript</span>
             <div class="skill-bar">
                 <span class="skill-per javascript">
                     <span class="tooltip">50%</span>
                 </span>
             </div>
         </div>
         <div class="skill-box">
             <span class="title">PHP-Mysql</span>
             <div class="skill-bar">
                 <span class="skill-per PHP-Mysql">
                     <span class="tooltip">50%</span>
                 </span>
             </div>
         </div>
         <div class="skill-box">
            <span class="title">Graphic-Designing</span>
            <div class="skill-bar">
                <span class="skill-per Graphic-Designing">
                    <span class="tooltip">70%</span>
                </span>
            </div>
        </div>
        <div class="skill-box">
         <span class="title">Video-and-Image-Editing</span>
         <div class="skill-bar">
             <span class="skill-per Video-and-Image-Editing">
                 <span class="tooltip">80%</span>
             </span>
         </div>
     </div>
     </div>
</div>
</div>
</section>
      

<section class="footer" id="footer">

   <div class="box-container">
      
         
   

       <div class="box">
           <h3>quick links</h3>
           <a href="#home">Home</a>
           <a href="#about">About</a>
           <a href="#services">Services</a>
           <a href="#skells">Skills</a>
           <a href="#footer">Contact</a>
       </div>

       <div class="box">
           <h3>contact info</h3>
           <a href="#">mmkavin96@gmail.com</a>
           <a href="#">akwebtechnologies24@gmail.com</a>
           <a href="#">Tiruppur - 641602</a>
       </div>

       <div class="share">
        <h3>Follow us</h3>
        <a href="#" class="fab fa-github"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-instagram"></a>
        
     </div>
     
       <div class="row">
       <form name="myform2" action="connect3.php" method="POST">
         
         <span>your name</span>
         <input type="name" required placeholder="enter your full name" maxlength="50" name="name" class="box">

         <span>your email</span>
         <input type="email" required placeholder="enter your valid email" maxlength="50" name="email" class="box">
         <span>your number</span>
         <input type="phone" required placeholder="enter your valid number" name="phone" class="box">
         <span>your Address</span>
         <input type="address" required placeholder="door no,area,city,district,pincode,state" maxlength="100" name="address" class="box">
        
         <a href="portfolio.php">
         <input type="submit" value="send message" class="btn" name="send">
</a>
      </form>

   </div>
   </div>
   <div class="credit"> copyright @ 2024 by <span>ak web technologies</span> </div>
</section>








<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/scriptport.js"></script>
</body>
</html>