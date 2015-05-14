<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Josh Clark';
$_DOCUMENT['class'] = 'workshop';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>Tapworthy Mobile Design</h1>
                  <h2>Josh Clark</h2>
                </hgroup>
                <p>From first concept to polished pixel, learn to create a mobile app that delights. This full-day workshop teaches participants to &ldquo;think mobile&rdquo; by planning and creating app interfaces in tune with the psychology, culture, ergonomics, and context of an audience on the go. Attendees will learn to conceive and refine an app&rsquo;s interface and user experience in tune with the needs of a mobile audience&mdash;and their fingers and thumbs. The workshop explores the key principles of mobile and touchscreen design, using examples from the major mobile platforms.</p>
                <p>This workshop isn&rsquo;t (only) for geeks. Experienced designers and newcomers alike will uncover the shifts in mindset and technique required to craft a great mobile app. It&rsquo;s for everyone involved in the app design process&mdash;designers, programmers, managers, marketers, clients. The workshop equips participants to ask the right questions (and find the right answers) to make aesthetic, technical, and usability decisions that will make their apps a pleasure to use.</p>
                <p>This full-day workshop is built on seven 45-60 minute &ldquo;chapters,&rdquo; or sessions, with a series of exercises that build to teams creating a draft mobile design by the end of the day.</p>
                
                <?php if ($registration_open) { ?> 
                <div class="workshop-buy">
                  <p class="register-button"><a href="http://www.eventbrite.com/event/1881817567">Buy ticket</a></p>
                  <p class="price"><strong>£395</strong> +VAT until 2nd August</p>
                  <p class="meta">Includes complimentary entry to the conference</p>
                </div>
                <?php } ?>

                <p>You&rsquo;ll learn:</p>
                <ul>
                  <li>The expectations of a mobile audience</li>
                  <li>The ergonomic demands of designing for touch</li>
                  <li>Strategies for crafting your app’s visual identity</li>
                  <li>How to work with gestures</li>
                  <li>Unique considerations for designing for the iPad</li>
                  <li>Techniques for creating sensational app icons</li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/josh-clark@2x.jpg" alt="">
                <div class="bio">
                  <p><strong>Josh Clark</strong> is a designer specializing in mobile design strategy and user experience. He&rsquo;s author of &ldquo;Tapworthy: Designing Great iPhone Apps&rdquo; (O&rsquo;Reilly, 2010) and &ldquo;Best iPhone Apps&rdquo; (O&rsquo;Reilly, 2009). Josh&rsquo;s outfit Global Moxie offers consulting services and workshops to help media companies, design agencies, and creative organizations build tapworthy mobile apps and effective websites.</p>
                  <p>Before the interwebs swallowed him up, Josh worked on a slew of national PBS programs at Boston&rsquo;s WGBH. He shared his three words of Russian with Mikhail Gorbachev, strolled the ranch with Nancy Reagan, hobnobbed with Rockefellers, and wrote trivia questions for a primetime game show. In 1996, he created the uberpopular &ldquo;Couch-to-5K&rdquo; (C25K) running program, which has helped millions of skeptical would-be exercisers take up jogging. (His motto is the same for fitness as it is for software user experience: no pain, no pain.)</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://globalmoxie.com">globalmoxie.com</a></li>
                    <li><a class="twitter" href="http://twitter.com/globalmoxie">@globalmoxie</a></li>
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