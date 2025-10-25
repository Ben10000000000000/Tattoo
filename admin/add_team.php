<?php
include_once('admin_header.php');
?>


<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">ADD_TEAM</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">contact</li>
                </ol>
            </nav>
        </div>
    </div>




<div class="container">
    <div class="row">
    <div class="col-md">
<form method="post" enctype="multipart/form-data" >
<div class="form-group">
<label for="name"><b class="text-dark">NAME</b></label>
<input type="text" name="name" id="name" class="form-control border-dark">
</div>

<div class="form-group">
<label for="image"><b class="text-dark">IMAGE</b></label>
<input type="file" name="image" id="image" class="form-control border-dark">
</div>

<div class="form-group">
<label for="mob"><b class="text-dark">MOBILE NUMBER</b></label>
<input class="form-control border-dark" name="mob" id="number" type="number">
</div>



<div class="form-group">
<label for="address"><b class="text-dark">ADDRESS</b></label>
<input type="text" name="address" id="address" class="form-control border-dark">
</div>

<div class="form-group">
<label for="email"><b class="text-dark">EMAIL</b></label>
<input type="email" name="email" id="email" class="form-control border-dark">
</div>

<div class="form-group">
<label for="profession"><b class="text-dark">PROFESSION</b></label>
<input type="text" name="profession" id="profession" class="form-control border-dark">
</div>

<div class="form-group">
<label for="date"><b class="text-dark">JOINING DATE</b></label>
<input type="date" name="date" id="date" class="form-control border-dark">
</div>

<button  type="submit" class="btn  btn-danger mt-3" name="Submit">Submit</button>
<button type="reset" class="btn  btn-danger mt-3">Reset</button>
</form>
         </div>
    </div>
</div>
<br>

<?php
if(isset($_REQUEST["Submit"])){
    include('config2.php');
$name=$_REQUEST["name"];
$mob=$_REQUEST["mob"];
$address=$_REQUEST["address"];
$email=$_REQUEST["email"];
$profession=$_REQUEST["profession"];
$joiningdate=$_REQUEST["date"];

$fn = $_FILES["image"]["name"];
$temp_name = $_FILES["image"]["tmp_name"];
$new_name =rand().$fn ;


move_uploaded_file($temp_name,"./img/photo/".$new_name);
// move_uploaded_file($tmp_name,"./img/photo/".$new_name);
$query="INSERT INTO `team_member`( `name`, `image`, `mobile number`, `address`, `email`, `profession`, `joining date`) VALUES ('$name','$new_name','$mob','$address','$email','$profession','$joiningdate')";
$result=mysqli_query($conn,$query);
if($result>0){
    echo "<script>window.location.assign('add_team.php?msg=teammemberaddsucessfully')</script>";
}
else{
    echo "<script>window.location.assign('add_team.php?msg=teammemberdoesnotaddsucessfully')</script>";
}
}
?>




<?php
include_once('admin_footer.php');
?>