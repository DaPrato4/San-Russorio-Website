<section class="py-16">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-primary mb-4">Il Nostro Team</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">Conosci le persone che rendono speciale il nostro B&B, sempre pronte a
        offrirti un servizio eccellente.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php
        $args = array(
            'post_type' => 'membro',
            'posts_per_page' => -1,
        );
        $dipendenti_query = new WP_Query($args);

        if ($dipendenti_query->have_posts()) {
            while ($dipendenti_query->have_posts()) {
                $dipendenti_query->the_post();

                // Recupera i campi personalizzati con ACF
                $nome = get_field('nome');
                $immagine = get_field('foto_membro');
                $descrizione = get_field('breve_descrizione');
                ?>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 text-center border-b-2 border-primary">
                    <img 
                        src="<?php echo $immagine; ?>" 
                        alt="<?php echo $nome; ?>"
                        class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-2 border-primary"
                    >
                    <h3 class="text-xl font-bold text-primary font-serif"><?php echo $nome; ?></h3>
                    <p class="text-gray-600"><?php echo $descrizione; ?></p>
                </div>
                <?php
            }
        } else {
            echo '<p>Nessun dipendente trovato.</p>';
        }
        wp_reset_postdata();
        ?>
    </div>
  </div>
</section>