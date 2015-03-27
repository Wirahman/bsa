<?php
$form = array(
	'class' => 'form-horizontal'
);
$label = array(
	'class' => 'control-label'
);
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
		'onkeydown' => 'moveto(event)',
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'onkeydown' => 'moveto(event)',
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'onkeydown' => 'moveto(event)',
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'onkeydown' => 'moveto(event)',
);
$role = array(
	'name'	=> 'role',
	'id'	=> 'role',
	'value' => set_value('role'),
	'onkeydown' => 'moveto(event)',
);
$role_list = array(
	1  => 'Member',
	10    => 'Admin',
	20    => 'Supervisor',
	30    => 'Manager',
	40    => 'Director',
	99   => 'Super Admin',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
$register = array(
		'name' => 'register',
		'class' => 'btn btn-primary',
		'id' => 'register',
		'value' => 'Register'
);
echo "<script> alert(". $this->tank_auth->get_role() .");</script>";
?>
<div class="container">
<?php echo form_open($this->uri->uri_string(), $form); ?>
<fieldset>
	<?php if ($use_username) { ?>
	<div class="control-group">
		<?php echo form_label('Username', $username['id'], $label); ?>
		<div class="controls">
			<?php echo form_input($username); ?>
			<?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
		</div>
	</div>
	<?php } ?>
	<div class="control-group">
		<?php echo form_label('Email Address', $email['id'], $label); ?>
		<div class="controls">
			<?php echo form_input($email); ?>
			<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
		</div>
	</div>
	<div class="control-group">
		<?php echo form_label('Password', $password['id'], $label); ?>
		<div class="controls">
			<?php echo form_password($password); ?>
			<?php echo form_error($password['name']); ?>
		</div>
	</div>
	<div class="control-group">
		<?php echo form_label('Confirm Password', $confirm_password['id'], $label); ?>
		<div class="controls">
			<?php echo form_password($confirm_password); ?>
			<?php echo form_error($confirm_password['name']); ?>
		</div>
	</div>
	<div class="control-group">
		<?php echo form_label('Role', $role['id'], $label); ?>
		<div class="controls">
			<?php echo form_dropdown($role['name'], $role_list); ?>
			<?php echo form_error($role['name']); ?>
		</div>
	</div>

	<?php if ($captcha_registration) {
		if ($use_recaptcha) { ?>
	<div class="control-group">
		<div id="recaptcha_image"></div>
		<div class="controls">
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</div>
	</div>
	<div class="control-group">
		<div class="recaptcha_only_if_image">Enter the words above</div>
		<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		<div class="controls">
			<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
		<?php echo form_error('recaptcha_response_field'); ?>
		</div>
		<?php echo $recaptcha_html; ?>
	</div>
	<?php } else { ?>
	<div class="control-group">
		<p>Enter the code exactly as it appears:</p>
		<?php echo $captcha_html; ?>
	</div>
	<div class="control-group">
		<?php echo form_label('Confirmation Code', $captcha['id'], $label); ?>
		<div class="controls">
			<?php echo form_input($captcha); ?>
			<?php echo form_error($captcha['name']); ?>
		</div>
	</div>
	<?php }
	} ?>
	<div class="form-actions btn-group">
	<?php echo form_submit($register); ?>
	</div>
</fieldset>
<?php echo form_close(); ?>
<!--<div class="pull-right">&copy; 2012 <a href="//dutamegah.co.id/" target="_blank">Migent Software</a> &middot; {elapsed_time} s</div>-->
</div>
<script>
var keynum;
var username = document.getElementById('username');
var email = document.getElementById('email');
var password = document.getElementById('password');
var confirm_password = document.getElementById('confirm_password');
var role = document.getElementById('role');
username.focus();
function moveto( e )
{
	if(window.event){ // IE8 and earlier
		keynum = e.keyCode;
	}
	else if(e.which){ // IE9/Firefox/Chrome/Opera/Safari
		keynum = e.which;
	}
	if( keynum === 13 ){
		e.preventDefault();
		if( username.value !== '' ){
			if( email.value !== '' ){
				if( password.value !== '' ){
					if( confirm_password.value !== '' ){
						role.focus();
					} else {
						confirm_password.focus();
					}
				} else {
					password.focus();
				}
			} else {
				email.focus();
			}
		}
	}
}
</script>