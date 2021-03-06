<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>JuanSumbong</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
 <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">	
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-desktop"></i> <span>JuanSumbong Application</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/icon.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                   <li><a href="http://localhost/juansumbong/application/js_addgovtoffice.php"><i class="fa fa-edit"></i>Add Gov't offices</a></li>
                   <li><a href="http://localhost/juansumbong/application/js_addquestion.php"><i class="fa fa-edit"></i>Add Security questions</a></li>
				   <li><a href="http://localhost/juansumbong/application/js_addchoices.php"><i class="fa fa-edit"></i>Add SecurityQuestion Choices</a></li>
				   <li><a href="http://localhost/juansumbong/application/js_addtypeofcomplaint.php"><i class="fa fa-edit"></i>Add Type of Complaint</a></li>
				   <li><a href="http://localhost/juansumbong/application/js_addbrgy.php"><i class="fa fa-edit"></i>Add Brgy</a></li>
				    <li><a href="http://localhost/juansumbong/application/js_addassignees.php"><i class="fa fa-edit"></i>Add Assignees</a></li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Others</h3>
                <ul class="nav side-menu">
				  <li><a href="http://localhost/juansumbong/application/admin.php"><i class="glyphicon glyphicon-info-sign"></i>  Logout</a></li>
				 </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/icon.png" alt="">Juan Sumbong Admin Page
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Government offices</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="juansumbongform" data-parsley-validate class="form-horizontal form-label-left" action="persistdatagovtoffice.php" method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="juansumbongquestion">Govt office name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="juansumbongoffice" name="juansumbongoffice" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					                      
					   <div class="ln_solid"></div>
					  
					   
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success">Submit</button>
						  <button class="btn btn-primary" type="reset">Clear</button>
                        </div>
                      </div>
<br/>
					<br/>
                    </form>
					
					<table id="tbjuan" class="table table-striped jambo_table bulk_action">
					 <thead>
				        <tr>
						  <th>Id</th>
                          <th>Name</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
							
							$con=mysqli_connect("localhost","root","","juansumbong","3307");
							// Check connection
							if (mysqli_connect_errno())
							{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
							
							$result = mysqli_query($con,"SELECT `id`,`name` FROM `js_offices`");
							
							echo mysqli_info($con); 
														
							while($row = mysqli_fetch_array($result))
							{
								echo '<tr>';
								echo '<td>'.$row["id"].'</td>';
								echo '<td>'.$row["name"].'</td>';
								echo '</tr>';
							}

							mysqli_close($con);
							
						?>                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        <!-- /page content -->
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
