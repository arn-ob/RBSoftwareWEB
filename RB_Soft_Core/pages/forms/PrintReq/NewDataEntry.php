<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">



    <script src="jquery-1.9.1.js"></script>

    <script src="Workprocess.js"></script>

    <title>RB_Software</title>
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
        <a href="../../../index.php" class="logo"><b>RB_</b>Software</a>
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
            <li class="treeview active">
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


          <li class="treeview">
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
            <li class="active">New Data Entry</li>
          </ol>
        </section>





        <!--  My Working Section   -->












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
                <form role="form" name="myform">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="ClientName" name="name" placeholder="Client Name" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <input type="text" class="form-control" id="ClientAddress" name="address" placeholder="Address">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone No 1</label>
                      <input type="number" class="form-control" id="ClientPhn1" name="PhoneNo" placeholder="Phone Number">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone No 2 (Optional)</label>
                      <input type="number" class="form-control" id="ClientPhn2" placeholder="Phone Number">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Party Name (Optional)</label>
                      <input type="text" class="form-control" id="PartyName" placeholder="Party Name">
                    </div>
                   
                    <div class="form-group">
                      <label>Select Print Status</label>
                      <select class="form-control" id="PrintStatus">
                        <option>Design Complete</option>
                        <option>Design Processing</option>
                        <option>Printing</option>
                        <option>Editing</option>
                      </select>
                    </div>


                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <input name="SendValue" type="button" value="Add to list" onclick="CheckThenAdto()" class="btn btn-primary"></input>
                    
                    <input name="ClearField" type="button" value="Clear Field" onclick="ClearHtmlElement()" class="btn btn-default"></input>
                    
                    <input name="submitData" type="button" value="Submit Data" onclick="record()" class="btn btn-default" ></input>
        
                  
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
                  <form role="form" name="myformTwo">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Select Print Type</label>
                      <select class="form-control" id="PrintType" name="type">
                        <option>PVC</option>
                        <option>Pana</option>
                        <option>Stiker</option>
                         <option>Other</option>
                      </select>
                    </div>
                    
                     

                    <div class="form-group">
                      <label for="exampleInputPassword1">Wide</label>
                      <input type="number" class="form-control" id="PrintWide" placeholder="Wide" name="wide">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Height</label>
                      <input type="number" class="form-control" id="PrintHeight" placeholder="Height" name="height">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">Quantity</label>
                      <input type="number" class="form-control" id="PrintQuantity" placeholder="Number Of Print Copy" name="quantity">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">File Name</label>
                      <input type="text" class="form-control" id="fileName" placeholder="File Name" name="fileName">
                    </div>
                    

                    <div class="form-group">
                      <label>Frame Added (Optional)</label>
                      <select class="form-control" id="Addedframe">
                        <option>Yes</option>
                        <option selected>No</option>
                      </select>
                    </div>



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
                      <th>Phone No 1</th>
                      <th>Phone No 2</th>
                      <th>Print Type</th>
                      <th>SFT</th>
                      <th>Quantity</th>
                      <th>FileName</th>
                      <th>Print Status</th>
                      
                     
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
                         <td></td>
                         <td></td>
                         <!--<td colspan="3" align="right" id="cart_total"></td> -->
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
