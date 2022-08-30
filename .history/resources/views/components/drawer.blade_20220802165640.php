<div class="header">
  <nav class="nav" id="nav">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="{{ route('register') }}">Registration</a></li>
      <li><a href="{{ route('register') }}">Login</a></li>
      <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
      <li><a href="{{ route('my_page') }}">Mypage</a></li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    </ul>
  </nav>
  <div onclick="actionToggle()" class="menu" id="menu">
    <div>
      <span class="menu__line--top"></span>
      <span class="menu__line--middle"></span>
      <span class="menu__line--bottom"></span>
    </div>
    <div class="menu__ttl" id="menu__ttl">
      <h1>Rese</h1>
    </div>
  </div>
</div>