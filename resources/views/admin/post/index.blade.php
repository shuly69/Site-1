@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
      <div class="container-fluid">
        <div class="row mb-2">
    <div class="col-12">
      <div class="card">
          <div class="col-3"><a class="card-title m-3 btn btn-primary" href="{{ route('posts.create') }}">Добавить Пост</a></div>

        <div class="card-header">
          <h3 class="card-title ml-1">Список постов</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Category_id</th>
                <th>Price</th>
                <th>Created_at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post-> id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td>$ {{ $post->price }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                            <i class="fas fa-pencil-alt"></i>
                        </a>

                        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post" class="float-left">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Подтвердите удаление')">
                                <i
                                    class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          {{ $posts->links() }}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
    </div>
  
  <!-- /.row -->
@endsection
