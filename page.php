<?php get_header();?>
	<article class="content px-3 py-5 p-md-5">
		<?php 
			if(have_posts()){
				while(have_posts()){
					the_post();
					// the_content();
                    
                    // get template parts for post type page
                    get_template_part('template-parts/content', 'page');
				}
			}
		?>
	</article>
   <?php get_footer();?>

