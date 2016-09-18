<?php
// topbar.php Contains user account access code.
function generateTopBar($layout, $prependData) {
?>
	<div class="page-header-top">
		<div class="container">
			<div class="page-logo">
				<a href="<?php echo $prependData; ?>index.php">
					<img src="<?php echo $prependData; ?>assets/logo_color.png" alt="R3alB0t" class="logo-default" />
				</a>
			</div>
		</div>
	</div>
<?php
}