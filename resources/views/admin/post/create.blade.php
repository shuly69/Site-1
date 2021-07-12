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
                                <h3 class="card-title">Добавление Поста</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Название</label>
                                        <input type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror" id="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Короткое описание</label>
                                        <textarea class="form-control @error('title') is-invalid @enderror" id="description"
                                            name="description" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Цена</label>
                                        <input type="text" name="price"
                                            class="form-control @error('price') is-invalid @enderror" id="price">
                                    </div>

                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Категории</label>
                                                    <select class="form-control select2" name="category_id" style="width: 100%;">
                                                        @foreach ($categories as $k => $v)
                                                        <option value="{{ $k }}">{{ $v }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->



                                        <div class="form-group">
                                            <label for="exampleInputFile">Изображение</label>
                                            <div class="input-group">
                                              <div class="custom-file">
                                                <input type="file" name="thumbnail" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Выбрать фото</label>
                                              </div>
                                            </div>
                                          </div>


                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary m-0">Добавить Пост</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>


    <!-- /.card -->
@endsection
