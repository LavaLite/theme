<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tasks - Lavalite</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png" />
        <link rel="canonical" href="">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="packages/font-awesome/css/all.min.css">
        <link rel="stylesheet" href="packages/line-awesome/css/line-awesome.min.css">
        <link rel="stylesheet" href="packages/iconkit/css/iconkit.min.css">
        <link rel="stylesheet" href="packages/select2/css/select2.min.css">
        <link rel="stylesheet" href="packages/datetimepicker/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="packages/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap.min.css" integrity="sha512-Mji2X7D1EhUZpESSu1KN/b79CaC0Z1S+5AS9DtEkUXaAbZ49cFk8i29nypoOKn+X9RWmSMwCn3cJvn5v7v1fZw==" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/settings.css">
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/theme.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="app-wrap">
            <div class="app-nav">
                <nav class="navbar nav flex-column">
                    <a class="navbar-brand m-0 p-0" href="dashboard.html">
                        <img src="{{theme_asset('img/logo/logo.svg')}}" class="img-fluid" alt="">
                    </a>
                    <a class="nav-link" href="#" data-toggle="tooltip" data-placement="right" title="Notifications"><i class="las la-bell"></i></a>
                    <a class="nav-link active" href="tasks.html" data-toggle="tooltip" data-placement="right" title="Tasks"><i class="las la-list"></i></a>
                    <a class="nav-link" href="projects.html" data-toggle="tooltip" data-placement="right" title="Projects"><i class="lab la-product-hunt"></i></a>
                    <div class="dropright">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="las la-ellipsis-v"></i></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="las la-suitcase"></i>Portfolios</a>
                            <a class="dropdown-item" href="#"><i class="las la-file-alt"></i>Reporting</a>
                        </div>
                    </div>
                    
                </nav>
                <nav class="navbar nav flex-column user-nav-wrap">
                    <div class="dropdown user-dropdown dropright">
                        <button class="btn dropdown-toggle" type="button" id="user_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">S</button>
                        <div class="dropdown-menu" aria-labelledby="user_dropdown">
                            <a class="dropdown-item user-info" href="#">
                                <span class="user-avatar">S</span>
                                <span class="user-ac-info">
                                    <h4>Shankar Raj</h4>
                                    <p>View Profile</p>
                                </span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown has-child">
                                <a class="dropdown-item has-child collapsed" data-toggle="collapse" href="#userCollapse" role="button" aria-expanded="false" aria-controls="userCollapse"><i class="las la-user-circle"></i>Users</a>
                                <div class="collapse" id="userCollapse">
                                    <div class="dropdown-inner">
                                        <a class="dropdown-item" href="#"><i class="las la-lock-open"></i>Roles & Permissions</a>
                                        <a class="dropdown-item" href="#"><i class="las la-users"></i>Users</a>
                                        <a class="dropdown-item" href="#"><i class="las la-user-tie"></i>Clients</a>
                                    </div>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#"><i class="las la-chalkboard"></i>Activity Log</a>
                            <a class="dropdown-item" href="#"><i class="las la-cog"></i>Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="las la-sign-out-alt"></i>Sign Out</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content-wrap bg-white">
                <div class="app-list-wrap">
                    <!-- <div class="app-list-inner"> -->

                        <!-- <div class="app-list-header d-flex align-items-center justify-content-between">
                            <h3>Reports</h3>
                            <div class="header-search">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="search-btn"><i class="las la-search"></i></span>
                                <button type="button" class="settings" data-toggle="modal" data-target="#searchModal"><i class="las la-ellipsis-v"></i></button>
                            </div>
                            <button type="button" class="btn add-app-btn btn-icon btn-outline" id="add_task_btn"><i class="las la-plus"></i></button>
                        </div> -->


                    <!--     <div class="app-list-header d-flex align-items-center justify-content-between">
            <h3>Pages</h3>
            <div class="header-search open">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="search-btn"><i class="fas fa-search"></i></span>
                <button type="button" class="settings" data-toggle="modal" data-target="#searchModal"><i class="fas fa-cog"></i></button>
            </div>
            <button type="button" class="btn add-app-btn btn-theme app-create" id="app-create"><i class="fas fa-plus"></i></button>
        </div>
                        
                        <div class="app-list-toolbar">
                            <div class="app-list-pagination">
                                <button type="button" class="btn select-all-btn"><i class="fas fa-check"></i></button>
                                <span class="mr-5">1 of 25</span>
                                <a href="#"><i class="las la-angle-left"></i></a>
                                <a href="#"><i class="las la-angle-right"></i></a>
                            </div>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="las la-ellipsis-v"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <div class="dropdown-title">Settings</div>
                                    <a class="dropdown-item" href="#"><i class="las la-inbox"></i>Show archived</a>
                                    <a class="dropdown-item" href="#"><i class="las la-angle-down"></i>Expand all folders</a>
                                    <a class="dropdown-item" href="#"><i class="las la-columns"></i>Layout size & style</a>
                                    <div class="dropdown-item d-flex align-items-center justify-content-between">
                                        <span><i class="las la-fill-drip"></i>Dark sidebar</span>
                                        <div class="custom-control custom-switch m-0 ml-5">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                            <label class="custom-control-label" for="customSwitch1">&nbsp</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-list-wrap-inner">
                            <div class="app-item selected" data-id="task_1">
                                <div class="app-info">
                                    <input type="checkbox" name="tasks_list" id="task_1">
                                    <label class="app-project-name bg-secondary" for="task_1">S</label>
                                    <h3>Single</h3>
                                    <div class="app-metas">
                                        <p>Manage masters single</p>
                                    </div>
                                </div>
                                <div class="app-actions">
                                    <a href="#" class="btn las la-pencil-alt"></a>
                                    <div class="dropdown">
                                        <a href="#" class="btn las la-ellipsis-h dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#appDetailModal" data-toggle="modal" data-target="#appDetailModal"><i class="las la-eye"></i>View</a>
                                            <a class="dropdown-item" href="#"><i class="las la-copy"></i>Copy</a>
                                            <a class="dropdown-item" href="#"><i class="las la-inbox"></i>Archive</a>
                                            <a class="dropdown-item" href="#"><i class="las la-times text-danger"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item" data-id="task_2">
                                <div class="app-info">
                                    <input type="checkbox" name="tasks_list" id="task_2">
                                    <label class="app-project-name bg-secondary" for="task_2">C</label>
                                    <h3>Category Style</h3>
                                    <div class="app-metas">
                                        <p>Manage master category style</p>
                                    </div>
                                </div>
                                <div class="app-actions">
                                    <a href="#" class="btn las la-pencil-alt"></a>
                                    <div class="dropdown">
                                        <a href="#" class="btn las la-ellipsis-h dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#appDetailModal" data-toggle="modal" data-target="#appDetailModal"><i class="las la-eye"></i>View</a>
                                            <a class="dropdown-item" href="#"><i class="las la-copy"></i>Copy</a>
                                            <a class="dropdown-item" href="#"><i class="las la-inbox"></i>Archive</a>
                                            <a class="dropdown-item" href="#"><i class="las la-times text-danger"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item" data-id="task_3">
                                <div class="app-info">
                                    <input type="checkbox" name="tasks_list" id="task_3">
                                    <label class="app-project-name bg-secondary" for="task_3">W</label>
                                    <h3>With Image</h3>
                                    <div class="app-metas">
                                        <p>Manage master with image</p>
                                    </div>
                                </div>
                                <div class="app-actions">
                                    <a href="#" class="btn las la-pencil-alt"></a>
                                    <div class="dropdown">
                                        <a href="#" class="btn las la-ellipsis-h dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#appDetailModal" data-toggle="modal" data-target="#appDetailModal"><i class="las la-eye"></i>View</a>
                                            <a class="dropdown-item" href="#"><i class="las la-copy"></i>Copy</a>
                                            <a class="dropdown-item" href="#"><i class="las la-inbox"></i>Archive</a>
                                            <a class="dropdown-item" href="#"><i class="las la-times text-danger"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                    <div class="app-detail-wrap w-100">
                        <div class="app-entry-form-wrap">
                            <div class="app-sec-title app-sec-title-with-icon app-sec-title-with-action">
                                <i class="las la-chart-bar app-sec-title-icon"></i>
                                <h2>Monthly Recap Reports</h2>
                                <div class="actions">
                                    <button type="button" class="btn btn-with-icon btn-link"><i class="las la-save"></i>Save</button>
                                    <button type="button" class="btn btn-with-icon btn-link"><i class="las la-trash"></i>Delete</button>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">  
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-8 col-md-12">
                                                        <h6 class="mb-15">Sales: 1 Jan, 2020 - 30 Jul, 2020</h6>
                                                        <div id="chartdiv" style="height: 400px;"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12">
                                                        <h6 class="mb-15">Global Completion</h6>
                                                        <div class="row mb-15">
                                                            <div class="col-8">Add Products to Cart</div>
                                                            <div class="col-4 text-right">168/200</div>
                                                            <div class="col-12">
                                                                <div class="progress progress-sm mt-5">
                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-15">
                                                            <div class="col-8">Complete Purchase</div>
                                                            <div class="col-4 text-right">310/400</div>
                                                            <div class="col-12">
                                                                <div class="progress progress-sm mt-5">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-15">
                                                            <div class="col-8">Vist Premium Page</div>
                                                            <div class="col-4 text-right">480/800</div>
                                                            <div class="col-12">
                                                                <div class="progress progress-sm mt-5">
                                                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-8">Send Inquiries</div>
                                                            <div class="col-4 text-right">250/500</div>
                                                            <div class="col-12">
                                                                <div class="progress progress-sm mt-5">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-group mt-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="state">
                                                            <h3 class="text-success">234</h3>
                                                            <p class="card-subtitle text-muted fw-500">New Orders</p>
                                                        </div>
                                                        <div class="icon"><i class="ik ik-shopping-cart"></i></div>
                                                    </div>
                                                    <div class="progress mt-3 mb-1" style="height: 6px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="text-muted f12">
                                                        <span>Progress</span>
                                                        <span class="float-right">83%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="state">
                                                            <h3 class="text-primary">3423</h3>
                                                            <p class="card-subtitle text-muted fw-500">Pending Products</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ik ik-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-3 mb-1" style="height: 6px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 63%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="text-muted f12">
                                                        <span>Progress</span>
                                                        <span class="float-right">63%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="state">
                                                            <h3 class="text-danger">$ 123423</h3>
                                                            <p class="card-subtitle text-muted fw-500">Online Reveneue</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ik ik-codepen"></i>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-3 mb-1" style="height: 6px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 77%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="text-muted f12">
                                                        <span>Progress</span>
                                                        <span class="float-right">77%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="state">
                                                            <h3 class="text-info">$ 355323</h3>
                                                            <p class="card-subtitle text-muted fw-500">Total Profits</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ik ik-trending-up"></i>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-3 mb-1" style="height: 6px;">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 56%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="text-muted f12">
                                                        <span>Progress</span>
                                                        <span class="float-right">56%</span>
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
                <!-- <footer class="app-footer">
                    <p>Workplace © 2020 All Rights Reserved. Proudly built with <a href="#">Lavalite</a> | Powered by <a href="#">RENFOS Technologies Pvt. Ltd.</a></p>
                </footer> -->
            </div>
            
        </div>
        
        <div class="modal fade app-detail-modal" id="appDetailModal" tabindex="-1" aria-labelledby="appDetailModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                    <div class="app-detail-modal-header">
                        <div class="app-detail-header-breadcrumbs">
                            <img class="breadcrumb-logo" src="img/logo.svg" alt="">
                            <a href="#" class="breadcrumb-link"><span>Renfos Space</span></a>
                            <div class="breadcrumb-separator">
                                <svg _ngcontent-lsb-c146="" viewBox="0 0 14 40" xmlns="http://www.w3.org/2000/svg">
                                    <polyline _ngcontent-lsb-c146="" class="cu-stroke" fill="none" points="0 0 13 20 0 40"></polyline>
                                </svg>
                            </div>
                            <a href="#" class="breadcrumb-link"><span>Project Management</span></a>
                            <div class="breadcrumb-separator">
                                <svg _ngcontent-lsb-c146="" viewBox="0 0 14 40" xmlns="http://www.w3.org/2000/svg">
                                    <polyline _ngcontent-lsb-c146="" class="cu-stroke" fill="none" points="0 0 13 20 0 40"></polyline>
                                </svg>
                            </div>
                            <a href="#" class="breadcrumb-link active"><span>Share a prototype</span></a>
                        </div>
                    </div>
                    <div class="app-detail-body modal-body">
                        <div class="app-detail-body-inner">
                            <div class="app-detail-header">
                                <div class="app-detail-header-coumn header-coumn-first" style="width: 55%;">
                                    <h2>Share a prototype</h2>
                                    <div class="app-metas">
                                        <p>ZingMyOrder</p>
                                        <span class="badge badge-status completed">Done</span>
                                    </div>
                                </div>
                                <div class="app-detail-header-coumn header-coumn-info">
                                    <div class="app-coumn-info-wrap">
                                        <div class="app-info-item">
                                            <div class="app-info-key">Created</div>
                                            <div class="app-info-value">Aug 17, 11:25 pm</div>
                                        </div>
                                        <div class="app-info-item">
                                            <div class="app-info-key">Start Date</div>
                                            <div class="app-info-value">25/08/2020</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-detail-content">
                                <div class="app-detail-column app-detail-column-first" style="width: 55%;">
                                    <div class="app-detail-tabs">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-link active" id="nav-notes-tab" data-toggle="tab" href="#nav-notes" role="tab" aria-controls="nav-notes" aria-selected="true">Notes</a>
                                                <a class="nav-link" id="nav-calls-tab" data-toggle="tab" href="#nav-calls" role="tab" aria-controls="nav-calls" aria-selected="false">Calls</a>
                                                <a class="nav-link" id="nav-tasks-tab" data-toggle="tab" href="#nav-tasks" role="tab" aria-controls="nav-tasks" aria-selected="false">Tasks</a>
                                                <a class="nav-link" id="nav-meetings-tab" data-toggle="tab" href="#nav-meetings" role="tab" aria-controls="nav-meetings" aria-selected="false">Meetings</a>
                                                <a class="nav-link" id="nav-viewings-tab" data-toggle="tab" href="#nav-viewings" role="tab" aria-controls="nav-viewings" aria-selected="false">Viewings</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content pt-0" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-notes" role="tabpanel" aria-labelledby="nav-notes-tab">
                                                <form action="">
                                                    <textarea class="form-control" rows="5"></textarea>
                                                    <div class="buttons-wrap mt-15">
                                                        <button type="button" class="btn btn-theme btn-with-icon"><i class="las la-save"></i>Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-detail-column app-activity-wrap" style="width: 45%;">
                                    <div class="activity-boxes-w">
                                        <div class="activity-box-w">
                                            <div class="activity-time">10 Min</div>
                                            <div class="activity-box">
                                                <div class="activity-info">
                                                    <div class="activity-role">John Mayers</div>
                                                    <strong class="activity-title">Opened New Account</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-box-w">
                                            <div class="activity-time">2 Hours</div>
                                            <div class="activity-box">
                                                <div class="activity-info">
                                                    <div class="activity-role">John Mayers</div>
                                                    <strong class="activity-title">Created this task by copiying #ABCD</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-box-w">
                                            <div class="activity-time">5 Hours</div>
                                            <div class="activity-box">
                                                <div class="activity-info">
                                                    <div class="activity-role">John Mayers</div>
                                                    <strong class="activity-title">Posted Comment</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-box-w">
                                            <div class="activity-time">2 Days</div>
                                            <div class="activity-box">
                                                <div class="activity-info">
                                                    <div class="activity-role">John Mayers</div>
                                                    <strong class="activity-title">Opened New Account</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-box-w">
                                            <div class="activity-time">Apr 20, 2020</div>
                                            <div class="activity-box">
                                                <div class="activity-info">
                                                    <div class="activity-role">John Mayers</div>
                                                    <strong class="activity-title">Created this task by copiying #ABCD</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-box-w">
                                            <div class="activity-time">Apr 10, 2020</div>
                                            <div class="activity-box">
                                                <div class="activity-info">
                                                    <div class="activity-role">John Mayers</div>
                                                    <strong class="activity-title">Posted Comment</strong>
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
        </div>

        <div class="modal fade app-search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                    <div class="modal-body">
                        <div class="app-search-header">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                        <div class="app-search-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">All</a>
                                    <a class="nav-link" id="nav-tasks-tab" data-toggle="tab" href="#nav-tasks" role="tab" aria-controls="nav-tasks" aria-selected="false">Tasks</a>
                                    <a class="nav-link" id="nav-docs-tab" data-toggle="tab" href="#nav-docs" role="tab" aria-controls="nav-docs" aria-selected="false">Docs</a>
                                </div>
                            </nav>
                            <div class="app-search-options-container">
                                <span>Showing recent:</span>
                                <select class="form-control select2">
                                    <option>All</option>
                                    <option>Created</option>
                                    <option>Viewed</option>
                                    <option>Updated</option>
                                    <option>Tracked</option>
                                    <option>Closed</option>
                                </select>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                                    <div class="app-search-list-wrap">
                                        <a href="#" class="search-list-item">
                                            <h3>Build functioning prototype</h3>
                                            <p>in Phase 3 - Development Yesturday at 6:26pm</p>
                                        </a>
                                        <a href="#" class="search-list-item">
                                            <h3>Win contract with excellent proposal</h3>
                                            <p>in Phase 3 - Development Yesturday at 6:26pm</p>
                                        </a>
                                        <a href="#" class="search-list-item">
                                            <h3>Plan the build</h3>
                                            <p>in Phase 3 - Development Yesturday at 6:26pm</p>
                                        </a>
                                        <a href="#" class="search-list-item">
                                            <h3>Build functioning prototype</h3>
                                            <p>in Phase 3 - Development Yesturday at 6:26pm</p>
                                        </a>
                                        <a href="#" class="search-list-item">
                                            <h3>Build functioning prototype</h3>
                                            <p>in Phase 3 - Development Yesturday at 6:26pm</p>
                                        </a>
                                        <a href="#" class="search-list-item">
                                            <h3>Build functioning prototype</h3>
                                            <p>in Phase 3 - Development Yesturday at 6:26pm</p>
                                        </a>
                                        <a href="#" class="search-list-item">
                                            <h3>Build functioning prototype</h3>
                                            <p>in Phase 3 - Development Yesturday at 6:26pm</p>
                                        </a>
                                        <a href="#" class="search-list-item">
                                            <h3>Build functioning prototype</h3>
                                            <p>in Phase 3 - Development Yesturday at 6:26pm</p>
                                        </a>
                                        <a href="#" class="search-list-item">
                                            <h3>Build functioning prototype</h3>
                                            <p>in Phase 3 - Development Yesturday at 6:26pm</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-tasks" role="tabpanel" aria-labelledby="nav-tasks-tab">
                                    <div class="app-search-list-empty">
                                        <div class="text-center">
                                            <i class="las la-search"></i>
                                            <h4>No exact matches found.</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-docs" role="tabpanel" aria-labelledby="nav-docs-tab">
                                    <div class="app-search-list-empty">
                                        <div class="text-center">
                                            <i class="las la-search"></i>
                                            <h4>No exact matches found.</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.1.min.js"><\/script>')</script>
        <script src="js/vendor/popper.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="packages/select2/js/select2.min.js"></script>
        <script src="packages/easytimer/easytimer.min.js"></script>
        <script src="packages/datetimepicker/js/moment.js"></script>
        <script src="packages/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="packages/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/theme.js"></script>


        <script>
            $(document).ready(function(){
                var timer = new easytimer.Timer();
                $('.app-start').click(function () {
                    timer.start();
                });
                $('.app-pause').click(function () {
                    timer.pause();
                });
                $('.app-stop').click(function () {
                    timer.stop();
                });
                timer.addEventListener('secondsUpdated', function (e) {
                    $('#task_timer').html(timer.getTimeValues().toString());
                });
                timer.addEventListener('started', function (e) {
                    $('#task_timer').html(timer.getTimeValues().toString());
                });
                timer.addEventListener('reset', function (e) {
                    $('#task_timer').html(timer.getTimeValues().toString());
                });

                $("#add_task_btn").on('click', function() {
                    $(".create-app-wrap").addClass("visible");
                });
                var ps = new PerfectScrollbar(".app-list-wrap-inner", {
                    wheelSpeed: 2,
                    wheelPropagation: true,
                    minScrollbarLength: 5
                });
                var ps = new PerfectScrollbar(".app-search-list-wrap", {
                    wheelSpeed: 2,
                    wheelPropagation: true,
                    minScrollbarLength: 5
                });
                $('#steps_nav a.step-item').bind('click', function(e) {
                    e.preventDefault();
                    var target = $(this).attr("href");
                    $('html, body').stop().animate({
                        scrollTop: $(target).offset().top - $(".app-sec-title").height() - 30
                    }, 600, function() {
                        location.hash = target.offset().top - $(".app-sec-title").height() - 30;
                    });
                    return false;
                });
                var clicked = false;
                $(".select-all-btn").on("click", function() {
                    $("input[name='tasks_list']").prop("checked", !clicked);
                    clicked = !clicked;
                    $(this).toggleClass('checked');
                });

            });
            $(window).scroll(function() {
                var scrollDistance = $(window).scrollTop();
                $('.app-entry-form-section').each(function(i) {
                    if ($(this).position().top <= scrollDistance) {
                        $('#steps_nav a.step-item.active').removeClass('active');
                        $('#steps_nav a.step-item').eq(i).addClass('active');
                    }
                });
            }).scroll();
        </script>

        <script>
        am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        var chart = am4core.create("chartdiv", am4charts.PieChart);
        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

        chart.data = [
          {
            country: "Lithuania",
            value: 401
          },
          {
            country: "Czech Republic",
            value: 300
          },
          {
            country: "Ireland",
            value: 200
          },
          {
            country: "Germany",
            value: 165
          },
          {
            country: "Australia",
            value: 139
          },
          {
            country: "Austria",
            value: 128
          }
        ];
        chart.radius = am4core.percent(70);
        chart.innerRadius = am4core.percent(40);
        chart.startAngle = 180;
        chart.endAngle = 360;  

        var series = chart.series.push(new am4charts.PieSeries());
        series.dataFields.value = "value";
        series.dataFields.category = "country";

        series.slices.template.cornerRadius = 10;
        series.slices.template.innerCornerRadius = 7;
        series.slices.template.draggable = true;
        series.slices.template.inert = true;
        series.alignLabels = false;

        series.hiddenState.properties.startAngle = 90;
        series.hiddenState.properties.endAngle = 90;

        chart.legend = new am4charts.Legend();

        }); // end am4core.ready()
        </script>

    </body>
</html>
