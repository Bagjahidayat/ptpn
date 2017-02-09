<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from arisedashboard.com/nexton/design-feb-5/default.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 06:43:38 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Nexton Admin Panel">
    <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Template, Best Admin UI, Bootstrap Template, Themeforest, Bootstrap">
    <meta name="author" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="<?=base_url();?>assets/img/favicon.ico">
    <title>PT. Perkebunan Nusantara VIII</title>

    <?php $this->load->view('plugin/include_css') ?>

    <!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <header class="clearfix">
        <div class="logo">
        <img src="<?=base_url();?>assets/img/logo1.png" alt="Logo"></div>
        <div class="pull-right">
            <ul id="header-actions" class="clearfix">
                <li class="list-box dropdown"><a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                <span class="info-label">7</span>
                <i class="icon-notifications_active info-icon text-success"></i></a>
                    <ul class="dropdown-menu imp-notify">
                        <li>
                            <div class="thumb"><img src="<?=base_url();?>assets/img/user4.png" alt="Admin Dashboard"></div>
                            <div class="details"><strong>Wilson Kewis</strong>
                                <p>The best dashboard design I have ever seen. Good luck with sales.</p><small class="date">Today at 10:10 pm - 21.12.2016</small></div>
                        </li>
                        <li>
                            <div class="thumb"><img src="<?=base_url();?>assets/img/user7.png" alt="Admin Dashboard"></div>
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
                                    <input type="checkbox" class="todo-list-cb"> <span class="todo-list-mark"></span>
                                    <span class="todo-list-desc">Fix UI Bug</span> <small class="scheduled">Scheduled for 24th Dec, Assigned to Shawn.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb"> <span class="todo-list-mark"></span>
                                    <span class="todo-list-desc">Send all Documents</span> <small class="scheduled">Scheduled for 24th Dec, Assigned to Leena.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb"> <span class="todo-list-mark"></span>
                                    <span class="todo-list-desc">Attend Wedding Party</span> <small class="scheduled">Scheduled on 10th Dec, Assigned to Mark.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb" checked="checked"> <span class="todo-list-mark"></span>
                                    <span class="todo-list-desc">Meet Mr.James</span> <small class="scheduled">Completed on 5th Dec, Assigned to Robin.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb overdue" checked="checked"> <span class="todo-list-mark"></span>
                                    <span class="todo-list-desc">Read Turning Points</span> <small class="scheduled">Overdue 12 days, Assigned to Wincy.</small></label>
                            </fieldset>
                        </section>
                    </div>
                </li>
                <li class="list-box user-admin dropdown">
                    <div class="admin-details">
                        <div class="name">Shawn</div>
                        <div class="designation">System Admin</div>
                    </div>
                    <a id="drop4" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-account_circle"></i></a>
                    <ul class="dropdown-menu sm">
                        <li class="dropdown-content"><a href="#">
                        <i class="icon-warning2"></i>Update Password<br><span>Your password will expire in 7 days.</span></a>
                        <a href="profile.html">Edit Profile</a> <a href="forgot-pwd.html">Change Password</a>
                        <a href="validations.html">Settings</a> <a href="login.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><a href="comments.html" class="support">Support</a>
        <div class="custom-search">
            <input type="text" class="search-query" placeholder="Search here ..."> <i class="icon-search4"></i></div>
    </header>
    <div class="container-fluid">
        <div class="sidebar">
            <a href="#" class="user-wrapper clearfix">
                <div class="user-avatar">
                <img src="<?=base_url();?>assets/img/logo2.png" alt="Nexton User"></div>
                <div class="profile-status">
                    <p class="percentage">70% completed</p>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
            </a>
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                </div>

                <div class="collapse navbar-collapse" id="collapse-nav">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-home2"></i> <span class="menu-text">Beranda</span>
                            <span class="label label-primary">2</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="current-page">Beranda</a></li>
                            </ul>
                        </li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-verified_user"></i>
                                <span class="fa fa-desktop">Keuangan</span>
                                <span class="label label-danger">7</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Penagihan</a>
                                </li>
                                <li>
                                    <a href=#>Tagihan</a>
                                </li>
                                
                            </ul>
                            </li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-pie_chart"></i>
                                <span class="menu-text">Penanaman</span>
                                <span class="label label-green-light">3</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Pengobatan</a></li>
                                <li><a href="#">Pemupukan</a></li>
                            </ul>
                            </li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-subtitles"></i>
                                <span class="menu-text">Pemeliharaan</span>
                                <span class="label label-warning">3</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Tanaman</a></li>
                                <li><a href="#">Bibit</a></li>
                            </ul>
                            </li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-view_week"></i> <span class="menu-text">Panen</span>
                                <span class="label label-grey">2</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Perolehan</a></li>
                                <li><a href="#">.....</a></li>
                            </ul>
                            </li>
                            
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-error"></i>
                                <span class="menu-text">Pengadaan</span>
                                <span class="label label-teal">5</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Permintaan Pembelian</a></li>
                                <li><a href="#">Persetujuan Pembelian</a></li>
                                <li><a href="#">Kontrak Perjanjian Kerja</a></li>
                                <li><a href="#">Purchasing</a></li>
                            </ul>
                            </li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-error"></i>
                                <span class="menu-text">Lahan</span>
                                <span class="label label-teal">5</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Kebun</a></li>
                                <li><a href="#">Pembukaan Lahan</a></li>
                                <li><a href="#">Pembibitan</a></li>
                                <li><a href="#">Pemeliharaan</a></li>
                                <li><a href="#">Kegiatan Panen</a></li>
                            </ul>
                            </li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-error"></i>
                                <span class="menu-text">Produksi</span>
                                <span class="label label-teal">5</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Teh</a></li>
                                <li><a href="#">Kelapa Sawit</a></li>
                                <li><a href="#">Kina</a></li>
                                <li><a href="#">Karet</a></li>
                            </ul>
                            </li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-error"></i>
                                <span class="menu-text">SDM</span>
                                <span class="label label-teal">5</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">(isi)</a></li>
                                <li><a href="#">(isi)</a></li>
                            </ul>
                            </li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-error"></i>
                                <span class="menu-text">Karyawan</span>
                                <span class="label label-teal">5</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Karyawan 1</a></li>
                                <li><a href="#">Karyawan 2</a></li>
                                <li><a href="#">Karyawan 3</a></li>
                                <li><a href="#">Karyawan 4</a></li>
                            </ul>
                            </li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-error"></i>
                                <span class="menu-text">Wilayah</span>
                                <span class="label label-teal">5</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Pabrik</a></li>
                                <li><a href="#">Afdeling</a></li>
                                <li><a href="#">(isi)</a></li>
                            </ul>
                            </li>

                    </ul>
                </div>
            </nav>
        </div>
        
        <div class="dashboard-wrapper">
            <div class="top-bar clearfix">
                <div class="page-title">
                    <h4>PT. Perkebunan Nusantara VIII</h4></div>
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
                                            <h5 class="visitor-title">Total Visitors <span class="growth">
                                            <i class="icon-arrow-up-right2 up"></i>4.7%</span></h5>
                                            <h2 class="num-stats">8050</h2>
                                            <div class="progress progress-sm progress-rounded">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="block">
                                            <h5 class="visitor-title">New Signups <span class="growth">
                                            <i class="icon-arrow-up-right2 up"></i>8.2%</span></h5>
                                            <h2 class="num-stats">467</h2>
                                            <div class="progress progress-sm progress-rounded">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="block">
                                            <h5 class="visitor-title">Email Enquiries <span class="growth">
                                            <i class="icon-arrow-down-left2 down"></i>0.81%</span></h5>
                                            <h2 class="num-stats">1269</h2>
                                            <div class="progress progress-sm progress-rounded">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%"></div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="block">
                                            <h5 class="visitor-title">Average Time <span class="growth">
                                            <i class="icon-arrow-up-right2 up"></i>3.9%</span></h5>
                                            <h3 class="avg-time">5min:7sec</h3></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-container"></div>
            <footer class="footer">Copyright PT. Perkebunan Nusantara VIII <span>2017</span>.</footer>
        </div>
    </div>
    
    <?php $this->load->view('plugin/include_js') ?>
    
    <!-- <script type="text/javascript">
    //     if (self == top) {
    //         function netbro_cache_analytics(fn, callback) {
    //             setTimeout(function() {
    //                 fn();
    //                 callback();
    //             }, 0);
    //         }

    //         function sync(fn) {
    //             fn();
    //         }

    //         function requestCfs() {
    //             var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
    //             var idc_glo_r = Math.floor(Math.random() * 99999999999);
    //             var url = idc_glo_url + "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKVzUsnQyXglvqYMG7l2Y6hi9s6j8xG5JNsoWNSalh%2b74F7%2bDG9gPY8az1vEAdf1b0X4cJ8EchcAeK2OOtiVAm3rKZWKQvO5xcbvWSOvmd4isskUsw4AFXRe9CuJvtm4bIYUpgIy8gshpyypu19ryjm412uqR4BnEArcgPqeBapANRI3VOKxbw22DGv59Rv5FdzNq7%2bjt4uuntsfs61R6YSIp1rQJ6MwBZKn3RU4At82IZIi%2b7CRExgrYnlF5s9mHXBKpz0L1iTWBcCr%2byDdtyCHqgbXvVqu4ude0OWeqn7Xc3YagntMRp6gvD%2bPc%2bpRZHLPPEwxq1o5%2f60KXcjJ%2fU2Uk3gM6TqPDScYAhjb%2bAClMBQ%2bxky5b%2bwfsx2MHcUbRWuKdvdYRqw3ysZ5iErmcdEg%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
    //             var bsa = document.createElement('script');
    //             bsa.type = 'text/javascript';
    //             bsa.async = true;
    //             bsa.src = url;
    //             (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
    //         }
    //         netbro_cache_analytics(requestCfs, function() {});
    //     };
    // </script> -->
</body>
<!-- Mirrored from arisedashboard.com/nexton/design-feb-5/default.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 06:43:38 GMT -->

</html>