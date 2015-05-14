<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Matthew Sheret';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>Pocket Scale</h1>
                  <h2>Matthew Sheret</h2>
                </hgroup>
                <p>I punch in a keycode and enter the office. Three steps through the door I swipe my travelcard against an old wooden box, which starts spitting out a radio station based on forty million people&#8217;s answer to the question &#8216;What songs would a Joy Division fan like?&#8217; The sexyfuture arrived yesterday, and it colonised my pockets.</p>
                <p>Even on the days you leave your phone at home, you carry enough hacked objects to unlock space and time, provided you find the right door. What should we be thinking about as we bring our products to life? What are we strapping to our keyrings? And what does all of this mean for a scale we&#8217;ve been familiar with for centuries?</p>
                <p>Matthew will empty his pockets live at dConstruct to find out, revealing the five things he&#8217;s carrying around with him in Brighton and why.</p>
                <script>
                  (function() {
                      document.write('<iframe style="border:none; padding:0; margin:0;" id="slides" src="http://speakerdeck.com/embed/4e67589adc25d00001005d66?size=preview"></iframe>');
                      function updateSize() {
                          var slides = document.getElementById('slides');               
                          slides.style.width = '100%';
                          slides.style.height = '400px';
                          var width = slides.offsetWidth;
                          var height = width / 1.3333333333333333 + 65;
                          slides.style.width = width + 'px';
                          slides.style.height = height + 'px';
                      }
                      updateSize();
                      window.onresize = function() {
                          updateSize();
                      }
                  })();
                </script>
                <object type="application/x-shockwave-flash" data="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/08-sheret.mp3" width="290" height="24"><param name="movie" value="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/08-sheret.mp3" /><param name="wmode" value="transparent" /><a href="http://huffduffer.com/dConstruct/52242">Pocket Scale on Huffduffer</a></object>
                <ul>
                    <li><a href="http://dconstruct.s3.amazonaws.com/2011/podcast/08-sheret.mp3">Download the audio</a></li>
                    <li><a href="http://huffduffer.com/add/52242">Huffduff it</a></li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/matthew-sheret@2x.jpg" alt="">
                <div class="bio">
                  <p>Writer and editor <strong class="fn">Matthew Sheret</strong> is <span class="org">Last.fm</span>&#8217;s <span class="title">Data Griot</span>, using everything from tweets to radio scripts to tell stories about Last.fm&#8217;s numbers.</p>
                  <p>He has worked for the likes of Newspaper Club, 4iP, Thomson Reuters and Dentsu London and in 2008 co-founded We Are Words + Pictures, an ad-hoc team of comic book creators who promote the work of up-and-coming creators.</p>
                  <p>In his spare time he edits and publishes the anthology Paper Science and plays with Lego.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://matthewsheret.com">matthewsheret.com</a></li>
                    <li><a class="twitter" href="http://twitter.com/mattsheret">@mattsheret</a></li>
                  </ul>
                </div>
              </div><!-- /.gutter -->
            </section><!-- /.secondary -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Conference</h1>
            <nav class="conference-nav">
            <?php include_once $_DOCUMENT['include'].'conference-nav.php';?>
            <ol class="paging">
              <li><a href="/conference/kevin-slavin" rel="prev">Previous Session <span>Kevin Slavin</span></a></li>
              <li><a href="/conference/kars-alfrink" rel="next">Next Session <span>Kars Alfrink</span></a></li>
            </ol>
          </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>