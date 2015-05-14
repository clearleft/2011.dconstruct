<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Jeremy Keith';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>Responsive Enhancment</h1>
                  <h2>Jeremy Keith</h2>
                </hgroup>
                <p>TBA</p>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="/img/speakers/jeremy-keith@2x" alt="">
                <div class="bio">
                  <p><strong class="fn">Jeremy Keith</strong> is an Irish <span class="title">web developer</span> living in Brighton, England where he works with the web consultancy firm <span class="org">Clearleft</span>. He has written two books, <a href="http://domscripting.com/book/">DOM Scripting</a> and <a href="http://bulletproofajax.com/">Bulletproof Ajax</a>, but what he really wants to do is direct. His latest project is <a href="http://huffduffer.com/">Huffduffer</a>, a service for creating podcasts of found sounds. When he&#8217;s not making websites, Jeremy plays bouzouki in the band <a href="http://saltercane.com/">Salter Cane</a>. His loony bun is fine benny lava.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://adactio.com/">adactio.com</a></li>
                    <li><a class="twitter" href="http://twitter.com/adactio">@adactio</a></li>
                  </ul>
                </div>
              </div><!-- /.gutter -->
            </section><!-- /.secondary -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Conference</h1>
            <?php include_once $_DOCUMENT['include'].'conference-nav.php'; ?>
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>