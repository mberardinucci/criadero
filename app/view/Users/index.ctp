
				<div class="panel panel-default table-responsive">
					<div class="panel-heading">
						Data Table
						<span class="label label-info pull-right">790 Items</span>
					</div>
					<div class="padding-md clearfix">
						<table class="table table-striped" id="dataTable">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Email</th>
									<th>Roles</th>
									<th>Rut</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($users as $user): ?>
								<tr>
									<td><?php echo h($user['User']['nombre']); ?>&nbsp;</td>
									<td><?php echo h($user['User']['apellido']); ?>&nbsp;</td>
									<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
									<td><span class="label label-success"><?php echo $this->Html->link($user['Role']['nombre'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?></span></td>
									<td><?php echo h($user['User']['rut']); ?>&nbsp;</td>
								
								<td class="actions" >
			 <?php echo $this->Html->link(__('Ver'),'/users/view/'.$user['User']['id'] ,array('class' => 'btn btn-success')); ?> 
            <?php echo $this->Html->link(__('Editar'),'/users/edit/'.$user['User']['id'] ,array('class' => 'btn btn-success')); ?> 
				<?php echo $this->Form->postLink(__('Borrar') , array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
				</td>
					
				<?php endforeach; ?>
								</tr>
							</tbody>
						</table>
					</div><!-- /.padding-md -->
					
				</div><!-- /panel -->
			