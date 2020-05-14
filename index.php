<?php

get_header(); 

?>

<section class="main-wrapper">
   
<?php
  while(have_posts()) {
    the_post(); ?>
<article class="article main-article_excerpt">
    

    <?php if ( has_post_thumbnail() ) : ?>
    <!--  -->
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>
     
      <div class="metabox">
      <p class="article-cat"><?php echo get_the_category_list(', '); ?></p>
        <p>Post von <?php the_author_posts_link(); ?> am <?php the_time('j.n.y'); ?></p>
        <a href="https://github.com/Sven72"><i class="fab fa-github"></i></a>
      </div>

    <h1 class="article-headline">
       <a href="<?php the_permalink(); ?>" > <?php the_title(); ?> </a>
    </h1>
    <p class="article-body">
      <?php if(has_excerpt()) {
            echo get_the_excerpt();
          } else {
           echo wp_trim_words(get_the_content(), 18); 
          }?>
      
    </p>
      <a href="<?php the_permalink(); ?>" class="meta article-btn">Mehr lesen</a>
    <div class="meta-tag-box">
        <ul class="nice-tags"><?php the_tags('<li>', '</li><li>', '</li>' ); ?></ul>
    </div>
   
</article>


</section>
<!-- Hat eine eigene klasse: page-numbers -->
  <?php }
  echo paginate_links();
?>
</div>
       


<?php get_footer() ?>