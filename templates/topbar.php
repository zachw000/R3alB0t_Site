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
			<a href="javascript:;" class="menu-toggler"></a>
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false">
							<i class="icon-bell"></i>
							<?php
							// temporary value, at least until oauth and databases is implemented
							$alerts = false;
							$alerts_total = 2;
							if ($alerts) {
							?>
							<span class="badge badge-default"><?php echo $alerts_total; ?></span>
						</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3>You have <strong><?php echo $alerts_total; ?> new alerts on your server.</h3>
									<a href="<?php echo $prependData; ?>alerts?UID=userID">View all</a>
								</li>
								<li>
									<div class="slimScrollDiv" style="position:relative; overflow: hidden; width: auto; height: 300px;">
										<ul class="dropdown-menu-list scroller" style="height: 300px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
											<!-- SHOW ALL ALERTS UP TO 9 ITEMS //-->
											<!-- EXAMPLE
											<li>
												<a href="javascript:;">
													<span class="time">10 mins</span>
													<span class="details">
														<span class="label label-sm label-icon label-<info, warning, or danger>">
															<i class="fa fa-bell-o"></i>
														</span>
														Alert message
													</span>
												</a>
											</li>
											//-->
										</ul>
										<div class="slimScrollBar"></div>
										<div class="slimScrollRail"></div>
									</div>
								</li>
							</ul>
							<?php
							} else {
							?>
							</a>
							<?php
							}
							?>
					</li>
				</ul>
			</div>
		</div>
	</div>
<?php
}