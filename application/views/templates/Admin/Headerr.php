<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin : Binary Admin</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="<?php echo base_url() ?>assets2/assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="<?php echo base_url() ?>assets2/assets/css/font-awesome.css" rel="stylesheet" />
  <!-- MORRIS CHART STYLES-->
  
  <!-- CUSTOM STYLES-->
  <link href="<?php echo base_url() ?>assets2/assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <!-- TABLE STYLES-->
  <link href="<?php echo base_url() ?>assets2/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home">Halaman Admin</a> 
      </div>
      <div style="color: white;
      padding: 15px 50px 5px 50px;
      float: right;
      font-size: 16px;">  <a href="login" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>   
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li class="text-center">
            <img src="<?php echo base_url() ?>assets2/assets/img/find_user.png" class="user-image img-responsive"/>
          </li>
          
          
          <div class="sidebar-collapse"" role="navigation">
            <div class="sidebar-collapse"">
              <ul class="nav" id="side-menu">
                
                <li>
                  <?php echo generate_sidemenu();?>
                </li>
              </ul>
            </div>
          </div>
          
          
          
        </ul>
      </li>  
      
      
      
    </div>
    
  </nav>  
  
  
  
  <!-- /. PAGE WRAPPER  -->
  <!-- /. WRAPPER  -->
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- DATA TABLE SCRIPTS -->
  <script src="assets/js/dataTables/jquery.dataTables.js"></script>
  <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
  <script>
    $(document).ready(function () {
      $('#dataTables-example').dataTable();
    });
  </script>
  <!-- CUSTOM SCRIPTS -->
  <script src="assets/js/custom.js"></script>
  
  
</body>
</html>
