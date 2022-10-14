<?php
include("include/config.php");

if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $expirydate=$_POST['expirydate'];

    
    $sql=mysqli_query($conn,"INSERT INTO `notice_board`(`title`, `description`, `expiryDate`) VALUES ('$title','$description','$expirydate')");
      
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
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title>:: Ericsson :: Page Empty</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />

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
                            <h1 class="page-title">NoticeBoard</h1>
                            <ol class="breadcrumb page-breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                                <li class="breadcrumb-item active" aria-current="page">NoticeBoard</li>
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
                            <?php

                            $sql=mysqli_query($conn,"select * from notice_board");
                            while($row=mysqli_fetch_array($sql)){


                          
                            
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <article class="media">

                                        <div class="media-body">
                                            <div class="content">
                                                <p class="h5"><?php echo $row['title'] ?><small
                                                        class="float-right text-muted">Published:<?php echo $row['publishedDate'] ?></small></p>
                                                <p><?php echo $row['title'] ?></p>
                                            </div>
                                            <nav class="d-flex text-muted">
                                                <a href="#" class="icon mr-3"><i class="fe fe-edit"></i></a>
                                                <a href="#" class="icon mr-3"><i class="fe fe-trash"></i></a>

                                                <a href="" class="text-muted ml-auto">Expiry:<?php echo $row['expiryDate'] ?></a>
                                            </nav>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                   
                    <div class="tab-pane" id="Student-add">
                        <form class="form-sample" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Add Notice</h3>
                                            <div class="card-options ">
                                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                        class="fe fe-chevron-up"></i></a>
                                   
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Title<span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="title"
                                                        placeholder="Enter Title">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Description <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="description"rows="15" placeholder="Enter Description"></textarea>   
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Expiry Date <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-md-10">
                                                <input type="date" class="form-control" name="expirydate"
                                                        placeholder="Enter Expiry Date">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                        <button type="submit" class="btn btn-primary"
                                                            name="submit">Submit</button>
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

    <!-- Start project main js  and page js -->
    <script src="../assets/js/core.js"></script>
</body>

</html>
