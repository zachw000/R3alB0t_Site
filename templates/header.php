<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php
// Generates Directory String
function getUpDir($foldersDown) {
	$prependData = "";
	if ($foldersDown != 0) {
		for ($i = 0; $i < $foldersDown; $i++)
			$prependData .= "../";
	}
	
	return $prependData;
}

function createHeader($title="R3alB0at", $foldersDown=0) {	
	$prependData = getUpDir($foldersDown);
?>
<head>
	<meta charset="utf-8" />
	<title><?php if ($title != NULL) { echo $title; } else { echo "R3alB0at"; } ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="R3alB0at is a Discord bot designed to bring voice, entertainment, and first class customization to the masses."
		name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	<link href="<?php echo $prependData; ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $prependData; ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $prependData; ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $prependData; ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<link href="<?php echo $prependData; ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $prependData; ?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $prependData; ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $prependData; ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL STYLES -->
	<link href="<?php echo $prependData; ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
	<link href="<?php echo $prependData; ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
	<!-- END THEME GLOBAL STYLES -->
	<!-- BEGIN THEME LAYOUT STYLES -->
	<link href="<?php echo $prependData; ?>assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $prependData; ?>assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
	<link href="<?php echo $prependData; ?>assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
	<!-- END THEME LAYOUT STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<?php
}

function appendScripts($foldersDown) {
	$prependData = getUpDir($foldersDown);
?>
	 <!--[if lt IE 9]>
<script src="<?php echo $prependData; ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo $prependData; ?>assets/global/plugins/excanvas.min.js"></script> 
<script src="<?php echo $prependData; ?>assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
	<!-- BEGIN CORE PLUGINS -->
	<script src="<?php echo $prependData; ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo $prependData; ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo $prependData; ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo $prependData; ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo $prependData; ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="<?php echo $prependData; ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo $prependData; ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
	<script src="<?php echo $prependData; ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
	<script src="<?php echo $prependData; ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL SCRIPTS -->
	<script src="<?php echo $prependData; ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
	<!-- END THEME GLOBAL SCRIPTS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo $prependData; ?>assets/pages/scripts/profile.min.js" type="text/javascript"></script>
	<script src="<?php echo $prependData; ?>assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME LAYOUT SCRIPTS -->
	<script src="<?php echo $prependData; ?>assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
	<script src="<?php echo $prependData; ?>assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
	<script src="<?php echo $prependData; ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
	<script src="<?php echo $prependData; ?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
	<!-- END THEME LAYOUT SCRIPTS -->
<?php
}

function bodyMain($attributes) {
?>
	<body<?php if ($attributes != NULL) echo " " . $attributes; ?>>
<?php
}