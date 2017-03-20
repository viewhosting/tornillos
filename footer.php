<!--
</div>

<aside>
  <?php dynamic_sidebar('informacion'); ?>
</aside>
-->

<!--
<aside>
  <?php dynamic_sidebar('Contacto'); ?>
</aside>
-->
<div id="pie" class="pie fondo-conte">
	<footer>
		<div class="container">
			<div id="espacio"></div>	
			<div id="menu_footer" class="row">
				<div class="col-md-4 list-unstyled">
					<?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<blockquote class="blockquote-reverse">
						<address class="footer_text">
							<strong>Tornillos</strong><br>
							Carmelo Pérez No. 655 Col. Benito Juárez</br>
							Nezahualcoyotl Estado de México, C.P. 5700</br>
							Teléfonos: 5730-9548 / 5734-1643 / 5734-1644</br>
							<a href="mailto:#">email:asdas@hotmail.com</a>
						</address>
					</blockquote>
				</div>
			</div>		
	<!--
				<aside>
				  <?php dynamic_sidebar('cabecera'); ?>
				</aside>
	-->	
		</div>
    </footer>    
    <?php wp_footer(); ?>
</div>
	</body>
</html>