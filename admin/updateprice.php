<?php
include_once('admin_header.php');

?>

<div class="container-fluid col2 hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">UPDATE_PRICE</h1>
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

<div class="form-group">
<label for="name"><b class="text-dark">Name</b></label>
<input type="text" name="name" class="form-control border-dark" id="name">
</div>

<div class="form-group">
<label for="image"><b class="text-dark">image</b></label>
<input type="file" name="image" class="form-control border-dark" id="image">
</div>


<div class="form-group">
<label for="price"><b class="text-dark">price</b></label>
<input type="text" name="price" class="form-control border-dark" id="price">
</div>
<br>
<button  type="submit" class="btn btn-success border-dark" name="Submit">submit</button>
<button type="reset" class="btn btn-danger border-dark" >reset</button>

</form>
</div>
</div>
</div>








<?php
include_once('admin_footer.php');

?>