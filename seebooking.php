<?php


session_start();

if (!isset($_SESSION["email"])) {

    
 echo '<script>
         window.location.href = "register.php";
    
    </script>';
    exit();
}





if (isset($_SESSION['user_id'])) {
    echo "you cannot see booking detail"; 

}
else{
    $user_id = $_SESSION['id'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .container1{
            background-color:rgb(144,188,121);
        }
        .btn{
            padding-bottom:100px;
        }
    </style> 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  .col2 {
    background: linear-gradient(to bottom, #36454f, lightgreen);
  color: #f0f0f0;
  }
</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center container1">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top" >
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="index.html" class="navbar-brand">
                    <h2 class="m-0 h1 text-white">𝓣𝓪𝓽𝓽𝓸𝓸 𝓔𝓵𝓮𝓰𝓪𝓷𝓬𝓮</h2>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="home.php" class="nav-item nav-link active text-white">Home</a>
                        <a href="about.php" class="nav-item nav-link col2 text-white">About</a>
                        <a href="category.php" class="nav-item nav-link text-white">Our Service</a>
                        <div class="nav-item dropdown ">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="teams.php" class="dropdown-item">teams</a>
                                <a href="price.php" class="dropdown-item">prices</a>
                                <a href="seebooking.php" class="dropdown-item">seeappointment</a>
                                <a href="contact.php" class="dropdown-item">Contact</a>
                            </div>
                        </div>
                        <?php
                         if(isset($_SESSION["email"])){
                        ?>
                        <a href="logout.php" class=" nav-item nav-link btn btn-danger border-dark">LOGOUT</a>
                        
                        <?php
                         }
                         else{
                            ?>
                        <a href="register.php" class=" nav-item nav-link btn btn-danger border-dark">sign-in</a>
                        
                        <?php
                         }
                        ?>
            </nav>
        </div>
    </div>  











<!-- Hero Start -->
<div class="container-fluid col2 hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3 animated slideInDown">MANAGE_APPOINTMENT</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">contact</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md">
            <table class="table table-bordered border-dark">
                <tr class="text-center">
                    <th>srno</th>
                    <th>name</th>
                    <th>email</th>
                    <th>mob</th>
                    <th>date</th>
                    <th>service</th>
                    <th>time</th>
                    <th>message</th>
                    <th>status</th>
                </tr>

                <?php
                $srno = 1;
                include('config.php');

        
                 $query = "SELECT * FROM `appointment_table` WHERE `user_id` = '$user_id'";
                $result = mysqli_query($conn, $query);

                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr class="text-center">
                        <td><?php echo $srno;?></td>
                        <td><?php echo $data["name"];?></td>
                        <td><?php echo $data["email"];?></td>
                        <td><?php echo $data["mob"];?></td>
                        <td><?php echo $data["date"];?></td>
                        <td><?php echo $data["service"];?></td>
                        <td><?php echo $data["time"];?></td>
                        <td><?php echo $data["message"];?></td>
                        <td><?php echo $data["status"];?></td>
                    </tr>
                <?php
                    $srno++;
                }
                ?>

            </table>
        </div>
    </div>
</div>

<?php
include_once('footer.php');
?>
