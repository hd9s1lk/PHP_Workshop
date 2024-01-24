@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        @include('article._list')
        <!-- Botao de voltar-->
        <div class="form-group">
            <a href="{!!URL::to('/') !!}" class="btn btn-primary" role="button">Voltar</a>
        </div>
    </div>
@endsection
