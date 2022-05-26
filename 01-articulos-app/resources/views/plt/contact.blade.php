@extends ('layouts.app')



@section ('titulo', 'Contacta con nosotros')

@section ('contenido')

<div class="row">
  <div class="col-6">
    <form >

      <div class="card p-4">

        <div class="form-group">
          <label for="exampleInputEmail1">Email </label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu email con nadie.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
      
      </div>

      <div class="text-center">
          <br>
        <button type="submit" class="btn btn-warning">Enviar</button>
      </div>
    
    </form>
  </div>
</div>
@endsection
