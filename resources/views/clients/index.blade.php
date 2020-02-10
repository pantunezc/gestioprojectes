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
                                <th>Comercial</th>
                                <th>Grupo</th>
                                <th>Empresa</th>
                            </tr>
                        </thead>
                        <tbody >
                        @foreach($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->nombre }}</td>
                                    <td>{{ $client->calle }}</td>
                                    <td>{{ $client->poblacion }}</td>
                                    <td>{{ $client->mail }}</td>
                                    <td>{{ $client->comercial }}</td>
                                    <td>{{ $client->grupo }}</td>
                                    <td>{{ $client->empresa }}</td>

                                    <td>
                                        <a href="#"
                                        class="btn btn-sm btn-outline-secondary">Editar</a>
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
