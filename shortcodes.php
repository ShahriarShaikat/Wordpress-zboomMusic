<?php


function zboom_heading($atts, $content)
{

	$heaindatts = shortcode_atts(array(
		'position'=> 'center'
	), $atts);

	return "<h1 align='".$heaindatts['position']."'>".$content."</h1>";

}
add_shortcode('heading', 'zboom_heading');

function zboom_image_optin($atts, $content){

  return "<img src='".$content."' />";

}
add_shortcode('image', 'zboom_image_optin');

function zboom_extra_code(){

	ob_start(); 
	$blockcode = shortcode_atts(array(


		'number'=> '1'

	), $atts);
	?>


	<?php
			$blockitem = new WP_Query(array(

				'post_type'=> 'BlocksItem',
				'posts_per_page'=> $blockcode['number']

			));
			?>

			<?php while ($blockitem->have_posts()) : $blockitem->the_post();?>

			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><a id="acol" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
					<p> <?php read_more(10); ?></p>
					
				</div>
			</div>
            
            <?php endwhile; ?>







<?php 
   
   $shaikat332 = ob_get_clean();

   return $shaikat332;

}
add_shortcode('block', 'zboom_extra_code');


?>