<?php
include_once('admin_header.php');
?>
<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">MANAGE_PRICE</h1>
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
    <table class="table table-border border-dark">
       <tr class="text-center text-dark">
        <th>srno</th>
        <th>Product_Name</th>
        <th>image</th>
        <th>price</th>
        <th>edit</th>
        <th>delete</th>
       </tr> 
       <?php
include('config2.php');
$srno=1;
$query="SELECT * FROM `price_table`";
$result=mysqli_query($conn,$query);
while($data=mysqli_fetch_array($result)){
  ?> 
<tr class="text-center">
    <td><?php echo $srno;?></td>
    <td><?php echo $data["name"];?></td>
    <td><img src="./img/photo/<?php echo $data["image"];?>" width="100px"></td>
    <td><?php echo $data["price"]; ?></td>
    <td><a href="" class="btn btn-success">Edit</a></td>
    <td><a href="deleteprice.php?id=<?php echo $data["id"];?>" class="btn btn-danger">Delete</a></td>

</tr>



  <?php 
$srno++;
}

?>









</table>
</div>
</div>
</div>
















<?php
include_once('admin_footer.php');
?>