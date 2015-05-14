<?php

$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Location';
$_DOCUMENT['class'] = 'home';

include_once $_DOCUMENT['include'].'header.php';

?>
      <div class="page holder">
        <div class="section">

          <aside class="aside">
            <h1>Location</h1>
            <nav class="conference-nav">
              <ol class="aside-list location-list">
                <li id="dome-venue" class="conference vcard">
                  <a href="#">Conference</a>
                  <p class="meta"><strong class="fn org">Brighton Dome</strong></br />
                    <abbr class="adr geo" title="50.8238;-0.1384">
                      <span class="street-address">Church Street</span><br />
                      <span class="postal-code">BN1 1UG</span></abbr>
                  </p>
                </li>
                <li id="workshops-venue" class="workshops">
                  <a href="#">Workshops</a>
                  <p class="meta"><strong class="fn org">Clearleft</strong><br />
                    <abbr class="adr geo" title="50.8259;-0.1384">
                      <span class="street-address">28 Kensington Street</span><br />
                      <span class="postal-code">BN1 4AJ</span></abbr>
                  </p>
                </li>
                <li id="pre-party-venue" class="pre-party">
                  <a href="#">Pre Party</a>
                  <p class="meta"><strong class="fn org">The Basement</strong><br />
                    <abbr class="adr geo" title="50.8263;-0.13825">
                      <span class="street-address">24 Kensington Street</span><br />
                    <span class="postal-code">BN1 4AJ</span></abbr>
                  </p>
                </li>
                <li id="after-party-venue" class="after-party">
                  <a href="#">After Party</a>
                  <p class="meta"><strong class="fn org">Above Audio</strong><br />
                    <abbr class="adr geo" title="50.8199;-0.1345096">
                    <span class="street-address">10 Marine Parade</span><br />
                    <span class="postal-code">BN2 1TL</span></abbr>
                  </p>
                </li>
              </ol>
            </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->

          <div class="main page" role="main">
              <div class="gutter">
                <div id="map">
                  
                </div>
                <div class="gutter">
                  <p>Brighton is one of the most vibrant, colourful and creative cities in Europe. Cosmopolitan, compact, energetic, unique, fun, lively, historic, young, exotic and free-spirited, it’s a city like no other. Why not spend the weekend here after the conference! More information is available from <a href="http://visitbrighton.com/">visitbrighton.com</a>.</p>
                </div>
                <div class="location-tips">
                  <div class="column">
                    <div class="gutter">
                      <h2>Eating</h2>
                      <ul>
                        <li class="vcard">
                          <h3 class="fn org">E-Kagen</h3>
                          <p><abbr class="adr geo" title="50.8279;-0.13785"><span class="street-address">22-23 Sydney Street</span></abbr></p>
                          <p class="meta">Superb Japanese food served in an unassuming setting.</p>
                        </li>
                        <li class="vcard">
                          <h3 class="fn org">Taylor Street Baristas  <img src="http://media01.dconstruct.org/2011-0002/img/logos/wifi.png" alt="has Wifi" /></h3>
                          <p><abbr class="adr geo" title="50.825247;-0.141835"><span class="street-address">28 Queen's Road</span></abbr></p>
                          <p class="meta">Great coffee and sandwiches.</p>
                        </li>
                        <li class="vcard">
                          <h3 class="fn org">Cafe Delic&#233;  <img src="http://media01.dconstruct.org/2011-0002/img/logos/wifi.png" alt="has Wifi" /></h3>
                          <p><abbr class="adr geo" title="50.82565;-0.13896"><span class="street-address">40 Kensignton Gardens</span></abbr></p>
                          <p class="meta">Lovely French Caf&#233;.</p>
                        </li>
                        <li class="vcard">
                          <h3 class="fn org">Wagamama</h3>
                          <p><abbr class="adr geo" title="50.82565;-0.13845"><span class="street-address">Kensington Street</span></abbr></p>
                          <p class="meta">Asian food chain with lots of seating.</p>
                        </li>
                        <li class="vcard">
                          <h3 class="fn org">Gourmet Burger Company</h3>
                          <p><abbr class="adr geo" title="50.824854;-0.139335"><span class="street-address">44-47 Gardener Street</span></abbr></p>
                          <p class="meta">Not bad for a burger chain.</p>
                        </li>
                        <li class="vcard">
                          <h3 class="fn org">Strada</h3>
                          <p><abbr class="adr geo" title="50.822868;-0.139915"><span class="street-address">160-161 North Street</span></abbr></p>
                          <p class="meta">Reliable Italian fare.</p>
                        </li>
                      </ul>
                    </div>
                  </div><!-- /.column -->

                  <div class="column">
                    <div class="gutter">
                      <h2>Drinking</h2>
                      <ul>
                        <li class="vcard">
                          <h3 class="fn org">The Fountain Head <img src="http://media01.dconstruct.org/2011-0002/img/logos/wifi.png" alt="has Wifi" /></h3>
                          <p><abbr class="adr geo" title="43.1167;-77.5572"><span class="street-address">101-102 North Road</span></abbr></p>
                          <p class="meta">A fine drinking establishment in the North Laine.</p>
                        </li>
                        <li class="vcard">
                          <h3 class="fn org">The Earth &#38; Stars <img src="http://media01.dconstruct.org/2011-0002/img/logos/wifi.png" alt="has Wifi" /></h3>
                          <p><abbr class="adr geo" title="50.82476;-0.14221"><span class="street-address">46 Windsor Street</span></abbr></p>
                          <p class="meta">Locally sourced food and organic beer.</p>
                        </li>
                        <li class="vcard">
                          <h3 class="fn org">The Evening Star</h3>
                          <p><abbr class="adr geo" title="50.827707;-0.142103"><span class="street-address">55&ndash;56 Surrey Street</span></abbr></p>
                          <p class="meta">A great collection of real ales.</p>
                        </li>
                      </ul>
                      <h2>Geek spots</h2>
                      <ul>
                        <li class="vcard">
                          <h3 class="fn org">Mr Magpie</h3>
                          <p><abbr class="adr geo" title="50.825871;-0.142543"><span class="street-address">94a Gloucester Road</span></abbr></p>
                          <p class="meta">Home of Brighton’s Woodtype &amp; Font Shop.</p>
                        </li>
                        <li class="vcard">
                          <h3 class="fn org">Dave’s Comics</h3>
                          <p><abbr class="adr geo" title="50.827192;-0.138005"><span class="street-address">3 Sydney Street</span></abbr></p>
                          <p class="meta">For all your comic book needs.</p>
                        </li>
                      </ul>
                    </div>
                  </div><!-- /.column -->

                  <div class="column">
                    <div class="gutter">
                      <h2>Sleeping</h2>
                      <ul>
                        <li class="vcard">
                          <h3 class="fn org">myHotel</h3>
                          <p><abbr class="adr geo" title="50.82451;-0.13857"><span class="street-address meta">17 Jubilee Street</span>, <span class="postal-code">BN1 1GE</span></abbr><br />
                          <a href="tel:+441273900300">+44 (0)1273 900 300</a>. <a href="http://www.myhotels.com/my-hotel-brighton/">Website</a></p>
                        </li>
                        <li class="vcard">
                          <h3 class="fn org">Old Ship Hotel</h3>
                          <p><abbr class="adr geo" title="50.820401;-0.141953"><span class="street-address meta">31-38 Kings Road</span>, <span class="postal-code">BN1 1NR</span></abbr><br />
                          <a href="tel:+4412731273329001">+44 (0)1273 329 001</a>. <a href="http://www.oldship-brighton.com/">Website</a></p>
                        </li>
                        <li class="vcard">
                          <h3 class="fn org">Premier Inn</h3>
                          <p><abbr class="adr geo" title="50.823274;-0.140912"><span class="street-address meta">144 North Street</span>, <span class="postal-code">BN1 1RE</span></abbr><br />
                          <a href="tel:+448715278150">+44 (0)871 527 8150</a>. <a href="http://www.premierinn.com/en/hotel/BRIPTI/brighton-city-centre">Website</a></p>
                        </li>
                      </ul>
                    </div>
                  </div><!-- /.column -->
                </div><!-- /.location-tips -->
            </div><!-- /.gutter -->
          </div><!-- /.main -->

        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>