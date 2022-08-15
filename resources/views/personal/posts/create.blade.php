@extends('admin.layouts.app')
@section('content')
    @include('admin.include.header')
    @include('admin.include.asside')


    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Добавление поста</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Добавление поста</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-100">
                                <label for="exampleInputEmail1">Введите название поста</label>
                                <input type="text" class="form-control" name="title"
                                       placeholder="Введите название поста" value="{{old('title')}}">
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Введите контент</label>
                                <textarea type="text" class="form-control" id="summernote"
                                          name="content">{{old('content')}}</textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label">Добавить превью изображение</label>
                                        <input type="file" class="custom-file-input" name="preview_image">
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label">Добавить главное изображение</label>
                                        <input type="file" class="custom-file-input" name="main_image">
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Select</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"{{ $category->id == old('category_id') ? 'selected' :'' }} >{{$category->title}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Теги</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                                    @foreach($tags as $tag)
                                    <option {{ is_array( old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }} value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('tag_ids[]')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    @include('admin.layouts.footer')



    <!-- /.control-sidebar -->
    </div>
@endsection
