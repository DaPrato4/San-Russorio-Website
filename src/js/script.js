
// Mobile menu toggle
document.addEventListener('DOMContentLoaded', () => {
  const mobileMenuButton = document.querySelector('button.md\\:hidden');
  if (mobileMenuButton) {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuButton.addEventListener('click', () => {
      if (mobileMenu) {
        mobileMenu.classList.toggle('hidden');
      }
    });
  }
});
