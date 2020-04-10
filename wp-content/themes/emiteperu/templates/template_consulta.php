<?php
/* Template Name: consulta */
set_query_var('ENTRY', 'consulta');
get_header();
?>
<?php get_template_part('include/nav'); ?>
<section class="init banner flex align-items-center" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
	<div class="x-container titlePrincipal">
		<div class="title title--white">
			<h1><?php the_title();?></h1>
		</div>
	</div>
</section>
<section class="bannerContent">
	<div class="x-container">
		<div class="contenido box">
			<div class="flex">
				<div class="left">
					<div class="content">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="307px" height="450px" viewBox="0 0 307 450" enable-background="new 0 0 307 450" xml:space="preserve">
							<g>
								<path opacity="0.1" fill="#ff9700" enable-background="new    " d="M252.976,221.443L218.394,95.851l-95.305,22.508l-47.273-14.564
									l24.288,128.584l-25.484,89.7"/>
								<path opacity="0.5" fill="#BBBBBA" enable-background="new    " d="M252.894,419.289l-107.213-6.89l-91.657,12.948l75.416,5.357
									l54.098-5.578l44.564-0.21"/>
								<path fill="#ff9700" d="M91.022,83.086l2.93-2.22l-22.712-9.28 M152.58,37.897l3.125,1.93l-3.124-30.735 M209.778,82.249
									l-2.648-2.55l31.903-7.124 M142.312,109.056l13.752,11.333h10.516v11h-19.026l-8.107-9.975 M137.421,122.355l-30.8,9.118
									l-11.35,18.44l-10.942,8.51l-2.368,10.3l12.095,17.262l15.4-8.106l5.675-14.185l11.348-0.81"/>
								<path fill="#ff9700" d="M80.654,170.831l-10.61,18.307l16.312,23.188l33.638,8.105l4.05-8.915l-17.83-18.643l-13.618-5.594
									 M169.282,123.975l29.348,7.498L212,154.169l7.697,7.904l2.026,10.132l-10.136,10.132l-13.767-6.465l-2.96-16.05l0.672-11.53
									 M222.392,173.98l-10.545,9.85l-3.283,0.3l-10.743,18.404l5.073,8.872l22.087-12.255l6.117-14.95 M139.434,126.149l6.904,7.24h23.1
									l0.44-7.24l24.702,23.36v10.13l1.653,16.214l-6.982,10.132l0.442,19.234l-3.708,2.502l3.76,11.527l-31.75,1.284l-0.654-1.285
									l2.512-1.045l-6.767-11.153l-7.56-3.055l-9.456,2.456l-1.09-10.132l-20.234-24.028l1.99-6.168l11.767-0.43 M137.321,228.389h3.79
									l5.67-3.327l3.93-0.493l2.588,0.398l3.568-0.844l-1.608-1.592l2.71-0.876l32.546-1.222l5.004,21.075l-16.35,12.478
									c0,0-2.434,6.975-3.648,7.38c-1.216,0.406-10.13,0-10.13,0l-2.028-4.458l-31.208-15.926L137.321,228.389z M130.126,243.535
									l31.208,16.21l2.5,4.458l-8.107,28.776l-14.658,27.964l-19.05-10.94l3.73-30.58 M172.679,265.419l6.488-3.87l2.026-5.857
									l16.613-12.157l8.92,42.958l-6.08,29.994l-20.67,4.456l-10.714-49.445 M122.02,312.839l17.427,11.346l-12.158,13.377
									 M181.194,322.972l18.64-2.03l-7.294,18.645 M137.58,328.239l-12.442,13.78l-5.205-21.076l-8.098,10.54l-5.256,29.99v52.686
									l12.075-5.675l9.312-40.932l9.614-18.238"/>
								<path fill="#ff9700" d="M179.571,325.199l13.374,18.036l4.863-9.02l2.028,10.64l-4.318,54.308l-10.676,11.755l-5.27-40.53
									l-10.307-21.075 M184.448,414.159l11.017-10.944l11.356,10.944l16.76,10.942v4.863l-23.524-1.215l-9.43-5.675l-9.376-2.43"/>
								<path fill="#000a42" d="M119.58,410.919l-16.41,8.913l-8.205,7.297l-13.017,6.89l3.218,4.86l21.672,2.03l7.084-6.89l8.3-2.026
									l-2.64-9.728"/>
								<path fill="#ff9700" d="M137.421,103.453l18.306,13.936h10.953l5.192-16.87l-1.61-10.99l1.368-5.52l-2.348-11.432l-11.026-8.528
									l-18.81,3.714l-8.782,12.34"/>
								<path opacity="0.5" fill="#ff9700" enable-background="new    " d="M139.212,102.059l18.308,14.33h10.95l5.19-17.266l-1.61-11.185
									l1.373-5.62l-2.35-11.484l-11.028-8.552l-18.807,3.7l-8.782,12.533"/>
								<path fill="#000a42" d="M122.02,222.053l3.243-9.997l9.456-3.512l5.54,18.643l-11.214,0.675"/>
								<path fill="#ff9700" d="M200.004,219.704l-5.143-18.316h1.715l5.658,10.272 M136.071,207.976l9.32-2.757l6.756,3.208l2.837,4.962
									h-2.033l-3.777-4h-4.862l-6.89,3.395"/>
								<path fill="#ff9700" d="M137.462,212.949l9.323-2.754l7.09,3.192l4.093,4.205l-2.015,0.18l-4.463-2.846l-5.785-1.032l-6.892,3.628"
									/>
								<path fill="#ff9700" d="M139.054,218.322l9.322-2.756l6.755,2.754l1.737,2.76l-1.194,0.36l-4.965-2.213l-3.823,0.24l-6.48,3.42"/>
								<path fill="#ff9700" d="M140.646,223.296l6.666-2.357l5.75,0.98l2.195,1.99l-1.247,0.462l-2.982-0.943l-4.445,0.463l-4.887,2.95"/>
								<path fill="#000a42" d="M193.868,203.012l1.303,4.463l-7.168,3.643l-1.095-2.946 M195.322,207.919l1.287,4.342l-7.28,2.256
									l-0.927-2.73 M196.854,212.864l1.148,4.025l-7.113,1.83l-0.963-2.753 M198.16,217.661l0.885,2.907l-7.094,1.088l-0.497-1.777
									 M130.664,86.202l-2.918,2.942l1.553,6.618l6.34,6.62 M179.714,260.537l11.724,21.788l-2.973,35.65l-7.294,1.575l-10.713-49.442
									l2.222-4.687 M138.616,247.943l-2.586,49.797l-10.79,13.026l-2.026-1.163l6.912-66.07 M153.297,224.969l-1.35,13.28l15.727,13.02
									l2.586,11.12h-3.386l-2.52-6.39l-31.206-16.217l4.173-11.26l4.337-0.656l5.622-2.895l3.43-0.4 M129.369,317.624l1.545,15.95
									l-3.625,3.988l-5.27-24.724 M192.54,339.587l-11.347-16.615l6.8-0.742l7.817,8.036 M179.571,325.199l5.27,7.11l-2.488,19.655
									l6.81,17.605l-0.174,36.708l-3.356,3.766l-4.87-39.853l-10.307-21.073 M120.294,320.943l6.563,20.887l-9.23,19.685l-6.937,50.75
									l-3.11,1.424v-52.37l5.434-30.035 M181.174,420.645l3.274-6.486l3.855-3.83l8.61,8.98l5.167,6.35l20.91,4.305l-23.23-1.215
									l-9.285-5.675"/>
								<path fill="#FFFFFF" d="M152.787,103.774l8.926,2.062l7.503-3.37l-7.038,6.315"/>
								<path fill="#000a42" d="M78.83,173.98l-9.98,14.758l16.313,23.19l33.635,8.107l1.015-2.23l-34.218-15.39l-9.352-18.585
									 M81.961,168.723l2.568-11.293l10.942-8.51l11.347-18.44l30.603-8.124l-28.842,16.11l-8.357,18.605l-8.225,8.058l2.06,20.858
									 M139.434,126.199l-9.933,38.722l-12.763,1.202l-0.996,5.37l20.236,24.03l1.088,10.134l9.456-2.456l7.557,3.053l6.763,11.155
									l-2.52,1.044l0.64,1.283l7.526-0.304l-10.51-30.23l-14.863-12.137l4.076-7.03l47.455-10.678l-20.577,2.346l-3.3,0.34l-24.845,2.488
									 M142.324,108.841l8.44,6.83l-3.117,8.708l4.51,7.01h-4.58l-8.13-10.08 M169.282,123.975l29.333,23.112l0.58,16.316l3.837,9.783
									l14.705,3.004l-5.35,5.35l-13.77-6.462l-2.96-16.052l0.672-11.528 M203.49,210.014l-5.073-8.873l2.538-4.345l10.695,4.626
									l15.183-6.73l-1.255,3.067 M139.447,67.762l-0.83,7.496l4.914,13.131l-2.123,6.9l14.062,18.015l7.43,4.085h-5.972l-18.313-14.433
									l-6.924-24.048"/>
								<path opacity="0.5" fill="#ff9700" enable-background="new    " d="M169.282,123.975l30.826,4.143l14.35,24.64l8.623,8.19
									l-1.358,11.256l-3.988-9.466l-7.28-8.57l-12.04-20.48 M222.91,175.831l9.767,7.594l-7.416,15.288l3.437-13.747 M92.596,187.279
									l14.988,2.92l16.46,21.318 M197.807,243.535l14.238,38.704l-11.398,34.248 M163.834,264.203l-3.01,30.657l-19.755,26.084
									 M139.024,328.239l3.903,20.04l-9.78,17.31l-14.386,42.895l5.928-43.194l13.927-18.203 M197.807,334.216l4.274,8.693l-6.27,55.21"
									/>
							</g>
						</svg>
					</div>
				</div>
				<div class="right">
					<div class="reactInit">
						<div class="badtitle"><?php the_content();?></div>
						<div class="reactForm">
							<div class="reactInput inputCrow full rucPrincipalInput">
								<label>Ruc Emisor</label>
								<input type="text" name="ruc" id="ruc" class="validRuc"  pattern="\d*" maxlength="12">
								<i class="loader-07"></i>
							</div>							
							<div class="error errorRuc" style="display: none;">
								Aún no eres parte de nuestros clientes <a href="#contacto" class="btnanchor">Regístrate ahora</a>
							</div>
							<div class="row disabled">
								<div class="reactInput inputCrow full">
									<label>Tipo de comprobante</label> 
									<select id="tipo_documento" name="type">
										<option value="01">Factura electrónica</option>
										<option value="03">Boleta electrónica</option>
										<option value="07">Nota de crédito electrónica</option>
										<option value="08">Nota de debito electrónica</option>
									</select>
								</div>
							</div>
							<div class="row disabled">							
								<div class="reactInput inputCrow">
									<label>Serie</label>
									<input type="text" name="serie" id="serie" class="validFun" maxlength="4">
								</div>
								<div class="reactInput inputCrow">
									<label>Número</label>
									<input type="text" name="numero" id="numero" class="validFun">
								</div>
							</div>
							<div class="row disabled">
								<div class="reactInput inputCrow">
									<label>Fecha de emisión</label>
									<input type="text" name="fecha" id="fecha" class="validFun" required>
								</div>
								<div class="reactInput inputCrow">
									<label>Importe total</label>
									<input type="number" name="importe" id="importe" class="validFun">
								</div>
							</div>
							<div class="row">
								<button id="send" class="btn" disabled="true">Consultar Comprobante</button>
							</div>
							<div class="sendspecial" style="display: none;">
								<div class="sendc">
									<div class="row">
										<div class="reactInput inputCrow full">
											<label>Enviar información al correo</label>
											<input type="email" name="email" id="email" placeholder="cliente@emite.pe">
										</div>
									</div>
									<button id="sendEmail" class="btn btn--orange" disabled>Enviar por correo</button>
								</div>
								<div class="mensaje_email"></div>
							</div>
						</div>
						<div class="reactContent">
							<div id="reactCont"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();