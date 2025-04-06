<section class="py-16 bg-secondary bg-opacity-30">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-primary mb-4 font-serif">Camere in Evidenza</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">Scopri le nostre camere, ognuna pensata per offrire comfort, stile e un
        tocco autentico della tradizione toscana.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php
    $args = array(
        'post_type' => 'camera',
        'posts_per_page' => -1,
    );
    $camere_query = new WP_Query($args);

    if ($camere_query->have_posts()) {
        $pari = 0;
        while ($camere_query->have_posts()) {
            $camere_query->the_post();
            $pari++;

            // Recupera i campi personalizzati con ACF
            $nome = get_field('nome');
            $prezzo = get_field('prezzo');
            $descizione = get_field('breve_descrizione');
            $foto = get_field('copertina');
            $inevidenza = get_field('in_evidenza');

            if($inevidenza){
            ?>
                <div class="bg-white rounded-lg shadow-xl overflow-hidden transition-transform duration-300 hover:-translate-y-2 border-t-4 border-primary">
                    <div class="relative bg-gray-200 w-full h-64">
                    <img src="<?php echo $foto; ?>" alt="Camera Oliva" class="w-full h-64 object-cover" width="600" height="400" loading="lazy">
                    </div>
                    <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-2 font-serif"><?php echo $nome; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $descizione; ?></p>
                    <div class="flex justify-between items-center">
                        <span class="text-primary font-bold">€<?php echo $prezzo; ?> / notte</span>
                        <a href="/rooms"
                        class="inline-block px-4 py-2 bg-primary text-white font-medium rounded-lg shadow-md hover:bg-primary-dark transition-colors duration-300">Dettagli</a>
                    </div>
                    </div>
                </div>
                <?php
            }
        }
    } else {
        echo '<p>Nessun dipendente trovato.</p>';
    }
    wp_reset_postdata();
    ?>
    <div class="text-center mt-10">
        <a href="/rooms" class="inline-flex items-center text-primary font-medium hover:text-primary-dark transition-colors duration-300">
            Visualizza tutte le camere
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd"
            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
            clip-rule="evenodd" />
        </svg>
      </a>
    </div>
  </div>
</section>



