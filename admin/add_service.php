<?php
include_once('admin_header.php');
?>

<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">ADD_SERVICE</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">contact</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-md">
<form method="post"  enctype="multipart/form-data">

<div class="form-group">
    <label for="name"><b class="text-dark">Name</b></label>
    <input type="text" name="name"  id="name "class="form-control border-dark">
     </div>

     <div class="form-group">
    <label for="category"><b class="text-dark">Category</b></label>
    <select name="category" id="category" class="form-control border-dark">
    <?php
     include('config2.php');
     $query="SELECT * FROM `category_table`";
     $result=mysqli_query($conn,$query);
     while($data=mysqli_fetch_array($result)){
?>
<option value="<?php echo $data["category_name"];?>"><?php echo $data["category_name"];?></option>
<?php
     }
?>
    </select>


     </div>
     <div class="form-group">
    <label for="image"><b class="text-dark">Image</b></label>
    <input type="file" name="image"  id="image "class="form-control border-dark">
     </div>

     <div class="form-group">
     <div  class="form-group">
        <label for="description"><b class="text-dark">Description</b></label>
       <textarea name="description" id="description" rows="5" cols="8" class="form-control border-dark"></textarea>
     </div>
     
     <button type="submit" name="Submit" class="btn btn-danger border-dark mt-3">Add Service</button>
     <button type="reset" class="btn btn-danger border-dark mt-3">Reset</button>


</form>
</div>

</div>
</div>

<br>
<br>
<?php
if(isset($_REQUEST["Submit"])){
    include('config2.php');
    $service_name = $_REQUEST["name"];
    $category = $_REQUEST["category"];
    $description=$_REQUEST["description"];

    $fn = $_FILES["image"]["name"];
    $temp_name = $_FILES["image"]["tmp_name"];
    $new_name = rand().$fn ;
    move_uploaded_file( $temp_name,"./img/photo/".$new_name);
    
   
   
    $query="INSERT INTO `service_table`(`service_name`, `category`, `image`, `description`) VALUES ('$service_name','$category','$new_name','$description')";
    $result=mysqli_query($conn, $query);
    if($result>0){
        echo "<script>window.location.assign('add_service.php?msg=addservicesucessfully')</script>";
    }
else{
    echo "<script>window.location.assign('add_service.php?msg=addservicesucessfully')</script";
}

}

?>










<?php
include_once('admin_footer.php');