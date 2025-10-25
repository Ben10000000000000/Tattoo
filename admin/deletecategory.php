<?php
$id=$_REQUEST["id"];
include('config2.php');
$query="DELETE FROM `category_table` WHERE id='$id'";
$result=mysqli_query($conn,$query);
if($result>0){
    echo "<script>window.location.assign('managecategory.php?msg=datadeletesucessfully')</script>";
}
else{
    echo "<script>window.location.assign('managecategory.php?msg=datadoesnotdeletesucessfully')</script>";
}


?>