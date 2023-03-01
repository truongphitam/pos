<?php
/* Template Name: Service Template */
get_header();
?>
<section class="cs-gradient_bg_2" id="services-page">
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'dich_vu'
        );
        $query = new WP_Query($args);
        $services = $query->posts;
        wp_reset_postdata();
        ?>
        <?php if($services){?>
            <?php foreach ($services as $index => $service){?>
                <?php
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $service->ID ), "single-post-thumbnail" );
                ?>
                <div class="row item-service">
                    <?php if($index % 2 == 0){?>
                        <div class="col-md-6 col-12 wow fadeInLeft">
                            <div class="content-service">
                                <h4><?php echo $service->post_title ?></h4>
                                <div class="kai-line mb-3"></div>
                                <p>
                                    <?php echo $service->post_content ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 wow fadeInRight">
                            <img class="img-fluid" src="<?php echo $image[0]; ?>?v=1.1" alt="<?php echo $service->post_title ?>">
                        </div>
                    <?php }else{?>
                        <div class="col-md-6 col-12 wow fadeInRight">
                            <img class="img-fluid" src="<?php echo $image[0]; ?>?v=1.1" alt="<?php echo $service->post_title ?>">
                        </div>
                        <div class="col-md-6 col-12 wow fadeInLeft">
                            <div class="content-service">
                                <h4><?php echo $service->post_title ?></h4>
                                <div class="kai-line mb-3"></div>
                                <p>
                                    <?php echo $service->post_content ?>
                                </p>
                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
        <?php }?>
    </div>
</section>
<?php
get_template_part('inc/tpt', 'contact');
?>
<?php get_footer(); ?>