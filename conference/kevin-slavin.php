<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Kevin Slavin';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>Reality is Plenty</h1>
                  <h2>Kevin Slavin</h2>
                </hgroup>
                <p>Lately, Augmented Reality (AR) has come to stand for the highest and deepest form of synthesis between the digital and physical worlds. Slavin will outline an argument for rethinking what really augments reality and what the benefits are, as well as the costs.</p>
                <p>Rather than considering AR as a technology, we will consider the goals we have for it, and how those are best addressed. Along the way, we&rsquo;ll look at the history and future of seeing, with a series of stories, most of which are mostly true.</p>
                <p>AR may be where all this goes. But how it gets there, and where there is, is up for debate. This is intended to serve to start or end that debate, or at a minimum, to bring the conference to a close by pointing at the future, perhaps in the wrong direction.</p>
                <object type="application/x-shockwave-flash" data="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/09-slavin.mp3" width="290" height="24"><param name="movie" value="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/09-slavin.mp3" /><param name="wmode" value="transparent" /><a href="http://huffduffer.com/dConstruct/52243">Reality is Plenty on Huffduffer</a></object>
                <ul>
                    <li><a href="http://dconstruct.s3.amazonaws.com/2011/podcast/09-slavin.mp3">Download the audio</a></li>
                    <li><a href="http://huffduffer.com/add/52243">Huffduff it</a></li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/kevin-slavin@2x.jpg" alt="">
                <div class="bio">
                  <p><strong class="fn">Kevin Slavin</strong> is the <span class="title">Managing Director and co-Founder</span> of <a href="http://areacodeinc.com/" class="org">area/code</a>. He has worked in corporate communications for technology-based clients for 13 years, including IBM, Compaq, Dell, TiVo, Time/Warner Cable, Microsoft, Wild Tangent and Qwest Wireless.</p>
                  <p>Slavin has lectured at the Cooper Union for the Advancement of Science and Art, the American Institute of Graphic Arts, and the Parsons School of Design, and has written for various publications on games and game culture. His work has received honors from the AIGA, the One Show, and the Art Directors Club, and he has exhibited internationally, including the Frankfurt Museum f&uuml;r Moderne Kunst.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://areacodeinc.com">areacodeinc.com</a></li>
                    <li><a class="twitter" href="http://twitter.com/slavin_fpo">@slavin_fpo</a></li>
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
              <li><a href="/conference/bryan-stephanie-rieger" rel="prev">Previous Session <span>Bryan Rieger &amp; Stephanie Rieger</span></a></li>
              <li><a href="/conference/matthew-sheret" rel="next">Next Session <span>Matthew Sheret</span></a></li>
            </ol>
          </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->
          
        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>