<?php
/* Template Name: Application Template */
get_header();
?>
<?php
$posts = get_post_with_post_type('ung_dung', [], ['gallery_application'], 15);
?>
<section class="cs-gradient_bg_2" id="applications-page">
    <div class="container">
        <?php if($posts){?>
            <?php foreach ($posts as $index => $post){?>
                <div class="row item-service">
                    <div class="col-12 wow fadeInLeft">
                        <div class="content-service">
                            <h4><?php echo $post->post_title ?></h4>
                            <div class="kai-line mb-3"></div>
                            <p>
                                <?php echo $post->post_content ?>
                            </p>
                        </div>
                    </div>
                    <?php
                    $gallery_application = $post->gallery_application ?? [];
                    ?>
                    <?php if($gallery_application){?>
                        <?php foreach ($gallery_application as $key => $value){ ?>
                            <?php
                            $img = $value['url'] ?? '';
                            ?>
                            <?php if($img){?>
                                <div class="col-md-3 col-6 wow fadeIn">
                                    <img class="img-fluid" src="<?= $img ?>"/>
                                </div>
                            <?php }?>
                        <?php }?>
                    <?php }?>
                </div>
            <?php }?>
        <?php }else{?>
        <?php }?>
    </div>
</section>
<?php
get_template_part('inc/tpt', 'contact');
?>
<?php get_footer(); ?>