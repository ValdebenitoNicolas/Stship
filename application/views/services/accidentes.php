<?php $this->load->view('common/head')?>

<body>

	<div id="wrapper">
		<?php $this->load->view('common/header')?>

		<main id="main" class="">
			<div id="content" class="content-area page-wrapper" role="main">
				<div class="row row-main">
					<div class="large-12 col">
						<div class="col-inner">
							<div class="page-header-wrapper">
								<div class="page-title light normal-title">
									<div class="page-title-inner container align-center text-center flex-row-col medium-flex-wrap">
										<div class="title-wrapper flex-col">
											<h1 class="entry-title mb-0">Accidentes y seguros </h1>
										</div>
										<div class="title-content flex-col">
											<div class="title-breadcrumbs pb-half pt-half"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="row align-middle">
								<div class="col medium-4 small-12 large-4">
									<div class="col-inner">
										<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_125712862">
											<div class="img-inner dark">
												<img width="1020" height="681"
													src="<?php echo base_url()?>assets/images/ANTOFAGASTA-EXPRESS-144-1199x800.jpg"
													class="attachment-large size-large" alt="" loading="lazy"
													srcset="<?php echo base_url()?>assets/images/ANTOFAGASTA-EXPRESS-144-1199x800.jpg 1199w, <?php echo base_url()?>assets/images/ANTOFAGASTA-EXPRESS-144-599x400.jpg 599w, <?php echo base_url()?>assets/images/ANTOFAGASTA-EXPRESS-144-768x513.jpg 768w"
													sizes="(max-width: 1020px) 100vw, 1020px" />
											</div>
										</div>
									</div>
								</div>

								<div class="col medium-8 small-12 large-8">
									<div class="col-inner">
										<p>Aplicamos nuestra experiencia para respaldar al equipo de manejo de crisis de
											su Compañía, investigamos las causas, otorgamos soluciones oportunas y
											eficientes y desarrollamos planes y programas de seguridad para las
											operaciones durante y después del accidente para evitar que se repita.</p>
										<p>Nuestros servicios incluyen:</p>
										<ul>
											<li>Incidente / manejo de crisis</li>
											<li>Asesoría en la elaboración de la Carta de Protesta</li>
											<li>Investigación del accidente y documentación</li>
											<li>Análisis de la causa principal</li>
											<li>Acciones correctivas y preventivas</li>
										</ul>
										<p>Todo lo anterior cumple con las normas y prácticas de la industria.</p>
									</div>
								</div>
							</div>
							
							<?php $this->load->view('services/navbarotros')?>
							
							<div class="row align-middle" id="row-520309023">
								<div class="col medium-8 small-12 large-8">
									<div class="col-inner">
									</div>
								</div>

								<div class="col medium-4 small-12 large-4">
									<div class="col-inner text-right">
										<div class="img has-hover x md-x lg-x y md-y lg-y" style="width: 50%;">
											<div class="img-inner dark">
												<img width="300" height="231"
													src="<?php echo base_url()?>assets/images/ISO9001ISO14001-with-UKAS-300x231.jpg"
													class="attachment-large size-large" alt="" loading="lazy" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

	<?php $this->load->view('common/footer')?>

</body>

<?php $this->load->view('common/scripts')?>

</html>