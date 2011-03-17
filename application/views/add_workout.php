<?php $this->load->view('templates/doctype'); ?>


<html>
<head>
	<meta charset="utf-8" />
	<title>jQuery Mobile: Demos and Documentation</title>
	<?php $this->load->view('templates/head'); ?>

</head> 
<body> 
<div data-role="page" data-theme="b" id="jqm-home">
	<?php $this->load->view('templates/header'); ?>

	<div class="form_wrapper" data-role="content">
		<h3>Welcome, <?php echo $user->first_name; ?></h3>
		<form action="/workouts/submit" method="post">
			<select id="type_select">
				<option value="">Pick Type</option>
				<option selected value="running">Running</option>
				<option value="strength_training">Strength Training</option>
				<option value="other">Other</option>
			</select>
			<input type="text" style="display:none; margin:0 0 10px 0;" name="type" placeholder="Type" />
			<input type="number" name="amount" placeholder="Distance" />
			<select name="amount_unit">
				<option value="">Pick Length Unit</option>
				<option selected value="miles">Miles</option>
				<option value="reps">Reps</option>
			</select>
			<input type="number" name="amount_2" placeholder="Time" />
			<select name="amount_2_unit">
				<option value="">Pick Length Unit</option>
				<option selected value="minutes">Minutes</option>
				<option value="hours">Hours</option>
				<option value="lbs">LBS</option>
				<option value="klg">KLG</option>

				<option value="reps">Kilometers</option>
			</select>
			<textarea name="notes" placeholder="Notes"></textarea>
			<input type="submit" value="Submit" />
		</form>
	</div>
</div>
</body>
</html>
