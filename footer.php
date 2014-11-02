<br/><br/>
<hr class="tall" />
   <footer class="inner">
      <div class="container">
         <div class="row">
            <div class="footer-ribon">
               <span>Extras</span>
            </div>
            <div class="col-md-2">
               <h4>Apps dan Games</h4>
               <hr>
                  <ul class="list icons list-unstyled">
                     <li><a href="https://play.google.com/store/apps/developer?id=Akakom+Dev+Center" target="_blank" rel="nofollow"><img alt="Akakom Dev Center Android Apps" src="images/google_play.png" class="mobile-apps"/></a></li>
                     <li><a href="http://appworld.blackberry.com/webstore/vendor/71236" target="_blank" rel="nofollow"><img alt="Akakom Dev Center Blackberry Apps" src="images/blackberry_appworld.png" class="mobile-apps"/></a></li>
                     <li><a href="https://marketplace.firefox.com/app/flappy-bee" target="_blank" rel="nofollow"><img alt="Akakom Dev Center Firefox Appa" src="images/firefox_marketplace.png" class="mobile-apps"/></a></li>
                     <li><a href="http://www.windowsphone.com/en-us/search?q=akakom+dev+center" target="_blank" rel="nofollow"><img alt="Akakom Dev Center Windows Phone Apps" src="images/windows_store.png" class="mobile-apps"/></a></li>
                  </ul>
               </hr>
            </div>
            <div class="col-md-2">
               <h4>About us</h4>
               <hr>
                  <ul class="list icons list-unstyled">
                  <li><i class="icon icon-caret-right"></i> <a href="about/index.htm">Community</a></li>
                  <li><i class="icon icon-caret-right"></i> <a href="about/about_team.htm">Team</a></li>
                  <li><i class="icon icon-caret-right"></i> <a href="about/about_careers.htm">Careers</a></li>
                  <li><i class="icon icon-caret-right"></i> <a href="about/about_privacy.htm">Privacy</a></li>
                  <li><i class="icon icon-caret-right"></i> <a href="about/about_copyright.htm">Copyright</a></li>
                  <li><i class="icon icon-caret-right"></i> <a href="about_disclaimer.htm">Disclaimer</a></li>
               </ul>
               </hr>
            </div>
            <div class="col-md-2">
               <h4>Latest Tutorials</h4>
               <hr><?php    
                  $sql1 = 'select * from tutorial order by id desc limit 5';
                  if(!$result = $db->query($sql1)){
                      die('There was an error running the query [' . $db->error . ']');
                  }

               while($row = $result->fetch_assoc()){
               ?>
               </hr>
                  <ul class="list icons list-unstyled">
                     <li><i class="icon icon-caret-right"></i> <a href="#"><?php echo $row['judul'];  ?></a></li>
                  </ul>
               <?php } ?>  
            </div>
            <div class="col-md-3">
                  <div class="contact-details">
                     <h4>Contact Us</h4>
                     <hr>
                        <ul class="contact">
                           <li><p><i class="icon icon-map-marker"></i> <strong>Address : </strong><a href="#">AKAKOM DEV CENTER<br/> Jl Raya janti no 143 Yogyakarta, Indonesia</a></p></li>
                           <li><p><i class="icon icon-envelope"></i> <strong>Email : </strong> <a href="mailto:contact@adc.akakom.ac.id"> contact@adc.akakom.ac.id</a></p></li>
                           <li><p><i class="icon icon-dribbble"></i> <strong>Website : </strong> <a href="http://www.adc.akakom.ac.id/"> adc.akakom.ac.id</a></p></li>
                        </ul>
                     </hr>
                  </div>

                  <div class="social-icons">
                     <ul class="social-icons">
                        <li class="facebook"><a href="https://www.facebook.com/akakomdevcenter" target="_blank" data-placement="bottom" title="Akakom Dev Center @ Facebook">Facebook</a></li>
                        <li class="twitter"><a href="http://www.twitter.com/akakomdevcenter" target="_blank" data-placement="bottom"  title="Akakom Dev Center @ Twitter">Twitter</a></li>
                        <li class="rss"><a href="http://feeds.feedburner.com/akakomdevcenter" target="_blank" data-placement="bottom" title="Akakom Dev Center RSS">RSS</a></li>
                     </ul>
                  </div>
            </div>
         </div>
      </div>

      <div class="footer-copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-1">
                  <a href="#" class="logo">
                     <img alt="Akakom Dev Center" class="img-responsive" src="images/logo-footer.png">
                  </a>
               </div>
               <div class="col-md-5">
                  <p>&copy; Copyright 2014. All Rights Reserved.</p>
               </div>
               <div class="col-md-4">
                  <nav id="sub-menu">
                     <ul>
                        <li><a href="http://www.adc.akakom.ac.id/about/tutorials_writing.htm">Write for us</a></li>
                        <li><a href="http://www.adc.akakom.ac.id/about/sitemap.htm">Sitemaps</a></li>
                        <li><a href="http://www.adc.akakom.ac.id/about/faq.htm">FAQ's</a></li>
                        <li><a href="http://www.adc.akakom.ac.id/about/about_helping.htm">Helping</a></li>
                        <li><a href="http://www.adc.akakom.ac.id/about/contact_us.htm">Contact</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
<script type="text/javascript" src="theme/vendor/jquery.js"></script>
<script type="text/javascript" src="theme/js/theme.js"></script>
<script type="text/javascript" src="scripts/urchin.js"></script>
</footer>
<script src="scripts/translate.google.com/elementa0d8.html?cb=googleTranslateElementInit"></script>
</div>
</body>
</html>