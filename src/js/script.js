import Swup from 'swup';

const swup = new Swup({
    containers: ['#swup'],
    animationSelector: '[class*="transition-"]',
    cache: true,
    animateHistoryBrowsing: false,
    animationPhase: 250
});

function initMobileMenu() {
  const mobileMenuButton = document.querySelector('#mobile-menu-button');
  const mobileMenu = document.querySelector('#mobile-menu');

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.onclick = null;

    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  }
}

// Prima inizializzazione
document.addEventListener('DOMContentLoaded', initMobileMenu);
swup.hooks.on('page:view', initMobileMenu);