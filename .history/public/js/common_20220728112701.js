function actionToggle() {
  const target = document.getElementById("menu");
  target.classList.toggle('border-');
  const nav = document.getElementById("nav");
  nav.classList.toggle('in');

}