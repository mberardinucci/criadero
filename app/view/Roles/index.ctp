<!DOCTYPE html>
<html lang="en">
  <head>
	 
    <meta charset="utf-8">
    <title>Adoptalo Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="/adoptalo4/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome-->
	<link href="/adoptalo4/css/font-awesome.min.css" rel="stylesheet">

	<!-- Datatable -->
	<link href="/adoptalo4/css/jquery.dataTables_themeroller.css" rel="stylesheet">
	
	<!-- Endless -->
	<link href="/adoptalo4/css/endless.min.css" rel="stylesheet">
	<link href="/adoptalo4/css/endless-skin.css" rel="stylesheet">
	
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
			<strong class="no-margin">Skin Color</strong>
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
			
			
			<div id="top-nav" class="skin-2 fixed">
			<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav-notification clearfix">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-envelope fa-lg"></i>
						<span class="notification-label bounceIn animation-delay4">7</span>
					</a>
						
						 <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    <li><a tabindex="-1" href="#">Action</a></li>
    <li><a tabindex="-1" href="#">Another action</a></li>
    <li><a tabindex="-1" href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a tabindex="-1" href="#">Separated link</a></li>
  </ul>					  
					
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-tasks fa-lg"></i>
						<span class="notification-label bounceIn animation-delay5">4</span>
					</a>
					<ul class="dropdown-menu task dropdown-2">
						<li><a href="#">You have 4 tasks to complete</a></li>					  
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Bug Fixes</span>
									<small class="pull-right text-muted">78%</small>
								</div>
								<div class="progress">
									<div class="progress-bar" style="width:78%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Software Updating</span>
									<small class="pull-right text-muted">54%</small>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-success" style="width:54%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Database Migration</span>
									<small class="pull-right text-muted">23%</small>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-warning" style="width:23%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">Unit Testing</span>
									<small class="pull-right text-muted">92%</small>
								</div>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-danger " style="width:92%"></div>
								</div>
							</a>
						</li>
						<li><a href="#">View all tasks</a></li>					  
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-bell fa-lg"></i>
						<span class="notification-label bounceIn animation-delay6">5</span>
					</a>
					<ul class="dropdown-menu notification dropdown-3">
						<li><a href="#">You have 5 new notifications</a></li>					  
						<li>
							<a href="#">
								<span class="notification-icon bg-warning">
									<i class="fa fa-warning"></i>
								</span>
								<span class="m-left-xs">Server #2 not responding.</span>
								<span class="time text-muted">Just now</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">2m ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-danger">
									<i class="fa fa-bolt"></i>
								</span>
								<span class="m-left-xs">Application error.</span>
								<span class="time text-muted">5m ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-usd"></i>
								</span>
								<span class="m-left-xs">2 items sold.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li><a href="#">View all notifications</a></li>					  
					</ul>
				</li>
				<li class="profile dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<strong><?php echo $current_user['nombre']; ?></strong>
						<span><i class="fa fa-chevron-down"></i></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a class="clearfix" href="#">
								<img src="img/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong><?php echo $current_user['nombre']; ?></strong>
									<p class="grey"><?php echo $current_user['email']; ?></p> 
								</div>
							</a>
						</li>
						<li><a tabindex="-1" href="profile.html" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
						<li><a tabindex="-1" href="gallery.html" class="main-link"><i class="fa fa-picture-o fa-lg"></i> Photo Gallery</a></li>
						<li><a tabindex="-1" href="#" class="theme-setting"><i class="fa fa-cog fa-lg"></i> Setting</a></li>
						<li class="divider"></li>
						<li><a><?php echo $this->Html->link('Cerrar sesion', array('controller'=>'users', 'action'=>'logout')); ?></a></li>
						
						
					</ul>
				</li>
			</ul>
		</div><!-- /top-nav skinfixed-->
			
			  <aside class="skin-2 fixed">
			<div class="brand">
				<span>Adoptalo</span>
				<span class="text-toggle"> Admin</span>
			</div><!-- /brand -->					
			<div class="sidebar-inner">
				<div class="size-toggle">
					<a class="btn btn-sm" id="sizeToggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="btn btn-sm pull-right" href="login.html"><!-- /poner el loggout -->	
						<i class="fa fa-power-off"></i>
					</a>
				</div><!-- /size-toggle -->	
				<div class="user-block clearfix">
					<img src="img/user.jpg" alt="User Avatar">
					<div class="detail">
						<strong><?php echo $current_user['nombre']; ?>!</strong><span class="badge badge-danger bounceIn animation-delay4 m-left-xs">4</span>
						<ul class="list-inline">
							<li><a href="profile.html">Profile</a></li>
							<li><a href="inbox.html" class="no-margin">Inbox</a></li>
						</ul>
					</div>
				</div><!-- /user-block -->
				<div class="search-block">
					<div class="input-group">
						<input type="text" class="form-control input-sm" placeholder="search here...">
						<span class="input-group-btn">
							<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
						</span>
					</div><!-- /input-group -->
				</div><!-- /search-block -->
				<div class="main-menu">
					<ul>
						<li>
							<span class="text">
								
								<li><?php echo $this->Html->link(__('Nueva Persona'), array('action' => 'add')); ?></li>
								</span>
								<span class="menu-hover"></span>
							
						</li>
							<li>
							
								<span class="text">
										<li><?php echo $this->Html->link(__('Nueva Entidad'), array('action' => 'add_entidad')); ?></li>
								</span>
								<span class="menu-hover"></span>
							
						</li>
						<li>
							<span class="text">
									<li><?php echo $this->Html->link(__('Nueva Empresa'), array('action' => 'add_company')); ?></li>
								</span>
								<span class="menu-hover"></span>
							
						</li>
						<li>
							<span class="text">
									<li><?php echo $this->Html->link(__('Listar Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
								</span>
								<span class="menu-hover"></span>
							
						</li>
					</ul>
					
					<div class="alert alert-info">
						Welcome to Endless Admin. Do not forget to check all my pages. 
					</div>
				</div><!-- /main-menu -->
			</div><!-- /sidebar-inner -->
		</aside> 
		
	<div id="main-container">
			<div class="padding-md">
				<div class="roles index">
					<h2><?php echo __('Roles'); ?></h2>
					</div> <!-- /.page-container -->
	
				<div class="panel panel-default table-responsive">
					<div class="panel-heading">
						Data Table
						<span class="label label-info pull-right">790 Items</span>
					</div>
					<div class="padding-md clearfix">
						<table class="table table-striped" id="dataTable">
							<thead>
								<tr>
									<th>#</th>
									<th>Nombre</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($roles as $role): ?>
							<tr>
								<td><?php echo h($role['Role']['id']); ?>&nbsp;</td>
								<td><?php echo h($role['Role']['nombre']); ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $role['Role']['id']), array('class' => 'btn btn-mini')); ?>
									<? $user = $this->Session->read('Auth.User');?>
												<?if($user['roles_id'] == 1){?>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $role['Role']['id']) , array('class' => 'btn btn-mini')); ?>
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $role['Role']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $role['Role']['id'])); }?>
								</td>
																			
				<?php endforeach; ?>
								</tr>
							</tbody>
						</table>
					</div><!-- /.padding-md -->
					
				</div><!-- /panel -->
			</div><!-- /.padding-md -->
		</div><!-- /main-container -->
	</div><!-- /wrapper -->

	
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<!-- Jquery -->
	<script src="/adoptalo4/js/jquery-1.10.2.min.js"></script>
	
	<!-- Bootstrap -->
    <script src="/adoptalo4/js/bootstrap.min.js"></script>
 
	<!-- Datatable -->
	<script src='/adoptalo4/js/jquery.dataTables.min.js'></script>	
	
	<!-- Cookie -->
	<script src='/adoptalo4/js/jquery.cookie.min.js'></script>

	<!-- Endless -->
	<script src="/adoptalo4/js/endless.js"></script>
	
	<script>
		$(function	()	{
			$('#dataTable').dataTable( {
				"bJQueryUI": true,
				"sPaginationType": "full_numbers"
			});
			
			$('#chk-all').click(function()	{
				if($(this).is(':checked'))	{
					$('#responsiveTable').find('.chk-row').each(function()	{
						$(this).prop('checked', true);
						$(this).parent().parent().parent().addClass('selected');
					});
				}
				else	{
					$('#responsiveTable').find('.chk-row').each(function()	{
						$(this).prop('checked' , false);
						$(this).parent().parent().parent().removeClass('selected');
					});
				}
			});
		});
	</script>
	
	
  </body> 
  
</html>


  



