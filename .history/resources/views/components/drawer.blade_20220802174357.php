<div class="header">
  <nav class="nav" id="nav">
    <ul>
      <li><a href="{{ route('index') }}">Home</a></li>
      @if(Auth::check())
      <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
      <li><a href="{{ route('my_page') }}">Mypage</a></li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
      @else
      <li><a href="{{ route('register') }}">Registration</a></li>
      <li><a href="{{ route('login') }}">Login</a></li>

      @endif
      
      
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