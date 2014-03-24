  
<!--<script src="/criadero1/js/jquery-2.1.0.min.js"></script>
<script src="/criadero1/js/bootstrap.min.js"></script>
<script src='/criadero1/js/jquery.cookie.min.js'></script>
<script src="/criadero1/js/bootstrap-datepicker.js"></script>
<script src="/criadero1/js/endless/endless.js"></script>

  <script>
  $(function() {
    jQuery.noConflict();
   //$( '#datepicker' ).datepicker();
    // jQuery('#init-date').datepicker();
    $( '#date' ).datepicker( "option", "dateFormat", "yy-mm-dd" );
  // $( "#datepicker" ).datepicker( "option", "showAnim", "slide" );
  });
  </script>

-->

  <?php
$this->Html->addCrumb('Caballos', array('controller' => 'horses', 'action' => 'index'));
$this->Html->addCrumb('Nuevo Caballo');
?>

  <h2>Agregar Caballo</h2>
            <hr align="left" noshade="noshade" size="8" width="100%" />


<div class="panel panel-body">
<div class="col-lg-9">
<?php echo $this->Form->create('Horse', array('class' => 'form-vertical', 'type' => 'file')); ?>
<br />
<div class="form-group">
                <label class="col-lg-3 control-label">Nombre</label>
      <div class="col-lg-3  input-group">
          <?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px')); ?>
      </div>
</div>
<div class="form-group">
                <label class="col-lg-3 control-label">N° Inscripción</label>
                <div class="input-group">
                  <?php echo $this->Form->input('number', array('class' => 'form-control', 'label'=>'', 'type' => 'text', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<br />
<div class="form-group">
                <label class="col-lg-3 control-label">Fecha Nacimiento</label>
                <div class="col-lg-3  input-group">
                  <?php echo $this->Form->input('birthdate', array( 'label' => '', 
                'dateFormat' => 'DMY', 
                'minYear' => date('Y') - 70,
                'maxYear' => date('Y') )); ?>

          <!-- <span class="input-group-addon"><i class="fa fa-calendar"></i></span>-->
      </div>
              </div><!-- /form-group -->

<br />

<br />
<div class="form-group">
                <label class="col-lg-3 control-label">Género</label>
                <div class="input-group">
                  <?php echo $this->Form->input('gender_id', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<div class="form-group">
                <label class="col-lg-3 control-label">Raza</label>
                <div class="input-group">
                  <?php echo $this->Form->input('breed_id', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->  

<div class="form-group">
                <label class="col-lg-3 control-label">Tipo</label>
                <div class="input-group">
                  <?php echo $this->Form->input('type_id', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->                          

<div class="form-group">
                <label class="col-lg-3 control-label">Color</label>
                <div class="input-group">
                  <?php echo $this->Form->input('color_id', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<div class="form-group">
                <label class="col-lg-3 control-label">Estado</label>
                <div class="input-group">
                  <?php echo $this->Form->input('state_id', array('class' => 'form-control', 'label'=>'', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<div class="form-group">
                <label class="col-lg-3 control-label">Imagen</label>
                <div class="input-group">
                  <?php echo $this->Form->input('image', array('class' => 'form-control', 'label'=>'', 'type' => 'file')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->              

<?php echo $this->Form->input('description', array('class' => 'form-control', 'label'=>'Descripción')); ?>
<br />


<h4><?php echo __('Información Adicional'); ?></h4>

<div class="form-group">
                <label class="col-lg-3 control-label">Padre</label>
                <div class="input-group">
                  <?php echo $this->Form->input('lft', array('class' => 'form-control', 'label'=>'','empty' => 'No Asignar', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

<div class="form-group">
                <label class="col-lg-3 control-label">Madre</label>
                <div class="input-group">
                  <?php echo $this->Form->input('rght', array('class' => 'form-control', 'label'=>'','empty' => 'No Asignar', 'style'=>'width: 200px')); ?>
                  
                </div><!-- /.col -->
              </div><!-- /form-group -->

 </div>
</div>             

<div class="panel panel-default panel-footer">
<?php echo $this->Form->button('Guardar', array('class' => 'btn btn-primary','label'=>'Guardar'));?>
<?php echo $this->Form->end(); ?>
</div>

