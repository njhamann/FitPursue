<?php $this->load->view('templates/doctype'); ?>


<html>
<head>
	<meta charset="utf-8" />
	<title>Progress</title>
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
<ul data-role="listview" class="ui-listview" role="listbox">
			<li role="option" tabindex="0" data-theme="c" class="ui-btn ui-btn-icon-right ui-li ui-btn-up-c">
			<div class="ui-btn-inner"><div class="ui-btn-text">
			<h3 class="ui-li-heading">
			<a href="/progress/charts/workout_frequency" class="ui-link-inherit">Workout Frequecy</a>
			</h3>
			</div>
			</div>
			</li>

		</ul>
	</div>
	

	
	<?php $this->load->view('templates/footer'); ?>

</div>
</body>
</html>
