<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

    <title><?= ecco($page->isHomePage(), '', excerpt($page->title(),50) . ' &#183; ') . html($site->title()) ?></title>

    <meta name="description" content="<?= $site->description() ?>">
    <? if($page->isVisible() == false): ?>
    <meta name="robots" content="noindex">
    <? endif ?>

    <link rel="stylesheet" href="<?= url('assets/styles/screen.css') ?>">
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?= url('assets/styles/screen-no-media-queries.css') ?>">
    <![endif]-->
    <link rel="shortcut icon" href="<?= url('assets/images/favicon.ico') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= url('assets/images/apple-touch-icon.png') ?>">

    <!-- <script src="<?= url('assets/scripts/.js') ?>"></script> -->
    <? snippet('typekit') ?>
    <? snippet('segment-io') ?>

  </head>

  <body class="<?= $page->template() ?>">


    <header class="site-header" role="banner">
      <div class="container">

        <h1 class="site-title"><a href="<?= url() ?>"><?= $site->title() ?></a></h1>

      </div>
    </header>
