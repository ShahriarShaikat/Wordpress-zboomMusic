<?php 


function zboom_theme()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');

	load_theme_textdomain('zboom',get_template_directory().'/languages');

	if (function_exists('register_nav_menu')) 
	{
		register_nav_menu('MainMenu',__('Main Menu','zboom'));
	}

    function read_more($limit)
    {
    	$post_content = explode(" ", get_the_content());
    	$slice_content =array_slice($post_content, 0, $limit);
        echo implode(" ", $slice_content);
    }

    register_post_type('zBoomSlider',array(
    	'labels'=> array(
    		'name' => __('Sliders','zboom'),
    		'add_new_item' => __('Add New Slider','zboom'),
    	),
        'public'=> true,
        'supports'=> array('title','thumbnail'),
        'menu_position'=>7,
        'menu_icon'=> get_template_directory_uri().'/images/Slidericon.png',
    ));

    register_post_type('BlocksItem',array(
    	'labels'=>array(
    		'name'=>__('Blocks','zboom'),
    		'add_new_item'=> __('Add New Block','zboom'),
    	),
    	'public'=> true,
    	'supports'=> array('title','editor'),
        'menu_position'=>8,
        'menu_icon'=>'dashicons-text-page',

    ));

    register_post_type('portfollio',array(
        'labels'=>array(
            'name'=>__('Portfollio','zboom'),
            'add_new_item'=> __('Add New Portfollio','zboom'),
        ),
        'public'=> true,
        'supports'=> array('title','editor','thumbnail'),
        'menu_position'=>9,
        'menu_icon'=>'dashicons-welcome-write-blog',

    ));

    register_taxonomy('portfolliotopic','portfollio',array(
        'labels'=>array(
            'name'=>__('Topic','zboom'),
            'add_new_item'=> __('Add New Topic','zboom'),
            'parent_item'=> 'Parent Topic',
        ),
        'public'=> true,
        'hierarchical'=> true,
    ));

    register_taxonomy('portfolliokeyword','portfollio',array(
        'labels'=>array(
            'name'=>__('Keyword','zboom'),
        ),
        'public'=> true,
    ));

    add_filter('widget_text','do_shortcode');
}

add_action('after_setup_theme','zboom_theme');

function zboom_right_sidebar()
{
    register_sidebar(array(
    	'name'=> __('Right Sidebar','zboom'),
    	'description'=> __('Add Your Right Sidebar Here','zboom'),
    	'id'=> 'right_sidebar',
    	'before_widget'=>'<div class="box right_sidebar">',
    	'after_widget'=>'</div></div>',
    	'before_title'=>'<div class="heading"><h2>',
    	'after_title'=>'</h2></div><div class="content">',
	
    ));
    
    register_sidebar(array(
    	'name'=> __('Footer Widgets','zboom'),
    	'description'=> __('Add Your Footer Widgets Here','zboom'),
    	'id'=> 'footer_sidebar',
    	'before_widget'=>'<div class="col-1-4"><div class="wrap-col"><div class="box">',
    	'after_widget'=>'</div></div></div></div>',
    	'before_title'=>'<div class="heading"><h2>',
    	'after_title'=>'</h2></div><div class="content">',
	
    ));

    register_sidebar(array(
        'name'=> __('Contact Sidebar','zboom'),
        'description'=> __('Add Your Contact Sidebar Here','zboom'),
        'id'=> 'contact_sidebar',
        'before_widget'=>'<div class="box right_sidebar">',
        'after_widget'=>'</div></div>',
        'before_title'=>'<div class="heading"><h2>',
        'after_title'=>'</h2></div><div class="content">',
    
    ));
    register_sidebar(array(
        'name'=> __('Block Sidebar','zboom'),
        'description'=> __('Add your list sidebar here','zboom'),
        'id'=> 'block_sidebar',
        'before_widget'=>'<div class="box right_sidebar">',
        'after_widget'=>'</div></div>',
        'before_title'=>'<div class="heading"><h2>',
        'after_title'=>'</h2></div><div class="content">',
    
    ));
}

add_action('widgets_init','zboom_right_sidebar');

/**********************Create user*****************
$create_user = new WP_User(wp_create_user('shorna','shorna','shornaikat@gmail.com'));
 
$create_user->set_role('administrator');

$shawon = new WP_User(wp_create_user('rahim', '12345', 'rahim12@gmail.com'));

$shawon-> set_role('administrator');
**************************/

