<?php /* Template Name: home */
set_query_var('ENTRY', 'home');
get_header();
?>
<?php get_template_part('include/nav'); ?>
<section class="heightH init" >
	<div class="swiper-container heightH">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="heightH initCore" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
					<div class="x-container heightH">
						<div class="title">
							<h1><?php the_title(); ?></h1>
							<p><?php the_field('subtitle'); ?></p>
							<a href="#" class="btn">Contáctanos</a>
						</div>
						<div class="social-bottom">
							<?php
								$social = get_field('social');
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
			<?php
				$banner = get_field('banner');
					if ($banner){
						foreach($banner as $ban) {
			?>
				<div class="swiper-slide">
					<div class="heightH initCore" style="background-image: url('<?php echo $ban['img']; ?>');">
						<div class="x-container heightH">
							<div class="title">
								<h1><?php echo $ban['title']; ?></h1>
								<p><?php echo $ban['subtitle']; ?></p>
								<a href="<?php echo $ban['link']; ?>" class="btn"><?php echo $ban['link_text']; ?></a>
							</div>
							<div class="social-bottom">
								<?php
									$social = get_field('social');
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
			<?php
					}
				}
			?>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</section>
<section class="soluciones">
	<div class="x-container">
		<div class="not-x-padd-container">
			<div class="box">
				<div class="title">
					<h2><?php the_field('quees_title'); ?></h2>
				</div>
				<div class="soluciones_box">
					<div class="flex">
						<div class="left">
							<div class="content">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="307px" height="450px" viewBox="0 0 307 450" enable-background="new 0 0 307 450" xml:space="preserve">
								<g>
									<path opacity="0.1" fill="#ff9700" enable-background="new    " d="M105.475,97.034l-41.727,102.93l53.273,92.742l74.86-43.27
										l48,19.194l-38.94-202.88"/>
									<path opacity="0.5" fill="#BABABA" enable-background="new    " d="M50.761,438.292l104.734,1.832l96.54-17.323l-72.43-1.404
										l4.142,4.01l0.398,2.84l-10.73,3.583l-11.38-9.444l-28.218,8.638l-4.64-6.124l-26.278,3.702l-23.828,2.148"/>
									<path fill="#ff9700" d="M169.011,209.607l5.457-2.93l5.98,4.646l4.428,1.237l-0.91,14.872l-6.562-2.886"/>
									<path fill="#ff9700" d="M176.945,208.446l4.06,2.255l4.485-0.478l5.286,1.353l0.822-0.646l-5.924-3.29 M185.951,212.56l1.9,0.38
										l3.915,0.81l5.988-0.48l-0.377,1.258l-5.557,1.97l-4.67-0.227l-1.476-0.114"/>
									<path fill="#ff9700" d="M185.675,216.498l-0.33,3.51l3.535,0.47l3.555-0.078l6.917-3.156l0.258-1.272l-7.184,1.095l-3.467-0.152"/>
									<path fill="#ff9700" d="M185.346,220.92l-0.26,2.924l2.02,0.378l5.33-0.53l5.318-2.687l0.585-1.253l-5.617,2.27h-3.6"/>
									<path fill="#ff9700" d="M185.087,224.143l-0.21,3.29l3.266-0.35l6.32-2.43l0.47-1.03l-7.58,0.923 M125.108,171.103l7.404-4.68
										l11.25-4.582l6.295,13.258l-0.346-0.45l23.84,30.87l-5.728,2.98l-26.12-17.67"/>
									<path opacity="0.5" fill="#BABABA" enable-background="new    " d="M165.939,432.182l40.546,7.942l49.753-20.18l-63.185,2.435"/>
									<path fill="#7B7A7A" d="M188.515,207.99l0.286-30.26l-30.372-10.82l-0.266,16.823l14.502,18.678l4.28,5.23l9.103-0.963"/>
									<path opacity="0.5" fill="#BABABA" enable-background="new    " d="M196.205,180.5l37.41-9.95l16.815-9.81l-1.786,46.49
										l-53.713,20.957l4.658-2.85l3.224-0.96l0.968-4.72l1.183-4.147l-2.867,0.467l1.224-3.627l-9.644,1.248l3.226-2.994l-1.848-1.29
										 M191.581,176.094l43.82-11.994l15.03-4.727l-43.63-6.32l-47.234,12.82"/>
									<path fill="#999999" d="M189.721,176.81l44.22-12.173l14.704-4.588l-46.076-5.675l-43.002,12.032"/>
									<path fill="#BABABA" d="M190.128,177.807l42.018-10.592l15.475-5.374l-0.098,44.065l-57.395,24.156v-2.628l5.43-1.906l0.372-2.725
										l3.103-1.203l1.213-6.413l-2.11-0.215v-2.552l-6.637,0.142l1.257-2.148l-2.63-2.77"/>
									<path fill="#6A696A" d="M202.589,155.237l0.252,17.407l30.234-7.64l14.38-4.696"/>
									<g>
										<path fill="#7B7A7A" d="M196.674,204.978v-8.066l2.302-0.734c1.495-0.476,2.46-0.445,2.46,0.95v1.47
											c0,1.214-1.077,2.09-2.19,2.446l-0.687,0.218v3.117L196.674,204.978L196.674,204.978z M198.56,200.108l0.292-0.096
											c0.656-0.21,0.702-0.587,0.702-1.54c0-0.95-0.046-1.31-0.702-1.1l-0.293,0.093L198.56,200.108L198.56,200.108z M201.916,203.31
											v-8.07l3.894-1.242v1.224l-2.016,0.645v1.767l1.947-0.62v1.22l-1.946,0.624v2.628l2.015-0.645v1.225l-3.895,1.244H201.916z
											 M206.061,193.918l2.606-0.83l1.2,5.483l0.023-0.006v-5.868l1.47-0.47v8.068l-2.412,0.77l-1.39-6.296l-0.025,0.004v6.742
											l-1.472,0.47v-8.066V193.918z M211.797,192.088l1.938-0.62c2.108-0.67,2.82-0.557,2.82,1.856v2.877c0,1.53-0.45,2.58-2.82,3.335
											l-1.938,0.618v-8.065V192.088z M213.681,198.398c0.914-0.294,0.993-0.67,0.993-1.44v-3.318c0-1.075-0.047-1.3-0.993-0.996v5.755
											V198.398z M217.021,198.488v-8.065l1.882-0.6v8.064l-1.882,0.6V198.488z M219.347,197.748v-8.067l3.896-1.242v1.224l-2.016,0.643
											v1.768l1.948-0.623v1.224l-1.948,0.623v2.628l2.016-0.645v1.224l-3.896,1.244V197.748z M223.495,188.356l2.606-0.83l1.202,5.486
											l0.02-0.008v-5.87l1.473-0.468v8.068l-2.413,0.766l-1.393-6.294l-0.022,0.007v6.74l-1.476,0.47v-8.067H223.495L223.495,188.356z
											 M229.141,187.78v-1.223l4.507-1.437v1.22l-1.314,0.42v6.843l-1.877,0.6v-6.84L229.141,187.78L229.141,187.78z M234.038,193.06
											v-8.066l3.896-1.243v1.226l-2.018,0.644v1.764l1.95-0.62v1.224l-1.95,0.62v2.63l2.018-0.642v1.223L234.038,193.06L234.038,193.06z
											 M241.131,185.62v-1.132c0-0.397-0.125-0.583-0.5-0.463c-0.406,0.13-0.5,0.387-0.5,0.782c0,1.357,2.878,0.837,2.878,3.332
											c0,1.514-0.813,2.48-2.39,2.98c-1.2,0.387-2.367,0.348-2.367-1.044v-1.496l1.88-0.6v1.393c0,0.476,0.15,0.565,0.5,0.453
											c0.307-0.1,0.5-0.3,0.5-0.772c0-1.825-2.877-0.94-2.877-3.545c0-1.462,0.96-2.324,2.413-2.787c1.27-0.405,2.343-0.32,2.343,1.03
											v1.27l-1.88,0.598V185.62z"/>
									</g>
									<path fill="#BABABA" d="M181.349,162.51v2.538l31.456,5.255l5.032-1.316"/>
									<path fill="#7B7A7A" d="M195.373,158.436l38.796,6.2l-2.352,0.684l-37.406-6.58"/>
									<path fill="#BABABA" d="M194.093,158.74v3.047l32.308,4.9l5.416-1.367"/>
									<path fill="#7B7A7A" d="M201.561,156.46l37.83,6.436l-2.22,0.742l-36.873-6.802"/>
									<path fill="#BABABA" d="M200.298,156.836v2.416l33.644,5.385l3.23-1"/>
									<path fill="#7B7A7A" d="M176.348,163.985l36.457,6.318l-1.47,0.383l-35.953-6.4 M188.326,160.308l38.075,6.38l-1.786,0.527
										l-37.254-6.602"/>
									<path fill="#BABABA" d="M187.361,160.613v2.545l32.306,5.35l4.948-1.293"/>
									<path fill="#7B7A7A" d="M182.311,162.202l37.356,6.306l-1.932,0.46l-36.492-6.478"/>
									<path fill="#BABABA" d="M175.381,164.287v2.546l31.276,5.103l4.68-1.25 M165.733,167.15v0.69l24.45,8.377l9.68-2.53"/>
									<path fill="#7B7A7A" d="M170.989,165.573l35.607,6.354l-1.087,0.282l-35.5-6.336"/>
									<path fill="#BABABA" d="M170.011,165.874v3.113l30.683,4.482l4.815-1.26"/>
									<path fill="#7B7A7A" d="M166.679,166.867l34.325,6.52l-1.142,0.3l-34.128-6.537"/>
									<path fill="#ff9700" d="M114.933,209.216l26.2,7.973l15.585-0.018l0.14,5.345l7.626,3.01l9.683,36.086l8.365,45.24l-32.85,10.2
										l-41.198-6.61l3.603-45.98l-7.406-18.228l3.99-25.06"/>
									<path fill="#000a42" d="M115.996,395.94l-2.77,6.16v9.112l3.986,6.834l2.278,11.106h1.994v-7.974l5.125,7.974l6.655,10.93h5.514
										l14.038-4.587l0.485-3.533l-6.243-9.754l-1.02,4.486l-11.645,2.538l-18.54-28.512 M155.008,397.79l-5.125,2.93l-1.345,13.91
										l3.843,4.555l3.844,12.53h1.994l-1.71-11.107l6.837,4.84l7.69,13.1h17.653l4.843-2.563v-4.27l-9.902-6.302l-1.427,2.988l-8.824,2.2
										l-20.79-29.393 M116.071,206.652l25.632,7.69l14.587,0.186l0.427-1.968l-13.592-0.497l-27.054-7.973 M116.071,201.81l5.412-12.528
										l-2.353-14.513l4.84-2.944l16.971,21.315l16.42,10.934l-0.502,5.533l-12.594-0.39"/>
									<path fill="#ff9700" d="M118.541,173.524l12.91-8.543l11.675-4.744l-12.29-19.364l-12.295-16.897l-13.86-4.558l-5.505,11.392"/>
									<path fill="#ff9700" d="M106.201,118.47l5.886-4.367l10.63,4.367l22.213,14.05l-7.025-15.57l8.354,1.52l11.58,8.353l8.845,18.234
										l-5.98,12.72l-0.38,6.86l-2.964,1.237l-0.265,16.394l-5.508-8.035l-7.228-14.756l-13.765-21.74l-11.107-15.234"/>
									<path fill="#ff9700" d="M114.175,112.775l1.897-1.52l0.857-8.035l11.013,8.234l4.428-0.14l4.208-5.373v11.58l5.126,11.012
										l-16.895-10.82"/>
									<path fill="#ff9700" d="M112.846,80.035l3.226,20.59l11.87,9.302h3.89l13.859-16.897V76.705l-16.423-13.86l-13.197,8.165"/>
									<path fill="#000a42" d="M112.615,79.428l3.048-9.333l12.65-7.74l-4.533-10.95l-8.845,4.985l-4.937,14.048"/>
									<path fill="#ff9700" d="M129.268,61.706l-4.65-10.632h13.383l9.967,10.632v14.427l-1.597,10.255l0.122-10.537"/>
									<path fill="#000a42" d="M111.233,77.094l2.942,14.798l-1.977-2.555l-3.442-8.896"/>
									<path fill="#ff9700" d="M146.371,89.315l1.843-11.558h1.384l0.458,6.065"/>
									<path fill="#7B7A7A" d="M158.163,203.567v18.037l26.713,10.25l3.925-1.174v-2.437l-3.925,0.965l-8.653-3.682l-8.892-16.386"/>
									<path fill="#000a42" d="M167.535,145.194l-2.51-4.977l17.085,18.938l-15.425,3.797l-4.842-5.22 M116.928,103.22l11.013,8.234
										l-8.08,3.962l-5.686-2.64l1.897-1.52 M117.004,116.123l-8.248,3.122l-2.554-0.775l5.886-4.367 M104.681,119.418l-1.644,13.538
										l18.022,21.42l0.774,12.03l8.727-0.833l-12.02,7.95L99.175,130.81 M114.933,209.216l-5.962,18.97l-0.76,19.58l7.86,15.947
										l10.633,17.352l-12.796-10.138l-0.358,34.45l36.131,11.675l-41.198-6.61l3.603-45.98l-7.405-18.228l3.99-25.06 M125.108,212.31
										l16.025,4.88l15.585-0.018l0.14,5.345l7.626,3.01l4.526,16.874l-4.983,5.364l3.376,33.3l-18.076-42.6l-28.176-21.41l23.353,11.133
										l-8.11-9.062"/>
									<path fill="#ff9700" d="M178.454,309.352l-23.514,7.614l0.923,2.784l2.277,8.415l21.36-9.58 M178.154,419.945l-9.476-24.005
										l6.266-60.087l-16.803-7.688l-6.327,14.237l2.42,21.728l1.99,33.602l-1.99,3.703l19.933,28.192l7.404-1.993l1.422-2.848
										 M179.891,319.655l-18.967,8.51l14.413,6.594 M139.066,316.72l-23.85-3.63v9.1l23.277,0.28 M140.296,415.02l-7.974-17.23
										l-2.372-61.408l-15.092-13.272l-7.405,25.09l10.253,38.912l-0.492,14.037l17.885,27.097l10.23-2.265l0.63-4.486 M129.474,333.956
										l9.02-10.442l-21.485,0.292"/>
									<path fill="#000a42" d="M139.066,316.72l-21.485,1.864l-2.366,3.604v-9.1 M114.857,323.11l-4.13,26.13l10.82,37.444l-4.335,14.465
										l0.493-14.038L107.451,348.2 M178.454,309.352l-21.105,15.885l-2.41-8.27 M158.141,328.165l-3.555,27.597l5.455,40.178
										l-5.808,5.495l1.992-3.703l-4.41-55.33"/>
									<path fill="#FFFFFF" d="M119.911,95.5l9.59,2.448l8.66-3.227l-8.875,7.178 M126.388,91.084l3.648,0.568l2.573-1.137l-2.573,2.753"
										/>
									<path opacity="0.5" fill="#ff9700" enable-background="new    " d="M178.454,309.352l3.117,8.197l-2.07,1.035 M179.891,319.655
										h1.68l-6.234,15.104 M171.926,364.8l-1.516,31.14l7.743,24.005l-9.476-24.005 M138.493,323.514l-6.52,11.245l-2.5-0.804
										 M129.949,336.382h1.335l1.98,59.558l7.032,19.08l-7.974-17.23 M164.484,225.526l13.02,40.004l5.028,41.322l-8.152-41.785
										 M124.617,51.074l12.804-1.198l12.635,11.748l-2.088,14.51V61.705l-10.632-10.631 M148.214,77.757l1.842-0.663l0.576,6.443
										l-4.26,5.778l3.483-5.58l-0.345-5.7"/>
								</g>
								</svg>
							</div>
						</div>
						<div class="right">
							<div class="flex-soluciones">
								<div class="concepto-1">
									<?php the_field('quees_desc'); ?>
								</div>							
								<div class="concepto-2">
									<div class="box box--plus">
										<div class="sec-title">
											<h3><?php the_field('quees_subtitle'); ?></h3>
										</div>
										<div class="accordeon">
											<?php
												$accordeon = get_field('quees_funciones');
												foreach ($accordeon as $ac) {
												?>
												<div class="accordeon__item">
													<?php echo $ac['header']; ?>
												</div>
												<?php
												}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="services">
	<div class="x-container">
		<div class="title">
			<h2><?php the_field('services_title'); ?></h2>
		</div>
		<div class="box-flex">
			<?php
				$services = get_field('services');
				foreach ($services as $service) {
					?>
				<div class="box-flex__item">
					<div class="box">
						<div class="front">
							<div class="titleInit">
								<h3><?php echo $service['title']; ?></h3>
							</div>
							<div class="descrip">
								<?php echo $service['desc']; ?>
							</div>
							<div class="link">
								<a href="<?php echo get_permalink($service['link']); ?>" class="btn">Ver más</a>
							</div>
						</div>
					</div>
				</div>
					<?php
				}
			?>
		</div>
		<div class="min-heightA">
			<div class="inside-valid-flex">
				<?php
					$services = get_field('services');
					foreach ($services as $service) {
						?>
						<div class="back">
							<div class="back-into">
								<div class="flex-into">
									<div class="flex-into">										
										<div class="self_information">
											<?php
												$precios = get_field('precios',$service['link']);
												foreach ($precios as $pp) {
													?>
												<div class="self_form__init <?php if($pp['destacado']) {?> destacado <?php } ?>">
													<div class="self_form__init__front">
														<ul>
															<li class="titleMensual"><?php echo $pp['title']; ?></li>
															<li class="planMensual"><b><?php echo $pp['planmensual']; ?></b></li>
															<?php
																foreach ($pp['interna'] as $kk) {
																	?>
																<li><?php echo $kk['text']; ?></li>
																	<?php
																}
															?>
															<li class="button">
																<a href="javascript:void(0)" class="btn">Consultar</a>						
															</li>
														</ul>
													</div>
													<div class="self_form__init__back" data="<?php echo $pp['title']; ?>">
														<div class="form">
															<div class="form__title"><?php echo $pp['title']; ?></div>
															<div class="form__content">
																<?php echo do_shortcode('[contact-form-7 id="71" title="consulta"]'); ?>
															</div>
														</div>
													</div>
												</div>
													<?php
												}
											?>			
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
				?>
			</div>	
		</div>		
	</div>
</section>
<section class="clientes" style="display: none;">
	<div class="x-container">
		<div class="title">
			<h2><?php the_field('clientes_title'); ?></h2>
		</div>
		<div class="clientes__slider">
			<div class="swiper-container clientes__swiper">
				<div class="swiper-wrapper">
					<?php
						$testimonios = get_field('clientes');
							if ($testimonios){
								foreach($testimonios as $testimonio) {
					?>
						<div class="swiper-slide">
							<div class="clientes__item">
								<img src="<?php echo $testimonio['imagen']; ?>">
							</div>
						</div>
					<?php
							}
						}
					?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</section>
<section class="background-banner" style="background-image: url('<?php the_field('background_banner'); ?>');">
	<div class="x-container">
		<div class="flex-c">
			<div class="left">
				<div class="title title--white">
					<h2><?php the_field('background_title'); ?></h2>
				</div>
			</div>
			<div class="right">
				<div class="contacto">
					<div class="contactoContent">
						<div class="center_title">
							<?php the_field('form_title'); ?>
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
<?php
get_footer();
?>
