<?php get_header(); ?>

	<section class="bg-primary" id="about">
        <div class="container">
<?php 
	if(have_posts() ):
		while( have_posts() ): the_post(); ?>

			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">
		
						<p> <?php the_title(); ?> </p>
					</h2>
					
					<img src="<?= the_post_thumbnail(); ?>
					
					<p class="text-faded"><?php the_content(); ?></p>
				</div>
			</div>
		<?php endwhile;
		
	endif;
	?>
		</div>
	</section>	
<?php get_footer(); ?>