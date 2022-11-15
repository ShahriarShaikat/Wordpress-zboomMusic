<?php 


function zboom_heading($atts , $content)
{
	extract(shortcode_atts(array(
		'position' => 'center',
		'color'=> 'red'
	),$atts));
	return "<h2 style=' text-align:".$position.';'." color:".$color.';'." '>".$content."</h2>";
}

add_shortcode('heading','zboom_heading');



function zboom_cheaking($atts , $content)
{
	extract(shortcode_atts(array(
		'shaikat' => 'right',
		'shorna'=> 'red'
	),$atts));
	return "<h2  shaikat='".$shaikat."' shorna='".$shorna."' >".$content."</h2>";
}

add_shortcode('check','zboom_cheaking');


function zboom_image($atts , $content)
{
	extract(shortcode_atts(array(
		'height' => '100px',
		'width'=> '100px'
	),$atts));
	return '<img height="'.$height.'" width="'.$width.'" src="'.get_template_directory_uri()."/".$content.'">';
}

add_shortcode('image','zboom_image');


function zboom_block($atts , $content)
{
	ob_start(); ?>
	<?php

	        extract(shortcode_atts(array(
		     'item' => '2',
	        ),$atts));

			$blockitem = new WP_Query(array(

				'post_type'=> 'BlocksItem',
				'posts_per_page'=> $item

			));
			
			while ($blockitem->have_posts()) : $blockitem->the_post();?>

				<div class="col-1-3">
					<div class="wrap-col box">
						<h2><a id="acol" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
						<p> <?php read_more(3); ?></p>
						<div class="more"><a href=" <?php the_permalink(); ?>">[...]</a></div>
					</div>
				</div>
            
            <?php endwhile;
           
          
        wp_reset_postdata();

	    return ob_get_clean();
}

add_shortcode('block','zboom_block');

?>