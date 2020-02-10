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
    {{ Form::label('comercial','Comercial') }}
    {{ Form::text ('comercial',null,['class' =>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('grupo','Grupo') }}
    {{ Form::text ('grupo',null,['class' =>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('empresa','Empresa') }}
    {{ Form::text ('empresa',null,['class' =>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>
