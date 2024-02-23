<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del rol']) !!}
</div>

@error('name')
<strong class="text-danger">{{$message}}</strong>
    
@enderror

<h2 class="h3"> Lista de permisos</h2>
@foreach ($permissions as $permission)
    <div>
        <label>
            {!! Form::checkbox('permission[]', $permission->id, null,  ['class'=> 'mr-1']) !!}
            {{$permission->description}}
        </label>
    </div> 
@endforeach