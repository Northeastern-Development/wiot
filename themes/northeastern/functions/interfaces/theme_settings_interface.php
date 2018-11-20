<?php

  // this is the include file to hold the HTML for the theme settings view

?>

<div class="wrap">
  <?php settings_errors(); ?>
  <h1>Northeastern Theme Settings</h1><br>

  <form action="options.php" method="post">
    <?php
      settings_fields( 'nutheme-settings' );
      do_settings_sections( 'nutheme_admin_page' );
    ?>
    <h3>Site Logo</h3>
    <p>Copy, and then paste the SVG code for your site logo into this field.  Will appear in both the site header as well as smaller in the site footer.</p>
    <textarea rows="10" cols="100" placeholder="SVG Code" name="theme_settings_logosvg"><?=(get_option('theme_settings_logosvg') != ''?get_option('theme_settings_logosvg'):'')?></textarea><br />
    <br />
    <hr />
    <h3>Color Option</h3>
    <p>Select which color option you would like your site to use: Dark (default) or light.</p>
    <select name="theme_settings_coloroption">
      <option value="dark">Dark (Default)</option>
      <!-- <option value="light">Light</option> -->
    </select><br />
    <br />
    <hr />
    <p>Click the button below to save your changes.</p>
    <?php submit_button(); ?>
    <hr />
    <h2>Brand Guide</h2>
    <div id="nu_settings-help">
      For more information on the university brand system and it use, please visit the <a href="https://brand.northeastern.edu" title="Northeastern University Brand System" target="_blank">online brand site</a>.
    </div>
    <br />
    <h2>Need Help?</h2>
    <div id="nu_settings-help">
      If you need help or something isn't working please <a href="mailto:nudev@northeastern.edu?subject=NU Theme Settings Help">contact us</a>.
    </div>
  </form>
</div>
