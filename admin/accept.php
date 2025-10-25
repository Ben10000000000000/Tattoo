<?php
include_once('admin_header.php');
?>
<div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">CONTACT</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">contact</li>
                </ol>
            </nav>
        </div>
</div>

<?php
$id=$_REQUEST["id"];
$status=$_REQUEST["status"];
include('config2.php');
$query="UPDATE `appointment_table` SET `status`='$status' WHERE id='$id'";
$result=mysqli_query($conn,$query);
if($result>0){
    echo "<script>window.location.assign('manageappointment.php?msg=bookingacceptsuccessfully')</script>";
}
else{
    echo "<script>window.location.assign('manageappointment.php?msg=bookingdoesnotacceptsuccessfully')</script>";
}
?>

















<?php
include_once('admin_footer.php');
?>