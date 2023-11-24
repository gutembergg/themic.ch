document.addEventListener('DOMContentLoaded', () => {
  const btnToggle = document.querySelector('.btn-toggle-mobile');
  const theNavigationWrapper = document.querySelector('.theNavigationWrapper');

  btnToggle.addEventListener('click', () => {
    theNavigationWrapper.classList.toggle('active');
    console.log('Click', theNavigationWrapper);
  });
});
