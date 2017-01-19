<?php
/**
 * The template for displaying contact page.
 *
 * Template Name: Contact page
 *
 */

get_header(); ?>

<!-- Wrapper start -->
	<div class="main">

		<!-- Header section start -->
		
		<!-- Contact start -->
		
		<?php 
		
		if( have_posts() ):
		
			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'contact' );

			endwhile; 
			
		endif;	
			
get_footer(); ?>