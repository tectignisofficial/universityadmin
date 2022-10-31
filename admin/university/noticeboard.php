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
if(isset($_GET['delid'])){
    $id=$_GET['delid'];
    $sql=mysqli_query($conn,"DELETE FROM `notice_board` WHERE id='$id'");
  
    if($sql)
              {
              header("location:noticeboard.php");
              }
              else{
              echo"<script> alert('Not Deleted');</script>";    
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
    <style>
        .text {
            display: block;
            width: 600px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>
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
                            $count1=mysqli_num_rows($sql);
                            if($count1>0){
                                while($row=mysqli_fetch_array($sql)){
                            ?>

                            <div class="card viewnoticeclick">
                                <div class="card-body">
                                    <article class="media">

                                        <div class="media-body">
                                            <div class="content">
                                                <p class="h5" style="cursor:pointer;"><?php echo $row['title'] ?><small
                                                        class="float-right text-muted">Published: <?php echo $row['publishedDate'] ?></small>
                                                </p>
                                                <p class="text"><?php echo $row['description'] ?></p>
                                            </div>
                                            <nav class="d-flex text-muted">
                                                <a class="icon mr-3" href="notice_update.php?sid=<?php echo $row['id'] ?>"><i class="fe fe-edit"></i></a>
                                                <a href="noticeboard.php?delid=<?php echo $row['id'] ?>" class="icon mr-3"><i class="fe fe-trash"></i></a>

                                                <a href=""
                                                    class="text-muted ml-auto">Expiry: <?php echo $row['expiryDate'] ?></a>
                                            </nav>
                                        </div>
                                    </article>
                                </div>
                            </div>

                            <?php }}
                            else{

                                ?>
    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <?php
                            



                            } ?>
                            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Notice Board</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body viewnotice">
                                           <div class="row">
                                            <div class="col-lg-12">
                                                <label for="">Title</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="">Publish Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                           </div>
                                           <div class="row">
                                            <div class="col-lg-12">
                                                <label for="">Expiry Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="">Description</label>
                                                <textarea rows="4" name="message" class="form-control no-resize"></textarea>
                                            </div>
                                           </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                           
                        </div>

                        <div class="tab-pane" id="Student-add">
                            <form class="form-sample" method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Add Notice</h3>
                                                <div class="card-options ">
                                                    <a href="#" class="card-options-collapse"
                                                        data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>

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
                                                        <textarea class="form-control" name="description" rows="15"
                                                            placeholder="Enter Description"></textarea>
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
    <script>
  $(document).ready(function () {
    $('.usereditid').click(function () {
      let dnkk = $(this).data('id');

      $.ajax({
        url: 'action.php',
        type: 'post',
        data: {
          dnkk: dnkk
        },
        success: function (response5) {
          $('.update').html(response5);
          $('#editmodal').modal('show');
        }
      });
    });


  });
</script>   
</body>

</html>