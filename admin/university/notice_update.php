<?php 
include("include/config.php");
$sid=$_GET['sid'];
if(isset($_POST['submit'])){
$title=$_POST['title'];
$description=$_POST['description'];
$expiryDate=$_POST['expiryDate'];
$publishedDate=$_POST['publishedDate'];



$sql=mysqli_query($conn,"UPDATE `notice_board` SET `title`='$title',`description`='$description',
`expiryDate`='$expiryDate',`publishedDate`='$publishedDate' WHERE id ='$sid'");
   
  if($sql==1){
     header("location:noticeboard.php");
  }else{
      mysqli_error($conn);
  }

}


?>


<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Ericsson :: Professors</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/plugins/dropify/css/dropify.min.css">
<link rel="stylesheet" href="../assets/plugins/summernote/dist/summernote.css"/>

<!-- Core css -->
<link rel="stylesheet" href="../assets/css/style.min.css"/>
</head>

<body class="font-muli theme-cyan gradient">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
<?php include "include/sidebar.php" ?>
  
  <!-- Start project content area -->
  <div class="page">
      <?php include "include/header.php" ?>
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Notice Board</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Notice Board</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active"data-toggle="tab" href="#pro-add">Update</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="pro-add">
                    <form action="" class="form-sample" method="post">
                    <?php
                               $sql=mysqli_query($conn,"select * from notice_board where id='$sid'");
                               while($row = mysqli_fetch_array($sql)) {

                             ?>
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Information</h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" name="title" value="<?php echo $row['title'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Publish Date</label>
                                                    <input type="date"  value="<?php echo $row['publishedDate'] ?>" name="publishedDate" class="form-control" placeholder="Date of Birth">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label>Expiry Date</label>
                                                    <input type="date"   value="<?php echo $row['expiryDate'] ?>" name="expiryDate" class="form-control" placeholder="Date of Birth">
                                                </div>
                                            </div>
                                             <!-- <div class="col-md-4 col-sm-12">
                                                <label>Gender</label>
                                                <select class="form-control show-tick" value="<?php echo $row['gender'] ?>"  name="gender">
                                                    <option value="">-- Gender --</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div> 
                                            <div class="col-md-4 col-sm-12" >
                                                <div class="form-group">
                                                    <label>Course</label>
                                                    <input type="text" name="course"  value="<?php echo $row['course'] ?>" class="form-control">
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" name="mobileNo" value="<?php echo $row['mobileNo'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Enter Your Email</label>
                                                    <input type="text" name="email" value="<?php echo $row['email'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group mt-2 mb-3">
                                                <img src="assets/img/images/<?php echo $row['file']; ?>" width="100" height="100">
                                                <input type="hidden" value="<?php echo $file; ?>" name="img">
                        
                                                <input type="file" name="file" class="dropify">
                                                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                </div>
                                            </div> -->
                                            <div class="col-sm-12">
                                                <div class="form-group mt-3">
                                                    <label>Messages</label>
                                                    <textarea rows="4" name="description" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $row['description'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
                                                <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Account Information</h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>User Name</label>
                                                    <input type="text" name=
                                                    "username" value="<?php echo $row['username'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" value="<?php echo $row['password'] ?>" name="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
                                                <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <?php } ?>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include "include/footer.php" ?>

    </div>    
</div>

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="../assets/bundles/lib.vendor.bundle.js"></script>

<!-- Start Plugin Js -->
<script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/plugins/dropify/js/dropify.min.js"></script>
<script src="../assets/bundles/summernote.bundle.js"></script>

<!-- Start project main js  and page js -->
<script src="../assets/js/core.js"></script>
<script src="assets/js/form/dropify.js"></script>
<script src="assets/js/page/summernote.js"></script>
</body>
</html>
