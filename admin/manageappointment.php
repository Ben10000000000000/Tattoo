<?php
include_once('admin_header.php');

?>
<!-- Hero Start -->
<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">MANAGE_APPOINTMENT</h1>
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
<th>email</th>
<th>mob</th>
<th>date</th>
<th>service</th>
<th>time</th>
<th>message</th>
<th>status</th>
<th colspan="2">action</th>
</tr>

<?php
$srno=1;
include('config2.php');
$query="SELECT * FROM `appointment_table`";
$result=mysqli_query($conn,$query);
while($data=mysqli_fetch_array($result)){
    ?>
    <tr class="text-center">
        <td><?php echo $srno;?></td>
        <td><?php echo $data["name"];?></td>
        <td><?php echo $data["email"];?></td>
        <td><?php echo $data["mob"];?></td>
        <td><?php echo $data["date"];?></td>
        <td><?php echo $data["service"];?></td>
        <td><?php echo $data["time"];?></td>
        <td><?php echo $data["message"];?></td>
        <td><?php echo $data["status"];?></td>
        <td>
 <a href="accept.php?id=<?php echo $data["id"]?>&status=Accept" class="btn btn-warning border-dark">Accept</a>
 <a href="decline.php?id=<?php echo $data["id"]?>&status=Decline" class="btn btn-danger border-dark">Decline</a>
        </td>
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