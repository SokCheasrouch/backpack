@extends('layout/layout')
@section('content')
<div class="flex-center">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
    @endif
    
    <div class="content">
        <img src="images/pizza.jpg" alt="">
        <div class="title">
        Pizza House<br />
        The North's Best Pizzas
        </div>

        <p>{{session('msg')}}</p>

        <a href="/pizzas/create">Order a pizza</a>

    </div>

</div>
@endsection
