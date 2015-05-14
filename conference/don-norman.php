<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Don Norman';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>Emotional Design for the World of Objects</h1>
                  <h2>Don Norman</h2>
                </hgroup>
                <p>Welcome to the world of atoms. Remember when the mantra was that bits were more important than atoms? That we could dispense with physical things because information was all that mattered? Well, that was nonsense then and it is nonsense now.</p>
                <p>The human body is part of the physical world. It savors touch and feeling, movement and action. How else to explain the popularity of physical devices, of games that require gestures, and full-body movement?</p>
                <p>Want to develop for this new world? There are new rules for interacting with the world, new rules for the developers of systems. But the new rules still follow the old principles. Let&rsquo;s not throw away the old lessons of interaction. In fact, these become even more important than ever before. And yes, there are some new things to learn as well, new technologies to master, new words to learn.</p>
                <p>Today the need is for complex, rich, emotionally satisfying things. It is no longer just about function and service. Those are still important, but they are taken for granted. Today we must add convenience and comfort, fun and excitement, pleasure. We needed to develop applications that both delivered real value but also was high in emotional value, experience, and engagement.</p>
                <object type="application/x-shockwave-flash" data="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/01-norman.mp3" width="290" height="24"><param name="movie" value="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/01-norman.mp3" /><param name="wmode" value="transparent" /><a href="http://huffduffer.com/dConstruct/52235">Emotional Design for the World of Objects on Huffduffer</a></object>
                <ul>
                    <li><a href="http://dconstruct.s3.amazonaws.com/2011/podcast/01-norman.mp3">Download the audio</a></li>
                    <li><a href="http://huffduffer.com/add/52235">Huffduff it</a></li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/don-norman@2x.jpg" alt="">
                <div class="bio">
                  <p><abbr title="Doctor">Dr.</abbr> <strong class="fn">Don Norman</strong> is the author or co-author of fourteen books, with translations into sixteen languages, including: The <cite><a href="http://www.amazon.co.uk/Design-Everyday-Things-Donald-Norman/dp/0385267746">Design of Everyday Things</a></cite>, <cite><a href="http://www.amazon.co.uk/Things-That-Make-Smart-Attributes/dp/0201626950">Things That Make Us Smart</a></cite>, and <cite><a href="http://www.amazon.co.uk/Invisible-Computer-Products-Information-Appliances/dp/0262640414">The Invisible Computer</a></cite>. Business Week has called this <q>the bible of the &#8216;post PC&#8217; thinking</q>. His latest book, <cite><a href="http://www.amazon.co.uk/Emotional-Design-Love-Everyday-Things/dp/0465051359">Emotional Design: Why we love (or hate) everyday things</a></cite> marks the transition from usability to aesthetics, but with the emphasis on a well-rounded, cohesive product that looks good, works well, and gives pride to the owner. <q>The well-rounded product</q>, says Don, <q>will enhance the heart as well as the mind, being a joy to behold, to use, and to own</q>.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://jnd.org">jnd.org</a></li>
                    <li><a class="twitter" href="http://twitter.com/jnd1er">@jnd1er</a></li>
                  </ul>
                </bios>
              </div><!-- /.gutter -->
            </section><!-- /.secondary -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Conference</h1>
            <nav class="conference-nav">
            <?php include_once $_DOCUMENT['include'].'conference-nav.php';?>
            <ol class="paging">
              <li class="last"><a href="/conference/kelly-goto" rel="next">Next Session <span>Kelly Goto</span></a></li>
            </ol>
          </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>