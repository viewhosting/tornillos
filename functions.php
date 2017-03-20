<?php 

/**
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */
 
 function mis_menus() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menú de navegación' ),
    )
  );
}
add_action( 'init', 'mis_menus' );

function contacto(){
 register_sidebar(
   array(
       'name'          => __( 'Contacto' ),
       'id'            => 'Contacto',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );
}
add_action('init','contacto');

function cabecera_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Cabecera' ),
       'id'            => 'cabecera',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );
}
add_action('init','cabecera_widgets');

function pie_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Pie' ),
       'id'            => 'Pie',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );
}
add_action('init','pie_widgets');

function informacion_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Información' ),
       'id'            => 'Información',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );
}
add_action('init','informacion_widgets');

function mi_inicio() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.0.min.js', false, '3.2.0');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'mi_inicio');


function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

function funciones()
{
	// Register the script like this for a theme:
	wp_register_script( 'funcion', get_theme_file_uri('/archivos/js/funciones.js'), array( 'jquery' ), '1.0', true );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'funcion' );
}
add_action( 'wp_enqueue_scripts', 'funciones' );


if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>