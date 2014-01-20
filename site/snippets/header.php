<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= ecco($page->isHomePage(), '', excerpt($page->title(),50) . ' &#183; ') . h($site->title()) ?></title>

    <meta name="description" content="<?= $site->description() ?>">
    <? if($page->isVisible() == false): ?>
    <meta name="robots" content="noindex">
    <? endif ?>

    <link rel="stylesheet" href="<?= u('assets/styles/screen.css') ?>">
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="screen-no-media-queries.css">
    <![endif]-->
    <link rel="shortcut icon" href="<?= u('assets/images/favicon.ico') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= u('assets/images/apple-touch-icon.png') ?>">

    <!-- <script src="<?= u('assets/scripts/.js') ?>"></script> -->
    <? snippet('typekit') ?>
    <? snippet('segment-io') ?>

  </head>

  <body class="<?= $page->template() ?>">


    <header class="site-header" role="banner">
      <div class="container">

        <h1 class="site-title"><a href="<?= url() ?>"><?= $site->title() ?></a></h1>

      </div>
    </header>