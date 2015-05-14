<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Jeremy Keith';
$_DOCUMENT['class'] = 'workshop';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <section class="primary">
              <div class="gutter">
                <hgroup>
                  <h1>Responsive Enhancement</h1>
                  <h2>Jeremy Keith</h2>
                </hgroup>
                <p>Responsive design is one of the most exciting developments to hit the web for some time. But there&rsquo;s a common misconception that it involves merely slapping some media queries on to an existing desktop-centric site and labelling the result &quot;mobile-friendly.&quot; Nothing could be further from the truth. This workshop will demonstrate that truly effective responsive design must begin with the content first, which is then progressively adapted to a multitude of screen sizes and environments.</p>
                <p>This workshop will help you to construct web sites that will feel natural on a whole range of devices, from mobile phones to tablets, laptops, e-readers and devices we haven&rsquo;t even thought of yet.</p>
                
                <?php if ($registration_open) { ?> 
                <div class="workshop-buy">
                  <p class="register-button"><a href="http://www.eventbrite.com/event/1764129559">Sold Out!</a></p>
                  <p class="price"><strong>£395</strong> +VAT until 2nd August</p>
                  <p class="meta">Includes complimentary entry to the conference</p>
                </div>
                <?php } ?>
                
                <p>You&rsquo;ll learn how to:</p>
                <ul>
                  <li>Prioritise content</li>
                  <li>Ensure that no visitor is denied access to information,</li>
                  <li>Decide when to switch layouts using media queries,</li>
                  <li>Apply fluid layouts based on percentages,</li>
                  <li>Serve up different sized images for different environments,</li>
                  <li>Figure out new processes and workflows that embrace the ever-changing nature of the web.</li>
                </ul>
              </div><!-- /.gutter -->
            </section><!-- /.primary -->

            <section class="secondary vcard">
              <div class="gutter">
                <img class="photo" src="http://media01.dconstruct.org/2011-0002/img/speakers/jeremy-keith@2x.jpg" alt="">
                <div class="bio">
                  <p><strong class="fn">Jeremy Keith</strong> is a <span class="title">web designer and developer</span> with over a decade's experience of using and teaching web technologies such as JavaScript, microformats and HTML5. He has written three books, <a href="http://domscripting.com/book/">DOM Scripting</a> and <a href="http://bulletproofajax.com/">Bulletproof Ajax</a>, and most recently, <a href="http://www.abookapart.com/products/html5-for-web-designers">HTML5 For Web Designers</a>. When he&rsquo;s not crafting websites at <a href="http://clearleft.com/">Clearleft</a>, Jeremy can usually be found ranting and raving at conferences like <a href="http://aneventapart.com/">An Event Apart</a>. Right now he&rsquo;s very excited about responsive web design, which he feels may herald an even bigger revolution than the original web standards movement.</p>

                 <p>In his spare time, Jeremy plays bouzouki in the band <a href="http://saltercane.com/">Salter Cane</a>, curates an online Irish music community called <a href="http://www.thesession.org/">The Session</a> and runs <a href="http://huffduffer.com/">Huffduffer</a>, a site for creating podcasts of found sounds. You should unfollow him on Twitter.</p>
                  <ul class="vcard-social">
                    <li><a class="website url" href="http://adactio.com/">adactio.com</a></li>
                    <li><a class="twitter" href="http://twitter.com/adactio">@adactio</a></li>
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