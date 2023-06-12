<?php  

// Add this to your theme's functions.php file
function enqueue_ajax_search_scripts() {
  wp_enqueue_script('ajax-search', get_template_directory_uri() . '/js/ajax-search.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_search_scripts');

function ajax_search_handler() {
  $search_query = sanitize_text_field($_POST['search_query']);

  $args = array(
    'post_type' => 'any', // Search all post types ir use array for multiple custom post type array('resource', 'news', 'events')
    'post_status' => 'publish',
    's' => $search_query,
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      // Display search results, customise this with your choice of the layout ex. card layout from bootstrap
      echo '<div class="card">';
      echo '<div class="card-body">';
      echo '<h2 class="card-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
      echo '<p class="card-text">' . get_the_excerpt() . '</p>';
      echo '</div>';
      echo '</div>';
    }
  } else {
    echo '<p>No results found.</p>';
  }

  wp_reset_postdata();

  die();
}
add_action('wp_ajax_ajax_search', 'ajax_search_handler');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search_handler');


?>
