@extends('layouts.app')
@section('content')
 <!-- page Title -->
 <section id="page__title" data-aos="fade-up">
    <div class="container">
      <h2 class="page__title__text">
        Explore Our Menu
      </h2>
    </div>
  </section>
  <!-- Our Specials -->

  <!-- End Our Specials -->
  <!-- Top Dishes -->
  <section id="dishGrid" data-aos="fade-down">
    <div class="container">
      <h2 class="dishGrid__title">
        Top Dishes
      </h2>
      <div class="dishGrid__wrapper">
        @foreach($menus as $menu)
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img" width="100" height="10">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              {{$menu->name}}
            </h3>
            <h3 class="dishGrid__item__price">Rate: {{ $menu->rate }}₹</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Top Dishes {{ $menu->rate }} -->
  <!-- Breakfast Dishes -->
  <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title">
        Breakfast
      </h2>
      <div class="dishGrid__wrapper">
      @foreach($menus as $menu)
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img" width="100" height="10">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              {{$menu->name}}
            </h3>
            <h3 class="dishGrid__item__price">Rate: {{ $menu->rate }}₹</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Breakfast Dishes -->
  <!-- Lunch Dishes -->
  <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title">
        Lunch
      </h2>
      <div class="dishGrid__wrapper">
      @foreach($menus as $menu)
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img" width="100" height="10">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              {{$menu->name}}
            </h3>
            <h3 class="dishGrid__item__price">Rate: {{ $menu->rate }}₹</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Lunch Dishes -->
  <!-- Dinner Dishes -->
  <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title">
        Dinner
      </h2>
      <div class="dishGrid__wrapper">
      @foreach($menus as $menu)
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img" width="100" height="10">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              {{$menu->name}}
            </h3>
            <h3 class="dishGrid__item__price">Rate: {{ $menu->rate }}₹</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Dinner Dishes -->
@endsection