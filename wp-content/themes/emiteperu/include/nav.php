<header>
	<div class="x-container">
		<div class="nav">
			<div class="nav__left">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php the_field('imagen_blanco','options'); ?>" class="block">
					<img src="<?php the_field('imagen_colores','options'); ?>" class="hide" style="display: none;">
				</a>
			</div>
			<div class="nav__right">
				<div class="nav__menu">
					<?php
						wp_nav_menu( array(
						    'menu' => 'Header Menu'
						) );
					?>
				</div>
				<div class="nav__pedido">
					<a href="#" class="btn">Contáctanos</a>
				</div>
			</div>
		</div>
	</div>
</header>