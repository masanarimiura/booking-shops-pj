function actionToggle() {
  const hamburger = document.getElementById("menu");
  hamburger.classList.toggle('border-cross');
  const nav = document.getElementById("nav");
  nav.classList.toggle('in');
  const ttl = document.getElementById("menu");
  ttl.classList.toggle('in');
}