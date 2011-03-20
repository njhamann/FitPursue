



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
<div data-role="header" class="ui-bar-a ui-header" data-theme="a"  data-position="inline">
		<h1 class="ui-title" tabindex="0" role="heading" aria-level="1">FitPursue</h1>
			<a href="/workouts" data-icon="add" class="ui-btn-right">Add</a>

	<div data-role="navbar">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/<?php echo $this->tank_auth->get_username(); ?>">Profile</a></li>
			<li><a href="/workouts">Progress</a></li>
			<li><a href="/settings">Settings</a></li>

		</ul>
	</div><!-- /navbar -->
</div>
	<?php } ?>				
