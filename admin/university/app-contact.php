<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Ericsson :: Courses</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
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
                        <h1 class="page-title">Contact</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" id="list-tab" data-toggle="tab" href="#list"><i class="fa fa-list-ul"></i> List</a></li>
                        <li class="nav-item"><a class="nav-link" id="grid-tab" data-toggle="tab" href="#grid"><i class="fa fa-th"></i> Grid</a></li>
                        <li class="nav-item"><a class="nav-link" id="addnew-tab" data-toggle="tab" href="#addnew"><i class="fa fa-plus"></i> Add New</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="list" role="tabpanel">
                        <div class="table-responsive" id="users">
                            <table class="table table-hover table-vcenter text-nowrap table_custom list">
                                <tbody>
                                    <tr class="">
                                        <td class="width35 hidden-xs">
                                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                        </td>
                                        <td class="text-center width40">
                                            <div class="avatar d-block">
                                                <img class="avatar" src="../assets/images/xs/avatar4.jpg" alt="avatar">
                                            </div>
                                        </td>
                                        <td>
                                            <div><a href="javascript:void(0);">John Smith</a></div>
                                            <div class="text-muted">+264-625-2583</div>
                                        </td>
                                        <td class="hidden-xs">
                                            <div class="text-muted">johnsmith@info.com</div>
                                        </td>
                                        <td class="hidden-sm">
                                            <div class="text-muted">455 S. Airport St. Moncks Corner, SC 29461</div>                                                
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                            <a class="btn btn-icon btn-sm text-danger hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="width35 hidden-xs">
                                            <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>
                                        </td>
                                        <td class="text-center width40">
                                            <div class="avatar d-block">
                                                <img class="avatar" src="../assets/images/xs/avatar2.jpg" alt="avatar">
                                            </div>
                                        </td>
                                        <td>
                                            <div><a href="javascript:void(0);">Merri Diamond</a></div>
                                            <div class="text-muted">+264-625-2583</div>
                                        </td>
                                        <td class="hidden-xs">
                                            <div class="text-muted">hermanbeck@info.com</div>
                                        </td>
                                        <td class="hidden-sm">
                                            <div class="text-muted">455 S. Airport St. Moncks Corner, SC 29461</div>                                                
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                            <a class="btn btn-icon btn-sm text-danger hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="hidden-xs">
                                            <a href="javascript:void(0);" class="mail-star love"><i class="fa fa-heart"></i></a>
                                        </td>
                                        <td class="text-center width40">
                                            <div class="avatar d-block">
                                                <img class="avatar" src="../assets/images/xs/avatar3.jpg" alt="avatar">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="from"><a href="javascript:void(0);">Sara Hopkins</a></div>
                                            <div class="text-muted">+264-625-3333</div>
                                        </td>
                                        <td class="hidden-xs">
                                            <div class="text-muted">maryadams@info.com</div>
                                        </td>
                                        <td class="hidden-sm">
                                            <div class="text-muted">19 Ohio St. Snellville, GA 30039</div>                                                
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                            <a class="btn btn-icon btn-sm text-danger hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="hidden-xs">
                                            <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>
                                        </td>
                                        <td class="text-center width40">
                                            <div class="avatar d-block">
                                                <img class="avatar" src="../assets/images/xs/avatar7.jpg" alt="avatar">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="from"><a href="javascript:void(0);">Andrew Patrick</a></div>
                                            <div class="text-muted">+264-625-2586</div>
                                        </td>
                                        <td class="hidden-xs">
                                            <div class="text-muted">mikethimas@info.com</div>
                                        </td>
                                        <td class="hidden-sm">
                                            <div class="text-muted">728 Blackburn St. Andover, MA 01810</div>                                                
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                            <a class="btn btn-icon btn-sm text-danger hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="hidden-xs">
                                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                        </td>
                                        <td class="text-center width40">
                                            <div class="avatar d-block">
                                                <img class="avatar" src="../assets/images/xs/avatar5.jpg" alt="avatar">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="from"><a href="javascript:void(0);">Claire Peters</a></div>
                                            <div class="text-muted">+264-625-3333</div>
                                        </td>
                                        <td class="hidden-xs">
                                            <div class="text-muted">clairepeters@info.com</div>
                                        </td>
                                        <td class="hidden-sm">
                                            <div class="text-muted">19 Ohio St. Snellville, GA 30039</div>                                                
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                            <a class="btn btn-icon btn-sm text-danger hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="" >
                                        <td class="hidden-xs">
                                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                        </td>
                                        <td class="text-center width40">
                                            <div class="avatar d-block">
                                                <img class="avatar" src="../assets/images/xs/avatar6.jpg" alt="avatar">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="from"><a href="javascript:void(0);">Allen Collins</a></div>
                                            <div class="text-muted">+264-625-4526</div>
                                        </td>
                                        <td class="hidden-xs">
                                            <div class="text-muted">kenpatrick@info.com</div>
                                        </td>
                                        <td class="hidden-sm">
                                            <div class="text-muted">728 Blackburn St. Andover, MA 01810</div>                                                
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                            <a class="btn btn-icon btn-sm text-danger hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="width35 hidden-xs">
                                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                        </td>
                                        <td class="text-center width40">
                                            <div class="avatar d-block">
                                                <img class="avatar" src="../assets/images/xs/avatar4.jpg" alt="avatar">
                                            </div>
                                        </td>
                                        <td>
                                            <div><a href="javascript:void(0);">Erin Gonzales</a></div>
                                            <div class="text-muted">+264-625-1593</div>
                                        </td>
                                        <td class="hidden-xs">
                                            <div class="text-muted">eringonzales@info.com</div>
                                        </td>
                                        <td class="hidden-sm">
                                            <div class="text-muted">455 S. Airport St. Moncks Corner, SC 29461</div>                                                
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                            <a class="btn btn-icon btn-sm text-danger hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="hidden-xs">
                                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                        </td>
                                        <td class="text-center width40">
                                            <div class="avatar d-block">
                                                <img class="avatar" src="../assets/images/xs/avatar5.jpg" alt="avatar">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="from"><a href="javascript:void(0);">Harry McCall</a></div>
                                            <div class="text-muted">+264-625-2468</div>
                                        </td>
                                        <td class="hidden-xs">
                                            <div class="text-muted">susiewillis@info.com</div>
                                        </td>
                                        <td class="hidden-sm">
                                            <div class="text-muted">19 Ohio St. Snellville, GA 30039</div>                                                
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                            <a class="btn btn-icon btn-sm" href="javascript:void(0)" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                            <a class="btn btn-icon btn-sm text-danger hidden-xs js-sweetalert" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="grid" role="tabpanel">
                        <div class="row row-deck">
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="card " >
                                    <div class="card-body">
                                        <div class="card-status bg-blue"></div>
                                        <div class="mb-3"> <img src="../assets/images/sm/avatar1.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Paul Schmidt</h5>
                                            <p class="text-muted">Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="mb-3"> <img src="../assets/images/sm/avatar2.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Andrew Patrick</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="mb-3"> <img src="../assets/images/sm/avatar3.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Mary Schneider</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="card " >
                                    <div class="card-body">
                                        <div class="card-status bg-green"></div>
                                        <div class="mb-3"> <img src="../assets/images/sm/avatar4.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Sean Black</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="mb-3"> <img src="../assets/images/sm/avatar5.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">David Wallace</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="card-status bg-pink"></div>
                                        <div class="mb-3"> <img src="../assets/images/sm/avatar6.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Andrew Patrick</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="mb-3"> <img src="../assets/images/sm/avatar2.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Michelle Green</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="mb-3"> <img src="../assets/images/sm/avatar4.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Mary Schneider</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                            <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="addnew" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" rows="4">Enter your Address</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="file" class="dropify">
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="submit" class="btn btn-default">Cancel</button>
                                    </div>
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

<!-- Start Plugin Js -->
<script src="../assets/bundles/sweetalert.bundle.js"></script>
<script src="../assets/plugins/dropify/js/dropify.min.js"></script>

<!-- Start project main js  and page js -->
<script src="../assets/js/core.js"></script>
<script src="assets/js/page/dialogs.js"></script>
<script>
$(function() {
    "use strict";
    
    $('.dropify').dropify();

    var drEvent = $('#dropify-event').dropify();
    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    $('.dropify-fr').dropify({
        messages: {
            default: 'Glissez-déposez un fichier ici ou cliquez',
            replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'Désolé, le fichier trop volumineux'
        }
    });
});
</script>
</body>
</html>
