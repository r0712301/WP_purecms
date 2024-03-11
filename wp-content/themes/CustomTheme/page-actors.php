<?php get_header();
?>

<div class="blog-header">
            <h1 class="blog-title">Actors</h1>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
<?php
$curentPage = get_query_var('paged');
$args = array(  
    'post_type' => 'actor',
    'posts_per_page' => '9',
    'paged' => $curentPage,
    'orderby' => 'title',
    'order' => 'ASC'
);

$loop = new WP_Query($args);

if($loop->have_posts()): 

    while ($loop->have_posts()) : $loop->the_post();

    $f_name = get_field('first_name');
    $l_name = get_field('last_name');
    $full_name = $f_name ." ". $l_name;
    $p_picture = get_field('profile_picture');
    $actor_movies = get_field('actor_movie');
?>

<div class="col">
  <div class="card h-100">
    <img src="<?php echo esc_url($p_picture['url']) ?>" class="card-img-top h-auto w-75 align-self-center" alt="thumbnail of <?php echo $full_name ?>">
    <div class="card-body">
      <h5 class="card-title"><?php echo $full_name ?></h5>
      <a href="<?php the_permalink() ?>" class="btn btn-primary">Go to actor</a>
    </div>
  </div>
</div>
<?php 
endwhile;
wp_reset_postdata(); // Reset post data after the actors loop
endif;?>
</div>
<?php $links = paginate_links(array(
        'total' => $loop->max_num_pages
    ));
    
 
echo "<hr>";

    $navigationElements = explode(">\n<", $links);
   
    if(count($navigationElements) > 2){
        for($i = 0, $size = count($navigationElements); $i < $size; ++$i):
          if($size == 0){
            break;
          } 
          elseif($i == 0 && $size > 0){
                $navigationElements[$i] .= ">";
            }
            elseif($i > 0 && $i+1 < $size){
                $new_item = "<". $navigationElements[$i] . ">";
                $navigationElements[$i] = $new_item;
            }
            elseif($size = $i+1 ){
                $new_item = "<". $navigationElements[$i];
                $navigationElements[$i] = $new_item;
            }
        endfor;
    foreach($navigationElements as $element):
        if(str_contains($element, "span")):
    ?>
  <button class="btn btn-primary text-white" disabled><?php echo $element?></button>
  <?php else:?>
    <button class="btn btn-primary text-white"><?php echo $element?></button>
    <?php
  endif;?>
  
  <?php endforeach;
    }
?>
</div>

<?php get_footer();?>