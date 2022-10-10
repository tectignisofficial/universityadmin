<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Ericsson :: Transport</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/plugins/dropify/css/dropify.min.css">

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
                        <h1 class="page-title">Transport</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transport</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" id="Transport-tab" data-toggle="tab" href="#Transport-all">Transport List</a></li>
                        <li class="nav-item"><a class="nav-link" id="Transport-tab" data-toggle="tab" href="#Transport-add">Add Transport</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Transport-all">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Driver Name</th>
                                            <th>Mobile</th>
                                            <th>License No</th>
                                            <th>Vehicle No</th>
                                            <th>Route Name</th>
                                            <th>Map</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="w60"><img class="avatar" src="../assets/images/xs/avatar1.jpg" alt=""></td>
                                            <td>Alan Johnson</td>
                                            <td>404-447-6013</td>
                                            <td>GHT-25-5845</td>
                                            <td>UXS 111</td>
                                            <td>Botanic to Brooklyn</td>
                                            <td><button type="button" class="btn btn-icon btn-sm" title="Map"><i class="fa fa-map"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="avatar" src="../assets/images/xs/avatar2.jpg" alt=""></td>
                                            <td>Alan Johnson</td>
                                            <td>404-447-2356</td>
                                            <td>GHT-25-4523</td>
                                            <td>UXS 494</td>
                                            <td>Botanic to Brooklyn</td>
                                            <td><button type="button" class="btn btn-icon btn-sm" title="Map"><i class="fa fa-map"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="avatar" src="../assets/images/xs/avatar3.jpg" alt=""></td>
                                            <td>Ken Smith</td>
                                            <td>404-447-8563</td>
                                            <td>GHT-25-1599</td>
                                            <td>UXS 494</td>
                                            <td>Botanic to Brooklyn</td>
                                            <td><button type="button" class="btn btn-icon btn-sm" title="Map"><i class="fa fa-map"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="avatar" src="../assets/images/xs/avatar4.jpg" alt=""></td>
                                            <td>Corrine Johnson</td>
                                            <td>404-447-7532</td>
                                            <td>GHT-25-5845</td>
                                            <td>UXS 581</td>
                                            <td>Botanic to Brooklyn</td>
                                            <td><button type="button" class="btn btn-icon btn-sm" title="Map"><i class="fa fa-map"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="avatar" src="../assets/images/xs/avatar5.jpg" alt=""></td>
                                            <td>Alan Johnson</td>
                                            <td>404-447-7856</td>
                                            <td>GHT-25-5263</td>
                                            <td>UXS 494</td>
                                            <td>Botanic to Brooklyn</td>
                                            <td><button type="button" class="btn btn-icon btn-sm" title="Map"><i class="fa fa-map"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="avatar" src="../assets/images/xs/avatar6.jpg" alt=""></td>
                                            <td>charGladys Smithlie</td>
                                            <td>404-447-9512</td>
                                            <td>GHT-25-7533</td>
                                            <td>UXS 494</td>
                                            <td>Botanic to Brooklyn</td>
                                            <td><button type="button" class="btn btn-icon btn-sm" title="Map"><i class="fa fa-map"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="avatar" src="../assets/images/xs/avatar1.jpg" alt=""></td>
                                            <td>Alice Smith</td>
                                            <td>404-447-6013</td>
                                            <td>GHT-25-7485</td>
                                            <td>UXS 324</td>
                                            <td>Botanic to Brooklyn</td>
                                            <td><button type="button" class="btn btn-icon btn-sm" title="Map"><i class="fa fa-map"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="avatar" src="../assets/images/xs/avatar2.jpg" alt=""></td>
                                            <td>Alan Johnson</td>
                                            <td>404-447-4563</td>
                                            <td>GHT-25-3577</td>
                                            <td>UXS 494</td>
                                            <td>Botanic to Brooklyn</td>
                                            <td><button type="button" class="btn btn-icon btn-sm" title="Map"><i class="fa fa-map"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="avatar" src="../assets/images/xs/avatar3.jpg" alt=""></td>
                                            <td>Gerald Smith</td>
                                            <td>404-447-9852</td>
                                            <td>GHT-25-4566</td>
                                            <td>UXS 494</td>
                                            <td>Botanic to Brooklyn</td>
                                            <td><button type="button" class="btn btn-icon btn-sm" title="Map"><i class="fa fa-map"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td><img class="avatar" src="../assets/images/xs/avatar4.jpg" alt=""></td>
                                            <td>Danny Johnson</td>
                                            <td>404-447-4758</td>
                                            <td>GHT-25-2588</td>
                                            <td>UXS 4578</td>
                                            <td>Botanic to Brooklyn</td>
                                            <td><button type="button" class="btn btn-icon btn-sm" title="Map"><i class="fa fa-map"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="Transport-add">
                        <div class="card">
                            <form class="card-body form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Route Name <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Vehicle Number <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Driver Name <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">License Number <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Phone Number <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Avatar <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="file" class="dropify">
                                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Description <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-7">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
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
</body>
</html>
