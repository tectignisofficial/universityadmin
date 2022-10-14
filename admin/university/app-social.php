<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Ericsson :: App Social</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/plugins/charts-c3/c3.min.css"/>

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
                        <h1 class="page-title">Social</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Social</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" id="Social-tab" data-toggle="tab" href="#Social">Social</a></li>
                        <li class="nav-item"><a class="nav-link" id="Campaigns-tab" data-toggle="tab" href="#Campaigns">Campaigns</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="Social" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="card w_social_state2">
                                            <div class="card-header">
                                                <h2 class="card-title">Instagram</h2>
                                                <div class="card-options">
                                                    <label class="custom-switch m-0">
                                                        <input type="checkbox" value="1" class="custom-switch-input">
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="icon instagram"><i class="fa fa-instagram fa-2x"></i></div>
                                                <div class="content">
                                                    <div class="text">Followers</div>
                                                    <h4 class="mb-0">231</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="card w_social_state2">
                                            <div class="card-header">
                                                <h2 class="card-title">Twitter</h2>
                                                <div class="card-options">
                                                    <label class="custom-switch m-0">
                                                        <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="icon twitter"><i class="fa fa-twitter fa-2x"></i></div>
                                                <div class="content">
                                                    <div class="text">Followers</div>
                                                    <h5 class="mb-0">31</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="card w_social_state2">
                                            <div class="card-header">
                                                <h2 class="card-title">Facebook</h2>
                                                <div class="card-options">
                                                    <label class="custom-switch m-0">
                                                        <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="icon facebook"><i class="fa fa-facebook fa-2x"></i></div>
                                                <div class="content">
                                                    <div class="text">Like</div>
                                                    <h5 class="mb-0">123</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="card w_social_state2">
                                            <div class="card-header">
                                                <h2 class="card-title">Linkedin</h2>
                                                <div class="card-options">
                                                    <label class="custom-switch m-0">
                                                        <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="icon linkedin"><i class="fa fa-linkedin fa-2x"></i></div>
                                                <div class="content">
                                                    <div class="text">Followers</div>
                                                    <h5 class="mb-0">2510</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="card-title">Metrics Statistics</h2>
                                        <div class="card-options">
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
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
                                    <div class="card-body">
                                        <div>Real Time Campaign</div>
                                        <p class="text-muted">The global and country campaign stats show how popular.</p>
                                        <div id="flotChart" style="height: 310px;" ></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="card-title">Facebook Engaged Users</h2>
                                        <div class="card-options">
                                            <label class="custom-switch m-0">
                                                <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-md-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-1">Feb 21, 2019 to Feb 28 2019</h6>
                                                <span class="text-muted">Note Enim omittam, ex quo dictas complectitur</span>
                                            </div>
                                            <div>
                                                <div class="selectgroup w250">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="low" class="selectgroup-input" checked="">
                                                        <span class="selectgroup-button">7 Day</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="medium" class="selectgroup-input">
                                                        <span class="selectgroup-button">15 Day</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="high" class="selectgroup-input">
                                                        <span class="selectgroup-button">30 Day</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12 mt-4">
                                                <div id="apex-chart-Facebook-1"></div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 mt-4">
                                                <div id="apex-chart-Facebook-2"></div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 mt-4">
                                                <div id="apex-chart-Facebook-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="card-title">YouTube Subscribers</h2>
                                        <div class="card-options">                                
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
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
                                    <div class="card-body">
                                        <div id="apex-YouTube-Subscribers"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="card-title">Linkedin Key Metrics</h2>
                                    </div>
                                    <div class="card-body">
                                        <div id="apex-linkedin-metrics"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Campaigns" role="tabpanel">
                        <div class="row clearfix row-deck">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Email Campaigns</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">Defecting Buyers Email 1</a>
                                                            <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                                                        </td>
                                                        <td class="text-right">
                                                            <h6 class="font-14 mb-0">1.3MB</h6>
                                                            <span class="text-muted">Emails deliverd</span>
                                                        </td>
                                                        <td class="w350">
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar bg-azura" style="width: 45%">
                                                                </div>
                                                                <div class="progress-bar bg-cyan" style="width: 20%">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex bd-highlight mt-2">
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-blue"></i> 37.2% Clicks</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-info"></i> 12.2% Opens</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square"></i> Deliveries</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">Defecting Buyers Email 2</a>
                                                            <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                                                        </td>
                                                        <td class="text-right">
                                                            <h6 class="font-14 mb-0">11.3MB</h6>
                                                            <span class="text-muted">Emails deliverd</span>
                                                        </td>
                                                        <td class="w350">
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar bg-azura" style="width: 45%">
                                                                </div>
                                                                <div class="progress-bar bg-cyan" style="width: 20%">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex bd-highlight mt-2">
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-blue"></i> 37.2% Clicks</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-info"></i> 12.2% Opens</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square"></i> Deliveries</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">Defecting Buyers Email 3</a>
                                                            <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                                                        </td>
                                                        <td class="text-right">
                                                            <h6 class="font-14 mb-0">8.3MB</h6>
                                                            <span class="text-muted">Emails deliverd</span>
                                                        </td>
                                                        <td class="w350">
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar bg-azura" style="width: 63%">
                                                                </div>
                                                                <div class="progress-bar bg-cyan" style="width: 24%">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex bd-highlight mt-2">
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-blue"></i> 63.2% Clicks</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-info"></i> 24.2% Opens</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square"></i> Deliveries</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">Defecting Buyers Email 4</a>
                                                            <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                                                        </td>
                                                        <td class="text-right">
                                                            <h6 class="font-14 mb-0">12.1MB</h6>
                                                            <span class="text-muted">Emails deliverd</span>
                                                        </td>
                                                        <td class="w350">
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar bg-azura" style="width: 71%">
                                                                </div>
                                                                <div class="progress-bar bg-cyan" style="width: 8%">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex bd-highlight mt-2">
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-blue"></i> 71.2% Clicks</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-info"></i> 8.2% Opens</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square"></i> Deliveries</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">Defecting Buyers Email 5</a>
                                                            <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                                                        </td>
                                                        <td class="text-right">
                                                            <h6 class="font-14 mb-0">7.6MB</h6>
                                                            <span class="text-muted">Emails deliverd</span>
                                                        </td>
                                                        <td class="w350">
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar bg-azura" style="width: 23%">
                                                                </div>
                                                                <div class="progress-bar bg-cyan" style="width: 41%">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex bd-highlight mt-2">
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-blue"></i> 23.2% Clicks</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-info"></i> 41.2% Opens</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square"></i> Deliveries</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">Facebook Campaigns list 2019</a>
                                                            <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                                                        </td>
                                                        <td class="text-right">
                                                            <h6 class="font-14 mb-0">1.3MB</h6>
                                                            <span class="text-muted">Emails deliverd</span>
                                                        </td>
                                                        <td class="w350">
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar bg-azura" style="width: 45%">
                                                                </div>
                                                                <div class="progress-bar bg-cyan" style="width: 20%">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex bd-highlight mt-2">
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-blue"></i> 37.2% Clicks</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-info"></i> 12.2% Opens</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square"></i> Deliveries</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">Twitter Campaigns at Newyork</a>
                                                            <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                                                        </td>
                                                        <td class="text-right">
                                                            <h6 class="font-14 mb-0">11.3MB</h6>
                                                            <span class="text-muted">Emails deliverd</span>
                                                        </td>
                                                        <td class="w350">
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar bg-azura" style="width: 45%">
                                                                </div>
                                                                <div class="progress-bar bg-cyan" style="width: 20%">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex bd-highlight mt-2">
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-blue"></i> 37.2% Clicks</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square text-info"></i> 12.2% Opens</small>
                                                                </div>
                                                                <div class="flex-fill bd-highlight">
                                                                    <small><i class="fa fa-check-square"></i> Deliveries</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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

<!-- Start all plugin js -->
<script src="../assets/bundles/flot.bundle.js"></script>
<script src="../assets/plugins/flot-charts/flot.time.js"></script>
<script src="../assets/plugins/flot-charts/flot.selection.js"></script>
<script src="../assets/bundles/apexcharts.bundle.js"></script>

<!-- Start project main js  and page js -->
<script src="../assets/js/core.js"></script>
<script src="assets/js/social.js"></script>
</body>
</html>
