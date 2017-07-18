<?php 
/* Template Name: Portfolio Template
*/
get_header(); ?>

<!-- Works -->

<section class="bg-primary" id="portfolio">
	<div class="container-fluid">
		<div class="row no-gutter">
	<?php

		$obj = get_post_type_object( 'works' );
		echo '<h1>' . $obj->labels->singular_name . '</h1>';
		
		$loop2 = new WP_Query ( array(
		'post_type' => 'works'
		));
			
		echo "<div class='row'>";
		if ( $loop2->have_posts() ) :
	?>

				<?php while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
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
<!-- Works -->
	
<?php get_footer(); ?>
</div>