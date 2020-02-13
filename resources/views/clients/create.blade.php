@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Nuevo Cliente </div>
                <div class="card-body">
                {{ Form::open(['route' => 'clients.store']) }}

                    @include('clients.partials.form')

                {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
