<?php

  // Custom View Article link to Post
  function northeastern_blank_view_article($more)
  {
      global $post;
      return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'northeastern') . '</a>';
  }

  // set the colors of posts based on published status
  function posts_status_color(){
  ?>
  <style>
  .status-draft .check-column {box-shadow: -12px 0 0 -3px rgba(237, 86, 68, 1.0) !important;}
  .status-pending .check-column {box-shadow: -12px 0 0 -3px rgba(235, 138, 35, 1.0) !important;}
  .status-publish .check-column {box-shadow: -12px 0 0 -3px rgba(81, 248, 0, 1.0) !important;}
  .status-future .check-column {box-shadow: -12px 0 0 -3px #ffffff !important;}
  .status-private .check-column {box-shadow: -12px 0 0 -3px #000000 !important;}
  .active .check-column {border-left:4px solid rgba(81, 248, 0, 1.0) !important;}
  .inactive .check-column {border-left:4px solid rgba(100, 100, 100, .3) !important;}
  </style>
  <?php
  }

  // Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
  function northeasternwp_pagination()
  {
      global $wp_query;
      $big = 999999999;
      echo paginate_links(array(
          'base' => str_replace($big, '%#%', get_pagenum_link($big)),
          'format' => '?paged=%#%',
          'current' => max(1, get_query_var('paged')),
          'total' => $wp_query->max_num_pages
      ));
  }

?>
