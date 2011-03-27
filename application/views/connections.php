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
		<p>This is your friend's workout feed.</p>
		<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
		<?php foreach($workouts as $row): ?>
		<?php print_r($row); ?>

			<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">
				<h3 style="">
				<?php echo $row->first_name; ?> <?php echo ($row->type=="running" ? "ran": ""); ?> <?php echo $row->amount; ?> <?php echo $row->amount_unit; ?> in <?php echo $row->amount_2; ?> <?php echo $row->amount_2_unit; ?>
				</h3>
				<p><?php echo $row->notes; ?></p>
				<p><strong><?php echo $row->first_name; ?> <?php echo $row->last_name; ?></strong> posted <?php echo $row->workout_date; ?></p>
				<span class="ui-li-count ui-btn-up-c ui-btn-corner-all"><a href="/workouts/details/<?php echo $row->workout_id; ?>"><?php echo $row->comment_count; ?> Comments</a></span>

			</li>
		<?php endforeach; ?>
		</ul>
		
		
		

		
		
		
		
	</div>
	
	
	
	<?php $this->load->view('templates/footer'); ?>

</div>
</body>
</html>