<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Page Not Found (404)';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page">
        <div class="section">

          <div class="main page" role="main">
            <div class="gutter prose">
              <h1>Page Not Found</h1>
              <p>There are known knowns. These are things we know that we know. There are known unknowns. That is to say, there are things that we know we don&#8217;t know. But there are also unknown unknowns. There are things we don&#8217;t know we don&#8217;t know.</p>
              <p>We don&#8217;t know what you were looking for and we don&#8217;t know we don&#8217;t know. <a href="/contact">Let us know</a>.</p>
            </div><!-- /.gutter -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>404</h1>
          </aside><!-- /.aside -->
          
        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>