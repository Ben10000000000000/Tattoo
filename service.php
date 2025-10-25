<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["email"])) {
    echo '<script>
        alert("You need to sign in first.");
        window.location.href = "login.php"; // Redirect to login page
    </script>';
    exit();
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
    </div>    <!-- Navbar End -->
    

<!-- Hero Start -->
<div class="container-fluid col2 hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3 animated slideInDown">RELATED SERVICE</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>

<br>
<div class="container">
    <div class="row">
        <?php
        $category_name = $_REQUEST["category"];
        include('config.php');
        $query = "SELECT * FROM `service_table` WHERE category='$category_name'";
        $result = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_array($result)) {
        ?>
            <div class="card shadow-lg p-2 mb-5 bg-body-tertiary rounded mx-2 mt-5" style="width: 22rem;">
                <img src="./admin/img/photo/<?php echo $data["image"]; ?>" class="card-img-top" alt="..." height="300px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data["service_name"]; ?></h5>
                    <p class="card-text"><?php echo $data["description"]; ?></p>
                    <a href="bookingappointment.php?service=<?php echo $data["service_name"]; ?>" class="btn btn-primary">Book appointment</a>
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
