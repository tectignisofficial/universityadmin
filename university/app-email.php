<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Ericsson :: App Email</title>

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
                        <h1 class="page-title">Inbox</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">App</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inbox</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" id="Primary-tab" data-toggle="tab" href="#Primary">Primary</a></li>
                        <li class="nav-item"><a class="nav-link" id="Social-tab" data-toggle="tab" href="#Social">Social</a></li>
                        <li class="nav-item"><a class="nav-link" id="Updates-tab" data-toggle="tab" href="#Updates">Updates</a></li>
                        <li class="nav-item"><a href="app-compose.html" class="btn btn-primary" title="">Compose</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Primary">
                        <div class="accordion" id="accordionExample">
                            <div class="card inbox unread">
                                <div class="card-header" id="headingOne">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Vincent Porter</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
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
                                        <div class="mail-cnt">
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
                            <div class="card inbox">
                                <div class="card-header" id="mailheading2">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist2" aria-expanded="true" aria-controls="maillist2">Merri Diamond</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist2" class="collapse" aria-labelledby="mailheading2" data-parent="#accordionExample">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar3.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
                                            <p>Thank youm,<br><strong>Wendy Abbott</strong></p>
                                            <hr>
                                            <strong>Click here to</strong>
                                            <a href="app-compose.html">Reply</a> or
                                            <a href="app-compose.html">Forward</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card inbox unread">
                                <div class="card-header" id="mailheading3">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist3" aria-expanded="true" aria-controls="maillist3">John Rosenberg</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist3" class="collapse" aria-labelledby="mailheading3" data-parent="#accordionExample">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar5.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
                                            <p>Thank youm,<br><strong>Wendy Abbott</strong></p>
                                            <hr>
                                            <strong>Click here to</strong>
                                            <a href="app-compose.html">Reply</a> or
                                            <a href="app-compose.html">Forward</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card inbox">
                                <div class="card-header" id="mailheading4">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist4" aria-expanded="true" aria-controls="maillist4">Vinnie Wagstaff</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist4" class="collapse" aria-labelledby="mailheading4" data-parent="#accordionExample">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar2.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
                                            <p>Thank youm,<br><strong>Wendy Abbott</strong></p>
                                            <hr>
                                            <strong>Click here to</strong>
                                            <a href="app-compose.html">Reply</a> or
                                            <a href="app-compose.html">Forward</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card inbox">
                                <div class="card-header" id="mailheading5">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist5" aria-expanded="true" aria-controls="maillist5">Ruben Tillman</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist5" class="collapse" aria-labelledby="mailheading5" data-parent="#accordionExample">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar4.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
                                            <p>Thank youm,<br><strong>Wendy Abbott</strong></p>
                                            <hr>
                                            <strong>Click here to</strong>
                                            <a href="app-compose.html">Reply</a> or
                                            <a href="app-compose.html">Forward</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card inbox">
                                <div class="card-header" id="headingOne6">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist6" aria-expanded="true" aria-controls="maillist6">Vincent Porter</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist6" class="collapse" aria-labelledby="headingOne6" data-parent="#accordionExample">
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
                                        <div class="mail-cnt">
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
                            <div class="card inbox">
                                <div class="card-header" id="mailheading7">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist7" aria-expanded="true" aria-controls="maillist7">Merri Diamond</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist7" class="collapse" aria-labelledby="mailheading7" data-parent="#accordionExample">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar3.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
                                            <p>Thank youm,<br><strong>Wendy Abbott</strong></p>
                                            <hr>
                                            <strong>Click here to</strong>
                                            <a href="app-compose.html">Reply</a> or
                                            <a href="app-compose.html">Forward</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card inbox">
                                <div class="card-header" id="mailheading8">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist8" aria-expanded="true" aria-controls="maillist8">John Rosenberg</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist8" class="collapse" aria-labelledby="mailheading8" data-parent="#accordionExample">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar5.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
                                            <p>Thank youm,<br><strong>Wendy Abbott</strong></p>
                                            <hr>
                                            <strong>Click here to</strong>
                                            <a href="app-compose.html">Reply</a> or
                                            <a href="app-compose.html">Forward</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card inbox">
                                <div class="card-header" id="mailheading9">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist9" aria-expanded="true" aria-controls="maillist9">Vinnie Wagstaff</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist9" class="collapse" aria-labelledby="mailheading9" data-parent="#accordionExample">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar2.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
                                            <p>Thank youm,<br><strong>Wendy Abbott</strong></p>
                                            <hr>
                                            <strong>Click here to</strong>
                                            <a href="app-compose.html">Reply</a> or
                                            <a href="app-compose.html">Forward</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card inbox">
                                <div class="card-header" id="mailheading10">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist10" aria-expanded="true" aria-controls="maillist10">Ruben Tillman</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist10" class="collapse" aria-labelledby="mailheading10" data-parent="#accordionExample">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar4.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
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
                    <div class="tab-pane fade" id="Social">
                        <div class="card">
                            <div class="card-body text-center py-5">
                                <img src="../assets/images/no-email.svg" class="width360 mb-3">
                                <h4>Not Found</h4>
                                <span>Choose a different filter to view test results to you</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Updates">
                        <div class="accordion" id="accordionExampleas">
                            <div class="card mb-1 inbox unread">
                                <div class="card-header" id="headingOneqq">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOneqq" aria-expanded="true" aria-controls="collapseOneqq">Vincent Porter</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="collapseOneqq" class="collapse" aria-labelledby="headingOneqq" data-parent="#accordionExampleas">
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
                                        <div class="mail-cnt">
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
                            <div class="card mb-1 inbox">
                                <div class="card-header" id="mailheading2qq">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist2qq" aria-expanded="true" aria-controls="maillist2qq">Merri Diamond</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist2qq" class="collapse" aria-labelledby="mailheading2qq" data-parent="#accordionExampleas">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar3.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
                                            <p>Thank youm,<br><strong>Wendy Abbott</strong></p>
                                            <hr>
                                            <strong>Click here to</strong>
                                            <a href="app-compose.html">Reply</a> or
                                            <a href="app-compose.html">Forward</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 inbox">
                                <div class="card-header" id="mailheading3qq">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist3qq" aria-expanded="true" aria-controls="maillist3qq">John Rosenberg</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist3qq" class="collapse" aria-labelledby="mailheading3qq" data-parent="#accordionExampleas">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar5.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
                                            <p>Thank youm,<br><strong>Wendy Abbott</strong></p>
                                            <hr>
                                            <strong>Click here to</strong>
                                            <a href="app-compose.html">Reply</a> or
                                            <a href="app-compose.html">Forward</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 inbox">
                                <div class="card-header" id="mailheading4qq">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist4qq" aria-expanded="true" aria-controls="maillist4qq">Vinnie Wagstaff</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist4qq" class="collapse" aria-labelledby="mailheading4qq" data-parent="#accordionExampleas">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar2.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
                                            <p>Thank youm,<br><strong>Wendy Abbott</strong></p>
                                            <hr>
                                            <strong>Click here to</strong>
                                            <a href="app-compose.html">Reply</a> or
                                            <a href="app-compose.html">Forward</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 inbox">
                                <div class="card-header" id="mailheading5qq">
                                    <label class="custom-control custom-checkbox custom-control-inline mr-0">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star xs-hide"><i class="fa fa-star-o"></i></a>
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#maillist5qq" aria-expanded="true" aria-controls="maillist5qq">Ruben Tillman</button>
                                    </h5>
                                    <span class="text_ellipsis xs-hide">There are many variations of passages of Lorem Ipsum available</span>
                                    <div class="card-options">
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-reply"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-archive"></i></a>
                                        <a class="text-muted" href="javascript:void(0)" class="xs-hide"><i class="fa fa-clock-o"></i></a>
                                        <a class="text-muted" href="javascript:void(0)"><i class="fa fa-trash"></i></a>                                        
                                        <a class="text-muted" href="app-emailveiw.html"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>                            
                                <div id="maillist5qq" class="collapse" aria-labelledby="mailheading5qq" data-parent="#accordionExampleas">
                                    <div class="card-body detail">
                                        <div class="detail-header">
                                            <div class="media">
                                                <div class="float-left">
                                                    <div class="mr-3"><img src="../assets/images/xs/avatar4.jpg" alt=""></div>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0"><strong class="text-muted mr-1">From:</strong><a href="javascript:void(0);">info@gmail.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                                    <p class="mb-0"><strong class="text-muted mr-1">To:</strong>Me <small class="float-right"><i class="fe fe-paperclip mr-1"></i>(2 files, 89.2 KB)</small></p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mail-cnt">
                                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                            
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
