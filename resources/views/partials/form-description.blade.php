@extends('home')

@section('form')
  <form method="POST">

  <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" placeholder="Nom">
      </div>

      <div class="form-group">
        <label>Tribu</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ex: Tic et Tac">
      </div>

      <div class="form-group">
        <label>Race</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ex: fourmis">
      </div>
      
      <div class="form-group">
        <label>Date de naissance</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ex: 12/12/2017">
      </div>
  
      <div class="form-group">
        <label>Nourriture</label>
        <select class="form-control">
          <option>Pucerons</option>
          <option>Plante</option>
          <option>Herbe</option>
          <option>Maïs</option>
          <option>Moucherons</option>
        </select>
      </div>

    <button type="submit" class="btn btn-default">Valider</button>
  </form>
@endsection