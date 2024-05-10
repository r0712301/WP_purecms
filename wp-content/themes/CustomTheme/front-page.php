<?php acf_form_head(); ?>
<?php get_header();?>
<h1>Wordpress With custom code testing site</h1>
<?php
$argsMovie = array(  
    'post_type' => 'movie',
    'posts_per_page' => '99',
    'orderby' => 'title',
    'order' => 'ASC'
  );
  $movies = new WP_Query($argsMovie);

?>

<h2>Just created some filler content trying to understand what Wordpress and Custom themes are all about.</h2>

<?php get_footer();?>