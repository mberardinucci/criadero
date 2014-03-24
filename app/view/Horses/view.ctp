  <head>
    <meta charset="utf-8">
    <title>Endless Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

        <!-- Bootstrap core CSS -->
    <link href="/criadero1/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome-->
	<link href="/criadero1/css/font-awesome.min.css" rel="stylesheet">

	<link href="/criadero1/css/morris.css" rel="stylesheet"/>	
	<!-- Datatable -->
	<link href="/criadero1/css/jquery.dataTables_themeroller.css" rel="stylesheet">
	
	<!-- Endless -->
	<link href="/criadero1/css/endless.min.css" rel="stylesheet">
	

  </head>

<?php
$this->Html->addCrumb($horse['Breed']['name'], array('controller' => 'breeds', 'action' => 'view', $horse['Breed']['id']));
$this->Html->addCrumb($horse['Type']['name'], array('controller' => 'types', 'action' => 'view', $horse['Type']['id']));
$this->Html->addCrumb($horse['Horse']['name']);
?>


<h1><?php echo $horse['Horse']['name']; ?></h1>

<div class="panel panel-body">

	<table class="table-striped table-condensed" width= "100%">
		<tr>
			<td><strong>N° Inscripcion</strong></td> <td> <?php echo $horse['Horse']['number']; ?></td>
			<td><strong> Fecha Naciemiento</strong></td> <td> <?php echo $horse['Horse']['birthdate']; ?></td>
		</tr>

    </table>

</br>
</br>
	<table class="table-striped table-condensed" width= "100%">
	<tr><td> Lateral A </td><td> Frontal </td><td> Lateral B </td></tr>
		<tr>

			<td> <?php echo $this->Html->Image('/images/large/' . $horse['Horse']['image'], array('alt' => $horse['Horse']['name'], 'class' => 'img-thumbnail img-responsive' ,'width'=>'300px', 'heigth'=> '300px')); ?> </td>

			<td> <?php echo $this->Html->Image('/images/large/' . $horse['Horse']['image'], array('alt' => $horse['Horse']['name'], 'class' => 'img-thumbnail img-responsive' ,'width'=>'300px', 'heigth'=> '300px')); ?> </td>

			<td> <?php echo $this->Html->Image('/images/large/' . $horse['Horse']['image'], array('alt' => $horse['Horse']['name'], 'class' => 'img-thumbnail img-responsive' ,'width'=>'300px', 'heigth'=> '300px')); ?> </td>
		</tr>
	</table>

		<div class="panel panel-default fadeInRight animation-delay3">
							<div class="panel-heading">
								<i class="fa fa-bar-chart-o fa-lg"></i> Website Traffic
							</div>
							<div class="panel-body">
								<div id="overviewChart" style="height: 250px;"></div>
							</div>
						</div><!-- /panel -->	

	<div class="col col-sm-5">

     	
		<br />
		<br />

		<strong>Género:</strong> <?php echo $this->Html->link($horse['Gender']['name'], array('controller' => 'genders', 'action' => 'view',$horse['Gender']['id'])); ?>

		<br />
		<br />

                <strong>Raza:</strong> <?php echo $this->Html->link($horse['Breed']['name'], array('controller' => 'breeds', 'action' => 'view',$horse['Breed']['id'])); ?>
                <br />
		<br />

		 <strong>Tipo:</strong> <?php echo $this->Html->link($horse['Type']['name'], array('controller' => 'types', 'action' => 'view',$horse['Type']['id'])); ?>
                <br />
		<br />

		 <strong>Color:</strong> <?php echo $this->Html->link($horse['Color']['name'], array('controller' => 'colors', 'action' => 'view',$horse['Color']['id'])); ?>
                <br />
		<br />

		<strong>Estado:</strong> <?php echo $this->Html->link($horse['State']['name'], array('controller' => 'states', 'action' => 'view',$horse['State']['id'])); ?>
                <br />
		<br />


	

		<strong>Padre:</strong> <?php if($father){echo $this->Html->Image('/images/small/' . $father['Horse']['image'], array('alt' => $father['Horse']['name'], 'class' => 'img-thumbnail img-responsive' ,'width'=>'100px', 'heigth'=> '100px')); } ?>
                <br />
		<br />

		<strong>Madre:</strong> <?php if($mother){echo $this->Html->Image('/images/small/' . $mother['Horse']['image'], array('alt' => $mother['Horse']['name'], 'class' => 'img-thumbnail img-responsive' ,'width'=>'100px', 'heigth'=> '100px'));} else{ echo('-');} ?>
                <br />
		<br />

	</div>
	</div>
	</div>

</div>

<div class="related">
	<h3><?php echo __('Historial de Paseos'); ?></h3>
	<?php if (!empty($horse['Event'])): ?>
	<table class="table-striped table-bordered table-condensed table-hover" style="width: 100%">
	<tr>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Tiempo Duración'); ?></th>
		<th><?php echo __('Información Adicional'); ?></th>
		<th><?php echo __('Fecha Creación'); ?></th>
		<th><?php echo __('Fecha Modificación'); ?></th>
	</tr>

	<?php 
	$reverse  = array_reverse($horse['Walk']);


	foreach ($reverse as $walk): ?>
		<tr>

		<td><span class="badge badge-success m-left-xs"><?php echo $walk['date']; ?></span></td>
		<td><span class="badge badge-info"><?php echo $walk['duration']; ?></span></td>
		<td><span class="name"><?php echo $walk['details']; ?></span></td>
		<td><span class="name"><?php echo $walk['created']; ?></span></td>
		<td><span class="name"><?php echo $walk['modified']; ?></span></td>			
			
		</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

<a class="btn btn-success hidden-print" id="invoicePrint"><i class="fa fa-print"></i> Print</a>

</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!-- Bootstrap -->
    <script src="/criadero1/js/bootstrap.js"></script>
   
	<!-- Morris -->
	<script src='/criadero1/js/rapheal.min.js'></script>	
	<script src='/criadero1/js/morris.min.js'></script>	
	
	<!-- Colorbox -->
	<script src='/criadero1/js/jquery.colorbox.min.js'></script>	

	<!-- Sparkline -->
	<script src='/criadero1/js/jquery.sparkline.min.js'></script>

	<!-- Cookie -->
	<script src='/criadero1/js/jquery.cookie.min.js'></script>
	
	<!-- Endless -->
	<script src="/criadero1/js/endless/endless_dashboard.js"></script>
	<script src="/criadero1/js/endless/endless.js"></script>
	

		<script>
		$(function()	{
			$('#invoicePrint').click(function()	{
				window.print();
			});
		});


	var overviewChart = Morris.Area({
	element: 'overviewChart',
	  data: [
		{ y: '2004', Item1: 2647},
		{ y: '2005', Item1: 2778},
		{ y: '2006', Item1: 4912},
		{ y: '2007', Item1: 5689},
		{ y: '2008', Item1: 2293},
		{ y: '2009', Item1: 1881},
		{ y: '2010', Item1: 1588},
		{ y: '2011', Item1: 5174},
		{ y: '2012', Item1: 2028},
		{ y: '2013', Item1: 1791},
	  ],
	  xkey: 'y',
	  ykeys: ['Item1'],
	  labels: ['Item1'],
	  lineColors: ['#fe402b']
	});
	</script>