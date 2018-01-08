@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="panel panel-default row">
                <div class="panel panel-default col-md-6">
                    <h3>Parcourir tous les insectes!</h3>

                    {{  }}

                </div>
                <div class="panel panel-default col-md-6">
                    <h3>Vos amis</h3>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
