<?php get_header(); ?>

<?php get_template_part( 'template-parts/navigation', 'home' ); ?>
<?php get_template_part( 'template-parts/documents', 'download' ); ?>

<section id="market-overview"  data-magellan-target="market-overview">
	<div id="particles-js"></div>
	<div class="market-overview-content">
		<div class="row">
			<div class="small-12 columns text-center">
				<!-- <img class="logo _mb20" src="assets/img/logo.png" alt="logo Yamzu"> -->
				<h1 class="wow fadeIn main-heading" data-wow-delay="0.4s"><?php the_field('main_heading'); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns text-center">
				<div class="sales-cta-container">
					<?php the_field('sales_cta'); ?>
					<div class="sales-buttons-container">
						<?php $sales_buttons = get_field('sales_buttons'); ?>
						<a target="_blank" class="button full-width-button" href="<?php echo $sales_buttons['eth_sales_link']; ?>">
							<?php echo $sales_buttons['eth_sales_text']; ?>
						</a>
						<a class="button full-width-button" href="<?php echo $sales_buttons['other_sales_link']; ?>">
							<?php echo $sales_buttons['other_sales_text']; ?>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns text-center wow fadeIn" data-wow-delay="1s">
				<h3 class="countdown_title"><?php the_field('countdown_heading'); ?></h3> 
				<div class="countdown" data-countdown="<?php the_field('expiry_date'); ?>"></div>
			</div>
		</div>
		<div class="row">
			<div class="columns small-12 large-text-right">
				<div class="ico-info">
					<p class="wow fadeIn" data-wow-delay="0.4s">
						<strong>Available Currencies</strong> 
						<span>
							ETH
							<i class="fab fa-ethereum"></i>
						</span>
					</p>
					<p class="wow fadeIn" data-wow-delay="0.4s">
						<strong>Exchange Rate</strong> 
						<span>
							1 YMZ = 0.1 €
						</span>
					</p>
				</div>
			</div>
		</div>
		<div class="row">

			<?php

			$cap_details = get_field('cap_details');

			$currentAmount = $cap_details['current_amount'];
			$highAmount = $cap_details['right_funds'];

			$percentage = $currentAmount / $highAmount * 100;

			?>

			<style>

			@-webkit-keyframes increaseWidthCustom{from{width:0%}to{width:<?php echo $percentage; ?>%}}
			@keyframes increaseWidthCustom{from{width:0%}to{width:<?php echo $percentage; ?>%}}
			.increaseWidthCustom{-webkit-animation-name:increaseWidthCustom;animation-name:increaseWidthCustom}

			#market-overview .market-overview-content .cap .cap-bar {
				width: <?php echo $percentage; ?>%; 
			}

			</style>
				<div class="small-12 columns cap">
					<div class="cap-bar-container">
						<div class="cap-bar default-gradient-background wow increaseWidthCustom" data-wow-duration="2s" data-wow-delay="0">
							<p class="current-amount-text"><?php echo number_format($cap_details['current_amount']); ?> €</p>
						</div>
					</div>

					<div class="focus-point first wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="line wow showLine" data-wow-duration="1s" data-wow-delay="0.6s"></div>
						<p>
							<strong><?php echo $cap_details['left_title']; ?></strong>
							<?php echo number_format($cap_details['left_funds']); ?> €
						</p>
					</div>

					<div class="focus-point second wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
						<div class="line line-hard wow showLine" data-wow-duration="1s" data-wow-delay="1.4s"></div>
						<p>
							<strong><?php echo $cap_details['right_title']; ?></strong>
							<?php echo number_format($cap_details['right_funds']); ?> €
						</p>
					</div>
				</div>
			</div>
		</div>
    </section>

    <section id="video">
		<div class="row">
			<div class="small-12 columns">
				<div class="main-video-container">
					<?php the_field('video_link'); ?>
				</div>
			</div>
        </div>
    </section>

    <section id="listing" data-magellan-target="listing">
    	<div class="row">
    		<div class="small-12 columns">
    			<h2 class="section-title text-center wow fadeIn" data-wow-duration="1s">Listing</h2>
    		</div>
    	</div>

    	<div class="row">
    		<div class="small-12 columns">
    			<div class="flex-logo-container">

    				<?php $listings = get_field('listing_logos'); ?>
    				<?php foreach ($listings as $listing): ?>
    					<div class="flex-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay="400ms">
    						<a target="_blank" href="<?php echo $listing['listing_link']; ?>">
    							<img src="<?php echo $listing['listing_logo']; ?>" alt="<?php echo $listing['listing_company']; ?>">
    						</a>
    					</div>
    				<?php endforeach; ?>

    			</div>
    		</div>
    	</div>
    </section>

    <section id="partners" data-magellan-target="partners">
    	<div class="row">
    		<div class="small-12 columns">
    			<h2 class="section-title text-center wow fadeIn" data-wow-duration="1s">Partners</h2>
    		</div>
    	</div>
    	<div class="row">
    		<div class="small-12 columns">
    			<div class="flex-logo-container">

    				<?php $partners = get_field('partner_logos'); ?>
    				<?php foreach ($partners as $partner): ?>
    					<div class="flex-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay="400ms">
    						<a target="_blank" href="<?php echo $partner['partner_link']; ?>">
    							<img src="<?php echo $partner['partner_logo']; ?>" alt="<?php echo $partner['partner_company']; ?>">
    						</a>
    					</div>
    				<?php endforeach; ?>

    			</div>
    		</div>
    	</div>
    </section>

    <section id="press" data-magellan-target="press">
    	<div class="row">
    		<div class="small-12 columns">
    			<h2 class="section-title text-center wow fadeIn" data-wow-duration="1s">Press</h2>
    		</div>
    	</div>
    	<div class="row">
    		<div class="small-12 columns">
    			<div class="flex-logo-container">

    				<?php $press_companies = get_field('press_logos'); ?>
    				<?php foreach ($press_companies as $press): ?>
    					<div class="flex-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay="400ms">
    						<a target="_blank" href="<?php echo $press['press_link']; ?>">
    							<img src="<?php echo $press['press_logo']; ?>" alt="<?php echo $press['press_company']; ?>">
    						</a>
    					</div>
    				<?php endforeach; ?>

    			</div>
    		</div>
    	</div>
    </section>

    <section id="highlights" data-magellan-target="highlights">
    	<div class="row">
    		<div class="small-12 columns">
    			<h2 class="section-title text-center wow fadeIn" data-wow-duration="1s">Highlights</h2>
    		</div>
    	</div>

    	<div class="row-fluid">
    		<?php if( have_rows('highlights_section') ): ?>

    			<?php while ( have_rows('highlights_section') ) : the_row(); ?>

    				<div class="row-fluid-flex-item">
    					<div class="highlight wow fadeInUp" data-wow-duration="1s" data-wow-delay="0ms">
    						<img class="logo highlight-icon" src="<?php the_sub_field('highlight_icon'); ?>" />
    						<p><?php the_sub_field('highlight_text'); ?></p>
    					</div>
    				</div>

    			<?php endwhile; ?>

    			<?php else : ?>

    			<?php endif; ?>
    		</div>

    		<div class="row">
    			<div class="columns small-12 text-center wow fadeIn" data-wow-delay="1.3s">
    				<a href="https://yamzu.com/" target="_blank" class="button site-button">Play NOW on Yamzu platfrom</a>
    			</div>
    		</div>
    	</section>

    	<section id="roadmap" data-magellan-target="roadmap">
    		<div class="roadmap-top-bg-image"></div>
    		<div class="row">
    			<div class="small-12 columns">
    				<h2 class="section-title text-center wow fadeIn" data-wow-duration="1s"><?php the_field('roadmap_title'); ?></h2>
    			</div>
    		</div>
    		<div class="row">
    			<div class="small-12 large-offset-2 large-8 columns">
    				<div class="roadmap-bg-past">

    					<h2 class="text-left wow fadeIn roadmap-subheading"><?php the_field('roadmap_past_title'); ?></h2>

    					<div class="cd-timeline js-cd-timeline">
    						<div class="cd-timeline__container">

    							<?php 

    							$past_roadmap = get_field('roadmap_past_repeater'); 

    							foreach ($past_roadmap as $past) : ?>

    								<div class="cd-timeline__block js-cd-block">
    									<div class="cd-timeline__img cd-timeline__img--picture js-cd-img"></div> <!-- cd-timeline__img -->

    									<div class="cd-timeline__content js-cd-content">
    										<?php echo $past['past_text']; ?>
    										<span class="cd-timeline__date"><strong><?php echo $past['past_quarter']; ?> <span class="year"><?php echo $past['past_year']; ?></span></strong></span>
    									</div> <!-- cd-timeline__content -->
    								</div> <!-- cd-timeline__block -->

    							<?php endforeach; ?>

    						</div>
    					</div> <!-- cd-timeline -->
    				</div><!-- end roadmap-bg-past -->
    				<div class="roadmap-bg-future">
    					<div class="roadmap-bottom-bg-image"></div>
    					<h2 class="text-left wow fadeIn roadmap-subheading"><?php the_field('roadmap_future_title'); ?></h2>

    					<div class="cd-timeline js-cd-timeline">
    						<div class="cd-timeline__container">

    							<?php 

    							$future_roadmap = get_field('roadmap_future_repeater'); 

    							foreach ($future_roadmap as $future) : ?>

    								<div class="cd-timeline__block js-cd-block">
    									<div class="cd-timeline__img cd-timeline__img--picture js-cd-img"></div> <!-- cd-timeline__img -->

    									<div class="cd-timeline__content js-cd-content">
    										<?php echo $future['future_text']; ?>
    										<span class="cd-timeline__date"><strong><?php echo $future['future_quarter']; ?> <span class="year"><?php echo $future['future_year']; ?></span></strong></span>
    									</div> <!-- cd-timeline__content -->
    								</div> <!-- cd-timeline__block -->

    							<?php endforeach; ?>

    						</div>
    					</div> <!-- cd-timeline -->
    				</div><!-- end bg-roapmap-future -->

    			</div>
    		</div>
    	</section>


    	<section id="token-distribution" data-magellan-target="token-distribution">
    		<div class="particles-bg short"></div>
    		<div class="row">
    			<div class="small-12 large-6 columns charts-container right">
    				<h2 class="section-title wow fadeIn">Token Distribution</h2>
    				<canvas id="chart-1"></canvas>
    				<div class="token-distribution-details first wow fadeInUp">
    					<div class="row">
    						<div class="small-12 medium-6 columns">

    							<?php if( have_rows('token_distribution') ): ?>
    								<?php $counter = 0; ?>
    								<?php while( have_rows('token_distribution') ): the_row(); ?>
    									<?php $counter++; ?>

    									<?php if($counter % 5 == 0): ?>
    									</div>
    									<div class="small-12 medium-6 columns">
    									<?php endif; ?>

    									<p>
    										<span class="legend-square legend-color-<?php echo $counter; ?>"></span>
    										<strong><?php the_sub_field('distribution_title'); ?>: </strong>
    										<?php the_sub_field('distribution_percentage'); ?>%
    										<?php if (get_sub_field('other_information')): ?>
    											<br /><?php the_sub_field('other_information'); ?>
    										<?php endif; ?>
    									</p>
    								<?php endwhile; ?>
    							<?php endif; ?>

    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="small-12 large-6 columns charts-container eft">
    				<h2 class="section-title wow fadeIn">Use of Funds</h2>
    				<canvas id="chart-2"></canvas>
    				<div class="token-distribution-details left-legend wow fadeInUp">
    					<div class="row">
    						<div class="small-12 medium-6 columns">
    							<?php if( have_rows('use_of_funds') ): ?>
    								<?php $counter = 0; ?>
    								<?php while( have_rows('use_of_funds') ): the_row(); ?>
    									<?php $counter++; ?>

    									<?php if($counter % 5 == 0): ?>
    									</div>
    									<div class="small-12 medium-6 columns">
    									<?php endif; ?>

    									<p>
    										<span class="legend-square legend-color-<?php echo $counter; ?>"></span>
    										<strong><?php the_sub_field('fund_title'); ?>: </strong>
    										<?php the_sub_field('fund_percentage'); ?>%
    										<?php if (get_sub_field('other_information')): ?>
    											<br /><?php the_sub_field('other_information'); ?>
    										<?php endif; ?>
    									</p>
    								<?php endwhile; ?>
    							<?php endif; ?>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<section id="token" data-magellan-target="token">
    		<div class="token-background-image"></div>
    		<div class="row">
    			<div class="columns small-12 large-8 large-offset-2 overlay-container">
    				<div class="scroll-overlay wow fadeOutdisappear" data-wow-delay="2.5s">
    					<div class="hand" style="background-image: url(assets/img/table-scroll.png)"></div>
    				</div>
    				<h2 class="section-title wow fadeIn text-center" data-wow-delay="0.4s">Token Sale</h2>
    				<h3 class="section-subtitle wow fadeIn text-center" data-wow-delay="0.4s"> Details</h3>
    				<div class="table-container wow fadeInUp">

    					<?php $token_table = get_field('token_sale_table'); ?>

    					<table>  
    						<tbody>
    							<tr>
    								<th></th>
    								<th class="heading">Public Pre-Sale</th>
    								<th class="heading">ICO</th>
    							</tr>
    							<tr>
    								<th>Start date</th>
    								<td><?php echo $token_table['start_date_pre_sale']; ?></td>
    								<td><?php echo $token_table['start_date_ico']; ?></td>
    							</tr>
    							<tr>
    								<th>End date</th>
    								<td><?php echo $token_table['end_date_pre_sale']; ?></td>
    								<td><?php echo $token_table['end_date_ico']; ?></td>
    							</tr>
    							<tr>
    								<th>Bonus</th>
    								<td><?php echo $token_table['bonus_pre_sale']; ?></td>
    								<td><?php echo $token_table['bonus_ico']; ?></td>
    							</tr>
    							<tr>
    								<th>Soft CAP</th>
    								<td colspan="2" class="medium-text-center"><?php echo $token_table['soft_cap']; ?></td>
    							</tr>
    							<tr>
    								<th>Hard CAP</th>
    								<td colspan="2" class="medium-text-center"><?php echo $token_table['hard_cap']; ?></td>
    							</tr>
    							<tr>
    								<th>Exchange Rate</th>
    								<td colspan="2" class="medium-text-center"><?php echo $token_table['exchange_rate']; ?></td>
    							</tr>
    							<tr>
    								<th>Available Currencies</th>
    								<td colspan="2" class="medium-text-center"><?php echo $token_table['available_currencies']; ?></td>
    							</tr>
    							<tr>
    								<th>Min. Contribution</th>
    								<td colspan="2" class="medium-text-center"><?php echo $token_table['minimum_contribution']; ?></td>
    							</tr>
    							<tr>
    								<th>Max. Contribution</th>
    								<td colspan="2" class="medium-text-center"><?php echo $token_table['maximum_contribution']; ?></td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</section>

    	<section id="team" data-magellan-target="team">

    		<div class="particles-bg"></div>

    		<div class="row">
    			<div class="small-12 columns">
    				<h2 class="section-title text-center wow fadeIn" data-wow-duration="1s">Team</h2>
    			</div>
    		</div>

    		<!-- Start custom query loop -->
    		<div class="team-row">
    			<?php

            /*
            * Loop through Categories and Display Posts within
            */
            $post_type = 'team-members';

            // Get all the taxonomies for this post type
            $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

            foreach( $taxonomies as $taxonomy ) :

            // Gets every "category" (term) in this taxonomy to get the respective posts
            	$term_args = array(
            		'orderby'    => 'slug', 
            		'order'      => 'ASC',
            	);
            	$terms = get_terms( $taxonomy, $term_args );

            	foreach( $terms as $term ) : ?>

            		<?php

            		$team_args = array(
            			'post_type' => $post_type,
                        'posts_per_page' => -1,  //show all posts
                        'tax_query' => array(
                        	array(
                        		'taxonomy' => $taxonomy,
                        		'field' => 'slug',
                        		'terms' => $term->slug,
                        	)
                        )

                    );

            		$team_posts = new WP_Query($team_args);

            		if( $team_posts->have_posts() ): ?>

            			<?php $team_posts_count = $team_posts->post_count; ?>

            			<?php if($team_posts_count >= 2): ?>
            			</div><!-- end team-row -->
            			<div class="team-row">
            			<?php endif; ?>

            			<?php if($term->name == 'Advisors'): ?>
            			</div><!-- end team-row -->
            			<div class="team-row">
            				<h2 class="section-title text-center">Advisors</h2>
            			</div><!-- end team-row -->
            			<div class="team-row">
            			<?php endif; ?>

            			<?php while( $team_posts->have_posts() ) : $team_posts->the_post(); ?>

            				<?php $social = get_field('team_member_social_platform'); ?>

            				<div class="team-element text-center">
            					<div class="team-member-container">
            						<div class="team-member-photo-container">
            							<a href="<?php the_permalink(); ?>"><img src="<?php the_field('team_member_photo'); ?>" alt="<?php the_title(); ?>" /></a>
            							<div class="team-member-social">
            								<a target="_blank" href="<?php echo $social['team_social_link']; ?>" class="team-social-button">
            									<i class="fab fa-<?php echo $social['team_social_name']; ?>"></i>
            								</a>
            							</div>
            						</div>
            						<p class="team-member-department"><?php echo $term->name; ?></p>
            						<a href="<?php the_permalink(); ?>"><h3 class="team-member-name"><?php the_title(); ?></h3></a>
            						<h3 class="team-member-title"><?php the_field('team_member_role'); ?></h3>
            					</div>
            				</div>

            			<?php endwhile; ?>

            		<?php endif; ?>

            		<?php wp_reset_query(); ?>

            	<?php endforeach;

            endforeach; ?>
        </div><!-- end team-row -->

    </section>

    <section id="blog" data-magellan-target="blog">
    	<div class="row">
    		<div class="small-12 columns">
    			<h2 class="section-title text-center wow fadeIn" data-wow-duration="1s">Blog</h2>
    		</div>
    	</div>

    	<div class="row">

    		<?php	
    		$args = array(
    			'post_type' => 'post',
    			'posts_per_page' => 6
    		);

    		$posts = new WP_Query($args);

    		if( $posts->have_posts() ): ?>

    			<div class="row">

    				<?php $post_counter = 0; ?>

    				<?php while( $posts->have_posts() ) : $posts->the_post(); ?>

    					<?php $post_counter++; ?>

    					<?php if($post_counter % 4 == 0) : ?>
    					</div>
    					<div class="row">
    					<?php endif; ?>

    					<div class="small-12 medium-4 columns blog-section">
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

    				<?php endwhile; ?>

    			</div>

    		<?php endif; ?>

    		<?php wp_reset_query(); ?>	

    		<div class="row">
    			<div class="small-12 columns text-center">
    				<button class="button newsletter-button">
    					<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
    						View More
    					</a>
    				</button>
    			</div>
    		</div>

    	</section>

    	<?php get_footer(); ?>