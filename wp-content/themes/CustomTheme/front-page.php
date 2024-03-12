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

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
   
    <?php acfe_form('review-actor'); ?>

    </div><!-- #content -->
</div><!-- #primary -->
</div>
<?php get_footer();?>