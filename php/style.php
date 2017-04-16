<?php

defined( '_JEXEC' ) or die ;?>   



<?php 

/*------ GET PARAMS -------*/

$BackgroundColor = $this->params->get('BackgroundColor');
$templateColor = $this->params->get('templateColor');
$linkColor = $this->params->get('linkColor');
$headlineColor = $this->params->get('headlineColor');
$templateWidth = $this->params->get('templateWidth');
$headerBgColor = $this->params->get('headerBgColor');
$contentBgColor = $this->params->get('contentBgColor');
$footerBgColor = $this->params->get('footerBgColor');
$footerFontColor = $this->params->get('footerFontColor');
$logoImg = $this->params->get('logoImg');
$logoSize = $this->params->get('logoSize');
$topbarColor = $this->params->get('topbarColor');
$carouselSize = $this->params->get('carouselSize');
$boxImgSize = $this->params->get('boxImgSize');

$sideNavLinkColor = $this->params->get('sideNavLinkColor');
$sideNavHoverBgColor = $this->params->get('sideNavHoverBgColor');
$NavBgColor = $this->params->get('NavBgColor');
$NavFontColor = $this->params->get('NavFontColor');
$NavHoverBgColor = $this->params->get('NavHoverBgColor');
$NavHoverFontColor = $this->params->get('NavHoverFontColor');
$NavLinkBgColor = $this->params->get('NavLinkBgColor');
$NavLinkFontColor = $this->params->get('NavLinkFontColor');
$NavLinkHoverBgColor = $this->params->get('NavLinkHoverBgColor');
$NavLinkHoverFontColor = $this->params->get('NavLinkHoverFontColor');
$NavDropdownBgColor = $this->params->get('NavDropdownBgColor');
$NavDropdownFontColor = $this->params->get('NavDropdownFontColor');
$NavDropdownListBgColor = $this->params->get('NavDropdownListBgColor');
$NavDropdownListFontColor = $this->params->get('NavDropdownListFontColor');
$NavDropdownActiveBgColor = $this->params->get('NavDropdownActiveBgColor');
$NavDropdownActiveFontColor = $this->params->get('NavDropdownActiveFontColor');
$NavDropdownLinkBgColor = $this->params->get('NavDropdownLinkBgColor');
$NavDropdownLinkFontColor = $this->params->get('NavDropdownLinkFontColor');
$NavDropdownLinkHoverBgColor = $this->params->get('NavDropdownLinkHoverBgColor');
$NavDropdownLinkHoverFontColor = $this->params->get('NavDropdownLinkHoverFontColor');
$NavDropdownActiveHoverBgColor = $this->params->get('NavDropdownActiveHoverBgColor');
$NavDropdownActiveHoverFontColor = $this->params->get('NavDropdownActiveHoverFontColor');


?>



<style type="text/css">




body {
	background-color:<?php echo ($BackgroundColor); ?>;
	color:<?php echo ($templateColor); ?>;
}

a {
	color:<?php echo ($linkColor); ?>;

}


h1, h2, h3, h4, h5 {
	color:<?php echo ($headlineColor); ?>;
}



.wrapper {
	max-width: <?php echo ($templateWidth); ?>;

}

.wrapperHeader {
	background-color:<?php echo ($headerBgColor); ?>;
}

.wrapperContent {
	background-color:<?php echo ($contentBgColor); ?>;

}

.logo {
	background-image:<?php echo ($logoImg); ?>;
}

.logo img {
	max-height: <?php echo ($logoSize); ?>;

}

.topbar {
	background-color:<?php echo ($topbarColor); ?>;

}


.carousel img {
	max-height: <?php echo ($carouselSize); ?>;

}


.boxes img {
	max-height: <?php echo ($boxImgSize); ?>;

}

.footer {
	background-color:<?php echo ($footerBgColor); ?>;
	color:<?php echo ($footerFontColor); ?>;
}


ul.nav.menu > li a {
	color:<?php echo ($sideNavLinkColor); ?>;

}

ul.nav.menu > li a:hover {
	background-color:<?php echo ($sideNavHoverBgColor); ?>;

}



/* Navigation */




.navbar-default .navbar-collapse, .navbar-default .navbar-nav>li>a, .navbar-header{
	background-color:<?php echo ($NavBgColor); ?>;
	color:<?php echo ($NavFontColor); ?>;

}


.navbar-nav>.active>a, .navbar-nav>.active>a:focus, .navbar-nav>.active>a:hover {
	background-color:<?php echo ($NavHoverBgColor); ?>;
	color:<?php echo ($NavHoverFontColor); ?>;

}

.navbar-nav>li>a {
	background-color:<?php echo ($NavLinkBgColor); ?>;
	color:<?php echo ($NavLinkFontColor); ?>;
}


.navbar-nav>li>a:hover, .navbar-nav>li>a:focus {
	background-color:<?php echo ($NavLinkHoverBgColor); ?>;
	color:<?php echo ($NavLinkHoverFontColor); ?>;

}


.nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
	background-color:<?php echo ($NavDropdownBgColor); ?>;
	color:<?php echo ($NavDropdownFontColor); ?>;
	
}

.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus  {
	background-color:<?php echo ($NavDropdownActiveBgColor); ?>;
	color:<?php echo ($NavDropdownActiveFontColor); ?>;

}

.dropdown-menu>li>a {
	background-color:<?php echo ($NavDropdownLinkBgColor); ?>;
	color:<?php echo ($NavDropdownLinkFontColor); ?>;
}

.dropdown-menu>li>a:hover {
	background-color:<?php echo ($NavDropdownLinkHoverBgColor); ?>;
	color:<?php echo ($NavDropdownLinkHoverFontColor); ?>;
}

.dropdown-menu>.active>a:hover {
	background-color:<?php echo ($NavDropdownActiveHoverBgColor); ?>;
	color:<?php echo ($NavDropdownActiveHoverFontColor); ?>;
	
}


@media (min-width: 800px) {
ul.nav li.dropdown:hover ul.dropdown-menu{
   
	background-color:<?php echo ($NavDropdownListBgColor); ?>;
	color:<?php echo ($NavDropdownListFontColor); ?>;
}



/* end Navigation */;




</style>
