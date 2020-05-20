    <?php 
    
    get_header();
    ?>
     
    <section class="main-wrapper">
<?php 
      while(have_posts()) {
    the_post(); ?>
    
<article class="article main-article_single">
  
    <?php
if ( has_post_thumbnail() ) { 
the_post_thumbnail( 'full' );
}
?>
    
    <h1 class="article-headline">
            <?php the_title() ?>
    </h1>
    <p class="article-body">
        <?php the_content(); ?>
    </p>
      <div class="meta-tag-box">
        <ul class="nice-tags">
            <?php the_tags('<li>', '</li><li>', '</li>' ); ?>
        </ul>
    </div>
   
  
      
</article>
    </section>
  
    <?php }
    
    get_footer() 
    ?>