<!-- Bootstrap -->
<!--
Ver mais em:
https://getbootstrap.com/docs/4.3/getting-started/download/
-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Fonts fontawesome-->
<!--
Ver mais em:
https://fontawesome.bootstrapcheatsheets.com/
-->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!------------------------------------------------------------------------------>
<!-- LISTAGEM -->

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Descrição</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rs as $r)
            <tr>
                <th scope="row">{{ $r->id }}</th>
                <td>{{ $r->description }}</td>
                <td style="vertical-align:middle;">
                    <a href="{{url('/') }}/article/{{ $r->id }}/edit" class="btn btn-xs btn-primary" role="button">
                        <i class="fa fa-pencil-square-o"></i>
                    </a>
                </td>
                <td>
                    {{ html()->form('DELETE', url('/article').'/'.$r->id)->id('deleteform')->open() }}
                    <button type="submit" class="btn btn-xs btn-danger" id="deletebutton">
                        <i class="fa fa-trash-o"></i>
                    </button>
                   {{ html()->form()->close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

<!-- FIM DA LISTAGEM -->
<!-- Bootstrap js -->
