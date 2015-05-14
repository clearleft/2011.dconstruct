<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Kelly Goto';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>Beyond Usability: Mapping Emotion to&#160;Experience</h1>
                  <h2>Kelly Goto</h2>
                </hgroup>
                  <p>Addiction or devotion? The complexity of our relationships between connected experiences, devices and people is increasing. Stanley Kubrick once said a film &#8220;should be a progression of moods and feelings. The theme, what&#8219;s behind the emotion, the meaning, all that comes later&#8221;.
                  <p>Design ethnographer Kelly Goto presents underlying emotional indicators that reveal surprising attachments to brands, products, services and devices. Gain insight on designing user experiences that map to people&#8219;s real needs and desires.</p>
                <object type="application/x-shockwave-flash" data="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/02-goto.mp3" width="290" height="24"><param name="movie" value="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/02-goto.mp3" /><param name="wmode" value="transparent" /><a href="http://huffduffer.com/dConstruct/52236">Beyond Usability: Mapping Emotion to Experience on Huffduffer</a></object>
                <ul>
                    <li><a href="http://dconstruct.s3.amazonaws.com/2011/podcast/02-goto.mp3">Download the audio</a></li>
                    <li><a href="http://huffduffer.com/add/52235">Huffduff it</a></li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/kelly-goto@2x.jpg" alt="">
                <div class="bio">
                  <p>As an evangelist for &#8216;design ethnography&#8217;, <strong class="fn">Kelly Goto</strong> is dedicated to understanding how real people integrate products and services into their daily lives. Goto is <span class="title">Principal</span> of <a class="org" href="http://gotomedia.com/">gotomedia</a>, <abbr title="Limited liability company">LLC</abbr>, a global leader in research-driven, people-friendly interface design for web, mobile and product solutions for clients including Seiko Epson Japan, Adobe, NetIQ, WebEx and CNET. Her book, Web Redesign 2.0: Workflow That Works, is a standard for user-centered design principles. Goto is also the editor of <a href="http://gotomobile.com/">gotomobile.com</a>, a leading online publication on mobile user experience and serves on the national board of the AIGA Center for Brand Experience.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://gotomedia.com/">gotomedia.com</a></li>
                    <li><a class="twitter" href="http://twitter.com/go2girl">@go2girl</a></li>
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
              <li><a href="/conference/don-norman" rel="prev">Previous Session <span>Don Norman</span></a></li>
              <li><a href="/conference/frank-chimero" rel="next">Next Session <span>Frank Chimero</span></a></li>
            </ol>
          </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->
        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>