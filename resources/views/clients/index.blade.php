@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <h3>Clients
                        <a href="{{ route('clients.create')}}"
                        class="btn btn-success float-right">
                            Crear
                        </a>
                    </h3>


                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th >Calle</th>
                                <th>Poblacion</th>
                                <th>E-mail</th>
                                <th>Grupo</th>
                                <th>Empresa</th>
                                <th>Comercial</th>
                            </tr>
                        </thead>
                        <tbody >
                        @foreach($clients as $client)
                                <tr class="table-tr" data-url="{{ route('clients.edit', $client->id) }}">
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->nombre }}</td>
                                    <td>{{ $client->calle }}</td>
                                    <td>{{ $client->poblacion }}</td>
                                    <td>{{ $client->mail }}</td>
                                    <td>{{ $client->grupo }}</td>
                                    <td>{{ $client->empresa_id }}</td>
                                    <td>{{ $client->comercial_id }}</td>
                                    <td  width="10px">
                                        {!!Form::open(['route' =>['clients.destroy', $client->id],
                                        'method'=> 'DELETE'])!!}
                                            <button class="btn btn-sm btn-danger">Eliminar</button>
                                        {!!Form::close()!!}
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
  $(function() {
  $('table').on("click", "tr.table-tr", function() {
    window.location = $(this).data("url");
  });
});
</script>