<?php
$id=$_REQUEST["id"];
include('config2.php');
$query="DELETE FROM `price_table` WHERE id='$id'";
$result=mysqli_query($conn,$query);
if($result>0){
    echo "<script>window.location.assign('manageprice.php?msg=deletedatasucessfully')</script>";
}
else{
    echo "<script>window.location.assign('manageprice.php?msg=deletedataunsucessfully')</script>";
}


?>