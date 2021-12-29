<?php
function josiahventuretheme_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'josiahventuretheme') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'your_themename_preprocess_user_login'
  ),
 );
return $items;
}



function josiahventuretheme_preprocess_page (&$variables) {
        $prefix = "/drupal/drupal-7";
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
            $variables['user_avatar'] = '<img class="avatar" src="/sites/all/themes/josiahventuretheme/images/default.jpg" />';
          }
        } else {
          $variables['user_avatar'] = '<img class="avatar" src="/sites/all/themes/josiahventuretheme/images/default.jpg" />';
        }
        
        $variables['prefix'] = $prefix;
        $variables['left_menu_links'] = array(
          1 => array(
            'name' => "My Conversation",
            'path' => $prefix."/civicrm",
            'icon' => '<svg id="Group_8" data-name="Group 8" xmlns="http://www.w3.org/2000/svg" width="17.728" height="16.545" viewBox="0 0 17.728 16.545">
  <g id="noun_chat_3548615">
    <path id="Path_5" data-name="Path 5" d="M34.178,22H25.315a3.545,3.545,0,0,0-3.545,3.545v8.719l-1.253,1.253a1.773,1.773,0,0,0,1.253,3.028H34.178A3.545,3.545,0,0,0,37.723,35V25.545A3.545,3.545,0,0,0,34.178,22Zm1.773,13a1.773,1.773,0,0,1-1.773,1.773H21.769L23.542,35V25.545a1.773,1.773,0,0,1,1.773-1.773h8.863a1.773,1.773,0,0,1,1.773,1.773Z" transform="translate(-19.995 -22)" fill="#bcb5d0"/>
  </g>
  <path id="Shape_path" data-name="Shape path" d="M0,0H2.625V1.75H0Z" transform="translate(6.24 10.896)" fill="#bcb5d0"/>
  <path id="Shape_path-2" data-name="Shape path" d="M0,0H7.175V1.75H0Z" transform="translate(6.24 7.398)" fill="#bcb5d0"/>
  <path id="Shape_path-3" data-name="Shape path" d="M0,0H7.175V1.75H0Z" transform="translate(6.24 3.904)" fill="#bcb5d0"/>
</svg>
', 
            'submenu' => "1",
            'permission' => "1",
            'class' => "link_conversation"
          ),
          /* 2 => array(
            'name' => "My Discipling Relationships",
            'path' => $prefix."/civicrm",
            'icon' => "https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/icon/topic.png",
            'submenu' => "1",
            'permission' => "1"
          ),
          */
          3 => array(
            'name' => "My Events & Programs",
            'path' => $prefix."/civicrm",
            'icon' => '<svg id="bx-calendar" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <rect id="Background" width="20" height="20" fill="none"/>
  <path id="Shape" d="M8.333,5H6.666V3.334H8.333V5ZM5,5H3.334V3.334H5V5ZM1.667,5H0V3.334H1.667V5ZM8.333,1.667H6.666V0H8.333V1.666ZM5,1.667H3.334V0H5V1.666Zm-3.334,0H0V0H1.667V1.666Z" transform="translate(5.833 9.167)" fill="#bcb5d0"/>
  <path id="Shape-2" data-name="Shape" d="M13.333,16.667H1.667A1.669,1.669,0,0,1,0,15V3.334A1.669,1.669,0,0,1,1.667,1.667H3.334V0H5V1.667h5V0h1.667V1.667h1.667A1.669,1.669,0,0,1,15,3.334V15A1.669,1.669,0,0,1,13.333,16.667ZM1.667,5V15H13.334V5Z" transform="translate(2.5 1.667)" fill="#bcb5d0"/>
</svg>',
            'submenu' => "1",
            'permission' => "1",
            'class' => "link_events"
          ),
          /*
          4 => array(
            'name' => "My Coaching",
            'path' => $prefix."/civicrm",
            'icon' => "https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/icon/topic.png",
            'submenu' => "1",
            'permission' => "1"
          ),
          */
          5 => array(
            'name' => "My People",
            'path' => $prefix."/civicrm/contact/search/custom?csid=17&reset=1&group=my_people&force=1",
            'icon' => '<svg id="bxs-user-detail" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <rect id="Background" width="20" height="20" fill="none"/>
  <path id="Shape" d="M10,11.667H0v-.833A4.172,4.172,0,0,1,4.167,6.666H5.833A4.172,4.172,0,0,1,10,10.833v.832ZM16.667,10h-5V8.333h5V10Zm0-3.334H10.833V5h5.834V6.665ZM5,5.833A2.852,2.852,0,0,1,2.083,2.917,2.853,2.853,0,0,1,5,0,2.852,2.852,0,0,1,7.916,2.917,2.852,2.852,0,0,1,5,5.833Zm11.667-2.5H10V1.667h6.667V3.333Z" transform="translate(1.667 4.167)" fill="#bcb5d0"/>
</svg>',
            'submenu' => "2",
            'permission' => "1",
            'class' => "link_my_people"
          ),
          6 => array(
            'name' => "My Churches",
            'path' => $prefix."/civicrm",
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20.208" height="21.098" viewBox="0 0 20.208 21.098">
  <path id="noun_Church_3489988-2" d="M32.143,27.549,27.67,26.067V23.292a.846.846,0,0,0-.539-.781L23.44,21.028V17.741H25.11V16.071H23.44V14.4H21.769v1.671H20.1v1.671h1.671v3.287L18.078,22.51a.846.846,0,0,0-.539.781V26.04l-4.473,1.482a.818.818,0,0,0-.566.808v6.332a.839.839,0,0,0,.835.835H31.873a.839.839,0,0,0,.835-.835V28.33A.843.843,0,0,0,32.143,27.549ZM14.2,28.95l3.368-1.132v6.009H14.2Zm5.039-2.29v-2.8L22.6,22.51l3.368,1.347v9.97H23.44v-5.47a.835.835,0,0,0-1.671,0V33.8H19.236Zm11.775,7.167H27.67V27.818l3.368,1.132v4.877Z" transform="translate(-12.5 -14.4)" fill="#bcb5d0"/>
</svg>',
            'submenu' => "2",
            'permission' => "1",
            'class' => "link_my_churches"
          ),
          /*
          7 => array(
            'name' => "My Schools",
            'path' => $prefix."/civicrm",
            'icon' => "https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/icon/topic.png",
            'submenu' => "2",
            'permission' => "1"
          ),
          8 => array(
            'name' => "My Dashboard",
            'path' => $prefix."/civicrm",
            'icon' => "https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/icon/topic.png",
            'submenu' => "3",
            'permission' => "1"
          ),
          9 => array(
            'name' => "My Country",
            'path' => $prefix."/civicrm",
            'icon' => "https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/icon/topic.png",
            'submenu' => "3",
            'permission' => "1"
          ),
          10 => array(
            'name' => "My Instructions",
            'path' => $prefix."/civicrm",
            'icon' => "https://mvp1portal.josiahventure.com/sites/all/themes/josiahventuretheme/icon/topic.png",
            'submenu' => "3",
            'permission' => "1"
          ),
          */
        );
        
        $variables['left_menu'] = array(
          1 => array(
            'id' => 1,
            'name' => "MY MINISTRY",
            'short_name' => "MINISTRY",
          ),
          2 => array(
            'id' => 2,
            'name' => "MY CONTACTS",
            'short_name' => "CONTACTS",
          ),
          /*
          3 => array(
            'id' => 3,
            'name' => "OVERVIEW",
            'short_name' => "OVERVIEW",
          )
          */
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