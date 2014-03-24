<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Criadero de Caballos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="/criadero1/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link href="/criadero1/css/font-awesome.min.css" rel="stylesheet">

	<!-- Endless -->
	<link href="/criadero1/css/endless.min.css" rel="stylesheet">
	<link href="/criadero1/css/endless-landing.min.css" rel="stylesheet">

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
      
      
      
	
	<div id="wrapper" class="preload">
		<header class="navbar navbar-fixed-top bg-white">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img src="/criadero1/img/logo.png" alt="User Avatar">
					</br>
				</br>
				</div>
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<ul class="nav navbar-nav navbar-right">

					<div class="panel panel-default panel-stat1 md-success">
							<div class="panel-body">
								<div class="pull-right text-right">
									<div class="value"><?php echo $this->Html->link('Entrar', array('controller'=>'horses', 'action'=>'index')); ?></div>
								</div>
							</div>
						</div><!-- /panel -->
					</ul>
				</nav>
			</div>
		</header>
		
		<div>
		<div>
             <br/>
             <br/>
             <br />
             <div class="grey-container shortcut-wrapper">
			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->fetch('content'); ?>
			<br />
			<div id="msg"></div>
			<br />
		</div> <!-- /.grey-container shortcut-wrapper -->
		</div>
	</div>
				

	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<!-- Jquery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	<!-- Bootstrap -->
    <script src="/criadero1/js/bootstrap.min.js"></script>
   
	<!-- Waypoint -->
	<script src='/criadero1/js/waypoints.min.js'></script>
	
	<!-- LocalScroll -->
	<script src='/criadero1/js/jquery.localscroll.min.js'></script>
	
	<!-- ScrollTo -->
	<script src='/criadero1/js/jquery.scrollTo.min.js'></script>
	
	<!-- Cookie -->
	<script src='/criadero1/js/jquery.cookie.min.js'></script>

	<!-- Endless -->
	<script src="/criadero1/js/endless/endless.js"></script>
	
	
	
	<script>
		$(function()	{
			$('.animated-element').waypoint(function() {
				
				$(this).removeClass('no-animation');
				
			}, { offset: '70%' });
			
			$('.nav').localScroll({duration:800});
		});
	</script>
	
  </body>
    <footer align="center"  > ©Criadero© Todos los Derechos Reservados </footer>
</html>