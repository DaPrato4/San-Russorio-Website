// Mobile menu toggle
document.addEventListener('DOMContentLoaded', () => {
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  console.log("pagina caricata")
  console.log(mobileMenuButton);
  if (mobileMenuButton) {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuButton.addEventListener('click', () => {
      if (mobileMenu) {
        mobileMenu.classList.toggle('hidden');
      }
    });
  }
});