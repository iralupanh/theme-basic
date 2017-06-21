<?php
// tao shortcode cho image
function lupanh_shortcode_image($atts, $content){
    ob_start();
    $image = extract(shortcode_atts(array(
            'width'     =>  '200px',
            'height'    =>  '200px'
        ),$atts));
        $image = ob_get_clean();
    return '<img height="'.$height.'"width="'.$width.'" src="'.$content.'" />';
}
add_shortcode('image','lupanh_shortcode_image');

//tao shortcode
function lupanh_block_shortcode($atts,$content){
    ob_start();
    
    $block_atts = extract(shortcode_atts(array(
            'number'        => '1'
        ),$atts));
    ?>
    
    <div class="row block01">
			
			<?php 
				$blockitem = new WP_Query(array(
					'post_type' => 'lp-service',
					'posts_per_page'=> $number
					));
					if($blockitem ->have_posts()):
				while($blockitem -> have_posts()) : $blockitem -> the_post();
			?>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title();?></h2>
					<p><?php readmore(5)?></p>
					<div class="more"><a href="<?php the_permalink(); ?>">[...Readmore]</a></div>
				</div>
			</div>
			<?php 
				endwhile;
			?>
			<div id="pagi">
			    <?php lupanh_theme_pagination();
			    endif;
			    wp_reset_postdata();
			    ?>
			</div>
		</div>    
    <?php
    $block = ob_get_clean();
    return $block; 
}
add_shortcode('block','lupanh_block_shortcode');