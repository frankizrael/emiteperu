<footer>
	<div class="x-container">
		<div class="top_footer">
			<div class="flex">
				<div class="left">
					<?php
						wp_nav_menu( array(
						    'menu' => 'Header Menu'
						) );
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
						<a href="#" class="btn">Descargar Herramientas</a>
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