<?php wp_footer(); ?>

		<footer>
			<div class="container">
				<div class="row footer">
					<div class="col-12 panel-container">
						<div class="panel email">
							<a class="cta" href="mailto:info@northerncsp.net">info@northerncsp.net</a>
						</div>
						<div class="panel logo">
							<img src="<?php echo get_theme_file_uri('assets/svg/logo-northern-wychwood.svg'); ?>" alt="Wychwood Logo">
						</div>
						<div class="panel cta-footer">
							<a class="contact-cta cta" href="#contact-us">Contact</a>
						</div>
					</div><!--panel-container-->
					<div class="col-12 bottom-section">
						<p class="copyright">&copy; 2019 Northern Wychwood Limited. All rights reserved.</p>
						<div class="cta-legal">
							<a href="<?php echo esc_url(site_url('/privacy-policy')); ?>">Privacy Policy</a>
						</div>
					</div>
				</div><!--row-->
			</div><!--container-->
		</footer><!--footer-->
	</body>
</html>
