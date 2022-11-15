<?php 



function zboom_custom_field()
{
	add_settings_section('owner_details','About Owner','callback_owner_details','manage_options_slug');



	add_settings_field('owner_name','Owner Name','callback_owner_name','manage_options_slug','owner_details');
	register_setting('owner_details','zboom_custom_menu_id');



    add_settings_field('owner_name_show','Owner Name show','callback_owner_name_show','manage_options_slug','owner_details');
    register_setting('owner_details','zboom_custom_menu_id');

    
}
add_action('admin_init','zboom_custom_field');

function callback_owner_details()
{
	return 0;
}

function callback_owner_name()
{
	$array = (array)get_option('zboom_custom_menu_id');
    $value = $array['owner_name'];
    echo '<input type="text" class="regular-text" name="zboom_custom_menu_id[owner_name]" value="'.$value.'" >';
}

function callback_owner_name_show()
{
    $array = (array)get_option('zboom_custom_menu_id');
    $shows = $array['owner_name_show'];
    echo '<input type="checkbox" name="zboom_custom_menu_id[owner_name_show]" value="1" '.checked(1, $shows, false).'/>';
}

function zboom_custom_menu()
{
	//add_options_page ->for add into settings
    //add_theme_page  -> for add into appeareance
    //add_menu_page('','','','','','dashicons-class','menu-position')-> for add into menu bar
    //add_submenu_page('page-slug','','','','')-> for add into appeareance
	add_menu_page('manage_options','Manage Options','edit_private_pages','manage_options_slug','callback_manage_option','dashicons-admin-page','58');
}
add_action('admin_menu','zboom_custom_menu');

function callback_manage_option()
{ ?>
	<div class="wrap">
	<h1>Owner Details</h1>
    <?php settings_errors(); ?>
    <form action="options.php" method="POST">
    <?php do_settings_sections('manage_options_slug'); ?>
    <?php settings_fields('owner_details'); ?>
    <?php submit_button(); ?>
    </form>
    </div>

<?php
}


?>