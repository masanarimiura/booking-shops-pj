// drawerメニュー
function actionToggle() {
  const hamburger = document.getElementById("menu");
  hamburger.classList.toggle('border-cross');
  const nav = document.getElementById("nav");
  nav.classList.toggle('nav__in');
  const ttl = document.getElementById("menu__ttl");
  ttl.classList.toggle('ttl__out');
}

