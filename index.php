<?php

get_header(); 

?>

<section class="main-wrapper">
   
<?php
  while(have_posts()) {
    the_post(); ?>
<article class="article main-article_excerpt">
    <img src="./imgages/testbild.jpg" alt="" class="article-img">
     <a href="#" class="meta article-cat">Karma</a>
    <h1 class="article-headline">
        <?php the_title(); ?>
    </h1>
    <p class="article-body">
      <?php if(has_excerpt()) {
            echo get_the_excerpt();
          } else {
           echo wp_trim_words(get_the_content(), 18); 
          }?>
        <a href="<?php the_permalink(); ?>" class="meta article-btn">Mehr lesen</a>
    </p>
    <div class="meta-tag-box">
         <a href="#" class="meta article-tag">Chandrakirti</a>
         <a href="#" class="meta article-tag">Mulahmadyamikavatara</a>
    </div>
   
</article>
  <?php }
  echo paginate_links();
?>
</section>

<?php get_footer() ?>