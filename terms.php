<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Terms &#38; Conditions';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <div class="gutter prose">
              <h1>Terms &#38; Conditions</h1>
              <h2>Cancellations and refunds</h2>
              <p>If you need to cancel your seat, you must tell us at least one month before the date of the event to receive a 100% refund. No refunds can be issued for seats that are cancelled less than 1 month before the event.</p>
              <h2>Transfers</h2>
              <p>You may transfer your seat to a friend or colleague, but if you wish to do so you must notify us at least a month before the date of the event. No transfers can be issued for seats that are cancelled less than 1 month before the event.</p>
              <h2>Access Requirements</h2>
              <p>If you have any special access requirements (such as wheelchair access), then please contact us when you register so we can do our best to accommodate you on the day.</p>
              <h2>Photography and quotes</h2>
              <p>You grant us the right to use any photography taken on the day or any quotes given on our feedback forms for the marketing of future events.</p>
              <p>If you require any further clarification of these terms please <a href="/contact">get in touch</a>.</p>
            </div><!-- /.gutter -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Information</h1>
            <nav class="conference-nav">
              <ol class="aside-list">
                <li><a href="/sponsorship">Sponsorship</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li class="current"><a href="/terms">Terms &#38; Conditions</a></li>
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