<?php

/**
 * Copyright    lemoncyclone
 * license - PHP files are licensed under  GNU/GPL V2 
 * license - CSS - JS files are Copyrighted material    
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

JHtml::_('jquery.framework');

//Get files


$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addScript('templates/' . $this->template . '/js/bootstrap.min.js', 'text/javascript');

$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/user.css');

unset($this->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);


// Output as HTML5
$doc->setHtml5(true);


// Getting params from template
$params = $app->getTemplate(true)->params;



// Use of Google Font
if ($this->params->get('googleFont'))
{
	$doc->addStyleSheet('//fonts.googleapis.com/css?family=' . $this->params->get('googleFontName'));
	$doc->addStyleDeclaration("
	h1, h2, h3, h4, h5, h6, .site-title {
		font-family: '" . str_replace('+', ' ', $this->params->get('googleFontName')) . "', sans-serif;
	}");
}



?>

<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >


<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <jdoc:include type="head" />
<?php include ( "php/style.php"); ?>


</head>


<body>
<?php $doc->addStyleSheet('templates/' . $this->template . '/css/style.css'); ?>

	<!-- Body -->
	
<div class="body">
<div class="wrapper">

		<!-- Header -->
		
	<div class="wrapperHeader">
	<header class="header" role="banner">	
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="header col-xs-12">
                  
										
			<div class="img-responsive logo col-md-2 col-sm-4 col-xs-12">
				<a href="<?php echo $this->baseurl; ?>/">
               <img src="<?php echo $this->baseurl ?><?php echo $this->params->get('logoImg'); ?>">
        
              </a>
								<?php if ($this->countModules('top')) : ?> 	
								<jdoc:include type="modules" name="top" style="xhtml" /> 	
								<?php endif; ?>
								
						</div>
                  	
				
								
						
						
				<div class="menu col-md-10 col-sm-8 col-xs-12 pull-right"	

			<?php if ($this->countModules('nav')) : ?>
		
					
				<nav class="navbar-nav navbar-default" role="navigation">
				 <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
					 <span class="sr-only">Toggle navigation</span>
        <span class="glyphicon glyphicon-menu-hamburger"></span>
      
      </button> 		
					
				 	<div class="collapse navbar-collapse" id="nav-collapse">
				 	 		
					
						<jdoc:include type="modules" name="nav" style="none" /> 
						 
						 
					</div>
					
				</nav>
								
			<?php endif; ?>
			
			</div>
			</div>
			</div>
			</div>
			
		
			<div class="container-fluid">
			<div class="row-fluid">
			<div class="topbar col-xs-12">

			<?php if ($this->countModules('lang')) : ?> 	
					<div class="header-lang pull-right col-md-3 col-xs-12">
						<jdoc:include type="modules" name="lang" style="none" />
					</div>
			<?php endif; ?>
					
			<?php if ($this->countModules('pos0')) : ?> 	
					<div class="header-search pull-right col-md-2 col-xs-12">
						<jdoc:include type="modules" name="pos0" style="none" />
					</div>
			<?php endif; ?>

			</div>
			</div>	
			</div>
				
			</header>
		
			</div>
			
<div class="wrapperContent">
			
			 <div class="container-fluid">
			 	<div class="row-fluid">
		
			 
			 <!-- Begin Jumbotron -->
			 
			<div class="row-fluid">
			
				<?php if ($this->countModules('carousel')) : ?>
				
				<div class="carousel col-xs-12">
					<?php require( "php/carousel.php"); ?>
				</div>
					
				<?php endif; ?>
			</div>
			
			<!-- End Jumbotron -->
					
		
		<?php if ($this->countModules('left')) : ?>
					<!-- Begin Sidebar -->
					<div id="sidebar-left" class="col-md-3">
						<div class="sidebar-nav">
							<jdoc:include type="modules" name="left" style="xhtml" />
						</div>
					</div>
					<!-- End Sidebar -->
					
				<?php endif; ?>
				
				
				<main id="content" role="main" class="col-md-9">
					<!-- Begin Content -->
					<jdoc:include type="modules" name="content" style="xhtml" />
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					
					<!-- End Content -->
				</main>
				
				
				<?php if ($this->countModules('right')) : ?>
				
					<div id="sidebar-right" class="col-md-3">
																<!-- Begin Right Sidebar -->
						<jdoc:include type="modules" name="right" style="well" />
						
						<!-- End Right Sidebar -->
																	
					</div>
										
				<?php endif; ?>
				</div>
				
		 <!-- Begin Boxes -->
			 
			<div class="row-fluid">
			 <div class="boxes col-xs-12">
			
				<?php require( "php/boxes.php"); ?>
				
			</div>
			</div>
			
			
			
			<!-- End Boxes -->		
				</div>
				
				</div>
				<!-- Footer -->
				
		<div class="wrapperFooter">
	
	<div class="row-fluid">
			<div class="container-fluid">
	<footer class="footer col-xs-12" role="footer">

			<hr />
			<jdoc:include type="modules" name="footer" style="none" />
			<p class="pull-right">
			
				<a href="#" id="back-top"><span class="glyphicon glyphicon glyphicon-triangle-top"></span>	
					
				</a>
			</p>
			<p>
				&copy; <?php echo date('Y'); ?> 
			</p>
	
	</footer>
	</div>
		</div>
		</div>
	</div>
	</div>
	</div>
	
	
	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
 
