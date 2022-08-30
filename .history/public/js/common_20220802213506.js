// drawer 出し入れ
function actionToggle() {
  const hamburger = document.getElementById("menu");
  hamburger.classList.toggle('border-cross');
  const nav = document.getElementById("nav");
  nav.classList.toggle('nav__in');
  const ttl = document.getElementById("menu__ttl");
  ttl.classList.toggle('ttl__out');
}

// shop 日付のデフォルト
const today = new Date();
today.setDate(today.getDate());
const yyyy = today.getFullYear();
const mm = ("0"+(today.getMonth()+1)).slice(-2);
const dd = ("0"+today.getDate()).slice(-2);
document.getElementById("today").value = yyyy + '-' + mm + '-' + dd;

