<?php
include_once('admin_header.php');
?>

<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">MANAGE_REGISTER</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">contact</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container container1">
     <div class="row mt-3 " >
                    <table class="table table-bordered border-dark">
    <tr class=" text-center  text-dark">
        <th>SRNO</th>
        <th>Name </th>
        <th>Email</th>
        <th>Mob</th>
        <th>Password</th>
        <th>Delete</th>
    </tr>
    

    <?php
$srno=1;
include('config2.php');
$query="SELECT * FROM `register_table`";
$result= mysqli_query($conn,$query);
while($data = mysqli_fetch_array($result)){
    ?>
    <tr class="text-center text-dark ">
        <td><?php echo $srno;?></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['email'];?></td>
        <td><?php echo $data['mob'];?></td>
        <td><?php echo $data['password'];?></td>
        <td><a href="deleteuser.php?id=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a></td>
    </tr>
<?php
    $srno++;
    }
?>

                  </table>
         </div>
</div>
<br>













<?php
include_once('admin_footer.php');
?>