const toggleButton = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');
const yearField = document.querySelector('#year');

if (toggleButton && navLinks) {
  toggleButton.addEventListener('click', () => {
    const isOpen = navLinks.classList.toggle('open');
    toggleButton.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  });

  navLinks.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      navLinks.classList.remove('open');
      toggleButton.setAttribute('aria-expanded', 'false');
    });
  });
}

if (yearField) {
  yearField.textContent = `© ${new Date().getFullYear()} Elysian Montessori School. All rights reserved.`;
}
