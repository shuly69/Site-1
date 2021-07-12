@extends('admin.layout.layout')

@section('content')

    <!-- Content Header (Page header) -->
      <div class="container-fluid">
        <div class="row mb-2">
    <div class="col-12">
      <div class="card">
          <div class="col-3"><a class="card-title m-3 btn btn-primary" href="{{ route('category.create') }}">Добавить категорию</a></div>

        <div class="card-header">
          <h3 class="card-title ml-1">Список категорий</h3>

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
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <a href="{{ route('category.edit', ['category' => $category->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                            <i class="fas fa-pencil-alt"></i>
                        </a>

                        <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="post" class="float-left">
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
          {{ $categories->links() }}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
    </div>

  <!-- /.row -->
@endsection
