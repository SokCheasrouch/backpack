@extends('layout.layout')
@section('content')
<div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Order for {{$pizza->name}}
                </div>
                <p>Type - {{$pizza->type}}</p>
                <p>Base - {{$pizza->base}}</p>
                <p>Price - {{$pizza->price}}</p>
                <a href="/pizzas"><- back to list</a>
                <form action="/pizzas/{{$pizza->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Complete order</button>
                </form>
            </div>
</div>
@endsection
