// drawer 出し入れ
function actionToggle() {
  const hamburger = document.getElementById("menu");
  hamburger.classList.toggle('border-cross');
  const nav = document.getElementById("nav");
  nav.classList.toggle('nav__in');
  const ttl = document.getElementById("menu__ttl");
  ttl.classList.toggle('ttl__out');
}

// my-page デリートボタンのモーダルアラート
const openBtn = document.getElementById('openBtn');
const closeBtn = document.getElementById('closeBtn');
const modal = document.getElementById('modal');
openBtn.addEventListener('click', () => {
  modal.style.display = 'block';
})
closeBtn.addEventListener('click', () => {
  modal.style.display = 'none';
})
window.addEventListener('click', (e) => {
  if (!e.target.closest('.modal__content-inner') && e.target.id !== "openBtn") {
    modal.style.display = 'none';
  }
});

// index 検索する時にエンター押さなくても自動的に検索する
function searchShops() {
  document.search_shops_form.submit();
  }

// shop 日付のデフォルト
const today = new Date();
today.setDate(today.getDate());
const yyyy = today.getFullYear();
const mm = ("0"+(today.getMonth()+1)).slice(-2);
const dd = ("0"+today.getDate()).slice(-2);
document.getElementById("today").value = yyyy + '-' + mm + '-' + dd;

// shop 予約内容の確認画面に入力した内容がすぐに反映される
function recheckBooking() {
  const bookingDate = document.getElementById("today");
  const inputDate = bookingDate.value;
  document.getElementById("check-booking-date").innerHTML = inputDate;
  
  const bookingTime = document.getElementById("booking-time");
  const inputTime = bookingTime.value;
  document.getElementById("check-booking-time").innerHTML = inputTime;

  const bookingNumber = document.getElementById("booking-number");
  const inputNumber = bookingNumber.value;
  const outputNumber = inputNumber + "人";
  document.getElementById("check-booking-number").innerHTML = outputNumber;
}

