<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Management</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/layouts/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" href="/">
          Attendance Management
        </a>
        <nav>
          <ul class="header-nav">

            {{-- 商品検索用テキスト追加する --}}

            @if (Auth::check()){
            <li class="header-nav__item">

              <form class="form" action='/item/{item_id}' method="get">
                @csrf
                <button class="header-nav__button">出品</button>
              </form>
            </li>{{-- 出品画面ページルートとコントローラー未作成 --}}


            <li class="header-nav__item">
              <a class="header-nav__link" href="/mypage">マイページ</a>
            </li>
            <li class="header-nav__item">
              <form class="form" action='/logout' method="post">
                @csrf
                <button class="header-nav__button">ログアウト</button>
              </form>
            </li>
            }@else{
            <li class="header-nav__item">
              <a class="header-nav__link" href="/login">ログイン</a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__link" href="/register">会員登録</a>
            </li>              
            }
            </li>
            @endif
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>