<?php
/**
 * The template for displaying about us page.
 *
 * Template Name: Servicios
 *
 */

get_header(); ?>
	<!-- Wrapper start -->
	<div class="main">
	
		<!-- Header section start -->
		
		<?php
			$shop_isle_header_image = get_header_image();
			if( !empty($shop_isle_header_image) ) {
				echo '<section class="page-header-module module bg-dark" data-background="'.esc_url( $shop_isle_header_image ).'">';
			} else {
				echo '<section class="page-header-module module bg-dark">';
			}
		?>
				<div class="container">

						<div class="row">

							<div class="col-sm-10 col-sm-offset-1">

								<h1 class="module-title font-alt"><?php the_title(); ?></h1>

								<?php

								/* Header description */

								$shop_isle_shop_id = get_the_ID();

								if( !empty($shop_isle_shop_id) ) {

									$shop_isle_page_description = get_post_meta($shop_isle_shop_id, 'shop_isle_page_description');

									if( !empty($shop_isle_page_description[0]) ) {
										echo '<div class="module-subtitle font-serif mb-0">'.$shop_isle_page_description[0].'</div>';
									}

								}
								?>

							</div>

						</div><!-- .row -->

					</div><!-- .container -->
				</section><!-- .page-header-module -->
				<!-- Header section end -->
				
				<!-- About start -->
				<?php
				
					if ( have_posts() ) { 
						while ( have_posts() ) { 
							
							the_post();
					
							$shop_isle_content_aboutus = get_the_content();
						
						}
					}	
					
					if( trim($shop_isle_content_aboutus) != "" ) {
						
						echo '<section class="module">';
						
							echo '<div class="container">';

								echo '<div class="row">';

									echo '<div class="col-sm-12">';

										the_content();

									echo '</div>';

								echo '</div>';

							echo '</div>';
							
						echo '</section>';
						
					}
				?>
				
				<!-- About end -->
				
				<!-- Divider -->
				<hr class="divider-w">
				<!-- Divider -->

				<!-- Team start -->
				<section class="module">
					<div class="container">
					
						<?php
							$shop_isle_our_team_title = get_theme_mod('shop_isle_our_team_title', __( 'Meet our team', 'shop-isle' ));
							$shop_isle_our_team_subtitle = get_theme_mod('shop_isle_our_team_subtitle',__( 'An awesome way to introduce the members of your team.', 'shop-isle' ));
							
							if( !empty($shop_isle_our_team_title) || !empty($shop_isle_our_team_subtitle) ) {
							
								echo '<div class="row">';
									echo '<div class="col-sm-6 ">';
									
										if( !empty($shop_isle_our_team_title) ) {
											echo '<h2 class="module-title font-alt meet-out-team-title">'.$shop_isle_our_team_title.'</h2>';
										}
										
										if( !empty($shop_isle_our_team_subtitle) ) {
											echo '<div class="module-subtitle font-serif meet-out-team-subtitle">';
												echo $shop_isle_our_team_subtitle;
											echo '</div>';
										}

									echo '</div>';

								echo '</div><!-- .row -->';
								
							}
							
							$shop_isle_team_members = get_theme_mod('shop_isle_team_members',json_encode(array( array('image_url' => get_template_directory_uri().'/assets/images/team1.jpg' , 'text' => 'Eva Bean', 'subtext' => 'Developer', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a iaculis diam.' ),array('image_url' => get_template_directory_uri().'/assets/images/team2.jpg' ,'text' => 'Maria Woods', 'subtext' => 'Designer', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a iaculis diam.' ), array('image_url' => get_template_directory_uri().'/assets/images/team3.jpg' , 'text' => 'Booby Stone', 'subtext' => 'Director', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a iaculis diam.'), array('image_url' => get_template_directory_uri().'/assets/images/team4.jpg' , 'text' => 'Anna Neaga', 'subtext' => 'Art Director', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a iaculis diam.') )));
								
								if( !empty( $shop_isle_team_members ) ) {
												
									$shop_isle_team_members_decoded = json_decode($shop_isle_team_members);
												
									if( !empty($shop_isle_team_members_decoded) ) {
										
										echo '<div class="row">';
													
											echo '<div class="hero-slider about-team-member">';
													
												echo '<ul class="slides">';
												
													foreach($shop_isle_team_members_decoded as $shop_isle_team_member) {
														
														echo '<div class="col-sm-6 col-md-6 mb-sm-20 fadeInUp">';
														
															echo '<div class="team-item">';
															
																echo '<div class="team-image">';
																
																	if( !empty($shop_isle_team_member->image_url) ){
																	
																		if( !empty($shop_isle_team_member->text) ) {
																			
																			if (function_exists ( 'icl_t' ) && !empty($shop_isle_team_member->id)){
																				$shop_isle_team_member_image_url = icl_t( 'Team member '.$shop_isle_team_member->id, 'Team member image', $shop_isle_team_member->image_url );
																				$shop_isle_team_member_text = icl_t( 'Team member '.$shop_isle_team_member->id, 'Team member name', $shop_isle_team_member->text );
																				echo '<img src="'. esc_url( $shop_isle_team_member_image_url ).'" alt="'.esc_html($shop_isle_team_member_text).'">';
																			} else {
																				echo '<img src="'. esc_url( $shop_isle_team_member->image_url ).'" alt="'.esc_html($shop_isle_team_member->text).'">';
																			}

																		} else {
																			if (function_exists ( 'icl_t' ) && !empty($shop_isle_team_member->id)){
																				$shop_isle_team_member_image_url = icl_t( 'Team member '.$shop_isle_team_member->id, 'Team member image', $shop_isle_team_member->image_url );
																				echo '<img src="'. esc_url( $shop_isle_team_member_image_url ).'" alt="">';
																			} else {
																				echo '<img src="'. esc_url( $shop_isle_team_member->image_url ).'" alt="">';
																			}
																		}
																		
																	}


																	if( !empty($shop_isle_team_member->description) ) {
																		echo '<div class="team-detail">';
																		
																			if (function_exists ( 'icl_t' ) && !empty($shop_isle_team_member->id)){
																				$shop_isle_team_member_description = icl_t( 'Team member '.$shop_isle_team_member->id, 'Team member description', $shop_isle_team_member->description );
																				echo '<p class="font-serif">'.$shop_isle_team_member_description.'</p>';
																			} else {
																				echo '<p class="font-serif">'.$shop_isle_team_member->description.'</p>';
																			}	
																		echo '</div><!-- .team-detail -->';
																	}	
																echo '</div><!-- .team-image -->';
																
																echo '<div class="team-descr font-alt">';
																	if( !empty($shop_isle_team_member->text) ) {
																		if (function_exists ( 'icl_t' ) && !empty($shop_isle_team_member->id)){
																			$shop_isle_team_member_text = icl_t( 'Team member '.$shop_isle_team_member->id, 'Team member name', $shop_isle_team_member->text );
																			echo '<div class="team-name">'.$shop_isle_team_member_text.'</div>';
																		} else {
																			echo '<div class="team-name">'.$shop_isle_team_member->text.'</div>';
																		}	
																	}
																	if( !empty($shop_isle_team_member->subtext) ) {
																		if (function_exists ( 'icl_t' ) && !empty($shop_isle_team_member->id)){
																			$shop_isle_team_member_subtext = icl_t( 'Team member '.$shop_isle_team_member->id, 'Team member job', $shop_isle_team_member->subtext );
																			echo '<div class="team-role">'.$shop_isle_team_member_subtext.'</div>';
																		} else {
																			echo '<div class="team-role">'.$shop_isle_team_member->subtext.'</div>';
																		}	
																	}
																echo '</div><!-- .team-descr -->';
															
															echo '</div><!-- .team-item -->';
														
														echo '</div><!-- .col-sm-6 col-md-3 mb-sm-20 fadeInUp -->';
														
													}
												
												echo '</ul>';
														
											echo '</div>';
										
										echo '</div>';
										
										
									}
								}
							
							
								
						?>	
						
					</div>
					
				</section>
				<!-- Team end -->
				
	
<?php get_footer(); ?>