<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

  <script>
    function showResultByName(str) {

      if (str.length == 0) {
        document.getElementById("getuserAccount").innerHTML = "";
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
          //document.getElementById("getuserAccount").innerHTML = this.responseText;
          //document.getElementById("ClientName").value = xmlhttp.responseText;
          var response = this.responseText;
        }
      }
      xmlhttp.open("GET", "getResult.php?q=" + str, true);
      xmlhttp.send();
    }

  </script>



    <script src="jquery-1.9.1.js"></script>

    <script src="Workprocess.js"></script>

    <title>RB Software</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
        <a href="../../../index2.html" class="logo"><b>RB_</b>Software</a>
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
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../../index.html"><i class="fa fa-circle-o"></i> Dashboard</a></li>
               
              </ul>
            </li>
            
         
          
            
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="#"><i class="fa fa-circle-o"></i>New Data Entry</a></li>
                 </ul>
            </li>
           
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
         <p class="search_input">
            <div class="box-footer">
              <p>Enter Customer Name</p>
              <input type="text" onkeyup="showResultByName(this.value)" class="input-control" />
            </div>

          </p>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            New Data Entry
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.html"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">New Data Entry</li>
          </ol>
        </section>





        <!--  My Working Section   -->

<?php

// This in the project

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'rbsoft'; // Database Name     

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$q = false;
if (isset($_GET['q']))
{
   $q = $_GET['q'];
}




$sql = 'SELECT * FROM newdataentry where ClientName="'. $q .'"';

$query = mysqli_query($conn, $sql);

 $no 	= 1;
		       
?>









        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Client Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">

<?php
//Start loop
    while ($row = mysqli_fetch_array($query))
		                  {

?>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="ClientName" value="<?php echo $response ?>">
                    </div>
<?php
           $no++;
		}
// End Loop

?>                  
                  
                  <div id="getuserAccount"></div>
                  </div>
                </form>
              </div><!-- /.box -->

             

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Print Details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Select Print Type</label>
                      <select class="form-control" id="PrintType">
                        <option>PVC</option>
                        <option>Pana</option>
                        <option>Stiker</option>
                         <option>Other</option>
                      </select>
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputPassword1">Height</label>
                      <input type="number" class="form-control" id="PrintHeight" placeholder="Height">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">Wide</label>
                      <input type="number" class="form-control" id="PrintWide" placeholder="Wide">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Quantity</label>
                      <input type="number" class="form-control" id="PrintQuantity" placeholder="Number Of Print Copy">
                    </div>
                    

                    <div class="form-group">
                      <label>Frame Added</label>
                      <select class="form-control" id="Addedframe">
                        <option>Yes</option>
                        <option selected>No</option>
                      </select>
                    </div>


                    <!--
                      // Account Section 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Price</label>
                      <input type="number" class="form-control" id="PrintPrice" placeholder="Price per ft">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Advance Pay</label>
                      <input type="number" class="form-control" id="PrintAdvancePay" placeholder="Advance">
                    </div>  

                    <div class="form-group">
                      <label for="exampleInputPassword1">Frame Price</label>
                      <input type="number" class="form-control" id="framePrice" placeholder="Advance">
                    </div>  

                   -->

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
               
               



              






            </div><!--/.col (right) -->

            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Print List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered" id="orderedProductsTbl">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phone No</th>
                      <th>Print Type</th>
                      <th>SFT</th>
                      <th>Quantity</th>
                      
                     
                    </tr>
                    </tbody>
                     
                    <tbody id="orderedProductsTblBody">
                    </tbody>
                    
                    <tfoot>
                       <tr>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                      </tr>
                    </tfoot>

                  </table>
                  
                </div><!-- /.box-body -->
               
              </div>
            </div>   <!-- /.row -->
                  



        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0 [Beta]
        </div>
        <p>Developed by RB_ IT </p> 
      </footer>
    </div><!-- ./wrapper -->

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
