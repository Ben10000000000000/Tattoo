<?php
include_once('header.php')
?>



<style>
    .about_part {
  position: relative;
  z-index: 1;
  padding: 80px 0px;
}

/* line 6, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .col-lg-6 {
  padding-left: 0px;
  padding-right: 0px;
}

/* line 10, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_img {
  position: relative;
}

/* line 12, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_img .about_img_1 {
  float: left;
  max-width: 200px;
}

/* line 16, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_img .about_img_2 {
  position: absolute;
  left: 15%;
  top: 251px;
}

@media (max-width: 575px) {
  /* line 16, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_2 {
    top: 25px;
    left: 15px;
    max-width: 250px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  /* line 16, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_2 {
    top: 25px;
    left: 15px;
    max-width: 300px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  /* line 16, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_2 {
    top: 25px;
    left: 15px;
    max-width: 300px;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1200px) {
  /* line 16, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_2 {
    top: -100px;
    max-width: 300px;
    z-index: 3;
  }
}

@media only screen and (min-width: 1200px) and (max-width: 1440px) {
  /* line 16, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_2 {
    top: -100px;
    max-width: 300px;
    z-index: 3;
  }
}

@media only screen and (min-width: 1440px) and (max-width: 1658px) {
  /* line 16, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_2 {
    z-index: 3;
    top: 110px;
  }
}

/* line 51, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_img .about_img_3 {
  float: right;
}

@media (max-width: 575px) {
  /* line 51, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_3 {
    display: none;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  /* line 51, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_3 {
    display: none;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  /* line 51, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_3 {
    display: none;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1200px) {
  /* line 51, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_3 {
    float: right;
    max-width: 440px;
    top: 10px;
    position: absolute;
    right: 0;
    z-index: 2;
  }
}

@media only screen and (min-width: 1200px) and (max-width: 1440px) {
  /* line 51, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_3 {
    float: right;
    max-width: 440px;
    top: 10px;
    position: absolute;
    right: 0;
    z-index: 2;
  }
}

@media only screen and (min-width: 1440px) and (max-width: 1658px) {
  /* line 51, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_img .about_img_3 {
    float: right;
    max-width: 440px;
    top: 10px;
    position: absolute;
    right: 0;
  }
}

/* line 88, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_text {
  padding-left: 7px;
}

@media (max-width: 575px) {
  /* line 88, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text {
    margin-top: 100px;
    padding-left: 0;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  /* line 88, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text {
    margin-top: 150px;
    padding-left: 0;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  /* line 88, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text {
    padding-left: 45px;
    padding-top: 80px;
  }
}

/* line 105, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_text h5 {
  font-family: "Roboto", sans-serif;
  font-size: 13px;
  color: #f81c1c;
  margin-bottom: 18px;
  text-transform: uppercase;
  font-weight: 500;
  position: relative;
  z-index: 1;
  padding-left: 10px;
}

/* line 116, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_text h5:after {
  position: absolute;
  content: "";
  top: 9px;
  width: 100px;
  height: 1px;
  background-color: #f0f0f0;
  left: 85px;
}

/* line 125, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_text h5:before {
  position: absolute;
  content: "";
  top: -8px;
  width: 45px;
  height: 36px;
  background-color: #f0f0f0;
  left: 0px;
  z-index: -1;
}

/* line 137, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_text h4 {
  margin-bottom: 25px;
  color: #ff6426;
  font-size: 24px;
  font-weight: 300;
}

@media (max-width: 575px) {
  /* line 137, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text h4 {
    margin-bottom: 20px;
    font-size: 17px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  /* line 137, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text h4 {
    margin-bottom: 20px;
    font-size: 17px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  /* line 137, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text h4 {
    margin-bottom: 20px;
    font-size: 17px;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1200px) {
  /* line 137, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text h4 {
    margin-bottom: 20px;
    font-size: 17px;
  }
}

/* line 159, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_text h2 {
  line-height: 1.25;
  margin-bottom: 21px;
  font-size: 45px;
}

@media (max-width: 575px) {
  /* line 159, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text h2 {
    margin-bottom: 15px;
    font-size: 25px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  /* line 159, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text h2 {
    margin-bottom: 15px;
    font-size: 25px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  /* line 159, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text h2 {
    font-size: 25px;
    margin-bottom: 15px;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1200px) {
  /* line 159, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text h2 {
    font-size: 30px;
    margin-bottom: 15px;
  }
}

/* line 180, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_text p {
  margin-top: 13px;
  margin-bottom: 20px;
}

@media (max-width: 575px) {
  /* line 180, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text p {
    margin-bottom: 10px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  /* line 180, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
  .about_part .about_text p {
    margin-bottom: 10px;
  }
}

/* line 196, ../../01 cl html template/New folder/May 2019/173 Hipstyle Barber/Hipstyle Barber template/sass/_about.scss */
.about_part .about_text .btn_3 {
  margin-top: 23px;
}
</style>

