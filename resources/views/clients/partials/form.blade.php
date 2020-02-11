<div class="form-group">
    {{ Form::label('nombre','Nombre') }}
    {{ Form::text ('nombre',null,['class' =>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('calle','Direccion') }}
    {{ Form::text ('calle',null,['class' =>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('poblacion','Población') }}
    {{ Form::text ('poblacion',null,['class' =>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('mail','Email') }}
    {{ Form::text ('mail',null,['class' =>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('comercial_id','Comercial') }}
    {{Form::select('comercial_id',$comercials, null,['placeholder'=>'Seleccionar un Comercial'])}}
</div>
<div class="form-group">
    {{ Form::label('grupo','Grupo') }}
    {{ Form::text ('grupo',null,['class' =>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('empresa_id','Empresa') }}
    {{Form::select('empresa_id',$empresas, null, ['placeholder'=>'Seleccionar una Empresa'])}}
</div>

<div class="form-group">
    {{ Form::submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>


