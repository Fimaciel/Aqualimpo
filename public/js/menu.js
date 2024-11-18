function menuShow() {
  let menuMobile = document.querySelector(".navbar-toggler");
  if (menuMobile.classList.contains("open")) {
    menuMobile.classList.remove("open");
    document.querySelector(".icon").src="/imagem/icon/Icon.svg";
  } else {
    menuMobile.classList.add("open");
    document.querySelector(".icon").src="/imagem/icon/close.svg";
  }
}
