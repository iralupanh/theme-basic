<?php get_header();?>
<?php 
/*
	Template Name: Contact
*/
?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
				<?php 
					while(have_posts()) : the_post();
				?>
					<article>
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('j F Y');?> with <a href="#"><?php lp_comments_popup_link();?></a>]</div>
							<?php the_content();?>
							
				<?php endwhile; ?>
						 
					</article>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					
					<?php dynamic_sidebar('contact-sidebar');?>
					
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>