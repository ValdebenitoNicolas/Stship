<style scope="scope">
    .text-box .text {
        background-color: rgba(255, 255, 255, 0.7);
        font-size: 100%;
    }
    .text-box .text-inner {
        padding: 15px 15px 15px 15px;
    }
    .text-box {
        width: 90%;
    }
    @media (min-width:550px) {

        .text-box {
            width: 100%;
        }

    }
</style>
<div class="<?php echo $class?>">
    <div class="col-inner">
        <div class="banner has-hover bg-zoom-long" id="banner-600888474" style="background-image: url(<?php echo $bg_url?>); background-size:cover; padding-top: <?php echo $padding?>">
            <div class="banner-inner fill">
                <div class="banner-bg fill">
                    <div class="bg fill bg-fill "></div>
                </div>
                <div class="banner-layers container">
                    <a class="fill" href="<?php echo $href?>">
                        <div class="fill banner-link"></div>
                    </a>
                    <div id="text-box-1004166142"
                        class="text-box banner-layer x50 md-x50 lg-x50 y95 md-y100 lg-y100 res-text">
                        <div class="text box-shadow-1">
                            <div class="text-inner text-center">
                                <h3 class="uppercase"><?php echo $title?></h3>
                                <a href="<?php echo $href?>" target="_self"
                                    class="button primary is-gradient is-large">
                                    <span>más información</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style scope="scope">
                .banner .bg {
                    background-position: 56% 23%;
                }
            </style>
        </div>
    </div>
</div>