<?php if( have_rows('document_downloads', 'option') ): ?>
  	<aside class="fixed-download-links">
	  	<div class="download-buttons-container">
		    <?php while( have_rows('document_downloads', 'option') ): the_row(); ?>
		        <a target="_blank" href="<?php the_sub_field('document_file'); ?> "class="fixed-download-button button">
	        	<span class="pdf-icon"><i class="far fa-file"></i></span>
	        	<?php the_sub_field('document_title'); ?>
	        	</a>
		    <?php endwhile; ?>
	    </div>
  	</aside>
<?php endif; ?>