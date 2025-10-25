<?php
include_once('header.php');
?>

<!-- Hero Start -->
<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">LOGIN</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">contact</li>
                </ol>
            </nav>
        </div>
    </div>




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



<div class="container container1">

<div class="row bg-dark">
    <div class="col-md-4 "></div>
   <div class="col-md text-center">
    <h1 class="text-white">LOGIN FORM</h1>
    </div>
    <div class="col-md-4"></div>
    </div>

<div class="row mt-5">
    <div class="col text-center">
        <img src="img/depositphotos_70364593-stock-illustration-login-button-icon.jpg" alt="" width="200px" height="200px">
    </div>
</div>
<div class="row">
    <div class="col">
<form method="post">
<div class="form-group">
<label for="email"><b class=text-dark>EMAIL:</b></label>
<input type="email" name="email" id="email" class="form-control border-dark" placeholder="enter email address">
</div>

<div class="form-group">
<label for="password"><b class=text-dark>PASSWORD:</b></label>
<input type="password" name="password" id="password" class="form-control border-dark" placeholder="enter password">
<input type="checkbox" id="togglePassword"> Show Password
</div>
<div  class="design">
<button type="submit" name="Submit" class="btn btn-danger text-dark form-control mb-3">LOGIN</button>
<br>
<a href="register.php" class="btn btN-warning form-control  ">REGISTERATION</a>
</div>

</div>
</div>
<br>
</form>
</div>
<br>


<?php
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
?>


















<?php
include_once('footer.php');
?>