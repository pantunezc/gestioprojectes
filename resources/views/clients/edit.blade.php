@extends('layouts.app')
@section('info')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Cliente </div>
                <div class="card-body">
                    {!!Form::model($client,['route'=>['clients.update',$client->id],
                    'method'=> 'PUT']) !!}

                        @include('clients.partials.form')

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection