<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="img-3x-text<?php if($padding_top != 'Default') echo ' pt-' . $padding_top; if($padding_bottom != 'Default') echo ' pb-' . $padding_bottom; ?><?php if($background == 'White') echo ' bg-white' ?>"<?php if($id) echo ' id="' . $id . '"' ?><?php if($background == 'Color' && $background_color) echo ' style="background-color:' . $background_color . ';"' ?>>
    <div class="bg">
      <img src="<?= get_stylesheet_directory_uri() ?>/img/after-2.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="content d-flex justify-content-between flex-wrap ">
          <figure class="col-12 col-lg-6">
            <?= wp_get_attachment_image($image_1['ID'], 'full', false, array('class' => 'img img-1')) ?>
            <?= wp_get_attachment_image($image_2['ID'], 'full', false, array('class' => 'img img-2')) ?>
            <?= wp_get_attachment_image($image_3['ID'], 'full', false, array('class' => 'img img-3')) ?>
          </figure>
          <div class="text col-12 col-lg-6">
            <div class="bg-text"></div>
            <div class="wrap">
              
              <?= $title ?>
              <?= $text ?>

              <?php if ($link): ?>
                <div class="link-wrap">
                  <a href="<?= $link['url'] ?>"<?php if($link['target']) echo ' target="_blank"' ?>><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow_right_gold.svg" alt=""><?= html_entity_decode($link['title']) ?></a>
                </div>
              <?php endif ?>

            </div>
          </div>
          <div class="slider-wrap">
            <div class="swiper img-slider img-slider-1">
              <div class="swiper-wrapper">

                <?php if ($image_1): ?>
                  <div class="swiper-slide">
                    <?= wp_get_attachment_image($image_1['ID'], 'full') ?>
                  </div>
                <?php endif ?>
                
                <?php if ($image_2): ?>
                  <div class="swiper-slide">
                    <?= wp_get_attachment_image($image_2['ID'], 'full') ?>
                  </div>
                <?php endif ?>
                
                <?php if ($image_3): ?>
                  <div class="swiper-slide">
                    <?= wp_get_attachment_image($image_3['ID'], 'full') ?>
                  </div>
                <?php endif ?>
                
              </div>
            </div>
            <div class="swiper-pagination img-pagination-1"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php endif; ?>