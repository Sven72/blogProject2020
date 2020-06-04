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

  <div class="metabox">
      <p class="article-cat"><?php echo get_the_category_list(', '); ?></p>
        <p>Post von <?php the_author_posts_link(); ?> am <?php the_time('j.n.y'); ?></p>
        <a href="https://github.com/Sven72"><i class="fab fa-github"></i></a>
    </div>
    
    <h1 class="article-headline">
            <?php the_title() ?>
    </h1>
    <p class="article-body">
        <?php the_content(); ?>
    </p>
      <div class="meta-tag-box">
        <ul class="nice-tags">
        <!-- Hier die <li> in <p> ändern, damit es die Einrückung nicht gibt -->
            <!-- <?php the_tags('<li>', '</li> <li>', '</li>' ); ?> -->
            <?php the_tags('<p>', '</p> <p>', '</p>' ); ?>
        </ul>   
     </div>

<?php 

 $comments = get_comments();

if ( have_comments() ) : ?>
    <h3 id="comments-title"><?php
        printf(
            _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'twentyten' ),
            number_format_i18n( get_comments_number() ),
            '<em>' . get_the_title() . '</em>'
        );
    ?></h3>
// [and more, of course...]
<?php else : // or, if we don't have comments:
    if ( ! comments_open() ) : ?>
        <p class="nocomments"><?php _e( 'Comments are closed.', 'twentyten' ); ?></p>
    <?php endif; // end ! comments_open() ?>
<?php endif; // end have_comments() ?>

      <div class="comments" style="margin-top: 100px">
         <?php
    if(comments_open() ):
        comments_template();
    endif;
    ?>
    </div>


   
</article>
    </section>
  

 
    <?php }
    
    get_footer() 
    ?>