<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
		<?php
		echo $this->Form->create
		(
			'User',
			array
			(
				'url' => array(
					'controller' => 'users',
					'action' => 'login'
				),
				'class'			=> '',
				'inputDefaults' => array
				(
					'label' => false,
					'error' => false
				)
			)
		);?>
		<div class="center">
			<h2><?php echo 'Iniciar sesión' ?></h2>
		</div>

		<hr>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="data[User][username]" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Contraseña</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="data[User][password]" placeholder="Password">
		  </div>
		  <div class="form-group">
		  	<?php echo $this->Html->link(__('Olvido su contraseña?'),array('controller' => 'users','action' => 'remember_password')) ?>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox" name="data[User][remember_me]" value="S"> Recordarme
		    </label>
		  </div>
		  <button type="submit" class="btn btn-default">Iniciar sesión</button>
		</form>


	</div>
</div>