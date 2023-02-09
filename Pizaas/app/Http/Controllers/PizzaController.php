<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

  public function index() {
    // get data from a database
    $pizzas = Pizza::all();
    // $pizzas = Pizza::orderBy('name','desc')->get();
    // $pizzas = Pizza::where('type','volcano')->get();
    // $pizzas = Pizza::latest()->get();


    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {
    // use the $id variable to query the db for a record
    $pizzas = Pizza::findorFail($id);
    return view('pizzas.show', ['pizza' => $pizzas]);
  }

  public function create() {
    // use the $id variable to query the db for a record
    return view('pizzas.create');
  }

  public function store() {
    // use the $id variable to query the db for a record
    // error_log(request('name'));
    // error_log(request('type'));
    // error_log(request('base'));
    
    $pizza = new Pizza();

    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');
    $pizza->toppings = request('toppings');


    $pizza->save();
    // return request('toppings');

    return redirect('/')->with('mssg','Thank you for your order! Have a nice Day');
  }

  public function destroy($id) {
    // use the $id variable to query the db for a record
    $pizzas = Pizza::findorFail($id);
    $pizzas->delete();
    return redirect('/pizzas');
  }
}