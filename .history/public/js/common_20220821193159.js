// drawer 出し入れ
function actionToggle() {
  const hamburger = document.getElementById("menu");
  hamburger.classList.toggle('border-cross');
  const nav = document.getElementById("nav");
  nav.classList.toggle('nav__in');
  const ttl = document.getElementById("menu__ttl");
  ttl.classList.toggle('ttl__out');
}

// index 検索する時にエンター押さなくても自動的に検索する
function searchShops() {
  document.search_shops_form.submit();
  }

// shop 日付のデフォルト
if (document.getElementById("today")) {
  const today = new Date();
  today.setDate(today.getDate());
  const yyyy = today.getFullYear();
  const mm = ("0"+(today.getMonth()+1)).slice(-2);
  const dd = ("0"+(today.getDate())).slice(-2);
  document.getElementById("today").value = yyyy + '-' + mm + '-' + dd;
}

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

// my-page editボタンのモーダルアラート
if (document.getElementsByClassName('modal-edit')) {
  for (let i = 0; i < document.getElementsByClassName('modal-edit').length; ++i) {
    const openBtn = document.getElementsByClassName('openBtn-edit')[i];
    const closeBtn = document.getElementsByClassName('closeBtn-edit')[i];
    const modal = document.getElementsByClassName('modal-edit')[i];
    openBtn.addEventListener('click', () => {
      modal.style.display = 'block';
    })
    closeBtn.addEventListener('click', () => {
      modal.style.display = 'none';
    })
  }
}

// my-page デリートボタンのモーダルアラート
if (document.getElementsByClassName('modal-delete')) {
  for (let i = 0; i < document.getElementsByClassName('modal-delete').length; ++i) {
    const openBtn = document.getElementsByClassName('openBtn-delete')[i];
    const closeBtn = document.getElementsByClassName('closeBtn-delete')[i];
    const modal = document.getElementsByClassName('modal-delete')[i];
    openBtn.addEventListener('click', () => {
      modal.style.display = 'block';
    })
    closeBtn.addEventListener('click', () => {
      modal.style.display = 'none';
    })
  }
}

// my-page ratingのモーダルのstar
if (document.getElementsByClassName('star')) {
  const stars =  document.getElementsByClassName('star');
  
  // 星マークにマウスオーバーした時のイベント
  const starMouseover = (e) => {
    const index = Number(e.toElement.getAttribute('data-star'));
    for(let j=0; j < index; j++) {
        stars[j].textContent = '★';
    }
  }

  // 星マークからマウスが離れた時のイベント
  const starMouseout = (e) => {
    for (let j=0; j < stars.length; j++) {
        stars[j].textContent = '☆';
    }
  }

  for (let i=0; i < stars.length; i++) {
      stars[i].addEventListener('mouseover', starMouseover);
      stars[i].addEventListener('mouseout',starMouseout);

      // 星マークをクリックした時のイベント
      stars[i].addEventListener('click', e => {
          for (let j=0; j < stars.length; j++) {
              stars[j].textContent = '☆';
          }
          const index = Number(e.toElement.getAttribute('data-star'));
          for(let j=0; j<index; j++) {
              stars[j].textContent = '★';
          }
          // マウスオーバーとマウスアウトのイベント解除
          for(let j=0; j<stars.length; j++) {
              stars[j].removeEventListener('mouseover', starMouseover);
              stars[j].removeEventListener('mouseout', starMouseout);
          }

          // // 非同期通信で情報をサーバーサイドに送信する
          // let data = new URLSearchParams();
          // data.append('star',index);
          // fetch('abcde', {
          //     method:'post',
          //     body: data
          // }).then()
          // .catch();

      });
  }
}