
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="left-side">
			<a href="/" class="btm-logo">
				<img style="width: 90px;" src="<?php echo bloginfo('template_directory').'/assets/img/white-logo.svg';?>" alt="logo">
			</a>

			<nav>
				<?php
				wp_nav_menu( array(	
					'theme_location' => 'footer'
				) );
				?>
			</nav>
		</div>
		


		<div class="address-info">
			<a href="tel:(404) 314-8374">Phone: (404) 314-8374</a>
			<a href="mailto:kurt@southeastsucculents.com">Email: kurt@southeastsucculents.com</a>
			<a href="">Subscribe</a>

			<div class="social-icons">
				<a target="_blank" href="https://www.facebook.com/southeastsucculents">
					<i class="fab fa-facebook-square"></i>
				</a>
				<a target="_blank" href="https://twitter.com/sesucculents">
					<i class="fab fa-twitter-square"></i>
				</a>
				<a target="_blank" href="https://www.pinterest.com/sesucculents/">
					<i class="fab fa-pinterest-square"></i>
				</a>
			</div>
		</div>

	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
