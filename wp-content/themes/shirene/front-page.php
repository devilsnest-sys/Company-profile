<?php get_header()?>
<section class="splash-screen" id="splash-screen">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Shirene Anand</h1>
                <video autoplay="" muted="" playsinline="" loop class="Slash-sc-vid">
                    <source src="https://shirene.net/wp-content/uploads/2024/01/bts.mp4" type="video/mp4"> Your browser does not support HTML5 video.
                </video>
                <a href="" class="cursor-click-open"><img src="<?php echo get_template_directory_uri()?>/images/mouse-cursor.webp" class="img-fluid"  alt="Shirene Self Portrait"></a>
            </div>
        </div>
    </div>
</section>
<div class="columns" data-scroll-container="">
    <div class="column column-reverse">
        <?php
        $imageNames1 = range(1, 82);
        shuffle($imageNames1);
        for ($i = 1; $i <= 82; $i++) {
            $imageName = $imageNames1[$i - 1] . '.webp';
            ?>
            <figure class="column__item">
                <div class="column__item-imgwrap">
                    <img src="<?php echo get_template_directory_uri() ?>/images/all/<?php echo $imageName; ?>" class="img-fluid" width="420" height="550" />
                </div>
            </figure>
        <?php } ?>
    </div>

    <div class="column">
        <?php
        $imageNames2 = range(83, 164);
        shuffle($imageNames2);
        for ($i = 83; $i <= 164; $i++) {
            $imageName = $imageNames2[$i - 83] . '.webp';
            ?>
            <figure class="column__item">
                <div class="column__item-imgwrap">
                    <img src="<?php echo get_template_directory_uri() ?>/images/all/<?php echo $imageName; ?>" class="img-fluid" width="420" height="550" />
                </div>
            </figure>
        <?php } ?>
    </div>

    <div class="column column-reverse">
        <?php
        $imageNames3 = range(165, 246);
        shuffle($imageNames3);
        for ($i = 165; $i <= 246; $i++) {
            $imageName = $imageNames3[$i - 165] . '.webp';
            ?>
            <figure class="column__item">
                <div class="column__item-imgwrap">
                    <img src="<?php echo get_template_directory_uri() ?>/images/all/<?php echo $imageName; ?>" class="img-fluid" width="420" height="550" />
                </div>
            </figure>
        <?php } ?>
    </div>
</div>
<div class="pos-fixed-footer">
<?php get_footer()?>
</div>