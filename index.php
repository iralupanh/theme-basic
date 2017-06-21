<?php get_header();?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					
					<?php while(have_posts()): the_post();?>
					
					<article>
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
						<div class="info">[By:<strong><?php the_author();?></strong> on <?php the_time('j F Y')?> with <?php lp_comments_popup_link();?>]</div>
						<p><?php readmore(15); ?> ...<a href="<?php the_permalink();?>">Readmore</a></p>
					</article>
					
					<?php endwhile; ?>
					
					<div id="pagi">
					<?php 
						lupanh_theme_pagination();
					?>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>