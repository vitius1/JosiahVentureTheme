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
    if(isset($user->roles[30])) {
      ?>
      <style>
        #skip-link, #overlay-disable-message, #toolbar, #civicrm-menu, .crm-menubar-toggle-btn {
          display: none !important;
        }
        @media (min-width: 768px) { 
          body.crm-menubar-visible.crm-menubar-over-cms-menu {
              padding-top: 0px !important;
          }
        }
      </style>
      <?php
    }
?>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
<link href="https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/css/menu.css" rel="stylesheet">
<link href="https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/css/colors.css" rel="stylesheet">
<link rel="stylesheet" href="https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/css/shapes.css">

<div id="goTop" style="display: none;"></div>
<!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/civicrm/">
                <div class="site-name"><svg xmlns="http://www.w3.org/2000/svg" width="184.7" height="29.373" viewBox="0 0 184.7 29.373">
  <g id="Group_281" data-name="Group 281" transform="translate(-26.167 -19.115)">
    <path id="Path_51" data-name="Path 51" d="M308.056,55.558V53.91h-3.811V46.16h-1.989v9.4Zm-12.743-3.906c.667-2.163,1.076-3.519,1.216-4.068.034.157.09.364.168.628s.431,1.412,1.065,3.441Zm5.755,3.906-3.329-9.437H295.3l-3.317,9.437h2.146l.684-2.236h3.424l.684,2.236Zm-11.9-7.739h2.55V46.16h-7.094v1.659h2.55v7.739h1.995Zm-9.263,4.136,2.241,3.609h2.214q-.639-.925-2.763-4.1a3.037,3.037,0,0,0,1.294-1.014,2.784,2.784,0,0,0-.465-3.592,4.684,4.684,0,0,0-2.835-.695h-2.74v9.4h1.995V51.954ZM278.85,47.8h.605a2.763,2.763,0,0,1,1.423.286,1.026,1.026,0,0,1,.46.953,1.14,1.14,0,0,1-.448.992,2.482,2.482,0,0,1-1.4.314h-.644Zm-10.2.678a2.113,2.113,0,0,1,1.793-.8q2.37,0,2.37,3.177t-2.387,3.166a2.092,2.092,0,0,1-1.788-.8,3.931,3.931,0,0,1-.6-2.37,4.014,4.014,0,0,1,.611-2.376m5.111-1.21a4.281,4.281,0,0,0-3.312-1.244,4.341,4.341,0,0,0-3.323,1.238,5.043,5.043,0,0,0-1.16,3.581,5.106,5.106,0,0,0,1.16,3.6,5.011,5.011,0,0,0,6.635,0,5.085,5.085,0,0,0,1.16-3.586,5.172,5.172,0,0,0-1.16-3.586M263.714,46.9a3.974,3.974,0,0,0-2.6-.734h-3v9.4H260.1V52.218h.857a4.071,4.071,0,0,0,2.7-.8,2.874,2.874,0,0,0,.947-2.32,2.678,2.678,0,0,0-.891-2.2m-3.609.9h.908a1.792,1.792,0,0,1,1.2.336,1.294,1.294,0,0,1,.381,1.037,1.273,1.273,0,0,1-.454,1.059,2.19,2.19,0,0,1-1.379.364H260.1Z" transform="translate(-97.189 -16.72)" fill="#fff"/>
    <path id="Path_52" data-name="Path 52" d="M121.979,43.559l-3.581,9.5h-1.44l-3.558-9.5h1.726l2.606,7.324,2.578-7.324Zm5.2,9.723A4.736,4.736,0,0,1,123.649,52a5,5,0,0,1-1.255-3.637,5.4,5.4,0,0,1,1.216-3.7,4.066,4.066,0,0,1,3.183-1.373,4.356,4.356,0,0,1,1.563.258,3.08,3.08,0,0,1,1.188.8,3.626,3.626,0,0,1,.785,1.334,5.976,5.976,0,0,1,.275,1.928v.869h-6.584a3.53,3.53,0,0,0,.835,2.533,3.044,3.044,0,0,0,2.309.88,4.511,4.511,0,0,0,1.031-.118,4.987,4.987,0,0,0,.913-.308,7.974,7.974,0,0,0,.734-.375,5.993,5.993,0,0,0,.493-.342h.1V52.5c-.185.067-.42.163-.695.275s-.527.2-.751.258c-.314.084-.594.151-.846.2a7.476,7.476,0,0,1-.958.056m1.872-6.03a4.242,4.242,0,0,0-.157-1.115,2.17,2.17,0,0,0-.387-.79,1.838,1.838,0,0,0-.717-.549,2.824,2.824,0,0,0-1.087-.185,2.736,2.736,0,0,0-1.087.191,2.573,2.573,0,0,0-1.356,1.39,3.638,3.638,0,0,0-.235,1.059Zm10.642,5.811h-1.6V47.65a11.786,11.786,0,0,0-.062-1.222,2.552,2.552,0,0,0-.247-.908,1.277,1.277,0,0,0-.544-.532,2.143,2.143,0,0,0-.953-.174,2.707,2.707,0,0,0-1.227.319,6.375,6.375,0,0,0-1.238.829v7.1h-1.6v-9.5h1.6v1.059a6.512,6.512,0,0,1,1.412-.981,3.288,3.288,0,0,1,1.474-.342,2.737,2.737,0,0,1,2.2.925,3.975,3.975,0,0,1,.79,2.673v6.17Zm5.127.185a2.722,2.722,0,0,1-2.045-.745,3.263,3.263,0,0,1-.734-2.354V44.882h-1.082V43.559h1.082V40.83h1.6v2.729h2.942v1.328h-2.942V49.4c0,.482.011.857.022,1.115a1.957,1.957,0,0,0,.2.734.943.943,0,0,0,.471.448,2.076,2.076,0,0,0,.874.151,2.659,2.659,0,0,0,.757-.112,5.219,5.219,0,0,0,.527-.191h.1v1.435a7.048,7.048,0,0,1-.919.2,6.613,6.613,0,0,1-.846.062m10.356-.185h-1.6V52.01a7,7,0,0,1-1.407.981,3.228,3.228,0,0,1-1.479.336,3.385,3.385,0,0,1-1.171-.2,2.413,2.413,0,0,1-.958-.65,2.965,2.965,0,0,1-.633-1.115,5.14,5.14,0,0,1-.23-1.636V43.559h1.6v5.413a11.277,11.277,0,0,0,.056,1.261,2.5,2.5,0,0,0,.252.869,1.193,1.193,0,0,0,.532.532,2.21,2.21,0,0,0,.964.174,2.857,2.857,0,0,0,1.255-.331,5.782,5.782,0,0,0,1.216-.818v-7.1h1.6Zm7.352-7.789h-.084a1.643,1.643,0,0,0-.375-.062c-.134-.006-.3-.011-.482-.011a3.221,3.221,0,0,0-1.289.28,4.147,4.147,0,0,0-1.2.829v6.747h-1.6v-9.5h1.6v1.412a7.224,7.224,0,0,1,1.53-1.093,2.88,2.88,0,0,1,1.266-.319c.162,0,.286.006.37.011s.174.022.275.039v1.664Zm5.284,8.008A4.714,4.714,0,0,1,164.288,52a4.971,4.971,0,0,1-1.255-3.637,5.373,5.373,0,0,1,1.222-3.7,4.042,4.042,0,0,1,3.183-1.373,4.356,4.356,0,0,1,1.563.258,3.059,3.059,0,0,1,1.194.8,3.616,3.616,0,0,1,.779,1.334,5.976,5.976,0,0,1,.275,1.928v.869h-6.579a3.554,3.554,0,0,0,.829,2.533,3.031,3.031,0,0,0,2.3.88,4.6,4.6,0,0,0,1.037-.118,4.987,4.987,0,0,0,.913-.308,6.137,6.137,0,0,0,.728-.375c.2-.123.359-.241.493-.342h.1V52.5c-.185.067-.415.163-.695.275s-.532.2-.751.258c-.314.084-.594.151-.841.2a7.736,7.736,0,0,1-.969.056m1.872-6.03a4.507,4.507,0,0,0-.151-1.115,2.269,2.269,0,0,0-.392-.79,1.8,1.8,0,0,0-.717-.549,2.814,2.814,0,0,0-1.082-.185,2.736,2.736,0,0,0-1.087.191,2.547,2.547,0,0,0-.813.56,2.5,2.5,0,0,0-.544.829,3.639,3.639,0,0,0-.235,1.059Z" transform="translate(-33.571 -14.438)" fill="#fff"/>
    <path id="Path_53" data-name="Path 53" d="M23.535,52.44a3.3,3.3,0,0,1-.964,2.527,3.465,3.465,0,0,1-2.482.908,13.193,13.193,0,0,1-1.479-.073,8.656,8.656,0,0,1-.969-.146v-2.2h.23a4.768,4.768,0,0,0,.644.146,3.523,3.523,0,0,0,.566.056,1.245,1.245,0,0,0,1.171-.532A3.6,3.6,0,0,0,20.56,51.4V44.791h-1.72V42.712h4.7Zm0-11.084H20.363V39.03h3.177v2.326ZM34.989,47.5A5.15,5.15,0,0,1,33.7,51.213a4.773,4.773,0,0,1-3.648,1.356,4.793,4.793,0,0,1-3.637-1.356,5.156,5.156,0,0,1-1.3-3.715,5.138,5.138,0,0,1,1.3-3.732,4.828,4.828,0,0,1,3.637-1.351A4.819,4.819,0,0,1,33.7,43.771,5.188,5.188,0,0,1,34.989,47.5m-3.054.017A5.959,5.959,0,0,0,31.8,46.1a2.732,2.732,0,0,0-.387-.908,1.45,1.45,0,0,0-.594-.5,1.879,1.879,0,0,0-.757-.14,2,2,0,0,0-.723.123,1.406,1.406,0,0,0-.6.471,2.569,2.569,0,0,0-.4.913,6.905,6.905,0,0,0-.011,2.875,2.7,2.7,0,0,0,.37.863,1.448,1.448,0,0,0,.6.488,1.988,1.988,0,0,0,.79.157,1.837,1.837,0,0,0,.728-.157,1.338,1.338,0,0,0,.588-.46,2.569,2.569,0,0,0,.4-.885,5.578,5.578,0,0,0,.14-1.423m7.548,5.021a8.43,8.43,0,0,1-1.995-.23,7.2,7.2,0,0,1-1.552-.538V49.251h.247c.146.106.3.224.488.359a4,4,0,0,0,.762.409,5.357,5.357,0,0,0,.936.336,4.3,4.3,0,0,0,1.138.14,2.843,2.843,0,0,0,1.11-.2.66.66,0,0,0,.482-.622.6.6,0,0,0-.219-.5,2.51,2.51,0,0,0-.857-.325q-.345-.084-.857-.185a8.523,8.523,0,0,1-.919-.224,3.419,3.419,0,0,1-1.687-1.031,2.729,2.729,0,0,1-.566-1.8,2.573,2.573,0,0,1,.3-1.2,3.1,3.1,0,0,1,.863-1.009,4.486,4.486,0,0,1,1.412-.689,6.334,6.334,0,0,1,1.888-.258,7.875,7.875,0,0,1,1.844.2,7.273,7.273,0,0,1,1.423.476v2.415h-.235A5.319,5.319,0,0,0,43,45.217a6.035,6.035,0,0,0-.644-.342,4.478,4.478,0,0,0-.841-.28,4.093,4.093,0,0,0-.947-.112,2.466,2.466,0,0,0-1.093.219.664.664,0,0,0-.448.588.63.63,0,0,0,.219.51,2.637,2.637,0,0,0,.964.364c.258.062.549.123.88.185a7.5,7.5,0,0,1,.958.247,3.216,3.216,0,0,1,1.558.975,2.609,2.609,0,0,1,.532,1.709,2.694,2.694,0,0,1-.314,1.278,2.958,2.958,0,0,1-.9,1.025,4.712,4.712,0,0,1-1.44.695,6.67,6.67,0,0,1-2,.258m9.039-.263H45.547V42.717h2.976Zm.084-10.916H45.457V39.03h3.149Zm7.464,8.422V47.783c-.5.05-.919.1-1.227.129a4.386,4.386,0,0,0-.919.219,1.235,1.235,0,0,0-.605.415,1.156,1.156,0,0,0-.219.734,1.066,1.066,0,0,0,.359.925,1.9,1.9,0,0,0,1.065.252,2.04,2.04,0,0,0,.8-.179,2.417,2.417,0,0,0,.745-.5m0,1.479c-.2.174-.387.325-.549.46a3.459,3.459,0,0,1-.65.4,3.458,3.458,0,0,1-1.838.4,2.843,2.843,0,0,1-2.107-.852,2.923,2.923,0,0,1-.841-2.141,3.08,3.08,0,0,1,.426-1.72,2.867,2.867,0,0,1,1.222-1.037,6.3,6.3,0,0,1,1.933-.549c.751-.1,1.558-.179,2.415-.241v-.05a1.119,1.119,0,0,0-.583-1.093,3.948,3.948,0,0,0-1.748-.3,4.731,4.731,0,0,0-1.233.191,9.811,9.811,0,0,0-1.379.488h-.258V42.908q.446-.126,1.429-.3a11.33,11.33,0,0,1,1.995-.174,6.131,6.131,0,0,1,3.6.824,2.879,2.879,0,0,1,1.126,2.5v6.5H56.065v-1Zm14.116,1.014H67.194V47.531c0-.381-.017-.768-.045-1.154a2.709,2.709,0,0,0-.174-.846.968.968,0,0,0-.443-.465,1.751,1.751,0,0,0-.773-.14,2.08,2.08,0,0,0-.74.14,3.548,3.548,0,0,0-.8.431v6.775H61.243V39.03h2.976v4.741a7.738,7.738,0,0,1,1.423-.969,3.4,3.4,0,0,1,1.535-.347,2.743,2.743,0,0,1,2.236.925,4.072,4.072,0,0,1,.773,2.679Z" transform="translate(8.527 -13.646)" fill="#f60"/>
    <rect id="Rectangle_62" data-name="Rectangle 62" width="1.263" height="29.373" transform="translate(149.187 19.115)" fill="#fff"/>
  </g>
