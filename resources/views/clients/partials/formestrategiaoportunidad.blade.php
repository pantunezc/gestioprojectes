<div class="row">
  <div class="col-md-8"><h2>Año: </h2></div>
  <div class="col-md-4"><h2>Cliente: </h2></div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">    
        {{ Form::label('fechaA','Fecha Alta') }}
        {{Form::date('fechaA', \Carbon\Carbon::now())}}
    </div>    
</div>

<div class="form-row">
    <div class="form-group col-md-8">    
        {{ Form::label('fechaC','Fecha Prevista Cierre') }}
        {{Form::date('fechaC', \Carbon\Carbon::now())}}
    </div>    
</div>

<div class="form-row">
    <div class="form-group col-md-6">    
        {{ Form::label('posibilidad','Posibilidad %') }}
        {!! Form::number('posibilidad', '0.00', ['min' => '0.00', 'max' => 100, 'class' => 'text-center form-control']) !!}
    </div>
    <div class="form-group col-md-6">    
        {{ Form::label('importe','Importe €') }}
        {!! Form::number('importe', '0.00', ['min' => '0.00',  'class' => 'text-center form-control']) !!}
    </div>    
</div>

<div class="form-row">
<div class="form-group col-md-8">    
        {{ Form::label('descripcion','Descripción') }}
        {{ Form::textarea ('descripcion',null,['class' =>'form-control','rows' => 4])}}
    </div>   
</div>

<div class="form-group">
    {{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
    <a href="{{ route('clients.index')}}" class="btn btn-danger">Cancelar</a>
</div>


