<?php
// this file assumes the template header.php has been included.
function wrapper($layout_type, $dirs_down) {
	$prependData = getUpDir($dirs_down);
?>
	<div class="page-wrapper">
	<?php topHeader($layout_type, $prependData); ?>
	</div>
<?php
}