</svg>
</div>
            </a>
            
            <a class="d-flex align-items-center justify-content-center sidebar-brand-toggled" style="display: none !important;" href="/civicrm/">
                <div class="site-name"><svg id="logo" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
  <rect id="logo_bg" data-name="logo bg" width="70" height="70" fill="#110b22"/>
  <g id="JV_Podcast_Icon_FIX3" data-name="JV Podcast Icon FIX3" transform="translate(14.4 6.676)">
    <path id="Path_46" data-name="Path 46" d="M17.1,30.5a6.474,6.474,0,0,1-1.9,4.9,6.986,6.986,0,0,1-4.8,1.8,28.1,28.1,0,0,1-2.9-.1c-.6-.1-1.3-.2-1.9-.3V32.6H6l1.2.3a4.1,4.1,0,0,0,1.1.1,2.515,2.515,0,0,0,2.3-1,6.28,6.28,0,0,0,.6-3.3v-13H8.1v-4h9.1V30.5Z" fill="#f60"/>
    <rect id="Rectangle_46" data-name="Rectangle 46" width="6.1" height="4.5" transform="translate(11 4.6)" fill="#f60"/>
    <path id="Path_47" data-name="Path 47" d="M35.6,11.7,28.7,30H26L19.1,11.7h3.3l5,14.1,5-14.1Z" fill="#fff"/>
  </g>
  <path id="Path_57" data-name="Path 57" d="M298.93,53.815V52.468h-3.114V46.134H294.19v7.68Zm-10.414-3.192c.545-1.768.879-2.876.994-3.325.027.128.073.3.137.513s.353,1.154.87,2.812Zm4.7,3.192L290.5,46.1h-1.992l-2.711,7.712h1.754l.559-1.827h2.8l.559,1.827ZM283.5,47.49h2.084V46.134h-5.8V47.49h2.084v6.325h1.63Zm-7.57,3.38,1.832,2.949h1.809q-.522-.756-2.258-3.348a2.482,2.482,0,0,0,1.058-.829,2.276,2.276,0,0,0-.38-2.936,3.828,3.828,0,0,0-2.317-.568h-2.24v7.68h1.63V50.87Zm-.866-3.4h.495a2.258,2.258,0,0,1,1.163.234.839.839,0,0,1,.376.779.931.931,0,0,1-.366.811,2.029,2.029,0,0,1-1.14.256h-.527Zm-8.335.554a1.727,1.727,0,0,1,1.466-.655q1.937,0,1.937,2.6t-1.951,2.588a1.71,1.71,0,0,1-1.461-.65,3.213,3.213,0,0,1-.49-1.937,3.28,3.28,0,0,1,.5-1.942m4.177-.989a3.5,3.5,0,0,0-2.707-1.017,3.548,3.548,0,0,0-2.716,1.012,4.121,4.121,0,0,0-.948,2.926,4.173,4.173,0,0,0,.948,2.94,4.1,4.1,0,0,0,5.422,0,4.156,4.156,0,0,0,.948-2.931,4.227,4.227,0,0,0-.948-2.931m-8.212-.3a3.248,3.248,0,0,0-2.125-.6H258.11v7.68h1.63V51.085h.7a3.327,3.327,0,0,0,2.2-.655,2.349,2.349,0,0,0,.774-1.9,2.189,2.189,0,0,0-.728-1.8m-2.949.733h.742a1.464,1.464,0,0,1,.98.275,1.058,1.058,0,0,1,.311.847,1.041,1.041,0,0,1-.371.866,1.79,1.79,0,0,1-1.127.3h-.536Z" transform="translate(-243.52 4.801)" fill="#fff"/>
