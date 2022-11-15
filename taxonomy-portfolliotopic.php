<?php 
/*
 Template Name: portfolio
*/

get_header(); 

?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                    <?php wp_title(); ?> 
					
					
                    <?php 
                    
                    while(have_posts()): the_post(); ?>
					<article>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<?php the_post_thumbnail(); ?>
					    
					    <p>
							<?php 
							$seemore = '<a href="'.get_permalink().'">....see more</a>';
							echo wp_trim_words(get_the_content(), 10, $seemore); 
							?>
						</p>
						<p>Topic:
							<?php 
							$topicss = get_the_terms(get_the_ID(),'portfolliotopic');
							foreach($topicss as $key){
								$link = get_term_link($key,'portfolliotopic');
								echo '<a href="'.$link.'">'.$key->name.'</a> ';
							} 
							?>
						</p>

						<p>Keyword:
							<?php 
							$Keywordd = get_the_terms(get_the_ID(),'portfolliokeyword');
							foreach($Keywordd as $keys){
								$links = get_term_link($keys,'portfolliokeyword');
								echo '<a href="'.$links.'">'.$keys->name.'</a> ';
							} 
							?>
						</p>
						
					</article>
                    <?php endwhile; ?>

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