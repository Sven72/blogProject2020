    <?php 
    
    get_header();
    ?>
     
    <section class="main-wrapper">
<?php 
      while(have_posts()) {
    the_post(); ?>
    
<article class="article main-article_single">
            <!-- <img src="./img/testbild.jpg" alt="" class="article-img"> -->
              <?php if ( has_post_thumbnail() ) : ?>
    <a class="hero-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    
<?php endif; ?>
            <a href="#" class="article-cat">Karma</a>
            <h1 class="article-headline">
                <?php the_title() ?>
            </h1>
            <p class="article-body">
                <?php the_content(); ?>
            </p>
           
          <div class="meta-tag-box">
                <a href="#" class="article-meta-box-tag">Chandrakirti</a>
                <a href="#" class="article-meta-box-tag">Mulahmadyamikavatara</a>
          </div>
        </article>
    </section>
  
    <?php }
    
    get_footer() 
    ?>