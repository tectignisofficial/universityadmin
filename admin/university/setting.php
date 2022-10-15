<?php 
include("include/config.php");
if(isset($_POST['razorpaySubmit'])){
$razorpayAPIKey=$_POST['razorpayAPIKey'];
$razorpaySecretKey=$_POST['razorpaySecretKey'];

$sql=mysqli_query($conn,"UPDATE `payments` SET `razorpayAPIKey`='$razorpayAPIKey',`razorpaySecretKey`='$razorpaySecretKey'");
  
  if($sql==1){
     header("location:setting.php");
  }else{
      mysqli_error($conn);
  }

}

if(isset($_POST['instaMojoSubmit'])){
    $instaMojoAPIKey=$_POST['instaMojoAPIKey'];
    $instaMojoSecretKey=$_POST['instaMojoSecretKey'];
    
    $sql=mysqli_query($conn,"UPDATE `payments` SET `instaMojoAPIKey`='$instaMojoAPIKey',`instaMojoSecretKey`='$instaMojoSecretKey'");
      
      if($sql==1){
         header("location:setting.php");
      }else{
          mysqli_error($conn);
      }
    
    }

    if(isset($_POST['companysubmit'])){
        $companyname=$_POST['companyname'];
        $mobileNumber=$_POST['mobileNumber'];
        $address=$_POST['address'];
        $companyEmail=$_POST['companyEmail'];
        $websiteurl=$_POST['websiteurl'];
        $facebook=$_POST['facebook'];      
        $instagram=$_POST['instagram'];
        $twitter=$_POST['twitter'];
        $linkedin=$_POST['linkedin'];
        $logo=$_FILES['logo']['name'];
        $tmp_name = $_FILES['logo']['tmp_name']; 
        $loc="assets/img/images/".$logo; 
        move_uploaded_file($tmp_name, $loc);

        $favicon=$_FILES['favicon']['name'];
        $tmp_name = $_FILES['favicon']['tmp_name']; 
        $loc="assets/img/images/".$favicon; 
        move_uploaded_file($tmp_name, $loc);
            
        
        $sql=mysqli_query($conn,"UPDATE `company` SET `companyname`='$companyname',`mobileNumber`='$mobileNumber',`address`='$address',`companyEmail`='$companyEmail',`websiteurl`='$websiteurl',`facebook`='$facebook',`instagram`='$instagram',`twitter`='$twitter',`linkedin`='$linkedin',`logo`='$logo',`favicon`='$favicon' WHERE id='1'");
          
          if($sql==1){
             header("location:setting.php");
          }else{
              mysqli_error($conn);
          }
        
        }
        if(isset($_POST['emailconfig'])){
            $fromemail=$_POST['fromemail'];
            $emailname=$_POST['emailname'];
            $smtpHost=$_POST['smtpHost'];
            $smtpuser=$_POST['smtpuser'];
            $smtpPassword=$_POST['smtpPassword'];
            $smtpPort=$_POST['smtpPort'];      
          
            
            $sql=mysqli_query($conn,"UPDATE `email_config` SET `fromemail`='$fromemail',`emailname`='$emailname',`smtpHost`='$smtpHost',`smtpuser`='$smtpuser',`smtpPassword`='$smtpPassword',`smtpPort`='$smtpPort'WHERE id='1'");
              
              if($sql==1){
                 header("location:setting.php");
              }else{
                  mysqli_error($conn);
              }
            
            }

    if(isset($_POST['googleAnalyticsCodeBtn'])){
        $googleAnalyticsCode=$_POST['googleAnalyticsCode'];
        
        $sql=mysqli_query($conn,"UPDATE `google_analytics` SET `googleAnalyticsCode`='$googleAnalyticsCode'");
          
          if($sql==1){
             header("location:setting.php");
          }else{
              mysqli_error($conn);
          }
        
        }

?>

