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
	
		<ul id="workout_list" data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
			<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">
				<h3 style="">
				<?php echo ($this->tank_auth->get_user_id() == $workout->user_id ? "You" : $workout->first_name) . " " .($workout->type=="running" ? "ran": $workout->type); ?> <?php echo $workout->amount; ?> <?php echo $workout->amount_unit; ?> in <?php echo $workout->amount_2; ?> <?php echo $workout->amount_2_unit; ?>
				</h3>
				<p><?php echo $workout->notes; ?></p>
				<p>Posted <?php echo $workout->workout_date; ?></p>

			</li>
		</ul>
	
		<ul id="workout_list" data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
		<?php foreach($comments as $row): ?>
			<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">
				<h3 style=""><?php echo $row->comment; ?></h3>
				<p>Posted <?php echo $row->posted_date; ?> by <?php echo $row->first_name." ".$row->last_name; ?></p>
			</li>
		<?php endforeach; ?>
		</ul>
	
		<?php if($this->tank_auth->is_logged_in()) { ?>
		<form action="/workouts/submit_comment/<?php echo $this->uri->segment(3, 0); ?>" method="post">
			<input type="hidden" name="owner_id" value="<?php echo $workout->user_id; ?>" />
			<textarea name="comment" placeholder="Add your comment here..."></textarea>
			<input type="submit" value="Post" />
		</form>
		<?php }else{ ?>
		<p>Must be logged in to comment.</p>
		<?php } ?>


<!--
		<?php if ($this->tank_auth->get_username() == $this->uri->segment(1, 0)) { ?>
			<p>This is your workout feed.</p>
		<?php }else{ ?>
				
		<ul data-inset="true" data-theme="d" data-role="listview" class="ui-listview ui-listview-inset ui-corner-all ui-shadow" role="listbox">
				<li role="option" tabindex="0" class="ui-li ui-li-static ui-btn-up-d ui-corner-top">
					<div class="ui-btn-text"><p class="ui-li-aside ui-li-desc">
						<h3 class="ui-li-heading"><?php echo $user[0]->first_name." ".$user[0]->last_name;?></h3>
						<p class="ui-li-desc"><strong>Last Workout: </strong><?php echo $workouts[0]->workout_date; ?></p>					
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

				<span class="ui-li-count ui-btn-up-c ui-btn-corner-all"><a href="/workouts/comments/<?php echo $row->id; ?>">Comments 62</a></span>
			</li>
		<?php endforeach; ?>
		</ul>
	-->
	</div>
	

	
	<?php $this->load->view('templates/footer'); ?>

</div>
</body>
</html>
