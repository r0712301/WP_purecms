<?php get_header();?>
<div class="blog-header">
            <h1 class="blog-title">Genres</h1>
    </div>
    <div class="container">
        <div class="row card-deck">
<?php

$terms = get_terms( array(
    'taxonomy'   => 'genre',
    'hide_empty' => false,
) );

if (!empty($terms)):
    foreach($terms as $term){
?>

<article class="col-sm-6 col-lg-4">
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $term->name ?></h5>
    
    <a href="/genre/<?php echo $term->name ?>" class="card-link">Naar <?php echo $term->name ?></a>
  </div>
</div>
</article>
<?php 
}
endif;
?>
</div><!-- ./container -->
</div><!-- ./row card-deck -->
<?php get_footer();?>