</svg>

</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">
            
            <!-- start menu -->
            <?php foreach ($left_menu as $menu): ?>
              
            

            <!-- Heading -->
            <div class="sidebar-heading">
                <span><?php echo $menu["name"]; ?></span>
            </div>
            <div class="sidebar-heading-collapse" style="display: none;">
                <span><?php echo $menu["short_name"]; ?></span>
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <?php foreach ($left_menu_links as $menu_row): 
                if ($menu_row["submenu"]==$menu["id"]):
            ?>
            
            <li class="nav-item" style="margin-bottom: -8px; margin-top: -8px;">
                <a class="nav-link <?php echo $menu_row["class"]; ?>" href="<?php echo $menu_row["path"]; ?>">
                    <i class="fas fa-fw"><?php echo $menu_row["icon"]; ?></i>
                    <span><?php echo $menu_row["name"]; ?></span></a>
            </li>
            
            <li class="nav-item-collapse" style="display: none;">
                <a class="nav-link-collapse" href="<?php echo $menu_row["path"]; ?>">
                    <i class="fas fa-fw"><?php echo $menu_row["icon"]; ?></i>
                </a>
            </li>
            
          <?php endif; endforeach; endforeach; ?>
            <!-- end menu -->
            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0 fixed-bottom m-4" id="sidebarToggle"></button>
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

                    <!-- Topbar Searches -->
                    <div id="quick-search">
                      
                        <div id="4replace">
                        </div>
                  
                        
                      </div>
                        
                        <a class="nav-link pointer" id="filtered-search">
                          <span class="mr-2 d-none d-lg-inline">Advanced Search</span>
                        </a>
                        
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                
                        
                        <!-- Nav Item - ADD NEW -->
                        <li class="nav-item dropdown no-arrow add-new">
                            <a class="nav-link dropdown-toggle" href="/user" id="addNew" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <p class="mt-3 plus"></p>
                                <span class="mr-2 d-none d-lg-inline">Add new</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <?php foreach($add_menu as $menu): ?>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-sm fa-fw mr-2"><img src="<?php echo $menu["icon"]; ?>" /></i>
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
                                <span class="mr-2 d-none d-lg-inline small"><?php print $user->name; ?></span>
                                <div class="rounded-circle"><?php print $user_avatar; ?></div>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="/user">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/user/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                    
                </nav>
                <!-- End of Topbar -->
                <div id="search-field" style="display: none;">
                  <iframe target='_parent' scrolling="no" src="<?php echo $prefix; ?>/civicrm/contact/search/custom?csid=17&reset=1&iframe=1" style="width: 100%; height: 500px;"></iframe>
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php print render($page['content']); ?>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer 
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Josiahventure 2021</span>
                    </div>
                </div>
            </footer>
             End of Footer -->

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
    <script src="https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/test/vendor/jquery/jquery.min.js"></script>
    <script src="https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/test/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/test/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/test/js/sb-admin-2.js"></script>


    
    
<script>
// add quick search
$( document ).ready(function(){
    $("#4replace").replaceWith($("form[name=search_block]").get(0));  
    $("form[name=search_block] div").prepend('<input type="image" class="search-icon" src="<?php echo $prefix; ?>/sites/all/themes/josiahventuretheme/icon/bx-search-alt.svg">');
    $("#crm-qsearch-input").attr("placeholder", "Search...");
    $("head").append('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
});


</script>


<?php
}
} else {
print render($page['content']);
}
?>
             