<div class="card">
    <div class="card-header">
        <input wire:model="search" name="search" class="form-control" placeholder="Ingrese el Nombre del post" />
    </div>
    <div class="card-body">
        
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th colspan="2"></th>
            </thead>
            <tbody>
                @foreach ($posts as $post )
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td  width="10px">
                            <a class="btn btn-primary " href="{{route('adminlte3.posts.edit',$post)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('adminlte3.posts.destroy',$post)}}" method="POST">
                            
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="card-footer">
        {{$posts->links()}}
    </div>
</div>
