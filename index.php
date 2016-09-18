<?php
include 'templates/header.php';
include 'templates/wrapper.php';

$DIRS_DOWN = 0;

createHeader("R3alB0at Beta", $DIRS_DOWN);
bodyMain("class='page-container-bg-solid page-md'");
?>
	<?php
	wrapper("home", $DIRS_DOWN);
	appendScripts($DIRS_DOWN);
	?>
	</body>
</html>
