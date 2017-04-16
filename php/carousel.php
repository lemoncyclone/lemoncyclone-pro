<?php

/*------ GET PARAMS -------*/

$slide1 = $this->params->get('slide1');
$slide2 = $this->params->get('slide2');
$slide3 = $this->params->get('slide3');


?>

<jdoc:include type="modules" name="carousel" style="none" /> 

 <div id="carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="img-responsive" src="<?php echo $this->baseurl ?><?php echo $this->params->get('slide1'); ?>" alt="1">
          <div class="container">
            <div class="carousel-caption">
              <h1>Lorem Ipsum.</h1>
              <p>Lorem ipsum.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Info</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="img-responsive" src="<?php echo $this->baseurl ?><?php echo $this->params->get('slide2'); ?>" alt="2">
        
          <div class="container">
            <div class="carousel-caption">
              <h1>Lorem ipsum.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Info</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="img-responsive" src="<?php echo $this->baseurl ?><?php echo $this->params->get('slide3'); ?>" alt="3">
          <div class="container">
            <div class="carousel-caption">
              <h1>Lorem ipsum.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Info</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
 
