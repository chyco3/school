<?php include '../config.php';
 
if(!isset($_SESSION['username']))
{    
echo "<script>window.location.href='index';</script>";
}
$un = $_SESSION['username'];
$select = mysql_query("select * from school where `email` = '".$un."'") or die(mysql_error());
$row = mysql_fetch_array($select);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
     <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css">
    <link href="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css">
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
          <style type="text/css">
.user-panel > .image > img {
    width: 70px;
    height: 70px;
}
.skin-black .sidebar > .sidebar-menu > li:first-of-type > a {
    border-top: 0px solid #333;
    background: #425164;
}
              .panel > .table-responsive
              {
               overflow-x: auto;
              } .fixed-table-loading{ display: none}
.content {
    padding: 20px 15px;
    background: #3f3f3f;
    overflow: auto;
}
          </style>
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                Director
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                    </nav>
                </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="<?php echo $row['userphoto'];?>" class="img-circle" alt="User Image" />
                                </div>
                                <div class="pull-left info">
                                    <p>School Email ; <?php echo $_SESSION['username'];?></p>
                                  
                                    
                                </div>
                            </div>
                            <!-- search form -->
                            <form action="#" method="get" class="sidebar-form">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                            <!-- /.search form -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu">
                                <li>
                                    <a href="dashboard" class="active">
                                        <i class="fa fa-dashboard" ></i> <span>School Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="student">
                                        <i class="fa fa-dashboard"></i> <span>Allocate Student</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="messages">
                                        <i class="fa fa-dashboard"></i> <span>Messages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="logout">
                                        <i class="fa fa-sign-out"></i> <span>Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </section>
                        <!-- /.sidebar --> </aside>