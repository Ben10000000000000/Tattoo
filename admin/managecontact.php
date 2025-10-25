<?php
include_once('admin_header.php');
?>

<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">MANAGE_CONATCT</h1>
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
    
<div class="row text-center">
<div class="col-md">
 <table class="table border-dark ">
<tr>
 <th>srno</th>
 <th>name</th>
<th>email</th>
<th>mob</th>
<th>message</th>
<th>DELETE</th>
</tr>
<?php
include("config2.php");
$srno=1;
$query="SELECT * FROM `contact_table`";
$result=mysqli_query($conn,$query);
while($data=mysqli_fetch_array($result)){
    ?>
    <tr class="text-center">
    <td><?php echo $srno ?></td>
    <td><?php echo $data["name"];?></td>
    <td><?php echo $data["email"];?></td>
    <td><?php echo $data["mob"];?></td>
    <td><?php echo $data["message"];?></td>
    <td><a href="delete.php?id=<?php echo $data["id"];?>" class="btn btn-danger">delete</a></td>

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


