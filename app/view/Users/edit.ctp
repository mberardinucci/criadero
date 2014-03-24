<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Editar Datos'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('email');
		echo $this->Form->input('telefono');
		echo $this->Form->input('roles_id');
		echo $this->Form->input('rut');
		echo $this->Form->input('cuenta_corriente');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<!--<h3><?php echo __('SubMenu'); ?></h3>-->
	<ul>

	</ul>
</div>
