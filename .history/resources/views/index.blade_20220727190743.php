<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>advance_test</title>
  <style>
    html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}
body {
    line-height:1;
}
article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
    display:block;
}
nav ul {
    list-style:none;
}
blockquote, q {
    quotes:none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}
a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}
/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}
/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000;
    font-style:italic;
    font-weight:bold;
}
del {
    text-decoration: line-through;
}
abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}
table {
    border-collapse:collapse;
    border-spacing:0;
}
/* change border colour to suit your needs */
hr {
    display:block;
    height:1px;
    border:0;  
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}
input, select {
    vertical-align:middle;
}
/* ここまでreset.css */

  </style>
</head>

<body>
  <div class="box_con">
    <h2>お問い合わせ</h2>
    @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li class="error">{{$error}}</li>
      @endforeach
    </ul>
    @endif
    <form action="/" method="POST" class="h-adr">
      <span class="p-country-name" style="display:none;">Japan</span>
      <table>
        @csrf
        <tr>
          <th>お名前<span >※</span></th>
          <td>
            <input type="text" name="last_name" value="{{ old('last_name') }}" id="last_name" size="100" maxlength="100">
            <p class="example">例）山田</p>
            <p class="notError" id="last_name_error">※姓を入力してください</p>
          </td>
          <td>
            <input type="text" name="first_name" value="{{ old('first_name') }}" id="first_name" size="100" maxlength="100">
            <p class="example">例）太郎</p>
            <p class="notError" id="first_name_error">※名を入力してください</p>
          </td>
        </tr>
        <tr>
          <th>性別<span >※</span></th>
          <td colspan="2">
            <input type="radio" name="gender" value="男性" checked class="check-box">男性
            <input type="radio" name="gender" value="女性" class="check-box">女性
          </td>
        </tr>
        <tr>
          <th>メールアドレス<span >※</span></th>
          <td colspan="2">
            <input type="email" name="email" value="{{ old('email') }}" id="email" size="100" maxlength="100">
            <p class="example">例）test@example.com</p>
            <p class="notError" id="email_error">※メールアドレスを正しく入力してください</p>
          </td>
        </tr>
        <tr>
          <th>郵便番号<span>※</span></th>
          <td colspan="2" class="postcode-box">
            <div>
              <span>〒</span><input type="text" name="postcode" value="{{ old('postcode') }}" class="postcode-box-input p-postal-code" size="8" maxlength="8" id="postcode">
            </div>
            <p class="example">例）123-4567</p>
            <p class="notError" id="postcode_error">※郵便番号を8字以内で正しく入力してください</p>
          </td>
        </tr>
        <tr>
          <th>住所<span >※</span></th>
          <td colspan="2">
            <input type="text" name="address" value="{{ old('address') }}" class="p-region p-locality p-street-address p-extended-address" id="address" size="100" maxlength="100">
            <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
            <p class="notError" id="address_error">※住所を正しく入力してください</p>
          </td>
        </tr>
        <tr>
          <th>建物名</th>
          <td colspan="2">
            <input type="text" name="building_name" value="{{ old('building_name') }}" id="building_name" size="100" maxlength="100">
            <p class="example">例)千駄ヶ谷マンション101</p>
            <p class="notError" id="building_name_error">※建物名を正しく入力してください</p>
          </td>
        </tr>
        <tr>
          <th>ご意見<span >※</span></th>
          <td colspan="2">
            <input type="text" name="opinion" value="{{ old('opinion') }}" class="opinion" id="opinion" size="200" maxlength="200">
            <p class="notError" id="opinion_error">※ご意見を120字以内で入力してください</p>
          </td>
        </tr>
      </table>
      <div class="submit-box">
        <input type="submit" value="確認" class="submit-btn">
      </div>
    </form>
  </div>


<script>
  
</script>
</body>
</html>