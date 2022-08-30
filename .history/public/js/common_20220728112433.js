const target = document.getElementById("menu");
target.addEventListener('click', () => {
  target.classList.toggle('open');
  const nav = document.getElementById("nav");
  nav.classList.toggle('in');
});

function actionToggle() {
  const nav = document.getElementById("nav");
  nav.classList.toggle('in');
  const target = document.getElementById("menu");
  target.classList.toggle('open');
}