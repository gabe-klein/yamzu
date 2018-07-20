<?php

// Template name: Payment Form Page

get_header(); ?>
<?php get_template_part( 'template-parts/navigation', 'regular' ); ?>
<?php get_template_part( 'template-parts/documents', 'download' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="terms-conditions-wrapper">
		<div class="row">
			<div class="columns small-12">
				<h2><?php the_field('terms_and_conditions_title'); ?></h2>
				<div class="terms-conditions-text-box">
					<?php the_field('terms_and_conditions'); ?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="payment-form-wrapper">
		<div class="row">
			<div class="columns small-12">
				<h2><?php the_field('payment_instruction_title'); ?></h2>

				<main>
					<?php the_field('payment_instruction_form'); ?>
				</main>

			</div>
		</div>
	</div>

	<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>