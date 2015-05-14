<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Dan Hon';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>The Full Stack of Entertainment: Storytelling, Play and&#160;Code</h1>
                  <h2>Dan Hon</h2>
                </hgroup>
                <p>Forget transmedia. Forget alternate and augmented realities. Forget multimedia magazines, tablets, phones and puzzling QR codes. Our challenge lies in figuring out the full-stack of entertainment, designed from the bottom right to the very top: for phones, physical objects&#8212;part of the Internet of things or otherwise&#8212;tablets and conventional computing devices, where art, code and design mesh together perfectly with directorial vision.</p>
                <p>These teams producing our next generation of entertainment are right at the heart of Steve Jobs&#8217; placing of Apple at the intersection of liberal arts and technology. Where did they come from, how are they evolving entertainment and how are they making storytelling, play, code and technology sing?</p>
                <script>
                  (function() {
                      document.write('<iframe style="border:none; padding:0; margin:0;" id="slides" src="http://www.slideshare.net/slideshow/embed_code/9111030?rel=0"></iframe>');
                      function updateSize() {
                          var slides = document.getElementById('slides');               
                          slides.style.width = '100%';
                          slides.style.height = '400px';
                          var width = slides.offsetWidth;
                          var height = width / 1.3333333333333333 + 36;
                          slides.style.width = width + 'px';
                          slides.style.height = height + 'px';
                      }
                      updateSize();
                      window.onresize = function() {
                          updateSize();
                      }
                  })();
                </script>
                <object type="application/x-shockwave-flash" data="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/06-hon.mp3" width="290" height="24"><param name="movie" value="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/06-hon.mp3" /><param name="wmode" value="transparent" /><a href="http://huffduffer.com/dConstruct/52240">The Full Stack of Entertainment: Storytelling, Play and Code on Huffduffer</a></object>
                <ul>
                    <li><a href="http://dconstruct.s3.amazonaws.com/2011/podcast/06-hon.mp3">Download the audio</a></li>
                    <li><a href="http://huffduffer.com/add/52240">Huffduff it</a></li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/dan-hon@2x.jpg" alt="">
                <div class="bio">
                  <p><strong class="fn">Dan Hon</strong> is a <span class="title">Creative Director</span> at <span class="org">Wieden + Kennedy</span> in <span class="location">Portland, <abbr title="Oregon">OR</abbr></span>, where he works on the intersection between storytelling, games, play and code. A former lawyer, he&#8217;s worked for Mind Candy helping to build their first product, Perplex City, and co-founded Six to Start, an award-winning entertainment production company in 2007. He&#8217;s most known for being passionately for, and against, <abbr title="Alternate reality game">ARG</abbr>s. He does not play World of Warcraft anymore.</p>
                  <p><em>Photo by <a href="http://www.flickr.com/photos/matlocktest/3724219292/">Matt Locke</a></em>.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://danhon.com">danhon.com</a></li>
                    <li><a class="twitter" href="http://twitter.com/hondanhon">@hondanhon</a></li>
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
              <li class="first"><a href="/conference/craig-mod" rel="prev">Previous Session <span>Craig Mod</span></a></li>
            </ol>
          </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>