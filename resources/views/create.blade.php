@extends('layout.layout')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Order a pizza
            </div>

            <div>
                <form method="POST" action="/pizzas">
                    @csrf
                    <label for="name">Your name:</label>
                    <input type="text" id="name", name="name">
                    <br>
                    <br>
                    <label for="type">Choose pizza type:</label>
                    <select name="type" id="type">
                        <option value="margarita">Margarita</option>
                        <option value="hawaiin">Hawaiin</option>
                        <option value="volcano">Volcano</option>
                    </select>
                    <br>
                    <br>
                    <label for="type">Choose base type:</label>
                    <select name="base" id="base">
                        <option value="cheesy crust">Cheesy Crush</option>
                        <option value="garlic crust">Garlic Crust</option>
                        <option value="thick">Thick</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="Order Pizza">
                </form>
            </div>
        </div>
    </div>
@endsection
