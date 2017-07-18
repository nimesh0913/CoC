<?php 
/* Template Name: Services Template
*/
get_header(); ?>

<!-- Services -->

<?php
	$loop1 = new WP_Query ( array(
	'post_type' => 'services'
	));
		
	if ( $loop1->have_posts() ) :
?>
    <section class="bg-primary" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
			<?php while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
				<div class="col-lg-4 col-sm-6">
					<a href="<?php the_permalink(); ?>" class="portfolio-box">
                        <?php the_post_thumbnail(); ?>
						<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    <?= the_title();?>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
			<?php endwhile; ?>
            </div>
        </div>
    </section>
<?php 
		
	endif;
?>
<!-- Services -->
	
<?php get_footer(); ?>
</div>