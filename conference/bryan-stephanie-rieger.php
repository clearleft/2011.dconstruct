<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Bryan Rieger';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
               <hgroup>
                  <h1>Letting Go</h1>
                  <h2>Bryan Rieger &#38; Stephanie Rieger</h2>
                </hgroup>
                <p>Design (or if you prefer&#8212;user experience) is at a crossroads. In our globalized, hyper-connected world, users no longer need to wait for us to create experiences for them. As we debate the value of design thinking, the usefulness of the next <abbr title="Application Programming Interface">API</abbr>, or strive to craft the ultimate cross-platform experience&#8212;users are sorting this out on their own, using whatever service or technology is &#8220;good enough&#8221; for them at the time.</p>
                <p>Strategies and scenarios that made sense mere months ago, are disintegrating as technologies shift, business models crumble, and we watch with dismay as users exchange tips to disable JavaScript on their Kindles, or access multiplayer Flash games on the iPads.</p>
                <p>What happens to your brand, your product, and your bottom line when users choose &#8220;good enough&#8221;, over your carefully crafted product or service? Is it a sign of failure, a missed opportunity, or a chance to dive head first towards a new reality?</p>
                <script>
                  (function() {
                      document.write('<iframe style="border:none; padding:0; margin:0;" id="slides" src="http://www.slideshare.net/slideshow/embed_code/9109114?rel=0"></iframe>');
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
                <object type="application/x-shockwave-flash" data="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/03-rieger.mp3" width="290" height="24"><param name="movie" value="http://huffduffer.com/flash/player.swf?soundFile=http://dconstruct.s3.amazonaws.com/2011/podcast/03-rieger.mp3" /><param name="wmode" value="transparent" /><a href="http://huffduffer.com/dConstruct/52237">Letting Go on Huffduffer</a></object>
                <ul>
                    <li><a href="http://dconstruct.s3.amazonaws.com/2011/podcast/03-rieger.mp3">Download the audio</a></li>
                    <li><a href="http://huffduffer.com/add/52237">Huffduff it</a></li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary">
              <div class="gutter">
                  <div class="vcard">
                    <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/bryan-rieger@2x.jpg" alt="">
                    <div class="bio">
                      <p><strong class="fn">Bryan Rieger</strong> is a designer, writer and reluctant developer with a background in theatre design and classical animation. Bryan has worked across various media including print, broadcast, web and mobile; and with clients such as Apple, Microsoft and Nokia.</p>
                    </div>
                    <ul class="vcard-social">
                      <li><a class="website url" href="http://bryanrieger.com">bryanrieger.com</a></li>
                      <li><a class="twitter" href="http://twitter.com/bryanrieger">@bryanrieger</a></li>
                    </ul>
                  </div><!-- /.vcard -->
                  <div class="vcard">
                    <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/stephanie-rieger@2x.jpg" alt="">
                    <div class="bio">
                      <p><strong class="fn">Stephanie Rieger</strong> is a writer, designer, and closet anthropologist with a passion for the many ways people interact with technology. With a diverse background, Stephanie&#8217;s expertise lies in marrying design, technology, and business goals to craft simple, elegant experiences.</p>
                      <ul class="vcard-social">
                        <li><a class="website url" href="http://stephanierieger.com">stephanierieger.com</a></li>
                        <li><a class="twitter" href="http://twitter.com/stephanierieger">@stephanierieger</a></li>
                      </ul>
                      <p>Bryan and Stephanie can be found crafting a diverse range of experiences at <a href="http://yiibu.com">Yiibu</a>, a wee design consultancy based in Edinburgh, Scotland.</p>
                    </div>
                  </div><!-- /.vcard -->
              </div><!-- /.gutter -->
            </section><!-- /.secondary -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Conference</h1>
            <nav class="conference-nav">
            <?php include_once $_DOCUMENT['include'].'conference-nav.php';?>
            <ol class="paging">
              <li><a href="/conference/frank-chimero" rel="prev">Previous Session <span>Frank Chimero</span></a></li>
              <li><a href="/conference/kevin-slavin" rel="next">Next Session <span>Kevin Slavin</span></a></li>
            </ol>
          </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>