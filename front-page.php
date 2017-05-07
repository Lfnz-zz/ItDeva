<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <title>
            <?php bloginfo('name');?> |
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        </title>
        <!-- Bootstrap core CSS -->
        <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <?php wp_head(); ?>
        <style>
            .showcase
            {
                background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url'). '/img/showcase.jpg')?>) no-repeat center center;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">ItDeva</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   <ul class="nav navbar-nav">
                        <?php
                        wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <section class="showcase">
            <div class="container">
                <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme');?></h1>
                <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam');?></p>
            </div>
        </section>
        <section class="boxes">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <?php if(is_active_sidebar('box1')) : ?>
                        <?php dynamic_sidebar('box1'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <?php if(is_active_sidebar('box2')) : ?>
                        <?php dynamic_sidebar('box2'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <?php if(is_active_sidebar('box3')) : ?>
                        <?php dynamic_sidebar('box3'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <?php if(is_active_sidebar('box4')) : ?>
                        <?php dynamic_sidebar('box4'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="Contacto">
            <div class="container">
                <div class="row">
	   <div class="col-md-8">
        <center><h3>Contactanos</h3></center>
		<div class="col-md-6">
			<form method="post" action="inc/EnvioForm.php">
				<div class="form-group">
					<input type="text" class="form-control" id="InputName" placeholder="Nombre*">
                </div>
				<div class="form-group">
					<input type="email" class="form-control" id="InputEmail" placeholder="Email*">
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" id="InputPhone" placeholder="Telefono*">
                </div>
                <div class="col-md-12">
                    <select class="form-control">
						<option value="" disabled selected>Elige una Opción</option>
						<option value="Cotización">Cotización</option>
						<option value="Soporte">Soporte</option>
						<option value="Servicio">Servicio</option>
                    </select>
                </div>
            </form>
		</div>
		<div class="col-md-6">
			<textarea class="form-control" rows="10" placeholder="Deja tu Mensaje"></textarea>
            <button type="submit" class="btn btn-default" name="action">Submit</button>
		</div>
	</div>
	<div class="col-md-4">
		<center><h3 style="font-size:1.5em">Informacion de Contacto</h3></center>
            <!--<table>
                <tr>
                    <th><i class="fa fa-mobile fa-2x" aria-hidden="true"></i></th>
                    <td>(81) 12-34-56-78</td>
                </tr>
                <tr>
                    <th><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></th>
                    <td>adan.quintanilla@itdeva.com</td> 
                </tr>
                <tr>
                    <th><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></th>
                    <td>Monterrey, Nuevo Leon</td>
                </tr>
        </table>-->
	</div>
    <ul>
        <li><i class="fa fa-phone ConIcon" aria-hidden="true"></i></li>
        <li>(81) 11-98-55-46</li>
    </ul>
    <ul>
        <li><i class="fa fa-envelope-o ConIcon" aria-hidden="true"></i></li>
        <li>adan.quintanilla@itdeva.com</li>
    </ul>
    <ul>
        <li><i class="fa fa-map-marker ConIcon" aria-hidden="true"></i></li>
        <li>Monterrey, Nuevo Leon</li>
    </ul>
</div>
            </div>
		</section>
        <footer class="blog-footer">
            <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>
        <?php wp_footer(); ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="<?php bloginfo('template_url'); ?> /js/bootstrap.min.js"></script>
    </body>
</html>