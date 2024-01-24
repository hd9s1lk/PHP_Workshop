@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        {{ html()->form('POST', url('/article'))->open() }}
            @include('article._frm')
        {{ html()->form()->close() }}
    </div>
@endsection
