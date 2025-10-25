
<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>window.location.assign('login2.php')</script>";
    
    exit();
}
?>





<!DOCTYPE html>
<html lang="en">

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
    
            .col2 {
    background: linear-gradient(to bottom, #36454f, lightgreen);
  color: #f0f0f0;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top container1">
        <div class="container container1">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="index.html" class="navbar-brand">
                    <h2 class="m-0 text-white">𝓣𝓪𝓽𝓽𝓸𝓸 𝓔𝓵𝓮𝓰𝓪𝓷𝓬𝓮</h2>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="dashboard.php" class="nav-item nav-link active text-white">dasboard</a>
</div>
                        

                        <div class="nav-item dropdown ">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Category</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="add_category.php" class="dropdown-item">Add_category</a>
                                <a href="managecategory.php" class="dropdown-item">Manage Category</a>
                                
                            </div>
                        </div>

                        <div class="nav-item dropdown ">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Service</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="add_service.php" class="dropdown-item">Add_Service</a>
                                <a href="manageservice.php" class="dropdown-item">Manage Service</a>
                                
                            </div>
                        </div>


                        <div class="nav-item dropdown ">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="add_team.php" class="dropdown-item">Add_Team member</a>
                                <a href="manageteam.php" class="dropdown-item">Manage Team member</a>
                                <a href="add_price.php" class="dropdown-item">Add_price</a>
                                <a href="manageprice.php" class="dropdown-item">Manage_price</a>
                            
                                <a href="manageappointment.php" class="dropdown-item">Manage booking</a>
                                <a href="managecontact.php" class="dropdown-item">Manage contact</a>
                                <a href="manageregister.php" class="dropdown-item">Manage Register</a>
                                
                            </div>
                        </div>

                            <div class="navbar-nav ms-auto">
                        
                            <?php
                         if(isset($_SESSION["email"])){
                        ?>
                        <a href="logout2.php" class=" nav-item nav-link btn btn-danger border-dark">LOGOUT</a>
                        <?php
                         }
                         else{
                            ?>
                        <a href="login2.php" class=" nav-item nav-link btn btn-danger border-dark">lOGIN</a>
                        <?php
                         }
                        ?>





                        </div>







                       
                        
            </nav>
        </div>
    </div> 