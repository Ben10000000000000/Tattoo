


<?php
include_once('header.php');
?>








    

    
<!-- Hero Start -->
<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">SIGN-IN</h1>
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

<style>
    .container1{
        border:10px,solid,black;
        
    }

.design{
padding-top:20px;
padding-bottom:20px;
padding-right:400px;
padding-left:400px;
}

</style>



<!-- breadcrumb start-->

<br>
<div class="container container1">

<div class="row bg-dark">
    <div class="col-md-3 "></div>
   <div class="col-md text-center">
    <h1 class="text-white">REGISTERATION FORM</h1>
    </div>
    <div class="col-md-3 "></div>
    </div>
<br>
<div class="row">
    <div class="col text-center">
        <img src="img/images.png" alt="" width="100px" height="100px">
    </div>
</div>
<div class="row">
    <div class="col">
<form method="post">

<div class="form-group">
<label for="name"><b class=text-dark>NAME:</b></label>
<input type="text" name="name" id="name" class="form-control border-dark" placeholder="enter full name " required>
</div>

<div class="form-group">
<label for="email"><b class=text-dark>EMAIL:</b></label>
<input type="email" name="email" id="email" class="form-control border-dark" placeholder="enter email address" required>
</div>

<div class="form-group">
<label for="mob"><b class=text-dark>MOB:</b></label>
<input type="number" name="mob" id="mob" class="form-control border-dark" placeholder="enter phone number" required>
</div>

<div class="form-group">
<label for="password"><b class=text-dark>PASSWORD:</b></label>
<input type="password" name="password" id="password" class="form-control border-dark" placeholder="enter password" required>
<input type="checkbox" id="togglePassword"> Show Password
</div>
<div class="design">
<button type="submit" name="Submit" class="btn btn-danger form-control  mb-3 text-dark">REGISTER</button>
<br>
<a href="login.php" class="btn btn-warning form-control text-dark">Login</a>
</div>

</div>
</div>
<br>
</form>
</div>
<br>

<br>

<?php  

include('config.php');
if(isset($_REQUEST['Submit'])){
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$mob= $_REQUEST['mob'];
$password= md5($_REQUEST['password']);
$dup_email=mysqli_query($conn, "SELECT * FROM `register_table` WHERE email='$email'");
if(mysqli_num_rows($dup_email)){
    echo "<script>alert('Email already exists')</script>";
}
else{
$query="INSERT INTO `register_table`( `name`, `email`, `mob`, `password`) VALUES ('$name','$email','$mob','$password')";
$result=mysqli_query($conn,$query);
if($result>0){
    if(isset($_REQUEST['Submit'])){
        $email = $_REQUEST["email"];
        $password = md5($_REQUEST["password"]);     
        include('config.php');
        $query = "select * from `register_table` where `email`='$email'";
        $result = mysqli_query($conn,$query);
        if($data =  mysqli_fetch_array($result)){
            // print_r($data);
              if($password == $data['password']){
                $_SESSION["email"] = $data["email"];
                $_SESSION["id"]=$data["id"];
                echo "<script>window.location.assign('home.php?msg=loginsucessfully')</script>";
                // create and store
              }
              else{
                echo "<script>window.location.assign('login.php?msg=incorrectpassoword')</script>";
              }
        }
        else{
            echo "<script>window.location.assign('login.php?msg=tryagin')</script>";
               
        }
    }
}
}
}
?>












<?php
include_once('footer.php');
?>