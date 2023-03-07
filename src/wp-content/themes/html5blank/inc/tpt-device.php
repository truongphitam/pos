<?php
$parent = get_queried_object();
$parent_id = $parent->term_id;
$parent_description = $parent->description ?? '';
$parent_name = $parent->name ?? '';
$terms = get_terms([
    'taxonomy' => 'product_category',
    'hide_empty' => false,
    'parent' => $parent_id
]);
//echo ('<pre>');
//print_r($terms);
//echo ('</pre>');
?>
<div class="row item-service">
    <div class="col-md-12 text-center">
        <h4 class="unset-margin-bottom"><?php echo $parent_name ?></h4>
        <p>
            <?= $parent_description ?>
        </p>
    </div>
</div>
<br>
<?php if($terms){?>
    <?php foreach ($terms as $index => $term){?>
        <div class="row item-service">
            <div class="col-12 wow fadeInLeft">
                <div class="content-service">
                    <h4 class="unset-margin-bottom"><?php echo $term->name ?></h4>
                    <div class="kai-line mb-3"></div>
                    <p>
                        <?php echo $term->description ?>
                    </p>
                </div>
            </div>
            <?php
            $posts = get_posts ([
                'post_type' => 'san_pham',
                'tax_query' => [
                    [
                        'taxonomy' => 'product_category',
                        'field' => 'term_id',
                        'terms' => $term->term_id
                    ]
                ]
            ]);
//            echo ('<pre>');
//            print_r($posts);
//            echo ('</pre>');
            ?>
            <?php if($posts){?>
                <?php foreach ($posts as $key => $post){ ?>
                    <div class="col-md-3 col-6 mb-4 wow fadeIn">
                        <a href="<?= get_post_permalink($post->ID) ?>">
                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>"/>
                            <h4 class="text-center">
                                <?= $post->post_title ?>
                            </h4>
                        </a>
                    </div>
                <?php }?>
            <?php }?>
        </div>
    <?php }?>
<?php }else{?>
<?php }?>


