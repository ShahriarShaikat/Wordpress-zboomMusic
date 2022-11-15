<?php

class custom_widget extends WP_Widget
{
	
	function __construct()
	{
		parent::__construct('custom_widget','About Me',array('description'=>'Our Custom Widget'));
	}

	public function form($instance)
	{

	$title = $instance['title'];
	$destination = $instance['destination'];
	$imageupload = $instance['imageupload'];
	$imageshow = $instance['imageshow'];

	?>


	<p>
	<label for="<?php echo $this->get_field_id('title'); ?>">Name:</label>
	<input id="<?php echo $this->get_field_id('title'); ?>" type="text" class="widefat title" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>">
	</p>
	<p>
	<label for="<?php echo $this->get_field_id('destination'); ?>">Destination:</label>
	<input id="<?php echo $this->get_field_id('destination'); ?>" type="text" class="widefat" name="<?php echo $this->get_field_name('destination'); ?>" value="<?php echo $destination; ?>">
	</p>


	<p>
    	   <label for="<?php echo $this->get_field_id('imageshow'); ?>">Show photo  </label>
    	   <input type="checkbox" <?php checked($imageshow,1); ?> id="<?php echo $this->get_field_id('imageshow'); ?>" name="<?php echo $this->get_field_name('imageshow'); ?>" value="1" >
    </p>	
    <p>
	  <label for="<?php echo $this->get_field_id('imageupload'); ?>">Photo: </label>
	</p>
	<div class="uploadedimage">
		<img src="<?php echo esc_url($instance['imageupload']); ?>" height="100px" weight="100px">
	</div>
	
    
    <p>
	  <input id="<?php echo $this->get_field_id('imageupload'); ?>" type="text" class="widefat inserimage" name="<?php echo $this->get_field_name('imageupload'); ?>" value="<?php echo $imageupload; ?>">
	</p>
    <button class="uploadimagee">Select/Upload Image</button>
    <p class="checkbox_showup">
    	<label for="">Click here to save  </label><input type="checkbox"  id="">
    </p>
	<?php }



	public function widget($args,$instance)
	{
		$output = $args['before_widget'].$args['before_title'].$instance['title'].$args['after_title'];
		$output.= $instance['destination'];
		if ($instance['imageshow'] == 1)
		{
			$output.= '<br><br><img src="'.$instance['imageupload'].'">'.$args['after_widget'];
		}
		else
		{
			$output.= $args['after_widget'];
		}
		echo $output;
	}

	public function update($new_instance,$old_instance)
	{
		$instance = $old_instance;

		$instance['title']        =  $new_instance['title'];
		$instance['destination']  =  $new_instance['destination'];
		$instance['imageupload']  =  $new_instance['imageupload'];
		$instance['imageshow']    =  $new_instance['imageshow'];

		return $instance;
	}
}

add_action('widgets_init',function(){
	register_widget('custom_widget');
});
?>