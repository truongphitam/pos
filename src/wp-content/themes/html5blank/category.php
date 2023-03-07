<?php
get_header();
$_cat = get_queried_object()->term_id;
$_cat_object = get_term_by( 'id', $_cat, 'category' );
$_cat_name = $_cat_object->name;

?>
<section id="category_post">
    <div class="cs-height_95 cs-height_lg_70"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <article>
                    <div class="post-inner">
                        <div class="thumbnail-wrapper">
                            <figure class="post-thumbnail">
                                <a href="">
                                    <img class="img-fluid" src="https://atomsolution.vn//_next/static/media/img_services_2.b4ab5a25.png">
                                </a>
                            </figure>
                        </div>
                        <div class="entry-wrapper">
                            <header class="entry-header">
                                <h3 class="entry-title">
                                    <a href="https://atomsolution.vn/blog/atom-pos-comprehensive-all-in-one-payment-solution-to-optimize-business-performance-for-businesses/" rel="bookmark">
                                        ATOM-POS | Comprehensive “All-in-One” payment solution to optimize business performance for businesses
                                    </a>
                                </h3>
                            </header>
                            <ul class="entry-read-more">
                                <li class="read-more-button">
                                    <a href="" class="button read-more">
                                        <span>Continue Reading</span>
                                    </a>
                                </li>
                                <li class="entry-meta-read-time">2 min</li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</section>
<?php
get_template_part('inc/tpt', 'contact');
?>
<?php get_footer(); ?>