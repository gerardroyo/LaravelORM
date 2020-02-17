@extends('master')
@section('pageTitle', 'Pàgina Index')
  
@section('content')
<body>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

  <div class="container bg-light shadow-lg p-3 mb-5 bg-white rounded">
  <div>
  <form action="/coche" method="post">
  @csrf
    <div class="form-group">
      <label for="webid">Fabricante</label>
      <input type="text" class="form-control" id="make" name="make">
    </div>
    <div class="form-group">
      <label for="webUrl">Modelo</label>
      <input type="text" class="form-control" id="model"name="model">
    </div>
    <div class="form-group">
      <label for="webName">Producido en</label>
      <input type="date" class="form-control" id="produced_on"name="produced_on">
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
  </form>
  </div>
  </div>
</body>
@endsection

@section('footer')

@endsection