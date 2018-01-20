<u>
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    
</u>

<?php



  while(have_posts()) {
     the_post(); ?>
     <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
     <p><?php the_content(); ?></p>
     
  <?php }
 
?>

