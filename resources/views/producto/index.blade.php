@extends('layouts.app')

@section('content')
<div class="container">

    <h1> Abarrotes Quaxar </h1>
    <br>
    <h3> Productos </h3>

    @if(Session::has('mensaje'))
        <div class="container mt-3">
            <div class="alert alert-success alert-dismissible fade show">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                    {{ Session::get('mensaje') }}
            </div>
        </div>
    @endif

    <a href="{{ url('productos/create')}}" class="btn btn-success"> Registrar nuevo producto </a>
    <br><br>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th style="display:none;" >Id</th>
                <th> Producto  </th>
                <th> Caducidad </th>
                <th> Cantidad  </th>
                <th> Precio    </th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach( $productos as $producto )
            <tr>
                <td style="display:none;">{{ $producto->id }}</td>
                <td>{{ $producto->producto  }}</td>
                <td>{{ $producto->caducidad }}</td>
                <td>{{ $producto->cantidad  }}</td>
                <td>{{ $producto->precio    }}</td>
                <td>
                    <a href="{{ url('/productos/'.$producto->id.'/edit') }}" class="btn btn-warning"> Editar </a>
                    |
                    <form action="{{ url( '/productos/'.$producto->id ) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Desea eliminar el producto?')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection