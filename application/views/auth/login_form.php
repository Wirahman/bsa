<?php
$form = array(
	'class' => 'form-horizontal'
);
$label = array(
	'class' => 'control-label'
);
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30
//	'onkeydown' => 'moveto(event)',
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or Username';
} else if ($login_by_username) {
	$login_label = 'Username';
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
$submit = array(
		'name' => 'submit',
		'class' => 'btn btn-primary',
		'id' => 'submit',
		'value' => 'Login'
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<div class="container">
	<?php echo form_open($this->uri->uri_string(), $form); ?>
		<fieldset>
			<div class="control-group">
				<?php echo form_label('Username', 'login', $label); ?>
				<div class="controls">
					<?php echo form_input($login); ?>
					<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
				</div>
			</div>
			<div class="control-group">
				<?php echo form_label('Password', 'password', $label); ?>
				<div class="controls">
					<?php echo form_password($password); ?>
					<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<a href="<?php echo base_url('auth/forgot_password'); ?>" title="Klik if you forgot password">Forgot Password?</a>
				</div>
			</div>
			
			<div class="form-actions btn-group">
				<?php echo form_submit( $submit ); ?>
			</div>
		</fieldset>
	<?php echo form_close(); ?>
	<!--<div class="pull-right">&copy; 2012 <a href="//dutamegah.co.id/" target="_blank">Migent Software</a> &middot; {elapsed_time} s</div>-->
</div>

<script>
var keynum;
var login = document.getElementById('login');
var password = document.getElementById('password')
login.focus();
$( document ).ready( function() {
	$('input:text, textarea').live('keydown',function(e){
		if ((e.keyCode || event.which || event.charCode || 0)===13){
			if ($(this).attr('id')=='password'){
				// document.getElementById('submit').click();
			}else if (($(this).attr('id')=='login') && ($(this).val()!='')){
		e.preventDefault();
				document.getElementById('password').focus();
			}
		}
	});
});
// function moveto( e )
// {
	// if(window.event){ // IE8 and earlier
		// keynum = e.keyCode;
	// }
	// else if(e.which){ // IE9/Firefox/Chrome/Opera/Safari
		// keynum = e.which;
	// }
	// if( keynum === 13 ){
		// e.preventDefault();
		// if( document.getElementById('login').value !== '' ){
			// document.getElementById('password').focus();
		// }
	// }
// }
</script>