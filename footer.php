<footer>
	<?php global $redux_demo; ?>
	<div class="wrap-footer zerogrid">
		<div class="row block09">


			<?php dynamic_sidebar('footer_sidebar'); ?>

			

		</div>
		
		<div class="row copyright">
			<p><?php echo $redux_demo['footer_text']; ?></p>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>
</body>
</html>