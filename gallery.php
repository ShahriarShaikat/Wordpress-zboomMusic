<?php 

/*
Template Name:Gallery
*/

get_header(); 

?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">

			<?php 
            
			$galleryitem = new WP_Query(array(
				'post_type'=>'post',
				'posts_per_page'=> -1,
				//'category__in' => $redux_demo['search_category_select'] ,
			)); ?>

           <?php while ($galleryitem->have_posts()): $galleryitem->the_post(); ?>

			<div class="col-1-4">
				<div id ="galleryitems" class="wrap-col">
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</article>
				</div>
			</div>
           <?php endwhile; ?>

		</div>
	</div>
</section>
<?php get_footer(); ?>