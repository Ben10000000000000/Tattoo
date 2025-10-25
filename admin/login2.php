

<?php
session_start();
?>


<head>
    
    <meta charset="utf-8">
    <title>Hairnic - Single Product Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    .container1{
        border:10px,solid,black;
    }
    
        .col2 {
    background: linear-gradient(to bottom, #36454f, lightgreen);
  color: #f0f0f0;
        }
    </style>
</head>

<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">ADMIN_LOGIN</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">contact</li>
                </ol>
            </nav>
        </div>
    </div>



<div class="container container1">

<div class="row bg-dark">
    <div class="col-md-4 "></div>
   <div class="col-md text-center">
    <h1 class="text-white">LOGIN FORM</h1>
    </div>
    <div class="col-md-4"></div>
    </div>

 <div class="row mt-3">
    <div class="col text-center">
        <img src="img/360_F_7324855_mx4CEBWTr81XLOrlQccCROtP2uNR7xbk.jpg" alt="" width="200px" height="200px">
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
<button type="submit" name="Submit" class="btn btn-warning form-control text-dark">LOGIN</button>

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
        include('config2.php');
        $query = "select * from `admin` where `email`='$email'";
        $result = mysqli_query($conn,$query);
        if($data =  mysqli_fetch_array($result)){
            // print_r($data);
              if($password == $data['password']){
                $_SESSION["email"] = $data["email"];
 
                echo "<script>window.location.assign('dashboard.php?msg=loginsucessfully')</script>";
                // create and store
              }
              else{
                echo "<script>window.location.assign('login2.php?msg=incorrectpassoword')</script>";
              }
        }
        else{
            echo "<script>window.location.assign('login2.php?msg=tryagin')</script>";
               
        }
    }
?>
<?php
include_once('admin_footer.php');
?>