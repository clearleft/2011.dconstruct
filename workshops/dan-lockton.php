<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Dan Lockton';
$_DOCUMENT['class'] = 'workshop';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>Influencing behaviour: people, products, services and systems</h1>
                  <h2>Dan Lockton</h2>
                </hgroup>
                <p>Whether we choose to do it or not, what we design is going to affect how users behave, so we might as well think about it, and—if we can—actually get good at it. Bridging the gap between physical and digital product design, a systems approach can help us understand how people interact with the different touchpoints they experience, how mental models and cognitive biases and heuristics influence the way people make decisions about what to do, and hence how we might apply that knowledge (for good).</p>
                
                <?php if ($registration_open) { ?> 
                <div class="workshop-buy">
                  <p class="register-button"><a href="http://www.eventbrite.com/event/1884736297">Sold Out!</a></p>
                  <p class="price"><strong>£395</strong> +VAT until 2nd August</p>
                  <p class="meta">Includes complimentary entry to the conference</p>
                </div>
                <?php } ?>
                
                <p>In this full-day practical workshop, we&rsquo;ll try a novel approach to design and behaviour, using ourselves as both designers and cybernetic guinea pigs in exploring and developing a combination of physical and digital experiences. You&rsquo;ll learn how to improve your own decision-making and understanding of how your behaviour is influenced by the systems around you, as well as ways to influence others&rsquo; behaviour, through a new approach to designing at the intersection of people, products, services and systems.</p>
                
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                  <img class="photo" src="/img/speakers/dan-lockton@2x.jpg" alt="">
                <div class="bio">
                  <p><strong class="fn">Dan Lockton</strong> is a designer and researcher specialising in design for behaviour change&mdash;applying techniques from psychological and technical disciplines to the problems of influencing human behaviour for social and environmental benefit, through the design of products, services, systems and environments. He&rsquo;s the author of the Design with Intent toolkit, an ongoing project to build an interaction design pattern library for influencing user behaviour, bringing together insights and examples around behaviour into a form that&rsquo;s usable during the design process.</p>
                  <p>At present he&rsquo;s a research assistant on the Empower project, a collaboration between More Associates, Brunel University and the University of Warwick which aims to reduce the energy use of workplaces through connecting people with energy and behavioural data from CarbonCulture in meaningful and engaging ways, alongside the final stages of writing up his PhD at Brunel. He also does freelance consultancy and lecturing/speaking projects as Requisite Variety. In the past, Dan&rsquo;s worked in R&amp;D for Sir Clive Sinclair, built some unusual bikes with Ben Wilson, and written a book on the Reliant Motor Company.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://danlockton.co.uk">danlockton.co.uk</a></li>
                    <li><a class="twitter" href="http://twitter.com/danlockton">@danlockton</a></li>
                  </ul>
                </div>
              </div><!-- /.gutter -->
            </section><!-- /.secondary -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Workshops</h1>
            <?php include_once $_DOCUMENT['include'].'workshop-nav.php'; ?>
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>