<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Register';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
            <div class="gutter">
              <h1>Workshop Tickets on Sale Now!</h1>
              <h2>All prices listed are exclusive of VAT.</h2>
              
              <p>Tickets for the dConstruct conference are now sold out. However, if you book a place on a <a href="/workshops/">dConstruct workshop</a>, then a conference pass is included in the price.</p>
              <p>Alternatively, you can add yourself to the waiting list below.</p> 
              
              <div style="width:100%; text-align:left; margin-top: 2em;"><iframe  src="http://www.eventbrite.com/tickets-external?eid=1666782391&ref=etckt" frameborder="0" height="306" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe><div style="font-family:Helvetica, Arial; font-size:10px; padding:5px 0 5px; margin:2px; width:100%; text-align:left;" ><a style="color:#ddd; text-decoration:none;" target="_blank" href="http://www.eventbrite.com/r/etckt" >Event management</a><span style="color:#ddd;" > for </span><a style="color:#ddd; text-decoration:none;" target="_blank" href="http://dconstruct11.eventbrite.com?ref=etckt" >dConstruct 11</a><span style="color:#ddd;" > powered by </span><a style="color:#ddd; text-decoration:none;" target="_blank" href="http://www.eventbrite.com?ref=etckt" >Eventbrite</a></div></div>
            </div><!-- /.gutter -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Registration</h1>
            <p><strong>dConstruct 2011</strong> brings together leading thinkers from the fields of interaction design, mobile design and ubiquitous computing to explore how we can bridge the gap between physical and digital product design.</p>
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>
