  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!--     <?php wp_enqueue_script("jquery"); ?> -->
    <?php wp_head(); ?>
  </head>
  <body>
	  
<div id="cabecera" class="navbar navbar-default navbar-top">
	<div class="container">
		<div class="row">
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/imagen1.png" alt="imagen1" width="98" height="56" /></div>
			<div class="col-md-9">
				<h4 class="text-center text-uppercase">
					<small>Comercializadora y Distribuidora de</small><br>Tornillos y Herramientas Toreo S.A. de C.V.</h4>
				</div>
		</div>
	</div>
</div>

<!--   <aside>
   <?php dynamic_sidebar('cabecera'); ?> 
</aside>-->
<div id="menu_principal" class="navbar navbar-default navbar-top" role="navigation">
<div class="container">
	
	    <div class="container-fluid">
	        <div class="navbar-header">
		        <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	            </button>
	        </div>
	        <div class="collapse navbar-collapse navbar-menubuilder">
	            <ul class="nav navbar-nav navbar-left">
	                <?php
			            wp_nav_menu( array(
			                'menu'              => 'primary',
			                'theme_location'    => 'navegation',
			                'depth'             => 2,
			                'container'         => 'div',
			                'container_class'   => 'collapse navbar-collapse',
			                'container_id'      => 'bs-example-navbar-collapse-1',
			                'menu_class'        => 'nav navbar-nav'
			            ));
			        ?>
	            </ul>
	        </div>
	    </div>
	
</div>
</div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/cloudstrife.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/cloudstrife-02.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/cloudstrife-03.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    
    
    	
	
    
    