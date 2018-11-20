<?php

  // Northeastern Blank navigation
  function northeastern_nav()
  {
    wp_nav_menu(
    array(
      'theme_location'  => 'header-menu',
      'menu'            => '',
      'container'       => 'div',
      'container_class' => 'menu-{menu slug}-container',
      'container_id'    => '',
      'menu_class'      => 'menu',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul>%3$s</ul>',
      'depth'           => 0,
      'walker'          => ''
      )
    );
  }

  // Register northeastern Navigation
  function register_northeastern_menu()
  {
      register_nav_menus(array( // Using array to specify more menus if needed
          'header-menu' => __('Header Menu', 'northeastern'), // Main Navigation
          'sidebar-menu' => __('Sidebar Menu', 'northeastern'), // Sidebar Navigation
          'extra-menu' => __('Extra Menu', 'northeastern') // Extra Navigation if needed (duplicate as many as you need!)
      ));
  }

  // Remove the <div> surrounding the dynamic navigation to cleanup markup
  function my_wp_nav_menu_args($args = '')
  {
      $args['container'] = false;
      return $args;
  }

  // Remove Injected classes, ID's and Page ID's from Navigation <li> items
  function my_css_attributes_filter($var)
  {
      return is_array($var) ? array() : '';
  }

?>
