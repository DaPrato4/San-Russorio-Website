<section class="py-16 bg-secondary bg-opacity-30">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 max-w-3xl mx-auto">
      <h2 class="text-3xl font-bold text-primary mb-6 font-serif">Vivi il vero comfort italiano</h2>
      <p class="text-gray-700">
        Ogni nostra camera è arredata in modo unico, valorizzando antichi elementi locali e opere d'arte, per creare un ambiente caldo e accogliente. 
        Tutte le camere dispongono di letti di alta qualità, bagno privato, aria condizionata e viste mozzafiato sul paesaggio circostante.
      </p>
    </div>
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
                $caratteristiche = get_field('caratteristiche_camera');
                $foto = get_field('copertina');
                ?>
                <div class="mb-20">
                    <div class="flex flex-col lg:flex-row bg-white rounded-lg shadow-xl overflow-hidden border-t-4 border-primary">
                        <div class="lg:w-1/2 <?php if ($pari % 2 == 0) { echo 'order-1 lg:order-2'; } ?>">
                        <div class="relative bg-gray-200 h-80 lg:h-full">
                            <img src="<?php echo $foto ?>" alt="Camera Oliva" class="absolute inset-0 w-full h-full object-cover" width="800" height="600" loading="lazy">
                        </div>
                        </div>
                        <div class="lg:w-1/2 p-8 lg:p-12 <?php if ($pari % 2 == 0) { echo 'order-2 lg:order-1'; } ?>">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-2xl font-bold text-primary font-serif"><?php echo $nome ?></h3>
                            <span class="text-primary font-bold text-xl">€<?php echo $prezzo ?> / notte</span>
                        </div>
                        <p class="text-gray-700 mb-6">
                            <?php echo $descizione ?>
                        </p>
                        <div class="mb-8">
                            <h4 class="font-bold text-gray-800 mb-3">Caratteristiche della camera:</h4>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">

                            <?php foreach($caratteristiche as $caratteristica): ?>
                                <li class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <?php echo $caratteristica; ?>
                                </li>
                            <?php endforeach; ?>

                            </ul>
                        </div>
                        <a href="/contact" class="inline-block bg-primary text-white px-6 py-3 rounded-md hover:bg-primary-dark transition-colors duration-300 shadow-md">
                            Prenota questa camera
                        </a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<p>Nessun dipendente trovato.</p>';
        }
        wp_reset_postdata();
        ?>
    </div>
</section>
