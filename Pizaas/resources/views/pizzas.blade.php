@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        @foreach($pizzas as $pizza)
          <div>
            {{ $loop->index }} - {{ $pizza->type }} - {{ $pizza->base }}  - {{ $pizza->name }}
          </div>
        @endforeach

    </div>
</div>
@endsection