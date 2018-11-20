<?php

  // Load northeastern conditional scripts
  function northeastern_conditional_scripts()
  {
      if (is_page('pagenamehere')) {
          wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
          wp_enqueue_script('scriptname'); // Enqueue it!
      }
  }

?>