<!-- Hero Start -->
<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">ABOUT</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">contact</li>
                </ol>
            </nav>
        </div>
    </div>


<br>



<!-- ABOUT US START -->
<div class="container-fluid  mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3 class="text-danger animated slideInRight"><b>ABOUT US</b></h3>
                    <h1 class="display-4 text-dark animated slideInRight"> Find the <span class="fw-light text-danger">right artist</span>for your next tattoo</h1>
                    <p class="text-dark mb-4 animated slideInRight">Seed spirit replenish cattle one moved air created. Them fill dont be fed isnt to he
                            shall god good spirit they are the. Hath Itself their second ifruitful a moving
                            their creature living every i replenish land and had hen lesser for their good
                            quality products</p>
                            <p>Seed spirit replenish cattle one moved air created. Them fill dont be fed isnt to he shall
                            god good spirit they are the. Hath Itself their second ifruitful a moving their creature
                            living every</p>
                    <a href="home.php"class="btn btn-dark py-2 px-4 me-3 animated slideInRight">READ MORE</a>
                    
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid animated pulse infinite" src="img/40-Best-Tattoo-Ideas-for-Men (1).webp" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US END -->


 
    <div class="container-fluid">
 <div class="row">
 <div class="col text-center bg-white">
<img src="img/images.png" class="animated pulse infinite" alt="icon" width="250" height="250">
    </div>
 </div>
 <br><br>


    <div class="row">
        <div class="col-md-4 bg-white"></div>
        <div class="col-md-4 text-center"><h1 class="text-white bg-dark animated slideInRight">STUDIO INTERIOR IMAGES </h1></div>
    <div class="col-md-4 bg-white"></div>
</div>
<br><br><br><br>
<div class="row ">
    <div class="col-md-4">
    <img src="img/digital-painting-industrialstyle-tattoo-studio_910656-646.avif" class="card-img-top animated pulse infinite" alt="..." width="200px" height="400px">
   </div>
   <div class="col-md-4">
    <img src="img/20201022_190359.jpg" class="card-img-top animated pulse infinite" alt="..." width="200px" height="400px">
   </div>
   <div class="col-md-4">
    <img src="img/digital-painting-industrialstyle-tattoo-studio_910656-646.avif" class="card-img-top animated pulse infinite" alt="..." width="200px" height="400px">
   </div>
</div>
<br>

   <div class="row">
    <div class="col-md-4">
    <img src="img/amazing-tattoo-studio-atta-market-noida-permanent-tattoo-artists-u6ook6gi4m.avif" class="card-img-top animated pulse infinite" alt="..." width="200px" height="400px">
   </div>

   <div class="col-md-4">
    <img src="img/m-tattoo-studio-college-road-nashik-tattoo-artists-cile9.avif" class="card-img-top animated pulse infinite" alt="..." width="200px" height="400px">
   </div>

   <div class="col-md-4">
    <img src="img/479ed2f7663c5ff2fcc7c5bb714351c8.jpg" class="card-img-top animated pulse infinite" alt="..." width="200px" height="400px">
   </div>
</div>
<br>


   <div class="row">
    <div class="col-md-4">
    <img src="img/image.png" class="card-img-top animated pulse infinite" alt="..." width="200px" height="400px">
   </div>
   <div class="col-md-4">
    <img src="img/2023041925119274dsc6441-01.avif" class="card-img-top animated pulse infinite" alt="..." width="200px" height="400px">
   </div>
   <div class="col-md-4">
    <img src="img/GettyImages-915092006.jpg" class="card-img-top animated pulse infinite" alt="..." width="200px" height="400px">
   </div>
</div>

   
    </div>
   
    </div>
</div>

<br>




<br>
<br>
<br>

<?php

include_once('footer.php')
?>
