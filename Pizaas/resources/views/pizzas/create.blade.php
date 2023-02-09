@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="wrapper create-pizza">
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your name: </label>
            <input type="text" name="name" id="name"> 
            <label for="type">Choose pizza type: </label>
            <select name="type" id="type"> 
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="volcano">Volcano</option>
                <option value="veg supreme">Veg Supreme</option>
            </select>
            <label for="base">Choose pizza base: </label>
            <select name="base" id="base"> 
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="thin crust">Thin Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thick">Thick</option>
            </select>
            <fieldset>
                <label >Extra Toppings: </label>
                <input type="checkbox" name="toppings[]" values="mushrooms">Muhrooms <br/>
                <input type="checkbox" name="toppings[]" values="peppers">Peppers <br />
                <input type="checkbox" name="toppings[]" values="garlic">Garlic <br>
                <input type="checkbox" name="toppings[]" values="olives"> Olives <br>
            </fieldset>
            <input type="submit" value="Order Pizza">
        </form>
    </div>
</div>
@endsection