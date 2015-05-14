<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Scott Jehl';
$_DOCUMENT['class'] = 'workshop';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>Building Flexible Web Apps with jQuery Mobile</h1>
                  <h2>Scott Jehl</h2>
                </hgroup>
                <p>Scott&rsquo;s workshop will be a deep dive into the jQuery Mobile framework: a web standards toolkit aimed at creating web sites and applications that meet users wherever they are&mdash;and will be&mdash;be it on small mobile devices, desktop computers, touch-screen tablets, or otherwise!</p>
                <p>The workshop will begin by introducing jQuery Mobile&rsquo;s philosophy of universal accessibility, the challenges and benefits of cross-browser/device development, and the patterns, tools, and workflows provided by jQuery Mobile to help you build rich web apps that elegantly address your users&rsquo; needs. In the process, participants will get a candid, from-the-trenches look at some of the problems encountered&mdash;and lessons learned&mdash;while designing for the rapidly-changing mobile web.</p>
                <?php if ($registration_open) { ?> 
                <div class="workshop-buy">
                  <p class="register-button"><a href="http://www.eventbrite.com/event/1883739315">Buy ticket</a></p>
                  <p class="price"><strong>£395</strong> +VAT until 2nd August</p>
                  <p class="meta">Includes complimentary entry to the conference</p>
                </div>
                <?php } ?>
                
                <p>You'll learn about:</p>
                <ul>
                  <li>The goals and philosophy of the jQuery Mobile Framework, and the widgets and patterns it provides</li>
                  <li>Integrating jQuery Mobile into a front-end codebase</li>
                  <li>Configuring jQuery Mobile, both through declarative HTML5 attributes and its JavaScript API</li>
                  <li>Working with CSS theming to create visual consistency across an application interface</li>
                  <li>Behaviour and event handling across different interaction modes such as touch, mouse, and keyboard</li>
                  <li>Targeting enhancements based on browser and device capabilities</li>
                  <li>Tips and gotchas for cross-device testing and debugging</li>
                  <li>Accessibility tips for creating apps that are both meaningful and convenient to users with disabilities</li>
                  <li>Extending jQuery Mobile with your own custom widgets</li>
                  <li>Patterns for designing apps that responsively adapt to the features and constraints of different devices</li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/scott-jehl@2x.jpg" alt="">
                <div class="bio">
                  <p><strong class="fn">Scott Jehl</strong> is a web designer/developer, and member of <a href="http://filamentgroup.com/">Filament Group, Inc</a>, a Boston-based design studio. An active participant in the web community, Scott is a <a href="http://jquery.com/">jQuery</a> team member and leads the development efforts of the <a href="http://jquerymobile.com/">jQuery Mobile Framework</a>. He develops several other open-source projects as well, such as <a href="https://github.com/scottjehl/Respond">Respond.js</a>, <a href="https://github.com/filamentgroup/Responsive-Images">Responsive Images</a>, <a href="https://github.com/paulirish/matchMedia.js">MatchMedia polyfill</a>, and <a href="https://github.com/scottjehl">more</a>.</p> 

                  <p>Scott has written for <a href="http://www.alistapart.com/articles/testdriven">A List Apart</a>, co-authored the book <a href="http://www.filamentgroup.com/dwpe">Designing with Progressive Enhancement</a> (New Riders, 2010), and frequently speaks at conferences such as Mobilism 2011, Voices That Matter, and Breaking Development.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://scottjehl.com/">scottjehl.com</a></li>
                    <li><a class="twitter" href="http://twitter.com/scottjehl">@scottjehl</a></li>
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