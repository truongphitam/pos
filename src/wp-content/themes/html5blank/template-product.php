<?php
/* Template Name: Product Template */
get_header();
?>
<!-- Start Contact Section -->
<section class="cs-gradient_bg_1" id="products-page">
    <div class="cs-height_95 cs-height_lg_70"></div>
    <div class="container">
        <div class="row item-product">
            <div class="col-12 wow fadeInLeft">
                <div class="content-product">
                    <h4>Nghiên cứu & Phát triển</h4>
                    <div class="kai-line mb-3"></div>
                </div>
            </div>
            <?php for ($i=0; $i < 4; $i++){?>
                <div class="col-md-3 col-2">
                    <div class="child-product">
                        <div class="img-product">
                            <img class="img-fluid" src="https://atomsolution.vn//_next/static/media/img_services_2.b4ab5a25.png">
                        </div>
                        <div class="text-product text-center">
                            <h4>
                                A90
                            </h4>
                            <small>
                                Smart mobile terminal
                            </small>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="cs-height_95 cs-height_lg_70"></div>
</section>
<!-- End Contact Section -->
<?php get_footer(); ?>