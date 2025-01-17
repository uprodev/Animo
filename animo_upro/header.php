<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>  
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="top-line">
      <div class="container">
        <div class="row">
          <div class="content d-flex justify-content-between align-items-center">
            <div class="logo-wrap">
              <a href="<?= get_home_url() ?>">
                <?= wp_get_attachment_image(get_field('logo_h', 'option')['ID'], 'full') ?>
                <?= wp_get_attachment_image(get_field('logo_sticky_h', 'option')['ID'], 'full') ?>
              </a>
            </div>
            <nav class="top-menu d-flex justify-content-between align-items-center">

              <?php wp_nav_menu( array(
                'theme_location'  => 'header',
                'container'       => '',
                'items_wrap'      => '<ul class="d-lg-flex justify-content-between align-items-center">%3$s</ul>'
              )); ?>

            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="menu-responsive" id="menu-responsive" style="display: none">
    <div class="wrap">
      <div class="logo-wrap">
        <a href="<?= get_home_url() ?>">
          <?= wp_get_attachment_image(get_field('logo_sticky_h', 'option')['ID'], 'full') ?>
        </a>
      </div>
      <nav class="mob-menu-wrap">

        <?php wp_nav_menu( array(
          'theme_location'  => 'header',
          'container'       => '',
          'items_wrap'      => '<ul class="mob-menu p-0">%3$s</ul>'
        )); ?>

      </nav>
    </div>
  </div>

  <div class="menu-bar">
    <div class="wrap-btn">
      <a href="#" class="open-menu">
        <span class="wrap">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <b><?php _e('menu', 'Animo') ?></b>
      </a>
    </div>

    <?php if ($field = get_field('link_1_m', 'option')): ?>
      <div class="btn-wrap">
        <a href="<?= $field['url'] ?>" class="btn-default"<?php if($field['target']) echo ' target="_blank"' ?>><?= html_entity_decode($field['title']) ?></a>
      </div>
    <?php endif ?>

    <?php if ($field = get_field('link_2_m', 'option')): ?>
      <div class="btn-tel">
        <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>>

          <?php if ($icon = get_field('link_2_icon_m', 'option')): ?>
            <?php if (pathinfo($icon['url'])['extension'] == 'svg'): ?>
              <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
            <?php else: ?>
              <?= wp_get_attachment_image($icon['ID'], 'full') ?>
            <?php endif ?>
          <?php endif ?>
          
          <b><?= html_entity_decode($field['title']) ?></b>
        </a>
      </div>
    <?php endif ?>

  </div>

  <main>