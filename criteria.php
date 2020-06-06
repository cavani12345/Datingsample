<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dating App</title>

  <!-- Favicons -->
  <link href="../static/img/favicon.png" rel="icon">
  <link href="../static/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="../static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../static/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../static/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="../static/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="../static/css/style7.css" rel="stylesheet">
  <link href="../static/css/style-responsive.css" rel="stylesheet">
  <script src="../static/lib/chart-master/Chart.js"></script>
  <link rel="stylesheet" type="text/css" href="../static/css/montserrat-font.css">
  <link rel="stylesheet" type="text/css" href="../static/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <!-- Main Style Css -->
  <link rel="stylesheet" href="../static/css/zap7.css"/>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DATE<span>APP</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="../static/img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="../static/img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="../static/img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="../static/img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img 
           class="img-circle" width="80"  <?php 
          if (isset($_SESSION['username'])){
              $dir= "myprofile/".$_SESSION['username']."/pictures/";
              $open = opendir($dir);
              while(($pic= readdir($open)) != FALSE){
                 if($pic!="." && $pic!=".." && $pic!="Thumbs.db" && !empty($pic)){
                   echo" src='$dir/$pic' ";
                 }

          }
          } 
?> >     
          
          </a></p>
          <h5 class="centered"><?php 
         if (isset($_SESSION['username'])){
           echo $_SESSION['firstname'];
         }
        ?></h5>
          <li class="mt">
            <a class="active" href="indexd.php">
              <i class="fa fa-dashboard"></i>
              <span>HomeView</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Criteria</span>
              </a>
            <ul class="sub">
              <li><a href="criteria.php">Personal Criteria</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>Results</span>
              </a>
            <ul class="sub">
              <li><a href="#">View Partner</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cog"></i>
              <span>Settings</span>
              </a>
            <ul class="sub">
              <li><a href="changepassword.php">Change Password</a></li>
              <li><a href="#">Set Profile Image</a></li>
              <li><a href="#">Terms and Condition</a></li>
              <li><a href="#">Security Policy</a></li>
            </ul>
          </li>
  
          <li>
            <a href="inbox.html">
              <i class="fa fa-user"></i>
              <span>Sign Out </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->

           
            <!--custom chart end-->
            
           
            <!-- /row -->
     
              <!-- /col-md-4 -->
              <!--  PROFILE 02 PANEL -->
              <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 mb form-v10">
                <div class="page-content">
                    <div class="form-v10-content">
                        <form class="form-detail" action="#" method="post" id="myform">
                            <div class="form-left">
                                <h2>Personal Infomation</h2>
                                <div class="form-row">
                                  <input type="text" name="full" class="company" id="company" placeholder="Enter Full Name" required>
                                </div>
                                <div class="form-group">
                                  <div class="form-row form-row-1">
                                    <input type="text" name="code" class="code" id="code" placeholder="Code +" required>
                                  </div>
                                  <div class="form-row form-row-2">
                                    <input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
                                </div>
                                <div class="form-row">
                                    <select name="title">
                                        <option class="option" value="title">Gender</option>
                                        <option class="option" value="businessman">Male</option>
                                        <option class="option" value="reporter">Female</option>
                                    </select>
                                    <span class="select-btn">
                                          <i class="zmdi zmdi-chevron-down"></i>
                                    </span>
                                </div>
                                <div class="form-row">
                                  <select name="title">
                                      <option class="option" value="title">Age Range</option>
                                      <option class="option" value="1">1  (21-22)</option>
                                      <option class="option" value="2">2  (23-24)</option>
                                      <option class="option" value="3">3  (25-26)</option>
                                      <option class="option" value="4">4  (27-28)</option>
                                      <option class="option" value="5">5  (29-30)</option>
                                      <option class="option" value="6">6  (31-32)</option>
                                      <option class="option" value="7">7  (33-34)</option>
                                      <option class="option" value="8">8  (35-36)</option>
                                      <option class="option" value="9">9  (37-38)</option>
                                      <option class="option" value="10">10 (39-40)</option> 
                                      <option class="option" value="11">11 (41-42)</option>
                                      <option class="option" value="12">12 (43-44)</option>
                                      <option class="option" value="13">13 (45-46)</option>
                                      <option class="option" value="14">14 (47-48)</option>
                                      <option class="option" value="15">15 (49-50)</option>
                                      <option class="option" value="16">16 (51-60)</option>
                                  </select>
                                  <span class="select-btn">
                                        <i class="zmdi zmdi-chevron-down"></i>
                                  </span>
                              </div>
                              <div class="form-row">
                                <select name="title">
                                    <option class="option" value="title">Length Range</option>
                                    <option class="option" value="21">21 (Length < Meter)</option>
                                    <option class="option" value="22">22 (Length = Meter)</option>
                                    <option class="option" value="23">23 (Meter Half >= Length > Meter)</option>
                                    <option class="option" value="24">24 (Length >= Meter Half)</option>
                                </select>
                                <span class="select-btn">
                                      <i class="zmdi zmdi-chevron-down"></i>
                                </span>
                            </div>
                            <div class="form-row">
                              <select name="title">
                                  <option class="option" value="title">Studied</option>
                                  <option class="option" value="1">1 (True)</option>
                                  <option class="option" value="0">0 (False)</option>
                              </select>
                              <span class="select-btn">
                                    <i class="zmdi zmdi-chevron-down"></i>
                              </span>
                          </div>
                          <div class="form-row">
                            <select name="title">
                                <option class="option" value="title">Study Level</option>
                                <option class="option" value="0">No Level</option>
                                <option class="option" value="A2">A2</option>
                                <option class="option" value="A1">A1</option>
                                <option class="option" value="A0">A0</option>
                                <option class="option" value="Msc">Msc</option>
                                <option class="option" value="Phd">Phd</option>
                            </select>
                            <span class="select-btn">
                                  <i class="zmdi zmdi-chevron-down"></i>
                            </span>
                        </div>
                        <div class="form-row">
                            <select name="title">
                              <option class="option" value="title">Employed</option>
                              <option class="option" value="1">1 (True)</option>
                              <option class="option" value="0">0 (False)</option>
                        
                          </select>
                          <span class="select-btn">
                                <i class="zmdi zmdi-chevron-down"></i>
                          </span>
                      </div>
                      <div class="form-row">
                        <select name="title">
                            <option class="option" value="title">Job Type</option>
                            <option class="option" value="T">Trading</option>
                            <option class="option" value="P">Professional</option>
                            <option class="option" value="U">Unskilled</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row">
                      <select name="title">
                          <option class="option" value="title">Weight</option>
                          <option class="option" value="40">40 (Weight < 50)</option>
                          <option class="option" value="41">41 (60 >= Weight > 50)</option>
                          <option class="option" value="42">42 (70 >= Weight > 60)</option>
                          <option class="option" value="43">43 (80 >= Weight > 70)</option>
                          <option class="option" value="44">44 (Weight > 80)</option>
                      </select>
                      <span class="select-btn">
                            <i class="zmdi zmdi-chevron-down"></i>
                      </span>
                  </div>
                  <div class="form-row">
                    <select name="title">
                        <option class="option" value="title">Region</option>
                        <option class="option" value="N">North</option>
                        <option class="option" value="S">South</option>
                        <option class="option" value="E">East</option>
                        <option class="option" value="W">West</option>
                        <option class="option" value="K">Kigali</option>
                    </select>
                    <span class="select-btn">
                          <i class="zmdi zmdi-chevron-down"></i>
                    </span>
                </div>
                <div class="form-row">
                  <select name="title">
                      <option class="option" value="title">Religion</option>
                      <option class="option" value="C">Cathorism</option>
                      <option class="option" value="P">Protestantism</option>
                      <option class="option" value="SDA">Adventist</option>
                      <option class="option" value="I">Islam</option>
                  </select>
                  <span class="select-btn">
                        <i class="zmdi zmdi-chevron-down"></i>
                  </span>
              </div>
              <div class="form-row">
                <select name="title">
                    <option class="option" value="title">Skin Tone Index</option>
                    <option class="option" value="F">Fair</option>
                    <option class="option" value="M">Medium</option>
                    <option class="option" value="MB">Mid Brown</option>
                    <option class="option" value="DB">Dark Brown</option>
                    <option class="option" value="VDB">Very Dark Brown</option>
                </select>
                <span class="select-btn">
                      <i class="zmdi zmdi-chevron-down"></i>
                </span>
            </div>
            <div class="form-row">
              <select name="title">
                  <option class="option" value="title">Blood Type</option>
                  <option class="option" value="A+">A+</option>
                  <option class="option" value="A-">A-</option>
                  <option class="option" value="B+">B+</option>
                  <option class="option" value="B-">B-</option>
                  <option class="option" value="AB+">AB+</option>
                  <option class="option" value="AB-">AB-</option>
                  <option class="option" value="AB-">AB-</option>
                  <option class="option" value="O+">O+</option>
                  <option class="option" value="O-">O-</option>
              </select>
              <span class="select-btn">
                    <i class="zmdi zmdi-chevron-down"></i>
              </span>
          </div>
          <div class="form-row">

        </div>
                                <div class="form-group">
                     
                                </div>
                                <div class="form-row">
                                    
                               
                                </div>
                                <div class="form-row">
                                 
                                </div>
                                <div class="form-group">
                                    <div class="form-row form-row-3">
                                        
                                    </div>
                                    <div class="form-row form-row-4">
                               
                                  
                                    </div>
                                </div>
                            </div>
                            <div class="form-right">
                                <h2>Partner Information</h2>
                                <div class="form-row">
                                  <select name="title">
                                      <option class="option" value="title">Gender</option>
                                      <option class="option" value="businessman">Male</option>
                                      <option class="option" value="reporter">Female</option>
                                  </select>
                                  <span class="select-btn">
                                        <i class="zmdi zmdi-chevron-down"></i>
                                  </span>
                              </div>
                              <div class="form-row">
                                <select name="title">
                                    <option class="option" value="title">Age Range</option>
                                    <option class="option" value="1">1  (21-22)</option>
                                    <option class="option" value="2">2  (23-24)</option>
                                    <option class="option" value="3">3  (25-26)</option>
                                    <option class="option" value="4">4  (27-28)</option>
                                    <option class="option" value="5">5  (29-30)</option>
                                    <option class="option" value="6">6  (31-32)</option>
                                    <option class="option" value="7">7  (33-34)</option>
                                    <option class="option" value="8">8  (35-36)</option>
                                    <option class="option" value="9">9  (37-38)</option>
                                    <option class="option" value="10">10 (39-40)</option> 
                                    <option class="option" value="11">11 (41-42)</option>
                                    <option class="option" value="12">12 (43-44)</option>
                                    <option class="option" value="13">13 (45-46)</option>
                                    <option class="option" value="14">14 (47-48)</option>
                                    <option class="option" value="15">15 (49-50)</option>
                                    <option class="option" value="16">16 (51-60)</option>
                                </select>
                                <span class="select-btn">
                                      <i class="zmdi zmdi-chevron-down"></i>
                                </span>
                            </div>
                            <div class="form-row">
                              <select name="title">
                                  <option class="option" value="title">Length Range</option>
                                  <option class="option" value="21">21 (Length < Meter)</option>
                                  <option class="option" value="22">22 (Length = Meter)</option>
                                  <option class="option" value="23">23 (Meter Half >= Length > Meter)</option>
                                  <option class="option" value="24">24 (Length >= Meter Half)</option>
                              </select>
                              <span class="select-btn">
                                    <i class="zmdi zmdi-chevron-down"></i>
                              </span>
                          </div>
                          <div class="form-row">
                            <select name="title">
                                <option class="option" value="title">Studied</option>
                                <option class="option" value="1">1 (True)</option>
                                <option class="option" value="0">0 (False)</option>
                            </select>
                            <span class="select-btn">
                                  <i class="zmdi zmdi-chevron-down"></i>
                            </span>
                        </div>
                        <div class="form-row">
                          <select name="title">
                              <option class="option" value="title">Study Level</option>
                              <option class="option" value="0">No Level</option>
                              <option class="option" value="A2">A2</option>
                              <option class="option" value="A1">A1</option>
                              <option class="option" value="A0">A0</option>
                              <option class="option" value="Msc">Msc</option>
                              <option class="option" value="Phd">Phd</option>
                          </select>
                          <span class="select-btn">
                                <i class="zmdi zmdi-chevron-down"></i>
                          </span>
                      </div>
                      <div class="form-row">
                          <select name="title">
                            <option class="option" value="title">Employed</option>
                            <option class="option" value="1">1 (True)</option>
                            <option class="option" value="0">0 (False)</option>
                      
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row">
                      <select name="title">
                          <option class="option" value="title">Job Type</option>
                          <option class="option" value="T">Trading</option>
                          <option class="option" value="P">Professional</option>
                          <option class="option" value="U">Unskilled</option>
                      </select>
                      <span class="select-btn">
                            <i class="zmdi zmdi-chevron-down"></i>
                      </span>
                  </div>
                  <div class="form-row">
                    <select name="title">
                        <option class="option" value="title">Weight</option>
                        <option class="option" value="40">40 (Weight < 50)</option>
                        <option class="option" value="41">41 (60 >= Weight > 50)</option>
                        <option class="option" value="42">42 (70 >= Weight > 60)</option>
                        <option class="option" value="43">43 (80 >= Weight > 70)</option>
                        <option class="option" value="44">44 (Weight > 80)</option>
                    </select>
                    <span class="select-btn">
                          <i class="zmdi zmdi-chevron-down"></i>
                    </span>
                </div>
                <div class="form-row">
                  <select name="title">
                      <option class="option" value="title">Region</option>
                      <option class="option" value="N">North</option>
                      <option class="option" value="S">South</option>
                      <option class="option" value="E">East</option>
                      <option class="option" value="W">West</option>
                      <option class="option" value="K">Kigali</option>
                  </select>
                  <span class="select-btn">
                        <i class="zmdi zmdi-chevron-down"></i>
                  </span>
              </div>
              <div class="form-row">
                <select name="title">
                    <option class="option" value="title">Religion</option>
                    <option class="option" value="C">Cathorism</option>
                    <option class="option" value="P">Protestantism</option>
                    <option class="option" value="SDA">Adventist</option>
                    <option class="option" value="I">Islam</option>
                </select>
                <span class="select-btn">
                      <i class="zmdi zmdi-chevron-down"></i>
                </span>
            </div>
            <div class="form-row">
              <select name="title">
                  <option class="option" value="title">Skin Tone Index</option>
                  <option class="option" value="F">Fair</option>
                  <option class="option" value="M">Medium</option>
                  <option class="option" value="MB">Mid Brown</option>
                  <option class="option" value="DB">Dark Brown</option>
                  <option class="option" value="VDB">Very Dark Brown</option>
              </select>
              <span class="select-btn">
                    <i class="zmdi zmdi-chevron-down"></i>
              </span>
          </div>
          <div class="form-row">
            <select name="title">
                <option class="option" value="title">Blood Type</option>
                <option class="option" value="A+">A+</option>
                <option class="option" value="A-">A-</option>
                <option class="option" value="B+">B+</option>
                <option class="option" value="B-">B-</option>
                <option class="option" value="AB+">AB+</option>
                <option class="option" value="AB-">AB-</option>
                <option class="option" value="AB-">AB-</option>
                <option class="option" value="O+">O+</option>
                <option class="option" value="O-">O-</option>
            </select>
            <span class="select-btn">
                  <i class="zmdi zmdi-chevron-down"></i>
            </span>
        </div>
        <div class="form-row">
     
      </div>              
                  
                       
                         
                      
                               <div class="form-row">
                        
                                </div>
    
      
                                <div class="form-checkbox">
                                    <label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
                                          <input type="checkbox" name="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-row-last">
                                    <input type="submit" name="register" class="register" value="Register Here!">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
              <!--/ col-md-4 -->
              
            
            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
     
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>P|E|C</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created by <a href="#">P|E|C</a>
        </div>
        <a href="#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../static/lib/jquery/jquery.min.js"></script>

  <script src="../static/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="../static/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../static/lib/jquery.scrollTo.min.js"></script>
  <script src="../static/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="../static/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="../static/lib/common-scripts.js"></script>
  <script type="text/javascript" src="../static/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="../static/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="../static/lib/sparkline-chart.js"></script>
  <script src="../static/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Criteria Setting',
        // (string | mandatory) the text inside the notification
        text: 'With this page you can set the criteria about your partner!',
        // (string | optional) the image to display on the left
        image: '../static/img/weather.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
