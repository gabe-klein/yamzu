<?php get_header(); ?>
	<?php get_template_part( 'template-parts/navigation', 'regular' ); ?>
	<?php get_template_part( 'template-parts/documents', 'download' ); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php $social = get_field('team_member_social_platform'); ?>

		    <article class="team-single">
		        <div class="row">
		          <div class="columns small-12 medium-3">
		            <div class="team-header">
		              <div class="team-image">
		                <img src="<?php the_field('team_member_photo'); ?>" alt="<?php the_title(); ?>" />
		              </div>
		              <div class="team-social-link">
		                <a target="_blank" href="<?php echo $social['team_social_link']; ?>" class="team-social-button">
							<i class="fab fa-<?php echo $social['team_social_name']; ?>"></i>
						</a>
		              </div>
		            </div>
		          </div>

		          <div class="columns small-12 medium-9">
		            <div class="team-bio">
		              <h1 class="team-name"><?php the_title(); ?></h1>
		              <h4 class="team-category"><span class="team-title"><?php the_field('team_member_role'); ?></span></h4>
		              <?php the_content(); ?>
		            </div>
		          </div>

		        </div>
	      </article>

      <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>