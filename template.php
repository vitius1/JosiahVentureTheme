<?php
function mycooltheme_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'mycooltheme') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'your_themename_preprocess_user_login'
  ),
 );
return $items;
}



function mycooltheme_preprocess_page (&$variables) {
        if ($variables['logged_in']) {
          $user = user_load($variables['user']->uid);
          if ($user->picture){
            $variables['user_avatar'] = theme_image_style(
              array(
                'style_name' => 'thumbnail',
                'path' =>$user->picture->uri,
                'attributes' => array(
                  	'class' => 'avatar'
                ),
                'width' => NULL,
                'height' => NULL,            
              )
            );
          } else {
            $variables['user_avatar'] =  '<a title="Profile" href=/user><img src="/sites/all/themes/my_theme/images/default.png" /></a>';
          }
        } else {
          $variables['user_avatar'] = '<img src="/sites/all/themes/my_theme/images/default.png" />';
        }
        $variables['left_menu_links'] = array(
          1 => array(
            'name' => "My Conversation",
            'path' => "http://localhost/drupal/drupal-7/civicrm",
            'icon' => "http://localhost/drupal/drupal-7/sites/all/themes/mycooltheme/icon/topic.png",
            'submenu' => "1",
            'permission' => "1"
          ),
          2 => array(
            'name' => "My Discipling Relationships",
            'path' => "http://localhost/drupal/drupal-7/civicrm",
            'icon' => "http://localhost/drupal/drupal-7/sites/all/themes/mycooltheme/icon/topic.png",
            'submenu' => "1",
            'permission' => "1"
          ),
          3 => array(
            'name' => "My Events & Programs",
            'path' => "http://localhost/drupal/drupal-7/civicrm",
            'icon' => "http://localhost/drupal/drupal-7/sites/all/themes/mycooltheme/icon/topic.png",
            'submenu' => "1",
            'permission' => "1"
          ),
          4 => array(
            'name' => "My Coaching",
            'path' => "http://localhost/drupal/drupal-7/civicrm",
            'icon' => "http://localhost/drupal/drupal-7/sites/all/themes/mycooltheme/icon/topic.png",
            'submenu' => "1",
            'permission' => "1"
          ),
          5 => array(
            'name' => "My People",
            'path' => "http://localhost/drupal/drupal-7/civicrm",
            'icon' => "http://localhost/drupal/drupal-7/sites/all/themes/mycooltheme/icon/topic.png",
            'submenu' => "2",
            'permission' => "1"
          ),
          6 => array(
            'name' => "My Churches",
            'path' => "http://localhost/drupal/drupal-7/civicrm",
            'icon' => "http://localhost/drupal/drupal-7/sites/all/themes/mycooltheme/icon/topic.png",
            'submenu' => "2",
            'permission' => "1"
          ),
          7 => array(
            'name' => "My Schools",
            'path' => "http://localhost/drupal/drupal-7/civicrm",
            'icon' => "http://localhost/drupal/drupal-7/sites/all/themes/mycooltheme/icon/topic.png",
            'submenu' => "2",
            'permission' => "1"
          ),
          8 => array(
            'name' => "My Dashboard",
            'path' => "http://localhost/drupal/drupal-7/civicrm",
            'icon' => "http://localhost/drupal/drupal-7/sites/all/themes/mycooltheme/icon/topic.png",
            'submenu' => "3",
            'permission' => "1"
          ),
          9 => array(
            'name' => "My Country",
            'path' => "http://localhost/drupal/drupal-7/civicrm",
            'icon' => "http://localhost/drupal/drupal-7/sites/all/themes/mycooltheme/icon/topic.png",
            'submenu' => "3",
            'permission' => "1"
          ),
          10 => array(
            'name' => "My Instructions",
            'path' => "http://localhost/drupal/drupal-7/civicrm",
            'icon' => "http://localhost/drupal/drupal-7/sites/all/themes/mycooltheme/icon/topic.png",
            'submenu' => "3",
            'permission' => "1"
          ),
        );
        
        $variables['left_menu'] = array(
          1 => array(
            'id' => 1,
            'name' => "MY MINISTRY",
          ),
          2 => array(
            'id' => 2,
            'name' => "MY CONTACTS",
          ),
          3 => array(
            'id' => 3,
            'name' => "OVERVIEW",
          )
        );
        
        $variables['add_menu'] = array(
          1 => array(
            'name' => "Contact",
            'icon' => "https://img.icons8.com/ios-glyphs/16/000000/family-two-men.png"
          ),
          2 => array(
            'name' => "Group",
            'icon' => "https://img.icons8.com/ios-glyphs/16/000000/family-two-men.png"
          ),
          3 => array(
            'name' => "Event",
            'icon' => "https://img.icons8.com/ios-glyphs/16/000000/family-two-men.png"
          ),
          4 => array(
            'name' => "Activity",
            'icon' => "https://img.icons8.com/ios-glyphs/16/000000/family-two-men.png"
          )
        );
}

?>