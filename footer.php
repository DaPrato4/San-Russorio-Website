<?php wp_footer(); ?>
  <!-- Footer -->
  <footer class="bg-primary-dark text-white py-12">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Colonna 1: Logo e descrizione -->
        <div>
          <a href="/">
            <!-- Logo San Russorio B&B -->
            <!-- <img src="./src/assets/Logo_San_Russorio.png" alt="San Russorio B&B" class="h-10 w-auto mb-4 rounded-lg cursor-pointer transition-transform duration-200 hover:scale-95"> -->
            <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="San Russorio B&B" class="h-10 w-auto mb-4 rounded-lg cursor-pointer transition-transform duration-200 hover:scale-95">';
            ?>
          </a>
          <p class="text-gray-400 mb-4">
            Vivi l'autentica ospitalità italiana nel nostro incantevole bed and breakfast, situato in una posizione
            strategica a Pisa, dove storia, cultura e natura si incontrano. Scopri la nostra struttura, leggi le
            recensioni degli ospiti e conosci il nostro team dedicato!
          </p>
          <div class="flex space-x-4">
            <a href="/" class="text-gray-400 hover:text-white transition-colors">
              <!-- Icona Facebook -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
              </svg>
            </a>
            <a href="/" class="text-gray-400 hover:text-white transition-colors">
              <!-- Icona Instagram -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
              </svg>
            </a>
            <a href="/" class="text-gray-400 hover:text-white transition-colors">
              <!-- Icona TikTok -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
              </svg>              
            </a>
          </div>
        </div>

        <!-- Colonna 2: Link Utili -->
        <div>
          <h3 class="text-white text-lg font-bold mb-4">Link Utili</h3>
          <ul class="space-y-2">
            <li>
              <a href="/" class="text-gray-400 hover:text-white transition-colors">Home</a>
            </li>
            <li>
              <a href="/rooms" class="text-gray-400 hover:text-white transition-colors">Le Camere</a>
            </li>
            <li>
              <a href="/contact" class="text-gray-400 hover:text-white transition-colors">Contattaci</a>
            </li>
            <li>
              <a href="/" class="text-gray-400 hover:text-white transition-colors">Privacy</a>
            </li>
            <li>
              <a href="/" class="text-gray-400 hover:text-white transition-colors">Termini e Condizioni</a>
            </li>
          </ul>
        </div>

        <!-- Colonna 3: Contatti -->
        <div>
          <h3 class="text-white text-lg font-bold mb-4">Contattaci</h3>
          <ul class="space-y-2">
            <li>
              <a href="https://goo.gl/maps/YOUR_MAPS_LINK" class="flex items-center text-gray-400 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Viale delle Piave, Prima di San Rossore, 56128 Pisa, Italia
              </a>
            </li>
            <li>
              <a href="tel:<?php echo esc_attr(get_option('custom_phone_1')); ?>" class="flex items-center text-gray-400 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <?php echo esc_attr(get_option('custom_phone_1')); ?>
              </a>
            </li>
            <li>
              <a href="mailto:<?php echo esc_attr(get_option('custom_email_1')); ?>" class="flex items-center text-gray-400 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <?php echo esc_attr(get_option('custom_email_1')); ?>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="border-t border-gray-700 mt-10 pt-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <p class="text-gray-400 text-sm mb-4 md:mb-0">
            &copy; 2025 San Russorio B&B. Tutti i diritti riservati.
          </p>
          <div class="flex space-x-4">
            <a href="/" class="text-gray-400 hover:text-white transition-colors text-sm">Privacy</a>
            <a href="/" class="text-gray-400 hover:text-white transition-colors text-sm">Termini di Servizio</a>
            <a href="/" class="text-gray-400 hover:text-white transition-colors text-sm">Cookie</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</main>
</body>

</html>