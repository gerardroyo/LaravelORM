@extends('master')
@section('pageTitle', 'Pàgina Index')

@section('header')

@endsection
  
@section('content')
  <a href="/coche/create"><button type="button" class="btn btn-primary">Crear</button></a>
    @foreach($coches as $coche)
        <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Fabricante</th>
                <th>Modelo</th>
                <th>Producido en</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $coche->make }}</td>
                <td>{{ $coche->model }}</td></td>
                <td>{{ $coche->produced_on }}</td>
                <td><a href="/coche/{{ $coche->id }}/edit"><button type="button" class="btn btn-primary">Editar</button></a>
                    <form method="post" action="/coche/{{ $coche->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form></td>
            </tr>
            <tr>
                <td>{{ $coche->make }}</td>
                <td>{{ $coche->model }}</td></td>
                <td>{{ $coche->produced_on }}</td>
                <td><a href="/coche/{{ $coche->id }}/edit"><button type="button" class="btn btn-primary">Editar</button></a>
                    <form method="post" action="/coche/{{ $coche->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form></td>
            </tr>
            <tr>
                
            </tr>
            </tbody>
        </table>
        </div>

    @endforeach


    
@endsection

@section('footer')

@endsection