window.onload = function () {
  let preloader = document.getElementById("preloader");
  preloader.classList.add("hide");
  setTimeout(function () {
    preloader.style.display = "none";
  }, 2000);
};
