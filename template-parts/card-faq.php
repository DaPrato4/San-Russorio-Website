<?php
    $pagina =$args
?>

<section class="py-16 bg-secondary bg-opacity-30">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-primary mb-4 font-serif">Domande Frequenti</h2>
      <p class="text-gray-700 max-w-2xl mx-auto">
        Trova qui le risposte alle domande più comuni sul soggiorno al B&B San Russorio
      </p>
    </div>
    
    <div class="max-w-4xl mx-auto">
      <div class="space-y-6">
        <?php
        $query_args = array(
            'post_type' => 'domanda',
            'posts_per_page' => -1,
        );
        $custom_query = new WP_Query($query_args);

        if ($custom_query->have_posts()) {
            while ($custom_query->have_posts()) {
                $custom_query->the_post();

                // Recupera i campi personalizzati con ACF
                $domanda = get_field('domanda');
                $risposta = get_field('risposta');
                if($pagina == get_field('pagina')){
                ?>
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300 border-l-2 border-primary">
                    <h3 class="text-xl font-bold text-primary mb-2 font-serif"><?php echo $domanda ?></h3>
                    <p class="text-gray-700"><?php echo $risposta ?></p>
                </div>
                <?php
                }
            }
        } else {
            echo '<p>Nessuna domanda trovata.</p>';
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>