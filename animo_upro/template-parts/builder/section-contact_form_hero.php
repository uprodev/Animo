<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="contact-banner<?php if($background == 'White') echo ' bg-white' ?>"<?php if($id) echo ' id="' . $id . '"' ?><?php if($background == 'Color' && $background_color) echo ' style="background-color:' . $background_color . ';"' ?>>
    <div class="bg">
      <img src="<?= get_stylesheet_directory_uri() ?>/img/after-6.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="content d-flex justify-content-between flex-wrap ">
          <div class="text">
            
            <?= $title ?>

            <?php if ($business_name): ?>
              <p><?= $business_name ?></p>
            <?php endif ?>
            
            <ul>

              <?php if ($field = get_field('phone_c', 'option')): ?>
                <li>
                  <span>T.</span>
                  <span><a href="tel:+<?= preg_replace('/[^0-9]/', '', $field) ?>"><?= $field ?></a></span>
                </li>
              <?php endif ?>
              
              <?php if ($field = get_field('email_c', 'option')): ?>
                <li>
                  <span>E.</span>
                  <span><a href="mailto:<?= $field ?>"><?= $field ?></a></span>
                </li>
              <?php endif ?>
              
              <?php if ($field = get_field('address_c', 'option')): ?>
                <li>
                  <span>A.</span>
                  <?= $field ?>
                </li>
              <?php endif ?>
              
            </ul>

            <?php if ($button): ?>
              <div class="btn-wrap ">
                <a href="<?= $button['url'] ?>" class="btn-default"<?php if($button['target']) echo ' target="_blank"' ?>><span><?= html_entity_decode($button['title']) ?></span></a>
              </div>
            <?php endif ?>

          </div>

          <?php if ($contact_form): ?>
            <div class="wrap-form">
              <?= do_shortcode('[contact-form-7 id="' . $contact_form . '" html_class="footer-form"]') ?>
            </div>
          <?php endif ?>

        </div>
      </div>
    </div>

    <?php if ($scroll_button): ?>
      <div class="btn-block">
        <a href="<?= $scroll_button['url'] ?>" class="scroll d-flex align-items-center"<?php if($scroll_button['target']) echo ' target="_blank"' ?>><?= html_entity_decode($scroll_button['title']) ?> <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-6.svg" alt=""></a>
      </div>
    <?php endif ?>

  </section>

  <?php endif; ?>