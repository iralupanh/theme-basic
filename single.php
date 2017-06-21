<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
				<?php 
					$prefix ="_cmb2_";
					while(have_posts()) : the_post();
				?>
					<article>
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('j F Y');?> with <a href="#"><?php lp_comments_popup_link();?></a>]</div>
							<?php the_content();?>
							
							
							<?php
							
							/** ------ REDUX framework
							<h1><?php  echo get_post_meta(get_the_ID(),$prefix.'text',true);?></h1>
							<h1><?php  echo get_post_meta($post->ID,$prefix.'textarea',true);?></h1>
							<p>GENDER: <?php  echo get_post_meta($post->ID,$prefix.'radio',true);?></p>
							
							
							
							<h2>
							Multicheck:  
							<?php
								echo get_post_meta(get_the_ID(),$prefix.'multicheck',true);
							?>
								
							</h2>
							 **/
							?>
							
							
							
						<div class="comment">
							<?php comments_template();?>
						</div>	
							
							
							
				<?php endwhile; ?>
						
						<?php
						/** ----------- Redux frameword
						<h1><?php global $post; echo get_post_meta($post->ID,$prefix.'text',true);?></h1>
						<h1><?php  echo get_post_meta($post->ID,$prefix.'text_money',true);?></h1>
						<h1>thoi gian:<?php  echo get_post_meta($post->ID,$prefix.'text_date',true);?></h1>
						<h1>Timezone:<?php  echo get_post_meta($post->ID,$prefix.'timezone',true);?></h1>
						<h1>Timezonestamp:<?php  echo get_post_meta($post->ID,$prefix.'timezonestamp',true);?></h1>
						<h1>ban chon gioi tinh gi: 
						<?php  $number = get_post_meta($post->ID,$prefix.'radio',true);
							if($number == 'male'){
								echo "ban chon la male";
							}elseif($number =='female'){
								echo "ban cho la female";
							}else{
								echo "ban khong chon gi ca";
							}
							
							
						?>
						**/ ?>
					</article>
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>