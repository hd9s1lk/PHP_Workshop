<div class="panel panel-primary">
    <div class="panel-body">
        <div class="form-group" style="text-align: left;">
            {{ html()->label('descrição: ','description') }}
            {{ html()->text('description') }}
        </div>
        <div class="form-group">
            {{ html()->submit('OK')->class('btn btn-success frm-control') }}
            <a href="{{url("/")}}" class="btn btn-primary" role="button">Cancelar</a>
        </div>
    </div>
</div>
@include('article._error')
