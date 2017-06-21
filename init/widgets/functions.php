<?php 
// create widget for website

class lupanh_widget_test extends WP_Widget {
    function __construct(){
        parent::__construct('lupanh_widget_test','widget_lupanh',array('description'=>'la widget moi cua lupanh'));
    }
    
    public function form($instance){
       $default = array(
           'title'  => 'LP_Widget',
           'content'    => 'Nhap noi dung'
           );
        $instance = wp_parse_args($instance,$default);
        $title = esc_attr($instance['title']);
        $content = esc_attr($instance['content']);
        
    ?>
    
        <label for="<?php echo esc_attr($this->get_field_id('title'));?>">Tieu De:</label>
        <input type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>" id="<?php echo esc_attr($this->get_field_id('title')); ?>" value="<?php echo esc_attr($title);?>" class="widefat"/>
        <label for="<?php echo esc_attr($this->get_field_id('content')); ?>">Nhap noi dung: </label>
        <textarea name="<?php echo esc_attr($this->get_field_name('content')); ?>" id="<?php echo esc_attr($this->get_field_id('content')); ?>" class="widefat"><?php echo esc_attr($content);?></textarea>
        
<?php
    }
   public function update($new_instance, $old_instance){
       $instance = $old_instance;
       $instance['title'] = strip_tags( $new_instance['title']);
       $instance['content'] =  strip_tags( $new_instance['content']);
       return $instance;
   }
    
    public function widget($args, $instance){
        $title = apply_filters('widget_title',esc_html($instance['title']));
        $content = esc_html($instance['content']);
        echo $args['before_widget'].$args['before_title'].$title.$args['after_title'].'<div class="content">'.$content.'</div>'.$args['after_widget'];
        echo $content;
    }
    
    
} 

function lupanh_widget(){
    register_widget('lupanh_widget_test');
}
add_action('widgets_init','lupanh_widget');