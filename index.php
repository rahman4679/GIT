<!DOCTYPE html> 
<html lang="en">
<head>
  <title>KOPDAR </title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="js/jquery.js"></script> 
  <script src="js/jquery.glide.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript" src="js/MyJQ.js"></script>
    <script src="js/jquery.localScroll.min.js" type="text/javascript"></script>
  <script src="js/jquery.scrollTo.min.js" type="text/javascript"></script> 
    <script src="js/wow.min.js" type="text/javascript"></script> 

<!-- scroll function -->
<script type="text/javascript">
$(document).ready(function() {
   $('#navigations').localScroll({duration:800});
});
</script>


<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>

</head>
<body>
<!--============ Navigation ============-->

<?php
  include 'header.php'
?>

<!--============ Slider ============-->


<div class="sliderwrapper">
      <div id="slider" class="container">
           <div class="slider">
            <ul class="slides">
              <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">Apa Itu KOPMA BS UPI ? </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Ayam penyet is Indonesian — more precisely East Javanese cuisine — fried chicken dish consisting of fried chicken that is smashed with the pestle against mortar to make it softer, served with sambal, slices of cucumbers, fried tofu and tempeh.</p>
                      <img src="images/ayampenyet.png" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slide1img"> 
                      </li>
                <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">Sejarah KOPMA BS UPI </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Indomie is a brand of instant noodle by Indofood, the largest instant noodle manufacturer in Indonesia with 72% of market share. It is distributed in Australia, Asia, Africa, New Zealand, the United States, Canada and European and Middle Eastern countries. Outside its main manufacturing plants in Indonesia, Indomie is also produced in Nigeria since 1995 where it is a popular brand and has the largest instant noodle manufacturing plant in Africa.</p>
                      <img src="images/1.png" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slideimg2"> 
                      </li>
              <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">-------</h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                         the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                          type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                           also the leap into 
                         electronic typesetting</p>
                      <img src="images/slideimg.png" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slideimg2"> 
                      </li>
              </ul>
            </div>
      </div> <!-- End of Slider-->
</div> <!-- end of sliderwrapper-->



<!--============ Best Dishes ============-->



<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">

       
     <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>
      <div class="slider">
              <ul class="slides">
               <li class="slide">
                    <div class="item">
                          <img src="images/ayampenyet.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Ayam Penyet</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item2">
                          <img src="images/1.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Indomie</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/eskrim.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Es Krim</h3>
                      </div> <!-- end of item-->
                  </li>
                   <li class="slide">




                    <div class="item">
                          <img src="images/thumb1.png" width="226" height="225" alt="sliderimg" > 
                          <h3>Pasta Capellini</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item2">
                          <img src="images/thumb2.jpg" width="226" height="225" alt="sliderimg"> 
                          <h3>Pasta Pillus</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/thumb3.png" width="226" height="225" alt="sliderimg"> 
                          <h3>Pasta Fusilli</h3>
                      </div> <!-- end of item-->
                  </li>
                   
        </ul>
      </div> <!-- end of slider-->
    </div> <!-- end of besth dishes-->
</div> <!-- end of bestdishes wrapper-->

<!--============ BOOK ONLINE ============-->

<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> ORDER ONLINE</h3>
    <form role="form" action="daftar.php" method="post">
      <input type="text" class="name wow zoomIn" placeholder="Your Name" name="nama" >
      <input type="text" class="email wow zoomIn" placeholder="Your Phone Number" name="telepon">
      <input type="text" class="persons wow zoomIn" placeholder="Your Addres" name="alamat">
    
       <button class="booknow wow fadeInUp" value="daftar" name="daftar" > ORDER NOW </button>
    
    </form>
    
    
    </div>
</div> <!-- end of book online wrapper-->


<!--============ Contact us ============-->


<div class="contactwrapper">
  <div id="contactus" class="container">
        <h3 class="wow fadeInUp" data-wow-delay="0.3s">CONTACT US</h3>
        <div class="staff">
          <ul>
                  <li><img src="images/char3.png" width="163" height="163" class="myimage wow fadeIn" title="mido" alt="1">
                  
                  
            </li>
                  <li><img src="images/char4.png" width="163" height="163" class="myimage2 wow fadeIn" data-wow-delay="0.8s"
                   alt="1"></li> 
                  <li><img src="images/char5.png" width="163" height="163" class="myimage3 wow fadeIn" 
                  data-wow-delay="0.8s" 
                  alt="1"></li>
                  <li><img src="images/char6.png" width="163" height="163" class="myimage4 wow fadeIn" alt="1"
                   data-wow-delay="0.8s"
                  ></li>
                  <li><img src="images/char1.png" width="163" height="163" class="myimage5 wow fadeIn" alt="1"
                  data-wow-delay="0.8s"></li>
                  <li><img src="images/char2.png" width="163" height="163" class="myimage6 wow fadeIn" alt="1"
                  data-wow-delay="0.8s"
                  ></li>
             </ul>   
             
         </div>   
      <!--end of .staff-->
        
    <img src="images/pop1.png" width="486" height="137" class="firstpop" alt="pop">
    <img src="images/popup2.png" width="487" height="137"  class="secondpop" alt="pop">
    <img src="images/popup3.png" width="487" height="137"  class="thirdpop" alt="pop">
    <img src="images/popup4.png" width="487" height="137"  class="fourthpop" alt="pop">  
    <img src="images/popup6.png" width="487" height="137"  class="fifthpop" alt="pop">  
    <img src="images/popup7.png" width="487" height="137"  class="sixthpop" alt="pop">  
    
    
    </div> 
    <!--contactus class-->
</div> <!-- end of contact wrapper-->

<?php
  include 'footer.php'
?>

<!--============ COPYRIGHTS ============-->


<div class="fixedsocial">
<a href="https://www.facebook.com/Mido.HHH"><img src="images/facebook.png" width="20" height="20" alt="fb"> </a>
<a href="https://www.behance.net/Mido_HHH"><img src="images/behance.png" width="20" height="20" alt="behance"> </a>




</div>

<script type="text/javascript">
    $('.sliderwrapper .slider').glide({
    autoplay: 7000,
    animationDuration: 3000,
    arrows: true,
    
    
  
    });
  
</script>
  
    <script type="text/javascript">
    $('.bestdisheswrapper .slider').glide({
    autoplay: false,
    animationDuration: 700,
    arrows: true,
    navigation:false,
    
    
  
    });
  
  
</script>
  
   
   

</body>

</html>
