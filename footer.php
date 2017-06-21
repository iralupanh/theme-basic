<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">
			<?php get_sidebar('footer-widget');?>
		</div>
		
		<div class="row copyright">
			<p><?php global $lp_options; echo $lp_options['footer-copyright'];?></p>
		</div>
	</div>
</footer>
<?php wp_footer();?>
</body></html>