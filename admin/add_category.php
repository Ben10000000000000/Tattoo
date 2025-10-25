<?php
include_once('admin_header.php');
?>

<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">ADD_CATEGORY</h1>
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
    <div class="col-md-12">
     <form method="post" enctype="multipart/form-data">

     <div  class="form-group">
        <label for="category"><b class="text-dark">Category name</b></label>
        <input type="text" name="category" id="category" class="form-control border-dark">
     </div>
       
     <div  class="form-group">
        <label for="image"><b class="text-dark">Image</b></label>
        <input type="file" name="image" id="image" class="form-control border-dark">
     </div>


     <div  class="form-group">
        <label for="description"><b class="text-dark">Description</b></label>
       <textarea name="description" id="description" rows="5" cols="8" class="form-control border-dark"></textarea>
     </div>
  
       <button type="submit"  name="Submit" class="btn btn-danger border-dark mt-3">Add Category</button>
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
$category_name=$_REQUEST["category"];

$fn = $_FILES["image"]["name"];
    
            $temp_name = $_FILES["image"]["tmp_name"];
            $new_name = rand().$fn;
    

$description=$_REQUEST["description"];
move_uploaded_file($temp_name,"./img/photo/".$new_name);
$query="INSERT INTO `category_table`( `category_name`, `image`, `description`) VALUES ('$category_name','$new_name','$description')";
$result=mysqli_query($conn,$query);
if($result>0){
echo "<script>window.location.assign('add_category.php?msg=categoryaddsucessfully')</script>";
}
else{
    echo "<script>window.location.assign('add_category.php?msg=categoryaddunsuccess')</script>";
}
}

?>






<?php
include_once('admin_footer.php');
?>