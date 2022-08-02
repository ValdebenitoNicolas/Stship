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
                                    <div class="page-title-inner container align-center flex-row medium-flex-wrap">
                                        <div class="title-wrapper flex-col text-left medium-text-center">
                                            <h1 class="entry-title mb-0">Certificado de Aprobación ISO </h1>
                                        </div>
                                        <div class="title-content flex-col flex-right text-right medium-text-center">
                                            <div class="title-breadcrumbs pb-half pt-half"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-collapse">
                                <div class="col medium-4 small-12 large-4">
                                    <div class="col-inner">
                                        <p><strong>El ámbito de aplicación de este certificado comprende:</strong></p>
                                        <p>Servicios y administración de naves y equipo</p>
                                    </div>
                                </div>

                                <div class="col medium-8 small-12 large-8">
                                    <div class="col-inner">
                                        <div class="slider-wrapper relative">
                                            <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                                                data-flickity-options='{
                                                    "cellAlign": "center",
                                                    "imagesLoaded": true,
                                                    "lazyLoad": 1,
                                                    "freeScroll": false,
                                                    "wrapAround": true,
                                                    "autoPlay": 6000,
                                                    "pauseAutoPlayOnHover" : true,
                                                    "prevNextButtons": true,
                                                    "contain" : true,
                                                    "adaptiveHeight" : true,
                                                    "dragThreshold" : 10,
                                                    "percentPosition": true,
                                                    "pageDots": true,
                                                    "rightToLeft": false,
                                                    "draggable": true,
                                                    "selectedAttraction": 0.1,
                                                    "parallax" : 0,
                                                    "friction": 0.6        
                                                }'
                                            >

                                                <div class="img has-hover x md-x lg-x y md-y lg-y" >
                                                    <a href="<?php echo base_url()?>uploads/Certificate-Of-Conformance-ISO-9001-14001.pdf">
                                                        <div class="img-inner dark">
                                                            <img width="582" height="800"
                                                                src="<?php echo base_url()?>uploads/iso9001stship.png"
                                                                class="attachment-original size-original" alt=""
                                                                loading="lazy"
                                                                srcset="<?php echo base_url()?>uploads/iso9001stship.png 582w, <?php echo base_url()?>uploads/iso9001stship-291x400.png 291w"
                                                                sizes="(max-width: 582px) 100vw, 582px"
                                                            />
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="img has-hover x md-x lg-x y md-y lg-y">
                                                    <a class=""
                                                        href="<?php echo base_url()?>uploads/20CSP137-CERT.pdf">
                                                        <div class="img-inner dark">
                                                            <img width="567" height="800"
                                                                src="<?php echo base_url()?>uploads/cert1stship-567x800.png"
                                                                class="attachment-large size-large" alt=""
                                                                loading="lazy"
                                                                srcset="<?php echo base_url()?>uploads/cert1stship-567x800.png 567w, <?php echo base_url()?>uploads/cert1stship-283x400.png 283w, <?php echo base_url()?>uploads/cert1stship.png 617w"
                                                                sizes="(max-width: 567px) 100vw, 567px" />
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="loading-spin dark large centered"></div>

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