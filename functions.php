<?php 
define("LP_THEME_URL",esc_url(get_template_directory_uri()));
define("LP_THEME_DIR",esc_url(get_template_directory()));
/**-------------------------------------------------------------
---------------Cai dat cac ham mac dinh cho theme---------------
--------------------------------------------------------------**/
if(!function_exists('lupanh_theme_setup')){
    function lupanh_theme_setup(){
        add_theme_support('title-tag');
        add_theme_support('custom-header');
        add_theme_support('custom-background');
        add_theme_support('post-thumbnails');
        add_theme_support('automattic-feed-link');
        
        load_theme_textdomain('lupanh',LP_THEME_DIR.'/languages');
        
        if(function_exists('register_nav_menu')){
            register_nav_menu('main-menu',__("MAIN MENU",'lupanh'));
        }
        
        function lp_comments_popup_link(){
            
                comments_popup_link(
                __('Leave a comment','lupanh'),
                __('One comment','lupanh'),
                __('% Comments','lupanh'),
                __('Real all comments','lupanh')
                );
            
        }
        
        function readmore($lenght){
            $post_content = explode(" ",get_the_content());
            $input_content = array_slice($post_content, 0, $lenght);
            $out_content = implode(" ",$input_content);
            echo $out_content;
        }
        
//$lupanh_user=new WP_User(wp_create_user('lupanh_nguyen_pro','trong123456','trongnguyenpro@gmail.com'));
//$lupanh_user -> set_role('author');
        
    
        add_filter('widget_text','do_shortcode');
    }   
   add_action('after_setup_theme','lupanh_theme_setup');
}

if(!function_exists('lupanh_custom_post_type')){
    function lupanh_custom_post_type(){
        register_post_type('lp-slider',array(
            'labels'    =>array(
                'name'          => __('Slider','lupanh'),
                'add_new_item'  =>  __('Add Slider','lupanh'),
                'add_new'       => __('Add_new_slider','lupanh')
                ),
            'public'    => true,
            'supports'  =>array(
                'title','thumbnail','custom-fields'),
            'menu_icon' => LP_THEME_URL.'/images/slider.png'
            //menu_position =>
            ));
            
        register_post_type('lp-service',array(
            'labels'    => array(
                    'name'          => __('BLocks','lupanh'),
                    'add_new_item'  => __('Add Blocks', 'lupanh'),
                    'add_new'       => __('Add_new_Blocks','lupanh')
                ),
            'public'    => true,
            'supports'  =>array('title','editor'),
            'menu_icon' => LP_THEME_URL.'/images/block.png'
        ));
        
        register_post_type('lp-gallery',array(
            'labels'    => array(
                    'name'          => __('Gallery','lupanh'),
                    'add_new_item'  => __('Add Gallery', 'lupanh'),
                    'add_new'       => __('Add_New_Gallery','lupanh')
                ),
            'public'    => true,
            'supports'  =>array('title','editor','thumbnail'),
            'menu_icon' => LP_THEME_URL.'/images/gallerys.png'
        ));
    }
    add_action('init','lupanh_custom_post_type');
}


function lupanh_theme_metabox(){
    printf(__('<span class="author">Post by: %1$s </span>','lupanh'),get_the_author());    
    printf(__('<span class="date-published">at: %1$s </span>','lupanh'),get_the_date());
}


