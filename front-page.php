<?php get_header() ?>
<!-- PAGE HEADER -->

<!-- Hero Section -->
<section class="relative h-screen">
  <div class="absolute inset-0 bg-black opacity-40 z-10"></div>
  <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50 z-10"></div>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/San_Russorio_B&B.jpg" alt="B&B San Russorio" class="absolute inset-0 w-full h-full object-cover" width="1920" height="1080" loading="eager" fetchpriority="high">

  <div
    class="relative z-20 container mx-auto px-6 h-full flex flex-col justify-center items-center text-white text-center">
    <h1 class="text-4xl md:text-6xl font-bold mb-4 font-serif">Benvenuti al B&B San Russorio</h1>
    <p class="text-xl md:text-2xl mb-8 max-w-2xl">Vivi l'autentica ospitalità toscana nel cuore di Pisa</p>
    <a href="/rooms"
      class="inline-block px-6 py-3 bg-primary text-white font-medium rounded-lg shadow-md transition-all duration-300 ease-in-out hover:bg-primary-dark hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 active:shadow-md focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50">
      Scopri le nostre camere
    </a>
  </div>
</section>

<!-- Sezione Chi Siamo -->
<section class="py-16 bg-secondary">
  <div class="container mx-auto px-6">
    <div class="flex flex-col md:flex-row items-center gap-12">
      <div class="md:w-1/2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Tenuta_San_Russorio_BW.jpeg" alt="Chi siamo - B&B San Russorio"
          class="rounded-lg shadow-xl w-full h-auto border-4 border-white" width="800" height="600" loading="lazy">
      </div>
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold mb-6 text-primary font-serif">La nostra storia</h2>
        <p class="text-gray-700 mb-4">
          Situato a Pisa, una città ricca di storia e cultura, il B&B San Russorio offre un rifugio accogliente e
          rilassante, ideale per chi desidera esplorare le bellezze toscane. La nostra struttura a conduzione familiare
          unisce la tradizione dell'ospitalità italiana con il comfort moderno.
        </p>
        <p class="text-gray-700 mb-6">
          Immerso in una delle zone più tranquille, nei pressi del Parco di San Rossore, il nostro edificio, risalente
          al XIX secolo, è stato restaurato con cura per preservare il suo fascino storico, arricchito da dettagli unici
          e opere d'arte locali.
        </p>
        <a href="/" class="text-primary font-medium hover:text-primary-dark transition-colors duration-300 inline-flex items-center">
          Scopri di più su di noi
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
              clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/card-highlighted-room') ?>

<!-- Sezione Recensioni -->
<?php get_template_part('template-parts/card-recensioni') ?>

<?php get_template_part('template-parts/card-member') ?>

<!-- Sezione Servizi -->
<section class="py-16 bg-secondary">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-primary mb-4">I Nostri Servizi</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">Goditi i servizi e le comodità che rendono il tuo soggiorno al B&B San
        Russorio unico.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Servizio 1: Wi-Fi Gratuito -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 text-center border-t-2 border-primary">
        <div class="text-primary mb-4 flex justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Wi‑Fi Gratuito</h3>
        <p class="text-gray-600">Resta connesso grazie alla nostra connessione internet ad alta velocità in tutta la
          struttura.</p>
      </div>

      <!-- Servizio 2: Colazione Bio -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 text-center border-t-2 border-primary">
        <div class="text-primary mb-4 flex justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h6v2H9V3z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Colazione Bio</h3>
        <p class="text-gray-600">Inizia la giornata con una colazione genuina preparata con ingredienti locali e
          prodotti biologici.</p>
      </div>

      <!-- Servizio 3: Accesso al Giardino -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 text-center border-t-2 border-primary">
        <div class="text-primary mb-4 flex justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Accesso al Giardino</h3>
        <p class="text-gray-600">Rilassati nel nostro ampio giardino, perfetto per una passeggiata o per godere della
          natura.</p>
      </div>

      <!-- Servizio 4: Servizio Concierge -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 text-center border-t-2 border-primary">
        <div class="text-primary mb-4 flex justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Servizio Concierge</h3>
        <p class="text-gray-600">Lasciati assistere dai nostri esperti per scoprire le migliori esperienze e attrazioni
          locali.</p>
      </div>
    </div>
  </div>
</section>

<!-- Sezione Posizione -->
<section class="py-16 bg-secondary">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-primary mb-4">La Nostra Posizione</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">Situato in una zona tranquilla di Pisa, a pochi minuti dal centro
        storico e vicino al Parco di San Rossore.</p>
    </div>

    <div class="flex flex-col md:flex-row items-center gap-12">
      <div class="md:w-1/2">
        <div class="bg-white p-2 rounded-lg shadow-xl border-2 border-primary">
          <div class="relative h-[300px] sm:h-[400px]"> <!-- Fixed height for mobile and larger screens -->
            <iframe 
              class="w-full h-full"
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1348.9987608402807!2d10.364734194734046!3d43.721998039483424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sit!2sit!4v1742376076839!5m2!1sit!2sit"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
      <div class="md:w-1/2">
        <h3 class="text-2xl font-bold mb-4 text-primary">Come Raggiungerci</h3>
        <p class="text-gray-700 mb-4">
          Il B&B San Russorio si trova in Viale delle Piave, Prima di San Rossore, 56100 Pisa. A soli 15 minuti dal
          centro storico e a breve distanza dal Parco di San Rossore, la nostra posizione offre un perfetto equilibrio
          tra tranquillità e accessibilità.
        </p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mr-2 flex-shrink-0" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>Viale delle Piave, Prima di San Rossore, 56100 Pisa, Italia</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mr-2 flex-shrink-0" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <span>+39 050 123 4567</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mr-2 flex-shrink-0" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <span>info@sanrussorio.com</span>
          </li>
        </ul>
        <div class="mt-6">
          <a href="/contact"
            class="inline-flex items-center bg-primary text-white px-5 py-2 rounded-md hover:bg-primary-dark hover:-translate-y-1 transition-all duration-200 ease-in-out">
            Indicazioni Stradali
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sezione Call to Action -->
<section class="py-20 bg-secondary">
  <div class="container mx-auto px-6">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6 font-serif">Pronto a Vivere l'Esperienza San Russorio?</h2>
      <p class="text-gray-700 text-lg mb-8 max-w-2xl mx-auto">Prenota il tuo soggiorno ora e scopri il fascino, il
        comfort e l'autentica ospitalità del nostro bed and breakfast.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="/rooms"
          class="bg-primary text-white px-8 py-3 rounded-md font-medium hover:bg-primary-dark transition-colors duration-200">
          Visualizza le Camere
        </a>
        <a href="/contact"
          class="bg-white border-2 border-primary text-primary px-8 py-3 rounded-md font-medium hover:bg-primary hover:text-white transition-colors duration-200">
          Contattaci
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>