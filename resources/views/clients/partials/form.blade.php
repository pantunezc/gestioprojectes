<div class="form-group">   
    {{ Form::label('empresa_id','Empresa') }}
    {{Form::select('empresa_id',$empresas, null, ['placeholder'=>'Seleccionar una Empresa'])}}
    {{ Form::label('comercial_id','Comercial') }}
    {{Form::select('comercial_id',$comercials, null,['placeholder'=>'Seleccionar un Comercial'])}}
</div>
<div class="form-row">
    <div class="form-group col-md-5">
    {{ Form::label('nombre','Nombre') }}
    {{ Form::text ('nombre',null,['class' =>'form-control'])}}
    </div>

    <div class="form-group col-md-3">    
        {{ Form::label('cif','Cif') }}
        {{ Form::text ('cif',null,['class' =>'form-control'])}}
    </div>
    <div class="form-group col-md-4">    
        {{ Form::label('sector','Sector') }}
        {{ Form::text ('sector',null,['class' =>'form-control'])}}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-8">
    {{ Form::label('cp','CP') }}
    {{ Form::text ('cp',null,['class' =>'form-control'])}}
    </div>

    <div class="form-group col-md-4">    
        {{ Form::label('cif','Cif') }}
        {{ Form::text ('cif',null,['class' =>'form-control'])}}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('poblacion','Población') }}
        {{ Form::text ('poblacion',null,['class' =>'form-control'])}}
    </div>

    <div class="form-group col-md-6">    
        {{ Form::label('provincia','Provincia') }}
        {{ Form::text ('provincia',null,['class' =>'form-control'])}}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {{ Form::label('telefono','Teléfono') }}
        {{ Form::text ('telefono',null,['class' =>'form-control'])}}
    </div>

    <div class="form-group col-md-8">    
        {{ Form::label('mail','Email') }}
        {{ Form::text ('mail',null,['class' =>'form-control'])}}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {{ Form::label('cContable','C. Contable') }}
        {{ Form::text ('c.Contable',null,['class' =>'form-control'])}}
    </div>

    <div class="form-group col-md-8">    
        {{ Form::label('personaCont','Persona Contable') }}
        {{ Form::text ('personaCont',null,['class' =>'form-control'])}}
    </div>
</div>
<div class="form-group">
    {{ Form::label('canal_id','Subcanal de Venda') }}
    {{Form::select('canal_id',$empresas, null, ['placeholder'=>'Seleccionar Subcanal de Venda'])}}
</div>

<div class="form-row">
    <div class="form-group col-md-6">    
        {{ Form::label('observacions','Observacions') }}
        {{Form::textarea('observacions', null, ['class' =>'form-control'])}}
    </div>
    <div class="form-group col-md-6">    
        {{ Form::label('objectius','Objectius') }}
        {{Form::textarea('objectius', null, ['class' =>'form-control'])}}
    </div>
</div>

<div class="form-group">
    {{ Form::submit('Guardar',['class'=>'btn btn-primary']) }}
    <a href="{{ route('clients.index')}}" class="btn btn-danger">Cancelar</a>
</div>


