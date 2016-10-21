<!DOCTYPE html>
<html>
    <head>
        <title><?php echo config('site.title'); ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/vendor.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/flat-admin.css'); ?>">

        <!-- Theme -->

        <link rel="stylesheet" type="text/css" href="<?php echo asset(config('site.flatadmin.theme.asset')); ?>">


    </head>
    <body >
        <div   id="app" class="app <?php echo config('site.flatadmin.theme.class'); ?>">

            <sidebar>
                <div class="sidebar-header">
                    <a class="sidebar-brand" href="#"><?php echo config('site.flatadmin.sidebar.header'); ?> </a>
                    <button type="button" class="sidebar-toggle">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="sidebar-menu">
                    <ul class="sidebar-nav">
                        <li class="active">
                            <a   >
                                <div class="icon">
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                </div>
                                <div class="title">Dashboard</div>
                            </a>
                        </li>
                        <li class="@@menu.messaging">
                            <a href="./messaging.html">
                                <div class="icon">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                </div>
                                <div class="title">Messaging</div>
                            </a>
                        </li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon">
                                    <i class="fa fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="title">UI Kits</div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> UI Kits</li>
                                    <li><a href="./uikits/customize.html">Customize</a></li>
                                    <li><a href="./uikits/components.html">Components</a></li>
                                    <li><a href="./uikits/card.html">Card</a></li>
                                    <li><a href="./uikits/form.html">Form</a></li>
                                    <li><a href="./uikits/table.html">Table</a></li>
                                    <li><a href="./uikits/icons.html">Icons</a></li>
                                    <li class="line"></li>
                                    <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
                                    <li><a href="./uikits/pricing-table.html">Pricing Table</a></li>
                                    <!-- <li><a href="./uikits/timeline.html">Timeline</a></li> -->
                                    <li><a href="./uikits/chart.html">Chart</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon">
                                    <i class="fa fa-file-o" aria-hidden="true"></i>
                                </div>
                                <div class="title">Pages</div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li>
                                    <li><a href="./pages/form.html">Form</a></li>
                                    <li><a href="./pages/profile.html">Profile</a></li>
                                    <li><a href="./pages/search.html">Search</a></li>
                                    <li class="line"></li>
                                    <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Landing</li>
                                    <!-- <li><a href="./pages/landing.html">Landing</a></li> -->
                                    <li><a href="./pages/login.html">Login</a></li>
                                    <li><a href="./pages/register.html">Register</a></li>
                                    <!-- <li><a href="./pages/404.html">404</a></li> -->
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-footer">
                    <ul class="menu">
                        <li>
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
                    </ul>
                </div>
            </sidebar>


            <div class="app-container">

                <nav class="navbar navbar-default" id="navbar">
                    <div class="container-fluid">
                        <div class="navbar-collapse collapse in">
                            <ul class="nav navbar-nav navbar-mobile">
                                <li>
                                    <button type="button" class="sidebar-toggle">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </li>
                                <li class="logo">
                                    <a class="navbar-brand" href="#"><?php echo config('site.flatadmin.sidebar.header'); ?></a>
                                </li>
                                <li>
                                    <button type="button" class="navbar-toggle">
                                        <img class="profile-img" src="./assets/images/profile.png">
                                    </button>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-left">
                                <li class="navbar-title">Dashboard</li>
                                <li class="navbar-search hidden-sm">
                                    <input id="search" type="text" placeholder="Search..">
                                    <button class="btn-search"><i class="fa fa-search"></i></button>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown notification">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
                                        <div class="title">New Orders</div>
                                        <div class="count">0</div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li class="dropdown-header">Ordering</li>
                                            <li class="dropdown-empty">No New Ordered</li>
                                            <li class="dropdown-footer">
                                                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown notification warning">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
                                        <div class="title">Unread Messages</div>
                                        <div class="count">99</div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li class="dropdown-header">Message</li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-warning pull-right">10</span>
                                                    <div class="message">
                                                        <img class="profile" src="https://placehold.it/100x100">
                                                        <div class="content">
                                                            <div class="title">"Payment Confirmation.."</div>
                                                            <div class="description">Alan Anderson</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-warning pull-right">5</span>
                                                    <div class="message">
                                                        <img class="profile" src="https://placehold.it/100x100">
                                                        <div class="content">
                                                            <div class="title">"Hello World"</div>
                                                            <div class="description">Marco  Harmon</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-warning pull-right">2</span>
                                                    <div class="message">
                                                        <img class="profile" src="https://placehold.it/100x100">
                                                        <div class="content">
                                                            <div class="title">"Order Confirmation.."</div>
                                                            <div class="description">Brenda Lawson</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown-footer">
                                                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown notification danger">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
                                        <div class="title">System Notifications</div>
                                        <div class="count">10</div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li class="dropdown-header">Notification</li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-danger pull-right">8</span>
                                                    <div class="message">
                                                        <div class="content">
                                                            <div class="title">New Order</div>
                                                            <div class="description">$400 total</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-danger pull-right">14</span>
                                                    Inbox
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-danger pull-right">5</span>
                                                    Issues Report
                                                </a>
                                            </li>
                                            <li class="dropdown-footer">
                                                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown profile">
                                    <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
                                        <img class="profile-img" src="./assets/images/profile.png">
                                        <div class="title">Profile</div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="profile-info">
                                            <h4 class="username">Scott White</h4>
                                        </div>
                                        <ul class="action">
                                            <li>
                                                <a href="#">
                                                    Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-danger pull-right">5</span>
                                                    My Inbox
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Setting
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="row">
                    <div class="col-xs-12">
                        <card skin="card-mini">
                        <card-header>
                            <div class="card-title">Card</div>
                            <ul class="card-action">
                                <li class="dropdown">
                                    <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action 1</a></li>
                                        <li><a href="#">Action 2</a></li>
                                        <li><a href="#">Action 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </card-header>
                        <card-content>
                            <form class="form form-horizontal">
                                <div class="section">
                                    <div class="section-title">Information</div>
                                    <div class="section-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label class="control-label">Description</label>
                                                <p class="control-label-help">( short detail of products , 150 max words )</p>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Price</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="section-title">Warranty</div>
                                    <div class="section-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Type</label>
                                            <div class="col-md-9">
                                                <div class="radio radio-inline">
                                                    <input type="radio" name="radio4" id="radio10" value="option10">
                                                    <label for="radio10">
                                                        Global
                                                    </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" name="radio4" id="radio11" value="option11" checked="">
                                                    <label for="radio11">
                                                        Local
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Cover</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <select class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select><span class="select2 select2-container select2-container--default select2-container--above" dir="ltr" style="width: 254px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-yr2g-container"><span class="select2-selection__rendered" id="select2-yr2g-container" title="1">1</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <span class="input-group-addon">Years</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </card-content>                            
                        </card>
                    </div>
                </div>
                
               
                <footer class="app-footer"> 
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="footer-copyright">
                                Copyright © <?php echo date('Y'); ?> <?php echo config('site.company');?>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>

        <script type="text/javascript" src="./assets/js/vendor.js"></script>
        <script type="text/javascript" src="./assets/js/app.js"></script>
        <script type="text/javascript" src="./js/app.js"></script>

    </body>
</html>