<?php
get_header();
?>
<!-- Start Hero -->
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
<!-- End Hero -->
<!-- Start Main Feature -->
<section class="cs-bg" data-src="<?php echo get_template_directory_uri() ?>/img/feature_bg.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/feature_bg.svg');">
    <div class="cs-height_95 cs-height_lg_70"></div>
    <div class="container">
        <div class="cs-seciton_heading cs-style1 text-center">
            <h3 class="cs-section_title wow fadeInUp">Chúng tôi cung cấp sản phẩm thanh toán được tích hợp đa tính năng</h3>
        </div>
        <div class="cs-height_50 cs-height_lg_40"></div>
        <div class="row">
            <?php
            $product_categories = get_terms_by_taxonomy('product_category', [
                    'parent' => 0,
                    'orderby' => 'term_id',
                    'order' => 'DESC'
            ], ['icon', 'images']);
            $product_categories = get_terms_by_taxonomy('product_category', [
                'parent' => 0,
                'orderby' => 'term_id',
                'order' => 'DESC'
            ], ['icon', 'images']);
            if($product_categories){
                foreach ($product_categories as $index => $category){
            ?>
            <div class="col-md-6 col-xl-4">
                <div class="cs-iconbox cs-style1">
                    <?php if($category->icon && $category->icon['url']){?>
                    <div class="cs-iconbox_icon cs-center">
                        <img src="<?= $category->icon['url']?>" alt="<?= $category->name ?>" >
                    </div>
                    <?php }?>
                    <div class="cs-iconbox_in">
                        <div class="cs-iconbox_number cs-primary_font">0<?= $index+1 ?></div>
                        <h3 class="cs-iconbox_title"><?= $category->name ?></h3>
                        <div class="cs-iconbox_subtitle">
                            <?= $category->description ?>
                        </div>
                        <a class="d-none" href="" style="color: red">
                            Xem thêm
                        </a>
                    </div>
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
            </div>
            <?php
                }
            }
            ?>
            <?php
            $services = get_post_with_post_type('dich_vu', [], ['icon']);
            if($services){
                foreach ($services as $index => $service){
                    ?>
                    <div class="col-md-6 col-xl-4">
                        <div class="cs-iconbox cs-style1">
                            <?php if($service->icon && $service->icon['url']){?>
                                <div class="cs-iconbox_icon cs-center">
                                    <img src="<?= $service->icon['url']?>" alt="<?= $service->post_title ?>" >
                                </div>
                            <?php }?>
                            <div class="cs-iconbox_in">
                                <div class="cs-iconbox_number cs-primary_font">0<?= count($product_categories) + $index+1 ?></div>
                                <h3 class="cs-iconbox_title"><?= $service->post_title ?></h3>
                                <div class="cs-iconbox_subtitle">
                                    <?= $service->post_content ?>
                                </div>
                                <a class="d-none" href="" style="color: red">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="cs-height_75 cs-height_lg_45"></div>
    </div>
</section>
<!-- End Main Feature -->

<!-- Start About -->
<section id="about" class="cs-gradient_bg_1">
    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="container">
        <div class="row align-items-center flex-column-reverse-lg">
            <div class="col-xl-6 wow fadeInLeft">
                <div class="cs-left_full_width cs-space110">
                    <div class="cs-left_sided_img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/about_img_1.png" alt="About">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="cs-height_0 cs-height_lg_40"></div>
                <div class="cs-seciton_heading cs-style1">
                    <h3 class="cs-section_title wow fadeIn">Giải pháp thanh toán toàn diện, đa dịch vụ chỉ với 1 thiết bị thông minh</h3>
                </div>
                <div class="cs-height_15 cs-height_lg_15"></div>
                <div class="cs-list_1_wrap">
                    <ul class="cs-list cs-style1 cs-mp0">
                        <li>
                <span class="cs-list_icon">
                  <img src="<?php echo get_template_directory_uri() ?>/img/tick.svg" alt="Tick">
                </span>
                            <div class="cs-list_right">
                                <h3>Quản lý thông minh với Smart POS</h3>
                                <p>
                                    Smart POS giúp việc chuyển đổi số trong kinh doanh trở nên tinh gọn, mang lại hiệu quả lợi nhuận tức thì.
                                </p>
                                <p>
                                    Smart POS được thiết kế và vận hành trong hệ sinh thái kinh doanh khép kín: nhận đơn hàng, đặt bàn, bán hàng, thanh toán, lưu trữ, quản lý data khách hàng (thói quen, sở thích, tần suất, giá trị đơn hàng,...) Hỗ trợ marketing thu hút và giữ chân khách hàng; Tạo nên đột phá về doanh thu và chất lượng dịch vụ.
                                </p>
                            </div>
                        </li>
                        <li>
                            <span class="cs-list_icon">
                              <img src="<?php echo get_template_directory_uri() ?>/img/tick.svg" alt="Tick">
                            </span>
                            <div class="cs-list_right">
                                <h3>Thanh toán đa dạng với Smart POS</h3>
                                <p>Smart POS chấp nhận thanh toán đa dạng các loại thẻ ngân hàng (tín dụng, ghi nợ, thẻ 1 chạm contactless nội địa và quốc tế), các loại ví điện tử/QR codes khác nhau cho mọi dịch vụ, hàng hóa tại điểm kinh doanh.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="cs-list_img wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;"><img src="<?php echo get_template_directory_uri() ?>/img/about_img_2.png" alt="About"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="cs-height_135 cs-height_lg_0"></div>
</section>
<!-- End About -->

<!-- Start Fun Fact -->
<div class="container-fluid">
    <div class="cs-funfact_1_wrap cs-type1">
        <div class="cs-funfact cs-style1">
            <div class="cs-funfact_icon cs-center"><img src="<?php echo get_template_directory_uri() ?>/img/funfact_icon_1.svg" alt="Icon"></div>
            <div class="cs-funfact_right">
                <div class="cs-funfact_number cs-primary_font"><span data-count-to="320" class="odometer odometer-auto-theme"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</div>
                <h2 class="cs-funfact_title">Retail stores</h2>
            </div>
        </div>
        <div class="cs-funfact cs-style1">
            <div class="cs-funfact_icon cs-center"><img src="<?php echo get_template_directory_uri() ?>/img/funfact_icon_2.svg" alt="Icon"></div>
            <div class="cs-funfact_right">
                <div class="cs-funfact_number cs-primary_font"><span data-count-to="92" class="odometer odometer-auto-theme"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span></div></span>k</div>
                <h2 class="cs-funfact_title">Customer</h2>
            </div>
        </div>
        <div class="cs-funfact cs-style1">
            <div class="cs-funfact_icon cs-center"><img src="<?php echo get_template_directory_uri() ?>/img/funfact_icon_3.svg" alt="Icon"></div>
            <div class="cs-funfact_right">
                <div class="cs-funfact_number cs-primary_font"><span data-count-to="5" class="odometer odometer-auto-theme"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></span>k</div>
                <h2 class="cs-funfact_title">Positive Rating</h2>
            </div>
        </div>
        <div class="cs-funfact cs-style1">
            <div class="cs-funfact_icon cs-center"><img src="<?php echo get_template_directory_uri() ?>/img/funfact_icon_4.svg" alt="Icon"></div>
            <div class="cs-funfact_right">
                <div class="cs-funfact_number cs-primary_font"><span data-count-to="20" class="odometer odometer-auto-theme"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</div>
                <h2 class="cs-funfact_title">Award Winning</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Fun Fact -->

<!-- Start All Feature -->
<section class="cs-bg" data-src="<?php echo get_template_directory_uri() ?>/img/feature_bg.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/feature_bg.svg');">
    <div class="cs-height_135 cs-height_lg_0"></div>
    <div id="feature">
        <div class="cs-height_95 cs-height_lg_70"></div>
        <div class="container">
            <div class="cs-seciton_heading cs-style1 text-center">
                <h3 class="cs-section_title wow fadeInUp">Available features</h3>
            </div>
            <div class="cs-height_50 cs-height_lg_40"></div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon_box_5.svg" alt="Icon">
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">Effortless card</h3>
                            <div class="cs-iconbox_subtitle">Lorem Ipsum is simply dummy text of the most printing and typese Ipsum is simply dummy</div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon_box_6.svg" alt="Icon">
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">Software accuracy</h3>
                            <div class="cs-iconbox_subtitle">Lorem Ipsum is simply dummy text of the most printing and typese Ipsum is simply dummy</div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon_box_7.svg" alt="Icon">
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">Customization</h3>
                            <div class="cs-iconbox_subtitle">Lorem Ipsum is simply dummy text of the most printing and typese Ipsum is simply dummy</div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon_box_8.svg" alt="Icon">
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">Customer data</h3>
                            <div class="cs-iconbox_subtitle">Lorem Ipsum is simply dummy text of the most printing and typese Ipsum is simply dummy</div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon_box_9.svg" alt="Icon">
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">Seamless checkout</h3>
                            <div class="cs-iconbox_subtitle">Lorem Ipsum is simply dummy text of the most printing and typese Ipsum is simply dummy</div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="cs-iconbox cs-style1 cs-type1">
                        <div class="cs-iconbox_icon cs-center">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon_box_10.svg" alt="Icon">
                        </div>
                        <div class="cs-iconbox_in">
                            <h3 class="cs-iconbox_title">High speed process</h3>
                            <div class="cs-iconbox_subtitle">Lorem Ipsum is simply dummy text of the most printing and typese Ipsum is simply dummy</div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
            </div>
        </div>
        <div class="cs-height_75 cs-height_lg_45"></div>
    </div>
</section>
<!-- End All Feature -->
<!-- Start Retail Stores -->
<section class="cs-gradient_bg_1">
    <div class="cs-height_95 cs-height_lg_70"></div>
    <div class="container">
        <div class="cs-seciton_heading cs-style1 text-center">
            <h3 class="cs-section_title wow fadeInUp">Phần mềm bán hàng hoàn hảo cho<br>hầu hết các cửa hàng bán lẻ</h3>
        </div>
        <div class="cs-height_50 cs-height_lg_40"></div>
        <div class="row align-items-center flex-column-reverse-lg">
            <div class="col-xl-6">
                <div class="cs-left_full_width cs-space40">
                    <div class="cs-left_sided_img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/retail-store.png" alt="Retail Stores">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <?php
                $services = get_post_with_post_type('ung_dung', [], ['icon'], 15);
                ?>
                <?php
                if($services)
                $services = array_chunk($services, 2, true);
                {?>
                <div class="cs-height_25 cs-height_lg_40"></div>
                    <?php foreach ($services as $index => $service){?>
                        <?php
                        $__class = $index % 2 == 0 ? 'col-lg-11 offset-lg-1': 'col-lg-11';
                        ?>
                        <div class="row wow fadeInRight">
                            <div class="<?= $__class ?>">
                                <div class="row">
                                    <?php foreach ($service as $item){?>
                                    <div class="col-md-6">
                                        <div class="cs-iconbox cs-style2 text-center">
                                            <?php if($item->icon['url']){?>
                                            <div class="cs-iconbox_icon">
                                                <img src="<?= $item->icon['url'] ?>" alt="<?= $item->post_title ?>">
                                            </div>
                                            <?php }?>
                                            <h2 class="cs-iconbox_title"><?= $item->post_title ?></h2>
                                        </div>
                                        <div class="cs-height_25 cs-height_lg_25"></div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="cs-height_75 cs-height_lg_70"></div>
</section>
<!-- End Retail Stores -->
<!-- End Client Section -->
<section class="cs-bg" data-src="<?php echo get_template_directory_uri() ?>/img/feature_bg.svg" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/feature_bg.svg');">
    <div class="cs-height_95 cs-height_lg_70"></div>
    <div class="container">
        <div class="cs-seciton_heading cs-style1 text-center">
            <h3 class="cs-section_title">ĐỐI TÁC VÀ KHÁCH HÀNG</h3>
        </div>
        <div class="cs-height_50 cs-height_lg_40"></div>
        <div class="cs-slider cs-style1 cs-gap-24">
            <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-fade-slide="0" data-slides-per-view="responsive" data-xs-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="6" data-add-slides="6">
                <div class="cs-slider_wrapper slick-initialized slick-slider slick-dotted"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4400px; transform: translate3d(-1320px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-6" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_2.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_3.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_4.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_5.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_6.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_3.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" role="tabpanel" id="slick-slide10" tabindex="-1" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_1.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" role="tabpanel" id="slick-slide11" tabindex="-1" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_2.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" role="tabpanel" id="slick-slide12" tabindex="-1" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_3.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" role="tabpanel" id="slick-slide13" tabindex="-1" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_4.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" role="tabpanel" id="slick-slide14" tabindex="-1" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_5.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="5" aria-hidden="false" role="tabpanel" id="slick-slide15" tabindex="-1" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_6.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide" data-slick-index="6" aria-hidden="true" role="tabpanel" id="slick-slide16" tabindex="-1" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_3.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_1.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_2.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_3.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_4.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_5.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_6.svg" alt="Client">
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" style="width: 220px;"><div><div class="cs-slide" style="width: 100%; display: inline-block;">
                                        <div class="cs-client cs-accent_bg cs-center">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/client_3.svg" alt="Client">
                                        </div>
                                    </div></div></div></div></div></div>
            </div><!-- .cs-slider_container -->
            <div class="cs-pagination cs-style1"><ul class="slick-dots" role="tablist" style=""><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide11" aria-label="2 of 2" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide12" aria-label="3 of 2" tabindex="-1">3</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control13" aria-controls="slick-slide13" aria-label="4 of 2" tabindex="-1">4</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control14" aria-controls="slick-slide14" aria-label="5 of 2" tabindex="-1">5</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control15" aria-controls="slick-slide15" aria-label="6 of 2" tabindex="-1">6</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control16" aria-controls="slick-slide16" aria-label="7 of 2" tabindex="-1">7</button></li></ul></div>
        </div><!-- .cs-slider -->
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
</section>
<!-- End Client Stores -->
<!-- Start FAQ -->
<section id="faq" class="cs-gradient_bg_1">
    <div class="cs-height_95 cs-height_lg_70"></div>
    <div class="cs-seciton_heading cs-style1 text-center">
        <h3 class="cs-section_title wow fadeInUp">Các câu hỏi thường gặp</h3>
    </div>
    <div class="cs-height_50 cs-height_lg_40"></div>
    <div class="container">
        <div class="row align-items-center flex-column-reverse-lg">
            <div class="col-xl-6 wow fadeInLeft">
                <div class="cs-left_full_width cs-space110">
                    <div class="cs-left_sided_img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/faq_img.png" alt="About">
                    </div>
                </div>
                <div class="cs-height_0 cs-height_lg_40"></div>
            </div>
            <div class="col-xl-6">
                <?php
                $faqs = get_post_with_post_type('faqs', [], [], 15);
                ?>
                <?php if($faqs){?>
                    <div class="cs-accordians cs-style1 wow fadeIn kai-faqs">
                        <?php foreach ($faqs as $index => $faq) {?>
                        <div class="cs-accordian cs-white_bg">
                            <div class="cs-accordian_head">
                                <h2 class="cs-accordian_title"><span>Q<?= $index + 1?>.</span> <?= $faq->post_title ?></h2>
                                <span class="cs-accordian_toggle">
                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 -7.36618e-07C12.0333 -8.82307e-07 9.13319 0.879733 6.66645 2.52795C4.19971 4.17617 2.27713 6.51885 1.14181 9.25975C0.00649787 12.0006 -0.290551 15.0166 0.288226 17.9264C0.867005 20.8361 2.29562 23.5088 4.3934 25.6066C6.49119 27.7044 9.16393 29.133 12.0736 29.7118C14.9834 30.2905 17.9994 29.9935 20.7403 28.8582C23.4811 27.7229 25.8238 25.8003 27.472 23.3335C29.1203 20.8668 30 17.9667 30 15C29.9957 11.0231 28.414 7.21026 25.6019 4.39815C22.7897 1.58603 18.9769 0.00430081 15 -7.36618e-07V-7.36618e-07ZM15 20C14.085 20.0009 13.2014 19.6665 12.5163 19.06C12.1075 18.6962 11.72 18.3425 11.4663 18.0887L7.875 14.5587C7.75017 14.4457 7.64946 14.3086 7.57892 14.1557C7.50838 14.0028 7.46947 13.8372 7.46452 13.6689C7.45957 13.5005 7.48869 13.3329 7.55012 13.1762C7.61155 13.0194 7.70402 12.8766 7.822 12.7564C7.93998 12.6362 8.08102 12.5412 8.23667 12.4769C8.3923 12.4125 8.55934 12.3804 8.72773 12.3822C8.89612 12.3841 9.0624 12.4199 9.21659 12.4876C9.37078 12.5553 9.5097 12.6535 9.62501 12.7762L13.225 16.3125C13.46 16.5462 13.81 16.8637 14.1738 17.1875C14.4021 17.3889 14.6961 17.5001 15.0006 17.5001C15.3051 17.5001 15.5991 17.3889 15.8275 17.1875C16.19 16.865 16.54 16.5475 16.7675 16.3212L20.375 12.7762C20.4903 12.6535 20.6292 12.5553 20.7834 12.4876C20.9376 12.4199 21.1039 12.3841 21.2723 12.3822C21.4407 12.3804 21.6077 12.4125 21.7633 12.4769C21.919 12.5412 22.06 12.6362 22.178 12.7564C22.296 12.8766 22.3885 13.0194 22.4499 13.1762C22.5113 13.333 22.5404 13.5005 22.5355 13.6689C22.5305 13.8372 22.4916 14.0028 22.4211 14.1557C22.3505 14.3086 22.2498 14.4457 22.125 14.5587L18.5263 18.095C18.2763 18.345 17.8925 18.695 17.485 19.0562C16.8003 19.6647 15.916 20.0006 15 20Z" fill="currentColor"></path>
                                  </svg>
                                </span>
                            </div>
                            <div class="cs-accordian-body" style="display: none;">
                                <?= $faq->post_content ?>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
</section>
<!-- End FAQ -->


<!-- End Post Section -->
<section class="cs-bg" data-src="<?php echo get_template_directory_uri() ?>/img/feature_bg.svg" id="news" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/feature_bg.svg');">
    <div class="cs-height_95 cs-height_lg_70"></div>
    <div class="container">
        <div class="cs-seciton_heading cs-style1 text-center">
            <h3 class="cs-section_title wow fadeInUp">Tin tức</h3>
        </div>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status'   => 'publish',
            'posts_per_page' => 10,
            'order' => 'DESC'
        );
        $wpb_all_query = new WP_Query($args);
        $posts = $wpb_all_query->posts ?? [];
        ?>
        <?php if($posts){?>
        <div class="cs-height_50 cs-height_lg_40"></div>
        <div class="cs-slider cs-style1 cs-gap-24">
            <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-fade-slide="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                <div class="cs-slider_wrapper">
                    <?php foreach ($posts as $index => $post){ ?>
                        <div class="slick-slide">
                        <div class="cs-post cs-style1">
                            <div class="cs-post_thumb">
                                <div class="cs-post_thumb_in cs-bg" data-src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');">
                                </div>
                            </div>
                            <div class="cs-post_info">
                                <ul class="cs-post_meta cs-mp0">
                                    <li>
                                      <span class="cs-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512"><path fill="currentColor" d="M152 64h144V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40h40c35.3 0 64 28.65 64 64v320c0 35.3-28.7 64-64 64H64c-35.35 0-64-28.7-64-64V128c0-35.35 28.65-64 64-64h40V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40zM48 448c0 8.8 7.16 16 16 16h320c8.8 0 16-7.2 16-16V192H48v256z"></path></svg>
                                      </span>
                                        <?= convert_date($post->post_date) ?>
                                    </li>
                                </ul>
                                <h2 class="cs-post_title"><?= $post->post_title ?></h2>
                                <a class="cs-text_btn" href="<?= get_post_permalink($post->ID) ?>">
                                    <span>Read More</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="cs-pagination cs-style1">

            </div>
        </div>
        <?php }?>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
</section>
<?php
get_footer();
?>