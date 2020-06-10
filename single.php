   <?php 
    
    get_header();
    ?>
     
    <section class="main-wrapper">

<?php 
      while(have_posts()) {
    the_post(); 
    
 
    ?>

 
<article class="article main-article_single">
<?php the_post_thumbnail( array(700, 700)); ?>
  <div class="metabox">
      <p class="article-cat"><?php echo get_the_category_list(', '); ?></p>
        <p>Post von <?php the_author_posts_link(); ?> am <?php the_time('j.n.y'); ?></p>
        <a href="https://github.com/Sven72"><i class="fab fa-github"></i></a>
    </div>
    
    <h1 class="article-headline">
            <?php the_title() ?>
    </h1>
    <p class="article-body">
    <!-- Rendert auch images?! -->
        <?php the_content(); 
          ?>
    </p>
      <div class="meta-tag-box">
        <ul class="nice-tags">
        <!-- Hier die <li> in <p> ändern, damit es die Einrückung nicht gibt -->
            <!-- <?php the_tags('<li>', '</li> <li>', '</li>' ); ?> -->
            <?php the_tags('<p>', '</p> <p>', '</p>' ); ?>
        </ul>   
     </div>


    </div>

   
</article>

    </section>
  

 
    <?php }
    
    get_footer() 
    ?>

  