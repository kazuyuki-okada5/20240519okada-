@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/items/items.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
  // メッセージ機能
</div>

<div class="attendance__content">
  <nav>
          <ul class="header-nav">
            <li class="header-nav__item">

              <form class="form" action='/item/{item_id}' method="get">
                @csrf
                <button class="header-nav__button">おすすめ</button>
              </form>
            </li>{{-- トップページへ戻る未作成 --}}

            @if (Auth::check()){
            <li class="header-nav__item">

              <form class="form" action='/item/{item_id}' method="get">
                @csrf
                <button class="header-nav__button">マイリスト</button>
              </form>
            </li>{{-- マイリスト画面へ未作成 --}}

            @endif
          </ul>
        </nav>
  <div class="attendance-table">
    <table class="attendance-table__inner">
      <tr class="attendance-table__row">
        <th class="attendance-table__header">名前</th>
        <th class="attendance-table__header">開始時間</th>
        <th class="attendance-table__header">終了時間</th>
      </tr>
      <tr class="attendance-table__row">
        <td class="attendance-table__item">サンプル太郎</td>
        <td class="attendance-table__item">サンプル</td>
        <td class="attendance-table__item">サンプル</td>
      </tr>
    </table>
  </div>
</div>
@endsection