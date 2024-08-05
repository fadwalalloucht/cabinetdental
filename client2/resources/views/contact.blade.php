<!DOCTYPE html>
<html lang="fr">

<head>
   @include('header')
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nos Services</title>
</head>

<body>

   <section class="contact-section">
      <div class="contact-header">
         <h2>Contactez-Nous à Tout Moment <br>Nous Sommes Disponibles 24h/7j</h2>
         <p>Vous avez besoin d'aide ou de renseignements supplémentaires ?<br> Notre équipe disponible est prête à
            répondre à toutes vos questions. N'hésitez pas à nous contacter dès maintenant !</p>
      </div>

      <div class="contact-content">
         <div class="contact-form">
            <h3>Laissez-nous un message</h3>
            <p>Nous sommes là pour répondre à toutes vos questions. Remplissez le formulaire ci-dessous, et nous vous
               contacterons rapidement.</p>
            <form action="#" method="post">
               <label for="name">Entrez votre nom complet</label>
               <input type="text" id="name" name="name" required>

               <label for="phone">Entrez votre numéro de téléphone</label>
               <input type="tel" id="phone" name="phone" required>

               <label for="email">Entrez votre adresse e-mail</label>
               <input type="email" id="email" name="email" required>

               <label for="message">Saisissez votre message ici</label>
               <textarea id="message" name="message" rows="5" required></textarea>

               <button type="submit">Envoyer</button>
            </form>
         </div>

         <div class="contact-content">
            <div class="contact-details">
               <div class="contact-item">
                  <div class="icon-container">
                     <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="contact-text">
                     <h4>Adresse</h4>
                     <p>Plaza Toro rue rgayae Qtr.Drawa(Tanger)</p>
                  </div>
               </div>
               <div class="contact-item">
                  <div class="icon-container">
                     <i class="fas fa-phone-alt"></i>
                  </div>
                  <div class="contact-text">
                     <h4>Appelez-nous</h4>
                     <p>05.39.35.67.84
                     </p>
                     <p>06.66.600.755</p>
                  </div>
               </div>
               <div class="contact-item">
                  <div class="icon-container">
                     <i class="fas fa-envelope"></i>
                  </div>
                  <div class="contact-text">
                     <h4>Email</h4>
                     <p>drasmaebakkali@hotmail.com</p>
                  </div>
               </div>
            </div>

            <div class="contact-social">
               <h3>Restons Connectés</h3>
               <p>Découvrez notre emplacement, suivez-nous sur les réseaux sociaux et consultez nos heures d'ouverture. Restons en contact!</p>
               
               <div class="opening-hours">
                  <h4>Horaires d'Ouverture</h4>
                  <p>Lundi - Vendredi: 09h00 à 20h00</p>
                  <p>Samedi: 09h00 à 14h00</p>
              </div>


               <div class="social-links">
                   <a href="https://www.facebook.com/profile.php?id=100087385364699&mibextid=LQQJ4d" target="_blank" class="social-item">
                       <i class="fab fa-facebook-f"></i>
                       <span>Facebook</span>
                   </a>
                   <a href="https://www.google.com/maps/place/Centre+Dentaire+Dr.+Asmae+El+Bakkali+Ettaheri/@35.7607687,-5.7955742,15z/data=!4m6!3m5!1s0xd0b812292c7993b:0xdf45bc0d9a4a0f20!8m2!3d35.7607687!4d-5.7955742!16s%2Fg%2F11tt2k3dh2?hl=fr-ma&entry=ttu" target="_blank" class="social-item">
                       <i class="fab fa-google"></i>
                       <span>Google</span>
                   </a>
                   <a href="https://www.instagram.com/drasmaebakkali" target="_blank" class="social-item">
                       <i class="fab fa-instagram"></i>
                       <span>Instagram</span>
                   </a>
               </div>
           
               
           </div>
           
         </div>

   </section>

   @include('footer')

</body>

</html>