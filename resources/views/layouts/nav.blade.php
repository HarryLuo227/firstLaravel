<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">WebCreate</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- 訪客介面 -->
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('index') }}">首頁
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">關於</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">登入</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">註冊</a>
          </li>
          @endguest

          <!-- 使用者介面 -->
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu left" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('login') }}">個人名片</a>
              <a class="dropdown-item" href="{{ route('photos') }}">個人相簿</a>
              <a class="dropdown-item" href="{{ route('post') }}">文章專欄</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">登出
              </a>
            </div>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          @endauth

        </ul>
      </div>
    </div>
</nav>