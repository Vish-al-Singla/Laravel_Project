@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <div>
        <h1>Order for {{ $pizza->name }}</h1>
        <p>Type - {{ $pizza->type }}</p>
        <p>Type - {{ $pizza->base }}</p>
    </div>
    <a href="/pizzas">Back to All Pizza</a>
</div>
@endsection