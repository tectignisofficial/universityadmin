<?php 
include("include/config.php");

if(isset($_POST['submit'])){
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$email=$_POST['email'];
$course=$_POST['course'];
$gender=$_POST['gender'];
$mobileNo=$_POST['mobileNo'];
$DOB=$_POST['DOB'];
$username=$_POST['username'];
$password=$_POST['password'];
$message=$_POST['message'];

$file=$_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name']; 
$loc="assets/img/images/".$file; 
move_uploaded_file($tmp_name, $loc);

$sql=mysqli_query($conn,"INSERT INTO `proffessor`(`firstName`, `lastName`, `email`,  `course`, `gender`,
  `DOB`, `file`, `username`, `password`,`mobileNo`,`message`) VALUES ('$fName','$lName',
 '$email','$course','$gender','$DOB','$file','$username',
 '$password','mobileNo','$message')");
  
  if($sql==1){
     header("location:professors.php");
  }else{
      mysqli_error($conn);
  }

}

if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from proffessor where id='$id'");
  if($sql=1){
    header("location:professors.php");
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
                        <h1 class="page-title">Professors</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Professors</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active"data-toggle="tab" href="#pro-all">List View</a></li>
                        <li class="nav-item"><a class="nav-link"data-toggle="tab" href="#pro-add">Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="pro-all">
                        <div class="table-responsive">
                            <table class="table table-hover table-vcenter table_custom text-nowrap spacing5 border-style mb-0">
                                <tbody>
                                <?php 
                        
                        $sql=mysqli_query($conn,"select * from `proffessor`");
                     $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                    <tr>
                                    <td><?php echo $arr['firstName'];?> <?php echo $arr['lastName'];?></td>
                                    <td><?php echo $arr['email'];?></td>
                                    <td><?php echo $arr['course'];?></td>
                                    <td><?php echo $arr['mobileNo'];?></td>
                                    <td><?php echo $arr['message'];?></td>
                                        <td>
                                        <a type="button" class="btn btn-icon btn-sm" href="professor_update.php?sid=<?php echo $arr['id'] ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a href="professors.php?delid=<?php echo $arr['id'] ?>" class="btn btn-icon btn-sm" title="Delete"><i class="fa fa-trash-o text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <?php $count++;   } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="pro-add">
                    <form action="" class="form-sample" method="post" enctype="multipart/form-data">
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
                                                    <label>First Name</label>
                                                    <input type="text" name="fName" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" name="lName" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input data-provide="datepicker" data-date-autoclose="true"  name="DOB" class="form-control" placeholder="Date of Birth">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label>Gender</label>
                                                <select class="form-control show-tick"  name="gender">
                                                    <option value="">-- Gender --</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-12" >
                                                <div class="form-group">
                                                    <label>Course</label>
                                                    <input type="text" name="course" class="form-control">
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" name="mobileNo" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Enter Your Email</label>
                                                    <input type="text" name="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group mt-2 mb-3">
                                                    <input type="file" name="file" class="dropify">
                                                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group mt-3">
                                                    <label>Messages</label>
                                                    <textarea rows="4" name="message" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
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
                                                    "username" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" name="password" class="form-control">
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
                        </div>
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
