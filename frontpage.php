<?php get_header();?>
<?php
/*
	Template name: home
*/
?>
<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					
					<?php 
						$item= new WP_Query(array(
							'post_type'=>'lp-slider',
							'posts_per_page'=> 3
						));
						while($item->have_posts()) : $item->the_post();
					?>
					<li><?php the_post_thumbnail();?></li>
					<?php 
						endwhile;
						wp_reset_postdata();
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			
			<?php 
				$blockitem = new WP_Query(array(
					'post_type' => 'lp-service',
					'posts_per_page'=> '3'
					));
				while($blockitem -> have_posts()) : $blockitem -> the_post();
			?>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title();?></h2>
					<p><?php readmore(20)?></p>
					<div class="more"><a href="<?php the_permalink();?>">[...Readmore]</a></div>
				</div>
			</div>
			<?php 
				endwhile;
				wp_reset_postdata();
			?>
			
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					
					
					<?php 
						$postlast = new WP_Query(array(
							'post_type'=>'post',
							'posts_per_page'=> 4
						));	
						while($postlast->have_posts()) : $postlast->the_post();
					?>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail();?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
								<div class="info"><?php lupanh_theme_metabox();?></div>
								<p><?php readmore(35);?><a href="<?php the_permalink();?>"> [...Readmore]</a></p>
							</div>
						</div>
					</article>
					
					<?php 
						endwhile;
						wp_reset_postdata();
					?>
					
					
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>