<?php get_header(); ?>
<!-- Sezione Hero -->
<section class="relative h-96">
  <div class="absolute inset-0 bg-black opacity-40 z-10"></div>
  <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50 z-10"></div>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Camere_Hero.jpg" alt="Le Camere" class="absolute inset-0 w-full h-full object-cover" width="1920" height="1080" loading="eager" fetchpriority="high">
  
  <div class="relative z-20 container mx-auto px-6 h-full flex flex-col justify-center items-center text-white text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4 font-serif">Le Camere</h1>
    <p class="text-xl md:text-2xl max-w-2xl">Scopri il comfort e l'eleganza delle nostre sistemazioni uniche</p>
  </div>
</section>

<!-- Sezione Camere -->
<?php get_template_part('template-parts/card-room') ?>

<!-- Sezione Servizi Extra -->
<section class="py-16 bg-secondary bg-opacity-30">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-primary mb-4 font-serif">Servizi Extra</h2>
      <p class="text-gray-700">Scopri i servizi aggiuntivi che rendono il tuo soggiorno ancora più speciale al B&B San Russorio</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white rounded-lg shadow-xl p-6 text-center hover:shadow-2xl transition-shadow duration-300 border-b-2 border-primary">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="4" width="20" height="16" rx="2"/>
          <path d="M6 8h12"/>
          <path d="M12 8v12"/>
          <path d="M6 12h3"/>
          <path d="M15 12h3"/>
          <path d="M6 16h3"/>
          <path d="M15 16h3"/>
        </svg>
        <h4 class="text-xl font-bold text-primary mt-4 font-serif">Parcheggio Privato</h4>
        <p class="text-gray-700 mt-2">Ampio parcheggio gratuito per tutti gli ospiti.</p>
      </div>
      <div class="bg-white rounded-lg shadow-xl p-6 text-center hover:shadow-2xl transition-shadow duration-300 border-b-2 border-primary">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12.55a11 11 0 0 1 14.08 0" />
          <path d="M1.42 9a16 16 0 0 1 21.16 0" />
          <path d="M8.53 16.11a6 6 0 0 1 6.95 0" />
          <circle cx="12" cy="21" r="1" />
        </svg>
        <h4 class="text-xl font-bold text-primary mt-4 font-serif">Wi-Fi Veloce</h4>
        <p class="text-gray-700 mt-2">Connessione internet ad alta velocità in tutta la struttura.</p>
      </div>
      <div class="bg-white rounded-lg shadow-xl p-6 text-center hover:shadow-2xl transition-shadow duration-300 border-b-2 border-primary">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 18v-6a9 9 0 0 1 18 0v6"/>
          <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/>
          <rect x="8" y="12" width="8" height="8" rx="1"/>
          <path d="M12 12v8"/>
          <path d="M8 16h8"/>
        </svg>
        <h4 class="text-xl font-bold text-primary mt-4 font-serif">Area Relax</h4>
        <p class="text-gray-700 mt-2">Rilassati nel nostro giardino e nelle aree comuni accoglienti.</p>
      </div>
    </div>
  </div>
</section>

<!-- Sezione Informazioni Aggiuntive -->
<section class="py-16 bg-secondary">
  <div class="container mx-auto px-6">
    <div class="max-w-4xl mx-auto">
      <div class="bg-white rounded-lg shadow-xl p-8 border-l-4 border-primary">
        <h2 class="text-2xl font-bold text-primary mb-6 font-serif">Informazioni Utili</h2>
        
        <div class="space-y-6">
          <div>
            <h3 class="font-bold text-gray-800 mb-2">Orari</h3>
            <ul class="space-y-2 text-gray-700">
              <li class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
                <span><strong>Check-in:</strong> Dalle 14:00 alle 20:00 (contattaci per arrivi tardivi)</span>
              </li>
              <li class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
                <span><strong>Check-out:</strong> Entro le 11:00</span>
              </li>
              <li class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
                <span><strong>Colazione:</strong> Dalle 7:30 alle 10:00</span>
              </li>
            </ul>
          </div>
          
          <div>
            <h3 class="font-bold text-gray-800 mb-2">Pagamento</h3>
            <ul class="space-y-2 text-gray-700">
              <li class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                  <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                </svg>
                <span><strong>Metodi di pagamento accettati:</strong> Contanti, Carte di Credito (Visa, MasterCard, American Express), Bonifico Bancario</span>
              </li>
              <li class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                  <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9M4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                </svg>
                <span><strong>Deposito:</strong> È richiesto un deposito del 30% per garantire la prenotazione.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sezione FAQ -->
<section class="py-16">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-primary mb-4 font-serif">Domande Frequenti</h2>
      <p class="text-gray-700 max-w-2xl mx-auto">Trova qui le risposte alle domande più comuni sulle nostre camere</p>
    </div>
    
    <div class="max-w-3xl mx-auto space-y-6">
      <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 border-l-2 border-primary">
        <h3 class="text-xl font-bold text-primary mb-2 font-serif">Posso richiedere un letto aggiuntivo?</h3>
        <p class="text-gray-700">Sì, è possibile richiedere un letto aggiuntivo o una culla in alcune delle nostre camere, con un piccolo supplemento. Ti preghiamo di contattarci in anticipo per verificare la disponibilità.</p>
      </div>
      
      <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 border-l-2 border-primary">
        <h3 class="text-xl font-bold text-primary mb-2 font-serif">Le camere sono insonorizzate?</h3>
        <p class="text-gray-700">Tutte le nostre camere sono dotate di un buon isolamento acustico per garantire il massimo comfort e tranquillità durante il tuo soggiorno.</p>
      </div>
      
      <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 border-l-2 border-primary">
        <h3 class="text-xl font-bold text-primary mb-2 font-serif">È possibile richiedere il servizio in camera?</h3>
        <p class="text-gray-700">Offriamo un servizio in camera limitato per la colazione, su richiesta e con un piccolo supplemento. Per altre esigenze, non esitare a contattare il nostro staff.</p>
      </div>
    </div>
  </div>
</section>

<div class="text-center py-16">
  <a href="/contact" class="inline-block bg-primary text-white px-8 py-4 rounded-md hover:bg-primary-dark transition-colors duration-300 shadow-md font-medium text-lg">
    Prenota il tuo soggiorno ora
  </a>
</div>

<?php get_footer(); ?>