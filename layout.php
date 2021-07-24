<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ACCESS | <?= $title; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="ACCESS, Course Organization, Assistive Course Creation and Evaluation Student Submission">
  <meta name="author" content="ACCESS Team">
  <meta name="content-language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

  <link href="/public/img/favicon.png" rel="shortcut icon">
  <link href="/public/css/bootstrap.min.css" rel="stylesheet">
  <link href="/public/css/atom-one-dark.css" rel="stylesheet">
  <link href="/public/css/source_sans_pro-400_700.css" rel="stylesheet">
  <link href="/public/css/font-awesome.min.css" rel="stylesheet">
  <link href="/public/css/screen.css" rel="stylesheet">

  <script src="/public/js/feather.min.js"></script>
</head>

<body>
  <header>
    <h1 style="display: none"><?= $title; ?></h1>
    <div class="container">
      <div class="h-flex">
        <a class="logo" href="/">
          <img src="/public/images/gallery/logo_access.png">
        </a>
        <div class="burger-wrapper">
          <div class="hamburger">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
          </div>
        </div>
        <nav class="main-nav d-none d-md-block">
          <ul class="d-flex align-items-center">
            <li><a href="/" class="<?= $req == 'home' ? 'active' : ''; ?>">Home</a></li>
            <li><a href="https://mp-access.gitbook.io/access" target="_blank">Wiki<i class="sup" data-feather="arrow-up-right"></i></sup></a></li>
            <li><a href="https://github.com/mp-access" target="_blank">GitHub<i class="sup" data-feather="arrow-up-right"></i></a></li>
            <li><a href="team" class="<?= $req == 'team' ? 'active' : ''; ?>">Team</a></li>
            <li><a href="getting_started" class="<?= $req == 'getting_started' ? 'active' : ''; ?>">Get Started</a></li>
            <li><a href="demo" class="style-btn <?= $req == 'demo' ? 'active' : ''; ?>"><i data-feather="compass"></i> Demo</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div id="slide_nav" class="d-block d-md-none">
    <div class="side-nav-content">
      <nav class="slide-nav">
        <ul>
          <li><a href="/" class="<?= $req == 'home' ? 'active' : ''; ?>">Home</a></li>
          <li><a href="https://mp-access.gitbook.io/access" target="_blank">Wiki</a></li>
          <li><a href="https://github.com/mp-access" target="_blank">GitHub</a></li>
          <li><a href="team" class="<?= $req == 'team' ? 'active' : ''; ?>">Team</a></li>
          <li><a href="getting_started" class="<?= $req == 'getting_started' ? 'active' : ''; ?>">Get Started</a></li>
          <li><a href="demo" class="<?= $req == 'demo' ? 'active' : ''; ?>">Demo</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <div id="slide_content">

    <?php // Page Content 
    ?>
    <main class="content">
      <?= $page; ?>
    </main>

    <footer>
      <div class="container">
        <div class="d-flex justify-content-between">
          <div>
            <div class="mb-1"><small>Sponsored by UZH</small></div>
            <a href="https://www.uzh.ch/de.html" target="_blank">
              <img width="160" src="/public/images/gallery/logo_uzh.png">
            </a>
          </div>
          <div class="d-flex align-items-end"><?= date('Y'); ?> © ACCESS</div>
        </div>
      </div>
    </footer>
  </div>

  <?php // JS-Framework 
  ?>
  <script src="/public/js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="/public/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="/public/js/fontawesome-all.min.js" type="text/javascript"></script>
  <script src="/public/js/file-explore.js" type="text/javascript"></script>
  <script src="/public/js/highlight.pack.js" type="text/javascript"></script>

  <?php // Feather Icons 
  ?>
  <script>
    feather.replace({
      'stroke-width': 1
    })
  </script>

  <?php // Main JS 
  ?>
  <script src="/public/js/main.js" type="text/javascript"></script>
</body>

</html>