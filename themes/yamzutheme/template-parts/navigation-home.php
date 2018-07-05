<header>
   <div class="loader">
      <img class="loader-logo" src="<?php echo get_theme_file_uri( 'assets/img/loader-update.gif'); ?>" alt="Yamzu loader">
   </div>
   <div data-sticky-container>
      <nav data-sticky data-margin-top="0" data-options="stickyOn: small;">
   		<div class="row header-row">
   			<div class="columns large-2 small-8">
   				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_theme_file_uri( '/assets/img/logo.png' ); ?>" alt="logo Yamzu"></a>
   			</div>
   			<div class="columns large-10 small-4 text-right">
          
          <div class="mobile-navigation-burger">
            <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>

          <div class="navigation-menu-container">
     				
            <div class="mobile-navigation-logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_theme_file_uri( '/assets/img/logo.png' ); ?>" alt="logo Yamzu"></a>
            </div>

            <ul data-magellan class="site-links">
              <li><a href="#listing">Listings</a></li>
              <li><a href="#partners">Partners</a></li>
              <li><a href="#press">Press</a></li>
              <li><a href="#highlights">Highlights</a></li>
              <li><a href="#roadmap">Roadmap</a></li>
              <li><a href="#token-distribution">Token</a></li>
				      <li><a href="#team">Team</a></li>
              <li><a href="#blog">Blog</a></li>
     				</ul>

            
            <?php if( have_rows('platform_links', 'option') ): ?>
              <ul class="platform-links">
                <?php while( have_rows('platform_links', 'option') ): the_row(); ?>
                    <li>
                      <a target="_blank" href="<?php the_sub_field('platform_link'); ?>">
                        <i class="fab fa-<?php the_sub_field('platform_name'); ?>"></i>
                      </a>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            

          </div>

   			</div>
   		</div>
      </nav>
   </div>
</header>