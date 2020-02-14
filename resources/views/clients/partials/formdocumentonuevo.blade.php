<div class="form-group">
        {{ Form::label('tipo','Tipo: ') }}
        {{Form::select('tipo', ['presentaciones'=>'Presentaciones','contratos'=>'Contratos','propuestas'=>'Propuestas'],null,['placeholder'=> '(No especificado)'])}}     
</div>

<div class="form-row">
<div class="form-group col-md-8">    
        {{ Form::label('nombre','Nombre') }}
        {{ Form::text('nombre',null,['class' =>'form-control','rows' => 4])}}
    </div>   
</div>

<div class="form-row">
    <div class="form-group col-md-8">    
        {{ Form::label('fechaV','Fecha Vencimiento') }}
        {{Form::date('fechaV', \Carbon\Carbon::now())}}
    </div>    
</div>

<div class="form-row">
    <div class="form-group text-center col-md-12">    
        <h1>Visibilidad</h1>
        {!! Form::label('cliente', 'Cliente') !!}
        {{Form::checkbox('visibilidad[]', 'cliente')}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        {!! Form::label('proveedor', 'Proveedor') !!}
        {{Form::checkbox('visibilidad[]', 'proveedor')}}
    </div>    
</div>

<div class="form-row">
    <div class="form-group text-center col-md-12">    
        <h1>Seleccionar Archivos:</h1>
        {{Form::file('image')}}
    </div>    
</div>



<div class="form-group">
    {{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
    <a href="{{ route('clients.index')}}" class="btn btn-danger">Cancelar</a>
</div>
