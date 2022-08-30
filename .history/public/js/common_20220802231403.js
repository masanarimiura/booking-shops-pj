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
  const output = inputValue + "人";
      //出力用のp要素にメッセージを表示
      document.getElementById("output-message").innerHTML = output;
  document.getElementById("check-booking-number").innerHTML = output;


  




}