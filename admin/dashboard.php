<?php
include('admin_header.php');
?>

<!-- Hero Start -->
<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">DASHBOARD</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">contact</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="text-center"><h1><b class="text-dark">welcome to admin dashboard</b></h1>

</div>
<?php
include('config2.php');
?>


<div class="container mt-5">
<div class="row">
  <div class="col-md-4">
    <div class="card bg-warning text-white mb-4">
      <div class="card-body">Total Category
     <?php
     $query="SELECT * FROM `category_table`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
     </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="managecategory.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>

</div>
</div>
</div>

<div class="col-md-4">
    <div class="card bg-primary text-white mb-4">
      <div class="card-body">Total Sub Category
      <?php
     $query="SELECT * FROM `service_table`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
      </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="manageservice.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>

</div>
</div>
</div>

<div class="col-md-4">
    <div class="card bg-info text-white mb-4">
      <div class="card-body">Total Booking
      <?php
     $query="SELECT * FROM `appointment_table`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
      </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="manageappointment.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
</div>
</div>
</div>
  </div>

  <div class="row mt-5">
  <div class="col-md-4">
    <div class="card bg-danger text-white mb-4">
      <div class="card-body">Total User
      <?php
     $query="SELECT * FROM `register_table`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
      </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="manageregister.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>

</div>
</div>
</div>

<div class="col-md-4">
    <div class="card bg-dark text-white mb-4">
      <div class="card-body">total Team Member
      <?php
     $query="SELECT * FROM `team_member`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
      </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="manageteam.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>

</div>
</div>
</div>

<div class="col-md-4">
    <div class="card bg-secondary text-white mb-4">
      <div class="card-body">Total Contact
      <?php
     $query="SELECT * FROM `contact_table`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
      </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="managecontact.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
</div>
</div>
</div>
</div>

<div class="row mt-5">
  <div class="col-md-12">
    <div class="card col2 text-white mb-4">
      <div class="card-body">Price Management
      <?php
     $query="SELECT * FROM `register_table`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
      </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="manageprice.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>

</div>
</div>
</div>
    </div>


</div>



<br>
<br>
<br>
















<?php
include('admin_footer.php');
?>