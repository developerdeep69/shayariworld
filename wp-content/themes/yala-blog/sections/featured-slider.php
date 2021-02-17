<?php if(get_theme_mod('yala_mag_slider_enable','1')):?>
<!-- Featured News -->
			<section class="featured-news section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- Featured Slider -->
							<div class="featured-slider">
								<?php
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => absint(get_theme_mod('yala_mag_slider_number','3')),
								'cat' => esc_attr(get_theme_mod('yala_mag_slider_category_id','')),
								'orderby' => array( esc_attr(get_theme_mod('yala_mag_news_slider_order', 'date')) => 'DSC', 'date' => 'DSC'),
								'post_status' => 'publish',
								'order'     => 'DSC',
							);
							//print_r($args);exit;
							$sliderloop = new WP_Query($args);

							while ($sliderloop->have_posts()) : 
								$sliderloop->the_post(); 
								?>

									<!-- Single News -->
									<div class="single-news">
										<div class="news-head shadow">
											<?php 
												if(has_post_thumbnail()):
													the_post_thumbnail('medium');
												endif;
											?>
											<div class="content">	
												<?php 
													$categories = get_the_category(get_the_ID());
												?>
												<div class="cat-name"><a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>"><?php echo esc_html($categories[0]->name); ?></a></div>
												<!-- Meta -->
												<div class="meta">
													<span class="date"><i class="fa fa-calendar"></i><?php yala_mag_posted_on();?></span>
													<span class="time"><i class="fa fa-clock-o"></i><?php the_time();?></span>
													
												</div>
												<h2 class="title-medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
											</div>
										</div>
									</div>
									<!--/ End Single News -->
															          <?php  endwhile; 
						          	wp_reset_postdata();
								 ?>		
							</div>
							<!--/ End Featured Slider -->
						</div>
					</div>
				</div>
			</section>
<?php endif; ?>