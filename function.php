
// ajout title
<?php
function ajout_titre() {
  add_theme_support('title_tag');

}
add_action('after_setup_theme','ajout_titre');

function ajout_style() {
  wp_enqueue_style('general',get_template_directory_uri().'css/theme.css');
  wp_enqueue_script('special',get_template_directory_uri().'js/script.js');
}
add_action('wp_enqueue_script','ajout_style');
?>
