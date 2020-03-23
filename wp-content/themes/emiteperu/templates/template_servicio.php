<?php /* Template Name: servicio */
set_query_var('ENTRY', 'servicio');
get_header();
$frontpage_id = get_option( 'page_on_front' );
?>
<?php get_template_part('include/nav'); ?>
<section class="init" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="titlePrincipal x-container">
		<div class="title">
			<h1><?php the_title(); ?></h1>
		</div>
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
</section>
<section class="contacto">
	<div class="x-container">
		<div class="flex">
			<div class="left">
				<div class="notBox">
					<div class="title">
						<h2>Características</h2>
					</div>
					<div class="contact">
						<div class="left">
							<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="307px" height="450px" viewBox="0 0 307 450" enable-background="new 0 0 307 450" xml:space="preserve">
								<g>
									<path opacity="0.1" fill="#ff9700" enable-background="new    " d="M130.11,54.473l-56.44,68.11l-8.102,86.96l-9.607,67.842
										l84.82,74.837l88.542-114.988"/>
									<path opacity="0.5" fill="#BBBBBA" enable-background="new    " d="M49.27,441.804l112.777,3.052l95.683-17.17l-79.352-2.678
										l-56.553,7.965l-46.758,1.96"/>
									<path opacity="0.5" fill="#ff9700" enable-background="new    " d="M166.335,207.195v-9.945l17.266-17.5l-4.995-22.214
										l-1.368,19.267l-14.903,20.507v10.988l1.264,1.843 M80.348,73.625l2.71-2.053l-21.02-8.59 M136.335,31.802l2.894,1.788
										l-2.894-28.446 M190.255,72.85l-2.45-2.36l29.526-6.593 M113.987,128.37l-18.314-5.993l-11.26,10.717l-1.642,6.777l-9.037,3.493
										l-2.26,6.902l-12.118,14.457l14.582,9.858l10.68-5.52l21.153-20.974 M122.582,103.49l12.322,9.31l7.668-0.822l6.846-4.656
										l2.074-7.803l-0.98-20.54l-8.082-13.058l-14.782,5.255l-10.543,15.47 M152.585,93.944l2.39,1.335l2.208,5.767l-5.508,6.144h-1.25
										l2.317-7.222 M58.105,167.08l21.18,14.992l13.323,29.368l-5.752,8.626l-23.616-24.44l-9.242-23.207 M163.445,129.175l18.28,27.5
										l6.573,12.118l13.35,8.01l20.947-7.19l-7.955-15.152l-1.108-8.22l-17.224-3.12l-3.287-14.58l-18.28-4.107 M102.81,238.485
										l-0.688,4.725l-17.615,39.227l10.396,37.994l20.46,12.734l16.774-36.656l3.377-25.904l-2.502-23.693l-25.03-16.188 M112.603,411.66
										l2.738,4.107l-1.37,6.025l-9.104,4.792l-2.67,11.774l-19.58,2.327l10.286-14.514l3.132-9.992 M92.72,347.34l23.15-5.628l5.51,12.99
										l-8.893,17.32l-3.492,30.806l-12.117,10.27l-1.847-37.38 M208.442,410.93l11.502-3.97l5.615,11.64l7.92,4.04l2.21,13.073
										l-14.787,2.602l-4.52-6.845l-1.504-6.3 M178.823,339.94l-3.697-4.106l14.814-20.948l4.082,7.188l5.98,12.528 M137.171,246.542
										l27.008-16.206l5.338,9.38l23.504,39.674l-0.5,32.005l-17.87,23.207l-18.688-34.094l-18.3-30.273"/>
									<path fill="#ff9700" d="M79.795,75.65l2.71-2.052l-21.02-8.59 M136.335,33.828l2.894,1.79l-2.894-28.451 M189.702,74.876
										l-2.45-2.36l29.526-6.594 M122.852,108.21l5.356,25.508l4.666,2.824l10.43-0.135l4.19-1.087l1.37-23.824l-6.57,4.11l-8.217,1.367
										 M149.765,122.377l-1.242,13.972l-5.207,1.788l14.019,11.909v-23.452"/>
									<path fill="#ff9700" d="M124.221,122.04l2.875,12.527l5.042,3.57l-7.857,12.523l-7.03-22.14 M163.445,129.175l18.28,30.447
										l6.573,12.118l13.35,8.01l20.947-7.188L211.3,157.159l-4.313-9.04l-10.68-2.053l-3.286-14.58l-18.28-4.108 M112.515,129.843
										l-16.842-3.49l-12.732,8.214l-1.643,6.778l-9.036,3.49l-2.26,6.903l-12.117,14.457l14.58,9.857l10.682-5.52l21.152-20.972
										 M56.447,167.632l21.183,14.993l13.32,29.367l-5.75,8.627l-23.618-24.44l-9.242-23.208 M201.648,181.187l20.947-6.982l1.642,6.982
										l-10.062,18.344l-25.26,13.9l-8.217-6.16"/>
									<path opacity="0.5" fill="#ff9700" enable-background="new    " d="M203.12,181.187l20.947-6.982l1.644,6.982l-10.063,18.344
										l-25.26,13.9l-8.215-6.16"/>
									<path fill="#000a42" d="M92.388,214.19l-5.75,8.04l6.09,9.226l9.724-17.266"/>
									<path fill="#ff9700" d="M179.633,208.223l7.847,6.394l-10.683,12.44l-9.858-18.39 M100.785,238.485l-0.688,4.725l-17.614,39.227
										l10.394,37.994l20.46,12.734l14.196-40.663l5.954-21.896l-0.474-23.693l-26.657-17.31 M134.593,246.542l29.586-16.206l2.76,9.38
										l21.36,34.3l1.64,37.38l-17.866,23.206l-18.69-34.094l-18.3-30.273 M92.605,322.074l19.73,12.528v3.08l1.22,2.875l-22.904,5.75
										l2.414-11.705 M176.797,339.94l-3.696-4.106l16.838-20.948l2.056,7.188l5.98,12.528 M90.693,347.708l23.15-5.627l3.394,14.497
										l-6.776,15.813l-3.49,30.805l-12.117,10.27l-1.852-37.377 M177.335,341.378l20.602-5.133l8.826,19.1l10.277,49.7l-11.288,4.724
										l-4.313-15.61l-9.895-18.072l-14.209-11.912"/>
									<path opacity="0.5" fill="#ff9700" enable-background="new    " d="M179.335,341.195l20.98-5.134l11.206,17.495l5.423,51.49
										l-11.244,4.682l-1.522-15.75l-10.266-18.074l-14.577-11.914"/>
									<path fill="#ff9700" d="M106.97,405.32l0.684,3.147l2.054,1.917l-14.103,4.11 M110.393,412.027l2.737,4.108l-1.368,6.025
										l-9.106,4.79l-2.668,11.776l-19.58,2.327l10.286-14.512l3.13-9.995 M206.233,410.93l11.502-3.97l5.614,11.64l7.94,6.983
										l2.192,10.13l-14.79,2.602l-4.516-6.845l-1.507-6.3 M122.029,105.883l12.325,9.31l7.665-0.82l6.846-4.656l2.074-7.804
										l-0.978-20.538l-8.626-8.352l-14.24,0.548l-10.54,15.472 M151.898,95.786l2.437,1.334v5.203l-3.396,8.867h-1.25l2.34-8.3"/>
									<path fill="#000a42" d="M118.333,98.08l-2.328,2.05l0.55,4.93l3.97,2.602l1.095-0.823 M135.723,98.12l3.148-3.93h1.78l1.78,3.108
										l-0.958,0.802l-1.78-1.223 M146.857,100.67l-6.988,2.733l-3.823,0.193l-5.608-2.1l5.307,3.884l4.507-0.227 M141.091,147.19h-5.893
										l-8.033,46.78l10.456,21.403l9.985-13.697 M141.221,145.19l1.474-8h-9.2l1.59,8"/>
									<path fill="#ff9700" d="M133.095,138.787l-9.306,15.31l-7.858-24.677l-1.963,0.737l-7.735,19.89l-9.085,8.55L90.95,179.75
										l14.702,15.814l-1.398,16.523l7.012,9.595l-1.677,2.552l22.915,12.608l4.175-19.124l-10.805-23.9l8.726-47.14"/>
									<path fill="#ff9700" d="M178.665,157.536l-16.94-28.974l-3.44-1.183l0.53,26.075l-15.594-14.335l-1.233,7.857l7.378,55
										l-11.012,15.105l-4.192,19.76l28.173-12.031v-2.285l-4.003-5.524l5.34-6.86l0.817-12.087l16.217-18.303"/>
									<path fill="#000a42" d="M108.995,225.24l-2.372,3.317l20.542,13.073l1.842-5.616 M136.68,236.842l2.364,5.248l24.858-12.822
										l-1.39-3.383 M129.745,236.842l3.742,1.383l2.332-0.69l2.304,5.016l-4.636,2.857l-5.587-3.317 M165.791,209.313l2.646,5.024
										l-6.8,5.584l-1.864-2.89 M168.703,214.776l2.398,4.335l-7.246,4.13l-1.636-2.698 M171.505,219.698l2.174,4.03l-7.166,3.632
										l-1.678-2.713 M174.032,224.518l1.63,2.895l-7.323,2.836l-0.95-1.78"/>
									<path fill="#ff9700" d="M103.901,214.1l-2.644,5.025l6.798,5.585l1.865-2.89 M100.989,219.564l-2.397,4.334l7.244,4.13l1.637-2.698
										 M98.185,224.485l-2.172,4.032l7.167,3.632l1.677-2.716 M95.658,229.306l-1.63,2.894l7.326,2.838l0.95-1.782"/>
									<path fill="#000a42" d="M148.865,111.496l-9.79,13.202l-8.902,0.733l-7.32-17.22l11.225,8.763l8.216-1.368 M95.673,126.352
										l-8.285,19.887l-10.61,1.506l-6.7,8.99l-12.193,9.46l12.117-14.458l3.39-6.51l7.906-3.883l2.96-6.614 M163.445,129.175
										l19.15,12.553l4.265,15.745l22.07,7.736l-7.282,14.54l-11.963-9.57l-8.99-12.275 M56.447,167.632l2.275,14.478l6.015,13.36
										l26.213,16.522l-5.75,8.627l-23.618-24.44l-7.986-23.24 M106.233,150.046l-8.593,26.006l17.063,24.452l-4.783,12.155l11.46,18.062
										l-11.79-6.488l1.677-2.552l-7.013-9.595l1.397-16.523l-12.74-16.36l4.236-20.608 M180.698,207.27l8.216,6.16l24.25-15.075
										l11.072-17.168l-23.227,20.545 M92.877,320.43l-8.437-37.96l15.657-39.26l0.688-4.725l5.57-8.885l-10.944,58.44l8.556,24.55
										l-1.294,7.245l10.664,13.33 M92.563,322.074l19.686,12.528l-21.62,11.705l3.94-11.22 M90.693,347.708l5.198,18.295l-0.285,3.798
										l3.998,7.37l-4.75,36.294l-0.375-34.73 M93.825,416.545l-3.132,9.996l-10.286,14.513l12.462-1.48l2.278-13.032l7.51-12.403
										 M206.233,410.93l6.553,14.734l1.39,5.806l4.517,6.845l8.606-1.513l-11.067-8.317l0.536-5.846 M205.745,409.727l0.488-18.094
										l-23.516-30.313l15.18-25.08l-20.643,5.138l1.564,21.793l12.684,12.918l9.934,18.072 M173.101,335.834l4.504-5.603l20.37,4.372
										l-20.72,3.8 M175.865,329.674l-8.25-7.6l-14.73-56.502l-14.29-21.223l-4.002,2.192l1.596,23.082l16.9,30.396l18.984,34.582"/>
									<path opacity="0.5" fill="#ff9700" enable-background="new    " d="M149.335,123.406v-2.762l7.898,4.357l-0.275,3.316
										 M158.335,129.114v-3.683l3.167,1.843l0.76,2.147"/>
								</g>
							</svg>
						</div>
						<div class="right">
							<?php the_content(); ?>
						</div>						
					</div>
				</div>
			</div>
			<div class="right">
				<div class="box">
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
<section class="precios">
	<div class="x-container">
		<div class="title">
			<h2><?php the_field('precios_title'); ?></h2>
		</div>	
	</div>
	<div class="precios_box x-container">
		<div class="self_information">
			<?php
				$precios = get_field('precios');
				foreach ($precios as $pp) {
					?>
				<div class="self_form__init">
					<div class="self_form__init__front">
						<ul>
							<li class="titleMensual"><?php echo $pp['title']; ?></li>
							<li class="planMensual"><?php echo $pp['planmensual']; ?></li>
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
</section>
<?php
get_footer();
?>
