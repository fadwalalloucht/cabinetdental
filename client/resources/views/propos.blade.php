<!DOCTYPE html>
<html lang="fr">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @include('header')

</head>

<body>


   <section class="test-slider bg-white">
      <div class="test-slider-item">
         <div class="test-container">
            <div class="title test-text">
               <h1>Centre Dentaire Dr. Asmae El Bakkali Ettaheri<br> Votre Destination pour une Santé Dentaire
                  Exceptionnelle à Tanger</h1>
               <p>Centre Dentaire Dr. Asmae El Bakkali Ettaheri à Tanger <br>offre des soins dentaires exceptionnels de
                  la prévention à la chirurgie<br> dans un environnement chaleureux et accueillant.<br></p>
            </div>
            <div class="test-image-container">
               <img src="img/asmae04.jpeg" alt="Image 1" class="gallery-image">
            </div>
         </div>
      </div>
   </section>








   <section class="cabinet-section">
      <div class="content">
         <div class="text">
            <h1 class="title">
               Centre Dentaire<br> Dr. Asmae El Bakkali Ettaheri<br>
               Votre Destination pour un Sourire Parfait
            </h1>
            <p class="description">
               Centre Dentaire Dr. Asmae El Bakkali Ettaheri à Tanger<br><br>
               Notre centre ultramoderne, situé au cœur de Tanger, est doté des dernières technologies dentaires. Nos
               dentistes experts spécialisés en parodontologie, orthodontie, implantologie et chirurgie esthétique vous
               assurent des soins complets, de la prévention à la chirurgie. Chez nous, l'excellence est notre
               norme.<br><br>
               Centre Dentaire Dr. Asmae El Bakkali Ettaheri : Votre Partenaire de Confiance pour un Sourire Éclatant.
               Nous nous engageons à surpasser vos attentes avec des soins de haute qualité, une disponibilité constante
               et une écoute attentive. Notre approche préventive comprend des conseils personnalisés pour préserver
               votre capital dentaire et la beauté naturelle de votre sourire.<br><br>
               N'hésitez pas à nous contacter pour toute question ou information. Chez Centre Dentaire Dr. Asmae El
               Bakkali Ettaheri à Tanger, notre équipe attend avec impatience de vous offrir des solutions dentaires
               adaptées à vos besoins.
            </p>
         </div>
         <div class="image">
            <img src="img/cabinet.jpg" alt="Image du cabinet">
         </div>
      </div>
   </section>

   <section class="doctor-section">
      <div class="doctor-content">
         <div class="doctor-text">
            <h2 class="doctor-title">Rencontrez Notre Dentiste Expert :
               <br>Dr. Asmae El Bakkali Ettaheri
            </h2>
            <p class="doctor-description">
               Dr. Asmae El Bakkali Ettaheri est une experte reconnue dans le domaine de la dentisterie, avec plusieurs
               années d'expérience dans le traitement de diverses pathologies dentaires.<br><br>
               Passionnée par l'innovation, elle se spécialise en parodontologie, orthodontie, et chirurgie esthétique.
               Elle est connue pour sa capacité à fournir des soins de qualité tout en mettant l'accent sur le confort
               et la satisfaction de ses patients.<br><br>
               Sa formation continue et son engagement envers l'excellence font d'elle une référence incontournable dans
               le domaine de la dentisterie.
            </p>
         </div>
         <div class="doctor-image">
            <img src="img/asmae14.jpeg" alt="Dr. Asmae El Bakkali Ettaheri">
         </div>
      </div>
   </section>

   <section class="gallery-section">
      <h2>Découvrez notre espace</h2>
      <p>Bienvenue dans notre galerie : sourires éclatants, technologies avancées et expertise dentaire.</p>
      <div class="gallery">
         <div class="gallery-item">
            <img src="img/cabinet.jpeg" alt="Image 1">
         </div>
         <div class="gallery-item">
            <img src="img/img1.jpeg" alt="Image 2">
         </div>
         <div class="gallery-item">
            <img src="img/img2.jpeg" alt="Image 3">
         </div>
         <div class="gallery-item">
            <img src="img/img3.jpeg" alt="Image 4">
         </div>
         <div class="gallery-item">
            <img src="img/img5.jpeg" alt="Image 5">
         </div>
      </div>
   </section>



   <section class="appointment-section">
      <div class="container">
         <h2 class="section-title">Un Sourire à Portée de Clic</h2>
         <p class="section-description">Réservez dès maintenant pour un sourire éclatant. Notre équipe experte vous
            attend.</p>
         <div class="section-content">
            <div class="appointment-option">
               <i class="fas fa-calendar-alt icon"></i>
               <h3>Rendez-vous Sourire
                  Radieux</h3>
               <p>Réservez dès maintenant pour un sourire éclatant.
                  Notre équipe experte vous attend.</p>
               <a href="/contact" class="btn btn-btn">Prendre Rendez-vous</a>
            </div>
            <div class="appointment-option">
               <i class="fas fa-stethoscope icon"></i>
               <h3>Réponses à Toutes Vos Questions</h3>
               <p>Notre équipe est là pour vous aider. Posez-nous vos questions.</p>
               <a href="https://wa.me/1234567890" class="btn btn-btn">Poser une Question</a>
            </div>
            <div class="appointment-option">
               <i class="fas fa-map-marker-alt icon"></i>
               <h3>Emplacement</h3>
               <p>Trouvez facilement notre centre dentaire.
                  Votre sourire est plus proche que vous ne le pensez.</p>
               <a href="https://www.google.com/maps/place/Centre+Dentaire+Dr.+Asmae+El+Bakkali+Ettaheri/@35.7607687,-5.7955742,15z/data=!4m6!3m5!1s0xd0b812292c7993b:0xdf45bc0d9a4a0f20!8m2!3d35.7607687!4d-5.7955742!16s%2Fg%2F11tt2k3dh2?hl=fr-ma&entry=ttu" class="btn btn-btn">Trouver Notre Emplacement</a>
            </div>
         </div>
      </div>
   </section>




   @include('footer')
</body>

</html>