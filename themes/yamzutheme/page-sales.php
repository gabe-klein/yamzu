<?php 

// Template name: Sales Landing Page

get_header(); ?>
  <?php get_template_part( 'template-parts/navigation', 'regular' ); ?>
  <?php get_template_part( 'template-parts/documents', 'download' ); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div id="particles-js"></div>
        <div class="row">
          <div class="columns small-12">
            <div class="sales-page-container">
              <h1><?php the_field('sales_title'); ?></h1>
              <div class="sales-buttons-container">
                <a target="_blank" class="button full-width-button" href="<?php the_field('eth_button_link'); ?>"><?php the_field('eth_button_text'); ?></a>
                <a class="button full-width-button" href="<?php the_field('other_payment_link'); ?>"><?php the_field('other_payment_text'); ?></a>
              </div>
            </div>
          </div>
        </div>

      <?php endwhile; else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>