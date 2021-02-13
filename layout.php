<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ACCESS <?= $title; ?></title>
    <meta name="description"      content="">
    <meta name="keywords"         content="ACCESS, Course Organization, Assistive Course Creation and Evaluation Student Submission">
    <meta name="author"           content="ACCESS Team">
    <meta name="content-language" content="en">
    <meta name="viewport"         content="width=device-width, initial-scale=1.0, user-scalable=no">

    <link href="/public/img/favicon.png"                  rel="shortcut icon">
    <link href="/public/css/bootstrap.min.css"            rel="stylesheet">
    <link href="/public/css/atom-one-dark.css"            rel="stylesheet">
    <link href="/public/css/source_sans_pro-400_700.css"  rel="stylesheet">
    <link href="/public/css/font-awesome.min.css"         rel="stylesheet">
    <link href="/public/css/screen.css"                   rel="stylesheet">

    <script src="/public/js/feather.min.js"></script>
  </head>
  <body>
    <header>
      <h1 style="display: none"><?= $title; ?></h1>
      <div class="container">
        <div class="h-flex">
          <div class="burger-wrapper">
            <div class="hamburger">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </div>
          <a class="logo" href="/">
          <img src="/public/images/gallery/logo_access.png">
          </a>
          <nav class="main-nav d-none d-sm-block">
            <ul>
              <li><a href="/"                                                   >Home</a></li>
              <li><a href="https://mp-access.gitbook.io/access" target="_blank" >Wiki</a></li>
              <li><a href="https://github.com/mp-access"        target="_blank" >GitHub</a></li>
              <li><a href="team"                                                >Team</a></li>
              <li><a href="getting_started"                                     >Get Started</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div id="slide_nav">
      <div class="side-nav-content">
        <nav class="slide-nav">
          <ul>
            <li><a href="/"                                                   >Home</a></li>
            <li><a href="https://mp-access.gitbook.io/access" target="_blank" >Wiki</a></li>
            <li><a href="https://github.com/mp-access"        target="_blank" >GitHub</a></li>
            <li><a href="team"                                                >Team</a></li>
            <li><a href="getting_started"                                     >Get Started</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div id="slide_content">
      <main class="content">

        <?= $page; ?>

      </main>
      <footer class="clearfix">
        <div class="container">
          <div class="float-right">
            <?= date('Y'); ?> © ACCESS
          </div>
        </div>
      </footer>
    </div>

    <?php // Variablen ?>
    <script>
      const URL_PUBLIC = '<?php echo URL_PUBLIC; ?>';
    </script>

    <?php // JS-Framework ?>
    <script src="/public/js/jquery-3.3.1.min.js"    type="text/javascript"></script>
    <script src="/public/js/popper.min.js"          type="text/javascript"></script>
    <script src="/public/js/bootstrap.min.js"       type="text/javascript"></script>
    <script src="/public/js/fontawesome-all.min.js" type="text/javascript"></script>
    <script src="/public/js/file-explore.js"        type="text/javascript"></script>
    <script src="/public/js/highlight.pack.js"      type="text/javascript"></script>

    <?php // Feather Icons ?>
    <script>feather.replace({ 'stroke-width': 1 })</script>
    
    <?php // Main JS ?>
    <script src="/public/js/main.js" type="text/javascript"></script>
  </body>
</html>