function zboom_css_jquery()
{

    wp_register_style('zerogrid',get_template_directory_uri().'/css/zerogrid.css');
    wp_register_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css');
    wp_register_style('style',get_template_directory_uri().'/css/style.css');
    wp_register_style('responsive',get_template_directory_uri().'/css/responsive.css');
    wp_register_style('responsiveslides',get_template_directory_uri().'/css/responsiveslides.css');





    wp_register_script('responsiveslides_script',get_template_directory_uri().'/js/responsiveslides.js');
    wp_register_script('script',get_template_directory_uri().'/js/script.js');
    







    
    wp_enqueue_style('zerogrid');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('style');
    wp_enqueue_style('responsive');
    wp_enqueue_style('responsiveslides');
    


    wp_enqueue_script('jquery');
    wp_enqueue_script('responsiveslides_script');
    wp_enqueue_script('script');
    
}

add_action('wp_enqueue_scripts','zboom_css_jquery');

function zboom_css_jquery_forAdmin()
{
    
    wp_register_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css');

    wp_register_script('image_upload',get_template_directory_uri().'/js/image-upload.js', array('media-upload','thickbox'));




    wp_enqueue_style('font-awesome');
    wp_enqueue_style('thickbox');


    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('image_upload');
}
add_action('admin_enqueue_scripts','zboom_css_jquery_forAdmin');




require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/config.php');

include('shortcode.php');



require_once('metabox/init.php');
require_once('metabox/functions.php');


function zboom_metabox()
{
    add_meta_box(
        'custom_metabox',
        'This is the title',
        'call_back_function',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes','zboom_metabox');

function call_back_function($post)
{ ?>


    <label for="food">Type Something</label><br><br>
    <input type="text" id="food" class="widefat" placeholder="Metabox" name="meta_key" value="<?php echo get_post_meta($post->ID, 'meta_key' ,true); ?>">

<?php }

function data_to_database($post_id)
{
    update_post_meta($post_id, 'meta_key' , $_POST['meta_key']);
}

add_action('save_post','data_to_database');


require_once('class-wp-bootstrap-navwalker.php');
require_once('custom-widget.php');


if(file_exists(dirname(__FILE__).'/tgm/example.php'))
{
   require_once(dirname(__FILE__).'/tgm/example.php');
}

function add_function_in_settings()
{
    add_settings_field('demo_section','Demo Text','register_settings_callback_function','general');
    register_setting('general','must_common_id');


    add_settings_field('author_name','Author Name','register_settings_callback_function_a','general');
    register_setting('general','must_common_id');



    add_settings_section('sections_id','Name','callback_settings_section_name','custom_manu_slug');
    add_settings_field('author_names','Author Name','callback_author_names','custom_manu_slug','sections_id');
    register_setting('sections_id','must_common_id');

    add_settings_section('another_sections_id','Age','callback_settings_section_age','custom_manu_slug');
    add_settings_field('author_age','Author Age','callback_author_age','custom_manu_slug','another_sections_id');
    register_setting('another_sections_id','must_common_id');
}

add_action('admin_init','add_function_in_settings');

function callback_settings_section_name()
{
    return 0;
}

function callback_settings_section_age()
{
    return 0;
}

function register_settings_callback_function()
{
    $array = (array)get_option('must_common_id');
    $value = $array['demo_section'];
    echo '<input type="text" class="regular-text" name="must_common_id[demo_section]" value="'.$value.'" >';
}

function register_settings_callback_function_a()
{
    $array = (array)get_option('must_common_id');
    $value = $array['author_name'];
    echo '<input type="text" class="regular-text" name="must_common_id[author_name]" value="'.$value.'" >';
}



function callback_author_names()
{
    $array = (array)get_option('must_common_id');
    $value = $array['author_names'];
    echo '<input type="text" class="regular-text" name="must_common_id[author_names]" value="'.$value.'" >';
}

function callback_author_age()
{
    $array = (array)get_option('must_common_id');
    $value = $array['author_age'];
    echo '<input type="text" class="regular-text" name="must_common_id[author_age]" value="'.$value.'" >';
}


function admin_add_menu()
{
    //add_options_page ->for add into settings
    //add_theme_page  -> for add into appeareance
    //add_menu_page('','','','','','dashicons-class','menu-position')-> for add into menu bar
    //add_submenu_page('page-slug','','','','')-> for add into appeareance
    add_options_page('page_title_for_options','Menu Name','edit_private_pages','custom_manu_slug','callback_custom_menu'); 
}
add_action('admin_menu','admin_add_menu');

function callback_custom_menu()
{
    echo '<h1>Portfollio</h1>'; ?>
    <?php settings_errors(); ?>
    <form action="options.php" method="POST">
    <?php do_settings_sections('custom_manu_slug'); ?>
    <?php settings_fields('sections_id'); ?>
    <?php settings_fields('another_sections_id'); ?>
    <?php submit_button(); ?>
    </form>

<?php }

if(file_exists(dirname(__FILE__).'/custom-menu.php'))
{
   require_once(dirname(__FILE__).'/custom-menu.php');
}