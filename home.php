<?php 
	get_header(); 
?>	
<div id="medio" class="medio fondo-conte">
	<div class="container">
		<div id="espacio"></div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div id="espacio"></div>
		<div class="row">
			<div class="col-sm-2 col-sm-offset-1">
				<img width="150px" height="86px" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/imagen1.png">
			</div>
		    <div class="col-sm-2">
			    <img width="150px" height="86px" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/imagen1.png">
			</div>
		    <div class="col-sm-2">
			    <img width="150px" height="86px" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/imagen1.png">
			</div>
		    <div class="col-sm-2">
			    <img width="150px" height="86px" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/imagen1.png">
			</div>
		    <div class="col-sm-2">
			    <img width="150px" height="86px" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/imagen1.png">
			</div>
			</div>
		<div id="espacio"></div>
		<div class="row">
			<div class="col-sm-2 col-sm-offset-1">
				<img width="150px" height="86px" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/imagen1.png">
			</div>
		    <div class="col-sm-2">
			    <img width="150px" height="86px" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/imagen1.png">
			</div>
		    <div class="col-sm-2">
			    <img width="150px" height="86px" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/imagen1.png">
			</div>
		    <div class="col-sm-2">
			    <img width="150px" height="86px" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/imagen1.png">
			</div>
		    <div class="col-sm-2">
			    <img width="150px" height="86px" src="<?php echo get_template_directory_uri(); ?>/archivos/imagen/imagen1.png">
			</div>
		</div>
		<div id="espacio"></div>
	</div>	
</div>
<div class="container">
	<div class="row">
		<h1>Productos Destacados</h1>
		<?php
			$param = array(
				'orderby'          => 'name',
				'order'            => 'ASC',
				'suppress_filters' => true 
			);
			$categorias = get_categories($param);
			//print_r($categorias);
			echo($category->name);	
			
			$categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 0
) );

foreach ( $categorias as $category ) {
	$category_link = sprintf( 
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );
    
    $links = sprintf('%1$s', esc_url( get_category_link( $category->term_id ) ));
    
    echo '<div class="col-lg-4">
    		<div class="imagen_thumb" onclick="';
    echo "location.href='";
    echo ''. sprintf( $links ) .'';
    echo "';";
    echo '">';
    echo '<div class="imagen_desc"></div><img src="';
    echo get_template_directory_uri();
    echo '/archivos/imagen/chocolates.png" />
						<div class="fondotitulo"></div>';
	echo '<div class="titulo">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</div>';
	echo ''. sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) .'';
	echo '</div>
				</div>';
	
    
    
    
    
}  
			
		?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!--
			
			
			
    print_r($links);
    echo '<div class="col-lg-4">
    
					<div class="imagen_thumb" onclick="location.href="' . esc_url( get_category_link( $category->term_id ) ) . '";">
						<div class="imagen_desc"></div>
						<img src="wp-content/themes/tornillostoreo/archivos/imagen/chocolates.png" />
						<div class="fondotitulo"></div>
						<div class="titulo">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</div>
					</div>
				</div>';
				
				
				
				
				
				
				
<?php
			$parametros = array(
				'posts_per_page'   => 5,
				'category'         => '2',
				'orderby'          => 'date',
				'order'            => 'ASC',
				'post_type'        => 'post',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			);
			global $post;
			$entradas = get_posts( $parametros );
			foreach ( $entradas as $post ) : setup_postdata( $post ); ?>
				<div class="col-lg-4">
					<div class="imagen_thumb" onclick="location.href='<?php the_permalink(); ?>';">
						<div class="imagen_desc"></div>
						<img src="wp-content/themes/tornillostoreo/archivos/imagen/chocolates.png" />
						<div class="fondotitulo"></div>
						<div class="titulo">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
					</div>
				</div>
		<?php endforeach;
		wp_reset_postdata();?>
-->		
	</div>
</div>
<div id="medio" class="medio fondo-conte">
	<div class="container">
		<div id="espacio"></div>
		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-6">
				<form method="post" action="">
					<div class="form-group">
						<label for="name">Nombre</label><br>
						<input type="text" id="name" class="form-control" placeholder="Escribe aquí tu nombre y apellidos"><br>
					</div>
					<div class="form-group">
					<label for="subject">Asunto</label><br>
					<input type="text" id="subject" class="form-control" placeholder="Motivo de tu consulta"><br> 
					</div>
					<div class="form-group"> 
					<label for="message">Mensaje</label><br>
					<textarea id="message" class="form-control"></textarea><br>
					<button type="submit" class="form-control">Enviar datos</button><br>
					</div>
				</form>
			</div>
		</div>
		<div id="espacio"></div>
	</div>	
</div>
<?php get_footer(); ?>