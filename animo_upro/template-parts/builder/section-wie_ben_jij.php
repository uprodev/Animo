<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <?php if (is_array($items) && checkArrayForValues($items)): ?>
  <section class="img-3x<?php if($background_image) echo ' bg-add'; if($padding_top != 'Default') echo ' pt-' . $padding_top; if($padding_bottom != 'Default') echo ' pb-' . $padding_bottom; ?><?php if($background == 'White') echo ' bg-white' ?>"<?php if($id) echo ' id="' . $id . '"' ?><?php if($background == 'Color' && $background_color) echo ' style="background-color:' . $background_color . ';"' ?>>

    <?php if ($background_image): ?>
      <div class="bg-img">
        <?= wp_get_attachment_image($background_image['ID'], 'full') ?>
      </div>
    <?php endif ?>

    <div class="bg">
    </div>
    <div class="container">
      <div class="row">
        <div class="wrap">
          <?= $title ?>
          <div class="content d-flex flex-wrap ">

            <?php foreach ($items as $item): ?>
              <div class="item">

                <?php if ($item['image']): ?>
                  <figure>
                    <?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
                  </figure>
                <?php endif ?>
                
                <div class="text">

                  <?php if ($item['pre_title']): ?>
                    <p><?= $item['pre_title'] ?></p>
                  <?php endif ?>

                  <?php if ($item['title']): ?>
                    <h3><?= $item['title'] ?></h3>
                  <?php endif ?>

                  <?php if ($item['link']): ?>
                    <div class="link">
                      <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= html_entity_decode($item['link']['title']) ?> <img src="<?= get_stylesheet_directory_uri() ?>/img/arrow_up_gold.svg" alt=""></a>
                    </div>
                  <?php endif ?>

                </div>
              </div>
            <?php endforeach ?>
            
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif ?>

<?php endif; ?>