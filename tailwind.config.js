module.exports = {
  content: [
    './**/*.php',        // Aggiungi tutti i file PHP del tuo tema
    './src/**/*.{html,js,php}',  // Aggiungi anche altri file che potrebbero contenere le classi di Tailwind
  ],
  theme: {
    extend: {
      colors: {
        primary: '#8B4513',
        'primary-dark': '#6B3000',
        secondary: '#F5F0E8',
      },
      fontFamily: {
        sans: ['Nunito', 'sans-serif'],
        serif: ['Playfair Display', 'serif'],
      },
    },
  },
  plugins: [],
}