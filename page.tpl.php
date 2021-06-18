
<?php
global $user;


if ( $user->uid ) {
  if(isset($_GET["iframe"])) {
    ?>
    <style>
      #skip-link, #overlay-disable-message, #toolbar, #civicrm-menu, .crm-menubar-toggle-btn {
        display: none !important;
      }
      .row {
        margin-top: -50px !important;
      }
    </style>
    <?php
    print render($page['content']);
  } else {
?>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">    
<style>
.rounded-circle .avatar {
  border-radius: 100px;
  width: 50px;
  height: 50px;
  object-fit:cover;
}

#search-field {
  width: 100%;
  margin-top: -37px;
}
</style>
<div id="goTop" style="display: none;"></div>
<!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="">josiahventure ministry portal</div>
            </a>


            
            <!-- start menu -->
            <?php foreach ($left_menu as $menu): ?>
              
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                <?php echo $menu["name"]; ?>
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <?php foreach ($left_menu_links as $menu_row): 
                if ($menu_row["submenu"]==$menu["id"]):
            ?>
            
            <li class="nav-item" style="margin-bottom: -8px; margin-top: -8px;">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw"><img style="width: 16px; height: 16px;" src="<?php echo $menu_row["icon"]; ?>"/></i>
                    <span><?php echo $menu_row["name"]; ?></span></a>
            </li>
            
          <?php endif; endforeach; endforeach; ?>
            <!-- end menu -->
            
            
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" id="4replace" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                
                        <li class="nav-item dropdown no-arrow">
                          <a class="nav-link" id="filtered-search">
                            <img src="https://img.icons8.com/material-two-tone/24/000000/search.png">
                            <span class="mr-2 d-none d-lg-inline text-gray-600">Filtered search</span>
                          </a>
                        </li>
                        <!-- Nav Item - ADD NEW -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="/user" id="addNew" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="text-gray-600" style="font-size: 25px;">+</i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600">Add new</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <?php foreach($add_menu as $menu): ?>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-sm fa-fw mr-2 text-gray-400"><img src="<?php echo $menu["icon"]; ?>" /></i>
                                    <?php echo $menu["name"]; ?>
                                </a>
                              <?php endforeach; ?>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="/user" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php print $user->name; ?></span>
                                <div class="rounded-circle"><?php print $user_avatar; ?></div>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="/user">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/user/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                    
                </nav>
                <!-- End of Topbar -->
                <div id="search-field" style="display: none;">
                  <iframe scrolling="no" src="http://localhost/drupal/drupal-7/civicrm/contact/search/custom?csid=17&reset=1&iframe=1" style="width: 100%; height: 500px;"></iframe>
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php print render($page['content']); ?>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Vít Maňásek 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

<!-- Bootstrap core JavaScript-->
    <script src="http://localhost/drupal/drupal-7/test/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/drupal/drupal-7/test/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/drupal/drupal-7/test/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/drupal/drupal-7/test/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="http://localhost/drupal/drupal-7/test/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="http://localhost/drupal/drupal-7/test/js/demo/chart-area-demo.js"></script>
    <script src="http://localhost/drupal/drupal-7/test/js/demo/chart-pie-demo.js"></script>  
    
    
<script>
$("#filtered-search").click(function(){
  if($("#search-field").css("display")=="none") {
    $("#search-field").show();
  } else {
    $("#search-field").hide();
  }
  
  
});
$( document ).ready(function(){
    $("#4replace").replaceWith($("#crm-qsearch-input").get());   
    $("#crm-qsearch-input").css("width", "200px").css("border-radius", "100px");
    $("head").append('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
});


</script>


<?php
}
} else {
print render($page['content']);
}
?>
             