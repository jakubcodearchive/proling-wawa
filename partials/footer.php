<!-- GET IN TOUCH -->
<section class="contact" id="contact">
    <h1>Kontakt</h1>
    <div class="row">
              
        <div class="contact-info left">  
            <div class="follow"><b>Email:</b><i class="fa fa-envelope-o"></i>prolingjs@protonmail.com</div>
            <div class="follow"><b>Email:</b><i class="fa fa-envelope-o"></i>jakub.skrzeczkowski@gmail.com</div>
            <div class="follow"><b>Telefon:</b><i class="fa fa-phone"></i>509 662 578</div>
            <div class="follow"><b>Telefon 2:</b><i class="fa fa-phone"></i>728 807 015</div>
        </div>
              
        <div class="contact-info right">

            <div class="follow">
                <b>Facebook:</b>
                <a href="https://www.facebook.com/symultaniczni/">
                    <i class="fab fa-facebook-f" style="color: #0069D9 	!important"></i>
                </a>
            </div>
            <div class="follow">
                <b>Twitter:</b>
                <a href="https://twitter.com/prolingt">
                    <i class="fab fa-twitter" style="color: #0069D9 	!important"></i>
                </a> 
            </div>
            <div class="follow">
                <b>You tube:</b>
                <a href="https://www.youtube.com/channel/UCX-yrPEgyBPZatV8-D6We2w">
                    <i class="fab fa-youtube" style="color: #0069D9 !important"></i>
                </a> 
            </div>   
        </div>

        <div class="contact-info follow">
            <img class="map" 
                <?php 
                if (file_exists("images/mapa.jpg")) {
                    echo " src=\"images/mapa.jpg\"";
                } else {
                    echo " src=\"../images/mapa.jpg\""; 
                }?>
                alt="mapa biuro tlumaczen siedziba"
            >
        </div>
    </div><!-- row --> 	
</section>

<!-- PRE FOOTER LINKS --> 
<section class="pre-footer">
    <div class="pre-footer-col col-one">
    <ul class="footer-links">
        <li><a class="footer-link" href="https://symultaniczne.pl/tlumaczenie-symultaniczne.php">Czym jest tłumaczenie symultaniczne?</a></li>
        <li><a class="footer-link" href="https://symultaniczne.pl/tlumaczenie-symultaniczne-warszawa.php">Tłumaczenie symultaniczne - Warszawa</a></li>
        <li><a class="footer-link" href="https://symultaniczne.pl/tlumaczenie-symultaniczne-cena.php">Tłumaczenie symultaniczne - Cena</a></li>
    </ul>
    </div>
    <div class="pre-footer-col col-two">
    <ul class="footer-links">
        <li><a class="footer-link" href="/symultaniczne.pl">Biuro tłumaczeń Warszawa</a></li>
        <li><a class="footer-link" href="/tlumaczenie-symultaniczne-teams-zoom.php">Tłumaczenia symultaniczne na Zoom i Teams</a></li>
        <li><a class="footer-link" href="tlumaczenia-niemiecki-warszawa.php">Tłumaczenia na język niemiecki - Warszawa i okolice</a></li>
    </ul>
    </div>
    <div class="pre-footer-col col-three">
    <ul class="footer-links">
        <li><a class="footer-link" href="https://symultaniczne.pl/#portfolio">O nas</a></li>
        <li><a class="footer-link" href="https://symultaniczne.pl/#services">Oferta</a></li>
        <li><a class="footer-link" href="https://symultaniczne.pl/#contact">Kontakt</a></li>
    </ul>
    </div>
</section>
<!-- FOOTER ---->
<section class="footer">
    <div class="footer-paragraph">
      <p>Strona poświęcona tłumaczeniu symultanicznemu w Warszawie wykonana z pasją i <i class="fa fa-heart-o"></i> przez JS. Podoba się? Skontaktuj się z właścicielem, wykonamy taka dla Ciebie.</p>
    </div>
</section>
    
  </div><!-- container -->

  <script>
    const nav = document.querySelector('nav'); 
    const logoMenu = document.querySelector('.logo-menu'); 
    const hamburger = document.querySelector('.hamburger'); 
    const closeCross = document.querySelector('.close'); 
    console.log("js has been loaded"); 
    console.log(closeCross); 
    console.log(hamburger); 
    console.log(logoMenu); 
    
    hamburger.addEventListener('click', ()=> {
      console.log('open') 
      nav.classList.add('openNav');
    }); 

    closeCross.addEventListener('click', ()=> {
      console.log('close'); 
      nav.classList.remove('openNav'); 
    }); 

  </script>
  </body>
  </html>