<?php
$this->Html->addCrumb('Usuarios', array('controller' => 'users', 'action' => 'index'));
$this->Html->addCrumb('Agregar Persona');
?>



<div class="padding-md">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><h2><?php echo __('Agregar Persona'); ?></h2></legend>

						<hr align="left" noshade="noshade" size="8" width="100%" />


								<div class="panel-body">
									   <div class="form-group">
										<?php
										echo $this->Form->input('nombre',
										  array(
										    'placeholder' => __('Nombre Usuario'),
										    'label' => 'Nombre Usuario',
										    'class' => 'col-lg-9 form-control input-sm'
										  )
										);
										?>
																				
									</div><!-- /form-group -->
								<!--	<div class="form-group">
											<?php
										echo $this->Form->input('apellido',
										  array(
										    'placeholder' => __('Apellido'),
										    'label' => 'Apellido',
										    'class' => 'col-lg-9 form-control input-sm'
										  )
										);
										?>
											</div><!-- /form-group -->
								<!--	<div class="form-group">
											<?php
										echo $this->Form->input('rut',
										  array(
										    'placeholder' => __('Rut'),
										    'label' => 'Rut',
										    'class' => 'col-lg-9 form-control input-sm'
										  )
										);
										?>
									</div><!-- /form-group -->
									<div class="form-group">
											<?php
										echo $this->Form->input('email',
										  array(
										    'placeholder' => __('Email'),
										    'label' => 'Email',
										    'class' => 'col-lg-9 form-control input-sm'
										  )
										);
										?>
									</div><!-- /form-group -->
									<div class="form-group">
												<?php
										echo $this->Form->input('telefono',
										  array(
										    'placeholder' => __('Telefono'),
										    'label' => 'Telefono',
										    'class' => 'col-lg-9 form-control input-sm'
										  )
										);
										?>
									</div><!-- /form-group -->
								<!--	<div class="form-group">
												<?php
										echo $this->Form->input('roles_id',
										  array(
										    'placeholder' => __('Rol'),
										    'label' => 'Rol',
										    'class' => 'col-lg-9 form-control input-sm'
										  )
										);
										?>
									</div><!-- /form-group -->
									<div class="form-group">
												<?php
										echo $this->Form->input('password',
										  array(
										    'placeholder' => __('Contraseña'),
										    'label' => 'Contraseña',
										    'class' => 'col-lg-9 form-control input-sm'
										  )
										);
										?>
										<?php
										echo $this->Form->input('password',
										  array(
										    'placeholder' => __('Confirme Contraseña'),
										    'label' => 'Confirme Contraseña',
										    'class' => 'col-lg-9 form-control input-sm'
										  )
										);
										?>
											<!--<input type="password" placeholder="Confirm Password" class="form-control input-sm" data-equalto="#textbox1">-->
										</div><!-- /.col -->
									</div><!-- /form-group -->
								</div>
								<div class="panel-footer">
									<button type="submit" class="btn btn-success">Guardar</button>
								</div>
							</form>
						</div><!-- /panel -->
					</div><!-- /.col-->
					
				
		