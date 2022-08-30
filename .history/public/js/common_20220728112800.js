function actionToggle() {
  const target = document.getElementById("menu");
  target.classList.toggle('border-cross');
  const nav = document.getElementById("nav");
  nav.classList.toggle('in');
}