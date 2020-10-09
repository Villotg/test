
// ajout title
<?php
function ajout_titre() {
  add_theme_support('title_tag');

}
add_action('after_setup_theme','ajout_titre');?>
