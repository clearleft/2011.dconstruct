<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Cookies';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page">
        <div class="section">

          <div class="main page" role="main">
            <div class="gutter prose">
              <h1>Cookies</h1>
              <h2>Introduction to Cookies</h2>
              <p>An <abbr title="">HTTP</abbr> cookie&#8212;commonly referred to as just &#8220;cookie&#8221;&#8212;is a parcel of text sent back and forth between a web browser and the server it accesses. Its original purpose was to provide a state management mechanism between a web browser and a web server.</p>
              <p>Without a cookie (or a similar solution), a web server cannot distinguish between different users, or determine any relationship between sequential page visits made by the same user. For this reason, cookies are used to differentiate one user from another and to pass information from page to page during a single user&#8217;s website session. A web server uses cookies to collect data about a given browser, along with the information requested and sent by the browser&#8217;s operator (the visitor). Cookies do not identify people, but rather they are defined themselves by a combination of a computer, a user account, and a browser.</p>
              <h2>Cookies Used on This Website</h2>
            </div><!-- /.gutter -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Information</h1>
            <nav class="conference-nav">
              <ol class="aside-list">
                <li><a href="/sponsorship">Sponsorship</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li class="current"><a href="/cookies">Cookies</a></li>
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