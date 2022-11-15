<?php 
/*
 Template Name: custom_post
*/

get_header(); 

?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                    
					
					
                    <?php

                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $portfolios = new WP_Query(array(
                    	'post_type' => 'portfollio',
                    	'posts_per_page' => 1,
                    	'paged' => $paged
                    ));

                    while($portfolios->have_posts()): $portfolios->the_post(); ?>
						<article>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<?php the_post_thumbnail(); ?>
							<?php the_content(); ?>
							
						</article>
                    <?php endwhile; 

                    $total_pages = $portfolios->max_num_pages;

						if ($total_pages > 1)
						{
						    $current_page = max(1, get_query_var('paged'));
                            ?><div id="pagi"> <?php
							    echo paginate_links(array(
							        'base' => get_pagenum_link(1) . '%_%',
							        'format' => '/page/%#%',
							        'current' => $current_page,
							        'total' => $total_pages,
							        'prev_text'    => __('« prev'),
							        'next_text'    => __('next »'),
							    ));
							?></div> <?php
						}
						wp_reset_postdata(); 
					?>

				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>