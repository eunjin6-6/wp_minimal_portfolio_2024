<?php get_header( 'portfolio' ) ?>
  
  <div class="container latest_portfolio">            
    <div class="row list">
    <?php
      query_posts( array(
        'category_name'  => 'minimal-portfolio',
        'posts_per_page' => 3
      ) );

      // The Loop
      while ( have_posts() ) : the_post();
    ?>

    <div class="col-md-4">
        <div class="contents shadow">
            <?php
              if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'full' );
              }
            ?>
            <div class="hover_contents">
                <div class="list_info">
                    <h3>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
                      <img src="<?= IMAGES ?>/portfolio_list_arrow.png" alt="list arrow">
                    </h3>
                    <p><a href="<?php the_permalink(); ?>">Click to see project</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php 
      endwhile;

      // Reset Query
      wp_reset_query();
    ?>
    </div>
    <p class="pagenation shadow">
        <a href="" class="secondary-btn active">1</a>      
        <a href="" class="secondary-btn">2</a>      
        <a href="" class="secondary-btn">3</a>      
        <a href="" class="secondary-btn">4</a>      
    </p>
  </div>

<?php get_footer() ?>