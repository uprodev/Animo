<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="home-banner<?php if($background == 'White') echo ' bg-white' ?>"<?php if($id) echo ' id="' . $id . '"' ?><?php if($background == 'Color' && $background_color) echo ' style="background-color:' . $background_color . ';"' ?>>
    <div class="bg">
      <img src="<?= get_stylesheet_directory_uri() ?>/img/after-1.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="content d-flex justify-content-between flex-wrap ">
          <div class="left">

            <?php if ($title || (is_array($slides) && checkArrayForValues($slides))): ?>
            <h1>
              <?= $title ?>

              <?php if (is_array($slides) && checkArrayForValues($slides)): ?>
              <span>

                <?php foreach ($slides as $item): ?>
                  <?php if ($item['title']): ?>
                    <span><?= $item['title'] ?></span>
                  <?php endif ?>
                <?php endforeach ?>

              </span>
            <?php endif ?>

          </h1>
        <?php endif ?>

        <?php if (is_array($usp_text) && checkArrayForValues($usp_text)): ?>
        <ul>

          <?php foreach ($usp_text as $item): ?>
            <?php if ($item['text']): ?>
              <li><?= $item['text'] ?></li>
            <?php endif ?>
          <?php endforeach ?>

        </ul>
      <?php endif ?>

      <?php if ($reviews_rating || $reviews_link): ?>
        <p>
          <img src="<?= get_stylesheet_directory_uri() ?>/img/star.svg" alt="">
          <?= $reviews_rating ?>

          <?php if ($reviews_link): ?>
            <a href="<?= $reviews_link['url'] ?>"<?php if($reviews_link['target']) echo ' target="_blank"' ?>><?= html_entity_decode($reviews_link['title']) ?></a>
          <?php endif ?>

        </p>
      <?php endif ?>

      <div class="btn-wrap d-flex flex-wrap">

        <?php if ($button): ?>
          <a href="<?= $button['url'] ?>" class="btn-default"<?php if($button['target']) echo ' target="_blank"' ?>><span><?= html_entity_decode($button['title']) ?></span></a>
        <?php endif ?>

        <div class="swiper-pagination banner-pagination"></div>
      </div>

    </div>

    <?php if (is_array($slides) && checkArrayForValues($slides)): ?>
    <div class="slider-wrap">
      <div class="swiper banner-slider">
        <div class="swiper-wrapper">

          <?php foreach ($slides as $item): ?>
            <?php if ($item['image']): ?>
              <div class="swiper-slide">
                <?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
              </div>
            <?php endif ?>
          <?php endforeach ?>

        </div>
      </div>
    </div>
  <?php endif ?>

</div>
</div>
</div>

<?php if ($scroll_button): ?>
  <div class="btn">
    <a href="<?= $scroll_button['url'] ?>" class="scroll d-flex align-items-center"<?php if($scroll_button['target']) echo ' target="_blank"' ?>><?= html_entity_decode($scroll_button['title']) ?> <img src="<?= get_stylesheet_directory_uri() ?>/img/chevron-down.svg" alt=""></a>
  </div>
<?php endif ?>

</section>

<?php endif; ?>