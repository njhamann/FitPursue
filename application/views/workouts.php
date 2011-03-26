<?php $this->load->view('templates/doctype'); ?>


<html>
<head>
	<meta charset="utf-8" />
	<title>jQuery Mobile: Demos and Documentation</title>
	<?php $this->load->view('templates/head'); ?>
<style type="text/css">
.ui-li-desc {
white-space: normal;
}
</style>
</head> 
<body> 
<div data-role="page" data-theme="b" id="jqm-home">
	<?php $this->load->view('templates/header'); ?>

	<div data-role="content">

		<?php if ($this->tank_auth->get_username() == $this->uri->segment(1, 0)) { ?>
			<p>This is your workout feed.</p>
		<?php }else{ ?>
				
		<ul data-inset="true" data-theme="d" data-role="listview" class="ui-listview ui-listview-inset ui-corner-all ui-shadow" role="listbox">
				<li role="option" tabindex="0" class="ui-li ui-li-static ui-btn-up-d ui-corner-top">
					<div class="ui-btn-text"><p class="ui-li-aside ui-li-desc">
						<h3 class="ui-li-heading"><?php echo $user[0]->first_name." ".$user[0]->last_name;?></h3>
						<p class="ui-li-desc"><strong>Last Workout: </strong><?php echo $workouts[0]->workout_date; ?></p>
						<!--<p class="ui-li-desc">Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>-->
					
					</div>
				</li>
				<?php if (!$hasConnection) { ?>

				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">

						<h3 class="ui-li-heading"><a href="/profile/add_connection/<?php echo $user[0]->username; ?>" class="ui-link-inherit">Start Following</a></h3>					
				</li>
				<?php }else{ ?>	
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">

						<h3 class="ui-li-heading"><a href="/profile/remove_connection/<?php echo $user[0]->username; ?>" class="ui-link-inherit">Stop Following</a></h3>					
				</li>
				<?php } ?>	

			</ul>
			
		<?php } ?>		
		

		
		
				

		<ul id="workout_list" data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
		<?php foreach($workouts as $row): ?>
			<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">
				<h3 style="">
				<?php echo ($this->tank_auth->get_username() == $this->uri->segment(1, 0) ? "You" : $user[0]->first_name) . " " .($row->type=="running" ? "ran": $row->type); ?> <?php echo $row->amount; ?> <?php echo $row->amount_unit; ?> in <?php echo $row->amount_2; ?> <?php echo $row->amount_2_unit; ?>
				</h3>
				<p><?php echo $row->notes; ?></p>
				<p>Posted <?php echo $row->workout_date; ?></p>

			</li>
		<?php endforeach; ?>
		</ul>
	</div>
	

	
	<?php $this->load->view('templates/footer'); ?>

</div>
</body>
</html>
