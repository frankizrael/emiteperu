<?php	
$fid = get_option( 'page_on_front' );
?>
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
					<a href="<?php echo site_url();?>#contacto" class="btn">Contáctanos</a>
					<div class="nav__mobile">
						<i></i>
					</div>
				</div> 
			</div>
		</div>
	</div>
</header>

<div class="fixed_social">
	<?php
		$social = get_field('social',$fid);
		if ($social) {
			?>
		<ul>
			<?php
			foreach ($social as $s) {
				?>
			<li>
				<a href="<?php echo $s['link']; ?>">
					<i class="fab fa-<?php echo $s['text']; ?>"></i>
				</a>
			</li>
				<?php
			}					
			?>
		</ul>
		<?php
		}
	?>
</div>