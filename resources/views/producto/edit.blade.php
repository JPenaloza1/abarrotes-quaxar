@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/productos/'.$producto->id) }}" method="post" >
        @csrf
        {{ method_field('PATCH') }}

        @include('producto.form' , [ 'modo' => 'Actualizar' ])

    </form>
</div>
@endsection