@extends('master')
@section('pageTitle', 'Pàgina Index')
  
@section('content')
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

<div class="container bg-light shadow-lg p-3 mb-5 bg-white rounded">
<div>
  <form action="/coche/{{ $coche->id }}" method="post">
  @csrf
  @method('PATCH')
    <div class="form-group">
      <label for="webid">Fabricante</label>
      <input type="text" class="form-control" value="{{ $coche->make }}" id="make" name="make">
    </div>
    <div class="form-group">
      <label for="webUrl">Modelo</label>
      <input type="text" class="form-control" value="{{ $coche->model }}" id="model"name="model">
    </div>
    <div class="form-group">
      <label for="webName">Producido en</label>
      <input type="date" class="form-control" value="{{ $coche->produced_on }}" id="produced_on"name="produced_on">
    </div>
    <button type="submit" class="btn btn-primary">Editar</button>
  </form>
</div>
</div>

@endsection

@section('footer')

@endsection