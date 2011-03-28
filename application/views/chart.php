<?php $this->load->view('templates/doctype'); ?>
<html>
<head>
	<meta charset="utf-8" />
	<title>A Chart</title>
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
		<?php $this->load->view('charts/workout_frequency'); ?>
	</div>
	<?php $this->load->view('templates/footer'); ?>

</div>
</body>
</html>