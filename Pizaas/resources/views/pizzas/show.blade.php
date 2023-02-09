@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <div>
        <h1>Order for {{ $pizza->name }}</h1>
        <p>Type - {{ $pizza->type }}</p>
        <p>Type - {{ $pizza->base }}</p>
        <p>Extra Toppings: </p>
        <ul>
            @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>

            @endforeach
        </ul>
        <form action="/pizzas/{{$pizza->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete order</button>
        </form>
    </div>
    <a href="/pizzas">Back to All Pizza</a>

</div>
@endsection