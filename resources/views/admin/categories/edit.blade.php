@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Editar Categoria</h1>
@endsection

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($category,['route' => ['admin.categories.update', $category],'method'=> 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el nombre de la categoria',
                    'id' => 'name',
                    'maxlength' => 100
                ]) !!}

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('Slug', 'Slug') !!}
                {!! Form::text('slug', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el nombre del slug',
                    'id' => 'slug',
                    'readonly',
                ]) !!}
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {!! Form::submit('Actualizar Categoria', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop



@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection
