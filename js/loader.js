window.addEventListener('load', function() {
  var loaderContainer = document.querySelector('.loaderContainer');
  loaderContainer.classList.add('fadeOut');

  setTimeout(function() {
    loaderContainer.style.display = 'none';
  }, 1000);
});
