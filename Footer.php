
    <footer>
        <section class="footer-section-1">
            <img class="footer-img-1" src="img/shape-11.svg" alt="">
            <div class="footer-div">
                <h1>Need a <span>Successful</span> Project?</h1>
                <a href="https://wa.link/5ak4kg">Whatsapp Us <img src="img/icons8-whatsapp.svg" alt=""> </a>
                <div class="number-mail">
                    <div>
                        <p>Call Us</p>
                        <img class="footer-call-msg" src="img/icons8-call-24.png" alt="">
                        <a href="tel:+919136193111">(+91) 913 619 3111 </a>
                    </div>

                    <div class="div-2-of-number">
                        <p>Or Mail us </p>
                        <img class="footer-call-msg" src="img/icons8-mail-24.png" alt="">
                        <a href="mailto:info@cretmark.com">info@cretmark.com</a>
                    </div>
                </div>
<img class="footer-img-2" src="img/shape-09.svg" alt="">
<img class="footer-img-3" src="img/shape-08.svg" alt="">


            </div>
        </section>
        <section class="footer-section-2">
<div class="div-in-second-section">
    <a href="https://www.facebook.com/cretmark.biz"><img src="img/icons8-facebook-50.png" alt=""></a>
    <a href="https://twitter.com/Cretmark1?s=08"><img  class="twt-link"  src="img/icons8-twitter-30.png" alt=""></a>
    <a href="https://pin.it/25MKV2b"><img src="img/icons8-pinterest-50.png" alt=""></a>
    <a href="https://www.linkedin.com/company/cretmark-business-solutions"><img  class="twt-link"  src="img/icons8-linkedin-2-30.png" alt=""></a>
    <a href="https://instagram.com/cretmark"><img src="img/icons8-instagram-50.png" alt=""></a>
    <a href="https://youtube.com/channel/UCyf6gbxo70ohUFj0Md-GFTA"><img src="img/icons8-youtube-50.png" alt=""></a>
    

</div>

<div class="footer-bottom-section">
    <div class="get-in-touch-footer">
        <h1>Get In <span>Touch!</span></h1>
        <p>If you want to create a successful brand that scales your business.
            <br>
            contact us NOW!</p>
            <p>Get 3 Free Marketing Tools</p>
            <form action="">
                <input type="email" name="" id="footer-email" placeholder="Email">
                <button type="submit">Subscribe</button>
            </form>
    </div>

    <div class="permalinks-in-footer" >
        <ul class="permalinks-in-footer-ul-1" >
            <h1>Services</h1>
              <a href="./Branding&Pr.php">  <li>Logo & Branding</li></a>
              <a href="./WebDevelopment.php"><li>Website Development</li></a>
                <a href="./SearchEngineOptimization.php"><li>Search Engine Optimization</li></a>
                <a href="./PayPerClick.php"><li>Pay-Per-Click</li></a>
                <a href="./SocialMediaManagement.php"><li>Social Media Marketing</li></a>
                <a href="./UIUX.php"><li>UI & UX</li></a>
            
        </ul>

        <ul class="permalinks-in-footer-ul-2" >
            <h1>Resourses</h1>
              <a href="./Blog.php">  <li>Blog</li></a>
              <a href="#"><li>Case Studies</li></a>
        </ul>

        <ul class="permalinks-in-footer-ul-3" >
            <h1>Support</h1>
              <a href="#">  <li>Contact</li></a>
              <a href="#"><li>Privacy Policy</li></a>
        </ul>
    </div>
</div>



        </section>
<center><hr class="hr-in-footer"></center>
        <div class="copyright-div-in-footer">
            <p>CretMark© 2021. All rights reserved by Cretmark</p>
            <h3><a href="#"><b style="color:black">Privacy Policy</b></a></h3>
        </div>

    </footer>
   
    <div class="cookie-container">
        <center>
        <p>
        We use cookies in this website to give you the best experience on our
        site and show you relevant ads. To find out more, read our
        <a href="privacy-policy.php">privacy policy</a> .
      </p>
      <button class="cookie-btn">
        Okay
      </button>
        </center>
     
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

 
    <script>
      $(document).ready(function () {
        $(".menu-toogle").click(function () {
          $("nav").toggleClass("active");
        });
      });

       $(document).ready(function () {
        $(".cross-icon").click(function () {
          $("nav").toggleClass("active");
        });
      });
      


      $(document).ready(function () {
        $(".link-active").click(function () {
          $("nav").toggleClass("active");
        });
      });


      window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      });
    </script>

  <script src="Js/index.js"></script>
 <script>
     
const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);



 
 </script>
<script>
    document.getElementById('indiatime').innerHTML=new Date().toLocaleString('en-US',{timeZone:'Asia/Kolkata',timeStyle:'short',hourCycle:'h24'})
    document.getElementById('singaporetime').innerHTML=new Date().toLocaleString('en-US',{timeZone:'Asia/Singapore',timeStyle:'short',hourCycle:'h24'})
    document.getElementById('canadatime').innerHTML=new Date().toLocaleString('en-US',{timeZone:'Canada/Central',timeStyle:'short',hourCycle:'h24'})
    setInterval(() => {
      document.getElementById('indiatime').innerHTML=new Date().toLocaleString('en-US',{timeZone:'Asia/Kolkata',timeStyle:'short',hourCycle:'h24'})
    document.getElementById('singaporetime').innerHTML=new Date().toLocaleString('en-US',{timeZone:'Asia/Singapore',timeStyle:'short',hourCycle:'h24'})
    document.getElementById('canadatime').innerHTML=new Date().toLocaleString('en-US',{timeZone:'Canada/Central',timeStyle:'short',hourCycle:'h24'})
    }, 10000);
</script>
 
<script>(function(w, d) { w.CollectId = "61635657e3ebf6511abe2037"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>