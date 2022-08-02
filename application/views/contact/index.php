<?php $this->load->view('common/head')?>


<body>
	<div id="wrapper">
		<?php $this->load->view('common/header')?>

		<main id="main">
			<div id="content">
				<div class="row">
					<div class="col small-12 large-12">
						<div class="col-inner">
							<div class="page-header-wrapper">
								<div class="page-title light normal-title">
									<div class="page-title-inner container align-center flex-row medium-flex-wrap">
										<div class="title-wrapper flex-col text-left medium-text-center">
											<h1 class="entry-title mb-0">Contacto</h1>
										</div>
										<div class="title-content flex-col flex-right text-right medium-text-center">
											<div class="title-breadcrumbs pb-half pt-half"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col medium-6 large-6">
						<div class="col-inner">
							<div>
								<form id="contact-form" method="POST">
									<p>
										<label> Su Nombre (requerido)<br />	
											<span>
												<input autofocus type="text" name="name" value="" size="40"/>
											</span>
										</label>
									</p>
									<p>
										<label> Su mail (requerido)<br />	
											<span>
												<input type="email" name="email" value="" size="40"/>
											</span>
										</label>
									</p>
									<p>
										<label> Asunto<br />	
											<span>
												<input type="text" name="subject" value="" size="40"/>
											</span>
										</label>
									</p>
									<p>
										<label> Su mensaje<br />	
											<span>
												<textarea name="message" cols="40" rows="10"></textarea>
											</span>
										</label>
									</p>
									<p>
										<label id="status-message" style="display:none;background-color: #009400;padding: 8px 5px 8px 5px !important;color: #fff !important;"></label>
									</p>
									<p><input type="submit" value="Enviar"/>
									</p>
								</form>
							</div>
						</div>
					</div>

					<div class="col medium-6 large-6">
						<div class="col-inner">
							<div class="icon-box featured-box icon-box-left text-left">
								<div class="icon-box-img" style="width: 60px">
									<div class="icon">
										<div class="icon-inner">
											<?xml version="1.0" encoding="iso-8859-1"?>
											<!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
											<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												viewBox="0 0 488.532 488.532"
												style="enable-background:new 0 0 488.532 488.532;" xml:space="preserve">
												<g>
													<g>
														<path d="M363.06,209.3c-2.1,0.5-3.6,2.1-5.7,2.6c-2.6,1-4.7,1.6-7.3,2.1c-3.1,0.5-5.2-1.6-6.2-4.2c-0.5-2.6-1-4.7-0.5-7.3
														c0.5-4.7,1.6-9.4,2.6-14.1c2.6-14.1,5.2-28.6,7.8-42.7c0.5-3.6,1.6-7.8,1-11.5c0-4.7-3.1-6.8-7.8-6.8c-6.2,0-13,0-19.3,0
														s-12.5,0-18.2,0c-1.6,0-3.1,0-4.7,0.5c-2.6,0.5-4.2,2.1-4.7,4.2c0,1.6,1,3.6,3.6,4.7c2.1,0.5,4.2,1,6.8,1c5.2,0.5,6.8,2.6,6.8,7.8
														c0,1,0,1.6,0,2.6c-2.1,12.5-4.2,25-6.8,37.5c-1,7.3-2.1,14.6-3.1,21.3c-1.6,10.4,8.9,20.3,16.7,21.3c4.7,0.5,9.9,1,14.6,1
														c10.4,0,19.3-4.7,26.6-12c1-1,2.6-3.1,2.6-4.7C368.26,209.9,366.16,207.8,363.06,209.3z" />
														<path d="M443.26,45.3c-59.9-60.4-157.3-60.4-217.1,0c-57.8,57.8-59.9,150-6.2,210.4l1,1c-5.7,12.5-16.1,28.1-31.8,35.9
														c-5.2,2.6-4.2,10.4,1.6,11.5c17.7,2.6,42.7,0,65.6-17.7l0.5,0.5c58.8,34.4,135.9,26.6,186.4-24
														C503.16,202.6,503.16,105.2,443.26,45.3z M334.96,271.8c-65.1,0-117.7-52.6-117.7-117.7s52.6-117.6,117.7-117.6
														s117.7,52.6,117.7,117.7S400.06,271.8,334.96,271.8z" />
														<path d="M288.56,359.3c-12-12.5-27.6-12.5-40.1,0c-9.4,9.4-18.7,18.7-28.1,28.1c-2.6,2.6-4.7,3.1-7.8,1.6
														c-5.7-3.6-12.5-6.2-18.2-9.9c-27.1-17.2-50-39.1-70.3-64c-9.9-12.5-18.7-25.5-25-40.6c-1-3.1-1-4.7,1.6-7.3
														c9.9-8.9,18.7-18.2,28.1-27.6c13-13,13-28.1,0-41.1c-7.8-7.8-15.1-15.1-22.4-22.4c-7.8-7.8-15.1-15.6-22.9-22.9
														c-12-12-27.6-12-40.1,0c-9.4,9.4-18.7,18.7-28.1,28.1c-8.9,8.9-13.5,19.3-14.6,31.2c-1.6,19.3,3.1,38,9.9,56.2
														c14.1,38,35.4,70.8,60.9,101.5c34.9,41.7,76.5,74.5,125,97.9c21.9,10.4,44.3,18.7,68.2,20.3c17.2,1,31.8-3.6,43.7-16.7
														c7.8-9.4,17.2-17.2,25.5-26c12.5-13,12.5-28.6,0-41.1C318.76,389.5,303.66,374.4,288.56,359.3z" />
														<path d="M338.56,118.2c10.9,0,19.8-8.9,19.8-19.8s-8.9-20.3-19.8-20.3s-19.8,8.9-20.3,19.8
														C318.76,109.4,327.66,118.2,338.56,118.2z" />
													</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
											</svg>
										</div>
									</div>
								</div>
								<div class="icon-box-text last-reset">
									<h3>Teléfono</h3>
									<p><span style="font-size: 120%;"><a href="tel:+56 32 2609600">+56 32 2609600</a></span></p>
								</div>
							</div>
							<div class="gap-element clearfix" style="display:block; height:auto; padding-top: 30px;">
							</div>

							<div class="icon-box featured-box icon-box-left text-left">
								<div class="icon-box-img" style="width: 60px">
									<div class="icon">
										<div class="icon-inner">
											<?xml version="1.0" encoding="iso-8859-1"?>
											<!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
											<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												viewBox="0 0 488.6 488.6" style="enable-background:new 0 0 488.6 488.6;"
												xml:space="preserve">
												<g>
													<g>
														<path
															d="M258.341,14.5c0-8-6.5-14.5-14.5-14.5s-14.5,6.5-14.5,14.5v21.2h29V14.5z" />
														<path d="M96.341,142.9c-1.4,2.2,0.2,5.2,2.8,5.2h257.8c4,0,7.7-2,9.9-5.4l24.5-38.3c2-3.1,2-7,0-10.1l-24.5-38.3
														c-2.2-3.4-5.9-5.4-9.9-5.4h-257.8c-2.7,0-4.3,2.9-2.8,5.2l26.7,41.8c0.7,1.1,0.7,2.5,0,3.6L96.341,142.9z" />
														<path d="M392.341,202.4c1.4-2.2-0.2-5.2-2.8-5.2h-116.3v97.5h116.2c2.7,0,4.3-2.9,2.8-5.2l-26.7-41.8c-0.7-1.1-0.7-2.5,0-3.6
														L392.341,202.4z" />
														<path
															d="M214.341,197.2h-82.7c-4,0-7.7,2-9.9,5.4l-24.5,38.3c-2,3.1-2,7,0,10.1l24.5,38.3c2.2,3.4,5.9,5.4,9.9,5.4h82.7V197.2z" />
														<path d="M289.641,438h-31.3V163h-29v275h-31.3c-10.9,0-19.7,8.8-19.7,19.7v30.9h131v-30.9C309.341,446.8,300.541,438,289.641,438z" />
													</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
											</svg>
										</div>
									</div>
								</div>
								<div class="icon-box-text last-reset">
									<h3>Dirección</h3>
									<h4><span lang="ES">Errázuriz 755 oficina 505</span></h4>
									<p>Valparaíso – Chile</p>
								</div>
							</div>

							<div class="gap-element clearfix" style="display:block; height:auto; padding-top: 30px;">
							</div>


							<div class="icon-box featured-box icon-box-left text-left">
								<div class="icon-box-img" style="width: 60px">
									<div class="icon">
										<div class="icon-inner">
											<?xml version="1.0" encoding="iso-8859-1"?>
											<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
											<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												viewBox="0 0 299.997 299.997"
												style="enable-background:new 0 0 299.997 299.997;" xml:space="preserve">
												<g>
													<g>
														<path d="M149.996,0C67.157,0,0.001,67.158,0.001,149.997c0,82.837,67.156,150,149.995,150s150-67.163,150-150
														C299.996,67.158,232.835,0,149.996,0z M149.999,52.686l88.763,55.35H61.236L149.999,52.686z M239.868,196.423h-0.009
														c0,8.878-7.195,16.072-16.072,16.072H76.211c-8.878,0-16.072-7.195-16.072-16.072v-84.865c0-0.939,0.096-1.852,0.252-2.749
														l84.808,52.883c0.104,0.065,0.215,0.109,0.322,0.169c0.112,0.062,0.226,0.122,0.34,0.179c0.599,0.309,1.216,0.558,1.847,0.721
														c0.065,0.018,0.13,0.026,0.195,0.041c0.692,0.163,1.393,0.265,2.093,0.265h0.005c0.005,0,0.01,0,0.01,0
														c0.7,0,1.401-0.099,2.093-0.265c0.065-0.016,0.13-0.023,0.195-0.041c0.63-0.163,1.245-0.412,1.847-0.721
														c0.114-0.057,0.228-0.117,0.34-0.179c0.106-0.06,0.218-0.104,0.322-0.169l84.808-52.883c0.156,0.897,0.252,1.808,0.252,2.749
														V196.423z" />
													</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
											</svg>
										</div>
									</div>
								</div>
								<div class="icon-box-text last-reset">
									<h3>Mail</h3>
									<h4><span lang="ES"> <a href="mailto:southtrade@stship.net" target="_blank" rel="noopener noreferrer">southtrade@stship.net</a></span></h4>
								</div>
							</div>

							<div id="gap-131309241" class="gap-element clearfix" style="display:block; height:auto; padding-top: 30px;">
							</div>

							<p><iframe loading="lazy" src="https://www.google.com/maps/d/u/0/embed?mid=1YhtKW-I7lVmWDOFQo0J163SzfrieFoFF" width="640" height="480"></iframe></p>
						</div>
					</div>
				</div>
				<p>&nbsp;</p>
			</div>
			</main>

