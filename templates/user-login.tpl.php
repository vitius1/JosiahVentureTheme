<script src="https://code.jquery.com/jquery-3.5.1.slim.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<style>
body {
  background: black;
  background: url("https://crm.kam.cz/sites/default/files/civicrm/ext/cz.kam.extranet/images/background.JPG") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#navbar, .col-sm-3, #block-system-powered-by, .footer, .tabs--primary, .page-header, .breadcrumb {
  display: none;
}

.main-container {
  width: 100%; margin: 0; padding: 0;
}

.col-sm-9, .row, .col-sm-12 {
  width: 100% !important; 
  margin: 0 !important; 
  padding: 0 !important; 
  

  display: flex; 
  justify-content: center;
}

.region-content {
  margin-top: 80px;
  max-width: 300px;
}



.control-label {
  color: #ffffff !important;
  font-size: 14px !important;
  font-family: Open Sans !important;
  font-weight: 400;
}

#edit-submit {
  background: #dd3333; 
  width: 250px !important; 
  margin-left: 25px;
  border-color: black;
  height: 40px;
  font-size: 19.5px;
  margin-top: 15px;
  font-family: 'Roboto', sans-serif;
  color: #F5F5F5 !important;
}

#edit-submit:hover {
  background: #B22222;
}

#edit-submit-google {
  background: url("https://crmb.kam.cz/img/google2.png")no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  width: 250px;
  margin-left: 25px;
  height: 40px;
  background-position: center center;
  border: 1px black solid;
}

#edit-submit-google:hover {
  background: url("https://crmb.kam.cz/img/google1.png")no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: center center;
}

.nebo {
  text-align: center;
  font-size: 14px;
  color: white;
  margin-bottom: 5px;
  margin-top: -10px;
  font-family: 'Roboto', sans-serif;
}

.forgot-password {
  float: right;
  color: #C0C0C0;
  margin-top: 4px;
  cursor: pointer;
}

.kam-logo {
  max-width: 150px;
  display: inline-block; 
  margin: auto;
  transform: translate(-20%, 0%);
}
</style>
<div style="display: flex; margin: auto; margin-bottom: 20px;">
<img class="kam-logo" src="https://crm.kam.cz/sites/default/files/civicrm/ext/cz.kam.extranet/images/logo2.png" style="" alt="logo">
<div style="text-align: center; color: white; display: inline-block; transform: translate(-40%, 45%); font-size: 20px;">CIVICRM</div>
</div>
<?php print drupal_render_children($form) ?>

<script>

$( document ).ready(function(){
  $("#edit-actions").after("<div class='nebo'>nebo</div>");
  $("#edit-pass").after("<a class='forgot-password' href='https://crmb.kam.cz/user/password'>Zapomněli jste heslo?</a>");
});
</script>
