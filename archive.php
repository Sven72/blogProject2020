<?php

get_header(); 

?>

<section class="main-wrapper">
   
<?php
  while(have_posts()) {
    the_post(); ?>
<article class="article main-article_excerpt">
    <!-- <img src="./imgages/testbild.jpg" alt="" class="article-img"> -->

    <?php if ( has_post_thumbnail() ) : ?>
    <a class="hero-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>

   
     
     
     <!-- Meta Box gestalten  -->
      <div class="metabox">
      <p class="article-cat"><?php echo get_the_category_list(', '); ?></p>
        <p>Post von <?php the_author_posts_link(); ?> am <?php the_time('j.n.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
      </div>

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
         <a href="#" class="meta article-tag"> XX</a>
         <a href="#" class="meta article-tag">Mulahmadyamikavatara</a>
    </div>
   
</article>
  <?php }
  echo paginate_links();
?>
</section>

<?php get_footer() ?>