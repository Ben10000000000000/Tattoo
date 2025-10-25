<?php
    $id = $_REQUEST["id"];

    include('config.php');
    $q = "DELETE FROM `contact_table` WHERE id='$id'";
    $result = mysqli_query($conn,$q);
    if($result>0){
    
        echo "<script>window.location.assign('contact.php?msg=Datadeleted')</script>";
    }
    else{
        echo "<script>window.location.assign('contact.php?msg=Tryagain')</script>";
    }
?>