module.exports = {
  content: [
    './**/*.php',        // Aggiungi tutti i file PHP del tuo tema
    './src/**/*.{html,js,php}',  // Aggiungi anche altri file che potrebbero contenere le classi di Tailwind
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}