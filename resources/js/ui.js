console.log('ui.js loaded')
window.addEventListener("load", function () {
  console.log('window loaded')
  document.getElementById("hamburger").addEventListener("click", function (e) {
    console.log('clicked')
    e.preventDefault();
    const elMoblieMenu = document.getElementById("mobile-links");
    elMoblieMenu.classList.toggle("hidden");
  });
});
