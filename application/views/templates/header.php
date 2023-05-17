<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Demo</title>
<link rel="icon" href="<?php echo base_url('images/highzeal-icon.svg'); ?>">
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<link href="<?php echo base_url('css/hr.css'); ?>" rel="stylesheet">
<link rel="canonical"  href="<?php echo current_url(); ?>" />
	<!-- Google Tag Manager --> 
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NVS586V');</script> 
<!-- End Google Tag Manager -->
</head>
<body>
		<!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVS586V"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between"> <i class="bi bi-list toggle-sidebar-btn me-4"></i> <a href="https://highzeal.com/" class="logo d-flex align-items-center"><img src="https://highzeal.com/images/highzeal-logo.svg" alt="Highzeal" width="99" height="25" fetchpriority="high"></a> </div>
  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div>
  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item d-block d-lg-none"> <a class="nav-link nav-icon search-bar-toggle " href="#"> <i class="bi bi-search"></i> </a></li>
		<li class="nav-item dropdown pe-3"> <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> Quick Links </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">

       <i class="bi bi-plus"></i> Add this page to Quick Links  </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li> <a class="dropdown-item d-flex align-items-center" href="#"> Getting Started with greytHR </a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <span> Review Workflow</span> </a></li>
         
        </ul>
      </li>
      <li class="nav-item dropdown pe-3"> <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i class="bi bi-bell"></i> <span class="badge bg-primary badge-number">4</span> </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header"> You have 4 new notifications <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="notification-item"> <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
              <h4>Lorem Ipsum</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>30 min. ago</p>
            </div>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
      
          <li class="dropdown-footer"> <a href="#">Show all notifications</a></li>
        </ul>
      </li>
		<li class="pe-3"> <a class="nav-link nav-icon d-flex align-items-center pe-0" href="<?php echo base_url('logout'); ?>"> <i class="bi bi-power"></i> </a>
        
      </li>
	
		
   
    </ul>
  </nav>
</header>
<aside id="sidebar" class="sidebar">
	<div class="d-flex align-items-center mb-3">
  <div class="flex-shrink-0">
    <img src="<?php echo base_url('images/default-photo-large.jpg'); ?>" alt="Profile" class="rounded-circle img-fluid" width="35" height="35">
  </div>
  <div class="flex-grow-1 ms-3" style="word-wrap: break-word;
    width: 33%;">
   <span class="text-4 text-secondary-500">Hi <br><?php echo $this->session->userdata( 'username' ); ?></span><a href="<?php echo base_url('profile'); ?>"><i class="bi bi-gear ps-3" style="color:#394657;"></i></a>
	 <a class="text-5 text-regular d-block" href="<?php echo base_url('emp-info'); ?>"><span class="text-regular">View My Info</span></a>
  </div>
</div>
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item"> <a class="nav-link " href="<?php echo base_url('hr/home'); ?>"> <i class="bi bi-grid"></i> <span>Home</span> </a></li>
    <li class="nav-item"> <a class="nav-link collapsed" href="<?php echo base_url('feeds'); ?>"> <i class="bi bi-person"></i> <span>Feeds</span> </a></li>
    <li class="nav-item"> <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-menu-button-wide"></i><span>To Do</span><i class="bi bi-chevron-down ms-auto"></i> </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li> <a href="review.html"> <i class="bi bi-circle"></i><span>Review</span> </a></li>
      </ul>
    </li>
    <li class="nav-item"> <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-journal-text"></i><span>Salary</span><i class="bi bi-chevron-down ms-auto"></i> </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li> <a href="<?php echo base_url('payroll'); ?>"> <i class="bi bi-circle"></i><span>Payslips</span> </a></li>
        <li> <a href="<?php echo base_url('payroll/ytd-reports'); ?>"> <i class="bi bi-circle"></i><span>YTD Reports</span> </a></li>
        <li> <a href="<?php echo base_url('payroll/it-statement'); ?>"> <i class="bi bi-circle"></i><span>IT Statement</span> </a></li>
        <li> <a href="<?php echo base_url('payroll/income-tax-declaration'); ?>"> <i class="bi bi-circle"></i><span>IT Declaration</span> </a></li>
        <li> <a href="<?php echo base_url('payroll/my-loan'); ?>"> <i class="bi bi-circle"></i><span>Loans and Advances</span> </a></li>
        <li> <a href="<?php echo base_url('payroll/reimbursement'); ?>"> <i class="bi bi-circle"></i><span>Reimbursement</span> </a></li>
        <li> <a href="<?php echo base_url('payroll/poi'); ?>"> <i class="bi bi-circle"></i><span>Proof Of Investment</span> </a></li>
      </ul>
    </li>
    <li class="nav-item"> <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Leave</span><i class="bi bi-chevron-down ms-auto"></i> </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li> <a href="<?php echo base_url('leave'); ?>"> <i class="bi bi-circle"></i><span>Leave Apply</span> </a></li>
        <li> <a href="leave-balances.html"> <i class="bi bi-circle"></i><span>Leave Balances</span> </a></li>
        <li> <a href="leave-calendar.html"> <i class="bi bi-circle"></i><span>Leave Calender</span> </a></li>
        <li> <a href="holiday-calendar.html"> <i class="bi bi-circle"></i><span>Holiday Calender</span> </a></li>
      </ul>
    </li>
    <li class="nav-item"> <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-bar-chart"></i><span>Attendance</span><i class="bi bi-chevron-down ms-auto"></i> </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li> <a href="attendance-info.html"> <i class="bi bi-circle"></i><span>Attendance Info</span> </a></li>
      </ul>
    </li>
    <li class="nav-item"> <a class="nav-link collapsed" href="documents.html"> <i class="bi bi-person"></i> <span>Document Center</span> </a></li>
    <li class="nav-item"> <a class="nav-link collapsed" href="people.html"> <i class="bi bi-person"></i> <span>People</span> </a></li>
    <li class="nav-item"> <a class="nav-link collapsed" href="help-desk.html"> <i class="bi bi-person"></i> <span>Helpdesk</span> </a></li>
    <li class="nav-item"> <a class="nav-link collapsed" href="#"> <i class="bi bi-question-circle"></i> <span>Workflow Delegates</span> </a></li>
  </ul>
</aside>
<main class="main" id="main">