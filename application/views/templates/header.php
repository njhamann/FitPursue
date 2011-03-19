



	<?php if (!$this->tank_auth->is_logged_in()) { ?>

<div data-role="header" class="ui-bar-a ui-header" data-theme="a">
		<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">FitPursue</h1>
	<div data-role="navbar">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/auth/login">Login</a></li>
			<li><a href="/auth/register">Signup</a></li>
		</ul>
	</div><!-- /navbar -->
	
</div>
	<?php } else { ?>
<div data-role="header" class="ui-bar-a ui-header" data-theme="a">
		<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">FitPursue</h1>
	<div data-role="navbar">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/<?php echo $this->tank_auth->get_username(); ?>">Profile</a></li>
			<li><a href="/workouts">+Workout</a></li>
			<li><a href="/settings">Settings</a></li>

		</ul>
	</div><!-- /navbar -->
</div>
	<?php } ?>				



<!--

<div class="ui-bar ui-bar-a  ui-header">
		<div style="float:left; margin:5px 0 0 0;">
		<h1 tabindex="0"  style="float:left;">FitPursue</h1>
</div>
				<div data-type="horizontal" data-role="controlgroup" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal" style="float:right; margin:0 20px 0 0">
					<a data-inline="true" data-role="button" href="/" data-theme="a" class="ui-btn ui-btn-up-a ui-btn-inline ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">Home</span></span></a>
					<a data-inline="true" data-role="button" href="/<?php echo $this->session->userdata('username'); ?>" data-theme="a" class="ui-btn ui-btn-up-a ui-btn-inline"><span class="ui-btn-inner"><span class="ui-btn-text">Profile</span></span></a>
					<a data-inline="true" data-role="button" href="/workouts" data-theme="a" class="ui-btn ui-btn-inline ui-corner-right ui-controlgroup-last ui-btn-up-a"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">+ Workout</span></span></a>
				</div>
			</div>
			-->
