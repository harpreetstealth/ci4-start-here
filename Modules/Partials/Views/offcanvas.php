<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title" id="offcanvasExampleLabel">Basic Setup Guide</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<div>
			<h3 class="text-primary">
				Development guide
			</h3>
		</div>
		<div>
			<ol>
				<li>
					<a href="<?php echo base_url() ?>">
						Home
					</a>
				</li>
				<?php echo View('\Guide\Views\links'); ?>
			</ol>
		</div>
	</div>
</div>
