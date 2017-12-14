@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mon profil</div>

                <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif


                  <form method="GET" action="{{ route('form.info') }}">
                    <div class="form-group">
                          <label>Nom</label>
                          <input type="text" class="form-control" name="name" placeholder="Nom">
                        </div>

                        <div class="form-group">
                          <label>Tribu</label>
                          <input type="text" class="form-control" name="tribu" id="exampleInputPassword1" placeholder="ex: Tic et Tac">
                        </div>

                        <div class="form-group">
                          <label>Race</label>
                          <input type="text" class="form-control" name="race" id="exampleInputPassword1" placeholder="ex: fourmis">
                        </div>

                        <div class="form-group">
                          <label>Date de naissance</label>
                          <input type="text" class="form-control" name="age" id="exampleInputPassword1" placeholder="ex: 12/12/2017">
                        </div>

                        <div class="form-group">
                          <label>Nourriture</label>
                          <select class="form-control" name="nourriture">
                            <option value="Pucerons">Pucerons</option>
                            <option value="Plante">Plante</option>
                            <option value="Herbe">Herbe</option>
                            <option value="Maïs">Maïs</option>
                            <option value="Moucherons">Moucherons</option>
                          </select>
                        </div>

                      <button type="submit" class="btn btn-default">Valider</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
