<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Workshops';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <div class="main page" role="main">
              
              <div class="workshop-calls">
                <div class="col">
                  
                  <div class="workshop"><a href="/workshops/jeremy-keith">
                    <div class="lead">
                      <img src="http://media01.dconstruct.org/2011-0003/img/workshops/ws1.jpg" alt="">
                    </div>
                    <div class="desc">
                      <h2>Wednesday 31st August</h2>
                      <h3>Responsive Enhancement</h3>
                      <p>Jeremy Keith</p>
                      <p>Sold out!</p>
                    </div></a>
                  </div>
                    
                  <div class="workshop"><a href="/workshops/dan-lockton">
                    <div class="lead">
                      <img src="http://media02.dconstruct.org/2011-0003/img/workshops/ws2.jpg" alt="">
                    </div>
                    <div class="desc">
                      <h2>Wednesday 31st August</h2>
                      <h3>Influencing behaviour: people, products, services and systems</h3>
                      <p>Dan Lockton</p>
                      <p>Sold out!</p>
                      <br />
                    </div></a>
                  </div>
                  
                </div>
                <div class="col">
                  
                  <div class="workshop"><a href="/workshops/scott-jehl">
                    <div class="lead">
                      <img src="http://media01.dconstruct.org/2011-0003/img/workshops/ws3.jpg" alt="">
                    </div>
                    <div class="desc">
                      <h2>Thursday 1st September</h2>
                      <h3>Building Flexible Web Apps with jQuery Mobile</h3>
                      <p>Scott Jehl</p>
                    </div></a>
                  </div>
                  
                  <div class="workshop"><a href="/workshops/josh-clark">
                    <div class="lead">
                      <img src="http://media02.dconstruct.org/2011-0003/img/workshops/ws4.jpg" alt="">
                    </div>
                    <div class="desc">
                      <h2>Thursday 1st September</h2>
                      <h3>Tapworthy Mobile Design</h3>
                      <p>Josh Clark</p>
                    </div></a>
                  </div>
                    
                </div>
              </div>
              
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Workshops</h1>
            <p><strong>We&rsquo;re offering a limited number</strong> of places for a few full-day exclusive masterclasses in the lead-up to the conference.</p>
            <p>Workshops cost &pound;445+VAT per workshop (or &pound;395+VAT until 2nd August). Attendees receive complimentary entrance to the dConstruct conference.</p>
            <p class="meta">Workshops will take place at: Clearleft, 28 Kensington Street, Brighton, BN1 4AJ, UK. <a href="/location">View Map</a>.</p>
            <p class="meta">Workshops start promptly at 10:00am. Please arrive at 9:30am for coffee and registration.</p>
          </aside><!-- /.aside -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>