function lupanh_theme_sidebar(){
    register_sidebar(array(
        'name'          =>  __('Right Sidebar','lupanh'),
        'id'            =>  'right-sidebar',
        'description'   =>  __('Right sidebar here','lupanh'),
        'before_widget'  =>  '<div class="box right-sidebar">',
        'after_widget'  =>  '</div></div>',
        'before_title'   =>  '<div class="heading"><h2>',
        'after_title'   =>  '</h2></div><div class="content">'
        ));
        
    register_sidebar(array(
        'name'          =>  __('Contact Sidebar','lupanh'),
        'id'            =>  'contact-sidebar',
        'description'   =>  __('Contact sidebar here','lupanh'),
        'before_widget'  =>  '<div class="box right-sidebar">',
        'after_widget'  =>  '</div></div>',
        'before_title'   =>  '<div class="heading"><h2>',
        'after_title'   =>  '</h2></div><div class="content">'
        ));
        
    register_sidebar(array(
        'name'          =>  __('Footer Widget','lupanh'),
        'id'            =>  'footer-widget',
        'description'   =>  __('Footer Widget  Here','lupanh'),
        'before_widget'  =>  '<div class="col-1-4"><div class="wrap-col"><div class="box">',
        'after_widget'  =>  '</div></div></div></div>',
        'before_title'   =>  '<div class="heading"><h2>',
        'after_title'   =>  '</h2></div><div class="content">'
        ));
}
add_action('widgets_init','lupanh_theme_sidebar');

function lupanh_theme_pagination(){
    the_posts_pagination(array(
        'prev_text'     => "PREV",
        'next_text'     => 'NEXT',
        'screen_reader_text'    => ' ',
        'before_page_number'    =>'<b>',
        'after_page_number'     =>'</b>'
        ));
}


function lupanh_theme_script(){
    // dang ky css trong web
    wp_register_style('lp-zerogrid',LP_THEME_URL.'/css/zerogrid.css');
    wp_register_style('lp-style-web',LP_THEME_URL.'/css/style-web.css');
    wp_register_style('lp-responsive',LP_THEME_URL.'/css/responsive.css');
    wp_register_style('lp-responsiveslides',LP_THEME_URL.'/css/responsiveslides.css');
    
    wp_enqueue_style('lp-zerogrid');
    wp_enqueue_style('lp-style-web');
    wp_enqueue_style('lp-responsive');
    wp_enqueue_style('lp-responsiveslides');
    
    //dang ky js cho web
   wp_register_script('lp-jquery-min',LP_THEME_URL.'/js/jquery.min.js',['jquery']);
   wp_register_script('lp-responsiveslides',LP_THEME_URL.'/js/responsiveslides.js',['jquery']);
   wp_register_script('lp-script',LP_THEME_URL.'/js/script.js',['jquery']);
   
   wp_enqueue_script('lp-jquery-min');
   wp_enqueue_script('lp-responsiveslides');
   wp_enqueue_script('lp-script');
}
add_action('wp_enqueue_scripts','lupanh_theme_script');
 

require_once(LP_THEME_DIR.'/lib/redux-framework/ReduxCore/framework.php');
require_once(LP_THEME_DIR.'/lib/redux-framework/sample/config.php');


include(LP_THEME_DIR.'/shortcodes.php'); 


/*--------------- CUSTOM-FIELDS AND METABOX -------------------*/

function lupanh_metabox(){
    add_meta_box('thongtin','THONG TIN UNG DUNG','lupanh_meta_box',array('post'),'normal');
}
add_action('add_meta_boxes','lupanh_metabox');

function lupanh_meta_box($post){ ?>
    <label for="food">Nhap gia tri o day:</label>
    <input type="text" name="lupanh" id="food" class="widefat" value="<?php echo get_post_meta($post->ID,'lupanh',true);?>"/>
    
    
    <label for="eat">Nhap gia tri o day:</label>
    <input type="text" name="lupanh1" id="eat" class="widefat" value="<?php echo get_post_meta($post->ID,'lupanh1',true);?>"/>
    
<?php
}

function lupanh_database_metabox($post_id){
    if(isset($_POST['lupanh'])){
    update_post_meta($post_id, 'lupanh',$_POST['lupanh']);
    }
    if(isset($_POST['lupanh1'])){
    update_post_meta($post_id, 'lupanh1',$_POST['lupanh1']);
    }
}
add_action('save_post','lupanh_database_metabox');


/*------- CMB2 METABOX  AND CUSTOM FIELDS ---------*/
require_once(LP_THEME_DIR.'/inc/metaboxs/init.php');
require_once(LP_THEME_DIR.'/inc/metaboxs/functions.php');

/* -------------- WIDGET API ------------------------------- */

require_once(LP_THEME_DIR.'/init/widgets/functions.php');



