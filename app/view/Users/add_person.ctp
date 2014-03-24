<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('n');
		echo $this->Form->input('apellido');
		echo $this->Form->input('rut');
		echo $this->Form->input('email');
		echo $this->Form->input('telefono');
		echo $this->Form->hidden('roles_id');	
		echo $this->Form->hidden('cuenta_corriente');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roles'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
