<? snippet('header') ?>

  <main class="page-main" role="main">
    <div class="container">

      <h1><?= $page->title() ?></h1>
      <?= kirbytext($page->text()) ?>

    </div>
  </main>

<? snippet('footer') ?>