<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = '';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page home-page">
          <div class="main page" role="main">
            <section class="leader">
              <h1>Designing<br /><strong>Digital Products</strong></h1>
              <div class="blurb">
                <p><strong>dConstruct 2011</strong> brings together leading thinkers from the fields of interaction design, mobile design and ubiquitous computing to explore how we can bridge the gap between physical and digital product design.</p>
              </div>
            </section>
            <section class="speaker-lineup">
              <a href="/conference/don-norman">
                <img src="http://media01.dconstruct.org/2011-0003/img/speakers/don-norman@2x.jpg" alt="" />
                <p class="details"><strong>Don Norman</strong> Emotional Design for the World of Objects</p>
              </a>
              <a href="/conference/kelly-goto">
                <img src="http://media02.dconstruct.org/2011-0003/img/speakers/kelly-goto@2x.jpg" alt="" />
                <p class="details"><strong>Kelly Goto</strong> Beyond Usability: Mapping Emotion to Experience</p>
              </a>
              <a href="/conference/frank-chimero">
                <img src="http://media03.dconstruct.org/2011-0003/img/speakers/frank-chimero@2x.jpg" alt="" />
                <p class="details"><strong>Frank Chimero</strong> Oh God, It&#8217;s Full of Stars</p>
              </a>
              <a href="/conference/kevin-slavin">
                <img src="http://media01.dconstruct.org/2011-0003/img/speakers/kevin-slavin@2x.jpg" alt="" />
                <p class="details"><strong>Kevin Slavin</strong> Reality is Plenty</p>
              </a>
              <a href="/conference/bryan-stephanie-rieger">
                <img src="http://media02.dconstruct.org/2011-0003/img/speakers/stephanie-rieger@2x.jpg" alt="B" />
                <p class="details"><strong>Bryan Rieger &#38; Stephanie Rieger</strong> Letting Go</p>
              </a>
              <a href="/conference/kars-alfrink">
                <img src="http://media03.dconstruct.org/2011-0004/img/speakers/kars-alfrink@2x.jpg" alt="" />
                <p class="details"><strong>Kars Alfrink</strong> The Transformers</p>
              </a>
              <a href="/conference/craig-mod">
                <img src="http://media01.dconstruct.org/2011-0003/img/speakers/craig-mod@2x.jpg" alt="" />
                <p class="details"><strong>Craig Mod</strong> What Is the Shape of the Future Book?</p>
              </a>
              <a href="/conference/matthew-sheret">
                <img src="http://media02.dconstruct.org/2011-0003/img/speakers/matthew-sheret@2x.jpg" alt="" />
                <p class="details"><strong>Matthew Sheret</strong> Pocket Scale</p>
              </a>
              <a href="/conference/dan-hon">
                <img src="http://media03.dconstruct.org/2011-0003/img/speakers/dan-hon@2x.jpg" alt="" />
                <p class="details"><strong>Dan Hon</strong> The Full Stack of Entertainment: Storytelling, Play and Code</p>
              </a>
            </section>
          </div><!-- /.main -->

          <section class="news hfeed">
            <div class="section">
              <h1>News</h1>
              <div class="posts">

                  <article class="post hentry">
                    <h2><abbr class="published" title="2011-10-05">5 October</abbr></h2>
                    <h3 class="entry-title"><a href="#videos" rel="bookmark">dConstruct 2011 Videos</a></h3>
                    <div id="videos" class="entry-content">
                      <p>Thanks to our friends at Vzaar, you can now watch <a href="http://vzaar.com/channels/dconstruct2011">videos of all the talks</a> from this year's conference. Enjoy!</p>
                    </div>
                  </article>

                  <article class="post hentry">
                    <h2><abbr class="published" title="2011-09-26">26 September</abbr></h2>
                    <h3 class="entry-title"><a href="#podcast" rel="bookmark">dConstruct 2011 Podcast</a></h3>
                    <div id="podcast" class="entry-content">
                      <p>We hope you enjoyed dConstruct 2011&mdash;we had a blast. If you'd like to re-live the magic, you can now listen to audio recordings of all the talks. Subscribe to <a href="http://huffduffer.com/dConstruct/tags/dconstruct2011/rss">the podcast feed</a> or cherry-pick the talks you want <a href="http://huffduffer.com/dConstruct/tags/dconstruct2011">on Huffduffer</a>.</p>
                    </div>
                  </article>

                <article class="post hentry">
                  <h2><abbr class="published" title="2011-06-13">12 July</abbr></h2>
                  <h3 class="entry-title"><a href="#more-sponsors" rel="bookmark">Welcoming more sponsors</a></h3>
                  <div id="more-sponsors" class="entry-content">
                    <p>We&rsquo;re thrilled to have more super sponsors for this year&rsquo;s dConstruct: <a href="http://uk.authenticjobs.com/">Authentic Jobs</a>, <a href="http://mailchimp.com/">Mailchimp</a>, <a href="http://www.shopify.com/">Shopify</a>, and <a href="http://vzaar.com/">vzaar</a>. Welcome aboard!</p>
                  </div>
                </article>
                
              </div>
            </div><!-- /.section -->
          </section><!-- /.news -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>