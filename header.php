<!DOCTYPE html>

<!-- Welcome visitor! Please let me know if you have any suggestions on how to make my code
     prettier! And if you like anything you see here, feel free to use in your website, just
     make sure to cite me! Collaboration is the essence of computer science and technology!
                                                              Lucas Freitas, me@lfreitas.com
-->

<html>
  <head>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <?php if (isset($title)): ?>
      <title>WorldMUN: <?php echo(htmlspecialchars($title)) ?></title>
    <?php else: ?>
      <title>Harvard World Model United Nations</title>
    <?php endif ?>

    <!-- Font from Google, Bootstrap, Font Awesome, and personal CSS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,100,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href='assets/css/styles.css'/>
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
 
  </head>
  
  <body>
    <!-- Container starts -->
    <div class="main-container">
      <!-- Header starts -->
      <div class="header">
        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container">       
              <div class="contact-left"><i class="icon-map-marker"></i>&nbsp;&nbsp;59 Shepard St. Box 205 Cambridge, MA 02138 &nbsp;&nbsp;&nbsp;<i class="icon-phone"></i>&nbsp;+1 (617) 398-0772&nbsp;&nbsp;&nbsp;<i class="icon-envelope"></i>&nbsp;&nbsp;<a class="contact-top" href="mailto:info@worldmun.org">info@harvardmun.org</a></div>       
              <div class="right-bar nav-collapse collapse">
                <div class="contact-right"><a class="button-top" target="_blank" href="https://twitter.com/WorldModelUN"><i class="icon-twitter button"></i></a>&nbsp;&nbsp;<a class="button-top" target="_blank" href="https://www.facebook.com/worldmodelun"><i class="icon-facebook button"></i></a>&nbsp;&nbsp;<a class="button-top" target="_blank" href="http://www.youtube.com/user/WorldModelUN?feature=watch"><i class="icon-youtube-sign button"></i></a>&nbsp;&nbsp;<a class="button-top" target="_blank" href="media.php"><i class="icon-camera button"></i></a></div>
                <!--<form class="navbar-search pull-left search-top" action="">
                  <input type="text" class="search-query">&nbsp;
                  <i class="icon-search"></i>
                </form>-->
              </div>
            </div>
          </div>
        </div>
