<?php
$form = array(
	'class' => 'form-horizontal'
);
$label = array(
	'class' => 'control-label'
);
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
	'size' 	=> 30,
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
);
$change = array(
	'name' => 'change',
	'class' => 'btn btn-primary',
	'id' => 'change',
	'value' => 'Change Password'
);

?>
<div class="container">
	<?php echo form_open($this->uri->uri_string(), $form); ?>
	<fieldset>
		<div class="control-group">
			<?php echo form_label('Old Password', $old_password['id'], $label); ?>
			<div class="controls">
			<?php echo form_password($old_password); ?>
			<?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?>
			</div>
		</div>
		<div class="control-group">
			<?php echo form_label('New Password', $new_password['id'], $label); ?>
			<div class="controls"><?php echo form_password($new_password); ?>
			<?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?>
			</div>
		</div>
		<div class="control-group">
			<?php echo form_label('Confirm New Password', $confirm_new_password['id'], $label); ?>
			<div class="controls"><?php echo form_password($confirm_new_password); ?>
			<?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?>
			</div>
		</div>
		<div class="form-actions btn-group">
		<?php echo form_submit( $change ); ?>
		</div>
	<fieldset>
	<?php echo form_close(); ?>
	<div class="pull-right">&copy; 2012 <a href="//dutamegah.co.id/" target="_blank">Migent Software</a> &middot; {elapsed_time} s</div>
</div>