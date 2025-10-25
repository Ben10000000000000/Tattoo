<?php
include_once('admin_header.php');

?>

<?php
$id=$_REQUEST['id'];
include('config2.php');
$query="SELECT * FROM `category_table` WHERE id='$id'";
$result=mysqli_query($conn,$query);
if($data=mysqli_fetch_array($result)){
}
?>

<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">UPDATE_CATEGORY</h1>
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

    <input type="hidden" value="<?php echo $data["id"];?>" name="id">
    <input type="hidden" value="<?php echo $data["image"];  ?>" name="olding">
    <img src="img/photo/<?php echo $data["image"]; ?>" height="100px" width="100px">
    
    <div class="form-group">
    <label for="category"><b class="text-secondary">NAME:</b></label>
    <input type="text" class="form-control" id="category" name="category" value="<?php echo $data["category_name"];?>" >
    </div>
    <div class="mt-3">
    <label for="image">IMAGE:</label>
    <input type="file" class="form-control" id="image" name="image" value="<?php echo $data["image"];?>">
    
    </div>
    
    <div class="form-group mt-5">
    <label for="description"><b class="text-secondary">DESCRIPTION:</b></label>
    <textarea class="form-control " name="description1" id="description" type="text"  cols="30" rows="6"><?php echo $data["description"];?></textarea>
    </div>
    
                  <button type="submit" class="btn btn-secondary px-2 py-2" name="Submit">UPDATECATEGORY</button>
                  <button type="Reset" class="btn btn-secondary  px-4 py-2">RESETCATEGORY</button>
    </form>
    <br>
          </div>
     </div>
</div>
    
    
    <?php
        if(isset($_REQUEST['Submit'])){
          include('config2.php');
           $id = $_REQUEST["id"];
            $categoryname = $_REQUEST['category'];
            $description = $_REQUEST['description1'];


            if($_FILES["image"]["name"]){
              $fn = $_FILES["image"]["name"];
              $tmp_name = $_FILES["image"]["tmp_name"];
              $new_name = rand().$fn;
              move_uploaded_file($tmp_name,"img/photo/".$new_name);
          }
          else{
              $new_name = $_REQUEST["olding"];
          }
           
            $query = "UPDATE `category_table` SET `category_name`='$categoryname',`image`='$new_name',`description`='$description' WHERE id='$id'";
            $result = mysqli_query($conn,$query);
            if($result>0){
                    
                   echo "<script>window.location.assign('managecategory.php?msg=updateservicesucessfully')</script>";
            }
            else{
                    
                    echo "<script>window.location.assign('managecategory.php?msg=Try Again')</script>";
            }
        }
    ?>
    
    <br>







<?php
include_once('admin_footer.php');

?>