<?php get_header(); ?>
  <?php get_template_part( 'template-parts/navigation', 'regular' ); ?>
  <?php get_template_part( 'template-parts/documents', 'download' ); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="blog-post">
        <div class="row">
          <div class="columns small-12">
            
            <div class="blog-post-header">
              <h1 class="blog-post-heading"><?php the_title(); ?></h1>
              <div class="featured-image-container">
                <?php the_post_thumbnail('full'); ?>
              </div>
            </div>

            <main class="blog-post-body">
              <?php the_content(); ?>
            </main>

          </div>
        </div>
      </article>

      <?php endwhile; else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>