<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Criadero Caballos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="/criadero1/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link href="/criadero1/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- Color box -->
	<link href="/criadero1/css/colorbox/colorbox.css" rel="stylesheet">
	
	<!-- Morris -->
	<link href="/criadero1/css/morris.css" rel="stylesheet"/>	
	
	<!-- Endless -->
	<link href="/criadero1/css/endless.css" rel="stylesheet">
	<link href="/criadero1/css/endless-skin.css" rel="stylesheet">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<?php echo $this->Html->script(array('bootstrap.min.js', 'admin.js')); ?>

<?php echo $this->App->js(); ?>

<?php echo $this->fetch('css'); ?>
<?php echo $this->fetch('script'); ?>

	
  </head>

  <body class="overflow-hidden">
	<!-- Overlay Div -->
	<div id="overlay">
		<div class="overlay-inner">
			<div id="followingBallsG">
				<div id="followingBallsG_1" class="followingBallsG">
				</div>
				<div id="followingBallsG_2" class="followingBallsG">
				</div>
				<div id="followingBallsG_3" class="followingBallsG">
				</div>
				<div id="followingBallsG_4" class="followingBallsG">
				</div>
			</div>
		</div>
	</div>
	
	<a href="" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
	<div id="theme-setting">
		<div class="title">
			<strong class="no-margin">Suggest Color</strong>
		</div>
		<div class="theme-box">
			<a class="theme-color" style="background:#323447" id="default"></a>
			<a class="theme-color" style="background:#efefef" id="skin-1"></a>
			<a class="theme-color" style="background:#a93922" id="skin-2"></a>
			<a class="theme-color" style="background:#3e6b96" id="skin-3"></a>
			<a class="theme-color" style="background:#635247" id="skin-4"></a>
		</div>
	</div><!-- /theme-setting -->

	<div id="wrapper" class="preload">
		<div id="top-nav" class="fixed">
			<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="main-container">
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				 <ul class="nav navbar-nav navbar-right">
				  <li><?php echo $this->Html->link('Volver Inicio', array('controller'=>'pages', 'action'=>'home')); ?></li>	
						
					</ul>
				</nav>
			</div>
	</div>
		
		<aside class="skin-2 fixed">
			<div class="brand">
				<span>Criadero</span>
				<span class="text-toggle"> Caballos</span>
			</div><!-- /brand -->					
			<div class="sidebar-inner">
				<div class="size-toggle">
					<a class="btn btn-sm" id="sizeToggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
				</div><!-- /size-toggle -->	
				<div class="main-menu">
					<ul>
						<li>
							<a href="http://localhost/criadero1/horses/index">
								<span class="menu-icon">
									<i class="fa   fa-camera fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Caballos', array('controller' => 'horses', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Galería', array('controller' => 'horses', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Ver Listado', array('controller' => 'horses', 'action' => 'index_details', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Caballo', array('controller' => 'horses', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<a href="http://localhost/criadero1/walks/index">
								<span class="menu-icon">
									<i class="fa fa-road fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Paseos', array('controller' => 'horses', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Paseos', array('controller' => 'walks', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Paseo', array('controller' => 'walks', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<a href="http://localhost/criadero1/breeds/index">
								<span class="menu-icon">
									<i class="fa fa-barcode fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Razas', array('controller' => 'breeds', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Razas', array('controller' => 'breeds', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Raza', array('controller' => 'breeds', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<a href="http://localhost/criadero1/types/index">
								<span class="menu-icon">
									<i class="fa fa-sort fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Tipos', array('controller' => 'types', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Tipos', array('controller' => 'types', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Tipo', array('controller' => 'types', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<a href="http://localhost/criadero1/colors/index">
								<span class="menu-icon">
									<i class="fa fa-adjust fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Colores', array('controller' => 'colors', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Colores', array('controller' => 'colors', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Color', array('controller' => 'colors', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<a href="http://localhost/criadero1/states/index">
								<span class="menu-icon">
									<i class="fa    fa-thumbs-up fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Estados', array('controller' => 'states', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Estados', array('controller' => 'states', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Estado', array('controller' => 'states', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
						<li>
							<a href="http://localhost/criadero1/users/index">
								<span class="menu-icon">
									<i class="fa fa-group fa-lg"></i> 
								</span>
								<span class="text">
									<a<?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'index', 'class'=>'text')); ?></a>
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a <?php echo $this->Html->link('Ver Usuarios', array('controller' => 'users', 'action' => 'index', 'class'=>'text')); ?> </a>
									
								</li>
								<li>
									<a <?php echo $this->Html->link('Agregar Usuario', array('controller' => 'users', 'action' => 'add', 'class'=>'text')); ?> </a>
									
								</li>
							</ul>
						</li>
					</ul>
				</div><!-- /main-menu -->
			</div><!-- /sidebar-inner -->
		</aside>
		<div  id="main-container">
		<div>
			<ul class="breadcrumb breadcrumb-lg">
				<li><i class="fa fa-home"></i><?php echo $this->Html->link('Home', array('controller' => 'horses', 'action' => 'index')); ?> / <?php echo $this->Html->getCrumbs(' / '); ?></li>
			</ul>

             <div class="grey-container shortcut-wrapper">
			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->fetch('content'); ?>
			<br />
			<div id="msg"></div>
			<br />
		</div> <!-- /.grey-container shortcut-wrapper -->
		</div>
	</div>



		<!-- Footer
		================================================== -->
		<footer>
			<div class="row">
				<div class="col-sm-6">
					<span class="footer-brand">
						<strong class="text-danger">Criadero</strong> 
					</span>
					<p class="no-margin">
						&copy; 2014
					</p>
				</div><!-- /.col -->
			</div><!-- /.row-->
		</footer>

	</div><!-- /wrapper -->

	<a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	

	
	<!-- Bootstrap -->
    <script src="/criadero1/js/bootstrap.min.js"></script>
 
	<!-- Datatable -->
	<script src='/criadero1/js/jquery.dataTables.min.js'></script>	
	
	<!-- Cookie -->
	<script src='/criadero1/js/jquery.cookie.min.js'></script>

	<!-- Endless -->
	<script src="/criadero1/js/endless/endless.js"></script>
	
  </body>
</html>