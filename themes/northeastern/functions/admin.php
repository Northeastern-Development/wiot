<?php

  // Remove Admin bar
  function remove_admin_bar()
  {
      return false;
  }

  function my_login_logo() { ?>
      <style type="text/css">
          body.login div#login h1 a {
              background-image: url(<?php echo get_template_directory_uri(); ?>/_ui/logo.svg);
              width:302px;
              background-size: 302px 63px;
            	height: 63px;
          }
          body.login #login_error, .login .message {
              border-left: 4px solid rgba(204, 0, 0, 1.0) !important;
          }
          body.login #backtoblog a, .login #nav a {
              color:rgba(51, 62, 71, 1.0) !important;
          }
          body.login #backtoblog a:hover, .login #nav a:hover {
              color:rgba(204, 0, 0, 1.0) !important;
          }
           .wp-core-ui .button-primary {
              background:rgba(204, 0, 0, 1.0) !important;
              border-color:rgba(0, 0, 0, 1.0) !important;
              text-shadow: none !important;
          }
          body.login label {
              color:rgba(51, 62, 71, 1.0) !important;
          }
      </style>
  <?php }


  function my_login_logo_url() {
      return home_url();
  }


  function my_login_logo_url_title() {
      return 'Site Name Here';
  }

?>
