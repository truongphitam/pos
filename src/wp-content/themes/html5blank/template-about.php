<?php
/* Template Name: About Template */
get_header();
?>
<div id="home">
    <div class="cs-height_80 cs-height_lg_80"></div>
    <section class="cs-hero cs-style1 cs-bg" data-src="<?php echo get_template_directory_uri() ?>/img/hero_bg.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/hero_bg.svg');">
        <div class="container">
            <div class="cs-hero_img">
                <div class="cs-hero_img_bg cs-bg" data-src="<?php echo get_template_directory_uri() ?>/img/hero_img_bg.png" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/hero_img_bg.png');"></div>
                <img src="<?php echo get_template_directory_uri() ?>/img/hero_img.png" alt="Hero Image" class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;">
            </div>
            <div class="cs-hero_text">
                <h2 class="cs-hero_title wow fadeInUp">Trợ Thủ Đắc Lực Cho <br/>Doanh Nghiệp Của Bạn</h2>
                <div class="cs-hero_subtitle">
                    ATOM Solution được đăng ký hoạt động với tên đầy đủ là Công ty Cổ phần Giải pháp ATOM, thuộc ngành nghề chính là công nghệ tài chính (Fintech).
                    <br/><br/>
                    ATOM được ra đời với mục tiêu cung cấp hạ tầng thanh toán đa nền tảng cho đối tác thuộc các lĩnh vực như: trung gian thanh toán, định chế tài chính, công ty phân phối dịch vụ thanh toán POS, các tổ chức cung cấp cổng thanh toán online,...</div>
                <a href="" class="cs-btn"><span>Xem sản phẩm</span></a>
            </div>
            <div class="cs-hero_shapes">
                <div class="cs-shape cs-shape_position1">
                    <img src="<?php echo get_template_directory_uri() ?>/img/shape_1.svg" alt="Shape">
                </div>
                <div class="cs-shape cs-shape_position2">
                    <img src="<?php echo get_template_directory_uri() ?>/img/shape_2.svg" alt="Shape">
                </div>
                <div class="cs-shape cs-shape_position3">
                    <img src="<?php echo get_template_directory_uri() ?>/img/shape_3.svg" alt="Shape">
                </div>
                <div class="cs-shape cs-shape_position4">
                    <img src="<?php echo get_template_directory_uri() ?>/img/shape_4.svg" alt="Shape">
                </div>
                <div class="cs-shape cs-shape_position5">
                    <img src="<?php echo get_template_directory_uri() ?>/img/shape_5.svg" alt="Shape">
                </div>
                <div class="cs-shape cs-shape_position6">
                    <img src="<?php echo get_template_directory_uri() ?>/img/shape_6.svg" alt="Shape">
                </div>
            </div>
        </div>
    </section>
</div>
<section id="id_objective">
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'about_us'
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
get_template_part('inc/ttp', 'contact');
?>
<?php get_footer(); ?>