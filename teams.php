<?php

include_once('header.php');

?>









<!-- Hero Start -->
<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">TEAM</h1>
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

<div class="container">
    <div class="row">

<?php
include('config.php');
$query ="SELECT * FROM `team_member`";
$result = mysqli_query($conn,$query);
while($data=mysqli_fetch_array($result)){
    ?>
    <div class="card shadow-lg p-2  mb-5 bg-body-tertiary rounded mx-2 mt-5"  style="width: 22rem;">
  <img src="./admin/img/photo/<?php echo $data["image"];?>" class="card-img-top" alt="..." height="300px">
  <div class="card-body mx-2">
    <h5 class="card-title"><?php echo $data["name"];?></h5>
    <p class="card-text"><?php echo $data["profession"];?></p>
    
    <a href=""><i class="fa-brands fa-facebook me-2"></i></a>
    <a href=""><i class="fa-brands fa-square-x-twitter me-2"></i></a>
    <a href=""><i class="fa-brands fa-instagram me-2"></i></a>
    <a href=""><i class="fa-brands fa-skype me-2"></i></a>
    
   

  </div>
</div>


<?php
}

?>

</div>

</div>





<?php

include_once('footer.php');

?>
