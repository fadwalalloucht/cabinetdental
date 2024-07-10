<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
   @include('header')
</head>

<body>
   <!-- start banner Area -->
   <section class="banner-area relative about-banner" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
         <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
               <h1 class="text-white">
                  Contact nous
               </h1>
               <p class="text-white link-nav"><a href="index.html">Acceuil </a> <span
                     class="lnr lnr-arrow-right"></span> <a href="contact.html"> Contact </a></p>
            </div>
         </div>
      </div>
   </section>
   <!-- End banner Area -->

   <!-- Start contact-page Area -->
   <section class="contact-page-area section-gap">
      <div class="container">
         <div class="row">
            <iframe class="map-wrap" style="width:100%; height: 445px;"
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.594389185703!2d-5.798149124698097!3d35.76077302560114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b812292c7993b%3A0xdf45bc0d9a4a0f20!2sCentre%20Dentaire%20Dr.%20Asmae%20El%20Bakkali%20Ettaheri!5e0!3m2!1sen!2sma!4v1719016442370!5m2!1sen!2sma"
               width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="col-lg-4 d-flex flex-column address-wrap">
               <div class="single-contact-address d-flex flex-row">
                  <div class="icon">
                     <span class="lnr lnr-home"></span>
                  </div>
                  <div class="contact-details">
                     <h5>Plaza Toro Rue Rgayae Qrt.Drawa Tanger</h5>
                     <p>
                        En face pharmacie place des arènes
                     </p>
                  </div>
               </div>
               <div class="single-contact-address d-flex flex-row">
                  <div class="icon">
                     <span class="lnr lnr-phone-handset"></span>
                  </div>
                  <div class="contact-details">
                     <h5>06.66.600.755</h5>
                     <h5>05.39.35.67.84</h5>
                     <p>Lundi à Vendredi 9:00 to 20:00</p>
                  </div>
               </div>
               <div class="single-contact-address d-flex flex-row">
                  <div class="icon">
                     <span class="lnr lnr-envelope"></span>
                  </div>
                  <div class="contact-details">
                     <h5>support@colorlib.com</h5>
                     <p>Envoyer un message!</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-8">
               <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
                  <div class="row">
                     <div class="col-lg-6 form-group">
                        <input name="name" placeholder="Nom & Prénom" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control"
                           required="" type="text">

                        <input name="email" placeholder="Adress Email"
                           pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control"
                           required="" type="email">

                        <input name="subject" placeholder="Sujet" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control"
                           required="" type="text">
                     </div>
                     <div class="col-lg-6 form-group">
                        <textarea class="common-textarea form-control" name="message" placeholder="Message"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
                     </div>
                     <div class="col-lg-12">
                        <div class="alert-msg" style="text-align: left;"></div>
                        <button class="genric-btn primary circle" style="float: right;">Envoyer message</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- End contact-page Area -->
   <br>
</body>
@include('footer')

</html>