<?php $this->load->view('common/footer')?>

</div>

<?php $this->load->view('common/scripts')?>

<style>
	label.error{
		background-color: #BE0A0A;
		padding: 8px 5px 8px 5px !important;
		color: #fff !important;
	}
</style>

<script src="<?php echo base_url()?>assets/jquery-validate/jquery.validate.js"></script>
<script>
	$(document).ready(function () {

$('#contact-form').validate({ // initialize the plugin
	rules: {
		name: {
			required: true,
			maxlength: 20
		},
		email: {
			required: true,
			email: true,
			minlength: 5
		},
		subject: {
			maxlength: 15
		},
		message: {
			maxlength: 300
		}
	},
	messages: {
		name: {
			required: 'Debe ingresar su nombre.',
			maxlength: 'No debe superar los 20 caracteres.'
		},
		email: {
			required: 'Debe ingresar un correo electrónico.',
			email: 'Debe ingresar un formato de correo válido.	'
		},
		subject: 'No debe superar los 15 caracteres.',
		message: 'No debe superr los 300 caracteres.'
	},
	submitHandler: function(form){
		$.ajax({
			url: '<?php echo base_url()?>sendmail',
			data: $(form).serializeArray(),
			type: 'POST',
			success: function(res){
				console.log(res);
				if(res){
					document.getElementById('status-message').innerText = 'Mensaje enviado correctamente.';
					document.getElementById('status-message').style.display = 'block';
					form.reset();
					setTimeout(() => {document.getElementById('status-message').style.display = 'none';},3500);
				}else{
					document.getElementById('status-message').innerText = 'Ocurrió un error al enviar su mensaje, intentelo más tarde.';
					document.getElementById('status-message').style.display = 'block';
					setTimeout(() => {document.getElementById('status-message').style.display = 'none';},3500);
				}
			}
		});
	}
});

});
	$( "#contact-form" ).submit(function( event ) {
  		event.preventDefault();
	});
</script>

</body>

</html>