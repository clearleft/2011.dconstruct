<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

  <?php
    if (gmdate("YmdH") >= 2011070509 ) {
      $registration_open = true;
    }
    $registration_open = false;
    
    ?>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php if(!empty($_DOCUMENT['title'])): echo $_DOCUMENT['title'].' &mdash; '; endif; ?>dConstruct 2011</title>
  <meta name="keywords" content="User Experience Design, Conference, Event, Brighton, Clearleft, Design, Brighton Digital Festival">
  <meta name="description" content="dConstruct 2011 brings together leading thinkers from the fields of interaction design, mobile design and ubiquitous computing to explore how we can bridge the gap between physical and digital product design.">

  <link rel="icon" href="http://media01.dconstruct.org/2011-0003/img/favicon.ico" type="image/x-icon">

  <link rel="profile" href="http://microformats.org/profile/hcalendar">
  <link rel="profile" href="http://microformats.org/profile/hcard">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <script>
    (function() {
      document.getElementsByTagName("html")[0].className += " hasJS";
      var wf = document.createElement("link");
      wf.href = "http://f.fontdeck.com/s/css/BjeHoyivtuBzc1SozhIvEFH+lK8/<?php echo $_SERVER["HTTP_HOST"] ?>/7047.css";
      wf.rel = "stylesheet";
      var s = document.getElementsByTagName("head")[0];
      s.appendChild(wf);
    })();
  </script>

  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/layout.css" media="all and (min-width: 45em)">
  <?php if (strpos($_SERVER["REQUEST_URI"], "location")) { ?>
  <link rel="stylesheet" href="http://media01.dconstruct.org/2011-0003/loc/leaflet-0002.css">
  <?php } ?>

  <link rel="alternate" type="application/rss+xml" title="Podcast RSS" href="http://huffduffer.com/dConstruct/tags/dconstruct2011/rss">

</head>

<body <?php if(!empty($_DOCUMENT['class'])): echo 'class="'.$_DOCUMENT['class'].'"'; endif; ?>>
  <div class="wrap">

    <div class="container">
      <header class="mast vevent">
        <h1><a href="/" rel="home"><img src="http://media01.dconstruct.org/2011-0003/img/logo-0002.svgz" alt="dConstruct 2011" class="summary"></a></h1>
        <div class="date">
          <p><time datetime="2011-09-02" class="dtstart" title="2011-09-02">2nd September &mdash; </time><span class="location">Brighton, England</span></p>
        </div><!-- /.date -->
        
        <?php include_once $_DOCUMENT['include'].'main-nav.php'; ?>
        
      </header>