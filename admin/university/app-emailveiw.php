<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Ericsson :: App Emailveiw</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
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
                        <h1 class="page-title">Email Veiw</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item"><a href="app-email.html">Inbox</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Email Veiw</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row row-deck">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><a href="app-email.html"><i class="fa fa-arrow-left"></i></a> Back</h3>
                                <div class="card-options">
                                    <a href="#"><i class="fe fe-star"></i></a>
                                    <a href="#"><i class="fe fe-inbox"></i></a>
                                    <a href="#"><i class="fe fe-trash"></i></a>
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body detail">
                                <div class="detail-header">
                                    <div class="media">
                                        <div class="float-left">
                                            <div class="mr-3"><img src="../assets/images/xs/avatar1.jpg" alt=""></div>
                                        </div>
                                        <div class="media-body">
                                            <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                            <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="mail-cnt mt-3">
                                    <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <ul>
                                        <li>standard dummy text ever since the 1500s, when an unknown printer</li>
                                        <li>Lorem Ipsum has been the industry's standard dummy</li>
                                    </ul>
                                    <p>printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrnturies, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <br>
                                    <div class="file_folder">
                                        <a href="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="file-name">
                                                <p class="mb-0 text-muted">Report2017.xls</p>
                                                <small>Size: 68KB</small>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fa fa-file-word-o text-primary"></i>
                                            </div>
                                            <div class="file-name">
                                                <p class="mb-0 text-muted">Report2017.doc</p>
                                                <small>Size: 68KB</small>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fa fa-file-pdf-o text-danger"></i>
                                            </div>
                                            <div class="file-name">
                                                <p class="mb-0 text-muted">Report2017.pdf</p>
                                                <small>Size: 68KB</small>
                                            </div>
                                        </a>
                                    </div>

                                    <p>Thank youm,<br><strong>Wendy Abbott</strong></p>
                                    <hr>
                                    <strong>Click here to</strong>
                                    <a href="app-compose.html">Reply</a> or
                                    <a href="app-compose.html">Forward</a>
                                </div>
                            </div>
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

<!-- Start project main js  and page js -->
<script src="../assets/js/core.js"></script>
</body>
</html>
