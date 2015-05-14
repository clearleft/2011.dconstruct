<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Privacy Policy';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <div class="gutter prose">
              <h1>Privacy Policy</h1>
              <h2>Information</h2>
              <h3>Information Collection</h3>
              <p>Clearleft Ltd is the sole owner of the information collected on the dConstruct website. We collect information from our users at several different points on our website.</p>
              <h3>Log Files</h3>
              <p>Like most standard website servers we use log files. This includes internet protocol (<abbr>IP</abbr>) addresses, browser type, internet service provider (<abbr>ISP</abbr>), referring/exit pages, platform type, date/time stamp, and number of clicks to analyse trends, administer the site, track users’ movement in the aggregate, and gather broad demographic information for aggregate use. <abbr>IP</abbr> addresses etc. are not linked to personally identifiable information.</p>
              <h2>Site Communications</h2>
              <h3>Customer Service</h3>
              <p>We communicate with users on a regular basis to provide requested services and about issues relating to their account. We reply via email or phone.</p>
              <h2>Sharing</h2>
              <p>Clearleft does not pass on or sell information about our customers to any other business or organisation. The only exception to this is where we are legally obliged to do so to comply with a current judicial proceeding, a court order or legal process served on our website.</p>
              <h3>Business Transitions</h3>
              <p>In the event Clearleft Ltd goes through a business transition, users will be notified via a prominent notice on our website for 30 days prior to a change of ownership or control of their personal information. If as a result of the business transition, the users&#8216; personally identifiable information will be used differently from that stated at the time of collection, they will be given choice consistent with our notification of changes section.</p>
              <h3>Choice/Opt-out</h3>
              <p>Users who no longer wish to receive promotional communications may opt-out of receiving these communications by replying with &#8216;unsubscribe&#8216; in the subject line of the email, or email us at <a href="mailto:info@clearleft.com">info@clearleft.com</a>, telephone on <a href="tel:+448458386163">+44 (0)845 838 6163</a>, or write to Clearleft <abbr title="Limited">Ltd</abbr>, Studio 6, 28 Kensington Street, Brighton, BN1 4AJ, <abbr title="United Kingdom">UK</abbr>.</p>
              <h3>Links</h3>
              <p>Our website contains links to other sites. We are not responsible for the privacy practices of such other sites. This privacy statement applies solely to information collected by this website.</p>
            </div><!-- /.gutter -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Information</h1>
            <nav class="conference-nav">
              <ol class="aside-list">
                <li><a href="/sponsorship">Sponsorship</a></li>
                <li class="current"><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/terms">Terms &#38; Conditions</a></li>
                <li><a href="/accessibility">Accessibility</a></li>
                <li><a href="/contact">Contact</a></li>
              </ol>
            </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>
