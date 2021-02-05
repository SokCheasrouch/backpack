<?php

namespace App\Http\Controllers;

use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
        $pizzas = Pizza::all();
        $pizza = [
            ['type' => 'hawaiin', 'base' => 'cheese','price' => 10]
        ];
        $name = request('name');
        return view('pizzas', ['pizza' => $pizza, 'name' => $name, 'pizzas'=>$pizzas]);
    }

    public function showSingleDetail($id) {
        $pizza = Pizza::findOrFail($id);
        return view('detail', ['id' => $id, 'pizza'=>$pizza]);
    }

    public function createNewPizza() {
        return view("create");
    }

    public function destroyPizza($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect("/pizzas");
    }

    public function orderPizza() {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->save();
        return redirect('/')->with("msg", "Thanks for your order.");
    }
}
