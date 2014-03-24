<div class="users view">
		
				
 <h2>  <?php echo $current_user['nombre']; ?>  <?php echo $current_user['apellido']; ?></h2>
 <hr align="left" noshade="noshade" size="4" width="75%" />
 <table class="table table-striped table-bordered">
	
<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
		<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nombre'); ?></strong></td>
		<td>
			<?php echo h($user['User']['nombre']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Apellido'); ?></strong></td>
		<td>
			<?php echo h($user['User']['apellido']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Telefono'); ?></strong></td>
		<td>
			<?php echo h($user['User']['telefono']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Roles'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($user['Role']['nombre'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Rut'); ?></strong></td>
		<td>
			<?php echo h($user['User']['rut']); ?>
			&nbsp;
		</td>
	<!--	<dt><?php echo __('Cuenta Corriente'); ?></dt>
		<dd>
			<?php echo h($user['User']['cuenta_corriente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>-->
	
		</table><!-- .table table-striped table-bordered -->
			
	</div>

<div class="actions">
	
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		
	</ul>
</div>
