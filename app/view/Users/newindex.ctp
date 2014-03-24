<div class="users index"> 
	<h2> Bienvenido(a) a Adoptalo </h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
	
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	
	</div>
</div>
<div class="actions">
	<h3><?php echo __('SubMenu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Entidad'), array('action' => 'add_entidad')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Empresa'), array('action' => 'add_company')); ?></li>
		
	</ul>
</div>