<?php
include("include/config.php");
if(isset($_POST["changePassword"])){
	$currentPassword=$_POST["currentPassword"];
	$newPassword=$_POST["newPassword"];

	$sql = mysqli_query($conn,"SELECT * FROM admin_login");
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($currentPassword,$row['password']);
	
	$hashpassword=password_hash($newPassword,PASSWORD_BCRYPT);

		if($verify==1){ 
			$query=mysqli_query($conn,"UPDATE `admin_login` SET `password`='$hashpassword'");
      if($query){
        // session_destroy();   // function that Destroys Session 
        echo "<script>alert('Password Changed Successfully'),window.location='setting.php';</script>";
      }
		}
		else{
			echo"<script>alert('Invalid Password');</script>";
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
    <title>:: Ericsson :: Setting</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/plugins/dropify/css/dropify.min.css">

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
                            <h1 class="page-title">Setting</h1>
                            <ol class="breadcrumb page-breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Setting</li>
                            </ol>
                        </div>
                        <ul class="nav nav-tabs page-header-tab">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab"
                                    href="#Company_Settings">Company</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Email_Settings">Email</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Change_Password">Change
                                    Password </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Localization">Google
                                    Analytics</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions">Payment
                                    Working</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Invoice_Settings">Invoice</a></li> -->
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Notifications">SMS
                                    Integration </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-body mt-4">
                <div class="container-fluid">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="Company_Settings">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Company Settings</h3>
                                </div>
                                <?php
                            $sql=mysqli_query($conn,"select * from company");
                            $row=mysqli_fetch_array($sql);
                             ?>
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Logo</label>
                                                    <div class="col-md-10">
                                                     
                                                        <img src="assets/img/images/<?php echo $row['logo']?>" width="100"
                                                            height="100">
                                                        <input type="hidden" value="<?php echo $row['logo']?>">
                                                      
                                                        <input type="file" name="logo" class="dropify">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Favicon</label>
                                                    <div class="col-md-10">
                                                    
                                                        <img src="assets/img/images/<?php echo $row['favicon']?>" width="100"
                                                            height="100">
                                                        <input type="hidden" value="<<?php echo $row['favicon']?>">
                                                    
                                                        <input type="file" name="favicon" class="dropify">
                                                    </div>
                                                </div>

                                            </div>



                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Company Name <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="companyname" type="text"
                                                        value="<?php echo $row['companyname']?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Mobile Number <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="mobileNumber"
                                                        value="<?php echo $row['mobileNumber']?>" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control" name="address"
                                                        placeholder="44 Shirley Ave. West Chicago, IL 60185"
                                                        aria-label="With textarea"
                                                        value="<?php echo $row['address']?>"><?php echo $row['address']?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Email <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="icon-envelope"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $row['companyEmail']?>"
                                                            name="companyEmail">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Website Url</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="icon-globe"></i></span>
                                                        </div>
                                                        <input type="text" name="websiteurl"
                                                            value="<?php echo $row['websiteurl']?>" class="form-control"
                                                            placeholder="http://">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input type="text" name="facebook"
                                                        value="<?php echo $row['facebook']?>" class="form-control"
                                                        placeholder="http://">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Instagram</label>
                                                    <input type="text" value="<?php echo $row['instagram']?>"
                                                        name="instagram" class="form-control" placeholder="http://">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input type="text" value="<?php echo $row['twitter']?>"
                                                        name="twitter" class="form-control" placeholder="http://">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>LinkedIn</label>
                                                    <input type="text" value="<?php echo $row['linkedin']?>"
                                                        name="linkedin" class="form-control" placeholder="http://">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 text-right m-t-20">
                                                <button type="submit" name="companysubmit"
                                                    class="btn btn-primary">SAVE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Localization">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Google Analytics</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" class="form-sample" method="post" enctype="multipart/form-data">
                                        <?php
                               $sql=mysqli_query($conn,"select * from google_analytics");
                               while($row = mysqli_fetch_array($sql)) {

                             ?>
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="text-muted">Google Analytics Code <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="googleAnalyticsCode"
                                                        value="<?php echo $row['googleAnalyticsCode'] ?>"
                                                        placeholder="Google Analytics Code">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-right m-t-20">
                                                <button type="submit" name="googleAnalyticsCodeBtn"
                                                    class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Roles_Permissions">
                            <?php
                               $sql=mysqli_query($conn,"select * from payments ");
                               while($row = mysqli_fetch_array($sql)) {

                             ?>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Razorpay</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" class="form-sample" method="post" enctype="multipart/form-data">

                                        <div class="row">

                                            <div class="col-lg-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="text-muted">API Key <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="razorpayAPIKey"
                                                        value="<?php echo $row['razorpayAPIKey'] ?>"
                                                        placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="text-muted">Secret Key <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="razorpaySecretKey"
                                                        value="<?php echo $row['razorpaySecretKey'] ?>"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-right m-t-20">
                                                <button type="submit" name="razorpaySubmit"
                                                    class="btn btn-primary">Save</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Insta Mojo</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-sample" method="post" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="col-lg-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="text-muted">API Key <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="instaMojoSecretKey"
                                                        value="<?php echo $row['instaMojoSecretKey'] ?>"
                                                        placeholder="API Key">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="text-muted">Secret Key <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="instaMojoSecretKey"
                                                        value="<?php echo $row['instaMojoSecretKey'] ?>"
                                                        placeholder="Secret Key">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-right m-t-20">
                                                <button type="submit" name="instaMojoSubmit"
                                                    class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="tab-pane" id="Email_Settings">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">SMTP Email Settings</h3>
                                </div>

                                <?php
                               $sql=mysqli_query($conn,"select * from email_config ");
                               $row1 = mysqli_fetch_array($sql);

                             ?>
                                <div class="card-body">
                                    <form method="post">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Email From Address</label>
                                                    <input class="form-control" name="fromemail"
                                                        value="<?php echo $row1['fromemail'] ?>" type="email">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Emails From Name</label>
                                                    <input class="form-control" value="<?php echo $row1['emailname'] ?>"
                                                        name="emailname" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>SMTP HOST</label>
                                                    <input class="form-control" value="<?php echo $row1['smtpHost'] ?>"
                                                        name="smtpHost" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>SMTP USER</label>
                                                    <input class="form-control" value="<?php echo $row1['smtpuser'] ?>"
                                                        name="smtpuser" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>SMTP PASSWORD</label>
                                                    <input class="form-control"
                                                        value="<?php echo $row1['smtpPassword'] ?>" name="smtpPassword"
                                                        type="password">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>SMTP PORT</label>
                                                    <input class="form-control" value="<?php echo $row1['smtpPort'] ?>"
                                                        name="smtpPort" type="text">
                                                </div>
                                            </div>
                                            <!-- <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>SMTP Security</label>
                                                <select name="smtpSecurity" class="form-control">
                                                    <option value="SSl">SSL</option>
                                                    <option value="TLS">TLS</option>

                                                </select>
                                            </div>
                                        </div> -->

                                            <div class="col-sm-12 m-t-20 text-right">
                                                <button type="submit" name="emailconfig"
                                                    class="btn btn-primary">SAVE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Invoice_Settings">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Invoice Settings</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Invoice prefix</label>
                                                    <input class="form-control" type="email">
                                                </div>
                                                <input type="file" class="dropify">
                                                <small id="fileHelp" class="form-text text-muted">This is some
                                                    placeholder block-level help text for the above input. It's a bit
                                                    lighter and easily wraps to a new line.</small>
                                            </div>
                                            <div class="col-sm-12 m-t-20 text-right">
                                                <button type="button" class="btn btn-primary">SAVE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Notifications">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Notifications Settings</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            Anyone send me a message
                                            <div class="float-right">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            Anyone seeing my profile page
                                            <div class="float-right">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked="">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            Anyone posts a comment on my post
                                            <div class="float-right">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked="">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            Anyone send me a message
                                            <div class="float-right">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            Anyone seeing my profile page
                                            <div class="float-right">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Change_Password">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Change Password</h3>
                                </div>
                                <form method="post">
                                    <div class="card-body">
                                        <div class="row clearfix">

                                            <div class="col-lg-12 col-md-12">
                                                <h6>Change Password</h6>
                                                <div class="form-group">
                                                    <input type="password" name="currentPassword" class="form-control"
                                                        placeholder="Current Password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" id="pswd1" class="form-control"
                                                        placeholder="New Password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" id="pswd2" class="form-control"
                                                        name="newPassword" placeholder="Confirm New Password">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 m-t-20 text-right">
                                                <button type="submit" class="btn btn-primary"
                                                    name="changePassword">SAVE</button> &nbsp;
                                                <button type="reset" class="btn btn-default">CANCEL</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
    <script src="../assets/plugins/dropify/js/dropify.min.js"></script>

    <!-- Start project main js  and page js -->
    <script src="../assets/js/core.js"></script>
    <script src="assets/js/form/dropify.js"></script>

    <script>
        var password = document.getElementById("pswd1"),
            confirm_password = document.getElementById("pswd2");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>

</html>