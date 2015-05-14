<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Sponsorhip';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <div class="gutter prose">
                <h1>Sponsorship</h1>
                <p><strong>Connect your brand</strong> with influential bloggers &#38; thought leaders, talented developers &#38; designers, and some of the best known Internet companies around.</p>
                <p>Associate your company with dConstruct, the highly successful combination of affordable one day conference and two days of masterclass workshops. Get your message to a brilliant audience including everyone from product managers and <abbr title="Chief Executive Officer">CEO</abbr>s to those designing and developing the latest generation of web applications.</p>
                <p>dConstruct has plenty of sponsorship options and opportunities providing you the flexibility to showcase your services and demonstrate your commitment to the web design community in a way that best fits your needs.</p>
                <p>Past sponsors have included Microsoft, Yahoo!, Apress and the <abbr title="British Broadcasting Corporation">BBC</abbr>, to name just a few.</p>
                <p>For more information on the benefits, sponsorship options and pricing, download the <a href="sponsorspack.pdf">sponsors information pack (1.6Mb <abbr title="Portable Document Format">PDF</abbr>)</a> or <a href="/contact">contact us</a>.</p>
            </div><!-- /.gutter -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Information</h1>
            <nav class="conference-nav">
              <ol class="aside-list">
                <li class="current"><a href="/sponsorship">Sponsorship</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
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