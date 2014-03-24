<?php echo $this->Html->css(array('bootstrap-editable.css', '/select2/select2.css'), 'stylesheet', array('inline' => false)); ?>
<?php echo $this->Html->script(array('bootstrap-editable.js', '/select2/select2.js'), array('inline' => false)); ?>

	<div class="alert-animated ">
           <h3> Colores de Animales</h3>
          </div>
  <?php
$this->Html->addCrumb('Tipos');

?>

<table class="table-striped table-bordered table-condensed table-hover" width= "100%">
	<tr>
		<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
		<th><?php echo $this->Paginator->sort('descripción'); ?></th>
		<th><?php echo $this->Paginator->sort('Estado'); ?></th>
		<th><?php echo $this->Paginator->sort('Fecha Creación'); ?></th>
		<th><?php echo $this->Paginator->sort('Última Modificación'); ?></th>
		<th class="actions">#</th>
	</tr>
	<?php foreach ($colors as $color): ?>
	<tr>
		<td><span class="badge badge-info"><?php echo $color['Color']['name']; ?></span></td>
		<td><span class="brand"><?php echo $color['Color']['description']; ?></span></td>
		<?php if($color['Color']['state']){ ?>
				<td><span class="badge badge-success m-left-bg"><?php echo('Activa'); ?></span></td>
			<?php }else{ ?>
		<td><span class="badge badge-danger"><?php echo('Inactiva'); ?></span></td>
			<?php } ?>
		<td><span class="name"><?php echo $color['Color']['created']; ?></span></td>
		<td><span class="name"><?php echo $color['Color']['modified']; ?></span></td>
		<td class="actions" >
			 <?php echo $this->Html->link(__('Ver'),'/colors/view/'.$color['Color']['id'] ,array('class' => 'btn btn-success')); ?> 
            <?php echo $this->Html->link(__('Editar'),'/colors/edit/'.$color['Color']['id'] ,array('class' => 'btn btn-success')); ?> 
				<?php echo $this->Form->postLink(__('Borrar') , array('action' => 'delete', $color['Color']['id']), null, __('Are you sure you want to delete # %s?', $color['Color']['id'])); ?>
				</td>
	</tr>
	<?php endforeach; ?>
</table>



<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>


