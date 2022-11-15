<?php

function our_cmb_metabox(array $metabox)
{
	$prefix = "_pre_";
	$metabox[] = array
	(
		'title'=>'Metabox Title',
		'id'=> 'meta_id',
		'object_types'=> array('post'),
		'fields' => array
		(
			array
			(
				'name'=> 'Metabox Type : text',
				'type'=> 'text',
				'id'=> $prefix.'new_metabox_text',
				'before'=> 'before text'
			),
			array
			(
				'name'=> 'Metabox Type : Multicheck',
	            'type'           => 'taxonomy_multicheck',
				'taxonomy'       => 'post_tag',
				'id'=> $prefix.'new_metabox_multicheckk'
			),
			array
			(
				'name'=> 'Metabox Type : Wysiwyg',
				'type'=> 'wysiwyg',
				'id'=> $prefix.'new_metabox_wysiwyg',
				'options' => array
				(
	               //'wpautop' => true, // use wpautop?
	               //'media_buttons' => true, // show insert/upload button(s)
	               //'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
	               'textarea_rows' => get_option('default_post_edit_rows', 6), // rows="..."
	               //'tabindex' => '',
	               //'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
	               //'editor_class' => '', // add extra class(es) to the editor textarea
	               //'teeny' => false, // output the minimal editor config used in Press This
	               //'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
	               //'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
	               //'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
	            )
			),
			array
			(
				'name'=> 'Metabox Type : File-list',
				'type'=> 'file_list',
				'id'=> $prefix.'new_metabox_file_list'
			),
			array
			(
				'name'=> 'Metabox Type : Money',
				'type'=> 'text_money',
				'id'=> $prefix.'new_metabox_money',
				'before_field'=> '&'
			),
			array
			(
				'name'=> 'Metabox Type : radio',
				'type'=> 'radio',
				'id'=> $prefix.'new_metabox_radio',
				'options' => array
				(
					'Male'=> 'Male',
					'Female'=> 'Female',
					'Other'=> 'Other'
				),
				
			),
			array
			(
				'name'=> 'Metabox Type : Textarea',
				'type'=> 'textarea',
				'id'=> $prefix.'new_metabox_textarea',
			),
			array
			(
				'name'=> 'Metabox Type : Color Picker',
				'type'=> 'colorpicker',
				'id'=> $prefix.'new_metabox_colorpicker',
				'options' => array
				(
				   'alpha' => true, // Make this a rgba color picker.
			    )
			),
			array
			(
				'name'=> 'Metabox Type : Taxonomy Selectt',
	            'type'           => 'taxonomy_select',
				'taxonomy'       => 'category',
				'id'=> $prefix.'metabox_taxonomyyhdsjkj'
			),
		)
	);
	return $metabox;
}

add_action('cmb2_meta_boxes','our_cmb_metabox');
?>