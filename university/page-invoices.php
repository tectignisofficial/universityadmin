<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Ericsson :: Page Invoices</title>

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
                        <h1 class="page-title">Invoices</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Invoices</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex justify-content-between">
                                    <ul class="nav nav-pills b-none">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Invoice-list">Invoice List</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Invoice-detail">Invoice Detail</a></li>
                                    </ul>
                                    <div class="d-flex align-items-center sort_stat">
                                        <div class="d-flex">
                                            <span class="bh_income">2,5,1,8,3,6,7,5,3,6,7,5</span>
                                            <div class="ml-2">
                                                <p class="mb-0 font-11">MY INCOME</p>
                                                <h5 class="font-16 mb-0">$5,510</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex ml-3">
                                            <span class="bh_traffic">5,8,9,10,5,2,5,8,9,10</span> 
                                            <div class="ml-2">
                                                <p class="mb-0 font-11">SITE TRAFFIC</p>
                                                <h5 class="font-16 mb-0">53% Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mt-2">
                                    <input type="text" class="form-control search" placeholder="Search...">
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="Invoice-list" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table card-table table-vcenter text-nowrap table_custom">
                                        <thead>
                                            <tr class="">
                                                <th>No.</th>
                                                <th>Invoice Subject</th>
                                                <th>Client</th>
                                                <th>VAT No.</th>
                                                <th>Created</th>
                                                <th>Status</th>
                                                <th>Price</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td><span class="text-muted">001401</span></td>
                                                <td><a href="page-invoices.html" class="text-inherit">Design Works</a></td>
                                                <td>Carlson Limited</td>
                                                <td>87956621</td>
                                                <td>15 Dec 2017</td>
                                                <td><span class="status-icon bg-success"></span> Paid</td>
                                                <td>$887</td>
                                                <td class="text-right"><a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a></td>
                                                <td><a class="icon" href="javascript:void(0)"><i class="fe fe-edit"></i></a></td>
                                            </tr>
                                            <tr class="">
                                                <td><span class="text-muted">001402</span></td>
                                                <td><a href="page-invoices.html" class="text-inherit">UX Wireframes</a></td>
                                                <td>Adobe</td>
                                                <td>87956421</td>
                                                <td>12 Apr 2017</td>
                                                <td><span class="status-icon bg-warning"></span> Pending</td>
                                                <td>$1200</td>
                                                <td class="text-right"><a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a></td>
                                                <td><a class="icon" href="javascript:void(0)"><i class="fe fe-edit"></i></a></td>
                                            </tr>
                                            <tr class="">
                                                <td><span class="text-muted">001403</span></td>
                                                <td><a href="page-invoices.html" class="text-inherit">New Dashboard</a></td>
                                                <td>Bluewolf</td>
                                                <td>87952621</td>
                                                <td>23 Oct 2017</td>
                                                <td><span class="status-icon bg-warning"></span> Pending</td>
                                                <td>$534</td>
                                                <td class="text-right"><a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a></td>
                                                <td><a class="icon" href="javascript:void(0)"><i class="fe fe-edit"></i></a></td>
                                            </tr>
                                            <tr class="">
                                                <td><span class="text-muted">001404</span></td>
                                                <td><a href="page-invoices.html" class="text-inherit">Landing Page</a></td>
                                                <td>Salesforce</td>
                                                <td>87953421</td>
                                                <td>2 Sep 2017</td>
                                                <td><span class="status-icon bg-secondary"></span> Due in 2 Weeks</td>
                                                <td>$1500</td>
                                                <td class="text-right"><a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a></td>
                                                <td><a class="icon" href="javascript:void(0)"><i class="fe fe-edit"></i></a></td>
                                            </tr>
                                            <tr class="">
                                                <td><span class="text-muted">001405</span></td>
                                                <td><a href="page-invoices.html" class="text-inherit">Marketing Templates</a></td>
                                                <td>Printic</td>
                                                <td>87956621</td>
                                                <td>29 Jan 2018</td>
                                                <td><span class="status-icon bg-danger"></span> Paid Today</td>
                                                <td>$648</td>
                                                <td class="text-right"><a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a></td>
                                                <td><a class="icon" href="javascript:void(0)"><i class="fe fe-edit"></i></a></td>
                                            </tr>
                                            <tr class="" >
                                                <td><span class="text-muted">001406</span></td>
                                                <td><a href="page-invoices.html" class="text-inherit">Sales Presentation</a></td>
                                                <td>Tabdaq</td>
                                                <td>87956621</td>
                                                <td>4 Feb 2018</td>
                                                <td><span class="status-icon bg-secondary"></span> Due in 3 Weeks</td>
                                                <td>$300</td>
                                                <td class="text-right"><a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a></td>
                                                <td><a class="icon" href="javascript:void(0)"><i class="fe fe-edit"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>  
                            </div>
                            <div class="tab-pane fade" id="Invoice-detail" role="tabpanel">
                                <div class="row clearfix">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">#AB0017</h3>
                                                <div class="card-options">
                                                    <button type="button" class="btn btn-primary"><i class="si si-printer"></i> Print Invoice</button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row my-8">
                                                    <div class="col-6">
                                                        <p class="h3">Company</p>
                                                        <address>
                                                        Street Address<br>
                                                        State, City<br>
                                                        Region, Postal Code<br>
                                                        ltd@example.com
                                                        </address>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <p class="h3">Client</p>
                                                        <address>
                                                        Street Address<br>
                                                        State, City<br>
                                                        Region, Postal Code<br>
                                                        ctr@example.com
                                                        </address>
                                                    </div>
                                                </div>
                                                <div class="table-responsive push">
                                                    <table class="table table-bordered table-hover">
                                                        <tr>
                                                            <th class="text-center width35"></th>
                                                            <th>Product</th>
                                                            <th class="text-center" style="width: 1%">Qnt</th>
                                                            <th class="text-right" style="width: 1%">Unit</th>
                                                            <th class="text-right" style="width: 1%">Amount</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td>
                                                                <p class="font600 mb-1">Logo Creation</p>
                                                                <div class="text-muted">Logo and business cards design</div>
                                                            </td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-right">$1.800,00</td>
                                                            <td class="text-right">$1.800,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td>
                                                                <p class="font600 mb-1">Online Store Design &amp; Development</p>
                                                                <div class="text-muted">Design/Development for all popular modern browsers</div>
                                                            </td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-right">$20.000,00</td>
                                                            <td class="text-right">$20.000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">3</td>
                                                            <td>
                                                                <p class="font600 mb-1">App Design</p>
                                                                <div class="text-muted">Promotional mobile application</div>
                                                            </td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-right">$3.200,00</td>
                                                            <td class="text-right">$3.200,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" class="font600 text-right">Subtotal</td>
                                                            <td class="text-right">$25.000,00</td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td colspan="4" class="font600 text-right">Vat Rate</td>
                                                            <td class="text-right">20%</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" class="font600 text-right">Vat Due</td>
                                                            <td class="text-right">$5.000,00</td>
                                                        </tr>
                                                        <tr class="bg-green text-light">
                                                            <td colspan="4" class="font700 text-right">Total Due</td>
                                                            <td class="font700 text-right">$30.000,00</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
                                            </div>
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

<!-- Start project main js  and page js -->
<script src="../assets/js/core.js"></script>
</body>
</html>
