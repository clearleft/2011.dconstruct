<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Craig Mod';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                <h1>What Is the Shape of the Future&#160;Book?</h1>
                <h2>Craig Mod</h2>
                </hgroup>
                <p>We will always debate:<br />the quality of the paper, the pixel density of the display;<br />
                the cloth used on covers, the interface for highlighting;<br />
                location by page, location by paragraph.</p>
                <p>This is not what matters. Surface is secondary.</p>
                <p>What are the core systems comprising the future book? What are the tools that need to be built?</p>
                <p>As designers we will need to provide the scaffolding for these systems. The interfaces for these tools. Not just as surface, but holistically&mdash;understanding the shifting of emotional space, the import of the artifact, the evocation of a souvenir, digitally.</p>
                <p>How will we surface the myriad data just below the words of digital books in organic, clean and deliberately designed ways? How will we shape the future book?</p>
                <script>
                (function() {
                    document.write('<iframe style="border:none; padding:0; margin:0;" id="slides" src="http://speakerdeck.com/embed/4e675719dc25d00001005c67?size=preview"></iframe>');
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
              <object type="application/x-shockwave-flash" data="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/04-mod.mp3" width="290" height="24"><param name="movie" value="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/04-mod.mp3" /><param name="wmode" value="transparent" /><a href="http://huffduffer.com/dConstruct/52238">What Is the Shape of the Future Book? on Huffduffer</a></object>
              <ul>
                  <li><a href="http://dconstruct.s3.amazonaws.com/2011/podcast/04-mod.mp3">Download the audio</a></li>
                  <li><a href="http://huffduffer.com/add/52238">Huffduff it</a></li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/craig-mod@2x.jpg" alt="">
                <div class="bio">
                  <p><strong class="fn">Craig Mod</strong> is a writer, designer and publisher concerned with the future of books, publishing, and storytelling. He lives in a tiny Bay Area village in the California full of dreamers, endless yogurt, and trees that let loose money when shaken just so. His writing appears mainly on his website, but has also appeared in the <cite>New Scientist</cite>, <cite>The New York Times</cite>, and <cite>A List Apart</cite>. He works as a designer for <a href="http://flipboard.com/">Flipboard</a>.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://craigmod.com/">craigmod.com</a></li>
                    <li><a class="twitter" href="http://twitter.com/craigmod">@craigmod</a></li>
                  </ul>
                </div><!--/.bios -->
              </div><!-- /.gutter -->
            </section><!-- /.secondary -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Conference</h1>
            <nav class="conference-nav">
            <?php include_once $_DOCUMENT['include'].'conference-nav.php';?>
            <ol class="paging">
              <li><a href="/conference/kars-alfrink" rel="prev">Previous Session <span>Kars Alfrink</span></a></li>
              <li><a href="/conference/dan-hon" rel="next">Next Session <span>Dan Hon</span></a></li>
            </ol>
          </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>