@extends('layouts.common')
@section('content')
<div class="flex__item">
  <div class="practice__card">
      <div class="card__img">
          <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="No image">
      </div>
      <div class="card__content">
          <h2 class="card__ttl">店名</h2>
          <div class="tag">
              <p class="card__tag">area名</p>
              <p class="card__tag">genre名</p>
          </div>
          <div class="card__cat">詳しくみる</div>
          <div class="heart">
            <img src="{{ asset('/image/heart.png')}}" alt="No image">
          </div>
      </div>
  </div>
  <div class="practice__card">
      <div class="card__img">
          <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
      </div>
      <div class="card__content">
          <div class="card__cat">カテゴリー</div>
          <h2 class="card__ttl">今日の朝ごはんは卵と肉を合わせたバランスの良いメニューです。</h2>
          <div class="tag">
              <p class="card__tag">#朝ごはん</p>
              <p class="card__date">2021/01/01</p>
          </div>
      </div>
  </div>
  <div class="practice__card">
      <div class="card__img">
          <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
      </div>
      <div class="card__content">
          <div class="card__cat">カテゴリー</div>
          <h2 class="card__ttl">今日の朝ごはんは卵と肉を合わせたバランスの良いメニューです。</h2>
          <div class="tag">
              <p class="card__tag">#朝ごはん</p>
              <p class="card__date">2021/01/01</p>
          </div>
      </div>
  </div>
  <div class="practice__card">
      <div class="card__img">
          <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="">
      </div>
      <div class="card__content">
          <div class="card__cat">カテゴリー</div>
          <h2 class="card__ttl">今日の朝ごはんは卵と肉を合わせたバランスの良いメニューです。</h2>
          <div class="tag">
              <p class="card__tag">#朝ごはん</p>
              <p class="card__date">2021/01/01</p>
          </div>
      </div>
  </div>
</div>

@endsection