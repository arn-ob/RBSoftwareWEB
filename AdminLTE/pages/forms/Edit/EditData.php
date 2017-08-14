<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">



  <script>

  </script>

  <script>
    function editResult() {
      var str = document.getElementById("getdata").value;
      
      if (str.length == 0) {
        document.getElementById("livesearch").innerHTML = "";
        return;
      }

      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
      } else {  // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }

      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

          document.getElementById("GetResult").innerHTML = this.responseText;

        }
      }
      xmlhttp.open("GET", "editPHP/EditPHP.php?q="+ str, true);
      xmlhttp.send();
    }
  </script>
  <script src="jquery-1.9.1.js"></script>

  <script src="Workprocess.js"></script>

  <title>AdminLTE 2 | Dashboard</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"
  />
  <!-- Ionicons -->
  <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="../../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
  <link href="../../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-blue">
  <div class="wrapper">

    <header class="main-header">
      <a href="../../../index2.html" class="logo"><b>Admin</b>LTE</a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Data Entry</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="../PrintReq/NewDataEntry.php"><i class="fa fa-circle-o"></i>New Data Entry</a></li>
          </ul>
         
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Search Data</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
         <ul class="treeview-menu">
            <li><a href="../Search/SearchAll.php"><i class="fa fa-circle-o"></i>Display All Data</a></li>
            <li><a href="../Search/SearchByName.php"><i class="fa fa-circle-o"></i>Search By Name</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Account</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
         <ul class="treeview-menu">
            <li><a href="../account/account.php"><i class="fa fa-circle-o"></i>Accounts</a></li>
             </ul>
        </li>


        <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Edit Data</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
         <ul class="treeview-menu">
            <li><a href="../Edit/EditData.php"><i class="fa fa-circle-o"></i>Edit Data</a></li>
             </ul>
        </li>
        


        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          New Data Entry

        </h1>
        <ol class="breadcrumb">
          <li><a href="../../index.html"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Forms</a></li>
          <li>New Data Entry</li>
        </ol>

      </section>





      <!--  My Working Section   -->


 <input type="text" id="getdata">
       <input type="button" value="Display All The record" onclick="editResult()" class="btn btn-primary"></input>
         
      <!-- Main content -->
      <style type="text/css">
        .tg {
          border-collapse: collapse;
          border-spacing: 0;
          border-color: #ccc;
        }

        .tg td {
          font-family: Arial, sans-serif;
          font-size: 14px;
          padding: 10px 5px;
          border-style: solid;
          border-width: 0px;
          overflow: hidden;
          word-break: normal;
          border-color: #ccc;
          color: #333;
          background-color: #fff;
        }

        .tg th {
          font-family: Arial, sans-serif;
          font-size: 14px;
          font-weight: normal;
          padding: 10px 5px;
          border-style: solid;
          border-width: 0px;
          overflow: hidden;
          word-break: normal;
          border-color: #ccc;
          color: #333;
          background-color: #f0f0f0;
        }

        .tg .tg-yw4l {
          vertical-align: top
        }
      </style>
      <table class="tg">
        <tr>
          <th class="tg-yw4l">No</th>
          <th class="tg-yw4l">Name</th>
          <th class="tg-yw4l">Address</th>
          <th class="tg-yw4l">Phone NO</th>
          <th class="tg-yw4l">PrintType</th>
          
          
          <tbody id="GetResult">

           </tbody>    



        </tr>
      </table>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0 [Beta]
        </div>
        <p>Developed by RB_ IT </p> 
      </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.1.3 -->
  <script src="../../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="../../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- FastClick -->
  <script src='../../../plugins/fastclick/fastclick.min.js'></script>
  <!-- AdminLTE App -->
  <script src="../../../dist/js/app.min.js" type="text/javascript"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../../dist/js/demo.js" type="text/javascript"></script>
</body>

</html>