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
											<h1 class="entry-title mb-0">Servicios de Ingeniería </h1>
										</div>
										<div class="title-content flex-col">
											<div class="title-breadcrumbs pb-half pt-half"></div>
										</div>
									</div>
								</div>
							</div>

							<div class="row align-middle">
								<div class="col medium-5 small-12 large-5">
									<div class="col-inner">
										<div class="img has-hover x md-x lg-x y md-y lg-y">
											<div class="img-inner dark">
												<img width="1020" height="680"
													src="<?php echo base_url()?>assets/images/shutterstock_224935621-1200x800.jpg"
													class="attachment-large size-large" alt="" loading="lazy"
													srcset="<?php echo base_url()?>assets/images/shutterstock_224935621-1200x800.jpg 1200w, <?php echo base_url()?>assets/images/shutterstock_224935621-600x400.jpg 600w, <?php echo base_url()?>assets/images/shutterstock_224935621-768x512.jpg 768w"
													sizes="(max-width: 1020px) 100vw, 1020px" />
											</div>
										</div>
									</div>
								</div>

								<div class="col medium-7 small-12 large-7">
									<div class="col-inner">
										<p>INSPECCIONES Y SERVICIOS DE INGENIERÍA MARÍTIMA</p>
										<p>Ofrecemos los siguientes servicios:</p>
										<ul>
											<li>Inspecciones previas a la compra de la nave</li>
											<li>Inspecciones previas/posteriores al arriendo</li>
											<li>Inspecciones de tasación de la nave</li>
											<li>Estudios sobre cómo extender la vida útil de la nave</li>
											<li>Optimización del uso de combustibles y conservación energética</li>
											<li>Selección y evaluación de astilleros</li>
											<li>Determinación y evaluación de la renovación del acero</li>
										</ul>
									</div>
								</div>
							</div>
							
							<?php $this->load->view('services/navbarotros')?>
							
							<div class="row align-middle" id="row-758308495">
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