<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Kars Alfrink';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>The Transformers</h1>
                  <h2>Kars Alfrink</h2>
                </hgroup>
                <p>There has been a lot of hand-waving and praise for the benefits creative types bring to working class neighbourhoods. Low rents make attempting new things in old buildings a low-risk enterprise. In the process, neighbourhoods benefit from interesting and quirky new shops, cafes, restaurants, etcetera. But the increase in diversity of residents hasn’t always lead to a more enjoyable life for all. Rents go up, and actual meaningful interactions between old and new inhabitants are few and far between. One could say there is a dark side to gentrification, with the recent UK riots serving as an awful example of what social stratification can lead to.</p>
                <p>In this talk, Kars Alfrink &mdash; founder and principal designer at applied pervasive games studio Hubbub &mdash; explores ways we might use games to alleviate some of the problems willful social self-separation can lead to. Kars looks at how people sometimes deliberately choose to live apart, even though they share the same living spaces. He discusses the ways new digital tools and the overlapping media landscape have made society more volatile. But rather than to call for a decrease in their use, Kars argues we need more, but different uses of these new tools. More playful uses.</p>
                <p>The games Kars envisions can be used as meeting places, as ways to bring in new perspectives from the people we play with. Games can also function as testbeds for new ideas, to see what sticks, and perhaps bring the best ideas out into the world. To do this though, not all forms of games will work equally well, and Kars goes into some of the preconditions games for social change need to adhere to, in order to be successful.</p>
                <p>Ultimately, Kars proposes we might be able to create games where we can share the manifold sets of rules we choose to live by, so that we gain deeper insights into the people we share our neighbourhoods with. And by doing so, we might transform society, and make it more resilient.</p>
                <script>
                  (function() {
                      document.write('<iframe style="border:none; padding:0; margin:0;" id="slides" src="http://speakerdeck.com/embed/4e6dc2e636f36b000101282c?size=preview"></iframe>');
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
                <object type="application/x-shockwave-flash" data="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/07-alfrink.mp3" width="290" height="24"><param name="movie" value="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/07-alfrink.mp3" /><param name="wmode" value="transparent" /><a href="http://huffduffer.com/dConstruct/52241">The Transformers on Huffduffer</a></object>
                <ul>
                    <li><a href="http://dconstruct.s3.amazonaws.com/2011/podcast/07-alfrink.mp3">Download the audio</a></li>
                    <li><a href="http://huffduffer.com/add/52241">Huffduff it</a></li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="http://media01.dconstruct.org/2011-0004/img/speakers/kars-alfrink@2x.jpg" alt="">
                <div class="bio">
                  <p><strong class="fn">Kars Alfrink</strong> is &#8216;<span class="title">Chief Agent</span>&#8217; of <a class="org" href="http://whatsthehubbub.nl/">Hubbub</a>, a networked design studio for applied pervasive games. Hubbub works with organizations to create games that take place in public space, engage people physically, and are socially relevant. Amongst other things, these games are used to encourage good citizenship and to facilitate cultural participation.</p>
                  <p>Besides this, Kars teaches at the Utrecht School of the Arts, where he mentors students who are pursuing a Master of Arts in Interaction Design or Game Design &amp; Development. He is also the initiator and co organizer of &#8216;This Happened&#8217; &mdash; Utrecht,a series of lectures dedicated to the stories behind interaction design.</p>
                  <p>In his spare time, Kars practices a traditional Japanese martial art, and tries to keep up with geek culture.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://leapfrog.nl">leapfrog.nl</a></li>
                    <li><a class="twitter" href="http://twitter.com/kaeru">@kaeru</a></li>
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
              <li><a href="/conference/matthew-sheret" rel="prev">Previous Session <span>Matthew Sheret</span></a></li>
              <li><a href="/conference/craig-mod" rel="next">Next Session <span>Craig Mod</span></a></li>
            </ol>
          </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>