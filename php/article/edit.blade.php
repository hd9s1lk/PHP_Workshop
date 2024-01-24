@extends('layouts.app')
@section('content')
<div class="jumbotron">
    {{ html()->modelForm($rs,'PATCH', url('/article').'/'.$rs->id)->open() }}
        <div class="form-group" style="text-align: left;">
            {{ html()->label('id: ','id') }}
            {{ html()->text('id')->isReadonly() }}
        </div>
        @include('article._frm')
    {{ html()->closeModelForm() }}
</div>
@endsection

