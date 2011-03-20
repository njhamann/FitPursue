<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>


<?php $this->load->view('./templates/doctype'); ?>


<html>
<head>
	<meta charset="utf-8" />
	<title>jQuery Mobile: Demos and Documentation</title>
	<?php $this->load->view('./templates/head'); ?>
<style type="text/css">
.ui-li-desc {
white-space: normal;
}
</style>
</head> 
<body> 


<div data-role="page" data-theme="b" id="jqm-home">
<?php $this->load->view('./templates/header'); ?>


	<div class="form_wrapper" data-role="content">

<?php echo form_open($this->uri->uri_string()); ?>
<div>
<?php echo form_label($login_label, $login['id']); ?>
</div>
<?php echo form_input($login); ?>
<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
<div>
<?php echo form_label('Password', $password['id']); ?>
</div>
<?php echo form_password($password); ?>
<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
	

	<?php if ($show_captcha) {
		if ($use_recaptcha) { ?>

			<div id="recaptcha_image"></div>

			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>

			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>

<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
<?php echo form_error('recaptcha_response_field'); ?>
		<?php echo $recaptcha_html; ?>

	<?php } else { ?>

			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?>

<?php echo form_label('Confirmation Code', $captcha['id']); ?>
<?php echo form_input($captcha); ?>
<?php echo form_error($captcha['name']); ?>

	<?php }
	} ?>


			<?php echo form_checkbox($remember); ?>
			<?php echo form_label('Remember me', $remember['id']); ?>
			<?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
			<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?>

<?php echo form_submit('submit', 'Let me in'); ?>
<?php echo form_close(); ?>
</div>
</div><!-- end data role page -->
</body>