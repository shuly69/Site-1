@extends('admin.layout.layout')

@section('content')

    <!-- Main content -->

        <section class="content ">
        <div class="container-fluid">
          <div class="row ">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card mt-5">
                <div class="card-header">
                  <h3 class="card-title">Добавление категории</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputTitle">Название категории</label>
                      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputTitle">
                    </div>


                      </div>
                    </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Добавить категорию</button>
                  </div>
                </form>
              </div>
              </div>
              </div>
            </section>


              <!-- /.card -->
@endsection
