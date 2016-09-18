<?php
include 'templates/header.php';
$DIRS_DOWN = 0;

createHeader("R3alB0at Beta", $DIRS_DOWN);
bodyMain("class='page-container-bg-solid page-md'");
?>
	<?php
	include 'templates/wrapper.php';
	wrapper("home", $DIRS_DOWN);
	appendScripts($DIRS_DOWN);
	?>
	</body>
</html>
