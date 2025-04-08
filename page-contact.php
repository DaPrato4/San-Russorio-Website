<?php get_header() ?>
<!-- Hero Section -->
<section class="relative h-96">
  <div class="absolute inset-0 bg-black opacity-30 z-10"></div>
  <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-40 z-10"></div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Tenuta-San-Rossore.jpg" alt="Contattaci" class="absolute inset-0 w-full h-full object-cover" width="1920" height="1080" loading="eager" fetchpriority="high">
  
  <div class="relative z-20 container mx-auto px-6 h-full flex flex-col justify-center items-center text-white text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Contattaci</h1>
    <p class="text-xl md:text-2xl max-w-2xl">Siamo qui per aiutarti a pianificare il tuo soggiorno perfetto</p>
  </div>
</section>

<!-- Informazioni di Contatto e Modulo -->
<section class="py-16 bg-secondary bg-opacity-30">
  <div class="container mx-auto px-6">
    <div class="flex flex-col lg:flex-row gap-12">
      <!-- Informazioni di Contatto -->
      <div class="lg:w-1/3">
        <h2 class="text-3xl font-bold text-primary mb-6 font-serif">Contattaci</h2>
        <p class="text-gray-700 mb-8">
            <?php echo esc_attr(get_option('custom_intestazione')); ?>
        </p>
        
        <div class="space-y-6">
          <div class="flex items-start">
            <div class="text-primary mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-800 mb-1">Indirizzo</h3>
              <p class="text-gray-700">
                <?php echo esc_attr(get_option('custom_via')); ?><br>
                <?php echo esc_attr(get_option('custom_dati_indirizo')); ?><br>
                <?php echo esc_attr(get_option('custom_regione')); ?><br>
              </p>
            </div>
          </div>
          
          <div class="flex items-start">
            <div class="text-primary mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-800 mb-1">Telefono</h3>
              <p class="text-gray-700">
              <a href="tel:<?php echo esc_attr(get_option('custom_phone_1')); ?>"><?php echo esc_attr(get_option('custom_phone_1')); ?></a><br>
              <a href="tel:<?php echo esc_attr(get_option('custom_phone_2')); ?>"><?php echo esc_attr(get_option('custom_phone_2')); ?></a>
              </p>
            </div>
          </div>
          
          <div class="flex items-start">
            <div class="text-primary mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-800 mb-1">Email</h3>
              <p class="text-gray-700">
              <a href="mailto:<?php echo esc_attr(get_option('custom_email_1')); ?>"><?php echo esc_attr(get_option('custom_email_1')); ?></a><br>
              <a href="mailto:<?php echo esc_attr(get_option('custom_email_2')); ?>"><?php echo esc_attr(get_option('custom_email_2')); ?></a>
              </p>
            </div>
          </div>
          
          <div class="flex items-start">
            <div class="text-primary mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-800 mb-1">Orario di Accoglienza</h3>
              <p class="text-gray-700">
                <?php echo esc_attr(get_option('custom_orario')); ?><br>
                <?php echo esc_attr(get_option('custom_orario_infoextra')); ?><br>
              </p>
            </div>
          </div>
        </div>
        
        <div class="mt-10">
          <h3 class="font-bold text-gray-800 mb-3">Seguici</h3>
          <div class="flex space-x-4">
            <a href="/" class="text-primary hover:text-primary-dark transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
              </svg>
            </a>
            <a href="/" class="text-primary hover:text-primary-dark transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </a>
            <a href="/" class="text-primary hover:text-primary-dark transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
              </svg> 
            </a>
          </div>
        </div>
      </div>
      
      <!-- Modulo di Contatto -->
      <div class="lg:w-2/3 gap-6">
        <div class="bg-white rounded-lg shadow-lg p-8">
          <h2 class="text-2xl font-bold text-primary mb-6">Invia un Messaggio</h2>
          <?php 
            if (have_posts()) {
              while (have_posts()) {
              the_post();
          ?>


          <!-- PAGE CONTENT -->

          <section class="mt-0">

              <?php the_content() ?>


          </section>
          <?php
              }
          }
          wp_reset_postdata() ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sezione Mappa -->
<section class="py-16 bg-secondary">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-primary mb-4 font-serif">Dove Siamo</h2>
      <p class="text-gray-700 max-w-2xl mx-auto">
        Il B&B San Russorio si trova in una posizione strategica a Pisa, vicino al Parco di San Rossore e facilmente raggiungibile dalle principali attrazioni della città.
      </p>
    </div>
    
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
      <!-- Codice embed di Google Maps aggiornato per Pisa -->
      <div class="h-96 w-full">
        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1348.9987608402807!2d10.364734194734046!3d43.721998039483424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sit!2sit!4v1742376076839!5m2!1sit!2sit"
        width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
    
    <div class="mt-12 max-w-4xl mx-auto">
      <div class="bg-white rounded-lg shadow-lg p-8 border-l-4 border-primary">
        <h3 class="text-xl font-bold text-primary mb-4 font-serif">Come Arrivare</h3>
        
        <div class="space-y-6">
          <div>
            <h4 class="font-bold text-gray-800 mb-2">Da Firenze (circa 1 ora in auto)</h4>
            <ol class="list-decimal list-inside space-y-1 text-gray-700 ml-4">
              <li>Prendi l'autostrada A11 in direzione Pisa</li>
              <li>Uscita Pisa Est</li>
              <li>Segui le indicazioni per il Parco di San Rossore</li>
            </ol>
          </div>
          
          <div>
            <h4 class="font-bold text-gray-800 mb-2">Da Roma (circa 4 ore in auto)</h4>
            <ol class="list-decimal list-inside space-y-1 text-gray-700 ml-4">
              <li>Prendi l'autostrada A1 in direzione Firenze</li>
              <li>All'uscita Firenze Nord, segui le indicazioni per Pisa</li>
              <li>Una volta a Pisa, segui le indicazioni per il Parco di San Rossore</li>
            </ol>
          </div>
          
          <div>
            <h4 class="font-bold text-gray-800 mb-2">In Treno</h4>
            <p class="text-gray-700 mb-2">
              La stazione ferroviaria più vicina è Pisa Centrale, situata a pochi minuti di auto dal B&B.
            </p>
            <p class="text-gray-700">
              Da Pisa Centrale puoi prendere un taxi o un autobus per raggiungerci. Su richiesta, possiamo organizzare anche un servizio di pick-up dalla stazione, con un costo aggiuntivo.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sezione FAQ -->
<?php get_template_part('template-parts/card-faq', null, 'contatti'); ?>

<?php get_footer(); ?>