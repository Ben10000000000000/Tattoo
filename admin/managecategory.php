<?php
include_once('admin_header.php');
?>

<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">MANAGE_CATEGORY</h1>
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
     <div class="row mt-3" >
      <div class="col-md-12">
        <div class="table-responsive">
        
                    <table class="table table-bordered border-dark">
    <tr class=" text-center  text-dark">
        <th>SRNO</th>
        <th>category NAME </th>
        <th>Image</th>
        <th>DESCRIPTION</th>
        <th>Delete</th>
        <th>edit</th>
    </tr>
    

    <?php
$sno=1;
include('config2.php');
$query="SELECT * FROM `category_table`";
$result= mysqli_query($conn,$query);
while($data = mysqli_fetch_array($result)){
    ?>
    <tr class="text-center text-dark ">
        <td><?php echo $sno;?></td>
        <td><?php echo $data["category_name"];?></td>
        <td><img src="./img/photo/<?php echo $data['image'];?>" height="100px"> </td>
        <td><?php echo $data["description"];?></td>
    
        <td><a href="deletecategory.php?id=<?php echo $data["id"];?>" class="btn btn-danger">Delete</a></td>
        <td><a href="updatecategory.php?id=<?php echo $data["id"];?>" class="btn btn-warning">EDIT</a></td>
    </tr>
<?php
    $sno++;
    }
?>

                  </table>
         </div>
</div>
  </div>
</div>

  <?php
include_once('admin_footer.php');
?>
