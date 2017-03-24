<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>root.v1b.es</title>
    <link rel="stylesheet" href="css/app.css" />
    <!-- font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- font-->
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//pivik.v1b.es/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Piwik Code -->

</head>

<body>
    <h1>v1b.es</h1>
    <!-- hover Ordner start -->
        <section class="content">
            <div class="grid grid--effect-altair">
                <a href="#" class="grid__item grid__item--c1">
                    <div class="stack">
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__figure">
                            <img class="stack__img" src="img/1.png" alt="Image"/>
                        </div>
                    </div>
                    <div class="grid__item-caption">
                        <h3 class="grid__item-title">our websites</h3>
                    </div>
                </a>
                <a href="#" class="grid__item grid__item--c2">
                    <div class="stack">
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__figure">
                            <img class="stack__img" src="img/2.png" alt="Image"/>
                        </div>
                    </div>
                    <div class="grid__item-caption">
                        <h3 class="grid__item-title">subdomains</h3>
                    </div>
                </a>
                <a href="#" class="grid__item grid__item--c3">
                    <div class="stack">
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__figure">
                            <img class="stack__img" src="img/3.png" alt="Image"/>
                        </div>
                    </div>
                    <div class="grid__item-caption">
                        <h3 class="grid__item-title">communication</h3>
                    </div>
                </a>
            </div>
        </section>
    <!-- hover Ordner end -->

    <!-- Modal button -->
        <div class="wrapper">
            <button id="modBtn" class="modal-btn">Open Modal</button>
        </div>

    <!-- Modal -->
        <div id="modal" class="modal">
            <!-- Modal Content -->
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="header-title">Überschrift</h3>
                    <!-- braucht man eig nicht -->
                    <!--<div class="close fa fa-close"></div>-->
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                      <?php
                      if (is_dir("../sub")) {
                        if ($dh = opendir("../sub")) {
                            while (($file = readdir($dh)) !== false) {
                              if ($file !== ".") {
                                if ($file !== "..") {
                                  if ($file !== ".DS_Store") {
                                      echo '<a href="http://'.$file.'"><h3>'.$file.'</h3></a>';
                                  }
                                }
                              }
                            }
                            closedir($dh);
                        }
                      }
                      ?>
                </div>
            </div>
        </div>
    <!-- Modal end -->
</body>

<video poster="" id="bgvid" playsinline autoplay muted loop>
    <source src="vid/fog.webm" type="video/webm">
    <source src="vid/fog.mp4" type="video/mp4">
    <source src="vid/fog.ogv" type="video/ogv">
</video>

<footer>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bgvid.js"></script>
    <script type="text/javascript" src="js/modal.js"></script>
    <!-- Hover ordner scripts -->
    <script type="text/javascript" src="js/anime.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/hover-ordner.js"></script>
    <!-- Hover ordner scripts end -->
</footer>
</html>
