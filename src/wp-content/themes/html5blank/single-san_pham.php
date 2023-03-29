<?php get_header(); ?>
<?php
//echo ('<pre>');
//print_r(the_post())
?>
	<main role="main" aria-label="Content">
        <div class="cs-height_100 cs-height_lg_70"></div>
        <section class="wrapper-detail-products">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <h4>Sản phẩm liên quan</h4>
                        <div class="wrapper-detail-content">
                            What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                            Why do we use it?
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="full_name">Họ & Tên</label>
                                <input type="text" class="form-control" placeholder="Họ & Tên" id="full_name">
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" class="form-control" placeholder="Số điện thoại" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="note">Ghi chú</label>
                                <textarea type="text" class="form-control" placeholder="Ghi chú" id="note"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Nhận tư vấn</button>
                            </div>
                        </form>
                        <br>
                        <div class="form-group">
                            <h4>Sản phẩm liên quan</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="https://soveur.com/uploads/profile_img/1674967221.jpeg" class="img-fluid"/>
                                </div>
                                <div class="col-md-9">
                                    <a class="right_title">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</main>
<?php get_footer(); ?>
