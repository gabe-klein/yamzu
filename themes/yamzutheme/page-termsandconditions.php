<?php

// Template name: Terms and Conditions Page

get_header(); ?>
<?php get_template_part( 'template-parts/navigation', 'regular' ); ?>
<?php get_template_part( 'template-parts/documents', 'download' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div id="particles-js"></div>
	<div class="terms-conditions-wrapper">
		<div class="row">
			<div class="columns small-12">
				<h2><?php the_field('terms_and_conditions_title'); ?></h2>
				<div class="terms-conditions-text-box">
					<?php the_field('terms_and_conditions'); ?>
				</div>
				<div class="accept-terms">
					<input id="terms-box" name="terms-box" type="checkbox" value="accept" />
					<label for="terms-box"><?php the_field('terms_and_conditions_acceptance_text'); ?></label>
				</div>
				<div class="terms-button-wrapper">
					<a class="button full-width-button accept-button disabled-default" href="<?php the_field('payment_form_link'); ?>"><?php the_field('link_text'); ?></a>
				</div>
			</div>
		</div>
	</div>

	<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>