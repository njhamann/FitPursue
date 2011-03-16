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
		<p>This is your workout feed.</p>
		<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
		<?php foreach($workouts as $row): ?>
			<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">
				<h3 style="">
				You <?php echo ($row->type=="running" ? "ran": $row->type); ?> <?php echo $row->amount; ?> <?php echo $row->amount_unit; ?> in <?php echo $row->amount_2; ?> <?php echo $row->amount_2_unit; ?>
				</h3>
				<p><?php echo $row->notes; ?></p>
				<p>Posted <?php echo $row->workout_date; ?></p>

			</li>
		<?php endforeach; ?>
		</ul>
	</div>
	
	
	

</div>
</body>
</html>

<!-- 
<ul data-inset="true" data-theme="d" data-role="listview" class="ui-listview ui-listview-inset ui-corner-all ui-shadow" role="listbox">
				<li role="option" tabindex="0" class="ui-li ui-li-static ui-btn-up-d ui-corner-top">Acura</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Audi</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">BMW</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Cadillac</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Chrysler</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Dodge</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Ferrari</li>
				<li role="option" tabindex="0" class="ui-li ui-li-static ui-btn-up-d">Ford</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">GMC</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Honda</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Hyundai</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Infiniti</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Jeep</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Kia</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Lexus</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Mini</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Nissan</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Porsche</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Subaru</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Toyota</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d">Volkswagon</li>
				<li role="option" tabindex="-1" class="ui-li ui-li-static ui-btn-up-d ui-corner-bottom">Volvo</li>
			</ul>
 -->