<div class="card">
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    {{ $search }}
    <div class="card-header">
        <input wire:model.debounce.100ms="search" class="form-control" placeholder="Ingrese el nombre de un post"
            type="text">

    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $post) }}">Editar</a>

                        </td>
                        <td witdh="10px">
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $posts->links() }}
    </div>
    <div class="form-group">
        {!! Form::label('extract', 'Extracto:') !!}
        {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
        @error('extract')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        {!! Form::label('body', 'Cuerpo del post:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        @error('body')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
