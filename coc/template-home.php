<?php 
/* Template Name: Home Template
*/
get_header(); ?>

<!-- Banner -->
<?php echo do_shortcode("[huge_it_slider id='2']"); ?>
<!-- /Banner -->

<!-- About - MAYBE MAKE IT IN VISUAL COMPOSER -->
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Title</h2>
                    <hr class="light">
                    <p class="text-faded">This is about text.Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
<!-- /About -->

<!-- Services -->
<?php
	$loop1 = new WP_Query ( array(
	'post_type' => 'services',
	'posts_per_page' => 3
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
<!-- /Services -->

<!-- Works -->
<?php
	$loop1 = new WP_Query ( array(
	'post_type' => 'works',
	'posts_per_page' => 3
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
<!-- /Works -->

<?php get_footer(); ?>