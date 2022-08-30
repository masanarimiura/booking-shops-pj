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
  const boodate = document.getElementById("today");
  const inputValue = textbox.value;
  //テキストボックスの値を使って、出力するメッセージを生成する
  const output = "入力された内容は「" + inputValue + "」です。";
  //出力用のp要素にメッセージを表示
  document.getElementById("output-message").innerHTML = output;
}