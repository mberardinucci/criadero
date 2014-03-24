<?php echo $this->Html->css(array('bootstrap-editable.css', '/select2/select2.css'), 'stylesheet', array('inline' => false)); ?>
<?php echo $this->Html->script(array('bootstrap-editable.js', '/select2/select2.js'), array('inline' => false)); ?>

<!--

<script>

$(document).ready(function() {
	$('.name').editable({
		type: 'text',
		name: 'name',
		url: '<?php echo $this->webroot; ?>admin/products/editable',
		title: 'Name',
		placement: 'right',
	});


});
</script>
-->
<div class="alert-animated ">
           <h3> Caballos del Sistema</h3>
          </div>
  <?php
$this->Html->addCrumb('Caballos');

?>
<!--li><?php echo $this->Html->link('Horses CSV Export', array('controller' => 'horses', 'action' => 'csv')); ?></li>-->
<div class="btn-group">
  <button type="button" class="btn btn-default">
  <?php echo $this->Html->link(__('Imágenes'), array('action' => 'index')); ?>
   </button>

   <button type="button" class="btn btn-selected">
   	Listado
   </button>
</div>

<br />
<br />
<br />
<br />

<table class="table-striped table-bordered table-condensed table-hover" width= "100%">
	<tr>
		<th><?php echo $this->Paginator->sort('Imagen'); ?></th>
		<th><?php echo $this->Paginator->sort('N° Registro'); ?></th>
		<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
		<th><?php echo $this->Paginator->sort('Fecha Nacimiento'); ?></th>
		<th><?php echo $this->Paginator->sort('Género'); ?></th>
		<th><?php echo $this->Paginator->sort('Raza'); ?></th>
		<th><?php echo $this->Paginator->sort('Tipo'); ?></th>
		<th><?php echo $this->Paginator->sort('Color'); ?></th>
		<th><?php echo $this->Paginator->sort('Estado'); ?></th>
		<th><?php echo $this->Paginator->sort('Último Paseo'); ?></th>
		<th><?php echo $this->Paginator->sort('Pasear'); ?></th>
		<th class="actions">#</th>
	</tr>
	<?php foreach ($horses as $horse): ?>
	<tr>
		<td><?php echo $this->Html->Image('/images/small/' . $horse['Horse']['image'], array('width' => 100, 'height' => 100, 'alt' => $horse['Horse']['image'], 'class' => 'image')); ?></td>
		<td><span class="category"><?php echo $horse['Horse']['number']; ?></span></td>
		<td><span class="name" data-value="<?php echo $horse['Horse']['name']; ?>" data-pk="<?php echo $horse['Horse']['id']; ?>"><?php echo $horse['Horse']['name']; ?></span></td>
		<td><span class="name"><?php echo $horse['Horse']['birthdate']; ?></span></td>
		<td><span class="name"><?php echo $horse['Gender']['name']; ?></span></td>
		<td><span class="name"><?php echo $horse['Breed']['name']; ?></span></td>
		<td><span class="name"><?php echo $horse['Type']['name']; ?></span></td>
		<td><span class="name"><?php echo $horse['Color']['name']; ?></span></td>
		<?php if($horse['State']['id'] == 1){ ?>
				<td><span class="badge badge-success m-left-bg"><?php echo $horse['State']['name']; ?></span></td>
			<?php }else{ ?>
		<td><span class="badge m-left-bg"><?php echo $horse['State']['name']; ?></span></td>
			<?php } ?>
		<td><span class="name"><?php echo $horse['Horse']['last_walk']; ?></span></td>
	

		<td><span class="badge badge-success m-left-xs">
  
      			 <?php echo $this->Html->link(__('Pasear'), array('action' => 'add')); ?>
   </td>

		<td class="actions" >
			 <?php echo $this->Html->link(__('Ver'),'/horses/view/'.$horse['Horse']['id'] ,array('class' => 'btn btn-success')); ?> 
            <?php echo $this->Html->link(__('Editar'),'/horses/edit/'.$horse['Horse']['id'] ,array('class' => 'btn btn-success')); ?> 
				<?php echo $this->Form->postLink(__('Borrar') , array('action' => 'delete', $horse['Horse']['id']), null, __('Are you sure you want to delete # %s?', $horse['Horse']['id'])); ?>
				</td>
	</tr>
	<?php endforeach; ?>
</table>



<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<a class="btn btn-success hidden-print" id="invoicePrint"><i class="fa fa-print"></i> Print</a>

	<script>
		$(function()	{
			$('#invoicePrint').click(function()	{
				window.print();
			});
		});
	</script>