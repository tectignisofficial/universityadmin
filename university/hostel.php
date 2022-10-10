<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Ericsson :: Hostel</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />

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
                        <h1 class="page-title">Hostel</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hostel</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" id="Hostel-tab" data-toggle="tab" href="#Hostel-all">Room List</a></li>
                        <li class="nav-item"><a class="nav-link" id="Hostel-tab" data-toggle="tab" href="#Hostel-add">Add Room</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Hostel-all">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Block</th>
                                            <th>Room No</th>
                                            <th>Type</th>
                                            <th>No of Bed</th>
                                            <th>Availability</th>
                                            <th>Cost Per Bed</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A</td>
                                            <td>201</td>
                                            <td>Medium</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>A</td>
                                            <td>305</td>
                                            <td>Big</td>
                                            <td>10</td>
                                            <td>3</td>
                                            <td>$12</td>
                                        </tr>
                                        <tr>
                                            <td>B</td>
                                            <td>404</td>
                                            <td>Medium</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>A</td>
                                            <td>201</td>
                                            <td>Medium</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>A</td>
                                            <td>201</td>
                                            <td>Medium</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>C</td>
                                            <td>701</td>
                                            <td>Small</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>$35</td>
                                        </tr>
                                        <tr>
                                            <td>A</td>
                                            <td>804</td>
                                            <td>Medium</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>A</td>
                                            <td>201</td>
                                            <td>Medium</td>
                                            <td>4</td>
                                            <td>3</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>A</td>
                                            <td>603</td>
                                            <td>Small</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>A</td>
                                            <td>402</td>
                                            <td>Small</td>
                                            <td>4</td>
                                            <td>4</td>
                                            <td>$20</td>
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
                    <div class="tab-pane" id="Hostel-add">
                        <div class="card">
                            <form class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Book Name <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Block No. <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">No of Bed <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Cost Per Bed <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Room Type <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control show-tick">
                                            <option>Select</option>
                                            <option>Dorm Rooms</option>
                                            <option>Private Rooms</option>
                                            <option>Capsules</option>
                                            <option>Booking Hacks</option>
                                            <option>Pod-styled dorms</option>
                                            <option>Female Dorm</option>
                                            <option>Female Dorm</option>
                                        </select>
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

<!-- Start project main js  and page js -->
<script src="../assets/js/core.js"></script>
</body>
</html>
