<?php
	$fid = get_option( 'page_on_front' );
?>
<section class="background-banner" style="background-image: url('<?php the_field('background_banner',$fid); ?>');" id="contacto">
	<div class="x-container">
		<div class="flex-c">
			<div class="left">
				<div class="title title--white">
					<h2><?php the_field('background_title',$fid); ?></h2>
					<p><?php the_field('background_subtitle',$fid); ?></p>
				</div>
			</div>
			<div class="right">
				<div class="contacto">
					<div class="contactoContent">
						<div class="center_title">
							<?php the_field('form_title',$fid); ?>
						</div>
						<div class="contacto_form">
							<?php echo do_shortcode('[contact-form-7 id="5" title="Contact"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer>
	<div class="x-container">
		<div class="top_footer">
			<div class="flex">
				<div class="left">
					<?php
						$menu_footer = get_field('menu_footer','option');
						if ($menu_footer) {
							?>
						<ul>
							<?php
							foreach ($menu_footer as $m) {
								?>
							<li>
								<a href="<?php echo $m['link']; ?>">
									<?php echo $m['text']; ?>
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
				<div class="right">
					<div class="social-bottom">
						<?php
							$social = get_field('social',$frontpage_id);
							if ($social) {
								?>
							<p>Síguenos: </p>
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
				</div>
			</div>
		</div>
		<div class="mid_footer">
			<div class="flex">
				<div class="left">
					<div class="bendita">
						<?php
							$lt = get_field('footer_data','option');
							foreach ($lt as $l) {
								?>
						<div class="bendita__item">
							<?php
								echo $l['content'];
							?>
						</div>
								<?php
							}
						?>
					</div>
				</div>
				<div class="right">
					<div class="link--a">
						<a href="<?php echo site_url(); ?>/herramientas" class="btn">Descargar Herramientas</a>
					</div>
				</div>
			</div>
		</div>
		<div class="bot_footer">
			<div class="flex">
				<div class="left">					
				</div>
				<div class="right">
					© EmitePerú, 2020. Todos los Derechos Reservados
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer() ?>
</body>
</html>