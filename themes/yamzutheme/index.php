<?php get_header(); ?>
	<?php get_template_part( 'template-parts/navigation', 'regular' ); ?>
	<?php get_template_part( 'template-parts/documents', 'download' ); ?>

	<main class="post-index">
        <div class="row">
          <div class="small-12 columns">
            <h2 class="page-title text-center wow fadeIn" data-wow-duration="1s">Blog</h2>
          </div>
        </div>

          <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1
            );

            $posts = new WP_Query($args);
         
            if( $posts->have_posts() ): ?>

              <div class="row">

              <?php $post_counter = 0; ?>

              <?php while( $posts->have_posts() ) : $posts->the_post(); ?>

                

                <?php if($post_counter %3 == 0) : ?>
                  </div>
                  <div class="row">
                <?php endif; ?>
            
            <div class="small-12 medium-4 columns">
              <article class="blog-preview">
              <div class="article-header">
                <a href="<?php the_permalink(); ?>">
                  <div class="blog-featured-image" style="background-image: url(<?php echo the_post_thumbnail_url('medium'); ?>)"></div>
                </a>
                <div class="blog-title-container">
                  <a href="<?php the_permalink(); ?>"><h4 class="blog-preview-title"><?php the_title(); ?></h4></a>
                </div>
                </div>
                <main class="blog-preview-excerpt">
                <p><?php the_excerpt(); ?></p>
                </main>
              </article>
            </div>
              <?php $post_counter++; ?>
       
              <?php endwhile; ?>

            </div>

          <?php endif; ?>

          <?php wp_reset_query(); ?>

      </main>

<?php get_footer(); ?>