<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if (is_array($items) && checkArrayForValues($items)): ?>
  <section class="item-4x<?php if($padding_top != 'Default') echo ' pt-' . $padding_top; if($padding_bottom != 'Default') echo ' pb-' . $padding_bottom; ?><?php if($background == 'White') echo ' bg-white' ?>"<?php if($id) echo ' id="' . $id . '"' ?><?php if($background == 'Color' && $background_color) echo ' style="background-color:' . $background_color . ';"' ?>>
    <div class="container">
      <div class="row">

        <?= $title ?>

        <div class="content d-flex justify-content-center">

          <?php foreach ($items as $item): ?>
            <div class="item">

              <?php if (($item['icon_type'] == 'Image') && $item['icon']): ?>
                <figure>
                  <?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
                </figure>
              <?php endif ?>
              
              <?php if (($item['icon_type'] == 'Icon') && $item['icon_2']): ?>
                <i class="<?= $item['icon_2'] ?>"></i>
              <?php endif ?>
              
              <?= $item['title'] ?>
              <?= $item['text'] ?>

              <?php if ($item['link']): ?>
                <div class="link-wrap link-wrap-after">
                  <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= html_entity_decode($item['link']['title']) ?> <img src="<?= get_stylesheet_directory_uri() ?>/img/arrow_right_gold.svg" alt=""></a>
                </div>
              <?php endif ?>

            </div>
          <?php endforeach ?>

        </div>

        <?php if ($button): ?>
          <div class="btn-wrap">
            <a href="<?= $button['url'] ?>" class="btn-default"<?php if($button['target']) echo ' target="_blank"' ?>><span><?= html_entity_decode($button['title']) ?></span></a>
          </div>
        <?php endif ?>

      </div>
    </div>
  </section>
<?php endif ?>

<?php endif; ?>