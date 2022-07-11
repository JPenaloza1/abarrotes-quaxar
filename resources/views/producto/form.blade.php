<h1> Abarrotes Quaxar </h1>
<br>
<h3> {{$modo}} producto </h3>

@if( count($errors)>0 )
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button class="btn-close" data-bs-dismiss="alert"></button>
        <ul>
        @foreach( $errors->all() as $error )
            <li> {{ $error }} </li>
        @endforeach
        </ul>
    </div>
@endif

<div class="Form-group">
    <label for="Producto"> Producto </label>
    <input type="text" class="form-control" name="Producto" value="{{ isset($producto->producto)? $producto->producto:'' }}" id="Producto" >
</div>

<div class="Form-group">
    <label for="Caducidad"> Fecha de caducidad </label>
    <input type="date"  class="form-control" name="Caducidad" value="{{ isset($producto->caducidad)? $producto->caducidad:'' }}" id="Caducidad" >
</div>

<div class="Form-group">
    <label for="Cantidad"> Cantidad </label>
    <input type="number" class="form-control" name="Cantidad" value="{{ isset($producto->cantidad)? $producto->cantidad:'' }}" id="Cantidad" >
</div>

<div class="Form-group">
    <label for="Precio"> Precio </label>
    <input type="number" class="form-control" step="0.01" name="Precio" value="{{ isset($producto->precio)? $producto->precio: '' }}" id="Precio" >
    <br>
</div>


<input class="btn btn-success" type="submit" value="{{$modo}} producto" >
<a class="btn btn-primary" href="{{ url('productos')}}"> Productos </a>

@if( $modo == 'Actualizar' )
    <a class="btn btn-secondary" href="{{ url('productos/create')}}"> Nuevo </a>
@endif
