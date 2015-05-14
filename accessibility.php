<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Accessibility';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page">
        <div class="section">

          <div class="main page" role="main">
            <div class="gutter prose">
              <h1>Accessibility</h1>
              <p>The dConstruct website has been designed and built to be accessible to as wide an audience as possible. Some people with disabilities find using the web difficult and while we know that it is impossible to design a site that everyone can use, if you have problems using our site, please <a href="/contact">let us know</a> and we will do our utmost to help.</p>
              <h2>Conference accessibility</h2>
              <p>If you have specific accessibility requirements while at the conference, please contact us and we&#8217;ll try our best to accommodate you.</p>
              <h2>Standards compliance</h2>
              <p>All pages validate as <abbr title="HyperText Markup Language 5">HTML5</abbr>.</p>
              <h3>Links</h3>
              <p>Many links have title attributes which describe the link in greater detail, unless the text of the link already fully describes the target (such as the headline of an article).</p>
              <p>Whenever possible, links are written to make sense out of context. Many browsers (such as JAWS, Home Page Reader, Lynx, and Opera) can extract the list of links on a page and allow the user to browse the list, separately from the page. To aid this, link text is never duplicated; two links with the same link text always point to the same address.</p>
              <p>There are no javaScript: pseudo-links. All links can be followed in any browser, even if scripting is turned off. There are no links that open new windows without warning.</p>
              <h3>Visual Design</h3>
              <p>This site uses cascading style sheets for visual layout. If your browser or browsing device does not support stylesheets at all, the content of each page is still readable.</p>
              <p>The layout is liquid, simply filling its window. It happily accommodates resizing text and, as relative units have been used, text can even be re-sized in Internet Explorer for Windows.</p>
            </div><!-- /.gutter -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Information</h1>
            <nav class="conference-nav">
              <ol class="aside-list">
                <li><a href="/sponsorship">Sponsorship</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/terms">Terms &#38; Conditions</a></li>
                <li class="current"><a href="/accessibility">Accessibility</a></li>
                <li><a href="/contact">Contact</a></li>
              </ol>
            </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->
          
        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>