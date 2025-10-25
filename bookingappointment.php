<?php
include_once('header.php');
?>

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

<div class="container container1 ">
    <div class="row animated slideInRight">
        <div class="col-md text-center">
            <h1><u class="text-dark">Book Appointment</u></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 animated slideInRight">
            <form method="post">
                <div class="form-group">
                    <label for="name">NAME:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control border-dark">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control border-dark">
                </div>

                <div class="form-group">
                    <label for="mob">MOB:</label>
                    <input type="number" id="mob" name="mob" placeholder="Enter your mobile number" class="form-control border-dark">
                </div>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" class="form-control border-dark">
                </div>

                <div class="form-group">
                    <label for="time">Timing:</label>
                    <input type="time" class="form-control border-dark" name="time" id="time">
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control border-dark" name="message" id="message" placeholder="Enter Message" cols="30" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-danger border-dark mt-3 px-2 py-2" name="Submit">Book Appointment</button>
                <button type="reset" class="btn btn-danger border-dark mt-3 px-4 py-2">Reset Appointment</button>
            </form>
        </div>
    </div>
</div>

<?php
include('config.php');

if (isset($_REQUEST["Submit"])) {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $mob = $_REQUEST["mob"];
    $date = $_REQUEST["date"];
    $service = $_REQUEST["service"];
    $time = $_REQUEST["time"];
    $message = $_REQUEST["message"];

    $user_id = $_SESSION['id'];

    $query = "INSERT INTO `appointment_table`( `name`, `email`, `mob`, `date`, `service`, `time`, `message`, `user_id`) VALUES ('$name','$email','$mob','$date','$service','$time','$message','$user_id')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>window.location.assign('bookingappointment.php?msg=bookingappointmentsucessfully')</script>";
    } else {
        echo "<script>window.location.assign('bookingappointment.php?msg=bookingappointmentdoesnotsucessfully')</script>";
    }
}
?>

<?php
include_once('footer.php');
?>
