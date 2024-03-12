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
   
    <?php acf_form(array(
        'post_id'       => 'new_post',
        'id' => 'review-actor',
        'new_post'      => array(
            'post_type'     => 'review',
            'post_status'   => 'draft'
        ),
        'submit_value'  => 'Create new event'));
     ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer();?>