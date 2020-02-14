<div class="row">
  <div class="col-md-4"><h2>Cliente: </h2></div>
</div>

<div class="form-group">
        {{ Form::label('año','Año: ') }}
        {{Form::select('año', ['2019'=>'2019','2020'=>'2020','2021'=>'2021'])}}     
        {{ Form::label('usuario','Usuario: ') }}
        {{Form::select('usuario', ['2019'=>'2019','2020'=>'2020','2021'=>'2021'])}}
</div>

<div class="form-group">
        {{ Form::label('producto','Producto: ') }}
        {{Form::select('producto', ['2019'=>'2019','2020'=>'2020','2021'=>'2021'])}}     
        
</div>


<div class="form-row">
    <div class="form-group col-md-6">    
        {{ Form::label('horas','Horas: ') }}
        {{ Form::text ('horas','h',['class' =>'form-control text-center'])}}
    </div>
    <div class="form-group col-md-6">    
        {{ Form::label('precio','Precio/h: ') }}
        {{ Form::text ('precio','€/h',['class' =>'form-control text-center'])}}
    </div>    
</div>

<div class="form-row">
<div class="form-group col-md-8">    
        {{ Form::label('observaciones','Observaciones:') }}
        {{ Form::textarea ('observaciones',null,['class' =>'form-control','rows' => 4])}}
    </div>   
</div>

<div class="form-group">
    {{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
    <a href="{{ route('clients.index')}}" class="btn btn-danger">Cancelar</a>
</div>