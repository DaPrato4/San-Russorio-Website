<section class="py-16 bg-secondary">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-primary mb-4 font-serif">Cosa Dicono di Noi</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">Leggi le esperienze dei nostri ospiti che hanno scelto il B&B San
        Russorio per il loro soggiorno a Pisa.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php
    $args = array(
        'post_type' => 'recensione',
        'posts_per_page' => -1,
    );
    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) {
        while ($custom_query->have_posts()) {
            $custom_query->the_post();

            // Recupera i campi personalizzati con ACF
            $stelle = get_field('numero_stelle');
            $recensione = get_field('recensione');
            $autorei = get_field('autorei');
            $luogo = get_field('luogo');
            ?>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-2 border-primary">
                <div class="flex items-center mb-4">
                <div class="text-yellow-400 flex">
                    <?php
                    for ($i=0; $i < $stelle; $i++) {
                        ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <?php
                    }
                    ?>
                </div>
                </div>
                <p class="text-gray-600 italic mb-4">"<?php echo $recensione ?>"</p>
                <div class="font-medium">
                <p class="text-primary"><?php echo $autorei ?></p>
                <p class="text-gray-500 text-sm"><?php echo $luogo ?></p>
                </div>
            </div>
            <?php
        }
    } else {
        echo '<p>Nessuna recensione trovata.</p>';
    }
    wp_reset_postdata();
    ?>
    </div>
  </div>
</section>



