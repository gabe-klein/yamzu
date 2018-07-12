<?php get_header(); ?>
	<?php get_template_part( 'template-parts/navigation', 'regular' ); ?>
	<?php get_template_part( 'template-parts/documents', 'download' ); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php 

			$social = get_field('team_member_social_platform'); 
			$prev_team_member = get_adjacent_post(false, '', false);
			$next_team_member = get_adjacent_post(false, '', true);


			?>


			<div class="team-single-flex-wrapper">
				<div class="team-member-nav-container">
					<div class="prev-team-member-link">
						<?php if ($prev_team_member) : ?>
							<a href="<?php echo get_permalink($prev_team_member); ?>">
								<i class="fas fa-arrow-left"></i>
							</a>
						<?php endif; ?>
					</div>
				</div>
			    <article class="team-single">
			        <div class="row">
			          <div class="columns small-12 large-4">
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

			          <div class="columns small-12 large-8">
			            <div class="team-bio">
			              <h1 class="team-name"><?php the_title(); ?></h1>
			              <h4 class="team-category"><span class="team-title"><?php the_field('team_member_role'); ?></span></h4>
			              <?php the_content(); ?>
			            </div>
			          </div>

			        </div>
		      </article>
		      <div class="team-member-nav-container">
				<div class="next-team-member-link">
					<?php if ($next_team_member) : ?>
						<a href="<?php echo get_permalink($next_team_member); ?>">
							<i class="fas fa-arrow-right"></i>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div><!-- end team-single-flex-wrapper -->

      <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>