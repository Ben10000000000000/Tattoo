<?php
include_once('admin_header.php');

?>
<!-- Hero Start -->
<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">MANAGE_TEAM</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">contact</li>
                </ol>
            </nav>
        </div>
    </div>



    <div class="container-fluid">
<div class="row">
    <div class="col-md">
<table class="table table-bordered border-dark">
<tr class="text-center">
<th>srno</th>
<th>name</th>
<th>image</th>
<th>mob</th>
<th>address</th>
<th>email</th>
<th>profession</th>
<th>joining date</th>
<th>edit</th>
<th>delete</th>
</tr>

<?php
$srno=1;
include('config2.php');
$query="SELECT * FROM `team_member`";
$result=mysqli_query($conn,$query);
while($data=mysqli_fetch_array($result)){
    ?>
    <tr class="text-center">
        <td><?php echo $srno;?></td>
        <td><?php echo $data["name"];?></td>
        <td><img src="./img/photo/<?php echo $data["image"];?>" height="100px"> </td>
        <td><?php echo $data["mobile number"];?></td>
        <td><?php echo $data["address"];?></td>
        <td><?php echo $data["email"];?></td>
        <td><?php echo $data["profession"];?></td>
        <td><?php echo $data["joining date"];?></td>
        <td><a href="updateteammember.php?id=<?php echo $data["id"];?>"class="btn btn-warning border-dark">edit</a>
    </td>
    <td><a href="deleteteammember.php?id=<?php echo $data["id"];?>"class="btn btn-danger border-dark">delete</a></td>
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