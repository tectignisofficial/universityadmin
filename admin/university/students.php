<?php 
include("include/config.php");

if(isset($_POST['submit'])){
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$rollNo=$_POST['rollNo'];
$email=$_POST['email'];
$regDate=$_POST['regDate'];
$course=$_POST['course'];
$gender=$_POST['gender'];
$mobileNo=$_POST['mobileNo'];
$parentsName=$_POST['parentsName'];
$parentsMobileNo=$_POST['parentsMobileNo'];
$DOB=$_POST['DOB'];
$address=$_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];
$file=$_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name']; 
$loc="assets/img/images/".$file; 
move_uploaded_file($tmp_name, $loc);

$sql=mysqli_query($conn,"INSERT INTO `students`(`firstName`, `lastName`, `rollNo`, `email`, `regDate`, `course`, `gender`, `parentsName`, `parentsMobile`, `DOB`, `address`, `file`, `username`, `password`,`mobileNo`) VALUES ('$fName','$lName','$rollNo','$email','$regDate','$course','$gender','$parentsName','$parentsMobileNo','$DOB','$address','$file','$username','$password','mobileNo')");
  
  if($sql==1){
     header("location:students.php");
  }else{
      mysqli_error($conn);
  }

}

if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from students where id='$id'");
  if($sql=1){
    header("location:students.php");
  }
}
?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title>:: Ericsson :: Students</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="../assets/plugins/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="../assets/plugins/summernote/dist/summernote.css" />
    <link rel="stylesheet" href="../assets/plugins/sweetalert/sweetalert.css">

    <!-- Core css -->
    <link rel="stylesheet" href="../assets/css/style.min.css" />
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
                            <h1 class="page-title">Students</h1>
                            <ol class="breadcrumb page-breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Students</li>
                            </ol>
                        </div>
                        <ul class="nav nav-tabs page-header-tab">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Student-all">List
                                    View</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Student-add">Add</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-body mt-4">
                <div class="container-fluid">
                    <div class="tab-content">
                        <div class="tab-pane active" id="Student-all">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Roll No.">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Department">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <input data-provide="datepicker" data-date-autoclose="true"
                                                    class="form-control" placeholder="Admission Date">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-block"
                                                title="">Search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive card">
                                <table class="table table-hover table-vcenter table-striped mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Roll No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Course</th>
                                            <th>Registration Date</th>
                                            <th>Parents Name</th>
                                            <th>Parents Contact</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from `students`");
                     $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <tr>
                                            <td><?php echo $arr['rollNo'];?></td>
                                            <td><?php echo $arr['firstName'];?> <?php echo $arr['lastName'];?></td>
                                            <td><?php echo $arr['email'];?></td>
                                            <td><?php echo $arr['mobileNo'];?></td>
                                            <td><?php echo $arr['course'];?></td>
                                            <td><?php echo $arr['regDate'];?></td>
                                            <td><?php echo $arr['parentsName'];?></td>
                                            <td><?php echo $arr['parentsMobile'];?></td>
                                            <td><?php echo $arr['address'];?></td>
                                            <td>
                                                <a type="button" class="btn btn-icon btn-sm"
                                                    href="students_update.php?sid=<?php echo $arr['id'] ?>"
                                                    title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="students.php?delid=<?php echo $arr['id'] ?>"
                                                    class="btn btn-icon btn-sm" title="Delete"><i
                                                        class="fa fa-trash-o text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <?php $count++;   } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="Student-add">
                            <form action="" class="form-sample" method="post" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Basic Information</h3>
                                                <div class="card-options ">
                                                    <a href="#" class="card-options-collapse"
                                                        data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                            class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">First Name <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="fName"
                                                            placeholder="Enter First name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Last Name <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="lName"
                                                            placeholder="Enter Last name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Roll No <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="rollNo" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Registration Date <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input data-provide="datepicker" data-date-autoclose="true"
                                                            name="regDate" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Course <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select class="form-control input-height" name="course">
                                                            <option value="">Select...</option>
                                                            <option value="Category 1">Web Development Basic</option>
                                                            <option value="Category 2">Web Development Advance</option>
                                                            <option value="Category 3">Hardware & Networking</option>
                                                            <option value="Category 3">PHP & mySQl</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Gender <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select class="form-control input-height" name="gender">
                                                            <option value="">Select...</option>
                                                            <option value="Category 1">Male</option>
                                                            <option value="Category 2">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Mobile No. <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="mobileNo" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Parents Name <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="parentsName" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Parents Mobile No. <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="parentsMobileNo" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Date Of Birth <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="DOB" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Address <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="address" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label">Profile Picture</label>
                                                    <div class="col-md-9">
                                                        <?php
                                                            if(isset($_GET['eid'])){
                                                            ?>
                                                        <img src="dist/img/images/<?php echo $file; ?>" width="100"
                                                            height="100">
                                                        <input type="hidden" value="<?php echo $file; ?>" name="img">
                                                        <?php }  ?>
                                                        <input type="file" name="file" class="dropify">
                                                        <small id="fileHelp" class="form-text text-muted">This is some
                                                            placeholder block-level help text for the above input. It's
                                                            a bit lighter and easily wraps to a new line.</small>
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
                                                    <a href="#" class="card-options-collapse"
                                                        data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                            class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>User Name</label>
                                                            <input type="text" name="username" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="text" name="password" class="form-control">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="text" name="confirmPassword" class="form-control">
                                                </div>
                                            </div> -->
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-primary"
                                                            name="submit">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-secondary">Cancel</button>
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
    <!-- <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script> -->

    <!-- Start project main js  and page js -->
    <script src="../assets/js/core.js"></script>
    <script src="assets/js/form/dropify.js"></script>
    <script src="assets/js/page/summernote.js"></script>
    <script src="assets/js/page/dialogs.js"></script>
</body>

</html>