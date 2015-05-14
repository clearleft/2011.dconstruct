<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Frank Chimero';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>Oh God, It&#8217;s Full of&#160;Stars</h1>
                  <h2>Frank Chimero</h2>
                </hgroup>
                <p>The relationship between digital and physical products is larger than if it exists on a hard drive or a shelf. It&#8217;s the tension between access and ownership, searching and finding, sharing and collecting. It&#8217;s a dance between the visible and the invisible, and what happens when we&#8217;re forced to remember versus when we are allowed to forget. How does this affect us—not just as makers, but as consumers of these products? Does collecting things matter if we don&#8217;t revisit them? We may download, bookmark, tag, organize, and star, but what then?</p>
                <p>A digital Zen master would say that if everything is starred, nothing is. We&#8217;ve optimized the system for getting things in, but how do we get something good out? How can we make meaningful connections between all of this stuff, and make constellations out of all these stars?</p>
                <object type="application/x-shockwave-flash" data="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/05-chimero.mp3" width="290" height="24"><param name="movie" value="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/05-chimero.mp3" /><param name="wmode" value="transparent" /><a href="http://huffduffer.com/dConstruct/52239">Oh God, It’s Full of Stars on Huffduffer</a></object>
                <ul>
                    <li><a href="http://dconstruct.s3.amazonaws.com/2011/podcast/05-chimero.mp3">Download the audio</a></li>
                    <li><a href="http://huffduffer.com/add/52239">Huffduff it</a></li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/frank-chimero@2x.jpg" alt="">
                <div class="bio">
                  <p><strong class="fn">Frank Chimero</strong> is a graphic designer and illustrator. He makes pictures about words and words about pictures. His fascination with the creative process, curiosity, and visual experience informs all of his work. Each piece is part of an exploration in finding wit, surprise, and joy in the world around us, then, trying to document those things with all deliberate speed.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://frankchimero.com/">frankchimero.com</a></li>
                    <li><a class="twitter" href="http://twitter.com/fchimero">@fchimero</a></li>
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
              <li class="first"><a href="/conference/kelly-goto" rel="prev">Previous Session <span>Kelly Goto</span></a></li>
              <li><a href="/conference/bryan-stephanie-rieger" rel="next">Next Session <span>Bryan Rieger &amp; Stephanie Rieger</span></a></li>
            </ol>
          </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>