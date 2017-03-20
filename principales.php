<?php
/**
* Template Name: Plantilla de Principales
*/
?>
<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>
<?php $args = array(
	'category'         => '2',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
$posts_array = get_posts( $args ); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
<section>
  <h1><?php the_title(); ?></h1>
  <?php the_content(); 
	  
	  print_r($posts_array);
  ?>
  <section>
<div id=”map-canvas”></div>
</section>
  <form method="post" action="">
      <label for="name">Nombre</label><br>
      <input type="text" id="name" placeholder="Escribe aquí tu nombre y apellidos"><br>
      <label for="subject">Asunto</label><br>
      <input type="text" id="subject" placeholder="Motivo de tu consulta"><br>     
      <label for="message">Mensaje</label><br>
      <textarea id="message"></textarea><br>
      <button type="submit">Enviar datos</button><br>
  </form>
</section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>






