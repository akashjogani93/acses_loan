<?php include"link.php"?>
 <?php include "header.php"?>

 <div id="element-with-background-image">
   <div id="color-overlay"></div>
   <img src="images/about.jpg" class="w3-round" alt="Snow" style="width:100%;height:500px ;">

   <div class="centered" style>About us</div>
</div>

<br><br>

<div style="padding:20px 20px;background: white; " class="site-section" >
<div class="container-flued">
  <h2  style="color:#0d325b ;font-size: 32px" class="kitchen text-center wow slideInLeft">Vission Mission</h2>
  <div class="row">
    
    <div class="text-justify col-md-6"style="background:white">
              <img style="background-size: cover;height:150px;margin-top: 80px" class="shadow-lg d-block w-30 rounded mx-auto d-block" src="images/vision.jpg"/>
    </div>
    <div class="text-justify col-md-6" style="background: white" >
              <br><br>
              <h3  style="color:#000" class="kitchen text-center wow slideInLeft">Vission</h3><br/>
              
               <p style="color:black;font-size:12pt; " class="wow slideInLeft">• In the vision of Access Private Limited, We are connecting people empowering them as to serve people by their own hands with the help of technology, IT-enabled network of citizen service points connecting local population with government departments, business establishments, banks, insurance companies and educational institutions.</p>
                   
    </div>
    
</div>
 <div class="row">
    <div class="text-justify col-md-6" style="background: white" >
    	<br><br>
             
              <h3  style="color:#000" class="kitchen text-center wow slideInLeft">Mission</h3><br/>
               <p style="color:black;font-size:12pt;" class="wow slideInLeft">• Concurring to the mission of Access Private Limited- IT-enabled network of citizen service points connecting the local population with Business Establishments.</p>
                    <p  style="color:black;font-size:12pt;" class="wow slideInLeft">• ASC is enabling the rural ecommerce model through its Access Private Limited network, where the Access Private Limited reaches to its customers’ doorstep.
                </p>
                <p  style="color:black;font-size:12pt;" class="wow slideInLeft">• ASC is enabling the rural ecommerce model through its Access Private Limited network, where the Access Private Limited reaches to its customers’ doorstep.
                </p>
                </p>

                
    </div>
    <div class="text-justify col-md-6"style="background:white">
              <img style="background-size: cover;height:180px;margin-top: 100px" class="shadow-lg d-block w-30 rounded mx-auto d-block" src="images/mision.png"/>
    </div>
</div>
    
      
  </div>
</div>
</div>

<!--
<div style="padding:20px 20px;background:#e5e5e5" class="site-section">
<div class="container-flued">
  <div class="row">
    

    <div class="text-justify col-md-6"style="background:#e5e5e5;padding:20px 20px;">
              <img style="background-size: cover;height:450px" class="shadow-lg d-block w-100" src="images/eseva.jpg"/>
    </div>
    <div class="s2 col-md-6">
                <div class="text-justify col-md-12" style="background:#e5e5e5"><br>
                  <h2   style="color:black ;font-size: 32px" class="kitchen text-left wow slideInLeft"><b>Advantage Of ASC</b></h2><br/>
                <p style="color:black;font-size:12pt;" class="wow slideInLeft">A simply a term used for the modern-day kitchen 
                    furniture layout which is especially designed to optimize functionality and the use of space.
                     These kitchens use various modules (units) of cabinets that are crafted out of diverse materials
                    and hold kitchen accessories inside.</p>
                    <p  style="color:black;font-size:12pt;" class="wow slideInLeft">The basic structure of a modular kitchen is extremely practical. The units on the floor are called 'base cabinets' and serve as the foundation for the kitchen worktop which is usually made out of granite, marble, tile or wood. The ones fastened on the wall for storage purposes are known as 'wall cabinets'.
                </p>
               
                </div>
    </div>
  </div>
</div>
</div>
<br><br>-->

<section id="partners"style="padding:20px 20px;
">
<div class="container">
   <h2   style="color:black ;font-size: 32px" class="kitchen text-center wow slideInLeft">Our Partners</h2><br/>
   <div class="customer-logos">
  <div class="slide"><img src="images/HDFC_Bank_logo.png"></div>
  <div class="slide"><img src="images/ICICIBank.png"></div>
  <div class="slide"><img src="images/sbi.png"></div>
  <div class="slide"><img src="images/axis.png"></div>
  <div class="slide"><img src="images/idfcnew.png"></div>
  <div class="slide"><img src="images/yes.png"></div>
  <div class="slide"><img src="images/bbj.jpeg"></div>
</div>
</div>
</section>
</div>

<script>
$(document).ready(function(){
      $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: false,
          pauseOnHover: false,
          responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    });
</script>

<style>
.centered {
  color: #fff;
  font-size: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
#element-with-background-image 
{
   position: relative;  
}
 
#color-overlay 
{
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background-color: #000;
   opacity: 0.6;
}
</style>


<?php include"footer.php"?>