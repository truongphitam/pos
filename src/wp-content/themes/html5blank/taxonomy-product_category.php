<?php
get_header();

$queried_object = get_queried_object();
$term_id = $queried_object->term_id;
//echo ('<pre>');
//print_r($queried_object);
//echo ('</pre>');
?>
<section id="taxonomy_product_category">
    <div class="cs-height_80 cs-height_lg_80"></div>
    <div class="container">
        <?php
        // Hạ tầng POS
        if($term_id == 15){
            get_template_part('inc/tpt', 'infrastructure');
        }
        // Thiết bị POS
        if($term_id == 17){
            get_template_part('inc/tpt', 'device');
        }
        // Online Payment Gateway
        if($term_id == 34){
            get_template_part('inc/tpt', 'payment-gateway');
        }
        ?>
    </div>
</section>
<?php
get_template_part('inc/tpt', 'contact');
?>
<?php get_footer(); ?>