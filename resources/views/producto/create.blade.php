@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/productos') }}" method="post" >
        @csrf
        @include('producto.form' , [ 'modo' => 'Añadir' ])
    </form>
</div>
@endsection